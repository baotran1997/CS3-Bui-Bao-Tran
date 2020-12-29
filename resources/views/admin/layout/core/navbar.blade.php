<header class="c-header c-header-light c-header-fixed">
    <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
        <svg class="c-icon c-icon-lg">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
        </svg>
    </button><a class="c-header-brand d-lg-none c-header-brand-sm-up-center" href="#">
        <svg width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="assets/brand/coreui-pro.svg#full"></use>
        </svg></a>
    <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
        <svg class="c-icon c-icon-lg">
            <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-menu') }}"></use>
        </svg>
    </button>
    <ul class="c-header-nav d-md-down-none">
        <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Dashboard</a></li>
        <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">@yield('title')</a></li>
    </ul>
    <ul class="c-header-nav mfs-auto">
        <li class="c-header-nav-item px-3 c-d-legacy-none">
            <button class="c-class-toggler c-header-nav-btn" type="button" id="header-tooltip" data-target="body" data-class="c-dark-theme" data-toggle="c-tooltip" data-placement="bottom" title="Toggle Light/Dark Mode">
                <svg class="c-icon c-d-dark-none">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-moon') }}"></use>
                </svg>
                <svg class="c-icon c-d-default-none">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-sun') }}"></use>
                </svg>
            </button>
        </li>
    </ul>
    <ul class="c-header-nav">
        <li class="c-header-nav-item dropdown d-md-down-none mx-2"><a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <svg class="c-icon">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-bell') }}"></use>
                </svg><span class="badge badge-pill badge-danger">5</span></a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg pt-0">
                <div class="dropdown-header bg-light"><strong>You have 5 notifications</strong></div><a class="dropdown-item" href="#">
                    <svg class="c-icon mfe-2 text-success">
                        <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-user-follow') }}"></use>
                    </svg> New user registered</a><a class="dropdown-item" href="#">
                    <svg class="c-icon mfe-2 text-danger">
                        <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-user-unfollow') }}"></use>
                    </svg> User deleted</a><a class="dropdown-item" href="#">
                    <svg class="c-icon mfe-2 text-info">
                        <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-chart') }}"></use>
                    </svg> Sales report is ready</a><a class="dropdown-item" href="#">
                    <svg class="c-icon mfe-2 text-success">
                        <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-basket') }}"></use>
                    </svg> New client</a><a class="dropdown-item" href="#">
                    <svg class="c-icon mfe-2 text-warning">
                        <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-speedometer') }}"></use>
                    </svg> Server overloaded</a>

            </div>
        </li>


        <li class="c-header-nav-item dropdown mr-3"><a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <div class="c-avatar"><img class="c-avatar-img" src="{{ asset('storage/' . substr(\Illuminate\Support\Facades\Auth::user()->image,7)) }}" alt="user@email.com"></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right pt-0">
                <div class="dropdown-header bg-light py-2"><strong>Account</strong></div>

                <a class="dropdown-item" href="{{ route('users.profile', \Illuminate\Support\Facades\Auth::user()->id) }}">
                    <svg class="c-icon mfe-2">
                        <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-user') }}"></use>
                    </svg><span style="color: #1a202c">{{ \Illuminate\Support\Facades\Auth::user()->name }}</span>
                </a>
                <div class="dropdown-header bg-light py-2"><strong>Settings</strong></div><a class="dropdown-item" href="#">

                    <svg class="c-icon mfe-2">
                        <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-settings') }}"></use>
                    </svg> Settings</a><a class="dropdown-item" href="#">
                    <svg class="c-icon mfe-2">
                        <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-credit-card') }}"></use>
                    </svg> Payments<span class="badge badge-secondary mfs-auto">42</span></a><a class="dropdown-item" href="#">
                    <svg class="c-icon mfe-2">
                        <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-file') }}"></use>
                    </svg> Projects<span class="badge badge-primary mfs-auto">42</span></a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                    <svg class="c-icon mfe-2">
                        <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-lock-locked') }}"></use>
                    </svg> Lock Account</a><a class="dropdown-item" href="{{ route('admin.logout') }}">
                    <svg class="c-icon mfe-2">
                        <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-account-logout') }}"></use>
                    </svg> Logout</a>
            </div>
        </li>

    </ul>

</header>

