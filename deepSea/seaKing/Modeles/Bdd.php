<?php 

namespace Modeles;
use PDO;
use Modeles\Entities\Comptes;
use Modeles\Entities\Contact;

abstract class Bdd{

    public static function pdo(){
        return new \PDO("mysql:host=127.0.0.1:3306;dbname=projet_fil_rouge_b1dev", "root", "", [PDO::ATTR_ERRMODE => PDO::ERRMODE_SILENT]);
    }

    public static function select(string $table){
        $pdostatement = self::pdo()->query("SELECT * FROM $table");
        return $pdostatement->fetchAll(PDO::FETCH_CLASS, "Modeles\Entities\\" . ucfirst($table));
    }

    public static function selectById(string $table, int $id){
        $pdostatement = self::pdo()->query("SELECT * FROM $table WHERE id = " . $id);
        $pdostatement->setFetchMode(PDO::FETCH_CLASS, "Modeles\Entities\\" . ucfirst($table));
        return $pdostatement->fetch();
    }

    public static function insertComptes(Comptes $comptes){
        $textRequete = "INSERT INTO comptes (mail, mdp) VALUES (:mail, :mdp)";
        $pdostatement = self::pdo()->prepare($textRequete);
        $pdostatement->bindValue(":mail", $comptes->getMail());
        $pdostatement->bindValue(":mdp", $comptes->getMdp());
        return $pdostatement->execute();
    }

    public static function updateComptes(Comptes $comptes){
        $textRequete = "UPDATE comptes SET mail = :mail, mdp = :mdp";
        $pdostatement = self::pdo()->prepare($textRequete);
        $pdostatement->bindValue(":mail", $comptes->getMail());
        $pdostatement->bindValue(":mdp", $comptes->getMdp());
        return $pdostatement->execute();
    }

    public static function deleteComptes(Comptes $comptes){
        return self::pdo()->exec("DELETE FROM comptes WHERE id = " . $comptes->getId());
    }

    public static function insertContact(Contact $contact){
        $textRequete = "INSERT INTO comptes (nom, prenom, mail, sujet, demande) VALUES (:nom, :prenom, :mail, :sujet, :demande)";
        $pdostatement = self::pdo()->prepare($textRequete);
        $pdostatement->bindValue(":nom", $contact->getNom());
        $pdostatement->bindValue(":prenom", $contact->getPrenom());
        $pdostatement->bindValue(":mail", $contact->getMail());
        $pdostatement->bindValue(":sujet", $contact->getSujet());
        $pdostatement->bindValue(":demande", $contact->getdemande());
        return $pdostatement->execute();
    }

    public static function updateContact(Contact $contact){
        $textRequete = "UPDATE comptes SET nom = :nom, prenom = :prenom, mail = :mail, sujet = :sujet, demande = :demande";
        $pdostatement = self::pdo()->prepare($textRequete);
        $pdostatement->bindValue(":nom", $contact->getNom());
        $pdostatement->bindValue(":prenom", $contact->getPrenom());
        $pdostatement->bindValue(":mail", $contact->getMail());
        $pdostatement->bindValue(":sujet", $contact->getSujet());
        $pdostatement->bindValue(":demande", $contact->getdemande());
        return $pdostatement->execute();
    }

    public static function deleteContact(Contact $contact){
        return self::pdo()->exec("DELETE FROM contact WHERE id = " . $contact->getId());
    }
}

?>