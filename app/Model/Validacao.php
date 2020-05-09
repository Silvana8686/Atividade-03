<?php
namespace APP\Model;
final class Validacao
{
    public static function validarString($String)
    {
        return strlen($String) >= 2 && !is_numeric($String);
    }

    public static function validarNumeroInteiro($Numero)
    {
        return preg_match("/^[0-9]{1,}$/", $Numero);
    }

    public static function validarAlphaNumerico($Texto)
    {
        return strlen($Texto) >= 2;
    }

    public static function validarPlaca($Placa)
    {
        return preg_match('/^([A-Z]{3})\-([0-9]{4})$/', $Placa);
    }
}

?>