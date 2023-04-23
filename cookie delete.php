<?php
setcookie("username","",time() - 3600);
?>
<html>
<body>
<?php
echo "cookie 'username' is deleted";
?>
</body>
</html>