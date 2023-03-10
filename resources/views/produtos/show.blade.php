@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Ponto Turistico - {{ $produto->nome }} </h1>

        <div class="row d-flex">
            <div class="col-md-4">
                <img src="{{ asset('imagens/'.$produto->imagem) }}" class="img-fluid" alt="Imagem do produto">
            </div>
        <div class="col-md-8">
        <h5>{{ $produto->nome }}</h5>
        <p>{{ $produto->descricao }}</p>
    </div>

    <script>
      document.addEventListener("DOMContentLoaded", function (event) {
        const wait_time = 3000;

        setTimeout(() => {
          document.getElementsByClassName("active")[0].click();

          init();
        }, wait_time);
      });

      function traduzir(string) {
        window.plugin.player.stop();
        window.plugin.player.translate("ola, tudo bem?");
      }
    </script>

    <div vw class="enabled">
      <div vw-access-button class="active"></div>
      <div vw-plugin-wrapper>
        <div class="vw-plugin-top-wrapper"></div>
      </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
      new window.VLibras.Widget("https://vlibras.gov.br/app");
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
      integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
      crossorigin="anonymous"
    ></script>

@endsection