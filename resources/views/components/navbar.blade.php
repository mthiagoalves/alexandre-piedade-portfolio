<nav class="navbar px-4 pt-3">
    <div class="container-fluid px-5">
        <a class="navbar-brand" href="#">
            <p class="text-logo-navbar">
                AP.
            </p>
        </a>
        <ul class="nav justify-content-end">
            <li class="nav-item mx-3">
                <a class="p-2 px-3" aria-current="page" href="{{ route('pageAbout') }}">About</a>
            </li>
            <li class="nav-item mx-3">
                <a class="p-2 px-3" href="{{ route('pageWork') }}">Work</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container-fluid p-0">
    <div class="col-12 p-0 position-relative">
        <div class="blur"></div>
        <img src="https://dummyimage.com/1920x1000/292a2f/0011ff" alt="banner" class="img-fluid initial-banner">
        <div class="located-in-pt">
            <div class="img-located-in-pt">
                <img src="{{ asset('/img/world.png') }}" alt="world" class="img-fluid rotate-image">
            </div>
            <div class="text-located-in-pt">
                <p>
                    Located in Portugal
                </p>
            </div>
        </div>
        <div class="text-name-main-banner">
            <p>
                Piedade - Alexandre
            </p>
        </div>
    </div>
</div>
