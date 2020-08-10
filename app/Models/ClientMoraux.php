<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class ClientMoraux extends Model
{
    protected $table = 'client_moral';
 
    protected $allowedFields = ['id','id_clients','nom_entreprise','identifiant_entreprise',
    'raison_social'];
}