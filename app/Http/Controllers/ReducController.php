<?php

namespace App\Http\Controllers;

use App\Models\Voiture;
use Illuminate\Http\Request;

class ReducController extends Controller
{
    public function reduc(){
        $promoCar = Voiture::where("reduction", "!=", null)->get();
        return view('pages.reduc', compact('promoCar'));
    }
    public function destroy($id){
        $destroy = Voiture::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}
