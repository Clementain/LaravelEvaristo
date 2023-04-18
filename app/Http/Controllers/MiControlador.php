<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiControlador extends Controller
{
    public function vistaConNumeroAleatorio()
{
    $numeroAleatorio = rand(1, 10);
    return view('admin')->with('numero', $numeroAleatorio);
}

}
