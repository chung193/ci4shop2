<?php namespace App\Models\frontend;
use CodeIgniter\Model;
 
class Post_model extends Model
{
    
    public function getPost(){
        $db      = \Config\Database::connect();
        $builder = $db->table('post');
        $query = $builder->get();
        return $query->getResultArray();
    }


    public function getPostSlug($slug){
        $db      = \Config\Database::connect();
        $builder = $db->table('post');
        $builder->where('post.slug', $slug);
        $query = $builder->get();
        return $query->getRow();
    }

    public function getPostIdSlug($slug){
        $db      = \Config\Database::connect();
        $builder = $db->table('post');
        $builder->where('post.slug', $slug);
        $query = $builder->get();
        return $query->getRow()->id;
    }
    
    public function getRecentPost(){
        $db      = \Config\Database::connect();
        $builder = $db->table('post');
        $builder->orderBy("createdat", "asc");
        $builder->limit(6);
        $query = $builder->get();
        return $query->getResultArray();
    }

}