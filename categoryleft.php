<?php include_once "mainclass/brand_class.php";
include_once "mainclass/category_class.php"; ?>
<?php
$category = new category;
$show_category = $category->show_category();
?>

<div class="container">
    <div class="row">
        <div class="category-left">
            <ul>
                <?php
                if ($show_category) {
                    while ($result = $show_category->fetch_assoc()) {
                ?>
                        <li class="category-left-li" id="<?php echo $result['category_id'] ?>">
                            <?php echo $result['category_name']; ?>
                            <ul class="brand-list" id="brand_<?php echo $result['category_id']; ?>"></ul>
                        </li>
                <?php
                    }
                }
                ?>
            </ul>
        </div>
        <?php include "categoryright.php"; ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        $('.category-left-li').click(function(){
            var category_id = $(this).attr('id');
            $.get("brand_ajax.php", { category_id: category_id }, function(data){
                $("#brand_" + category_id).html(data);
            });
        });
    });
</script>
