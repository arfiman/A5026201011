<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    function showForm(){
        //code untuk meload data yang akan dimuat di form
        return view('showgreetings');
    }

    function resultGreetings(){
        //code untuk meload data yang akan dimuat di form
        return view('tugas');
    }
}
