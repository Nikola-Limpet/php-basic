<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChirpController extends Controller
{
    //
    public function index()
    {
        $chrips = [
            [
                'author' => 'John Doe',
                'message' => 'Hello World!',
                'time' => '5 minutes ago'

            ],
            [
                'author' => 'Jane Doe',
                'message' => 'This is a chirp.',
                'time' => '10 minutes ago'
            ],
            [
                'author' => 'Bob Smith',
                'message' => 'Laravel is awesome!',
                'time' => '15 minutes ago'
            ]
        ];
    return view('home', ['chirps' => $chrips]);
    }
}
