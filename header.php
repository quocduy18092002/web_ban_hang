
<?php
include ("mainclass/category_class.php");
include ("mainclass/brand_class.php");

?>

<?php
$category = new category;
$show_category = $category -> show_category();
$brand = new brand;
$show_brand = $brand -> show_brand();
?>



<section class="top">
        <div class="container">
            <div class="row">
                <div class="top-logo">
                    <img src="image/logo.jpg" alt="">
                </div>
                <div class="top-menu-items">
                    <ul>
                   <?php if($show_category) {
                     while($result = $show_category->fetch_assoc()) { ?>
                         <li id="<?php echo $result['category_id']; ?>">
                    <a href="category.php"><?php echo $result['category_name']; ?></a>
                    <ul class="top-menu-item" id="brand_id">

                    </ul>
                </li>
        <?php } } ?>
        
    </ul>                    
</div>

                <div class="top-menu-icons">
                    <ul>
                        <li>
                            <input placeholder="Tìm kiếm" type="text">
                             <i class="fas fa-search"></i>
                        </li>
                        <li>
                            <i class="fa fa-user-secret" href=""></i>
                        </li>
                        <li>
                            <i class="fa fa-shopping-cart" href=""></i>
                        </li>
                      
                    </ul>
                </div>
            </div>
         
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        // Xử lý sự kiện cho các phần tử top-menu-item
        $('.top-menu-item').mouseenter(function(){
            var categoryId = $(this).attr('id');
            getBrandData(categoryId);
        });

    

        // Hàm để lấy dữ liệu thương hiệu từ server và cập nhật nội dung của phần tử brand-list
        function getBrandData(categoryId) {
            $.get("brand_ajax.php", { category_id: categoryId }, function(data){
                $("#brand_" + categoryId).html(data);
            });
        }
    });
</script>


   
    </section>

    