<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Welcome Santri</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="{{ (request()->is('asrama')) ? 'nav-item active' : 'nav-item collapsed' }}">
        <a class="nav-link" href="{{ route('asrama.index') }}">
            <img class="mr-2" src="{{ asset('img/Home.svg') }}" alt="">
            <span>Asrama</span></a>
    </li>
    <li class="{{ (request()->is('musyrif')) ? 'nav-item active' : 'nav-item collapsed' }}">
        <a class="nav-link" href="{{ route('musyrif.index') }}">
            <img class="mr-2" src="{{ asset('img/user.svg') }}" alt="">
            <span>Musyrif</span></a>
    </li>
    <li class="{{ (request()->is('jadwalCuti')) ? 'nav-item active' : 'nav-item collapsed' }}">
        <a class="nav-link" href="{{ route('jadwalCuti.index') }}">
            <img class="mr-2" src="{{ asset('img/Calendar.svg') }}" alt="">
            <span>Jadwal Cuti</span></a>
    </li>


</ul>
<!-- End of Sidebar -->