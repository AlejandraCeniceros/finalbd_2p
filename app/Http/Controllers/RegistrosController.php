<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Registros;


class RegistrosController extends Controller
{
    public function index(){
        $registros = Registros::all();

        return view('index', ['registros' => $registros]);
    }
    public function crear(Request $request) {
        Registros::create([
            'codigo' => $request->input('codigo'),
            'descripcion' => $request->input('descripcion'),
            'cantidad' => $request->input('cantidad'),
            'precio' => $request->input('precio')
        ]);
        return redirect('/');
    }
    public function agregar(){
        return view('agregar');
    }

    public function editar($id) {
        $registros = Registros::find($id);
    
        return view('editar', ['registros' => $registros]);
    }

    public function update(Registros $registros, Request $request){
        $registros->update([
            'codigo' => $request->input('codigo'),
            'descripcion' => $request->input('descripcion'),
            'cantidad' => $request->input('cantidad'),
            'precio' => $request->input('precio')
        ]);
        return redirect('/');
    }

    public function destroy($id){
        $registros = Registros::find($id);
        $registros->delete();
        return redirect('/');
    }

}