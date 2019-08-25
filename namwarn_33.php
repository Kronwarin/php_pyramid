<pre style="
font-family:'courier new';font-size:30px;">
<script>
for(i=1;i<=3;i++)
{
	for(j=1;j<=(3-i);j++)
	{
	document.write(" ");
	}
	for(j=1;j<=((i*2)-1);j++)
	{
	document.write("*");
	}
	document.write("\n");
}
for(i=2;i>=1;i--)
{
	for(j=1;j<=(3-i);j++)
	{
	document.write(" ");
	}
	for(j=1;j<=((i*2)-1);j++)
	{
	document.write("*");
	}
	document.write("\n");
}
</script>
</pre>