
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP</title>
</head>
<body>


<?php

/*
Os Números Primos são números naturais maiores do que 1 
que possuem somente dois divisores, ou seja, 
são divisíveis por 1 e por ele mesmo.

*/
    function isPrime($numero){
        $nDivisoesRestoZero = 0;
        for($i = 1; $i <= $numero; $i++){
            if($numero % $i == 0){
                $nDivisoesRestoZero++;
            }
        }
        if($nDivisoesRestoZero == 2){
            return true;

        }
    }

    function allPrimes($numero){
        for($i = 1; $i <= $numero; $i++){
            if(isPrime($i)){
                echo $i ."; ";
            }
        }
    }


  allPrimes(100);
 

?>
	

</body>
</html>