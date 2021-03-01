<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mecanicien;
use App\Travail;
use App\Voiture;
use DB;

class MecanicienController extends Controller
{
    public function index() {
        $mecaniciens = Mecanicien::all();
        return view('mecaniciens.index', compact('mecaniciens'));
    }

    
    //Affichage d'un mécanicien avec la liste des véhicules liés.
    public function show($id) {
        $mecanicien = Mecanicien::find($id);
        $tvoitures = DB::table('travails')
                    ->select('voiture_id')
                    ->where('mecanicien_id', 'like', $id)
                    ->get();
        $tvoitures = $tvoitures->pluck('voiture_id')->toArray();
        $voitures  = DB::table('voitures')
        ->whereIN('id',$tvoitures)->get();
        
        return view('mecaniciens.show', compact(['mecanicien','voitures']));
    }

}
