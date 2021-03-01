<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    protected $table = 'voitures';
    public $timestamps = false;
    protected $fillable = [
        'marque',
        'modele',
        'annee',
        'immat',
        'client_id',
    ];

    public function client() {
        return $this->belongsTo(Client::class, 'client_id');
    }
}
