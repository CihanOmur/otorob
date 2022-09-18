    <header>
        <div class="topbar d-flex align-items-center">
            <nav class="navbar navbar-expand">
                <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
                </div>

                <div class="top-menu ms-auto">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item dropdown dropdown-large">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span
                                    class="alert-count">7</span>
                                <i class='bx bx-bell'></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="javascript:;">
                                    <div class="msg-header">
                                        <p class="msg-header-title">{{ tt('Notifications') }}</p>
                                        <p class="msg-header-clear ms-auto">{{ tt('Marks all as read') }}</p>
                                    </div>
                                </a>
                                <div class="header-notifications-list">
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify bg-light-primary text-primary"><i
                                                    class="bx bx-group"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">{{ tt('New Customers') }}<span class="msg-time float-end">14
                                                        Sec
                                                        ago</span></h6>
                                                <p class="msg-info">{{ tt('5 new user registered') }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <a href="javascript:;">
                                    <div class="text-center msg-footer"> {{ tt('View All Notifications') }}</div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="user-box dropdown">
                    <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" style="width: 39px; height: 39px">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                          </svg>
                          
                        <div class="user-info ps-3">
                            <p class="user-name mb-0">{{ auth()->user()->full_name }}</p>
                            <p class="designattion mb-0">{{ tt(auth()->user()->getRoleNames()[0]) }}</p>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="{{ route('admin.user.view', [auth()->user()]) }}"><i class="bx bx-user"></i><span>{{ tt('Profile') }}</span></a>
                        </li>
                        <li>
                            <div class="dropdown-divider mb-0"></div>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}"><i
                                    class='bx bx-log-out-circle'></i><span>{{ tt('Logout') }}</span></a>
                        </li>
                    </ul>
                </div>
                <div class="user-box dropdown">
                    <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="user-info ps-3">
                            <p class="user-name mb-0">{{ tt('Language') }} ( {{ App::getLocale() }} ) </p>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="{{ route('language.change', 'en') }}"><span>{{ tt('English') }}<span class="float-end">( en )</span></span></a>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('language.change', 'tr') }}"><span>{{ tt('Turkish') }}<span class="float-end">( tr )</span></span></a>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('language.change', 'fr') }}"><span>{{ tt('French') }}<span class="float-end">( fr )</span></span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
