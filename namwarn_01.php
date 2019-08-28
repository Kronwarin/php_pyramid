<?php include ("ww.php");?>
<?php
for($namwarn=1;$namwarn<=4;$namwarn++) {
	for($col=2;$col<=0+$namwarn;$col++) {
		echo(" ");
	}
	
	for($col=$namwarn;$col<=$namwarn+1;$col++) {
		echo($namwarn);
	}
	
	for($col=1;$col<=4-$namwarn;$col++){
		echo("**");
	}
	
	for($col=$namwarn;$col<=$namwarn+1;$col++) {
		echo($namwarn);
	}
	
	echo "<br>";
}
?>