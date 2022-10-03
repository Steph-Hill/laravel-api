<?php

namespace App\Http\Controllers;

use App\Models\Tocality;
use Illuminate\Http\Request;

class TocalityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
/***pour lister mes données par ordre decroissant */

return Tocality::orderByDesc('created_at')->get();

/**pour lister mes donnes normalement */        
      /*   $tocality = Tocality::all(); */

        /* return $tocality->toJson(JSON_PRETTY_PRINT); */ //converti ma base  en j-son
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        //pour creer des posts 
      if (Tocality::create($request->all())) {
       /**si post créé envoyer un message */
        return response()->json([
            'success' => 'Actualite créée avec succés'
        ],200);

      }  
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tocality  $tocality
     * @return \Illuminate\Http\Response
     */
    public function show(Tocality $tocality)
    {
        /**permet de cibler un element**/
        return $tocality;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tocality  $tocality
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tocality $tocality)
    {
        /**Mettre a jour un element**/

        $tocality->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tocality  $tocality
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tocality $tocality)
    {
        //
    }
}
