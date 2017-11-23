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





}
