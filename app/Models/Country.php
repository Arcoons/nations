<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    
        //tabla a conecetar
        protected $table = "countries";
        //la clave primaria de esa tabla
        protected $primaryKey = "country_id";
        //omitir campos de auditiria 
        public $timestamps = false;
        use HasFactory;

        public function languages(){
                //belongsToMany Method:
                //1. Related model
                //2. pivot table (intermediate table)
                //3. foreign key of current model
                //4. Foreign key of related model
                return $this->belongsToMany(Language::class, 'country_languages','country_id','language_id');
        }
        
        //M:1 country - region
        //relationship
        public function regions(){
                //BelongsTo method:
                //1. Related model
                //2. Foreign key of related model in current model
                return $this->belongsTo(Region::class, 'region_id');
        }
    
}
