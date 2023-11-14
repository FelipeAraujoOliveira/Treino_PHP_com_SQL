<?php

require("conecta.php");


$PROBLEMA =  $_POST['PROBLEMA'];

$sql = "UPDATE CHAMADOS SET RESOLVIDO = 1
WHERE PROBLEMA_ID = ($I - 1)
VALUES ('$DESCRICAO')";

if ($conn->query($sql) === TRUE) {
} else {
  echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
}



if (isset($_POST['1'])) {
  while ($I != $dado[6]) {
      require("conecta.php");
      $I += 1;
      $sql = "UPDATE CHAMADOS SET RESOLVIDO = 1 WHERE ID = $I";

      if ($conn->query($sql) === TRUE) {
      } else {
          echo "<h3> OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
      }
  }
}


while ($row = $result1->fetch_assoc()) {
  if (isset($_POST[$I])) {
      $sql = "SELECT ID, RESOLVIDO FROM CHAMADOS";
      $result = $conn->query($sql);
      $I = 1;
      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              $sql = "UPDATE CHAMADOS SET RESOLVIDO = 1 WHERE ID = $B";
              $I += 1;
              $conn->query($sql) === TRUE;
  $I += 1;
          }
      }
  }
}


echo '<td> <form action="" method="post">
                        <input type="submit" name="' . $B . '"
                                value="Resolvido"/> </td>';





if ($dado[5] == 0) {
  echo '<td>Não resolvido</td>';
}

echo '<td> <form action="" method="post">
      <input type="submit" name="I"
              value="Resolvido"/> </td>';
echo '</tr>';


$I = 1;
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    if (isset($_POST['I'])) {
                        $sql = "SELECT ID, RESOLVIDO FROM CHAMADOS";
                        $result = $conn->query($sql);
                        echo $B + 1;
                        $sql = "UPDATE CHAMADOS SET RESOLVIDO = 1 WHERE ID = ($B+1)";
                        $conn->query($sql) === TRUE;
                        $B += 1;
                        break;
                    }
                }
            }
?>