<?php

class conexao
{

    public static $conn;

    private function __construct()
    {
        //
    }


    public static function getConexao()
    {
        if (!isset(self::$conn)) {
            self::$conn = new PDO('mysql:host=localhost;dbname=bdsermae_upd', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$conn->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
        }

        return self::$conn;
    }


}
