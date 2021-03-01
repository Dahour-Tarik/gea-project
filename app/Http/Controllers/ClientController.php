<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use DB;
use Session;

class ClientController extends Controller
{
    public function index() {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    //Affichage d'un client spécifique avec les mécaniciens qui ont été en contact avec les véhicules du client.
    public function show($id) {
        $client = Client::find($id);
        $voitures_id = DB::table('clients')
         ->join('voitures', function ($join)  use($id) {
            $join->on('clients.id', '=', 'voitures.client_id')->where('clients.id', '=', $id);
        })->select('voitures.id')->get();
        $voitures_id = $voitures_id->pluck('id')->toArray();
        $mecaniciens_id = DB::table('travails')
        ->select('mecanicien_id')
        ->whereIN('voiture_id', $voitures_id)
        ->get();
        $mecaniciens_id = $mecaniciens_id->pluck('mecanicien_id')->toArray();
        $infoMacaniciens = DB::table('mecaniciens')->select('nom','prenom')->whereIN('id',$mecaniciens_id)->get();
        return view('clients.show', compact(['client','infoMacaniciens']));
    }

    //Addition d'un nouveau client
    public function addNewClient(Request $request){

        $new_client = new Client();

        $new_client->nom = $request->name;
        $new_client->prenom = $request->prenom;
        $new_client->adresse = $request->adresse;
        $new_client->ville = $request->ville;
        $new_client->telephone = $request->telephone;
        $new_client->email = $request->email;


        $new_client->save();

        return redirect()->route('clients.index');
    }

    //Filtrer les clients par ville
    public function search(){
        $req = request()->input('q');
        $clients = Client::where('ville','like',"%$req%")->paginate(6);

        return view('clients.index', compact('clients'));
    }

    //Supprimer un client
    public function removeClient($id){
        $clientPr = Client::find($id);
        if($clientPr->voitures->isEmpty()){
            $clientPr->delete();
        }
        else{
            Session::flash('alert-danger', 'Attention le client a des voitures');
        }
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }


}
