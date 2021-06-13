<div class = "container-sm mb-3">
            <p class="text-center mb-0" id = "personalInformation">
                ----------------- Personal Information -----------------
            </p>
            <pre>
              <?php 
                print_r($meditect_client);
                // print_r(count($meditect_client)-1);
              ?>
        </div>

        <!-- -------------start of profile------------ -->

        <div class="container">
          <div class="row">
            <div class="col-4">
              <div class="card mb-5">
                
                <?php 
                  if (isset($_SESSION['isLogin'])) {
                    if(!empty($meditect_client[0]['user_profile']) and $meditect_client[0]['user_profile'] != '') {
                      echo'

                        <img src="images/users/' . $meditect_client[0]['user_profile'] . '" class="card-img-top">
                      
                      ';
                    } else {
                      echo'
                        <div id="divProfPic" style = "background-image: url(images/users/defaultpic.png);"></div>
                      ';
                    }

                    if(!empty($meditect_client[0]['user_first_name']) and $meditect_client[0]['user_first_name'] != '' and !empty($meditect_client[0]['user_last_name']) and $meditect_client[0]['user_last_name'] != '') {
                      echo'

                        <h5 class="card-title text-center mb-1"><b>
                          ' . $meditect_client[0]['user_first_name'] . ' ' . $meditect_client[0]['user_last_name'] . '
                        </b></h5>
                      
                      ';
                    } else {
                      echo'
                        <h5 class="card-title text-center mb-1"><b>
                          ' . $_SESSION['name'] .'
                        </b></h5>
                      ';
                    }

                    $username = str_replace(' ', '', $_SESSION['name']);
                    echo'
                      <h6 class="card-title text-center" id="username"><b>
                      @' . $username .'
                      </b></h6>
                    ';                                   
                  }
                ?>

                <div class="card-body pt-0">                
                  <ul class="list-group list-group-flush displayInfo">
                    <li class="list-group-item pt-0"></li>
                    <li class="list-group-item">

                      <?php 
                        // --------------------------------sex------------------------

                        if(!empty($meditect_client[0]['user_sex']) and $meditect_client[0]['user_sex'] != '') {
                          echo'
                          
                            Sex: <b>'.$meditect_client[0]['user_sex'].'</b> <br>
                          
                          ';
                        } else {
                          echo'
                            Sex: <b>N/A</b> <br>
                          ';
                        }

                        // -------------------------Age--------------------

                        if(!empty($meditect_client[0]['user_age']) and $meditect_client[0]['user_age'] != '0') {
                          echo'
                          
                            Age: <b>'.$meditect_client[0]['user_age'].' years old</b> <br>
                          
                          ';
                        } else {
                          echo'
                            Age: <b>N/A</b> <br>
                          ';
                        }

                        // -------------------------Birthdate--------------------

                        if(!empty($meditect_client[0]['user_birthdate']) and $meditect_client[0]['user_birthdate'] != '0000-00-00') {
                          echo'
                          
                            Birthdate: <b>'.$meditect_client[0]['user_birthdate'].'</b> <br>
                          
                          ';
                        } else {
                          echo'
                            Birthdate: <b>N/A</b> <br>
                          ';
                        }

                        // -------------------------Address--------------------

                        if(!empty($meditect_client[0]['user_address']) and $meditect_client[0]['user_address'] != '') {
                          echo'
                          
                            Address: <b>'.$meditect_client[0]['user_address'].'</b> <br>
                          
                          ';
                        } else {
                          echo'
                            Address: <b>N/A</b> <br>
                          ';
                        } 
                      ?>

                      </li><!-- personal information display -->

                      <li class="list-group-item">
                      <?php 

                        // --------------------------------Blood Type------------------------

                        if(!empty($meditect_client[0]['user_bloodtype']) and $meditect_client[0]['user_bloodtype'] != '') {
                          echo'
                          
                            Blood Type: <b>'.$meditect_client[0]['user_bloodtype'].'</b> <br>
                          
                          ';
                        } else {
                          echo'
                            Blood Type: <b>N/A</b> <br>
                          ';
                        }

                        // -------------------------Height--------------------

                        if(!empty($meditect_client[0]['user_height']) and $meditect_client[0]['user_height'] != '0') {
                          echo'
                          
                            Height: <b>'.$meditect_client[0]['user_height'].' cm</b> <br>
                          
                          ';
                        } else {
                          echo'
                            Height: <b>N/A</b> <br>
                          ';
                        }

                        // -------------------------Birthdate--------------------

                        if(!empty($meditect_client[0]['user_weight']) and $meditect_client[0]['user_weight'] != '0') {
                          echo'
                          
                            Weight: <b>'.$meditect_client[0]['user_weight'].' kg</b> <br>
                          
                          ';
                        } else {
                          echo'
                            Weight: <b>N/A</b> <br>
                          ';
                        }
                      ?>
                      </li>

                      <li class="list-group-item pt-0"></li>

                      <button type="button" class="btn btn-secondary" id="btnEdit">Edit Profile</button>
                  </ul>
                  
                      <!-- ----------------------profile forms------------------
                      ----------------------profile forms------------------
                      ----------------------profile forms------------------
                      ----------------------profile forms------------------
                      ----------------------profile forms------------------
                      ----------------------profile forms------------------
                      ----------------------profile forms------------------ -->
                      
                <?php
                  if(empty($meditect_client) or empty($meditect_client[0])){
                    echo'
                      <form 
                        action="add_profile.php" 
                        method="post"
                        enctype="multipart/form-data" 
                        class="row g-3 formRow" 
                        style = "display: none;"
                      >
                    ';
                  } else {
                    echo'
                      <form 
                        action="editprofile.php" 
                        method="post"
                        enctype="multipart/form-data" 
                        class="row g-3 formRow" 
                        style = "display: none;"
                      >
                    ';
                  }
                ?>                
                  <div class="col-12">
                    <label for="inputEmail4" class="form-label">First Name</label>

                      <?php
                        if(!empty($meditect_client) and !empty($meditect_client[0])){
                          if (!empty($meditect_client[0]['user_first_name']) and $meditect_client[0]['user_first_name'] != '') {
                            echo'
                              <input type="text" class="form-control" name = "user_first_name" value="'.$meditect_client[0]['user_first_name'].'">
                            ';        
                          } else {
                            echo'
                              <input type="text" class="form-control" name = "user_first_name">
                            ';  
                          }
                        } else {
                          echo'
                            <input type="text" class="form-control" name = "user_first_name">
                          ';  
                        }                     
                      ?>

                  </div>
                  <div class="col-12">
                    <label for="inputPassword4" class="form-label">Last Name</label>

                      <?php
                        if(!empty($meditect_client) and !empty($meditect_client[0])){
                          if (!empty($meditect_client[0]['user_last_name']) and $meditect_client[0]['user_last_name'] != '') {
                            echo'
                              <input type="text" class="form-control" name = "user_last_name" value="'.$meditect_client[0]['user_last_name'].'">
                            ';  
                          } else {
                            echo'
                              <input type="text" class="form-control" name = "user_last_name">
                            ';  
                          }                       
                        } else {
                          echo'
                            <input type="text" class="form-control" name = "user_last_name">
                          ';  
                        }                     
                      ?>

                  </div>
                  <div class="col-12">
                    <label for="inputAddress" class="form-label">City Address</label>

                      <?php
                        if(!empty($meditect_client) and !empty($meditect_client[0])){
                          if(!empty($meditect_client[0]['user_address']) and $meditect_client[0]['user_address'] != '') {
                            echo'
                              <input type="text" class="form-control" name = "user_address" value="'.$meditect_client[0]['user_address'].'">
                            ';   
                          } else {
                            echo'
                              <input type="text" class="form-control" name = "user_address">
                            ';  
                          }                         
                        } else {
                          echo'
                            <input type="text" class="form-control" name = "user_address">
                          ';  
                        }                     
                      ?>

                  </div>
                  <div class="col-12">
                    <label for="inputAddress" class="form-label">Biological Sex</label>
                    <br>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="user_sex" id="inlineRadio1" value="Male" checked="checked">
                      <h6 class="form-check-label" for="inlineRadio1">Male</h6>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="user_sex" id="inlineRadio2" value="Female">
                      <h6 class="form-check-label" for="inlineRadio2">Female</h6>
                    </div>
                  </div>
                  
                  <div class="col-12">
                    <label for="inputAddress" class="form-label">Birth Date</label>
                    

                    <?php
                        if(!empty($meditect_client) and !empty($meditect_client[0])){
                          if(!empty($meditect_client[0]['user_birthdate']) and $meditect_client[0]['user_birthdate'] != '0000-00-00') {
                            echo'
                              <input type="date" name="user_birthdate" id="dateForm" value="'.$meditect_client[0]['user_birthdate'].'">
                            ';   
                          } else {
                            echo'
                              <input type="date" name="user_birthdate" id="dateForm" value="2000-01-01">
                            ';  
                          }                         
                        } else {
                          echo'
                            <input type="date" name="user_birthdate" id="dateForm" value="2000-01-01">
                          ';  
                        }                     
                      ?>

                  </div>
                  
                  <div class="col-12">
                    <label for="inputAddress" class="form-label">Age</label>
                    <div class="input-group">

                      <?php
                        if(!empty($meditect_client) and !empty($meditect_client[0])){
                          if(!empty($meditect_client[0]['user_age']) and $meditect_client[0]['user_age'] != '0') {
                            echo'
                              <input type="Number" class="form-control" name="user_age" aria-label="Amount (to the nearest dollar)" value="'.$meditect_client[0]['user_age'].'">
                            ';     
                          } else {
                            echo'
                              <input type="text" class="form-control" name = "user_age">
                            ';  
                          }                       
                        } else {
                          echo'
                            <input type="text" class="form-control" name = "user_age">
                          ';  
                        }                     
                      ?>

                    </div>
                  </div>
                  <div class="col-12">
                    <label for="inputAddress" class="form-label">Weight</label>
                    <div class="input-group">

                      <?php
                        if(!empty($meditect_client) and !empty($meditect_client[0])){
                          if(!empty($meditect_client[0]['user_weight']) and $meditect_client[0]['user_weight'] != '0') {
                            echo'
                              <input type="Number" class="form-control" name="user_weight" aria-label="Amount (to the nearest dollar)" value="'.$meditect_client[0]['user_weight'].'">
                            ';  
                          } else {
                            echo'
                              <input type="text" class="form-control" name = "user_weight">
                            ';  
                          }                         
                        } else {
                          echo'
                            <input type="text" class="form-control" name = "user_weight">
                          ';  
                        }                     
                      ?>

                      <span class="input-group-text">kg</span>
                    </div>
                  </div>
                  <div class="col-12">
                    <label for="inputAddress" class="form-label">Height</label>
                    <div class="input-group">

                      <?php
                        if(!empty($meditect_client) and !empty($meditect_client[0])){
                          if(!empty($meditect_client[0]['user_height']) and $meditect_client[0]['user_height'] != '0') {
                            echo'
                              <input type="Number" class="form-control" name="user_height" aria-label="Amount (to the nearest dollar)" value="'.$meditect_client[0]['user_height'].'">
                            ';
                          } else {
                            echo'
                              <input type="text" class="form-control" name = "user_height">
                            ';  
                          }                          
                        } else {
                          echo'
                            <input type="text" class="form-control" name = "user_height">
                          ';  
                        }                     
                      ?>

                      <span class="input-group-text">cm</span>
                    </div>
                  </div>
                  <div class="col-12">
                    <label for="inputAddress" class="form-label">Blood Type</label>
                    <select class="form-select bloodTypeSelect" name="user_bloodtype" aria-label="Default select example">
                      <option selected></option>
                      <option value="O-">O-</option>
                      <option value="O+">O+</option>
                      <option value="B-">B-</option>
                      <option value="B+">B+</option>
                      <option value="A-">A-</option>
                      <option value="A+">A+</option>
                      <option value="AB-">AB-</option>
                      <option value="AB+" selected>AB+</option>
                    </select>
                  </div>
                  <div class="col-12">
                    <label for="inputPassword4" class="form-label">Profile Picture</label>
                    <input class="form-control p-1" name="profile_picture" type="file" id="formFile">
                  </div>
                  <div class="col-6 mt-3 signInBtn">
                      <button type="button" class="btn btn-primary signInBtn" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit Profile</button>
                  </div>
                  <div class="col-6 mt-3 signInBtn">
                    <button type="button" class="btn btn-primary signInBtn" id="editbackbtn">Back</button>
                  </div>

                  <div class="modal fade" id="exampleModal" tabindex="-1">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Profile Changes</h5>
                        </div>
                        <div class="modal-body">
                          <p>Are you sure you want to change your profile?.</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form> <!-- end of form -->

                </div> <!--profile card body-->
              </div> <!--profile card-->
            </div> <!--col-->

<!-- 
            -------------------------end of profile card------------------
            -------------------------end of profile card------------------
            -------------------------end of profile card------------------
            -------------------------end of profile card------------------
            -------------------------end of profile card------------------
            -------------------------end of profile card------------------
            -------------------------end of profile card------------------ -->

            <div class="col-8">
              <div class="row row-cols-1">
                <div class="col">
                  <p class="text-center mb-0 profileInfo">
                      ----------------- Health Record -----------------
                  </p>
                  <div class="row row-cols-2 infoBox">
                      <div class="col categ">
                        <p class = "text-center mb-0 categWord">
                          Chronic Conditions
                        </p>                        
                      </div>
                      <div class="col categ">
                        <p class = "text-center mb-0 categWord">
                          Year Diagnosis
                        </p>  
                      </div>

                      <!-- -------------------chronic for loop------------------ -->
                      <?php
                      $chronicCounter = 0;

                        for($i = 1; $i < count($meditect_client); $i++) {
                          if (!empty($meditect_client[$i]['user_chronic_conditions']) and 
                              $meditect_client[$i]['user_chronic_conditions'] != '' and 
                              !empty($meditect_client[$i]['user_year_diagnosis']) and 
                              $meditect_client[$i]['user_year_diagnosis'] > 1700) {

                                echo'
                                  <div class="col borderRight borderTop infoUnder remInfo">
                                ';

                                // -------------------chronic conditions----------------
                                if(!empty($meditect_client[$i]['user_chronic_conditions']) and $meditect_client[$i]['user_chronic_conditions'] != '') {
                                  echo'
                                  
                                    '.$meditect_client[$i]['user_chronic_conditions'].'
                                  
                                  ';
                                } 

                                echo'
                                  </div>
                                  <div class="col borderTop infoUnder remInfo">
                                ';
                                
                                // -------------------year diagnosed----------------

                                echo'
                                  '.$meditect_client[$i]['user_year_diagnosis'].'

                                  <a class="deleteBtn btn btn-link ChronicDeleteBtnHidden" href="delete_health_records.php?chronic_record_id='.$meditect_client[$i]['health_record_id'].'">
                                    <button type="button" class="deleteBtn btn btn-link ChronicDeleteBtnHidden">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                      </svg>
                                    </button>
                                  </a>
                                ';

                                echo'
                                  </div>
                                ';

                                $chronicCounter++;
                                
                              } // if statement
                        } //for loop

                        
                      ?>                     
                    </div>

                    <div class="btnSubmit mt-2 addColChronic ChronicDeleteBtnHidden">
                      <button type="button" class="btn btn-link editInfo delete-chronic-back ChronicDeleteBtnHidden" id="btn-chronic">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-right" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z"/>
                        </svg>
                        Back
                      </button>
                    </div> <!-- chronic condition table -->

                  <!-- -----------------add info forms----------------- -->

                  <div class="formDiv ChronicAddBtnHidden">
                    <form 
                      action="add_health_records.php" 
                      method="post"
                      enctype="multipart/form-data"
                      class="editColChronic ChronicAddBtnHidden"
                    >
                                        
                      <div class="mb-3 ChronicAddBtnHidden">
                        <p class="text-center mb-0 profileInfo">
                          Add information
                        </p>
                        <label for="exampleInputEmail1" class="form-label"><b>Chronic Conditions</b></label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="new_chronic" required>
                        <div id="emailHelp" class="form-text">Must be a valid condition to maintain authenticity.</div>
                      </div>
                      <div class="mb-3 ChronicAddBtnHidden">
                        <label for="exampleInputPassword1" class="form-label"><b>Year Diagnosis</b></label>
                        <input type="number" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" name="new_year" min="1000" max="2021" required>
                      </div>
                      <div class="btnSubmit ChronicAddBtnHidden">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                  </div>

                  <div class="editDiv" style="text-align:right;">

                  <?php
                    if ($chronicCounter != 0) {
                      echo '
                        <button type="button" class="btn btn-link deleteInfo delete-chronic mt-2" id="btn-chronic">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                          </svg>
                          Delete
                        </button>
                      ';
                    }
                  ?>                    
                    <button type="button" class="btn btn-link editInfo add-chronic mt-2" id="btn-chronic">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                      </svg>
                      Add
                    </button>
                    <button type="button" class="btn btn-link editInfo add-chronic-back mt-2 ChronicAddBtnHidden" id="btn-chronic">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z"/>
                      </svg>
                      Back
                    </button>
                  </div>

                  <!-- -----------------------------------Drug Allergies---------------------------------
                  -----------------------------------Drug Allergies---------------------------------
                  -----------------------------------Drug Allergies---------------------------------
                  -----------------------------------Drug Allergies---------------------------------
                  -----------------------------------Drug Allergies---------------------------------
                  -----------------------------------Drug Allergies---------------------------------
                  -----------------------------------Drug Allergies--------------------------------- -->
                  
                  <div class="row row-cols-2 infoBox mt-4">
                      <div class="col categ">
                        <p class = "text-center mb-0 categWord">
                          Drug Allergies
                        </p>                        
                      </div>
                      <div class="col categ">
                        <p class = "text-center mb-0 categWord">
                          Reaction(s)
                        </p>  
                      </div>

                      <!-- -------------------for loop------------------ -->
                      <?php
                        $drugCounter = 0;

                        for($i = 1; $i < count($meditect_client); $i++) {
                          if (!empty($meditect_client[$i]['user_drug_allergies']) and 
                              $meditect_client[$i]['user_drug_allergies'] != '' and 
                              !empty($meditect_client[$i]['user_reactions']) and 
                              $meditect_client[$i]['user_reactions'] != '') {
                                
                                echo'
                                  <div class="col borderRight borderTop infoUnder remInfo">
                                ';

                                // -----------------------------------
                                if(!empty($meditect_client[$i]['user_drug_allergies']) and $meditect_client[$i]['user_drug_allergies'] != '') {
                                  echo'
                                  
                                    '.$meditect_client[$i]['user_drug_allergies'].'
                                  
                                  ';
                                } 

                                echo'
                                  </div>
                                  <div class="col borderTop infoUnder remInfo">

                                  <!-- <form 
                                    action="delete_health_records.php" 
                                    method="post"
                                    enctype="multipart/form-data"
                                    id = "drugDeleteForm"
                                  > -->
                                  <!--<input type="number" class="form-control" name = "drug_record_id" value="'.$meditect_client[$i]['health_record_id'].'"> -->   
                                    


                                  <!--</form> -->
                                ';
                                
                                // -----------------------------------
                                if(!empty($meditect_client[$i]['user_reactions']) and $meditect_client[$i]['user_reactions'] != '') {
                                  echo'
                                  
                                    '.$meditect_client[$i]['user_reactions'].'     

                                    <a class="deleteBtn btn btn-link DrugDeleteBtnHidden" href="delete_health_records.php?drug_record_id='.$meditect_client[$i]['health_record_id'].'">
                                      <button type="button" class="deleteBtn btn btn-link DrugDeleteBtnHidden">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                          <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                          <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                        </svg>
                                      </button>
                                    </a>                                    
                                  
                                  ';
                                }

                                echo'
                                  </div>
                                ';
                                
                                $drugCounter++;

                              } //if statement
                        }//for loop
                      ?>                   
                    </div>

                    <div class="btnSubmit mt-2 addColChronic DrugDeleteBtnHidden">
                      <button type="button" class="btn btn-link editInfo delete-drug-back DrugDeleteBtnHidden" id="btn-drug">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-right" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z"/>
                        </svg>
                        Back
                      </button>
                    </div> <!-- delete back -->

                  <!-- -----------------add info forms----------------- -->

                  <div class="formDiv DrugAddBtnHidden">
                    <form 
                      action="add_health_records.php" 
                      method="post"
                      enctype="multipart/form-data"
                      class="editColChronic DrugAddBtnHidden"
                    >
                                        
                      <div class="mb-3 DrugAddBtnHidden">
                      <p class="text-center mb-0 profileInfo">
                        Add information
                      </p>
                        <label for="exampleInputEmail1" class="form-label"><b>Drug Allergies</b></label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="new_drug" required>
                        <div id="emailHelp" class="form-text">Must be a valid allergy to maintain authenticity.</div>
                      </div>
                      <div class="mb-3 DrugAddBtnHidden">
                        <label for="exampleInputPassword1" class="form-label"><b>Reaction(s)</b></label>
                        <input type="text" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" name="new_reaction" required>
                      </div>
                      <div class="btnSubmit DrugAddBtnHidden">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                  </div>

                  <div class="editDiv" style="text-align:right;">      

                  <?php
                    if ($drugCounter != 0) {
                      echo '
                        <button type="button" class="btn btn-link deleteInfo delete-drug mt-2" id="btn-drug">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                          </svg>
                          Delete
                        </button>
                      ';
                    }
                  ?>  

                    <button type="button" class="btn btn-link editInfo add-drug mt-2" id="btn-drug">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                      </svg>
                      Add
                    </button>
                    <button type="button" class="btn btn-link editInfo add-drug-back mt-2 DrugAddBtnHidden" id="btn-drug">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z"/>
                      </svg>
                      Back
                    </button>
                  </div>

                  <!-- ---------------------Food Allergies-----------------
                  ---------------------Food Allergies-----------------
                  ---------------------Food Allergies-----------------
                  ---------------------Food Allergies-----------------
                  ---------------------Food Allergies-----------------
                  ---------------------Food Allergies----------------- -->

                  <div class="row row-cols-2 mt-4 infoBox">
                      <div class="col categ">
                        <p class = "text-center mb-0 categWord">
                          Food Allergies
                        </p>
                      </div>
                      <div class="col categ">
                        <p class = "text-center mb-0 categWord">
                          Reaction(s)
                        </p>
                      </div>
                      
                        <!-- -------------------for loop------------------ -->
                        <?php
                          $foodCounter = 0;

                          for($i = 1; $i < count($meditect_client); $i++) {
                            if (!empty($meditect_client[$i]['user_food_allergies']) and 
                                $meditect_client[$i]['user_food_allergies'] != '' and 
                                !empty($meditect_client[$i]['user_food_reactions']) and 
                                $meditect_client[$i]['user_food_reactions'] != '') {
                                  
                                  echo'
                                    <div class="col borderRight borderTop infoUnder remInfo">
                                  ';

                                  // -----------------------------------
                                  if(!empty($meditect_client[$i]['user_food_allergies']) and $meditect_client[$i]['user_food_allergies'] != '') {
                                    echo'
                                    
                                      '.$meditect_client[$i]['user_food_allergies'].'
                                    
                                    ';
                                  } 

                                  echo'
                                    </div>
                                    <div class="col borderTop infoUnder remInfo">
                                  ';
                                  
                                  // -----------------------------------
                                  if(!empty($meditect_client[$i]['user_food_reactions']) and $meditect_client[$i]['user_food_reactions'] != '') {
                                    echo'
                                    
                                      '.$meditect_client[$i]['user_food_reactions'].' 

                                      <a class = "deleteBtn btn btn-link FoodDeleteBtnHidden" href="delete_health_records.php?food_record_id='.$meditect_client[$i]['health_record_id'].'">
                                        <button class = "deleteBtn btn btn-link FoodDeleteBtnHidden">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                          </svg>
                                        </button>
                                      </a>
                                    
                                    ';
                                  }

                                  echo'
                                    </div>
                                  ';

                                  $foodCounter++;

                                } //if statement
                          } //for loop
                        ?>                     
                      </div>

                      <div class="btnSubmit mt-2 addColChronic FoodDeleteBtnHidden">
                        <button type="button" class="btn btn-link editInfo delete-food-back" id="btn-food">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z"/>
                          </svg>
                          Back
                        </button>
                      </div> <!-- back delete -->

                    <!-- -----------------add info forms----------------- -->

                    <div class="formDiv FoodAddBtnHidden">
                      <form 
                        action="add_health_records.php" 
                        method="post"
                        enctype="multipart/form-data"
                        class="editColChronic FoodAddBtnHidden"
                      >
                                          
                        <div class="mb-3 FoodAddBtnHidden">
                        <p class="text-center mb-0 profileInfo">
                          Add information
                        </p>
                          <label for="exampleInputEmail1" class="form-label"><b>Food Allergies</b></label>
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="new_food" required>
                          <div id="emailHelp" class="form-text">Must be a valid allergy to maintain authenticity.</div>
                        </div>
                        <div class="mb-3 FoodAddBtnHidden">
                          <label for="exampleInputPassword1" class="form-label"><b>Reaction(s)</b></label>
                          <input type="text" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" name="new_food_reaction" required>
                        </div>
                        <div class="btnSubmit FoodAddBtnHidden">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </form>
                    </div>

                    <div class="editDiv" style="text-align:right;">    

                    <?php
                      if ($foodCounter != 0) {
                        echo '
                          <button type="button" class="btn btn-link deleteInfo delete-food mt-2" id="btn-drug">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                            Delete
                          </button>
                        ';
                      }
                    ?>            

                      <button type="button" class="btn btn-link editInfo add-food mt-2" id="btn-chronic">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                          <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg>
                        Add
                      </button>
                      <button type="button" class="btn btn-link editInfo add-food-back mt-2 FoodAddBtnHidden" id="btn-chronic">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-right" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z"/>
                        </svg>
                        Back
                      </button>
                  </div> <!-- food allergies -->

                  <!-- ----------------Medicines---------------
                  ----------------Medicines---------------
                  ----------------Medicines---------------
                  ----------------Medicines---------------
                  ----------------Medicines--------------- -->

                  <div class="row row-cols-1 mt-4 mb-2 infoBox">
                      <div class="col categ">
                        <p class = "mb-0 categWord">
                          Medicines
                        </p>
                      </div>
                      <!-- -------------------for loop------------------ -->
                      <?php
                        $medicineCounter = 0;

                          for($i = 1; $i < count($meditect_client); $i++) {
                            if (!empty($meditect_client[$i]['user_medicine']) and 
                                $meditect_client[$i]['user_medicine'] != '') {
                                  
                                  echo'
                                    <div class="col borderTop infoUnder remInfo">
                                  ';

                                  // -----------------------------------
                                  if(!empty($meditect_client[$i]['user_medicine']) and $meditect_client[$i]['user_medicine'] != '') {
                                    echo'
                                    
                                      '.$meditect_client[$i]['user_medicine'].'

                                      <a class = "deleteBtn btn btn-link MedicineDeleteBtnHidden" href="delete_health_records.php?medicine_record_id='.$meditect_client[$i]['health_record_id'].'">
                                        <button class = "deleteBtn btn btn-link MedicineDeleteBtnHidden">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                          </svg>
                                        </button>
                                      </a>
                                    
                                    ';
                                  } 

                                  echo'
                                    </div>
                                  ';

                                  $medicineCounter++;

                                } //if statement
                          } //for loop
                        ?>                        
                      </div>

                      <div class="btnSubmit mt-2 addColChronic MedicineDeleteBtnHidden">
                        <button type="button" class="btn btn-link editInfo delete-medicine-back" id="btn-chronic">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z"/>
                          </svg>
                          Back
                        </button>
                      </div> <!-- chronic condition table -->

                    <!-- -----------------add info forms----------------- -->

                    <div class="formDiv MedicineAddBtnHidden">
                      <form 
                        action="add_health_records.php" 
                        method="post"
                        enctype="multipart/form-data"
                        class="editColChronic MedicineAddBtnHidden"
                      >
                                          
                        <div class="mb-3 MedicineAddBtnHidden">
                        <p class="text-center mb-0 profileInfo">
                          Add information
                        </p>
                          <label for="exampleInputEmail1" class="form-label"><b>Medicine</b></label>
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="new_medicine" required>
                          <div id="emailHelp" class="form-text">Must be a valid medicine to maintain authenticity.</div>
                        </div>
                        <div class="btnSubmit MedicineAddBtnHidden">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </form>
                    </div>

                    <div class="editDiv" style="text-align:right;">            

                    <?php
                      if ($medicineCounter != 0) {
                        echo '
                          <button type="button" class="btn btn-link deleteInfo delete-medicine mt-2" id="btn-drug">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                            Delete
                          </button>
                        ';
                      }
                    ?> 

                      <button type="button" class="btn btn-link editInfo add-medicine mt-2" id="btn-chronic">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                          <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg>
                        Add
                      </button>
                      <button type="button" class="btn btn-link editInfo add-medicine-back mt-2 MedicineAddBtnHidden" id="btn-chronic">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-right" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z"/>
                        </svg>
                        Back
                      </button>
                  </div> <!-- Medicines -->
                  
                </div> <!--end of healthrecord-->

                <!-- --------------Recents-----------------
                --------------Recents-----------------
                --------------Recents-----------------
                --------------Recents-----------------
                --------------Recents-----------------
                --------------Recents-----------------
                --------------Recents-----------------
                --------------Recents----------------- -->
              
                <div class="col mt-3">
                  <p class="text-center mb-0 profileInfo">
                      --------------- Recently Searched ---------------
                  </p>
                </div>

                <!-- <?php

                    for($i = 0; $i < count($meditect_client); $i++){
                      
                      echo '
                      
                      

                      ';

                    }

                ?> -->

                <div class="container mb-5 recentsCont">
                  <div class="row row-cols-3">

                  <!-- -------------------------------------- -->

                  <?php

                    for ($i = 0; $i < 9; $i++) {

                      if (!empty($meditect_client[$i]['hospital_name']) and 
                          !empty($meditect_client[$i]['img_1']) and 
                          !empty($meditect_client[$i]['rating']) and
                          !empty($meditect_client[$i]['hospital_address']) and
                          !empty($meditect_client[$i]['hospital_contact'])                          
                      ) {

                        echo'

                        <a class = "hospitalLink mb-3" href = "user_recently_searched.php?hospital_name='.$meditect_client[$i]['hospital_name'].'">
                      
                          <div class="col hospitalCol">
                            <div class="card hospitalCards">
                              <img src="'.$meditect_client[$i]['img_1'].'" class="card-img-top" alt="hospital picture">

                              <div class="card-body">
                                <h5 class="hospitalTitle card-title text-center"><b>'.substr($meditect_client[$i]['hospital_name'], 0, 35).'</b></h5>

                                <p class="card-text text-center ratings">
                      ';

                            for ($j = 0; $j < 5; $j++) {
                              $ctr = $j;
                              if ($meditect_client[$i]['rating'] - $ctr >= 1) {
                                echo '
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                  </svg>
                                ';
                              } else if ($meditect_client[$i]['rating'] - $ctr >= 0.5) {
                                echo '
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                  </svg>
                                ';
                              } else {
                                echo '
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                  </svg>
                                ';
                              }
                            };

                      echo '
                                </p>
                                
                                <p class="card-text text-center">
                                  '.substr($meditect_client[$i]['hospital_address'], 0, 34).'...
                                </p>

                                <br>
                                
                                <p class="card-text text-center">
                                  '.$meditect_client[$i]['hospital_contact'].'
                                </p>

                              </div>
                            </div><!-- end of card -->
                          </div><!-- end of col -->

                        </a>

                        ';

                      }

                      

                    }

                  ?>

                    

                    <!-- ------------------------------------------- -->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>