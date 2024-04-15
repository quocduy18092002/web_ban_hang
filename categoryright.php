

<?php include_once "mainclass/brand_class.php";
include_once "mainclass/category_class.php";
include_once "mainclass/product_class.php";  ?>

<?php
$category = new category;
$show_category = $category->show_category();
$product = new product;
$show_product = $product -> show_product();
?>



<div class="category-right row">
                    <div class="category-right-top-item">
                        <p>Hàng nữ mới về</p>
                    </div>
                    <div class="category-right-top-item">
                        <button><span>Bộ lọc</span><i class="fas fa-sort-down"></i></button>
                    </div>
                    <div class="category-right-top-item">
                        <select name="" id="">
                            <option value="">Sắp xếp</option>
                            <option value="">Giá cao đến thấp</option>
                            <option value="">Giá thấp đến cao</option>
                        </select>
                    </div>
                    <div class="category-right-content row">
                        <div class="category-right-content-item">
                            <img src="image/sp1.jpg" alt="">
                            <h1>COSMOS SET - ÁO CÔNG SỞ PEPLUM VÀ CHÂN VÁY XÒE</h1>
                            <p>100<sup>đ</sup></p>
                        </div>
                        <div class="category-right-content-item">
                            <img src="image/sp2.jpg" alt="">
                            <h1>COSMOS SET - ÁO CÔNG SỞ PEPLUM VÀ CHÂN VÁY XÒE</h1>
                            <p>100<sup>đ</sup></p>
                        </div>
                        <div class="category-right-content-item">
                            <img src="image/sp3.jpg" alt="">
                            <h1>COSMOS SET - ÁO CÔNG SỞ PEPLUM VÀ CHÂN VÁY XÒE</h1>
                            <p>100<sup>đ</sup></p>
                        </div>
                        <div class="category-right-content-item">
                            <img src="image/sp1.jpg" alt="">
                            <h1>COSMOS SET - ÁO CÔNG SỞ PEPLUM VÀ CHÂN VÁY XÒE</h1>
                            <p>100<sup>đ</sup></p>
                        </div>
                        <div class="category-right-content-item">
                            <img src="image/sp1.jpg" alt="">
                            <h1>COSMOS SET - ÁO CÔNG SỞ PEPLUM VÀ CHÂN VÁY XÒE</h1>
                            <p>100<sup>đ</sup></p>
                        </div>
                        <div class="category-right-content-item">
                            <img src="image/sp1.jpg" alt="">
                            <h1>COSMOS SET - ÁO CÔNG SỞ PEPLUM VÀ CHÂN VÁY XÒE</h1>
                            <p>100<sup>đ</sup></p>
                        </div>



                    </div>
                </div>

                <div class="category-right-bottom row">
                    <div class="category-right-bottom-items">
                        <p>Hiển thị <b>2</b><span>|</span> <b>4</b> sản phẩm</p>
                    </div>
                    <div class="category-right-bottom-items">
                        <p><span>&#8249;</span>1 2 3 4<span>&#8250;</span>Trang cuối</p>
                    </div>
                </div>
            </div>
        </div>
    </section>