<?php namespace App\Models\manage;
use CodeIgniter\Model;
 
class Shop_Order_model extends Model
{
    protected $table = 'shop_order';
     
    public function getShoporder($id = false)
    {
        if($id === false){
                $db = \Config\Database::connect();
                $builder = $db->table('shop_order');
                $builder->select('shop_order.*, shop_customer.name as cus_name');
                $builder->join('shop_customer', 'shop_customer.id = shop_order.user_id');
                $builder->orderBy("created_at", "desc");
                $query = $builder->get();
                return $query->getResultArray();
        }else{
                $db  = \Config\Database::connect();
                $builder = $db->table('shop_order');
                $builder->select('shop_order.*, shop_customer.name as cus_name');
                $builder->join('shop_customer', 'shop_customer.id = shop_order.user_id');
                $builder->where("shop_order.id", $id);
                $query = $builder->get();
                return $query->getRow();
        }   
    }

    public function countAll(){
        $db  = \Config\Database::connect();
        $builder = $db->table('shop_order');
        $query = $builder->countAllResults();
        return $query;
    }

    public function getShopOrderDetail($id){
        $db = \Config\Database::connect();
        $builder = $db->table('shop_order_detail');
        $builder->select('shop_order_detail.*, shop_product.name as pro_name, shop_product.price, shop_discount.id as dis_id, shop_discount.from_date, shop_discount.to_date, shop_discount.money, shop_discount.ratio');
        $builder->join('shop_product', 'shop_product.id = shop_order_detail.product_id');
        $builder->join('shop_discount', 'shop_product.id_discount = shop_discount.id');
        $builder->where("shop_order_detail.order_id", $id);
        $builder->orderBy("created_at", "desc");
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function defaultcat(){
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->set('is_default', 0);
        $builder->update();
    }

    public function saveShoporder($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateShoporder($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id' => $id));
        return $query;
    }

    public function deleteShoporder($id)
    {
        $query = $this->db->table($this->table)->delete(array('id' => $id));
        return $query;
    }
 
}