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

        @foreach($ocurrences as $ocurrence)
        <div class="card col-md-3">
            <img src="/img/buraco.png" alt="{{ $ocurrence->type }}">
            <div class="card-body">
                <h5 class="card-type">{{ $ocurrence->type }}</h5>
                <p class="card-infos">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, adipisci.</p>
                <a href="#" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
        @endforeach

    </div>
</div>

@endsection