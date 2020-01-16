<header id="page-header" class="page-header-container">
                <div class="page-header-top">
                    <div class="page-header-top-items container">
                        <div class="row">
                            <div class="col-md-7 col-lg-8 col-sm-2 hide-on-mobile">
                                <p class="text-muted">The world's leading lone-worker solutions!</p>
                            </div>
                            <div class="col-md-3 col-lg-2 col-sm-6  top-item-buy">
                                <a href="<?= ($page == 'products') ? 'products' : 'products/products' ?>"><i class="fas fa-store"></i> View Products</a>
                            </div>
                            <div class="col-md-2 col-lg-2 col-sm-6  top-item-enquiry">
                                <a href="<?= ($page == 'products') ? '../contactus#formcontainer' : 'contactus#formcontainer' ?>"><i class="fas fa-comment-dots"></i> Enquiry</a>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="page-header-content">
                <div class="container">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <div id="logo" class="col-sm-8 col-md-6 col-lg-3">
                                <!-- <a class="navbar-brand" href="https://duressandsafety.com.au/"><img class="img-fluid" src="<?= ($page == 'products') ? '../assets/images/logo.png' :  'assets/images/logo.png'?>" alt="Duress Logo"></a> -->
                                <a class="navbar-brand" href="<?= ($page == 'products') ? '../index.php' : 'index.php' ?>"><img class="img-fluid" src="<?= ($page == 'products') ? '../assets/images/logo.png' :  'assets/images/logo.png'?>" alt="Duress Logo"></a>
                                
                            </div>
                            
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                            </button>
                          
                            <div class="collapse navbar-collapse col-sm-12 col-md-12 col-lg-9" id="navbarSupportedContent">
                              <ul class="navbar-nav">

                                <li class="nav-item <?php if($page == 'home') {echo 'active';}?>">
                                  <a class="nav-link" href="<?= ($page == 'products') ? '../index.php' : 'index.php' ?>">Home </a>
                                  <!-- <a class="nav-link" href="https://duressandsafety.com.au/">Home </a> -->
                                </li>

                                <li class="nav-item <?php if($page == 'about') {echo 'active';}?>">
                                  <a class="nav-link" href="<?= ($page == 'products') ? '../aboutus' : 'aboutus' ?>">About Us </a>
                                </li>

                                    <li class="nav-item dropdown <?php if($page == 'products' && $pages != 'solutions') {echo 'active';}?>">

                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Products
                                        </a>
                                        
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        
                                            <a class="dropdown-item" href="<?= ($page == 'products') ? '../products/products_smalltomedium' : 'products/products_smalltomedium' ?>"><i class="fas fa-caret-right"></i> Small to medium site</a>
                                                <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item nav-link dropdown-toggle" href="<?= ($page == 'products') ? '../products/products_smalltomedium' : 'products/products_smalltomedium' ?>""><i class="fas fa-caret-right"></i> Small to medium site</a>
                                                </div> -->
                                            <a class="dropdown-item" href="<?= ($page == 'products') ? '../products/products_mediumtolarge' : 'products/products_mediumtolarge' ?> "><i class="fas fa-caret-right"></i> Medium to large site</a>
                                            
                                            <a class="dropdown-item" href="<?= ($page == 'products') ? '../products/products_widearea' : 'products/products_widearea' ?> "><i class="fas fa-caret-right"></i> Wide Area Cellular</a>
                                            <a class="dropdown-item" href="<?= ($page == 'products') ? '../products/products_wideareasatellite' : 'products/products_wideareasatellite' ?> "><i class="fas fa-caret-right"></i> Wide Area Satellite</a>
                                            <a class="dropdown-item" href="<?= ($page == 'products') ? '../products/products_monitoring' : 'products/products_monitoring' ?> "><i class="fas fa-caret-right"></i> Monitoring</a>
                                            <a class="dropdown-item" href="<?= ($page == 'products') ? '../products/products_mapping-tracking' : 'products/products_mapping-tracking' ?> "><i class="fas fa-caret-right"></i> Mapping and Tracking</a>
                                            <a class="dropdown-item" href="<?= ($page == 'products') ? '../products/products_dangerous' : 'products/products_dangerous' ?> "><i class="fas fa-caret-right"></i> Dangerous Areas</a>
                                            <a class="dropdown-item" href="<?= ($page == 'products') ? '../products/products_assettracking' : 'products/products_assettracking' ?> "><i class="fas fa-caret-right"></i> Asset Tracking</a>
                                            <a class="dropdown-item" href="<?= ($page == 'products') ? '../products/products_vehiclesystems' : 'products/products_vehiclesystems' ?> "><i class="fas fa-caret-right"></i> In Vehicle Systems</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="<?= ($page == 'products') ? '../products/products_transmitters' : 'products/products_transmitters' ?> "><i class="fas fa-caret-right"></i> Personal Transmitters</a>
                                            <a class="dropdown-item" href="<?= ($page == 'products') ? '../products/products_messagecentres' : 'products/products_messagecentres' ?> "><i class="fas fa-caret-right"></i> Message Centres</a>
                                            <a class="dropdown-item" href="<?= ($page == 'products') ? '../products/products_accessories' : 'products/products_accessories' ?> "><i class="fas fa-caret-right"></i> Accessories</a>
                                        </div>
                                    </li>
                                <li class="nav-item <?php if($page == 'services') {echo 'active';}?>">
                                  <a class="nav-link <?php if($page == 'services') {echo 'active';}?>" href="<?= ($page == 'products') ? '../services' : 'services' ?>">Services</a>
                                </li>

                                <li class="nav-item dropdown <?php if($pages == 'solutions') {echo 'active';}?>">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Solutions
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="<?= ($page == 'products') ? '../products/assettracking' : 'products/assettracking' ?>"><i class="fas fa-caret-right"></i> Asset tracking</a>
                                            <a class="dropdown-item" href="<?= ($page == 'products') ? '../products/products_paccs-systems' : 'products/products_paccs-systems' ?>"><i class="fas fa-caret-right"></i> PACCS system</a>
                                            <a class="dropdown-item" href="<?= ($page == 'products') ? '../products/safer_connected_sites' : 'products/safer_connected_sites' ?>"><i class="fas fa-caret-right"></i> Safer connected site</a>
                                            <a class="dropdown-item" href="<?= ($page == 'products') ? '../products/safer_connected_campus' : 'products/safer_connected_campus' ?>"><i class="fas fa-caret-right"></i> Safer connected campus</a>
                                            <a class="dropdown-item" href="<?= ($page == 'products') ? '../products/notificationserver' : 'products/notificationserver' ?>"><i class="fas fa-caret-right"></i> Notification servers and unified communication systems</a>
                                            <a class="dropdown-item" href="<?= ($page == 'products') ? '../products/wirelesscoverage' : 'products/wirelesscoverage' ?>"><i class="fas fa-caret-right"></i> Wireless coverage solutions</a>
                                        </div>
                                </li>

                                <li class="nav-item <?php if($page == 'support') {echo 'active';}?>">
                                    <a class="nav-link <?php if($page == 'support') {echo 'active';}?>" href="<?= ($page == 'products') ? '../support' : 'support' ?>">Support</a>
                                </li>

                                <li class="nav-item <?php if($page == 'contact') {echo 'active';}?>">
                                    <a class="nav-link" href="<?= ($page == 'products') ? '../contactus' : 'contactus' ?>">Contact Us</a>
                                </li>

                            </div>
                          </nav>
                    </div>
                </div>
            </div>