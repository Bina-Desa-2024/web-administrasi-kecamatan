<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan Usaha</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20mm;
            line-height: 1.6;
        }
        .container {
            border: 1px solid #000;
            padding: 20px;
        }
        .header {
            text-align: center;
        }
        .header h1 {
            font-size: 20px;
            text-decoration: underline;
            margin-bottom: 0;
        }
        .header p {
            margin: 0;
        }
        .content {
            margin-top: 20px;
        }
        .content p {
            margin: 5px 0;
        }
        .signature {
            text-align: right;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <p>PEMERINTAH KABUPATEN BENGKAYANG</p>
            <p>DESA RUKMA JAYA</p>
            <p>KECAMATAN SUNGAI RAYA KEPULAUAN</p>
            <p>Alamat: Jalan Raya Desa Rukma Jaya &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Kode Pos: 79271</p>
            <h1>SURAT KETERANGAN USAHA</h1>
            <p>Nomor: 581/ &emsp;&emsp;&emsp; / Ekon.</p>
        </div>
        <div class="content">
            <p>Yang bertanda tangan di bawah ini:</p>
            <p>Nama Lengkap: <strong>ALHADI</strong></p>
            <p>Jabatan: <strong>Kepala Desa Rukma Jaya, Kecamatan Sungai Raya Kepulauan, Kab. Bengkayang</strong></p>

            <p>Dengan ini memberikan Surat Keterangan Usaha kepada:</p>
            <p>Nama: <strong>{{ $suketusaha->nama }}</strong></p>
            <p>Tempat Tgl/Lahir: <strong>{{ $suketusaha->tempat }}/{{ $suketusaha->tgl_lahir }}</strong></p>
            <p>Pekerjaan: <strong>{{ $suketusaha->pekerjaan }}</strong></p>
            <p>Alamat: <strong>{{ $suketusaha->dusun }}</strong></p>
            <p>Desa/Kel: <strong>{{ $suketusaha->desa }}</strong></p>
            <p>Kecamatan: <strong>{{ $suketusaha->kecamatan }}</strong></p>
            <p>Kabupaten/Kota: <strong>{{ $suketusaha->kota }}</strong></p>

            <p>Berdasarkan Surat Pernyataan Izin Tetangga tanggal …….. Bulan Desember Tahun 2022 bahwa dengan ini yang bersangkutan memang benar memiliki usaha dengan keterangan:</p>
            <ul>
                <li>Nama Usaha: <strong>{{ $suketusaha->nama_usaha }}</strong></li>
                <li>Alamat Usaha: <strong>{{ $suketusaha->alamat_usaha }}</strong></li>
                <li>Jenis Tempat Usaha: <strong>{{ $suketusaha->tempat_usaha }}</strong></li>
                <li>Status Tempat Usaha: <strong>{{ $suketusaha->status_usaha }}</strong></li>
                <li>Bidang Usaha: <strong>{{ $suketusaha->bidang_usaha }}</strong></li>
                <li>Bentuk Usaha: <strong>{{ $suketusaha->bentuk_usaha }}</strong></li>
                <li>Modal Usaha: <strong>{{ $suketusaha->modal_usaha }}</strong></li>
                <li>Jumlah Tenaga Kerja: <strong>{{ $suketusaha->tenaga_kerja }} Orang</strong></li>
                <li>Mulai Usaha Sejak: <strong>{{ $suketusaha->mulai_usaha }}</strong></li>
            </ul>

            <p>Demikian surat keterangan ini dibuat dan diberikan kepada yang bersangkutan untuk dapat dipergunakan sebagaimana mestinya.</p>
        </div>
        <div class="signature">
            <p>Rukma Jaya, Desember 2022</p>
            <p><strong>Kepala Desa Rukma Jaya</strong></p>
            <br><br><br>
            <p><strong>ALHADI</strong></p>
        </div>
    </div>

    <script>
        window.print();
    </script>
</body>
</html>
{{-- 
	<style type="text/css" media="print">
	    @page { margin: 0; }
  		body { 
  			margin: 1cm;
  			margin-left: 2cm;
  			margin-right: 2cm;
  			font-family: "Times New Roman", Times, serif;
  		}
	</style> --}}
