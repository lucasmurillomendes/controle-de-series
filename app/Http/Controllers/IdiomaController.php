<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class IdiomaController extends Controller
{
    public function listarIdioma(Request $request){

      //  var_dump($request->url());
      //  var_dump($request->query());

        $idiomas = [
            'PORTUGUES',
            'INGLES',
            'ESPANHOL',
            'SUECO'
        ];
    
        return view('idioma.index', [
            'idiomas' => $idiomas
        ]);
    }

    public function create(){
        return view('idioma.create');
    }
}
