@extends('layouts.main')
@section('title', 'App NovaCap')
@section('content')

<?php

$rss_feed = simplexml_load_file("https://www.novacap.df.gov.br/category/noticias/feed/");

$lastUpdate = date('d/m/Y à\s H:i:s', strtotime($rss_feed->channel->lastBuildDate));
$date = date('d/m/Y à\s H:i:s', strtotime($rss_feed->channel->item->pubDate));

?>

<link rel="stylesheet" href="/css/styles.css">


    <div class="text-center">

        <img src="https://www.novacap.df.gov.br/wp-content/uploads/2020/05/cropped-1056a8b4-7fbd-4039-89dd-471b01e6d5e5-32x32.jpg" class="m-3 img-fluid">

        <h1 class="mb-3"><?php echo $rss_feed->channel->title; ?></h1>
        <p class="mb-4">Atualizado em <?php echo $lastUpdate; ?></p>

    </div>

</div>

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

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<?php

$rss_feed = simplexml_load_file("https://www.novacap.df.gov.br/category/noticias/feed/");

$lastUpdate = date('d/m/Y à\s H:i:s', strtotime($rss_feed->channel->lastBuildDate));
$date = date('d/m/Y à\s H:i:s', strtotime($rss_feed->channel->item->pubDate));

?>

<?php

if (! empty($rss_feed)) {
    $i = 0;

    foreach ($rss_feed->channel->item as $feed_item) {
        if ($i >= 10)
            break;

?>

    <div class="container p-4 mt-5">

        <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center">

            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title"><?php echo $feed_item->title; ?></h2>
                        <img src="<?php echo $feed_item->imagem_obrigatoria; ?>" class="card-img-top mb-2" alt="<?php echo $feed_item->title; ?>">
                        <p class="card-text"><?php echo $feed_item->sutia_destaque; ?></p>
                        <a href="<?php echo $feed_item->link; ?>" target="_blank">Ler Notícia Completa</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Publicado em <?php echo $date; ?></b></small>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

<?php
        $i ++;
    }
}
?>

@endsection
