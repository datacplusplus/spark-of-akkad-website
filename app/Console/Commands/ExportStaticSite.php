<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;

class ExportStaticSite extends Command
{
    protected $signature = 'site:export {--out=build : Output directory}';

    protected $description = 'Render the public pages to static HTML (for GitHub Pages)';

    /** Route URI => output file */
    protected array $pages = [
        '/' => 'index.html',
        '/services' => 'services/index.html',
        '/about' => 'about/index.html',
        '/contact' => 'contact/index.html',
    ];

    public function handle(Kernel $kernel): int
    {
        $out = base_path($this->option('out'));
        File::deleteDirectory($out);
        File::ensureDirectoryExists($out);

        // Static mode: the contact form sends via WhatsApp instead of posting to the server.
        config(['site.static' => true]);
        URL::forceRootUrl(rtrim(config('app.url'), '/'));
        URL::forceScheme(parse_url(config('app.url'), PHP_URL_SCHEME) ?: 'https');

        foreach ($this->pages as $uri => $file) {
            $response = $kernel->handle(Request::create($uri));

            if ($response->getStatusCode() !== 200) {
                $this->error("{$uri} returned {$response->getStatusCode()}: ".($response->exception?->getMessage() ?? ""));

                return self::FAILURE;
            }

            File::ensureDirectoryExists(dirname("{$out}/{$file}"));
            File::put("{$out}/{$file}", $response->getContent());
            $this->line("  {$uri} → {$file}");
        }

        // Copy static assets (everything in public/ except the PHP entry point).
        foreach (File::allFiles(public_path()) as $asset) {
            if (in_array($asset->getFilename(), ['index.php', '.htaccess'])) {
                continue;
            }
            File::ensureDirectoryExists(dirname("{$out}/{$asset->getRelativePathname()}"));
            File::copy($asset->getPathname(), "{$out}/{$asset->getRelativePathname()}");
        }

        File::put("{$out}/.nojekyll", '');
        $this->info("Static site exported to {$out}");

        return self::SUCCESS;
    }
}
