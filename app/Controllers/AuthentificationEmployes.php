<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ResponsableCompte;

class AuthentificationEmployes extends Controller
{
 
    public function verifieResponsable()
    {    
        helper(['form', 'url']);

        $login_responsable = $this->request->getVar('login_responsable');
        $mot_passe_responsable = $this->request->getVar('mot_passe_responsable');


        $model = new ResponsableCompte();
        $array = array('login' => $login_responsable , 'mot_de_passe' => $mot_passe_responsable);
        $resultat = $model->where($array)->findAll();
        
        
        /* var_dump($resultat);
        die; */
        
        if ($resultat)
        {
            return view("accueilResponsable");
        }
        else
        {
            $data['erreur'] = "Login ou mot de passe incorrecte";
            return view("accueil", $data);
        }
    }
    public function accueilResponsable()
    {
        return view("accueilResponsable");
    }

    
}