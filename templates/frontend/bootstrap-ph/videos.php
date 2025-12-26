<?php include 'header.php'; ?>

<main class="container-fluid ph-main">

<h1 class="ph-h1"><?= $page_heading; ?></h1>

<div class="row row-cols-2 row-cols-md-4 row-cols-lg-5 g-2">

<?php foreach ($videos as $video): ?>
<div class="col">
  <?php include 'video-card.php'; ?>
</div>
<?php endforeach; ?>

</div>

<?php include 'pagination.php'; ?>

</main>

<?php include 'footer.php'; ?>
