<?php

namespace App\Http\Controllers;

use App\Models\Voiture;
use Illuminate\Http\Request;

class LuxeController extends Controller
{
    public function luxe(){
        $luxeCar = Voiture::where("prix", "<", 4000)->get();
        return view('pages.luxe', compact('luxeCar'));
    }
    public function destroy($id){
        $destroy = Voiture::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}
