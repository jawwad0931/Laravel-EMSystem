<nav class="navbar navbar-expand-lg navbar-light bg-light" style="height: 50px">
    <div class="container">
        <!-- Logo -->
        {{-- <a class="navbar-brand" href="#">Brand</a> --}}

        <!-- Hamburger Button for Mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('user.dashboard') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{  route('courses') }}">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{  route('user.contact.create') }}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.form.create') }}">Form</a>
                </li>
            </ul>
            <div class="nav-item d-flex justify-content-end">
                <h4 class="tw-light text-secondary">Education First</h4>
            </div>
        </div>
    </div>
</nav>