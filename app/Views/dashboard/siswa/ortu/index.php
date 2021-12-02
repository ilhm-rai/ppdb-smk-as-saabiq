<?= $this->extend('templates/dashboard'); ?>

<!-- End Banner -->
<?= $this->section('content'); ?>

<!-- Page Heading -->
<section class="py-3 mb-4">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h3 class="content-heading mb-0 text-gray-800">Data Orang Tua</h3>
  </div>

  <form action="/siswa/ortu/save" method="post" class="user" enctype="multipart/form-data">
    <?= csrf_field(); ?>

    <div class="form-group row">
      <label for="nama-ayah" class="col-3 col-form-label">Nama Ayah</label>
      <div class="col-9">
        <input type="text" class="form-control form-control-user <?= ($validation->hasError('nama-ayah') ? 'is-invalid' : ''); ?>" id="nama-ayah" name="nama-ayah">
        <div class="invalid-feedback">
          <?= $validation->getError('nama-ayah'); ?>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="pekerjaan-ayah" class="col-3 col-form-label">Pekerjaan Ayah</label>
      <div class="col-9">
        <input type="text" class="form-control form-control-user <?= ($validation->hasError('pekerjaan-ayah') ? 'is-invalid' : ''); ?>" id="pekerjaan-ayah" name="pekerjaan-ayah">
        <div class="invalid-feedback">
          <?= $validation->getError('pekerjaan-ayah'); ?>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="penghasilan-ayah" class="col-3 col-form-label">Penghasilan Ayah</label>
      <div class="col-9">
        <input type="text" class="form-control form-control-user <?= ($validation->hasError('penghasilan-ayah') ? 'is-invalid' : ''); ?>" id="penghasilan-ayah" name="penghasilan-ayah">
        <div class="invalid-feedback">
          <?= $validation->getError('penghasilan-ayah'); ?>
        </div>
      </div>
    </div>

    <div class="form-group row">
      <label for="nama-ibu" class="col-3 col-form-label">Nama Ibu</label>
      <div class="col-9">
        <input type="text" class="form-control form-control-user <?= ($validation->hasError('nama-ibu') ? 'is-invalid' : ''); ?>" id="nama-ibu" name="nama-ibu">
        <div class="invalid-feedback">
          <?= $validation->getError('nama-ibu'); ?>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="pekerjaan-ibu" class="col-3 col-form-label">Pekerjaan Ibu</label>
      <div class="col-9">
        <input type="text" class="form-control form-control-user <?= ($validation->hasError('pekerjaan-ibu') ? 'is-invalid' : ''); ?>" id="pekerjaan-ibu" name="pekerjaan-ibu">
        <div class="invalid-feedback">
          <?= $validation->getError('pekerjaan-ibu'); ?>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="penghasilan-ibu" class="col-3 col-form-label">Penghasilan Ibu</label>
      <div class="col-9">
        <input type="text" class="form-control form-control-user <?= ($validation->hasError('penghasilan-ibu') ? 'is-invalid' : ''); ?>" id="penghasilan-ibu" name="penghasilan-ibu">
        <div class="invalid-feedback">
          <?= $validation->getError('penghasilan-ibu'); ?>
        </div>
      </div>
    </div>

    <div class="form-group row">
      <label for="nama-wali" class="col-3 col-form-label">Nama Wali</label>
      <div class="col-9">
        <input type="text" class="form-control form-control-user <?= ($validation->hasError('nama-wali') ? 'is-invalid' : ''); ?>" id="nama-wali" name="nama-wali">
        <div class="invalid-feedback">
          <?= $validation->getError('nama-wali'); ?>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="pekerjaan-wali" class="col-3 col-form-label">Pekerjaan Wali</label>
      <div class="col-9">
        <input type="text" class="form-control form-control-user <?= ($validation->hasError('pekerjaan-wali') ? 'is-invalid' : ''); ?>" id="pekerjaan-wali" name="pekerjaan-wali">
        <div class="invalid-feedback">
          <?= $validation->getError('pekerjaan-wali'); ?>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="penghasilan-wali" class="col-3 col-form-label">Penghasilan Wali</label>
      <div class="col-9">
        <input type="text" class="form-control form-control-user <?= ($validation->hasError('penghasilan-wali') ? 'is-invalid' : ''); ?>" id="penghasilan-wali" name="penghasilan-wali">
        <div class="invalid-feedback">
          <?= $validation->getError('penghasilan-wali'); ?>
        </div>
      </div>
    </div>

    <div class="form-group row">
      <label for="kondisi-keluarga" class="col-3 col-form-label">Kondisi Keluarga</label>
      <div class="col-9">
        <select class="custom-select" id="kondisi-keluarga" name="kondisi-keluarga">
          <option selected>Pilih salah satu...</option>
          <option value="Lengkap">Lengkap</option>
          <option value="Meninggal">Meninggal</option>
          <option value="Ayah Meninggal">Ayah Meninggal</option>
          <option value="Ibu Meninggal">Ibu Meninggal</option>
        </select>
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