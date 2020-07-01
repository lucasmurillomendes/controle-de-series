<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function listarCategoria(Request $request){

      //  var_dump($request->url());
      //  var_dump($request->query());

        $categorias = [
            'Comédia',
            'Ação',
            'Suspense',
            'Terror'
        ];
    
        return view('categoria.index', [
            'categorias' => $categorias
        ]);
    }

    public function create(){
        return view('categoria.create');
    }
}
