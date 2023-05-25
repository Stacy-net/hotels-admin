<?php
require "app/header.php";
require "app/include/function.php";

?>


<?php 
 $hotelsInfo = get_categories();
?>

<section class="hotel_list section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="section_tittle text-center">
                    <h2>Top Hotel & Restaurants</h2>
                    <p>Waters make fish every without firmament saw had. Morning air subdue. Our. Air very one. Whales grass is fish whales winged.</p>
                </div>
            </div>
        </div>
    
        <div class="row">
                <?php foreach($hotelsInfo as $info): ?>
            <div class="col-lg-4 col-sm-6">
                <div class="single_ihotel_list">
                    <img src="<?=$info['img']; ?>" alt="">
                    <div class="hotel_text_iner">
                        <h3> <a href="details-hotel.php?id=<?=$info['id'];?>"> <?=$info['name']; ?> </a></h3>
                        <div class="place_review">
                            
                            <span> Rooms: <?=$info['rooms']; ?></span>
                        </div>
                        <p><?=$info['locations']; ?></p>
                        <span><?=$info['min_description']; ?></span>
                        <h5>From $ <span><?=$info['price']; ?></span></h5>
                    </div>
                </div>
            </div>
                
                
         <?php endforeach; ?>      

            </div>
                
                
                </div>
            </div>
        </div>
    </section>


<?php 
require($_SERVER['DOCUMENT_ROOT'] . '/all-coments.php');
?>


</div>

<section class="best_services">
<div class="container section_padding">
    <div class="row justify-content-center">
        <div class="col-xl-6">
            <div class="section_tittle text-center">
                <h2>We offered best services</h2>
                <p>Waters make fish every without firmament saw had. Morning air subdue. Our. Air very one. Whales grass is fish whales winged.</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="single_ihotel_list">
                <img src="img/services_1.png" alt="">
                <h3> <a href="#"> Transportation</a></h3>
                <p>All transportation cost we bear</p>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="single_ihotel_list">
                <img src="img/services_2.png" alt="">
                <h3> <a href="#"> Guidence</a></h3>
                <p>We offer the best guidence for you</p>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="single_ihotel_list">
                <img src="img/services_3.png" alt="">
                <h3> <a href="#"> Accomodation</a></h3>
                <p>Luxarious and comfortable</p>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="single_ihotel_list">
                <img src="img/services_4.png" alt="">
                <h3> <a href="#"> Discover world</a></h3>
                <p>Best tour plan for your next tour</p>
            </div>
        </div>
    </div>
</div>
   
<?php
require "app/footer.php"
?>