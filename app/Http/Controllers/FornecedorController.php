<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0 => [
                'nome'=> 'Fornetec 1', 
                'status'=>'N', 
                'cnpj'=> '000.000.000/000-00',
                'ddd' => '11',
                'telefone' => '1234-4325'
            ],
            1 => [
                'nome'=> 'ForneCard 2', 
                'status'=>'N',
                'cnpj'=> '555.000.000/000-00',
                'ddd' => '85',
                'telefone' => '5678-4321'
            ],
            [
                'nome'=> 'ForneMove 3', 
                'status'=>'N',
                'cnpj'=> '111.110.001/010-01',
                'ddd' => '32',
                'telefone' => '8794-4321'
            ]
        ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
