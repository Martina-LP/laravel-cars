<header>
    <div class="container">
        <div class="header-position">
            <div class="logo">
                {{-- Logo --}}
                <i class="fas fa-car"></i>
            </div>
            <div class="nav">
                {{-- Nav con Homepage, Listino, Aggiungi --}}
                <div>
                    <a href="{{ route('welcome') }}"
                    class="{{ Request::route()->getName() === 'home' ? 'active' : '' }}">
                        Homepage
                    </a>
                </div>
                <div>
                    <a href="{{ route('cars.index') }}"
                    class="{{ Request::route()->getName() === 'cars.index' ? 'active' : '' }}">
                        Listino
                    </a>
                </div>
                <div>
                    <a href="{{ route('cars.create') }}"
                    class="{{ Request::route()->getName() === 'cars.create' ? 'active' : '' }}">
                        Aggiungi la tua macchina di lusso
                    </a>
                </div>
            </div>
            <div class="searchbar">
                <input type="text" placeholder="Search">
                <i class="fas fa-search search"></i>
            </div>
        </div>
    </div>
</header>