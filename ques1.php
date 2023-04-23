<html>
<title>form</title>
<head><center><font size = 25 >Form</font></center></head>
<body>
<?php
$nameErr = $emailErr = $rollnoErr = $courseErr = $semesterErr = $phonenoErr = "";
$name = $email = $rollno = $course = $semester = $phoneno = "";


echo $_COOKIE['name'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {  
         $nameErr = "Name is required";  
    } else {  
        $name = test_input($_POST["name"]);   
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
            $nameErr = "Only alphabets and white space are allowed";  
			} 
     else {
	  setcookie('name', $name, time() + 86400 * 30);
	}
  } 
  if (empty($_POST["rollno"])) {
    $rollnoErr = "rollno is required";
  } else {
    $rollno = test_input($_POST["rollno"]);
    if (!preg_match("/^[0-9 ]*$/",$rollno)) {
      $rollnoErr = "Only number allowed";
    }
  }
  if (empty($_POST["course"])) {
    $courseErr = "course is required";
  } else {
    $course = test_input($_POST["course"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$course)) {
      $courseErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["semester"])) {
    $semesterErr = "semester is required";
  } else {
    $semester = test_input($_POST["semester"]);
    if (!preg_match("/^[0-9 ]*$/",$semester)) {
      $semesterErr = "Only number allowed";
    }
  }
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
   if (empty($_POST["phoneno"])) {  
            $phonenoErr = "phone no is required";  
    } else {  
            $phoneno = test_input($_POST["phoneno"]);  
            if (!preg_match ("/^[0-9]*$/", $phoneno) ) {  
            $phonenoErr = "Only numeric value is allowed.";  
            }  
        if (strlen ($phoneno) != 10) {  
            $phonenoErr = "phone no must contain 10 digits.";  
            }  
    }  
}



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<?php
echo $nameErr."<br>";
?>

name <input type="text" name="name">
<br>
<br>
<?php
echo $nameErr."<br>";
?> 	
roll no <input type="roll no" name="rollno">
<br>
<br>
<?php
echo $courseErr."<br>";
?>
course <input type="course" name="course">
<br>
<br>
<?php
echo $semesterErr."<br>";
?>
semester <input type="semester" name="semester">
<br>
<br>
<?php
echo $emailErr."<br>";
?>
email <input type="email" name="email">
<br>
<br>
<?php
echo $phonenoErr."<br>";
?>
phone no <input type="phone no" name="phoneno">
<br>
<br>
<input type= "submit" value="submit" > 
</form> 
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $rollno;
echo "<br>";
echo $course;
echo "<br>";
echo $semester;
echo "<br>";
echo $email;
echo "<br>";
echo $phoneno;
?>
</body>
</html>