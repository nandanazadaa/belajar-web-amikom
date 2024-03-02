
            <!-- ============================================================== -->
            <!-- left sidebar -->
            <!-- ============================================================== -->
            <div class="nav-left-sidebar sidebar-light">
                <div class="menu-list">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                        <a href="javascript:void(0);" onclick="listMenu()"><button class="navbar-toggler" type="button"
                            data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button></a>
                        <div class="collapse navbar-collapse" id="myLinks">
                            <ul class="navbar-nav flex-column">
                                <li class="nav-item ">
                                    <a href="<?=base_url('User')?>"><img src="<?=base_url('assets/images/' . $profil['foto_profil'])?>" alt
                                            class="profile"></a>
                                    <h6
                                        style="font-size: 14px; text-align: center; color: #716E6E; padding-top: 12px;">NANDANA ZADA ABIPROYA</h6>
                                    <p
                                        style="font-size: 12px; text-align: center;"><?=$mahasiswa['nim'];?></p>
                                    <div class="foto d-flex">
                                        <a href="#"><button class="btn-profil">LIHAT
                                                PROFIL</button></a>
                                        <a href="<?=base_url('User/foto_profil')?>"><button
                                                class="btn-foto btn-primary">FOTO
                                                PROFIL</button></a>
                                    </div>
                                    <hr>
                                    <a class="nav-link" href="<?=base_url('User')?>"
                                        aria-controls="submenu-1"><i
                                            class="fa-solid fa-house"></i>Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?=base_url('User/panduan')?>"
                                        aria-expanded="false"
                                        data-target="#submenu-2"
                                        aria-controls="submenu-2"><i
                                            class="fa-solid fa-book-bookmark"></i>Panduan
                                        Aplikasi & Fitur</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?=base_url('User/email')?>"
                                        aria-expanded="false"
                                        data-target="#submenu-3"
                                        aria-controls="submenu-3"><i
                                            class="fa-solid fa-envelope"></i>E-Mail</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="<?=base_url('User/info_kuliah')?>"
                                        aria-expanded="false"
                                        data-target="#submenu-4"
                                        aria-controls="submenu-4"><i
                                            class="fa-solid fa-circle-info"></i>Info
                                        Kuliah</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"
                                        data-toggle="collapse"
                                        aria-expanded="false"
                                        data-target="#submenu-10"
                                        aria-controls="submenu-10"><i
                                            class="fa-solid fa-laptop"></i>Rencana
                                        dan Hasil Studi</a>
                                    <div id="submenu-10"
                                        class="collapse submenu" style>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="#"
                                                    data-toggle="collapse"
                                                    aria-expanded="false"
                                                    data-target="#submenu-11"
                                                    aria-controls="submenu-11">Rencana
                                                    Studi (KRS)</a>
                                                <div id="submenu-11"
                                                    class="collapse submenu"
                                                    style>
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link"
                                                                href="<?=base_url('User/info_krs')?>">Jadwal
                                                                Pengambilan KRS</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link"
                                                                href="<?=base_url('User/krs_info_pengambilan')?>">Pengambilan
                                                                KRS</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link"
                                                                href="<?php echo base_url('User/laporan_pdf'); ?>">Cetak
                                                                KRS</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Kartu
                                                    Hasil Studi</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Transkip
                                                    Nilai</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"
                                        data-toggle="collapse"
                                        aria-expanded="false"
                                        data-target="#submenu-6"
                                        aria-controls="submenu-6"><i
                                            class="fa-solid fa-book-open"></i>
                                        Perkuliahan </a>
                                    <div id="submenu-6" class="collapse submenu"
                                        style>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link"
                                                    href="<?=base_url('User/materiNilai')?>">Materi
                                                    dan Nilai</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link"
                                                    href="pages/blank-page-header.html">Pindah
                                                    Kelas</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"
                                        data-toggle="collapse"
                                        aria-expanded="false"
                                        data-target="#submenu-7"
                                        aria-controls="submenu-7"><i
                                            class="fa-solid fa-gavel"></i>Ujian</a>
                                    <div id="submenu-7" class="collapse submenu"
                                        style>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link"
                                                    href="pages/inbox.html">Ujian
                                                    Susulan</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link"
                                                    href="pages/email-details.html">Ujian
                                                    Remidi</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link"
                                                    href="pages/email-compose.html">Ujian
                                                    Tengah Semester</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link"
                                                    href="pages/message-chat.html">Ujian
                                                    Akhir Semester</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link"
                                                    href="pages/message-chat.html">Pendadaran</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"
                                        aria-expanded="false"
                                        data-target="#submenu-8"
                                        aria-controls="submenu-8"><i
                                            class="fa-solid fa-bars-progress"></i>Bimbingan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"
                                        data-toggle="collapse"
                                        aria-expanded="false"
                                        data-target="#submenu-8"
                                        aria-controls="submenu-8"><i
                                            class="fa-solid fa-list"></i>Yudisium</a>
                                    <div id="submenu-8" class="collapse submenu"
                                        style>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link"
                                                    href="pages/icon-fontawesome.html">Pendadaran</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"
                                        data-toggle="collapse"
                                        aria-expanded="false"
                                        data-target="#submenu-9"
                                        aria-controls="submenu-9"><i
                                            class="fa-solid fa-graduation-cap"></i>Wisuda</a>
                                    <div id="submenu-9" class="collapse submenu"
                                        style>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link"
                                                    href="pages/map-google.html">Pendaftaran</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"
                                        data-toggle="collapse"
                                        aria-expanded="false"
                                        data-target="#submenu-9"
                                        aria-controls="submenu-9"><i
                                            class="fa-solid fa-book"></i>Perpustakaan</a>
                                    <div id="submenu-9" class="collapse submenu"
                                        style>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link"
                                                    href="pages/map-google.html">Pinjaman
                                                    Aktif</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link"
                                                    href="pages/map-vector.html">Riwayat
                                                    Peminjaman</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"
                                        data-toggle="collapse"
                                        aria-expanded="false"
                                        data-target="#submenu-9"
                                        aria-controls="submenu-9"><i
                                            class="fa-solid fa-money-bill"></i>Pembayaran</a>
                                    <div id="submenu-9" class="collapse submenu"
                                        style>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link"
                                                    href="pages/map-google.html">Info
                                                    Biaya Kuliah</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end left sidebar -->
            <!-- ============================================================== -->