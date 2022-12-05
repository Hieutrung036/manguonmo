<section>
         <div class="bg_in">
            <div class="content_page cart_page">
               <div class="breadcrumbs">
                  <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                     <li itemprop="itemListElement" itemscope
                        itemtype="http://schema.org/ListItem">
                        <a itemprop="item" href=".">
                        <span itemprop="name">Trang chủ</span></a>
                        <meta itemprop="position" content="1" />
                     </li>
                     <li itemprop="itemListElement" itemscope
                        itemtype="http://schema.org/ListItem">
                        <span itemprop="item">
                        <strong itemprop="name">
                        Giỏ hàng
                        </strong>
                        </span>
                        <meta itemprop="position" content="2" />
                     </li>
                  </ol>
               </div>
               <div class="box-title">
                  <div class="title-bar">
                     <h1>Giỏ hàng của bạn</h1>
                  </div>
               </div>
               <div class="content_text">
                  <div class="container_table">
                     <table class="table table-hover table-condensed">
                        <thead>
                           <tr class="tr tr_first">
                              <th >Hình ảnh</th>
                              <th>Tên sản phẩm</th>
                              <th>Mã sản phẩm</th>
                              <th >Giá</th>
                              <th style="width:100px;">Số lượng</th>
                              <th>Thành tiền</th>
                              <th style="width:50px; text-align:center;"></th>
                           </tr>
                        </thead>
                        <tbody>
                           <form action='./gio-hang/' method="post">
                              <tr class="tr">
                                 <td data-th="Hình ảnh">
                                    <div class="col_table_image col_table_hidden-xs"><img src="<?php echo BASE_URL ?>/public/images/iphone1.jpg" alt="Máy in laser Canon LBP251DW" class="img-responsive"/></div>
                                 </td>
                                 <td data-th="Sản phẩm">
                                    <div class="col_table_name">
                                       <h4 class="nomargin">Iphone 1</h4>
                                    </div>
                                 </td>
                                 <td data-th="Mã sản phẩm">
                                    <div class="col_table_name">
                                       <h4 class="nomargin">Iphone 1</h4>
                                    </div>
                                 </td>
                                 <td data-th="Giá"><span class="color_red font_money">0</span></td>
                                 <td data-th="Số lượng">
                                    <div class="clear margintop5">
                                       <div class="floatleft"><input type="number" class="inputsoluong" name="qty[576]"  value="1"></div>
                                       <input type="hidden" name="check" value="999">
                                       <div class="floatleft width50">
                                          <button class="btn_df btn_table_td_rf_del btn-sm">
                                          <i class="fa fa-refresh"></i></button>
                                       </div>
                                    </div>
                                    <div class="clear"></div>
                                 </td>
                                 <td data-th="Thành tiền" class="text_center"><span class="color_red font_money">0 đ</span></td>
                                 <td class="actions aligncenter" data-th="">
                                    <a onclick="return del(576,'Máy in laser Canon LBP251DW');" class="btn_df btn_table_td_rf_del btn-sm"><i class="fa fa-trash-o"></i> <span class="display_mobile">Xóa sản phẩm</span></a>                          
                                 </td>
                              </tr>
                           </form>
                           <tr>
                              <td colspan="7" class="textright_text">
                                 <div class="sum_price_all">
                                    <span class="text_price">Tổng tiền thành toán</span>: 
                                    <span class="text_price color_red">0 đ</span>
                                 </div>
                              </td>
                           </tr>
                        </tbody>
                        <tfoot>
                           <tr class="tr_last">
                              <td colspan="7">
                                 <a href="." class="btn_df btn_table floatleft"><i class="fa fa-long-arrow-left"></i> Tiếp tục mua hàng</a>
                                 <div class="clear"></div>
                              </td>
                           </tr>
                        </tfoot>
                     </table>
                  </div>
                  
               </div>
            </div>
         </div>
      </section>
      <div class="clear"></div>