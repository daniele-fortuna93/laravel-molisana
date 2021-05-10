<header>
    <div class="logo">
        <img src="{{ asset('images/marchio-sito-test.png') }}" alt="Logo La Molisana">
    </div>
    <nav>
        <ul>
            <li><a class="{{Route::getCurrentRoute()->getName() == 'homepage' ? 'active' : ''}}" href="{{ route('homepage')}}">Home</a></li>
            <li><a class="{{Route::getCurrentRoute()->getName() == 'prodotti' ? 'active' : ''}}" href="{{ route('prodotti', ['id' => 0])}}">Prodotti</a></li>
            <li><a class="{{Route::getCurrentRoute()->getName() == 'news' ? 'active' : ''}}" href="{{ route('news')}}">News</a></li>
        </ul>
        <div class="burger-menu">
            <i class="fas fa-bars"></i>
        </div>
    </nav>
</header>