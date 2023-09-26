<div class="col-md-12">

<div class="row">
<h1 class="page-header">
  Thêm sản phẩm
<?php add_product(); ?>
</h1>
</div>
               


<form action="" method="post" enctype="multipart/form-data">


<div class="col-md-8">

<div class="form-group">
    <label for="product-title">Tên sản phẩm  </label>
        <input type="text" name="product_title" class="form-control">
       
    </div>


    <div class="form-group">
           <label for="product-title">Mô tả</label>
      <textarea name="product_description" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>



    <div class="form-group row">

      <div class="col-xs-3">
        <label for="product-price">Mức giá</label>
        <input type="number" name="product_price" class="form-control" size="60">
      </div>
    </div>


    <div class="form-group">
           <label for="product-title">Mô tả ngắn gọn </label>
      <textarea name="short_desc" id="" cols="30" rows="3" class="form-control"></textarea>
    </div>

    
    

</div><!--Main Content-->


<!-- SIDEBAR-->


<aside id="admin_sidebar" class="col-md-4">

     
     

     <!-- Product Categories-->

    <div class="form-group">
         <label for="product-title"> Phân loại</label>
        <select name="product_category_id" id="" class="form-control">
            <option value="">Chọn danh mục</option>
           <?php show_categories_add_product(); ?>
        </select>


</div>





    <!-- Product Brands-->


    <div class="form-group">
      <label for="product-title">Số lượng</label>
         <input type="number" name ="product_quantity" class="form-control">
    </div>


<!-- Product Tags -->


  <!--  <div class="form-group">
          <label for="product-title">Product Keywords</label>
          <hr>
        <input type="text" name="product_tags" class="form-control">
    </div>
    -->
    <!-- Product Image -->
    <div class="form-group">
        <label for="product-title">Hình ảnh</label>
        <input type="file" name="file">
      
    </div>
    <div class="form-group">
        <input type="submit" name="publish" class="btn btn-primary btn-lg" value="Thêm sản phẩm"></br>
       <input type="submit" name="draft" class="btn btn-warning btn-lg" value="Lưu dưới dạng bản nháp">
    </div>



</aside><!--SIDEBAR-->


    
</form>