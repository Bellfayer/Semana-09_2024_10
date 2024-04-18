<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view("home");
        // return "Bienvenido mi pagina Principal ¡Saludos !" ;
    }
 




    //
    // public function __invoke($curso,$Nbre=null){   // para una sola pagina

    //     $lista=array    ("Angelo","Jesus Luis","Maribel Montalvo","Pancho",);
    //     $htlm="Lista alumnos <br/>";
    //     foreach($lista as $elem){
    //         $htlm.=$elem."<br>";
    //     }
    //     if($Nbre){
    //     return "Ya estamos en el curso de $curso, con el instructor $Nbre el listado de estudiantes: <br/>$htlm";
    //     }else{
    //         return "El curso de $curso, no se aperturo";
    //     }
    // }

}
// aa