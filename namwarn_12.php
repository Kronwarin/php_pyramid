<pre style="
font-family:'mono';font-size:30px;">
<script>
for(row=1;row<=5;row++) {
	for(col=2;col<=row;col++) {
	document.write(" ");
	}
	for(col=row;col<=10-row;col++){
		document.write(col);
	}
	document.write("\n");
}
</script>
</pre>