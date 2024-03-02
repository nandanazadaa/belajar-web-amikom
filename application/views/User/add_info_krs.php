<!-- ============================================================== -->
<!-- wrapper  -->
<!-- ============================================================== -->
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->
            <div class="ecommerce-widget">
                <div class="container">
                    <div class="row">
                        <h3 style="color: #7F7D7D;">JADWAL PENGAMBILAN KRS</h3>
                        <div class="card-header header-semester w-100" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 3px 4px 0 rgba(0, 0, 0, 0.13); font-size: 16px; background-color:#FF9800; color:white;">
                            NB: Jadwal pengambilan KRS dapat berubah sewaktu-waktu.
                        </div>

                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- JADWAL UJIAN  -->
                        <!-- ============================================================== -->
                        <div class="card" style="font-size: 10px; width: 100% !important; display: flex; flex-direction: column; ">
                            <div class="card-body">
                                <form action="<?= base_url('user/add_infoKRS')?>" method="post">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nama Prodi</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_prodi">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Angkatan</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="angkatan">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Tanggal Mulai</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="tgl_mulai">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Tanggal Selesai</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="tgl_selesai">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                        <!-- =============================================================== -->
                        <!--                          END JADWAL UJIAN                       -->
                        <!-- =============================================================== -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <div class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 col-12">
                    Copyright © 2023 Concept. All rights
                    reserved. Dashboard by <a href="https://colorlib.com/wp/">NANDANA ZADA ABIPROYA</a>.
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- end wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- end main wrapper  -->