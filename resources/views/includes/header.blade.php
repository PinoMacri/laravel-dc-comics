@php
    $links = config('menu');
@endphp
<header>
    <div class="container">
        <ul class="row">
            <li class="col">
                <a href="#">
                    <img src="{{ Vite::asset('../../../public/dc-logo.png') }}" alt="">
                </a>
            </li>
            @foreach ($links as $link)
                <li class="col">
                    <a href="{{ $link === 'CHARACTERS' ? '/' : $link }}">
                        {{ $link }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</header>
