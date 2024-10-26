<?php

class Especie
{
    public $codigo;
    public $nome;


    public function __construct($Codigo = null, $Nome = null)
    {
        $this->codigo = $Codigo;
        $this->nome = $Nome;
    }
}
