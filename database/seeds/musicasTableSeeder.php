<?php

use Illuminate\Database\Seeder;
use App\Musica;


class musicasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Musica::create([
        		'banda'=>'Billie Eillish',
        		'nome'=> 'you should see me in a crown',
        		'duracao'=> '00:03:01'
        	]);
    }
}
