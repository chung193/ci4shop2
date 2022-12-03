<?php 
namespace App\Models\frontend;
use CodeIgniter\Model;
 
class Info_model extends Model
{
    
    public function getInfo(){
        $db      = \Config\Database::connect();
        $builder = $db->table('shop_info');
        $builder->where('id', 1);
        $query = $builder->get();
        return $query->getRow();
    }
}