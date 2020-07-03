<?php

use Illuminate\Database\Seeder;
use App\Model\Chamado;
class ChamadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Chamado::create([
            'nome_pai'=>'Elvis Tavares',
            'nome_aluno'=>'Livia Tavares',
            'turma'=>'12',
            'email'=>'elvis@escolasantamonica.com.br',
            'telefone'=>'984656176',
            'assunto'=>'Problema ao acessar a plataforma da escola'
        ]);
    }
}
