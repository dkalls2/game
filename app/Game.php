<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    //



    public function gameathlon(){
        return $this->belongsToMany('App\GameAthlon');
            //we pass in the model of the gameathlon, which in this case is App/GameAthlon
            //this is saying that many Game has a relationship to a GameAthlon and it belongs to many GameAthlons (many Games belongs to many gameathlons)
            //We also have to go to the GameAthlon Model (in GameAthlon.php) and create a games() function which uses belongsToMany.
    }

}
