@extends('layouts.main')
@section('title', 'App NovaCap')
@section('content')

<h1>Tela de produtos</h1>
@if($busca != '')
<p>O usuário esá buscando por: {{ $busca }}</p>
@endif
@endsection