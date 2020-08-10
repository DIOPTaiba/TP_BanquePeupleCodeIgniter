<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class CompteEpargne extends Model
{
    protected $table = 'compte_epargne';
 
    protected $allowedFields = ['id','id_comptes','frais_ouverture','montant_remuneration'];
}