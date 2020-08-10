<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\Clientnonsalaries;
use App\Models\Clients;
use App\Models\CompteBloque;
use App\Models\CompteEpargne;
use App\Models\Comptes;
use App\Models\EtatCompte;

class Clientnonsalarie extends Controller
{
 
    public function listeClientNonSalarie()
    {    
        $model = new Clientnonsalaries();
 
        $data['users'] = $model->orderBy('id', 'DESC')->findAll();
        
        return view('clientnonsalarie', $data);
    }    
 
    public function afficheformulaireclientnonsalarie()
    {    
        return view('formulaireclientnonsalarie');
    }
 
    public function addclientnonsalarie()
    {  
 
        helper(['form', 'url']);
        
        $clients = new Clients();
        
        $date_inscription = date('yy-m-d h:i:s');
        $date_ouverture = date('yy-m-d h:i:s');
        $date_changement_etat = date('yy-m-d h:i:s');
        $id_responsable_compte = 1;

        $data = [
            'id_responsable_compte' => $id_responsable_compte,
            'adresse'  => $this->request->getVar('adresse'),
            'telephone'  => $this->request->getVar('telephone'),
            'email'  => $this->request->getVar('email'),
            'date_inscription'  => $date_inscription,
            'type_client'  => 'Non Salarié',
            ];
 
        $client = $clients->insert($data);
        
       
        $clientnonsalarie = new Clientnonsalaries();
 
        $data = [
            'id_clients' => $client,
            'nom'  => $this->request->getVar('nom'),
            'prenom'  => $this->request->getVar('prenom'),
            'carte_identite'  => $this->request->getVar('carte_identite'),
            ];
 
        $clientnonsalarie->insert($data);


        $comptes = new Comptes();
        $data = [
            'id_clients' => $client,
            'numero_compte'  => $this->request->getVar('numero_compte'),
            'cle_rib'  => $this->request->getVar('cle_rib'),
            'solde'  => $this->request->getVar('solde'),
            'date_ouverture'  => $date_ouverture,
            'numero_agence'  => $this->request->getVar('numero_agence'),
            ];
 
        $compte = $comptes->insert($data);

        /* 'id_compte','etat_compte','date_changement_etat */
        $etatcompte = new EtatCompte();
        $data = [
            'id_compte' => $compte,
            'etat_compte'  => 'Actif',
            'date_changement_etat'  => $date_changement_etat,
            ];
 
        $etatcompte->insert($data);

        //Vérification du type de compte à ajouter
        $type_compte = $this->request->getVar('type_compte');
        if($type_compte == 'compte epargne')
        {

        $compteEpargne = new CompteEpargne();
        $data = [
            'id_comptes' => $compte,
            'frais_ouverture'  => $this->request->getVar('frais_ouverture'),
            'montant_remuneration'  => $this->request->getVar('montant_remuneration'),
            ];
            $compteEpargne->insert($data);
        }
        else
        {
            $compteBloque = new CompteBloque();
            $data = [
                'id_comptes' => $compte,
                'frais_ouverture'  => $this->request->getVar('frais_ouverture'),
                'montant_remuneration'  => $this->request->getVar('montant_remuneration'),
                'duree_blocage'  => $this->request->getVar('duree_blocage'),
                ];
                $compteBloque->insert($data);
        }
        
        return redirect()->to(base_url('public/index.php/clientnonsalarie'));
    }
 
    public function edit($id = null)
    {
      
     $model = new Clientnonsalaries();
 
     $data['user'] = $model->where('id', $id)->first();
 
     return view('edit-user', $data);
    }
 
    public function update()
    {  
 
        helper(['form', 'url']);
         
        $model = new Clientnonsalaries();
 
        $id = $this->request->getVar('id');
 
        $data = [
 
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
            ];
 
        $save = $model->update($id,$data);
 
        return redirect()->to( base_url('public/index.php/clientnonsalarie') );
    }
 
    public function delete($id = null)
    {
 
     $model = new Clientnonsalaries();
 
     $data['user'] = $model->where('id', $id)->delete();
      
     return redirect()->to( base_url('public/index.php/clientnonsalarie') );
    }
}