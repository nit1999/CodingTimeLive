<?php 
    require 'api.php';
 ?>
 <?php 
 foreach ($contest->objects as $key){
  $end_contest = new \DateTime($key->end);
$end_contest_format = $end_contest->format('h:i a  d.m.Y');
  $start_contest = new \DateTime($key->start);
$start_contest_format = $start_contest->format('h:i a  d.m.Y');
if($key->resource->id!=93 && $key->resource->id!=1 && $key->resource->id!=2 && $key->resource->id!=73 && $key->resource->id!=12 && $key->resource->id!=102 && $key->resource->id!=26){
  ?>
<div class="col-sm">
	<div class="cardCss text-white" style="background-color:#000;">
  <img  src="logos/other logo.jpg" alt="Avatar" style="height:100px;width:300px;">
  <div class="containerCss">
    <p class="h6 text-center" style="border-bottom: 1px solid red;"><strong><?php echo $key->event; ?></strong></p>
    <center>
      <a href=<?php echo $key->href; ?> style="text-align: center;word-wrap:break-word;"><?php echo $key->href ?></a>
    </center>
  <div class="row" style="border-top: 1px solid red;margin-left:12px;margin-right: 12px;">
    <div class="col-sm" >
    	<p style="float:left;">Start = <?php require 'start_contest_offset.php'; ?></p>
     </div>
    <div class="col-sm">
      <p style="float:right;">End = <?php         require 'end_contest_offset.php'; 
 ?></p>
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
<?php } } ?>