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
                <h2>{{ $fumetto->title }}</h2>
                <div class="cardFumetto">
                    <div class="fumetto">

                        <div class="greenFumetto">
                            <p>U.S. Price: {{ $fumetto->price }}</p>
                            <p>AVAILABLE</p>
                        </div>
                        <div class="greenFumettoDue">
                            <p> Check Availability </p>
                        </div>


                    </div>
                    <div class="description">
                        <p>{{ $fumetto->description }}</p>
                    </div>
                </div>
            </div>
            <div class="cardImg">
                <img src="{{ $fumetto->thumb }}" alt="">
            </div>
        </div>
        <div class="button">
            <a class="btn" href="{{ route('home') }}">Torna Indietro</a>
        </div>
        <div class="specifiche">
            <div class="specific container">
                <div class="colonnaUno">
                    <div>
                        <h3>Talent</h3>
                        <span>
                            <h5>Art by:</h5>
                            <p>{{ $fumetto->artists }}</p>
                        </span>
                        <span>
                            <h5>Written by:</h5>
                            <p>{{ $fumetto->writers }}</p>
                        </span>
                    </div>
                </div>

                <div class="colonnaDue">
                    <div>
                        <h3>Specs</h3>
                        <span>
                            <h5>Series:</h5>
                            <p>{{ $fumetto->series }}</p>
                        </span>
                        <span>
                            <h5>U.S. Price:</h5>
                            <p>{{ $fumetto->price }}</p>
                        </span>
                        <span>
                            <h5>On Sale Date:</h5>
                            <p>{{ $fumetto->sale_date }}</p>
                        </span>
                    </div>
                </div>
            </div>
    </main>
@endsection
