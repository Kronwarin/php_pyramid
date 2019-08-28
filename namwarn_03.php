<?php include ("ww.php");?>
<?php
for($namwarn=1;$namwarn<=4;$namwarn++) {
	for($col=$namwarn;$col<=$namwarn;$col++) {
		echo($col);
	}
	for($col=$namwarn;$col<=$namwarn;$col++) {
		echo($col+4);
	}
	
	for($col=0;$col<=3+$namwarn;$col++) {
		echo("*");	
	}
	
	echo "<br/>";
}
?>