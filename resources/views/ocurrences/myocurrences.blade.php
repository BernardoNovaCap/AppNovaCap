@extends('layouts.main')
@section('title', 'Minhas Ocorrências')
@section('content')

<div id="ocurrences-container" class="col-md-12">
    <h2>Minhas ocorrências</h2>
    <p class="subtitle">Acompanhe as suas ocorrências:</p>
    <div id="cards-container" class="row">
        @foreach($ocurrences as $ocurrence) 
            <div class="card col-md-3">
                <img src="/img/ocurrences/{{ $ocurrence->image }}" alt="{{ $ocurrence->type }}">
                <div class="card-body">
                    <h5 class="card-type">{{ $ocurrence->type }}</h5>
                    <p class="card-infos">{{ $ocurrence->description }}</p>
                    <a href="/ocurrences/{{$ocurrence->id}}" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
