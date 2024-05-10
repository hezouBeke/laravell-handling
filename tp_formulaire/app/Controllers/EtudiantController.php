<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class  EtudiantController extends Controller {


    public function create(){
       
    }
    public function store(){
        return view('etudiants.store');
    }
   
    


    
}