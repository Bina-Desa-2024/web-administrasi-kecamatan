<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan Usaha</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif, sans-serif;
            margin: 0;
            padding: 0;
        }
        .header {
            display: flex;
            align-items: center;
            padding: 20px 10px;
        }
        .header img {
            width: 85px;
            height: 90px;
            margin-left: 10px;
        }
        .header div {
            text-align: center;
            width: 100%;
        }
        h1,h2, h3, h5, h6, p {
            margin: 0;
        }
        .kablogo {
            font-size: 24px;
            font-weight: bold;
        }
        .keclogo {
            font-size: 27px;
            font-weight: bold;
        }
        .kedlogo {
            font-size: 21px;
            font-weight: bold;
        }
        .alamatlogo, .kodeposlogo {
            font-size: 16px;
        }
        .garis1 {
            border-top: 3px solid black;
            height: 2px;
            border-bottom: 5px solid black;
            margin: 0 10px;
            border-left: none;
            border-right: none;
        }
        .content {
            padding: 20px;
        }
        #tls {
            text-align: right;
        }
        .alamat-tujuan {
            margin-left: 50%;
        }
        #tempat-tgl table {
            margin-left: 40px;
        }
        #pembuka, #penutup {
            text-indent: 40px;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .signature {
            text-align: right;
            margin-top: 50px;
            padding-right: 20px;
        }

        /* Styling for alamat and kode pos */
        .alamat-kodepos {
            overflow: hidden;
            margin-top: 5px;
        }

        .kodeposlogo, .alamatlogo {
            font-size: 16px;
            margin: 0;
        }
        .kodeposlogo {
            float: left;
        }
        .alamatlogo {
            float: right;
        }

        /* Add styles for Surat Keterangan Usaha */
        .surat-keterangan {
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
            text-decoration: underline;
        }

        .nomor-surat {
            text-align: center;
            margin-top: 0px;
            font-size: 16px;
        }

        /* Style for label-value pairs */
        .pair-container {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 0px;
        }

        .label {
            width: 200px;
        }

        .colon {
            width: 10px; /* space for the colon */
            text-align: center;
        }

        .value {
            flex: 1;
        }

        .pair-container span {
            margin-bottom: 0px;
        }

        /* Styling for List Items (li) */
        ol {
            list-style-type: decimal;
            padding-left: 20px;
            margin-top: 0px;
        }

        li {
            display: flex;
            margin-bottom: 0px;
        }

        li .label {
            width: 200px;
        }

        li .colon {
            width: 10px;
            text-align: center;
        }

        li .value {
            flex: 1;
        }
    </style>
</head>
<body>
    <header class="header">
        <img src="https://getasanbersinar.files.wordpress.com/2016/02/logo-kabupaten-semarang-jawa-tengah.png" alt="Logo Kabupaten Semarang">
        <div>
            <p class="kablogo">PEMERINTAH KABUPATEN BENGKAYANG</p>
            <p class="keclogo">DESA RUKMA JAYA</p>
            <p class="kedlogo">KECAMATAN SUNGAI RAYA KEPULAUAN</p>
            <div class="alamat-kodepos">
                <p class="kodeposlogo">Kode Pos : 79271</p>
                <p class="alamatlogo">Alamat : Jalan Raya Desa Rukma Jaya</p>
            </div>
        </div>
    </header>
    
    <hr class="garis1">

    <!-- Surat Keterangan Usaha Title and Number -->
    <div class="surat-keterangan">
        SURAT KETERANGAN USAHA
    </div>

    <div class="nomor-surat">
        Nomor : 581/_____/Ekon.
    </div>

    <div class="content">
        <p>Yang bertanda tangan di bawah ini:</p>
        <br>
        <div class="pair-container">
            <span class="label">Nama Lengkap</span>
            <span class="colon">:</span>
            <span class="value"><strong>ALHADI</strong></span>
        </div>
        <div class="pair-container">
            <span class="label">Jabatan</span>
            <span class="colon">:</span>
            <span class="value"><strong>Kepala Desa Rukma Jaya, Kecamatan Sungai Raya Kepulauan, Kab. Bengkayang</strong></span>
        </div>
        <br>
        <p>Dengan ini memberikan Surat Keterangan Usaha kepada:</p>
        <div class="pair-container">
            <span class="label">Nama</span>
            <span class="colon">:</span>
            <span class="value"><strong>{{ $suketusaha->nama }}</strong></span>
        </div>
        <div class="pair-container">
            <span class="label">Tempat Tgl/Lahir</span>
            <span class="colon">:</span>
            <span class="value"><strong>{{ $suketusaha->tempat }}/{{ $suketusaha->tgl_lahir }}</strong></span>
        </div>
        <div class="pair-container">
            <span class="label">Pekerjaan</span>
            <span class="colon">:</span>
            <span class="value"><strong>{{ $suketusaha->pekerjaan }}</strong></span>
        </div>
        <div class="pair-container">
            <span class="label">Alamat</span>
            <span class="colon">:</span>
            <span class="value"><strong>{{ $suketusaha->dusun }}</strong></span>
        </div>
        <div class="pair-container">
            <span class="label">Desa/Kel</span>
            <span class="colon">:</span>
            <span class="value"><strong>{{ $suketusaha->desa }}</strong></span>
        </div>
        <div class="pair-container">
            <span class="label">Kecamatan</span>
            <span class="colon">:</span>
            <span class="value"><strong>{{ $suketusaha->kecamatan }}</strong></span>
        </div>
        <div class="pair-container">
            <span class="label">Kabupaten/Kota</span>
            <span class="colon">:</span>
            <span class="value"><strong>{{ $suketusaha->kota }}</strong></span>
        </div>
        <br>
        <p>Berdasarkan Surat Pernyataan Izin Tetangga tanggal …….. Bulan Desember Tahun 2022 bahwa dengan ini yang bersangkutan memang benar memiliki usaha dengan keterangan:</p>
        <ol>
            <li>
                <span class="label">1. Nama Usaha</span>
                <span class="colon">:</span>
                <span class="value"><strong>{{ $suketusaha->nama_usaha }}</strong></span>
            </li>
            <li>
                <span class="label">2. Alamat Usaha</span>
                <span class="colon">:</span>
                <span class="value"><strong>{{ $suketusaha->alamat_usaha }}</strong></span>
            </li>
            <li>
                <span class="label">3. Jenis Tempat Usaha</span>
                <span class="colon">:</span>
                <span class="value"><strong>{{ $suketusaha->jenis_tempat }}</strong></span>
            </li>
            <li>
                <span class="label">4. Status Tempat Usaha</span>
                <span class="colon">:</span>
                <span class="value"><strong>{{ $suketusaha->status_tempat }}</strong></span>
            </li>
            <li>
                <span class="label">5. Bidang Usaha</span>
                <span class="colon">:</span>
                <span class="value"><strong>{{ $suketusaha->bidang_usaha }}</strong></span>
            </li>
            <li>
                <span class="label">6. Bentuk Usaha</span>
                <span class="colon">:</span>
                <span class="value"><strong>{{ $suketusaha->bentuk_usaha }}</strong></span>
            </li>
            <li>
                <span class="label">7. Modal Usaha</span>
                <span class="colon">:</span>
                <span class="value"><strong>{{ $suketusaha->modal_usaha }}</strong></span>
            </li>
            <li>
                <span class="label">8. Jumlah Tenaga Kerja</span>
                <span class="colon">:</span>
                <span class="value"><strong>{{ $suketusaha->tenaga_kerja }}</strong></span>
            </li>
            <li>
                <span class="label">9. Mulai Usaha Sejak</span>
                <span class="colon">:</span>
                <span class="value"><strong>{{ $suketusaha->mulai_usaha }}</strong></span>
            </li>
        </ol>

        <p>Demikian Surat Keterangan ini diberikan dengan sebenarnya, untuk dipergunakan sebagaimana mestinya.</p>
    </div>

    <div class="signature">
        <p>{{ $suketusaha->desa }}</p>
        <p>{{ $suketusaha->tanggal }}</p>
        <p>Mengetahui,</p>
        <p>Kepala Desa</p>
        <br>
        <br>
        <p><strong>ALHADI</strong></p>
    </div>

    <script>
        window.print();
    </script>
</body>
</html>

