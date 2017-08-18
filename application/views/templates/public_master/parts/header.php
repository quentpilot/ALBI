<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <!-- 
  Boxer Template
  http://www.templatemo.com/tm-446-boxer
  -->
  <meta charset="utf-8">
  <title><?= $page_title ?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="">
  <meta name="description" content="Landing to ALB IMPRESSION corporate">

  <!-- animate css -->
  <link rel="stylesheet" href="<?= site_url('assets/public/public_master/css/animate.min.css') ?>">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="<?= site_url('assets/public/public_master/css/bootstrap.min.css') ?>">
  <!-- font-awesome -->
  <link rel="stylesheet" href="<?= site_url('assets/public/public_master/css/font-awesome.min.css') ?>">
  <!-- google font -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700,800' rel='stylesheet' type='text/css'>

  <!-- custom css -->
  <link rel="stylesheet" href="<?= site_url('assets/public/public_master/css/templatemo-style.css') ?>">

  <!-- Favicon-->
  <link rel="shortcut icon" href="<?= site_url('assets/public/public_master/favicon.png') ?>">

  <?php //$this->link_css() ?>

</head>
  
<body>
  <!-- start preloader -->
  <div class="preloader">
    <div class="sk-spinner sk-spinner-rotating-plane"></div>
  </div>
  <!-- end preloader -->

  <!-- navbar menu -->
  <?= $navbar_menu ?>

  <!-- display alert message (events) -->
  <?php
    if($this->session->flashdata('message'))
    {
    ?>
      <div class="container">
        <div class="alert alert-info alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <?php echo $this->session->flashdata('message');?>
        </div>
      </div>
    <?php
    }
  ?>