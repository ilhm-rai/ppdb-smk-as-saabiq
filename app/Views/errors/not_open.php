<?= $this->extend('templates/dashboard'); ?>

<?= $this->section('content'); ?>
<section class="py-3">
  <div class="alert alert-success" role="alert">
    <?php if ($error) : ?>
      <p><?= $error; ?></p>
    <?php endif; ?>
  </div>
</section>
<?= $this->endSection(); ?>