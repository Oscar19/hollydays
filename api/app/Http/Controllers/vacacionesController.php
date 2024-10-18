<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vacaciones;

class vacacionesController extends Controller
{
    public function realitzar($id) {
        $pla = vacaciones::findOrFail($id);
        return response()->json(['message' => "Activitat realitzada: " . $pla->nom]);
    }
    
    public function anular($id) {
        $pla = vacaciones::findOrFail($id);
        $pla->delete(); 
        return response()->json(['message' => "Pla vacacional anul·lat: " . $pla->nom]);
    }
    
}
