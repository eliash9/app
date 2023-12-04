<!DOCTYPE html>
<html lang="en" ng-app="angularApp">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catatan Pemberian dan Pemantauan Obat Pasien</title>
    <!--   @if (stripos(\Request::url(), 'localhost') !== false)
        {{-- <link rel="stylesheet" href="{{ asset('css/report/paper.css') }}">
        <link rel="stylesheet" href="{{ asset('css/report/table.css') }}">
        <link rel="stylesheet" href="{{ asset('css/report/tabel.css') }}"> --}}
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/jquery.qr-code.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/qrcode/src/jquery.qrcode.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/qrcode/src/qrcode.js') }}"></script>
        {{-- <link href="{{ asset('css/style.css') }}" rel="stylesheet"> --}}
        <!-- angular --
        <script src="{{ asset('js/angular/angular.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/angular/angular-route.min.js') }}" type="text/javascript"></script>
        <script type="text/javascript" src="{{ asset('js/angular/angular-animate.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/angular/angular-aria.min.js') }}"></script>
        <script src="{{ asset('js/angular/angular-material.js') }}" type="text/javascript"></script>
    @else
        {{-- <link rel="stylesheet" href="{{ asset('service/css/report/paper.css') }}">
        <link rel="stylesheet" href="{{ asset('service/css/report/table.css') }}">
        <link rel="stylesheet" href="{{ asset('service/css/report/tabel.css') }}"> --}}
        <script src="{{ asset('service/js/jquery.min.js') }}"></script>
        <script src="{{ asset('service/js/jquery.qr-code.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/qrcode/src/jquery.qrcode.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/qrcode/src/qrcode.js') }}"></script>
        {{-- <link href="{{ asset('service/css/style.css') }}" rel="stylesheet"> --}}
        <!-- angular -
        <script src="{{ asset('service/js/angular/angular.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('service/js/angular/angular-route.min.js') }}" type="text/javascript"></script>
        <script type="text/javascript" src="{{ asset('service/js/angular/angular-animate.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('service/js/angular/angular-aria.min.js') }}"></script>
        <script src="{{ asset('service/js/angular/angular-material.js') }}" type="text/javascript"></script>
    @endif-->
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
        }

        @page {
            size: A4;
            margin-top: 1rem;
            margin-bottom: 1rem;
            margin-left: 3rem;
            margin-right: 1rem;
            transform: scale(72%);
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

        td input {
            vertical-align: middle;
        }

        .format {
            padding: 2rem;
            page-break-after: always;
        }

        @media only screen and (max-width:220mm) and (max-height:270mm) {
            @page {
                size: A4;
                margin: 0;
                transform: scale(71%);
            }

            .format {
                width: 210mm;
                height: 297mm;
            }

            table {
                transform: scale(50%);
            }

            .divider {
                clear: both;
                padding: 2rem;
            }
        }
    </style>
</head>

<body>
    <div class="format">
      
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
                                <strong style="font-size: 11pt">@{!! $res['profile']->namalengkap !!}</strong> <br>
                                JL. SERIKAYA NO. 17 BULUKUMBA 92512 <br>
                                TELP : @{!! $res['profile']->fixedphone !!}
                            </td>
                        </tr>
                    </table>

                </td>
                
                <td style="width:25%;margin:0;" rowspan="2">
                    <table width="100%" style="border:none;table-layout:fixed;text-align:left;">
                        <tr>
                            <td colspan="4" style="border:none;font-size:7pt;">Nama Lengkap</td>
                            <td style="border:none;font-size:7pt;" colspan="9">: @{!! $res['d'][0]->namapasien !!} (@{!!
                                $res['d'][0]->jeniskelamin == 'PEREMPUAN' ? 'P' : 'L' !!})</td>
                          
                        </tr>
                        <tr>
                            <td colspan="4" style="border:none;font-size:7pt;">Tanggal Lahir</td>
                            <td style="border:none;font-size:7pt;" colspan="9">: @{!! date('d-m-Y',strtotime(
                                $res['d'][0]->tgllahir
                                )) !!}</td>
                        </tr>
                        <tr>
                            <td colspan="4" style="border:none;font-size:7pt;">NIK</td>
                            <td style="border:none;font-size:7pt;" colspan="9">: @{!! $res['d'][0]->noidentitas !!}</td>

                        </tr>
                    </table>

                </td>
                <td style="width:10%;margin:0 auto;background:#000;color:#fff;text-align:center;font-size:36px">
                    RM</td>

            </tr>
            <tr>
                <td style="text-align:center;font-size:36px">27</td>
            </tr>
        </table>

        <table width="100%" style="table-layout:fixed;text-align:center;">
            <tr>
                <td colspan="20" style="text-align:left">
                    <h2>RUANG RAWAT AWAL : @{{ item.obj[424100] ? item.obj[424100] : '' }}</h2>
                </td>
            </tr>
            <tr style="text-align:center;">
                <td rowspan="3" width="25">No</td>
                <td rowspan="3" width="90">Nama Obat</td>
                <td rowspan="3" width="25">Dosis</td>
                <td rowspan="3" width="25">Rute</td>
                <td rowspan="3" width="5">Tgl Mulai</td>
                <td rowspan="3" width="5">Nama / TTD Dokter</td>
                <td colspan="12">Waktu dan Frekuensi</td>
                <td rowspan="3">Informasi Benar</td>
                <td rowspan="3">Review Farmasi</td>
            </tr>
            <tr style="text-align:center;">
                <td colspan="4">Hari ke</td>
                <td colspan="4">Hari ke</td>
                <td colspan="4">Hari ke</td>
            </tr>
            <tr style="text-align:center;">
                <td>p</td>
                <td>s</td>
                <td>s</td>
                <td>m</td>
                <td>p</td>
                <td>s</td>
                <td>s</td>
                <td>m</td>
                <td>p</td>
                <td>s</td>
                <td>s</td>
                <td>m</td>
            </tr>

            <!-- bagian a -->
            <tr style="background:#000;color:#fff">
                <td colspan="20">
                    <h3>A. RESEP NON PARENTERAL</h3>
                </td>
            </tr>
            <tr style="height:18px">
                <td rowspan="2" style="text-align:center">1</td>
                <td rowspan="2">@{{ item.obj[424101] }}</td>
                <td rowspan="2">@{{ item.obj[424102] }}</td>
                <td rowspan="2">@{{ item.obj[424103] }}</td>
                <td rowspan="2">@{{ item.obj[424104] }}</td>
                <td rowspan="2">@{{ item.obj[424105] }}</td>
                <td colspan="4" style="text-align:center">@{{item.obj[424106] | toDate | date:'dd-MM-yyyy'}}</td>
                <td colspan="4" style="text-align:center">@{{item.obj[424111] | toDate | date:'dd-MM-yyyy'}}</td>
                <td colspan="4" style="text-align:center">@{{item.obj[424116] | toDate | date:'dd-MM-yyyy'}}</td>
                <td rowspan="2">@{{ item.obj[424121] }}</td>
                <td rowspan="2">@{{ item.obj[424122] }}</td>
            </tr>
            <tr>
                <td>@{{ item.obj[424107] ? '&#10004;' : '' }}</td>
                <td>@{{ item.obj[424108] ? '&#10004;' : '' }}</td>
                <td>@{{ item.obj[424109] ? '&#10004;' : '' }}</td>
                <td>@{{ item.obj[424110] ? '&#10004;' : '' }}</td>
                <td>@{{ item.obj[424112] ? '&#10004;' : '' }}</td>
                <td>@{{ item.obj[424113] ? '&#10004;' : '' }}</td>
                <td>@{{ item.obj[424114] ? '&#10004;' : '' }}</td>
                <td>@{{ item.obj[424115] ? '&#10004;' : '' }}</td>
                <td>@{{ item.obj[424117] ? '&#10004;' : '' }}</td>
                <td>@{{ item.obj[424118] ? '&#10004;' : '' }}</td>
                <td>@{{ item.obj[424119] ? '&#10004;' : '' }}</td>
                <td>@{{ item.obj[424120] ? '&#10004;' : '' }}</td>
            </tr>

        </table>
    </div>

</body>

</html>