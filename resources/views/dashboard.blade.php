<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard</title>
    <link href="assets/css/dashboard.css" rel="stylesheet" />
    <link rel="icon" href="assets/img/logo.png" type="image/x-icon">
</head>
<body>
    <div class="page-dashboard">
        <div class="d-flex" id="wrapper">
        <!-- sidebar -->
        <div class="border-right" id="sidebar-wrapper">
        <div class="sidebar-heading text-center">
            <img src="assets/img/logo.png" class="my-4" alt=""/>
        </div>
            <div class="list-group list-group-flush">
                <a href="dashboard" class="list-group-item list-group-item-action active">
                    Dashboard
                </a>
                <a
                    href="#"
                    class="list-group-item list-group-item-action"
                >
                    My Products
                </a>
                <a
                    href="#"
                    class="list-group-item list-group-item-action"
                >
                    Transaction Details
                </a>
                <a
                    href="#"
                    class="list-group-item list-group-item-action"
                >
                    Accounts
                </a>
                <a
                    href="#"
                    class="list-group-item list-group-item-action"
                >
                    Settings
                </a>
                <div class="list-group-item list-group-item-action fixed-bottom">
                    <a href="/">
                        <button class="rounded" style="background:#ff4500; color:white; text-style:none; border:none; width:200px;"> 
                            Logout
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div id="page-content-wrapper">
        <nav
            class="navbar navbar-expand-lg navbar-light navbar-store fixed-top">
            <div class="container-fluid">
                <button
                    class="btn btn-secondary d-md-none mr-auto mr-2"
                    id="menu-toggle"
                >
                    &laquo; Menu
                </button>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarSpportedContent"
                >
                    <span class="navbar navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSpportedContent">
                    <!-- Dekstop Menu -->
                    <ul class="navbar-nav d-none d-lg-flex ml-auto">
                <li class="nav-item dropdown">
                    <a
                        href="#"
                        class="nav-link"
                        id="navbarDropdown"
                        role="button"
                        data-toggle="dropdown"
                    >
                    <img
                        src="assets/img/angga.png"
                        alt=""
                        class="rounded-circle mr-2 profile-picture"/>
                    Hi, Kelvin
                    </a>
                    <div class="dropdown-menu">
                        <a href="dashboard.html" class="dropdown-item"
                            >Dashboard</a
                        >
                        <a href="dashboard-account.html" class="dropdown-item"
                            >Settings</a
                        >
                        <div class="dropdown-divider"></div>
                        <a href="/" class="dropdown-item">Logout</a>
                    </div>
                </li>
                    <div class="nav-item">
                        <a href="#" class="nav-link d-inline-block mt-2">
                            <img src="assets/img/shopping 1.svg" alt="" />
                            <div class="card-badge" style="background-color: #ff4500">3</div>
                        </a>
                    </div>
                    </ul>
                    {{-- <!-- Mobile Menu -->
                    <ul class="navbar-nav d-block d-lg-none">
                        <li class="nav-item">
                            <a href="#" class="nav-link"> Hi, Angga </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link d-inline-block"> Cart </a>
                        </li>
                    </ul> --}}
                </div>
            </div>
        </nav>
        <!-- Section Content -->
        <div class="section-content sction-dashboard-home">
            <div class="container-fluid">
                <div class="dashboard-heading">
                    <h2 class="dashboard-title">Dashboard</h2>
                    <p class="dashboard-subtitle">Look what you have made today!</p>
                </div>
                <div class="dashboard-content">
                    <div class="row">
            <div class="col-md-4">
        <div class="card mb-2">
            <div class="card-body">
                <div class="dashboard-card-title">Customer</div>
                <div class="dashboard-card-subtitle">$931,290</div>
            </div>
        </div>
            </div>
            <div class="col-md-4">
        <div class="card mb-2">
            <div class="card-body">
                <div class="dashboard-card-title">Revenue</div>
                <div class="dashboard-card-subtitle">$931,290</div>
            </div>
        </div>
            </div>
            <div class="col-md-4">
        <div class="card mb-2">
            <div class="card-body">
                <div class="dashboard-card-title">Transaction</div>
                <div class="dashboard-card-subtitle">22,409,399</div>
            </div>
        </div>
            </div>
                    </div>
                    <div class="row mt-3">
            <div class="col-12 mt-2">
        <h5 class="mb-3">Recent Transactions</h5>
        <a
            href="/dashboard"
            class="card card-list d-block">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-1">
                        <img
                        src="assets/img/marzan.png"
                        alt=""/>
                    </div>
                    <div class="col-md-4">Shirup Marzzan</div>
                    <div class="col-md-3">Angga Risky</div>
                    <div class="col-md-3">12 Januari, 2020</div>
                    <div class="col-md-1 d-none d-md-block">
                        <img
                        src="assets/img/next.svg"
                        alt=""/>
                    </div>
                </div>
            </div>
        </a>
        <a
            href="/dashboard"
            class="card card-list d-block">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-1">
                        <img
                        src="assets/img/lebronn.png"
                        alt=""/>
                    </div>
                    <div class="col-md-4">LeBrone X</div>
                    <div class="col-md-3">Masayoshi</div>
                    <div class="col-md-3">11 January, 2020</div>
                    <div class="col-md-1 d-none d-md-block">
                        <img
                        src="assets/img/next.svg"
                        alt=""/>
                    </div>
                </div>
            </div>
        </a>
        <a
            href="/dashboard"
            class="card card-list d-block"
        >
            <div class="card-body">
                <div class="row">
                    <div class="col-md-1">
            <img
        src="assets/img/soffa.png"
        alt=""
            />
                    </div>
                    <div class="col-md-4">Soffa Lembutte</div>
                    <div class="col-md-3">Shayna</div>
                    <div class="col-md-3">11 January, 2020</div>
                    <div class="col-md-1 d-none d-md-block">
            <img
        src="assets/img/next.svg"
        alt=""
            />
                    </div>
                </div>
            </div>
        </a>
            </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.slim.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>
</html>
