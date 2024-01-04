@extends('layouts.main')
@section('title', $ocurrence->type)
@section('content')

<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class="col-md-6">
            <img src="/img/ocurrences/{{ $ocurrence->image }}" class="img-fluid" alt="{{ $ocurrence->type }}">
        </div>

        <div id="info-container" class="col-md-6">
            <h1>{{ $ocurrence->type }}</h1>
            <p class="ocurrence-adress"><ion-icon name="location-outline"></ion-icon> {{ $ocurrence->adress }}</p>
            <p class="ocurrence-owner"><ion-icon name="star-outline"></ion-icon>Ocorrência criada por: {{ $ocurrenceOwner ['name']}}</p>
        </div>

        <div class="col-md-12" id="description-container">
            <h3>Descrição da ocorrência:</h3>
            <p class="ocurrence-description">{{ $ocurrence->description }}</p>
        </div>
    </div>
</div>

@endsection