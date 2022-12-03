<?php namespace App\Models\manage;
use CodeIgniter\Model;
 
class Shop_Ui_model extends Model
{
    protected $table = 'shop_ui';
    
    public function getUi($id = 1)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->where('shop_ui.id', $id);
        $query   = $builder->get(); 
        return $query->getRow();
    }

    public function updateUi($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id' => $id));
        return $query;
    }
}