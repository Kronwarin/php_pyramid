<pre style="
font-family:'mono';font-size:30px;">
<script>
var tRow = 7;
for(row=1; row <= tRow; row++) {
 for(col=1;col<=tRow - row + 1;col++){ 
  document.write(" "); 
 }
 for(col=1; col <= row ; col++) { 
  document.write( col ); 
 }
 document.write( row );
 for(col=row; col >= 1 ; col--) { 
  document.write( col ); 
 }
 document.write("\n");
}
</script>
</pre>