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
 echo $offset_value_get;

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
 echo $offset_value_get;
}
}


?>