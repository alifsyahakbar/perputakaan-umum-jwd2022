<?php
include 'koneksi.php';
$tgl = date('Y-m-d');
session_start();
if (isset($_SESSION['sesi'])) {
?>

    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->

        <!-- css eksternal -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
        <title>Perpustakaan Umum | AlifSyahAkbar</title>

    </head>


    <body>
        <div class="container-fluid">
            <div class="row">
                <!-- ini awal header  -->
                <div class="col-md-12 header py-2 justify-content-center items-center text-white">
                    <div class="d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" height="100" width="100" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64">
                            <defs>
                                <linearGradient id="a" x1="15" x2="15" y1="51" y2="19" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#54a5ff" />
                                    <stop offset="1" stop-color="#8ad3fe" />
                                </linearGradient>
                                <linearGradient id="b" x1="43" x2="43" y1="51" y2="16" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fe9661" />
                                    <stop offset="1" stop-color="#ffb369" />
                                </linearGradient>
                                <linearGradient id="c" x1="27.5" x2="27.5" y2="9" xlink:href="#a" />
                            </defs>
                            <rect width="50" height="6" x="7" y="51" fill="#9db8d3" rx="2" ry="2" />
                            <path fill="url(#a)" d="M12,19h6a2,2,0,0,1,2,2V51a0,0,0,0,1,0,0H10a0,0,0,0,1,0,0V21A2,2,0,0,1,12,19Z" />
                            <path fill="#8ad3fe" d="M32,22h4a2,2,0,0,1,2,2V51a0,0,0,0,1,0,0H30a0,0,0,0,1,0,0V24A2,2,0,0,1,32,22Z" />
                            <path fill="#ffb369" d="M50,22h2a2,2,0,0,1,2,2V51a0,0,0,0,1,0,0H48a0,0,0,0,1,0,0V24A2,2,0,0,1,50,22Z" />
                            <path fill="url(#b)" d="M40,16h6a2,2,0,0,1,2,2V51a0,0,0,0,1,0,0H38a0,0,0,0,1,0,0V18A2,2,0,0,1,40,16Z" />
                            <path fill="#eb7f58" d="M22,7h1a2,2,0,0,1,2,2V51a0,0,0,0,1,0,0H20a0,0,0,0,1,0,0V9A2,2,0,0,1,22,7Z" />
                            <path fill="url(#c)" d="M27,9h1a2,2,0,0,1,2,2V51a0,0,0,0,1,0,0H25a0,0,0,0,1,0,0V11A2,2,0,0,1,27,9Z" />
                            <circle cx="15" cy="37" r="3" fill="#d7e9f7" />
                            <path fill="#8ad3fe" d="M17 44H13a1 1 0 0 1 0-2h4a1 1 0 0 1 0 2zM17 48H13a1 1 0 0 1 0-2h4a1 1 0 0 1 0 2z" />
                            <rect width="5" height="6" x="20" y="38" fill="#ffb369" />
                            <rect width="4" height="22" x="41" y="23" fill="#eb7f58" rx="2" ry="2" />
                            <path fill="#d7e9f7" d="M34,47a1,1,0,0,1-1-1V26a1,1,0,0,1,2,0V46A1,1,0,0,1,34,47Z" />
                        </svg>
                    </div>
                    <div class="d-flex-wrap align-self-center text-center">
                        <h1>PERPUSTAKAAN UMUM</h1>
                        <span class="">JL. BOGOR RAYA No. 20 Telp. (+62) 857 9231 4401</span>
                    </div>
                </div>
                <!-- ini akhir dari header -->

                <!-- ini awal nav -->
                <div class="nav justify-content-between p-2">
                    <div class="d-sm-block d-md-none">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent15" aria-controls="navbarSupportedContent15" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    </div>
                    <div class="align-self-center">
                        <h5 class="container-fluid text-white">Hai! <?php echo $_SESSION['sesi']; ?></h5>
                    </div>
                    <div class=" align-self-center  mx-3">
                        <a href="" class=" text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" height="30" width="30" id="Layer_1" x="0" y="0" version="1.1" viewBox="0 0 500 500" xml:space="preserve">
                                <switch>
                                    <g>
                                        <linearGradient id="XMLID_2_" x1="232.701" x2="254.411" y1="276.847" y2="549.872" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#FFCA9D" />
                                            <stop offset=".854" stop-color="#FFD9A9" />
                                        </linearGradient>
                                        <path id="XMLID_802_" fill="url(#XMLID_2_)" d="m455.3 504.2-5.1-113.6c-4.8-28.6-24.7-51.1-50-56.7l-91.4-16.1c-8.1-1.5-14.4-11.3-14.5-21.6l-2-47.4h-87.9l-2.1 49.4c-.4 9.7-6.5 17.7-14.6 19.2L97.4 334c-25.3 5.6-45.2 28.1-50 56.7l-5.1 113.6c51.6-.1 361.1-.1 413-.1z" />
                                        <linearGradient id="XMLID_3_" x1="249" x2="249" y1="354.333" y2="474.409" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#FFF" />
                                            <stop offset="1" stop-color="#E6FFFF" />
                                        </linearGradient>
                                        <path id="XMLID_801_" fill="url(#XMLID_3_)" d="m308.8 504.2 20.4-183.5-17.7-3.3c-8.1-1.5-14.2-9.5-14.6-19.2l-48.1 55.5-48.1-55.5c-.4 9.7-6.5 17.7-14.6 19.2l-17.3 2.8 27 184.1h113z" />
                                        <g id="XMLID_797_">
                                            <linearGradient id="XMLID_4_" x1="370.28" x2="370.28" y1="315" y2="496.496" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#1A1A2B" />
                                                <stop offset="1" stop-color="#2E1B45" />
                                            </linearGradient>
                                            <path id="XMLID_799_" fill="url(#XMLID_4_)" d="M460.6 400.5c0-39.6-19.2-60.4-51-68.3l-79-10.5-53.1 182.6H463l-2.4-103.8z" />
                                            <linearGradient id="XMLID_5_" x1="129.615" x2="129.615" y1="315" y2="496.496" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#1A1A2B" />
                                                <stop offset="1" stop-color="#2E1B45" />
                                            </linearGradient>
                                            <path id="XMLID_798_" fill="url(#XMLID_5_)" d="M90.8 332.2c-31.8 7.9-51 28.7-51 68.3L37 504.2h185.2l-51.4-183.6-80 11.6z" />
                                        </g>
                                        <linearGradient id="XMLID_6_" x1="307.766" x2="307.099" y1="459.313" y2="303.969" gradientUnits="userSpaceOnUse">
                                            <stop offset=".038" stop-color="#001" />
                                            <stop offset="1" stop-color="#2E1B45" />
                                        </linearGradient>
                                        <path id="XMLID_796_" fill="url(#XMLID_6_)" d="m297.8 506.8 33.7-58.2c4.2-6.4 8-10.6 1-20.3l-23-34h24.9c7.2 0 8.2-1.6 8.2-11.6l-1.4-55.8s-.4-2-.9-2.7c-.5-.6-2-1.3-2-1.3l-23-5.5-42.4 189.4h24.9z" />
                                        <linearGradient id="XMLID_7_" x1="248.797" x2="248.797" y1="373.667" y2="489.684" gradientUnits="userSpaceOnUse">
                                            <stop offset=".549" stop-color="#FD0036" />
                                            <stop offset=".995" stop-color="#FF005F" />
                                        </linearGradient>
                                        <path id="XMLID_795_" fill="url(#XMLID_7_)" d="m241.1 423-3.5 81.2h22.6l-3.5-81.6c-.2-3.3.4-8.5 1.2-10.7l8.6-20.7-17.5-36.4v-.8l-.2.4-.2-.4v.9L231 391.2l8.7 21.2c1.3 3 1.5 6.7 1.4 10.6z" />
                                        <linearGradient id="XMLID_8_" x1="190.27" x2="189.603" y1="469.359" y2="314.054" gradientUnits="userSpaceOnUse">
                                            <stop offset=".038" stop-color="#001" />
                                            <stop offset="1" stop-color="#2E1B45" />
                                        </linearGradient>
                                        <path id="XMLID_794_" fill="url(#XMLID_8_)" d="M162.9 393.1h24.9l-23 34c-7 9.7-3.3 13.9.9 20.3l34.5 58.2h25.3l-43.7-187.8-21.9 3.9s-2.6.2-3.3 2.3c-.2.7-.5 2.9-.5 2.9l-1.5 54.7c.2 9.9 1.1 11.5 8.3 11.5z" />
                                        <path id="XMLID_793_" fill="#fff" d="M302.7 290.7c-2.6-6.1-4.3-4.7-8 .3l-45.9 62.7-45.9-62.7c-3.7-5.1-5.4-6.4-8-.3l-13.4 25.7 41.4 82.9c2.9 5.8 5.1 5.4 7.7-.3l18.1-44.6 18.1 44.6c2.6 5.8 4.9 6.1 7.7.3l41.4-82.9-13.2-25.7z" />
                                        <g id="XMLID_761_">
                                            <g id="XMLID_780_">
                                                <linearGradient id="XMLID_9_" x1="349.625" x2="326.125" y1="170.211" y2="170.211" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-color="#FEC797" />
                                                    <stop offset="1" stop-color="#FFD9A9" />
                                                </linearGradient>
                                                <path id="XMLID_792_" fill="url(#XMLID_9_)" d="m329.9 134 6.2.4c9.3 2.6 19.4 11.4 17.1 25.6-2.1 12.9-3.2 14-5.8 30-3.7 22.7-22.3 15.3-22.3 15.3l4.8-71.3z" />
                                                <linearGradient id="XMLID_10_" x1="146.167" x2="173.667" y1="172.711" y2="172.711" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-color="#FEC797" />
                                                    <stop offset="1" stop-color="#FFD9A9" />
                                                </linearGradient>
                                                <path id="XMLID_782_" fill="url(#XMLID_10_)" d="m168.7 136.5-6.2.4c-9.3 2.6-19.4 11.4-17.1 25.6 2.2 12.9 3.2 14 5.8 30 3.7 22.7 22.3 15.3 22.3 15.3l-4.8-71.3z" />
                                            </g>
                                            <linearGradient id="XMLID_11_" x1="249.223" x2="249.889" y1="95.822" y2="306.488" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#FEC797" />
                                                <stop offset="1" stop-color="#FFD9A9" />
                                            </linearGradient>
                                            <path id="XMLID_763_" fill="url(#XMLID_11_)" d="m248.7 57.3-87.2.4 4.6 146.2c0 10.9.8 19.9 11.9 35.3l31 35.6c10.3 11.2 18.5 12.2 29.7 12.2h20.2c11.2 0 18.4-3.2 26.1-11 0 0 20.3-18.4 33.8-34.5 8.2-9.8 10.3-19.8 10.3-30.7l7.4-153.1-87.8-.4z" />
                                            <linearGradient id="XMLID_12_" x1="247.798" x2="247.798" y1="-3.667" y2="72.345" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#F4D969" />
                                                <stop offset=".863" stop-color="#F4BC55" />
                                            </linearGradient>
                                            <path id="XMLID_762_" fill="url(#XMLID_12_)" d="M163.4 140.8c-2.4-4.1-10.6-36.7-11-57.4-.5-27.7-1.8-83.4 94-83.4h8.7c53 0 93.5 31.9 87.5 86.5-3.1 27.6-5.6 40-5.8 40.9-1.9 11.6-4.2 11.6-4 11.5v-38.8c0-13.8-1.3-41.7-28.6-35.8l-47.5 17.1s16.3-11.6 7.9-11.2c-6.2.3-51.6 16.2-51.6 16.2s20.6-16.2 15.6-16.5c-6.1-.4-44.6 19.2-44.6 19.2l9.3-25.2c-25.7-4.1-29.5 19.5-29.5 40.2l.2 31.6c0 3.6.3 6.5-.6 5.1z" />
                                        </g>
                                    </g>
                                </switch>
                            </svg>
                            Admin |
                        </a>
                        <a href="logout.php" onclick="return confirm('anda yakin ingin logout?')" class="text-white">Logout</a>

                    </div>
                </div>
                <!-- ini akhir nav -->

                <!-- ini awal sidebar -->
                <div class="col-md-3 sidebar">
                    <div class="container">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active p-2">
                                <a class="nav-link text-white" href="index.php?p=beranda">Beranda</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class=" mr-auto" style="background-color: #6E85B7; border-radius: 3px;">
                        <h6 class="nav-link text-white">Entry Data dan Transaksi</h6>
                    </div>
                    <div class="container">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item pt-1 mx-2">
                                <a class="nav-link text-white" href="index.php?p=anggota">Data Anggota</span></a>
                            </li>
                            <li class="nav-item pt-2 mx-2">
                                <a class="nav-link text-white" href="index.php?p=buku">Data Buku</a>
                            </li>
                            <li class="nav-item p-2 mb-4">
                                <a class="nav-link text-white" href="index.php?p=transaksi-peminjaman">Transaksi Peminjaman</a>
                            </li>
                        </ul>
                    </div>
                    <div class=" mr-auto" style="background-color: #6E85B7; border-radius: 3px;">
                        <h6 class="nav-link text-white" href="#">Laporan</h6>
                    </div>
                    <div class="container">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item pt-1 mx-2">
                                <a class="nav-link text-white" href="#">Laporan Data Anggota</span></a>
                            </li>
                            <li class="nav-item pt-2 mx-2">
                                <a class="nav-link text-white" href="#">Laporan Data Buku</a>
                            </li>
                        </ul>
                    </div>
                    <br>
                    <div class="container align-self-center">
                        <ul class="navbar-nav mr-auto ">
                            <li class="nav-item pt-2 mx-2 ">
                                <a class="nav-link text-white" href="logout.php" onclick="return confirm('anda yakin ingin logout?')">Logout
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-power" viewBox="0 0 16 16">
                                        <path d="M7.5 1v7h1V1h-1z" />
                                        <path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <br>
                </div>
                <!-- ini akhir sidebar -->

                <!-- ini awal main/konten -->
                <div class="col-md-9 main my-4">
                    <div class="container">
                        <?php
                        $pages_dir = 'pages';
                        if (!empty($_GET['p'])) {
                            $pages = scandir($pages_dir, 0);
                            unset($pages[0], $pages[1]);
                            $p = $_GET['p'];
                            if (in_array($p . '.php', $pages)) {
                                include($pages_dir . '/' . $p . '.php');
                            } else {
                                echo 'Halaman Tidak Ditemukan';
                            }
                        } else {
                            include($pages_dir . '/beranda.php');
                        }
                        ?>
                    </div>
                </div>
                <!-- ini akhir main/konten -->

                <div class="col-md-12 footer fixed-bottom text-white">
                    <small>&copy;2022 AlifSyahAkbar | VSGA2022-JWDB-POLJAM.</small>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->


        <!-- eksternal file js -->
        <script src="./js/bootstrap.js"></script>
    </body>

    </html>

<?php
} else {
    echo "<script>
		alert('Anda Harus Login Dahulu!');
	</script>";
    header('location:login.php');
}
?>