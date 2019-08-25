<pre style="
font-family:'mono';font-size:30px;">
<script>
for(i=1;i<=5;i++)
{
	document.write(i);
	for(j=1;j<=((i*2)-1);j++)
	{
	document.write("*");
	}
	for(j=1;j<=(6-i);j++)
	{
	document.write(i + "" + i);
	}
	document.write("\n");
}
</script>
</pre>