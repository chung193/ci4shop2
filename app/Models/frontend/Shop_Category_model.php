<?php namespace App\Models\frontend;
use CodeIgniter\Model;
use CodeIgniter\Database\RawSql;

class Shop_Category_model extends Model
{
    
    public function getShopCategory(){
        $db      = \Config\Database::connect();
        $builder = $db->table('shop_category');
        $builder->select('shop_category.*, count(shop_product.id) as count ');
        $builder->join('shop_product', 'shop_category.id = shop_product.category_id');
        $builder->groupBy('shop_category.id');
        $query = $builder->get();
        return $query->getResultArray();
    }


    public function getShopCategorySlug($slug){
        $db      = \Config\Database::connect();
        $builder = $db->table('shop_category');
        $builder->where('shop_category.slug', $slug);
        $query = $builder->get();
        return $query->getRow();
    }

    public function getShopCategoryIdSlug($slug){
        $db      = \Config\Database::connect();
        $builder = $db->table('shop_category');
        $builder->where('shop_category.slug', $slug);
        $query = $builder->get();
        return $query->getRow()->id;
    }

    public function getShopCategoryProductSlug($id, $limit, $offset){
        $db      = \Config\Database::connect();
        $builder = $db->table('shop_category');
        $builder->select('shop_product.*, shop_producer.name as proc_name, shop_category.name as cat_name,shop_discount.title, shop_discount.ratio, shop_discount.slug as dslug,shop_discount.money, shop_discount.from_date, shop_discount.to_date ');
        $builder->join('shop_product', 'shop_category.id = shop_product.category_id');
        $builder->join('shop_producer', 'shop_producer.id = shop_product.producer_id');
        $builder->join('shop_discount', 'shop_discount.id = shop_product.id_discount');
        $builder->where('shop_category.id', $id);
        $builder->limit($limit, $offset);
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function getCount($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('shop_category');
        $builder->select('shop_product.*, shop_producer.name as proc_name, shop_category.name as cat_name,shop_discount.title, shop_discount.ratio, shop_discount.slug as dslug,shop_discount.money, shop_discount.from_date, shop_discount.to_date ');
        $builder->join('shop_product', 'shop_category.id = shop_product.category_id');
        $builder->join('shop_producer', 'shop_producer.id = shop_product.producer_id');
        $builder->join('shop_discount', 'shop_discount.id = shop_product.id_discount');
        $builder->where('shop_category.id', $id);
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function getShopCategoryFilter($id,$from = 0, $to = 100000000, $sort='', $status = '', $limit=1000, $offset=0){
        $db      = \Config\Database::connect();
        $builder = $db->table('shop_category');
        $builder->select('shop_product.*, shop_producer.name as proc_name, shop_category.name as cat_name,shop_discount.title, shop_discount.ratio, shop_discount.slug as dslug,shop_discount.money, shop_discount.from_date, shop_discount.to_date ');
        $builder->join('shop_product', 'shop_category.id = shop_product.category_id');
        $builder->join('shop_producer', 'shop_producer.id = shop_product.producer_id');
        $builder->join('shop_discount', 'shop_discount.id = shop_product.id_discount');
        $builder->where('shop_category.id', $id);
        
        $builder->where('shop_product.price >=', $from);
        $builder->where('shop_product.price <=', $to);
        if($sort != ''){
            $builder->orderBy('price', $sort );
        }
        if($status != ''){
            if($status == 'all'){
                //$builder->where('shop_product.show_price', 1);
            }else{
                $builder->where('shop_product.qty >', 0);
            }
        }
        $builder->limit($limit, $offset);
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function getCountFilter($id,$from = 0, $to = 100000000, $sort='', $status = ''){
        $db      = \Config\Database::connect();
        $builder = $db->table('shop_category');
        $builder->select('shop_product.*, shop_producer.name as proc_name, shop_category.name as cat_name,shop_discount.title, shop_discount.ratio, shop_discount.slug as dslug,shop_discount.money, shop_discount.from_date, shop_discount.to_date ');
        $builder->join('shop_product', 'shop_category.id = shop_product.category_id');
        $builder->join('shop_producer', 'shop_producer.id = shop_product.producer_id');
        $builder->join('shop_discount', 'shop_discount.id = shop_product.id_discount');
        $builder->where('shop_category.id', $id);
        
        $builder->where('shop_product.price >=', $from);
        $builder->where('shop_product.price <=', $to);
        if($sort != ''){
            $builder->orderBy('price', $sort );
        }
        if($status != ''){
            if($status == 'all'){
                //$builder->where('shop_product.show_price', 1);
            }else{
                $builder->where('shop_product.qty >', 0);
            }
        }
        
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function getShopCategoryProduct(){
        $db      = \Config\Database::connect();
        $builder = $db->table('shop_product');
        $builder->select('shop_product.*, shop_producer.name as proc_name, shop_category.name as cat_name,shop_discount.title, shop_discount.ratio, shop_discount.slug as dslug,shop_discount.money, shop_discount.from_date, shop_discount.to_date ');
        $builder->join('shop_producer', 'shop_producer.id = shop_product.producer_id');
        $builder->join('shop_category', 'shop_category.id = shop_product.category_id');
        $builder->join('shop_discount', 'shop_discount.id = shop_product.id_discount');
        $builder->orderBy("created_at", "asc");
        $builder->limit(6);
        $query = $builder->get();
        return $query->getResultArray();
    }

}