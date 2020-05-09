<?php

namespace APP\Model;

use PDO;

class DAO
{
    private $CONNECTION = NULL;
    private $HOST = 'localhost';
    private $USUARIO = 'root';
    private $SENHA = '';
    private $PORTA = '3306';
    private $DBNAME = 'locadora';

    public function __construct()
    {
        $this->CONNECTION = new \PDO('mysql:host=' . $this->HOST . ';port=' . $this->PORTA . ';dbname=' . $this->DBNAME, $this->USUARIO, $this->SENHA);
        $this->CONNECTION->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function Exec($Query)
    {
        $Result = $this->CONNECTION->exec($Query);
        unset($this->CONNECTION);
        return $Result;
    }

    public function Query($Query)
    {
        $Result = $this->CONNECTION->query($Query);
        unset($this->CONNECTION);
        return $Result;
    }
}

?>