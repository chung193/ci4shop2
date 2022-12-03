<?php namespace App\Models\frontend;
use CodeIgniter\Model;
 
class Category_model extends Model
{
    
    public function getCategory(){
        $db      = \Config\Database::connect();
        $builder = $db->table('category');
        $query = $builder->get();
        return $query->getResultArray();
    }


    public function getCategorySlug($slug){
        $db      = \Config\Database::connect();
        $builder = $db->table('category');
        $builder->where('category.slug', $slug);
        $query = $builder->get();
        return $query->getRow();
    }

    public function getCategoryIdSlug($slug){
        $db      = \Config\Database::connect();
        $builder = $db->table('category');
        $builder->where('category.slug', $slug);
        $query = $builder->get();
        return $query->getRow()->id;
    }

    public function getCategoryPostSlug($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('category');
        $builder->join('post', 'category.id = post.parentid');
        $builder->where('category.id', $id);
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function getCategoryRecentPost(){
        $db      = \Config\Database::connect();
        $builder = $db->table('post');
        $builder->orderBy("createdat", "asc");
        $builder->limit(6);
        $query = $builder->get();
        return $query->getResultArray();
    }

}