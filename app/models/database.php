<?php

class Database
{
    public static function connect(): PDO
    {
        return new PDO(
            "mysql:host=localhost;dbname=covoiturage;charset=utf8",
            "root",
            "",
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );
    }
}
