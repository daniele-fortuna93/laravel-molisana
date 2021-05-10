<footer>
    <div class="container">
        <div class="info">
            <img src="{{ asset('images/marchio-sito-test.png') }}" alt="">
            <ul>
                @foreach ($infoAzienda as $info)
                    <li>{{ $info }}</li>
                @endforeach
                
            </ul>
        </div>
        <div class="footer_link">
            <ul>
                <li><h3>Pastificio</h3></li>
                @foreach ($pastificioLink as $link)
                    <li><a href="#">{{ $link }}</a></li>
                @endforeach
            </ul>
            <ul>
                <li><h3>Collezione da chef</h3></li>
                @foreach ($collezioneChefLink as $link)
                    <li><a href="#">{{ $link }}</a></li>
                @endforeach
            </ul>
            <ul>
                <li><h3>Prodotti</h3></li>
                @foreach ($prodottiLink as $link)
                    <li><a href="#">{{ $link }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <img src="{{ asset('images/footer-montagne-bottom.jpg') }}" alt="">
</footer>