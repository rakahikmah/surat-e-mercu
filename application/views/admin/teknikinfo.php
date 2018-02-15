       <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Tabel Mahasiswa
              <span class="label label-primary">Teknik Informatika</span>
            </h1>
            <ol class="breadcrumb">
              <li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-home"></i> Beranda</a></li>
              <li><i class="fa fa-book"></i> Mahasiswa</li>
              <li class="active"><i class="fa fa-table"></i> Teknik Informatika</li>
            </ol>
          </section>

          <section class="content">
            <div class="row">
              <div class="col-sm-12">

                <div class="box">
                  <!-- /.box-header -->
                  <div class="box-body table-responsive">
                    <table id="datatable" class="table table-bordered table-striped text-center">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Tanggal</th>
                          <th>NIM</th>
                          <th>Nama</th>
                          <th>Program Studi</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                       <!--  <?php $no=1;
                       foreach ($surat as $u) {
                       ?> -->
                        <tr>
                          <td><?php echo $no++; ?></td>
                            <td><?php echo $u->tanggal_diajukan; ?></td>
                            <td><?php echo $u->nim; ?></td>
                            <td><?php echo $u->nama_mahasiswa; ?></td>
                            <td><?php echo $u->prodi; ?></td>
                          <td class="col-md-3">
                              <button type="button" class="btn btn-primary">Proses</button>
                              <button type="button" class="btn btn-default">Detail</button>
                              <a href="<?php echo site_url('admin/tolakemailta') ?>" class="btn btn-danger">Tolak</a>
                          </td>
                        </tr>
                       <!-- <?php } ?> --> 
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
  </div>
</body>
