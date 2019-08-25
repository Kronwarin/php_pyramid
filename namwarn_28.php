<pre style="
font-family:'mono';font-size:30px;">
<script>
for(row=1;row<=5;row++) {
	for(col=5;col>=row;col--) {
		document.write(col);
	}
	
	for(col=1;col<=row;col++) {
		document.write("*");
	}
	
	for(col=2;col<=row;col++) {
		document.write("*");
	}
	for(col=row;col<=5;col++) {
		document.write(col);
	}
	document.write("\n");
}
</script>
</pre>