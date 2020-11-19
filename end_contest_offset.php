<?php
       // echo "default time = ".date_default_timezone_get();
         $str=$key->end;//utc format
         //echo $str."<br>";
         // hour and min convert to integer
         $HrMin= $end_contest->format('H:i:s');
         //echo $HrMin."<br>";
         //store hr and min in integer
         $HrMin_integer=strtotime($HrMin);
         //echo "type define = ".$HrMin_integer."<br>";
         //add time to integer 
         $India_time_offset=$offset;
         $add_sec=$HrMin_integer + $India_time_offset;
         //echo "add second in hr & min = ".$add_sec."<br>";
         //convert back to its original format
        // echo "converted date and time = ".date("H:i:s", $add_sec)."<br>";
        //if hour is greater than 24 hr. then change in day value format
         $date_store=date("h:i a", $add_sec);
         $end_contest_format = $end_contest->format('d.m.Y');
         echo $end_contest_format." ".$date_store;
         //echo $date_store."<br>";
         // //hour check
         //  $Hr_check=date("d:H", $add_sec);
         //  echo $Hr_check."<br>";

        
          ?>