@extends('layouts.main')
@section('content')
    <main>
        <div class="jumbotron">
            <div class="container">
                <button class="type-1">CURRENT SERIES</button>
            </div>
        </div>
        <div class="container single">
            <div>
                <h2>{{ $comic->title }}</h2>
                <div class="cardFumetto">
                    <div class="fumetto">

                        <div class="greenFumetto">
                            <p>U.S. Price: {{ $comic->price }}</p>
                            <p>AVAILABLE</p>
                        </div>
                        <div class="greenFumettoDue">
                            <p> Check Availability </p>
                        </div>


                    </div>
                    <div class="description">
                        <p>{{ $comic->description }}</p>
                    </div>
                </div>
            </div>
            <div class="cardImg">
                <img src="{{ $comic->thumb }}" alt="">
            </div>
        </div>
        <div class="button">
            <a class="btn" href="{{ route('home') }}">Torna Indietro</a>
            <a class="btn" href="{{ route('comics.edit', $comic->id) }}">Modifica</a>
            
            <form class="btn-destroy" action="{{route("comics.destroy", $comic->id)}}" method="POST">
            @csrf
            @method("DELETE")
                <button class="delete-btn" type="submit">Elimina</button>
            </form>
        </div>
        <div class="specifiche">
            <div class="specific container">
                <div class="colonnaUno">
                    <div>
                        <h3>Talent</h3>
                        <span>
                            <h5>Art by:</h5>
                            <p>{{ $comic->artists }}</p>
                        </span>
                        <span>
                            <h5>Written by:</h5>
                            <p>{{ $comic->writers }}</p>
                        </span>
                    </div>
                </div>

                <div class="colonnaDue">
                    <div>
                        <h3>Specs</h3>
                        <span>
                            <h5>Series:</h5>
                            <p>{{ $comic->series }}</p>
                        </span>
                        <span>
                            <h5>U.S. Price:</h5>
                            <p>{{ $comic->price }}</p>
                        </span>
                        <span>
                            <h5>On Sale Date:</h5>
                            <p>{{ $comic->sale_date }}</p>
                        </span>
                    </div>
                </div>
            </div>
    </main>
@endsection
