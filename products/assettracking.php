<?php 
    $page = "";
    
    $page = 'products';
    $pages = 'solutions';

    $heading = 'SOLUTION – ASSET TRACKING';

include_once('../templates/header.php'); ?>


<section id="page-content" class="page-content-container page-product-container">
            <div class="container page-content-items page-product-items ">  
                <h2>Tracking your valuable assets</h2>
            
                <div class="row pt-20">
                    <div class="container">


                    <?php include_once('../partials/page-product-list-title.php');?>


                        <div class="page-product-list row">
                            <div class="col-md-3 col-sm-6">
                                <div class="page-product-thumbnail text-center">
                                        <img src="../assets/images/truck6.jpg" alt="Logistics" class="img-fluid">
                                        <div class="page-product-caption">
                                            <p>Logistics</p>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="page-product-thumbnail text-center">
                                        <img src="../assets/images/transpo.jpg" alt="Transport" class="img-fluid">
                                        <div class="page-product-caption">
                                            <p>Transport</p>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="page-product-thumbnail text-center">
                                        <img src="../assets/images/local.jpg" alt="Local Government" class="img-fluid">
                                        <div class="page-product-caption">
                                            <p>Local Government</p>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="page-product-thumbnail text-center">
                                        <img src="../assets/images/truck4.jpg" alt="Trucking" class="img-fluid">
                                        <div class="page-product-caption">
                                            <p>Trucking</p>
                                        </div>
                                </div>
                            </div>

                        <div class="container">
                        
                            <p>
                            You have a need to track valuable moving assets: trucks, cars, industrial and mining equipment, boats or planes. Or you may need to track assets that are moved or can be stolen: containers, equipment, tools, trailers or even permanent structures, that are valuable and could but shouldn't be moved, such as road signs or storage tanks.
                            </p>

                            <p class="pb-20">
                            Whatever the need, there is a solution that will know where the asset is at all times, when it moves and where it moves to. It can alert you, show the location on a map, and provide detailed log information to your requirements.
                            </p>

                            <a href="products_assettracking"  class="pt-10 btn btn-block btn-primary text-uppercase">View Our Asset Tracking Products</a>
                        </div>
                            
                        </div>

                    </div>
                </div>

  
            

                <?php include_once('../partials/bottom-contact-partial.php'); ?>
            </div>




</section>



<?php include_once('../templates/footer.php'); ?>
