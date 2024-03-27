<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //MOSTRAR VISTA de la pagina Resumen del proyecto
    public function summary(){
        return view('about.summary');
    }

    //MOSTRAR VISTA de la pagina Antecedentes
    public function background(){
        return view('about.background');
    }

    //MOSTRAR VISTA de la pagina Importancia
    public function importance(){
        return view('about.importance');
    }

    //MOSTRAR VISTA de la pagina Agradecimientos
    public function thanks(){
        return view('about.thanks');
    }

    //MOSTRAR VISTA de la pagina Equipo
    public function team(){
        return view('about.team');
    }
}
