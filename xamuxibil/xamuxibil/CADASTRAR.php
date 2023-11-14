<?php
    require("conecta.php");

    $RA = $_POST['RA'];
    $NOME = $_POST['NOME'];
    $PROBLEMA_ID =  $_POST['PROBLEMA_ID'];
    $DESCRICAO = $_POST['DESCRICAO'];
    $SALA = $_POST['SALA'];
  
    

    $sql = "INSERT INTO CHAMADOS (RA, NOME, PROBLEMA_ID, DESCRICAO, SALA)
    VALUES ('$RA', '$NOME', '$PROBLEMA_ID', '$DESCRICAO', '$SALA')";

    if ($conn->query($sql) === TRUE) {
      echo "<center><h1>Registro Inserido com Sucesso</h1>";
      echo "<a href='index.html'><input type='button' value='Voltar'></a></center>";
    } else {
      echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
?>