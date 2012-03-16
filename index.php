<html>
<head>
<title>How much money did we lose???</title>
</head>
<body>
<div style="position:relative;top:500px;left:center;">
<h1>
<?php
	require_once ('howmuch.php');
	$howMuch = new HowMuch();
	echo $howMuch->view();
?>
</h1>
</div>
</body>
</html>