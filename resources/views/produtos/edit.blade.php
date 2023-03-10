@extends('layouts.app')

@section('content')
    <h1>Editar Produto</h1>

    <form method="POST" action="{{ route('produtos.update', $produto->id) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="{{ $produto->nome }}">
        </div>
        <div>
            <label for="descricao">Descrição</label>
            <textarea name="descricao" id="descricao">{{ $produto->descricao }}</textarea>
        </div>
        <div>
            <label for="imagem">Imagem</label>
            <input type="text" name="imagem" id="imagem" value="{{ $produto->imagem }}">
        </div>
        <div>
            <label for="qrcode">QR Code</label>
            <input type="text" name="qrcode" id="qrcode" value="{{ $produto->qrcode }}">
        </div>
        <button type="submit">Salvar</button>
    </form>
@endsection
