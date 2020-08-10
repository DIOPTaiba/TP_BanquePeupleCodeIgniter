<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class Comptes extends Model
{
    protected $table = 'comptes';
 
    protected $allowedFields = ['id','id_clients','numero_compte','cle_rib','solde',
    'date_ouverture','numero_agence'];
}