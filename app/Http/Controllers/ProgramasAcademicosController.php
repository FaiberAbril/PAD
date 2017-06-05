<?php

namespace pad\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;
use pad\Http\Requests;
use pad\Http\Controllers\Controller;
use pad\programasAcademicos;

class ProgramasAcademicosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programasAcademicos = programasAcademicos::All();
        return view('programasAcademicos.index',compact('programasAcademicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('programasAcademicos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        programasAcademicos::create([
                'nombre_programa' => $request['nombre_programa'],
                'codigo_programa' => $request['codigo_programa'],
                'nombre_facultad' => $request['nombre_facultad']
            ]);
        return redirect('/programasAcademicos')->with('message','Programa Academico Creado');
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
        $programasAcademicos = ProgramasAcademicos::find($id);
        return view('programasAcademicos.edit',['programasAcademicos'=>$programasAcademicos]);
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
        $programasAcademicos = ProgramasAcademicos::find($id);
        $programasAcademicos->fill($request->all());
        $programasAcademicos->save();
        Session::flash('message','Programa Academico Editado');
        return Redirect::to('/programasAcademicos');
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
