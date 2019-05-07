<?php

require "bdconection.php";


if (isset($_REQUEST["primeiro_nome"]) && $_REQUEST["ultimo_nome"] && $_REQUEST["ano_nascimento"]) {
    //Inserir

    //Escape user input for security
    $primeiro_nome  = mysqli_real_escape_string($mysqli, $_REQUEST['primeiro_nome']);
    $ultimo_nome    = mysqli_real_escape_string($mysqli, $_REQUEST['ultimo_nome']);
    $ano_nascimento = mysqli_real_escape_string($mysqli, $_REQUEST['ano_nascimento']);
    
    if(isset($_GET["editarID"])){
        //TODO: UPDATE

        $sql = "UPDATE pessoas SET primeiro_nome = $primeorNome, ... WHERE ID = ".$_GET["editarID"];

        header("Location: Index.php");
    }else{
        // attemp insert query execution
        $sql = "INSERT INTO pessoas (primeiro_nome, ultimo_nome,ano_nascimento) VALUES ('$primeiro_nome', '$ultimo_nome','$ano_nascimento')";
        if ($mysqli->query($sql)) {
            echo "record inserted successfully.";
        } else {
            echo "errror: could not able to execute $sql. " . $mysqli->error;
        }
    }
    
}

// Eliminar 

if (isset($_GET['eliminarID'])) {
    $sql = "DELETE FROM pessoas WHERE id=" . $_GET['eliminarID'];
    mysqli_query($mysqli, $sql);
}
$sql = "SELECT * FROM pessoas";

if ($result = mysqli_query($mysqli, $sql)) {
    echo "";
} else {
    echo "erro" . mysqli_error($mysqli);
}

// Editar

if (isset($_GET['editarID'])) {
    $sql          = "SELECT * FROM pessoas WHERE id=" . $_GET['editarID'];
    $editarPessoa = mysqli_query($mysqli, $sql)->fetch_assoc();
}


// close connection
$mysqli->close();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Base de dados</title>
</head>
<body>

    <?php
            if(isset($_GET["editarID"])){
                $action = "Index.php?editarID=".$_GET["editarID"];
            }else{
                $action = "Index.php";
            }
    ?>
    <form action="<?php echo $action; ?>" method="post">
        <fieldset>
        <legend>User profile</legend>
        <label for="Primeiro nome">Primeiro nome</label>
        <input type="text" id="Primeiro nome" name="primeiro_nome" value="<?php
if (isset($_GET['editarID'])) {
    echo $editarPessoa['primeiro_nome'];
}
?>">
        <br>
        <br>
        <label for="ultimo_nome">ultimo nome</label>
        <input type="text" id="ultimo_nome" name="ultimo_nome"
         value="<?php
if (isset($_GET['editarID'])) {
    echo $editarPessoa['ultimo_nome'];
}
?>">
        <br>
        <br>
        <label for="Ano_Nascimento">Ano de Nascimento</label>
        <input type="text" id="Ano_Nascimento" name="ano_nascimento"
        value="<?php
if (isset($_GET['editarID'])) {
    echo $editarPessoa['ano_nascimento'];
}
?>">
        <br>
            </fieldset>
        <br>
        <input type="submit" value="Guardar">
        <br>
        <br>


    </form>

    
</body>
</html>