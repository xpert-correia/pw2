
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP</title>
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
	<script type="text/javascript" src="scripts/script.js" async></script>
</head>
<body>

<?php
$d = date("F");
if ($d == "August"){
	echo "Está mesmo calor";
}
else{
	echo "não está tanto calor como em agosto";
}
?>
	

</body>
</html>