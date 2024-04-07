<?php
include "database.php";

?>
<?php
class product{
    private $db;
    public function __construct()
    {
        $this -> db = new Database();

    }

    public function show_category(){
        $query = "SELECT * FROM tbl_category ORDER BY category_id DESC";
        $result = $this ->db->select($query);
        return $result;
    }
  
    public function show_brand() {
        $query = "SELECT * FROM tbl_brand ORDER BY brand_id DESC";
        $result = $this->db->select($query);
        return $result;
    }

    public function insert_product(){
        $product_name = $_POST['product_name'];
        $category_id = $_POST['category_id'];
        $brand_id = $_POST['brand_id'];
        $product_price = $_POST['product_price'];
        $product_price_new = $_POST['product_price_new'];
        $product_desc = $_POST['product_desc'];
        $product_img = $_FILES['product_img']['name'];
        move_uploaded_file($_FILES['product_img']['tmp_name'],"uploads/".$_FILES['product_img']['name']);
        $query = "INSERT INTO tbl_product(
            product_name,
            category_id,
            brand_id,
            product_price,
            product_price_new,
            product_desc,
            product_img) VALUES (
            '$product_name',
            '$category_id',
            '$brand_id',
            '$product_price',
            '$product_price_new',
            '$product_desc',
            '$product_img')";
        $result = $this ->db->insert($query);
        // header('Location: productlist.php');
        return $result;
    }

 
}

?>




<!-- 
   

    public function get_brand($brand_id){
        $query = "SELECT * FROM tbl_brand WHERE brand_id = '$brand_id'";
        $result = $this ->db->select($query);
        return $result;
    }
    public function update_brand($category_id,$brand_name,$brand_id){
        $query = "UPDATE tbl_brand SET brand_name = '$brand_name',category_id='$category_id' WHERE brand_id = '$brand_id'";
        $result = $this ->db->update($query);
        header('Location: brandlist.php');
        return $result;
    }

    public function delete_brand($brand_id){
        $query = "DELETE FROM tbl_brand WHERE brand_id = '$brand_id'";
        $result = $this ->db->delete($query);
        header('Location: brandlist.php');
        return $result;
    } -->