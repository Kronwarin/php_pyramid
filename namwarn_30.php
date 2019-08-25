<pre style="
font-family:'courier new';font-size:30px;">
<script>
for(row=1;row<=5;row++) {
	for(col=2;col<=row;col++) {
		document.write(" ");	
	}
	
	for(col=0;col<=5-row;col++){
		document.write("*");
	}
	for(col=0;col<=4-row;col++){
		document.write("*");
	}
	for(col=row;col>=1;col--) {
		document.write(col);
	}
	document.write("\n");
}
</script>
</pre>