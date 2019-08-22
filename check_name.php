<?php
/*
 * Site : http:www.smarttutorials.net
 * Author :muni
 * 
 */
require_once 'config.php';
global $con;

if( isset($_POST['name'] ) && !empty( $_POST['name'] ) ) {
     $name = $_POST['name'];
     $res = mysqli_query( $con, "select count(user_name) as count from users where user_name='$name'") or die(mysqli_error($con)); 
   
     if ( mysqli_num_rows( $res ) > 0 ) {
         echo 'true';
     }else{
         echo 'false';
     }
 }