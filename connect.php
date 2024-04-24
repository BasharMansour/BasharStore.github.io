<?php

$host="localhost";
$dbuser="root";
$dbpass="";
$dbname="basharstore";



@$con=mysqli_connect($host,$dbuser,$dbpass,$dbname);

if(!$con){
    
    echo 'nooo connect';
}

