<?
$func=ereg_replace("_","-",$function);
$func=ereg_replace("\(.*\)","-",$func);
$filename="/manual/function.".$func.".php3";
if (file_exists($DOCUMENT_ROOT.$filename)):
	Header("Location: $filename");
	exit;
else:
	require("shared.inc");
	CommonHeader("Quick Manual Reference");
?>
<h3>Oops!</h3>
The function <B><? echo $function;?></B> doesn't seem to exist.

<h3>Why not?</h3>
<UL>
<LI>there is no manual page for that function ... yet
<LI>you may have mis-spelt the function name
<LI>you may have entered an alias to a function name, and that alias doesn't have it's own manual page<BR>
e.g. <B>mysql_num_rows</B> is the "real" function name, not <B>mysql_numrows</B><BR>
<LI>you entered a bunch of stuff I don't recognize<BR>
e.g. you should enter <B>mysql_result</B>, not <B>mysql_result($q1,0,"foobar");</B>
</UL>
<BR>

If all else fails, just click <A HREF="/manual/">here</A> to go to the table of contents for the online documentation.
<P>

<?
endif;
commonFooter();
?>
