<nav class="navbar navbar-expand-lg navbar-light bg-black">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}" style="color: #0dcaf0">Doctor Appointment</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : 'custom-inactive' }}" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('doctors.index') ? 'active' : 'custom-inactive' }}" href="{{ route('doctors.index') }}">Doctor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('appointments.*') ? 'active' : 'custom-inactive' }}" href="{{ route('appointments.index') }}">Appointment</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    .navbar-light .navbar-nav .nav-link.active {
        color: white; /* Set the active color to white */
    }

    .navbar-light .navbar-nav .nav-link.custom-inactive,
    .navbar-light .navbar-nav .nav-link.custom-inactive:hover {
        color: #B2BEB5 !important;
    }
</style>
