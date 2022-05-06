<?php

function validaNome(string $nome) : bool 
{
	if(empty($nome))
	{
		setMensagemErro("O nome deve ser preenchido.");
		return false;
	}
	else if(strlen($nome) < 3)
	{
		setMensagemErro("O nome deve ser maior que 3 caracteres.");
		return false;
	}
	else if(strlen($nome) > 30)
	{
		setMensagemErro("O nome deve ser menor que 30 caracteres.");
		return false;
	}
	return true;
};

function validaIdade(string $idade) : bool
{
	if(empty($idade))
	{
		setMensagemErro("A idade deve ser preenchida");
		return false;
	}
	else if(!is_numeric($idade))
	{
		setMensagemErro("A idade deve ser um numero.");
		return false;
	}
	else if($idade < 6)
	{
		setMensagemErro("O competidor deve ter mais de 6 anos.");
		return false;
	}
	return true;
};

