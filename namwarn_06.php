<?php include ("ww.php");?>
<?php
for($namwarn=1;$namwarn<=7;$namwarn++) {
	for($col=2;$col<=1+$namwarn;$col++) {
	echo(" ");
	}
	for($col=1;$col<=1;$col++){
		echo($col);
	}
	for($col=$namwarn;$col<=6;$col++){
		echo("01");
	}
	echo "<br/>";
}
?>