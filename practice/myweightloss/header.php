<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Medcity - Medical Healthcare HTML5 Template">
  <link href="assets/images/favicon/favicon.png" rel="icon">
  <title>My Weight Loss</title>

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&family=Roboto:wght@400;700&display=swap">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
  <link rel="stylesheet" href="assets/css/libraries.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- <link rel="stylesheet" href="consultations/style.css"> -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <style>
    .itl-container {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    }
    .itl-container__inner {
    max-width: 1140px;
    }
    .px-1 {
    padding-left: 0.25rem !important;
    }
    .bmi-calc.card {
    max-width: 900px;
    margin: 0 auto;
    margin-top: -120px;
    border-radius: 50px;
    }
    .align-items-center {
    align-items: center !important;
    }
.flex-column {
    flex-direction: column !important;
    }
.d-flex {
    display: flex !important;
    }
    .title {
    font-size: 26px;
    color: #00b5e9;
    font-weight: 300;
    }
    .unit-wrapper {
    font-size: 13px;
    }
    .unit-wrapper .unit-switcher {
    cursor: pointer;
    }
.unit-wrapper .unit-switcher {
    cursor: pointer;
    }
.d-flex {
    display: flex !important;
    }
    .unit-wrapper .unit-switcher .metric-text.active {
    background: #5E7BC0;
    color: #0c144f;
    border-color:#4DC4D8;
    }
.unit-wrapper .unit-switcher .metric-text.active {
    background: #5E7BC0;
    color: #0c144f;
    border-color: #4DC4D8;
    }
.unit-wrapper .unit-switcher span {
    font-size: 1rem;
    padding: 0.625rem 2rem;
    color: var(--col-true-blue);
    cursor: pointer;
    border: 1px solid #00b5e9;
    color: #00b5e9;
    background: transparent;
    margin: 0 10px;
    border-radius: 4px;
    left: 0 !important;
    position: relative;
    }
.unit-wrapper .unit-switcher span {
    font-size: 1rem;
    padding: 0.625rem 2rem;
    color: var(--col-true-blue);
    cursor: pointer;
    border: 1px solid #4DC4D8;
    color: #4DC4D8;
    background: transparent;
    margin: 0 10px;
    border-radius: 4px;
    left: 0 !important;
    position: relative;
    }
    .unit-wrapper .unit-switcher .metric-text.active:after {
    content: '';
    bottom: -20px;
    left: 50%;
    border-width: 10px;
    border-style: solid;
    position: absolute;
    border-color: #5E7BC0 transparent transparent transparent;
    }
.unit-wrapper .unit-switcher .metric-text.active:after {
    content: '';
    bottom: -20px;
    left: 50%;
    border-width: 10px;
    border-style: solid;
    position: absolute;
    border-color: #5E7BC0 transparent transparent transparent;
    }
    .cal-content {
    width: 100%;
    }
    .bmi-metric, .bmi-imperial {
    padding: 0px 15px;
    }
    .bmi-calc.card .bmi-imperial-tab {
    width: 65%;
    padding: 25px 15px;
    flex-direction: row;
    margin: 0 auto;
    }
    .cal-content .control {
    width: 100%;
    margin: 0 10px;
    text-align: center;
    }
.cal-content .control {
    width: 100%;
    margin: 0 10px;
    text-align: center;
    }
.control, .choice.radiocustomchoice {
    position: relative;
    }
    .label:not(:last-child) {
    margin-bottom: 0.5em;
    }
.control label, .choice.radiocustomchoice label {
    display: inline-block;
    vertical-align: middle;
    position: relative;
    cursor: pointer;
    }
.has-text-black {
    color: #0a0a0a !important;
    }
.label {
    display: block;
    }
.text-left {
    text-align: left !important;
    }
.w-100 {
    width: 100% !important;
    }
    .cal-content .control .consultation-section {
    margin: 15px 0 30px;
    display: none;
    }
.cal-content .control .consultation-section {
    margin: 15px 0 30px;
    display: none;
    }
.ui-slider-horizontal {
    height: 10px;
    -webkit-border-radius: 10px;
    border-radius: 10px;
    border: none;
    background: #dadada;
    }
.ui-slider {
    position: relative;
    text-align: left;
    }
    .cal-content .control .consultation-section .blueball {
    border-radius: 50%;
    top: 50%;
    transform: translateY(-50%);
    box-shadow: 0 0.5em 1em -0.125em rgba(60, 175, 223, 0.01), 0 0px 0 1px rgba(60, 175, 223, 0.02);
    background-color: #00b5e9;
    }
.cal-content .control .consultation-section .blueball {
    border-radius: 50%;
    top: 50%;
    transform: translateY(-50%);
    box-shadow: 0 0.5em 1em -0.125em rgba(60, 175, 223, 0.01), 0 0px 0 1px rgba(60, 175, 223, 0.02);
    background-color: #00b5e9;
    }
.consultation-section .ui-slider-handle.blueball {
    background: transparent;
    width: 100%;
    height: auto;
    color: #fff;
    font-size: 0;
    text-align: center;
    line-height: 22px;
    width: 22px;
    height: 22px;
    font-size: 0;
    filter: drop-shadow(5px 8.66px 7.5px rgba(170, 194, 205, 0.5));
    background: #00b5e9;
    }
.consultation-section .ui-slider-handle.blueball {
    background: transparent;
    width: 100%;
    height: auto;
    color: #fff;
    font-size: 0;
    text-align: center;
    line-height: 22px;
    width: 22px;
    height: 22px;
    font-size: 0;
    filter: drop-shadow(5px 8.66px 7.5px rgba(170, 194, 205, 0.5));
    background: #00b5e9;
    }
.ui-slider .ui-slider-handle {
    position: absolute;
    z-index: 2;
    cursor: default;
    }
.ui-slider-horizontal .ui-slider-handle {
    margin-left: -5px;
    }
.ui-slider-handle {
    height: 10px;
    width: 10px;
    -webkit-border-radius: 10px;
    border-radius: 10px;
    background: #f98b25;
    display: block;
    position: absolute;
    }
    .imperial-height-label {
    position: relative;
    }
    .card-content {
    background-color: transparent;
    padding: 1rem;
    }
    .pb-4, .py-4 {
    padding-bottom: 1.5rem !important;
    }
.pt-0, .py-0 {
    padding-top: 0 !important;
    }
.justify-content-center {
    justify-content: center !important;
    }
.d-flex {
    display: flex !important;
    }
    #proceedBtn {
    background: #4DC4D8;
    color: #0c144f;
    width: 191px;
    height: 45px;
    font-size: 18px;
    border-color: #4DC4D8;
    border-radius: 4px;
    }
    .card {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 0 9px rgba(182, 181, 182, 0.3);
    color: #7E8977;
    max-width: 100%;
    overflow: hidden;
    position: relative;
    }
    .card-content {
    background-color: transparent;
    padding: 1rem;
    }
.p-4 {
    padding: 1.5rem !important;
    }
.mt-5, .my-5 {
    margin-top: 3rem !important;
    }
    .card-content {
    background-color: transparent;
    padding: 1rem;
    }
.p-4 {
    padding: 1.5rem !important;
    }
    .bmi-calc.card .title {
    font-size: 26px;
    color: #00b5e9;
    font-weight: 300;
    }
    .justify-content-center {
    justify-content: center !important;
    }
.d-flex {
    display: flex !important;
    }
    .bmi-calc.card .roundmybmi.high-risk {
    background-color: #ef6f62;
    }
.bmi-calc.card .roundmybmi.high-risk {
    background-color: #ef6f62;
    }
.bmi-calc.card .roundmybmi.safest-bmi, .bmi-calc.card .roundmybmi {
    background-color: #82e85c;
    }
.bmi-calc.card .roundmybmi.safest-bmi, .bmi-calc.card .roundmybmi {
    background-color: #82e85c;
    }
.high-risk.box {
    background: #ef6f62;
    }
.box {
    background-color: white;
    border-radius: 6px;
    box-shadow: 0 0.5em 1em -0.125em rgba(10, 10, 10, 0.1), 0 0px 0 1px rgba(10, 10, 10, 0.02);
    color: #7E8977;
    display: block;
    padding: 1.25rem;
    }
.roundmybmi {
    width: 100px;
    height: 100px;
    border-radius: 50% !important;
    }
.mb-3, .my-3 {
    margin-bottom: 1rem !important;
    }
.align-items-center {
    align-items: center !important;
    }
.justify-content-center {
    justify-content: center !important;
    }
.d-flex {
    display: flex !important;
    }
    .bmi-calc.card .title {
    font-size: 26px;
    color: #00b5e9;
    font-weight: 300;
    }
.bmi-calc.card .title {
    font-size: 26px;
    color: #00b5e9;
    font-weight: 300;
    }
.title.is-3 {
    font-size: 2rem;
    }
.has-text-white {
    color: white !important;
    }
.title {
    color: #363636;
    font-size: 2rem;
    font-weight: 600;
    line-height: 1.125;
    }
.title, .subtitle {
    word-break: break-word;
    }
    .bmi-calc.card .multicolorprogress-wrapper {
    pointer-events: none;
    max-width: 600px;
    margin: 0 auto;
    }
.bmi-calc.card .multicolorprogress-wrapper {
    pointer-events: none;
    max-width: 600px;
    margin: 0 auto;
    }
.multicolorprogress-wrapper {
    position: relative;
    }
.ui-slider-horizontal {
    height: 10px;
    -webkit-border-radius: 10px;
    border-radius: 10px;
    border: none;
    background: #dadada;
    }
.ui-slider {
    position: relative;
    text-align: left;
    }
    .multicolorprogress {
    display: flex;
    height: 10px;
    margin-bottom: 50px;
    }
    .consultation-section .multicolorprogress > .step {
    flex-grow: 0;
    flex-basis: revert;
}
.multicolorprogress > .step:first-child {
    border-top-left-radius: 20px;
    border-bottom-left-radius: 20px;
}
.consultation-section .multicolorprogress > .step {
    flex-grow: 0;
    flex-basis: revert;
}
.consultation-section .step {
    width: 33.33%;
}
.multicolorprogress .step-1 {
    background-color: #99e26f;
}
.multicolorprogress > .step {
    flex-grow: 1;
    flex-basis: 0;
    position: relative;
}
.consultation-section .step {
    width: 33.33%;
}
.multicolorprogress .step-2 {
    background-color: #00e5d2;
}
.multicolorprogress .step-3 {
    background-color: #ef6f62;
}
.consultation-section .ui-slider-handle.blueball {
    background: transparent;
    width: 100%;
    height: auto;
    color: #fff;
    font-size: 0;
    text-align: center;
    line-height: 22px;
    width: 22px;
    height: 22px;
    font-size: 0;
    filter: drop-shadow(5px 8.66px 7.5px rgba(170, 194, 205, 0.5));
    background: #00b5e9;
}
.consultation-section .ui-slider-handle.blueball {
    background: transparent;
    width: 100%;
    height: auto;
    color: #fff;
    font-size: 0;
    text-align: center;
    line-height: 22px;
    width: 22px;
    height: 22px;
    font-size: 0;
    filter: drop-shadow(5px 8.66px 7.5px rgba(170, 194, 205, 0.5));
    background: transparent;
}
.multicolorprogress-wrapper .blueball {
    position: absolute;
    width: 20px;
    height: 20px;
    background-color: #00b5e9;
    border-radius: 50%;
    top: 50%;
    transform: translateY(-50%);
    box-shadow: 0 0.5em 1em -0.125em rgba(60, 175, 223, 0.01), 0 0px 0 1px rgba(60, 175, 223, 0.02);
    margin-left: -10px;
}
.ui-slider .ui-slider-handle {
    position: absolute;
    z-index: 2;
    cursor: default;
}
.ui-slider-horizontal .ui-slider-handle {
    margin-left: -5px;
}
.ui-slider-handle {
    height: 10px;
    width: 10px;
    -webkit-border-radius: 10px;
    border-radius: 10px;
    background: #f98b25;
    display: block;
    position: absolute;
}
.cal-content .control {
    width: 100%;
    margin: 0 10px;
    text-align: center;
}
.control, .choice.radiocustomchoice {
    position: relative;
}
.cal-content .control .consultation-section {
    margin: 15px 0 30px;
    display: none;
}
.cal-content .control .consultation-section {
    margin: 15px 0 30px;
    display: none;
}
.ui-slider-horizontal {
    height: 10px;
    -webkit-border-radius: 10px;
    border-radius: 10px;
    border: none;
    background: #dadada;
}
.ui-slider {
    position: relative;
    text-align: left;
}
.step-item:before{
    background: #5E7BC0;
}
.page-wrapper {
    min-height: 100%;
    display: flex;
    flex-direction: column;
    background: #5E7BC0;
}
body .itl-container .steps .step-item:before, body .itl-container .is-tablet-medium .step-item:before {
    background: #4DC4D8;
}
.unit-wrapper .unit-switcher .metric-text.active:after {
    content: '';
    bottom: -20px;
    left: 50%;
    border-width: 10px;
    border-style: solid;
    position: absolute;
    border-color: #4DC4D8 transparent transparent transparent;
}
.bmi-calc.card .bmi-imperial-tab select {
    background-image: linear-gradient(45deg, transparent 50%, #fff 50%), linear-gradient(135deg, #fff 50%, transparent 50%), linear-gradient(to right, #4DC4D8, #4DC4D8);
    background-position: calc(100% - 20px) calc(1em + 2px), calc(100% - 15px) calc(1em + 2px), 100% 0;
    background-size: 5px 5px, 5px 5px, 2.5em 5em;
    background-repeat: no-repeat;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}
</style>
    </head>
    <body data-container="body"
          data-mage-init='{"loaderAjax": {}, "loader": { "icon": "https://consultation.my-bmi.co.uk/static/version1702452587/frontend/MyBMI/child/en_GB/images/loader-2.gif"}}'
        id="html-body" class="has-background-consultation-flow-background consultation-details-index page-layout-1column">
        <div class="d-flex flex-column justify-content-center align-items-center bg--white consultation-header-section p-2">
    <a class="f--cyan-dark" title="previous-page" id="surveyPrev" href="#"><i class="fas fa-arrow-left"></i></a>
    <a href="/" style="margin: auto; width: 200px"><img class="align-top" width="200" src="img/gallery/logo.png"></a>
</div>
<div class="page-wrapper"><main id="maincontent" class="page-main"><a id="contentarea" tabindex="-1"></a>
<div class="page messages"><div data-bind="scope: 'messages'">
    <!-- ko if: cookieMessages && cookieMessages.length > 0 -->
    <div aria-atomic="true" role="alert" data-bind="foreach: { data: cookieMessages, as: 'message' }" class="messages">
        <div data-bind="attr: {
            class: 'message-' + message.type + ' ' + message.type + ' message',
            'data-ui-id': 'message-' + message.type
        }">
            <div data-bind="html: $parent.prepareMessageForHtml(message.text)"></div>
        </div>
    </div>
    <!-- /ko -->

    <!-- ko if: messages().messages && messages().messages.length > 0 -->
    <div aria-atomic="true" role="alert" class="messages" data-bind="foreach: {
        data: messages().messages, as: 'message'
    }">
        <div data-bind="attr: {
            class: 'message-' + message.type + ' ' + message.type + ' message',
            'data-ui-id': 'message-' + message.type
        }">
            <div data-bind="html: $parent.prepareMessageForHtml(message.text)"></div>
        </div>
    </div>
    <!-- /ko -->
</div>
</div><div class="columns"><div class="column main"><input name="form_key" type="hidden" value="LiMSlWXrct67Yhpi" /><div id="authenticationPopup" data-bind="scope:'authenticationPopup', style: {display: 'none'}">
        
</div>
<style>
    .password-strength-meter{
        background-color: white;
    }
    .password-weak .password-strength-meter, .password-none .password-strength-meter, .password-strength-meter{
        color: #DF8472;
    }
    .password-strong .password-strength-meter {
        color: #00b67a;
    }
    .password-medium .password-strength-meter {
        color: #e4832b;
    }
    .password-weak .password-strength-meter:before, .password-none .password-strength-meter:before, .password-medium .password-strength-meter:before, .password-strong .password-strength-meter:before{
        background-color: white;
    }

</style>
</head>

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
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link active">Home</a>
                <!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item has-dropdown">
                <a href="about.php" class="dropdown-toggle nav__item-link">About Us</a>
                <!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Doctors</a>
                <!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item has-dropdown">
                <a href="blog.html"  class="dropdown-toggle nav__item-link">Blog</a>
                <!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item has-dropdown">
                <a href="shop.html"  class="dropdown-toggle nav__item-link">Products</a>
                <!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="contact-us.html" class="nav__item-link">Contacts</a>
              </li><!-- /.nav-item -->
            </ul><!-- /.navbar-nav -->
            <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
          </div><!-- /.navbar-collapse -->
          <div class="d-none d-xl-flex align-items-center position-relative ml-30">
             <!-- /.miniPopup-departments -->
            <a href="appointment.html" class="btn btn__primary btn__rounded ml-30">
              <i class="icon-calendar"></i>
              <span>Consultations</span>
            </a>
          </div>
        </div><!-- /.container -->
      </nav><!-- /.navabr -->
    </header><!-- /.Header -->

  