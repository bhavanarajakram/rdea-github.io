<?php include 'header.php'; ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style type="text/css">
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
  /*background: transparent url('img/Screenshot 2021-02-17 at 12.53.10 PM.svg') 0% 0% no-repeat padding-box;*/
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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Start pc -->
    <section class="secpc" style="margin-bottom:-8%;"> <!-- id="pc" -->
      <div class="container" id="secpc1" style=" border-radius: 30px; padding: 5%; margin-top: 5%; background: transparent;" > <!-- id="pc" -->
          <h2 class="text-center" ><b style="color: white;">RDEA 2022-NOMINATION FORM</b></h2><br><br>
        <form  action="rdea-pay.php" method="post" style="opacity: 1;" class="rdeaaward center-block g-width-700--sm g-width-750--md">
            <div class="row">
                <div class="col-md-2"></div>                
                <div class="col-md-4">
                    <div class="form-group" >
                          <select name="title" required >
                            <option value="">SELECT TITLE</option>
                            <option value="Mr">Mr</option>
                            <option value="Ms">Ms</option>
                            <option value="Mrs">Mrs</option>
                            <option value="Dr">Dr</option>
                          </select>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="DESIGNATION" name="designation" required>
                    </div>
                    <div class="form-group">
                        <select name="organisation" required>
                          <option value="">SELECT TYPE</option>
                          <option value="ORGANISATION">ORGANISATION</option>
                          <option value="INDIVIDUAL">INDIVIDUAL</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="MOBILE NUMBER" name="phone" required>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="LOCATION" name="region" required>
                    </div>
                    <div class="form-group">
                       <input type="text" value="AMOUNT - RS.8260"  placeholder="Amount : Per Nomination: Rs. 7000 + GST Rs. 1260 " readonly id="amtfield" name="amount">
                    </div>
                </div>
                <div class="col-md-4"><br>
                    <div class="form-group">
                      <input type="text"  placeholder="FULL NAME" name="buyer_name" required>
                    </div>
                    <div class="form-group">
                        <input type="email"  placeholder="EMAIL" name="email" required>
                    </div>
                    <div class="form-group">
                        <input type="text"  placeholder="ORGANISATION NAME" name="name_organisation" required>
                    </div>
                    <div class="form-group">
                        <input type="text"  placeholder="NO. OF EMPLOYEES" name="employees" required>
                    </div>
                    <div class="form-group">
                        <select name="org_type">
                          <option value="">ORGANISATION TYPE</option>
                          <option value="Large Scale">LARGE SCALE</option>
                          <option value="Medium Scale">MEDIUM SCALE</option>
                          <option value="Small Scale">SMALL SCALE</option>
                          <option value="Start-up">START-UP</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class=" gstinnumber" placeholder="GST" name="gstin" >
                    </div>                     
                </div>   
                <div class="col-md-2"></div>   
            </div>
            <div class="row">
                <div class="col-md-2"></div>
            <div class="col-md-8">
              <div class="form-group">
                <input type="text" name="address" style="width: 100%;" placeholder="ADDRESS">
              </div>
            </div>
            <div class="col-md-2"></div>
          </div><br>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="form-group" >
                        <select  name="purpose" id="purpose" placeholder="SELECT YOUR BUSINESS" required>
                          <option selected="selected" value="">SELECT YOUR BUSINESS</option>
                          <option value="HR">HR</option>
                          <option value="HR Tech">HR Tech</option>
                          <option value="Management">Management</option>
                          <option value="Management Tech">Management Tech</option>
                          <option value="Banking & Finance">Banking & Finance</option>
                          <option value="Fintech">Fintech</option>
                          <option value="Agri - Tech">Agri - Tech</option>
                          <option value="Agriculture">Agriculture</option>
                          <option value="Transport & Logistics">Transport & Logistics</option>
                          <option value="Transport & Logistics Tech">Transport & Logistics Tech</option>
                          <option value="Architecture & Engineering">Architecture & Engineering</option>
                          <option value="Health, Wellness & Medical Sciences">Health, Wellness & Medical Sciences</option>
                          <option value="Health Tech">Health Tech</option>
                          <option value="Interior Design & Decor">Interior Design & Decor</option>
                          <option value="Real Estate, Constructuion & Infrastructure">Real Estate, Constructuion & Infrastructure</option>
                          <option value="Veterinary & Animal Sciences">Veterinary & Animal Sciences</option>
                          <option value="Travel & Hospitality Tech">Travel & Hospitality Tech</option>
                          <option value="Food Tech">Food Tech</option>
                          <option value="Fashion & Lifestyle">Fashion & Lifestyle</option>
                          <option value="Procurement">Procurement</option>
                          <option value="Creative">Creative</option>
                          <option value="Education">Education</option>
                          <option value="Edtech">Edtech</option>
                          <option value="Manufacturing">Manufacturing</option>
                          <option value="Manufacturing Tech">Manufacturing Tech</option>
                          <option value="Retail">Retail</option>
                          <option value="Retail Tech">Retail Tech</option>
                          <option value="Pharmaceutical">Pharmaceutical</option>
                          <option value="Auto mobile">Auto mobile</option>
                          <option value="Water">Water</option>
                          <option value="Waste">Waste</option>
                          <option value="Facility Management">Facility Management</option>
                          <option value="Government Initiatives">Government Initiatives</option>
                          <option value="Telecommunications">Telecommunications</option>
                          <option value="Entrepreneur">Entrepreneur</option>
                          <option value="Manager">Manager</option>
                          <option value="Professor">Professor</option>
                          <option value="Principal">Principal</option>
                          <option value="Women Distributer of the Year">Women Distributer of the Year</option>
                          <option value="MSME Leader of the Year">MSME Leader of the Year</option>
                          <option value="Start-up Leader of the Year">Start-up Leader of the Year</option>
                          <option value="Young Leader of the Year">Young Leader of the Year</option>
                          <option value="Lifetime Leader of the Year">Lifetime Leader of the Year</option>
                          <option value="Business Leader of the Year">Business Leader of the Year</option>
                          <option value="Women CEO of the Year">Women CEO of the Year</option>
                          <option value="Social Sector">Social Sector</option>
                          <option value="Automobiles">Automobiles</option>
                          <option value="Service">Service</option>
                          <option value="Movies & Films">Movies & Films</option>
                          <option value="Radio">Radio</option>
                          <option value="Media & Publication">Media & Publication</option>
                          <option value="Individual">Individual</option>
                          <option value="Rural">Rural Development Initiatives</option>
                          <option value="Skill Development">Skill Development</option>
                          <option value="Technology">Technology</option>
                          <option value="Software">Software</option>
                          <option value="Hardware">Hardware</option>
                          <option value="Electronics">Electronics</option>
                          <option value="NGO">NGO</option>
                          <option value="Sports">Sports</option>
                          <option value="Kirana Store">Kirana Store</option>
                          <option value="Hospitals">Hospitals</option>
                          <option value="Tourism">Tourism</option>
                          <option value="Hotels & Resorts">Hotels & Resorts</option>
                          <option value="Tourism Tech">Tourism Tech</option>
                          <option value="Energy">Energy</option>
                          <option value="Green Buildings">Green Buildings</option>
                          <option value="Environment">Environment</option>
                          <option value="COVID-19 Innovation">COVID-19 Innovation</option>
                        </select>   
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div><br>
            <?php include('categories.php'); ?>
            <div class="row formpadding">
                <div id="result" style="color: white; font-size: 1.5rem !important;font-weight: 600; margin-left:20px; margin-top:30px;">Total Number of Items Selected = <span id="selected">0</span></div>
                <div class="col-md-12 text-center">  
                    <!--<input type="submit" name="pay" class="btn-hover color-7">-->
                    <button class="border-gradient border-gradient-purple" name="pay">SUBMIT &nbsp;<i class="fa fa-chevron-right" aria-hidden="true" style="color:#ce162c;"></i></button>
                            </div> 
                </div>  
            </div>
        </form>   
      </div>    
    </section>
<!--========== END PAGE CONTENT ==========-->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 250" style="margin-top: 4%; background:#ce162c;"><path fill="#434431" fill-opacity="1" d="M0,64L120,96C240,128,480,192,720,218.7C960,245,1200,235,1320,229.3L1440,224L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path></svg>
<!--========== FOOTER ==========-->
<?php include 'footer.php';?>
<!--========== END FOOTER ==========-->
    </body>
    <!-- End Body -->
<script>
  gtag('event', 'purchase', {
    "transaction_id": "24.031608523954162",
    "affiliation": "Google online store",
    "value": 23.07,
    "currency": "USD",
    "tax": 1.24,
    "shipping": 0,
    "items": [
      {
        "id": "P12345",
        "name": "Android Warhol T-Shirt",
        "list_name": "Search Results",
        "brand": "Google",
        "category": "Apparel/T-Shirts",
        "variant": "Black",
        "list_position": 1,
        "quantity": 2,
        "price": '2.0'
      },
      {
        "id": "P67890",
        "name": "Flame challenge TShirt",
        "list_name": "Search Results",
        "brand": "MyBrand",
        "category": "Apparel/T-Shirts",
        "variant": "Red",
        "list_position": 2,
        "quantity": 1,
        "price": '3.0'
      }
    ]
  });
</script>
</html>