<?php namespace App\Models\frontend;
use CodeIgniter\Model;
 
class Shop_Order_model extends Model
{
    protected $table = 'shop_order';
    public function getOrder($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id' => $id]);
        }   
    }

    public function saveOrder($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function saveOrderDetail($data)
    {
        $query = $this->db->table('shop_order_detail')->insert($data);
        return $query;
    }

    public function updateOrder($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id' => $id));
        return $query;
    }

    public function deleteOrder($id)
    {
        $query = $this->db->table($this->table)->delete(array('id' => $id));
        return $query;
    }
}