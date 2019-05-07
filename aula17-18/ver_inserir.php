<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Base de dados</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<body>
    <form  action="ver_inserir.php" method="post">
        <label for="Primeiro nome">Primeiro nome</label>
        <input type="text" id="Primeiro nome" name="primeiro_nome">
        <br>
        <br>
        <label for="ultimo_nome">ultimo nome</label>
        <input type="text" id="ultimo_nome" name="ultimo_nome">
        <br>
        <br>
        <label for="Ano_Nascimento">Ano de Nascimento</label>
        <input type="text" id="Ano_Nascimento" name="ano_nascimento">
        <br>
        <br>
        <input type="submit" value="Submit">
        <br>
        <br>
        <br>

    </form>


    <script src="script.js"></script>


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
    
    
    // atttemp insert query execution
    $sql = "INSERT INTO pessoas (primeiro_nome, ultimo_nome, ano_nascimento) VALUES ('$primeiro_nome', '$ultimo_nome','$ano_nascimento')";
    if ($mysqli->query($sql)) {
        echo "record inserted successfully.";
    } else {
        echo "errror: could not able to execute $sql. " . $mysqli->error;
    }
}


//show table lista de pessoas

echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Primeiro nome</th><th>Ultimo nome</th><th>Ano nascimento</th><th>Eliminar</th></tr>";

class TableRows extends RecursiveIteratorIterator
{
    function __construct($it)
    {
        parent::__construct($it, self::LEAVES_ONLY);
    }
    
    function current()
    {
        return "<td style='width:100px;border:1px solid black;'>" . parent::current() . "</td>";
    }
    
    function beginChildren()
    {
        echo "<tr>";
    }
    
    function endChildren()
    {
        echo "</tr>" . "\n";
    }
}


$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "pw2";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id, primeiro_nome, ultimo_nome, ano_nascimento FROM pessoas");
    $stmt->execute();
    
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach (new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) {
        echo $v;
    }
}
catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";


// close connection
$mysqli->close();


?>

<form action="del.php" method="post">
<label for="id">ID</label>
<input type="text" id="id" name="id">
<input type="submit" value="Eliminar">
</form>

    
</body>
</html>