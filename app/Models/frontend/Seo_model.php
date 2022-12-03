<?php 
namespace App\Models\frontend;
use CodeIgniter\Model;
 
class Seo_model extends Model
{
    
    public function getSeo($id, $type){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo');
        $builder->where('content_id', $id);
        $builder->where('content_type', $type);
        $query = $builder->get();
        return $query->getRow();
    }
}