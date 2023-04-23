<?php
$servername="localhost";
$username="root";
$password="root";
$database="college_website";

if(isset($_POST['submit'])){

    // getting the values from the form
    
    $user=$_POST['username'];
    $pass=$_POST['password'];

}

$conn=new mysqli($servername,$username,$password,$database);

if ($conn->connect_error) die($conn->connect_error);
//$query1 = "create table User(username varchar(120),password varchar(10))";
 //$result1 = $conn->query($query1);
 //if (!$result1) die($conn->error);
 $query = "SELECT * FROM User";
 $result = $conn->query($query);
 if (!$result) die($conn->error);
 $rows = $result->num_rows;

$flag = 0;
 while($data = $result->fetch_assoc()) {

 if($data['username'] == $user && $data['password'] == $pass){
    echo "welcome";
    $flag=1;
 }}
 if ($flag == 0){
    echo "you are not resistered";
 }
 

mysqli_close($conn);

?>