<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="{{ url('/') }}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="/assets/images/logo/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <!-- <img src="/assets/images/logo/logo-dark.png" alt="" height="17"> -->
                <img src="/assets/images/logo/dark.png" alt="" height="30">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="{{ url('/') }}" class="logo logo-light">
            <span class="logo-sm">
                <img src="/assets/images/logo/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <!-- <img src="/assets/images/logo/logo-light.png" alt="" height="17"> -->
                <img src="/assets/images/logo/dark.png" alt="" height="35">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                @foreach ($menus as $menu)
                @can($menu->permission_name)
                <li class="menu-title"><span data-key="t-menu">{{ $menu->name }}</span></li>

                @foreach ($menu->items as $item)
                @can($item->permission_name)
                <li class="nav-item">
                    <a class="nav-link menu-link{{ request()->routeIs($item->route) ? ' active' : '' }}" href="{{ route($item->route) }}">
                        <i class="{{ $item->icon }}"></i> <span data-key="t-landing">{{ $item->name }}</span>
                    </a>
                </li>
                @endcan
                <!-- end can item -->
                @endforeach
                <!-- end foreach items -->
                @endcan
                <!-- end can menu -->
                @endforeach
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>