<pre style="
font-family:'mono';font-size:30px;">
<script>
for(i=1;i<=5;i++)
{
	for(j=1;j<=(8-i);j++)
	{
	document.write("*");
	}
	document.write(i);
	for(j=1;j<=(i);j++)
	{
	document.write("*");
	}
	document.write(8-i);
	document.write("\n");
}
</script>
</pre>