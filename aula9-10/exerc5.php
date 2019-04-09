
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

$cities = array("Tokyo","Mexico City","New York City","Mumbai","Seoul","Shanghai","Lagos","Buenos Aires","Cairo","London","Los Angeles","Calcutta","Osaka","Beijing");
rsort($cities);
foreach($cities as $value){
    echo $value.", ";
}
echo "<br>";
echo "<br>";
echo "<br>";
print_r($cities);
   
 


?>
	

</body>
</html>