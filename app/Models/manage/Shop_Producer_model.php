<?php namespace App\Models\manage;
use CodeIgniter\Model;
 
class Shop_Producer_model extends Model
{
    protected $table = 'shop_producer';
     
    public function getproducer($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id' => $id]);
        }   
    }

    public function defaultcat(){
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->set('is_default', 0);
        $builder->update();
    }

    public function saveproducer($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateproducer($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id' => $id));
        return $query;
    }

    public function deleteproducer($id)
    {
        $query = $this->db->table($this->table)->delete(array('id' => $id));
        return $query;
    }
 
}