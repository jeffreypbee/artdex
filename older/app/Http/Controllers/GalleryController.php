<?php

namespace App\Http\Controllers;

use App\Models\Art;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('gallery');
    }
}
