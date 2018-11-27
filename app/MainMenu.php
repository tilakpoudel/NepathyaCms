<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainMenu extends Model
{
    
    public function submenus(){

        return $this->hasMany('App\SubMenu');
    }
}
