<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index($name, $age){
    	if($age < 18){
    		return ucfirst($name) . '  no puedes ingresar al sitio';
    	}else{
    		return ucfirst($name) . '  puedes ingresar al sitio';
    	}




    	return 'Hola    ' . ucfirst($name);
    	//return view('student.profile');
    }
}
