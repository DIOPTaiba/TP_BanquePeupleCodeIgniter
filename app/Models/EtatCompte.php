<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class EtatCompte extends Model
{
    protected $table = 'etat_compte';
 
    protected $allowedFields = ['id','id_compte','etat_compte','date_changement_etat'];
}