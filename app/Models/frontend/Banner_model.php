<?php namespace App\Models\frontend;
use CodeIgniter\Model;
 
class Banner_model extends Model
{
    protected $table = 'shop_banner';
     
    public function getbanner($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id' => $id]);
        }   
    }
 
}