<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travail extends Model
{

    //relation many to many
    protected $table = 'travails';
    public $timestamps = false;
    protected $fillable = [
        'voiture_id',
        'mecanicien_id',
    ];
}
