<nav class="navbar navbar-expand-lg px-4 pt-3">
    <div class="container-fluid px-sm-5">
        <a class="navbar-brand" href="{{ route('pageHomepage') }}">
            <p class="text-logo-navbar">
                AP.
            </p>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav text-end">
                <li class="nav-item my-2 mx-sm-3 d-block d-sm-none">
                    <a class="" aria-current="page" href="{{ route('pageHomepage') }}">Homepage</a>
                </li>
                <li class="nav-item my-2 mx-sm-3">
                    <a class="" aria-current="page" href="{{ route('pageAbout') }}">About</a>
                </li>
                <li class="nav-item my-2 mx-sm-3">
                    <a class="" href="{{ route('pageWork') }}">Work</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@include('components.banner-home')
