<?php require_once("../resources/functions.php"); ?>
<?php include(FRONT_TEMPLATE . DS . "header.php") ?>

<!-- Page Content -->
<div class="container">

    <header>
        <h1 class="text-center">Login</h1>
        <h5 class="text-danger text-center"> <?php displayMessage(); ?> </h5>
        <div class="col-sm-4 col-sm-offset-5">
            <form class="" action="" method="post" enctype="multipart/form-data">
                <?php login(); ?>
                <div class="form-group"><label for="">
                        username<input type="text" name="username" class="form-control"></label>
                </div>
                <div class="form-group"><label for="password">
                        Password<input type="text" name="password" class="form-control"></label>
                </div>

                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary">
                </div>
            </form>
        </div>


    </header>


</div>

</div>
<!-- /.container -->

<div class="container">

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