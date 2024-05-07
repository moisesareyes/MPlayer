<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class artistaController extends Controller
{
    public function __invoke(){
        return view('artists');
    }}
