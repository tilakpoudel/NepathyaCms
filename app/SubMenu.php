<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubMenu extends Model
{
    public function mainmenu(){
        return $this->belongsTO('App\MainMenu');
    }
}
