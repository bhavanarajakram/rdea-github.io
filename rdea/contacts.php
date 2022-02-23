<?php include 'header.php'; ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style type="text/css">

        .navbar{
  background: transparent url('img/Screenshot 2021-02-17 at 12.53.10 PM.svg') 0% 0% no-repeat padding-box;
  position: fixed;
}
.navbar-dark .navbar-nav .nav-link{color: #ffee85 !important;}
input[type="text"]::-webkit-input-placeholder {
  color: white !important;
}
input[type="email"]::-webkit-input-placeholder {
  color: white !important;
}
        input[type="text"],input[type="email"],select
            {
                border: 0;
                border-bottom: 1px solid grey;
                outline: 0;
                width: 100%;
                background: transparent;
                color: white;
                font-size: 22px;
            }
            button[type="submit"]{
                font-size:22px;
            }
            h4,p{
                color: white;
                font-weight: bold;
            }
            p{
                font-size: 12px;
            }
            ::-webkit-input-placeholder { /* Edge */
                color: white;
              font-weight: bold;
              
            }

            :-ms-input-placeholder { /* Internet Explorer 10-11 */
                color: white;
              font-weight: bold;
              
            }

            ::placeholder {
                color: white;
              font-weight: bold;
              
            }
            @media only screen and (max-width: 768px) {
                .navbar{background: transparent;}
                .navbar-dark .navbar-nav .nav-link{color: white !important;}
                }
                .navbar-dark .navbar-toggler {
                    color: black !important;
                    /*border-color: transparent !important;*/
                }
                .navbar-toggler {
                    background-color: black !important;   
                }
    </style>

    <!--========== PAGE CONTENT ==========-->
    <!-- Start Contact Form -->
    <div class="col-md-12" style="background:url('img/contact/contact_pc.png'); background-repeat: no-repeat; background-size: cover; width: 100%; padding-top: 10%; padding-bottom: 5%;" id="pc"> <!-- g-bg-color--primary -->
        <!-- Start pc -->
        <div class="container" style="-webkit-box-shadow: 0px 0px 10px 0px rgba(207,205,207,1);-moz-box-shadow: 0px 0px 10px 0px rgba(207,205,207,1);box-shadow: 0px 0px 10px 0px rgba(207,205,207,1); border-radius: 30px; padding: 5%;background: transparent;" id="pc">
            <div class="g-container--md" style="padding-bottom: 5%;" >
                <div class="g-text-center--xs g-margin-t-50--xs g-margin-b-80--xs">
                    
                </div>
                <div class="row g-row-col--5 g-margin-b-80--xs" style="padding-top:5%;">
                    <!-- <div class="col-xs-3"></div> -->
                    <!-- ----------------------------------------------------------------- -->
                    <div class="col-xs-4 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm text-center" >
                        <div class="g-text-center--xs" style="margin-left: auto;margin-right: auto;display: block; display: flex;justify-content: center;align-items: center;">
                            <img src="img/contact/email.png">
                            
                        </div><br>
                        <h4 class="g-margin-b-5--xs">Email</h4>
                        <p><a href="mailto:info@summentorpro.com" style="color: white;">info@summentorpro.com</a></p>
                    </div>
                    <!-- ----------------------------------------------------------------- -->
                    <div class="col-xs-4 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm text-center">
                        <div class="g-text-center--xs" style="margin-left: auto;margin-right: auto;display: block; display: flex;justify-content: center;align-items: center;">
                            <img src="img/contact/address.png">
                            
                        </div><br>
                        <h4 class="g-margin-b-5--xs">Address</h4>
                        <p>Kormangala,<br>Bangalore</p>
                    </div>
                    <!-- ----------------------------------------------------------------- -->
                    <div class="col-xs-4 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm text-center">
                        <div class="g-text-center--xs" style="margin-left: auto;margin-right: auto;display: block; display: flex;justify-content: center;align-items: center;">
                            <img src="img/contact/call.png">
                            
                        </div><br>
                        <h4 class="g-margin-b-5--xs">Call at</h4>
                            <p><a href="tel:08043729419" style="color: white;">080-43729419</a></p>
                    </div>
                    <!-- ----------------------------------------------------------------- -->
                    <!-- <div class="col-xs-3"></div> -->
                </div>
                <form class="center-block g-width-700--sm g-width-750--md" action="mail/mail_handler.php" method="post">
                    <div class="g-margin-b-30--xs">
                        <input type="text" name="organisation" placeholder="ORGANISATION NAME" required="">
                    </div>
                    <div class="row g-row-col-5 g-margin-b-50--xs">
                        <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                            <input type="text" name="name" placeholder="FULL NAME" required>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="organisations" placeholder="ORGANISATIONS" required>
                        </div>
                    </div>
                    <div class="row g-row-col-5 g-margin-b-50--xs">
                        <div class="col-sm-6">
                            <input type="email" name="email" placeholder="EMAIL ADDRESS" required>
                        </div>
                        <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                            <input type="text" name="noofemployees" placeholder="NO. OF EMPLOYEES" required>
                        </div>
                        
                    </div>
                    <div class="g-text-center--xs">
                        <button type="submit" name="submit" class="btn" style="color: white !important; background: #C4B245;">SUBMIT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-right" style="color: #FAC89B; border-radius: 30px;"></i></button>
                        <!-- <a href="about.php" class="btn" style="color: white !important; background: #F7AA64;">Know More&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-right" style="color: lightgrey;"></i></a> -->
                    </div>
                </form>
            </div>
        </div>
        <!-- End pc -->
        <!-- Start mobile -->
        <div class="container" style=" border-radius: 30px; padding: 5%;background: transparent;" id="mb">
            <div class="g-container--md" style="padding-bottom: 5%;">
                <div class="g-text-center--xs g-margin-t-50--xs g-margin-b-80--xs">
                    
                </div>
                <div class="row g-row-col--5 g-margin-b-80--xs" style="padding-top:5%;">
                    <!-- <div class="col-xs-3"></div> -->
                    <!-- ----------------------------------------------------------------- -->
                    <div class="col-xs-4 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm text-center" >
                        <div class="g-text-center--xs" style="margin-left: auto;margin-right: auto;display: block; display: flex;justify-content: center;align-items: center;">
                            <img src="img/contact/email.png">
                            
                        </div><br>
                        <h4 class="g-margin-b-5--xs">Email</h4>
                        <p>info@summentorpro.com</p>
                    </div>
                    <!-- ----------------------------------------------------------------- -->
                    <div class="col-xs-4 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm text-center">
                        <div class="g-text-center--xs" style="margin-left: auto;margin-right: auto;display: block; display: flex;justify-content: center;align-items: center;">
                            <img src="img/contact/address.png">
                            
                        </div><br>
                        <h4 class="g-margin-b-5--xs">Address</h4>
                        <p>Kormangala,<br>Bangalore</p>
                    </div>
                    <!-- ----------------------------------------------------------------- -->
                    <div class="col-xs-4 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm text-center">
                        <div class="g-text-center--xs" style="margin-left: auto;margin-right: auto;display: block; display: flex;justify-content: center;align-items: center;">
                            <img src="img/contact/call.png">
                            
                        </div><br>
                        <h4 class="g-margin-b-5--xs">Call at</h4>
                            <p>080-43729419 </p>
                    </div>
                    <!-- ----------------------------------------------------------------- -->
                    <!-- <div class="col-xs-3"></div> -->
                </div>
                <form class="center-block g-width-700--sm g-width-750--md" action="mail/mail_handler.php" method="post">
                    <div class="g-margin-b-30--xs">
                        <input type="text" name="organisation" placeholder="ORGANISATION NAME" required="">
                    </div>
                    <div class="row g-row-col-5 g-margin-b-50--xs">
                        <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                            <input type="text" name="name" placeholder="FULL NAME" required>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="organisations" placeholder="ORGANISATIONS" required>
                        </div>
                    </div>
                    <div class="row g-row-col-5 g-margin-b-50--xs">
                        <div class="col-sm-6">
                            <input type="email" name="email" placeholder="EMAIL ADDRESS" required>
                        </div>
                        <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                            <input type="text" name="noofemployees" placeholder="NO. OF EMPLOYEES" required>
                        </div>
                        
                    </div>
                    <div class="g-text-center--xs">
                        <button type="submit" name="submit" class="btn" style="color: white !important; background: #C4B245;">SUBMIT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-right" style="color: #FAC89B; border-radius: 30px;"></i></button>
                        <!-- <a href="about.php" class="btn" style="color: white !important; background: #F7AA64;">Know More&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-right" style="color: lightgrey;"></i></a> -->
                    </div>
                </form>
            </div>
        </div>
        <!-- End mobile -->
    </div>
    <!-- End Contact Form -->

    <!-- Start Contact Form -->
    <div class="col-md-12" style="background:url('img/contact/contact_mb.png'); background-repeat: no-repeat; background-size: cover; width: 100%; padding-top: 10%; padding-bottom: 5%;" id="mb"> <!-- g-bg-color--primary -->
        <!-- Start pc -->
        <div class="container" style="-webkit-box-shadow: 0px 0px 10px 0px rgba(207,205,207,1);-moz-box-shadow: 0px 0px 10px 0px rgba(207,205,207,1);box-shadow: 0px 0px 10px 0px rgba(207,205,207,1); border-radius: 30px; padding: 5%;background: transparent;" id="pc">
            <div class="g-container--md" style="padding-bottom: 5%;" >
                <div class="g-text-center--xs g-margin-t-50--xs g-margin-b-80--xs">
                    
                </div>
                <div class="row g-row-col--5 g-margin-b-80--xs" style="padding-top:5%;">
                    <!-- <div class="col-xs-3"></div> -->
                    <!-- ----------------------------------------------------------------- -->
                    <div class="col-xs-4 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm text-center" >
                        <div class="g-text-center--xs" style="margin-left: auto;margin-right: auto;display: block; display: flex;justify-content: center;align-items: center;">
                            <img src="img/contact/email.png">
                            
                        </div><br>
                        <h4 class="g-margin-b-5--xs">Email</h4>
                        <p>info@summentorpro.com</p>
                    </div>
                    <!-- ----------------------------------------------------------------- -->
                    <div class="col-xs-4 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm text-center">
                        <div class="g-text-center--xs" style="margin-left: auto;margin-right: auto;display: block; display: flex;justify-content: center;align-items: center;">
                            <img src="img/contact/address.png">
                            
                        </div><br>
                        <h4 class="g-margin-b-5--xs">Address</h4>
                        <p>Kormangala,<br>Bangalore</p>
                    </div>
                    <!-- ----------------------------------------------------------------- -->
                    <div class="col-xs-4 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm text-center">
                        <div class="g-text-center--xs" style="margin-left: auto;margin-right: auto;display: block; display: flex;justify-content: center;align-items: center;">
                            <img src="img/contact/call.png">
                            
                        </div><br>
                        <h4 class="g-margin-b-5--xs">Call at</h4>
                            <p>080-43729419 </p>
                    </div>
                    <!-- ----------------------------------------------------------------- -->
                    <!-- <div class="col-xs-3"></div> -->
                </div>
                <form class="center-block g-width-700--sm g-width-750--md" action="mail/mail_handler.php" method="post">
                    <div class="g-margin-b-30--xs">
                        <input type="text" name="organisation" placeholder="ORGANISATION NAME" required="">
                    </div>
                    <div class="row g-row-col-5 g-margin-b-50--xs">
                        <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                            <input type="text" name="name" placeholder="FULL NAME" required>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="organisations" placeholder="ORGANISATIONS" required>
                        </div>
                    </div>
                    <div class="row g-row-col-5 g-margin-b-50--xs">
                        <div class="col-sm-6">
                            <input type="email" name="email" placeholder="EMAIL ADDRESS" required>
                        </div>
                        <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                            <input type="text" name="noofemployees" placeholder="NO. OF EMPLOYEES" required>
                        </div>
                        
                    </div>
                    <div class="g-text-center--xs">
                        <button type="submit" name="submit" class="btn" style="color: white !important; background: #C4B245;">SUBMIT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-right" style="color: #FAC89B; border-radius: 30px;"></i></button>
                        <!-- <a href="about.php" class="btn" style="color: white !important; background: #F7AA64;">Know More&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-right" style="color: lightgrey;"></i></a> -->
                    </div>
                </form>
            </div>
        </div>
        <!-- End pc -->
        <!-- Start mobile -->
        <div class="container" style=" border-radius: 30px; padding: 5%;background: transparent;" id="mb">
            <div class="g-container--md" style="padding-bottom: 5%;">
                <div class="g-text-center--xs g-margin-t-50--xs g-margin-b-80--xs">
                    
                </div>
                <div class="row g-row-col--5 g-margin-b-80--xs" style="padding-top:5%;">
                    <!-- <div class="col-xs-3"></div> -->
                    <!-- ----------------------------------------------------------------- -->
                    <div class="col-xs-4 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm text-center" >
                        <div class="g-text-center--xs" style="margin-left: auto;margin-right: auto;display: block; display: flex;justify-content: center;align-items: center;">
                            <img src="img/contact/email.png">
                            
                        </div><br>
                        <h4 class="g-margin-b-5--xs">Email</h4>
                        <p>info@summentorpro.com</p>
                    </div>
                    <!-- ----------------------------------------------------------------- -->
                    <div class="col-xs-4 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm text-center">
                        <div class="g-text-center--xs" style="margin-left: auto;margin-right: auto;display: block; display: flex;justify-content: center;align-items: center;">
                            <img src="img/contact/address.png">
                            
                        </div><br>
                        <h4 class="g-margin-b-5--xs">Address</h4>
                        <p>Kormangala,<br>Bangalore</p>
                    </div>
                    <!-- ----------------------------------------------------------------- -->
                    <div class="col-xs-4 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm text-center">
                        <div class="g-text-center--xs" style="margin-left: auto;margin-right: auto;display: block; display: flex;justify-content: center;align-items: center;">
                            <img src="img/contact/call.png">
                            
                        </div><br>
                        <h4 class="g-margin-b-5--xs">Call at</h4>
                            <p>080-43729419 </p>
                    </div>
                    <!-- ----------------------------------------------------------------- -->
                    <!-- <div class="col-xs-3"></div> -->
                </div>
                <form class="center-block g-width-700--sm g-width-750--md" action="mail/mail_handler.php" method="post">
                    <div class="g-margin-b-30--xs">
                        <input type="text" name="organisation" placeholder="ORGANISATION NAME" required="">
                    </div>
                    <div class="row g-row-col-5 g-margin-b-50--xs">
                        <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                            <input type="text" name="name" placeholder="FULL NAME" required>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="organisations" placeholder="ORGANISATIONS" required>
                        </div>
                    </div>
                    <div class="row g-row-col-5 g-margin-b-50--xs">
                        <div class="col-sm-6">
                            <input type="email" name="email" placeholder="EMAIL ADDRESS" required>
                        </div>
                        <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                            <input type="text" name="noofemployees" placeholder="NO. OF EMPLOYEES" required>
                        </div>
                        
                    </div>
                    <div class="g-text-center--xs">
                        <button type="submit" name="submit" class="btn" style="color: white !important; background: #C4B245;">SUBMIT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-right" style="color: #FAC89B; border-radius: 30px;"></i></button>
                        <!-- <a href="about.php" class="btn" style="color: white !important; background: #F7AA64;">Know More&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-right" style="color: lightgrey;"></i></a> -->
                    </div>
                </form>
            </div>
        </div>
        <!-- End mobile -->
    </div>
    <!-- End Contact Form -->
    <!--========== END PAGE CONTENT ==========-->
    <!--========== FOOTER ==========-->
    <?php include 'footer.php';?>
    <!--========== END FOOTER ==========-->

    </body>
    <!-- End Body -->
</html>
