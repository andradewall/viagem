<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class DestinationController extends Controller
{
    public function __invoke(): View
    {
        return view('destinations');
    }
}
