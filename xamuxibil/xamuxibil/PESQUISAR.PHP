<!DOCTYPE html>
<html lang="pt/br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa</title>
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
        <h1>Problemas Cadastrados</h1>

        <table border="4">
            <tr>
                <td>RA</td>
                <td>NOME</td>
                <td>PROBLEMA</td>
                <TD>DESCRIÇÃO</TD>
                <TD>SALA</TD>
                <TD>STATUS</TD>
                <td>CADASTRADO EM</td>
                <td>RESOLVIDO EM</td>
            </tr>
            <?php
            require("conecta.php");

            $RA = $_POST['RA'];

            require("conecta.php");
            $sql = "SELECT RA, NOME, PROBLEMA, DESCRICAO, SALA, RESOLVIDO, ID, DATECAD, DATERESOL FROM CHAMADOS 
            INNER JOIN PROBLEMAS 
            ON CHAMADOS.PROBLEMA_ID = PROBLEMAS.PROBLEMA_ID
            where RA = $RA";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
                    echo '<td>' . $row["RA"] . '</td>';
                    echo '<td>' . $row["NOME"] . '</td>';
                    echo '<td>' . $row["PROBLEMA"] . '</td>';
                    echo '<td>' . $row["DESCRICAO"] . '</td>';
                    echo '<td>' . $row["SALA"] . '</td>';
                    if ($row['RESOLVIDO'] == '0') {
                        echo '<td>' . 'Não resolvido' . '</td>';
                    } else {
                        echo '<td>' . 'Resolvido' . '</td>';
                    }
                    echo '<td>' . $row["DATECAD"] . '</td>';
                    if ($row['DATERESOL'] == NULL || $row['RESOLVIDO'] == '0') {
                        echo '<td>' . 'Não resolvido' . '</td>';
                    } else {
                        echo '<td>' . $row["DATERESOL"] . '</td>';
                    }
                    echo '</tr>';
                }
            }


            ?>
        
        
        </table>
        <br />
        <a href="index.html"><input type="button" value="Voltar"></a>
    </center>
</body>

</html>