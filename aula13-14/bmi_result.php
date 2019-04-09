


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
if (isset($_GET["altura"]) && ($_GET["peso"])){
    $altura= $_GET["altura"];
    $peso= $_GET["peso"];
    $BMI = ($peso/ ($altura*$altura));
    echo "<p> " . $BMI."</p>";
}
?>

	
</body>
</html>