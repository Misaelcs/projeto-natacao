<?php

 $categories = [];
 $categories[] = 'infantil';
 $categories[] = 'adolescente';
 $categories[] = 'adulto';
 $categories[] = 'idoso';

// print_r($categories);

$nome = 'Eduardo';
$idade = 8;

// var_dump($idade);
// var_dump($nome);

if($idade >=6 && $idade <=12) {
  for($i =0; $i <= count($categories); $i++){
    if($categories[$i] == 'infantil')
    echo "O nadador ".$nome. " compete na categoria infantil";
  }
} else if($idade >= 13 && $idade < 18) {
  for($i =0; $i <= count($categories); $i++){
    if($categories[$i] == 'adolescente')
    echo "O nadador ".$nome. " compete na categoria adolescente";
  }
}
else if($idade >= 18) {
  for($i =0; $i <= count($categories); $i++){
    if($categories[$i] == 'adulto')
    echo "O nadador ".$nome. " compete na categoria adulto";
  }
} else {
  echo "Idade invalida";
}

?>