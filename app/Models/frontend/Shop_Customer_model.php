<?php namespace App\Models\frontend;
use CodeIgniter\Model;
 
class Shop_Customer_model extends Model
{
    protected $table = 'shop_customer';
    public function getCustomer($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id' => $id]);
        }   
    }

    public function saveCustomer($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateCustomer($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id' => $id));
        return $query;
    }

    public function deleteCustomer($id)
    {
        $query = $this->db->table($this->table)->delete(array('id' => $id));
        return $query;
    }
}