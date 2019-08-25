<pre style="
font-family:'courier new';font-size:30px;">
<script>
for(row=1;row<=4;row++) {
	for(col=2;col<=0+row;col++) {
		document.write(" ");
	}
	
	for(col=row;col<=row+1;col++) {
		document.write(row);
	}
	
	for(col=1;col<=4-row;col++){
		document.write("**");
	}
	
	for(col=row;col<=row+1;col++) {
		document.write(row);
	}
	
	document.write("\n");
}
</script>
</pre>