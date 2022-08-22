<?php

namespace App\Http\Controllers;

use App\Models\Voiture;
use Illuminate\Http\Request;

class VoitureController extends Controller
{
    public function voiture(){
        $allCar = Voiture::all();
        return view('home', compact('allCar'));
    }
    public function store(Request $request){
        $store = new Voiture;
        $store->marque = $request->marque;
        $store->annee = $request->annee;
        $store->couleur = $request->couleur;
        $store->prix = $request->prix;
        $store->reduction = $request->reduction;
        $store->save();
        return redirect('/');
    }
}
