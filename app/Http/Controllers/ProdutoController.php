<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();

        return view('produtos.index', ['produtos' => $produtos]);
    }

    public function create()
    {
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'imagem' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $produto = new Produto;
        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->qrcode = 'teste';


        // Salvando a imagem do produto
        $imagem = $request->file('imagem');
        $nome_imagem = time().'.'.$imagem->extension();
        $imagem->move(public_path('imagens'), $nome_imagem);
        $produto->imagem = $nome_imagem;

        $produto->save();

        return redirect()->route('produtos.index')->with('success', 'Produto cadastrado com sucesso.');
  
    }

    public function edit($id)
    {
        $produto = Produto::find($id);

        return view('produtos.edit', ['produto' => $produto]);
    }


    public function show($id)
    {
        $produto = Produto::find($id);

        return view('produtos.show', ['produto' => $produto]);
    }

    public function update(Request $request, $id)
    {
        $produto = Produto::find($id);
        $produto->nome = $request->input('nome');
        $produto->descricao = $request->input('descricao');
        $produto->imagem = $request->input('imagem');
        $produto->qrcode = $request->input('qrcode');
        $produto->save();

        return redirect()->route('produtos.index');
    }

    public function destroy($id)
    {
        $produto = Produto::find($id);
        $produto->delete();

        return redirect()->route('produtos.index');
    }

    public function qrcode($qrcode){
        $url = env('APP_URL ') . '/produtos/' . $qrcode;
        return QrCode::size(300)->generate($url);
    }
}