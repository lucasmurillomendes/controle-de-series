<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serie;

class SeriesController extends Controller
{
    public function listarSeries(Request $request)
    {
       $series = Serie::query()->orderBy('nome')->get();

       $mensagem = $request->session()->get('mensagem');

        return view('series.index', compact('series', 'mensagem'));
    }

    public function create(){
        return view('series.create');
    }

    public function store(Request $request)
    {
        $nome = $request->nome;
        
        $serie = Serie::create($request->all());

        $request->session()->flash('mensagem',"Registro {$serie->id} salvo com sucesso: {$serie->nome}");

        return redirect('/series');
    }

    public function destroy(Request $request){
        Serie::destroy($request->id);
        $request->session()->flash('mensagem', "Série excluída com sucesso.");
        return redirect('/series');
    }
}
