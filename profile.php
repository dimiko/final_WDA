<!DOCTYPE html>
<html>
    <head>
        <title>Profile</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--  Icon-tab  -->
        <link rel="icon" href="img/logo.png">

        <!--  Bootstrap  -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/color/jquery.color-2.1.0.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


        <!-- Jquery DatePicker -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
        <script type="text/javascript"  src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <!--  fa icon  -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.11/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!--  Bootstrap  -->
        <link rel="stylesheet" href="css/style.css"> 

    </head>
    <body>
        <!--  navbar -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.html"><img src="img/logo.png"></a>
                </div>

                <div id="navbar" class="navbar-collapse collapse">
                    <ul id="top-menu" class="nav navbar-nav navbar-right main_nav">
                        <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                        <li><a href="#" class="active"><i class="fa fa-user"></i>Profile</a></li>
                    </ul>           
                </div><!--/.nav-collapse -->
            </div><!--/.container-->
        </nav>
        <!--  /navbar -->

        <div class="container" id="sdbar">
            <div class="row">
                <div class="col-12 col-md-3 col-xl-2 bd-sidebar">
                    <div class="head">
                        <h3>Favorites</h3>
                        <p>1. Megali Vretania Hotel</p>
                    </div>
                    <div class="reviews">
                        <h3>Reviews</h3>
                        <p>1. Hilton Hotel</p>
                        <div class="rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <p>2. Megali Vreatania Hotel</p>
                        <div class="rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-1">
                    <!-- empty -->
                </div>
                <main class="col-12 col-md-8 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
                    <div id="bookh2">
                        <h2>My Bookings</h2>
                    </div>
                    <div id="mybookings">
                        <div class="row preview">
                            <div class="col-md-3" id="image">
                                <img src="img/room-2.jpg"> 
                            </div>
                            <div class="col-md-1 line">
                                <img src="img/line.jpg">
                            </div>
                            <div class="col-md-8" id="details">
                                <h3>MEGALI VRETANIA HOTEL</h3>
                                <h4>ATHENS, SYNTAGMA</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus aliquet augue vitae lorem suscipit, 
                                    consequat congue sapien ornare. Morbi gravida faucibus nibh, et pretium lectus.</p>
                                <button type="submit" class="btn room-btn">Go to Room Page</button>
                            </div> 
                        </div>
                        <div class="row total">
                            <div class="col-md-3" id="totalcost">
                                <p>Total Cost: 500€</p> 
                            </div>
                            <div class="col-md-9 book-elements">
                                <div class="col-md-4 details">
                                    <p id="checkin">Check-in Date: 2018-04-27</p>
                                </div>
                                <div class="col-md-4 details">
                                    <p id="checkout">Check-out Date: 2018-04-30</p>
                                </div>
                                <div class="col-md-4 details">
                                    <p id="typeroom">Type Room: Double Room</p>
                                </div>
                            </div> 
                        </div>
                    </div>
                </main>
            </div>            
        </div>
    </body>
</html>
