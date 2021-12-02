<?= $this->extend('templates/dashboard'); ?>

<!-- End Banner -->
<?= $this->section('content'); ?>

<!-- Page Heading -->
<section class="py-3 mb-4">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h3 class="content-heading mb-0 text-gray-800">Dokumen Pendukung</h3>
  </div>

  <form action="/siswa/ortu/save" method="post" class="user" enctype="multipart/form-data">
    <?= csrf_field(); ?>
    <div class="form-group row">
      <label for="foto" class="col-3 col-form-label">Pas Foto (3*4)</label>
      <div class="col-9">
        <input type="file" class="form-control custom-file-input <?= ($validation->hasError('foto') ? 'is-invalid' : ''); ?>" id="foto" name="foto">
        <label class="custom-file-label" for="foto">Choose file</label>
        <div class="invalid-feedback">
          <?= $validation->getError('foto'); ?>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="kartu-nisn" class="col-3 col-form-label">Kartu NISN</label>
      <div class="col-9">
        <input type="file" class="form-control custom-file-input <?= ($validation->hasError('kartu-nisn') ? 'is-invalid' : ''); ?>" id="kartu-nisn" name="kartu-nisn">
        <label class="custom-file-label" for="kartu-nisn">Choose file</label>
        <div class="invalid-feedback">
          <?= $validation->getError('kartu-nisn'); ?>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="rapor" class="col-3 col-form-label">Rapor</label>
      <div class="col-9">
        <input type="file" class="form-control custom-file-input <?= ($validation->hasError('rapor') ? 'is-invalid' : ''); ?>" id="rapor" name="rapor">
        <label class="custom-file-label" for="rapor">Choose file</label>
        <div class="invalid-feedback">
          <?= $validation->getError('rapor'); ?>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="ijazah" class="col-3 col-form-label">Ijazah</label>
      <div class="col-9">
        <input type="file" class="form-control custom-file-input <?= ($validation->hasError('ijazah') ? 'is-invalid' : ''); ?>" id="ijazah" name="ijazah">
        <label class="custom-file-label" for="ijazah">Choose file</label>
        <div class="invalid-feedback">
          <?= $validation->getError('ijazah'); ?>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="kk" class="col-3 col-form-label">Kartu Keluarga</label>
      <div class="col-9">
        <input type="file" class="form-control custom-file-input <?= ($validation->hasError('kk') ? 'is-invalid' : ''); ?>" id="kk" name="kk">
        <label class="custom-file-label" for="kk">Choose file</label>
        <div class="invalid-feedback">
          <?= $validation->getError('kk'); ?>
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