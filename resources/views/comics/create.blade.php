@extends('layouts.main')
@section('content')
<main>
<div class="container">
    <form action="{{route("comics.store")}}" method="POST" class="rows">
    @csrf
        <div class="col-fumetto">
            <label for="title">Titolo</label>
            <input type="text" id="title" name="title" placeholder="Titolo del fumetto"> 
        </div>
        <div class="col-thumb">
            <label for="thumb">Logo</label>
            <input type="text" name="thumb" id="thumb" placeholder="Logo">
        </div>
        <div class="col-prezzo">
            <label for="price">Prezzo</label>
            <input type="text" name="price" id="price" placeholder="Prezzo">
        </div>
        <div class="col-serie">
            <label for="series">Serie</label>
            <input type="text" name="series" id="series" placeholder="Serie">
        </div>
        <div class="col-data-uscita">
            <label for="sale_date">Data di uscita</label>
            <input type="text" name="sale_date" id="sale_date" placeholder="Data di uscita">
        </div>
        <div class="col-tipo">
            <label for="type">Tipo</label>
            <input type="text" name="type" id="type" placeholder="Tipo">
        </div>
        <div class="col-artisti">
            <label for="artists">Artisti</label>
            <input type="text" name="artists" id="artists" placeholder="Artisti">
        </div>
        <div class="col-data-uscita">
            <label for="writers">Tipo</label>
            <input type="text" name="writers" id="writers" placeholder="Scrittori">
        </div>
        <div class="col-descrizione">
            <label for="description">Descrizione</label>
            <textarea name="description" id="description" cols="150" rows="3"></textarea>
        </div>
        <button class="basic-style">Invia</button>
    </form>
    <div class="buttons">
        <a class="basic-style btn-home" href="{{route("home")}}">Torna alla Home</a>
    </div>
  
</div>
</main>
@endsection