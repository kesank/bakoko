<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use \App\Locataire;
use PDF;

class locataireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $locataires = locataire::paginate(20);
        return view('liste', compact('locataires'));

    }
    
    public function create()
    {
        return view('locataires');
    }

 
    public function store(Request $request)
    {
        $this->validate($request, [
            'nom' => 'bail|required|alpha',
            'prenom' => 'bail|required|alpha',
            'loyer' => 'bail|required|max:250',
            'impaye' => 'bail|required|max:250',
            'creance' => 'bail|required|max:250',
            'id_logement' => 'bail|required|max:250',
            'id_bloc' => 'bail|required|max:250',

        ]);
        $solde=$request->creance-$request->loyer-$request->impaye ; 
        if($solde>0){
            $dette=0;
            $creance=$solde;
        }   
        else{
            
            $dette=$solde;
            $creance=0;
            
        }
        $Loc = new Locataire;
        $Loc->nom = $request->nom;
        $Loc->prenom = $request->prenom;
        $Loc->prix_mensuel = $request->loyer;
        $Loc->impaye_m1 = $request->impaye;
        $Loc->solde = $solde;
        $Loc->creance=$creance;
        $Loc->creance_m1 = $request->creance;
        $Loc->dette = $dette;
        $Loc->id_logement = $request->id_logement;
        $Loc->id_bloc = $request->id_bloc;
        $Loc->save();
        return view('locataires');    }
    
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Locataire $locataire)
    {
        return view('show', compact('locataire'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Locataire $locataire)
    {
        
     return view('edit', compact('locataire'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Locataire $locataire)
    {
        $this->validate($request, [
            'nom' => 'bail|required|alpha',
            'prenom' => 'bail|required|alpha',
            'loyer' => 'bail|required|max:250',
            'impaye' => 'bail|required|max:250',
            'creance' => 'bail|required|max:250',
            'id_logement' => 'bail|required|max:250',
            'id_bloc' => 'bail|required|max:250',

        ]);
        $solde=$request->creance-$request->loyer-$request->impaye ; 
        if($solde>0){
            $dette=0;
            $creance=$solde;
        }   
        else{
            
            $dette=$solde;
            $creance=0;
            
        }
        $Loc = new Locataire;
        $Loc->nom = $request->nom;
        $Loc->prenom = $request->prenom;
        $Loc->prix_mensuel = $request->loyer;
        $Loc->impaye_m1 = $request->impaye;
        $Loc->solde = $solde;
        $Loc->creance=$creance;
        $Loc->creance_m1 = $request->creance;
        $Loc->dette = $dette;
        $Loc->id_logement = $request->id_logement;
        $Loc->id_bloc = $request->id_bloc;
        $Loc->update();
    return redirect()->route('locataire.index')->with('info', 'Le locataire a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Locataire $locataire)
    {
        $locataire->delete();
        return back()->with('info', 'Le locataire a bien été supprimé dans la base de données.');
    }
    public function downloadPDF($id) {
        $locataire = Locataire::find($id);

        $pdf = PDF::loadView('pdf', compact('locataire'));
        
       return $pdf->download('facture.pdf');
}

public function search(){
        
    return view('formsearch' );
}

public function searchpost(Request $request){

    $result=Locataire::where('nom', 'LIKE', '%'.$request->search.'%')
    ->get();
        return view('search', compact('result'));

    
}
}
