<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;
use Stichoza\GoogleTranslate\GoogleTranslate;

function tt($text)
{   
    try {
        $tr = new GoogleTranslate();
        $newText =  $tr->setTarget(App::getLocale())->translate($text);
    } catch (\Throwable $th) {
        $newText = $text;
    }
    return $newText;
}

