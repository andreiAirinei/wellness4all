<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="https://kit.fontawesome.com/4f2a2e5394.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.css" />
    <script src="js/first_load.js"></script>
    <title>Wellness4All</title>
  </head>
  <body id="home">
    <!-- Navbar -->

    <?php require 'sections/navbar.php'; ?>
    <!-- Navbar Modals -->
    <?php require 'sections/navbar-modals.php'; ?>
    <!-- Section: Header Showcase -->
    
    <?php require 'sections/showcase.php' ?>
    <!-- Section: Activities -->
    <?php require 'sections/activities.php'; ?>
    <!-- Section: Personal Trainers -->
    <?php require 'sections/ourteam.php'; ?>
    <!-- Section: Health Plan -->
    <?php require 'sections/healthplan.php'; ?>
    <!-- Section: Contact -->
    <?php require 'sections/contact.php'; ?>
    <!-- Footer -->
    <?php require 'sections/footer.php'; ?>

    <!-- Check for error messages -->
    <!-- JASdhhasdhsdihashdhasihdoashdioHIADHASIOHDASI HIOADHI  -->

    <!-- Scripts -->
    <script
      src="https://code.jquery.com/jquery-3.4.1.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script src="js/main.js"></script>
    <script src="js/jQuery.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDG5FzFOv_bpSA2fMocvSGe8TRCnbdPNE4&callback=myMap"></script>
  </body>
</html>