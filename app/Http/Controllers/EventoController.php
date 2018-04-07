<?php

namespace Leivaproducciones\Http\Controllers;

use Illuminate\Http\Request;
use Leivaproducciones\Evento;
use Leivaproducciones\http\Requests\EventoRequest;
use Illuminate\Support\Facades\Storage;


class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = Evento::orderBy('fecha','ASC')->paginate(6);

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
       $evento->campeonato_id = $request->campeonato_id;
       $evento->deporte_id = $request->deporte_id;
       $evento->especialidad_id = $request->especialidad_id;
       $evento->cronograma = $request->cronograma;
       $evento->llegar_dormir = $request->llegar_dormir;
       $evento->contacto = $request->contacto;
       $evento->inscripcion = $request->inscripcion;
       $evento->inscripto = $request->inscripto;
       $evento->resultado = $request->resultado;
       // imagen

       if ($request->file('avatar')) {
        $path = Storage::disk('public')->put('img', $request->file('avatar'));
        $evento->fill(['avatar' => asset($path)]);
           } 

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
       $evento->campeonato_id = $request->campeonato_id;
       $evento->deporte_id = $request->deporte_id;
       $evento->especialidad_id = $request->especialidad_id;
       $evento->cronograma = $request->cronograma;
       $evento->llegar_dormir = $request->llegar_dormir;
       $evento->contacto = $request->contacto;
       $evento->inscripcion = $request->inscripcion;
       $evento->inscripto = $request->inscripto;
       $evento->resultado = $request->resultado;

       // imagen
       if ($request->file('avatar')) {
        $path = Storage::disk('public')->put('img', $request->file('avatar'));
        $evento->fill(['avatar' => asset($path)]);
           } 

       $evento->save();

       return redirect()->route('eventos.index')
                        ->with('info','El evento fue modificado');

    }


}
