<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class Clients extends Model
{
    protected $table = 'clients';
 
    protected $allowedFields = ['id','id_responsable_compte','adresse','telephone','email','date_inscription','type_client'];
}