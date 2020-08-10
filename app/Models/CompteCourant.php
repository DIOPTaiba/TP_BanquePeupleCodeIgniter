<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class CompteCourant extends Model
{
    protected $table = 'compte_courant';
 
    protected $allowedFields = ['id','id_comptes','agios'];
}