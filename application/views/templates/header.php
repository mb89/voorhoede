<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="<?php if (isset($json->subtitle)) { echo $json->subtitle; } else { echo $json->social->description; } ?>">
    <meta name="keywords" content="<?php if (isset($json->keywords)) { echo $json->keywords; } ?>">

    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/imgs/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>assets/imgs/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/imgs/favicon-16x16.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/modern-business.css">

    <title><?php echo $title; ?>De Voorhoede</title>
  </head>
  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="home">
          <img src="<?php echo base_url(); ?>assets/imgs/logo.svg" alt="V" style="height: 34px;">
          De Voorhoede
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cases">Cases</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="team">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
