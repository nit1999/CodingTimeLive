<?php 
   $api_url_codeforces="https://clist.by:443/api/v1/contest//?username=nit1998&api_key=639b0d2d02d6ef8959d6c4f5891feccbd6e2ce65&resource__id__in=1&order_by=-id";
 $contestCodeforces=json_decode(file_get_contents($api_url_codeforces));
 ?>
 <aside id="codeforces">
    <h3 style="color:white;margin:0px auto auto 20px;border-bottom: 2px solid white;">Codeforces
</h3>
<div class="row">
 <?php 
  if(isset($contestCodeforces->objects)){
 foreach ($contestCodeforces->objects as $key){
  $end_contest = new \DateTime($key->end);
$end_contest_format = $end_contest->format('h:i a  d.m.Y');
  $start_contest = new \DateTime($key->start);
$start_contest_format = $start_contest->format('h:i a  d.m.Y');
$current_date = date("h:i a d.m.Y");
$curr_int=strtotime($current_date);
$end_int=strtotime($end_contest_format);
if($end_int>=$curr_int){
  ?>
<div class="col-sm">
	<div class="cardCss" style="color:#005BB8;background-color: #fff">
  <img  src="logos/codeforces logo.png" alt="Avatar" style="height:100px;width:300px;">
  <div class="containerCss">
    <p class="h6 text-center" style="border-bottom: 1px solid red;"><strong><?php echo $key->event; ?></strong></p>
    <center><a href=<?php echo $key->href; ?> style="text-align: center;word-wrap:break-word;"><?php echo $key->href ?></a></center>
  <div class="row" style="border-top: 1px solid red;margin-left:12px;margin-right: 12px;">
    <div class="col-sm" >
    	 <p style="float:left;">Start = <?php require 'start_contest_offset.php'; ?></p>
     </div>
    <div class="col-sm">
     <p style="float:right;">End = <?php require 'end_contest_offset.php'; ?></p>
    </div>
</div>
  <div class="row" style="border-top: 1px solid red;margin-left:12px;margin-right: 12px;">
  	 <div class="col-sm text-center">
  	 	Reminder
  	 </div>
</div>
  </div>
</div>
</div>
<?php } } }else{
  echo "NA";
 } ?>
</div>
</aside>