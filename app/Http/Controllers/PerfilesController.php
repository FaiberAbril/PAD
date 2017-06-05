<?php

namespace pad\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;
use pad\Http\Requests;
use pad\Http\Controllers\Controller;
use pad\Perfiles;


class PerfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perfiles = Perfiles::All();
        return view('perfiles.index',compact('perfiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perfiles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Perfiles::create([
                'nombre_perfil' => $request['nombre_perfil']
            ]);
        return redirect('/perfiles')->with('message','Perfil Creado');
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
        $perfil = Perfiles::find($id);
        return view('perfiles.edit',['perfil'=>$perfil]);
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
        $perfil = Perfiles::find($id);
        $perfil->fill($request->all());
        $perfil->save();
        Session::flash('message','Perfil Editado');
        return Redirect::to('/perfiles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Perfiles::destroy($id);
        Session::flash('message','Perfil Eliminado');
        return Redirect::to('perfiles');
    }
}
