<?= $this->extend('templates/dashboard'); ?>

<!-- End Banner -->
<?= $this->section('content'); ?>

<!-- Page Heading -->
<section class="py-3 mb-4">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h3 class="content-heading mb-0 text-gray-800">Registasi</h3>
  </div>

  <form action="/siswa/indentitas/save" method="post" class="user" enctype="multipart/form-data">
    <?= csrf_field(); ?>

    <div class="form-group row">
      <label for="email" class="col-3 col-form-label">Email</label>
      <div class="col-9">
        <input type="text" class="form-control form-control-user <?= ($validation->hasError('email') ? 'is-invalid' : ''); ?>" id="email" name="email" value="<?= info_user()->email; ?>" readonly>
        <div class="invalid-feedback">
          <?= $validation->getError('email'); ?>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="tahun" class="col-3 col-form-label">Tahun Akademik</label>
      <div class="col-9">
        <input type="hidden" class="form-control form-control-user <?= ($validation->hasError('tahun') ? 'is-invalid' : ''); ?>" id="tahun" name="tahun" value="<?= $tahun['id']; ?>">
        <input type="text" class="form-control form-control-user <?= ($validation->hasError('show') ? 'is-invalid' : ''); ?>" id="show" name="show" value="<?= $tahun['tahun']; ?>" readonly>
        <div class="invalid-feedback">
          <?= $validation->getError('tahun'); ?>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="jalur" class="col-3 col-form-label">Jalur Registrasi</label>
      <div class="col-9">
        <select class="custom-select" id="jalur" name="jalur">
          <option selected>Pilih salah satu...</option>
          <?php foreach ($jalur as $j) : ?>
            <option value="<?= $j['id']; ?>"><?= $j['nama_jalur']; ?></option>
          <?php endforeach; ?>
        </select>
      </div>
    </div>
    <button type="submit" class="btn btn-warning btn-user btn-sm">Submit</button>

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