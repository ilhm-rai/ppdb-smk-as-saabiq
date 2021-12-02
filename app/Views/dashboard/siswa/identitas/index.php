<?= $this->extend('templates/dashboard'); ?>

<!-- End Banner -->
<?= $this->section('content'); ?>

<!-- Page Heading -->
<section class="py-3 mb-4">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h3 class="content-heading mb-0 text-gray-800">Identitas Diri</h3>
  </div>

  <form action="/siswa/indentitas/save" method="post" class="user" enctype="multipart/form-data">
    <?= csrf_field(); ?>

    <div class="form-group row">
      <label for="kk" class="col-3 col-form-label">Nomor Kartu Keluarga</label>
      <div class="col-9">
        <input type="text" class="form-control form-control-user <?= ($validation->hasError('kk') ? 'is-invalid' : ''); ?>" id="kk" name="kk">
        <div class="invalid-feedback">
          <?= $validation->getError('kk'); ?>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="nik" class="col-3 col-form-label">NIK</label>
      <div class="col-9">
        <input type="text" class="form-control form-control-user <?= ($validation->hasError('nik') ? 'is-invalid' : ''); ?>" id="nik" name="nik">
        <div class="invalid-feedback">
          <?= $validation->getError('nik'); ?>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="nama" class="col-3 col-form-label">Nama Lengkap</label>
      <div class="col-9">
        <input type="text" class="form-control form-control-user <?= ($validation->hasError('nama') ? 'is-invalid' : ''); ?>" id="nama" name="nama">
        <div class="invalid-feedback">
          <?= $validation->getError('nama'); ?>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="tempat-lahir" class="col-3 col-form-label">Tempat Lahir</label>
      <div class="col-9">
        <input type="text" class="form-control form-control-user <?= ($validation->hasError('tempat-lahir') ? 'is-invalid' : ''); ?>" id="tempat-lahir" name="tempat-lahir">
        <div class="invalid-feedback">
          <?= $validation->getError('tempat-lahir'); ?>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="tanggal-lahir" class="col-3 col-form-label">Tanggal Lahir</label>
      <div class="col-9">
        <input type="date" class="form-control form-control-user <?= ($validation->hasError('tanggal-lahir') ? 'is-invalid' : ''); ?>" id="tanggal-lahir" name="tanggal-lahir">
        <div class="invalid-feedback">
          <?= $validation->getError('tanggal-lahir'); ?>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="jenis-kelamin" class="col-3 col-form-label">Jenis Kelamin</label>
      <div class="col-9">
        <select class="custom-select" id="jenis-kelamin" name="jenis-kelamin">
          <option selected>Pilih salah satu...</option>
          <option value="Laki-laki">Laki-laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="anak-ke" class="col-3 col-form-label">Anak-Ke</label>
      <div class="col-9">
        <input type="number" class="form-control form-control-user <?= ($validation->hasError('anak-ke') ? 'is-invalid' : ''); ?>" id="anak-ke" name="anak-ke">
        <div class="invalid-feedback">
          <?= $validation->getError('anak-ke'); ?>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="jml-anak" class="col-3 col-form-label">Dari</label>
      <div class="col-9">
        <input type="number" class="form-control form-control-user <?= ($validation->hasError('jml-anak') ? 'is-invalid' : ''); ?>" id="jml-anak" name="jml-anak">
        <div class="invalid-feedback">
          <?= $validation->getError('jml-anak'); ?>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="agama" class="col-3 col-form-label">Jenis Kelamin</label>
      <div class="col-9">
        <select class="custom-select" id="agama" name="agama">
          <option selected>Pilih salah satu...</option>
          <option value="Islam">Islam</option>
          <option value="Kristen">Kristen</option>
          <option value="Katolik">Katolik</option>
          <option value="Hindu">Hindu</option>
          <option value="Buddha">Buddha</option>
          <option value="Konghucu">Konghucu</option>
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