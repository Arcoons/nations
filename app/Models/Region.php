<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
      //tabla a conecetar
      protected $table = "regions";
      //la clave primaria de esa tabla
      protected $primaryKey = "region_id";
      //omitir campos de auditiria 
      public $timestamps = false;
    use HasFactory;

    //1 to m: Region-Country Relationship
    public function countries(){
        //Parameters
        //1.Linked model
        //2. Foreign key of current model 
        //into relared model REGION
        return $this->hasMany(Country::class, 'region_id');
    }
}
