<?php

namespace App\Http\Controllers;

use App\Models\Tocality;
use Illuminate\Http\Request;
use GrahamCampbell\ResultType\Success;
use App\Http\Resources\Tocality as ResourceTocality;

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

return ResourceTocality::collection(Tocality::orderByDesc('created_at')->get());

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
        return new ResourceTocality($tocality);
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
      if ($tocality->update($request->all())) {
        /**si post créé envoyer un message */
         return response()->json([
             'success' => 'Actualité Modifiée avec succés'
         ],200);
 
       } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tocality  $tocality
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tocality $tocality)
    {
        /**pour supprimer**/
        ;
        if ($tocality->delete()) {
            return response()->json([
               'Success'=> 'message supprimer bravos!'
            ]);
        };
    }
}
