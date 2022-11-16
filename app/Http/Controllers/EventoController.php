<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = Evento::all();
        return view('eventosIndex', compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eventosCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=> 'required|max:255',
            'correo'=>'required|email',
            'telefono'=>'required|max:20',
            'pedidos'=>'required|max:255',
        ]);
        
        Evento::create($request->all());

        return redirect('/evento');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show(Evento $evento)
    {
        return view('eventosShow',compact('evento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function edit(Evento $evento)
    {
        return view('eventosEdit', compact('evento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evento $evento)
    {
        
        //$evento = new evento();

        $request->validate([
            'nombre'=> 'required|max:255',
            'correo'=>'required|email',
            'telefono'=>'required|max:20',
            'pedidos'=>'required|max:255',
        ]);
        //$evento->nombre = $request->nombre;
        //$evento->correo = $request->correo;
        //$evento->telefono = $request->telefono;
        //$evento-> pedidos = $request->pedidos;
        //$evento->save();
        Evento::where('id',$evento->id)->update($request->except('_token','_method'));
        return redirect('/evento');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evento $evento)
    {
        $evento->delete();

        return redirect('/evento');
    }
}
