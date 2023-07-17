<?php
// $str="abcdefghijklmnopqrstuvwxyz"///;
$count=strlen($str);
for($i=0;$i<$count;$i++){
	for($j=0;$j<=$i;$j++){
		echo " $str[$j] ";
	}
	echo '</br>';
}
?>