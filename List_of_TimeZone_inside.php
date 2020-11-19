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
    $zones_array[$key]['diff_from_GMT'] = date('P', $timestamp);
  }
  return $zones_array;
}
?>
<div style="margin-top: -6px;width:100%; overflow:hidden">
  <form method="post" action="index.php">
  <select style="font-family: 'Courier New', Courier, monospace;width:420px;"  name="zoneVal">
   <!-- <option value="0">Plz,select timezone</option> -->
    <?php foreach(tz_list() as $t) { ?>
      <option value="<?php print $t['diff_from_GMT'] ?>">
        <?php 
        echo $t['diff_from_GMT']. $t['zone'];
         ?>
      </option>
    <?php } ?>
  </select>
  <input type="submit" name="submit" value="submit">
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


?>