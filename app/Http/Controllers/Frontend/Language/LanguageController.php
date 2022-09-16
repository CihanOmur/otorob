<?php

namespace App\Http\Controllers\Frontend\Language;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;

class LanguageController extends Controller
{
    public function changeLanguage($language)
    {
        App::setlocale($language);
        Cache::forever('locale_name', $language);
        return redirect(url()->previous());

    }
}
