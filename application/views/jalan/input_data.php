<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">

            <?= $this->session->flashdata('message'); ?>
            <!-- Card Body -->
            <div class="card-body">
                <h4 style="text-align: center; padding-top: 30px"><?= $jalan['jalan']; ?></h4>
                <form action="<?= base_url('jalan/input_data/' . $jalan['id']); ?>" method="POST">
                    <h4>DATA RUAS JALAN</h4>
                    <br>
                    <div class="mb-2">
                        <label for="ruasjalan" class="form-label">No Ruas Jalan</label>
                        <input type="text" class="form-control" id="no_ruas" name="no_ruas">
                    </div>
                    <div class="mb-2">
                        <label for="namaruasjalan" class="form-label">Nama Ruas Jalan</label>
                        <input type="text" class="form-control" id="jalan" name="jalan" value="<?= $jalan['jalan']; ?>" />
                    </div>
                    <div class="mb-2">
                        <label for="kecamatan" class="form-label">Kecamatan</label>
                        <input type="text" class="form-control" id="kecamatan" name="kecamatan" />
                    </div>
                    <div class="mb-2">
                        <label for="desa" class="form-label">Desa</label>
                        <input type="text" class="form-control" id="desa" name="desa" />
                    </div>
                    <div class="row g-3">
                        <div class="col">
                            <label for="panjang">Panjang (KM)</label>
                            <input type="text" class="form-control" id="panjang" name="panjang" />
                        </div>
                        <div class="col">
                            <label for="lebar">Lebar (M)</label>
                            <input type="text" class="form-control" id="lebar" name="lebar" />
                        </div>
                    </div>
                    </fieldset>
                    <div style="text-align: left; padding-top: 30px">
                        <h4>JENIS PERKERASAN</h4>
                    </div>
                    <br>
                    <div class="row g-3">
                        <div class="col">
                            <label for="panjang">Jenis Perkerasan Aspal (KM)</label>
                            <input type="text" class="form-control" id="aspal" />
                        </div>
                        <div class="col">
                            <label for="lebar">Jenis Perkerasan Beton (KM)</label>
                            <input type="text" class="form-control" id="beton" />
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col">
                            <label for="panjang">Jenis Perkerasan Kerikil (KM)</label>
                            <input type="text" class="form-control" id="kerikil" />
                        </div>
                        <div class="col">
                            <label for="lebar">Jenis Perkerasan Tanah/Belum Tembus(KM)</label>
                            <input type="text" class="form-control" id="tanah" />
                        </div>
                    </div>

                    <div style="text-align: left; padding-top: 30px">
                        <h4>KONDISI JALAN</h4>
                    </div>
                    <br>
                    <div class="row g-3">
                        <div class="col">
                            <label for="panjang">Kondisi Baik (KM)</label>
                            <input type="text" class="form-control" id="baik" />
                        </div>
                        <div class="col">
                            <label for="lebar">Kondisi Sedang (KM)</label>
                            <input type="text" class="form-control" id="sedang" />
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col">
                            <label for="panjang">Kondisi Rusak Ringan (KM)</label>
                            <input type="text" class="form-control" id="rusakringan" />
                        </div>
                        <div class="col">
                            <label for="lebar">Kondisi Rusak Berat (KM)</label>
                            <input type="text" class="form-control" id="rusakberat" />
                        </div>
                    </div>
                    </fieldset>
                    <br>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Dokumentasi Jalan</label>
                        <input type="file" class="form-control-file" id="dokumentasi">
                    </div>
                    <input class="btn btn-primary mt-3" type="submit" value="Submit">
                </form>
                <!-- akhir form input -->
            </div>

        </div>
    </div>
</div>
</div>


</div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->