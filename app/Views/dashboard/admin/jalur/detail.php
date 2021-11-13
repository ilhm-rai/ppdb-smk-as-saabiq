<?= $this->extend('templates/dashboard'); ?>

<!-- End Banner -->
<?= $this->section('content'); ?>
<section class="py-5">
  <div class="d-sm-flex align-items-center justify-content-between">
    <h3 class="content-heading mb-0 text-gray-800">Detail Role</h3>
    <a href="/admin/users/roles/edit/<?= $role['id']; ?>" class="d-block d-sm-inline-block btn rounded-pill btn-warning"><i class="fas fa-plus-square mr-1"></i> Edit Olahraga</a>
  </div>
  <div class="flash-data" data-flashdata="<?= session()->getFlashdata('message'); ?>"></div>
  <?php if (session()->getFlashdata('message')) : ?>
    <div class="alert alert-success" role="alert">
      <?= session()->getFlashdata('message'); ?>
    </div>
  <?php endif; ?>
  <form action="/admin/users/roles/update/<?= $role['id']; ?>" method="post" class="user mt-4">
    <?= csrf_field(); ?>
    <div class="form-group row">
      <label for="name" class="col-sm-2 col-form-label">Nama Role</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Service Name" value="<?= (old('name')) ? old('name') : $role['name']; ?>" readonly>
      </div>
    </div>
    <div class="form-group row">
      <label for="description" class="col-sm-2 col-form-label">Description</label>
      <div class="col-sm-10">
        <textarea class="form-control" id="description" name="description" rows="4" readonly><?= $role['description']; ?></textarea>
      </div>
    </div>

  </form>
  <div class="table-responsive">
    <table class="table table-bordered td-align-middle" id="dataVendors" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>No</th>
          <th width='100px'>Logo</th>
          <th>Vendor Name</th>
          <th>Service</th>
          <!-- <th>Owner</th> -->
          <th>Action</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>No</th>
          <th>Logo</th>
          <th>Vendor Name</th>
          <th>Service</th>
          <!-- <th>Owner</th> -->
          <th>Action</th>
        </tr>
      </tfoot>
      <tbody>
      </tbody>
    </table>
  </div>
</section>
<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<script>
  $(document).ready(function() {
    $('#dataUsers').DataTable();
  });
</script>
<?= $this->endSection(); ?>