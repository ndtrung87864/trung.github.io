<?php require_once('..\kresources\config.php'); ?>
<?php include(TEMPLATE_FRONT . DS . 'header_user.php'); ?>

<!-- Page Content -->
<div class="container">


    <!-- /.row -->

    <div class="row">
        <h4 class="text-center bg-danger">
            <?php display_message(); ?>
        </h4>
        <h1>Giỏ hàng</h1>
        <div class="col-lg-4 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div>
                        <table>
                            <?php buy_address(); ?>
                        </table>
                    </div>
                </div>
                <a href="admin/index_user.php?address">
                    <div class="panel-footer">
                        <span class="pull-left">Thay đổi địa chỉ </span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i>&nbsp;&#8594;
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>


        </div>
        <form action="" method="post">
            <input type="hidden" name="cmd" value="_cart">
            <input type="hidden" name="business" value="tendai2@business.com">
            <input type="hidden" name="currency_code" value="CNY">
            <input type="hidden" name="upload" value="1">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Sản phẩm </th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                    </tr>
                </thead>

                <tbody>


                    <?php buy_cart(); ?>




                </tbody>
            </table>
        </form>


</div>
<!-- /.container -->



<?php include(TEMPLATE_FRONT . DS . 'footer.php'); ?>