<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulario de inscrição</title>
  </head>
  <body>
    <h1>FORMULARIO PARA INSCRIÇÃO DE COMPETIDORES</h1>

    <form action="script.php" method="post">
      <?php
      $mensagemDeErro = isset($_SESSION['mensagem de erro']) ? $_SESSION['mensagem de erro'] : '';
      if(!empty($mensagemDeErro)) {
        echo $mensagemDeErro;
      }
      ?>
      <p>
        Your name:
        <input type="text" name="nome" minlength="3" maxlength="15" />
      </p>
      <p>Your age: <input type="text" name="idade" maxlength="3" /></p>
      <p><input type="submit" value="Enviar dados" /></p>
    </br>
    <?php
      $mensagemDeSucesso = isset($_SESSION['mensagem de sucesso']) ? $_SESSION['mensagem de sucesso'] : '';
      if(!empty($mensagemDeSucesso)) {
        echo $mensagemDeSucesso;
      }
      ?>
      <p>
    
    </form>
  </body>
</html>
