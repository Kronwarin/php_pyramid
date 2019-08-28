<?php include ("ww.php");?>
<?php
for($namwarn=1;$namwarn<=5;$namwarn++) {
	for($col=1;$col<=5-$namwarn;$col++) {
		echo("*");	
	}
	
	for($col=1;$col<=$namwarn;$col++){
		echo(6-$namwarn);
	}
	for($col=2;$col<=$namwarn;$col++){
		echo(6-$namwarn);
	}
	for($col=0;$col<=5-$namwarn;$col++) {
		echo("*");	
	}
	echo "<br/>";
}
?>