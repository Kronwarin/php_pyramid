<?php include ("ww.php");?>
<?php
for($namwarn=1;$namwarn<=5;$namwarn++) {
	
	for($col=$namwarn;$col>=1;$col--){
		echo($col);
	}
	for($col=1;$col<=5-$namwarn;$col++){
		echo("  ");
	}
	for($col=$namwarn;$col>=1;$col--){
		echo("*");
	}
	echo "<br/>";
}
?>