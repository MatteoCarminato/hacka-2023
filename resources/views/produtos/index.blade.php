@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Produtos</h1>

        <a href="{{ route('produtos.create') }}" class="btn btn-primary mb-3">Novo Produto</a>

        @foreach ($produtos as $produto)
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('imagens/'.$produto->imagem) }}" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">{{ $produto->nome }}</h5>
                    <p class="card-text">{{ $produto->descricao }}</p>
                    <a href="{{ route('qrcode', $produto->id) }}">QrCode</a>
                    <a href="{{ route('produtos.show', $produto->id) }}">Detalhes</a>
                </div>
            </div>
        @endforeach

        
    </div>
@endsection