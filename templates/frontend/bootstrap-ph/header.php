<!doctype html>
<html lang="en" data-theme="dark">
<head>

<!-- =====================
     META / SEO
===================== -->
<meta charset="utf-8">
<title><?= htmlspecialchars($page_title ?? 'Video Site'); ?></title>
<meta name="description" content="<?= htmlspecialchars($page_description ?? 'Watch free videos'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Prevent CLS -->
<meta name="theme-color" content="#000000">

<!-- =====================
     CSS
===================== -->
<link rel="stylesheet" href="/templates/frontend/bootstrap-ph/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="/templates/frontend/bootstrap-ph/assets/css/ph-theme.css">

<!-- =====================
     JS (defer = performance)
===================== -->
<script defer src="/templates/frontend/bootstrap-ph/assets/js/bootstrap.bundle.min.js"></script>
<script defer src="/templates/frontend/bootstrap-ph/assets/js/ph.js"></script>

</head>
<body>

<!-- =====================
     HEADER / NAVBAR
===================== -->
<header class="ph-header">

<nav class="navbar navbar-expand-lg navbar-dark ph-navbar">
  <div class="container-fluid">

    <!-- LOGO -->
    <a class="navbar-brand ph-logo" href="/">
      LOGO
    </a>

    <!-- MOBILE TOGGLE -->
    <button class="navbar-toggler" type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#mobileMenu"
            aria-controls="mobileMenu"
            aria-label="Open menu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- DESKTOP NAV -->
    <div class="collapse navbar-collapse">

      <!-- LEFT MENU -->
      <ul class="navbar-nav me-3">
        <li class="nav-item">
          <a class="nav-link" href="/categories">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/trending">Trending</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pornstars">Pornstars</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/channels">Channels</a>
        </li>
      </ul>

      <!-- SEARCH -->
      <form class="ph-search d-flex flex-grow-1 me-3"
            action="/search"
            method="get"
            role="search">
        <input
          class="form-control"
          type="search"
          name="q"
          placeholder="Search videos"
          aria-label="Search videos"
          autocomplete="off">
      </form>

      <!-- RIGHT -->
      <div class="d-flex align-items-center gap-3">

        <!-- THEME TOGGLE -->
        <button
          type="button"
          class="ph-theme-toggle"
          id="themeToggle"
          aria-label="Toggle dark/light mode"
          title="Toggle theme">
          🌙
        </button>

        <!-- AUTH -->
        <?php if (!empty($user_logged)): ?>
          <a href="/profile" class="ph-login">My Account</a>
        <?php else: ?>
          <a href="/login" class="ph-login">Login</a>
        <?php endif; ?>

      </div>

    </div>
  </div>
</nav>

</header>

<!-- =====================
     MOBILE OFFCANVAS
===================== -->
<div class="offcanvas offcanvas-start ph-offcanvas"
     tabindex="-1"
     id="mobileMenu"
     aria-labelledby="mobileMenuLabel">

  <div class="offcanvas-header">
    <strong id="mobileMenuLabel">MENU</strong>
    <button type="button"
            class="btn-close btn-close-white"
            data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
  </div>

  <div class="offcanvas-body">

    <!-- MOBILE SEARCH -->
    <form class="ph-search mb-3"
          action="/search"
          method="get"
          role="search">
      <input
        class="form-control"
        type="search"
        name="q"
        placeholder="Search videos"
        aria-label="Search videos">
    </form>

    <!-- MOBILE LINKS -->
    <ul class="ph-mobile-menu">
      <li><a href="/categories">Categories</a></li>
      <li><a href="/trending">Trending</a></li>
      <li><a href="/pornstars">Pornstars</a></li>
      <li><a href="/channels">Channels</a></li>

      <?php if (!empty($user_logged)): ?>
        <li><a href="/profile">My Account</a></li>
        <li><a href="/logout">Logout</a></li>
      <?php else: ?>
        <li><a href="/login">Login</a></li>
        <li><a href="/signup">Sign up</a></li>
      <?php endif; ?>

      <li>
        <button type="button" onclick="toggleTheme()">
          Toggle theme
        </button>
      </li>
    </ul>

  </div>
</div>
<!-- =====================
     END HEADER
===================== -->
