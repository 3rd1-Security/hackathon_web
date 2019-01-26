<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Focus Admin: Vector Map</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">
    <!--Themes Jquery Bar Rating-->
    <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
	
    <link href="assets/css/lib/helper.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <style type="text/css">
        #cardnews{
            background: #8e9eab;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #eef2f3, #8e9eab);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #eef2f3, #8e9eab); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


        }
    </style>
</head>

<body>

        <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
            <div class="nano">
                <div class="nano-content">
                    <div class="logo"><a href="index.html"><!-- <img src="assets/images/logo.png" alt="" /> --><span>Focus</span></a></div>
                    <ul>
                        <li><a href="rural.php"><i class="ti-home"></i> Home</a></li>
                        <li><a href="schemes.php"><i class="ti-bar-chart-alt"></i> Government Schemes</a></li>
                        <li><a href="app-event-calender.php"><i class="ti-calendar"></i> NewsFeed </a></li>
                        <li><a href="case.php"><i class="ti-calendar"></i> Case Study </a></li>
                        <li><a href="app-profile.php"><i class="ti-user"></i> Proposed Schemes </a></li>
                        <li><a href="#"><i class="ti-file"></i> Tutorials</a></li>
                        <li><a href="#"><i class="ti-heart"></i> Case Study</a></li>
                        <li><a href="#"><i class="ti-map"></i> LogIn</a></li>
                        <li class="active"><a class="sidebar-sub-toggle"><i class="ti-user"></i> Rural Entrepreneurship</a></li>
                        <!--<li><a href="#"><i class="ti-layout-grid2-alt"></i> Log In</a></li>-->
                    </ul>
                </div>
            </div>
        </div>
        <!-- /# sidebar -->


        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="float-left">
                            <div class="hamburger sidebar-toggle">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="float-right">
                            <ul>
                                <li class="header-icon dib"><span class="user-avatar"><a href="#">Log In <i class="ti-angle-down f-s-10"></i></a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
					<div class="col-md-12" align="center">
                        <h1>SakSham Bharat</h1>
					</div>
				</div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card nestable-cart" id="cardnews">
                                <div class="card-title">
                                    <span align="center" ><h2>Rural Entrepreneurship</h2></span>
                                    <h4>Entrepreneurs are frequently thought of as national assets to be cultivated, motivated and remunerated to the greatest possible extent. Entrepreneurs can change the way we live and work. If successful, their innovations may improve our standard of living, and in addition to creating wealth with their entrepreneurial ventures, they also create jobs and the conditions for a prosperous society.

Entrepreneurs Create New Businesses
Trailblazing offerings by entrepreneurs, in the form of new goods and services, can produce a cascading effect by stimulating related businesses or sectors supporting the new venture, furthering economic development.

For example, a few IT companies founded the Indian IT industry in the 1990s as a backend programmers' hub. Soon the industry gathered pace in its own programmers’ domain. But more importantly, millions from other sectors benefited from it. (For more, see: Top Indian Billionaires And How They Made Their Money.)

Businesses in associated industries, like call center operations, network maintenance companies and hardware providers, flourished. Education and training institutes nurtured a new class of IT workers who were offered better, high-paying jobs. Infrastructure development organizations and even real estate companies capitalized on this growth as workers migrated to employment hubs seeking better lives.

Similarly, future development efforts in underdeveloped countries will require robust logistics support, capital investment from buildings to paper clips, and a qualified workforce. From the highly qualified programmer to the construction worker, the entrepreneur benefits a large part of the economy.</h4>
                                    <div class="card-title-right-icon">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->


                </section>
            </div>
        </div>
    </div>



    <div id="search">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
    <!-- jquery vendor -->
    <script src="assets/js/lib/jquery.min.js"></script>
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="assets/js/lib/menubar/sidebar.js"></script>
    <script src="assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    
    <!-- bootstrap -->


    <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
    <!-- scripit init-->
    <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <!-- scripit init-->
    <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <!-- scripit init-->
    <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <!-- scripit init-->
    <script src="assets/js/lib/vector-map/country/jquery.vmap.algeria.js"></script>
    <!-- scripit init-->
    <script src="assets/js/lib/vector-map/country/jquery.vmap.argentina.js"></script>
    <!-- scripit init-->
    <script src="assets/js/lib/vector-map/country/jquery.vmap.brazil.js"></script>
    <!-- scripit init-->
    <script src="assets/js/lib/vector-map/country/jquery.vmap.france.js"></script>
    <!-- scripit init-->
    <script src="assets/js/lib/vector-map/country/jquery.vmap.germany.js"></script>
    <!-- scripit init-->
    <script src="assets/js/lib/vector-map/country/jquery.vmap.greece.js"></script>
    <!-- scripit init-->
    <script src="assets/js/lib/vector-map/country/jquery.vmap.iran.js"></script>
    <!-- scripit init-->
    <script src="assets/js/lib/vector-map/country/jquery.vmap.iraq.js"></script>
    <!-- scripit init-->
    <script src="assets/js/lib/vector-map/country/jquery.vmap.russia.js"></script>
    <!-- scripit init-->
    <script src="assets/js/lib/vector-map/country/jquery.vmap.tunisia.js"></script>
    <!-- scripit init-->
    <script src="assets/js/lib/vector-map/country/jquery.vmap.europe.js"></script>
    <!-- scripit init-->
    <script src="assets/js/lib/vector-map/country/jquery.vmap.usa.js"></script>
    <!-- scripit init-->
    <script src="assets/js/lib/vector-map/country/jquery.vmap.turkey.js"></script>
    <!-- scripit init-->
    <script src="assets/js/lib/vector-map/vector.init.js"></script>
    <!-- scripit init-->
    <script src="assets/js/scripts.js"></script>
    <!-- scripit init-->
</body>

</html>