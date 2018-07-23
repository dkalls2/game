<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameAthlon extends Model
{
    //

    public function game(){
        return $this->belongsToMany('App\Game');
            //we pass in the model of the game, which in this case is App/Game
            //this is saying that many GameAlthons has a relationship to a Game and it belongs to many Games (many GameAthlons belongs to many games)
            //We also have to go to the Game Model (in Game.php) and create a gameathlons() function which uses belongsToMany.
    }

}
