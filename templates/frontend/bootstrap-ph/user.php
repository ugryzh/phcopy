<?php include 'header.php'; ?>

<main class="container-fluid ph-main">

<div class="user-profile">
  <h1><?= $user['name']; ?></h1>
  <p><?= $user['bio']; ?></p>
</div>

<h2 class="ph-h2">User Videos</h2>

<div class="row row-cols-2 row-cols-md-4 row-cols-lg-5 g-2">

<?php foreach ($videos as $video): ?>
<div class="col">
  <?php include 'video-card.php'; ?>
</div>
<?php endforeach; ?>

</div>

</main>

<?php include 'footer.php'; ?>
