
<?php

include('header.php');

?>
<body>
  <div class="wrapper">
    <div class="preloader">
      <div class="loading"><span></span><span></span><span></span><span></span></div>
    </div><!-- /.preloader -->

    <!-- =========================
        Header
    =========================== -->
    <header class="header header-layout1">
      <div class="header-topbar">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="d-flex align-items-center justify-content-between">
                <ul class="contact__list d-flex flex-wrap align-items-center list-unstyled mb-0">
                  <li>
                    <button class="miniPopup-emergency-trigger" type="button">24/7 Emergency</button>
                    <div id="miniPopup-emergency" class="miniPopup miniPopup-emergency text-center">
                      <div class="emergency__icon">
                        <i class="icon-call3"></i>
                      </div>
                      <a href="tel:+201061245741" class="phone__number">
                        <i class="icon-phone"></i> <span>+2 01061245741</span>
                      </a>
                      <p>Please feel free to contact our friendly reception staff with any general or medical enquiry.
                      </p>
                      <a href="appointment.php" class="btn btn__secondary btn__link btn__block">
                        <span>Make Appointment</span> <i class="icon-arrow-right"></i>
                      </a>
                    </div><!-- /.miniPopup-emergency -->
                  </li>
                  <li>
                    <i class="icon-phone"></i><a href="tel:+5565454117">Emergency Line: (002) 01061245741</a>
                  </li>
                  <li>
                    <i class="icon-location"></i><a href="#">Location: Brooklyn, New York</a>
                  </li>
                  <li>
                    <i class="icon-clock"></i><a href="contact-us.html">Mon - Fri: 8:00 am - 7:00 pm</a>
                  </li>
                </ul><!-- /.contact__list -->
                <div class="d-flex">
                  <ul class="social-icons list-unstyled mb-0 mr-30">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  </ul><!-- /.social-icons -->
                  <form class="header-topbar__search">
                    <input type="text" class="form-control" placeholder="Search...">
                    <button class="header-topbar__search-btn"><i class="fa fa-search"></i></button>
                  </form>
                </div>
              </div>
            </div><!-- /.col-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.header-top -->
      <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">
            <img src="assets/images/logo/logo-light.png" class="logo-light" alt="logo">
            <img src="assets/images/Weighloss_final_logo.png" class="logo-dark" width="100px" height="100px" alt="logo">
          </a>
          <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>
          <div class="collapse navbar-collapse" id="mainNavigation">
            <ul class="navbar-nav ml-auto">
              <li class="nav__item has-dropdown">
                <a href="index.php" class="dropdown-toggle nav__item-link">Home</a>
                <!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item has-dropdown">
                <a href="about-us.php"  class="dropdown-toggle nav__item-link">About Us</a>
                <!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <!-- /.nav-item -->
              <li class="nav__item has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Blog</a>
                <!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item has-dropdown">
                <a href="shop.php" class="dropdown-toggle nav__item-link active">Products</a>
                <!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="contact-us.php" class="nav__item-link">Contacts</a>
              </li><!-- /.nav-item -->
            </ul><!-- /.navbar-nav -->
            <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
          </div><!-- /.navbar-collapse -->
          <div class="d-none d-xl-flex align-items-center position-relative ml-30">
            <div class="miniPopup-departments-trigger">
              <!-- <span class="menu-lines" id="miniPopup-departments-trigger-icon"><span></span></span> -->
              <a href="departments.php"></a>
            </div>
            <ul id="miniPopup-departments" class="miniPopup miniPopup-departments dropdown-menu">
              <li class="nav__item">
                <a href="department-single.php" class="nav__item-link">Neurology Clinic</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="department-single.php" class="nav__item-link">Cardiology Clinic</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="department-single.php" class="nav__item-link">Pathology Clinic</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="department-single.php" class="nav__item-link">Laboratory Clinic</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="department-single.php" class="nav__item-link">Pediatric Clinic</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="department-single.php" class="nav__item-link">Cardiac Clinic</a>
              </li><!-- /.nav-item -->
            </ul> <!-- /.miniPopup-departments -->
            <a href="BMI-Calculator/index.php" class="btn btn__primary btn__rounded ml-30">
              <i class="icon-calendar"></i>
              <span>Consultations</span>
            </a>
          </div>
        </div><!-- /.container -->
      </nav><!-- /.navabr -->
    </header><!-- /.Header -->

    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title page-title-layout5 text-center">
      <div class="bg-img"><img src="assets/images/backgrounds/6.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1 class="pagetitle__heading">Our Products</h1>
            <nav>
              <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">shop</li>
              </ol>
            </nav>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
       shop 
    =========================== -->
    <section class="shop-grid">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-8 col-lg-9">
            <div class="sorting-options d-flex flex-wrap justify-content-between align-items-center mb-30">
              <span>Showing 1:9 of 45 product</span>
              <select>
                <option selected="" value="0">Sort by latest</option>
                <option value="1">Sort by Popular</option>
                <option value="2">Sort by highest Price </option>
                <option value="3">Sort by lowest Price </option>
              </select>
            </div>
            <div class="row">
              <!-- Product item #1 -->
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="product-item">
                  <div class="product__img">
                    <img src="assets/images/products/1.jpg" alt="Product" loading="lazy">
                    <div class="product__action">
                      <a href="BMI-Calculator/index.php" class="btn btn__primary btn__rounded">
                        <i class="icon-cart"></i> <span>Consultation</span>
                      </a>
                    </div><!-- /.product-action -->
                  </div><!-- /.product-img -->
                  <div class="product__info">
                    <h4 class="product__title"><a href="#">Calming Herps</a></h4>
                    <span class="product__price">$18.99</span>
                  </div><!-- /.product-content -->
                </div><!-- /.product-item -->
              </div><!-- /.col-lg-4 -->
              <!-- Product item #2 -->
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="product-item">
                  <div class="product__img">
                    <img src="assets/images/products/2.jpg" alt="Product" loading="lazy">
                    <div class="product__action">
                      <a href="BMI-Calculator/index.php" class="btn btn__primary btn__rounded">
                        <i class="icon-cart"></i> <span>Consultation</span>
                      </a>
                    </div><!-- /.product-action -->
                  </div><!-- /.product-img -->
                  <div class="product__info">
                    <h4 class="product__title"><a href="#">Biotin Complex</a></h4>
                    <span class="product__price">$12,99</span>
                  </div><!-- /.product-content -->
                </div><!-- /.product-item -->
              </div><!-- /.col-lg-4 -->
              <!-- Product item #3 -->
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="product-item">
                  <div class="product__img">
                    <img src="assets/images/products/3.jpg" alt="Product" loading="lazy">
                    <div class="product__action">
                      <a href="BMI-Calculator/index.php" class="btn btn__primary btn__rounded">
                        <i class="icon-cart"></i> <span>Consultation</span>
                      </a>
                    </div><!-- /.product-action -->
                  </div><!-- /.product-img -->
                  <div class="product__info">
                    <h4 class="product__title"><a href="#">Facial Serum</a></h4>
                    <span class="product__price">$19,99</span>
                  </div><!-- /.product-content -->
                </div><!-- /.product-item -->
              </div><!-- /.col-lg-4 -->
              <!-- Product item #4 -->
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="product-item">
                  <div class="product__img">
                    <img src="assets/images/products/4.jpg" alt="Product" loading="lazy">
                    <div class="product__action">
                      <a href="BMI-Calculator/index.php" class="btn btn__primary btn__rounded">
                        <i class="icon-cart"></i> <span>Consultation</span>
                      </a>
                    </div><!-- /.product-action -->
                  </div><!-- /.product-img -->
                  <div class="product__info">
                    <h4 class="product__title"><a href="#">Calming Herps</a></h4>
                    <span class="product__price">$33.00</span>
                  </div><!-- /.product-content -->
                </div><!-- /.product-item -->
              </div><!-- /.col-lg-4 -->
              <!-- Product item #5 -->
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="product-item">
                  <div class="product__img">
                    <img src="assets/images/products/5.jpg" alt="Product" loading="lazy">
                    <div class="product__action">
                      <a href="BMI-Calculator/index.php" class="btn btn__primary btn__rounded">
                        <i class="icon-cart"></i> <span>Consultation</span>
                      </a>
                    </div><!-- /.product-action -->
                  </div><!-- /.product-img -->
                  <div class="product__info">
                    <h4 class="product__title"><a href="#">Essential Oil</a></h4>
                    <span class="product__price">$63.00</span>
                  </div><!-- /.product-content -->
                </div><!-- /.product-item -->
              </div><!-- /.col-lg-4 -->
              <!-- Product item #6 -->
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="product-item">
                  <div class="product__img">
                    <img src="assets/images/products/6.jpg" alt="Product" loading="lazy">
                    <div class="product__action">
                      <a href="BMI-Calculator/index.php" class="btn btn__primary btn__rounded">
                        <i class="icon-cart"></i> <span>Consultation</span>
                      </a>
                    </div><!-- /.product-action -->
                  </div><!-- /.product-img -->
                  <div class="product__info">
                    <h4 class="product__title"><a href="#">Natural Cacao Powder</a></h4>
                    <span class="product__price">$12,99</span>
                  </div><!-- /.product-content -->
                </div><!-- /.product-item -->
              </div><!-- /.col-lg-4 -->
              <!-- Product item #7 -->
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="product-item">
                  <div class="product__img">
                    <img src="assets/images/products/7.jpg" alt="Product" loading="lazy">
                    <div class="product__action">
                      <a href="BMI-Calculator/index.php" class="btn btn__primary btn__rounded">
                        <i class="icon-cart"></i> <span>Consultation</span>
                      </a>
                    </div><!-- /.product-action -->
                  </div><!-- /.product-img -->
                  <div class="product__info">
                    <h4 class="product__title"><a href="#">Natural Gel</a></h4>
                    <span class="product__price">$38,00</span>
                  </div><!-- /.product-content -->
                </div><!-- /.product-item -->
              </div><!-- /.col-lg-4 -->
              <!-- Product item #8 -->
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="product-item">
                  <div class="product__img">
                    <img src="assets/images/products/8.jpg" alt="Product" loading="lazy">
                    <div class="product__action">
                      <a href="BMI-Calculator/index.php" class="btn btn__primary btn__rounded">
                        <i class="icon-cart"></i> <span>Consultation</span>
                      </a>
                    </div><!-- /.product-action -->
                  </div><!-- /.product-img -->
                  <div class="product__info">
                    <h4 class="product__title"><a href="#">Goji Powder</a></h4>
                    <span class="product__price">$16,00</span>
                  </div><!-- /.product-content -->
                </div><!-- /.product-item -->
              </div><!-- /.col-lg-4 -->
              <!-- Product item #9 -->
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="product-item">
                  <div class="product__img">
                    <img src="assets/images/products/9.jpg" alt="Product" loading="lazy">
                    <div class="product__action">
                      <a href="BMI-Calculator/index.php" class="btn btn__primary btn__rounded">
                        <i class="icon-cart"></i> <span>Consultation</span>
                      </a>
                    </div><!-- /.product-action -->
                  </div><!-- /.product-img -->
                  <div class="product__info">
                    <h4 class="product__title"><a href="#">Blood Pressure</a></h4>
                    <span class="product__price">$18.99</span>
                  </div><!-- /.product-content -->
                </div><!-- /.product-item -->
              </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                <nav class="pagination-area">
                  <ul class="pagination justify-content-center">
                    <li><a class="current" href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                  </ul>
                </nav><!-- /.pagination-area -->
              </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
          </div><!-- /.col-lg-9 -->
          <div class="col-sm-12 col-md-4 col-lg-3">
            <aside class="sidebar-layout2">
              <div class="widget widget-search">
                <h5 class="widget__title">Search</h5>
                <div class="widget__content">
                  <form class="widget__form-search">
                    <input type="text" class="form-control" placeholder="Search...">
                    <button class="btn" type="submit"><i class="icon-search"></i></button>
                  </form>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-search -->
              <div class="widget widget-poducts">
                <h5 class="widget__title">Best Sellers</h5>
                <div class="widget__content">
                  <!-- product item #1 -->
                  <div class="widget-product-item d-flex align-items-center">
                    <div class="widget-product__img">
                      <a href="#"><img src="assets/images/products/11.jpg" alt="Product" loading="lazy"></a>
                    </div><!-- /.product-product-img -->
                    <div class="widget-product__content">
                      <h5 class="widget-product__title"><a href="#">Calming Herps</a></h5>
                      <span class="widget-product__price">$ 38.00</span>
                    </div><!-- /.widget-product-content -->
                  </div><!-- /.widget-product-item -->
                  <!-- product item #2 -->
                  <div class="widget-product-item d-flex align-items-center">
                    <div class="widget-product__img">
                      <a href="#"><img src="assets/images/products/10.jpg" alt="Product" loading="lazy"></a>
                    </div><!-- /.product-product-img -->
                    <div class="widget-product__content">
                      <h5 class="widget-product__title"><a href="#">Goji Powder</a></h5>
                      <span class="widget-product__price">$ 33.00</span>
                    </div><!-- /.widget-product-content -->
                  </div><!-- /.widget-product-item -->
                  <!-- product item #3 -->
                  <div class="widget-product-item d-flex align-items-center">
                    <div class="widget-product__img">
                      <a href="#"><img src="assets/images/products/12.jpg" alt="Product" loading="lazy"></a>
                    </div><!-- /.product-product-img -->
                    <div class="widget-product__content">
                      <h5 class="widget-product__title"><a href="#">Biotin Complex</a></h5>
                      <span class="widget-product__price">$ 18.00</span>
                    </div><!-- /.widget-product-content -->
                  </div><!-- /.widget-product-item -->
                </div><!-- /.widget-content -->
              </div><!-- /.widget-poducts -->
              <div class="widget widget-categories">
                <h5 class="widget__title">Categories</h5>
                <div class="widget-content">
                  <ul class="list-unstyled mb-0">
                    <li><a href="#"><span class="cat-count">4</span><span>Neurology</span></a></li>
                    <li><a href="#"><span class="cat-count">0</span><span>Cardiology</span></a></li>
                    <li><a href="#"><span class="cat-count">3</span><span>Pathology</span></a></li>
                    <li><a href="#"><span class="cat-count">2</span><span>Laboratory</span></a></li>
                    <li><a href="#"><span class="cat-count">4</span><span>Pediatric</span></a></li>
                    <li><a href="#"><span class="cat-count">1</span><span>Cardiac Clinic</span></a></li>
                  </ul>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-categories -->
              <div class="widget widget-filter">
                <h5 class="widget__title">Pricing Filter</h5>
                <div class="widget__content">
                  <div id="rangeSlider"></div>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="price-output d-flex align-items-center">
                      <label for="rangeSliderResult">Price: </label>
                      <input type="text" id="rangeSliderResult" readonly>
                    </div>
                    <button class="btn__filter">Filter</button>
                  </div>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-filter -->
              <div class="widget widget-tags">
                <h5 class="widget__title">Tags</h5>
                <div class="widget-content">
                  <ul class="list-unstyled">
                    <li><a href="#">Responsive</a></li>
                    <li><a href="#">Fresh</a></li>
                    <li><a href="#">Modern</a></li>
                    <li><a href="#">Corporate</a></li>
                    <li><a href="#">Business</a></li>
                  </ul>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-Tags -->
            </aside><!-- /.sidebar -->
          </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.shop -->

    <?php

include('footer.php');

?>
    <button id="scrollTopBtn"><i class="fas fa-long-arrow-alt-up"></i></button>
  </div><!-- /.wrapper -->

  <script src="assets/js/jquery-3.5.1.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>