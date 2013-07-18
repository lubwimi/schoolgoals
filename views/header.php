<!doctype html>
<html>
   <head>
      <title>Test</title>

      <link rel="stylesheet" href="<?php echo URL; ?>public/css/default.css" />
      <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.js"></script>
      <script type="text/javascript" src="<?php echo URL; ?>public/js/custom.js"></script>

      <?php
          if (isset($this -> js)) {
                  foreach ($this->js as $js) {
                          echo '<script type="text/javascript" src="' . URL . 'views/' . $js . '"></script>';
                  }
          }
      ?>
   </head>
   <body>
      <div id="wraper">

         <?php Session::init(); ?>

         <div id="header">
           
           <div class="logo">
               <a href="<?php echo URL; ?>index"><h1>LUb</h1></a>
           </div>
           
           <div class="nav">
               <a href="<?php echo URL; ?>index">Home</a>
               <a href="<?php echo URL; ?>help">Contact</a>
               <a href="<?php echo URL; ?>register">Register</a>
               <?php if(Session::get('loggedIn') == true):
               ?>
               <a href="<?php echo URL; ?>dashboard/logout">Logout</a>
               <?php else: ?>
               <a href="<?php echo URL; ?>login">Login</a>
               <?php endif; ?>
           </div>
         
         </div>

         <div id="content">

