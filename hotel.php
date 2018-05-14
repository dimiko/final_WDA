<?php include 'sql_connection.php';
   session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Hotel</title>
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
                        <li><a href="profile.php"><i class="fa fa-user"></i>Profile</a></li>
                    </ul>           
                </div><!--/.nav-collapse -->
            </div><!--/.container-->
        </nav>
        <!--  /navbar -->

		
		<?php
		$sql = "SELECT name, area, city, photo, count_of_guests, room_type, price, parking, wifi, pet_friendly, long_description, lat_location FROM `room` WHERE name='Megali Vretania Hotel' ";
		$result = mysqli_query($conn, $sql);
		 if (mysqli_num_rows($result) > 0) {
         // output data of each row
          while($row = mysqli_fetch_assoc($result)) { ?>
		
        <div class="container" id="sdbar">
            <div class="row">
                <div class="col-12 col-md-12 col-xl-12 bd-content" role="main">
                    <div class="row">
                        <div id="hotelheader" class="col-12 col-md-12 col-xl-12">
                            <div class="col-12 col-md-5">
                                <h4><?php echo " " . $row["name"]. " - " . $row["city"]. " , " . $row["area"]; ?></h4>
                            </div>
                            <div class="col-12 col-md-4 ratingrev">
                                <h4>Reviews:</h4>
                                <div class="ratingheader">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span> | </span>
                                </div>
                                <div>
                                    <span><i class="fas fa-heart"></i></span>
                                </div>
                            </div>
                            <div class="col-12 col-md-3 cost">
                                <h4>Per Night:<?php echo " " . $row["price"]. "€"; ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 imageroom">
                            <img src="img/room-2.jpg"> 
                        </div>
                    </div>
                    <div class="row">
                        <div id="hoteldetails" class="row col-12 col-md-12 col-xl-12">
						    
							<div class="col-md-2 col-md-offset-1">
							<p><i class="fas fa-user"></i>
							<span><?php echo " " . $row["count_of_guests"]."<br>"; ?></span></p>
                                <p>COUNT OF GUESTS</p>
                            </div>
							
                            <div class="col-md-2">
							<p><i class="fas fa-bed"></i>
							<span><?php echo " " . $row["room_type"]."<br>"; ?></span></p>
                                <p>TYPE OF ROOM</p>
                            </div>
							
                            <div class="col-md-2">
							<p><i class="fas fa-parking"></i>
							<span><?php echo " " . $row["parking"]."<br>"; ?></span></p>
                                <p>PARKING</p>
                            </div>
							
                            <div class="col-md-2">
							<p><i class="fas fa-wifi"></i>
							<span><?php echo " " . $row["wifi"]."<br>"; ?></span></p>
                                <p>WIFI</p>
                            </div>
							
                            <div class="col-md-2">
							<p><i class="fas fa-paw"></i>
							<span><?php echo " " . $row["pet_friendly"]."<br>"; ?></span></p>
                                <p>PET FRIENDLY</p>
                            </div>
							
						</div>
                    </div>
                    <div class="row">
                        <div class="col-md-8" id="details">
						    <h3>Room Description</h3>
                            <p><?php echo " " . $row["long_description"]."<br>"; ?></p>
							 <button type="submit" class="btn room-btn">Book</button>	
                        </div> 
					</div>
					<div class="row maprow">
					  <div id="map"></div>
					</div>
				</div>
            </div>            
        </div>
		
		
		<script>
        function initMap() {
		var latitude = <?php echo $row["lat_location"]; ?>;	
		//var langitude = <?php echo $lng_location; ?>;
        var place = {lat: latitude, lng: 23.735397};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: place
        });
        var marker = new google.maps.Marker({
          position: place,
          map: map
        });
       }
       </script>

	   <script async defer
         src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDamEqA84hR7N662qLl1DBXzLpDRrHGNZo&callback=initMap">
       </script>

	<?php
		}
        } else {
        echo "0 results";
        }
        ?>
	 
    </body>
</html>
