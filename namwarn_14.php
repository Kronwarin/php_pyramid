<?php include ("ww.php");?>
<?php
for($namwarn=1;$namwarn<=5;$namwarn++) {
	for($col=2;$col<=0+$namwarn;$col++) {
		echo(" ");
	}
	
	for($col=$namwarn;$col<=$namwarn;$col++) {
		echo($namwarn);
	}
	
	echo($namwarn+1);
	for($col=1;$col<=5-$namwarn;$col++){
		echo("  ");
	}
	
	for($col=$namwarn;$col<=$namwarn;$col++) {
		echo($namwarn+1);
	}
	
	echo($namwarn);
	
	echo "<br/>";
}
?>