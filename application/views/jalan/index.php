<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-5">
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newJalanModal">Tambah Jalan</a>
            <?= $this->session->flashdata('message'); ?>
            <!-- Card Body -->
            <div class="card-body">
                <!-- isi -->
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Jalan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php $i = 1; ?>
                            <?php foreach ($jalan as $j) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $j['jalan']; ?></td>
                            <td>
                                <!-- <a class="btn btn-warning" href="#" role="button">Edit</a> -->
                                <a href="<?= base_url('jalan/input_data/' . $j['id']); ?>" class="btn btn-warning btn-sm"><i class="fas fa-plus"></i></a>
                                <a href="<?= base_url('jalan/deleteJalan/') . $j['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus data ini?');"><i class="fas fa-trash-alt"></i></a>

                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                    <td>

                    </td>
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="newJalanModal" tabindex="-1" aria-labelledby="newJalanModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newJalanModalLabel">Add New Jalan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('jalan'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="jalan" name="jalan" placeholder="Nama Jalan">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>