<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WelcomeController extends Controller
{
    public function downloadCv()
    {
        $path = 'documents/MyCV.pdf';

        if (!Storage::exists($path)) {
            abort(404);
        }

        $fullPath = Storage::path($path);
        
        return response()->file($fullPath, [
            'Content-Type' => 'application/pdf',
        ]);
    }
}
