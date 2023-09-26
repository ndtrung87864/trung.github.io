<?php require_once('..\..\kresources\config.php'); ?>
<?php include(TEMPLATE_BACK . '\header_user.php'); ?>
<?php if (!isset($_SESSION['username'])) {
    redirect('..\..\public\index_user.php');
}

?>

<div id="page-wrapper">

    <div class="container-fluid">


        <?php
        if ($_SERVER['REQUEST_URI'] == "/Codes/public/admin/index_user.php") {
            include(TEMPLATE_BACK . '\content.php');
        }
        //orders******************************************************************************
        if (isset($_GET['orders'])) {
            include(TEMPLATE_BACK . '\orders.php');
        }

        //adding products**********************************************************************
        //users*******************************************************************************
        if (isset($_GET['users'])) {
            include(TEMPLATE_BACK . '\user.php');
        }
        if (isset($_GET['address'])) {
            include(TEMPLATE_BACK . '\address.php');
        }

        if (isset($_GET['edit_user'])) {
            include(TEMPLATE_BACK . '\edit_user.php');
        }
        if (isset($_GET['add_address'])) {
            include(TEMPLATE_BACK . '\add_address.php');
        }

        //New Slides*******************************************************************************
        if (isset($_GET['slides'])) {
            include(TEMPLATE_BACK . "\slides.php");
        }

        //Deleting Slides*******************************************************************************
        if (isset($_GET['delete_slide_id'])) {
            include(TEMPLATE_BACK . "\delete_slide.php");
        }




        ?>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<?php include(TEMPLATE_BACK . '\footer.php'); ?>