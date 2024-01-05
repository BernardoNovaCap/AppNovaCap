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


<div id="ocurrences-container" class="col-md-12">
    <h2>Comunicados e Notícias:</h2>
    <p class="subtitle">Acompanhe os comunicados e notícias:</p>
</div>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!--  Estilos Personalizado -->
<link rel="stylesheet" href="/css/styles.css">

<!-- Bootstrap Bundle com Popper.js (JavaScript) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Scripts Personalizados -->
<script src="/js/seu-script.js"></script>

      <div id="carouselExampleIndicators1" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">

          <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/img/buraco.png" class=" d-block w-100" alt="Teste1" loading="lazy">
          </div>
          <div class="carousel-item">
            <img src="/img/calçada-danificada.png" class=" d-block w-100" alt="Teste2" loading="lazy">
          </div>
          <div class="carousel-item">
            <img src="/img/boca-de-lobo.png" class=" d-block w-100" alt="Teste3" loading="lazy">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Comunicados</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/img/boca-de-lobo.png" class=" d-block w-100" alt="Teste1" loading="lazy">
          </div>
          <div class="carousel-item">
            <img src="/img/meio-fio.png" class="d-block w-100" alt="Teste2" loading="lazy">
          </div>
          <div class="carousel-item">
            <img src="/img/calçada-danificada.png" class="d-block w-100" alt="Teste3" loading="lazy">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previou</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
</div>

@endsection