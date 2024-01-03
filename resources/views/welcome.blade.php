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
            <img src="/img/IMGNOVACAP/IMG_0908.JPG" alt="Buraco">
            <div class="card-body">
                <h5 class="card-type">Buraco</h5>
                <p class="card-infos">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum harum veritatis, quod quo hic pariatur?</p>
                <a href="#" class="btn btn-primary" onclick="openModal('/img/IMGNOVACAP/IMG_0908.JPG', 'Buraco', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum harum veritatis, quod quo hic pariatur?')">Saber mais</a>
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

        <div class="card col-md-3">
            <img src="/img/IMGNOVACAP/IMG_1230.JPG" alt="Meio-fio danificado">
            <div class="card-body">
                <h5 class="card-type">Meio-fio danificado</h5>
                <p class="card-infos">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum harum veritatis, quod quo hic pariatur?</p>
                <a href="#" class="btn btn-primary" onclick="openModal('/img/IMGNOVACAP/IMG_0908.JPG', 'Buraco', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum harum veritatis, quod quo hic pariatur?')">Saber mais</a>
            </div>
        </div>

        <div class="card col-md-3">
            <img src="/img/IMGNOVACAP/IMG_0755.JPG" alt="Poda de árvore">
            <div class="card-body">
                <h5 class="card-type">Poda de árvore</h5>
                <p class="card-infos">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum harum veritatis, quod quo hic pariatur?</p>
                <a href="#" class="btn btn-primary">Saber mais</a>
            </div>
        </div>

        <div class="card col-md-3">
            <img src="/img/IMGNOVACAP/_MG_0246.JPG" alt="Manutenção em boca de lobo">
            <div class="card-body">
                <h5 class="card-type">Manutenção em boca de lobo</h5>
                <p class="card-infos">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum harum veritatis, quod quo hic pariatur?</p>
                <a href="#" class="btn btn-primary">Saber mais</a>
            </div>
        </div>

        <div class="card col-md-3">
            <img src="/img/IMGNOVACAP/IMG_6033.JPG" alt="Calçada danificada">
            <div class="card-body">
                <h5 class="card-type">Calçada danificada</h5>
                <p class="card-infos">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum harum veritatis, quod quo hic pariatur?</p>
                <a href="#" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
    </div>
</div>

@endsection