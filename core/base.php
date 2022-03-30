<?php
//db connect start

function con() { 

    return mysqli_connect("localhost", "root", "", "contact");
 
 }
 
 //db connect end
 
 
 $info = array(
     "name" => "Solomon Tuangpu",
     "short" => "ST",
     "description" => "He is a smart hardworker and web develper from Myanmar"
 );
 
 $url = "http://{$_SERVER['HTTP_HOST']}/";
 
 date_default_timezone_set('Asia/Yangon');