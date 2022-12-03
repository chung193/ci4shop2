<?php namespace App\Controllers\manage;
 
use CodeIgniter\Controller;
use App\Models\manage\Shop_Producer_model;
use App\Models\manage\Shop_Product_model;
use App\Models\manage\Shop_Category_model;
use App\Models\manage\Seo_model;
use App\Models\manage\Info_model;

class Import extends BaseController
{
    public $site;
    function __construct()
    {

        $info_md = new Info_model();
        $this->site = array(
            'info' => $info_md->getInfo()
        );
    }


    public function importFile(){
        // Validation
        //echo 'bla bla'; die();
        $input = $this->validate([
            'file' => 'uploaded[file]|max_size[file,1024]|ext_in[file,csv],'
        ]);
        if (!$input) { // Not valid
            $data['validation'] = $this->validator;
        }else{ // Valid
            if($file = $this->request->getFile('file')) {
                if ($file->isValid() && ! $file->hasMoved()) {
                    // Get random file name
                    $newName = $file->getName();
                    // Store file in public/csvfile/ folder
                    $file->move(ROOTPATH.'/public/uploads/csvfile', $newName);
                    // Reading file
                    $file = fopen(ROOTPATH.'/public/uploads/csvfile/'.$newName,"r");
                    $i = 0;
                    
                    $importData_arr = array();
                    // Initialize $importData_arr Array
                    while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
                        //$num = count($filedata);
                        // Skip first row & check number of fields
                        if($this->request->getPost('type') == 'producer'){
                            $numberOfFields = 4; // Total number of fields
                            if($i > 0 ){ 
                            // Key names are the insert table field names - name, img, url
                                $importData_arr[$i]['name'] = $filedata[1];
                                $importData_arr[$i]['img'] = $filedata[2];
                                $importData_arr[$i]['url'] = $filedata[3];
                            }
                        }elseif($this->request->getPost('type') == 'shopcategory'){
                            $numberOfFields = 5; // Total number of fields
                            // Key names are the insert table field names - name, img, url
                            if($i > 0 ){ 
                                $importData_arr[$i]['name'] = $filedata[1];
                                $importData_arr[$i]['description'] = $filedata[2];
                                $importData_arr[$i]['parent_id'] = $filedata[3];
                                $importData_arr[$i]['slug'] = create_slug($filedata[1]); 
                                $importData_arr[$i]['is_default'] = 0;
                            }
                        }elseif($this->request->getPost('type') == 'product'){
                            $numberOfFields = 12; // Total number of fields
                            // Key names are the insert table field names - name, img, url
                            if($i > 0 ){ 
                                $importData_arr[$i]['name'] = $filedata[1];
                                $importData_arr[$i]['producer_id'] = $filedata[2];
                                $importData_arr[$i]['category_id'] = $filedata[3];
                                $importData_arr[$i]['qty'] = $filedata[4];
                                $importData_arr[$i]['price'] = $filedata[5];
                                $importData_arr[$i]['description'] = $filedata[6];
                                $importData_arr[$i]['detail'] = $filedata[7];
                                $importData_arr[$i]['img'] = $filedata[8];
                                $importData_arr[$i]['img_list'] = $filedata[9];
                                $importData_arr[$i]['parent_id'] = 0;
                                $importData_arr[$i]['id_discount'] = 1; 
                                $importData_arr[$i]['show_price'] = 0;
                                $importData_arr[$i]['slug'] = create_slug($filedata[1]); 
                                $importData_arr[$i]['summary'] = $filedata[10];
                            }
                        }
                        $i++;
                    }
                    // fclose($file);
                    // print_r($importData_arr); die();
                    // Insert data
                    $count = 0;
                    if($this->request->getPost('type') == 'producer'){
                        $producer_md = new Shop_Producer_model();
                        foreach($importData_arr as $data){
                            // Check record
                            $checkrecord = $producer_md->where('name',$data['name'])->countAllResults();
                            if($checkrecord == 0){
                                ## Insert Record
                                if($producer_md->saveproducer($data)){
                                    $count++;
                                    
                                }
                            }
                        }
                    }elseif($this->request->getPost('type') == 'shopcategory'){
                        $category_md = new Shop_Category_model();
                        foreach($importData_arr as $data){
                            // Check record
                            $checkrecord = $category_md->where('name',$data['name'])->countAllResults();
                            if($checkrecord == 0){
                                ## Insert Record
                                if($category_md->saveShopCategory($data)){
                                    $count++;
                                    $id_inserted = $category_md->insertID();
                                    $seo = array(
                                        'meta_title' => $data['name'],
                                        'meta_description' => $data['description'],
                                        'content_type' => 'shopcategory',
                                        'content_id' => $id_inserted
                                    );
                                    $this->setSeoContent($seo);
                                }
                            }
                        }
                    }elseif($this->request->getPost('type') == 'product'){
                        $product_md = new Shop_Product_model();
                        foreach($importData_arr as $data){
                            // Check record
                            $checkrecord = $product_md->where('name',$data['name'])->countAllResults();
                            if($checkrecord == 0){
                                ## Insert Record
                                if($product_md->saveShopProduct($data)){
                                    $count++;
                                    $id_inserted = $product_md->insertID();
                                    $seo = array(
                                        'meta_title' => $data['name'],
                                        'meta_description' => $data['name'],
                                        'content_type' => 'product',
                                        'content_id' => $id_inserted
                                    );
                                    $this->setSeoContent($seo);

                                    if ($this->request->getFileMultiple('img_list')) {
                                        $temp = array();
                                        foreach($this->request->getFileMultiple('img_list') as $file)
                                        {   
                                            if($file->isValid() && ! $file->hasMoved()){
                                                $file->move(ROOTPATH.'/public/uploads/product/');
                                                //array_push($temp, $file->getClientName());
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                echo '<script>alert("'.$count.' Record inserted successfully!")</script>';
        }else{
                echo '<script>alert("Không tìm thấy file")</script>';
        }
        }else{
                echo '<script>alert("Không thể import file này")</script>';
            }
        }
        return redirect()->back();
    }

}