<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class IndexController extends Controller
{
    public function show() {
        $date = Carbon::parse('2002-10-04 00:00:00');
        $now = Carbon::now();

        $diff = $date->diffInYears($now);

        return view('welcome', [
            'age' => $diff
        ]);
    }
}
