<?php

namespace App\Http\Controllers;

use App\MotivoContato;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal(){

        $motivo_c = MotivoContato::all();

       return view('site.principal',['motivo_c'=>$motivo_c]);
    }
}
