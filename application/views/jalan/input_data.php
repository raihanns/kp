<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">


            <!-- Card Body -->
            <div class="card-body">
                <h4 style="text-align: center; padding-top: 30px"><?= $jalan['jalan']; ?></h4>
                <form>

                    <div class="mb-2">
                        <label for="ruasjalan" class="form-label">No Ruas Jalan</label>
                        <input type="text" class="form-control" id="ruasjalan" name="" value="<?= $jalan['id']; ?>" disabled />
                    </div>
                    <div class="mb-2">
                        <label for="namaruasjalan" class="form-label">Nama Ruas Jalan</label>
                        <input type="text" class="form-control" id="namaruasjalan" />
                    </div>
                    <div class="mb-2">
                        <label for="kecamatan" class="form-label">Kecamatan</label>
                        <input type="text" class="form-control" id="kecamatan" />
                    </div>
                    <div class="mb-2">
                        <label for="desa" class="form-label">Desa</label>
                        <input type="text" class="form-control" id="desa" />
                    </div>
                    <div class="row g-3">
                        <div class="col">
                            <label for="panjang">Panjang</label>
                            <input type="text" class="form-control" id="panjang" />
                        </div>
                        <div class="col">
                            <label for="lebar">Lebar</label>
                            <input type="text" class="form-control" id="lebar" />
                        </div>
                    </div>
                    </fieldset>
                    <div style="text-align: left; padding-top: 30px">
                        <h4>Kondisi Jalan</h4>
                    </div>

                    <div class="row g-3">
                        <div class="col">
                            <div class="mb-2">
                                <label for="aspalkm" class="form-label">Jenis Perkerasan Aspal(KM)</label>
                                <input type="text" class="form-control" id="aspalkm" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                                <label for="aspal%" class="form-label">Jenis Perkerasan Aspal(%)</label>
                                <input type="text" class="form-control" id="aspal%" disabled />
                            </div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col">
                            <div class="mb-2">
                                <label for="betonkm" class="form-label">Jenis Perkerasan Beton(KM)</label>
                                <input type="text" class="form-control" id="betonkm" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                                <label for="beton%" class="form-label">Jenis Perkerasan Beton(%)</label>
                                <input type="text" class="form-control" id="beton%" disabled />
                            </div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col">
                            <div class="mb-2">
                                <label for="kerikilkm" class="form-label">Jenis Perkerasan Kerikil(KM)</label>
                                <input type="text" class="form-control" id="kerikilkm" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                                <label for="kerikil%" class="form-label">Jenis Perkerasan Kerikil(%)</label>
                                <input type="text" class="form-control" id="kerikil%" disabled />
                            </div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col">
                            <div class="mb-2">
                                <label for="tanahkm" class="form-label">Jenis Perkerasan Tanah/Belum Tembus(KM)</label>
                                <input type="text" class="form-control" id="tanahkm" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                                <label for="tanah%" class="form-label">Jenis Perkerasan Tanah/Belum Tembus(%)</label>
                                <input type="text" class="form-control" id="tanah%" disabled />
                            </div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col">
                            <div class="mb-2">
                                <label for="baikkm" class="form-label">Kondisi Baik(KM)</label>
                                <input type="text" class="form-control" id="baikkm" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                                <label for="baik%" class="form-label">Kondisi Baik(%)</label>
                                <input type="text" class="form-control" id="baik%" />
                            </div>
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col">
                            <div class="mb-2">
                                <label for="sedangkm" class="form-label">Kondisi Sedang(KM)</label>
                                <input type="text" class="form-control" id="sedangkm" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                                <label for="sedang%" class="form-label">Kondisi Sedang(%)</label>
                                <input type="text" class="form-control" id="sedang%" />
                            </div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col">
                            <div class="mb-2">
                                <label for="ringankm" class="form-label">Kondisi Rusak Ringan(KM)</label>
                                <input type="text" class="form-control" id="ringankm" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                                <label for="ringankm%" class="form-label">Kondisi Rusak Ringan(%)</label>
                                <input type="text" class="form-control" id="ringankm%" />
                            </div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col">
                            <div class="mb-2">
                                <label for="beratkm" class="form-label">Kondisi Rusak Berat(KM)</label>
                                <input type="text" class="form-control" id="beratkm" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                                <label for="berat%" class="form-label">Kondisi Rusak Berat(%)</label>
                                <input type="text" class="form-control" id="berat%" />
                            </div>
                        </div>
                    </div>
                    </fieldset>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Dokumentasi Jalan</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                </form>
                <!-- akhir form input -->
                <input class="btn btn-primary mt-3" type="submit" value="Submit">
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