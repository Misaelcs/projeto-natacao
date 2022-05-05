<?php

session_start();

 $categories = [];
 $categories[] = 'infantil';
 $categories[] = 'adolescente';
 $categories[] = 'adulto';
 $categories[] = 'idoso';

// print_r($categories);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)) {
  $_SESSION['mensagem de erro'] = "O nome deve ser preenchido.";
  header('location: index.php');
  return;
} else if(empty($idade)) {
  $_SESSION['mensagem de erro'] = "A idade deve ser preenchida";
  header('location: index.php');
  return;
} else if(!is_numeric($idade)) {
  $_SESSION['mensagem de erro'] = "A idade deve ser um numero.";
  header('location: index.php');
  return;
};
//var_dump($idade);
//var_dump($nome);


if($idade >=6 && $idade <=12) {
  for($i =0; $i <= count($categories); $i++) {
    if(isset($categories[$i]) == 'infantil') {
      $_SESSION['mensagem de sucesso'] = "O nadador ".$nome. " compete na categoria ".$categories[$i];
      header('location: index.php');
      return;
    }
  }
} else if($idade >= 13 && $idade < 18) {
  for($i =0; $i <= count($categories); $i++) {
    if(isset($categories[$i]) == 'adolescente') {
      $_SESSION['mensagem de sucesso'] = "O nadador ".$nome. " compete na categoria adolescente";
      header('location: index.php');
      return;
    }
  }
} else if($idade >= 18){
  for($i =0; $i <= count($categories); $i++){
    if(isset($categories[$i]) == 'adulto') {
      $_SESSION['mensagem de sucesso'] = "O nadador ".$nome. " compete na categoria adulto";
      header('location: index.php');
      return;
    }
  }
} else {
      $_SESSION['mensagem de erro'] = "Apenas crianças maiores de 6 anos podem competir";
      header('location: index.php');
      return;
};

?>