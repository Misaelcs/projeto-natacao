<?php

session_start();

// mensagens de erro
function setMensagemErro(string $mensagem) : void
{
    $_SESSION['mensagem de erro'] = $mensagem;
};

function obterMensagemErro() : ?string
{
    if(isset($_SESSION['mensagem de erro']))
        return $_SESSION['mensagem de erro'];

        return null;
};

// mensagens de sucesso
function setMensagemSucesso(string $mensagem) : void
{
    $_SESSION['mensagem de sucesso'] = $mensagem;
};

function obterMensagemSucesso() : ?string
{
    if(isset($_SESSION['mensagem de sucesso']))
        return $_SESSION['mensagem de sucesso'];

        return null;
};

function removeMensagemErro() : void
{
    if(isset($_SESSION['mensagem de erro']))
        unset($_SESSION['mensagem de erro']);
}

function removeMensagemSucesso() : void
{
    if(isset($_SESSION['mensagem de sucesso']))
        unset($_SESSION['mensagem de sucesso']);
}