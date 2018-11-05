<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Musica;

class Estilo extends Model
{
    protected $table='estilos';


public function musicas(){
        return $this->belongsToMany('App\Musica', 'estilomusica', 
              'musica_id', 'estilo_id');
}


}
