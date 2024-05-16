<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class HotelController extends Controller
{
    public function __invoke(): View
    {
        return view('hotel');
    }
}
