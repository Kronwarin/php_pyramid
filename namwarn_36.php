<pre style="
font-family:'courier new';font-size:30px;">
<script>
for(row=1;row<=3;row++) {
	for(col=1;col<=4-row;col++){
		document.write(row+col-1);
	}
	for(col=1;col<=row;col++){
		document.write("*");
	}
	for(col=2;col<=row;col++){
		document.write("*");
	}
	for(col=3;col>=row;col--){
		document.write(col);
	}
	document.write("\n");
}
for(row=2;row>=1;row--) {
	for(col=1;col<=4-row;col++){
		document.write(row+col-1);
	}
	for(col=1;col<=row;col++){
		document.write("*");
	}
	for(col=3;col<=1+row;col++){
		document.write("*");
	}
	
	for(col=3;col>=row;col--) {
		document.write(col);
	}
	document.write("\n");
}

</script>
</pre>