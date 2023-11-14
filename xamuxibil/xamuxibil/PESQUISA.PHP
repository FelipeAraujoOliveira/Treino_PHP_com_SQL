<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisar</title>
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
        <h1>Pesquisar</h1>


        <form method="POST" action="PESQUISAR.php"> RA: <input type="number" name="RA">
            <input type="submit" value="PESQUISAR">
        </form>
        <br>
    <a href="index.html"><input type="button" value="Voltar"></a>
    </center>
   
</body>

</html>