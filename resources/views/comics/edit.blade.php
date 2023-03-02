@extends('layouts.main')
@section('content')
<main>
<div class="container">
    <form action="{{route("comics.update", $comic->id)}}" method="POST" class="rows">
    @method('PUT')
    @csrf
        <div class="col-fumetto">
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" placeholder="Titolo del fumetto" value="{{old('title', $comic->title)}}"> 
        </div>
        <div class="col-thumb">
            <label for="thumb">Logo</label>
            <input type="text" name="thumb" id="thumb" placeholder="Logo" value="{{old('thumb', $comic->thumb)}}" >
        </div>
        <div class="col-prezzo">
            <label for="price">Prezzo</label>
            <input type="text" name="price" id="price" placeholder="Prezzo" value="{{old('price', $comic->price)}}">
        </div>
        <div class="col-serie">
            <label for="series">Serie</label>
            <input type="text" name="series" id="series" placeholder="Serie" value="{{old('series', $comic->series)}}">
        </div>
        <div class="col-data-uscita">
            <label for="sale_date">Data di uscita</label>
            <input type="text" name="sale_date" id="sale_date" placeholder="Data di uscita" value="{{old('sale_date', $comic->sale_date)}}">
        </div>
        <div class="col-tipo">
            <label for="type">Tipo</label>
            <input type="text" name="type" id="type" placeholder="Tipo" value="{{old('type', $comic->type)}}">
        </div>
        <div class="col-artisti">
            <label for="artists">Artisti</label>
            <input type="text" name="artists" id="artists" placeholder="Artisti" value="{{old('artists', $comic->artists)}}">
        </div>
        <div class="col-data-uscita">
            <label for="writers">Tipo</label>
            <input type="text" name="writers" id="writers" placeholder="Scrittori" value="{{old('writers', $comic->writers)}}">
        </div>
        <div class="col-descrizione">
            <label for="description">Descrizione</label>
            <textarea name="description" id="description" cols="150" rows="3">{{old('description', $comic->description)}}</textarea>
        </div>
        <button class="basic-style">Modifica</button>
    </form>
    <div class="buttons">
        <a class="basic-style btn-home" href="{{route("home")}}">Torna alla Home</a>
    </div>
  
</div>
</main>
@endsection