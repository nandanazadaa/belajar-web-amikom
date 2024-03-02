
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
                            <h3 style="color: #7F7D7D;">Dashboard Mahasiswa</h3>
                            <div class="card-header header-semester w-100"
                                style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 3px 4px 0 rgba(0, 0, 0, 0.13); font-size: 16px;">
                                Semester - Ganjil TA. 2023/2024
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="card-header bg-primary w-100"
                                        style="height: 50px; font-size: 17px;">
                                        QR Mahasiswa
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-header border-0"
                                                style="display: flex; flex-wrap: wrap; justify-content: center;">
                                                <img src="<?= base_url('asets/')?>images/qr.PNG" class="center"
                                                    style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card-header w-100"
                                        style="background-color: #ff9800; color: white; height: 50px; font-size: 15px;">
                                        Status di Semester - Ganjil TA.
                                        2023-2024
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-header border-0">
                                                <img src="<?= base_url('asets/')?>images/ceklis.png" class="ceklis-icon"><h1 style="position: absolute; top: 50px;
                                        left: 140px;">Aktif</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card-header bg-primary w-100"
                                        style="height: 50px; font-size: 17px;">
                                        KRS Mahasiswa
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <span>Semester Ganjil TA. 2023/2024</span>
                                            <div class="card-header border-0"
                                                style="display: flex; flex-wrap: wrap; justify-content: left;">

                                                <div class="foto d-flex">
                                                    <a href="#"><button
                                                            class="btn-ambil-krs">AMBIL
                                                            KRS</button></a>
                                                    <a href="#"><button
                                                            class="btn-cetak-krs btn-primary">CETAK
                                                            KRS</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <!-- ============================================================== -->

                                        <!-- ============================================================== -->
                                        <!-- JADWAL MATA PELAJARAN  -->
                                        <!-- ============================================================== -->
                                        <div class="card"
                                            style="font-size: 19px; width: 100% !important; display: flex; flex-direction: column; ">
                                            <h5 class="card-header"
                                                style="font-size: 19px; background-color: rgb(133, 132, 132); color: white; width: 100% !important; display: flex; flex-direction: column; ">Jadwal
                                                Kuliah<a href="javascript:void(0);" onclick="listMatkul()"><i class="fa-solid fa-caret-up"onclick="changeIcon(this)"></i></a>
                                            </h5>
                                            <div class="card-body card-matkul" id="matkul">
                                                <div class="table-responsive">
                                                    <table id="CustomerTable"
                                                        class="table table-bordered"
                                                        style="font-size: 15px; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                                                        <thead class="bg-light">
                                                            <tr class="border-0">
                                                                <th
                                                                    class="border-0">No</th>
                                                                <th
                                                                    class="border-0">HARI
                                                                    | JAM |
                                                                    RUANG</th>
                                                                <th
                                                                    class="border-0">MATA
                                                                    KULIAH</th>
                                                                <th
                                                                    class="border-0"
                                                                    style="text-align: center;">DOSEN
                                                                    PENGAMPU</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td
                                                                    class="dropdown">1</td>
                                                                <td>SENIN |
                                                                    10:40-12:20
                                                                    <br>VR.02.04</td>
                                                                <td>ST008 - <b
                                                                        style="color: black;">BAHASA
                                                                        INGGRIS
                                                                        I</b>
                                                                    (Teori)<br><br>23S1IF03-BahasaI(ST008)
                                                                </td>
                                                                <td
                                                                    style="text-align: center;"
                                                                    class="dosen-link">Ayuni
                                                                    Fitria,
                                                                    S.Pd., M.A<br>
                                                                    <a href><i
                                                                            class="fa-solid fa-envelope icon-table"></i>
                                                                        :ayuni.fitria@amikom.ac.id</a><br>
                                                                    <a href="https://zoom.us/j/98124161718"><i
                                                                            class="fa-solid fa-video icon-table zoom-link"></i></a>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>
                                                                    SELASA |
                                                                    08:50-10:30<br>05.03.03
                                                                </td>
                                                                <td>ST068 - <b
                                                                        style="color: black;">ALGORITMA
                                                                        DAN
                                                                        PEMROGRAMAN</b>
                                                                    (Teori) <br><br>23S1IF03-Algorit(ST068)</td>
                                                                <td
                                                                    style="text-align: center;"
                                                                    class="dosen-link">Majid
                                                                    Rahardi,
                                                                    S.Kom.,
                                                                    M.Eng<br>
                                                                    <a href><i
                                                                            class="fa-solid fa-envelope icon-table"></i>
                                                                        :majid@amikom.ac.id</a><br>
                                                                    <a href="https://zoom.us/j/98124161718"><i
                                                                            class="fa-solid fa-video icon-table zoom-link"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>
                                                                    SELASA |
                                                                    15:30-17:10<br>05.02.05
                                                                </td>
                                                                <td>ST139 - <b
                                                                        style="color: black;">PENGANTAR
                                                                        ILMU
                                                                        KOMPUTER</b>
                                                                    (Teori)
                                                                    <br><br>23S1IF03-Pengant(ST139)
                                                                </td>
                                                                <td
                                                                    style="text-align: center;"
                                                                    class="dosen-link">Subektiningsih,
                                                                    M.Kom<br>
                                                                    <a href><i
                                                                            class="fa-solid fa-envelope icon-table"></i>
                                                                        :subektiningsih@amikom.ac.id</a><br>
                                                                    <a href="https://zoom.us/j/96602136893#success"><i
                                                                            class="fa-solid fa-video icon-table zoom-link"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>4</td>
                                                                <td>
                                                                    RABU |
                                                                    07:00-08:40<br>05.02.07
                                                                </td>
                                                                <td>ST137 - <b
                                                                        style="color: black;">KALKULUS</b>
                                                                    (Teori)
                                                                    <br><br>23S1IF03-Kalkulu(ST137)</td>
                                                                <td
                                                                    style="text-align: center;"
                                                                    class="dosen-link">Dr.
                                                                    Kumara Ari
                                                                    Yuana, ST,
                                                                    MT<br>
                                                                    <a href><i
                                                                            class="fa-solid fa-envelope icon-table"></i>
                                                                        :kumara.a@amikom.ac.id</a><br>
                                                                    <a href="https://zoom.us/j/95352989034#success"><i
                                                                            class="fa-solid fa-video icon-table zoom-link"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>5</td>
                                                                <td>
                                                                    RABU |
                                                                    08:50-10:30<br>05.04.05
                                                                </td>
                                                                <td>ST138 - <b
                                                                        style="color: black;">FOTOGRAFI</b>
                                                                    (Teori)
                                                                    <br><br>23S1IF03-Fotogra(ST138)
                                                                </td>
                                                                <td
                                                                    style="text-align: center;"
                                                                    class="dosen-link">Subektiningsih,
                                                                    M.Kom<br>
                                                                    <a href><i
                                                                            class="fa-solid fa-envelope icon-table"></i>
                                                                        :subektiningsih@amikom.ac.id</a><br>
                                                                    <a href="https://zoom.us/j/96304589189#success"><i
                                                                            class="fa-solid fa-video icon-table zoom-link"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>6</td>
                                                                <td>
                                                                    KAMIS |
                                                                    08:50-10:30<br>05.04.06
                                                                </td>
                                                                <td>ST161 - <b
                                                                        style="color: black;">ENTREPRENEURSHIP</b>
                                                                    (Teori)
                                                                    <br><br>23S1IF03-Entrepr(ST161)
                                                                </td>
                                                                <td
                                                                    style="text-align: center;"
                                                                    class="dosen-link">Nuri
                                                                    Cahyono,
                                                                    M.Kom<br>
                                                                    <a href><i
                                                                            class="fa-solid fa-envelope icon-table"></i>
                                                                        :nuricahyono@amikom.ac.id</a><br>
                                                                    <a href="https://zoom.us/j/98749087211#success"><i
                                                                            class="fa-solid fa-video icon-table zoom-link"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>7</td>
                                                                <td>
                                                                    KAMIS |
                                                                    10:40-12:20<br>L
                                                                    2.4.5
                                                                </td>
                                                                <td>ST068 - <b
                                                                        style="color: black;">ALGORITMA
                                                                        DAN
                                                                        PEMROGRAMAN</b>
                                                                    (Praktikum)
                                                                    <br><br>23S1IF03-Algorit(ST068)
                                                                </td>
                                                                <td
                                                                    style="text-align: center;"
                                                                    class="dosen-link">Majid
                                                                    Rahardi,
                                                                    S.Kom.,
                                                                    M.Eng<br>
                                                                    <a href><i
                                                                            class="fa-solid fa-envelope icon-table"></i>
                                                                        :majid@amikom.ac.id</a><br>
                                                                    <a href="https://zoom.us/j/91762803837"><i
                                                                            class="fa-solid fa-video icon-table zoom-link"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>8</td>
                                                                <td>
                                                                    KAMIS |
                                                                    15:30-17:10<br>VR.02.06
                                                                </td>
                                                                <td>ST002 - <b
                                                                        style="color: black;">PENDIDIKAN
                                                                        AGAMA</b>
                                                                    (Teori)
                                                                    <br><br>23S1IF03-Pendidi(ST002)
                                                                </td>
                                                                <td
                                                                    style="text-align: center;"
                                                                    class="dosen-link">Mulyadi
                                                                    Erman, S.Ag,
                                                                    MA<br>
                                                                    <a href><i
                                                                            class="fa-solid fa-envelope icon-table"></i>
                                                                        :mulyadi.e@amikom.ac.id</a><br>
                                                                    <a href="https://zoom.us/j/96718252863"><i
                                                                            class="fa-solid fa-video icon-table zoom-link"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>9</td>
                                                                <td>
                                                                    JUMAT |
                                                                    08:50-10:30<br>05.02.02
                                                                </td>
                                                                <td>ST081 - <b
                                                                        style="color: black;">LOGIKA
                                                                        INFORMATIKA</b>
                                                                    (Teori)
                                                                    <br><br>23S1IF03-LogikaI(ST081)
                                                                </td>
                                                                <td
                                                                    style="text-align: center;"
                                                                    class="dosen-link">Muhammad
                                                                    Tofa
                                                                    Nurcholis,
                                                                    M.Kom<br>
                                                                    <a href><i
                                                                            class="fa-solid fa-envelope icon-table"></i>
                                                                        :tofa@amikom.ac.id</a><br>
                                                                    <a href="https://zoom.us/j/99800756862"><i
                                                                            class="fa-solid fa-video icon-table zoom-link"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>10</td>
                                                                <td>
                                                                    JUMAT |
                                                                    13:20-15:00<br>VR.02.02
                                                                </td>
                                                                <td>ST001 - <b
                                                                        style="color: black;">PENDIDIKAN
                                                                        PANCASILA</b>
                                                                    (Teori)
                                                                    <br><br>23S1IF03-Pendidi(ST001)
                                                                </td>
                                                                <td
                                                                    style="text-align: center;"
                                                                    class="dosen-link">Irton,
                                                                    S.E, M.Si<br>
                                                                    <a href><i
                                                                            class="fa-solid fa-envelope icon-table"></i>
                                                                        :irtonusman@amikom.ac.id</a><br>
                                                                    <a href="https://zoom.us/j/96369129267#success"><i
                                                                            class="fa-solid fa-video icon-table zoom-link"></i></a>

                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ============================================================== -->
                                        <!-- end JADWAL MATA PELAJARAN  -->
                                        <!-- ============================================================== -->
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="row">
                                        <!-- ============================================================== -->

                                        <!-- ============================================================== -->
                                        <!-- JADWAL UJIAN  -->
                                        <!-- ============================================================== -->
                                        <div class="card"
                                            style="font-size: 15px; width: 100% !important; display: flex; flex-direction: column; ">
                                            <h5 class="card-header"
                                                style="font-size: 19px; background-color: rgb(133, 132, 132); color: white; width: 100% !important; display: flex; flex-direction: column; ">Jadwal
                                                Ujian</h5>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table id="CustomerTable"
                                                        class="table table-bordered"
                                                        style="font-size: 15px; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                                                        <thead class="bg-light">
                                                            <tr class="border-0">
                                                                <th
                                                                    class="border-0">No</th>
                                                                <th
                                                                    class="border-0">TANGGAL UJIAN</th>
                                                                <th
                                                                    class="border-0">JENIS UJIAN</th>
                                                                <th
                                                                    class="border-0">JAM</th>
                                                                <th
                                                                    class="border-0">RUANG</th>
                                                                <th
                                                                    class="border-0">MATA KULIAH</th>
                                                                <th
                                                                    class="border-0">KURSI</th>
                                                                <th
                                                                    class="border-0">HADIR ?</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td
                                                                    class="dropdown">1</td>
                                                                <td>23-10-2023</td>
                                                                <td><i class="fa-solid fa-building" style="padding-right: 5px;"></i>Ujian di Kelas</td>
                                                                <td>08:30:00</td>
                                                                <td>05.02.04</td>
                                                                <td>ST081 - LOGIKA INFORMATIKA</td>
                                                                <td>18</td>
                                                                <td>Y</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>24-10-2023</td>
                                                                <td><i class="fa-solid fa-building" style="padding-right: 5px;"></i>Ujian di Kelas</td>
                                                                <td>08:30:00</td>
                                                                <td>05.02.04</td>
                                                                <td>ST137 - KALKULUS</td>
                                                                <td>25</td>
                                                                <td>Y</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>26-10-2023</td>
                                                                <td><i class="fa-solid fa-building" style="padding-right: 5px;"></i>Ujian di Kelas</td>
                                                                <td>08:30:00</td>
                                                                <td>05.02.04</td>
                                                                <td>ST139 - PENGANTAR ILMU KOMPUTER</td>
                                                                <td>31</td>
                                                                <td>Y</td>
                                                            </tr>
                                                            <tr>
                                                                <td>4</td>
                                                                <td>27-10-2023</td>
                                                                <td><i class="fa-solid fa-building" style="padding-right: 5px;"></i>Ujian di Kelas</td>
                                                                <td>08:30:00</td>
                                                                <td>05.02.04</td>
                                                                <td>ST002 - PENDIDIKAN AGAMA</td>
                                                                <td>1</td>
                                                                <td>Y</td>
                                                            </tr>
                                                            <tr>
                                                                <td>5</td>
                                                                <td>31-10-2023</td>
                                                                <td><i class="fa-solid fa-building" style="padding-right: 5px;"></i>Ujian di Kelas</td>
                                                                <td>08:30:00</td>
                                                                <td>05.02.04</td>
                                                                <td>ST008 - BAHASA INGGRIS I</td>
                                                                <td>25</td>
                                                                <td>Y</td>
                                                            </tr>
                                                            <tr>
                                                                <td>6</td>
                                                                <td>23-10-2023</td>
                                                                <td><a href=""><i class="fa-solid fa-earth-americas" style="padding-right: 5px; font-size: 12px;"></i>Ujian Online</a></td>
                                                                <td style="text-align: center;">-</td>
                                                                <td style="text-align: center;">-</td>
                                                                <td>ST068 - ALGORITMA DAN PEMROGRAMAN	</td>
                                                                <td>136</td>
                                                                <td>Y</td>
                                                            </tr>
                                                            <tr>
                                                                <td>7</td>
                                                                <td>23-10-2023</td>
                                                                <td><a href=""><i class="fa-solid fa-earth-americas" style="padding-right: 5px; font-size: 12px;"></i>Ujian Online</a></td>
                                                                <td style="text-align: center;">-</td>
                                                                <td style="text-align: center;">-</td>
                                                                <td>ST161 - ENTREPRENEURSHIP</td>
                                                                <td>159</td>
                                                                <td>Y</td>
                                                            </tr>
                                                            <tr>
                                                                <td>8</td>
                                                                <td>23-10-2023</td>
                                                                <td><a href=""><i class="fa-solid fa-earth-americas" style="padding-right: 5px; font-size: 12px;"></i>Ujian Online</a></td>
                                                                <td style="text-align: center;">-</td>
                                                                <td style="text-align: center;">-</td>
                                                                <td>ST138 - FOTOGRAFI</td>
                                                                <td>145</td>
                                                                <td>Y</td>
                                                            </tr>
                                                            <tr>
                                                                <td>9</td>
                                                                <td>23-10-2023</td>
                                                                <td><a href=""><i class="fa-solid fa-earth-americas" style="padding-right: 5px; font-size: 12px;"></i>Ujian Online</a></td>
                                                                <td style="text-align: center;">-</td>
                                                                <td style="text-align: center;">-</td>
                                                                <td>ST001 - PENDIDIKAN PANCASILA</td>
                                                                <td>135</td>
                                                                <td>Y</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ============================================================== -->
                                        <!-- END JADWAL UJIAN  -->
                                        <!-- ============================================================== -->
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
                                <div
                                    class="col-xl-12 col-lg-6 col-md-6 col-sm-12 col-12">
                                    Copyright © 2023 Concept. All rights
                                    reserved. Dashboard by <a
                                        href="https://colorlib.com/wp/">NANDANA ZADA ABIPROYA</a>.
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
