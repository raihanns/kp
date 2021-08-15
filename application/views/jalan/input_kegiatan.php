<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <h3 class="h5 text-gray-800">Nama Jalan: <?= $jalan['jalan']; ?></h3>
    <form>
        <div class="row">
            <div class="col-lg-5">

                <div class="mb-2">
                    <label for="ruasjalan" class="form-label">Nama Paket Kegiatan</label>
                    <input type="text" class="form-control" id="kegiatan" name="kegiatan" />
                </div>
                <div class="mb-2">
                    <label for="ruasjalan" class="form-label">Perusahaan</label>
                    <input type="text" class="form-control" id="perusahaan" name="peruysahaan" />
                </div>
                <div class="mb-2">
                    <label for="ruasjalan" class="form-label">Nilai Kontrak</label>
                    <input type="text" class="form-control" id="kontrak" name="kontrak" />
                </div>
                <div class="mb-2">
                    <label for="ruasjalan" class="form-label">Jangka Waktu Pelaksanaan</label>
                    <input type="text" class="form-control" id="jangka" name="ruasjalan" />
                </div>
                <div class="mb-2">
                    <label for="ruasjalan" class="form-label">Volume Pekerjaan</label>
                    <input type="text" class="form-control" id="volume_pekerjaan" name="ruasjalan" />
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Dokumentasi Kegiatan</label>
                    <input type="file" class="form-control-file" id="foto_kegiatan" name="ruasjalan">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Upload Video</label>
                    <input type="file" class="form-control-file" id="video_kegiatan" name="ruasjalan">
                </div>
                <input class="btn btn-primary mt-3" type="submit" value="Submit">
            </div>
    </form>


</div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->