<pre style="
font-family:'courier new';font-size:30px;">
<script>
for(row=1;row<=5;row++) {
	for(col=2;col<=row;col++) {
	document.write("  ");
	}
	for(col=11;col>=11;col--){
		document.write(col-row-row);
	}
	for(col=10;col>=6+row;col--){
		document.write(col-row-row);
	}
	for(col=5;col>=1+row;col--){
		document.write(col-row);
	}
	document.write("\n");
}
</script>
</pre>