<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    // Contoh
    // function showForm(){
    //     //code untuk meload data yang akan dimuat di form
    //     return view('showgreetings');
    // }
    // function resultGreetings(){
    //     //code untuk meload data yang akan dimuat di form
    //     return view('tugas');
    // }

    // ETS
    function showETS(){
        return view('etshtml');
    }

    //Tugas PHP
    function showtugasPHP(){
        return view('tugasphp');
    }
    function generatefibo(){
        return view('fibonacci');
    }
}
