<?php
require 'inc/head.php';
require 'inc/data/products.php';
?>
    <section class="cookies container-fluid">
        <div class="row">
<?php
    if (!isset($_SESSION['name'])){
    header("Location: login.php");
}
?>

<section class="cookies container-fluid">
    <div class="row">



            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figcaption class="caption">
                       <?php  if( $_SESSION['Pecan nuts'] > 0){ ?>
                    <p>
                        <?php echo '<h3> you have '. $_SESSION['Pecan nuts'].' Pecan nuts </h3>' ;}?>
                    </p>
                        <?php if( $_SESSION['Chocolate chips'] > 0){ ?>
                    <p>
                        <?php echo '<h3> you have '. $_SESSION['Chocolate chips'].' Chocolate chips </h3>' ;}?>
                    </p>
                        <?php if( $_SESSION['Chocolate cookies'] > 0){ ?>
                    <p>
                        <?php echo '<h3> you have '. $_SESSION['Chocolate cookies'].' Chocolate cookies </h3>' ;}?>
                    </p>
                        <?php if( $_SESSION['M&MS'] > 0){ ?>
                    <p>
                        <?php echo '<h3> you have '. $_SESSION['M&MS'].' M&MS </h3>' ;}?>
                    </p>

                </figcaption>
                </figure>
            </div>

    </div>
</section>
<?php require 'inc/foot.php'; ?>
