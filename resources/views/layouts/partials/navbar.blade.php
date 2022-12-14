<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-nav-theme shadow-card py-3">
    <a class="navbar-brand ml-4" href="/">SIMPEG</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Beranda <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/kepegawaian">Kepegawaian</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/akademik">Akademik</a>
            </li>
        </ul>
        <ul class="navbar-nav mr-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-black" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Menu Website
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @if (auth()->user() != null)
                        <a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a>
                    @else
                        <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                    @endif
                    <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
