
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

class Utilizador{
    public $Username;
    public $Password;
    public function __construct($Username, $Password){
        $this -> Username = $Username;
        $this -> Password = $Password;
    }

}


$utilizador1 = new Utilizador( "Henrique" ,"123");
$utilizador2 = new Utilizador( "Pedro" ,"admin");

$utilizadores = array($utilizador1,$utilizador2);

/*var_dump($_GET);*/
if ($_GET["Username"] && $_GET["Password"]){
    foreach ($utilizadores as $utilizador) {
        if($utilizador->Username == $_GET["Username"]
        && $utilizador->Password == $_GET["Password"]){
            echo "Login!";
        }else{
            $novoUtilizador = new Utilizador( "Pedro" ,"admin");
            array_push($utilizadores, $novoUtilizador);
            echo "Utilizador registado!";
            break;
        }
    }
}

?>
	
</body>
</html>