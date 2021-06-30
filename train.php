<?php
$cc=mysqli_connect("localhost","root","");
if($cc->connect_error)
echo "connection unsuccessful";
else{
$d="CREATE DATABASE train";
if($cc->query($d)==true){
$cc=mysqli_connect("localhost","root","","train");
if($cc->connect_error)
{echo "connection unsuccessful";}
$d=mysqli_query($cc,"CREATE TABLE tname(id INT PRIMARY KEY,name VARCHAR(25),adderss VARCHAR(25),tname VARCHAR(25),tno VARCHAR(25),tdate DATE)");
   if($d==true)
   {
       echo "table created successfully";
   }else
   {
       echo "table creation failed";
   }
}
$cc->close();
}
?>