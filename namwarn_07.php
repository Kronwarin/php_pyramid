<?php include ("ww.php");?>
<?php
for($namwarn=1;$namwarn<=7;$namwarn++) {
	for($col=0;$col<=7-$namwarn;$col++) {
	echo(" ");
	}
	for($col=1;$col<=1;$col++){
		echo($col);
	}
	for($col=3;$col<=1+$namwarn;$col++){
		echo($col-1);
	}
		echo($namwarn);
	for($col=$namwarn;$col>=1;$col--){
		echo($col);
	}
	echo "<br/>";
}
?>
