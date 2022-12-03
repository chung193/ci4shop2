<?php namespace App\Models\frontend;
use CodeIgniter\Model;
 
class Shop_Product_model extends Model
{
    public function getShopProductSlug($slug){
        $db      = \Config\Database::connect();
        $builder = $db->table('shop_product');
        $builder->select('shop_product.*, shop_producer.name as proc_name, shop_category.name as cat_name,shop_discount.title, shop_discount.id as dcid, shop_discount.ratio, shop_discount.slug as dslug,shop_discount.money, shop_discount.from_date, shop_discount.to_date ');
        $builder->join('shop_producer', 'shop_producer.id = shop_product.producer_id');
        $builder->join('shop_category', 'shop_category.id = shop_product.category_id');
        $builder->join('shop_discount', 'shop_discount.id = shop_product.id_discount');
        $builder->where('shop_product.slug', $slug);
        $query = $builder->get();
        return $query->getRow();
    }

    public function getShopProductCatalog($slug){
        $db      = \Config\Database::connect();
        $builder = $db->table('shop_product');
        $builder->select('shop_product.*, shop_producer.name as proc_name, shop_category.name as cat_name,shop_discount.title, shop_discount.id as dcid, shop_discount.ratio, shop_discount.slug as dslug,shop_discount.money, shop_discount.from_date, shop_discount.to_date ');
        $builder->join('shop_producer', 'shop_producer.id = shop_product.producer_id');
        $builder->join('shop_category', 'shop_category.id = shop_product.category_id');
        $builder->join('shop_discount', 'shop_discount.id = shop_product.id_discount');
        $builder->where('shop_category.slug', $slug);
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function getShopProductIdSlug($slug){
        $db      = \Config\Database::connect();
        $builder = $db->table('shop_product');
        $builder->select('shop_product.*, shop_producer.name as proc_name, shop_category.name as cat_name,shop_discount.title, shop_discount.id as dcid, shop_discount.ratio, shop_discount.slug as dslug,shop_discount.money, shop_discount.from_date, shop_discount.to_date ');
        $builder->join('shop_producer', 'shop_producer.id = shop_product.producer_id');
        $builder->join('shop_category', 'shop_category.id = shop_product.category_id');
        $builder->join('shop_discount', 'shop_discount.id = shop_product.id_discount');
        $builder->where('shop_product.slug', $slug);
        $query = $builder->get();
        return $query->getRow()->id;
    }

    public function getShopChildProduct($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('shop_product');
        $builder->select('shop_product.*, shop_producer.name as proc_name, shop_category.name as cat_name,shop_discount.title, shop_discount.id as dcid, shop_discount.ratio, shop_discount.slug as dslug,shop_discount.money, shop_discount.from_date, shop_discount.to_date ');
        $builder->join('shop_producer', 'shop_producer.id = shop_product.producer_id');
        $builder->join('shop_category', 'shop_category.id = shop_product.category_id');
        $builder->join('shop_discount', 'shop_discount.id = shop_product.id_discount');
        $builder->where('shop_product.parent_id', $id);
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function getShopProductId($slug){
        $db      = \Config\Database::connect();
        $builder = $db->table('shop_product');
        $builder->select('shop_product.*, shop_producer.name as proc_name, shop_category.name as cat_name,shop_discount.title, shop_discount.id as dcid, shop_discount.ratio, shop_discount.slug as dslug,shop_discount.money, shop_discount.from_date, shop_discount.to_date ');
        $builder->join('shop_producer', 'shop_producer.id = shop_product.producer_id');
        $builder->join('shop_category', 'shop_category.id = shop_product.category_id');
        $builder->join('shop_discount', 'shop_discount.id = shop_product.id_discount');
        $builder->where('shop_product.slug', $slug);
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function getShopProductIdObject($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('shop_Product');
        $builder->select('shop_product.*, shop_producer.name as proc_name, shop_category.name as cat_name,shop_discount.title, shop_discount.id as dcid, shop_discount.ratio, shop_discount.slug as dslug,shop_discount.money, shop_discount.from_date, shop_discount.to_date ');
        $builder->join('shop_producer', 'shop_producer.id = shop_product.producer_id');
        $builder->join('shop_category', 'shop_category.id = shop_product.category_id');
        $builder->join('shop_discount', 'shop_discount.id = shop_product.id_discount');
        $builder->where('shop_product.id', $id);
        $query = $builder->get();
        return $query->getRow();
    }

    public function getShopProductIdInCart($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('shop_product');
        $builder->select('shop_product.*, shop_producer.name as proc_name, shop_category.name as cat_name,shop_discount.title, shop_discount.id as dcid, shop_discount.ratio, shop_discount.slug as dslug,shop_discount.money, shop_discount.from_date, shop_discount.to_date ');
        $builder->join('shop_producer', 'shop_producer.id = shop_product.producer_id');
        $builder->join('shop_category', 'shop_category.id = shop_product.category_id');
        $builder->join('shop_discount', 'shop_discount.id = shop_product.id_discount');
        $builder->where('shop_product.id', $id);
        $query = $builder->get();
        return $query->getRow();
    }

    public function getShopProduct($limit){
        $db      = \Config\Database::connect();
        $builder = $db->table('shop_product');
        $builder->select('shop_product.*, shop_producer.name as proc_name, shop_category.name as cat_name,shop_discount.title, shop_discount.id as dcid, shop_discount.ratio, shop_discount.slug as dslug,shop_discount.money, shop_discount.from_date, shop_discount.to_date ');
        $builder->join('shop_producer', 'shop_producer.id = shop_product.producer_id');
        $builder->join('shop_category', 'shop_category.id = shop_product.category_id');
        $builder->join('shop_discount', 'shop_discount.id = shop_product.id_discount');
        $builder->orderBy("created_at", "desc");
        $builder->limit($limit);
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function getArrivalsProduct($limit){
        $db      = \Config\Database::connect();
        $builder = $db->table('shop_product');
        $builder->select('shop_product.*, shop_producer.name as proc_name, shop_category.name as cat_name,shop_discount.title, shop_discount.id as dcid, shop_discount.ratio, shop_discount.slug as dslug,shop_discount.money, shop_discount.from_date, shop_discount.to_date ');
        $builder->join('shop_producer', 'shop_producer.id = shop_product.producer_id');
        $builder->join('shop_category', 'shop_category.id = shop_product.category_id');
        $builder->join('shop_discount', 'shop_discount.id = shop_product.id_discount');
        $builder->orderBy("created_at", "desc");
        $builder->limit($limit);
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function getFeaturedProduct($limit){
        $db      = \Config\Database::connect();
        $builder = $db->table('shop_product');
        $builder->select('shop_product.*, shop_producer.name as proc_name, shop_category.name as cat_name,shop_discount.title, shop_discount.id as dcid, shop_discount.ratio, shop_discount.slug as dslug,shop_discount.money, shop_discount.from_date, shop_discount.to_date ');
        $builder->join('shop_producer', 'shop_producer.id = shop_product.producer_id');
        $builder->join('shop_category', 'shop_category.id = shop_product.category_id');
        $builder->join('shop_discount', 'shop_discount.id = shop_product.id_discount');
        $builder->orderBy("created_at", "desc");
        $builder->limit($limit);
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function getRandomProduct($limit){
        $db      = \Config\Database::connect();
        $builder = $db->table('shop_product');
        $builder->select('shop_product.slug');
        $query = $builder->get();
        $query = $query->getResultArray(); // return a array
        
        shuffle($query);
        //return $query;
        $output = array_slice($query, 0, $limit); 

        $result = array();

        foreach($output as $val){
            array_push($result, $this->getShopProductId($val));
        }
        return $result;
    }

    public function getMostSaleProduct($limit){
        $db      = \Config\Database::connect();
        $builder = $db->table('shop_product');
        $builder->select('shop_product.*, shop_producer.name as proc_name, shop_category.name as cat_name,shop_discount.title, shop_discount.id as dcid, shop_discount.ratio, shop_discount.slug as dslug,shop_discount.money, shop_discount.from_date, shop_discount.to_date ');
        $builder->join('shop_producer', 'shop_producer.id = shop_product.producer_id');
        $builder->join('shop_category', 'shop_category.id = shop_product.category_id');
        $builder->join('shop_discount', 'shop_discount.id = shop_product.id_discount');
        $builder->orderBy("created_at", "desc");
        $builder->limit($limit);
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function getAllCategory(){
        $db      = \Config\Database::connect();
        $builder = $db->table('shop_category');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function getAllProduct(){
        $db      = \Config\Database::connect();
        $builder = $db->table('shop_product');
        $builder->select('shop_product.*,shop_discount.title, shop_discount.id as dcid, shop_discount.ratio, shop_discount.slug as dslug,shop_discount.money, shop_discount.from_date, shop_discount.to_date ');
        $builder->join('shop_discount', 'shop_discount.id = shop_product.id_discount');
        $query = $builder->get();
        return $query->getResultArray();
    }

}