<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Obras;

class ObrasController extends Controller
{
    //
    public function index()
    {
        //
        $obras = DB::table('obras')->orderBy('id')->get();

        return view('obras')->with('obras',$obras);
    }

    public function create()
    {
        //
        return view('obrascreate');
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
        $cliente = Obras::create([

            'empreendimento' => $request->empreendimento,
            'construtora' => $request->construtora,
            'razao' => $request->razao,
            'insmunicipal' => $request->insmunicipal,
            'insestadual' => $request->insestadual,
            'cnpj' => $request->cnpj,
            'cei' => $request->cei,
            'telefone' => $request->telefone,
            'contato' => $request->contato,
            'enderecofat' => $request->enderecofat,
            'cepfat' => $request->cepfat,
            'cidadefat' => $request->cidadefat,
            'bairrofat' => $request->bairrofat,
            'enderecocob' => $request->enderecocob,
            'cepcob' => $request->cepcob,
            'cidadecob' => $request->cidadecob,
            'bairrocob' => $request->bairrocob,
            'enderecoent' => $request->enderecoent,
            'cepent' => $request->cepent,
            'cidadeent' => $request->cidadeent,
            'bairroent' => $request->bairroent
        ]);

        return redirect()->route('obras');
    }

    public function edit($id)
    {

        $obraedit = Obras::where('id','=',$id)->first();

        return view('obrasedit')->with('obra',$obraedit);

    }

        public function update(Request $request, $id)
    {
            $obraupdate = Obras::where('id',"=",$id)->first();

            $obraupdate->empreendimento = $request->empreendimento;
            $obraupdate->construtora = $request->construtora;
            $obraupdate->razao = $request->razao;
            $obraupdate->insmunicipal = $request->insmunicipal;
            $obraupdate->insestadual = $request->insestadual;
            $obraupdate->cnpj = $request->cnpj;
            $obraupdate->cei = $request->cei;
            $obraupdate->telefone = $request->telefone;
            $obraupdate->contato = $request->contato;
            $obraupdate->enderecofat = $request->enderecofat;
            $obraupdate->cepfat = $request->cepfat;
            $obraupdate->cidadefat = $request->cidadefat;
            $obraupdate->bairrofat = $request->bairrofat;
            $obraupdate->enderecocob = $request->enderecocob;
            $obraupdate->cepcob = $request->cepcob;
            $obraupdate->cidadecob = $request->cidadecob;
            $obraupdate->bairrocob = $request->bairrocob;
            $obraupdate->enderecoent = $request->enderecoent;
            $obraupdate->cepent = $request->cepent;
            $obraupdate->cidadeent = $request->cidadeent;
            $obraupdate->bairroent = $request->bairroent;

            $obraupdate->save();

        return redirect()->route('obras');
    }

    public function destroy($id)
    {
        $obradelete = Obras::where('id','=',$id)->first();

        $obradelete->delete();

        return redirect()->route('obras');
    }
}
