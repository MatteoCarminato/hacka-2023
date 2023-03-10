@extends('layouts.app')

@section('content')
    <h1>Novo Produto</h1>

    <form method="POST" action="{{ route('produtos.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite o nome do produto">
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea name="descricao" class="form-control" id="descricao" placeholder="Digite a descrição do produto"></textarea>
        </div>
        <div class="form-group">
            <label for="imagem">Imagem</label>
            <input type="file" name="imagem" class="form-control" id="imagem">
        </div>
       
        <button type="submit" class="btn btn-primary mt-3">Enviar</button>
        
    </form>
@endsection
