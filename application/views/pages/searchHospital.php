<!-- Body -->
    
    <!-- Search Bar -->
    <div class="search-hospital-card">
        <div class="card" style="width: 90%; height:25rem;">
            <div class="card-body">
                <div class="hospital-search">
                    <div class="hospital-search-box">
                        <h1 class="text">Search</h1>
                            <form action="searchHospital.php?search" method="Get">
                                <div class="form-row ">
                                    <div class="form-group col-md-12 container-fluid">
                                    <input type="search" class="form-control" name="hospital_name" placeholder="Hospital Name"required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <button type="submit" class="btn btn-secondary text col-4">Search Hospital</button>
                                </div>
                            </form>
                            
                    </div>
                    <div class="hospital-search-box-location">
                    <h1 class="text">Search Nearest Hospital</h1>
                        <div class="form-row ">
                            <button onclick="getLocation()" type="submit" class="btn btn-primary text col-4" name="search_nearest_hospital">Search Nearest Hospital</button>
                        </div> 
                        <p style="margin-top:5px;" class="text-2">
                            Note: This requires allowing the browser to access your location.
                        <p>
                    </div>                   
                </div>
                <div class="advance-hospital-search">
                    <div class="advance-search-check-box">
                        <h1 class="text">Advance Search</h1>
                        <form action="searchHospital.php?services" method="get">
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="icu">
                        <label class="form-check-label" for="defaultCheck1">
                            Intensive Care unit
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" name="xray">
                        <label class="form-check-label" for="defaultCheck2">
                            X-ray/Radiology
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck3" name="lab">
                        <label class="form-check-label" for="defaultCheck3">
                            Laboratories
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck4" name="pt">
                        <label class="form-check-label" for="defaultCheck4">
                            Physical Therapy
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck5" name="pharma">
                        <label class="form-check-label" for="defaultCheck5">
                            Pharmacy
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck6" name="dietary">
                        <label class="form-check-label" for="defaultCheck6">
                            Dietary Services
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck7" name="pedia">
                        <label class="form-check-label" for="defaultCheck7">
                            Pediatric Check-up
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck8" name="blood_serv">
                        <label class="form-check-label" for="defaultCheck8">
                            Blood Services
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck9" name="gyne">
                        <label class="form-check-label" for="defaultCheck9">
                            Gynecological Exam
                        </label>
                        </div>
                        <button type="submit" class="btn btn-primary text col-12" name="">Search Hospital w/ Available Services</button>
                        </form>
                    </div>
                    <div style="float:right">
                        <img class="search-image"src="https://www.thehealthy.com/wp-content/uploads/2017/07/why-do-doctors-have-such-bad-handwriting-183696449-Michaell-nivelet-shutterstock-ft.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Search Bar -->

    <!-- Hospital List -->
    <div class="hospital-list">
        <h1 class="text"><strong>Hospital/Clinic List</strong></h1>
            <div id="demo">
            </div>
        <!-- Hospital Default List -->
        <?php
           
           if(isset($_GET['default'])){
            $hospitals = [];

            //1. Setup Database connection
            $servername = "eu-cdbr-west-01.cleardb.com";
			$db_username = "bb372c9ecfbe6e"; //xampp default
			$db_password = "f8312940";  //xampp default
			$database = "heroku_5b8ce60be14add9";

            $conn = mysqli_connect($servername, $db_username, $db_password, $database);
             //2. SELECT SQL
            $sql = "SELECT 
                  * 
              FROM 
                  `hospitals`";
              
            //3. Execute SQL
             $result = mysqli_query($conn, $sql);
             while ($row = mysqli_fetch_assoc($result)){
             array_push($hospitals, $row);
             }

             //.4 Closing Database Connection
             mysqli_close($conn);
              
        
           
                for ($index = 0; $index < count($hospitals); $index++) {

                  $rating = "";
                  for ($ctr = 0; $ctr < $hospitals[$index]["rating"]; $ctr++) {
                    $rating = $rating . '<i class="fas fa-star star-yellow"></i>';
                  }

                  $blackStars = 5 - $hospitals[$index]["rating"];
                  for ($ctr = 0; $ctr < $blackStars; $ctr++) {
                    $rating = $rating . '<i class="fas fa-star"></i>';
                  }

                  echo '
                  <div class="row">
                  <div class="col-12 col-lg-12 col-sm-12">
                      <a href="user_recently_searched.php?hospital_name='. $hospitals[$index]["hospital_name"].'" class="link-css">
                      <div class="card" style="width: 90%; height:15rem; margin-top:20px;">
                          <div class="card-body">
                              <div class="hospital-image">
                                  <img class="hospital-image"src="'. $hospitals[$index]["img_1"] .'">
                              </div>
                              <div class="hospital-info">
                                  <h2>'. $hospitals[$index]["hospital_name"].'</h2>
                                  <p class="card-text"><i class="fas fa-map-marker-alt"></i> '. $hospitals[$index]["hospital_address"] .'</p>
                                  <p class="card-text"><i class="fas fa-phone-square-alt"></i>'. $hospitals[$index]["hospital_contact"] .'</p>
                                  <p class="card-text"><i class="fas fa-envelope"></i>'. $hospitals[$index]["hospital_email"] .'</p>
                                  <p class="card-text">Rating: ' . $rating . '</i></p>
                              </div>
                          </div>
                      </div>
                      </a>
                  </div>
                  </div>
                  ';
                }
            }	  		
        ?> 
        <!-- Hospital Search List with name and Services-->
        <?php
           
           if(isset($_GET['hospital_name'])){
            $hospital_name = $_GET['hospital_name'];
            $hospitals = [];
            //1. Setup Database connection
            $servername = "eu-cdbr-west-01.cleardb.com";
			$db_username = "bb372c9ecfbe6e"; //xampp default
			$db_password = "f8312940";  //xampp default
			$database = "heroku_5b8ce60be14add9";

            $conn = mysqli_connect($servername, $db_username, $db_password, $database);
             //2. SELECT SQL
            $sql = "SELECT * FROM `hospitals` WHERE `hospital_name` LIKE '%".$hospital_name."%'";
              
            //3. Execute SQL
             $result = mysqli_query($conn, $sql);
             while ($row = mysqli_fetch_assoc($result)){
             array_push($hospitals, $row);
             }

             //.4 Closing Database Connection
             mysqli_close($conn);
              
        
           
                for ($index = 0; $index < count($hospitals); $index++) {

                  $rating = "";
                  for ($ctr = 0; $ctr < $hospitals[$index]["rating"]; $ctr++) {
                    $rating = $rating . '<i class="fas fa-star star-yellow"></i>';
                  }

                  $blackStars = 5 - $hospitals[$index]["rating"];
                  for ($ctr = 0; $ctr < $blackStars; $ctr++) {
                    $rating = $rating . '<i class="fas fa-star"></i>';
                  }

                  echo '
                  <div class="row">
                  <div class="col-12 col-lg-12 col-sm-12">
                      <a href="user_recently_searched.php?hospital_name='. $hospitals[$index]["hospital_name"].'" class="link-css">
                      <div class="card" style="width: 90%; height:15rem; margin-top:20px;">
                          <div class="card-body">
                              <div class="hospital-image">
                                  <img class="hospital-image"src="'. $hospitals[$index]["img_1"] .'">
                              </div>
                              <div class="hospital-info">
                                  <h2>'. $hospitals[$index]["hospital_name"].'</h2>
                                  <p class="card-text"><i class="fas fa-map-marker-alt"></i> '. $hospitals[$index]["hospital_address"] .'</p>
                                  <p class="card-text"><i class="fas fa-phone-square-alt"></i>'. $hospitals[$index]["hospital_contact"] .'</p>
                                  <p class="card-text"><i class="fas fa-envelope"></i>'. $hospitals[$index]["hospital_email"] .'</p>
                                  <p class="card-text">Rating: ' . $rating . '</i></p>
                              </div>
                          </div>
                      </div>
                      </a>
                  </div>
                  </div>
                  ';
                }
            }	  		
        ?> 
        <?php
           if(isset($_GET['lat']) && isset($_GET['long'])){
            $latitude = $_GET['lat'];
            $longitude = $_GET['long'];

            $hospitals = [];
            //1. Setup Database connection
            $servername = "eu-cdbr-west-01.cleardb.com";
			$db_username = "bb372c9ecfbe6e"; //xampp default
			$db_password = "f8312940";  //xampp default
			$database = "heroku_5b8ce60be14add9";

            $conn = mysqli_connect($servername, $db_username, $db_password, $database);

            //2. SELECT SQL
            $sql = "SELECT *, (6371 * acos( cos( radians($latitude) ) * cos(radians(lat) ) * cos( radians(lon) - radians($longitude) ) + sin( radians($latitude) ) * sin( radians(lat) ) ) ) AS distance FROM hospitals ORDER BY distance";
            
            //3. Execute SQL
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)){
            array_push($hospitals, $row);
            }
            //.4 Closing Database Connection
            mysqli_close($conn);
            
       
          
               for ($index = 0; $index < count($hospitals); $index++) {

                 $rating = "";
                 for ($ctr = 0; $ctr < $hospitals[$index]["rating"]; $ctr++) {
                   $rating = $rating . '<i class="fas fa-star star-yellow"></i>';
                 }

                 $blackStars = 5 - $hospitals[$index]["rating"];
                 for ($ctr = 0; $ctr < $blackStars; $ctr++) {
                   $rating = $rating . '<i class="fas fa-star"></i>';
                 }

                 echo '
                 <div class="row">
                 <div class="col-12 col-lg-12 col-sm-12">
                     <a href="user_recently_searched.php?hospital_name='. $hospitals[$index]["hospital_name"].'" class="link-css">
                     <div class="card" style="width: 90%; height:15rem; margin-top:20px;">
                         <div class="card-body">
                             <div class="hospital-image">
                                 <img class="hospital-image"src="'. $hospitals[$index]["img_1"] .'">
                             </div>
                             <div class="hospital-info">
                                 <h2>'. $hospitals[$index]["hospital_name"].'</h2>
                                 <p class="card-text"><i class="fas fa-map-marker-alt"></i> '. $hospitals[$index]["hospital_address"] .'</p>
                                 <p class="card-text"><i class="fas fa-phone-square-alt"></i>'. $hospitals[$index]["hospital_contact"] .'</p>
                                 <p class="card-text"><i class="fas fa-envelope"></i>'. $hospitals[$index]["hospital_email"] .'</p>
                                 <p class="card-text">Rating: ' . $rating . '</i></p>
                             </div>
                         </div>
                     </div>
                     </a>
                 </div>
                 </div>
                 ';
               }
           }
           
        ?>
        <?php

            $searchQuery = "";

            if(isset($_GET['icu']) || isset($_GET['xray']) || isset($_GET['lab']) || isset($_GET['pt']) || isset($_GET['pharma'])
            || isset($_GET['dietary']) || isset($_GET['pedia']) || isset($_GET['blood_serv']) || isset($_GET['gyne'])){
                echo'Searching Available Services';
                if(isset($_GET['icu'])){
                   $searchQuery .= "icu = 1 AND ";
                }
                if(isset($_GET['xray'])){
                    $searchQuery .= "xray = 1 AND ";
                }
                if(isset($_GET['lab'])){
                    $searchQuery .= "lab = 1 AND ";
                }
                if(isset($_GET['pt'])){
                    $searchQuery .= "pt = 1 AND ";
                }
                if(isset($_GET['pharma'])){
                    $searchQuery .= "pharma = 1 AND ";
                }
                if(isset($_GET['dietary'])){
                    $searchQuery .= "dietary = 1 AND ";
                }
                if(isset($_GET['pedia'])){
                    $searchQuery .= "pedia = 1 AND ";
                }
                if(isset($_GET['blood_serv'])){
                    $searchQuery .= "blood_serv = 1 AND ";
                }
                if(isset($_GET['gyne'])){
                    $searchQuery .= "gyne = 1 AND ";
                }
               $hospitals = [];

            //1. Setup Database connection
            $servername = "eu-cdbr-west-01.cleardb.com";
			$db_username = "bb372c9ecfbe6e"; //xampp default
			$db_password = "f8312940";  //xampp default
			$database = "heroku_5b8ce60be14add9";

            $conn = mysqli_connect($servername, $db_username, $db_password, $database);
             //2. SELECT SQL
            $searchQuery = substr($searchQuery, 0, -4);
            $sql = "SELECT * FROM `hospitals` WHERE " . $searchQuery;
            
            //3. Execute SQL
             $result = mysqli_query($conn, $sql);
             while ($row = mysqli_fetch_assoc($result)){
             array_push($hospitals, $row);
             }

             //.4 Closing Database Connection
             mysqli_close($conn);
              
        
           
                for ($index = 0; $index < count($hospitals); $index++) {

                  $rating = "";
                  for ($ctr = 0; $ctr < $hospitals[$index]["rating"]; $ctr++) {
                    $rating = $rating . '<i class="fas fa-star star-yellow"></i>';
                  }

                  $blackStars = 5 - $hospitals[$index]["rating"];
                  for ($ctr = 0; $ctr < $blackStars; $ctr++) {
                    $rating = $rating . '<i class="fas fa-star"></i>';
                  }

                  echo '
                  <div class="row">
                  <div class="col-12 col-lg-12 col-sm-12">
                      <a href="user_recently_searched.php?hospital_name='. $hospitals[$index]["hospital_name"].'" class="link-css">
                      <div class="card" style="width: 90%; height:15rem; margin-top:20px;">
                          <div class="card-body">
                              <div class="hospital-image">
                                  <img class="hospital-image"src="'. $hospitals[$index]["img_1"] .'">
                              </div>
                              <div class="hospital-info">
                                  <h2>'. $hospitals[$index]["hospital_name"].'</h2>
                                  <p class="card-text"><i class="fas fa-map-marker-alt"></i> '. $hospitals[$index]["hospital_address"] .'</p>
                                  <p class="card-text"><i class="fas fa-phone-square-alt"></i>'. $hospitals[$index]["hospital_contact"] .'</p>
                                  <p class="card-text"><i class="fas fa-envelope"></i>'. $hospitals[$index]["hospital_email"] .'</p>
                                  <p class="card-text">Rating: ' . $rating . '</i></p>
                              </div>
                          </div>
                      </div>
                      </a>
                  </div>
                  </div>
                  ';
                }
            } 
        ?>
    </div>
    <!-- End of Hospital List -->