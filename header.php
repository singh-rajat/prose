<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Title of each naviagiton -->
    <title><?php echo $pageTitle; ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/svg" href="<?php echo $base_url; ?>assets/img/favicon.png" />
    <link rel="apple-touch-icon" href="<?php echo $base_url; ?>assets/img/favicon.png" />

    <!-- Font CSS -->
    <link type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Zilla+Slab" rel="stylesheet">

    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>assets/compass/stylesheets/fusemachinesstyle.min.css">
</head>

<body class="fade-in">
  <!-- Hole Page Fade In -->
  <section id="menubar">
    <div class="container-fluid">
      <div class="row">
          <nav id="navbar" class="navbar navbar-inverse navbar-fixed-top nav-front">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <span class="navbar-brand">
                    <!--<img class="img-responsive" src="assets/img/logo.svg" alt="Logo">-->
                    Project
                </span>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">

              <li class="dropdown hover-dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services<span class="caret"></span></a>
                <ul class="dropdown-menu">

                  <li>
                    <a href="#">
                      <span>AI as a Service</span>
                      <p></p>
                    </a>
                  </li>
                </ul>
              </li>
            <!-- Product -->
              <li class="dropdown hover-dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="https://anna.fusemachines.com/" onClick="ga('send', 'event', { eventCategory: 'Menu', eventAction: 'Click', eventLabel: 'Menu_Product_Anna'});">
                      <span>Fuse Anna - AI Assistant for Follow Up</span>
                      <p></p>
                    </a>
                  </li>

                  <li>
                    <a href="<?php echo $base_url; ?>prospector/" onClick="ga('send', 'event', { eventCategory: 'Menu', eventAction: 'Click', eventLabel: 'Menu_Product_Prospector'});">
                      <span>Fuse Prospector - Inside Sales Platform</span>
                      <p></p>
                    </a>
                  </li>
                </ul>
              </li>

              <!-- Educations -->
              <li class="dropdown hover-dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Education <span class="caret"></span></a>

                <ul class="dropdown-menu">
                  <li>
                    <a href="<?php echo $base_url; ?>ai-fellowship/"  onClick="ga('send', 'event', { eventCategory: 'Menu', eventAction: 'Click', eventLabel: 'Menu_ai_felloship'});">
                      <span>AI Fellowship</span>
                      <p></p>
                    </a>
                  </li>
                  <li>
                    <a href="https://classrooms.fusemachines.com/" onClick="ga('send', 'event', { eventCategory: 'Menu', eventAction: 'Click', eventLabel: 'Menu_Fusemachines_University'});" target="_blank">
                      <span>Fusemachines Academy</span>
                      <p></p>
                    </a>
                  </li>

                </ul>
              </li>

              <!-- Events -->
              <!-- <li class="dropdown hover-dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events <span class="caret"></span></a>

                <ul class="dropdown-menu">
                  <li>
                    <a href="http://salestech.io/" onClick="ga('send', 'event', { eventCategory: 'Menu', eventAction: 'Click', eventLabel: 'Menu_Salestech'});" target="_blank">
                      <span>SalesTech</span>
                      <p></p>
                    </a>
                  </li>

                </ul>

              </li> -->

             <!-- Blog -->
             <li>
               <a href="http://blog.fusemachines.com/" target="_blank">Blog</a>
             </li>

             <!-- Contact Us -->
             <li class="dropdown hover-dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About us <span class="caret"></span></a>
               <ul class="dropdown-menu">
                 <li>
                   <a href="<?php echo $base_url; ?>democratize-ai/" onClick="ga('send', 'event', { eventCategory: 'Menu', eventAction: 'Click', eventLabel: 'Menu_Democratize-AI'});">
                     <span>Democratize AI</span>
                     <!-- <p>Know us.</p> -->
                     <p></p>
                   </a>
                 </li>
                 <li>
                   <a href="<?php echo $base_url; ?>our-story/" onClick="ga('send', 'event', { eventCategory: 'Menu', eventAction: 'Click', eventLabel: 'Menu_OurStory'});">
                     <span>Our Story</span>
                     <!-- <p>Know us.</p> -->
                     <p></p>
                   </a>
                 </li>

                 <li>
                   <a href="<?php echo $base_url; ?>customers/" onClick="ga('send', 'event', { eventCategory: 'Menu', eventAction: 'Click', eventLabel: 'Menu_Customers'});">
                     <span>Customers</span>
                     <!-- <p>Learn why you should trust Fusemachines.</p> -->
                     <p></p>
                   </a>
                 </li>

                <li>
                   <a href="<?php echo $base_url; ?>press/" onClick="ga('send', 'event', { eventCategory: 'Menu', eventAction: 'Click', eventLabel: 'Press_Release'});">
                     <span>Press</span>
                     <!-- <p>Know us.</p> -->
                     <p></p>
                   </a>
                 </li>


                  <li>
                   <a href="<?php echo $base_url; ?>contact/" onClick="ga('send', 'event', { eventCategory: 'Menu', eventAction: 'Click', eventLabel: 'Menu_ContactUs'});">
                     <span>Contact Us</span>
                     <p></p>
                   </a>
                 </li>
               </ul>
              </li>
             <!-- Login -->
             <li class="dropdown hover-dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login <span class="caret"></span></a>
               <ul class="dropdown-menu">
                 <li>
                   <a href="https://anna.fusemachines.com/" target="_blank" onClick="ga('send', 'event', { eventCategory: 'Menu', eventAction: 'Click', eventLabel: 'Menu_Login_Anna'});">
                     <span>Fuse Anna - AI Assistant for Follow Up</span>
                     <p></p>
                   </a>
                 </li>
                 <li>
                   <a href="https://beta.salesai.fusemachines.com/login" target="_blank" onClick="ga('send', 'event', { eventCategory: 'Menu', eventAction: 'Click', eventLabel: 'Menu_Login_Prospector'});">
                     <span>Fuse Prospector - Inside Sales Platform</span>
                     <p></p>
                   </a>
                 </li>
                </ul>
              </li>
            </ul>
          </div>
            <?php } ?>
          </nav>
        </div>
      </div>
    </section>
















  <div class="wrapper">
