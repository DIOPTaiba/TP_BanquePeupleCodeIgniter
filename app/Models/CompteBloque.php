<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class CompteBloque extends Model
{
    protected $table = 'compte_bloque';
 
    protected $allowedFields = ['id','id_comptes','frais_ouverture','montant_remuneration',
    'duree_blocage'];
}