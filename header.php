<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $Description; ?>">
    <meta name="keywords" content="<?php echo $Keywords; ?>">
    <title><?php echo $title; ?></title>
    <link rel="canonical" href="<?php echo $Canonical; ?>">
    <meta name="robots" content="index, follow">

    <!-- og tags -->
    <meta property="og:locale" content="en_ca" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Three Brothers" />
    <meta property="og:url" content="<?php echo $Canonical; ?>">
    <meta property="og:title" content="<?php echo $title; ?>">
    <meta property="og:description" content="<?php echo $Description; ?>">
    <meta property="og:image" content="<?php echo $Bannerimg; ?>">


    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css?1">
    <link rel="stylesheet" type="text/css" href="css/header.css?1">
    <link rel="stylesheet" type="text/css" href="css/footer.css?1">
    <link rel="icon" type="text/css" href="assets/images/favicon.png">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.0/baguetteBox.min.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".megamenu").on("click",function(e) {
                e.stopPropagation();
            });
        });

        $(document).ready(function() {
            $('#myTab a').on('click',function(e) {
                e.preventDefault()
                $(this).tab('show')
            });
        });
    </script>
   

</head>


<body>


  <!-- scroll to top -->
  <a id="top" title="Back to Top">
    <p id="arrow" title="Back To Top"><img src="assets/images/top.png"></p>
  </a>
  <!-- end scroll to top -->

    <header class="top_header">
        <div class="container">
             <div class="row justify-content-around logo-area">
                <div class="col-xl-4 col-lg-4 col-md-5 col-sm-6">
                  <div class="logo">
                    <a href="#"><img src="assets/images/logo.png" alt="logo" class="img-fluid"></a>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 header-right align-self-center">
                  <div class="call">
                      <a href="tel:+918882227180"><i class="fa fa-phone"></i> <span>+91-888-222-7180</span></a>
                  </div>
                  <div class="call">
                      <a href="mailto:info@threebrotherssourcing.in"><i class="fa fa-envelope"></i> <span>info@threebrotherssourcing.in</span></a>
                  </div>
                </div>
              </div><!-- /row -->
        </div>
    </header>



    <div class="header">    
        <nav class="navbar navbar-expand-lg navbar-light sticks"  id="myHeader">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-toggle="" data-target="#mobile_nav"
                    aria-controls="mobile_nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </span>
                </button>
                <div class="navbar-collapse justify-content-center" id="mobile_nav">
                    <ul class="navbar-nav navbar-light">
                        <li class="nav-item dropdown megamenu-li dmenu">
                            <a class="nav-link header-blog header_aboutlink" href="#">About Us</a>
                        </li>
                       
                       <li class="nav-item dropdown megamenu-li dmenu">
                            <a class="nav-link" href="" id="dropdown01" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Wall Decor <i class="fa fa-angle-down"></i></a>
                            <div class="dropdown-menu megamenu sm-menu" aria-labelledby="dropdown01">
                                <div class="mega-menu-details about-menu-details">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-3 col-lg-3 col-sm-6  about-header-tab">
                                            <ul class="header_products_list">
                                                <li><a href="#">Photo Frames</a></li>
                                                <li><a href="#">Globes</a></li>
                                                <li><a href="#">Bookends</a></li>
                                                <li><a href="#">Initials</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-sm-6 about-header-tab">
                                            <ul class="header_products_list">
                                                <li><a href="#">Vases</a></li>
                                                <li><a href="#">Decor Accents</a></li>
                                                <li><a href="#">Home Essentials</a></li>
                                                <li><a href="#">Wall Decor</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-xl-5 col-lg-5 col-sm-6 about-header-tab d-flex">
                                            <img src="assets/images/list-1.jpg" class="img-fluid">
                                            <img src="assets/images/list-2.jpg" class="img-fluid">
                                        </div>
                                    </div><!-- /row -->
                                </div>
                            </div>
                        </li>
                       
                       <li class="nav-item dropdown megamenu-li dmenu">
                            <a class="nav-link" href="" id="dropdown01" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Home Accessories <i class="fa fa-angle-down"></i></a>
                            <div class="dropdown-menu megamenu sm-menu" aria-labelledby="dropdown01">
                                <div class="mega-menu-details about-menu-details">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-3 col-lg-3 col-sm-6  about-header-tab">
                                            <ul class="header_products_list">
                                                <li><a href="#">Photo Frames</a></li>
                                                <li><a href="#">Globes</a></li>
                                                <li><a href="#">Bookends</a></li>
                                                <li><a href="#">Initials</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-sm-6 about-header-tab">
                                            <ul class="header_products_list">
                                                <li><a href="#">Vases</a></li>
                                                <li><a href="#">Decor Accents</a></li>
                                                <li><a href="#">Home Essentials</a></li>
                                                <li><a href="#">Wall Decor</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-xl-5 col-lg-5 col-sm-6 about-header-tab d-flex">
                                            <img src="assets/images/list-1.jpg" class="img-fluid">
                                            <img src="assets/images/list-2.jpg" class="img-fluid">
                                        </div>
                                    </div><!-- /row -->
                                </div>
                            </div>
                        </li>

                       <li class="nav-item dropdown megamenu-li dmenu">
                            <a class="nav-link" href="" id="dropdown01" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Furniture <i class="fa fa-angle-down"></i></a>
                            <div class="dropdown-menu megamenu sm-menu" aria-labelledby="dropdown01">
                                <div class="mega-menu-details about-menu-details">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-3 col-lg-3 col-sm-6 align-self-center  about-header-tab">
                                            <ul class="header_products_list">
                                                <li><a href="#">Plant Stands</a></li>
                                                <li><a href="#">Living Room</a></li>
                                                <li><a href="#">C Collection</a></li>
                                                <li><a href="#">Accent Table</a></li>
                                                <li><a href="writing-desk.html">Writing Desk</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-xl-5 col-lg-5 col-sm-6 about-header-tab d-flex">
                                            <img src="assets/images/furniture-1.jpg" class="img-fluid">
                                            <img src="assets/images/furniture-2.jpg" class="img-fluid">
                                            <img src="assets/images/furniture-3.jpg" class="img-fluid">
                                        </div>
                                    </div><!-- /row -->
                                </div>
                            </div>
                        </li>

                        <li class="nav-item megamenu-li">
                            <a class="nav-link" href="" id="dropdown01" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">kitchen & Bar <i class="fa fa-angle-down"></i></a>
                            <div class="dropdown-menu megamenu sm-menu" aria-labelledby="dropdown01">
                                <div class="mega-menu-details mega-menu-details-1 kitchen_tab_menu">
                                    <div class="row justify-content-between">
                                        <div class="col-xl-12 col-lg-12 col-sm-12 col-12 service-header-tab">
                                          
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#coasters">Coasters</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#kitchen-accessories">Kitchen Accessories</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#trays-bowls">Trays & Bowls</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#for-bar">For The Bar</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#entertain">Entertain</a>
                                                </li>
                                            </ul>

                                           
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="coasters">
                                                    <ul class="header_products_list">
                                                        <li><a href="#">Resin & Bone Coasters</a></li>
                                                        <li><a href="#">Marble Coasters</a></li>
                                                        <li><a href="#">Wooden Coasters</a></li>
                                                        <li><a href="#">Unique Coasters</a></li>
                                                        <li><a href="#">Cake Stands</a></li>
                                                    </ul>
                                                </div>
                                                <div class="tab-pane engineer_menu fade" id="kitchen-accessories">
                                                    <ul class="header_products_list">
                                                        <li><a href="#">Cake Stands</a></li>
                                                        <li><a href="#">Storage</a></li>
                                                    </ul>
                                                </div>
                                                <div class="tab-pane engineer_menu fade" id="trays-bowls">
                                                    <ul class="header_products_list">
                                                        <li><a href="#">Bowls</a></li>
                                                        <li><a href="#">Wooden & Metal Trays</a></li>
                                                    </ul>
                                                </div>
                                                <div class="tab-pane fade" id="for-bar">
                                                    <ul class="header_products_list">
                                                        <li><a href="#">Bottle openers</a></li>
                                                        <li><a href="#">Wine Stoppers</a></li>
                                                    </ul>
                                                </div>
                                                <div class="tab-pane fade" id="entertain">
                                                    <ul class="header_products_list">
                                                        <li><a href="#">Mortar & Pestle</a></li>
                                                        <li><a href="#">Lazy Susan</a></li>
                                                        <li><a href="#">Napkin Rings</a></li>
                                                        <li><a href="#">Tissue Holders</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item megamenu-li">
                            <a class="nav-link" href="" id="dropdown01" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Decorative Hardware <i class="fa fa-angle-down"></i></a>
                            <div class="dropdown-menu megamenu sm-menu" aria-labelledby="dropdown01">
                                <div class="mega-menu-details mega-menu-details-1 kitchen_tab_menu">
                                    <div class="row justify-content-between">
                                        <div class="col-xl-12 col-lg-12 col-sm-12 col-12 service-header-tab">
                                          
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#knobs-pulls">Knobs & Pulls</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#hooks">Hooks</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#industrial-hardware">Industrial Hardware</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#wall-shelves">Wall Shelves</a>
                                                </li>
                                            </ul>

                                           
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="knobs-pulls">
                                                    <ul class="header_products_list">
                                                        <li><a href="#">Resin & Bone Coasters</a></li>
                                                        <li><a href="#">Marble Coasters</a></li>
                                                        <li><a href="#">Wooden Coasters</a></li>
                                                        <li><a href="#">Unique Coasters</a></li>
                                                        <li><a href="#">Cake Stands</a></li>
                                                    </ul>
                                                </div>
                                                <div class="tab-pane engineer_menu fade" id="hooks">
                                                    <ul class="header_products_list">
                                                        <li><a href="#">Cake Stands</a></li>
                                                        <li><a href="#">Storage</a></li>
                                                    </ul>
                                                </div>
                                                <div class="tab-pane engineer_menu fade" id="industrial-hardware">
                                                    <ul class="header_products_list">
                                                        <li><a href="#">Bowls</a></li>
                                                        <li><a href="#">Wooden & Metal Trays</a></li>
                                                    </ul>
                                                </div>
                                                <div class="tab-pane fade" id="wall-shelves">
                                                    <ul class="header_products_list">
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                       <li class="nav-item dropdown megamenu-li dmenu">
                            <a class="nav-link" href="" id="dropdown01" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Lamps & Lights <i class="fa fa-angle-down"></i></a>
                            <div class="dropdown-menu megamenu sm-menu" aria-labelledby="dropdown01">
                                <div class="mega-menu-details about-menu-details">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-3 col-lg-3 col-sm-6 align-self-center about-header-tab">
                                            <ul class="header_products_list">
                                                <li><a href="#">Lamps</a></li>
                                                <li><a href="#">Lampshades</a></li>
                                                <li><a href="#">candle-stand</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-xl-5 col-lg-5 col-sm-6 about-header-tab d-flex">
                                            <img src="assets/images/lamp-1.jpg" class="img-fluid">
                                            <img src="assets/images/lamp-2.jpg" class="img-fluid">
                                            <img src="assets/images/lamp-3.jpg" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                       <li class="nav-item dropdown megamenu-li dmenu">
                            <a class="nav-link" href="" id="dropdown01" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Garden <i class="fa fa-angle-down"></i></a>
                            <div class="dropdown-menu megamenu sm-menu" aria-labelledby="dropdown01">
                                <div class="mega-menu-details about-menu-details">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-3 col-lg-3 col-sm-6  about-header-tab">
                                            <ul class="header_products_list">
                                                <li><a href="#">Plant Stand</a></li>
                                                <li><a href="#">Planters</a></li>
                                                <li><a href="#">Watering Cane</a></li>
                                                <li><a href="#">Garden Stakes</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-sm-6  about-header-tab">
                                            <ul class="header_products_list">
                                                <li><a href="#">Garden Tools</a></li>
                                                <li><a href="#">Garden Fencing</a></li>
                                                <li><a href="#">Ceramic Planter</a></li>
                                                <li><a href="#">Iron Planters</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                       <li class="nav-item dropdown megamenu-li dmenu">
                            <a class="nav-link" href="" id="dropdown01" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Pet Collection <i class="fa fa-angle-down"></i></a>
                            <div class="dropdown-menu megamenu sm-menu" aria-labelledby="dropdown01">
                                <div class="mega-menu-details about-menu-details">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-3 col-lg-3 col-sm-6  about-header-tab">
                                            <ul class="header_products_list">
                                                <li><a href="#">Pet Feeders</a></li>
                                                <li><a href="#">Pet Frames</a></li>
                                                <li><a href="#">Pet Figurines</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-xl-5 col-lg-5 col-sm-6 about-header-tab d-flex">
                                            <img src="assets/images/pet-1.jpg" class="img-fluid">
                                            <img src="assets/images/pet-2.jpg" class="img-fluid">
                                            <img src="assets/images/pet-3.jpg" class="img-fluid">
                                        </div>
                                    </div><!-- /row -->
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
