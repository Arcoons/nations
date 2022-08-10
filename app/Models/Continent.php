<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    //tabla a conecetar
    protected $table = "continents";
    //la clave primaria de esa tabla
    protected $primaryKey = "continent_id";
    //omitir campos de auditiria 
    public $timestamps = false;
    use HasFactory;


    //relacion entre cotinente y sus regiones
    public function regiones(){
        //Parameters
        //1.Linked model
        //2. Foreign key of current model 
        //into relared model REGION
        return $this->hasMany(Region::class, 'continent_id');
    }
    //relacion entre continente y paises
    //Continent: Abuelo
    //Region:: Papà
    //Country::Nieto
    public function paises(){
        //Parameters
        //1.Nieo
        //2.Papà
        //3.Foreign key abuelo en papà
        //4.FK del papà en el nieto
        return $this->hasManyThrough(Country::class, Region::class, 'continent_id', 'region_id');

    }
}
