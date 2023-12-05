<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan Kematian</title>
    <style>
        body {
            font-family: DejaVu Sans, Verdana, Arial, sans-serif;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;

        }

        img {

            margin-bottom: 15px;
        }

        h1 {
            text-align: center;
            text-transform: uppercase;
            margin: 15px;
        }

        h2 {
            text-align: center;
            text-transform: uppercase;


        }

        h3 {
            text-align: center;
            text-transform: uppercase;

            margin: -15px;
        }

        p {
            text-align: justify;
            margin-bottom: 15px;
            font-size: 12pt;
        }

        .address {
            text-align: center;
            margin-top: 20px;
            margin-bottom: -5px;
            font-size: 9pt;
        }

        .date {
            margin-top: 40px;
        }

        .sender {
            margin-top: 40px;
        }

        .subject {
            margin-top: 20px;
            text-align: center;
        }

        .signature {
            margin-top: 60px;
        }

        .footer {
            margin-top: 60px;
            text-align: center;
            font-style: italic;
        }

        /* Styling for tables */
        table {
            width: 100%;
            border-collapse: collapse;

            border: none;
        }

        th,
        td {
            border: none;

        }

        /* Styling for page breaks when printing */
        @media print {
            body {
                page-break-before: always;
            }
        }
    </style>
</head>

<body>
    <div class="header">
        <img src="service/img/logo_only.png" alt="" style="width: 60px;">
        <h3>PEMERINTAH KABUPATEN BULUKUMBA</h3>
        <h2>DINAS KESEHATAN</h2>
        <h3>UPT RSUD H. ANDI SULTHAN DAENG RADJA</h3>
        <p class="address">Jalan Serikaya No. 17 Bulukumba 92512 Telpon (0413) 81290, 81292 FAX.
            85030 <br> Website: https://rsud.bulukumbakab.go.id, Email: sultanhandgradja@yahoo.com</p>
        <hr style="border:2px solid #000">
    </div>
    <div class="header">
        <h3>SURAT KETERANGAN KEMATIAN</h3>
        <p class="subject"> NOMOR: 440 / @{{ item.obj[32104095] ?
            item.obj[32104095] : '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' }} / RSUD-BLK / 2023
        </p>
    </div>
    <p>Yang bertanda tangan di bawah ini menerangkan bawah:
    </p>





    <table width="100%" style="table-layout:fixed;border:none">
        <tr>
            <td></td>
            <td>Nama</td>
            <td colspan="7">: @{{ item.obj[32104091] ? item.obj[32104091] :
                '..................................................' }}</td>
        </tr>
        <tr>
            <td></td>
            <td>Umur</td>
            <td colspan="7">: @{{ item.obj[32104092] ? item.obj[32104092] :
                '..................................................' }} Tahun</td>
        </tr>
        <tr>
            <td></td>
            <td>Pekerjaan</td>
            <td colspan="7">: @{{ item.obj[32104093] ? item.obj[32104093] :
                '..................................................' }}</td>
        </tr>
        <tr>
            <td></td>
            <td>Alamat</td>
            <td colspan="7">: @{{ item.obj[32104094] ? item.obj[32104094] :
                '..................................................' }}</td>
        </tr>
    </table>
    <p>Yang tersebut namanya di atas
        benar telah meninggal dunia di Rumah Sakit Umum Daerah H. Andi Sulthan Daeng Radja pada hari
        @{{item.obj[32104096] | toDate | date:'EEEE'}} Tanggal @{{item.obj[32104096] | toDate |
        date:'dd-MM-yyyy'}} Jam @{{item.obj[32104096] | toDate | date:'HH:mm'}} yang dirawat dari tanggal
        @{{item.obj[32104097] | toDate | date:'dd-MM-yyyy HH:mm'}} dengan Diagnosa @{{ item.obj[32104098] ?
        item.obj[32104098] : '..................................................' }}
    </p>
    <p>Demikian surat keterangan ini dibuat untuk dipergunakan seperlunya</p>
    <table>

        <tr>
            <td colspan="4" style="border:none;text-align: center;">Mengetahui</td>
        </tr>
        <tr style="text-align: center;">
            <td colspan="4">Dokter yang merawat</td>
            <td></td>
            <td colspan="4">Kepala Ruangan/Perawatan</td>
        </tr>
        <tr style="text-align: center;">
            <td colspan="4" valign="bottom">
                <div id="qrcodePetugas1" style="text-align: center">
            </td>
            <td></td>
            <td colspan="4" valign="bottom">
                <div id="qrcodePetugas2" style="text-align: center">
            </td>
        </tr>
        <tr style="text-align: center;">
            <td colspan="4" valign="bottom">@{{ item.obj[32104099] ? item.obj[32104099] :
                '__________________________________________' }}</td>
            <td></td>
            <td colspan="4" valign="bottom">@{{ item.obj[32104100] ? item.obj[32104100] :
                '__________________________________________' }}</td>
        </tr>

    </table>
</body>

</html>