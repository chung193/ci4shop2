<?php namespace App\Models\frontend;
use CodeIgniter\Model;
 
class City_model extends Model
{
    
    public function getCity(){
        $db      = \Config\Database::connect();
        $builder = $db->table('tinhthanhpho');
        $query = $builder->get();
        return $query->getResultArray();
    }
}