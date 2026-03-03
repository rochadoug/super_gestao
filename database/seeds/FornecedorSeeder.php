<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $f = new Fornecedor();
        $f->nome = 'Fornecedor1';
        $f->site = 'www.fornecedor1.com.br';
        $f->uf = 'SP';
        $f->email = 'contato@fornecedor1.com.br';
        $f->save();

        Fornecedor::create([
            'nome' => 'Forncedor2',
            'site' => 'www.forncedor2.com.br',
            'uf' => 'MG',
            'email' => 'contato@orncedor2.com.br'
        ]);

        DB::table('fornecedores')->insert([
            'nome' => 'Forncedor3',
            'site' => 'www.forncedor3.com.br',
            'uf' => 'MT',
            'email' => 'contato@orncedor3.com.br'
        ]);
    }
}
