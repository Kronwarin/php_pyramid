<pre style="
font-family:'mono';font-size:30px;">
<script>
for(i=1;i<=4;i++)
{
	for(j=1;j<=i;j++)
	{
		document.write("*");
	}
	for(j=i;j>=2;j--)
	{
		document.write(j);
	}
	for(j=1;j<=i;j++)
	{
		document.write(j);
	}
	document.write("\n");
}

</script>
</pre>