<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categorias=Categoria::orderBy('id','DESC')->paginate(8);

        return view('categoria.index',compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validar datos del formulario
        $validatedData=$request->validate([
          'nombre'=>'required|max:255',
          'descripcion'=>'nullable',
          'status'=>'required|boolean',

        ]);
        //crear una nueva instacia de categoria
        $categoria=new Categoria();
        $categoria->nombre=$validatedData['nombre'];
        $categoria->descripcion = $validatedData['descripcion'];
        $categoria->status = $validatedData['status'];

        //guardar en la base de datos
        $categoria->save();
    

        return redirect()->route('categoria.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoria $categoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categoria $categoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $categoria=Categoria::findOrFail($id);
        $categoria->delete();
        return redirect()->route('categoria.index');
    }
}
