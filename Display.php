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
$servername = "localhost";
$username = "root";
$password = "";
$DB_name="pharma";

// Create connection
$conn = new mysqli($servername, $username, $password,$DB_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//$id= $_POST['id'];
$select="select * from members ";

$result = $conn->query($select);

while($row = $result->fetch_assoc()){
    $data[]=$row;
}
       
echo json_encode($data);

        ?>
    </body>
</html>
