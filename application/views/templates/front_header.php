<!DOCTYPE html>
<html class="full-height" lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CLS System</title>
    <meta name="description" content="CLS System"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="<?= base_url('assets/'); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>css/mdb.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>styles/main.css" rel="stylesheet">
  </head>
  <body id="top">
    <header>
      <!-- Navbar-->
      <nav class="navbar-custom navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar " style="font: status-bar">
        <div class="container"><a class="navbar-brand" href="#"> <img src="<?= base_url('assets/img/logo-cls-fa.png'); ?>" alt="" width="50%" height="33%"></a>
          <a class="navbar-toggler show-custom" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></a>
          <div class="collapse navbar-collapse blue1" id="navbarContent">
            <ul class="navbar-nav ml-auto show-custom">
              <li class="nav-item"><a class="nav-link ex3" href="<?= base_url('');?>">HOME</a></li>
        
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle ex3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">PROFILE</a>
                <div class="dropdown-menu ">
                  <a class="dropdown-item" href="<?= base_url('frontpage/about');?>">ABOUT US</a>
                  <a class="dropdown-item" href="<?= base_url('frontpage/why');?>">Why Cls?</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle ex3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">PRODUCT & SERVICE</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="<?= base_url('frontpage/explore');?>">EXPLORE</a>
                  <a class="dropdown-item" href="<?= base_url('frontpage/rms');?>">POINT REWORDS SYSTEM</a>
                  <a class="dropdown-item" href="<?= base_url('frontpage/ecommerce');?>">E-C0MMERCE</a>
                  <a class="dropdown-item" href="<?= base_url('frontpage/fullfillment');?>">FULLFILLMENT</a>
              </li>

              <li class="nav-item"><a class="nav-link ex3" href="<?= base_url('frontpage/career');?>">CAREER</a></li>
              <li class="nav-item"><a class="nav-link ex3" href="<?= base_url('frontpage/contact');?>">CONTACT US</a></li>
            </ul>

          </div>
        </div>
      </nav>