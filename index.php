<?php
require 'inc/data/products.php';
require 'inc/head.php';


if (!isset($_GET['add_to_cart'])) {
    $_SESSION['Pecan nuts'] = 0;
    $_SESSION['Chocolate chips'] = 0;
    $_SESSION['Chocolate cookies'] = 0;
    $_SESSION['M&MS'] = 0;
}

if (isset($_GET['add_to_cart'])) {
    if ($_GET['add_to_cart'] == 46) {
        $_SESSION['Pecan nuts'] = $_SESSION['Pecan nuts'] + 1;
    }
    if ($_GET['add_to_cart'] == 36) {
        $_SESSION['Chocolate chips'] = $_SESSION['Chocolate chips'] + 1;
    }
    if ($_GET['add_to_cart'] == 58) {
        $_SESSION['Chocolate cookies'] = $_SESSION['Chocolate cookies'] + 1;
    }
    if ($_GET['add_to_cart'] == 32) {
        $_SESSION['M&MS'] = $_SESSION['M&MS'] + 1;
    }
}


?>
    <section class="cookies container-fluid">
        <div class="row">
            <?php foreach ($catalog as $id => $cookie) { ?>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <figure class="thumbnail text-center">
                        <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>"
                             class="img-responsive">
                        <figcaption class="caption">
                            <h3><?= $cookie['name']; ?></h3>
                            <p><?= $cookie['description']; ?></p>
                            <a href="?add_to_cart=<?= $id; ?>" class="btn btn-primary">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                            </a>
                        </figcaption>
                    </figure>
                </div>
            <?php } ?>
        </div>
    </section>
    <?php require 'inc/foot.php';

?>