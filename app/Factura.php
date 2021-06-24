<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    //
    protected $table='invoice';
    protected $primaryKey='InvoiceId';
    public $timestamps=false;

    public function canciones(){
        return $this->belongsToMany('App\Cancion', 
                                    'invoiceline',
                                    'InvoiceId',
                                    'TrackId',
                                    );
    }
}
