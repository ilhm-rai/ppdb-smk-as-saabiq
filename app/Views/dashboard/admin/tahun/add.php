<?= $this->extend('templates/dashboard'); ?>

<!-- End Banner -->
<?= $this->section('content'); ?>

<!-- Page Heading -->
<section class="py-5">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h3 class="content-heading mb-0 text-gray-800">Tambah Tahun Akademik</h3>
  </div>

  <form action="/admin/tahun/save" method="post" class="user">
    <?= csrf_field(); ?>
    <div class="form-group row">
      <label for="tahun" class="col-sm-2 col-form-label">Tahun Akademik</label>
      <div class="col-sm-10">
        <input type="number" class="form-control form-control-user <?= (session('errors.tahun') ? 'is-invalid' : ''); ?>" id="datepicker" name="tahun" placeholder="Tahun Akademik..." value="<?= (old('tahun') ? old('tahun') : ''); ?>">
        <div class="invalid-feedback">
          <?= $validation->getError('tahun'); ?>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="status" class="col-sm-2 col-form-label">Status</label>
      <div class="col-sm-10">
        <select class="custom-select" id="status" name="status">
          <option selected>Pilih salah satu...</option>
          <option value="1">Aktif</option>
          <option value="0">Non Aktif</option>
        </select>
      </div>
    </div>
    <button type="submit" class="btn btn-warning btn-user btn-sm">Save</button>
    <a href="/admin/users/roles" class="btn btn-secondary btn-user btn-sm">Cancel</a>
  </form>
</section>
<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<script>
  $(function() {
    $("#datepicker").datepicker({
      dateFormat: 'yy'
    });
  });​
  $(document).ready(function() {
    $('#dataUsers').DataTable();
  });
</script>
<?= $this->endSection(); ?>