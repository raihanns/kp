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
                        <input type="text" class="form-control" id="ruasjalan" name="no_ruas" value="<?= $jalan['no_ruas']; ?>">
                    </div>
                    <div class="mb-2">
                        <label for="namaruasjalan" class="form-label">Nama Ruas Jalan</label>
                        <input type="text" class="form-control" id="namaruasjalan" name="jalan" value="<?= $jalan['jalan']; ?>" />
                    </div>
                    <div class="mb-2">
                        <label for="kecamatan" class="form-label">Kecamatan</label>
                        <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?= $jalan['kecamatan']; ?>" />
                    </div>
                    <div class="mb-2">
                        <label for="desa" class="form-label">Desa</label>
                        <input type="text" class="form-control" id="desa" name="desa" value="<?= $jalan['desa']; ?>" />
                    </div>
                    <div class="row g-3">
                        <div class="col">
                            <label for="panjang">Panjang</label>
                            <input type="text" class="form-control" id="panjang" name="panjang" value="<?= $jalan['panjang']; ?>" />
                        </div>
                        <div class="col">
                            <label for="lebar">Lebar</label>
                            <input type="text" class="form-control" id="lebar" name="lebar" value="<?= $jalan['lebar']; ?>" />
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
                            <input type="text" class="form-control" id="aspal" name="aspal" value="<?= $jalan['aspal']; ?>" />
                        </div>
                        <div class="col">
                            <label for="lebar">Jenis Perkerasan Beton (KM)</label>
                            <input type="text" class="form-control" id="beton" name="beton" value="<?= $jalan['beton']; ?>" />
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col">
                            <label for="panjang">Jenis Perkerasan Kerikil (KM)</label>
                            <input type="text" class="form-control" id="kerikil" name="kerikil" value="<?= $jalan['kerikil']; ?>" />
                        </div>
                        <div class="col">
                            <label for="lebar">Jenis Perkerasan Tanah/Belum Tembus(KM)</label>
                            <input type="text" class="form-control" id="tanah" name="tanah_belum" value="<?= $jalan['tanah_belum']; ?>" />
                        </div>
                    </div>

                    <div style="text-align: left; padding-top: 30px">
                        <h4>KONDISI JALAN</h4>
                    </div>
                    <br>
                    <div class="row g-3">
                        <div class="col">
                            <label for="panjang">Kondisi Baik (KM)</label>
                            <input type="text" class="form-control" id="baik" name="baik" value="<?= $jalan['baik']; ?>" />
                        </div>
                        <div class="col">
                            <label for="lebar">Kondisi Sedang (KM)</label>
                            <input type="text" class="form-control" id="sedang" name="sedang" value="<?= $jalan['sedang']; ?>" />
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col">
                            <label for="panjang">Kondisi Rusak Ringan (KM)</label>
                            <input type="text" class="form-control" id="rusakringan" name="rusak_ringan" value="<?= $jalan['rusak_ringan']; ?>" />
                        </div>
                        <div class="col">
                            <label for="lebar">Kondisi Rusak Berat (KM)</label>
                            <input type="text" class="form-control" id="rusakberat" name="rusak_berat" value="<?= $jalan['rusak_berat']; ?>" />
                        </div>
                    </div>
                    </fieldset>
                    <br>
                    <div class="form-group">
                        <h4 for="exampleFormControlFile1">Dokumentasi Jalan</h4>
                        <input type="file" class="form-control-file" id="dokumentasi" name="dokumentasi[]" multiple="multiple" value="">
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