<?php include ("ww.php");?>
<?php
for($namwarn=1;$namwarn<=5;$namwarn++) {
	for($col=5;$col>=$namwarn;$col--) {
		echo($namwarn);
	}
	
	for($col=1;$col<=$namwarn;$col++) {
		echo(" ");
	}
	
	for($col=2;$col<=$namwarn;$col++) {
		echo(" ");
	}
	for($col=5;$col>=$namwarn;$col--) {
		echo($namwarn);
	}
	echo "<br/>";
}
?>