<!DOCTYPE html>
<html lang="pt/br">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problemas Resolvidos</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="navbar">
        <li><a class="itens" href="index.html">Home</a></li>
        <li><a class="itens" href="FORMS.php">Cadastrar</a></li>
        <li><a class="itens" href="ADM.php">Resolver</a></li>
        <li><a class="itens" href="RESOLVIDOS.php">Resolvidos</a></li>
        <li><a class="itens" href="PESQUISA.PHP">Pesquisa</a></li>
    </div>
    <center>
        <h1>Problemas Resolvidos</h1>

        <table border="4">
            <tr>
            <td>RA</td>
                <td>PROBLEMA</td>
                <TD>SALA</TD>
                <TD>DESCRIÇÃO</TD>
                <td>CADASTRADO EM</td>
                <td>RESOLVIDO EM</td>
            </tr>
            <?php
            $B = 1;
            $I = 1;
            require("conecta.php");
            $sql = "SELECT RA, NOME, PROBLEMA, DESCRICAO, SALA, RESOLVIDO, ID, DATECAD, DATERESOL FROM CHAMADOS 
            INNER JOIN PROBLEMAS 
            ON CHAMADOS.PROBLEMA_ID = PROBLEMAS.PROBLEMA_ID where RESOLVIDO = 1";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
                    echo '<td>' . $row["RA"] . '</td>';
                    echo '<td>' . $row["PROBLEMA"] . '</td>';
                    echo '<td>' . $row["SALA"] . '</td>';
                    echo '<td>' . $row["DESCRICAO"] . '</td>';
                    echo '<td>' . $row["DATECAD"] . '</td>';
                    if ($row["DATERESOL"] == null) {
                        echo '<td> Não resolvido </td>';
                    } else {
                        echo '<td>' . $row["DATERESOL"] . '</td>';
                    }

                    echo '<td> <form action="" method="post">';
                    echo '<input type="hidden" name="id_chamado" value="' . $row["ID"] . '" />';
                    echo '<input type="submit" name="resolver" value="Desfazer"/>';
                    echo '</form> </td>';
                    
                    echo '</tr>';
                }
                if (isset($_POST['resolver']) && isset($_POST['id_chamado'])) {
                    $id_chamado = $_POST['id_chamado'];
                    $sql_update = "UPDATE CHAMADOS SET RESOLVIDO = 0 WHERE ID = $id_chamado";
                    
                    if ($conn->query($sql_update) === TRUE) {
                        header("Refresh: 0");
                    } else {
                        echo "👎";
                    }
                }
            }

            ?>
        </table>
        <br />
        <a href="index.html"><input type="button" value="Voltar"></a>
    </center>
</body>

</html>