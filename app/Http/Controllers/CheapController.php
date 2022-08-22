<?php

namespace App\Http\Controllers;

use App\Models\Voiture;
use Illuminate\Http\Request;

class CheapController extends Controller
{
    public function cheap(){
        $cheapCar = Voiture::where("prix", ">", 4000)->get();
        return view('pages.cheap', compact('cheapCar'));
    }
    public function destroy($id){
        $destroy = Voiture::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}
