<pre style="
font-family:'courier new';font-size:30px;">
<script>
for(i=1;i<=5;i++)
{
	document.write(i);
	for(j=1;j<=i;j++)
	{
	document.write("*");
	}
	document.write(i);
	for(j=1;j<=(6-i);j++)
	{
	document.write("*");
	}
	document.write(10-i);
	document.write("\n");
}
</script>
</pre>