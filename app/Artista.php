<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Artista extends Model
{
    //
    protected $table='artist';
    protected $primaryKey='ArtistId';
    public $timestamps=false;
    public function discos(){
        return $this-> hasMany('App\Disco', 'ArtistId');
    }
}