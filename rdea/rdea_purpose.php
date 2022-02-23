<?php include 'header.php'; ?>
<link rel="stylesheet" href="css/rdea_purpose.css">
<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">-->
<!--<link rel="stylesheet" href="css/carousel.css">-->
<style>
.overlayp{  
position: absolute;  
bottom: 0!important;
left: 0!important;  
right: 0!important; 
background-color:black!important; 
overflow: hidden;  width: 100%; 
height: 0;  transition: .5s ease;
opacity:0.6;
}  
.texthoverp{ 
padding:0px;
color: white; 
font-size: 15px; 
position: absolute; 
top: 45%;  left: 50%;
-webkit-transform: translate(-50%, -50%); 
-ms-transform: translate(-50%, -50%);
transform: translate(-50%, -50%);  text-align: center; 
}    
.container-innerp1:hover .overlayp { 
height: 100%;
} 
.container-innerp2:hover .overlayp { 
height: 100%;
}
.container-innerp3:hover .overlayp {
height: 100%;
} .container-innerp4:hover .overlayp { 
height: 100%;
} .container-innerp5:hover .overlayp {  
height: 100%;
} .container-innerp6:hover .overlayp { 
height: 100%;
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
#wave{
     display: none;
    }
input[placeholder], [placeholder], *[placeholder]{
  color: white !important;
}
.form-group{
  margin-bottom: 2rem;
}
input[type="text"]::-webkit-input-placeholder {
  color: white !important;
}
input[type="email"]::-webkit-input-placeholder {
  color: white !important;
}
.navbar{
  background: transparent url('img/Screenshot 2021-02-17 at 12.53.10 PM.svg') 0% 0% no-repeat padding-box;
  position: fixed;
}
.navbar-dark .navbar-nav .nav-link{color: white !important;}
.imgband{display:block;margin:0px auto;width:100px;text-align:center;}
option{
    background-color: #E94B5D;
    color: white;
}
select{
  border: 0;
  outline: 0;
  border-bottom: 1px solid white;
  padding: 2%;
}
 input[type="text"],input[type="email"],select
    {
        border: 0;
        border-bottom: 1px solid white;
        width: 100%;
        outline: 0;
        background: transparent;
        font-weight: bold;
        color: white;
        font-size: 22px;
    }
    input[type="submit"]{
      border-radius: 5px;
      font-size: 22px;
    }
input[placeholder], [placeholder], *[placeholder]{
  color: white !important;
}
.secpc{
background-image: url('img/nominate/nominate_pc.png'); background-size: cover !important; width: 100%; max-width: 100%;background-repeat: no-repeat;background-attachment: fixed !important; padding-top: 5%; padding-bottom: 5%;
}
#secpc1{
-webkit-box-shadow: 0px 0px 10px 0px rgba(207,205,207,1) !important;-moz-box-shadow: 0px 0px 10px 0px rgba(207,205,207,1) !important;box-shadow: 0px 0px 10px 0px rgba(207,205,207,1) !important;
}
@media only screen and (max-width: 768px) {
    .navbar{background: transparent;}
    .navbar-dark .navbar-nav .nav-link{color: white !important;}
    .secpc{
        background-image: url('img/nominate/nominate_mb.png') !important;  background-size: cover !important; width: 100%; max-width: 100%;background-repeat: no-repeat;background-attachment: fixed !important; padding-top: 10%; padding-bottom: 5%;
            }
    #secpc1{
        -webkit-box-shadow: none !important;-moz-box-shadow: none !important;box-shadow: none !important;
    }
}
    .navbar-dark .navbar-toggler {
      color: black !important;
      border-color: transparent !important;
  }
  .navbar-toggler {
      background-color: transparent !important;   
  }
</style>
<!--========== PAGE CONTENT ==========-->
<!-- Banner start -->
<div class="col-md-12" style="padding-left: 0px !important;padding-right:0px !important;position: relative;text-align: left; color: white;" id="pc">
    <!-- <video src="video/Video1.mov" controls autoplay playsinline height="100%" width="100%" type="video/mov"></video> -->
    <img src="img/rdeapurpose/purpose_pc.png" class="img-responsive">
    <div class="centeredpc" ><h1><b style="display: table; background-color:black;font-size:26px;" ><i style="font-size:26px;">PURPOSE OF  </i>RURAL DEVELOPMENT EXCELLENCE AWARD</b></h1></div>
</div>
<div class="col-md-12" style="padding-left: 0px !important;padding-right:0px !important;position: relative;text-align: left; color: white;" id="mb">
    <img src="img/rdeapurpose/purpose_mb.png" class="img-responsive">
    <div class="centeredmb" style="left: 40% !important; "><h6><b style="display: table; 
    padding:5px;background-color:black;font-size:20px;"><i>PURPOSE OF  </i>RURAL DEVELOPMENT EXCELLENCE AWARD</b></h6></div>
</div>
<!-- Banner end -->
<!-- Start rdea purpose -->
<div class="col-md-12" style="padding-right: 0px; padding-left: 0px;  padding-top:5%; background: #F8F8F8;"> 
    <div class="container">      
        <h2><b>RDEA PURPOSE</b></h2><br> 
        <div class= "row">    
            <div class="col-md-4" style="padding:4%;"> 
                <div class="container-innerp1"style=" position: relative;width: 100%; border:2px solid #CE162C; " >     
                    <img src="img/index/growth.png" alt="Image" height="100%" width="100%" style=" display: block; margin:auto;">                        
                    <div class="overlayp" style="background-color:black;">
                        <div class="texthoverp"> 
                            <h6 style=" font-weight: normal; text-align:left;line-height:1.9;">Increase Visibility</h6>                                
                        </div> 
                    </div>                
                </div>            
            </div>           
            <div class="col-md-4" style="padding:4%;"> 
                <div class="container-innerp2" style="position: relative;width: 100%; border:2px solid #CE162C;" >  
                    <img src="img/index/share.png" alt="Image" height="100%" width="100%" style=" display: block;margin:auto;">                   
                    <div class="overlayp" style="background-color:black;">                            
                        <div class="texthoverp"> 
                            <h6 style=" font-weight: normal; text-align:left;line-height:1.9;">Information Sharing</h6>  
                        </div>                  
                    </div>                
                </div>           
            </div>           
            <div class="col-md-4" style="padding:4%;">  
                <div class="container-innerp3" style="position: relative;width: 100%; border:2px solid #CE162C;"  >   
                    <img src="img/index/innovation.png" alt="Image" height="100%" width="100%" style="display: block;margin:auto;"> 
                    <div class="overlayp" style="background-color:black;">                            
                        <div class="texthoverp"> 
                            <h6 style=" font-weight: normal; text-align:left;line-height:1.9;">Innovation Showcase</h6>
                        </div>                   
                    </div>
                </div>           
            </div>            
        </div>
        <div class="row" style="justify-content-center">
            <div class="col-md-2"></div>
            <div class="col-md-4" style="padding:4%;"> 
                <div class="container-innerp4" style=" position: relative;width: 100%; border:2px solid #CE162C;">
                    <img src="img/index/collection of ex.png" alt="Image" height="100%" width="100%" style=" display: block;margin:auto;">                    
                    <div class="overlayp" style="background-color:black;">                 
                        <div class="texthoverp">
                            <h6 style=" font-weight: normal; text-align:left;line-height:1.9;"> Enhance Connection</h6>
                        </div>        
                    </div>                
                </div>             
            </div>           
            <div class="col-md-4" style="padding:4%;">  
            <div class="container-innerp5" style=" position: relative;width: 100%; border:2px solid #CE162C;">
            <img src="img/index/award.png" alt="Image" height="100%" width="100%" style=" display: block;margin:auto;"> 
                <div class="overlayp" style="background-color:black;">                           
                    <div class="texthoverp">
                        <h6 style=" font-weight: normal; text-align:left;line-height:1.9;">Get Recognised</h6>                           
                    </div>                   
                </div>                
            </div>       
        </div>           
            <div class="col-md-2"></div>
        </div>
    </div>
</div>
<!-- End rdea purpose -->
<!-- Start categories -->
<div class="col-md-12" style="padding-left:0px !important;padding-right:0px !important;background: black;margin-bottom:-5%;" >
    <div class="container-fluid" style="margin-bottom:-8%;"> 
        <h2 style="padding-top: 5%;"><center><b style="color: #ea4b5e !important;">NOMINATION CATEGORIES</b></center> </h2><br>
        <div class="container text-center" style="color: white; padding-bottom: 5%; opacity: 0.8;">
            <div class="row" style="padding-bottom: 5%; ">
                <div class="col-md-3">
                    <img src="img/rdeapurpose/category/HR.png" height="100px" width="100px"><br><br>
                HR</div>
                <div class="col-md-3"><img src="img/rdeapurpose/category/hr-tech.png" height="100px" width="100px"><br><br>
                HR Tech</div>
                <div class="col-md-3"><img src="img/rdeapurpose/category/management.png" height="100px" width="100px"><br><br>Management</div>
                <div class="col-md-3"><img src="img/rdeapurpose/category/management-tech.png" height="100px" width="100px"><br><br>Management Tech</div>
            </div>
            <div class="row" style="padding-bottom: 5%;">
                <div class="col-md-3"><img src="img/rdeapurpose/category/fin-tech.png" height="100px" width="100px"><br><br>Fintech</div>
                <div class="col-md-3"><img src="img/rdeapurpose/category/agri-tech.png" height="100px" width="100px"><br><br>Agri - Tech</div>
                <div class="col-md-3"><img src="img/rdeapurpose/category/agriculture.png" height="100px" width="100px"><br><br>Agriculture</div>
                <div class="col-md-3"><img src="img/rdeapurpose/category/Transport.png" height="100px" width="100px"><br><br>Transport & Logistics</div>
            </div>
            <div class="row" style="padding-bottom: 5%;">
                <div class="col-md-3"><img src="img/rdeapurpose/category/transport-tech.png" height="100px" width="100px"><br><br>Transport & Logistics Tech</div>
                <div class="col-md-3"><img src="img/rdeapurpose/category/bank-fin.png" height="100px" width="100px"><br><br>Banking & Finance</div>
                <div class="col-md-3"><img src="img/rdeapurpose/category/agriculture.png" height="100px" width="100px"><br><br>Architecture & Engineering</div>
                <div class="col-md-3"><img src="img/rdeapurpose/category/Health-wellness.png" height="100px" width="100px"><br><br>Health, Wellness & Medical Sciences</div>
            </div>
            <div class="row" style="padding-bottom: 5%;">
                <div class="col-md-3"><img src="img/rdeapurpose/category/health-tech.png" height="100px" width="100px"><br><br>Health Tech</div>  
                <div class="col-md-3"><img src="img/rdeapurpose/category/interior-design.png" height="100px" width="100px"><br><br>Interior Design & Decor</div>
                <div class="col-md-3"><img src="img/rdeapurpose/category/real-estate.png" height="100px" width="100px"><br><br>Real Estate, Constructuion & Infrastructure</div>
                <div class="col-md-3"><img src="img/rdeapurpose/category/Veterinary.png" height="100px" width="100px"><br><br>Veterinary & Animal Sciences</div>
            </div>
            <div class="row" style="padding-bottom: 5%;">
                <div class="col-md-3"><img src="img/rdeapurpose/category/travel&hospitality.png" height="100px" width="100px"><br><br>Travel & Hospitality Tech</div>
                <div class="col-md-3"><img src="img/rdeapurpose/category/food-tech.png" height="100px" width="100px"><br><br>Food Tech</div> 
                <div class="col-md-3"><img src="img/rdeapurpose/category/fashion.png" height="100px" width="100px"><br><br>Fashion & Lifestyle</div>
                <div class="col-md-3"><img src="img/rdeapurpose/category/Procurement.png" height="100px" width="100px"><br><br>
                Procurement</div>
            </div>
            <div class="row" style="padding-bottom: 5%;">
                <div class="col-md-3"><img src="img/rdeapurpose/category/Creative.png" height="100px" width="100px"><br><br>Creative</div>
                <div class="col-md-3"><img src="img/rdeapurpose/category/education.png" height="100px" width="100px"><br><br>Education</div>
                <div class="col-md-3"><img src="img/rdeapurpose/category/Ed-tech.png" height="100px" width="100px"><br><br>Edtech</div>
                <div class="col-md-3"><img src="img/rdeapurpose/category/manufacturing.png" height="100px" width="100px"><br><br>Manufacturing</div>
            </div>
            <div class="row" style="padding-bottom: 5%;">
                <div class="col-md-3"><img src="img/rdeapurpose/category/Manufacturing tech.png" height="100px" width="100px"><br><br>Manufacturing Tech
                </div>
                <div class="col-md-3"><img src="img/rdeapurpose/category/Retail.png" height="100px" width="100px"><br><br>Retail</div>
                <div class="col-md-3"><img src="img/rdeapurpose/category/Retail.png" height="100px" width="100px"><br><br>Retail Tech</div>
                <div class="col-md-3"><img src="img/rdeapurpose/category/Pharmaceuticals.png" height="100px" width="100px"><br><br>Pharmaceutical</div>
            </div>
            <div class="row" style="padding-bottom: 5%;">
                 <div class="col-md-3"><img src="img/rdeapurpose/category/automobile.png" height="100px" width="100px"><br><br>Auto mobile</div>
                <div class="col-md-3"><img src="img/rdeapurpose/category/Water.png" height="100px" width="100px"><br><br>Water</div>
                <div class="col-md-3"><img src="img/rdeapurpose/category/waste.png" height="100px" width="100px"><br><br>Waste</div>
                <div class="col-md-3"><img src="img/rdeapurpose/category/facility-management.png" height="100px" width="100px"><br><br>Facility Management</div>
            </div>
            <div class="row" style="padding-bottom: 5%;">
                <div class="col-md-3"><img src="img/rdeapurpose/category/Govt initiatives.png" height="100px" width="100px"><br><br>Government Initiatives</div>
                <div class="col-md-3"><img src="img/rdeapurpose/category/tele communications.png" height="100px" width="100px"><br><br>Telecommunications</div>
                <div class="col-md-3"><img src="img/rdeapurpose/category/entrepreneur.png" height="100px" width="100px"><br><br>Entrepreneur</div>
                <div class="col-md-3"><img src="img/rdeapurpose/category/manager.png" height="100px" width="100px"><br><br>Manager</div>
            </div>
            <div class="row" style="padding-bottom: 5%;">
                <div class="col-md-3"><img src="img/rdeapurpose/category/professor.png" height="100px" width="100px"><br><br>Professor</div>
                <div class="col-md-3"><img src="img/rdeapurpose/category/prinicipal.png" height="100px" width="100px"><br><br>Principal</div>
                <div class="col-md-3"><img src="img/rdeapurpose/category/women distributor.png" height="100px" width="100px"><br><br>Women Distributer of the Year</div>
                <div class="col-md-3"><img src="img/rdeapurpose/category/MSME Leader.png" height="100px" width="100px"><br><br>MSME Leader of the Year</div>
            </div>
            <div class="row" style="padding-bottom: 5%;">
               <div class="col-md-3"><img src="img/rdeapurpose/category/startup-leader.png" height="100px" width="100px"><br><br>Start-up Leader of the Year</div>
                <div class="col-md-3"><img src="img/rdeapurpose/category/young leader.png" height="100px" width="100px"><br><br>Young Leader of the Year</div>
                <div class="col-md-3"><img src="img/rdeapurpose/category/lifetime leader.png" height="100px" width="100px"><br><br>Lifetime Leader of the Year</div>
                <div class="col-md-3"><img src="img/rdeapurpose/category/business leader.png" height="100px" width="100px"><br><br>
                Business Leader of the Year</div>
            </div>
        </div>
    </div>
</div>
<!-- End categories -->
<!-- start wave -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 250" style="margin-top: 4%; background: #ce162c;"><path fill="black" fill-opacity="1" d="M0,64L120,96C240,128,480,192,720,218.7C960,245,1200,235,1320,229.3L1440,224L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path></svg>
<!-- end wave -->
        <!--========== END PAGE CONTENT ==========-->
        <!--========== FOOTER ==========-->
        <?php include 'footer.php';?>
        <!--========== END FOOTER ==========-->
    </body>
    <!-- End Body -->
</html>