<!--message us box-->

<div class="container contact-form">
    <div class="contact-image">
        <img src="images/meditect-contact/mtlogo.png" alt="logo"/>
    </div>
        <form method="post">
            <h3>CONTACT US</h3>
            <center><p style = "margin-top: -5%; margin-bottom: 5%;"> Raise your suggestions, request 
            for partnerships, account issues, or any concerns regarding MediTect here. </p></center>

                <?php if (isset($_SESSION['btnSubmit'])): ?>
                            <div class="alert alert-primary" role="alert">
                            Thank you for contacting us!</div>
                <?php endif; ?>
                <form role="form" class="contact-form" action="" method="post">
            <?php if (isset($_SESSION['error'])): ?>
                    <div class="alert alert-warning"><?php echo $_SESSION['error']; ?></div>
                <?php endif; ?>
                        
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number" value="" />
                    </div>
                    <div class="form-group">
                        <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                    </div>
                </div>
            </div>
        </form>
</div>

<!--end of message us box-->

<!-- start of meditect contact information -->

<div class="container second-portion">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-lg-4">
            <div class="box">							
                <div class="icon">
                    <div class="image"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                        <div class="info">
                            <h3 class="title">WEBSITE</h3>
                            <p>
                                <i class="fa fa-globe" aria-hidden="true"></i>
                                https://meditect.herokuapp.com/
                            </p>
                        </div>
                </div>
            <div class="space"></div>
        </div> 
    </div>

        <div class="col-xs-12 col-sm-6 col-lg-4">
            <div class="box">							
                <div class="icon">
                    <div class="image"><i class="fa fa-mobile" aria-hidden="true"></i></div>
                    <div class="info">
                        <h3 class="title">CONTACT</h3>
                        <p>
                            <i class="fa fa-mobile" aria-hidden="true"></i> &nbsp (+63) 956-480-2044<br>
                        </p>
                    </div>
                </div>
            <div class="space"></div>
            </div> 
        </div>

        <div class="col-xs-12 col-sm-6 col-lg-4">
            <div class="box">							
                <div class="icon">
                    <div class="image"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                        <div class="info">
                            <h3 class="title">ADDRESS</h3>
                            <p>
                                <i class="fa fa-map-marker" aria-hidden="true"></i> 
                                &nbsp 3 Humabon, Makati, 1232 Kalakhang Maynila
                            </p>
                        </div>
                </div>
                <div class="space"></div>
            </div> 
        </div>		 
    </div>
</div>

</body>
</html>