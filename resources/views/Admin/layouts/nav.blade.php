<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('admin/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Syndron</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('admin.index') }}">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">{{ tt('Dashboard') }}</div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.user.index') }}">
                <div class="parent-icon"><i class='bx bx-user-circle'></i>
                </div>
                <div class="menu-title">{{ tt('Users') }}</div>
            </a>
        </li>
        <li class="menu-label">{{ tt('Nav Bar Examples') }}</li>
        <li>
            <a href="widgets">
                <div class="parent-icon"><i class='bx bx-cookie'></i>
                </div>
                <div class="menu-title">{{ tt('Widgets') }}</div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">{{ tt('Dashboard') }}</div>
            </a>
            <ul>
                <li> <a href="{{ url('index') }}"><i class="bx bx-right-arrow-alt"></i>{{ tt('eCommerce') }}</a>
                </li>
                <li> <a href="{{ url('dashboard-alternate') }}"><i class="bx bx-right-arrow-alt"></i>{{ tt('Analytics') }}</a>
                </li>
            </ul>
        </li>
    </ul>
</div>
