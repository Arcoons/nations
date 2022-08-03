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
}
