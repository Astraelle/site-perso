<?php

namespace Controleurs;

use Modeles\Bdd;
use Modeles\Entities\Contact;

class ContactControleur{
    public function liste(){
        $contacts = Bdd::select("contact");

        include "vue/header.php";
        include "vue/contacts/affichage.php";
        include "vue/footer.php";
    }

    public function delete($id)
    {
        if($id) {
            if( is_numeric($id) ) {
                $contact = Bdd::selectById("contact", $id);

                if($contact) {
                    if($_SERVER["REQUEST_METHOD"] == "POST"){
                        if( Bdd::deleteContact($contact) == 1 ) {
                            redirection(lien("contact", "liste"));
                        }
                    }
                } else {
                    redirection(lien("contact", "liste"));
                }
            }
        }
        affichage("contacts/suppression.php", [ "contact" => $contact ]);
    }
}

?>
