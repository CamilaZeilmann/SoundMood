<?php

use Illuminate\Database\Seeder;
use App\Estilo;


class estilosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estilo::create([
        		'nome' => 'Indie'
        	]);

        Estilo::create([
        		'nome' => 'Rock'
        	]);

        Estilo::create([
        		'nome' => 'KPop'
        	]);

        Estilo::create([
        		'nome' => 'Pop'
        	]);
    }
}
