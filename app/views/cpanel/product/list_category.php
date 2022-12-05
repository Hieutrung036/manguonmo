
  <?php
      if(!empty($_GET['msg'])){
          $msg = unserialize(urldecode($_GET['msg']));
          foreach ($msg as $key => $value){
              echo '<span style="color:blue;font-weight:bold">'.$value.'</span>';
          }
      }
  ?>
  
     

    
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
				<ul class="nav menu">
					<li class="active"><a href="<?php echo BASE_URL ?>/product/list_category"><svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"/></svg>Quản lý danh mục</a></li>
					<li><a href="product.html"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>Quản lý sản phẩm</a></li>
					<li><a href="../index.html"><svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"/></svg>Về EduBook</a></li>
				</ul>
		
			</div>
      <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Quản lý danh mục</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Quản lý danh mục</h1>
			</div>
		</div><!--/.row-->
		<div id="toolbar" class="btn-group">
            <a href="<?php echo BASE_URL ?>/product/add_category/" class="btn btn-success">
                <i class=""></i> Thêm danh mục
            </a>
        </div>
    <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <table 
                                    data-toolbar="#toolbar"
                                    data-toggle="table">

                                    <thead>
                                    <tr>
                                        <th data-field="id" data-sortable="true">ID</th>
                                        <th data-field="name"  data-sortable="true">Tên danh mục</th>
                                        <th data-field="desc" data-sortable="true">Mô tả</th>
                                        <th data-field="price" data-sortable="true">Chức năng</th>
                                    </tr>
                                    </thead>
                                    <?php
                                    $i = 0;
                                    foreach($category as $key =>$cate){
                                        $i++;
                                    ?>
                                    <tr>
                                    <td><?php echo $i ?></td>
                                    <td><?php echo $cate['title_category_product'] ?></td>
                                    <td><?php echo $cate['desc_category_product'] ?></td>
                                    <td><a href="<?php echo BASE_URL ?>/product/delete_category/<?php echo $cate['id_category_product']?>">Xóa</a> || 
                                    <a href="<?php echo BASE_URL ?>/product/edit_category/<?php echo $cate['id_category_product']?>">Cập nhật</a></td>
                                  </tr>
                                  <?php
                              }
                                    ?>
                                </table>
                            </div>


                            <div class="panel-footer">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div><!--/.row-->	