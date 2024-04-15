<?php
include_once "mainclass/brand_class.php";

if(isset($_GET['category_id'])) {
    $category_id = $_GET['category_id'];
    $brand = new brand;
    $show_brand_ajax = $brand->show_brand_ajax($category_id);
    if($show_brand_ajax) {
        while($result = $show_brand_ajax->fetch_assoc()) { ?>
            <li><?php echo $result['brand_name']; ?></li>
    <?php }
    }
}
?>
