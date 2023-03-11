<!DOCTYPE html>
<html>
<head>
	<title>Meu site com Bootstrap</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>



<div class="row">
<div class="card">
  <img class="card-img-top" src="{{ asset('imagens/'.$produto->imagem) }}" alt="{{ $produto->nome }}">
  <div class="card-body">
    <h5 class="card-title">{{ $produto->nome }}</h5>
    <p class="card-text">{{ $produto->descricao }}</p>
  </div>
</div>
    </div>


<script>
      document.addEventListener("DOMContentLoaded", function (event) {
        const wait_time = 3000;

        setTimeout(() => {
          document.getElementsByClassName("active")[0].click();

          init();
          $(".vpw-box").addClass("d-none");
        }, wait_time);

        $(".vpw-box").addClass("d-none");
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
 
        
  </body>
</html>


