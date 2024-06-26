<html lang="en"><head>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>GoMobileUX V2.0 - Mobile HTML template</title>

    <!-- manifest meta -->
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('assets/img/favicon180.png') }}" sizes="180x180">
    <link rel="icon" href="{{ asset('assets/img/favicon32.png') }}" sizes="32x32" type="image/png">
    <link rel="icon" href="{{ asset('assets/img/favicon16.png') }}" sizes="16x16" type="image/png">

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400&amp;display=swap" rel="stylesheet">

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- nouislider CSS -->
    <link href="{{ asset('assets/vendor/nouislider/nouislider.min.css') }}" rel="stylesheet">

    <!-- swiper css -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/swiperjs-6.6.2/swiper-bundle.min.css') }}">

    <!-- style css for this template -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" id="style">
</head>

<body class="body-scroll" data-page="stats">

    <!-- loader section -->
    <div class="container-fluid loader-wrap">
        <div class="row h-100">
            <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto text-center align-self-center">
                <div class="loader-cube-wrap mx-auto">
                    <div class="loader-cube1 loader-cube"></div>
                    <div class="loader-cube2 loader-cube"></div>
                    <div class="loader-cube4 loader-cube"></div>
                    <div class="loader-cube3 loader-cube"></div>
                </div>
                <p>Let's Create Difference<br><strong>Please wait...</strong></p>
            </div>
        </div>
    </div>
    <!-- loader section ends -->

    <!-- Sidebar main menu -->
    <div class="sidebar-wrap  sidebar-overlay">
        <!-- Add pushcontent or fullmenu instead overlay -->
        <div class="closemenu text-opac">Close Menu</div>
        <div class="sidebar">
            <div class="row mt-4 mb-3">
                <div class="col-auto">
                    <figure class="avatar avatar-60 rounded mx-auto my-1">
                        <img src="assets/img/user2.jpg" alt="">
                    </figure>
                </div>
                <div class="col align-self-center ps-0">
                    <h6 class="mb-0">Selvy Smith</h6>
                    <p class="text-opac">Australia, UK</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="stats.html">
                                <div class="avatar avatar-40 rounded icon"><i class="bi bi-house-door"></i></div>
                                <div class="col">Dashboard</div>
                                <div class="arrow"><i class="bi bi-arrow-right"></i></div>
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                                <div class="avatar avatar-40 rounded icon"><i class="bi bi-shop"></i></div>
                                <div class="col">Shop</div>
                                <div class="arrow"><i class="bi bi-plus plus"></i> <i class="bi bi-dash minus"></i>
                                </div>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item nav-link active" href="home.html">
                                        <div class="avatar avatar-40 rounded icon"><i class="bi bi-bag"></i></div>
                                        <div class="col">Shop home</div>
                                        <div class="arrow"><i class="bi bi-arrow-right"></i></div>
                                    </a></li>
                                <li><a class="dropdown-item nav-link" href="product.html">
                                        <div class="avatar avatar-40 rounded icon"><i class="bi bi-binoculars"></i></div>
                                        <div class="col">Product</div>
                                        <div class="arrow"><i class="bi bi-arrow-right"></i></div>
                                    </a></li>
                                <li><a class="dropdown-item nav-link" href="cart.html">
                                        <div class="avatar avatar-40 rounded icon"><i class="bi bi-basket3"></i></div>
                                        <div class="col">Cart</div>
                                        <div class="arrow"><i class="bi bi-arrow-right"></i></div>
                                    </a></li>
                                <li><a class="dropdown-item nav-link" href="payment.html">
                                        <div class="avatar avatar-40 rounded icon"><i class="bi bi-credit-card"></i></div>
                                        <div class="col">Payment</div>
                                        <div class="arrow"><i class="bi bi-arrow-right"></i></div>
                                    </a></li>
                                <li><a class="dropdown-item nav-link" href="my-orders.html">
                                        <div class="avatar avatar-40 rounded icon"><i class="bi bi-box-seam"></i></div>
                                        <div class="col">My Orders</div>
                                        <div class="arrow"><i class="bi bi-arrow-right"></i></div>
                                    </a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="chat.html" tabindex="-1">
                                <div class="avatar avatar-40 rounded icon"><i class="bi bi-chat-text"></i></div>
                                <div class="col">Messages</div>
                                <div class="arrow"><i class="bi bi-arrow-right"></i></div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="notifications.html" tabindex="-1">
                                <div class="avatar avatar-40 rounded icon"><i class="bi bi-bell"></i></div>
                                <div class="col">Notification</div>
                                <div class="arrow"><i class="bi bi-arrow-right"></i></div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="settings.html" tabindex="-1">
                                <div class="avatar avatar-40 rounded icon"><i class="bi bi-gear"></i></div>
                                <div class="col">Settings</div>
                                <div class="arrow"><i class="bi bi-arrow-right"></i></div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="pages.html" tabindex="-1">
                                <div class="avatar avatar-40 rounded icon"><i class="bi bi-file-earmark-text"></i></div>
                                <div class="col">Pages <span class="badge bg-info fw-light">new</span></div>
                                <div class="arrow"><i class="bi bi-arrow-right"></i></div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="signin.html" tabindex="-1">
                                <div class="avatar avatar-40 rounded icon"><i class="bi bi-box-arrow-right"></i></div>
                                <div class="col">Logout</div>
                                <div class="arrow"><i class="bi bi-arrow-right"></i></div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Sidebar main menu ends -->

    <!-- Begin page -->
    <main class="h-100 has-header has-footer">

        <!-- Header -->
        <header class="container-fluid header">
            <div class="row">
                <div class="col-auto align-self-center">
                    <button type="button" class="btn btn-link menu-btn text-color-theme">
                        <i class="bi bi-list size-24"></i>
                    </button>
                </div>
                <div class="col text-center">
                    <div class="logo-small">
                        <img src="assets/img/logo.png" alt="" class="img">
                        <h6>GO<br><small>MobileUX</small></h6>
                    </div>
                </div>
                <div class="col-auto align-self-center">
                    <a href="profile.html" class="link text-color-theme">
                        <i class="bi bi-person-circle size-22"></i>
                    </a>
                </div>
            </div>
        </header>
        <!-- Header ends -->

        <!-- main page content -->
        <div class="main-container container">

            <!-- search -->
            <div class="row mb-4">
                <div class="col align-self-center">
                    <h5 class="mb-0">This Month</h5>
                    <input type="text" id="daterange" class="d-none calendar-daterange">
                    <p class="textdate"></p>
                </div>
                <div class="col-auto">
                    <button class="btn btn-lg btn-theme shadow-sm daterange-btn">
                        <i class="bi bi-calendar-range size-22"></i>
                    </button>
                </div>
            </div>

            <!-- Chart area -->
            <div class="row">
                <div class="col-12">
                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <canvas id="areachart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- expense  saving -->
            <div class="row">
                <div class="col">
                    <div class="card shadow-sm product mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="avatar avatar-50 rounded bg-danger text-white">
                                        <i class="bi bi-credit-card"></i>
                                    </div>
                                </div>
                                <div class="col ps-0 align-self-center">
                                    <span class="small text-opac mb-0">Expense</span>
                                    <p class="mb-1">$ 521</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm product mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="avatar avatar-50 rounded bg-success text-white">
                                        <i class="bi bi-gift"></i>
                                    </div>
                                </div>
                                <div class="col ps-0 align-self-center">
                                    <span class="small text-opac mb-0">Saving</span>
                                    <p class="mb-1">$ 62</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- purchase fatg -->
            <div class="row">
                <div class="col-12">
                    <div class="card card-theme shadow-sm mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <p class="mb-1">Purchased</p>
                                    <h2>364 <small>kcal</small></h2>
                                    <div class="progress h-6">
                                        <div class="progress-bar bg-success w-50px" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col text-end">
                                    <p class="mb-1">Fatg</p>
                                    <h2>42.2</h2>
                                    <div class="progress h-6">
                                        <div class="progress-bar bg-warning w-20px" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Breakfast block -->
            <div class="row">
                <div class="col-12 ">
                    <div class="card shadow-sm mb-4">
                        <div class="card-header">
                            <div class="row">
                                <div class="col align-self-center">
                                    <h5 class="mb-0">Breakfast<br><small class="text-success">1265 kcal</small></h5>
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-link text-color-theme" type="button" data-bs-toggle="collapse" data-bs-target="#additemmore"><i class="bi bi-plus size-22"></i></button>
                                    <div class="dropdown">
                                        <a class="btn btn-link text-color-theme dropdown-toggle" href="#" role="button" id="filterchange" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-filter"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right shadow border-0" aria-labelledby="filterchange">
                                            <li><a class="dropdown-item" href="#">Breakfast</a></li>
                                            <li><a class="dropdown-item" href="#">Lunch</a></li>
                                            <li><a class="dropdown-item" href="#">Dinner</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="additemmore">
                            <div class="card-header">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <input class="form-check-input me-1" type="checkbox" value="" checked="">
                                        Apple
                                    </li>
                                    <li class="list-group-item">
                                        <input class="form-check-input me-1" type="checkbox" value="" checked="">
                                        Banana
                                    </li>
                                    <li class="list-group-item">
                                        <input class="form-check-input me-1" type="checkbox" value="">
                                        Mangos
                                    </li>
                                    <li class="list-group-item">
                                        <input class="form-check-input me-1" type="checkbox" value="">
                                        Watermelon
                                    </li>
                                    <li class="list-group-item">
                                        <input class="form-check-input me-1" type="checkbox" value="" checked="">
                                        Lemon
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body product">
                            <div class="row mb-3">
                                <div class="col-auto">
                                    <figure class="text-center mb-0 avatar avatar-40 page-bg rounded p-1">
                                        <img src="assets/img/apple-small.png" alt="">
                                    </figure>
                                </div>
                                <div class="col align-self-center">
                                    <p>Apple<br><small class="text-opac">Medium Size 168 kcal</small></p>
                                </div>
                                <div class="col-auto align-self-center">
                                    <!-- button counter increamenter-->
                                    <div class="counter-number">
                                        <button class="btn btn-sm avatar avatar-30 p-0 rounded-circle">
                                            <i class="bi bi-dash size-22"></i>
                                        </button>
                                        <span>1</span>
                                        <button class="btn btn-sm avatar avatar-30 p-0 rounded-circle">
                                            <i class="bi bi-plus size-22"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-auto">
                                    <figure class="text-center mb-0 avatar avatar-40 page-bg rounded p-1">
                                        <img src="assets/img/banana-small.png" alt="">
                                    </figure>
                                </div>
                                <div class="col align-self-center">
                                    <p>Banana<br><small class="text-opac">Small Size 56 kcal</small></p>
                                </div>
                                <div class="col-auto align-self-center">
                                    <!-- button counter increamenter-->
                                    <div class="counter-number">
                                        <button class="btn btn-sm avatar avatar-30 p-0 rounded-circle">
                                            <i class="bi bi-dash size-22"></i>
                                        </button>
                                        <span>2</span>
                                        <button class="btn btn-sm avatar avatar-30 p-0 rounded-circle">
                                            <i class="bi bi-plus size-22"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-auto">
                                    <figure class="text-center mb-0 avatar avatar-40 page-bg rounded p-1">
                                        <img src="assets/img/product3.png" alt="">
                                    </figure>
                                </div>
                                <div class="col align-self-center">
                                    <p>Watermelon<br><small class="text-opac">Small Size 256 kcal</small></p>
                                </div>
                                <div class="col-auto align-self-center">
                                    <!-- button counter increamenter-->
                                    <div class="counter-number">
                                        <button class="btn btn-sm avatar avatar-30 p-0 rounded-circle">
                                            <i class="bi bi-dash size-22"></i>
                                        </button>
                                        <span>1</span>
                                        <button class="btn btn-sm avatar avatar-30 p-0 rounded-circle">
                                            <i class="bi bi-plus size-22"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="row ">
                                <div class="col-auto">
                                    <figure class="text-center mb-0 avatar avatar-40 page-bg rounded p-1">
                                        <img src="assets/img/product4.png" alt="">
                                    </figure>
                                </div>
                                <div class="col align-self-center">
                                    <p>Lemon<br><small class="text-opac">Large Size 316 kcal</small></p>
                                </div>
                                <div class="col-auto align-self-center">
                                    <!-- button counter increamenter-->
                                    <div class="counter-number">
                                        <button class="btn btn-sm avatar avatar-30 p-0 rounded-circle">
                                            <i class="bi bi-dash size-22"></i>
                                        </button>
                                        <span>1</span>
                                        <button class="btn btn-sm avatar avatar-30 p-0 rounded-circle">
                                            <i class="bi bi-plus size-22"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-4">
                                    <div id="progressCircle1" class="small-circle d-inline-block me-2"></div>
                                    <div class="d-inline-block">
                                        <p class="lh-16"><small class="text-opac">Carbs</small><br>75g</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div id="progressCircle2" class="small-circle d-inline-block me-2"></div>
                                    <div class="d-inline-block">
                                        <p class="lh-16"><small class="text-opac">Fat</small><br>45g</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div id="progressCircle3" class="small-circle d-inline-block me-2"></div>
                                    <div class="d-inline-block">
                                        <p class="lh-16"><small class="text-opac">Protein</small><br>105g</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- vitamins counts -->
            <div class="row">
                <div class="col-12">
                    <div class="card shadow-sm product mb-4">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-auto">
                                    <figure class="text-center avatar-90 avatar">
                                        <img src="assets/img/product2.png" alt="">
                                    </figure>
                                </div>
                                <div class="col ps-0">
                                    <p class="mb-1">
                                        <small class="text-opac">Protein</small>
                                        <small class="float-end"><span class="text-opac">4.5</span> <i class="bi bi-star-fill text-warning"></i></small>
                                    </p>
                                    <h6 class="text-color-theme">Banana</h6>
                                    <div class="row">
                                        <div class="col">
                                            <p class="mb-0">$12.00<br><small class="text-opac">per 1 kg</small></p>
                                        </div>
                                        <div class="col-auto">
                                            <button class="btn btn-sm avatar avatar-30 p-0 rounded-circle shadow btn-gradient">
                                                <i class="bi bi-plus size-22"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col">
                                    <p class="text-opac">Carbs</p>
                                </div>
                                <div class="col-auto">
                                    <p>75g</p>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="progress theme-color h-6">
                                        <div class="progress-bar bg-success w-50px" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col">
                                    <p class="text-opac">Fat</p>
                                </div>
                                <div class="col-auto">
                                    <p>45g</p>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="progress theme-color h-6">
                                        <div class="progress-bar bg-danger w-50px" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <p class="text-opac">Protein</p>
                                </div>
                                <div class="col-auto">
                                    <p>105g</p>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="progress theme-color h-6">
                                        <div class="progress-bar bg-warning w-50px" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--News and announcements -->
            <div class="row mb-3">
                <div class="col">
                    <h5 class="mb-0">Research says</h5>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card shadow-sm mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <figure class="text-center mb-3 coverimg page-bg rounded h-150">
                                        <img src="assets/img/news1.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="col">
                                    <p class="small d-block mb-2">
                                        <span class="text-opac">Trend setter</span>
                                        <span class="float-end"><span class="text-opac">26 July 2021</span> <i class="bi bi-clock"></i></span>
                                    </p>
                                    <a href="#" class="text-normal text-color-theme">
                                        <h6>Best UI UX design with your loving frameworks</h6>
                                    </a>
                                    <div class="mb-1">
                                        <figure class="text-center mb-0 avatar avatar-20 coverimg">
                                            <img src="assets/img/user2.jpg" alt="">
                                        </figure>
                                        Archana Singh
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card shadow-sm mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <figure class="text-center mb-3 coverimg page-bg rounded h-150">
                                        <img src="assets/img/news2.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="col">
                                    <p class="small d-block mb-2">
                                        <span class="text-opac">ReadOut</span>
                                        <span class="float-end"><span class="text-opac">26 July 2021</span> <i class="bi bi-clock"></i></span>
                                    </p>
                                    <a href="#" class="text-normal text-color-theme">
                                        <h6>Make a distance from bad design &amp; accept the change</h6>
                                    </a>
                                    <div class="mb-1">
                                        <figure class="text-center mb-0 avatar avatar-20 coverimg">
                                            <img src="assets/img/user1.jpg" alt="">
                                        </figure>
                                        John Doe
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card shadow-sm mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <figure class="text-center mb-3 coverimg page-bg rounded h-150">
                                        <img src="assets/img/news3.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="col">
                                    <p class="small d-block mb-2">
                                        <span class="text-opac">FoodTechy</span>
                                        <span class="float-end"><span class="text-opac">26 July 2021</span> <i class="bi bi-clock"></i></span>
                                    </p>
                                    <a href="#" class="text-normal text-color-theme">
                                        <h6>Never regret of buying and trying new things</h6>
                                    </a>
                                    <div class="mb-1">
                                        <figure class="text-center mb-0 avatar avatar-20 coverimg">
                                            <img src="assets/img/user3.jpg" alt="">
                                        </figure>
                                        Laxmisho Johnson
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main page content ends -->


    </main>
    <!-- Page ends-->

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <ul class="nav nav-pills nav-justified">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span>
                            <i class="nav-icon bi bi-house"></i>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">
                        <span>
                            <i class="nav-icon bi bi-bar-chart-line"></i>
                        </span>
                    </a>
                </li>
                <li class="nav-item center-item">
                    <a class="nav-link" href="#">
                        <span>
                            <i class="nav-icon bi bi-bag"></i>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span>
                            <i class="nav-icon bi bi-palette"></i>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span>
                            <i class="nav-icon bi bi-gear"></i>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </footer>
    <!-- Footer ends-->



    <!-- Required jquery and libraries -->
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-5/js/bootstrap.bundle.min.js') }}"></script>

    <!-- cookie js -->
    <script src="{{ asset('assets/js/jquery.cookie.js') }}"></script>

    <!-- PWA app service registration and works -->
    <script src="{{ asset('assets/js/pwa-services.js') }}"></script>

    <!-- swiper script -->
    <script src="{{ asset('assets/vendor/swiperjs-6.6.2/swiper-bundle.min.js') }}"></script>

    <!-- nouislider js -->
    <script src="{{ asset('assets/vendor/nouislider/nouislider.min.js') }}"></script>

    <!-- Customized jquery file  -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/color-scheme.js') }}"></script>

    <!-- page level custom script -->
    <script src="{{ asset('assets/js/app.js') }}"></script>



</body></html>
