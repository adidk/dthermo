<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="image/logod.png">
    <title>DTHERMO INDUSTRIAL INSTRUMENTATION</title>


    <!-- bootstrap -->
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <script src="dist/js/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>

    <!-- fontawesome  -->
    <link rel="stylesheet" type="text/css" href="dist/fontawesome/css/all.min.css">

    <!-- dthermocss -->
    <link rel="stylesheet" href="dist/customs/my.css">
    <link rel="stylesheet" href="dist/customs/my.scss">
    <script src="dist/js/my.js"></script>


    <script src="js/src/collapse.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="image/logo.png" class="d-inline-block align-top" alt="Dthermo" style="height: 60px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-column ml-lg-0 ml-3" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto text-size-18">
                    <li class="nav-item">
                        <a class="nav-link" href="news.php">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="media.php">Media</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="certifications.php">Certifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="careers.php">Careers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav mr-auto text-size-20 font-weight-bold">
                    <li class="nav-item ">
                        <a class="nav-link" href="about_us.php">Who We Are </a>
                    </li>
                    <li class="nav-item dropdown has-megamenu" id="dProduct">
                        <a class="nav-link" href="product.php" id="adProduct"> Products </a>
                        <div id="dProduct-sub" class="dropdown-menu megamenu p-0 mt-0">
                            <div class="container">
                                <div class="row ">
                                    <div id="submenu" class="col-3 pr-0 mt-3 mb-3">
                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link active text-size-16" id="v-pills-sensors-tab" data-toggle="pill" href="#v-pills-sensors" role="tab" aria-controls="v-pills-sensors" aria-selected="true">Sensors (TCs &
                                                RTDs)</a>
                                            <a class="nav-link text-size-16" id="v-pills-thermowells-tab" data-toggle="pill" href="#v-pills-thermowells" role="tab" aria-controls="v-pills-thermowells" aria-selected="false">Thermowells</a>
                                            <a class="nav-link text-size-16" id="v-pills-vtm-tab" data-toggle="pill" href="#v-pills-vtm" role="tab" aria-controls="v-pills-vtm" aria-selected="false">VTM <br>
                                                <small>Vessel Temperature Measurement</small>
                                            </a>
                                            <a class="nav-link text-size-16" id="v-pills-stm-tab" data-toggle="pill" href="#v-pills-stm" role="tab" aria-controls="v-pills-stm" aria-selected="false">STM
                                                <br>
                                                <small>Surface Temperature Measurement</small>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="submenu-content" class="col-9 bg-white-80 pl-0 pr-0">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            <div class="tab-pane fade active show" id="v-pills-sensors" role="tabpanel" aria-labelledby="v-pills-sensors-tab">
                                                <div class="container-fluid">
                                                    <div class="row p-3">
                                                        <div class="col-12">
                                                            <h3>Sensors (TCs & RTDs)</h3>
                                                        </div>
                                                        <div class="col-4">
                                                            <h5 class="text-grey">Sensors</h5>
                                                            <div class="row">
                                                                <div class="card bg-dark text-white">
                                                                    <img class="card-img" src="image/logo.png" alt="Card image" style="height: 150px;">
                                                                    <div class="card-img-overlay">
                                                                        <h5 class="card-title">Card title</h5>
                                                                        <p class="card-text">This is a wider card with
                                                                            supporting text below as a natural lead-in
                                                                            to
                                                                            additional content. This content is a little
                                                                            bit
                                                                            longer.</p>
                                                                        <p class="card-text">Last updated 3 mins ago</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="row">
                                                                <h5 class="text-grey">How To Order</h5>
                                                                <div class="card bg-dark text-white">
                                                                    <img class="card-img" src="image/logo.png" alt="Card image" style="height: 150px;">
                                                                    <div class="card-img-overlay">
                                                                        <h5 class="card-title">Card title</h5>
                                                                        <p class="card-text">This is a wider card with
                                                                            supporting text below as a natural lead-in
                                                                            to
                                                                            additional content. This content is a little
                                                                            bit
                                                                            longer.</p>
                                                                        <p class="card-text">Last updated 3 mins ago</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="row">
                                                                <h5 class="text-grey">Info</h5>
                                                                <div class="card bg-dark text-white">
                                                                    <img class="card-img" src="image/logo.png" alt="Card image" style="height: 150px;">
                                                                    <div class="card-img-overlay">
                                                                        <h5 class="card-title">Card title</h5>
                                                                        <p class="card-text">This is a wider card with
                                                                            supporting text below as a natural lead-in
                                                                            to
                                                                            additional content. This content is a little
                                                                            bit
                                                                            longer.</p>
                                                                        <p class="card-text">Last updated 3 mins ago</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-thermowells" role="tabpanel" aria-labelledby="v-pills-thermowells-tab">
                                                <div class="container-fluid">
                                                    <div class="row p-3">
                                                        <div class="col-12">
                                                            <h3>Thermowells</h3>
                                                        </div>
                                                        <div class="col-4">
                                                            <h5 class="text-grey">Types</h5>
                                                            <div class="row">
                                                                <div class="card bg-dark text-white">
                                                                    <img class="card-img" src="image/logo.png" alt="Card image" style="height: 150px;">
                                                                    <div class="card-img-overlay">
                                                                        <h5 class="card-title">Card title</h5>
                                                                        <p class="card-text">This is a wider card with
                                                                            supporting text below as a natural lead-in
                                                                            to
                                                                            additional content. This content is a little
                                                                            bit
                                                                            longer.</p>
                                                                        <p class="card-text">Last updated 3 mins ago</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="row">
                                                                <h5 class="text-grey">Order/Calculator</h5>
                                                                <div class="card bg-dark text-white">
                                                                    <img class="card-img" src="image/logo.png" alt="Card image" style="height: 150px;">
                                                                    <div class="card-img-overlay">
                                                                        <h5 class="card-title">Card title</h5>
                                                                        <p class="card-text">This is a wider card with
                                                                            supporting text below as a natural lead-in
                                                                            to
                                                                            additional content. This content is a little
                                                                            bit
                                                                            longer.</p>
                                                                        <p class="card-text">Last updated 3 mins ago</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="row">
                                                                <h5 class="text-grey">Info</h5>
                                                                <div class="card bg-dark text-white">
                                                                    <img class="card-img" src="image/logo.png" alt="Card image" style="height: 150px;">
                                                                    <div class="card-img-overlay">
                                                                        <h5 class="card-title">Card title</h5>
                                                                        <p class="card-text">This is a wider card with
                                                                            supporting text below as a natural lead-in
                                                                            to
                                                                            additional content. This content is a little
                                                                            bit
                                                                            longer.</p>
                                                                        <p class="card-text">Last updated 3 mins ago</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-vtm" role="tabpanel" aria-labelledby="v-pills-vtm-tab">
                                                <div class="container-fluid">
                                                    <div class="row p-3">
                                                        <div class="col-12">
                                                            <h3>VTM</h3>
                                                        </div>
                                                        <div class="col-4">
                                                            <h5 class="text-grey">Types</h5>
                                                            <div class="row">
                                                                <div class="card bg-dark text-white">
                                                                    <img class="card-img" src="image/logo.png" alt="Card image" style="height: 150px;">
                                                                    <div class="card-img-overlay">
                                                                        <h5 class="card-title">Card title</h5>
                                                                        <p class="card-text">This is a wider card with
                                                                            supporting text below as a natural lead-in
                                                                            to
                                                                            additional content. This content is a little
                                                                            bit
                                                                            longer.</p>
                                                                        <p class="card-text">Last updated 3 mins ago</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="row">
                                                                <h5 class="text-grey">Applications</h5>
                                                                <div class="card bg-dark text-white">
                                                                    <img class="card-img" src="image/logo.png" alt="Card image" style="height: 150px;">
                                                                    <div class="card-img-overlay">
                                                                        <h5 class="card-title">Card title</h5>
                                                                        <p class="card-text">This is a wider card with
                                                                            supporting text below as a natural lead-in
                                                                            to
                                                                            additional content. This content is a little
                                                                            bit
                                                                            longer.</p>
                                                                        <p class="card-text">Last updated 3 mins ago</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="row">
                                                                <h5 class="text-grey">Info</h5>
                                                                <div class="card bg-dark text-white">
                                                                    <img class="card-img" src="image/logo.png" alt="Card image" style="height: 150px;">
                                                                    <div class="card-img-overlay">
                                                                        <h5 class="card-title">Card title</h5>
                                                                        <p class="card-text">This is a wider card with
                                                                            supporting text below as a natural lead-in
                                                                            to
                                                                            additional content. This content is a little
                                                                            bit
                                                                            longer.</p>
                                                                        <p class="card-text">Last updated 3 mins ago</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade " id="v-pills-stm" role="tabpanel" aria-labelledby="v-pills-stm-tab">
                                                <div class="container-fluid">
                                                    <div class="row p-3">
                                                        <div class="col-12">
                                                            <h3>STM</h3>
                                                        </div>
                                                        <div class="col-12">
                                                            <h5 class="text-grey">Types</h5>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="card bg-dark text-white">
                                                                <img class="card-img" src="image/logo.png" alt="Card image" style="height: 150px;">
                                                                <div class="card-img-overlay">
                                                                    <h5 class="card-title">Card title</h5>
                                                                    <p class="card-text">This is a wider card with
                                                                        supporting text below as a natural lead-in
                                                                        to
                                                                        additional content. This content is a little
                                                                        bit
                                                                        longer.</p>
                                                                    <p class="card-text">Last updated 3 mins ago</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="card bg-dark text-white">
                                                                <img class="card-img" src="image/logo.png" alt="Card image" style="height: 150px;">
                                                                <div class="card-img-overlay">
                                                                    <h5 class="card-title">Card title</h5>
                                                                    <p class="card-text">This is a wider card with
                                                                        supporting text below as a natural lead-in
                                                                        to
                                                                        additional content. This content is a little
                                                                        bit
                                                                        longer.</p>
                                                                    <p class="card-text">Last updated 3 mins ago</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="card bg-dark text-white invisible">
                                                                <img class="card-img" src="image/logo.png" alt="Card image" style="height: 150px;">
                                                                <div class="card-img-overlay">
                                                                    <h5 class="card-title">invisible card</h5>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- dropdown-mega-menu.// -->
                    </li>
                    <li class="nav-item dropdown has-megamenu " id="dServices">
                        <a class="nav-link" href="services.php" id="adServices"> Services </a>
                        <div id="dServices-sub" class="dropdown-menu megamenu p-0">
                            <div class="container">
                                <div class="row">

                                </div>
                            </div>
                        </div> <!-- dropdown-mega-menu.// -->
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- carousel -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="image/carousel/slide1.jpg" alt="First slide">
            </div>
        </div>
    </div>
    <!-- aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" -->