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
                      <a href="appointment.html" class="btn btn__secondary btn__link btn__block">
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
            <img src="assets/images/logo/logo-dark.png" class="logo-dark" alt="logo">
          </a>
          <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>
          <div class="collapse navbar-collapse" id="mainNavigation">
            <ul class="navbar-nav ml-auto">
              <li class="nav__item has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Home</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="index.html" class="nav__item-link">Home Main</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="home-modern.html" class="nav__item-link">Home Modern</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="home-classic.html" class="nav__item-link">Home Classic</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="home-dentist.html" class="nav__item-link">Home Dentist</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="home-pharmacy.html" class="nav__item-link">Home pharmacy</a>
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">About Us</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="about-us.html" class="nav__item-link">About Us</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="services.html" class="nav__item-link">Our Services</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="services-single.html" class="nav__item-link">single Services</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="pricing.html" class="nav__item-link">Pricing & Plans</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="appointment.html" class="nav__item-link">Appointments</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="faqs.html" class="nav__item-link">Help & FAQs</a>
                  </li> <!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="gallery.html" class="nav__item-link">Our Gallery</a>
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Doctors</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="doctors-timetable.html" class="nav__item-link">Doctors Timetable</a>
                  </li> <!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="doctors-standard.html" class="nav__item-link">Our Doctors Standard</a>
                  </li> <!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="doctors-modern.html" class="nav__item-link">Our Doctors Modern</a>
                  </li> <!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="doctors-grid.html" class="nav__item-link">Our Doctors Grid</a>
                  </li> <!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="doctors-single-doctor1.html" class="nav__item-link">Single Doctor 01</a>
                  </li> <!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="doctors-single-doctor2.html" class="nav__item-link">Single Doctor 02</a>
                  </li> <!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link active">Blog</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="blog.html" class="nav__item-link">Blog Grid</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="blog-single-post.html" class="nav__item-link">Single Blog Post</a>
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Shop</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="shop.html" class="nav__item-link">Our Products</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="shop-single-product.html" class="nav__item-link">Products Single</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="cart.html" class="nav__item-link">Cart</a>
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="contact-us.html" class="nav__item-link">Contacts</a>
              </li><!-- /.nav-item -->
            </ul><!-- /.navbar-nav -->
            <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
          </div><!-- /.navbar-collapse -->
          <div class="d-none d-xl-flex align-items-center position-relative ml-30">
            <div class="miniPopup-departments-trigger">
              <span class="menu-lines" id="miniPopup-departments-trigger-icon"><span></span></span>
              <a href="departments.html">Departments</a>
            </div>
            <ul id="miniPopup-departments" class="miniPopup miniPopup-departments dropdown-menu">
              <li class="nav__item">
                <a href="department-single.html" class="nav__item-link">Neurology Clinic</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="department-single.html" class="nav__item-link">Cardiology Clinic</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="department-single.html" class="nav__item-link">Pathology Clinic</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="department-single.html" class="nav__item-link">Laboratory Clinic</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="department-single.html" class="nav__item-link">Pediatric Clinic</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="department-single.html" class="nav__item-link">Cardiac Clinic</a>
              </li><!-- /.nav-item -->
            </ul> <!-- /.miniPopup-departments -->
            <a href="appointment.html" class="btn btn__primary btn__rounded ml-30">
              <i class="icon-calendar"></i>
              <span>Appointment</span>
            </a>
          </div>
        </div><!-- /.container -->
      </nav><!-- /.navabr -->
    </header><!-- /.Header -->

    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title pt-30 pb-30 text-center">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12">
            <nav>
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="blog.html">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page">6 Tips to Protect Your Mental Health When You’re
                  Sick</li>
              </ol>
            </nav>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ======================
      Blog Single
    ========================= -->
    <section class="blog blog-single pt-0 pb-80">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8">
            <div class="post-item mb-0">
              <div class="post__img">
                <a href="#">
                  <img src="assets/images/blog/single/1.jpg" alt="post image" loading="lazy">
                </a>
              </div><!-- /.post-img -->
              <div class="post__body pb-0">
                <div class="post__meta-cat">
                  <a href="#">Consulting</a><a href="#">Sales</a>
                </div><!-- /.blog-meta-cat -->
                <div class="post__meta d-flex align-items-center mb-20">
                  <span class="post__meta-date">Jan 20, 2022</span>
                  <a class="post__meta-author" href="#">Martin King</a>
                  <a class="post__meta-comments" href="#">2 coments</a>
                </div><!-- /.blog-meta -->
                <h1 class="post__title mb-30">
                  6 Tips to Protect Your Mental Health When You’re Sick
                </h1>
                <div class="post__desc">
                  <p>Vast numbers of employees now work remotely, and it’s too late to develop a set of remote-work
                    policies if you didn’t already have one. But there are ways to make the remote-work experience
                    productive and engaging — for employees and the organization.</p>
                  <p> “At most organizations, scenario planning focuses on the necessary operational responses to ensure
                    business continuity. Few of these plans address the ability or bandwidth of employees to focus on
                    their work,” says Brian Kropp, Distinguished Vice President, Research, Gartner.</p>
                  <p>Use both direct conversations and indirect observations to get visibility into employees’
                    challenges
                    and concerns. Use every opportunity to make clear to employees that you support and care for them.
                    To
                    facilitate regular conversations between managers and employees, provide managers with guidance on
                    how
                    best to broach sensitive subjects arising from the COVID-19 pandemic, including alternative work
                    models, job security and prospects, impact on staffing and tension in the workplace.</p>
                  <p>Make sure employees have the technology they need to be successful, which may be more than just a
                    mobile phone and laptop. For example, if you expect employees to attend virtual meetings, do they
                    have
                    adequate cameras?</p>
                  <p>Even if you don’t have an extensive set of technology and collaborative tools available, you can
                    equip employees to function effectively when remote. But don’t just assume that people know how to
                    operate with virtual communications — or are comfortable in that environment. </p>
                </div><!-- /.blog-desc -->
              </div>
            </div><!-- /.post-item -->
            <div class="d-flex flex-wrap justify-content-between border-top border-bottom pt-30 pb-30 mb-40">
              <div class="blog-share d-flex flex-wrap align-items-center">
                <strong class="mr-20 color-heading">Share</strong>
                <ul class="list-unstyled social-icons d-flex mb-0">
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-google"></i></a></li>
                </ul>
              </div><!-- /.blog-share -->
              <div class="widget-tags">
                <ul class="list-unstyled d-flex flex-wrap mb-0">
                  <li><a href="#">Consulting</a></li>
                  <li><a href="#">Tech</a></li>
                  <li><a href="#">Employee</a></li>
                </ul>
              </div><!-- /.blog-tags -->
            </div>
            <div class="widget-nav d-flex justify-content-between mb-40">
              <a href="#" class="widget-nav__prev d-flex flex-wrap">
                <div class="widget-nav__img">
                  <img src="assets/images/blog/grid/2.jpg" alt="blog thumb">
                </div>
                <div class="widget-nav__content">
                  <span>Previous Post</span>
                  <h5 class="widget-nav__ttile mb-0">Unsure About Wearing a Face Mask?</h5>
                </div>
              </a><!-- /.widget-prev  -->
              <a href="#" class="widget-nav__next d-flex flex-wrap">
                <div class="widget-nav__img">
                  <img src="assets/images/blog/grid/3.jpg" alt="blog thumb">
                </div>
                <div class="widget-nav__content">
                  <span>Next Post</span>
                  <h5 class="widget-nav__ttile mb-0">Tips for Eating Healthy When You’re Home</h5>
                </div>
              </a><!-- /.widget-next  -->
            </div>
            <div class="blog-author d-flex flex-wrap mb-70">
              <div class="blog-author__avatar">
                <img src="assets/images/blog/author/1.jpg" alt="avatar">
              </div><!-- /.author-avatar  -->
              <div class="blog-author__content">
                <h6 class="blog-author__name">Mahmoud Baghagho</h6>
                <p class="blog-author__bio">Founded by Begha over many cups of tea at her kitchen table in 2009, our
                  brand promise is simple: to
                  provide powerful digital marketing solutions to small and medium businesses.</p>
                <ul class="social-icons list-unstyled mb-0">
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-vimeo-v"></i></a> </li>
                  <li><a href="#"><i class="fab fa-linkedin"></i></a> </li>
                </ul>
              </div><!-- /.author-content  -->
            </div><!-- /.blog-author  -->
            <div class="blog-comments mb-70">
              <h5 class="blog-widget__title">2 comments</h5>
              <ul class="comments-list list-unstyled">
                <li class="comment__item">
                  <div class="comment__avatar">
                    <img src="assets/images/blog/author/2.jpg" alt="avatar">
                  </div>
                  <div class="comment__content">
                    <h5 class="comment__author">Richard Muldoone</h5>
                    <span class="comment__date">Feb 28, 2017 - 08:07 pm</span>
                    <p class="comment__desc">The example about the mattress sizing page you mentioned in the last WBF
                      can be a perfect example
                      of new keywords and content, and broadening the funnel as well. I can only imagine the sale
                      numbers if that was the site of a mattress selling company.</p>
                    <a class="comment__reply" href="#">reply</a>
                  </div>
                  <ul class="nested__comment list-unstyled">
                    <li class="comment__item">
                      <div class="comment__avatar">
                        <img src="assets/images/blog/author/3.jpg" alt="avatar">
                      </div>
                      <div class="comment__content">
                        <h5 class="comment__author">Mike Dooley</h5>
                        <span class="comment__date">Feb 28, 2017 - 08:22 pm</span>
                        <p class="comment__desc">The example about the mattress sizing page you mentioned in the last
                          WBF can be a perfect
                          example of new keywords and content, and broadening the funnel as well. I can only imagine the
                          sale numbers if that was the site of a mattress selling company.</p>
                        <a class="comment__reply" href="#">reply</a>
                      </div>
                    </li><!-- /.comment -->
                  </ul><!-- /.nested-comment -->
                </li><!-- /.comment -->
              </ul><!-- /.comments-list -->
            </div><!-- /.blog-comments -->
            <div class="blog-widget blog-comments-form mb-30">
              <h5 class="blog-widget__title">Leave A Reply</h5>
              <form>
                <div class="row">
                  <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Name:">
                    </div><!-- /.form-group -->
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="form-group">
                      <input type="email" class="form-control" placeholder="Email:">
                    </div><!-- /.form-group -->
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Website:">
                    </div><!-- /.form-group -->
                  </div><!-- /.col-lg-6 -->
                  <div class="col-12">
                    <div class="form-group">
                      <textarea class="form-control" placeholder="Comment"></textarea>
                    </div><!-- /.form-group -->
                  </div><!-- /.col-lg-12 -->
                  <div class="col-sm-12 col-md-12 col-lg-12 d-flex flex-wrap align-items-center">
                    <button type="submit" class="btn btn__primary btn__rounded btn__xl">
                      <span>Submit Comment</span> <i class="icon-arrow-right"></i>
                    </button>
                  </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
              </form>
            </div><!-- /.blog-comments-form -->
          </div><!-- /.col-lg-8 -->
          <div class="col-sm-12 col-md-12 col-lg-4">
            <aside class="sidebar">
              <div class="widget widget-search">
                <h5 class="widget__title">Search</h5>
                <div class="widget__content">
                  <form class="widget__form-search">
                    <input type="text" class="form-control" placeholder="Search...">
                    <button class="btn" type="submit"><i class="icon-search"></i></button>
                  </form>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-search -->
              <div class="widget widget-posts">
                <h5 class="widget__title">Recent Posts</h5>
                <div class="widget__content">
                  <!-- post item #1 -->
                  <div class="widget-post-item d-flex align-items-center">
                    <div class="widget-post__img">
                      <a href="#"><img src="assets/images/blog/grid/2.jpg" alt="thumb"></a>
                    </div><!-- /.widget-post-img -->
                    <div class="widget-post__content">
                      <span class="widget-post__date">Sep 19, 2022</span>
                      <h4 class="widget-post__title"><a href="#">Succession Risks That Threaten Your Leadership</a>
                      </h4>
                    </div><!-- /.widget-post-content -->
                  </div><!-- /.widget-post-item -->
                  <!-- post item #2 -->
                  <div class="widget-post-item d-flex align-items-center">
                    <div class="widget-post__img">
                      <a href="#"><img src="assets/images/blog/grid/3.jpg" alt="thumb"></a>
                    </div><!-- /.widget-post-img -->
                    <div class="widget-post__content">
                      <span class="widget-post__date">July 7, 2022</span>
                      <h4 class="widget-post__title"><a href="#">Do Employee Surveys Tell About Employee?</a>
                      </h4>
                    </div><!-- /.widget-post-content -->
                  </div><!-- /.widget-post-item -->
                  <!-- post item #3 -->
                  <div class="widget-post-item d-flex align-items-center">
                    <div class="widget-post__img">
                      <a href="#"><img src="assets/images/blog/grid/6.jpg" alt="thumb"></a>
                    </div><!-- /.widget-post-img -->
                    <div class="widget-post__content">
                      <span class="widget-post__date">March 13, 2022</span>
                      <h4 class="widget-post__title"><a href="#">Succession Risks That Threaten Your Leadership</a>
                      </h4>
                    </div><!-- /.widget-post-content -->
                  </div><!-- /.widget-post-item -->
                </div><!-- /.widget-content -->
              </div><!-- /.widget-posts -->
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
              <div class="widget widget-tags">
                <h5 class="widget__title">Tags</h5>
                <div class="widget-content">
                  <ul class="list-unstyled mb-0">
                    <li><a href="#">Insights</a></li>
                    <li><a href="#">Industry</a></li>
                    <li><a href="#">Modern</a></li>
                    <li><a href="#">Corporate</a></li>
                    <li><a href="#">Business</a></li>
                  </ul>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-tags -->
            </aside><!-- /.sidebar -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.blog Single -->

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