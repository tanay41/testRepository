<?php
	for($i=1;$i<=5;$i++){
		for($k=1;$k<=$i;$k++){
			echo "*";
		}
		echo "<br/>";
	}
	/*
		*
		**
		***
		****
		*****
	*/
	echo "---------------------------";
	echo "<br/>";
	echo "<br/>";

	/*
		*****
		****
		***
		**
		*
	*/
	
	for($i=5;$i>=1;$i--){
		for($j=1;$j<=$i;$j++){
			echo "+";
		}
		echo "<br/>";
	}
	echo "---------------------------";
	echo "<br/>";
	echo "<br/>";
	
	/*
		*****
		 ****
		  ***
		   **
		    *
	*/

	/*
			*
		   **
		  ***
		 ****
		*****
	*/

	for($i=1;$i<=5;$i++){
		for($j=4;$j>=$i;$j--){
			echo "s";
		}
		for($k=1;$k<=$i;$k++){
			echo "$k";
		}
		echo "<br/>";
	}

    /*pyramid*/

    echo "---------------------------";
    echo "<br/>";
	for($i=1;$i<=5;$i++){
		for($j=4;$j>=$i;$j--){
			echo "&nbsp;";
		}
		for($k=1;$k<=$i;$k++){
			echo "*";
		}
		echo "<br/>";
	}

	//Linear Search ............

	$a = array(11,12,13,18,15,14);
	$item = 14;
	$size = count($a);
	for($i=0;$i<$size;$i++){
		if($a[$i] == $item){
			echo "Item Has Been Found at the location : $i";
			break;
		}
	}
	if($i == $size){
		echo "Item Not Found";
	}

	echo "<br/>";
 	echo "--------------";
 	echo "<br/>";
 	
	$a = array(11,12,13,14,15,14);
	$item = 14;
	$size = count($a);
	for($i=0;$i<$size;$i++){
		if($a[$i] == $item){
			echo "Item Has Been Found at the location : $i";
			echo "<br/>";
			//break;
		}
	}
	if($i == $size){
		echo "Item Not Found";
	}

	//binary search



?>