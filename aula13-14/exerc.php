
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
$paises = array(   
            "city"=>"Tokyo",
            "pais"=>"Japan",
            "continente"=>"asia",
);


echo "<table border=1  color=red>";
echo "<tr>";
foreach($paises as $key => $value){

    echo "<td bgcolor=#aaaaff>". $key. "</td>";

}
echo "</tr>";
echo "<tr>";
foreach($paises as $key => $value){
    echo "<td>". $value."</td>";
}
echo "</tr>";
echo "</table>";



?>
	

</body>
</html>