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
                <a href="#" class="btn btn-primary">Saber mais</a>
            </div>
        </div>

        <div class="card col-md-3">
            <img src="/img/meio-fio-danificado.png" alt="Meio-fio danificado">
            <div class="card-body">
                <h5 class="card-type">Meio-fio danificado</h5>
                <p class="card-infos">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum harum veritatis, quod quo hic pariatur?</p>
                <a href="#" class="btn btn-primary">Saber mais</a>
            </div>
        </div>

        <div class="card col-md-3">
            <img src="/img/poda-de-arvore.png" alt="Poda de árvore">
            <div class="card-body">
                <h5 class="card-type">Poda de árvore</h5>
                <p class="card-infos">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum harum veritatis, quod quo hic pariatur?</p>
                <a href="#" class="btn btn-primary">Saber mais</a>
            </div>
        </div>

        <div class="card col-md-3">
            <img src="/img/boca-de-lobo.png" alt="Manutenção em boca de lobo">
            <div class="card-body">
                <h5 class="card-type">Manutenção em boca de lobo</h5>
                <p class="card-infos">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum harum veritatis, quod quo hic pariatur?</p>
                <a href="#" class="btn btn-primary">Saber mais</a>
            </div>
        </div>

        <div class="card col-md-3">
            <img src="/img/calçada-danificada.png" alt="Calçada danificada">
            <div class="card-body">
                <h5 class="card-type">Calçada danificada</h5>
                <p class="card-infos">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum harum veritatis, quod quo hic pariatur?</p>
                <a href="#" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
    </div>
</div>

<div id="carouselExampleIndicators1" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T7pDMCrjZwj7/6n6qjMZl0E2tcSxaWOE0EGg3LOd6IdJweaxEmf+2pDIsWMM0HsB" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/img/buraco.png" class="d-block w-100" alt="Teste1">
    </div>
    <div class="carousel-item">
      <img src="/img/calçada-danificada.png" class="d-block w-100" alt="Teste2">
    </div>
    <div class="carousel-item">
      <img src="/img/boca-de-lobo.png" class="d-block w-100" alt="Teste3">
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
      <img src="/img/boca-de-lobo.png" class="d-block w-100" alt="Teste1">
    </div>
    <div class="carousel-item">
      <img src="/img/meio-fio.png" class="d-block w-100" alt="Teste2">
    </div>
    <div class="carousel-item">
      <img src="/img/calçada-danificada.png" class="d-block w-100" alt="Teste3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Notícias</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


@endsection