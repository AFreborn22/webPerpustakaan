<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    public function changeLanguage(Request $request)
    {
        $request->validate([
            'language' => 'required|in:id,en',
        ]);

        App::setLocale($request->language);

        return redirect()->back();
    }

}
