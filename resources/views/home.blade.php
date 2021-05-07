<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>La Molisana</title>
        {{-- font awesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
        {{-- google font --}}
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
        {{-- css --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        @include('partials/header')
        <main>
            <div class="container">
                 {{-- inizio sezione --}}
                <section>
                    <h2>Le Lunghe</h2>
                    <div class="cards">
                        @foreach ($lunghe as $pasta)
                            <div class="card">
                                <img src="{{ $pasta['src'] }}" alt="{{ $pasta['titolo'] }}">
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
                                <img src="{{ $pasta['src'] }}" alt="{{ $pasta['titolo'] }}">
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
                                <img src="{{ $pasta['src'] }}" alt="{{ $pasta['titolo'] }}">
                            </div>
                        @endforeach
                    </div>
                </section>
                {{-- fine sezione --}}
            </div>
        </main>
        @include('partials/footer')
    </body>
</html>