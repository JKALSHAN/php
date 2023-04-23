<?php
function sum_odd($n)
{
static $count=1;
static $sum=0;
$odd=1;
while($count<=$n)
{
$sum+=$odd;
$odd+=2;
$count+=1;
}
return $sum;
}

echo sum_odd(3);

?>
