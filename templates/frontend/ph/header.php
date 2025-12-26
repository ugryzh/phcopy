<!doctype html>
<html lang="en" data-theme="dark">
<head>
<meta charset="utf-8">
<title><?php echo $page_title ?? 'Video Site'; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- SEO -->
<meta name="description" content="<?php echo $page_description ?? ''; ?>">

<!-- Bootstrap -->
<link href="/templates/frontend/bootstrap-ph/assets/css/bootstrap.min.css" rel="stylesheet">

<!-- Theme -->
<link href="/templates/frontend/bootstrap-ph/assets/css/ph-theme.css" rel="stylesheet">

</head>
<body>

<header class="ph-header">
<nav class="navbar navbar-expand-lg navbar-dark ph-navbar">
  <div class="container-fluid">

    <!-- LOGO -->
    <a class="navbar-brand ph-logo" href="/">
      <strong>LOGO</strong>
    </a>

    <!-- MOBILE TOGGLE -->
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- DESKTOP -->
    <div class="collapse navbar-collapse">

      <!-- LEFT MENU -->
      <ul class="navbar-nav me-3">
        <li class="nav-item"><a class="nav-link" href="#">Categories</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Trending</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Pornstars</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Channels</a></li>
      </ul>

      <!-- SEARCH -->
      <form class="ph-search d-flex flex-grow-1 me-3" action="/search">
        <input class="form-control" type="search" name="q" placeholder="Search videos">
      </form>

      <!-- RIGHT -->
      <div class="d-flex align-items-center gap-3">

        <!-- THEME TOGGLE -->
        <button class="ph-theme-toggle" id="themeToggle" aria-label="Toggle theme">
          🌙
        </button>

        <!-- USER -->
        <a href="/login" class="ph-login">Login</a>

      </div>
    </div>

  </div>
</nav>
</header>

<!-- MOBILE MENU -->
<div class="offcanvas offcanvas-start ph-offcanvas" id="mobileMenu">
  <div class="offcanvas-header">
    <strong>MENU</strong>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
  </div>

  <div class="offcanvas-body">

    <form class="ph-search mb-3" action="/search">
      <input class="form-control" type="search" name="q" placeholder="Search videos">
    </form>

    <ul class="ph-mobile-menu">
      <li><a href="#">Categories</a></li>
      <li><a href="#">Trending</a></li>
      <li><a href="#">Pornstars</a></li>
      <li><a href="#">Channels</a></li>
      <li><a href="#">Login</a></li>
      <li><button class="ph-theme-toggle" onclick="toggleTheme()">Toggle theme</button></li>
    </ul>

  </div>
</div>
