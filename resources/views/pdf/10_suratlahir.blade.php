<!DOCTYPE html>
<html lang="en" ng-app="angularApp">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan Kelahiran</title>

    <style>
        * {
            font-family: DejaVu Sans, Verdana, Arial, sans-serif;

        }

        @page {
            size: auto;
            size: A4 portrait;
        }

        html,body {
            
            margin-top: 10px;
            margin-left: 40px;
        }

        h1 {
            text-align: center;
            text-transform: uppercase;
            margin: 15px;
        }

        h2 {
            text-align: center;
            text-transform: uppercase;
            margin: -5px;

        }

        h3,h4 {
            text-align: center;
            text-transform: uppercase;
            margin: -5px;
        }



        p {
            text-align: justify;
            margin-bottom: 15px;
            font-size: 9pt;
        }

        .address {
            text-align: center;
            margin-top: 5px;
            margin-bottom: -5px;
            font-size: 7pt;
        }

        table {
            page-break-inside: auto;
            ;
            border-collapse: collapse;
            font-size: 9pt;
        }

        tr,
        td {
            page-break-inside: avoid;
            page-break-after: auto;
            ;
        }

        .header {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;

        }

        

    </style>

</head>

<body ng-controller="cetakSuketKelahiran">
    <div class="header">
      
        <img src="{{ public_path('service/img/logo_only.png') }}" alt="" style="width: 60px;">
       

        <h3>PEMERINTAH KABUPATEN BULUKUMBA</h3>

        <h3>DINAS KESEHATAN</h3>

        <h2>UPT RSUD H.ANDI SULTHAN DAENG RADJA</h2>

        <p class="address">
            Jalan Senkaya No. 17 Bulukumba 92512 Telepon (0413) 81290, 81292 FAX. 85030
        </p>

        <p class="address">
            Website: https•//rsud bulukumbakab qo iď, E-mail :sulthandgradja@yahoo.com
        </p>
        <hr style="border:1px solid #000">
    </div>
    <div class="header">
        <h3><u>SURAT KETERANGAN KELAHIRAN</u></h3>
        <h4>
                NOMOR : 440 / @{{ item.obj[32108986] ? item.obj[32108986] : '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
                }} / RSUD - BLK / 2023
           </h4>
    </div>



    <section>
        <table width="100%" id="content" style="table-layout:fixed; ">


            <tr>
                <td colspan="10">
                    Yang bertanda tangan di bawah ini, Dokter / Bidan Rumah Sakit Umum Daerah Kab. Bulukumba menerangkan
                    bahwa:
                </td>
            </tr>
            <tr height="50px"></tr>
            <tr>
                <td colspan="3">NAMA</td>
                <td colspan="6">: @{{ item.obj[32108987] ? item.obj[32108987] :
                    '..................................................' }}</td>
                <td>(Ny)</td>
            </tr>
            <tr>
                <td colspan="3">UMUR</td>
                <td>: @{{ item.obj[32108988] ? item.obj[32108988] :
                    '..................................................' }}</td>
                <td colspan="6"></td>
            </tr>
            <tr>
                <td colspan="3">PEKERJAAN</td>
                <td colspan="7">: @{{ item.obj[32108989] ? item.obj[32108989] :
                    '..................................................' }} </td>
                {{-- <td colspan="6">cek</td> --}}
            </tr>
            <tr>
                <td colspan="3">ALAMAT</td>
                <td>: @{{ item.obj[32108990] ? item.obj[32108990] :
                    '..................................................' }}</td>
                <td colspan="6"></td>
            </tr>
            <tr height="50px"></tr>
            <tr>
                <td style=" "><em>Istri dari</em></td>
            </tr>
            <tr height="20px"></tr>
            <tr>
                <td colspan="3">NAMA</td>
                <td colspan="6">: @{{ item.obj[32108991] ? item.obj[32108991] :
                    '..................................................' }}</td>
                <td>(Tn)</td>
            </tr>
            <tr>
                <td colspan="3">UMUR</td>
                <td>: @{{ item.obj[32108992] ? item.obj[32108992] :
                    '..................................................' }}</td>
                <td colspan="6"></td>
            </tr>
            <tr>
                <td colspan="3">PEKERJAAN</td>
                <td>: @{{ item.obj[32108993] ? item.obj[32108993] :
                    '..................................................' }}</td>
                <td colspan="6"></td>
            </tr>
            <tr>
                <td colspan="3">ALAMAT</td>
                <td>: @{{ item.obj[32108994] ? item.obj[32108994] :
                    '..................................................' }}</td>
                <td colspan="6"></td>
            </tr>
            <tr height="50px"></tr>
            <tr>
                <td colspan="10">
                    Adalah benar telah melahirkan Anak "@{{ item.obj[32108995] ? item.obj[32108995] :
                    '........................' }}" di Rumah Sakit Umum Daerah H. Andi Sulthan Daeng Radja Bulukumba yang
                    bernama "@{{ item.obj[32108996] ? item.obj[32108996] : '........................' }}" "Jenis Kelamin
                    "@{{ item.obj[32108997] ? item.obj[32108997] : '........................' }}"
                    Pada Hari "@{{item.obj[32108998] | DateIndo | date:'EEEE' }}" Tanggal "@{{item.obj[32108998] |
                    toDate | date:'dd-MM-yyyy'}}" Jam " @{{item.obj[32108998] | toDate | date:'HH:mm'}}" WITA.
                </td>
            </tr>
            <tr style=" " height="50px">
                <td colspan="10" style=" ">
                    Demikian Surat Keterangan ini dibuat untuk digunakan sebagaimana mestinya.
                </td>
            </tr>
            <tr style=" ">
                <td colspan="7" style=" "></td>
                <td colspan="3" style=" ">Bulukumba, @{{item.obj[32108999] | toDate | date:'dd-MM-yyyy
                    HH:mm'}}</td>
            </tr>
            <tr style=" ">
                <td colspan="7" style=" "></td>
                <td colspan="3" style=" ">Mengetahui, </td>
            </tr>
            <tr style=" ">
                <td colspan="7" style=" "></td>
                <td colspan="3" style=" ">Dokter / Bidan :</td>
            </tr>
            <tr>
                <td colspan="7" style=" "></td>
                <td colspan="3" style=" ">
                    <div id="qrcodePetugas1" style="text-align: left">
                        <img src="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=ditandatangi oleh=UTF-8"
                            alt="">
                </td>
            </tr>
            <tr style=" ">
                <td colspan="7" style=" "></td>
                <td colspan="3" style=" ">

                    (@{{ item.obj[32109000] ? item.obj[32109000] :
                    '........................' }})</td>
            </tr>
        </table>
    </section>


</body>

</html>