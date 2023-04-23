<?php
$f= 0;
$n=5;
for ($i = 2; $i < $n/2; $i++) {
    if ($n % $i == 0) {
        $f = 1;
        break;
    }
}
if ($f == 1) {
    echo  "$n is not prime number.";

} else {
  echo  "$n is a prime number.";
}

?>
