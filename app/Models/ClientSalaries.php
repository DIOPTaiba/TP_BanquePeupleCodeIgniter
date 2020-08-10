<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class ClientSalaries extends Model
{
    protected $table = 'client_salarie';
 
    protected $allowedFields = ['id','id_clients','nom','prenom','carte_identite','profession',
    'salaire','nom_employeur','adresse_entreprise','raison_social','identifiant_entreprise'];
}