
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

echo "<table border=1>";
	$i = 1;
	$j = 1;
	for($i=1;$i<=7;$i++){
		echo "<tr>";
		for($j=1;$j<=7;$j++){
			echo "<td>";
				echo ($i*$j);
			echo "</td>";
		}

		echo "</tr>";
	}
echo "</table>";
 


?>
	

</body>
</html>