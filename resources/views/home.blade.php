@extends('layouts.main')
@section('titlePage')
    Home Page La Molisana | Sito Ufficiale
@endsection

@section('content')
<div class="main-bg">
    <div class="container">
        {{-- inizio sezione --}}
    <section>
        <h2>Le Lunghe</h2>
        <div class="cards">
            @foreach ($lunghe as $pasta)
                <div class="card">
                    <a href="{{ route('prodotti', ['id' => $pasta['id']])}}"><img src="{{ $pasta['src'] }}" alt="{{ $pasta['titolo'] }}"></a>
                </div>
            @endforeach
        </div>
    </section>
    {{-- fine sezione --}}
    {{-- inizio sezione --}}
    <section>
        <h2>Le corte</h2>
        <div class="cards">
            @foreach ($corte as $pasta)
                <div class="card">
                    <a href="{{ route('prodotti', ['id' => $pasta['id']])}}"><img src="{{ $pasta['src'] }}" alt="{{ $pasta['titolo'] }}"></a>
                </div>
            @endforeach
        </div>
    </section>
    {{-- fine sezione --}}
    {{-- inizio sezione --}}
    <section>
        <h2>Le cortissime</h2>
        <div class="cards">
            @foreach ($cortissime as $pasta)
                <div class="card">
                    <a href="{{ route('prodotti', ['id' => $pasta['id']])}}"><img src="{{ $pasta['src'] }}" alt="{{ $pasta['titolo'] }}"></a>
                </div>
            @endforeach
        </div>
    </section>
    {{-- fine sezione --}}
    </div>
</div>
@endsection