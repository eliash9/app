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
<<<<<<< HEAD
=======
<body > 
    @if (!empty($res['d1']))
        <div class="format">
            <table>
                <tr>
                    <td rowspan="4" colspan="2">
                        <figure style="width:80px;margin:0 auto;">
                            @if(stripos(\Request::url(), 'localhost') !== FALSE)
                                    <img src="{{ asset('img/logo_only.png') }}" alt="" style="width: 60px;">
                                @else
                                    <img src="{{ asset('service/img/logo_only.png') }}" alt="" style="width: 60px;">
                                @endif
                        </figure>
                    </td>
                    <td rowspan="4" colspan="4" style="text-align:center;width:38%">
                        <strong style="font-size: 7pt">{!! $res['profile']->namalengkap !!}</strong> <br>
                        JL. SERIKAYA NO. 17 BULUKUMBA 92512 <br>
                        TELP : (0413) 81292
                    </td>
                    <td colspan="9" style="border:none;">No RM</td>
                    <td style="border:none;" colspan="4">: {!! $res['d1'][0]->nocm  !!}</td>
                    <td rowspan="3" style="background:#000;color:#fff;width:100px;text-align:center;font-size:36px">RM</td>
                </tr>
                <tr>
                    <td width="30" colspan="9" style="border:none;">Nama Lengkap</td>
                    <td style="border:none;" colspan="3">: {!!  $res['d1'][0]->namapasien  !!}</td>
                    <td style="border:none;text-align: right;">{{ $res['d1'][0]->jeniskelamin == 'PEREMPUAN' ? 'P' : 'L' }}</td>
                </tr>
                <tr>
                    <td width="30" colspan="9" style="border:none;">Tanggal Lahir</td>
                    <td style="border:none;" colspan="4">: {!! date('d-m-Y',strtotime( $res['d1'][0]->tgllahir  )) !!}</td>
                </tr>
                <tr>
                    <td width="30" colspan="9" style="border:none;">NIK</td>
                    <td style="border:none;" colspan="4">: {!! $res['d1'][0]->noidentitas  !!}</td>
                    <td style="text-align:center;font-size:36px">27</td>
                </tr>
                <tr>
                    <td colspan="20" style="text-align:center;background: #000;color: #fff;"><h1>CATATAN PEMBERIAN DAN PEMANTAUAN OBAT PASIEN</h1></td>
                </tr>
                <tr>
                    <td colspan="20" style="text-align:left"><h2>RUANG RAWAT AWAL : @{{ item.obj[424100] ? item.obj[424100] : '' }}</h2></td>
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
                    <td colspan="20"><h3>A. RESEP NON PARENTERAL</h3></td>
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
                <tr style="height:18px">
                    <td rowspan="2" style="text-align:center">2</td>
                    <td rowspan="2">@{{ item.obj[424123] }}</td>
                    <td rowspan="2">@{{ item.obj[424124] }}</td>
                    <td rowspan="2">@{{ item.obj[424125] }}</td>
                    <td rowspan="2">@{{ item.obj[424126] }}</td>
                    <td rowspan="2">@{{ item.obj[424127] }}</td>
                    <td colspan="4" style="text-align:center">@{{item.obj[424128] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="4" style="text-align:center">@{{item.obj[424133] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="4" style="text-align:center">@{{item.obj[424138] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td rowspan="2">@{{ item.obj[424143] }}</td>
                    <td rowspan="2">@{{ item.obj[424144] }}</td>
                </tr>
                <tr>
                    <td>@{{ item.obj[424129] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424130] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424131] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424132] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424134] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424135] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424136] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424137] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424139] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424140] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424141] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424142] ? '&#10004;' : '' }}</td>
                </tr>
                <tr style="height:18px">
                    <td rowspan="2" style="text-align:center">3</td>
                    <td rowspan="2">@{{ item.obj[424145] }}</td>
                    <td rowspan="2">@{{ item.obj[424146] }}</td>
                    <td rowspan="2">@{{ item.obj[424147] }}</td>
                    <td rowspan="2">@{{ item.obj[424148] }}</td>
                    <td rowspan="2">@{{ item.obj[424149] }}</td>
                    <td colspan="4" style="text-align:center">@{{item.obj[424150] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="4" style="text-align:center">@{{item.obj[424155] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="4" style="text-align:center">@{{item.obj[424160] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td rowspan="2">@{{ item.obj[424165] }}</td>
                    <td rowspan="2">@{{ item.obj[424166] }}</td>
                </tr>
                <tr>
                    <td>@{{ item.obj[424151] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424152] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424153] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424154] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424156] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424157] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424158] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424159] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424161] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424162] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424163] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424164] ? '&#10004;' : '' }}</td>
                </tr>
                <tr style="height:18px">
                    <td rowspan="2" style="text-align:center">4</td>
                    <td rowspan="2">@{{ item.obj[424167] }}</td>
                    <td rowspan="2">@{{ item.obj[424168] }}</td>
                    <td rowspan="2">@{{ item.obj[424169] }}</td>
                    <td rowspan="2">@{{ item.obj[424170] }}</td>
                    <td rowspan="2">@{{ item.obj[424171] }}</td>
                    <td colspan="4" style="text-align:center">@{{item.obj[424172] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="4" style="text-align:center">@{{item.obj[424177] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="4" style="text-align:center">@{{item.obj[424182] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td rowspan="2">@{{ item.obj[424187] }}</td>
                    <td rowspan="2">@{{ item.obj[424188] }}</td>
                </tr>
                <tr>
                    <td>@{{ item.obj[424173] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424174] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424175] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424176] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424178] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424179] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424180] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424181] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424183] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424184] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424185] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424186] ? '&#10004;' : '' }}</td>
                </tr>
                <tr style="height:18px">
                    <td rowspan="2" style="text-align:center">5</td>
                    <td rowspan="2">@{{ item.obj[424189] }}</td>
                    <td rowspan="2">@{{ item.obj[424190] }}</td>
                    <td rowspan="2">@{{ item.obj[424191] }}</td>
                    <td rowspan="2">@{{ item.obj[424192] }}</td>
                    <td rowspan="2">@{{ item.obj[424193] }}</td>
                    <td colspan="4" style="text-align:center">@{{item.obj[424194] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="4" style="text-align:center">@{{item.obj[424199] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="4" style="text-align:center">@{{item.obj[424204] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td rowspan="2">@{{ item.obj[424209] }}</td>
                    <td rowspan="2">@{{ item.obj[424210] }}</td>
                </tr>
                <tr>
                    <td>@{{ item.obj[424195] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424196] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424197] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424198] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424200] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424201] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424202] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424203] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424205] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424206] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424207] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424208] ? '&#10004;' : '' }}</td>
                </tr>
                <tr style="height:18px">
                    <td rowspan="2" style="text-align:center">6</td>
                    <td rowspan="2">@{{ item.obj[424211] }}</td>
                    <td rowspan="2">@{{ item.obj[424212] }}</td>
                    <td rowspan="2">@{{ item.obj[424213] }}</td>
                    <td rowspan="2">@{{ item.obj[424214] }}</td>
                    <td rowspan="2">@{{ item.obj[424215] }}</td>
                    <td colspan="4" style="text-align:center">@{{item.obj[424216] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="4" style="text-align:center">@{{item.obj[424221] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="4" style="text-align:center">@{{item.obj[424226] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td rowspan="2">@{{ item.obj[424231] }}</td>
                    <td rowspan="2">@{{ item.obj[424232] }}</td>
                </tr>
                <tr><td>@{{ item.obj[424217] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424218] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424219] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424220] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424222] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424223] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424224] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424225] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424227] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424228] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424229] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424230] ? '&#10004;' : '' }}</td>
                </tr>
                <tr style="height:18px">
                    <td rowspan="2" style="text-align:center">7</td>
                    <td rowspan="2">@{{ item.obj[424233] }}</td>
                    <td rowspan="2">@{{ item.obj[424234] }}</td>
                    <td rowspan="2">@{{ item.obj[424235] }}</td>
                    <td rowspan="2">@{{ item.obj[424236] }}</td>
                    <td rowspan="2">@{{ item.obj[424237] }}</td>
                    <td colspan="4" style="text-align:center">@{{item.obj[424238] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="4" style="text-align:center">@{{item.obj[424244] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="4" style="text-align:center">@{{item.obj[424248] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td rowspan="2">@{{ item.obj[424253] }}</td>
                    <td rowspan="2">@{{ item.obj[424254] }}</td>
                </tr>
                <tr>
                    <td>@{{ item.obj[424239] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424240] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424241] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424242] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424244] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424245] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424246] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424247] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424249] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424250] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424251] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424252] ? '&#10004;' : '' }}</td>
                </tr>
                <tr style="height:18px">
                    <td rowspan="2" style="text-align:center">8</td>
                    <td rowspan="2">@{{ item.obj[424255] }}</td>
                    <td rowspan="2">@{{ item.obj[424256] }}</td>
                    <td rowspan="2">@{{ item.obj[424257] }}</td>
                    <td rowspan="2">@{{ item.obj[424258] }}</td>
                    <td rowspan="2">@{{ item.obj[424259] }}</td>
                    <td colspan="4" style="text-align:center">@{{item.obj[424260] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="4" style="text-align:center">@{{item.obj[424265] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="4" style="text-align:center">@{{item.obj[424270] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td rowspan="2">@{{ item.obj[424275] }}</td>
                    <td rowspan="2">@{{ item.obj[424276] }}</td>
                </tr>
                <tr>
                    <td>@{{ item.obj[424261] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424262] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424263] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424264] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424266] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424267] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424268] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424269] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424271] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424272] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424273] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424274] ? '&#10004;' : '' }}</td>
                </tr>
                <tr style="height:18px">
                    <td rowspan="2" style="text-align:center">9</td>
                    <td rowspan="2">@{{ item.obj[424277] }}</td>
                    <td rowspan="2">@{{ item.obj[424278] }}</td>
                    <td rowspan="2">@{{ item.obj[424279] }}</td>
                    <td rowspan="2">@{{ item.obj[424280] }}</td>
                    <td rowspan="2">@{{ item.obj[424281] }}</td>
                    <td colspan="4" style="text-align:center">@{{item.obj[424282] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="4" style="text-align:center">@{{item.obj[424287] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="4" style="text-align:center">@{{item.obj[424292] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td rowspan="2">@{{ item.obj[424297] }}</td>
                    <td rowspan="2">@{{ item.obj[424298] }}</td>
                </tr>
                <tr>
                    <td>@{{ item.obj[424283] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424284] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424285] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424286] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424288] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424289] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424290] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424291] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424293] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424294] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424295] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424296] ? '&#10004;' : '' }}</td>
                </tr>
                <tr style="height:18px">
                    <td rowspan="2" style="text-align:center">10</td>
                    <td rowspan="2">@{{ item.obj[424299] }}</td>
                    <td rowspan="2">@{{ item.obj[424300] }}</td>
                    <td rowspan="2">@{{ item.obj[424301] }}</td>
                    <td rowspan="2">@{{ item.obj[424302] }}</td>
                    <td rowspan="2">@{{ item.obj[424303] }}</td>
                    <td colspan="4" style="text-align:center">@{{item.obj[424304] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="4" style="text-align:center">@{{item.obj[424309] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="4" style="text-align:center">@{{item.obj[424314] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td rowspan="2">@{{ item.obj[424319] }}</td>
                    <td rowspan="2">@{{ item.obj[424320] }}</td>
                </tr>
                <tr>
                    <td>@{{ item.obj[424305] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424306] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424307] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424308] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424310] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424311] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424312] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424313] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424315] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424316] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424317] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424318] ? '&#10004;' : '' }}</td>
                </tr>
                <tr style="height:18px">
                    <td rowspan="2" style="text-align:center">11</td>
                    <td rowspan="2">@{{ item.obj[424321] }}</td>
                    <td rowspan="2">@{{ item.obj[424322] }}</td>
                    <td rowspan="2">@{{ item.obj[424323] }}</td>
                    <td rowspan="2">@{{ item.obj[424324] }}</td>
                    <td rowspan="2">@{{ item.obj[424325] }}</td>
                    <td colspan="4" style="text-align:center">@{{item.obj[424326] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="4" style="text-align:center">@{{item.obj[424331] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="4" style="text-align:center">@{{item.obj[424336] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td rowspan="2">@{{ item.obj[424341] }}</td>
                    <td rowspan="2">@{{ item.obj[424342] }}</td>
                </tr>
                <tr>
                    <td>@{{ item.obj[424327] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424328] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424329] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424330] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424332] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424333] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424334] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424335] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424337] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424338] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424339] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424340] ? '&#10004;' : '' }}</td>
                </tr>
                <tr style="height:18px">
                    <td rowspan="2" style="text-align:center">12</td>
                    <td rowspan="2">@{{ item.obj[424343] }}</td>
                    <td rowspan="2">@{{ item.obj[424344] }}</td>
                    <td rowspan="2">@{{ item.obj[424345] }}</td>
                    <td rowspan="2">@{{ item.obj[424346] }}</td>
                    <td rowspan="2">@{{ item.obj[424347] }}</td>
                    <td colspan="4" style="text-align:center">@{{item.obj[424348] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="4" style="text-align:center">@{{item.obj[424353] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="4" style="text-align:center">@{{item.obj[424358] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td rowspan="2">@{{ item.obj[424363] }}</td>
                    <td rowspan="2">@{{ item.obj[424364] }}</td>
                </tr>
                <tr>
                    <td>@{{ item.obj[424349] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424350] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424351] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424352] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424354] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424355] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424356] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424357] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424359] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424360] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424361] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424362] ? '&#10004;' : '' }}</td>
                </tr>
                <tr style="height:18px">
                    <td rowspan="2" style="text-align:center">13</td>
                    <td rowspan="2">@{{ item.obj[424365] }}</td>
                    <td rowspan="2">@{{ item.obj[424366] }}</td>
                    <td rowspan="2">@{{ item.obj[424367] }}</td>
                    <td rowspan="2">@{{ item.obj[424368] }}</td>
                    <td rowspan="2">@{{ item.obj[424369] }}</td>
                    <td colspan="4" style="text-align:center">@{{item.obj[424370] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="4" style="text-align:center">@{{item.obj[424375] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="4" style="text-align:center">@{{item.obj[424380] | toDate | date:'dd-MM-yyyy'}}</td>
                    
                    <td rowspan="2">@{{ item.obj[424385] }}</td>
                    <td rowspan="2">@{{ item.obj[424386] }}</td>
                </tr>
                <tr>
                    <td>@{{ item.obj[424371] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424372] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424373] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424374] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424376] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424377] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424378] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424379] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424381] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424382] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424383] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424384] ? '&#10004;' : '' }}</td>
                </tr>
                <tr style="height:18px">
                    <td rowspan="2" style="text-align:center">14</td>
                    <td rowspan="2">@{{ item.obj[424387] }}</td>
                    <td rowspan="2">@{{ item.obj[424388] }}</td>
                    <td rowspan="2">@{{ item.obj[424389] }}</td>
                    <td rowspan="2">@{{ item.obj[424390] }}</td>
                    <td rowspan="2">@{{ item.obj[424391] }}</td>
                    <td colspan="4" style="text-align:center">@{{item.obj[424392] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="4" style="text-align:center">@{{item.obj[424397] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="4" style="text-align:center">@{{item.obj[424402] | toDate | date:'dd-MM-yyyy'}}</td>
                    
                    <td rowspan="2">@{{ item.obj[424407] }}</td>
                    <td rowspan="2">@{{ item.obj[424408] }}</td>
                </tr>
                <tr>
                    <td>@{{ item.obj[424393] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424394] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424395] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424396] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424398] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424399] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424400] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424401] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424403] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424404] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424405] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424406] ? '&#10004;' : '' }}</td>
                </tr>
                <tr style="height:18px">
                    <td rowspan="2" style="text-align:center">15</td>
                    <td rowspan="2">@{{ item.obj[424409] }}</td>
                    <td rowspan="2">@{{ item.obj[424410] }}</td>
                    <td rowspan="2">@{{ item.obj[424411] }}</td>
                    <td rowspan="2">@{{ item.obj[424412] }}</td>
                    <td rowspan="2">@{{ item.obj[424413] }}</td>
                    <td colspan="4" style="text-align:center">@{{item.obj[424414] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="4" style="text-align:center">@{{item.obj[424419] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="4" style="text-align:center">@{{item.obj[424424] | toDate | date:'dd-MM-yyyy'}}</td>
                    
                    <td rowspan="2">@{{ item.obj[424429] }}</td>
                    <td rowspan="2">@{{ item.obj[424430] }}</td>
                </tr>
                <tr>
                    <td>@{{ item.obj[424415] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424416] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424417] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424418] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424420] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424421] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424422] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424423] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424425] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424426] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424427] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424428] ? '&#10004;' : '' }}</td>
                </tr>
                <tr style="height:18px">
                    <td rowspan="2" style="text-align:center">16</td>
                    <td rowspan="2">@{{ item.obj[424431] }}</td>
                    <td rowspan="2">@{{ item.obj[424432] }}</td>
                    <td rowspan="2">@{{ item.obj[424433] }}</td>
                    <td rowspan="2">@{{ item.obj[424434] }}</td>
                    <td rowspan="2">@{{ item.obj[424435] }}</td>
                    <td colspan="4" style="text-align:center">@{{item.obj[424436] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="4" style="text-align:center">@{{item.obj[424441] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="4" style="text-align:center">@{{item.obj[424446] | toDate | date:'dd-MM-yyyy'}}</td>
                    
                    <td rowspan="2">@{{ item.obj[424451] }}</td>
                    <td rowspan="2">@{{ item.obj[424452] }}</td>
                </tr>
                <tr><td>@{{ item.obj[424437] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424438] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424439] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424440] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424442] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424443] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424444] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424445] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424447] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424448] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424449] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424450] ? '&#10004;' : '' }}</td>
                </tr>
>>>>>>> 014a5dd1c1b51977edc4c8104813569f928a3cf1

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