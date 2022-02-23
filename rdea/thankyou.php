<?php include "header.php" ; ?>
<?php
 echo"<center style='font-size: 22px;
    margin-top: 200px;
    color: #EA4B5E;
    font-weight: 600;
    width: 60%;
    margin: 200px auto 150px auto;
    padding: 45px;
    background: #eee;
    border: 10px solid #e0dce0;
    box-shadow: 3px 0px 4px #eeee;'>Payment Successful!</center>";
echo "<script type='text/javascript'>
    window.setTimeout(function() {
        window.location.href='nominate.php';
    }, 3000);
</script>";
?>
<?php include "footer.php" ; ?>