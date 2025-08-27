<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate sitemap.xml for the website';

    public function handle()
    {
        $baseUrl = config('app.url');
        $sitemap = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

        // Static pages
        $pages = [
            '' => '1.0',
            '/tentang' => '0.8',
            '/skill' => '0.8',
            '/blog' => '0.7',
        ];

        foreach ($pages as $page => $priority) {
            $sitemap .= '  <url>' . "\n";
            $sitemap .= '    <loc>' . $baseUrl . $page . '</loc>' . "\n";
            $sitemap .= '    <lastmod>' . now()->format('Y-m-d') . '</lastmod>' . "\n";
            $sitemap .= '    <changefreq>weekly</changefreq>' . "\n";
            $sitemap .= '    <priority>' . $priority . '</priority>' . "\n";
            $sitemap .= '  </url>' . "\n";
        }

        $sitemap .= '</urlset>';

        File::put(public_path('sitemap.xml'), $sitemap);

        $this->info('Sitemap generated successfully!');
    }
}
