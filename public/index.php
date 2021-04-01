<?php require_once("../resources/functions.php"); ?>
<?php include(FRONT_TEMPLATE . DS . "header.php") ?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Side nav include -->
            <div class="col-md-3">
                <?php include(FRONT_TEMPLATE . DS . "side_nav.php") ?>
            </div>

            <div class="col-md-9">

                <!-- Slider -->
                <?php include(FRONT_TEMPLATE . DS . "slider.php") ?>

                <div class="row">

                    <?php

                    get_products();

                    ?>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <h4><a href="#">Like this template?</a>
                        </h4>
                        <p>If you like this template, then check out <a target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this tutorial</a> on how to build a working review system for your online store!</p>
                        <a class="btn btn-primary" target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">View Tutorial</a>
                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <?php include(FRONT_TEMPLATE . DS . "footer.php") ?>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
