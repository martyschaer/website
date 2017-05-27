<!DOCTYPE html>
<html>
<?php include("resources/components/head.php");?>
<body>
	<?php readfile("resources/components/header.html");?>
	<div class="page-wrap">
		<div class="error">
			<h1>404</h1>
			<h2>the URL <span class="monospace"><?= $_SERVER['REQUEST_URI']; ?></span> doesn't exist on this server</h2>
		</div>
	</div>
	<?php readfile("resources/components/footer.html");?>
</body>
</html>