<?php

namespace App\Http\Controllers;

use App\Http\Requests\EtudiantFormRequest;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.etudiant.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.etudiant.create');
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

        $etudiant = new Etudiant;

        $etudiant->cin = $validatedData['cin'];
        $etudiant->nom = $validatedData['nom'];
        $etudiant->prenom = $validatedData['prenom'];
        $etudiant->date_naissance = $validatedData['date_naissance'];
        $etudiant->adresse = $validatedData['adresse'];
        $etudiant->adresse_email = $validatedData['adresse_email'];
        $etudiant->numero_telephone = $validatedData['nom'];

        $etudiant->save();

        return redirect('admin/etudiant')->with('message', 'Etudiant has been added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Etudiant $etudiant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etudiant $etudiant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Etudiant $etudiant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etudiant $etudiant)
    {
        //
    }
}
