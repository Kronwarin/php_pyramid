<?php include ("ww.php");?>
<?php
for($namwarn=1;$namwarn<=7;$namwarn++) {
	for($col=3;$col<=1+$namwarn;$col++) {
	echo(" ");
	}
	for($col=$namwarn;$col<=$namwarn;$col++){
		echo($namwarn);
		echo($namwarn+1);
		echo($namwarn+2);
	}
	for($col=2;$col<=2+$namwarn;$col++){
		echo("*");
	}
	echo "<br/>";
}
?>