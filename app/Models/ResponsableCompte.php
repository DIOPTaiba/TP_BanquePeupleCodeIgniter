<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class ResponsableCompte extends Model
{
    protected $table = 'responsable_compte';
 
    protected $allowedFields = ['id','login','mot_de_passe','id_employes'];
}