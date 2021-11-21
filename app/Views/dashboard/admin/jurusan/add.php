<?= $this->extend('templates/dashboard'); ?>

<!-- End Banner -->
<?= $this->section('content'); ?>

<!-- Page Heading -->
<section class="py-5">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h3 class="content-heading mb-0 text-gray-800">Tambah Jurusan</h3>
  </div>

  <form action="/admin/jurusan/save" method="post" class="user">
    <?= csrf_field(); ?>
    <div class="form-group row">
      <label for="nama" class="col-sm-2 col-form-label">Name Jurusan</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-user <?= (session('errors.nama') ? 'is-invalid' : ''); ?>" id="nama" name="nama" placeholder="Nama Jurusan..." value="<?= old('nama'); ?>">
        <div class="invalid-feedback">
          <?= $validation->getError('name'); ?>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
      <div class="col-sm-10">
        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4"><?= old('deskripsi'); ?></textarea>
      </div>
    </div>
    <button type="submit" class="btn btn-warning btn-user btn-sm">Save</button>
    <a href="/admin/jurusan" class="btn btn-secondary btn-user btn-sm">Cancel</a>
  </form>
</section>
<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<script>
  $(document).ready(function() {
    $('#dataUsers').DataTable();
  });
</script>
<?= $this->endSection(); ?>