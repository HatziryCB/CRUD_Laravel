<?php

namespace App\Http\Controllers;

use App\Models\Transporte;
use Illuminate\Http\Request;

class TransporteController extends Controller
{
    public function index(){
        //Pagina de inicio
        $datos = Transporte::all(); //Transporte=> Modelo
        return view('home', compact('datos'));//datos es un parametro que contiene todo lo de transporte
    }
    public function create(){
        //el formulario donde agregamos los datos
        return view('agregar');
    }
    public function store(Request $request){
        //Sirve para guardar datos en la base de datos
    }
    public function show(Transporte $transporte){
        //Servirá para obtener un registro de nuestra tabla
        return view('eliminar');
    }
    public function edit(Transporte $transporte){
        //Este metodo nos sirve para traer los datos que se vna a editar y
        //los coloca en un formulario.
        return view('actualizar');
    }
    public function update(Request $request, Transporte $transporte){
        //Este método actualiza los datos en la bd
    }
    public function destroy(Transporte $transporte){
        //Elimina un registro
    }
}
