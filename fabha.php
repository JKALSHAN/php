<html>
<title>form</title>

<head>
	<center>
		<font size=25>Form</font>
	</center>
</head>

<body>
	<form method="POST">
		name <input type="text" name="name">
		<br>
		<br>
		email<input type="email" name="email">
		<br>
		<br>
		<textarea name="comment">enter text here...</textarea>
		<br><br>
		<input type="submit" value=submit>
	</form>
</body>

</html>
<?php
$name = "";
$email = "";
$comment = "";
if (isset($_POST["name"]) && isset($_POST["comment"]) && isset($_POST["email"])) {
	$name = $_POST["name"];
	echo $name . "<br>";
	$email = $_POST["email"];
	echo $email . "<br>";
	$comment = $_POST["comment"];
	echo $comment . "<br>";
}
$c = array("love", "feeling", "like", "heart");
echo str_replace($c, "****", $comment);
echo "<br>";
$length = strlen($email);
$find = "@";
$pos = strpos($email, $find) + 1;
$username = substr($email, 0, $pos - 1);
echo $username . "<br>";
$account = substr($email, $pos + 1, $length);
echo $account . "<br>";
print_r(explode("@", $email));
echo "<br>";
$token = strtok($comment, " ");
echo $token;
while ($token != "") {
	$token = strtok("");
}
?>