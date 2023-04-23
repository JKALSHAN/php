
<?php
function factorial($num)
{ $fact=1;
for ($i=$num;$i>1;$i--)
{
   $fact*=$i;
}
return $fact;
}
factorial(4);
echo "<br>";
$n=3;
$r=1;
$C=factorial($n)/(factorial($r)*factorial($n-$r));
echo $C;
?>