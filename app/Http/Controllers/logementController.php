<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Logement;

class logementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $logements = logement::paginate(20);
        return view('logement', compact('logements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('formlogement');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'nom' => 'bail|required|alpha',
            'nbr_piece' => 'bail|required|',
            'taille' => 'bail|required|max:250',
            'prix' => 'bail|required|max:250',
            'id_zone' => 'bail|required|max:250',

        ]);

        $Log = new logement;
        $Log->nom = $request->nom;
        $Log->nbr_piece = $request->nbr_piece;
        $Log->taille = $request->taille;
        $Log->prix = $request->prix;
        $Log->id_zone = $request->id_zone;
        $Log->save();
      
        return view('formlogement'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Logement $logement)
    {
        return view('showLog', compact('logement'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Logement $logement)
    {
        return view('editLog', compact('logement'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Logement $logement)
    {
        
        $this->validate($request, [
            'nom' => 'bail|required|alpha',
            'nbr_piece' => 'bail|required|alpha',
            'taille' => 'bail|required|max:250',
            'prix' => 'bail|required|max:250',
            'id_zone' => 'bail|required|max:250',

        ]);

        $Log = new logement;
        $Log->nom = $request->nom;
        $Log->nbr_piece = $request->nbr_piece;
        $Log->taille = $request->taille;
        $Log->prix = $request->prix;
        $Log->id_zone = $request->id_zone;
        $Log->update();
        
        return redirect()->route('logement.index')->with('info', 'Le logement a bien été modifié');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Logement $logement)
    {
        $logement->delete();
        return back()->with('info', 'Le logement a bien été supprimé dans la base de données.');
    }
}
