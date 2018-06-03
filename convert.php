<?php
require('nepali_calendar.php');


$nc = new Nepali_Calendar();
$year;
$month;
$day;



if(isset($_POST['convert_to_ad'])){
   $year = $_POST['bs-year'];
   $month = $_POST['bs-month'];
   $day = $_POST['bs-day'];

   echo 'date in B.S.'. $year.'-'.$month.'-'.$day. '<br />';
   $engdate=  $nc->nep_to_eng($year,$month,$day);

   echo $engdate['year'].'-'. $engdate['month'] .'-'. $engdate['date'].'-'. $engdate['day'].'-'. $engdate['emonth'] .'-'.$engdate['num_day'];
   
   
}


if(isset($_POST['convert_to_bs'])){

    $ad = $_POST['ad'];
   $ad =  explode('-',$ad);
   
    $year = $ad[0];
    $month = $ad[1];
    $day = $ad[2];
 
    echo 'date in B.S.'. $year.'-'.$month.'-'.$day. '<br />';
    $engdate=  $nc->eng_to_nep($year,$month,$day);
 
    echo $engdate['year'].'-'. $engdate['month'] .'-'. $engdate['date'].'-'. $engdate['day'].'-'. $engdate['nmonth'] .'-'.$engdate['num_day'];
    
    
 }
 

