<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';
    public $timestamps = false;
    protected $fillable = [
        'nom',
        'prenom',
        'adresse',
        'ville',
        'telephone',
        'email',
    ];

    public function voitures() {
        return $this->hasMany(Voiture::class, 'client_id');
    }
}
