<?php

use App\SiteContato;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /*  $contato = new SiteContato();
        $contato->nome = 'Sistema SG';
        $contato->telefone = '(19) 98989-9898)';
        $contato->email = 'suporte@sq.com.br';
        $contato->motivo_contato = 1;
        $contato->mensagem = 'Bem vindo ao sistema Super Gestão';
        $contato->save(); */

       factory(SiteContato::class,100)->create();
    }
}
