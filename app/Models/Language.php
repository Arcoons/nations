<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
      //tabla a conecetar
      protected $table = "languages";
      //la clave primaria de esa tabla
      protected $primaryKey = "language_id";
      //omitir campos de auditiria 
      public $timestamps = false;
    use HasFactory;

    public function countrys(){
        return $this->belongsToMany(Country::class, 'country_languages','language_id','country_id');
    }
}
