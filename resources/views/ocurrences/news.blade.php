@extends('layouts.main')
@section('title', 'App NovaCap')
@section('content')


<link rel="stylesheet" href="/css/styles.css">

<div class='slider'>

    <div class='slides'>
    <!-- Radio Buttons-->
    <input type="radio" name="radio-btn" id="radio1">
    <input type="radio" name="radio-btn" id="radio2">
    <input type="radio" name="radio-btn" id="radio3">
    <input type="radio" name="radio-btn" id="radio4">

    <!--Fim Radio Buttons-->

    <!-- Imagens-->
    <div class="slide first">
        <img src="/img/teste1.jpeg" alt="imagem1">
    </div>
    <div class="slide">
        <img src="/img/teste2.jpeg" alt="imagem2">
    </div>
    <div class="slide">
        <img src="/img/meio-fio.png" alt="imagem3">
    </div>
    <div class="slide">
        <img src="/img/buraco.png" alt="imagem4">
    </div>
    <!--Fim de Imagens-->


        <!--Navigation auto-->
        <div class='navigation-auto'>
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
            <div class="auto-btn4"></div>
        </div>
    </div>

    <div class='manual-navigation'>
    <label for="radio1" class='manual-btn'> </label>
    <label for="radio2" class='manual-btn'> </label>
    <label for="radio3" class='manual-btn'> </label>
    <label for="radio4" class='manual-btn'> </label>

    </div>

</div>
<script src="/js/scripts.js"></script>
@endsection
