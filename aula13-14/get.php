
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
if (isset($_GET["name"])){
    echo "<p>HI, " . $_GET["name"]. "</p>";
}
?>

<form method="get" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <label for="inputname">Name:</label>
    <input type="text" name="name" id="inputName">
    <input type="submit" value="submit">
</form>
	
</body>
</html>