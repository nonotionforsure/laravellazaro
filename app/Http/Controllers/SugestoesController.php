<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SugestoesController extends Controller
{
    public function index()
    {
        return view("paginas/sugestoes");
    }
}
