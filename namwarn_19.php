<pre style="
font-family:'mono';font-size:30px;">
<script>
for(i=1;i<=5;i++)
{
	document.write(i);
	for(j=1;j<=(10-i);j++)
	{
	document.write("*");
	}
	for(j=2;j<=(i);j++)
	{
	document.write(" ");
	}
	document.write(6-i);
	document.write("\n");
}
</script>
</pre>