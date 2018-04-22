<?php

namespace Leivaproducciones\Http\Controllers;

use Illuminate\Http\Request;
use Leivaproducciones\Campeonato;
use Leivaproducciones\http\Requests\CampeonatoRequest;
use Illuminate\Support\Facades\Storage;

class CampeonatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campeonatos = Campeonato::orderBy('id','ASC')->paginate(6);

        return view('campeonatos.index',compact('campeonatos'));        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $campeonato = Campeonato::find($id);

        return view('campeonatos.show',compact('campeonato'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $campeonato = Campeonato::find($id);
        $campeonato->delete();

        return back()->with('info','El elemento fue eliminado');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $campeonato = Campeonato::find($id);

        return view('campeonatos.edit',compact('campeonato'));
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
    public function store(CampeonatoRequest $request)
    {
        $campeonato = new Campeonato;

        $campeonato->nombre = $request->nombre;
        $campeonato->categoria_id = $request->categoria_id;
        $campeonato->deporte_id = $request->deporte_id;
        $campeonato->fecha_inicio = $request->fecha_inicio;
        $campeonato->fecha_fin = $request->fecha_fin;
       // imagen

       if ($request->file('avatar')) {
        $path = Storage::disk('public')->put('img', $request->file('avatar'));
        $campeonato->fill(['avatar' => asset($path)]);
           }

        $campeonato->save();

       return redirect()->route('campeonatos.index')
                        ->with('info','El campeonato fue Creado');        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CampeonatoRequest $request, $id)
    {
        $campeonato = Campeonato::find($id);

        $campeonato->nombre = $request->nombre;
        $campeonato->categoria_id = $request->categoria_id;
        $campeonato->deporte_id = $request->deporte_id;
        $campeonato->fecha_inicio = $request->fecha_inicio;
        $campeonato->fecha_fin = $request->fecha_fin;
       // imagen

       if ($request->file('avatar')) {
        $path = Storage::disk('public')->put('img', $request->file('avatar'));
        $campeonato->fill(['avatar' => asset($path)]);
           }

        $campeonato->save();

       return redirect()->route('campeonatos.index')
                        ->with('info','El campeonato fue Actualizado');   

    }

}
