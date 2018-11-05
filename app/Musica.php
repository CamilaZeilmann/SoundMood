<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Estilo;

class Musica extends Model
{
    protected $table='musicas';



    public function estilos(){
        return $this->belongsToMany('App\Estilo', 'estilomusica', 
              'musica_id', 'estilo_id');
}
}
