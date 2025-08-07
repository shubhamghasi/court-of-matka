@php
    $route = Route::currentRouteName();
@endphp

<aside class="sidebar-nav-wrapper">
    <div class="navbar-logo">
        <a href="index.html">
            <img src="/assets/admin/images/logo/logo.svg" alt="logo" />
        </a>
    </div>
    <nav class="sidebar-nav">
        <ul>
            <li class="nav-item">
                <a href="{{ route('admin.home') }}">
                    <span class="icon"><span class="mdi mdi-view-dashboard"></span></span>
                    <span class="text">Dashboard</span>
                </a>
            </li>

            {{-- Markets --}}
            @php $isMarket = Route::is('admin.market.*'); @endphp
            <li class="nav-item nav-item-has-children">
                <a href="#0" data-bs-toggle="collapse" data-bs-target="#market_nav" aria-controls="market_nav"
                    aria-expanded="{{ $isMarket ? 'true' : 'false' }}" aria-label="Toggle navigation">
                    <span class="icon"><span class="mdi mdi-store"></span></span>
                    <span class="text">Markets</span>
                </a>
                <ul id="market_nav" class="dropdown-nav {{ $isMarket ? 'show' : 'collapse' }}">
                    <li><a href="{{ route('admin.market.index') }}"
                            class="{{ $route === 'admin.market.index' ? 'active' : '' }}">Markets List</a></li>
                    <li><a href="{{ route('admin.market.create') }}"
                            class="{{ $route === 'admin.market.create' ? 'active' : '' }}">Add Market</a></li>
                </ul>
            </li>

            {{-- Users --}}
            @php $isUsers = Route::is('admin.user*'); @endphp
            <li class="nav-item nav-item-has-children">
                <a href="#0" data-bs-toggle="collapse" data-bs-target="#users_nav" aria-controls="users_nav"
                    aria-expanded="{{ $isUsers ? 'true' : 'false' }}" aria-label="Toggle navigation">
                    <span class="icon"><span class="mdi mdi-account-group"></span></span>
                    <span class="text">Users</span>
                </a>
                <ul id="users_nav" class="dropdown-nav {{ $isUsers ? 'show' : 'collapse' }}">
                    <li><a href="{{ route('admin.user') }}" class="{{ $route === 'admin.user' ? 'active' : '' }}">Users
                            List</a></li>
                </ul>
            </li>

            @php $isUsers = Route::is('admin.manage.number*'); @endphp
            <li class="nav-item nav-item-has-children">
                <a href="#0" data-bs-toggle="collapse" data-bs-target="#manage_number"
                    aria-controls="manage_number" aria-expanded="{{ $isUsers ? 'true' : 'false' }}"
                    aria-label="Toggle navigation">
                    <span class="icon"><span class="mdi mdi-numeric-9-box"></span></span>
                    <span class="text">Manage Numbers</span>
                </a>
                <ul id="manage_number" class="dropdown-nav {{ $isUsers ? 'show' : 'collapse' }}">
                    <li><a href="{{ route('admin.manage.number.index') }}"
                            class="{{ $route === 'admin.manage.number.index' ? 'active' : '' }}">Manage
                            Number-Amount</a>
                    </li>
                    <li><a href="{{ route('admin.manage.number.create') }}"
                            class="{{ $route === 'admin.manage.number.create' ? 'active' : '' }}">Add Number-Amount</a>
                    </li>
                </ul>
            </li>

            {{-- Matka Bets --}}
            @php $isMatka = Route::is('getMatkaBetList'); @endphp
            <li class="nav-item nav-item-has-children">
                <a href="#0" data-bs-toggle="collapse" data-bs-target="#matka_bets" aria-controls="matka_bets"
                    aria-expanded="{{ $isMatka ? 'true' : 'false' }}" aria-label="Toggle navigation">
                    <span class="icon"><span class="mdi mdi-cards-spade"></span></span>
                    <span class="text">Matka Bets</span>
                </a>
                <ul id="matka_bets" class="dropdown-nav {{ $isMatka ? 'show' : 'collapse' }}">
                    <li><a href="{{ route('getMatkaBetList') }}"
                            class="{{ $route === 'getMatkaBetList' ? 'active' : '' }}">Bet List</a></li>
                </ul>
            </li>

            {{-- Trend Check --}}
            @php $isTrends = Route::is('admin.trends'); @endphp
            <li class="nav-item nav-item-has-children">
                <a href="#0" data-bs-toggle="collapse" data-bs-target="#trend_check_requests"
                    aria-controls="trend_check_requests" aria-expanded="{{ $isTrends ? 'true' : 'false' }}"
                    aria-label="Toggle navigation">
                    <span class="icon"><span class="mdi mdi-trending-up"></span></span>
                    <span class="text">Trends Check</span>
                </a>
                <ul id="trend_check_requests" class="dropdown-nav {{ $isTrends ? 'show' : 'collapse' }}">
                    <li><a href="{{ route('admin.trends') }}"
                            class="{{ $route === 'admin.trends' ? 'active' : '' }}">Requests</a></li>
                </ul>
            </li>
            {{-- Doubt Check --}}
            @php $isDoubt = Route::is('admin.doubt.index'); @endphp
            <li class="nav-item nav-item-has-children">
                <a href="#0" data-bs-toggle="collapse" data-bs-target="#doubt_check_nav"
                    aria-controls="doubt_check_nav" aria-expanded="{{ $isDoubt ? 'true' : 'false' }}"
                    aria-label="Toggle navigation">
                    <span class="icon"><span class="mdi mdi-comment-question-outline"></span></span>
                    <span class="text">Doubt Checks</span>
                </a>
                <ul id="doubt_check_nav" class="dropdown-nav {{ $isDoubt ? 'show' : 'collapse' }}">
                    <li>
                        <a href="{{ route('admin.doubt.index') }}"
                            class="{{ $route === 'admin.doubt.index' ? 'active' : '' }}">
                            Requests
                        </a>
                    </li>
                </ul>
            </li>

            {{-- Refunds --}}
            @php $isRefunds = Route::is('admin.refunds'); @endphp
            <li class="nav-item nav-item-has-children">
                <a href="#0" data-bs-toggle="collapse" data-bs-target="#refunds" aria-controls="refunds"
                    aria-expanded="{{ $isRefunds ? 'true' : 'false' }}" aria-label="Toggle navigation">
                    <span class="icon"><span class="mdi mdi-credit-card-refund"></span></span>
                    <span class="text">Refunds</span>
                </a>
                <ul id="refunds" class="dropdown-nav {{ $isRefunds ? 'show' : 'collapse' }}">
                    <li><a href="{{ route('admin.refunds') }}"
                            class="{{ $route === 'admin.refunds' ? 'active' : '' }}">Refunds Request</a></li>
                </ul>
            </li>

            {{-- Number Types --}}
            @php $isNumberTypes = Route::is('admin.number.type.*'); @endphp
            <li class="nav-item nav-item-has-children">
                <a href="#0" data-bs-toggle="collapse" data-bs-target="#number-type"
                    aria-controls="number-type" aria-expanded="{{ $isNumberTypes ? 'true' : 'false' }}"
                    aria-label="Toggle navigation">
                    <span class="icon"><span class="mdi mdi-format-list-bulleted-type"></span></span>
                    <span class="text">Number Types</span>
                </a>
                <ul id="number-type" class="dropdown-nav {{ $isNumberTypes ? 'show' : 'collapse' }}">
                    <li><a href="{{ route('admin.number.type.index') }}"
                            class="{{ $route === 'admin.number.type.index' ? 'active' : '' }}">All Types</a></li>
                    <li><a href="{{ route('admin.number.type.create') }}"
                            class="{{ $route === 'admin.number.type.create' ? 'active' : '' }}">Add Type</a></li>
                </ul>
            </li>

            @php $isMatkaNumbers = Route::is('admin.matka.numbers.*'); @endphp
            <li class="nav-item nav-item-has-children">
                <a href="#0" data-bs-toggle="collapse" data-bs-target="#matka_numbers_nav"
                    aria-controls="matka_numbers_nav" aria-expanded="{{ $isMatkaNumbers ? 'true' : 'false' }}"
                    aria-label="Toggle navigation">
                    <span class="icon"><span class="mdi mdi-numeric"></span></span>
                    <span class="text">Matka Numbers</span>
                </a>
                <ul id="matka_numbers_nav" class="dropdown-nav {{ $isMatkaNumbers ? 'show' : 'collapse' }}">
                    <li>
                        <a href="{{ route('admin.matka.numbers.index') }}"
                            class="{{ $route === 'admin.matka.numbers.index' ? 'active' : '' }}">
                            All Numbers
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.matka.numbers.create') }}"
                            class="{{ $route === 'admin.matka.numbers.create' ? 'active' : '' }}">
                            Add Number
                        </a>
                    </li>
                </ul>
            </li>

            {{-- Notifications --}}
            @php $isNotifications = Route::is('admin.notifications.*'); @endphp
            <li class="nav-item nav-item-has-children">
                <a href="#0" data-bs-toggle="collapse" data-bs-target="#notifications"
                    aria-controls="notifications" aria-expanded="{{ $isNotifications ? 'true' : 'false' }}"
                    aria-label="Toggle navigation">
                    <span class="icon"><span class="mdi mdi-bell"></span></span>
                    <span class="text">Notifications</span>
                </a>
                <ul id="notifications" class="dropdown-nav {{ $isNotifications ? 'show' : 'collapse' }}">
                    <li><a href="{{ route('admin.notifications.index') }}"
                            class="{{ $route === 'admin.notifications.index' ? 'active' : '' }}">All Notifications</a>
                    </li>
                    <li><a href="{{ route('admin.notifications.create') }}"
                            class="{{ $route === 'admin.notifications.create' ? 'active' : '' }}">Add Notification</a>
                    </li>
                </ul>
            </li>

            {{-- Promos --}}
            @php $isPromo = Route::is('admin.promo.*'); @endphp
            <li class="nav-item nav-item-has-children">
                <a href="#0" data-bs-toggle="collapse" data-bs-target="#promo" aria-controls="promo"
                    aria-expanded="{{ $isPromo ? 'true' : 'false' }}" aria-label="Toggle navigation">
                    <span class="icon"><span class="mdi mdi-ticket-percent"></span></span>
                    <span class="text">Promotions</span>
                </a>
                <ul id="promo" class="dropdown-nav {{ $isPromo ? 'show' : 'collapse' }}">
                    <li><a href="{{ route('admin.promo.index') }}"
                            class="{{ $route === 'admin.promo.index' ? 'active' : '' }}">All Promos</a>
                    </li>
                    <li><a href="{{ route('admin.promo.create') }}"
                            class="{{ $route === 'admin.promo.create' ? 'active' : '' }}">Add Promo</a>
                    </li>
                </ul>
            </li>

            {{-- Settings --}}
            @php $isSettings = Route::is('admin.settings.edit'); @endphp
            <li class="nav-item nav-item-has-children">
                <a href="#0" data-bs-toggle="collapse" data-bs-target="#settings" aria-controls="settings"
                    aria-expanded="{{ $isSettings ? 'true' : 'false' }}" aria-label="Toggle navigation">
                    <span class="icon"><span class="mdi mdi-cogs"></span></span>
                    <span class="text">Settings</span>
                </a>
                <ul id="settings" class="dropdown-nav {{ $isSettings ? 'show' : 'collapse' }}">
                    <li><a href="{{ route('admin.settings.edit') }}"
                            class="{{ $route === 'admin.settings.edit' ? 'active' : '' }}">Edit</a></li>
                </ul>
            </li>

            <span class="divider">
                <hr />
            </span>
        </ul>
    </nav>
</aside>
<div class="overlay"></div>
