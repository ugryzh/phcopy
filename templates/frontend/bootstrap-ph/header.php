<!doctype html>
<html lang="en" data-theme="dark">
<head>
<meta charset="utf-8">
<title><?= $page_title ?? 'Video Site'; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?= $page_description ?? ''; ?>">

<link rel="stylesheet" href="/templates/frontend/bootstrap-ph/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="/templates/frontend/bootstrap-ph/assets/css/ph-theme.css">

<script defer src="/templates/frontend/bootstrap-ph/assets/js/bootstrap.bundle.min.js"></script>
<script defer src="/templates/frontend/bootstrap-ph/assets/js/ph.js"></script>
</head>

<body>

<header>
<nav class="navbar navbar-expand-lg navbar-dark ph-navbar">
  <div class="container-fluid">

    <a class="navbar-brand ph-logo" href="/">LOGO</a>

    <button class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse">

      <ul class="navbar-nav me-3">
        <li class="nav-item"><a class="nav-link" href="/categories">Categories</a></li>
        <li class="nav-item"><a class="nav-link" href="/trending">Trending</a></li>
        <li class="nav-item"><a class="nav-link" href="/pornstars">Pornstars</a></li>
        <li class="nav-item"><a class="nav-link" href="/channels">Channels</a></li>
      </ul>

      <form class="ph-search flex-grow-1 me-3" action="/search">
        <input class="form-control" type="search" name="q" placeholder="Search videos">
      </form>

      <div class="d-flex gap-3 align-items-center">
        <button class="ph-theme-toggle" id="themeToggle">🌙</button>
        <a class="ph-login" href="/login">Login</a>
      </div>

    </div>
  </div>
</nav>
</header>

<!-- MOBILE -->
<div class="offcanvas offcanvas-start ph-offcanvas" id="mobileMenu">
  <div class="offcanvas-header">
    <strong>MENU</strong>
    <button class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
    <form class="ph-search mb-3" action="/search">
      <input class="form-control" type="search" name="q" placeholder="Search videos">
    </form>

    <ul class="ph-mobile-menu">
      <li><a href="/categories">Categories</a></li>
      <li><a href="/trending">Trending</a></li>
      <li><a href="/pornstars">Pornstars</a></li>
      <li><a href="/channels">Channels</a></li>
      <li><a href="/login">Login</a></li>
      <li><button onclick="toggleTheme()">Toggle theme</button></li>
    </ul>
  </div>
</div>
