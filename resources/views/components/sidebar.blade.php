<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<<<<<<< Updated upstream
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>
=======

>>>>>>> Stashed changes

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="{{ (request()->is('/dashboard')) ? 'nav-link active' : 'nav-link collapsed' }}"
<<<<<<< Updated upstream
            href="{{ route('dashboard') }}">
=======
            href="{{ route('asrama.index') }}">
>>>>>>> Stashed changes
            <img class="" src="{{ asset('img/Home.svg') }}" alt="">
            <span>Asrama</span></a>
    </li>
    <li class="nav-item">
        <a class="{{ (request()->is('/musyrif')) ? 'nav-link active' : 'nav-link collapsed' }}"
<<<<<<< Updated upstream
            href="{{ route('musyrif') }}">
=======
            href="{{ route('musyrif.index') }}">
>>>>>>> Stashed changes
            <img class="" src="{{ asset('img/user.svg') }}" alt="">
            <span>Musyrif</span></a>
    </li>
    <li class="nav-item">
        <a class="{{ (request()->is('/jadwalCuti')) ? 'nav-link active' : 'nav-link collapsed' }}"
<<<<<<< Updated upstream
            href="{{ route('jadwalCuti') }}">
=======
            href="{{ route('cutiMusyrif.index') }}">
>>>>>>> Stashed changes
            <img class="" src="{{ asset('img/Calendar.svg') }}" alt="">
            <span>Jadwal Cuti</span></a>
    </li>


</ul>
<!-- End of Sidebar -->