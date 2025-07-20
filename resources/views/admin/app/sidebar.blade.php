<aside class="sidebar-nav-wrapper">
    <div class="navbar-logo">
        <a href="index.html">
            <img src="/assets/admin/images/logo/logo.svg" alt="logo" />
        </a>
    </div>
    <nav class="sidebar-nav">
        <ul>
            <li class="nav-item">
                <a href="{{ route('admin.home')}}">
                    <span class="icon">
                        <span class="mdi mdi-view-dashboard"></span>

                    </span>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-item-has-children">
                <a href="#0" data-bs-toggle="collapse" data-bs-target="#market_nav" aria-controls="market_nav"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon">
                        <span class="mdi mdi-store"></span>

                    </span>
                    <span class="text">Markets</span>
                </a>
                <ul id="market_nav" class="collapse show dropdown-nav">
                    <li>
                        <a href="{{ route('admin.market.index') }}" class="active"> Markets List </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.market.create') }}" class="active"> Add Market </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-item-has-children">
                <a href="#0" data-bs-toggle="collapse" data-bs-target="#users_nav" aria-controls="users_nav"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon">
                        <span class="mdi mdi-account-group"></span>

                    </span>
                    <span class="text">Users</span>
                </a>
                <ul id="users_nav" class="collapse show dropdown-nav">
                    <li>
                        <a href="{{ route('admin.market.index') }}" class="active"> Users List </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.market.create') }}" class="active">Add User</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-item-has-children">
                <a href="#0" data-bs-toggle="collapse" data-bs-target="#matka_bets" aria-controls="matka_bets"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon">
                        <span class="mdi mdi-cards-spade"></span>

                    </span>
                    <span class="text">Matka Bets</span>
                </a>
                <ul id="matka_bets" class="collapse show dropdown-nav">
                    <li>
                        <a href="{{ route('getMatkaBetList') }}" class="active"> Bet List </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-item-has-children">
                <a href="#0" data-bs-toggle="collapse" data-bs-target="#trend_check_requests" aria-controls="trend_check_requests"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon">
                        <span class="mdi mdi-trending-up"></span>

                    </span>
                    <span class="text">Trends Check</span>
                </a>
                <ul id="trend_check_requests" class="collapse show dropdown-nav">
                    <li>
                        <a href="{{ route('admin.trends') }}" class="active"> Requests </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-item-has-children">
                <a href="#0" data-bs-toggle="collapse" data-bs-target="#refunds" aria-controls="refunds"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon">
                        <span class="mdi mdi-credit-card-refund"></span>
                    </span>
                    <span class="text">Refunds</span>
                </a>
                <ul id="refunds" class="collapse show dropdown-nav">
                    <li>
                        <a href="{{ route('admin.refunds') }}" class="active"> Refunds Request </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-item-has-children">
                <a href="#0" data-bs-toggle="collapse" data-bs-target="#number-type" aria-controls="number-type"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon">
                        <span class="mdi mdi-format-list-bulleted-type"></span>
                    </span>
                    <span class="text">Number Types</span>
                </a>
                <ul id="number-type" class="collapse show dropdown-nav">
                    <li>
                        <a href="{{ route('admin.number.type') }}" class="active"> All Types </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.number.type.add') }}"> Add Type </a>
                    </li>
                </ul>
            </li>

            <span class="divider">
                <hr />
            </span>
        </ul>
    </nav>

</aside>
<div class="overlay"></div>
