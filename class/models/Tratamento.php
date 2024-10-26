<?php

class Tratamento
{

    public $Codigo;
    public $Nome;
    public $Descricao;

    function __construct($codigo_Tratamento = null, $nome_Tratamento = null, $descricao_Tratamento = null)
    {
        $this->Codigo = $codigo_Tratamento;
        $this->Nome = $nome_Tratamento;
        $this->Descricao = $descricao_Tratamento;
    }
}
