<?php include ("ww.php");?>
<?php
for($namwarn=1;$namwarn<=5;$namwarn++) {
	for($col=1;$col<=8-$namwarn;$col++) {
		echo($col);	
	}
	for($col=1;$col<=2+$namwarn;$col++) {
		echo("*");	
	}
	
	echo($namwarn+2);
	echo "<br/>";
}
?>