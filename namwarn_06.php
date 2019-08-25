<pre style="
font-family:'mono';font-size:30px;">
<script>
for(i=7;i>=1;i--)
{
	for(j=1;j<=(7-i);j++)
	{
	document.write(" ");
	}
	for(j=1;j<=i;j++)
	{
	document.write(j % 2);
	}
	for(j=2;j<=i;j++)
	{
	document.write(j % 2);
	}
	document.write("\n");
}
</script>
</pre>