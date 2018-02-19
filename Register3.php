<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
<?php
error_reporting(E_ALL ^ E_NOTICE);
$con=mysqli_connect("localhost","root","","pharma");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$name=$_GET['name'];
$email=$_GET['email'];
$country=$_GET['country'];
$city=$_GET['city'];
$zip=$_GET['zip'];
$map=$_GET['map'];
$phone=$_GET['phone'];
$berth_date=$_GET['berth_date'];
$age=$_GET['age'];
$user_name=$_GET['user_name'];
$password=$_GET['password'];

 $name='Ashraf';
 $email='ali@ali.com';
 $country='Egypt';
 $city='Giza';
 $zip='02';
 $map='654654654';
 $phone='0125452585';
 $berth_date='2001-02-13';
 $age='55';
 $user_name=ali;
 $password='ali567';

$insert="INSERT INTO members (name, email, country, city, zip, map, phone, berth_date, age, user_name, password) VALUES ('$name', '$email', '$country', '$city', '$zip', '$map', '$phone', '$berth_date', '$age', '$user_name', '$password')";

$result =mysqli_query($con,$insert);
echo "ddd";
       
// echo json_encode($data);

        ?>
    </body>
</html>
