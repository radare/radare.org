<?
function print_feature($f, $v) {
?>
	<table class=menubar style=text-align:left>
	<tr>
	<td colspan=3> <font class=text_title><? readfile("f/$f/title"); ?></font>
	<hr size=1 />
	</td>
	</tr>
	<tr>
<? if ($v) { ?>
<!--
	<a href=?p=examples>
	<img border=0 src="<? print "f/$f/small.png";?>" />
	<br />
	go back</a>
-->
	<a href=?p=examples>
	&lt;</a>
<? } else { ?>
	<td valign=top style="text-align:center;height:100px;width:130px;background-color:white">
	<a href=?p=examples&f=<? print "$f"; ?>>
	<img border=0 src="<? print "f/$f/small.png";?>" />
	<br />
	read more</a>
	</td>
<? } ?>
<td>&nbsp;</td>
	<td valign=top style="text-align:justify;font-size:15px;">
		<?  if ($v) readfile("f/$f/body"); else {
			readfile("f/$f/short");
			print ("<br />...");
		} ?>
	</td>
	</tr>
	</table>
<br /><br />
<?
}

$f=@$_GET["f"];
$feats = array ("adv", "itrace", "plugins", "vala", "graph", "rasm", "rax");
if (in_array($f, $feats)) {
	print_feature($f, 1);
	print "<p align=right><a href=?p=examples>back</a></p>";
} else {
	foreach ($feats as $f) {
		print_feature ($f, 0);
	}
}
?>
