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
                        <?= $this->session->flashdata('users'); ?>
                            <div class="card-body">
                                <form action="<?= base_url('User/add_data')?>" method="post">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Kode</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kode">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">KEY MHS</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="key_mhs">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Matkul</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="matkul">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">SKS</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="sks">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Paraf</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="paraf">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Tanggal Mid</label>
                                        <input type="date" class="form-control" id="exampleInputPassword1" name="tgl_mid">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Tanggal Uas</label>
                                        <input type="date" class="form-control" id="exampleInputPassword1" name="tgl_uas">
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