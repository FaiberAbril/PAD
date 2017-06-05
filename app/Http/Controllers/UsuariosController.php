<?php

namespace pad\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;
use pad\Http\Requests;
use pad\Http\Controllers\Controller;
use pad\Usuarios;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuarios::All();
        return view('usuarios.index',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Usuarios::create([
                'nombres' => $request['nombres'],
                'apellidos' => $request['apellidos'],
                'tipo_documento' => $request['tipo_documento'],
                'documento' => $request['documento'],
                'celular' => $request['celular'],
                'correo' => $request['correo'],
                'nombreusuario' => $request['nombreusuario'],
                'clave' => bcrypt($request['clave']),
                'cod_perfil' => $request['cod_perfil'],
                'cod_programa' => $request['cod_programa']
            ]);
        return redirect('/usuarios')->with('message','usuario Creado');
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
        $usuarios = Usuarios::find($id);
        return view('usuarios.edit',['usuarios'=>$usuarios]);
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
        $usuarios = Usuarios::find($id);
        $usuarios->fill($request->all());
        $usuarios->save();
        Session::flash('message','usuario Editado');
        return Redirect::to('/usuarios');
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
