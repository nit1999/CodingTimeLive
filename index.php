<?php 

  require 'header.php'; //header file included
  require 'api.php';
  ?>


<div class="row1" >
	<!------for leftside ------------->
  <?php 
      require 'leftSide.php';
      $offset=$offset_value_get;
   ?>
  <!------for rightside ------------->
  <div class="column" style="
  background-color: #d7dfe31a;
    overflow-y: scroll;
    overflow-x: hidden;
    border-top-right-radius: 12px;
    border-bottom-right-radius: 12px;
    box-shadow: 2px 2px 12px #78c0e063;">
<div class="row">
<!---- loop------------>



<!----first codechef--------->
 <?php 
    require 'codeChef.php';
  ?>
<!----third codeForces--------->
 <?php 
    require 'codeForces.php';
  ?>
<!----fourth leetCode--------->
<?php 
    require 'leetCode.php';
 ?>

<!----fifth spoj--------->
<!--
<?php 
   // require 'spoj.php';
 ?>

-->

<!----seventh atCoder--------->
<?php 
   require 'atCoder.php';
 ?>
 <!----sixth topCoder--------->
<?php 
    require 'topCoder.php';
 ?>
 <!----second hackerEarth--------->
<?php 
    require 'hackerEarth.php';
 ?>
 <!----eighth other--------->
<!--<?php 
  // require 'other.php';
 ?>

-->
</div>







  	</div>
  </div>
<!---   select live/long/short challenge value-->
  <?php
      $contest_code="";
      $contest_code=$_POST['live'];
      echo $contest_code;
  ?>



<?php 
  require 'footer.php';
 ?>





