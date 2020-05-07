<nav class="navbar navbar-expand-lg navbar-light static-top ">
    <div class="container-fluid header-container container-default">
        <a class="navbar-brand" href="#">
            <img class="logo" src="/assets/images/logo.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0" id="leftmenu">
                <li class="nav-item @if (Route::currentRouteName()=='home') active @endif">
                    <a class="nav-link" href="{{ route('home') }}">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item @if (Route::currentRouteName()=='about') active @endif">
                    <a class="nav-link" href="{{ route('about') }}"> Tentang Covid-19 </a>
                </li>
                <li class="nav-item @if (Route::currentRouteName()=='data') active @endif">
                    <a class="nav-link" href="{{ route('data') }}"> Data </a>
                </li>
                <li class="nav-item @if (Route::currentRouteName()=='detector') active @endif">
                    <a class="nav-link" href="{{ route('detector') }}"> Deteksi Diri </a>
                </li>
                <li class="nav-item @if (Route::currentRouteName()=='tips') active @endif">
                    <a class="nav-link" href="{{ route('tips') }}"> Info dan Tips </a>
                </li>
                <li class="nav-item @if (Route::currentRouteName()=='contacts') active @endif">
                    <a class="nav-link" href="{{ route('contacts') }}"> Kontak </a>
                </li>
            </ul>
            <a href="https://sc19.ub.ac.id/" type="button" class="btn btn-outline-info btn-sm login-btn"> Login </a>

        </div>
    </div>
</nav>
