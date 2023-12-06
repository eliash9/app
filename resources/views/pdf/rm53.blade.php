<!DOCTYPE html>
<html lang="en" ng-app="angularApp">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Operasi</title>

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body,
        html {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 6pt;
            margin: 10px 20px;
        }

        @page {
            size: A4;
            width: 210mm;
            height: 279mm;
            margin-left: 3rem;
            margin-top: 1rem;
            margin-bottom: 1rem;
            margin-right: 1rem;
            transform: scale(72%);
        }

        table {
            page-break-inside: auto
        }

        tr {
            page-break-inside: avoid;
            page-break-after: auto
        }

        table {
          
            border: 1px solid #000;
            border-collapse: collapse;
        }

        table tr td {
            border: 1px solid #000;
            border-collapse: collapse;
            padding: .3rem;
            
        }

        .table-noborder,
        tr,
        td {
            border: 0;
            border-collapse: collapse;
            padding: .3rem;


        }
        .bordered {
            border: .1rem solid rgba(0, 0, 0, 0.45);
            border-collapse: collapse;
            padding: .2rem;
            box-sizing: border-box;

        }

        .border-top {
            border-top: .1rem solid rgba(0, 0, 0, 0.45);
            border-collapse: collapse;
            box-sizing: border-box;
        }

        .border-bottom {
            border-bottom: .1rem solid rgba(0, 0, 0, 0.45);
            border-collapse: collapse;
            box-sizing: border-box;
        }

        .border-left {
            border-left: .1rem solid rgba(0, 0, 0, 0.45);
            border-collapse: collapse;
            box-sizing: border-box;
        }

        .border-right {
            border-right: .1rem solid rgba(0, 0, 0, 0.45);
            border-collapse: collapse;
            box-sizing: border-box;
        }

        header {
            border: 1px solid #000;
        }



        .rotate {
            transform: rotate(-90deg);
        }

        .text-center {
            text-align: center;
        }

        .p05 {
            padding: .2rem;
        }

        .bg-dark {
            background: #000;
            color: #fff;
            padding: .5rem;
            text-align: center;
        }
    </style>
</head>

<body ng-controller="cetakLaporanOperasi">
    <table width="100%" style="table-layout:fixed;text-align:center;">
        <tr>
            <td style="width:15%;margin:0 auto;" rowspan="2">
                <figure style="width:60px;margin:0 auto;">

                    @if(stripos(\Request::url(), 'localhost') !== FALSE)
                    <img src="{{ asset('img/logo_only.png') }}" alt="" style="width: 60px;">
                    @else

                    <img src="service/img/logo_only.png" alt="" style="width: 60px;">
                    @endif
                </figure>
            </td>
            <td style="width:35%;margin:0 auto;" rowspan="2">
                <table width="100%" style="border:none;table-layout:fixed;text-align:center;">
                    <tr style="border:none;text-align:center;">
                        <td style="text-align:center;border:none;">
                            <strong style="font-size: 11pt">{!! $res['profile']->namalengkap !!}</strong> <br>
                            JL. SERIKAYA NO. 17 BULUKUMBA 92512 <br>
                            TELP : {!! $res['profile']->fixedphone !!}
                        </td>
                    </tr>
                </table>

            </td>

            <td style="width:25%;margin:0;" rowspan="2">
                <table width="100%" style="border:none;table-layout:fixed;text-align:left;">
                    <tr>
                        <td colspan="4" style="border:none;font-size:7pt;">No. RM</td>
                        <td style="border:none;font-size:7pt;" colspan="9">: {!! $res['d'][0]->nocm !!} </td>

                    </tr>
                    <tr>
                        <td colspan="4" style="border:none;font-size:7pt;">Nama</td>
                        <td style="border:none;font-size:7pt;" colspan="9">: {!! $res['d'][0]->namapasien !!} ({!!
                            $res['d'][0]->jeniskelamin == 'PEREMPUAN' ? 'P' : 'L' !!})</td>

                    </tr>
                    <tr>
                        <td colspan="4" style="border:none;font-size:7pt;">Tanggal Lahir</td>
                        <td style="border:none;font-size:7pt;" colspan="9">: {!! date('d-m-Y',strtotime(
                            $res['d'][0]->tgllahir
                            )) !!}</td>
                    </tr>
                    <tr>
                        <td colspan="4" style="border:none;font-size:7pt;">NIK</td>
                        <td style="border:none;font-size:7pt;" colspan="9">: {!! $res['d'][0]->noidentitas !!}</td>

                    </tr>
                </table>

            </td>
            <td style="width:10%;margin:0 auto;background:#000;color:#fff;text-align:center;font-size:36px">
                RM</td>

        </tr>
        <tr>
            <td style="text-align:center;font-size:36px">53</td>
        </tr>
    </table>

    <table width="100%" class="table-border">

        <tr>
            <td colspan="9" class="bg-dark" style="font-size:x-large">
                LAPORAN OPERASI
            </td>
        </tr>
        <tr>
            <td rowspan="3" colspan="3" valign="top">Nama DPJP : @{{ item.obj[31100530] ? item.obj[31100530] : '' }}
            </td>
            <td colspan="3" style="border:none;border-right:1px solid #000">Nama Asisten</td>
            <td colspan="3" style="border:none;border-right:1px solid #000">Nama Perawat</td>
        </tr>
        <tr>
            <td colspan="3" style="border:none;border-right:1px solid #000">I. @{{ item.obj[31100532] ?
                item.obj[31100532] : '' }}</td>
            <td colspan="3" style="border:none">Scrub : @{{ item.obj[31100535] ? item.obj[31100535] : '' }}</td>
        </tr>
        <tr style="border-bottom:1px solid #000">
            <td colspan="3" style="border:none;border-right:1px solid #000">II. @{{ item.obj[31100534] ?
                item.obj[31100534] : '' }}</td>
            <td colspan="3" style="border:none">Sirkuler : @{{ item.obj[31100536] ? item.obj[31100536] : '' }}</td>
        </tr>
        <tr>
            <td colspan="4" rowspan="2">Nama Dokter Anestesi : @{{ item.obj[31100537] ? item.obj[31100537] : '' }}</td>
            <td colspan="5" style="border:none;">Jenis Anestesi</td>
        </tr>
        <tr style="border:none;border-bottom:1px solid #000">
            <td colspan="2" style="border:none;">@{{ item.obj[31100538] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                General Anestesi</td>
            <td colspan="2" style="border:none;">@{{ item.obj[31100539] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                Regional Anestesi</td>
            <td style="border:none;">@{{ item.obj[31100540] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Lokal Anestesi
            </td>
        </tr>
        <tr height="50px" valign="top">
            <td colspan="4">Diagnose Pre-Operatif : @{{ item.obj[31100541] ? item.obj[31100541] : '' }}</td>
            <td colspan="5">Komplikasi Selama Operasi : @{{ item.obj[31100542] ? item.obj[31100542] : '' }}</td>
        </tr>
        <tr>
            <td rowspan="4" colspan="4">Diagnose Pasca Operatif : @{{ item.obj[31100541] ? item.obj[31100541] : '' }}
            </td>
            <td colspan="2" style="border:none">Intake</td>
            <td colspan="3" style="border:none">Output</td>
        </tr>
        <tr >
            <td style="border:none">@{{ item.obj[31100544] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Kristaloid </td>
            <td style="border:none">: @{{ item.obj[32103414] ? item.obj[32103414] : '__' }} cc</td>
            <td style="border:none">@{{ item.obj[31100545] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Darah</td>
            <td colspan="2" style="border:none">: @{{ item.obj[32103415] ? item.obj[32103415] : '__' }} cc</td>
        </tr>
        <tr style="border:none">
            <td style="border:none">@{{ item.obj[31100546] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Expander </td>
            <td style="border:none">: @{{ item.obj[32103416] ? item.obj[32103416] : '__' }} cc</td>
            <td style="border:none">@{{ item.obj[31100547] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Urine</td>
            <td colspan="2" style="border:none">: @{{ item.obj[32103417] ? item.obj[32103417] : '__' }} cc</td>
        </tr>
        <tr style="border:none;border-bottom:1px solid #000;">
            <td style="border:none;">@{{ item.obj[31100548] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Darah </td>
            <td style="border:none">: @{{ item.obj[32103418] ? item.obj[32103418] : '__' }} cc</td>
            <td style="border:none">@{{ item.obj[31100549] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Lain-lain</td>
            <td colspan="2" style="border:none">: @{{ item.obj[32103419] ? item.obj[32103419] : '__' }} cc</td>
        </tr>
        <tr valign="top">
            <td colspan="4" rowspan="5" style="border:none;border-right:1px solid #000">Prosedur Tindakan yang dilakukan
                : @{{ item.obj[31100550] ? item.obj[31100550] : '' }}</td>
            <td colspan="2" style="border:none;border-right: 1px solid #000;">Dikirim untuk pemeriksaan P.A</td>
            <td colspan="3" style="border:none">Jenis Luka Operasi</td>
        </tr>
        <tr valign="top">
            <td rowspan="4" style="border:none">@{{ item.obj[31100557] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ya
            </td>
            <td rowspan="4" style="border:none;border-right:1px solid #000">@{{ item.obj[31100558] ? '[&#10004;]' :
                '[&nbsp;&nbsp;&nbsp;]' }} Tidak</td>
            <td colspan="3" style="border:none">@{{ item.obj[31100559] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Kotor
            </td>
        </tr>
        <tr style="border:none">
            <td colspan="3" style="border:none">@{{ item.obj[31100560] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                Kontaminasi</td>
        </tr>
        <tr style="border:none">
            <td colspan="3" style="border:none">@{{ item.obj[31100561] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                Potensial Kontaminasi</td>
        </tr>
        <tr style="border:none">
            <td colspan="3" style="border:none">@{{ item.obj[31100562] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Bersih
            </td>
        </tr>
        <tr style="border:none;">
            <td style="border:none;">@{{ item.obj[31100551] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Khusus</td>
            <td style="border:none;">@{{ item.obj[31100552] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Besar</td>
            <td style="border:none;" colspan="2">@{{ item.obj[31100553] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                Sedang</td>
            <td style="border:none;border-top:1px solid #000;border-left:1px solid #000;" colspan="5">No. Alat yang
                dipasang (implan) : @{{ item.obj[31100563] ? item.obj[31100563] : '' }}</td>
        </tr>
        <tr >
            <td style="border:none;">@{{ item.obj[31100554] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Kecil</td>
            <td style="border:none;">@{{ item.obj[31100555] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Elektif</td>
            <td style="border:none;border-right: 1px solid #000;" colspan="2">@{{ item.obj[31100556] ? '[&#10004;]' :
                '[&nbsp;&nbsp;&nbsp;]' }} Emergency</td>
                <td style="border:none;" colspan="5"></td>
        </tr>
        <tr height="50px" valign="top">
            <td colspan="2">Tanggal Operasi : @{{item.obj[31100564] | toDate | date:'dd MMMM yyyy'}}</td>
            <td colspan="2">Jam Operasi Dimulai : @{{item.obj[31100565] | toDate | date:'HH:mm'}}</td>
            <td colspan="2">Jam Operasi Selesai : @{{item.obj[31100566] | toDate | date:'HH:mm'}}</td>
            <td colspan="3">Lama Operasi Berlangsung : @{{ item.obj[31100567] ? item.obj[31100567] : '' }}</td>
        </tr>
        <tr height="70px" valign="top">
            <td colspan="9" style="border:none">Laporan Tindakan/ Operasi : (jika perlu dapat dilanjutkan di halaman
                sebelah) : @{{ item.obj[31100568] ? item.obj[31100568] : '' }}</td>
        </tr>
        <tr style="text-align:center;border:none;">
            <td colspan="6" style="border:none"></td>
            <td colspan="3" style="border:none">
                <div id="qrcodeDokter1" style="text-align: center"></div>
            </td>
        </tr>
        <tr style="text-align:center;border:none;">
            <td colspan="6" style="border:none"></td>
            <td colspan="3" style="border:none">(@{{ item.obj[31100569] ? item.obj[31100569] :
                '________________________________________' }})</td>
        </tr>
        <tr style="text-align:center">
            <td colspan="6" style="border:none"></td>
            <td colspan="3" style="border:none">TANDA TANGAN DAN NAMA DOKTER</td>
        </tr>
        {{-- <tr height="850px">
            <td colspan="9"></td>
        </tr> --}}
        <tr height="30px" style="border-top:1px solid #000">
            <td colspan="2" style="border:none">Intruksi Pasca Bedah</td>
            <td colspan="7" style="border:none">: @{{ item.obj[31100570] ? item.obj[31100570] :
                '________________________________________' }}</td>

        </tr>
        <tr height="30px">
            <td colspan="2" style="border:none">1. Konrol Nadi / Tensi / Nafas / Suhu :</td>
            <td colspan="7" style="border:none">: @{{ item.obj[31100571] ? item.obj[31100571] :
                '________________________________________' }}</td>
        </tr>
        <tr height="30px">
            <td colspan="2" style="border:none">2. Puasa</td>
            <td colspan="7" style="border:none">: @{{ item.obj[31100572] ? item.obj[31100572] :
                '________________________________________' }}</td>
        </tr>
        <tr height="30px">
            <td colspan="2" style="border:none">3. Infus</td>
            <td colspan="7" style="border:none">: @{{ item.obj[31100573] ? item.obj[31100573] :
                '________________________________________' }} </td>
        </tr>
        <tr height="30px">
            <td colspan="2" style="border:none">4. Antibiotika</td>
            <td colspan="7" style="border:none">: @{{ item.obj[31100574] ? item.obj[31100574] :
                '________________________________________' }}</td>
        </tr>
        <tr height="30px">
            <td colspan="2" style="border:none">5. Lain-lain</td>
            <td colspan="7" style="border:none">: @{{ item.obj[31100575] ? item.obj[31100575] :
                '________________________________________' }}</td>
        </tr>
        <tr style="text-align:center;" valign="top">
            <td colspan="6" style="border:none"></td>
            <td colspan="3" style="border:none">DPJP : </td>
        </tr>
        <tr style="text-align:center;" valign="top">
            <td colspan="6" style="border:none"></td>
            <td colspan="3" style="border:none">
                <div id="qrcodeDPJP1" style="text-align: center"></div>
            </td>
        </tr>
        <tr style="text-align:center">
            <td colspan="6" style="border:none"></td>
            <td colspan="3" style="border:none">(@{{ item.obj[31100576] ? item.obj[31100576] :
                '________________________________________' }})</td>
        </tr>
    </table>
    </section>


</body>

</html>