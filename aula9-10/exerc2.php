
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
$item = array("A","B","C","D","E","F");
echo "<ol>";
foreach($item as $value){
    echo "<li>".$value."</li>";
}
echo "</ol>";


?>
	

</body>
</html>