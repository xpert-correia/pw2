
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP</title>
</head>
<body>


<?php


    function BMI($peso, $altura){
        $BMI = ($peso / ($altura * $altura));
        return $BMI;
    }

    echo "o seu BMI é " . BMI(31,1.42);

?>
	

</body>
</html>