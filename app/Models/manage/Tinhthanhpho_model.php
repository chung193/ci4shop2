<?php namespace App\Models\manage;
use CodeIgniter\Model;
 
class Tinhthanhpho_model extends Model
{
    protected $table = 'tinhthanhpho';
     
    public function gettinhthanhpho($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id' => $id]);
        }   
    }

    public function savetinhthanhpho($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updatetinhthanhpho($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id' => $id));
        return $query;
    }

    public function deletetinhthanhpho($id)
    {
        $query = $this->db->table($this->table)->delete(array('id' => $id));
        return $query;
    }
 
}