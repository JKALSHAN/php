<?php
$year=2020;
if((0 == $year%4)&&(0 != $year%100)||(0 == $year%400))
{
echo "year is leap year";
}
else
{
echo "year is not leap year.";
}
?>