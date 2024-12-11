<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Roboto", sans-serif;
        }

        header {
            position: fixed;
            background: #22242A;
            padding: 20px;
            width: 100%;
            height: 30px;
        }

        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        tbody {
            font-size: 17px;
            font-weight: 300;
            color: #e8e8e8;
        }

        .tabelku {
            width: 800px;
            margin: auto;
            text-align: center;
        }

        .tabelb {
            width: auto;
            margin: auto;
        }

        .left_area span {
            color: #9f2ebb;
        }

        .left_area h3 {
            color: #fff;
            margin: 0;
            text-transform: uppercase;
            font-size: 22px;
            font-weight: 900;
        }

        .right_area img {
            padding: 5px;
            float: right;
            margin-top: -47px;
            margin-right: 40px;
        }

        .sidebar {
            background: #2f323a;
            margin-top: 70px;
            padding-top: 30px;
            position: fixed;
            left: 0;
            width: 250px;
            height: 100%;
        }

        .sidebar .profile_image {
            width: 100px;
            height: 100px;
            border-radius: 100px;
            margin-bottom: 10px;
        }

        .sidebar h4 {
            color: #ccc;
            margin-top: 0;
            margin-bottom: 20px;
        }

        .sidebar a {
            color: #fff;
            display: block;
            width: 100%;
            line-height: 60px;
            text-decoration: none;
            padding-left: 40px;
            box-sizing: border-box;
            transition: 0.5s;
            transition-property: background;
        }

        .sidebar a:hover {
            background: #9f2ebb;
        }

        .sidebar i {
            padding-right: 10px;
        }

        .content {
            margin-left: 250px;
            padding-top: 70px;
            background: url(bcg.jpg);
            background-position: center;
            background-size: cover;
            height: 125vh;
        }

        .box {
            width: 740px;
            margin: 0 auto;
            margin-top: 30px;
            box-shadow: 0 0.30rem 0.75rem rgba(5, 5, 5, 5);
            transition: all .3s;
            background-color: #591869;
            border: solid 5px #ea92ff;
            border-top-right-radius: 80px;
            border-bottom-left-radius: 80px;
        }

        .box:hover {
            background-color: #1f8a45;
            border: solid 5px #4fd47e;
            border-top-left-radius: 80px;
            border-bottom-right-radius: 80px;
            border-top-right-radius: 0px;
            border-bottom-left-radius: 0px;
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #22242A;
            color: #e8e8e8;
            text-align: center;
        }
    </style>
</head>

<body>
    <header>
        <div class="left_area">
            <h3>User <span>User</span></h3>
        </div>
        <div class="right_area">
            <img src="images/fatih.jpg" width="50px" height="50px">
        </div>
    </header>
    <div class="sidebar">
        <center>
            <img src="images/fatih.jpg" class="profile_image" alt="asyrof">
            <h4>Muhammad Faatihh</h4>
        </center>
        <a href="#"><i class="fas fa-desktop"></i><span>Biodataku</span></a>
        <a href="#"><i class="fas fa-table"></i><span>Riwayat Pendidikan</span></a>
        <a href="#"><i class="fas fa-list-ul"></i><span>Daftar Favorit</span></a>
        <a href="formdaftar.html"><i class="fas fa-pencil-alt"></i><span>Formulirku</span></a>
        <a href="index.php"><i class="fas fa-sign-out-alt"></i><span>Keluar</span></a>
    </div>

    <div class="content">
        <div class="box">
            <tbody>
                <table border="0" width="100%"
                    style="padding-left: 55px; padding-right: 0px; padding-top: 15px; padding-bottom: 15px;">
                    <tr>
                        <th rowspan="8">
                            <img src="images/fatihpropil.jpg" alt="fotoku" width="150px" height="160px">
                        </th>
                    </tr>
                    <tr>
                        <td width="28%">Nama</td>
                        <td width="2%">:</td>
                        <td style="font-weight: bold">Muhammad Fatih M.A</td>
                    </tr>
                    <tr>
                        <td>NIM</td>
                        <td>:</td>
                        <td>1202173212</td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>Laki-Laki</td>
                    </tr>
                    <tr>
                        <td>Tempat, Tanggal Lahir</td>
                        <td>:</td>
                        <td>Garut, 09 November 2007</td>
                    </tr>
                    <tr>
                        <td>Hobi</td>
                        <td>:</td>
                        <td>Olahraga</td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td>:</td>
                        <td>Rekayasa Perangkat Lunak</td>
                    </tr>
                    <tr>
                        <td>Sekolah</td>
                        <td>:</td>
                        <td>SMK AL - MADANI GARUT</td>
                    </tr>
                </table>
            </tbody>
        </div>
        <br />
        <table class="tabelku" border="1" cellspacing="1" cellpadding="5">
            <tr>
                <th style="background-color: #22242A;" rowspan="2">NO</th>
                <th style="background-color: #22242A;" colspan="3">Riwayat Pendidikan</th>
            </tr>
            <tr>
                <th style="background-color: #2f323a;">Jenjang</th>
                <th style="background-color: #2f323a;">Nama Sekolah</th>
                <th style="background-color: #2f323a;">Tahun Angkatan</th>
            </tr>
            <tr>
                <th style="background-color: #22242A;">1</th>
                <td style="background-color: #591869;">Taman Kanak-Kanak</td>
                <td style="background-color: #591869;">TK Perwari</td>
                <td style="background-color: #591869;">20XX - 20XX</td>
            </tr>
            <tr>
                <th style="background-color: #22242A;">2</th>
                <td style="background-color: #591869;">Sekolah Dasar</td>
                <td style="background-color: #591869;">SD NEGRI SIRNAJAYA 3</td>
                <td style="background-color: #591869;">20XX - 20XX</td>
            </tr>
            <tr>
                <th style="background-color: #22242A;">3</th>
                <td style="background-color: #591869;">Sekolah Menengah Pertama</td>
                <td style="background-color: #591869;">SMP IT ARAFAH CENDEKIA</td>
                <td style="background-color: #591869;">20XX - 20XX</td>
            </tr>
            <tr>
                <th style="background-color: #22242A;">4</th>
                <td style="background-color: #591869;">Sekolah Menengah Atas</td>
                <td style="background-color: #591869;">SMK AL - MADANI GARUT</td>
                <td style="background-color: #591869;">20XX - 20XX</td>
            </tr>
        </table>
        <br />
        <table class="tabelb" border="1" cellspacing="1" cellpadding="5">
            <th style="background-color: #22242A; text-align: center" colspan="2">Daftar Favorit</th>
            <tr>
                <th style="background-color: #591869; padding-right: 30px; text-align: left">
                    <ul>
                        <li> Makanan Favorit :
                            <ol>
                                <li>Prekedel</li>
                                <li>Makanan</li>
                                <li>Makanan</li>
                                <li>Daharen</li>
                                <li>Tuangen</li>
                            </ol>
                        </li>
                    </ul>
                <th style="background-color: #591869; padding-right: 30px; text-align: left">
                    <ul>
                        <li> Minuman Favorit :
                            <ol>
                                <li>Air Mineral</li>
                                <li>Air mineral</li>
                                <li>Air Mineral</li>
                                <li>Air mineral</li>
                                <li>Air Mineral</li>
                            </ol>
                        </li>
                    </ul>
                </th>
            </tr>
        </table>
    </div>
    <div class="footer">
        <h3>@Faatihh</h3>
    </div>
</body>

</html>