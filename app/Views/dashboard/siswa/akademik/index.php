<?= $this->extend('templates/dashboard'); ?>

<!-- End Banner -->
<?= $this->section('content'); ?>

<!-- Page Heading -->
<section class="py-3 mb-4">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h3 class="content-heading mb-0 text-gray-800">Data Akademik</h3>
  </div>

  <form action="/siswa/ortu/save" method="post" class="user" enctype="multipart/form-data">
    <?= csrf_field(); ?>
    <div class="form-group row">
      <label for="asal-sekolah" class="col-3 col-form-label">Asal Sekolah</label>
      <div class="col-9">
        <input type="text" class="form-control form-control-user <?= ($validation->hasError('asal-sekolah') ? 'is-invalid' : ''); ?>" id="asal-sekolah" name="asal-sekolah">
        <div class="invalid-feedback">
          <?= $validation->getError('asal-sekolah'); ?>
        </div>
      </div>
    </div>

    <div class="form-group row">
      <label for="nisn" class="col-3 col-form-label">NISN</label>
      <div class="col-9">
        <input type="text" class="form-control form-control-user <?= ($validation->hasError('nisn') ? 'is-invalid' : ''); ?>" id="nisn" name="nisn">
        <div class="invalid-feedback">
          <?= $validation->getError('nisn'); ?>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="nis" class="col-3 col-form-label">NIS</label>
      <div class="col-9">
        <input type="text" class="form-control form-control-user <?= ($validation->hasError('nis') ? 'is-invalid' : ''); ?>" id="nis" name="nis">
        <div class="invalid-feedback">
          <?= $validation->getError('nis'); ?>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="no-ijazah" class="col-3 col-form-label">No Ijazah</label>
      <div class="col-9">
        <input type="text" class="form-control form-control-user <?= ($validation->hasError('no-ijazah') ? 'is-invalid' : ''); ?>" id="no-ijazah" name="no-ijazah">
        <div class="invalid-feedback">
          <?= $validation->getError('no-ijazah'); ?>
        </div>
      </div>
    </div>

    <button type="submit" class="btn btn-warning btn-user btn-sm">Simpan</button>

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