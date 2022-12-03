<?php namespace App\Models\frontend;
use CodeIgniter\Model;
 
class Page_model extends Model
{
    
    public function getPage(){
        $db      = \Config\Database::connect();
        $builder = $db->table('page');
        $query = $builder->get();
        return $query->getResultArray();
    }


    public function getPageSlug($slug){
        $db      = \Config\Database::connect();
        $builder = $db->table('page');
        $builder->where('page.slug', $slug);
        $query = $builder->get();
        return $query->getRow();
    }

}