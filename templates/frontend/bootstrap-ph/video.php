<?php include 'header.php'; ?>

<main class="container-fluid ph-main">

<div class="row">
  <div class="col-lg-9">

    <div class="ratio ratio-16x9 mb-3">
      <?= $video['player']; ?>
    </div>

    <h1 class="ph-video-title"><?= $video['title']; ?></h1>

    <div class="video-meta mb-3">
      <span><?= $video['views']; ?> views</span> •
      <span><?= $video['date']; ?></span>
    </div>

  </div>

  <div class="col-lg-3">
    <h3 class="ph-h3">Related</h3>

    <?php foreach ($related as $r): ?>
    <div class="video-thumb small">
      <a href="<?= $r['url']; ?>">
        <img src="<?= $r['thumb']; ?>" loading="lazy">
        <span class="duration"><?= $r['duration']; ?></span>
      </a>
    </div>
    <?php endforeach; ?>
  </div>
</div>

</main>

<?php include 'footer.php'; ?>
