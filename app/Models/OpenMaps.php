<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OpenMaps extends Model
{
    
    function getOpenMapsLines(){

        $results = app('db')->select("select idLine,name from `openmaps`.`lines` order by idLine");
        return $results;
    }


    function setOpenMapsPoints(){

        
        return 'setOpenMapsPoints del modelo';
    }


    function getOpenMapsPoints(){

        return 'getOpenMapsPoints del modelo';
    }


}
