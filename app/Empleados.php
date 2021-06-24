<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    //
    protected $table='employee';
    protected $primaryKey='EmployeeId';
    public $timestamps=false;

    public function clientes(){

        return $this->hasMany('App\Customer','SupportRepid');
    }

    public function facturas(){
        return $this->hasManyThrough('App\Factura',
                                     'App\Customer',
                                     'SupportRepId',//FK del abuelo en el papa
                                     'CustomerId',
                                     'EmployeeId',
                                     'CustomerId'
                                     );
    }
}
