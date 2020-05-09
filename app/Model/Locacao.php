<?php

namespace APP\Model;

class Locacao
{

    /**
     * @var string
     */
    private string $nomeLocatario;
    /**
     * @var string
     */
    private string $modeloVeiculo;
    /**
     * @var string
     */
    private string $marcaVeiculo;
    /**
     * @var string
     */
    private string $anoModeloVeiculo;
    /**
     * @var string
     */
    private string $anoFabricacaoVeiculo;
    /**
     * @var string
     */
    private string $placaVeiculo;

    /**
     * @param $atributo
     * @return mixed
     */
    public function __get($atributo)
    {
        return $this->$atributo;
    }

    /**
     * @param $atributo
     * @param $valor
     */
    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }
}

