<?php namespace App\Models\frontend;
use CodeIgniter\Model;
 
class Shop_slider_model extends Model
{
    
    public function getSlider(){
        $db      = \Config\Database::connect();
        $builder = $db->table('shop_slider');
        $query = $builder->get();
        return $query->getResultArray();
    }
}