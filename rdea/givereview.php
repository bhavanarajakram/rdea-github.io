<?php include "header.php" ; ?>
<div class="col-md-12" style="padding-left: 0px !important;padding-right:0px !important;padding-top:114px;">
  <div class="container-fluid" style="background:white; color:black;">
    <div class="col-md-12">
      <div class="row" style="padding-top:5%;">
          <div class="col-md-12 text-center"><h2>POST A REVIEW</h2</div>
          <form class="form-group" method="post" action="mail/mail_handler6.php">
            <input type="text" name="name" id="name" class="form-control required" placeholder="Full Name">
            <input type="email" name="email" id="email" class="form-control required" placeholder="Email"><br>
            <textarea style="resize: none;" name="review" rows="2" id="review" class="form-control required " placeholder="Review"></textarea><br>
            
              <div class="col-md-12 text-center">
                  <button type="submit" name="submit" style="background-color:##9F3476; padding: 1%;">SUBMIT</button>
              </div>
            
            
          </form>
      </div>               
    </div>
  </div>
</div>
<?php include "footer.php" ; ?>