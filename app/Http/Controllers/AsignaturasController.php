<?php

namespace pad\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;
use pad\Http\Requests;
use pad\Http\Controllers\Controller;
use pad\Asignaturas;


class AsignaturasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asignaturas = Asignaturas::All();
        return view('asignaturas.index',compact('asignaturas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('asignaturas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Asignaturas::create([
                'nombre_asignatura' => $request['nombre_asignatura'],
                'codigo_asignatura' => $request['codigo_asignatura'],
                'htd' => $request['htd'],
                'hta' => $request['hta'],
                'creditos' => $request['creditos'],
                'cod_programa' => $request['cod_programa']
            ]);
        return redirect('/asignaturas')->with('message','Asignatura Creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asignaturas = Asignaturas::find($id);
        return view('asignaturas.edit',['asignaturas'=>$asignaturas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $asignaturas = Asignaturas::find($id);
        $asignaturas->fill($request->all());
        $asignaturas->save();
        Session::flash('message','Asignatura Editada');
        return Redirect::to('/asignaturas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
