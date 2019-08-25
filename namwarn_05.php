<pre style="
font-family:'mono';font-size:30px;">
<script>
for(i=1;i<=4;i++)
{
	for(j=1;j<=(4-i);j++)
	{
	document.write(" ");
	}
	document.write(i);
	for(j=2;j<=i;j++)
	{
	document.write("**");
	}
	document.write(i);
	document.write("\n");
}
for(i=3;i>=1;i--)
{
	for(j=1;j<=(4-i);j++)
	{
	document.write(" ");
	}
	document.write(i);
	for(j=2;j<=i;j++)
	{
	document.write("**");
	}
	document.write(i);
	document.write("\n");
}
</script>
</pre>