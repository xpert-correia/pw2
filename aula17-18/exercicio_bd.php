<?php
$mysqli = new mysqli("localhost", "root", "", "pw2");

// check conection
if ($mysqli === false) {
    die("error: could not connect." . $mysqli_connect_error());
}

if (isset($_REQUEST["primeiro_nome"]) && $_REQUEST["ultimo_nome"] && $_REQUEST["ano_nascimento"]) {
    //Escape user input for security
    $primeiro_nome  = mysqli_real_escape_string($mysqli, $_REQUEST['primeiro_nome']);
    $ultimo_nome    = mysqli_real_escape_string($mysqli, $_REQUEST['ultimo_nome']);
    $ano_nascimento = mysqli_real_escape_string($mysqli, $_REQUEST['ano_nascimento']);
    
    
    // attemp insert query execution
    $sql = "INSERT INTO pessoas (primeiro_nome, ultimo_nome,ano_nascimento) VALUES ('$primeiro_nome', '$ultimo_nome','$ano_nascimento')";
    if ($mysqli->query($sql)) {
        echo "record inserted successfully.";
    } else {
        echo "errror: could not able to execute $sql. " . $mysqli->error;
    }
}

// eliminar

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

// editar

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
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<body>
    <form  action="tp2.php" method="post">
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
        <br>
        <input type="submit" value="Inserir">
        <input type="submit" value="Guardar">
        <br>

    </form>


    <script src="script.js"></script>

    
</body>
</html>