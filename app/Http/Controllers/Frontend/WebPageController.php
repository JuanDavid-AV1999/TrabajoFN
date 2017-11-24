<?php

namespace App\Http\Controllers\Frontend;

use App\models\TipoDocumento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Genero;

class WebPageController extends Controller
{
    public function index(){
        return view('index');
    }

    public function eventos(){
        return view('eventos');
    }
    public function cursos(){
        return view('cursos');
    }
    public function  programas(){
        return view('programas');
    }

    public function mostrarLoginForm(){
        return view('loguear');
    }
    public function __construct(){
        $this->middleware('guest',['only'=>'mostrarLoginForm']);
    }
    public function index2(){
        return view('index2');
    }
    public function programas2(){
        return view('programas2');
    }
    public function eventos2(){
        return view('eventos2');
    }
    public function cursos2(){
        return view('cursos2');
    }
    public function elementoseventos(){
        return view('elementoseventos');

    }
    public function index3(){
        return view('index3');
    }
    public function publicaciones(){
        return view('publicaciones');
    }
    public function elementoseventos2(){
        return view('elementoseventos2');
    }
    public function implementosdeportivos(){
        return view('implementosdeportivos');
    }
    public function registroelementoseventos(){
        return view('registroelementoseventos');
    }
    public function reservaelementoseventos(){
        return view('reservaelementoseventos');
    }
    public function alquilerelementos(){
        return view('alquilerelementos');
    }
    public function implementos(){
        return view('implementos');
    }
    public function reservaimplementosdeportivos(){
        return view('reservaimplementosdeportivos');
    }
    public function prestamoimplementosdeportivos(){
        return view('prestamoimplementosdeportivos');
    }
    public function registroeventos(){
        return view('registroeventos');
    }
    public function eventos3(){
        return view('eventos3');
    }
    public function cursos3(){
        return view('cursos3');
    }
    public function programas3(){
        return view('programas3');
    }
    public function registrocursos(){
        return view('registrocursos');
    }
    public function controlinscripcioncurso(){
        return view('controlinscripcioncurso');
    }
    public function asistenciacursos(){
        return view('asistenciacursos');
    }
    public function registroprogramas(){
        return view('registroprogramas');
    }
    public function inscripcionesprogramas(){
        return view('inscripcionesprogramas');
    }
}
