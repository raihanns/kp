<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <h3 class="h5 text-gray-800">Nama Jalan: <?= $jalan['jalan']; ?></h3>
    <form action="<?= base_url('jalan/input_kegiatan/' . $jalan['id']); ?>" method="POST">
        <div class="row">
            <div class="col-lg-5">

                <div class="mb-2">
                    <label for="ruasjalan" class="form-label">Nama Paket Kegiatan</label>
                    <input type="text" class="form-control" id="kegiatan" name="kegiatan" value="<?= $jalan['kegiatan']; ?>" />
                </div>
                <div class="mb-2">
                    <label for="ruasjalan" class="form-label">Perusahaan</label>
                    <input type="text" class="form-control" id="perusahaan" name="perusahaan" value="<?= $jalan['perusahaan']; ?>" />
                </div>
                <div class="mb-2">
                    <label for="ruasjalan" class="form-label">Nilai Kontrak</label>
                    <input type="text" class="form-control" id="kontrak" name="kontrak" value="<?= $jalan['kontrak']; ?>" />
                </div>
                <div class="mb-2">
                    <label for="ruasjalan" class="form-label">Jangka Waktu Pelaksanaan</label>
                    <input type="text" class="form-control" id="jangka" name="jangka" value="<?= $jalan['jangka']; ?>" />
                </div>
                <div class="mb-2">
                    <label for="ruasjalan" class="form-label">Volume Pekerjaan</label>
                    <input type="text" class="form-control" id="volume_pekerjaan" name="volume_pekerjaan" value="<?= $jalan['volume_pekerjaan']; ?>" />
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Dokumentasi Kegiatan</label>
                    <input type="file" class="form-control-file" id="foto_kegiatan" name="foto_kegiatan" value="<?= $jalan['foto_kegiatan']; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Upload Video</label>
                    <input type="file" class="form-control-file" id="video_kegiatan" name="video_kegiatan" value="<?= $jalan['video_kegiatan']; ?>">
                </div>
                <input class="btn btn-primary mt-3" type="submit" value="Submit">
            </div>
    </form>


</div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->