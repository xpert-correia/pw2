
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
class Autor{
    public $name;
    public $email;
    public function __construct($name, $email){
        $this -> name = $name;
        $this -> email = $email;
    }

}


$contacts = array(
    array(
        "name" -> "joão Oliveira",
        "email"-> "joão@hotmail.com",
    ),
    array(
        "name" -> "Pedro",
        "email"-> "Pedro@hotmail.com",
    ),
    array(
        "name" -> "Henrique",
        "email"-> "Henrique@hotmail.com",
    )
);
/*
$n1 = new Autor("joão Oliveira","joão@hotmail.com");
$n2 = new Autor("Pedro","pedro@hotmail.com");
$autores =array($n1, $n2);
$livro1 = new livro("branca de neve",$autores,"15€00");
$livro2 = new livro("Pedrito coelho",$autores,"20€00");
$livros =array($livro1,$livro2);
*/
echo $n1 -> name . "<br>" . $n1 -> email. "<br>";
echo $autores[0]->name . "<br>";
echo $autores[1]->name . "<br>";
echo $livro1->name . "<br>";
echo $livro1->preço . "<br>";




?>
	

</body>
</html>