<?php

use App\Models\AnnoncesModel;
use App\Models\Model;
// gestion des cards pour l'accueil 

//appel a la methode findall
//injecter les données dans la vue
class AccueilController
{
    public function injectCard()
    {
        ob_start();
        $annonce = new AnnoncesModel;
        $annonce->findAll();


        include ('views/accueil.view.php');
        $html = ob_end_flush();
        return $html;
    }
}