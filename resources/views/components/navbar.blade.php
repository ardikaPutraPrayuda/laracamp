<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Yayasan Pendidikan Candana</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('schedule') }}">Jadwal Penerimaan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('fee') }}">Biaya</a>
                </li>
            </ul>
            @auth
            <div class="d-flex user-logged nav-item dropdown no-arrow">
                <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Halo, {{ Auth::user()->name }}!
                    @if (Auth::user()->avatar)
                        <img src="{{ Auth::user()->avatar }}" class="user-photo" alt="" style="border-radius: 50%">
                    @else
                        <img src="https://ui-avatars.com/api/?name=Admin" class="user-photo" alt="" style="border-radius: 50%">
                    @endif
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="right:0; left:0;">
                        <li>
                            <a href="{{ route('dashboard') }}" class="dropdown-item">My Dashboard</a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Sign Out</a>
                            <form id="logout-form" action="logout" method="POST" style="display:none">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                        </li>
                    </ul>
                </a>
            </div>
            @else
            <div class="d-flex">
                <a href="{{ route('login') }}" class="btn btn-master btn-secondary me-3">
                    Sign In
                </a>
                <a href="{{ route('login') }}" class="btn btn-master btn-primary">
                    Sign Up
                </a>
            </div>
            @endauth
        </div>
    </div>
</nav>
