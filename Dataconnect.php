<?php

// $connect = mysqli_connect("localhost","root","root","slack");
//  //CHECK CONNECTION
//  if (!$connect) {
//      die('could not connect to server' . mysqli_error());
//  } 
//   if (mysqli_connect_errno()){
//      echo "failed to connect to MYSQL:" . mysqli_connect_error();
//   }


$connect = mysqli_connect("localhost","onlineb8_intern","Ako07088984364","onlineb8_hng");
 //CHECK CONNECTION
 if (!$connect) {
     die('could not connect to server' . mysqli_error());
 } 
  if (mysqli_connect_errno()){
     echo "failed to connect to MYSQL:" . mysqli_connect_error();
  }





  ?>