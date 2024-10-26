<?php

class Animal
{
    public   $Codigo;
    public   $Nome;
    public   $Especie;

    public function __construct($codigo_animal = null, $nome_animal = null, Especie $codigo_especie = null)
    {
        $this->Codigo = $codigo_animal;
        $this->Nome = $nome_animal;

        if ($codigo_especie != null)
            $this->Especie = $codigo_especie;
        else
            $this->Especie = new Especie();
    }
}
