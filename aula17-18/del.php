<?php
 $mysqli = new mysqli("localhost", "root", "","pw2");

 // check conection
 if ($mysqli === false){
     die("error: could not connect.". $mysqli_connect_error());
 }

 //Escape user input for security
 $id = mysqli_real_escape_string($mysqli, $_REQUEST['id']);



 // atttemp insert query execution
 $sql = "DELETE FROM pessoas WHERE id=$id";
 if($mysqli->query($sql)){
     echo "record inserted successfully.";
 }else{
     echo "errror: could not able to execute $sql. ".$mysqli->error;
 }


 // close connection
 $mysqli->close();

?>
