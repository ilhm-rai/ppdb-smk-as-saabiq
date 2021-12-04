<?= $this->extend('templates/dashboard'); ?>

<!-- End Banner -->
<?= $this->section('content'); ?>

<!-- Page Heading -->
<section class="py-5">


  <!-- ====== -->
  <div class="d-sm-flex align-items-center justify-content-between">
    <h3 class="content-heading mb-0 text-gray-800">Registrasi</h3>
  </div>
  <div class="flash-data" data-flashdata="<?= session()->getFlashdata('message'); ?>"></div>

  <?php if (session()->getFlashdata('message')) : ?>
    <div class="alert alert-success" role="alert">
      <?= session()->getFlashdata('message'); ?>
    </div>
  <?php endif; ?>
  <div class="table-responsive">
    <table class="table table-bordered" id="dataUsers" cellspacing="0">
      <thead>
        <tr>
          <th>No</th>
          <th>Nomor Registrasi</th>
          <th>Username</th>
          <th>Tahun</th>
          <th>Status</th>
          <th>Jalur</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>No</th>
          <th>Nomor Registrasi</th>
          <th>Username</th>
          <th>Tahun</th>
          <th>Status</th>
          <th>Jalur</th>
        </tr>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($registrasi as $r) : ?>
            <tr>
              <td><?= $i++; ?></td>
              <td><?= $r['nomor_registrasi']; ?></td>
              <td><?= $r['user_id']; ?></td>
              <td><?= $r['tahun_id']; ?></td>
              <td><?= $r['jalur_id']; ?></td>
              <td>
                <?php if ($r['status'] == 'Diterima') : ?>
                  <button class="btn btn-success btn-sm"><?= $r['status']; ?></button>
                <?php elseif ($r['status'] == 'Pending') : ?>
                  <button class="btn btn-warning btn-sm"><?= $r['status']; ?></button>
                <?php else : ?>
                  <button class="btn btn-danger btn-sm"><?= $r['status']; ?></button>
                <?php endif; ?>
              </td>

              <td class="text-center">

                <a href="/admin/registrasi/assessment/<?= $r['id']; ?>" class="btn btn-action btn-sm small mb-1"><span class="d-lg-none fa fa-pencil-alt"></span><span class="d-sm-none d-lg-inline">Assessment</span></a>
                <form action="/admin/registrasi/<?= $r['id']; ?>" method="POST" class="d-inline form-delete">
                  <?= csrf_field(); ?>
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn btn-action btn-sm small mb-1 btn-delete"><span class="d-lg-none fa fa-trash"></span><span class="d-sm-none d-lg-inline">Delete</span></span></button>
                </form>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </tfoot>
      <tbody>
      </tbody>
    </table>
  </div>

</section>
<?= $this->endSection(); ?>