<?php

namespace Leivaproducciones\Http\Controllers;

use Illuminate\Http\Request;
use Leivaproducciones\Evento;
use Leivaproducciones\http\Requests\EventoRequest;


class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = Evento::orderBy('fecha','ASC')->paginate(5);

        return view('eventos.index',compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eventos.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evento = Evento::find($id);
        return view('eventos.edit', compact('evento'));     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evento = Evento::find($id);
        return view('eventos.show', compact('evento'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $evento = Evento::find($id);
        $evento->delete();
        return back()->with('info','El evento fue eliminado');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventoRequest $request)
    {
       $evento = new Evento;

       $evento->nombre = $request->nombre;
       $evento->fecha = $request->fecha;
       $evento->direccion = $request->direccion;
       $evento->ciudad_id = $request->ciudad_id;
       $evento->descripcion = $request->descripcion;

       $evento->save();

       return redirect()->route('eventos.index')
                        ->with('info','El evento fue Creado');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EventoRequest $request, $id)
    {
       $evento = Evento::find($id);

       $evento->nombre = $request->nombre;
       $evento->fecha = $request->fecha;
       $evento->direccion = $request->direccion;
       $evento->ciudad_id = $request->ciudad_id;
       $evento->descripcion = $request->descripcion;

       $evento->save();

       return redirect()->route('eventos.index')
                        ->with('info','El evento fue modificado');

    }


}
