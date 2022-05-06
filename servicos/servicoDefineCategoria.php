<?php



function defineCategoria(string $nome, string $idade) 
{
    $categories = [];
    $categories[] = 'infantil';
    $categories[] = 'adolescente';
    $categories[] = 'adulto';
    $categories[] = 'idoso';

    if(validaNome($nome) && validaIdade($idade))
    {
        removeMensagemErro();
        if($idade >=6 && $idade <=12) {
            for($i =0; $i <= count($categories); $i++) {
              if($categories[$i] == 'infantil') {
                setMensagemSucesso("O(a) nadador(a) ".$nome. " competirá na categoria ".$categories[$i].".");
                return null;
              }
            }
          } else if($idade >= 13 && $idade < 18) {
            for($i =0; $i <= count($categories); $i++) {
              if($categories[$i] == 'adolescente') {
                setMensagemSucesso("O(a) nadador(a) ".$nome. " competirá na categoria ".$categories[$i].".");
                return null;
              }
            }
          } else if($idade >= 18){
            for($i =0; $i <= count($categories); $i++){
              if($categories[$i] == 'adulto') {
                setMensagemSucesso("O(a) nadador(a) ".$nome. " competirá na categoria ".$categories[$i].".");
                return null;
              }
            }
          }
    }
    else
    {
        removeMensagemSucesso();
        return obterMensagemErro();
    }
};