<!DOCTYPE html>
<html>

<head>
    <?php include('h.php');?>

    <head>

    <body>
        <div class="container">
            <?php include('navbar.php');?>
            <p></p>
            <div class="row">
                <div class="col-md-3">
                    <!-- Left side column. contains the logo and sidebar -->
                    <?php include('menu_left.php');?>
                    <!-- Content Wrapper. Contains page content -->
                    <?php
                    $act = $_GET['act'];
                    if($act == 'add'){
                    include('add_product.php');
                    }elseif ($act == 'edit') {
                    include('edit_product.php');
                    }
                    else {
                    include('product_list.php');
                    }
                    ?>
                </div>
            </div>
        </div>
    </body>

</html>