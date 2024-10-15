<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Spatie\Sitemap\SitemapGenerator;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index()
    {
        $sitemap = SitemapGenerator::create(url('/'))->getSitemap();
        $sitemap->writeToFile('public/sitemap.xml');
        return 'Sitemap generated successfully';
    }

    public function sitemap()
    {
        $sitemapPath = public_path('sitemap.xml');
        if (file_exists($sitemapPath)) {
            $xmlContent = file_get_contents($sitemapPath);
            return response($xmlContent)->header('Content-Type', 'text/xml');
        }
    }

    public function search(Request $request)
    {
        $query = $request->input('q');
        dd($query);
        // Perform any necessary search operations based on the query
        // and retrieve the search results.
        // Return the results view with the search results data.
        return view('search.results', compact('query'));
        
    }
}
