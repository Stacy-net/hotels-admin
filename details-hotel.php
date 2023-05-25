<?php
require "app/header.php";
require "app/include/function.php";

?>


<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                            <div class="breadcrumb_iner_item text-center">
                                <h2>Hotel details</h2>
                                
                            </div>
                    </div>
                </div>
        </div>
    </div>
</section>
    <?php
        $id = $_GET['id'] - 1;
        $hotelsInfo = getHotelsInfo();
        $hotel = $hotelsInfo[$id];

    ?>

<section class="blog_area single-post-area section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post">
                    <div class="feature-img" id="img-hotel" >
                        <img class="img-fluid"  src="<?php echo $hotel['img'];?>" alt="">
                    </div>
                    <div class="blog_details">
                        <h2><?php echo $hotel['name']; ?></h2>

                        <div class="quote-wrapper">
                            <div class="quotes">
                                <?php echo $hotel['description']; 
                                unset($id);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
require "app/footer.php"
?>


