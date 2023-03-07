<?php 

namespace VerifForm;
use PDO;

abstract class Bdd{

    public static function pdo(){
        return new \PDO("mysql:host=127.0.0.1:3306;dbname=projet_fil_rouge_b1dev", "root", "", [PDO::ATTR_ERRMODE => PDO::ERRMODE_SILENT]);
    }
}

?>