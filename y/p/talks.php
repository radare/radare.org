<?
function print_feature($f, $v) {
	print "<a name=\"$f\"></a>";
?>
	<table width=100% class=menubar style=text-align:left>
	<tr>
	<td colspan=3> <font class=text_title><? readfile("t/$f/title"); ?></font>
	<hr size=1 />
	</td>
	</tr>
	<tr>
	<td valign=top style="text-align:center;height:100px;width:130px">
		<img border=0 src="<? print "t/$f/small.png";?>" />
<br />
	</td>
	<td>&nbsp;</td>
	<td valign=top style="text-align:justify;font-size:15px;width:100%">
		<?  readfile("t/$f/short"); ?>
	</td>
	</tr>
	</table>
<br /><br /><br />
<?
}

$f=@$_GET["f"];
$feats = array(
	"owasp2014",
	"rootedlabs2013", "lacon2011",
	"ogg2011", "l0gic2011", "rooted2011",
	"ncn2010", "lacon2010", "cp2010", "rooted2010",
	"lacon2009", "scg2009", "bs3c-pancake", "bs3c-nibble",
	"fiber", "rage", "scg2008", "lacon2008");
if (in_array($f, $feats)) {
	print_feature($f, 1);
	print "<p align=right><a href=?p=features>back</a></p>";
} else {
	foreach($feats as $f) {
		print_feature($f, 0);
	}
}
?>
