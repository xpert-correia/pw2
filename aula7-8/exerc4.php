
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
$a = 8;
echo "Value is now ".$a;
echo "<br>";
echo "add2.Value is now ".$a +=2;
echo "<br>";
echo "Substract4.Value is now ".$a -=4;
echo "<br>";
echo "Multiply by 5.Value is now ".$a *=5;
echo "<br>";
echo "Divide by 3.Value is now ".$a /=3;
echo "<br>";
echo "Increment by one.Value is now ".++$a;
echo "<br>";
echo "Decrement by one.Value is now ".--$a;
?>
	

</body>
</html>