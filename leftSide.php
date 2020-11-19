<div class="column1" style="background-color:#78C0E0;border-radius: 12px;">
    <center>
      <div class="row">
        <div class="col">
          <img src="logos/codingtime.jpg" alt="logo" height="40px">
      </div>
      <div class="col">
         <h3><strong>CODINGTIME</strong></h3><br>
      </div>
    </div>
    <a href="#codechef" style="color:white;"><button class="ContestBtn" style="background-color: #452815">Codechef</button></a>
    <br>
    <a href="#codeforces" style="color:blue;"><button class="ContestBtn" style="background-color: #fff;color: #185BB8;">Codeforces</button></a>
    <br>
    <a href="#hackerearth" style="color:white;"><button  class="ContestBtn" style="background-color:#2B3455">HackerEarth</button></a>
    <br>
    <a href="#leetcode" style="color:white;"><button class="ContestBtn" style="background-color:#FDA115" >LeetCode</button></a>
    <br>
    <a href="#topcoder" style="color:white;"><button class="ContestBtn" style="background-color:#007712" >TopCoder</button></a>
    <br>
    <a href="#atcoder" style="color:white;"><button class="ContestBtn" style="background-color:#2B5B96;color:#fff;">Atcoder</button></a>
    <br><br>

    <!--- 
      testing 
    <?php
      
      /*  if(isset($_POST['codechef'])) { 
            require 'codeChef.php';
        } 
        */
    ?> 
    <form method="post">
     <input type="submit" name="codechef"
                value="codechef"/> 
     </form>
   -->
    <p><strong>Select Timezone</strong></p>
        <?php
/**
 * Timezones list with GMT offset
 *
 * @return array
 * @link http://stackoverflow.com/a/9328760
 */
session_start();
function tz_list() {
  $zones_array = array();
  $timestamp = time();
  foreach(timezone_identifiers_list() as $key => $zone) {
    date_default_timezone_set($zone);
    $zones_array[$key]['zone'] = $zone;
    $zones_array[$key]['diff_from_GMT'] = "UTC/GMT"." ".date('P', $timestamp);
  }
  return $zones_array;
}
?>
<div style="margin-top: -13px;width:100%; overflow:hidden">
  <form method="post" action="index.php">
  <select class="form-control" style="font-family: 'Courier New', Courier, monospace;width:420px;"  name="zoneVal">
   <!-- <option value="0">Plz,select timezone</option> -->
    <?php foreach(tz_list() as $t) { ?>
      <option value="<?php print $t['diff_from_GMT'] ?>">
        <?php 
        echo $t['diff_from_GMT']. $t['zone'];
         ?>
      </option>
    <?php } ?>
  </select>
  <br><br>
  <div class="row">
    <div class="col">
       <label for="short contest"><strong>Short Contest</strong></label><br>
        <input type="radio" id="short" name="short"  checked>
    </div>
    <div class="col">
      <label for="male"><strong>Long Contest</strong></label><br>
      <input type="radio" id="long" name="long" >
    </div>
    <div class="col">
      <label for="female"><strong>Live Contest</strong></label><br>
      <input type="radio" id="live" name="live">
    </div>
    <div class="col"><br>
  <input class="btn btn-success mt-1"  type="submit" name="submit" value="submit">
    </div>
  </div>
  </form>
</div>

   <?php 
// get data information from list_of_timezone
  
  if(isset($_POST['submit'])){
$zoneVal = $_POST['zoneVal'];
//echo "Your registration is: ".gettype($zoneVal);

///---------------offset value
$offset_value_get=0;
if($zoneVal[0]=='-'){
 //$hrMin=ltrim($zoneVal, '-');
 $hrMin = preg_replace("/[^0-9]/", "", $zoneVal);
 $hrMin_int=(int)$hrMin;
 $min=$hrMin%100;
 $hr=($hrMin_int-$min)/100;
$offset_value=($hr*60+$min)*60;
 //echo "-".$offset_value;
 $strToint_offset="-".$offset_value;
 $offset_value_get=(int)$strToint_offset;
 //echo $offset_value_get;

}
else if($zoneVal[0]=='+'){
$hrMin = preg_replace("/[^0-9]/", "", $zoneVal);
 $hrMin_int=(int)$hrMin;
 $min=$hrMin%100;
 $hr=($hrMin_int-$min)/100;
$offset_value=($hr*60+$min)*60;
 //echo $offset_value;
 $strToint_offset=$offset_value;
 $offset_value_get=(int)$strToint_offset;
//echo $offset_value_get;
}
}
else{
//$zoneVal = $_POST['zoneVal'];
//echo "Your registration is: ".gettype($zoneVal);

///---------------offset value
$offset_value_get=0;
 //$hrMin=ltrim($zoneVal, '-');
 //$hrMin = preg_replace("/[^0-9]/", "", $zoneVal);
$offset_value=330*60;
 //echo "-".$offset_value;
 $strToint_offset=$offset_value;
 $offset_value_get=(int)$strToint_offset;
 //echo $offset_value_get;

}



     ?>
    <br>
    
    <br>
    </center>
  </div>