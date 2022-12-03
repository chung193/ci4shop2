<?php namespace App\Models\manage;
use CodeIgniter\Model;
 
class Shop_Customer_model extends Model
{
    protected $table = 'shop_customer';
     
    public function getcustomer($id = false)
    {
        $db  = \Config\Database::connect();
        $builder = $db->table('shop_customer');
        if($id === false){
            $builder->select('shop_customer.*, tinhthanhpho.name as ttp');
            $builder->join('tinhthanhpho', 'shop_customer.matp = tinhthanhpho.matp');
            $query = $builder->get();
            return $query->getResultArray();
        }else{
            return $this->getWhere(['id' => $id]);
        }   
    }

    public function countAll(){
        $db  = \Config\Database::connect();
        $builder = $db->table('shop_customer');
        $query = $builder->countAllResults();
        return $query;
    }

    public function savecustomer($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updatecustomer($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id' => $id));
        return $query;
    }

    public function deletecustomer($id)
    {
        $query = $this->db->table($this->table)->delete(array('id' => $id));
        return $query;
    }
 
}