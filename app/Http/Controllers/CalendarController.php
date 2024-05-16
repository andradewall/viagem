<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class CalendarController extends Controller
{
    public function __invoke(): View
    {
        return view('calendars');
    }
}
