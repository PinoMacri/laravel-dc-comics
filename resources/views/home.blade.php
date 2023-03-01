@extends('layouts.main')
@section('content')
    <main>
        <div class="jumbotron">
            <div class="container">
                <button class="type-1">CURRENT SERIES</button>
            </div>
        </div>
        <div class="container ">
            <ul class="row">
                @foreach ($comics as $comic)
                    <li>
                        <img src="{{ $comic->thumb }}" alt="">
                        <h5>{{ $comic->title }}</h5>
                        <a class="scopri" href="{{ route('comics.show', $comic->id) }}">Scopri di più</a>
                    </li>
                @endforeach
            </ul>
            <div class="button-crea">
                <div class="buttons">
                    <button class="basic-style" :class="type">
                        LOAD MORE
                    </button>
                </div>
                <div class="buttons">
                    <a class="basic-style" href="{{route ("comics.index")}}">Vai al Back-Office</a>
                </div>
            </div>
        </div>
        <div id="listMain">
            <nav class="container">
                <ul>
                    @foreach ($images as $image)
                        <li class="col">
                            <div class="containerList">
                                <div class="imgList">
                                    <img src="{{ Vite::asset("../../public/$image[img]") }}" alt="">
                                </div>
                                <div class="textList">
                                    <p>{{ $image['text'] }}</p>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </main>
@endsection
