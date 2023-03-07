<?php

namespace Controleurs;

use Modeles\Bdd;
use Modeles\Entities\Comptes;

class CompteControleur{
    public function liste(){
        $comptes = Bdd::selectComptes("comptes");

        include "vue/header.php";
        include "vue/comptes/affichage.php";
        include "vue/footer.php";
    }

    public function delete($id){
        if($id){
            if(is_numeric($id)){
                $compte = Bdd::selectById("comptes", $id);

                if($compte){
                    if($_SERVER["REQUEST_METHOD"] == "POST"){
                        if( Bdd::deleteComptes($compte) == 1 ) {
                            redirection(lien("compte", "liste"));
                        }
                    }
                }else{
                    redirection(lien("compte", "liste"));
                }
            }
        }
        affichage("comptes/suppression.php", ["compte" => $compte]);
    }
}


?>