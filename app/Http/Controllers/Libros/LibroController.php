<?php

namespace App\Http\Controllers\Libros;

use App\Http\Controllers\Controller;
use App\Models\libro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros=Libro::query()->paginate(5);
        return view('Libros.index',compact('libros'))
                                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Libros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validacion=Validator::make($request->all(),[
            'libro'=> 'required',
            'categoria'=> 'required',
            'cantidad'=> 'required',
            'precio'=> 'required'
        ]);
        if($validacion->fails()){
            return redirect()->route('libros.index')->with('error','Todos los campos son requeridos');
        } 
        Libro::create($request->all());
        return redirect()->route('libros.index')->with('success','Libro agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function show(libro $libro)
    {
        return view('Libros.show',compact('libro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function edit(libro $libro)
    {
        return view('Libros.edit',compact('libro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, libro $libro)
    {                                                                                                                                                
        $validacion=Validator::make($request->all(),[
            'libro'=> 'required',
            'categoria'=> 'required',
            'formato'=> 'required',
            'cantidad'=> 'required',
            'precio'=> 'required'
        ]);
        if($validacion->fails()){
        return redirect()->route('libros.index')->with('error','Todos los campos son requeridos');
        } 
        $libro->update($request->all());
        return redirect()->route('libros.index')->with('success','Libro actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function destroy(libro $libro)
    {
        $libro->delete();
        return redirect()->route('libros.index')->with('correcto','Libro eliminado correctamente');
    }
}
