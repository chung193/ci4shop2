<?php namespace App\Models\frontend;
use CodeIgniter\Model;
 
class Shop_Discount_model extends Model
{

    public function getShopDiscountSlug($slug){
        $db      = \Config\Database::connect();
        $builder = $db->table('shop_discount');
        $builder->where('shop_discount.slug', $slug);
        //$builder->where('shop_discount.id !=', 1);
        $query = $builder->get();
        return $query->getRow();
    }

    public function getAll(){
        $db      = \Config\Database::connect();
        $builder = $db->table('shop_discount');
        //$builder->where('shop_discount.id !=', 1);
        $query = $builder->get();
        return $query->getResultArray();
    }
}