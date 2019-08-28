<?php include ("ww.php");?>
<?php
for($namwarn=1;$namwarn<=5;$namwarn++) {
	for($col=$namwarn;$col<=$namwarn;$col++) {
		echo($col);
		echo(10-$namwarn);
		echo($col);
		echo(10-$namwarn);
		echo($col);
		echo(10-$namwarn);
		echo($col);
		echo(10-$namwarn);
	}
	echo "<br/>";
}
?>