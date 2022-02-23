<?php include "header.php" ; ?>
<!--Head-->
<head>
    <title>Rate Us | RDEA 2021</title>
</head>
<style type="text/css">
   .form-control{
       color:black;
   }

</style>
 <script src="https://use.fontawesome.com/a6f0361695.js"></script>
<div class="col-md-12" style="padding-left: 0px !important;padding-right:0px !important;padding-top:114px;">
<div class="container-fluid" style="background:white; color:black;">
    <div class="col-md-12 text-center" style="">
<p><h2>WE THANK YOU FOR TAKING PART IN THE NOMINATIONS!</h2><br>
<h3>Your rating will help us to improve our web hosting quality products, and customer services.<br>
 Rate our overall services.</h3></p></div>
<form id="feedback" method="post" action="">
<div class="form-group">

     <div class="col-md-12 inputGroupContainer">
     <div class="input-group">
     <div class="form-control text-center">
         <!--<span class="input-group-addon">-->
             <i class="fa fa-heart"></i>
             <!--</span>-->
    </div>   
     
      <div class="form-control">
         <input type="checkbox" id="1star" name="1star" value="1">
         <label for="1star">1</label>
      </div>
      <div class="form-control">
         <input type="checkbox" id="2star" name="2star" value="2">
         <label for="2star">2</label>
      </div>
      <div class="form-control">
         <input type="checkbox" id="3star" name="3star" value="3">
         <label for="3star">3</label>
      </div>
      <div class="form-control">
         <input type="checkbox" id="4star" name="4star" value="4">
         <label for="4star">4</label>
      </div>
      <div class="form-control">
         <input type="checkbox" id="5star" name="5star" value="5">
         <label for="5star">5</label>
      </div>
      
     </div>
   </div>
   
</div>
<div class="col-md-12 text-center" style="padding-top:2%;">
         <button type="submit" value="submit" name="submit" id="submit" class="btn btn-success">SUBMIT</button>
</div><br>



</form>
</div>

<?php 
if(isset($_POST['submit'])=="submit")
   { 
      $onestar=$_POST['1star'];
      $twostar=$_POST['2star'];
      $threestar=$_POST['3star'];
      $fourstar=$_POST['4star'];
      $fivestar=$_POST['5star'];

      if ($onestar=='1' || $twostar=='2' || $threestar=='3' || $fourstar=='4')
      {
         echo '<script>alert("Thanks for the rating. Helps us serve you better");window.location.href = "nominate.php"</script>';
      }
      else
      {
         echo '<script>alert("Thanks for the rating. Kindly give a review to help us serve you better");window.location.href = "givereview.php"</script>';
      }
   }

?>  
</div>

<?php include "footer.php" ; ?>