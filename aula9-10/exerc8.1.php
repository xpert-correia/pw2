
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
        array(
            "city"=>"Tokyo",
            "pais"=>"Japan",
            "continente"=>"asia",
        ),
        array(
            "city"=>"Mexico City",
            "pais"=>"Mexico",
            "continente"=>"america",
		),
		array(
            "city"=>"New York City",
            "pais"=>"USA",
            "continente"=>"america",
        )
        );
   //     ""=>"Mexico",""=>"USA","Mumbai"=>"India","Seoul"=>"Korea","Shanghai"=>"China","Lagos"=>"Nigeria","Buenos Aires"=>"Argentina","Cairo"=>"Egipto","London"=>"England");
/*
   echo $paises[0]["city"];
   echo $paises[0]["pais"];
   echo $paises[0]["continente"]. "<br>";
   echo $paises[1]["city"];
   echo $paises[1]["pais"];
   echo $paises[1]["continente"]. "<br>";
/*
   var_dump($paises);

   print_r($paises)."<br>";
/*
   echo "<table>";
    foreach ($paises as $value) {
    echo "<tr><td>" . $value[0] . "</td>";
    echo "<td>" . $value[1] . "</td>";
    echo "<td>" . $value[2] . "</td></tr>";
    }
echo "</table>";
*/

foreach($paises as $key => $cidades){
    foreach($cidades as $lol => $val){
        echo $val . "val<br>";
    }
    echo "<br>";
    
}


?>
	

</body>
</html>