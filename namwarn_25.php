<pre style="
font-family:'courier new';font-size:30px;">
<script>
for(row=1;row<=5;row++) {
	for(col=1;col<=5-row;col++) {
		document.write("*");	
	}
	
	for(col=1;col<=row;col++){
		document.write(6-row);
	}
	for(col=2;col<=row;col++){
		document.write(6-row);
	}
	for(col=0;col<=5-row;col++) {
		document.write("*");	
	}
	document.write("\n");
}

</script>
</pre>