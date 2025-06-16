<nav class="navbar navbar-expand-lg main_menu">
    <div class="container container_large">
        <a class='navbar-brand' href='{{ route('home') }}'>
            <img src="{{ asset('assets/images/logos/logo-lys.jpg') }}" class="logonav" width="50px" alt="FaxEstate"
                class="img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars bar_icon"></i>
            <i class="far fa-times close_icon"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class='nav-link {{ $menu == 'home' ? 'active' : '' }}' href='{{ route('home') }}'>Accueil</a>
                </li>
                <li class="nav-item">
                    <a class='nav-link {{ $menu == 'about' ? 'active' : '' }}' href='{{ route('about') }}'>A propos</a>
                </li>
                <li class="nav-item">
                    <a class='nav-link {{ $menu == 'propertie' ? 'active' : '' }}'
                        href='{{ route('propertie') }}'>Propriétés</a>
                </li>
            </ul>
            <ul class="menu_right d-flex align-items-center">

                <li class="manu_btn">
                    <a href="{{ route('contact') }}" class='common_btn' href=''>Contactez-nous</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
