
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
                            <div
                                class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
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
                                    <div class="card-header header-semester w-100"
                                style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 3px 4px 0 rgba(0, 0, 0, 0.13); font-size: 16px; background-color:#FF9800; color:white;">
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
                                        <?= $this->session->flashdata('message'); ?>

                                        <div class="card"
                                            style="font-size: 10px; width: 100% !important; display: flex; flex-direction: column; ">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table id="CustomerTable"
                                                        class="table table-bordered"
                                                        style="font-size: 14px; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                                                        <thead class="bg-light">
                                                            <tr class="border-0">
                                                                <th class="border-0">No</th>
                                                                <th class="border-0">NAMA PRODI</th>
                                                                <th class="border-0">ANGKATAN</th>
                                                                <th class="border-0">TGL MULAI</th>
                                                                <th class="border-0">TGL SELESAI</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php $i = 1 ?>
                                                        <?php foreach ($krs_info as $krs) : ?>
                                                            <tr>
                                                                <td><?= $i?></td>
                                                                <td><?= $krs['nama_prodi'] ?></td>
                                                                <td><?= $krs['angkatan'] ?></td>
                                                                <td><?= $krs['tgl_mulai'] ?></td>
                                                                <td><?= $krs['tgl_selesai'] ?></td>
                                                            </tr>
                                                            <?php $i++;
                                                            endforeach ?>
                                                            </tbody>
                                                    </table>
                                                </div>
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


           
