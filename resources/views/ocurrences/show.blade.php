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
            <p class="ocurrence-adress"><ion-icon class="location-outline"></ion-icon> {{ $ocurrence->adress }}</p>
        </div>
    </div>
</div>

@endsection