@extends('layouts.main')
@section('titlePage')
    {{ $pasta['titolo']}}
@endsection

@section('content')
<div class="product-bg">
    <div class="container">
        <div class="product">
            <h1>{{ $pasta['titolo'] }}</h1>
            <img src="{{ $pasta['src-h'] }}" alt="">
            <img src="{{ $pasta['src-p'] }}" alt="{{ $pasta['titolo'] }}">
            <p>{!! $pasta['descrizione'] !!}</p>
            <a href="{{ route('prodotti', $prev)}}" class="angle left"><i class="fas fa-angle-left"></i></a>
            <a href="{{ route('prodotti', $next)}}" class="angle right"><i class="fas fa-angle-right"></i></a>
        </div>
    </div>
</div>
@endsection