<?php include 'header.php'; ?>

<main class="container-fluid ph-main">

<h1 class="ph-h1">New Videos</h1>

<div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 g-2">

<?php foreach ($videos as $video): ?>
<div class="col">
  <div class="video-thumb">
    <a href="<?= $video['url']; ?>">
      <div class="thumb">
        <img src="<?= $video['thumb']; ?>" loading="lazy">
        <span class="duration"><?= $video['duration']; ?></span>
        <?php if ($video['hd']): ?><span class="badge">HD</span><?php endif; ?>
      </div>
      <h3 class="title"><?= $video['title']; ?></h3>
    </a>
    <div class="meta">
      <span><?= $video['views']; ?> views</span>
      <span><?= $video['rating']; ?>%</span>
    </div>
  </div>
</div>
<?php endforeach; ?>

</div>

<?php include 'pagination.php'; ?>

</main>

<?php include 'footer.php'; ?>
