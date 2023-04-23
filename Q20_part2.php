<?php
if (isset($_POST["name"]) && isset($_POST["age"]) && isset($_POST["address"])&& isset($_POST["email"]) 
) {  
$n = $_POST["name"]; 
$age = $_POST["age"]; 
$address = $_POST["address"]; 
$email = $_POST["email"]; 

$ch=0;

} 
if ($age < 18 && $age > 0) {
  echo "Age should be greater than 18. <br>";
  $ch=1;

}

if (strpos($address, 'Haryana') === false) {
  echo "Address should contain the word 'Haryana'.<br>";
  $ch=1;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "Invalid email format.<br>";
  $ch=1;
}
if($ch == 0){
    echo "Name = ".$n;
    echo "<br>";
    echo "Age = ".$age;
    echo "<br>";
    echo "address = ".$address;
    echo "<br>";
    echo "Email = ".$email;
    echo "<br>";
}


?>