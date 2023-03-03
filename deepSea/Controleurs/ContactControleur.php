<?php

namespace Controleurs;

use Modeles\Bdd;
use Modeles\Entities\Contact;

class ContactControleur{
    public function liste(){
        $contacts = Bdd::select("contact");

        include "vue/affichage.php";
    }

    public function ajouter(){
        if($_POST){
            $c = new Contact;
            $c->setNom($_POST["nom"]);
            $c->setPrenom($_POST["prenom"]);
            $c->setMail($_POST["mail"]);
            $c->setSujet($_POST["sujet"]);
            $c->setDemande($_POST["demande"]);

            $resultat = Bdd::insertContact($c);
            if($resultat){
                exit;
            }else{
                echo "Erreur SQL lors de l'ajout";
            }
        }

        $contact = new Contact;
        include "vue/affichage.php";
    }

    public function supprimer($id){
        if($id){
            if(is_numeric($id)){
                $contact = Bdd::selectById("contact", $id);

                if($contact){
                    if($_SERVER["REQUEST_METHOD"] == "POST"){
                        if(Bdd::deleteContact($contact) == 1){
                            redirection(lien("contact"));
                        }
                    }
                }else{
                    redirection(lien("contact"));
                }
            }
        }
        affichage("suppression.php", ["contact" => $contact]);
    }
}

?>
