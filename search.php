<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Search</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--  Icon-tab  -->
        <link rel="icon" href="img/logo.png">

        <!--  Bootstrap  -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/color/jquery.color-2.1.0.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!--  Price range filter  -->
        <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
        <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

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
                        <li><a href="profile.php"><i class="fa fa-user"></i>Profile</a></li>
                    </ul>           
                </div><!--/.nav-collapse -->
            </div><!--/.container-->
        </nav>
        <!--  /navbar -->

        <div class="container" id="sdbar">
            <div class="row">
                <div class="col-12 col-md-3 col-xl-12 bd-sidebar selectstyle">
                    <div class="head head-search">
                        <h3>Find The Perfect<br>Hotel</h3>
                    </div>
                    <div class="col-12 col-md-12 col-xl-12 frm_search">
                        <select>
                            <option>Count of Guests</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-12 col-xl-12 frm_search">
                        <select>
                            <option>Room Type</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-12 col-xl-12 frm_search">
                        <select>
                            <option>City</option>
                        </select>
                    </div>
                    <!--  price range filter  -->
                    <div class="col-12 col-md-12 col-xl-12 frm_search">
                        <input id="start-date" name="datepicker" placeholder="Check-in Date" type="text" required>
                        <span class="iconform fa fa-calendar-alt" aria-hidden="true"></span>
                    </div>
                    <!--  choose date "to"  -->
                    <div class="col-12 col-md-12 col-xl-12 frm_search">
                        <input id="end-date" name="datepicker" placeholder="Check-out Date" type="text" required>
                        <span class="iconform fa fa-calendar-alt" aria-hidden="true"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-12 search-button">
                            <button type="submit" class="btn button">Search</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-1">
                    <!-- empty -->
                </div>
                <main class="col-12 col-md-8 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
                    <div id="bookh2">
                        <h2>Search Results</h2>
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
                                <p>Per Night: 500€</p> 
                            </div>
                            <div class="col-md-9 hotel-elements">
                                <div class="col-md-5">
                                    <p id="checkin">Count of Guest: 1</p>
                                </div>
                                <div class="col-md-2">
                                    <span> | </span>
                                </div>
                                <div class="col-md-5">
                                    <p id="checkout">Type of Room: Single Room</p>
                                </div>
                            </div> 
                        </div>
                    </div>
                </main>
            </div>            
        </div>


        <!--  datepicker  -->
        <script>
            $(document).ready(function () {
                $(function () {
                    var dateToday = new Date();
                    var dates = $("#start-date, #end-date").datepicker({
                        defaultDate: "+2d",
                        changeMonth: true,
                        numberOfMonths: 1,
                        minDate: dateToday,
                        onSelect: function (selectedDate) {
                            var option = this.id === "start-date" ? "minDate" : "maxDate",
                                    instance = $(this).data("datepicker"),
                                    date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
                            dates.not(this).datepicker("option", option, date);
                        }
                    });
                });
            });
        </script>
        <!--  /datepicker  -->
    </body>
</html>
