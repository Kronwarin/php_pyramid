<?php include ("ww.php");?>
<?php
for($namwarn=1;$namwarn<=5;$namwarn++) {
	echo($namwarn);
	echo("*");
	echo(2+$namwarn);
	for($col=1;$col<=2+$namwarn;$col++) {
		echo("*");
	}
	echo "<br/>";
}
?>