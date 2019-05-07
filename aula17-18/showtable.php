
<!--show table lista de pessoas-->

<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Primeiro nome</th>
            <th>Ultimo nome</th>
            <th>Ano nascimento</th>
            <th>Eliminar</th>
            <th>Editar</th>
        </tr>
    </thead> 
    <tbody>


        <!--Use a while loop to make a table row for every DB row-->

        <?php
while ($row = $result->fetch_assoc()) {
?>
      <tr>
            <!--Each table column is echoed in to a td cell-->
            <td><?php
    echo $row['id'];
?></td>
            <td><?php
    echo $row['primeiro_nome'];
?></td>
            <td><?php
    echo $row['ultimo_nome'];
?></td>
            <td><?php
    echo $row['ano_nascimento'];
?></td>
            <td><a href="Index.php?eliminarID=<?php
    echo $row["id"];
?>">Eliminar</td>
            <td><a href="Index.php?editarID=<?php
    echo $row["id"];
?>">Editar</td>
        </tr>

        <?php
}
?>

</table>



