
        
        <div id="page-wrapper">

            <div class="container-fluid">

             <div class="row">

<h1 class="page-header">
  Danh sách sản phẩm

</h1>
<h3 class= "bg-success"><?php display_message(); ?></h3>
<table class="table table-hover">


    <thead>

    <tr>
           <th>Id</th>
           <th>Tên sản phẩm</th>
           <th>Phân loại</th>
           <th>Giá</th>
           <th>Số lượng</th>
      </tr>
    </thead>
    <tbody>

     <?php get_products_in_admin(); ?>


  </tbody>
</table>











                
                 


             </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->




