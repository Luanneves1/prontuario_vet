<?php

class Prontuario
{

    public $Animal;
    public $Tratamento;
    public $dataTratamento;
    public $Descricao;


    function __construct(Animal $codigo_animal = null, $codigo_Tratamento = null, $data = null, $descricao = null)
    {
        $this->Animal = $codigo_animal;
        $this->Tratamento = $codigo_Tratamento;
        $this->dataTratamento = $data;
        $this->Descricao = $descricao;
    }
}
