@extends('layouts.main')
@section('title', 'App NovaCap')
@section('content')

<div id="search-container" class="col-md-12">
    <h1>Ache sua categoria</h1>
    <form action="">
        <input type="text"id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>

<div id="ocurrences-container" class="col-md-12">
    <h2>Categorias</h2>
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
            <img src="/img/meio-fio.png" alt="Meio-fio danificado">
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

@endsection