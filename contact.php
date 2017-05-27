<!DOCTYPE html>
<html>
<?php include("resources/components/head.php");?>
<body>
	<?php readfile("resources/components/header.html");?>
	<div class="page-wrap">
		<div class="card">
			<?php putTitle("Contact me");?>
			<table id="contact">
				<tr title="linkedin">
					<td class="fa">&#xf08c;</td>
					<td><a href="https://www.linkedin.com/in/marius-sch&#x00e4;r/">linkedin.com/in/marius-sch&#x00e4;r<span class="le">&#xf08e;</span></a></td>
				</tr>
				<tr title="twitter">
					<td class="fa">&#xf081;</td>
					<td><a href="https://twitter.com/martyschaer">@martyschaer<span class="le">&#xf08e;</span></a></td>
				</tr>
				<tr title="github">
					<td class="fa">&#xf092;</td>
					<td><a href="https://github.com/martyschaer">github.com/martyschaer<span class="le">&#xf08e;</span></a></td>
				</tr>
				<tr title="email">
					<td class="fa">&#xf0e0;</td>
					<td><a href="mailto:contact@mariusschaer.ch">contact@mariusschaer.ch<span class="le">&#xf08e;</span></a></td>
				</tr>
				<tr title="telegram">
					<td class="fa">&#xf2c6;</td>
					<td><a href="https://telegram.me/martyschaer">@martyschaer<span class="le">&#xf08e;</span></a></td>
				</tr>
				<tr title="mastodon">
					<td class="fa">&#xf10c;</td>
					<td><a href="https://mastodon.rocks/@martyschaer">@martyschaer<span class="le">&#xf08e;</span></a></td>
				</tr>
			</table>
		</div>
	</div>
	<?php readfile("resources/components/footer.html");?>
</body>
</html>

<!--
Char table:
Ä 	&#x00c4;
ä 	&#x00e4;
Ö 	&#x00d6;
ö 	&#x00f6;
Ü 	&#x00dc;
ü 	&#x00fc;
 	&#xf092;
 	&#xf1ea;
 	&#xf0e0;
	&#xf0e0;
 	&#xf2bb;
™ 	&#x2122;
	&#xf081;
	&#xf0d4;
	&#xf08c;
	&#xf0f4;
 	&#xf08e;
	&#xf0c1;
	&#xf2c6;
	&#xf10c;
Surround in <span class="fa">...</span>
-->