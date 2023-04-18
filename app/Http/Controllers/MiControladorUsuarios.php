<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiControladorUsuarios extends Controller
{
    public function uClientes()
    {
        $numeroAleatorio = rand(1, 10);
        return view('layout.clientes')->with('numero', $numeroAleatorio);
    }
    public function uCaballeros()
    {
        $numeroAleatorio = rand(1, 10);
        return view('layout.DptoCaballeros')->with('numero', $numeroAleatorio);
    }
    public function uDamas()
    {
        $numeroAleatorio = rand(1, 10);
        return view('layout.DptoDamas')->with('numero', $numeroAleatorio);
    }
    public function uNinas()
    {
        $numeroAleatorio = rand(1, 10);
        return view('layout.Ninas')->with('numero', $numeroAleatorio);
    }
    public function uNinos()
    {
        $numeroAleatorio = rand(1, 10);
        return view('layout.Ninos')->with('numero', $numeroAleatorio);
    }
    public function uProveedores()
    {
        $numeroAleatorio = rand(1, 10);
        return view('layout.proveedores')->with('numero', $numeroAleatorio);
    }
    public function uVentas()
    {
        $numeroAleatorio = rand(1, 10);
        return view('layout.ventas')->with('numero', $numeroAleatorio);
    }
}
