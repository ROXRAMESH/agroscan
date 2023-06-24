<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Material Admin by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- Choices CSS-->
    <link rel="stylesheet" href="vendor/choices.js/public/assets/styles/choices.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- <link rel="stylesheet" href="css/ms.css"> -->
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link rel="stylesheet" type="text/css" href="css/ms.css" />

    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body onload="m()">
    <div class="page">
        <!-- Main Navbar-->
        <header class="header z-index-50">
            <nav class="navbar py-3 px-0 shadow-sm text-white position-relative">
                <!-- Search Box-->
                <div class="search-box shadow-sm">
                    <button class="dismiss d-flex align-items-center">
                        <svg class="svg-icon svg-icon-heavy">
                            <use xlink:href="#close-1"> </use>
                        </svg>
                    </button>
                    <form id="searchForm" action="#" role="search">
                        <input class="form-control shadow-0" type="text" placeholder="What are you looking for...">
                    </form>
                </div>
                <div class="container-fluid w-100">
                    <div class="navbar-holder d-flex align-items-center justify-content-between w-100">
                        <!-- Navbar Header-->
                        <div class="navbar-header">
                            <!-- Navbar Brand -->
                            <a class="navbar-brand d-none d-sm-inline-block" href="index.html">
                                <div class="brand-text d-none d-lg-inline-block"><span>Agroscan </span><strong>Dashboard</strong></div>
                                <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>BD</strong></div>
                            </a>
                            <!-- Toggle Button--><a class="menu-btn active" id="toggle-btn" href="#"><span></span><span></span><span></span></a>
                        </div>
                        <!-- Navbar Menu -->
                        <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                            <!-- Search-->
                            <li class="nav-item d-flex align-items-center">
                                <a id="search" href="#">
                                    <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                                        <use xlink:href="#find-1"> </use>
                                    </svg></a>
                            </li>
                            <!-- Notifications-->
                            <li class="nav-item dropdown">
                                <a class="nav-link text-white" id="notifications" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                                        <use xlink:href="#chart-1"> </use>
                                    </svg><span class="badge bg-red badge-corner fw-normal">12</span></a>
                                <ul class="dropdown-menu dropdown-menu-end mt-3 shadow-sm" aria-labelledby="notifications">
                                    <li>
                                        <a class="dropdown-item py-3" href="#">
                                            <div class="d-flex">
                                                <div class="icon icon-sm bg-blue">
                                                    <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                                                        <use xlink:href="#envelope-1"> </use>
                                                    </svg>
                                                </div>
                                                <div class="ms-3"><span class="h6 d-block fw-normal mb-1 text-xs text-gray-600">You have 6 new messages </span><small class="small text-gray-600">4 minutes ago</small></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item py-3" href="#">
                                            <div class="d-flex">
                                                <div class="icon icon-sm bg-green">
                                                    <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                                                        <use xlink:href="#chats-1"> </use>
                                                    </svg>
                                                </div>
                                                <div class="ms-3"><span class="h6 d-block fw-normal mb-1 text-xs text-gray-600">New 2 WhatsApp messages</span><small class="small text-gray-600">4 minutes ago</small></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item py-3" href="#">
                                            <div class="d-flex">
                                                <div class="icon icon-sm bg-orange">
                                                    <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                                                        <use xlink:href="#checked-window-1"> </use>
                                                    </svg>
                                                </div>
                                                <div class="ms-3"><span class="h6 d-block fw-normal mb-1 text-xs text-gray-600">Server Rebooted</span><small class="small text-gray-600">8 minutes ago</small></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item py-3" href="#">
                                            <div class="d-flex">
                                                <div class="icon icon-sm bg-green">
                                                    <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                                                        <use xlink:href="#chats-1"> </use>
                                                    </svg>
                                                </div>
                                                <div class="ms-3"><span class="h6 d-block fw-normal mb-1 text-xs text-gray-600">New 2 WhatsApp messages</span><small class="small text-gray-600">10 minutes ago</small></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item all-notifications text-center" href="#"> <strong class="text-xs text-gray-600">view all notifications </strong></a>
                                    </li>
                                </ul>
                            </li>
                            <!-- Messages                        -->
                            <li class="nav-item dropdown">
                                <a class="nav-link text-white" id="messages" rel="nofollow" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                                        <use xlink:href="#envelope-1"> </use>
                                    </svg><span class="badge bg-orange badge-corner fw-normal">10</span></a>
                                <ul class="dropdown-menu dropdown-menu-end mt-3 shadow-sm" aria-labelledby="messages">
                                    <li>
                                        <a class="dropdown-item d-flex py-3" href="#"> <img class="img-fluid rounded-circle" src="img/avatar-1.jpg" alt="..." width="45">
                                            <div class="ms-3"><span class="h6 d-block fw-normal mb-1 text-sm text-gray-600">Jason Doe</span><small class="small text-gray-600"> Sent You Message</small></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex py-3" href="#"> <img class="img-fluid rounded-circle" src="img/avatar-2.jpg" alt="..." width="45">
                                            <div class="ms-3"><span class="h6 d-block fw-normal mb-1 text-sm text-gray-600">Jason Doe</span><small class="small text-gray-600"> Sent You Message</small></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex py-3" href="#"> <img class="img-fluid rounded-circle" src="img/avatar-3.jpg" alt="..." width="45">
                                            <div class="ms-3"><span class="h6 d-block fw-normal mb-1 text-sm text-gray-600">Jason Doe</span><small class="small text-gray-600"> Sent You Message</small></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item text-center" href="#"> <strong class="text-xs text-gray-600">Read all messages </strong></a>
                                    </li>
                                </ul>
                            </li>
                            <!-- Languages dropdown    -->
                            {{-- <li class="nav-item dropdown">
                                <a class="nav-link text-white dropdown-toggle d-flex align-items-center" id="languages" href="#" data-bs-toggle="dropdown" aria-expanded="false"><img class="me-2" src="img/flags/16/GB.png" alt="English"><span class="d-none d-sm-inline-block">English</span></a>
                                <ul class="dropdown-menu dropdown-menu-end mt-3 shadow-sm" aria-labelledby="languages">
                                    <li>
                                        <a class="dropdown-item" rel="nofollow" href="#"> <img class="me-2" src="img/flags/16/DE.png" alt="English"><span class="text-xs text-gray-700">German</span></a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" rel="nofollow" href="#"> <img class="me-2" src="img/flags/16/FR.png" alt="English"><span class="text-xs text-gray-700">French </span></a>
                                    </li>
                                </ul>
                            </li> --}}
                            <!-- Logout    -->
                            <li class="nav-item">
                                <a class="nav-link text-white" href="login.html"> <span class="d-none d-sm-inline">Logout</span>
                                    <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                                        <use xlink:href="#security-1"> </use>
                                    </svg></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="page-content d-flex align-items-stretch">
            <!-- Side Navbar -->
            <nav class="side-navbar z-index-40">
                <!-- Sidebar Header-->
                <div class="sidebar-header d-flex align-items-center py-4 px-3"><img class="avatar shadow-0 img-fluid rounded-circle" src="img/avatar-1.jpg" alt="...">
                    <div class="ms-3 title">
                        <h1 class="h4 mb-2">Mark Stephen</h1>
                        <p class="text-sm text-gray-500 fw-light mb-0 lh-1">Farmer</p>
                    </div>
                </div>
                <!-- Sidebar Navidation Menus--><span class="text-uppercase text-gray-400 text-xs letter-spacing-0 mx-3 px-2 heading">Main</span>
                <ul class="list-unstyled py-4">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/home">
                            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                                <use xlink:href="#real-estate-1"> </use>
                            </svg>Home </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/table1">
                            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                                <use xlink:href="#portfolio-grid-1"> </use>
                            </svg>Tables </a>
                    </li>
                    <li class="sidebar-item active">
                        <a class="sidebar-link" href="/map1">
                            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                                <use xlink:href="#survey-1"> </use>
                            </svg>Map </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#exampledropdownDropdown" data-bs-toggle="collapse">
                            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                                <use xlink:href="#browser-window-1"> </use>
                            </svg>Example dropdown </a>
                        <ul class="collapse list-unstyled " id="exampledropdownDropdown">
                            <li><a class="sidebar-link" href="#">Page</a></li>
                            <li><a class="sidebar-link" href="#">Page</a></li>
                            <li><a class="sidebar-link" href="#">Page</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="login.html">
                            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                                <use xlink:href="#disable-1"> </use>
                            </svg>Login page </a>
                    </li>
                </ul>
            </nav>
            <div class="content-inner w-100">
                <!-- Page Header-->
                <header class="bg-white shadow-sm px-4 py-3 z-index-20">
                    <div class="container-fluid px-0">
                        <h2 class="mb-0 p-1">Map</h2>
                    </div>
                </header>
                <!-- Map-Start -->
                <div class="row">
                    <div class="col-lg-11 col-sm-12 ms-lg-5 mt-3" style="height: 500px; background-color: #f8f9fa;">
                        <div id="map"></div>

                        <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
                        
                        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7NXm5Z7QKus-LjO51PFWANusbozyYU9U&callback=initMap&v=weekly" async></script>
                    </div>
                </div>
                <!-- Map-End -->
                <!--plant_disease-start -->

                <!-- tabel-start -->
                
                    
                
                <div class="table-responsive m-t-40 mb-5 mt-5 ms-2" style="margin-right: 10px;">
                    <table id="myTable" class="table table-bordered table-striped">
                        <!-- <thead> -->
                        <tr>
                            <th>#</th>
                            <th class="col-2">Image</th>
                            <th>Disease Name</th>
                            <th>Occurrences</th>
                            <th>Option</th>
                        </tr>
                        <!-- </thead> -->

                        <!-- <tbody> -->
                    @foreach ($maps as $map)

                        <tr>
                            <td>{{$map->id}}</td>
                            <td><img src="coconut.jpg" height="50px"></td>
                            <td>{{$map->diseases_name}}</td>
                            <td>{{$map->time}}</td>
                           
                            
                            <td class="d-none">{{$map->location1}}</td>
                            <td class="d-none">{{$map->location2}}</td>
                         
                            <td>
                                {{-- <button class="col-2 btn btn-danger" onclick="get(<?php echo $map->location1 .','.  $map->location2?>);"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                  </svg></button> --}}
                                  {{-- <button class="btn btn-primary">Details</button> --}}
                                <button class="col-8 btn btn-primary" onclick="sendID();">Solution</button>
                                {{-- POP UP --}}
                                <div class="modal fade" tabindex="-1" id="sendpassword" style="margin-top: 10%">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Solution</h5>
                                                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                                            </div>
                                            <div class="modal-body">
                        
                                                <div class="row">
                                                    <div class="col-12">
                                                       <span>When digging in the garden collect any larvae or adults and either feed to the birds or place pests into a bucket of soapy water. Drain off the excess water, place dead pests in a plastic bag and place into the rubbish bin.</span>
                                                    </div>
                                                </div>
                        
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                {{-- <button type="button" class="btn btn-primary" onclick="entercode();">Submite</button> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                        <!-- </tbody> -->
                    </table>
                </div>
                <!-- table-end -->
            
                <!-- plant_disease-end -->
                <!-- Page Footer-->
                <footer class="position-absolute bottom-0 bg-darkBlue text-white text-center py-3 w-100 text-xs" id="footer">
                    <div class="container-fluid">
                        <div class="row gy-2">
                            <div class="col-sm-6 text-sm-start">
                                <p class="mb-0">Your company &copy; 2017-2021</p>
                            </div>
                            <div class="col-sm-6 text-sm-end">
                                <p class="mb-0">Design by <a href="https://bootstrapious.com/p/admin-template" class="text-white text-decoration-none">Bootstrapious</a></p>
                                <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>

    <!-- map -->

    <script src="js/map.js"></script>
    <!-- JavaScript files-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/just-validate/js/just-validate.min.js"></script>
    <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
    <script>
        // ------------------------------------------------------- //
        //   Inject SVG Sprite - 
        //   see more here 
        //   https://css-tricks.com/ajaxing-svg-sprite/
        // ------------------------------------------------------ //
        function injectSvgSprite(path) {

            var ajax = new XMLHttpRequest();
            ajax.open("GET", path, true);
            ajax.send();
            ajax.onload = function(e) {
                var div = document.createElement("div");
                div.className = 'd-none';
                div.innerHTML = ajax.responseText;
                document.body.insertBefore(div, document.body.childNodes[0]);
            }
        }
        // this is set to BootstrapTemple website as you cannot 
        // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
        // while using file:// protocol
        // pls don't forget to change to your domain :)
        injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');
    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</body>

</html>