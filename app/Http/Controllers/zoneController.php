<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\zone;


class zoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $zone = zone::paginate(20);
        return view('zone', compact('zone'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formzone');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       
        $zone = new zone;
        $zone->nom_zone	 = $request->nom	;
        $zone->save();

        return view('formzone'); 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(zone $zone)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(zone $zone)
    {
        return view('editzone', compact('zone'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,zone $zone)
    {
        
        $zone = new zone;
        $zone->nom_zone = $request->nom;
        
        $zone->update();
        
        return redirect()->route('zone.index')->with('info', 'La zone a bien été modifié');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(zone $zone)
    {
        
        $zone->delete();
        return back()->with('info', 'La zone a bien été supprimé dans la base de données.');
    }
}
