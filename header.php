
<?php
include ("mainclass/category_class.php");
include ("mainclass/brand_class.php");
include "admin/database.php";
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
                        <?php
                        if($show_category){$i=0;
                            while($result = $show_category->fetch_assoc()){$i++
                        
                        ?>
                       <li> <?php echo $result['category_name'] ?>
                       
                             <ul class="top-menu-item">
                             <?php
                        if($show_brand){$i=0;
                            while($resultA = $show_brand->fetch_assoc()){$i++
                        
                        ?>
                             <li>
                                <a href="product.php?brand_id=<?php echo $resultA['brand_id']; ?>"><?php echo $resultA['brand_name']  ?></a>
                            </li>

                            <?php

                            }
                        }
                            ?>
                           
                             </ul>
                        </li>
                        <?php
                            }
                        }
                        ?>
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
   
    </section>