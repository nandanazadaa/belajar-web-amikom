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
                <h3 style="color: #7F7D7D;">FOTO PROFIL</h3>
                <div class="row">
                    <div class="card bg-primary card-warning" style="width: 100%; color: white;">
                        <div class="card-body">
                            <h5 class="card-title">PERHATIAN! Silakan patuhi ketentuan upload foto berikut :</h5>
                            <p class="card-text">
                                - Foto Resmi Berwarna : Kemeja Putih, berdasi (kecuali yg berhijab warna putih)<br>
                                - Berjas Almamater dengan background warna biru<br>
                                - Resolusi foto 340x400 pixel<br>
                                - Ukuran file foto Max. 1 MB</p>
                        </div>
                    </div>

                    <?php echo form_open_multipart('User/addFotoProfil');  ?>
                    <div class="card" style="width: 400px;">
                        <?= $this->session->flashdata('file_update'); ?>
                        <div class="card-header" style="background-color: #ff9800; color: white;">
                            Foto Profil Mahasiswa
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="input-group mb-3">a
                                    <input type="file" class="form-control" id="inputGroupFile02" name="images">
                                </div>
                                <button class="btn" style="background-color: #ff9800; color: white;" type="submit" name="simpan">Upload Foto</button>
                            </li>
                        </ul>
                    </div>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        Copyright © 2018 Concept. All rights
                        reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
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
<!-- ============================================================== -->
<!-- Optional JavaScript -->