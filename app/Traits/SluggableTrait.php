<?php

namespace App\Traits;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use URL;
use App\Traits\SettingsTrait;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;
use Transliterator;

trait SluggableTrait
{
    public static function generateSlug($title)
    {
        // $slug = strtolower($title);
        // $slug = preg_replace('/[^a-z0-9\s]/', ' ', $slug);
        // $slug = preg_replace('/\s+/', '-', $slug);
        // $slug = trim($slug, '-');

        // return $slug;

        $transliterator = Transliterator::create('Any-Latin; Latin-ASCII; NFD; [:Nonspacing Mark:] Remove; NFC');
        $slug = $transliterator->transliterate($title);
        $slug = strtolower($slug);
        $slug = preg_replace('/[^a-z0-9\s]/', ' ', $slug);
        $slug = preg_replace('/\s+/', '-', $slug);
        $slug = trim($slug, '-');

        return $slug;
    }
}
