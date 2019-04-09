


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
if (isset($_POST["name"])&&($_POST["lastname"])&&($_POST["anonascimento"])){
    $ano = $_POST["anonascimento"];
    $idade = 2019-$ano ;
    echo "<p> " . $_POST["name"]." ".$_POST["lastname"]." tem ". $idade ." anos"."</p>";
}
?>

	
</body>
</html>