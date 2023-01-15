<?php
$n = 5;
for ($x = 0; $x <= $n; $x++) {
	for ($y = 0; $y <= $n; $y++) {
  		if($n-$y>$x){
        	echo " &nbsp";
        }else{
        	echo "#";
		}
  		

  	}
  echo "<br>";
  
} 