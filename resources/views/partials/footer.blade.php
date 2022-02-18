<footer>
    <div class="container">
        <div class="footer-position">
            <div class="list">
                {{-- Lista migliori marche --}}
                <ul>
                    <h3>
                        I nostri migliori prodotti
                    </h3>
                    <li>
                        <a href="#">
                            Ferrari
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Lamborghini
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Tesla
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Pagani
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Porsche
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('cars.index')}}">
                            Tutte le altre ...
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer-img">
                {{-- Foto macchina --}}
                <img src="https://www.lussoblog.com/wp-content/uploads/2019/05/macchine-di-lusso-Bugatti-Divo.jpg" alt="macchina di lusso">
            </div>
        </div>
    </div>
</footer>