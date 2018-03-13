<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Fornecedores;
use Session;

class FornecedoresController extends Controller
{
    public function index()
    {
        //
        $fornecedores = DB::table('fornecedores')->orderBy('id')->get();

        return view('fornecedor')->with('fornecedores',$fornecedores);
    }

    public function create()
    {
        //
        return view('forneccreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $cliente = Fornecedores::create([

            'nome' => $request->nome,
            'cnpj' => $request->cnpj,
            'contato' => $request->contato,
            'endereco' => $request->endereco,
            'numero' => $request->numero,
            'cep' => $request->cep,
            'complemento' => $request->complemento,
            'bairro' => $request->bairro,
            'cidade' => $request->cidade,
            'telefone' => $request->telefone,
            'insmunicipal' => $request->insmunicipal,
            'insestadual' => $request->insestadual

        ]);

        return redirect()->route('fornecedores');
    }

    public function edit($id)
    {
        //
        $fornecedit = Fornecedores::where('id','=',$id)->first();

        return view('fornecedit')->with('fornecedor',$fornecedit);
        
    }

        public function update(Request $request, $id)
    {
        //
            $fornecedit = Fornecedores::where('id','=',$id)->first();

            $fornecedit->nome = $request->nome;
            $fornecedit->cnpj = $request->cnpj;
            $fornecedit->contato = $request->contato;
            $fornecedit->endereco = $request->endereco;
            $fornecedit->numero = $request->numero;
            $fornecedit->cep = $request->cep;
            $fornecedit->complemento = $request->complemento;
            $fornecedit->bairro = $request->bairro;
            $fornecedit->cidade = $request->cidade;
            $fornecedit->telefone = $request->telefone;
            $fornecedit->insmunicipal = $request->insmunicipal;
            $fornecedit->insestadual = $request->insestadual;
  
            $fornecedit->save();

            Session::flash('success','Fornecedor alterado com sucesso!');

           return redirect()->route('fornecedores');
    }

    public function destroy($id)
    {
        //
        $fornecdelete = Fornecedores::where('id','=',$id)->first();

        $fornecdelete->delete();

        Session::flash('success','Fornecedor excluido com sucesso!');

        return redirect()->route('fornecedores');
    }
}
