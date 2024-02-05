
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
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link active">About Us</a>
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
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Blog</a>
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
    <section class="page-title page-title-layout2 bg-overlay text-center pb-0">
      <div class="bg-img"><img src="assets/images/page-titles/3.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8 offset-xl-2">
            <div class="pagetitle__icon">
              <i class="icon-microscope"></i>
            </div>
            <h1 class="pagetitle__heading">Pathology Clinic</h1>
            <p class="pagetitle__desc mb-30">Pathology is the study of disease. It is the bridge between science and
              medicine.
              It underpins every aspect of patient care, from diagnostic testing and treatment advice to using
              cutting-edge genetic technologies and preventing disease.
            </p>
            <a href="#content" class="scroll-down"><i class="fas fa-long-arrow-alt-down"></i></a>
          </div><!-- /.col-xl-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <section id="content" class=" pb-80">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8">
            <div class="text-block mb-50">
              <p class="text-block__desc mb-20 font-weight-bold color-secondary">A neurologist is a medical doctor with
                specialized training
                in diagnosing, treating, and managing disorders of the brain and nervous system including, but not
                limited to, Alzheimer’s disease, amyotrophic lateral sclerosis (ALS), concussion, epilepsy, migraine,
                multiple sclerosis, Parkinson’s disease, and stroke.</p>
              <div class="video-banner-layout3 bg-overlay mb-50">
                <img src="assets/images/banners/7.jpg" alt="banner">
                <a class="video__btn video__btn-white popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                  <div class="video__player">
                    <i class="fa fa-play"></i>
                  </div>
                </a>
              </div><!-- /.video-banner -->
              <p class="text-block__desc mb-20">These teams are made up of pathologists – who are either doctors with
                specialist laboratory training or scientists with specialist clinical training – as well as biomedical
                scientists and support staff. Doctors, nurses, surgeons and other medical staff look to pathologists and
                consultant clinical scientists for advice on the nature and seriousness of a patient’s illness, making
                sure they get the most appropriate treatment. We will work with you to develop individualised care
                plans, including management of chronic diseases.</p>
              <p class="text-block__desc mb-20">If we cannot assist, we can provide referrals or advice about the type
                of practitioner you require. We are committed to being the region’s premier healthcare network by
                providing patient-centered care that inspires clinical and service excellence, making us the first and
                best choice for our patients, employees, physicians, employers, volunteers and communities.</p>
            </div><!-- /.text-block -->

            <ul class="list-items list-unstyled mb-60 pl-40">
              <li>If your blood doesn’t clot properly – it’s a haematologist who will conduct the blood tests, confirm
                if you have haemophilia, and offer treatment.</li>
              <li>When there’s an outbreak of infection in a hospital, it’s a medical microbiologist or infection doctor
                who will advise the infection control teams and work hard to contain it.</li>
              <li>For those having trouble getting pregnant – it’s a reproductive scientist who will investigate,
                diagnose and, where possible, treat any infertility issues.</li>
            </ul>
            <div class="widget-plan mb-60">
              <div class="widget__body">
                <h5 class="widget__title">Health Care Plans</h5>
                <p>Our doctors include highly qualified male and female practitioners who come from a range of
                  backgrounds
                  and bring with a diversity of skills and special interests. Our administration and support staff all
                  have exceptional people skills and trained to assist you with all medical enquiries.
                </p>
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <div class="plan__items">
                      <ul class="list-items list-items-layout2 list-unstyled mb-0">
                        <li>Review your medical records.</li>
                        <li>Check and test blood pressure.</li>
                        <li>Run tests such as blood tests.</li>
                      </ul>
                    </div>
                  </div><!-- /.col-md-6 -->
                  <div class="col-sm-12 col-md-6">
                    <div class="plan__items">
                      <ul class="list-items list-items-layout2 list-unstyled mb-0">
                        <li>Check and test lung function.</li>
                        <li>Narrowing of the arteries.</li>
                        <li>Other specialized tests.</li>
                      </ul>
                    </div>
                  </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
              </div><!-- /.widget__body -->
              <div class="widget__footer d-flex flex-wrap justify-content-between align-items-center">
                <div class="plan__price">$50<span class="period">/Month</span></div>
                <div class="d-flex align-items-center">
                  <a href="#" class="btn btn__secondary btn__rounded mr-30">
                    <span>Purchase Now</span> <i class="icon-arrow-right"></i>
                  </a>
                  <a href="#" class="btn btn__primary btn__link">
                    <i class="icon-arrow-right icon-filled"></i> <span>Explore Other Plans</span>
                  </a>
                </div>
              </div><!-- /.widget__footer -->
            </div><!-- /.widget-plan -->
            <div class="text-block mb-50">
              <h5 class="text-block__title">Our Core Values</h5>
              <p class="text-block__desc mb-20">Today the hospital is recognised as a world renowned institution, not
                only providing outstanding care and treatment, but improving the outcomes for all through a
                comprehensive medical research. For over 20 years, our hospital has touched lives of millions of people,
                and provide care and treatment for the sickest in our community including rehabilitation and aged care.
              </p>
            </div><!-- /.text-block -->
            <div class="fancybox-layout1">
              <div class="row">
                <div class="col-md-6">
                  <!-- fancybox item #1 -->
                  <div class="fancybox-item d-flex">
                    <div class="fancybox__icon">
                      <i class="icon-heart"></i>
                    </div><!-- /.fancybox__icon -->
                    <div class="fancybox__content">
                      <h4 class="fancybox__title">Medical Check Ups</h4>
                      <p class="fancybox__desc">Recognised as a world renowned institution, you can consult any of our
                        doctors by visiting our clinic.</p>
                    </div><!-- /.fancybox-content -->
                  </div><!-- /.fancybox-item -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6">
                  <!-- fancybox item #2 -->
                  <div class="fancybox-item d-flex">
                    <div class="fancybox__icon">
                      <i class="icon-doctor"></i>
                    </div><!-- /.fancybox__icon -->
                    <div class="fancybox__content">
                      <h4 class="fancybox__title">Medical Treatment</h4>
                      <p class="fancybox__desc">Free or low cost coverage adults with limited income recognised as a
                        world renowned institution.</p>
                    </div><!-- /.fancybox-content -->
                  </div><!-- /.fancybox-item -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6">
                  <!-- fancybox item #3 -->
                  <div class="fancybox-item d-flex">
                    <div class="fancybox__icon">
                      <i class="icon-call3"></i>
                    </div><!-- /.fancybox__icon -->
                    <div class="fancybox__content">
                      <h4 class="fancybox__title">Emergency Help 24/7 </h4>
                      <p class="fancybox__desc">Contact our reception staff with any medical enquiry any time for low
                        cost coverage adults.</p>
                    </div><!-- /.fancybox-content -->
                  </div><!-- /.fancybox-item -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6">
                  <!-- fancybox item #4 -->
                  <div class="fancybox-item d-flex">
                    <div class="fancybox__icon">
                      <i class="icon-drugs"></i>
                    </div><!-- /.fancybox__icon -->
                    <div class="fancybox__content">
                      <h4 class="fancybox__title">Research Professionals </h4>
                      <p class="fancybox__desc">All medical aspects practice for family, our reception staff with any
                        medical enquiry any time.</p>
                    </div><!-- /.fancybox-content -->
                  </div><!-- /.fancybox-item -->
                </div><!-- /.col-md-6 -->
              </div><!-- /.row -->
            </div><!-- /.fancybox-layout1 -->
            <div class="text-block mb-50">
              <h5 class="text-block__title">Health Tips & Info</h5>
              <p class="text-block__desc mb-20">We help create a care plan that addresses your specific condition and we
                are here to answer all of your questions & acknowledge your concerns. Today the hospital is recognised
                as a world renowned institution, not only providing outstanding care and treatment, but improving the
                outcomes.
              </p>
            </div><!-- /.text-block -->
            <div id="accordion" class="mb-70">
              <div class="accordion-item opened">
                <div class="accordion__header" data-toggle="collapse" data-target="#collapse3">
                  <a class="accordion__title" href="#">What Payment Methods Are Available?</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse3" class="collapse show" data-parent="#accordion">
                  <div class="accordion__body">
                    <p>With any financial product that you buy, it is important that you know you are getting the best
                      advice from a reputable company as often</p>
                  </div><!-- /.accordion-item-body -->
                </div>
              </div><!-- /.accordion-item -->
              <div class="accordion-item">
                <div class="accordion__header" data-toggle="collapse" data-target="#collapse1">
                  <a class="accordion__title" href="#">Which Plan Is Right For Me?</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse1" class="collapse" data-parent="#accordion">
                  <div class="accordion__body">
                    <p>With any financial product that you buy, it is important that you know you are getting the best
                      advice from a reputable company as often</p>
                  </div><!-- /.accordion-item-body -->
                </div>
              </div><!-- /.accordion-item -->
              <div class="accordion-item">
                <div class="accordion__header" data-toggle="collapse" data-target="#collapse2">
                  <a class="accordion__title" href="#">Do I have to commit to a contract?</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse2" class="collapse" data-parent="#accordion">
                  <div class="accordion__body">
                    <p>With any financial product that you buy, it is important that you know you are getting the best
                      advice from a reputable company as often</p>
                  </div><!-- /.accordion-item-body -->
                </div>
              </div><!-- /.accordion-item -->
              <div class="accordion-item">
                <div class="accordion__header" data-toggle="collapse" data-target="#collapse4">
                  <a class="accordion__title" href="#">What if I pick the wrong plan?</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse4" class="collapse" data-parent="#accordion">
                  <div class="accordion__body">
                    <p>With any financial product that you buy, it is important that you know you are getting the best
                      advice from a reputable company as often</p>
                  </div><!-- /.accordion-item-body -->
                </div>
              </div><!-- /.accordion-item -->
              <div class="accordion-item">
                <div class="accordion__header" data-toggle="collapse" data-target="#collapse5">
                  <a class="accordion__title" href="#">Any contracts or commitments?</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse5" class="collapse" data-parent="#accordion">
                  <div class="accordion__body">
                    <p>With any financial product that you buy, it is important that you know you are getting the best
                      advice from a reputable company as often</p>
                  </div><!-- /.accordion-item-body -->
                </div>
              </div><!-- /.accordion-item -->
            </div><!-- /#accordion -->

            <div class="text-block mb-50">
              <h5 class="text-block__title">Our Core Values</h5>
              <p class="text-block__desc mb-20">Today the hospital is recognised as a world renowned institution, not
                only providing outstanding care and treatment, but improving the outcomes for all through a
                comprehensive medical research. For over 20 years, our hospital has touched lives of millions of people,
                and provide care and treatment for the sickest in our community including rehabilitation and aged care.
              </p>
            </div><!-- /.text-block -->
            <div class="row">
              <div class="collg-12 col-md-6">
                <div class="pricing-widget-layout1 mb-70">
                  <h5 class="pricing__title">Investigations Price List</h5>
                  <ul class="pricing__list list-unstyled mb-0">
                    <li><span>Umbilical Cord Appearance</span><span class="price">$50</span></li>
                    <li><span>Cardiac Electrophysiology</span><span class="price">$45</span></li>
                    <li><span>Repositioning Techniques</span><span class="price">$60</span></li>
                    <li><span>Geriatric Neurology</span><span class="price">$65</span></li>
                    <li><span>Nuclear Cardiology</span><span class="price">$40</span></li>
                    <li><span>Nuclear Cardiology</span><span class="price">$55</span></li>
                  </ul>
                </div>
              </div><!-- /.col-md-6 -->
              <div class="collg-12 col-md-6">
                <div class="pricing-widget-layout2 mb-70">
                  <h5 class="pricing__title">Treatments Price List</h5>
                  <ul class="pricing__list list-unstyled mb-0">
                    <li><span>Colonoscopy</span><span class="price">$50</span></li>
                    <li><span>Allergy testing</span><span class="price">$45</span></li>
                    <li><span>Gastroscopy</span><span class="price">$60</span></li>
                    <li><span>Bronchoscopy</span><span class="price">$65</span></li>
                    <li><span>Cardiac Ablation</span><span class="price">$40</span></li>
                    <li><span>Holter monitoring</span><span class="price">$55</span></li>
                  </ul>
                </div>
              </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
            <!-- ======================
                 Team
             ========================= -->
            <section class="team-layout2 pt-0 pb-30">
              <div class="heading mb-40">
                <h3 class="heading__title">Meet Our Doctors</h3>
                <p class="heading__desc">Our administration and support staff all have exceptional people skills and
                  trained to assist you with all medical enquiries.
                </p>
              </div><!-- /.heading -->
              <div class="slick-carousel"
                data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "autoplay": true, "arrows": false, "dots": false, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
                <!-- Member #1 -->
                <div class="member">
                  <div class="member__img">
                    <img src="assets/images/team/1.jpg" alt="member img">
                  </div><!-- /.member-img -->
                  <div class="member__info">
                    <h5 class="member__name"><a href="doctors-single-doctor1.html">Mike Dooley</a></h5>
                    <p class="member__job">Cardiology Specialist</p>
                  </div><!-- /.member-info -->
                </div><!-- /.member -->
                <!-- Member #2 -->
                <div class="member">
                  <div class="member__img">
                    <img src="assets/images/team/2.jpg" alt="member img">
                  </div><!-- /.member-img -->
                  <div class="member__info">
                    <h5 class="member__name"><a href="doctors-single-doctor1.html">Dermatologists</a></h5>
                    <p class="member__job">Cardiology Specialist</p>
                  </div><!-- /.member-info -->
                </div><!-- /.member -->
                <!-- Member #3 -->
                <div class="member">
                  <div class="member__img">
                    <img src="assets/images/team/3.jpg" alt="member img">
                  </div><!-- /.member-img -->
                  <div class="member__info">
                    <h5 class="member__name"><a href="doctors-single-doctor1.html">Maria Andaloro</a></h5>
                    <p class="member__job">Pediatrician</p>
                  </div><!-- /.member-info -->
                </div><!-- /.member -->
                <!-- Member #4 -->
                <div class="member">
                  <div class="member__img">
                    <img src="assets/images/team/4.jpg" alt="member img">
                  </div><!-- /.member-img -->
                  <div class="member__info">
                    <h5 class="member__name"><a href="doctors-single-doctor1.html">Dupree Black</a></h5>
                    <p class="member__job">Urologist</p>
                  </div><!-- /.member-info -->
                </div><!-- /.member -->
                <!-- Member #5 -->
                <div class="member">
                  <div class="member__img">
                    <img src="assets/images/team/5.jpg" alt="member img">
                  </div><!-- /.member-img -->
                  <div class="member__info">
                    <h5 class="member__name"><a href="doctors-single-doctor1.html">Markus skar</a></h5>
                    <p class="member__job">Laboratory</p>
                  </div><!-- /.member-info -->
                </div><!-- /.member -->
                <!-- Member #6 -->
                <div class="member">
                  <div class="member__img">
                    <img src="assets/images/team/6.jpg" alt="member img">
                  </div><!-- /.member-img -->
                  <div class="member__info">
                    <h5 class="member__name"><a href="doctors-single-doctor1.html">Kiano Barker</a></h5>
                    <p class="member__job">Pathologist </p>
                  </div><!-- /.member-info -->
                </div><!-- /.member -->
              </div><!-- /.carousel -->
            </section><!-- /.Team -->
          </div><!-- /.col-lg-8 -->
          <div class="col-sm-12 col-md-12 col-lg-4">
            <aside class="sidebar has-marign-left sticky-top">
              <div class="widget widget-services">
                <h5 class="widget__title">Medical Services</h5>
                <div class="widget-content">
                  <ul class="list-unstyled mb-0">
                    <li><a href="#"><span>Neurology Clinic</span><i class="icon-arrow-right"></i></a></li>
                    <li><a href="#"><span>Cardiology Clinic</span><i class="icon-arrow-right"></i></a></li>
                    <li><a href="#"><span>Pathology Clinic</span><i class="icon-arrow-right"></i></a></li>
                    <li><a href="#"><span>Laboratory Clinic</span><i class="icon-arrow-right"></i></a></li>
                    <li><a href="#"><span>Pediatric Clinic</span><i class="icon-arrow-right"></i></a></li>
                    <li><a href="#"><span>Cardiac Clinic</span><i class="icon-arrow-right"></i></a></li>
                  </ul>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-services -->
              <div class="widget widget-help bg-overlay bg-overlay-secondary-gradient">
                <div class="bg-img"><img src="assets/images/banners/5.jpg" alt="background"></div>
                <div class="widget-content">
                  <div class="widget__icon">
                    <i class="icon-call3"></i>
                  </div>
                  <h4 class="widget__title">Emergency Cases</h4>
                  <p class="widget__desc">Please feel welcome to contact our friendly reception staff with any general
                    or medical enquiry call us.
                  </p>
                  <a href="tel:+201061245741" class="phone__number">
                    <i class="icon-phone"></i> <span>01061245741</span>
                  </a>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-help -->
              <div class="widget widget-schedule">
                <div class="widget-content">
                  <div class="widget__icon">
                    <i class="icon-charity2"></i>
                  </div>
                  <h4 class="widget__title">Opening Hours</h4>
                  <ul class="time__list list-unstyled mb-0">
                    <li><span>Monday - Friday</span><span>8.00 - 7:00 pm</span></li>
                    <li><span>Saturday</span><span>9.00 - 10:00 pm</span></li>
                    <li><span>Sunday</span><span>10.00 - 12:00 pm</span></li>
                  </ul>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-schedule -->
              <div class="widget widget-reports">
                <a href="#" class="btn btn__primary btn__block">
                  <i class="icon-pdf-file"></i>
                  <span>2020 Patient Reports</span>
                </a>
              </div>
            </aside><!-- /.sidebar -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>

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