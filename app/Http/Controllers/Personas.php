<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonaStoreRequest;
use App\Models\Persona;
use Illuminate\Http\Request;

class Personas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = Persona::all();//Select * from 'Persona'
        // $personas = Persona::orderBy('nombre','asc')->get();//Select * from personas order by nombre desc;
        // $personas = Persona::where('id','<',50)->get();// Select * from personas where id < 50;
        // $personas = Persona::select('nombres','apellidos')->get();// Select nombres,apellidos from personas;
        

        return view('personas.listado',[
            'personas'  => $personas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personas.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonaStoreRequest $request)
    {
        //dd($request->all());

        $persona = Persona::create($request->all());
        

        return response()->json($persona);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $persona)
    {
        return response()->json($persona);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit(Persona $persona)
    {
        return view('personas.edit',[
            'persona'   =>      $persona
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Persona $persona)
    {
        //dd($request->all());
        //actualizo el modelo Persona 
        //con los nuevos datos del request
        $persona->fill($request->all());
        $persona->save();

        return redirect()->route('personas.index');
        //return response()->json($persona);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persona $persona)
    {
        $persona->delete();

        return redirect()->route('personas.index');
    }

    public function desactivar(Persona $persona){

    }
}
