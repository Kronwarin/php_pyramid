<?php include ("ww.php");?>
<?php
for($namwarn=1;$namwarn<=5;$namwarn++) {
	echo($namwarn);
	for($col=1;$col<=$namwarn;$col++) {
		echo(" ");	
	}
	
	for($col=1;$col<=$namwarn;$col++) {
		echo("*");	
	}
	echo "<br/>";
}
?>