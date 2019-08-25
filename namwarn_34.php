<pre style="
font-family:'mono';font-size:30px;">
<script>
for(row=1;row<=3;row++) {
	for(col=1;col<=3-row;col++) {
		
		document.write(" ");
	}
		document.write("*");
	for(col=2;col<=row;col++){
		document.write(col);
	}
	for(col=row;col<=row;col++) {
		
		document.write(col);
	}
	for(col=row;col>=2;col--){
		document.write(col);
	}
		document.write("*");
	for(col=1;col<=3-row;col++) {
		
		document.write(" ");
	}
		document.write("\n");
}
for(row=2;row>=1;row--) {
	for(col=1;col<=3-row;col++) {
		document.write(" ");
	}
	
		document.write("*");
	for(col=1;col<=row;col++){
		document.write(row);
	}
	
	for(col=2;col<=row;col++){
		document.write(col);
	}
		document.write("*");
	for(col=1;col<=3-row;col++) {
		document.write(" ");
	}
	document.write("\n");
}

</script>
</pre>