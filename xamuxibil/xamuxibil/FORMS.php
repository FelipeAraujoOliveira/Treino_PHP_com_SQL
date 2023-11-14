<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Problema</title>
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
        <h1>CADASTRO DE CLIENTE</h1>
        <form method="POST" action="CADASTRAR.php">
            <table>
                <tr>
                    <td>RA: <input type="number" name="RA"></td>
                    <td>NOME: <input type="text" name="NOME"></td>
                    <?php
                        require("conecta.php");

                        $dados_select = mysqli_query($conn, "SELECT PROBLEMA_ID, problema FROM problemas");

                        echo "<td>PROBLEMA: <select name='PROBLEMA_ID'>";
                        while($dado = mysqli_fetch_array($dados_select)) {
                            echo '<option value='.$dado[0].'>'.$dado[1].'</option>';
                        }
                        echo "</select></td>";
                    ?>
                    <td>DESCRIÇÃO: <input type="text" name="DESCRICAO"></td>
                    <td>SALA: <input type="text" name="SALA"></td>
                </tr>
            </table>
            <input type="submit" value="Cadastrar">
            <input type="reset" value="Limpar">
            <a href="index.html"><input type="button" value="Voltar"></a>
        </form>
    </center>
</body>
</html>
