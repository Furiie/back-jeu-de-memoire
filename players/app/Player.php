<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// Notre Model 'Player' qui contiendra nos resultats contenue dans notre base de donnée

class Player extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'score'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}