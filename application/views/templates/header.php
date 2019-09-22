<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

  <!-- MY FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,600,700" rel="stylesheet" />

  <!-- Icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  

  <!-- CSS FILE -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/assets/css/style.css" />

  <title><?php echo $judul ?></title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="<?= base_url()?>">
      <img src="<?= base_url()?>/assets/img/logo/74059.jpg"
        alt="Arei Outdoor Gear" width="220" height="110" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="BagPackDropdownMenu" data-toggle="dropdown" href="#" role="button"
            aria-haspopup="true" aria-expanded="false" data-offset="50,20">
            <span class="linkSpan">Destinasi</span> <i class="linkSpan"></i>
          </a>
        </li>
        <li class="dropdown">
          <a class="btn dropdown-toggle" href="#" id="apparelDropdownMenu" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <span class="linkSpan">Favorit</span> <i class="linkSpan"></i>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="BagPackDropdownMenu" data-toggle="dropdown" href="#" role="button"
            aria-haspopup="true" aria-expanded="false">
            <span class="linkSpan">About</span> <i class="linkSpan"></i>
          </a>
        </li>
        <li class="nav-item dropdown outdoorItem">
          <a class="nav-link dropdown-toggle" id="BagPackDropdownMenu" data-toggle="dropdown" href="#" role="button"
            aria-haspopup="true" aria-expanded="false">
            <span class="linkSpan">Contact Us</span> <i class="linkSpan"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><span class="linkSpan">Blog</span></a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">
            <img src="<?= base_url()?>./assets/img/navbar/magnifying-glass.svg" height="23" alt="Search" />
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url()?>account">
            <img src="<?= base_url()?>/assets/img/navbar/avatar.svg" height="23" alt="User" />
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <img src="<?= base_url()?>/assets/img/navbar/cart.svg" height="23" alt="Cart" />
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- End of Navbar -->