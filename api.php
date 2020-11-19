<?php 
  // require 'mainProject/header.php'; //header file included
// api call
 $api_url="https://clist.by:443/api/v1/contest//?username=nit1998&api_key=639b0d2d02d6ef8959d6c4f5891feccbd6e2ce65&order_by=-id";
 $contest=json_decode(file_get_contents($api_url));
 $first_duration=$contest->meta->limit;
 ?>
