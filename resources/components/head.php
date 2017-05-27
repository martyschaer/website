<?php
/**

*/
	function putTitleShare($txt){
		$id = str_replace(' ', '-', strtolower($txt));
		$baseurl = "/blag#";
		$url = $baseurl . $id;
		echo "<div class=\"share\"><h2>{$txt}</h2><a name=\"{$id}\" class=\"anchor\"></a><a href=\"{$url}\"><span class=\"fa\">&#xf0c1;</span> permalink</a></div><hr class=\"postshare\"></hr>";
	}
?>
<head>
	<link rel="stylesheet" href="resources/fonts/font-awesome/css/font-awesome.min.css">
	<title>Marius Sch&#x00e4;r</title>
	<link rel="icon" type="image/x-icon" href="resources/img/favicon.ico">
	<link rel="stylesheet" type="text/css" href="style/reset.css">
	<link rel="stylesheet" type="text/css" href="style/base.css">
	<meta name="viewport" content="width=400, initial-scale=1">
	<meta name="language" content="English">
</head>