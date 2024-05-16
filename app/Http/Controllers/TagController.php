<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class TagController extends Controller
{
    public function __invoke(): View
    {
        return view('tags.index');
    }
}
