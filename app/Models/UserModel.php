<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class UserModel extends Model
{
    protected $table = 'client_non_salarie';
 
    protected $allowedFields = ['id','id_clients','nom','prenom','carte_identite'];
}