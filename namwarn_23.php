<?php include ("ww.php");?>
<?php
for($namwarn=1;$namwarn<=5;$namwarn++) {
	echo($namwarn);
	for($col=1;$col<=7-$namwarn;$col++) {
		echo("*");	
	}
	
	for($col=2;$col<=$namwarn;$col++) {
		echo(" ");	
	}
	echo($namwarn);
	echo "<br/>";
}
?>