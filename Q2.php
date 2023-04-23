<html>
<body>
<form method="POST">
Enter month number <input type="text" name="num">
<br>
<br>
<input type="submit" value=submit>
<br>
</form>
</body>
</html>
<?php
$month=" ";
if (isset($_POST["num"]) ){
$month=$_POST["num"];

}

switch ($month) {
    case "1":
        echo "31 days ";
        break;
    case "2":
        echo "28 days";
        break;
    case "3":
        echo "31 days";
        break;
 case "4":
        echo "30 days";
        break;
    case "5":
        echo "31 days";
        break;
    case "6":
        echo "30 days ";
        break;
 case "7":
        echo "31 days ";
        break;
 case "8":
        echo "31 days";
        break;
 case "9":
        echo "30 days";
        break;
    case "10":
        echo "31 days";
        break;
    case "11":
        echo "30 days ";
        break;
 case "12":
        echo "31 days ";
        break;
  
    default:
        echo "Invalid number!";
}
?>