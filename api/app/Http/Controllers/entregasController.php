<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\entregas;

class entregasController extends Controller
{
    public function entregar($id) {
        $entrega = entregas::findOrFail($id);
        return response()->json(['message' => "Entrega realitzada: " . $entrega->nom]);
    }
    
    public function reentregar($id) {
        $entrega = entregas::findOrFail($id);
        // Lògica per a reentregar
        return response()->json(['message' => "Entrega reentregada: " . $entrega->nom]);
    }
    
}
