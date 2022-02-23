<style>
 #activediv {
    background-color: #CE162C;
}
.hov:hover{
  /*background-image: linear-gradient(to right, #D3D3D3,#C0C0C0,#A9A9A9,#808080);*/
  background: #CE162C; ;
  color: white;
}
.grid-container {
  /*display: grid;*/
  /*grid-template-columns: 440px 440px 440px;*/
  /*grid-gap: 3px;*/
  /*padding: 10px;*/
}
.grid-container > div {
  background-color: black;
  border: 1px solid black;
  text-align: center;
  font-size: 30px;
  color: white;
    text-align: center;
  padding: 50px 25px;
}
/*@media only screen and (max-width: 768px) {*/
/*   #bannermb {*/
/*       margin-top:10%;*/
/*   }*/
/*}*/
</style>
<div class="col-md-12" style="padding-left: 0px !important;padding-right:0px !important; " id="pc">
        <img src="img/index/home_pc.png" class="img-responsive">
        <div class="centeredpc"><h1><b style="display: table; 
    padding:5px;background-color:black;font-size:30px;"><i style="font-size:30px;">RURAL </i>DEVELOPMENT<br></b></h1>
    <h1><b style="display: table; 
    padding:5px;background-color:black;font-size:30px;">EXCELLENCE AWARD - 2022</b></h1><br>
    <h4 style="background-color:black;">Bringing Growth and Innovation in every Rural Land of India.</h4><br>
    <button class="border-gradient border-gradient-purple" style="color:white !important;" data-toggle="modal" data-target="#download_report">WATCH VIDEO &nbsp;<i class="fa fa-chevron-right" aria-hidden="true" style="color:#ce162c;"></i></button>
    </div>
</div>
<div class="col-md-12 text-center" style="background-color:white!important; margin-top:-8%;" id="pc">
    <div class="row" style="display:block;">
        <div class="grid-container">
          <div class="col-md-4 hov" id="activediv" onmouseenter="mouseEnter()" onmouseleave="mouseLeave()"><a href="nominate.php" style="color:white;"><h3>Nominate Now</h3></a></div>
          <div class="col-md-4 hov" data-toggle="modal" data-target="#download_report1" style="cursor:pointer;"><h3>Become A Speaker & Collaborator</h3></div>
          <div class="col-md-4 hov" data-toggle="modal" data-target="#download_report2" style="cursor:pointer;"><h3>Become A Sponsor</h3></div>  
        </div>
     </div>
</div> 

<!-- <button data-toggle="modal" data-target="#download_report1"> </button>-->
<div class="col-md-12" style="padding-left: 0px !important;padding-right:0px !important;background-color:white!important; " id="mb">
    <img src="img/index/home_mb.png" class="img-responsive">
    <div class="centeredmb"><h6><i style="background-color:black;"><b style="display: table; 
    margin: 0px auto 0px auto; 
    padding:5px;background-color:black;">RURAL</i> DEVELOPMENT<br>EXCELLENCE AWARDS - 2022</b></h6><br><h6 style="display: table; 
    margin: 0px auto 0px auto; 
    padding:5px;background-color:black;">Bringing Growth and Innovation in every Rural Land of India.</h6></div>
</div>
<div class="col-md-12 text-center" style="background-color:white!important;" id="mb">
    <div class="row" style="display:block;">
        <div class="grid-container">
          <div class="col-md-4 hov" id="activediv" onmouseenter="mouseEnter()" onmouseleave="mouseLeave()"><a href="nominate.php" style="color:white;"><h3>Nominate Now</h3></a></div>
          <div class="col-md-4 hov" data-toggle="modal" data-target="#download_report1" style="cursor:pointer;"><h3>Become A Speaker & Collaborator</h3></div>
          <div class="col-md-4 hov" data-toggle="modal" data-target="#download_report2" style="cursor:pointer;"><h3>Become A Sponsor</h3></div>  
        </div>
     </div>
</div> 
<script>
function mouseEnter() {
  document.getElementById("activediv").style.background ="Black" ;
}
function mouseLeave() {
  document.getElementById("activediv").style.background ="#CE162C" ;
}
</script>