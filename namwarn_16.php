<pre style="
font-family:'courier new';font-size:30px;">
<script>
for(i=1;i<=5;i++)
{
	for(j=1;j<=i;j++)
	{
	document.write((i+1)-j);
	}
	for(j=1;j<=(5-i);j++)
	{
	document.write("  ");
	}
	for(j=1;j<=i;j++)
	{
	document.write("*");
	}
	document.write("\n");
}
</script>
</pre>