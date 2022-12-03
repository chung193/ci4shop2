<?php namespace App\Models\frontend;
use CodeIgniter\Model;
 
class Home_model extends Model
{
    
    public function getCategory(){
        $db      = \Config\Database::connect();
        $builder = $db->table('category');
        $builder->select('category.*, count(post.id) as countpost');
        $builder->join('post', 'post.parentid = category.id');
        $builder->groupBy('category.id');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function getAllCategory(){
        $db      = \Config\Database::connect();
        $builder = $db->table('category');
        $query = $builder->get();
        return $query->getResultArray();
    }
     
    public function getPost($id = false)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);
        
        if($id === false){
            $builder->select('post.*, category.title as cattitle, category.slug as catslug, user.nicename as username');
            $builder->join('category', 'category.id = post.parentid');
            $builder->join('user', 'user.id = post.authorid');
            $query = $builder->get();
            return $query->getResultArray();
        }else{
            $builder->select('post.*, category.title as cattitle,category.slug as catslug, user.nicename as username');
            $builder->join('category', 'category.id = post.parentid');
            $builder->join('user', 'user.id = post.authorid');
            $builder->where('post.id', $id);
            $builder->orderBy('post.id','desc');
            $query = $builder->get();
            return $query;
        }   
    }

    public function getPagePublish(){
        $db      = \Config\Database::connect();
        $builder = $db->table('page');
        $builder->select('page.*');
        $builder->where('page.published', 1);
        $builder->limit(10, 0);
        $builder->orderBy('page.id', 'desc');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function getPostPublish(){
        $db      = \Config\Database::connect();
        $builder = $db->table('post');
        $builder->select('post.*, category.title as cattitle, category.slug as catslug, user.nicename as username');
        $builder->join('category', 'category.id = post.parentid');
        $builder->join('user', 'user.id = post.authorid');
        $builder->where('post.published', 1);
        $builder->where('post.trash', 0);
        $builder->limit(10, 0);
        $builder->orderBy('post.id', 'desc');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function getPostInCategoryBySlug($slug){
        $db      = \Config\Database::connect();
        $builder = $db->table('post');
        $builder->select('post.*, category.title as cattitle, category.slug as catslug,user.nicename as username');
        $builder->join('category', 'category.id = post.parentid');
        $builder->join('user', 'user.id = post.authorid');
        $builder->where('post.published', 1);
        $builder->where('post.trash', 0);
        $builder->where('category.slug', $slug);
        $builder->limit(10, 0);
        $builder->orderBy('post.id', 'desc');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function getPostInCategory($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('post');
        $builder->select('post.*, category.title as cattitle, category.slug as catslug,user.nicename as username');
        $builder->join('category', 'category.id = post.parentid');
        $builder->join('user', 'user.id = post.authorid');
        $builder->where('post.published', 1);
        $builder->where('post.trash', 0);
        $builder->where('post.parentid', $id);
        $builder->limit(10, 0);
        $builder->orderBy('post.id', 'desc');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function getPostDetail($slug){
        $db      = \Config\Database::connect();
        $builder = $db->table('post');
        $builder->select('post.*, category.title as cattitle, category.slug as catslug, category.metatitle as catdescription, user.nicename as username');
        $builder->join('category', 'category.id = post.parentid');
        $builder->join('user', 'user.id = post.authorid');
        $builder->where('post.published', 1);
        $builder->where('post.trash', 0);
        $builder->where('post.slug', $slug);
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function getPageDetail($slug){
        $db      = \Config\Database::connect();
        $builder = $db->table('page');
        $builder->select('page.*');
        $builder->where('page.published', 1);
        $builder->where('page.slug', $slug);
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function getSEO($slug){
        $db      = \Config\Database::connect();
        $builder = $db->table('category');
        $builder->where('slug', $slug);
        $query = $builder->get();
        if(count($query->getResultArray()) == 1){
                $data = $query->getResultArray();

                foreach($data as $key => $value){
                    $result = array(
                        'metatitle' => $value['metatitle'],
                        'description' => $value['content'],
                    );
                };
                return $result;
            }else{
                $temp = $this->getPostDetail($slug);
                if(count($temp) == 1){
                    foreach($temp as $key => $value){
                        $result = array(
                            'metatitle' => $value['metatitle'],
                            'description' => $value['description'],
                        );
                    };
                    return $result;
                }else{
                    $temp = $this->getPageDetail($slug);
                    if(count($temp) == 1){
                        foreach($temp as $key => $value){
                            $result = array(
                                'metatitle' => $value['metatitle'],
                                'description' => $value['description'],
                            );
                        };
                        return $result;
                    }
                }
            }
    }

    public function updateView($slug){
        $db      = \Config\Database::connect();
        $builder = $db->table('post');
        $builder->set('view', 'view+1', false);
        $builder->where('slug', $slug);
        $builder->update();
    }

    public function livesearch($key){
        $db      = \Config\Database::connect();
        $builder = $db->table('shop_product');
        $builder->like('shop_product.name', $key);
        $builder->limit(10, 0);
        $builder->orderBy('shop_product.id', 'desc');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function search( $key){
        $db      = \Config\Database::connect();
        $builder = $db->table('shop_product');
        $builder->select('shop_product.*, shop_producer.name as proc_name, shop_category.name as cat_name,shop_discount.title, shop_discount.id as dcid, shop_discount.ratio, shop_discount.slug as dslug,shop_discount.money, shop_discount.from_date, shop_discount.to_date ');
        $builder->join('shop_producer', 'shop_producer.id = shop_product.producer_id');
        $builder->join('shop_category', 'shop_category.id = shop_product.category_id');
        $builder->join('shop_discount', 'shop_discount.id = shop_product.id_discount');
        $builder->like('shop_product.name', $key);
        $builder->limit(10, 0);
        $builder->orderBy('shop_product.id', 'desc');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function getPostTopView(){
        $db      = \Config\Database::connect();
        $builder = $db->table('post');
        $builder->select('post.*, category.title as cattitle, category.slug as catslug, user.nicename as username');
        $builder->join('category', 'category.id = post.parentid');
        $builder->join('user', 'user.id = post.authorid');
        $builder->where('post.published', 1);
        $builder->where('post.trash', 0);
        $builder->limit(6, 0);
        $builder->orderBy('post.view', 'desc');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function getPostByUser($slug){
        $db      = \Config\Database::connect();
        $builder = $db->table('post');
        $builder->select('post.*, category.title as cattitle, category.slug as catslug, user.nicename as username');
        $builder->join('category', 'category.id = post.parentid');
        $builder->join('user', 'user.id = post.authorid');
        $builder->where('post.published', 1);
        $builder->where('post.trash', 0);
        $builder->where('user.slug', $slug);
        //$builder->limit(6, 0);
        $builder->orderBy('post.view', 'desc');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function findcontent($slug){
        $db      = \Config\Database::connect();
        $builder = $db->table('category');
        $builder->where('slug', $slug);
        $query = $builder->get();
        if(count($query->getResultArray()) == 1){

                // tách lấy id
                $temp = $query->getResultArray();
                foreach($temp as $value){
                    $id = $value['id'];
                }
                $data = array(
                    'type' => 'category',
                    'data' => $query->getResultArray(),
                    'post' => $this->getPostInCategory($id),
                    'metadata' => $this->getSEO($slug)
                );
                return $data;
            }else{
                $temp = $this->getPostDetail($slug);
                if(count($temp) == 1){
                    $data = array(
                        'type' => 'post',
                        'metadata' => $this->getSEO($slug),
                        'data' => $temp
                    );
                    return $data;
                }else{
                    $temp = $this->getPageDetail($slug);
                    if(count($temp) == 1){
                        $data = array(
                            'type' => 'page',
                            'metadata' => $this->getSEO($slug),
                            'data' => $temp
                        );
                    return $data;
                    }else{
                        $temp = $this->getPostByUser($slug);
                        if(count($temp) == 1){
                            $data = array(
                                'type' => 'user',
                                'metadata' => $this->getSEO($slug),
                                'data' => $temp
                            );
                        return $data;
                    }
                }
            }
    }
    }
}