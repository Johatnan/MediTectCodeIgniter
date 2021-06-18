    <!-- Body -->

            <!-- Hospital Selection -->
            <?php
		  		$hospital_name = $_GET['hospital_name'];
				  //1. Setup Database connection
				  $servername = "localhost";
				  $db_username = "root"; //xampp default
				  $db_password = "";  //xampp default
				  $database = "meditect_database";

				  $conn = mysqli_connect($servername, $db_username, $db_password, $database);
				   //2. SELECT SQL
				  $sql = "SELECT 
						* 
					FROM 
						`hospitals`
                    WHERE
                         hospital_name='" . $hospital_name . "'";
					
				  //3. Execute SQL
 				  $result = mysqli_query($conn, $sql);
                  $row = mysqli_fetch_array($result);

 				  //.4 Closing Database Connection
 				  mysqli_close($conn);

                    $rating = "";
                    for ($ctr = 0; $ctr < $row["rating"]; $ctr++) {
                      $rating = $rating . '<i class="fas fa-star star-yellow"></i>';
                    }

                    $blackStars = 5 - $row["rating"];
                    for ($ctr = 0; $ctr < $blackStars; $ctr++) {
                      $rating = $rating . '<i class="fas fa-star"></i>';
                    }
      			  
  			?>

    <!-- Image Slider -->
    <div class="custom-container">
        <!-- Flickity HTML init -->
        <div class="carousel"
        data-flickity='{ "wrapAround": true }'>
        <?php
        echo'
            <div class="carousel-cell">
                <center><img class="pic-size" src="'.$row['img_1'].'"></center>
            </div>
            <div class="carousel-cell">
                <center><img class="pic-size" src="'.$row['img_2'].'"></center>
            </div>
            <div class="carousel-cell">
                <center><img class="pic-size" src="'.$row['img_3'].'"></center>
            </div>
            <div class="carousel-cell">
                <center><img class="pic-size" src="'.$row['img_4'].'"></center>
            </div>
        ';
        ?>
        </div>
    </div>
    <!-- End of Image Slider -->

    <!-- Start of Hospital Card -->
    <div class="hospital-card">
        <div class="card" style="width: 18rem; height:25rem;">
            <div class="card-body">
            <?php
            echo'
                <h5 class="card-title"><center><b>'.$row['hospital_name'].'</b></center></h5>
                <br>
                <p class="card-text"><i class="fas fa-map-marker-alt"></i> '.$row['hospital_address'].'</p>
                <p class="card-text"><i class="fas fa-phone-square-alt"></i> '.$row['hospital_contact'].'</p>
                <p class="card-text"><i class="fas fa-envelope"></i> '.$row['hospital_email'].'</p>
                <p class="card-text">Rating: ' . $rating . '</p>
                ';
                ?>
            </div>
        </div>
    </div>
    <!-- End of Hospital Card -->

    <!-- Hospital Location and Services -->
    <div class="hospital-location-services">
        <!-- Map -->
        <h4 style="font-family: impact;" class="text-center back-ground">LOCATION</h4>
        <div class="mapouter"><div class="gmap_canvas back-ground"><iframe width="800" height="250" id="gmap_canvas" src="<?php echo''.$row['map_api'].'';?>" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br><style>.mapouter{position:relative;text-align:center;height:250px;width:100%;}</style><<style>.gmap_canvas {overflow:hidden;background:none!important;height:250px;width:100%;}</style></div></div>
        <!-- Services -->
        <div class="hospital-services" style="padding:1px;">
            <div class="hospital-services-title">
                <div style="margin-left:10px;">
                <img src="https://pngimg.com/uploads/stethoscope/stethoscope_PNG13.png" style="border-radius: 50%;width:100px;height:100px; float:left; background-color:white;">
                </div>
                    <!-- Title Services -->
                    <div> 
                    <p><h1 style="font-family: impact; color:white;">THE AVAILABLE SERVICES</h1>
                    <h6 style="font-family: century gothic;" class="text-services">Service availability may change or vary depending on what the hospital or clinic can offer at the moment.</h6>
                    </p>
                    </div>
                <hr style="border: 3px solid white; border-radius: 3px; color:white;">
                    <!-- Available or Not Available Services -->
                    <div class="services-availability">
                        <!-- Services Availability Legend -->
                        <div>
                        <h6 style="font-family: century gothic; margin-left:10px; color:white">Note: <i class="fas fa-square" style="color:green;"></i> Green box - Service Available <i class="fas fa-square" style="color:red;"></i> Red box - Service Not Available</h6>
                        </div>
                        <div class="container">
                            <div class="row row-cols-2 row-cols-lg-3 g-2 g-lg-3">
                            <?php
                                if($row['icu']==1){
                                    echo '
                                    <div class="col">
                                    <div class="p-3 border bg-success border-0 text-center">Intensive Care Unit</div>
                                    </div>
                                    ';
                                }else{
                                    echo '
                                    <div class="col">
                                    <div class="p-3 border bg-danger border-0 text-center">Intensive Care Unit</div>
                                    </div>
                                    ';
                                }
                                if($row['xray']==1){
                                    echo '
                                    <div class="col">
                                    <div class="p-3 border bg-success border-0 text-center">X-ray/Radiology</div>
                                    </div>
                                    ';
                                }else{
                                    echo '
                                    <div class="col">
                                    <div class="p-3 border bg-danger border-0 text-center">X-ray/Radiology</div>
                                    </div>
                                    ';
                                }
                                if($row['lab']==1){
                                    echo '
                                    <div class="col">
                                    <div class="p-3 border bg-success border-0 text-center">Laboratories</div>
                                    </div>
                                    ';
                                }else{
                                    echo '
                                    <div class="col">
                                    <div class="p-3 border bg-danger border-0 text-center">Laboratories</div>
                                    </div>
                                    ';
                                }
                                if($row['pt']==1){
                                    echo '
                                    <div class="col">
                                    <div class="p-3 border bg-success border-0 text-center">Physical Therapy</div>
                                    </div>
                                    ';
                                }else{
                                    echo '
                                    <div class="col">
                                    <div class="p-3 border bg-danger border-0 text-center">Physical Therapy</div>
                                    </div>
                                    ';
                                }
                                if($row['pharma']==1){
                                    echo '
                                    <div class="col">
                                    <div class="p-3 border bg-success border-0 text-center">Pharmacy</div>
                                    </div>
                                    ';
                                }else{
                                    echo '
                                    <div class="col">
                                    <div class="p-3 border bg-danger border-0 text-center">Pharmacy</div>
                                    </div>
                                    ';
                                }
                                if($row['dietary']==1){
                                    echo '
                                    <div class="col">
                                    <div class="p-3 border bg-success border-0 text-center">Dietary Services</div>
                                    </div>
                                    ';
                                }else{
                                    echo '
                                    <div class="col">
                                    <div class="p-3 border bg-danger border-0 text-center">Dietary Services</div>
                                    </div>
                                    ';
                                }
                                if($row['pedia']==1){
                                    echo '
                                    <div class="col">
                                    <div class="p-3 border bg-success border-0 text-center">Pediatric Check-up</div>
                                    </div>
                                    ';
                                }else{
                                    echo '
                                    <div class="col">
                                    <div class="p-3 border bg-danger border-0 text-center">Pediatric Check-up</div>
                                    </div>
                                    ';
                                }
                                if($row['blood_serv']==1){
                                    echo '
                                    <div class="col">
                                    <div class="p-3 border bg-success border-0 text-center">Blood Services</div>
                                    </div>
                                    ';
                                }else{
                                    echo '
                                    <div class="col">
                                    <div class="p-3 border bg-danger border-0 text-center">Blood Services</div>
                                    </div>
                                    ';
                                }
                                if($row['gyne']==1){
                                    echo '
                                    <div class="col">
                                    <div class="p-3 border bg-success border-0 text-center">Gynecological Exam</div>
                                    </div>
                                    ';
                                }else{
                                    echo '
                                    <div class="col">
                                    <div class="p-3 border bg-danger border-0 text-center">Gynecological Exam</div>
                                    </div>
                                    ';
                                }      
                            ?>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- End of Hospital Location and Services -->