<pre style="
font-family:'courier new';font-size:30px;">
<script>
for(i=1;i<=5;i++)
{
	for(j=1;j<=(i);j++)
	{
	document.write(" ");
	}
	document.write(i + "" + (i+1));
	for(j=1;j<=(5-i);j++)
	{
	document.write("  ");
	}	
    document.write((i+1) + "" + i);
	document.write("\n");
}
</script>
</pre>