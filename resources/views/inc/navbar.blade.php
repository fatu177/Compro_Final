<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
    navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
        {{-- <nav aria-label="breadcrumb">

        </nav> --}}
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                <span class="d-sm-inline d-none"></span>
            </div>
            <ul class="navbar-nav  justify-content-end">
                <li class="nav-item d-flex align-items-center">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf

                        <button type="submit" class="nav-link text-body font-weight-bold px-0" style="border: none">
                            <i class="fa fa-sign-out me-sm-1"></i>
                            <span class="d-sm-inline d-none">Logout</span>
                        </button>
                    </form>
                </li>
                <li class="nav-item d-xl-none ps-3 d-flex align-items-center">

                </li>
                <li class="nav-item px-3 d-flex align-items-center">

                </li>
                <li class="nav-item dropdown pe-2 d-flex align-items-center">

                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
