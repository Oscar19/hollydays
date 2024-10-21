<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\plaVacacional;

class PlaVacacionalController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string',
            'lloc' => 'required|string',
            'data' => 'required|date|unique:pla_vacacionals,data|unique:entrega_it_academies,data_entrega',
            'tipus' => 'required|in:Restaurant,Esport,Cultural,Visita,Altres'
        ]);

        $pla = PlaVacacional::create($request->all());

        return response()->json([
            'message' => 'Pla creat amb èxit!',
            'pla' => $pla
        ], 201);
    }
    public function realitzar($id) {
        $pla = PlaVacacional::findOrFail($id);
        return response()->json(['message' => "Actividat realitzada: " . $pla->nom]);
    }
    
    public function anular($id) {
        $pla = PlaVacacional::findOrFail($id);
        $pla->delete(); 
        return response()->json(['message' => "Pla vacacional anulat: " . $pla->nom]);
    }
}
