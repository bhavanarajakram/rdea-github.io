<?php include 'header.php'; ?>



    <head>



        <title>Contacts | RDEA</title>

         <link rel="preconnect" href="https://fonts.gstatic.com" />

    <link

      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"

      rel="stylesheet"

    />

    <link

      rel="stylesheet"

      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"

      integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="

      crossorigin="anonymous"

    />



       <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

 -->

    </head>



    <style type="text/css">

      body{

        margin: 0;

      }

      .navbar{background: white;}

              .navbar-dark .navbar-nav .nav-link{color: black !important;}

      @media (max-width: 600px) {

      .navbar{background: white;}

          .navbar-dark .navbar-nav .nav-link{color: black !important;}

          

          .navbar-dark .navbar-toggler {

              color: black !important;

              border-color: black !important;

          }

          #contct{

                  margin-top: 60%;

          }



      }

    :root {

    --primary-color: #010712;

    --secondary-color: #818386;

    --bg-color: #FCFDFD;

    --button-color: #3B3636;

    --h1-color: #3F444C;

      }

      [data-theme="dark"] {

        --primary-color: #FCFDFD;

        --secondary-color: #818386;

        --bg-color: #010712;

        --button-color: #818386;

        --h1-color: #FCFDFD;

      }



      * {

        margin: 0;

        box-sizing: border-box;

        transition: all 0.3s ease-in-out;

      }



      .contact-container {

        display: flex;

        width: 100vw;

        height: 100vh;

        background: var(--bg-color);

      }



      .left-col {

        width: 45vw;

        height: 100%;

        /*background-image: url("https://images.pexels.com/photos/931018/pexels-photo-931018.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500");*/

        background-size: cover;

        background-repeat: no-repeat;
        color: black;

      }



      .logo {

        width: 10rem;

        padding: 1.5rem;

      }



      .right-col {

        background: var(--bg-color);

        width: 50vw;

        height: 100vh;

        padding: 0rem 1.5rem;

      }



      h1, label, button, .description {

        font-family: 'Jost', sans-serif;

        font-weight: 400;

        letter-spacing: 0.1rem;

      }



      h1 {

        color:var(--h1-color);

        text-transform: uppercase;

        font-size: 2.5rem;

        letter-spacing: 0.5rem;

        font-weight: 300;

      }



      p {

        color: var(--secondary-color);

        font-size: 0.9rem;

        letter-spacing: 0.01rem;

        width: 40vw;

        margin: 0.25rem 0;

      }



      label, .description {

        color: var(--secondary-color);

        text-transform: uppercase;

        font-size: -1.375rem;

      }



      form {

        /*width: 31.25rem;*/

        position: relative;

        margin-top: 2rem;

        padding: 2rem 0;

      }



      input, textarea, label {

        width: 40vw;

        display: block;

        font-size: 11px;

      }



      p, placeholder, input, textarea {

        font-family: 'Helvetica Neue', sans-serif;

      }



      input::placeholder, textarea::placeholder {

        color: var(--primary-color);

      }



      input, textarea {

        width: 100%;

        color: var(--primary-color);

        font-weight: 500;

        background: var(--bg-color);

        border: none;

        border-bottom: 1px solid var(--secondary-color);

        padding: 0.5rem 0;

        margin-bottom: 2rem;

        outline: none;

      }



      textarea {

        resize: none;

      }

      input:checked + .slider {

        background-color: var(--button-color);

      }



      @media only screen and (max-width: 950px) {

        form {

        width: 31.25rem;

        position: relative;

        margin-top: 2rem;

        padding: 2rem 0;

      }

      #btncnt{

          margin-top:-30%;

      }

      h3{

        font-size: 11px!important;

      }

      #content{

        padding: 10%;

      }

        h1 {

          font-size: 1.75rem;

        }

        p {

          font-size: 0.7rem;

        }

        input, textarea, button {

          font-size: 0.65rem;

        }

        .description {

          font-size: 0.3rem;

          margin-left: 0.4rem;

        }



      }



      button{



      border-width: 3px;



      width:150px;



      padding: 1%;



      color: black !important;



      background: none;



      text-decoration: inherit;



      font-family: system-ui;



      font-size: 1.5rem;



      padding: 0.5rem 1.5rem;



      }



      .border-gradient-purple {



        border-image-source: linear-gradient(to left, #ce162c, black);



      }



      .border-gradient {



        border-image-slice: 1;



        border-width: 5px;



      }
      .navbar{

    background: transparent url('img/Screenshot 2021-02-17 at 12.53.10 PM.svg') 0% 0% no-repeat padding-box;

    position: fixed;

}

    .navbar-dark .navbar-nav .nav-link{color: white !important;}


    </style>

<div class="col-md-12" style="padding-left: 0px !important;padding-right:0px !important;position: relative;

          text-align: left; color: white;" id="pc" >

            <img src="img/about/about_pc.png" class="img-responsive">

     <div class="centeredpc"><h1><b style="display: table; padding:4px;background-color:black;font-size:30px;color: white;">CONNECT WITH US</b></h1>

    </div>

        </div>



<div class="col-md-12">

    <div class="row" style="background:white;">

      <!-- background-image: url(img/bg2.jpg); -->

        <div class="contact-container" style="margin-top: 10%;margin-bottom: 10% ;">

          <div class="left-col" style="color:black;">

           <div class="row" style="margin-top: 8%;" id="content">

             <div class="col-md-2"></div>

             <div class="col-md-8" id="contct">

              <center>

              <img src="img/contact/email.png" width="60px" height="60px">

              </center>

              <center>

              <h3 style="text-transform: lowercase;color:black;">info@summentorpro.com</h3>

              </center></a><br>

              <center><img src="img/contact/call.png" width="60px" height="60px">

              </center>

              <center>

              <a href="tel:080-43729419" style="cursor:pointer;color:black;"><h3>080-43729419</h3></a>

              </center><br>

               <center>

              <img src="img/contact/address.png" width="60px" height="60px"> 

              </center>

              <center>          

              <h3 style="text-transform: lowercase;color:black;">Kormangala,Bangalore</h3>

              </center><br>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.6113096611775!2d77.61331881389566!3d12.93268519088137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae153604347279%3A0xf7edb1ed05fd47af!2sSummentor%20Pro%20Business%20Consultants!5e0!3m2!1sen!2sin!4v1601385849197!5m2!1sen!2sin" width="100%" height="300px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

            </div>

            <div class="col-md-2"></div>

           </div>

          </div>

  <!-- --------------------------End left col----------------------------------- -->

        <div class="right-col">   

      
            <div class="row">

                   <p style="color:black; text-align: left;">Your questions  and queries are important to us. Feel free to reach out and we will help out with solution.</p>
     

              <form id="contact-form" action="mail/mail_handler.php" method="post" >


                          <label for="name">ORGANISATION NAME</label>

                          <input type="text" name="organisation" placeholder="ORGANISATION NAME" required="">

                          <!--<label for="email">REGION</label>-->

                          <!--<input type="text" placeholder="REGION" name="region" required>-->

                          <!--<div class="form-group" >-->

                          <!--<select name="title" required >-->

                          <!--  <option value="">SELECT TITLE</option>-->

                          <!--  <option value="Mr">Mr</option>-->

                          <!--  <option value="Ms">Ms</option>-->

                          <!--  <option value="Mrs">Mrs</option>-->

                          <!--  <option value="Dr">Dr</option>-->

                          <!--</select>-->

                          <!--</div>-->

                          <label for="name">FULL NAME</label>

                          <input type="text" name="name" placeholder="FULL NAME" required>

                          <label for="name">CONTACT NO.</label>

                        <input type="text" name="contactno" placeholder="CONTACT NO." required>

                                                


                        <label for="name">LOCATION</label>

                        <input type="text" name="location" placeholder="LOCATION" required>

                         <label for="message">EMAIL ADDRESS</label>

                        <input type="email" name="email" placeholder="EMAIL ADDRESS" required><br>

                        <button class="border-gradient border-gradient-purple" name="submit" id="btncnt">SUBMIT &nbsp;<i class="fa fa-chevron-right" aria-hidden="true" style="color:#CE162C;"></i></button>

                        </div>

                      <br><br>

              

              </form>

          </div>

    </div> 

    <!-- -----------------End right col--------------------------------  -->

    </div>   

</div>



    <!-- End Feedback Form



    <!====== END PAGE CONTENT ==========-->

    <!--========== FOOTER ==========-->

    <?php include 'footer.php';?>

    <!--========== END FOOTER ==========-->







    </body>



    <!-- End Body -->



</html>



