<?php

namespace App\Http\Controllers;

use App\Models\formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.formation.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.formation.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'date_debut' => ['required'],
                'prix' => ['required'],
                'duree_en_mois' => ['required'],
                'intitule' => ['required'],
                'description' => ['required'],
            ]   
        );

        $etudiant = new formation;

        $etudiant->date_debut = $validatedData['date_debut'];
        $etudiant->prix = $validatedData['prix'];
        $etudiant->duree_en_mois = $validatedData['duree_en_mois'];
        $etudiant->intitule = $validatedData['intitule'];
        $etudiant->description = $validatedData['description'];
    
        $etudiant->save();

        return redirect('admin/formation')->with('message', 'Etudiant has been added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(formation $formation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(formation $formation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, formation $formation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(formation $formation)
    {
        //
    }
}
