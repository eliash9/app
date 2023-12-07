<!DOCTYPE html>
<html lang="en" ng-app="angularApp">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partograf</title>
    @if (stripos(\Request::url(), 'localhost') !== false)
    <script src="{{ asset('js/Chart.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery.qr-code.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/qrcode/src/jquery.qrcode.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/qrcode/src/qrcode.js') }}"></script>
    <!-- angular -->
    <script src="{{ asset('js/angular/angular.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/angular/angular-route.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('js/angular/angular-animate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/angular/angular-aria.min.js') }}"></script>
    <script src="{{ asset('js/angular/angular-material.js') }}" type="text/javascript"></script>
    @else
    <script src="{{ asset('service/js/Chart.js') }}"></script>
    <script src="{{ asset('service/js/jquery.min.js') }}"></script>
    <script src="{{ asset('service/js/jquery.qr-code.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/qrcode/src/jquery.qrcode.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/qrcode/src/qrcode.js') }}"></script>
    <!-- angular -->
    <script src="{{ asset('service/js/angular/angular.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('service/js/angular/angular-route.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('service/js/angular/angular-animate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('service/js/angular/angular-aria.min.js') }}"></script>
    <script src="{{ asset('service/js/angular/angular-material.js') }}" type="text/javascript"></script>
    @endif
    <style>
        * {
            font-family: DejaVu Sans, Verdana, Arial, sans-serif;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {

            margin: 10px 20px;

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
            table-layout: fixed;
        }

        tr td {
            border: 1px solid #000;
            border-collapse: collapse;
        }

        canvas {
            width: 600px !important;
            height: 270px !important;
        }

        .mintd {
            width: 48pt;
        }

        .logo {
            width: 50px !important;
        }

        .text-center {
            text-align: center;
        }

        .bordered {
            border: 1px solid #000;
        }

        .noborder {
            border: none;
        }

        .border-lr {
            border: 1px solid #000;
            border-top: none;
            border-bottom: none;
        }

        .border-tb {
            border: 1px solid #000;
            border-left: none;
            border-right: none;
        }

        table tr td {
            font-size: xx-small;
        }

        table tr {
            height: 13pt
        }

        .bg-dark {
            background: #000;
            color: #fff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: x-large;
            padding: .5rem;
            height: 20pt !important;
        }

        .bg-dark-small {
            background: #000;
            color: #fff;
        }

        .rotate {
            /* vertical-align: bottom; */
            text-align: center;

        }

        #rotate {
            
            -ms-writing-mode: tb-rl;
            -webkit-writing-mode: vertical-rl;
            writing-mode: vertical-rl;
            transform: translate(0, 100%) rotate(-90deg);
            white-space: nowrap;
/*
            -ms-writing-mode: tb-rl;
            -webkit-writing-mode: vertical-rl;
            writing-mode: vertical-rl;
            transform: translate(0, 100%) rotate(-90deg);
            */
            
        }
    </style>
</head>

<body ng-controller="cetakPartograf">
    <table width='100%'>
        <tr height=20 class="noborder">
            <td colspan="8" rowspan="4" class="noborder-tb text-center" style="padding:.3rem">
                @if(stripos(\Request::url(), 'localhost') !== FALSE)
                <img src="{{ asset('img/logo_only.png') }}" alt="" style="width: 60px;display:block; margin:auto;">
                @else
                <img src="@{{ asset('service/img/logo_only.png') }}" alt=""
                    style="width: 60px;display:block; margin:auto;">
                @endif
            </td>
            <td colspan="17" rowspan="4" class="noborder-tb">
                <strong>{!! $res['profile']->namalengkap !!}</strong> <br>{!! $res['profile']->alamatlengkap !!}<br>TELP
                : (0413) 81292
            </td>
            <td colspan="6" class="noborder">No. RM </td>
            <td colspan="13" class="noborder">
                : {!! $res['d'][0]->nocm !!}
            </td>
            <td colspan="5" rowspan="2" style="font-size:xx-large;text-align: center;" class="bg-dark">RM</td>
        </tr>
        <tr class="noborder">
            <td colspan="6" class="noborder">Nama Lengkap</td>
            <td colspan="11" class="noborder">
                : {!! $res['d'][0]->namapasien !!}
            </td>
            <td colspan="2" class="noborder">{!! $res['d'][0]->jeniskelamin == 'PEREMPUAN' ? '(P)' : '(L)' !!}</td>
        </tr>
        <tr class="noborder">
            <td colspan="6" class="noborder">Tanggal Lahir</td>
            <td colspan="13" class="noborder">
                : {!! date('d-m-Y',strtotime( $res['d'][0]->tgllahir )) !!}
            </td>
            <td colspan="5" rowspan="2" style="font-size:xx-large;text-align: center;">56</td>
        </tr>
        <tr class="noborder">
            <td colspan="6" class="noborder">NIK</td>
            <td colspan="11" class="noborder">
                : {!! $res['d'][0]->noidentitas !!}
            </td>
        </tr>
        <tr class="bordered bg-dark">
            <th colspan="49" height="20pt">PARTOGRAF</th>
        </tr>

        <tr class="noborder">
            <td colspan="8" class="noborder">G: @{{ item.obj[18000300] ? item.obj[18000300] : '................' }}</td>
            <td colspan="8" class="noborder">P: @{{ item.obj[18000301] ? item.obj[18000301] : '................' }}</td>
            <td colspan="33" class="noborder">A: @{{ item.obj[18000302] ? item.obj[18000302] : '................' }}
            </td>
        </tr>
        <tr>
            <td colspan="25">
                Ketuban Pecah Sejak Jam : @{{item.obj[18000303] | toDate | date:'HH:mm'}} WITA
            </td>
            <td colspan="24">
                Mules Sejak Jam : @{{item.obj[18000304] | toDate | date:'HH:mm'}} WITA
            </td>
        </tr>
        <tr style="border:none">
            <td colspan="49" style="border-bottom:none"></td>
        </tr>
        <tr>
            <td colspan="10" style="border:none;text-align:center">Denyut Jantung Janin ( / mnt)</td>
            <td colspan="39" style="text-align:right;border:none"><canvas id="chartJantung"></canvas></td>
        </tr>

        <tr style="text-align:center">
            <td colspan="10" style="text-align:right;border:none">Air Ketuban</td>
            <td>@{{ item.obj[1000055] ? item.obj[1000055] : '' }}</td>
            <td>@{{ item.obj[1000056] ? item.obj[1000056] : '' }}</td>
            <td>@{{ item.obj[1000057] ? item.obj[1000057] : '' }}</td>
            <td>@{{ item.obj[1000058] ? item.obj[1000058] : '' }}</td>
            <td>@{{ item.obj[1000059] ? item.obj[1000059] : '' }}</td>
            <td>@{{ item.obj[1000060] ? item.obj[1000060] : '' }}</td>
            <td>@{{ item.obj[1000061] ? item.obj[1000061] : '' }}</td>
            <td>@{{ item.obj[1000062] ? item.obj[1000062] : '' }}</td>
            <td>@{{ item.obj[1000063] ? item.obj[1000063] : '' }}</td>
            <td>@{{ item.obj[1000064] ? item.obj[1000064] : '' }}</td>
            <td>@{{ item.obj[1000065] ? item.obj[1000065] : '' }}</td>
            <td>@{{ item.obj[1000066] ? item.obj[1000066] : '' }}</td>
            <td>@{{ item.obj[1000067] ? item.obj[1000067] : '' }}</td>
            <td>@{{ item.obj[1000068] ? item.obj[1000068] : '' }}</td>
            <td>@{{ item.obj[1000069] ? item.obj[1000069] : '' }}</td>
            <td>@{{ item.obj[1000070] ? item.obj[1000070] : '' }}</td>
            <td>@{{ item.obj[1000239] ? item.obj[1000239] : '' }}</td>
            <td>@{{ item.obj[1000240] ? item.obj[1000240] : '' }}</td>
            <td>@{{ item.obj[1000241] ? item.obj[1000241] : '' }}</td>
            <td>@{{ item.obj[1000242] ? item.obj[1000242] : '' }}</td>
            <td>@{{ item.obj[1000243] ? item.obj[1000243] : '' }}</td>
            <td>@{{ item.obj[1000244] ? item.obj[1000244] : '' }}</td>
            <td>@{{ item.obj[1000245] ? item.obj[1000245] : '' }}</td>
            <td>@{{ item.obj[1000246] ? item.obj[1000246] : '' }}</td>
            <td>@{{ item.obj[1000247] ? item.obj[1000247] : '' }}</td>
            <td>@{{ item.obj[1000248] ? item.obj[1000248] : '' }}</td>
            <td>@{{ item.obj[1000249] ? item.obj[1000249] : '' }}</td>
            <td>@{{ item.obj[1000250] ? item.obj[1000250] : '' }}</td>
            <td>@{{ item.obj[1000251] ? item.obj[1000251] : '' }}</td>
            <td>@{{ item.obj[1000252] ? item.obj[1000252] : '' }}</td>
            <td>@{{ item.obj[1000253] ? item.obj[1000253] : '' }}</td>
            <td>@{{ item.obj[1000254] ? item.obj[1000254] : '' }}</td>
            <td class="noborder"></td>
            <td class="noborder"></td>
            <td class="noborder"></td>
            <td class="noborder"></td>
            <td class="noborder"></td>
            <td class="noborder"></td>
            <td class="noborder"></td>
        </tr>
        <tr style="text-align:center">
            <td colspan="10" style="text-align:right;border:none">Penyusupan</td>
            <td>@{{ item.obj[1000071] ? item.obj[1000071] : '' }}</td>
            <td>@{{ item.obj[1000072] ? item.obj[1000072] : '' }}</td>
            <td>@{{ item.obj[1000073] ? item.obj[1000073] : '' }}</td>
            <td>@{{ item.obj[1000074] ? item.obj[1000074] : '' }}</td>
            <td>@{{ item.obj[1000075] ? item.obj[1000075] : '' }}</td>
            <td>@{{ item.obj[1000076] ? item.obj[1000076] : '' }}</td>
            <td>@{{ item.obj[1000077] ? item.obj[1000077] : '' }}</td>
            <td>@{{ item.obj[1000078] ? item.obj[1000078] : '' }}</td>
            <td>@{{ item.obj[1000079] ? item.obj[1000079] : '' }}</td>
            <td>@{{ item.obj[1000080] ? item.obj[1000080] : '' }}</td>
            <td>@{{ item.obj[1000081] ? item.obj[1000081] : '' }}</td>
            <td>@{{ item.obj[1000082] ? item.obj[1000082] : '' }}</td>
            <td>@{{ item.obj[1000083] ? item.obj[1000083] : '' }}</td>
            <td>@{{ item.obj[1000084] ? item.obj[1000084] : '' }}</td>
            <td>@{{ item.obj[1000085] ? item.obj[1000085] : '' }}</td>
            <td>@{{ item.obj[1000086] ? item.obj[1000086] : '' }}</td>
            <td>@{{ item.obj[1000255] ? item.obj[1000255] : '' }}</td>
            <td>@{{ item.obj[1000256] ? item.obj[1000256] : '' }}</td>
            <td>@{{ item.obj[1000257] ? item.obj[1000257] : '' }}</td>
            <td>@{{ item.obj[1000258] ? item.obj[1000258] : '' }}</td>
            <td>@{{ item.obj[1000259] ? item.obj[1000259] : '' }}</td>
            <td>@{{ item.obj[1000260] ? item.obj[1000260] : '' }}</td>
            <td>@{{ item.obj[1000261] ? item.obj[1000261] : '' }}</td>
            <td>@{{ item.obj[1000262] ? item.obj[1000262] : '' }}</td>
            <td>@{{ item.obj[1000263] ? item.obj[1000263] : '' }}</td>
            <td>@{{ item.obj[1000264] ? item.obj[1000264] : '' }}</td>
            <td>@{{ item.obj[1000265] ? item.obj[1000265] : '' }}</td>
            <td>@{{ item.obj[1000266] ? item.obj[1000266] : '' }}</td>
            <td>@{{ item.obj[1000267] ? item.obj[1000267] : '' }}</td>
            <td>@{{ item.obj[1000268] ? item.obj[1000268] : '' }}</td>
            <td>@{{ item.obj[1000269] ? item.obj[1000269] : '' }}</td>
            <td>@{{ item.obj[1000270] ? item.obj[1000270] : '' }}</td>
            <td class="noborder"></td>
            <td class="noborder"></td>
            <td class="noborder"></td>
            <td class="noborder"></td>
            <td class="noborder"></td>
            <td class="noborder"></td>
            <td class="noborder"></td>
        </tr>
        <tr>
            <td colspan="46" style="text-align:right;border:none"></td>
        </tr>
        <tr>
            <td class="rotate noborder" colspan="10">

                <div id="rotate">
                    Pembukaan serviks (cm) beri tanda x <br>
                    Turunnya kepala
                    <br>beri tanda o
                </div>

            </td>
            <td colspan="39" style="text-align:right;border:none" >
             <canvas id="chartServiksKontraksi"
                    > 
                    <img src="https://quickchart.io/chart?w=300&h=170&c=%7B%0A++%22type%22%3A+%22bar%22%2C%0A++%22data%22%3A+%7B%0A++++%22labels%22%3A+%5B2012%2C+2013%2C+2014%2C+2015%2C+2016%5D%2C%0A++++%22datasets%22%3A+%5B%7B%0A++++++%22label%22%3A+%22Users%22%2C%0A++++++%22data%22%3A+%5B120%2C+60%2C+50%2C+180%2C+120%5D%0A++++%7D%5D%0A++%7D%0A%7D" />
          
                </canvas></td>
        </tr>
        <tr>
            <td colspan="10" style="border:none;text-align:center">Nadi & Tekanan Darah</td>
            <td colspan="39" style="text-align:right;border:none"><canvas id="chartNadiDarah"></canvas></td>
        </tr>

        <tr>
            <td colspan="36" style="border:none"></td>
        </tr>
        <tr style="text-align:center">
            <td colspan="10" class="noborder">Suhu (℃)</td>
            <td>@{{ item.obj[1000135] ? item.obj[1000135] : '' }}</td>
            <td>@{{ item.obj[1000136] ? item.obj[1000136] : '' }}</td>
            <td>@{{ item.obj[1000137] ? item.obj[1000137] : '' }}</td>
            <td>@{{ item.obj[1000138] ? item.obj[1000138] : '' }}</td>
            <td>@{{ item.obj[1000139] ? item.obj[1000139] : '' }}</td>
            <td>@{{ item.obj[1000140] ? item.obj[1000140] : '' }}</td>
            <td>@{{ item.obj[1000141] ? item.obj[1000141] : '' }}</td>
            <td>@{{ item.obj[1000142] ? item.obj[1000142] : '' }}</td>
            <td>@{{ item.obj[1000143] ? item.obj[1000143] : '' }}</td>
            <td>@{{ item.obj[1000144] ? item.obj[1000144] : '' }}</td>
            <td>@{{ item.obj[1000145] ? item.obj[1000145] : '' }}</td>
            <td>@{{ item.obj[1000146] ? item.obj[1000146] : '' }}</td>
            <td>@{{ item.obj[1000147] ? item.obj[1000147] : '' }}</td>
            <td>@{{ item.obj[1000148] ? item.obj[1000148] : '' }}</td>
            <td>@{{ item.obj[1000149] ? item.obj[1000149] : '' }}</td>
            <td>@{{ item.obj[1000150] ? item.obj[1000150] : '' }}</td>
            <td>@{{ item.obj[1000319] ? item.obj[1000319] : '' }}</td>
            <td>@{{ item.obj[1000320] ? item.obj[1000320] : '' }}</td>
            <td>@{{ item.obj[1000321] ? item.obj[1000321] : '' }}</td>
            <td>@{{ item.obj[1000322] ? item.obj[1000322] : '' }}</td>
            <td>@{{ item.obj[1000323] ? item.obj[1000323] : '' }}</td>
            <td>@{{ item.obj[1000324] ? item.obj[1000324] : '' }}</td>
            <td>@{{ item.obj[1000325] ? item.obj[1000325] : '' }}</td>
            <td>@{{ item.obj[1000326] ? item.obj[1000326] : '' }}</td>
            <td>@{{ item.obj[1000327] ? item.obj[1000327] : '' }}</td>
            <td>@{{ item.obj[1000328] ? item.obj[1000328] : '' }}</td>
            <td>@{{ item.obj[1000329] ? item.obj[1000329] : '' }}</td>
            <td>@{{ item.obj[1000330] ? item.obj[1000330] : '' }}</td>
            <td>@{{ item.obj[1000331] ? item.obj[1000331] : '' }}</td>
            <td>@{{ item.obj[1000332] ? item.obj[1000332] : '' }}</td>
            <td>@{{ item.obj[1000333] ? item.obj[1000333] : '' }}</td>
            <td>@{{ item.obj[1000334] ? item.obj[1000334] : '' }}</td>
            <td class="noborder"></td>
            <td class="noborder"></td>
            <td class="noborder"></td>
            <td class="noborder"></td>
            <td class="noborder"></td>
            <td class="noborder"></td>
            <td class="noborder"></td>
        </tr>
        <tr>
            <td colspan="36" style="border:none"></td>
        </tr>
        <tr style="text-align:center">
            <td colspan="5" class="noborder" rowspan="3">Urin &nbsp;</td>
            <td colspan="5" style="text-align:right;" class="noborder">Protein &nbsp;</td>
            <td>@{{ item.obj[1000151] ? item.obj[1000151] : '' }}</td>
            <td>@{{ item.obj[1000152] ? item.obj[1000152] : '' }}</td>
            <td>@{{ item.obj[1000153] ? item.obj[1000153] : '' }}</td>
            <td>@{{ item.obj[1000154] ? item.obj[1000154] : '' }}</td>
            <td>@{{ item.obj[1000155] ? item.obj[1000155] : '' }}</td>
            <td>@{{ item.obj[1000156] ? item.obj[1000156] : '' }}</td>
            <td>@{{ item.obj[1000157] ? item.obj[1000157] : '' }}</td>
            <td>@{{ item.obj[1000158] ? item.obj[1000158] : '' }}</td>
            <td>@{{ item.obj[1000159] ? item.obj[1000159] : '' }}</td>
            <td>@{{ item.obj[1000160] ? item.obj[1000160] : '' }}</td>
            <td>@{{ item.obj[1000161] ? item.obj[1000161] : '' }}</td>
            <td>@{{ item.obj[1000162] ? item.obj[1000162] : '' }}</td>
            <td>@{{ item.obj[1000163] ? item.obj[1000163] : '' }}</td>
            <td>@{{ item.obj[1000164] ? item.obj[1000164] : '' }}</td>
            <td>@{{ item.obj[1000165] ? item.obj[1000165] : '' }}</td>
            <td>@{{ item.obj[1000166] ? item.obj[1000166] : '' }}</td>
            <td>@{{ item.obj[1000335] ? item.obj[1000335] : '' }}</td>
            <td>@{{ item.obj[1000336] ? item.obj[1000336] : '' }}</td>
            <td>@{{ item.obj[1000337] ? item.obj[1000337] : '' }}</td>
            <td>@{{ item.obj[1000338] ? item.obj[1000338] : '' }}</td>
            <td>@{{ item.obj[1000339] ? item.obj[1000339] : '' }}</td>
            <td>@{{ item.obj[1000340] ? item.obj[1000340] : '' }}</td>
            <td>@{{ item.obj[1000341] ? item.obj[1000341] : '' }}</td>
            <td>@{{ item.obj[1000342] ? item.obj[1000342] : '' }}</td>
            <td>@{{ item.obj[1000343] ? item.obj[1000343] : '' }}</td>
            <td>@{{ item.obj[1000344] ? item.obj[1000344] : '' }}</td>
            <td>@{{ item.obj[1000345] ? item.obj[1000345] : '' }}</td>
            <td>@{{ item.obj[1000346] ? item.obj[1000346] : '' }}</td>
            <td>@{{ item.obj[1000347] ? item.obj[1000347] : '' }}</td>
            <td>@{{ item.obj[1000348] ? item.obj[1000348] : '' }}</td>
            <td>@{{ item.obj[1000349] ? item.obj[1000349] : '' }}</td>
            <td>@{{ item.obj[1000350] ? item.obj[1000350] : '' }}</td>
            <td class="noborder"></td>
            <td class="noborder"></td>
            <td class="noborder"></td>
            <td class="noborder"></td>
            <td class="noborder"></td>
            <td class="noborder"></td>
            <td class="noborder"></td>
        </tr>
        <tr style="text-align:center">
            <td colspan="5" style="text-align:right;" class="noborder">Aseton &nbsp;</td>
            <td>@{{ item.obj[1000167] ? item.obj[1000167] : '' }}</td>
            <td>@{{ item.obj[1000168] ? item.obj[1000168] : '' }}</td>
            <td>@{{ item.obj[1000169] ? item.obj[1000169] : '' }}</td>
            <td>@{{ item.obj[1000170] ? item.obj[1000170] : '' }}</td>
            <td>@{{ item.obj[1000171] ? item.obj[1000171] : '' }}</td>
            <td>@{{ item.obj[1000172] ? item.obj[1000172] : '' }}</td>
            <td>@{{ item.obj[1000173] ? item.obj[1000173] : '' }}</td>
            <td>@{{ item.obj[1000174] ? item.obj[1000174] : '' }}</td>
            <td>@{{ item.obj[1000175] ? item.obj[1000175] : '' }}</td>
            <td>@{{ item.obj[1000176] ? item.obj[1000176] : '' }}</td>
            <td>@{{ item.obj[1000177] ? item.obj[1000177] : '' }}</td>
            <td>@{{ item.obj[1000178] ? item.obj[1000178] : '' }}</td>
            <td>@{{ item.obj[1000179] ? item.obj[1000179] : '' }}</td>
            <td>@{{ item.obj[1000180] ? item.obj[1000180] : '' }}</td>
            <td>@{{ item.obj[1000181] ? item.obj[1000181] : '' }}</td>
            <td>@{{ item.obj[1000182] ? item.obj[1000182] : '' }}</td>
            <td>@{{ item.obj[1000351] ? item.obj[1000351] : '' }}</td>
            <td>@{{ item.obj[1000352] ? item.obj[1000352] : '' }}</td>
            <td>@{{ item.obj[1000353] ? item.obj[1000353] : '' }}</td>
            <td>@{{ item.obj[1000354] ? item.obj[1000354] : '' }}</td>
            <td>@{{ item.obj[1000355] ? item.obj[1000355] : '' }}</td>
            <td>@{{ item.obj[1000356] ? item.obj[1000356] : '' }}</td>
            <td>@{{ item.obj[1000357] ? item.obj[1000357] : '' }}</td>
            <td>@{{ item.obj[1000358] ? item.obj[1000358] : '' }}</td>
            <td>@{{ item.obj[1000359] ? item.obj[1000359] : '' }}</td>
            <td>@{{ item.obj[1000360] ? item.obj[1000360] : '' }}</td>
            <td>@{{ item.obj[1000361] ? item.obj[1000361] : '' }}</td>
            <td>@{{ item.obj[1000362] ? item.obj[1000362] : '' }}</td>
            <td>@{{ item.obj[1000363] ? item.obj[1000363] : '' }}</td>
            <td>@{{ item.obj[1000364] ? item.obj[1000364] : '' }}</td>
            <td>@{{ item.obj[1000365] ? item.obj[1000365] : '' }}</td>
            <td>@{{ item.obj[1000366] ? item.obj[1000366] : '' }}</td>
            <td class="noborder"></td>
            <td class="noborder"></td>
            <td class="noborder"></td>
            <td class="noborder"></td>
            <td class="noborder"></td>
            <td class="noborder"></td>
            <td class="noborder"></td>
        </tr>
        <tr style="text-align:center">
            <td colspan="5" style="text-align:right;" class="noborder">Volume &nbsp;</td>
            <td>@{{ item.obj[1000183] ? item.obj[1000183] : '' }}</td>
            <td>@{{ item.obj[1000184] ? item.obj[1000184] : '' }}</td>
            <td>@{{ item.obj[1000185] ? item.obj[1000185] : '' }}</td>
            <td>@{{ item.obj[1000186] ? item.obj[1000186] : '' }}</td>
            <td>@{{ item.obj[1000187] ? item.obj[1000187] : '' }}</td>
            <td>@{{ item.obj[1000188] ? item.obj[1000188] : '' }}</td>
            <td>@{{ item.obj[1000189] ? item.obj[1000189] : '' }}</td>
            <td>@{{ item.obj[1000190] ? item.obj[1000190] : '' }}</td>
            <td>@{{ item.obj[1000191] ? item.obj[1000191] : '' }}</td>
            <td>@{{ item.obj[1000192] ? item.obj[1000192] : '' }}</td>
            <td>@{{ item.obj[1000193] ? item.obj[1000193] : '' }}</td>
            <td>@{{ item.obj[1000194] ? item.obj[1000194] : '' }}</td>
            <td>@{{ item.obj[1000195] ? item.obj[1000195] : '' }}</td>
            <td>@{{ item.obj[1000196] ? item.obj[1000196] : '' }}</td>
            <td>@{{ item.obj[1000197] ? item.obj[1000197] : '' }}</td>
            <td>@{{ item.obj[1000198] ? item.obj[1000198] : '' }}</td>
            <td>@{{ item.obj[1000367] ? item.obj[1000367] : '' }}</td>
            <td>@{{ item.obj[1000368] ? item.obj[1000368] : '' }}</td>
            <td>@{{ item.obj[1000369] ? item.obj[1000369] : '' }}</td>
            <td>@{{ item.obj[1000370] ? item.obj[1000370] : '' }}</td>
            <td>@{{ item.obj[1000371] ? item.obj[1000371] : '' }}</td>
            <td>@{{ item.obj[1000372] ? item.obj[1000372] : '' }}</td>
            <td>@{{ item.obj[1000373] ? item.obj[1000373] : '' }}</td>
            <td>@{{ item.obj[1000374] ? item.obj[1000374] : '' }}</td>
            <td>@{{ item.obj[1000375] ? item.obj[1000375] : '' }}</td>
            <td>@{{ item.obj[1000376] ? item.obj[1000376] : '' }}</td>
            <td>@{{ item.obj[1000377] ? item.obj[1000377] : '' }}</td>
            <td>@{{ item.obj[1000378] ? item.obj[1000378] : '' }}</td>
            <td>@{{ item.obj[1000379] ? item.obj[1000379] : '' }}</td>
            <td>@{{ item.obj[1000380] ? item.obj[1000380] : '' }}</td>
            <td>@{{ item.obj[1000381] ? item.obj[1000381] : '' }}</td>
            <td>@{{ item.obj[1000382] ? item.obj[1000382] : '' }}</td>
            <td class="noborder"></td>
            <td class="noborder"></td>
            <td class="noborder"></td>
            <td class="noborder"></td>
            <td class="noborder"></td>
            <td class="noborder"></td>
            <td class="noborder"></td>
        </tr>
        <tr style="height:5pt"></tr>
        <!-- next page  -->
        <tr style="border-top:1px solid #000">
            <td colspan="24" class="noborder bg-dark-small">Catatan Persalinan</td>
            <td class="noborder">24.</td>
            <td colspan="24" class="noborder">Masase fundus uteri?</td>
        </tr>
        <tr>
            <td class="noborder ">1.</td>
            <td colspan="3" class="noborder ">Tanggal </td>
            <td colspan="20" class="noborder ">: @{{item.obj[1000415] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
            <td class="noborder" colspan="25">@{{ item.obj[1000486] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ya</td>
        </tr>
        <tr>
            <td class="noborder">2.</td>
            <td colspan="3" class="noborder">Nama Bidan </td>
            <td class="noborder" colspan="20">: @{{ item.obj[1000416] ? item.obj[1000416] : '' }}</td>
            <td class="noborder" colspan="25">@{{ item.obj[1000487] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak,
                Alasan : @{{ item.obj[1000488] ? item.obj[1000488] : '' }}</td>

        </tr>
        <tr>
            <td class="noborder" rowspan="4" valign="top">3.</td>
            <td colspan="5" class="noborder">Tempat Persalinan </td>
            <td class="noborder" colspan="18">: </td>
            <td class="noborder">25</td>
            <td colspan="24" class="noborder">Plasenta lahir lengkap (intact) : @{{ item.obj[1000490] ? '[&#10004;]' :
                '[&nbsp;&nbsp;&nbsp;]' }} Ya / @{{ item.obj[1000491] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak
            </td>
        </tr>
        <tr class="noborder">
            <td colspan="12" class="noborder">
                @{{ item.obj[1000418] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Rumah Ibu
            </td>
            <td colspan="11" class="noborder">
                @{{ item.obj[1000419] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Puskesmas
            </td>
            <td class="noborder"></td>
            <td colspan="24" class="noborder">
                @{{ item.obj[1000492] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Jika tidak lengkap, tindakan yang
                dilakukan : @{{ item.obj[1000493] ? item.obj[1000493] : '' }}
            </td>
        </tr>
        <tr>
            <td colspan="12" class="noborder">
                @{{ item.obj[1000420] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Polindes
            </td>
            <td colspan="11" class="noborder">
                @{{ item.obj[1000421] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Rumah Sakit
            </td>
            <td class="noborder" colspan="2"></td>
            <td colspan="23" class="noborder">
                a. @{{ item.obj[1000493] ? item.obj[1000493] : '' }}
            </td>
        </tr>
        <tr>
            <td colspan="12" class="noborder">
                @{{ item.obj[1000422] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Klinik Swasta
            </td>
            <td colspan="11" class="noborder">
                @{{ item.obj[1000423] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Lainnya : @{{ item.obj[1000424] ?
                item.obj[1000424] : '' }}
            </td>
            <td class="noborder" colspan="2"></td>
            <td colspan="23" class="noborder">
                b. @{{ item.obj[1000494] ? item.obj[1000494] : '' }}
            </td>
        </tr>
        <tr>
            <td class="noborder">4.</td>
            <td colspan="5" class="noborder">Alamat Persalinan</td>
            <td colspan="18" class="noborder">: @{{ item.obj[1000425] ? item.obj[1000425] : '' }}</td>
            <td class="noborder">26</td>
            <td colspan="24" class="noborder">Plasenta tidak lahir > 30 menit : @{{ item.obj[1000496] ? '[&#10004;]' :
                '[&nbsp;&nbsp;&nbsp;]' }} Ya / @{{ item.obj[1000497] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak
            </td>
        </tr>
        <tr>
            <td class="noborder">5.</td>
            <td colspan="3" class="noborder">Catatan </td>
            <td colspan="20" class="noborder">: @{{ item.obj[1000427] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Rujuk,
                kala : @{{ item.obj[1000428] ? item.obj[1000428] : '' }}</td>
            <td class="noborder" colspan="12"> Tindakan :</td>
        </tr>
        <tr>
            <td class="noborder">6.</td>
            <td colspan="5" class="noborder">Alasan merujuk </td>
            <td colspan="18" class="noborder">: @{{ item.obj[1000429] ? item.obj[1000429] : '' }}</td>
            <td class="noborder" colspan="2"></td>
            <td colspan="23" class="noborder">
                a. @{{ item.obj[1000499] ? item.obj[1000499] : '' }}
            </td>
        </tr>
        <tr>
            <td class="noborder">7.</td>
            <td colspan="5" class="noborder">Tempat rujukan </td>
            <td colspan="18" class="noborder">: @{{ item.obj[1000430] ? item.obj[1000430] : '' }}</td>
            <td class="noborder" colspan="2"></td>
            <td colspan="23" class="noborder">
                b. @{{ item.obj[1000500] ? item.obj[1000500] : '' }}
            </td>
        </tr>
        <tr>
            <td class="noborder" rowspan="4" valign="top">8.</td>
            <td colspan="9" class="noborder">Pendamping pada saat persalinan</td>
            <td colspan="14" class="noborder">: </td>
            <td class="noborder">27</td>
            <td colspan="24" class="noborder">Laserasi</td>
        </tr>
        <tr>
            <td colspan="12" class="noborder">
                @{{ item.obj[1000432] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Bidan
            </td>
            <td colspan="11" class="noborder">
                @{{ item.obj[1000435] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Teman
            </td>
            <td colspan="25" class="noborder">
                @{{ item.obj[1000502] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ya, Dimana : @{{ item.obj[1000503] ?
                item.obj[1000503] : '' }}
            </td>
        </tr>
        <tr>
            <td colspan="12" class="noborder">
                @{{ item.obj[1000433] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Suami
            </td>
            <td colspan="11" class="noborder">
                @{{ item.obj[1000436] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dukun
            </td>
            <td colspan="25" class="noborder">
                @{{ item.obj[1000504] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak
            </td>
        </tr>
        <tr>
            <td colspan="12" class="noborder">
                @{{ item.obj[1000434] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Keluarga
            </td>
            <td colspan="11" class="noborder">
                @{{ item.obj[1000437] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak ada
            </td>
            <td class="noborder">28.</td>
            <td colspan="24" class="noborder">
                Jika laserasi perineum, derajat : @{{ item.obj[1000505] ? item.obj[1000505] : '' }}
            </td>
        </tr>
        <tr>
            <td colspan="24" class="noborder"></td>
            <td class="noborder"></td>
            <td colspan="24" class="noborder">Tindakan :</td>
        </tr>
        <tr class="noborder">
            <td colspan="24" class="bg-dark-small">KALA I</td>
            <td class="noborder"></td>
            <td colspan="24" class="noborder">
                @{{ item.obj[1000507] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Penjahitan dengan / tanpa anestesi
            </td>
        </tr>
        <tr class="noborder">
            <td class="noborder">9</td>
            <td colspan="23" class="noborder">Partograf melewati garis waspada : @{{ item.obj[1000439] ? '[&#10004;]' :
                '[&nbsp;&nbsp;&nbsp;]' }} Ya @{{ item.obj[1000440] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak</td>
            <td class="noborder"></td>
            <td colspan="24" class="noborder">
                @{{ item.obj[1000508] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak ada Jahit, Alasan : @{{
                item.obj[1000509] ? item.obj[1000509] : '' }}
            </td>
        </tr>
        <tr class="noborder">
            <td class="noborder">10</td>
            <td colspan="6" class="noborder">Masalah lain, sebutkan </td>
            <td colspan="17" class="noborder">: @{{ item.obj[1000441] ? item.obj[1000441] : '' }}</td>
            <td class="noborder">29.</td>
            <td colspan="24" class="noborder">
                Atonia uteri :
            </td>
        </tr>
        <tr class="noborder">
            <td class="noborder"></td>
            <td class="noborder" colspan="23"></td>
            <td colspan="25" class="noborder">
                @{{ item.obj[1000511] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ya, tindakan :
            </td>
        </tr>
        <tr class="noborder">
            <td class="noborder">11.</td>
            <td colspan="7" class="noborder">Penatalaksanaan masalah tsb</td>
            <td colspan="16" class="noborder">: @{{ item.obj[1000442] ? item.obj[1000442] : '' }}</td>
            <td class="noborder" colspan="2"></td>
            <td colspan="23" class="noborder">
                a. @{{ item.obj[1000512] ? item.obj[1000512] : '' }}
            </td>
        </tr>
        <tr class="noborder">
            <td class="noborder"></td>
            <td class="noborder" colspan="23"></td>
            <td class="noborder" colspan="2"></td>
            <td colspan="23" class="noborder">
                b. @{{ item.obj[1000513] ? item.obj[1000513] : '' }}
            </td>
        </tr>
        <tr class="noborder">
            <td class="noborder">12.</td>
            <td class="noborder" colspan="3">Hasilnya</td>
            <td class="noborder" colspan="20">: @{{ item.obj[1000443] ? item.obj[1000443] : '' }}</td>
            <td class="noborder" colspan="2"></td>
            <td class="noborder" colspan="23">
                c. @{{ item.obj[1000514] ? item.obj[1000514] : '' }}
            </td>
        </tr>
        <tr class="noborder">
            <td colspan="24" class="noborder"></td>
            <td colspan="25" class="noborder">
                @{{ item.obj[1000515] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak
            </td>
        </tr>
        <tr class="noborder">
            <td colspan="24" class="noborder bg-dark-small">KALA II</td>
            <td class="noborder">30</td>
            <td class="noborder" colspan="7" class="border-tb">
                Jumlah perdarahan
            </td>
            <td class="noborder" colspan="13">@{{ item.obj[1000516] ? item.obj[1000516] : '...' }}</td>
            <td class="noborder" colspan="4">ml</td>
        </tr>
        <tr>
            <td class="noborder">13.</td>
            <td class="noborder" colspan="23">Episiotomi</td>
            <td class="noborder">31.</td>
            <td class="noborder" colspan="7">Masalah lain, sebutkan</td>
            <td class="noborder" colspan="17">: @{{ item.obj[1000517] ? item.obj[1000517] : '' }}</td>
        </tr>
        <tr class="noborder">
            <td class="noborder"></td>
            <td class="noborder" colspan="23">
                @{{ item.obj[1000445] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ya, indikasi: @{{ item.obj[1000446] ?
                item.obj[1000446] : '' }}
            </td>
            <td class="noborder">32</td>
            <td class="noborder" colspan="9">Penatalaksanaan masalah tersebut</td>
            <td class="noborder" colspan="15">@{{ item.obj[1000518] ? item.obj[1000518] : '' }}</td>

        </tr>
        <tr>
            <td class="noborder"></td>
            <td class="noborder" colspan="23">
                @{{ item.obj[1000447] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak
            </td>
            <td class="noborder"></td>
            <td class="noborder" colspan="24"></td>

        </tr>
        <tr>
            <td class="noborder">14.</td>
            <td class="noborder" colspan="23">Pendamping pada saat persalinan :</td>
            <td class="noborder">33.</td>
            <td class="noborder" colspan="3">Hasilnya</td>
            <td class="noborder" colspan="21">: @{{ item.obj[1000519] ? item.obj[1000519] : '' }}</td>
        </tr>
        <tr>
            <td class="noborder"></td>
            <td class="noborder" colspan="8">
                @{{ item.obj[1000449] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Suami
            </td>
            <td class="noborder" colspan="8">
                @{{ item.obj[1000451] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Teman
            </td>
            <td class="noborder" colspan="32">
                @{{ item.obj[1000453] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak Ada
            </td>
        </tr>
        <tr>
            <td class="noborder"></td>
            <td class="noborder" colspan="8">
                @{{ item.obj[1000450] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Keluarga
            </td>
            <td class="noborder" colspan="40">
                @{{ item.obj[1000452] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dukun
            </td>
        </tr>
        <tr class="noborder">
            <td class="noborder">15.</td>
            <td class="noborder" colspan="48">Gawat janin :</td>
        </tr>
        <tr class="noborder">
            <td class="noborder"></td>
            <td class="noborder" colspan="23">
                @{{ item.obj[1000455] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ya, tindakan yang dilakukan :
            </td>
            <td colspan="25" class="bg-dark-small">BAYI BARU LAHIR</td>
        </tr>
        <tr class="noborder">
            <td class="noborder"></td>
            <td class="noborder"></td>
            <td class="noborder" colspan="22">
                a. @{{ item.obj[1000456] ? item.obj[1000456] : '' }}
            </td>
            <td class="noborder">34.</td>
            <td class="noborder" colspan="4">Berat badan</td>
            <td class="noborder" colspan="14">@{{ item.obj[1000520] ? item.obj[1000520] : '' }}</td>
            <td class="noborder" colspan="6">gram</td>
        </tr>
        <tr class="noborder">
            <td class="noborder"></td>
            <td class="noborder"></td>
            <td class="noborder" colspan="22">
                b. @{{ item.obj[1000457] ? item.obj[1000457] : '' }}
            </td>
            <td class="noborder">35.</td>
            <td class="noborder" colspan="4">Panjang</td>
            <td class="noborder" colspan="14">@{{ item.obj[1000521] ? item.obj[1000521] : '' }}</td>
            <td class="noborder" colspan="6">cm</td>
        </tr>
        <tr class="noborder">
            <td class="noborder"></td>
            <td class="noborder"></td>
            <td class="noborder" colspan="22">
                c. @{{ item.obj[1000458] ? item.obj[1000458] : '' }}
            </td>
            <td class="noborder">36.</td>
            <td class="noborder" colspan="4">Jenis Kelamin</td>
            <td class="noborder" colspan="20">: @{{ item.obj[1000523] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} L/ @{{
                item.obj[1000524] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} P</td>
        </tr>
        <tr class="noborder">
            <td class="noborder"></td>
            <td class="noborder" colspan="23">
                @{{ item.obj[1000459] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak
            </td>
            <td class="noborder">37.</td>
            <td class="noborder" colspan="24">Penilaian bayi baru lahir : @{{ item.obj[1000526] ? '[&#10004;]' :
                '[&nbsp;&nbsp;&nbsp;]' }} baik / @{{ item.obj[1000527] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ada
                penyulit</td>
        </tr>
        <tr class="noborder">
            <td class="noborder"></td>
            <td class="noborder" colspan="23">
                @{{ item.obj[1000460] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Pemantauan DJJ setiap 5-10 menit selama
                kala II, hasil :
            </td>
            <td class="noborder">38.</td>
            <td class="noborder" colspan="24">Bayi lahir :</td>
        </tr>
        <tr class="noborder">
            <td class="noborder">16.</td>
            <td class="noborder" colspan="23">
                Distosia bahu :
            </td>
            <td class="noborder"></td>
            <td class="noborder" colspan="24">
                @{{ item.obj[1000529] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Normal, Tindakan
            </td>
        </tr>
        <tr class="noborder">
            <td class="noborder"></td>
            <td class="noborder" colspan="23">
                @{{ item.obj[1000463] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ya, tindakan yang dilakukan :
            </td>
            <td class="noborder"></td>
            <td class="noborder"></td>
            <td class="noborder" colspan="23">
                @{{ item.obj[1000530] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Mengeringkan
            </td>
        </tr>
        <tr class="noborder">
            <td class="noborder"></td>
            <td class="noborder"></td>
            <td class="noborder" colspan="22">a.
                @{{ item.obj[1000464] ? item.obj[1000464] : '' }}
            </td>
            <td class="noborder"></td>
            <td class="noborder"></td>
            <td class="noborder" colspan="23">
                @{{ item.obj[1000531] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Menghangatkan
            </td>
        </tr>
        <tr class="noborder">
            <td class="noborder"></td>
            <td class="noborder"></td>
            <td class="noborder" colspan="22">b.
                @{{ item.obj[1000465] ? item.obj[1000465] : '' }}
            </td>
            <td class="noborder"></td>
            <td class="noborder"></td>
            <td class="noborder" colspan="23">
                @{{ item.obj[1000532] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Rangsang taktil
            </td>
        </tr>
        <tr class="noborder">
            <td class="noborder"></td>
            <td class="noborder"></td>
            <td class="noborder" colspan="22">c.
                @{{ item.obj[1000466] ? item.obj[1000466] : '' }}
            </td>
            <td class="noborder"></td>
            <td class="noborder"></td>
            <td class="noborder" colspan="23">
                @{{ item.obj[1000533] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Bungkus bayi dan tempatkan disisi ibu
            </td>
        </tr>
        <tr class="noborder">
            <td class="noborder"></td>
            <td class="noborder" colspan="23">
                @{{ item.obj[1000467] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak
            </td>
            <td class="noborder"></td>
            <td class="noborder" colspan="24">
                @{{ item.obj[1000534] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Asfiksia ringan / pucat / biru / lemas,
                tindakan :
            </td>
        </tr>
        <tr class="noborder">
            <td class="noborder">17.</td>
            <td class="noborder" colspan="23">
                Masalah lain, sebutkan : @{{ item.obj[1000468] ? item.obj[1000468] : '' }}
            </td>
            <td class="noborder"></td>
            <td class="noborder" colspan="12">
                @{{ item.obj[1000535] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Mengeringkan
            </td>
            <td class="noborder" colspan="12">
                @{{ item.obj[1000538] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Menghangatkan
            </td>
        </tr>
        <tr class="noborder">
            <td class="noborder">18.</td>
            <td class="noborder" colspan="23">
                Penatalaksanaan masalah tersebut :
            </td>
            <td class="noborder"></td>
            <td class="noborder" colspan="12">
                @{{ item.obj[1000536] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Rangsang taktil
            </td>
            <td class="noborder" colspan="12">
                @{{ item.obj[1000539] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Lain-lain, sebutkan :
            </td>
        </tr>
        <tr class="noborder">
            <td class="noborder"></td>
            <td class="noborder" colspan="23">@{{ item.obj[1000469] ? item.obj[1000469] : '' }}</td>
            <td class="noborder"></td>
            <td class="noborder" colspan="24">
                @{{ item.obj[1000537] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Bungkus bayinya dan
            </td>
        </tr>
        <tr class="noborder">
            <td class="noborder">19.</td>
            <td class="noborder" colspan="23">Hasilnya : @{{ item.obj[1000470] ? item.obj[1000470] : '' }}</td>
            <td class="noborder"></td>
            <td class="noborder" colspan="24">
                tempatkan disisi ibu
            </td>
        </tr>
        <tr class="noborder">
            <td class="noborder" colspan="24"></td>
            <td class="noborder"></td>
            <td class="noborder" colspan="24">

            </td>
        </tr>
        <tr class="noborder">
            <td class="bg-dark-small" colspan="24">KALA III</td>
            <td class="noborder"></td>
            <td class="noborder" colspan="24">
                @{{ item.obj[1000541] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Cacat bawaan, sebutkan : @{{
                item.obj[1000542] ? item.obj[1000542] : '' }}
            </td>
        </tr>
        <tr class="noborder">
            <td class="noborder">20.</td>
            <td class="noborder" colspan="6">Lama Kala III</td>
            <td class="noborder" colspan="7">@{{ item.obj[1000471] ? item.obj[1000471] : '...' }}</td>
            <td class="noborder" colspan="10">menit</td>
            <td class="noborder"></td>
            <td class="noborder" colspan="24">
                @{{ item.obj[1000543] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Hipotermia, tindakan :
            </td>
        </tr>
        <tr class="noborder">
            <td class="noborder">21.</td>
            <td class="noborder" colspan="23">Pemberian Oksitosin 10 U IM?</td>

            <td class="noborder" colspan="2"></td>
            <td class="noborder" colspan="23">
                a. @{{ item.obj[1000544] ? item.obj[1000544] : '' }}
            </td>
        </tr>
        <tr class="noborder">
            <td class="noborder"></td>
            <td class="noborder" colspan="4">
                @{{ item.obj[1000473] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ya, Waktu:
            </td>
            <td class="noborder" colspan="12">
                @{{ item.obj[1000474] ? item.obj[1000474] : '...' }}
            </td>
            <td class="noborder" colspan="7">
                menit sesudah persalinan
            </td>
            <td class="noborder" colspan="2"></td>
            <td colspan="23" class="noborder">
                b. @{{ item.obj[1000545] ? item.obj[1000545] : '' }}
            </td>
        </tr>
        <tr class="noborder">
            <td class="noborder"></td>
            <td class="noborder" colspan="5">
                @{{ item.obj[1000475] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak, Alasan:
            </td>
            <td class="noborder" colspan="18">
                : @{{ item.obj[1000476] ? item.obj[1000476] : '' }}
            </td>

            <td colspan="2" class="noborder"></td>
            <td colspan="23" class="noborder">
                c. @{{ item.obj[1000546] ? item.obj[1000546] : '' }}
            </td>
        </tr>
        <tr class="noborder">
            <td class="noborder">22.</td>
            <td class="noborder" colspan="23">
                Pemberian ulang Oksitosin (2x)?
            </td>
            <td class="noborder" colspan="">39</td>
            <td class="noborder" colspan="24">
                Pemberian ASI
            </td>
        </tr>
        <tr class="noborder">
            <td class="noborder"></td>
            <td class="noborder" colspan="5">
                @{{ item.obj[1000478] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ya, Alasan :
            </td>
            <td class="noborder" colspan="18">
                @{{ item.obj[1000479] ? item.obj[1000479] : '' }}
            </td>
            <td class="noborder" colspan="5">
                @{{ item.obj[1000548] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ya, Waktu :
            </td>
            <td class="noborder" colspan="11">
                @{{ item.obj[1000549] ? item.obj[1000549] : '' }}
            </td>
            <td class="noborder" colspan="9">jam setelah bayi lahir</td>
        </tr>
        <tr class="noborder">
            <td class="noborder"></td>
            <td class="noborder" colspan="23">
                @{{ item.obj[1000480] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak
            </td>
            <td class="noborder" colspan="5">
                @{{ item.obj[1000550] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak, Alasan
            </td>
            <td class="noborder" colspan="20">
                @{{ item.obj[1000551] ? item.obj[1000551] : '' }}
            </td>
        </tr>
        <tr class="noborder">
            <td class="noborder">23</td>
            <td class="noborder" colspan="23">
                Penegangan tali pusat terkendali?
            </td>
            <td class="noborder">40</td>
            <td class="noborder" colspan="6">
                Masalah lain, sebutkan
            </td>
            <td class="noborder" colspan="18">
                : @{{ item.obj[1000552] ? item.obj[1000552] : '' }}
            </td>
        </tr>
        <tr class="noborder">
            <td class="noborder">23</td>
            <td class="noborder" colspan="23">
                @{{ item.obj[1000482] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ya
            </td>
            <td class="noborder"></td>
            <td class="noborder" colspan="3">Hasilnya :</td>
            <td class="noborder" colspan="21">
                @{{ item.obj[1000553] ? item.obj[1000553] : '' }}
            </td>
        </tr>
        <tr class="noborder">
            <td class="noborder"></td>
            <td class="noborder" colspan="48">
                @{{ item.obj[1000483] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak, Alasan : @{{ item.obj[1000484] ?
                item.obj[1000484] : '' }}
            </td>
        </tr>

        <tr style="border:1px solid #000;text-align:center;">
            <td colspan="5">Jam Ke</td>
            <td colspan="5">Waktu</td>
            <td colspan="5">Tekanan Darah</td>
            <td colspan="5">Nadi</td>
            <td colspan="5">Suhu</td>
            <td colspan="5">Tinggi Fundus Uteri</td>
            <td colspan="5">Kontraksi Uterus</td>
            <td colspan="5">Kandung Kemih</td>
            <td colspan="9">Perdarahan</td>
        </tr>
        <tr style="height:10pt">
            <td colspan="5" style="text-align: center">@{{ item.obj[1000555] ? item.obj[1000555] : '' }}</td>
            <td colspan="5" style="text-align: center">@{{ item.obj[1000556] ? item.obj[1000556] : '' }}</td>
            <td colspan="5" style="text-align: center">@{{ item.obj[1000557] ? item.obj[1000557] : '' }}</td>
            <td colspan="5" style="text-align: center">@{{ item.obj[1000558] ? item.obj[1000558] : '' }}</td>
            <td colspan="5" style="text-align: center">@{{ item.obj[1000559] ? item.obj[1000559] : '' }}</td>
            <td colspan="5" style="text-align: center">@{{ item.obj[1000560] ? item.obj[1000560] : '' }}</td>
            <td colspan="5" style="text-align: center">@{{ item.obj[1000561] ? item.obj[1000561] : '' }}</td>
            <td colspan="5" style="text-align: center">@{{ item.obj[1000562] ? item.obj[1000562] : '' }}</td>
            <td colspan="9" style="text-align: center">@{{ item.obj[1000563] ? item.obj[1000563] : '' }}</td>
        </tr>
        <tr style="height:10pt">
            <td colspan="5" style="text-align: center">@{{ item.obj[1000564] ? item.obj[1000564] : '' }}</td>
            <td colspan="5" style="text-align: center">@{{ item.obj[1000565] ? item.obj[1000565] : '' }}</td>
            <td colspan="5" style="text-align: center">@{{ item.obj[1000566] ? item.obj[1000566] : '' }}</td>
            <td colspan="5" style="text-align: center">@{{ item.obj[1000567] ? item.obj[1000567] : '' }}</td>
            <td colspan="5" style="text-align: center">@{{ item.obj[1000568] ? item.obj[1000568] : '' }}</td>
            <td colspan="5" style="text-align: center">@{{ item.obj[1000569] ? item.obj[1000569] : '' }}</td>
            <td colspan="5" style="text-align: center">@{{ item.obj[1000570] ? item.obj[1000570] : '' }}</td>
            <td colspan="5" style="text-align: center">@{{ item.obj[1000571] ? item.obj[1000571] : '' }}</td>
            <td colspan="9" style="text-align: center">@{{ item.obj[1000572] ? item.obj[1000572] : '' }}</td>
        </tr>
        <tr style="height:10pt">
            <td colspan="5" style="text-align: center">@{{ item.obj[1000573] ? item.obj[1000573] : '' }}</td>
            <td colspan="5" style="text-align: center">@{{ item.obj[1000574] ? item.obj[1000574] : '' }}</td>
            <td colspan="5" style="text-align: center">@{{ item.obj[1000575] ? item.obj[1000575] : '' }}</td>
            <td colspan="5" style="text-align: center">@{{ item.obj[1000576] ? item.obj[1000576] : '' }}</td>
            <td colspan="5" style="text-align: center">@{{ item.obj[1000577] ? item.obj[1000577] : '' }}</td>
            <td colspan="5" style="text-align: center">@{{ item.obj[1000578] ? item.obj[1000578] : '' }}</td>
            <td colspan="5" style="text-align: center">@{{ item.obj[1000579] ? item.obj[1000579] : '' }}</td>
            <td colspan="5" style="text-align: center">@{{ item.obj[1000580] ? item.obj[1000580] : '' }}</td>
            <td colspan="9" style="text-align: center">@{{ item.obj[1000581] ? item.obj[1000581] : '' }}</td>
        </tr>
        <tr style="height:10pt">
            <td colspan="5" style="text-align: center">@{{ item.obj[1000582] ? item.obj[1000582] : '' }}</td>
            <td colspan="5" style="text-align: center">@{{ item.obj[1000583] ? item.obj[1000583] : '' }}</td>
            <td colspan="5" style="text-align: center">@{{ item.obj[1000584] ? item.obj[1000584] : '' }}</td>
            <td colspan="5" style="text-align: center">@{{ item.obj[1000585] ? item.obj[1000585] : '' }}</td>
            <td colspan="5" style="text-align: center">@{{ item.obj[1000586] ? item.obj[1000586] : '' }}</td>
            <td colspan="5" style="text-align: center">@{{ item.obj[1000587] ? item.obj[1000587] : '' }}</td>
            <td colspan="5" style="text-align: center">@{{ item.obj[1000588] ? item.obj[1000588] : '' }}</td>
            <td colspan="5" style="text-align: center">@{{ item.obj[1000589] ? item.obj[1000589] : '' }}</td>
            <td colspan="9" style="text-align: center">@{{ item.obj[1000590] ? item.obj[1000590] : '' }}</td>
        </tr>
        <tr style="height:10pt">
            <td colspan="5" style="text-align: center">@{{ item.obj[1000591] ? item.obj[1000591] : '' }}</td>
            <td colspan="5" style="text-align: center">@{{ item.obj[1000592] ? item.obj[1000592] : '' }}</td>
            <td colspan="5" style="text-align: center">@{{ item.obj[1000593] ? item.obj[1000593] : '' }}</td>
            <td colspan="5" style="text-align: center">@{{ item.obj[1000594] ? item.obj[1000594] : '' }}</td>
            <td colspan="5" style="text-align: center">@{{ item.obj[1000595] ? item.obj[1000595] : '' }}</td>
            <td colspan="5" style="text-align: center">@{{ item.obj[1000596] ? item.obj[1000596] : '' }}</td>
            <td colspan="5" style="text-align: center">@{{ item.obj[1000597] ? item.obj[1000597] : '' }}</td>
            <td colspan="5" style="text-align: center">@{{ item.obj[1000598] ? item.obj[1000598] : '' }}</td>
            <td colspan="9" style="text-align: center">@{{ item.obj[1000599] ? item.obj[1000599] : '' }}</td>
        </tr>
        <tr style="height:10pt">
            <td colspan="5" style="text-align: center">@{{ item.obj[1000600] ? item.obj[1000600] : '' }}</td>
            <td colspan="5" style="text-align: center">@{{ item.obj[1000601] ? item.obj[1000601] : '' }}</td>
            <td colspan="5" style="text-align: center">@{{ item.obj[1000602] ? item.obj[1000602] : '' }}</td>
            <td colspan="5" style="text-align: center">@{{ item.obj[1000603] ? item.obj[1000603] : '' }}</td>
            <td colspan="5" style="text-align: center">@{{ item.obj[1000604] ? item.obj[1000604] : '' }}</td>
            <td colspan="5" style="text-align: center">@{{ item.obj[1000605] ? item.obj[1000605] : '' }}</td>
            <td colspan="5" style="text-align: center">@{{ item.obj[1000606] ? item.obj[1000606] : '' }}</td>
            <td colspan="5" style="text-align: center">@{{ item.obj[1000607] ? item.obj[1000607] : '' }}</td>
            <td colspan="9" style="text-align: center">@{{ item.obj[1000608] ? item.obj[1000608] : '' }}</td>
        </tr>
    </table>
</body>
<script type="text/javascript">
    var baseUrl =
        {!! json_encode(url('/'))!!}
    var angular = angular.module('angularApp', [], function ($interpolateProvider) {
        $interpolateProvider.startSymbol('@{{');
        $interpolateProvider.endSymbol('}}');
    }).factory('httpService', function ($http, $q) {
        return {
            get: function (url) {
                // $("#showLoading").show()
                var deffer = $q.defer();
                $http.get(baseUrl + '/' + url, {
                    headers: {
                        'Content-Type': 'application/json',
                    }
                }).then(function successCallback(response) {
                    deffer.resolve(response);
                    // $("#showLoading").hide()
                }, function errorCallback(response) {
                    deffer.reject(response);
                    // $("#showLoading").hide()
                });
                return deffer.promise;
            },
        }
    })

    angular.controller('cetakPartograf', function ($scope, $http, httpService) {
        $scope.item = {
            obj: [],
            obj2: []
        }
        var dataLoad = {!! json_encode($res['d'])!!
    };
    for (var i = 0; i <= dataLoad.length - 1; i++) {
        if (dataLoad[i].emrdfk == 3110029) {
            continue;
        }
        if (dataLoad[i].type == "textbox") {
            $('#id_' + dataLoad[i].emrdfk).html(dataLoad[i].value)
            $scope.item.obj[dataLoad[i].emrdfk] = dataLoad[i].value
        }
        if (dataLoad[i].type == "checkbox") {
            var chekedd = false
            if (dataLoad[i].value == '1') {
                var chekedd = true
            }
            $scope.item.obj[dataLoad[i].emrdfk] = chekedd
        }
        if (dataLoad[i].type == "radio") {
            $scope.item.obj[dataLoad[i].emrdfk] = dataLoad[i].value

        }

        if (dataLoad[i].type == "datetime") {
            $('#id_' + dataLoad[i].emrdfk).html(dataLoad[i].value)
            $scope.item.obj[dataLoad[i].emrdfk] = dataLoad[i].value
        }
        if (dataLoad[i].type == "time") {
            $scope.item.obj[dataLoad[i].emrdfk] = dataLoad[i].value
        }
        if (dataLoad[i].type == "date") {
            $scope.item.obj[dataLoad[i].emrdfk] = dataLoad[i].value
        }

        if (dataLoad[i].type == "checkboxtextbox") {
            $scope.item.obj[dataLoad[i].emrdfk] = dataLoad[i].value
            $scope.item.obj2[dataLoad[i].emrdfk] = true
        }
        if (dataLoad[i].type == "textarea") {
            $('#id_' + dataLoad[i].emrdfk).html(dataLoad[i].value)
            $scope.item.obj[dataLoad[i].emrdfk] = dataLoad[i].value
        }
        if (dataLoad[i].type == "combobox") {

            var str = dataLoad[i].value
            if (str != null) {
                var res = str.split("~");

                $scope.item.obj[dataLoad[i].emrdfk] = res[1]
                $('#id_' + dataLoad[i].emrdfk).html(res[1])
            }
        }
        if (dataLoad[i].type == "combobox2") {
            var str = dataLoad[i].value
            var res = str.split("~");

            $scope.item.obj[dataLoad[i].emrdfk + "" + 1] = res[0]
            $scope.item.obj[dataLoad[i].emrdfk] = res[1]
            $('#id_' + dataLoad[i].emrdfk).html(res[1])

        }

        if (dataLoad[i].emrdfk == '423816') {
            $scope.hariTgl = dataLoad[i].value
        }

        if (dataLoad[i].emrdfk == '2000001974') {
            $scope.jamPeriksa = dataLoad[i].value
        }

        if (dataLoad[i].emrdfk == '2000002354') {
            $scope.tgl1 = dataLoad[i].value
        }
        if (dataLoad[i].emrdfk == '2000002357') {
            $scope.tgl2 = dataLoad[i].value
        }
        if (dataLoad[i].emrdfk == '2000002360') {
            $scope.tgl3 = dataLoad[i].value
        }
        if (dataLoad[i].emrdfk == '2000002363') {
            $scope.tgl4 = dataLoad[i].value
        }
        if (dataLoad[i].emrdfk == '2000002366') {
            $scope.tgl5 = dataLoad[i].value
        }
        if (dataLoad[i].emrdfk == '2000002369') {
            $scope.tgl6 = dataLoad[i].value
        }
        if (dataLoad[i].emrdfk == '2000002372') {
            $scope.tgl7 = dataLoad[i].value
        }
        if (dataLoad[i].emrdfk == '2000002375') {
            $scope.tgl8 = dataLoad[i].value
        }
        if (dataLoad[i].emrdfk == '2000002378') {
            $scope.tgl9 = dataLoad[i].value
        }
        if (dataLoad[i].emrdfk == '2000002381') {
            $scope.tgl10 = dataLoad[i].value
        }
        if (dataLoad[i].emrdfk == '2000002384') {
            $scope.tgl11 = dataLoad[i].value
        }
        if (dataLoad[i].emrdfk == '2000002387') {
            $scope.tgl12 = dataLoad[i].value
        }
        if (dataLoad[i].emrdfk == '2000002390') {
            $scope.tgl13 = dataLoad[i].value
        }
        if (dataLoad[i].emrdfk == '2000002393') {
            $scope.tgl14 = dataLoad[i].value
        }
        if (dataLoad[i].emrdfk == '2000002396') {
            $scope.tgl15 = dataLoad[i].value
        }

        if (dataLoad[i].emrdfk == '2000002408') {
            $scope.pukul2 = dataLoad[i].value
        }

        $scope.tglemr = dataLoad[i].tgl


    }

    var speedCanvasJantung = document.getElementById("chartJantung");
    var dataWaktu = [
        $scope.item.obj[1000015]?.substring(11, 16) == undefined ? '-' : $scope.item.obj[1000015]?.substring(11, 16),
        '-',
        $scope.item.obj[1000016]?.substring(11, 16) == undefined ? '-' : $scope.item.obj[1000016]?.substring(11, 16),
        '-',
        $scope.item.obj[1000017]?.substring(11, 16) == undefined ? '-' : $scope.item.obj[1000017]?.substring(11, 16),
        '-',
        $scope.item.obj[1000018]?.substring(11, 16) == undefined ? '-' : $scope.item.obj[1000018]?.substring(11, 16),
        '-',
        $scope.item.obj[1000019]?.substring(11, 16) == undefined ? '-' : $scope.item.obj[1000019]?.substring(11, 16),
        '-',
        $scope.item.obj[1000020]?.substring(11, 16) == undefined ? '-' : $scope.item.obj[1000020]?.substring(11, 16),
        '-',
        $scope.item.obj[1000021]?.substring(11, 16) == undefined ? '-' : $scope.item.obj[1000021]?.substring(11, 16),
        '-',
        $scope.item.obj[1000199]?.substring(11, 16) == undefined ? '-' : $scope.item.obj[1000199]?.substring(11, 16),
        '-',
        $scope.item.obj[1000200]?.substring(11, 16) == undefined ? '-' : $scope.item.obj[1000200]?.substring(11, 16),
        '-',
        $scope.item.obj[1000201]?.substring(11, 16) == undefined ? '-' : $scope.item.obj[1000201]?.substring(11, 16),
        '-',
        $scope.item.obj[1000202]?.substring(11, 16) == undefined ? '-' : $scope.item.obj[1000202]?.substring(11, 16),
        '-',
        $scope.item.obj[1000203]?.substring(11, 16) == undefined ? '-' : $scope.item.obj[1000203]?.substring(11, 16),
        '-',
        $scope.item.obj[1000204]?.substring(11, 16) == undefined ? '-' : $scope.item.obj[1000204]?.substring(11, 16),
    ]
    // const date = new Date();
    // const hasil = dataWaktu.map(h) => {
    //     const [hour, minute] = h.split(':');
    //     date.setHours(hour)
    //     date.setMinutes(minute)
    //     const newDate = new Date(date.getTime() - 1000 * 60 * 60 *16)
    //     return newDate.toTimeString().slice(0, 5)
    // };
    // console.log(hasil);

    var dataJantung = Array(16).fill(null).map((_, i) => $scope.item.obj[1000023 + i] == undefined ? '-' : $scope.item.obj[1000023 + i]);
    var dataJantungg = Array(16).fill(null).map((_, i) => $scope.item.obj[1000207 + i] == undefined ? '-' : $scope.item.obj[1000207 + i]);
    var dataJantungAll = dataJantung.concat(dataJantungg);

    var Jantung = {
        label: "Denyut Jantung",
        data: dataJantung,
        lineTension: 0,
        fill: false,
        borderColor: 'red'
    };

    var speedData = {
        labels: dataWaktu,
        datasets: [Jantung]
    };

    var chartOptions = {
        legend: {
            display: false,
            position: 'top',
            labels: {
                boxWidth: 80,
                fontColor: 'black'
            }
        }
    };

    var lineChart = new Chart(speedCanvasJantung, {
        type: 'line',
        data: speedData,
        options: chartOptions
    });

    var speedCanvasServiksKontraksi = document.getElementById("chartServiksKontraksi");
    var dataServiks = Array(16).fill(null).map((_, i) => $scope.item.obj[1000039 + i] == undefined ? '-' : $scope.item.obj[1000039 + i]);
    var dataServikss = Array(16).fill(null).map((_, i) => $scope.item.obj[1000223 + i] == undefined ? '-' : $scope.item.obj[1000223 + i]);
    var dataServiksAll = dataServiks.concat(dataServikss);

    var dataKontraksi = Array(32).fill(null).map((_, i) => $scope.item.obj[1000383 + i] == undefined ? '-' : $scope.item.obj[1000383 + i]);

    var Serviks = {
        label: "Serviks",
        data: dataServiksAll,
        lineTension: 0,
        fill: false,
        borderColor: 'blue'
    };

    var Kontraksi = {
        label: "Kontraksi",
        data: dataKontraksi,
        lineTension: 0,
        fill: false,
        borderColor: 'black'
    };

    var speedDataServiksKontraksi = {
        labels: dataWaktu,
        datasets: [Serviks, Kontraksi]
    };

    var chartOptionsServiksKontraksi = {
        legend: {
            display: true,
            position: 'top',
            labels: {
                boxWidth: 80,
                fontColor: 'black'
            }
        }
    };


    var lineChartServiksKontraksi = new Chart(speedCanvasServiksKontraksi, {
        type: 'line',
        data: speedDataServiksKontraksi,
        options: chartOptionsServiksKontraksi
    });

    //
    var speedCanvasNadiDarah = document.getElementById("chartNadiDarah");
    var dataNadi = Array(16).fill(null).map((_, i) => $scope.item.obj[1000103 + i] == undefined ? '-' : $scope.item.obj[1000103 + i]);
    var dataNadii = Array(16).fill(null).map((_, i) => $scope.item.obj[1000287 + i] == undefined ? '-' : $scope.item.obj[1000287 + i]);
    var dataNadiAll = dataNadi.concat(dataNadii);

    var dataDarah = Array(16).fill(null).map((_, i) => $scope.item.obj[1000119 + i] == undefined ? '-' : $scope.item.obj[1000119 + i]);
    var dataDarahi = Array(16).fill(null).map((_, i) => $scope.item.obj[1000303 + i] == undefined ? '-' : $scope.item.obj[1000303 + i]);
    var dataDarahAll = dataDarah.concat(dataDarahi);

    var Nadi = {
        label: "Nadi",
        data: dataNadiAll,
        lineTension: 0,
        fill: false,
        borderColor: 'blue'
    };

    var Darah = {
        label: "Tekanan Darah",
        data: dataDarahAll,
        lineTension: 0,
        fill: false,
        borderColor: 'black'
    };

    var speedDataNadiDarah = {
        labels: dataWaktu,
        datasets: [Nadi, Darah]
    };

    var chartOptionsNadiDarah = {
        legend: {
            display: true,
            position: 'top',
            labels: {
                boxWidth: 80,
                fontColor: 'black'
            }
        }
    };


    var lineChartNadiDarah = new Chart(speedCanvasNadiDarah, {
        type: 'line',
        data: speedDataNadiDarah,
        options: chartOptionsNadiDarah
    });

    Chart.defaults.global.defaultFontFamily = "Tahoma";
    Chart.defaults.global.defaultFontSize = 8;
    })
    angular.filter('toDate', function () {
        return function (items) {
            if (items != null) {
                return new Date(items);
            }
        };
    });
    $(document).ready(function () {
        window.print();
    });
</script>

</html>