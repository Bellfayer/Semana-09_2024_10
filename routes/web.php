<?php

use App\Http\Controllers\CursosControlador;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\prototype;

Route::get('/', function () {
    ////return view('welcome');
    return"Bienvenido a mi pagina ¡SAludos!";

});
/////se usa para relacioanr las paginas
Route::get('/curso', function () {
    return '¡Saludos! Saludos aqui se desarrollara el curso';
});

//////// aqui en la variable de define en la url siguiendo esta ruta   
////////http://localhost/Proyecto_2/Rutas/public/curso/poner la variable que desees y lo imprimira en el return, l
///////////lo que ingresas a la url se definira como variable en $nombre y lo manejara o imprimira
Route::get('/curso/{Aplicacion_web_II}', function ($nombre) {
    return 'ya estamos en el curso de '.$nombre;
});

Route::get('/lista', function () {
    // Aquí puedes definir la lógica para obtener los elementos de tu lista
    $lista = ['Jose', 'Richar', 'Jesus','Jose Luis','Angelo','Maribel Montalvo','Diego'];

    // Luego, puedes pasar estos elementos a una vista para mostrarlos
    return view('lista', ['lista' => $lista]);
});

// Route::get('/list/{curso}/{nombre}', function ($curso,$Nbre) { 

//    

//     $lista=array    ("Angelo","Jesus Luis","Maribel Montalvo","Pancho",);
//     $htlm="Lista alumnos <br/>";
//     foreach($lista as $elem){
//         $htlm.=$elem."<br>";
//     }
//     return "Ya estamos en el curso de $curso, con el instructor $Nbre el listado de estudiantes: <br/>$htlm";
//    });


Route::get('/list/{curso}/{nombre?}', function ($curso,$Nbre=null) { 

    //  if ($Nbre==null) {
    //      return "No se aperturara el curso";}

    // $lista=array    ("Angelo","Jesus Luis","Maribel Montalvo","Pancho",);
    // $htlm="Lista alumnos <br/>";
    // foreach($lista as $elem){
    //     $htlm.=$elem."<br>";
    // }
    // if($Nbre){
    // return "Ya estamos en el curso de $curso, con el instructor $Nbre el listado de estudiantes: <br/>$htlm";
    // }else{
    //     return "El curso de $curso, no se aperturo";
    // }
});
Route::get('/',HomeController::class );
Route::controller(CursosControlador::class)->group(function(){
    Route::get('cursos','index' );
    Route::get('cursos/create','create');
    Route::get('cursos/{curso}/{profe?}','show' );
});


//esta parte del codigo se puede reemplazar
//en el codigo de arriba
// Route::get('cursos', [CursosControlador::class,'index' ]);
//     Route::get('cursos/create', [CursosControlador::class,'create']);
//     Route::get('cursos/{curso}/{profe?}', [CursosControlador::class,'show'] );














// Route::get('cursos',function() {
//     return 'Bienvenido a la pagina de cursos';
// });
// Route::get('cursos/create',function () {
//     return'Esta es mi pagina donde podras crear curso';
// });


//########codigo  par obsoleto
// Route::get('cursos/{curso}/{profe?}',function ($curso,$profe=null) {  ////pagian de visualizacion de los cursos
// if($profe) {
//     return'Bienvenido al curso '.$curso.'con el instructor'.$profe;
// } else {
//     return'EL '.$curso. 'no se apertura por falta de instructor';    
// }});
// Route::get('/list/{curso}/{nombre?}', [HomeController::class,'__invoke'], );
// Route::get('/cursos', [prototype::class,'__invoke'], );
