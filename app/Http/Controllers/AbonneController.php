<?php

namespace App\Http\Controllers;

use App\Models\abonne;
use Illuminate\Http\Request;

class AbonneController extends Controller
{
    public function store(Request $request)
    {
         {
            DB::beginTransaction();
            DB::table('abonne')->insert([

            ]);

            $abonne = new abonne();
            $abonne->nom = $request->nom;
            $abonne->prenom = $request->prenom;
            $abonne->age = $request->age;
            $abonne->sexe = $request->sexe;
            $abonne->profesion = $request->profesion;
            $abonne->rue = $request->rue;
            $abonne->codepostal= $request->codeposrtal;
            $abonne->ville = $request->ville;
            $abonne->pays = $request->pays;
            $abonne->telephone = $request->telephone;
            $abonne->email = $request->eamil;

            $abonne->save();
    }

    /**
     * Show the form for creating a new resource.
     */
  

    /**
     * Store a newly created resource in storage.
     */
   
    /**
     * Display the specified resource.
     */
   
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, abonne $abonne)
    {
        $abonne = new abonne();
        $abonne->nom = $request->nom;
        $abonne->prenom = $request->prenom;
        $abonne->age = $request->age;
        $abonne->sexe = $request->sexe;
        $abonne->profesion = $request->profesion;
        $abonne->rue = $request->rue;
        $abonne->codepostal= $request->codeposrtal;
        $abonne->ville = $request->ville;
        $abonne->pays = $request->pays;
        $abonne->telephone = $request->telephone;
        $abonne->email = $request->eamil;

        $abonne->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function abonne()
    {
        return view('abonne');
    }
}

   

