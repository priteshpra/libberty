<!-- header area start -->
@if (Route::currentRouteName() == 'blog' || Route::currentRouteName() == 'blog.details')
<header id="header" class="header position-relative">
    <div class="container-fluid container-xl position-relative">

        <div class="top-row d-flex align-items-center justify-content-center">
            <a href="{{ route('home') }}" class="logo d-flex align-items-center">
                <img src="{{ asset('front/assets/img/logo.png') }}" alt="A’La Liberty">
            </a>
        </div>
    </div>

    <div class="nav-wrap">
        <div class="container d-flex justify-content-center position-relative">
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('home') }}#about">About</a></li>
                    <li><a href="{{ route('blog') }}" class="active">Blogs</a></li>
                    <li><a href="{{ route('odc') }}"><i class="bi bi-door-open"></i><span>OD
                                Catering</span></a></li>
                    <li><a href="{{ route('home') }}#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </div>
</header>
@else
<header id="header" class="header d-flex flex-column justify-content-center ">
    <i class="header-toggle d-xl-none bi bi-list"></i>
    @if (Route::currentRouteName() == 'regent-hall')
    <nav id="navmenu" class="navmenu">
        <ul>
            <li><a href="{{ route('home') }}"><i class="bi bi-house navicon"></i><span>Home</span></a></li>
            <li><a href="{{ route('anantaa-hall') }}"><i class="bi bi-1-square"></i><span>Anantaa Hall</span></a></li>
            <li><a class="active" href="{{ route('regent-hall') }}"><i class="bi bi-2-square"></i><span>Regent
                        Hall</span></a>
            </li>
            <li><a href="{{ route('banjara-hall') }}"><i class="bi bi-3-square"></i><span>Banjara
                        Hall</span></a></li>
        </ul>
    </nav>
    @elseif (Route::currentRouteName() == 'banjara-hall')
    <nav id="navmenu" class="navmenu">
        <ul>
            <li><a href="{{ route('home') }}"><i class="bi bi-house navicon"></i><span>Home</span></a></li>
            <li><a href="{{ route('anantaa-hall') }}"><i class="bi bi-1-square"></i><span>Anantaa Hall</span></a></li>
            <li><a href="{{ route('regent-hall') }}"><i class="bi bi-2-square"></i><span>Regent
                        Hall</span></a>
            </li>
            <li><a class="active" href="{{ route('banjara-hall') }}"><i class="bi bi-3-square"></i><span>Banjara
                        Hall</span></a></li>
        </ul>
    </nav>
    @elseif (Route::currentRouteName() == 'anantaa-hall')
    <nav id="navmenu" class="navmenu">
        <ul>
            <li><a href="{{ route('home') }}"><i class="bi bi-house navicon"></i><span>Home</span></a></li>
            <li><a class="active" href="{{ route('anantaa-hall') }}"><i class="bi bi-1-square"></i><span>Anantaa
                        Hall</span></a></li>
            <li><a href="{{ route('regent-hall') }}"><i class="bi bi-2-square"></i><span>Regent
                        Hall</span></a>
            </li>
            <li><a href="{{ route('banjara-hall') }}"><i class="bi bi-3-square"></i><span>Banjara
                        Hall</span></a></li>
        </ul>
    </nav>
    @elseif (Route::currentRouteName() == 'home')
    <nav id="navmenu" class="navmenu">
        <ul>
            <li><a href="{{ route('home') }}#hero" class="active"><i
                        class="bi bi-house navicon"></i><span>Home</span></a>
            </li>
            <li><a href="{{ route('home') }}#about"><i class="bi bi-person navicon"></i><span>About</span></a></li>
            <li><a href="{{ route('blog') }}"><i class="bi bi-book navicon"></i><span>Our Blog</span></a></li>
            <li><a href="{{ route('odc') }}"><i class="bi bi-door-open"></i><span>OD
                        Catering</span></a></li>
            <li><a href="{{ route('home') }}#portfolio"><i class="bi bi-images navicon"></i><span>Gallery</span></a>
            </li>
            <li><a href="{{ route('home') }}#contact"><i class="bi bi-envelope navicon"></i><span>Enquiry Now</span></a>
            </li>
        </ul>
    </nav>
    @endif
</header>
@endif
<!-- header area end -->