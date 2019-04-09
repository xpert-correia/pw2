
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


    function BMI($peso, $altura){
        $BMI = ($peso / ($altura * $altura));
        return $BMI;
    }


    echo "o seu BMI é " . BMI(80,1.72);



?>
	

</body>
</html>