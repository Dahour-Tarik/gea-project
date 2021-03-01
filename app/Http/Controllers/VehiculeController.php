<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voiture;
use App\Client;
use App\Mecanicien;
use App\Travail;
use Session;
use DB;
class VehiculeController extends Controller
{
    

    public function index(){
        Session::forget(['alert-danger','alert-warning']);
        $voitures = Voiture::all();
       
        return view('vehicule.index', compact('voitures'));
    }

    //Affichage d'une voiture specifique avec le propriétaire de cette derniere
    public function show($id){
        $voiture = Voiture::find($id);
        $client = Client::find($voiture->client_id);
        return view('vehicule.show', compact(['client','voiture']));

    }

    //Lister tout les mecaniciens
    public function addmec($id){
        $voiture = Voiture::find($id);
        $mecaniciens = Mecanicien::all();
        return view('vehicule.addmec', compact(['voiture','mecaniciens']));

    }

    //Affecter un mecanicien à une voiture
    public function store(Request $request)

    {
        
        $inputs = $request->all();
        $voitures = Voiture::all();
       
        foreach ($inputs['mecanicien'] as $id ){
            DB::table('travails')->insert([
                'voiture_id' => $inputs['voiture'],
                'mecanicien_id' => $id
            ]);
        }
      
        return view('vehicule.index', compact('voitures'));


    }



    //L"addition d'une nouvelle voiture et l'affecter à un client
    public function addNewVoiture(Request $request){

        $voiture = new Voiture();

        $voiture->marque = $request->marque;
        $voiture->modele = $request->modele;
        $voiture->annee = $request->annee;
        $voiture->immat = $request->immat;
        $voiture->client_id = $request->input('element');

        $voiture->save();


        return redirect()->route('vehicule.index');


    }

    public function getClients(){
        $clients = Client::all();
        return view('newVoiture.index',compact('clients'));
    }

}
