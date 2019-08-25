<pre style="
font-family:'mono';font-size:30px;">
<script>
for(row=1;row<=5;row++) {
	document.write("*");
	for(col=2;col<=row;col++) {
		document.write(" ");	
	}
	
	for(col=0;col<=5-row;col++){
		document.write(row);
	}
	for(col=0;col<=4-row;col++){
		document.write(row);
	}
	for(col=2;col<=row;col++) {
		document.write(" ");	
	}
	document.write("*");
	document.write("\n");
}
</script>
</pre>