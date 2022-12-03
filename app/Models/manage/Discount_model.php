<?php namespace App\Models\manage;
use CodeIgniter\Model;
 
class Discount_model extends Model
{
    protected $table = 'shop_discount';
     
    public function getdiscount($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id' => $id]);
        }   
    }

    public function savediscount($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updatediscount($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id' => $id));
        return $query;
    }

    public function deletediscount($id)
    {
        $query = $this->db->table($this->table)->delete(array('id' => $id));
        return $query;
    }

    public function countWhere($slug){
        $query = $this->where(['slug' => $slug])->countAllResults();
        return $query;
    }
 
}