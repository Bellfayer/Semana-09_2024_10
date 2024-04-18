<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Prompts\Prompt;

class CursosControlador extends Controller
{
    //
    public function index(){
        return view("cursos.index");
        //return ("Aqui se desarrollara el curso");
    }
    public function create(){
        //return ("Aqui desarrollaras los cursos.........");
        return view("cursos.create");
    }
    public function show($curso,$profe=null){
        return view("cursos.show",['curso'=>$curso],['profe'=>$profe]);   //con esta aprte del codigo hacemos que se le atribuya el nombre de la variable al nombre de atributo html
    }
}