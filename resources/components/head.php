<?php
	
	$_SESSION['posts'] = array();
	$_SESSION['titles'] = array();

	function putTitleShare($txt, $date){
		$id = str_replace(' ', '-', strtolower($txt)) . "-{$date}";

		$_SESSION['posts'][] = $id;
		$_SESSION['titles'][] = $txt;

		$baseurl = "/blog#";
		$url = $baseurl . $id;
		echo "<div class=\"share\"><h2>{$txt}</h2><span class=\"le\">{$date}</span><a name=\"{$id}\" class=\"anchor\"></a><a href=\"{$url}\"><span class=\"fa\">&#xf0c1;</span> permalink</a></div><hr class=\"postshare\"></hr>";
	}

	function putTitle($txt){
		echo "<div class=\"share\"><h2>{$txt}</h2></div><hr class=\"postshare\"></hr>";
	}
?>
<head>
	<link rel="stylesheet" href="resources/fonts/font-awesome/css/font-awesome.min.css">
	<title>Marius Sch&#x00e4;r</title>
	<link rel="icon" type="image/x-icon" href="resources/img/favicon.ico">
	<link rel="stylesheet" type="text/css" href="style/base.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="language" content="English">
</head>
