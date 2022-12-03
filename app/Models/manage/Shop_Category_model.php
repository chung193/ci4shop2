<?php namespace App\Models\manage;
use CodeIgniter\Model;
 
class Shop_Category_model extends Model
{
    protected $table = 'shop_category';
     
    public function getShopCategory($id = false)
    {
        if($id === false){
            $db      = \Config\Database::connect();
            $builder = $db->table($this->table);
            $query = $builder->get();
            return $query->getResultArray();
        }else{
            $db      = \Config\Database::connect();
            $builder = $db->table($this->table);
            $builder->where('id', $id);
            $query = $builder->get();
            return $query;
        }   
    }

    public function defaultcat(){
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->set('is_default', 0);
        $builder->update();
    }

    public function saveShopCategory($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function countWhere($slug){
        $query = $this->where(['slug' => $slug])->countAllResults();
        return $query;
    }

    public function updateShopCategory($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id' => $id));
        return $query;
    }

    public function deleteShopCategory($id)
    {
        $query = $this->db->table($this->table)->delete(array('id' => $id));
        return $query;
    }
 
}