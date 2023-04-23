<?php
$num=7988583986;
function reverse($num){
	$reverse_num=0;
	while($num>1){
		$num1=$num%10;
		$reverse_num=($reverse_num*10)+$num1;
		$num=(int)$num/10;
	}
	return $reverse_num;
}
echo "reverse of your number is : ".reverse($num);
?>