<?= $this->extend('templates/dashboard'); ?>

<!-- End Banner -->
<?= $this->section('content'); ?>

<!-- Page Heading -->
<section class="py-3 mb-4">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h3 class="content-heading mb-0 text-gray-800">Data Nilai</h3>
  </div>

  <form action="/siswa/ortu/save" method="post" class="user" enctype="multipart/form-data">
    <?= csrf_field(); ?>
    <div class="form-group row">
      <label for="matematika" class="col-3 col-form-label">Matematika</label>
      <div class="col-9">
        <input type="number" class="form-control form-control-user <?= ($validation->hasError('matematika') ? 'is-invalid' : ''); ?>" id="matematika" name="matematika">
        <div class="invalid-feedback">
          <?= $validation->getError('matematika'); ?>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="ipa" class="col-3 col-form-label">IPA</label>
      <div class="col-9">
        <input type="number" class="form-control form-control-user <?= ($validation->hasError('ipa') ? 'is-invalid' : ''); ?>" id="ipa" name="ipa">
        <div class="invalid-feedback">
          <?= $validation->getError('ipa'); ?>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="ips" class="col-3 col-form-label">IPS</label>
      <div class="col-9">
        <input type="number" class="form-control form-control-user <?= ($validation->hasError('ips') ? 'is-invalid' : ''); ?>" id="ips" name="ips">
        <div class="invalid-feedback">
          <?= $validation->getError('ips'); ?>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="b-indo" class="col-3 col-form-label">Bahasa Indonesia</label>
      <div class="col-9">
        <input type="number" class="form-control form-control-user <?= ($validation->hasError('b-indo') ? 'is-invalid' : ''); ?>" id="b-indo" name="b-indo">
        <div class="invalid-feedback">
          <?= $validation->getError('b-indo'); ?>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="b-inggris" class="col-3 col-form-label">Bahasa Inggris</label>
      <div class="col-9">
        <input type="number" class="form-control form-control-user <?= ($validation->hasError('b-inggris') ? 'is-invalid' : ''); ?>" id="b-inggris" name="b-inggris">
        <div class="invalid-feedback">
          <?= $validation->getError('b-inggris'); ?>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="pai" class="col-3 col-form-label">PAI</label>
      <div class="col-9">
        <input type="number" class="form-control form-control-user <?= ($validation->hasError('pai') ? 'is-invalid' : ''); ?>" id="pai" name="pai">
        <div class="invalid-feedback">
          <?= $validation->getError('pai'); ?>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="ppkn" class="col-3 col-form-label">PPKN</label>
      <div class="col-9">
        <input type="number" class="form-control form-control-user <?= ($validation->hasError('ppkn') ? 'is-invalid' : ''); ?>" id="ppkn" name="ppkn">
        <div class="invalid-feedback">
          <?= $validation->getError('ppkn'); ?>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="pjok" class="col-3 col-form-label">PJOK</label>
      <div class="col-9">
        <input type="number" class="form-control form-control-user <?= ($validation->hasError('pjok') ? 'is-invalid' : ''); ?>" id="pjok" name="pjok">
        <div class="invalid-feedback">
          <?= $validation->getError('pjok'); ?>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="b-sunda" class="col-3 col-form-label">Bahasa Sunda</label>
      <div class="col-9">
        <input type="number" class="form-control form-control-user <?= ($validation->hasError('b-sunda') ? 'is-invalid' : ''); ?>" id="b-sunda" name="b-sunda">
        <div class="invalid-feedback">
          <?= $validation->getError('b-sunda'); ?>
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