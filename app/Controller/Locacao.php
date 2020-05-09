<?php

namespace Controller;

use APP\Model\DAO;
use APP\Model\Locacao;
use APP\Model\Validacao;

require "../../vendor/autoload.php";

session_start();

$erros = array();

// Validação
if (!Validacao::validarString($_POST["nomeLocatario"])) // Entra se inválido
    array_push($erros, "Nome do locatário inválido!");

if (!Validacao::validarString($_POST["modeloVeiculo"]))
    array_push($erros, "Modelo do veículo inválido!");

if (!Validacao::validarString($_POST["marcaVeiculo"]))
    array_push($erros, "Marca do veículo inválida!");

if (!Validacao::validarNumeroInteiro($_POST["anoModeloVeiculo"]))
    array_push($erros, "Ano modelo do veículo inválido!");

if (!Validacao::validarNumeroInteiro($_POST["anoFabricacaoVeiculo"]))
    array_push($erros, "Ano fabricação do veículo inválido!");

if (!Validacao::validarString($_POST["placaVeiculo"]))
    array_push($erros, "Placa do veículo inválida!");

if (count($erros) > 0) {
    $_SESSION["Erros"] = $erros;
    header("location:../index.php");
} else
    cadastrar($_POST);

function cadastrar($dados)
{
    $locacao = new Locacao();
    $locacao->nomeLocatario = $dados["nomeLocatario"];
    $locacao->modeloVeiculo = $dados["modeloVeiculo"];
    $locacao->marcaVeiculo = $dados["marcaVeiculo"];
    $locacao->anoModeloVeiculo = $dados["anoModeloVeiculo"];
    $locacao->anoFabricacaoVeiculo = $dados["anoFabricacaoVeiculo"];
    $locacao->placaVeiculo = $dados["placaVeiculo"];
    $dao = new DAO();
    $query = "INSERT INTO locacoes (nomelocatario,modeloveiculo,marcaveiculo,anomodeloveiculo,anofabricacaveiculo,placaveiculo) VALUES ('{$locacao->nomeLocatario}','{$locacao->modeloVeiculo}','{$locacao->marcaVeiculo}','{$locacao->anoModeloVeiculo}','{$locacao->anoFabricacaoVeiculo}','{$locacao->placaVeiculo}');";
    $resultado = $dao->exec($query);
    if ($resultado > 0) {
        $_SESSION["Mensagem"] = "Cadastro realizado com sucesso!!!";
        header("location:../index.php");
    } else {
        $_SESSION["Mensagem"] = "Não foi possível realizar o cadastro!!!";
        header("location:../index.php");
    }
}
