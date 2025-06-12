<?php

class database{

    private string $host = 'localhost';
    private string $dbname = 'garage_db';
    private string $username = 'root'; // utilisateur par defaut
    private string $password = ''; // Mot depasse par default
    public ?PDO $conn = null;

    public function getconnection() {
        $bins->$conn=null;
        try {
            $this ->conn new PDO("mysql:host=" . $this->$host . "db_name=" $this->$dbname, $this->username, $this->$password);
            // On configure le mode erreur du PDO sur exepetion
            $this->conn->attribute(PDO:: ATTR_ERRORMODE, ERRORMODE_EXCEPTION);
        }

        catch () {

        }
    }
}

