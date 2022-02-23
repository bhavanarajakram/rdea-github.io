  <?php include 'header.php'; ?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style type="text/css">
    .navbar{background: #203037;}
        .navbar-dark .navbar-nav .nav-link{color: #ffee85 !important;}
      #img1{
          width: 100%;
          height: 200px;
          /*border-radius:50%;*/
      }
      .container1 {
  position: relative;
  width: 100%;
  /*max-width: 400px;*/
}

.container1 img {
  width: 100%;
          height: 200px;
          border-radius: 30px;
}

.container1 .btn {
  position: absolute;
  top: 80%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background: transparent;
  border: 1px solid orange;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  background: orange;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}

.container1 .btn:hover {
  /*background: transparent;*/
}
.showme {
  display: none;
}

.showhim:hover .showme {
  display: block;

}
p{
  font-size: 18px !important;
}
p b{
  color: black !important;
  font-weight: bold !important;
}
@media only screen and (max-width: 768px) {
  #mobile{
    padding-top: 50% !important;
  }
    .navbar{background: transparent;}
    .navbar-dark .navbar-nav .nav-link{color: white !important;}
    .navbar-dark .navbar-toggler {
        color: black !important;
        /*border-color: transparent !important;*/
    }
    .navbar-toggler {
        background-color: black !important;   
    }
  
  }
.navbar{background: white;}
.navbar-dark .navbar-nav .nav-link{color: black !important;}
#img1{
  width: 100%;
  height: 200px;
  padding: 5%;
  box-shadow: 2px 6px 6px black;
 }
.container1 {
position: relative;
width: 100%;
/*max-width: 400px;*/
}
.container1 img {
  width: 100%;
  height: 200px;
  border-radius: 30px;
}
.container1 .btn {
  position: absolute;
  top: 80%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background: transparent;
  border: 1px solid orange;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  background: orange;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
.container1 .btn:hover {
  /*background: transparent;*/
}
.showme {
  display: none;
}
.showhim:hover .showme {
  display: block;
}
p{
  font-size: 18px !important;
}
p b{
  color: white !important;
  font-weight: bold !important;
}
@media only screen and (max-width: 768px) {
  #mobile{
    padding-top: 50% !important;
  }
    .navbar{background: white;}
    .navbar-dark .navbar-nav .nav-link{color: black !important;}
    .navbar-dark .navbar-toggler {
        color: black !important;
        /*border-color: black !important;*/
    }
    .navbar-toggler {
        background-color:  black !important;   
    }
  }
  .cardbox{
    margin: 2%;
    background-color:white;
    /*border:2px solid #CE162C;*/
      box-shadow: 2px 6px 6px black;
      width:100%;
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
}
#pm{
    color:#CE162C;
}
  </style>
  <!--========== PROMO BLOCK ==========-->
      <!--  <div class="s-promo-block-v3 g-bg-position--center g-fullheight--sm" style="background: url('img/media/1.jpg');" id="mobile">-->

      <!--</div>-->
      <h2 class="text-center" style="margin-top:10%;"><b>Our Partners</b></h2>
      
        <div class="row">

          <div class="col-md-6" >

            <div class="row" style="padding: 2%;" >

              <div class="cardbox">

                <div class="col-md-5">

                <img src="img/media/1.png"  id="img1">

                </div>

                <div class="col-md-7 text-center">

                <p id ="pm">A S Creations</p><br><br>

                <br><br>

                <!--<center><p><b id ="pm">9th Oct 2020</b></p></center>-->

                <center> <a href="https://ascreations.in/journey"><button class="border-gradient border-gradient-purple" name="submit">EXPLORE &nbsp;<i class="fa fa-chevron-right" aria-hidden="true" style="color:#ce162c;"></i></button></a></a></center>

                <br>

                </div>

              </div>

            </div>                 

          </div>

          <div class="col-md-6">

            <div class="row"  style="padding: 2%;">

                  <div class="cardbox">

                      <div class="col-md-5">

                      <img src="img/media/2.png"  id="img1">

                      </div>

                      <div class="col-md-7 text-center">

                      <p id ="pm">Acharya Nagarjuna University</p><br><br><br><br>

                      <!--<center><p><b>8th Oct 2020</b></p></center>-->

                      <center><a href="https://www.nagarjunauniversity.ac.in/indexanu.html" target="_blank" style="color: black;"><button class="border-gradient border-gradient-purple"><b>EXPLORE</b></button></a></center>

                      <br>

                      </div>

                   </div> 

            </div>

          </div>

        </div>
        <div class="row">

            <div class="col-md-6" >

              <div class="row" style="padding: 2%;" >

                <div class="cardbox">

                  <div class="col-md-5">

                  <img src="img/media/3.png"  id="img1">

                  </div>

                  <div class="col-md-7 text-center">

                  <p id ="pm">Allseas Global Logistics India Private Limited.</p>

                  <br><br>

                  <!--<center><p><b>8th Oct 2020</b></p></center>-->

                  <center><a href="https://www.linkedin.com/company/allseasgloballogisticsindiapvtltd/?originalSubdomain=in" target="_blank" style="color: black;"><button class="border-gradient border-gradient-purple"><b>EXPLORE</b></button></a></center>

                  <br>

                  </div>

                </div>

              </div>                 

            </div>

            <div class="col-md-6">

              <div class="row"  style="padding: 2%;">

                <div class="cardbox">

                <div class="col-md-5">

                <img src="img/media/4.png"  id="img1">

                </div>

                <div class="col-md-7 text-center">

                <p id ="pm">Aqua Doctor Solutions</p><br><br><br><br>

                <!--<center><p><b>8th Oct 2020</b></p></center>-->

                <center><a href="https://www.aquadoctorsolutions.com/" target="_blank" style="color: black;"><button class="border-gradient border-gradient-purple"><b>EXPLORE</b></button></a></center>

                <br>

                </div>

              </div> 

            </div>

          </div>

        </div>
        <div class="row">

            <div class="col-md-6" >

              <div class="row" style="padding: 2%;" >

                <div class="cardbox">

                  <div class="col-md-5">

                  <img src="img/media/5.png"  id="img1">

                  </div>

                  <div class="col-md-7 text-center">

                  <p id ="pm">Coromandel International Limited</p>

                  <br><br><br>

                  <!--<center><p><b>9th Oct 2020</b></p></center>-->

                  <center><a href="https://www.coromandel.biz/"><button class="border-gradient border-gradient-purple"><b>EXPLORE</b></button></a></center>

                  <br>

                  </div>

                </div>

              </div>                 

            </div>

            <div class="col-md-6">

              <div class="row"  style="padding: 2%;">

                <div class="cardbox">

                <div class="col-md-5">

                <img src="img/media/6.png"  id="img1">

                </div>

                <div class="col-md-7 text-center">

                <p id ="pm">Dr Dathu Rao Memorial Charitable Trust</p><br><br>

                <!--<center><p><b>9th Oct 2020</b></p></center>-->

                <center><a href="http://www.doaram.com/index.php?/organization/dr-dathu-rao-memorial-charitable-trust" target="_blank" style="color: black;"><button class="border-gradient border-gradient-purple"><b>EXPLORE</b></button></a></center>

                <br>

                </div>

              </div> 

            </div>

          </div>

        </div>
        <div class="row">

            <div class="col-md-6" >

              <div class="row" style="padding: 2%;" >

                <div class="cardbox">

                  <div class="col-md-5">

                  <img src="img/media/7.png"  id="img1">

                  </div>

                  <div class="col-md-7 text-center">

                  <p id ="pm">Duravit India Private Limited</p>

                  <br><br>

                  <!--<center><p><b>9th Oct 2020</b></p></center>-->

                  <center><a href="https://www.duravit.in/" target="_blank" style="color: black;"><button class="border-gradient border-gradient-purple"><b>EXPLORE</b></button></a></center>

                  <br>

                  </div>

                </div>

              </div>                 

            </div>

            <div class="col-md-6">

              <div class="row"  style="padding: 2%;">

                <div class="cardbox">

                <div class="col-md-5">

                <img src="img/media/8.png"  id="img1">

                </div>

                <div class="col-md-7 text-center">

                <p id ="pm"> Gayatri CRL Pvt Ltd </p><br><br>

                <!--<center><p><b>8th Oct 2020</b></p></center>-->

                <center><a href="https://www.gayatricrl.com/" target="_blank" style="color: black;"><button class="border-gradient border-gradient-purple"><b>EXPLORE</b></button></a></center>

                <br>

                </div>

              </div> 

            </div>

          </div>

        </div>
        <div class="row">

            <div class="col-md-6" >

              <div class="row" style="padding: 2%;" >

                <div class="cardbox">

                  <div class="col-md-5">

                  <img src="img/media/9.png"  id="img1">

                  </div>

                  <div class="col-md-7 text-center">

                  <p id ="pm">Global Indian International School Ahmedabad</p><br><br>

                  <br><br>

                  <!--<center><p><b>9th Oct 2020</b></p></center>-->

                  <center><a href="https://ahmedabad.globalindianschool.org/" target="_blank" style="color: black;"><button class="border-gradient border-gradient-purple"><b>EXPLORE</b></button></a></center>

                  <br>

                  </div>

                </div>

              </div>                 

            </div>

            <div class="col-md-6">

              <div class="row"  style="padding: 2%;">

                <div class="cardbox">

                <div class="col-md-5">

                <img src="img/media/10.png"  id="img1">

                </div>

                <div class="col-md-7 text-center">

                <p id ="pm">Global Indian School Education Services Pvt. Ltd.</p><br><br><br>

                <!--<center><p><b>10th Oct 2020</b></p></center>-->

                <center><a href="https://www.linkedin.com/company/global-indian-school-education-services-private-limited/about/" target="_blank" style="color: black;"><button class="border-gradient border-gradient-purple"><b>EXPLORE</b></button></a></center>

                <br>

                </div>

              </div> 

            </div>

          </div>

        </div>
        <div class="row">

            <div class="col-md-6" >

              <div class="row" style="padding: 2%;" >

                <div class="cardbox">

                  <div class="col-md-5">

                  <img src="img/media/11.png"  id="img1">

                  </div>

                  <div class="col-md-7 text-center">

                  <p id ="pm">Gujarat Microbial Technologies Pvt Ltd</p>

                  <br><br>

                  <!--<center><p><b>19th Oct 2020</b></p></center>-->

                  <center><a href="http://www.gujarateco.com//" target="_blank" style="color: black;"><button class="border-gradient border-gradient-purple"><b>EXPLORE</b></button></a></center>

                  <br>

                  </div>

                </div>

              </div>                 

            </div>

            <div class="col-md-6" >

              <div class="row" style="padding: 2%;" >

                <div class="cardbox">

                  <div class="col-md-5">

                  <img src="img/media/12.png"  id="img1">

                  </div>

                  <div class="col-md-7 text-center">

                  <p id ="pm">InstantPay India Limited.</p>

                  <br><br>

                  <!--<center><p><b>20th Oct 2020</b></p></center>-->

                  <center><a href="https://www.instantpay.in/" target="_blank" style="color: black;"><button class="border-gradient border-gradient-purple"><b>EXPLORE</b></button></a></center>

                  <br>

                  </div>

                </div>

              </div>                 

            </div>

          </div>
        
        <!--<h2 class="text-center"><b>Our Partners</b></h2><hr>-->
          <div class="row">

            

            <div class="col-md-6">

              <div class="row"  style="padding: 2%;">

                <div class="cardbox">

                <div class="col-md-5">

                <img src="img/media/13.png"  id="img1">

                </div>

                <div class="col-md-7 text-center">

                <p id ="pm">Jayaswal Neco Industries Ltd</p><br><br>

                <!--<center><p><b>30th September 2020</b></p></center>-->

                <center><a href="https://www.jayaswalneco.com/"><button class="border-gradient border-gradient-purple"><b>EXPLORE</b></button></a></center>

                <br>

                </div>

              </div> 

            </div>

          </div>

             
            <div class="col-md-6">

              <div class="row"  style="padding: 2%;">

                <div class="cardbox">

                <div class="col-md-5">

                <img src="img/media/15.png"  id="img1">

                </div>

                <div class="col-md-7 text-center">

                <p id ="pm">KPR Institute of Engineering and Technology</p>

                <!--<center><p><b>20th Oct 2020</b></p></center>-->

                <center><a href="https://www.kpriet.ac.in/" target="_blank" style="color: black;"><button class="border-gradient border-gradient-purple"><b>EXPLORE</b></button></a></center>

                <br>

                </div>

              </div> 

            </div>

          </div>
          
       
        </div>
          <div class="row">

            <div class="col-md-6" >

              <div class="row" style="padding: 2%;" >

                <div class="cardbox">

                  <div class="col-md-5">

                  <img src="img/media/16.png"  id="img1">

                  </div>

                  <div class="col-md-7 text-center">

                  <p id ="pm">Krupanidhi group of institutions</p>

                  <br><br>

                  <!--<center><p><b>10th September 2020</b></p></center>-->

                  <center><a href="https://krupanidhi.edu.in/" target="_blank" style="color: black;"><button class="border-gradient border-gradient-purple"><b>EXPLORE</b></button></a></center>

                  <br>

                  </div>

                </div>

              </div>                 

            </div>
            
            

            <div class="col-md-6" >

              <div class="row" style="padding: 2%;" >

                <div class="cardbox">

                  <div class="col-md-5">

                  <img src="img/media/17.png"  id="img1">

                  </div>

                  <div class="col-md-7 text-center">

                  <p id ="pm">Maxcare Marketing & Technical Services</p>

                  <br><br>

                  <!--<center><p><b>20th Octo 2020</b></p></center>-->

                  <center><a href="http://www.maxcaremarketing.com/" target="_blank" style="color: black;"><button class="border-gradient border-gradient-purple"><b>EXPLORE</b></button></a></center>

                  <br>

                  </div>

                </div>

              </div>                 

            </div>
        </div>
          <div class="row">
              

            <div class="col-md-6">

              <div class="row"  style="padding: 2%;">

                <div class="cardbox">

                <div class="col-md-5">

                <img src="img/media/18.png"  id="img1">

                </div>

                <div class="col-md-7 text-center">

                <p id ="pm">Metrochem API Private Limited</p><br><br>

                <!--<center><p><b>9th Oct 2020</b></p></center>-->

                <center><a href="https://www.metroapi.com/" target="_blank" style="color: black;"><button class="border-gradient border-gradient-purple"><b>EXPLORE</b></button></a></center>

                <br>

                </div>

              </div> 

            </div>

          </div>
          
            <div class="col-md-6" >

              <div class="row" style="padding: 2%;" >

                <div class="cardbox">

                  <div class="col-md-5">

                  <img src="img/media/19.png"  id="img1">

                  </div>

                  <div class="col-md-7 text-center">

                  <p id ="pm">Mukka Sea Food Industries Limited</p>

                  <br><br><br>

                  <!--<center><p><b>25th Oct 2020</b></p></center>-->

                  <center><a href="http://www.mukkaseafoods.com/" target="_blank" style="color: black;"><button class="border-gradient border-gradient-purple"><b>EXPLORE</b></button></a></center>

                  <br>

                  </div>

                </div>

              </div>                 

            </div>
       
        </div>
          <div class="row">
              
            

            <div class="col-md-6">

              <div class="row"  style="padding: 2%;">

                <div class="cardbox">

                <div class="col-md-5">

                <img src="img/media/20.png"  id="img1">

                </div>

                <div class="col-md-7 text-center">

                <p id ="pm">Polycab India Limited</p><br><br>

                <!--<center><p><b>8th Oct 2020</b></p></center>-->

                <center><a href="https://polycab.com/" target="_blank" style="color: black;"><button class="border-gradient border-gradient-purple"><b>EXPLORE</b></button></a></center>

                <br>

                </div>

              </div> 

            </div>

          </div>
            <div class="col-md-6" >

              <div class="row" style="padding: 2%;" >

                <div class="cardbox">

                  <div class="col-md-5">

                  <img src="img/media/30.png"  id="img1">

                  </div>

                  <div class="col-md-7 text-center">

                  <p >PSG Institute of Management</p>

                  <br><br><br><br><br>

                  <!--<center><p><b>25th Oct 2020</b></p></center>-->

                  <center><a href="https://www.psgim.ac.in/" target="_blank" style="color: black;"><button class="border-gradient border-gradient-purple"><b>EXPLORE</b></button></a></center>

                  <br>

                  </div>

                </div>

              </div>                 

            </div>
        </div>
          <div class="row">

            <div class="col-md-6">

              <div class="row"  style="padding: 2%;">

                <div class="cardbox">

                <div class="col-md-5">

                <img src="img/media/22.png"  id="img1">

                </div>

                <div class="col-md-7 text-center">

                <p >Sahaj Retail Limited</p><br><br><br><br><br>


                <!--<center><p><b>25th Oct 2020</b></p></center>-->

                <center><a href="https://www.sahajcorporate.com/" style="color: black;"><button class="border-gradient border-gradient-purple"><b>EXPLORE</b></button></a></center>

                <br>

                </div>

              </div> 

            </div>

          </div>
            
            <div class="col-md-6">

              <div class="row"  style="padding: 2%;">

                <div class="cardbox">

                <div class="col-md-5">

                <img src="img/media/24.png"  id="img1">

                </div>

                <div class="col-md-7 text-center">

                <p >Sitaram Infraproject Pvt Ltd</p><br><br><br><br><br>


                <!--<center><p><b>25th Oct 2020</b></p></center>-->

                <center><a href="https://www.facebook.com/sitaraminfraproject/" style="color: black;"><button class="border-gradient border-gradient-purple"><b>EXPLORE</b></button></a></center>

                <br>

                </div>

              </div> 

            </div>

          </div>
        </div>
          <div class="row">
          
            <div class="col-md-6">

              <div class="row"  style="padding: 2%;">

                <div class="cardbox">

                <div class="col-md-5">

                <img src="img/media/25.png"  id="img1">

                </div>

                <div class="col-md-7 text-center">

                <p >Sri Vasavi Technologies & Infrastructure Pvt Ltd</p><br><br><br>


                <!--<center><p><b>25th Oct 2020</b></p></center>-->

                <center><a href="https://www.srivasavigroup.in/" style="color: black;"><button class="border-gradient border-gradient-purple"><b>EXPLORE</b></button></a></center>

                <br>

                </div>

              </div> 

            </div>

          </div>
          
            <div class="col-md-6">

              <div class="row"  style="padding: 2%;">

                <div class="cardbox">

                <div class="col-md-5">

                <img src="img/media/26.png"  id="img1">

                </div>

                <div class="col-md-7 text-center">

                <p >SRM IST, SRM Faculty of Hotel Management</p><br><br><br>

                <!--<center><p><b>25th Oct 2020</b></p></center>-->

                <center><a href="https://www.srmist.edu.in/institute-hotel-and-catering-management" style="color: black;"><button class="border-gradient border-gradient-purple"><b>EXPLORE</b></button></a></center>

                <br>

                </div>

              </div> 

            </div>

          </div>
          </div>
           <div class="row">
            
          
            <div class="col-md-6">

              <div class="row"  style="padding: 2%;">

                <div class="cardbox">

                <div class="col-md-5">

                <img src="img/media/27.png"  id="img1">

                </div>

                <div class="col-md-7 text-center">

                <p >Vaishali Patliputra Dudh Udpadak Sahkari Sangh Ltd</p><br><br><br>


                <!--<center><p><b>25th Oct 2020</b></p></center>-->

                <center><a href="https://www.patnadairy.org/" style="color: black;"><button class="border-gradient border-gradient-purple"><b>EXPLORE</b></button></a></center>

                <br>

                </div>

              </div> 

            </div>

          </div>
          
            <div class="col-md-6">

              <div class="row"  style="padding: 2%;">

                <div class="cardbox">

                <div class="col-md-5">

                <img src="img/media/28.png"  id="img1">

                </div>

                <div class="col-md-7 text-center">

                <p >Vilcart Solutions Pvt Ltd</p><br><br><br><br><br>


                <!--<center><p><b>25th Oct 2020</b></p></center>-->

                <center><a href="http://vilcart.in/" style="color: black;"><button class="border-gradient border-gradient-purple"><b>EXPLORE</b></button></a></center>

                <br>

                </div>

              </div> 

            </div>

          </div>
          </div>
          <div class="row">
            
          
            <div class="col-md-6">

              <div class="row"  style="padding: 2%;">

                <div class="cardbox">

                <div class="col-md-5">

                <img src="img/media/29.png"  id="img1">

                </div>

                <div class="col-md-7 text-center">

                <p >Yaantra</p><br><br><br><br><br>


                <!--<center><p><b>25th Oct 2020</b></p></center>-->

                <center><a href="https://www.yaantra.com/" style="color: black;"><button class="border-gradient border-gradient-purple"><b>EXPLORE</b></button></a></center>

                <br>

                </div>

              </div> 

            </div>

          </div>
          </div>

  <!--========== FOOTER ==========-->
  <?php include 'footer.php';?>
  <!--========== END FOOTER ==========-->

  </body>
  <!-- End Body -->
  </html>