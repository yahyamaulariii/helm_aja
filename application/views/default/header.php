<!DOCTYPE html>
<html lang="en">
<head>
  <title>Helm Store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<!-- Grey with black text -->
<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="<?php echo site_url('ctrl/index'); ?>">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo site_url('ctrl/collection'); ?>">Collection</a>
    </li>
    <?php 
    echo 'session : '.$this->session->userdata('id');
    if(empty($this->session->userdata('id'))){
    ?>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo site_url('ctrl/register'); ?>">Register</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo site_url('ctrl/login'); ?>">Login</a>
    </li>
    <?php 
    }
    ?>
  </ul>
</nav>