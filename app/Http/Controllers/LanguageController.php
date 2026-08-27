<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    /**
     * Switch the application locale.
     */
    public function __invoke(Request $request, string $locale): RedirectResponse
    {
        if (in_array($locale, ['en', 'pt'])) {
            session(['locale' => $locale]);
        }

        return redirect()->back();
    }
}
