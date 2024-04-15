
<?php
$category = new category;
$show_category = $category -> show_category();
?>

<section class="category">
        <div class="container">
            <div class="category-top">
                <div class="row">
                <?php
                        if($show_category){$i=0;
                            while($result = $show_category->fetch_assoc()){$i++
                        
                        ?>
                    <p><?php echo $result['category_name']  ?></p><span>&#8594;</span>
             
                    <?php
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
      <?php
        include "categoryleft.php";
      ?>