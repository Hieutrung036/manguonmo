
    
<section>
        <div class="bg_in">
            <style type="text/css">
                .grids.home_product{
                    height: 372px;
                }
            </style>
            <div class="module_pro_all">
                <div class="box-title">
                    <div class="title-bar">
                        <h1>Sách HOT</h1>
                        <a class="read_more" href="<?php echo BASE_URL ?>/sanpham/sanphamhot">Xem thêm </a>
                    </div>
                </div>
                <div class="box-title">
                    <div class="title-bar">
                        <h1>Sách bán chạy</h1>
                        <a class="read_more" href="<?php echo BASE_URL ?>/sanpham/sanphambanchay">Xem thêm </a>
                    </div>
                </div>
                
                <div class="pro_all_gird">
                    <div class="girds_all list_all_other_page home_product">
                        <?php 
                foreach($product_home as $key => $product){
                    if($product['product_hot']==1){
                ?>
                <div class="grids">
                <div class="grids_in">
                    <div class="content">
                        <div class="img-right-pro">
                            <a href="sanpham.php">
                            <img class="lazy img-pro content-image" src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $product['image_product'] ?>" data-original="image/iphone.png" alt="Máy in Canon MF229DW" />
                            </a>
                            <div class="content-overlay"></div>
                            <div class="content-details fadeIn-top">
                            <ul class="details-product-overlay">
                                <?php echo $product['desc_product']?>
                            </ul>
                            </div>
                        </div>
                        <div class="name-pro-right">
                            <a href="<?php echo BASE_URL ?>/sanpham/chitietsanpham/<?php echo $product['id_product'] ?>">
                            <h3><?php echo $product['title_product']?></h3>
                            </a>
                        </div>
                        <div class="add_card">
                            <a onclick="return giohang(579);">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> Đặt hàng
                            </a>
                        </div>
                        <div class="price_old_new">
                            <div class="price">
                            <span class="news_price"><?php echo number_format($product['price_product'],0,',','.').'đ' ?> </span>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <?php 
                    }
                }
                ?>

                        <div class="clear"></div>
                    </div>
                    
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
            <?php 
            foreach($category as $key => $cate){
               
            ?>
            <div class="module_pro_all">
                <div class="box-title">
                    <div class="title-bar">
                        <h1><?php echo $cate['title_category_product']?></h1>
                        <a class="read_more" href="<?php echo BASE_URL ?>/sanpham/danhmuc/<?php echo $cate
                        ['id_category_product'] ?>">Xem thêm
                         </a>
                    </div>
                </div>
                <div class="pro_all_gird">
                   
                    <div class="girds_all list_all_other_page ">
                    <?php
                        foreach($product_home as $key => $pro_cate){
                        if($cate['id_category_product']==$pro_cate['id_category_product']){
                    ?>
                            <div class="grids">
                <div class="grids_in">
                    <div class="content">
                        <div class="img-right-pro">
                            <a href="sanpham.php">
                            <img class="lazy img-pro content-image" src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $pro_cate['image_product'] ?>" data-original="image/iphone.png" alt="Máy in Canon MF229DW" />
                            </a>
                            <div class="content-overlay"></div>
                            <div class="content-details fadeIn-top">
                            <ul class="details-product-overlay">
                                <?php echo $pro_cate['desc_product']?>
                            </ul>
                            </div>
                        </div>
                        <div class="name-pro-right">
                            <a href="<?php echo BASE_URL ?>/sanpham/chitietsanpham/<?php echo $product['id_product'] ?>">
                            <h3><?php echo $pro_cate['title_product']?></h3>
                            </a>
                        </div>
                        <div class="add_card">
                            <a onclick="return giohang(579);">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> Đặt hàng
                            </a>
                        </div>
                        <div class="price_old_new">
                            <div class="price">
                            <span class="news_price"><?php echo number_format($pro_cate['price_product'],0,',','.').'đ' ?> </span>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                        <?php 
                            }
                        }
                        ?>
                       
                        
                       
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
            <?php 
                
            }
            ?>

    </section>
    <!--end:body-->

    <div class="clear"></div>
   

   

    
  