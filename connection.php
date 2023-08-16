<?php
$servername='localhost';
$username='root';
$password='';
$database='responsiveform';
mysqli_report(MYSQLI_REPORT_STRICT);
try{
    $con=new mysqli($servername,$username,$password,$database);
    //echo "connection Sucessfull";
   
}catch(Exception $ex){
    echo "connection failed" .$ex->getMessage();
}