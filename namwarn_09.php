<?php include ("ww.php");?>
<?php
for($namwarn=1;$namwarn<=5;$namwarn++) {
	for($col=3;$col<=1+$namwarn;$col++) {
	echo(" ");
	}
	for($col=0;$col<=5-$namwarn;$col++){
		echo($namwarn);
	}
	for($col=0;$col<=4-$namwarn;$col++){
		echo($namwarn);
	}
	echo "<br/>";
}
?>