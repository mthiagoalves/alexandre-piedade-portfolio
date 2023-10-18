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
@include('components.banner-home')
