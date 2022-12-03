<?php 
namespace App\Models\frontend;
use CodeIgniter\Model;
 
class Ui_model extends Model
{
    
    public function getUi(){
        $db      = \Config\Database::connect();
        $builder = $db->table('shop_ui');
        $builder->where('id', 1);
        $query = $builder->get();
        return $query->getRow();
    }
}