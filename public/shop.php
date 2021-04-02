<?php require_once("../resources/config.php"); ?>
<?php require_once("../resources/functions.php"); ?>
<?php include(FRONT_TEMPLATE . DS . "header.php") ?>

<!-- Page Content -->
<div class="container">
    <!-- Title -->
    <div class="row">
        <div class="col-lg-12">
            <h3>Latest Products</h3>
        </div>
    </div>
    <!-- /.row -->

    <!-- Page Features -->
    <div class="row text-center">

        <?php

        get_shop_products();

        ?>

    </div>
    <!-- /.row -->

    <hr>

    <!-- Footer -->
    <?php include(FRONT_TEMPLATE . DS . "footer.php") ?>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
