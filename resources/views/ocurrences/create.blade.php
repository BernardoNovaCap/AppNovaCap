@extends('layouts.main')
@section('title', 'Criar Ocorrência')
@section('content')

<div id="ocurrence-create-container" class="col-md-6 offset-md-3">
    <h1>Faça a sua ocorrência</h1>
    <form action="/ocurrences" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Imagem da ocorrência:</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>

        <div class="form-group">
            <label for="title">Categoria:</label>
            <select name="type" id="type" class="form-control">
                <option value="" disabled="" selected="">Tipo de ocorrência</option>
                <option value="Buraco">Buraco</option>
                <option value="Meio-fio danificado">Meio-fio danificado</option>
                <option value="Poda de árvore">Poda de árvore</option>
                <option value="Manutenção de boca de lobo">Manutenção de boca de lobo</option>
                <option value="Calçada danificada">Calçada danificada</option>
            </select>
        </div>

        <div class="form-group">
            <label for="type">Descrição:</label>
            <textarea name="description" id="description" class="form-control" placeholder="Descreva seu problema"></textarea>
        </div>

        <div class="form-group">
            <label for="type">Endereço:</label>
            <input type="select" class="form-control" id="adress" name="adress" placeholder="Endereço...">
        </div>

        <div class="form-group">
            <label for="type">Nível de risco:</label>
            <select name="risk" id="risk" class="form-control">
                <option value="Baixo">Baixo</option>
                <option value="Médio">Médio</option>
                <option value="Alto">Alto</option>
            </select>
        </div>
        <input type="submit" class="btn btn-primary" value="Criar Ocorrência">
    </form>
</div>

@endsection