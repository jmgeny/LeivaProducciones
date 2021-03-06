<?php

namespace leiman\Http\Controllers;

use leiman\Championship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ChampionshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campeonatos = Championship::orderBy('id','ASC')->paginate(6);

        return view('campeonatos.index',compact('campeonatos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \leiman\Championship  $championship
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $campeonato = Championship::find($id);

        return view('campeonatos.edit',compact('campeonato'));
    }    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \leiman\Championship  $championship
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campeonato = Championship::find($id);

        $campeonato->nombre = $request->nombre;
        $campeonato->category_id = $request->category_id;
        $campeonato->sport_id = $request->sport_id;
        $campeonato->fecha_inicio = $request->fecha_inicio;
        $campeonato->fecha_fin = $request->fecha_fin;        

        if($request->file('avatar')) {

            // Necesito el archivo en una variable esta vez
            $file = $request->file("avatar");
            // Armo un nombre único para este archivo
            $name = $request->nombre . $request->fecha . "." . $file->extension();
            // carpeta en la que voy a guardar la imagen
            $folder = "champion";

            $path = $file->storeAs($folder, $name);
            $person->avatar = $path;
        }

        $campeonato->save();

       return redirect()->back() //route('championship.index')
                        ->with('info','El campeonato fue Actualizado'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('campeonatos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campeonato = new Championship;

        $campeonato->nombre = $request->nombre;
        $campeonato->category_id = $request->category_id;
        $campeonato->sport_id = $request->sport_id;
        $campeonato->fecha_inicio = $request->fecha_inicio;
        $campeonato->fecha_fin = $request->fecha_fin;        

        // Necesito el archivo en una variable esta vez
        if($request->file('avatar')) {

            // Necesito el archivo en una variable esta vez
            $file = $request->file("avatar");
            // Armo un nombre único para este archivo
            $name = $request->nombre . $request->fecha . "." . $file->extension();
            // carpeta en la que voy a guardar la imagen
            $folder = "champion";

            $path = $file->storeAs($folder, $name);
            $campeonato->avatar = $path;
        }
        
        $campeonato->save();
        
       return redirect()->route('championship.index')
                        ->with('info','Fue creado un nuevo campeonato'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \leiman\Championship  $championship
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $campeonato = Championship::find($id);

        return view('campeonatos.show',compact('campeonato'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \leiman\Championship  $championship
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $campeonato = Championship::find($id);
        $campeonato->delete();
        return back()->with('info','El campeonato fue eliminado');          
    }
}
