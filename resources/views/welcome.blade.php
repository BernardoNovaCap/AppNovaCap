@extends('layouts.main')
@section('title', 'App NovaCap')
@section('content')

<div id="search-container" class="col-md-12">
    <!-- <h1>Ache sua categoria</h1>            // COMENTADO POIS NÃO SERÁ UTILIZADO
    <form action="/" method="GET">
        <input type="text"id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
    -->
</div>

<div id="ocurrences-container" class="col-md-12">
    <h2>Categorias:</h2>
    <p class="subtitle">Veja as categorias que você pode criar uma ocorrência</p>
    <div id="cards-container" class="row">

        <div class="card col-md-3">
            <img src="/img/buraco.png" alt="Buraco">
            <div class="card-body">
                <h5 class="card-type">Buraco</h5>
                <p class="card-infos">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum harum veritatis, quod quo hic pariatur?</p>
                <a href="#" class="btn btn-primary" onclick="openModal('/img/IMGNOVACAP/IMG_0908.JPG', 'Buraco', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum harum veritatis, quod quo hic pariatur?')">Saber mais</a>
            </div>
        </div>

        <div class="card col-md-3">
            <img src="/img/meio-fio-danificado.png" alt="Meio-fio danificado">
            <div class="card-body">
                <h5 class="card-type">Meio-fio danificado</h5>
                <p class="card-infos">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum harum veritatis, quod quo hic pariatur?</p>
                <a href="#" class="btn btn-primary" onclick="openModal('/img/meio-fio-danificado.png', 'Meio-fio danificado', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum harum veritatis, quod quo hic pariatur?')">Saber mais</a>
            </div>
        </div>

        <div class="card col-md-3">
            <img src="/img/poda-de-arvore.png" alt="Poda de árvore">
            <div class="card-body">
                <h5 class="card-type">Poda de árvore</h5>
                <p class="card-infos">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum harum veritatis, quod quo hic pariatur?</p>
                <a href="#" class="btn btn-primary" onclick="openModal('/img/poda-de-arvore.png', 'Poda de árvore', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum harum veritatis, quod quo hic pariatur?')">Saber mais</a>
            </div>
        </div>

        <div class="card col-md-3">
            <img src="/img/boca-de-lobo.png" alt="Manutenção em boca de lobo">
            <div class="card-body">
                <h5 class="card-type">Limpeza em boca de lobo</h5>
                <p class="card-infos">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum harum veritatis, quod quo hic pariatur?</p>
                <a href="#" class="btn btn-primary" onclick="openModal('/img/boca-de-lobo.png', 'Manutenção em boca de lobo', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum harum veritatis, quod quo hic pariatur?')">Saber mais</a>
            </div>
        </div>

        <div class="card col-md-3">
            <img src="/img/calçada-danificada.png" alt="Calçada danificada">
            <div class="card-body">
                <h5 class="card-type">Calçada danificada</h5>
                <p class="card-infos">Lorem ipsum, dolor sit amet consectt adipisicing elit. Eum harum veritatis, quod quo hic pariatur?</p>
                <a href="#" class="btn btn-primary" onclick="openModal('/img/calçada-danificada.png', 'Calçada danificada', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum harum veritatis, quod quo hic pariatur?')">Saber mais</a>
            </div>
        </div>

        <div id="modal" class="modal">
          <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <img id="modal-image" src="" alt="">
              <div id="modal-text">
                <h2 id="modal-title"></h2>
                <p id="modal-description"></p>
              </div>
          </div>
        </div>
    </div>
</div>

  <div id="teste" class="wrapper">
      <div id="new-container" class="col-md-12">
          <h2>COMUNICADOS</h2>
      </div>
  
      <div class='welcome-slider'>
          <div class='welcome-slides'>
              <!-- Radio Buttons-->
              <input type="radio" name="welcome-radio-btn" id="radio1">
              <input type="radio" name="welcome-radio-btn" id="radio2">
              <input type="radio" name="welcome-radio-btn" id="radio3">
              <input type="radio" name="welcome-radio-btn" id="radio4">
  
              <!--Fim Radio Buttons-->
  
              <!-- Imagens-->
              <div class="welcome-slide first">
                  <img src="/img/teste1.jpeg" alt="imagem1">
              </div>
              <div class="welcome-slide">
                  <img src="/img/teste2.jpeg" alt="imagem2">
              </div>
              <div class="welcome-slide">
                  <img src="/img/meio-fio.png" alt="imagem3">
              </div>
              <div class="welcome-slide">
                  <img src="/img/buraco.png" alt="imagem4">
              </div>
              <!--Fim de Imagens-->
  
              <!--Navigation auto-->
              <div class='welcome-navigation-auto'>
                  <div class="welcome-auto-btn1"></div>
                  <div class="welcome-auto-btn2"></div>
                  <div class="welcome-auto-btn3"></div>
                  <div class="welcome-auto-btn4"></div>
              </div>
          </div>
  
          <div class='welcome-manual-navigation'>
              <label for="welcome-radio1-1" class='welcome-manual-btn'> </label>
              <label for="welcome-radio2-1" class='welcome-manual-btn'> </label>
              <label for="welcome-radio3-1" class='welcome-manual-btn'> </label>
              <label for="welcome-radio4" class='welcome-manual-btn'> </label>
          </div>
      </div>
  
      <div class="latest-communications">
          <p>Fique por dentro dos últimos Comunicados:</p>
      </div>
  </div>

<script src="/js/scripts.js"></script>
@endsection