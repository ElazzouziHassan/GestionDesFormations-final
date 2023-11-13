<?php

namespace App\Http\Controllers;

use App\Models\Formateur;
use Illuminate\Http\Request;

class FormateurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.formateur.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.formateur.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'cin' => ['required'],
                'nom' => ['required'],
                'prenom' => ['required'],
                'date_naissance' => ['required'],
                'adresse' => ['required'],
                'adresse_email' => ['required'],
                'numero_telephone' => ['required'],
            ]   
        );

        $etudiant = new Formateur;

        $etudiant->cin = $validatedData['cin'];
        $etudiant->nom = $validatedData['nom'];
        $etudiant->prenom = $validatedData['prenom'];
        $etudiant->date_naissance = $validatedData['date_naissance'];
        $etudiant->adresse = $validatedData['adresse'];
        $etudiant->adresse_email = $validatedData['adresse_email'];
        $etudiant->numero_telephone = $validatedData['nom'];

        $etudiant->save();

        return redirect('admin/formateur')->with('message', 'Etudiant has been added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Formateur $formateur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Formateur $formateur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Formateur $formateur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Formateur $formateur)
    {
        //
    }
}
