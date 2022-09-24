<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;

class SettingsController extends Controller
{
    public function index()
    {
        return view('Admin.settings.index');
    }
    
    public function clearOptimize()
    {
        Artisan::call('optimize:clear');
        return redirect()->back();
    }

    public function clearCache()
    {
        Cache::flush();
        return redirect()->back();
    }
}
