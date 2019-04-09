
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP</title>
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
	<script type="text/javascript" src="scripts/script.js" async></script>
</head>
<body>

<form method="get" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <label for="inputname">altura:</label>
    <input type="text" name="altura" id="inputaltura">
    <label for="inputname">peso:</label>
    <input type="text" name="peso" id="inputpeso">
    <input type="submit" value="submit">
</form>

<?php

if (isset($_GET["altura"]) && ($_GET["peso"]))

{
    $altura= $_GET["altura"];
    $peso= $_GET["peso"];
    $BMI = ($peso/ ($altura*$altura));
    echo "<br>";
    echo "<p> O seu indice corporal é " . $BMI."</p>";
    echo "<br>";
    } else
    { 
        echo "<br>";
        echo "preencha os dados";
        echo "<br>";
}

/*
$altura= $_REQUEST["altura"];
$peso= $_REQUEST["peso"];

class calculator{
    function BMI($peso, $altura){
        $BMI = ($peso / ($altura * $altura));
        return $BMI;
    }
}

$mycalculator = new calculator();



echo "o seu BMI é " . $mycalculator -> BMI($peso,$altura);
*/
?>



	
</body>
</html>