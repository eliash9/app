<!DOCTYPE html>
<html lang="en" ng-app="angularApp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASESMEN LANJUT RESIKO JATUH PASIEN DEWASA</title>
	@if (stripos(\Request::url(), 'localhost') !== false)
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/jquery.qr-code.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/qrcode/src/jquery.qrcode.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/qrcode/src/qrcode.js') }}"></script>
        {{-- <link href="{{ asset('css/style.css') }}" rel="stylesheet"> --}}
        <!-- angular -->
        <script src="{{ asset('js/angular/angular.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/angular/angular-route.min.js') }}" type="text/javascript"></script>
        <script type="text/javascript" src="{{ asset('js/angular/angular-animate.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/angular/angular-aria.min.js') }}"></script>
        <script src="{{ asset('js/angular/angular-material.js') }}" type="text/javascript"></script>
    @else
        <script src="{{ asset('service/js/jquery.min.js') }}"></script>
        <script src="{{ asset('service/js/jquery.qr-code.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/qrcode/src/jquery.qrcode.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/qrcode/src/qrcode.js') }}"></script>
        {{-- <link href="{{ asset('service/css/style.css') }}" rel="stylesheet"> --}}
        <!-- angular -->
        <script src="{{ asset('service/js/angular/angular.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('service/js/angular/angular-route.min.js') }}" type="text/javascript"></script>
        <script type="text/javascript" src="{{ asset('service/js/angular/angular-animate.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('service/js/angular/angular-aria.min.js') }}"></script>
        <script src="{{ asset('service/js/angular/angular-material.js') }}" type="text/javascript"></script>
    @endif
    <style>
        *{
            padding:0;
            margin:0;
            box-sizing:border-box;
        }
        body{
            width:210mm;
            height:297mm;
            margin-top:250mm;
            margin-bottom:250mm;
            margin-left:250mm;
            margin-right:250mm;
            margin:0 auto; 
        }
        @page{
            size: A4;
        }
        table{ 
            page-break-inside:auto 
        }
		table {
            -fs-table-paginate: paginate;
        }
        tr{ 
            page-break-inside:avoid; 
            page-break-after:auto 
        }
        table{
            border:1px solid #000;
            border-collapse:collapse;
            table-layout:fixed;
        }
        tr td{
            border:1px solid #000;
            border-collapse:collapse;
			/* padding:.1rem; */
        }
        .mintd{
            width:48pt;
        }
        img{
            width:70%;
            height:70%;
            object-fit: cover;
        }
        .logo{
            width:50px !important;
        }
        .text-center{
            text-align: center;
        }
		.text-right{
            text-align: right;
        }
        .bordered{
            border:1px solid #000;
        }
        .noborder{
            border:none;
        }
		.blf{
			border-left:1px solid #000;
		}
		.btp{
			border-top:1px solid #000;
		}
		.btm{
			border-bottom:1px solid #000;
		}
		.br{
			border-right:1px solid #000;
		}
        .border-lr{
            border:1px solid #000;
            border-top:none;
            border-bottom:none;
        }
        .border-tb{
            border:1px solid #000;
            border-left:none;
            border-right:none;
        }
        table tr td{
            font-size: 10pt;
        }
        table tr{
            height:16pt
        }
        .bg-dark{
            background:#000;
            color:#fff;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: x-large;
            padding:.5rem;
            height:20pt !important;
        }
        .bg-dark-small{
            background:#000;
            color:#fff;
        }
        .rotate{
            vertical-align: bottom;
            text-align: center;
        }
        #rotate{
            -ms-writing-mode: tb-rl;
            -webkit-writing-mode: vertical-rl;
            writing-mode: vertical-rl;
            transform: rotate(180deg);
            white-space: nowrap;
        }
		.p3{
			padding:0.3rem;
		}
		.p2{
			padding:0.2rem;
		}
		p{
			padding:.5rem;
		}
		ul li{
			list-style:none;
		}
		ul li:before{
			content:'-'
		}

		.gambar{
			position:absolute;
			top:25%;
			left:45%;
		}
		img.img-diagram{
			width:97%;
			height:97%;
			object-fit: cover;
		}
        .format{
            page-break-after: always;
        }
    </style>
</head>
<body ng-controller="cetakSkriningDewasa">
    @if (!empty($res['d1']))
        <div class="format">
            <table width='100%'>
                <tr height=20 class="noborder">
                    <td colspan="8" rowspan="4" class="p3 noborder-tb text-center">
                        @if(stripos(\Request::url(), 'localhost') !== FALSE)
                            <img src="{{ asset('img/logo_only.png') }}" alt="" style="width: 60px;display:block; margin:auto;">
                            @else
                            <img src="{{ asset('service/img/logo_only.png') }}" alt="" style="width: 60px;display:block; margin:auto;">
                            @endif
                    </td>
                    <td colspan="17" rowspan="4" class="noborder-tb text-center" >
                        <strong>{!! $res['profile']->namalengkap !!}</strong> <br>{!! $res['profile']->alamatlengkap !!}<br>TELP : (0413) 81292
                    </td>
                    <td colspan="6" class="noborder">No. RM </td>
                    <td colspan="13" class="noborder">
                        : {!! $res['d1'][0]->nocm  !!}
                    </td>
                    <td colspan="5" rowspan="2" class="border-lr bg-dark" style="font-size: xxx-large;text-align:center">RM</td>
                </tr>
                <tr class="noborder">
                    <td colspan="6" class="noborder">Nama Lengkap</td>
                    <td colspan="11" class="noborder">
                        : {!!  $res['d1'][0]->namapasien  !!}
                    </td>
                    <td colspan="2" class="noborder">{!!  $res['d1'][0]->jeniskelamin == 'PEREMPUAN' ? '(P)' : '(L)'  !!}</td>
                </tr>
                <tr class="noborder">
                    <td colspan="6" class="noborder">Tanggal Lahir</td>
                    <td colspan="13" class="noborder">
                        : {!! date('d-m-Y',strtotime( $res['d1'][0]->tgllahir  )) !!}
                    </td>
                    <td colspan="5" class="border-lr" rowspan="2" style="font-size: xx-large;text-align:center">38.2</td>
                </tr>
                <tr class="noborder">
                    <td colspan="6" class="noborder">NIK</td>
                    <td colspan="11" class="noborder">
                        : {!! $res['d1'][0]->noidentitas  !!}
                    </td>
                </tr>
                <tr class="bordered bg-dark">
                    <th colspan="49" height="20pt">ASESMEN LANJUT RESIKO JATUH PASIEN DEWASA</th>
                </tr>
                <tr class="bordered bg-dark-small">
                    <th colspan="49" height="20pt">(diisi oleh Dietisien)</th>
                </tr>
                <tr class="text-center">
                    <td colspan="12" rowspan="3">Faktor Risiko</td>
                    <td colspan="12" rowspan="3">Parameter</td>
                    <td colspan="25">Tanggal /Jam</td>
                </tr>
                <tr class="text-center">
                    <td colspan="5" rowspan="2" valign="top" class="p2">Skor</td>
                    <td colspan="3">1</td>
                    <td colspan="3">2</td>
                    <td colspan="3">3</td>
                    <td colspan="3">4</td>
                    <td colspan="3">5</td>
                    <td colspan="5">6</td>
                </tr>
                <tr class="text-center">
                    <td colspan="3">@{{item.obj[428100] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                    <td colspan="3">@{{item.obj[428101] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                    <td colspan="3">@{{item.obj[428102] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                    <td colspan="3">@{{item.obj[428103] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                    <td colspan="3">@{{item.obj[428104] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                    <td colspan="5">@{{item.obj[428105] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                </tr>
                <tr>
                    <td colspan="12" class="text-center noborder">Riwayat Jatuh
                    </td>
                    <td colspan="12" class="p3">Ya</td>
                    <td colspan="5" class="text-center">25</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428106] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428107] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428108] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428109] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428110] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obj[428111] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="12" class="text-center noborder">( 1 tahun terakhir)
                    </td>
                    <td colspan="12" class="p3">Tidak</td>
                    <td colspan="5" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428112] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428113] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428114] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428115] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428116] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obj[428117] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" class="text-center noborder">
                        Diagnosa sekunder
                    </td>
                    <td colspan="12" class="p3">Ya</td>
                    <td colspan="5" class="text-center">15</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428118] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428119] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428120] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428121] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428122] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obj[428123] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="12" class="text-center noborder">
                        (≥2 Diagnosis Medis )
                    </td>
                    <td colspan="12" class="p3">Tidak</td>
                    <td colspan="5" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428124] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428125] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428126] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428127] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428128] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obj[428129] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" rowspan="3" valign="top" class="p2 text-center noborder">
                        Alat Bantu
                    </td>
                    <td colspan="12" class="p3">Berpegangan pada perabot</td>
                    <td colspan="5" class="text-center">30</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428130] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428131] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428132] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428133] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428134] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obj[428135] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" class="p3">Tongkat/ alat penopang</td>
                    <td colspan="5" class="text-center">15</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428136] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428137] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428138] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428139] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428140] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obj[428141] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="12" class="p3">Tidak ada / kursi roda / perawat /tirah baring</td>
                    <td colspan="5" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428142] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428143] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428144] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428145] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428146] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obj[428147] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" rowspan="2" valign="top" class="p2 text-center noborder">
                        Terpasang Infus
                    </td>
                    <td colspan="12" class="p3">Ya</td>
                    <td colspan="5" class="text-center">20</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428148] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428149] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428150] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428151] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428152] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obj[428153] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="12" class="p3">Tidak</td>
                    <td colspan="5" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428154] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428155] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428156] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428157] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428158] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obj[428159] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" rowspan="3" valign="top" class="p2 text-center noborder">
                        Gaya Berjalan
                    </td>
                    <td colspan="12" class="p3">Terganggu</td>
                    <td colspan="5" class="text-center">20</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428160] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428161] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428162] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428163] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428164] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obj[428165] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" class="p3">Lemah</td>
                    <td colspan="5" class="text-center">10</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428166] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428167] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428168] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428169] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428170] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obj[428171] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="12" class="p3">Normal /tirah baring/immobilisasi</td>
                    <td colspan="5" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428172] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428173] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428174] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428175] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428176] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obj[428177] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" rowspan="2" valign="top" class="p2 text-center noborder">
                        Status Mental
                    </td>
                    <td colspan="12" class="p3">Sering lupa akan keterbatasan yang dimiliki</td>
                    <td colspan="5" class="text-center">15</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428178] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428179] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428180] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428181] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428182] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obj[428183] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="12" class="p3">Sadar akan kemampuan diri sendiri</td>
                    <td colspan="5" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428184] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428185] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428186] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428187] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428188] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obj[428189] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="29" class="bg-dark text-center">TOTAL</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428190] ? item.obj[428190] : '' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428191] ? item.obj[428191] : '' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428192] ? item.obj[428192] : '' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428193] ? item.obj[428193] : '' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obj[428194] ? item.obj[428194] : '' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obj[428195] ? item.obj[428195] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="49" class="p3" style="height:70pt" valign="top">Hasil Skrining : @{{ item.obj[428196] ? item.obj[428196] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="49" class="p3" style="height:70pt" valign="top">Saran : @{{ item.obj[428198] ? item.obj[428198] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="30" class="noborder"></td>
                    <td colspan="19" class="text-center noborder">Perawat</td>
                </tr>
                <tr>
                    <td colspan="30" class="noborder"></td>
                    <td colspan="19" class="text-center noborder"><div id="qrcodep1" style="text-align: center"></td>
                </tr>
                <tr valign="bottom" class="noborder btm">
                    <td colspan="30" class="noborder"></td>
                    <td colspan="19" class="text-center noborder p3">(@{{ item.obj[428199] ? item.obj[428199] : '' }})</td>
                </tr>
                <tr>
                    <td colspan="49" class="p3 noborder">Kategori :</td>
                </tr>
                <tr>
                    <td colspan="49" class="p3 noborder">Risiko Tinggi = ≥ 45 (Pasang gelang dan penandaan warna kuning)</td>
                </tr>
                <tr>
                    <td colspan="49" class="p3 noborder">Risiko Sedang = 25 – 44</td>
                </tr>
                <tr>
                    <td class="p3 noborder" colspan="49">Risiko Rendah = 0 – 25</td>
                </tr>
                <tr class="bg-dark text-center">
                    <td colspan="49">INTERVENSI RISIKO JATUH DEWASA</td>
                </tr>
                <tr class="bg-dark-small text-center">
                    <td colspan="49">(Skala MORSE)</td>
                </tr>
                <tr>
                    <td colspan="3" rowspan="2" class="text-center">No</td>
                    <td colspan="16" rowspan="2" class="text-center">Risiko Rendah dan Sedang</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obj[428200] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obj[428201] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obj[428202] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obj[428203] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obj[428204] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obj[428205] | toDate | date:'dd-MM-yyyy'}}</td>
                </tr>
                <tr>
                    <td colspan="5" class="p3">Jam: @{{item.obj[428200] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obj[428201] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obj[428202] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obj[428203] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obj[428204] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obj[428205] | toDate | date:'HH:mm'}}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3">1</td>
                    <td colspan="16" class="p3">Melakukan orientasi ruangan pada pasien</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428207] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428208] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428209] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428210] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428211] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428212] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">2</td>
                    <td colspan="16" class="p3">Keselamatan lingkungan : hindari ruangan yang kacau balau, dekatkan bel dan telepon, biarkan pintu terbuka, gunakan lampu malam hari serta pagar tempat tidur</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428214] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428215] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428216] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428217] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428218] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428219] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">3</td>
                    <td colspan="16" class="p3">Pastikan roda tempat tidur terkunci</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428221] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428222] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428223] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428224] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428225] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428226] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">4</td>
                    <td colspan="16" class="p3">Posisikan tempat tidur pada posisi terendah</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428228] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428229] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428230] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428231] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428232] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428233] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">5</td>
                    <td colspan="16" class="p3">Pagar Pengaman tempat tidur dinaikkan</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428235] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428236] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428237] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428238] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428239] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428240] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">6</td>
                    <td colspan="16" class="p3">Monitor kebutuhan pasien secara berkala (minimal tiap 4 jam) tawarkan kebelakang (kamar kecil secara teratur)</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428242] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428243] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428244] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428245] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428246] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428247] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">7</td>
                    <td colspan="16" class="p3">Memberikan bantuan saat pasien ambulasi</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428249] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428250] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428251] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428252] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428253] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428254] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">8</td>
                    <td colspan="16" class="p3">Anjurkan pasien menggunakan kaos kaki atau sepatu yang tidak licin</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428256] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428257] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428258] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428259] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428260] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428261] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">9</td>
                    <td colspan="16" class="p3">Meletakkan alat bantu pasien dalam jangkauan ( kacamata, HP, tongkat dan penyangga)</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428263] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428264] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428265] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428266] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428267] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428268] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">10</td>
                    <td colspan="16" class="p3">Gunakan alat bantu jalan (walker, handrail)</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428270] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428271] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428272] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428273] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428274] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428275] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;height:70pt" valign="top">
                    <td colspan="19" class="p3 text-center">Nama & tanda tangan perawat</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428276] ? item.obj[428276] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428277] ? item.obj[428277] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428278] ? item.obj[428278] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428279] ? item.obj[428279] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428280] ? item.obj[428280] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428281] ? item.obj[428281] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="3" rowspan="2" class="text-center">No</td>
                    <td colspan="16" rowspan="2" class="text-center">Risiko Tinggi</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obj[428282] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obj[428283] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obj[428284] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obj[428285] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obj[428286] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obj[428287] | toDate | date:'dd-MM-yyyy'}}</td>
                </tr>
                <tr>
                    <td colspan="5" class="p3">Jam: @{{item.obj[428282] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obj[428283] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obj[428284] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obj[428285] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obj[428286] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obj[428287] | toDate | date:'HH:mm'}}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">1</td>
                    <td colspan="16" class="p3">Pakaikan stiker risiko jatuh berwarna kuning pada gelang pasien</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428289] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428290] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428291] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428292] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428293] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428294] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">2</td>
                    <td colspan="16" class="p3">Pasangkan tanda peringatan pasien jatuh diatas tempat tidur pasien / di dinding dekat pasien / di gantung dekat pasien</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428296] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428297] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428298] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428299] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428300] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428301] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">3</td>
                    <td colspan="16" class="p3">Pasien ditempelkan didekat nurse station</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428303] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428304] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428305] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428306] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428307] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428308] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">4</td>
                    <td colspan="16" class="p3">Memasangkan handrail tempat tidur bila meninggalkan pasien seorang diri</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428310] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428311] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428312] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428313] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428314] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428315] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">5</td>
                    <td colspan="16" class="p3">Mendampingi pasien saat ke kamar mandi, jangan tinggalkan sendiri dikamar mandi</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428317] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428318] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428319] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428320] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428321] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428322] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">6</td>
                    <td colspan="16" class="p3">Monitor kebutuhan pasien secara berkala (minimal tiap 2 jam )</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428324] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428325] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428326] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428327] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428328] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428329] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">7</td>
                    <td colspan="16" class="p3">Membantu kebutuhan eliminasi pasien saban 2 jam </td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428331] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428332] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428333] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428334] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428335] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428336] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">8</td>
                    <td colspan="16" class="p3">Lantai kamar mandi dengan karpetanti slip/tidak licin, serta anjuran menggunakan tempat duduk dikamar mandi saat pasien mandi </td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428338] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428339] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428340] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428341] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428342] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428343] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;height:70pt" valign="top">
                    <td colspan="19" class="p3 text-center">Nama & tanda tangan perawat</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428344] ? item.obj[428344] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428345] ? item.obj[428345] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428346] ? item.obj[428346] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428347] ? item.obj[428347] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428348] ? item.obj[428348] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obj[428349] ? item.obj[428349] : '' }}</td>
                </tr>
            </table>
        </div>
    @endif

    @if (!empty($res['d2']))
        <div class="format">
            <table width='100%'>
                <tr height=20 class="noborder">
                    <td colspan="8" rowspan="4" class="p3 noborder-tb text-center">
                        @if(stripos(\Request::url(), 'localhost') !== FALSE)
                            <img src="{{ asset('img/logo_only.png') }}" alt="" style="width: 60px;display:block; margin:auto;">
                            @else
                            <img src="{{ asset('service/img/logo_only.png') }}" alt="" style="width: 60px;display:block; margin:auto;">
                            @endif
                    </td>
                    <td colspan="17" rowspan="4" class="noborder-tb text-center" >
                        <strong>{!! $res['profile']->namalengkap !!}</strong> <br>{!! $res['profile']->alamatlengkap !!}<br>TELP : (0413) 81292
                    </td>
                    <td colspan="6" class="noborder">No. RM </td>
                    <td colspan="13" class="noborder">
                        : {!! $res['d1'][0]->nocm  !!}
                    </td>
                    <td colspan="5" rowspan="2" class="border-lr bg-dark" style="font-size: xxx-large;text-align:center">RM</td>
                </tr>
                <tr class="noborder">
                    <td colspan="6" class="noborder">Nama Lengkap</td>
                    <td colspan="11" class="noborder">
                        : {!!  $res['d1'][0]->namapasien  !!}
                    </td>
                    <td colspan="2" class="noborder">{!!  $res['d1'][0]->jeniskelamin == 'PEREMPUAN' ? '(P)' : '(L)'  !!}</td>
                </tr>
                <tr class="noborder">
                    <td colspan="6" class="noborder">Tanggal Lahir</td>
                    <td colspan="13" class="noborder">
                        : {!! date('d-m-Y',strtotime( $res['d1'][0]->tgllahir  )) !!}
                    </td>
                    <td colspan="5" class="border-lr" rowspan="2" style="font-size: xx-large;text-align:center">38.2</td>
                </tr>
                <tr class="noborder">
                    <td colspan="6" class="noborder">NIK</td>
                    <td colspan="11" class="noborder">
                        : {!! $res['d1'][0]->noidentitas  !!}
                    </td>
                </tr>
                <tr class="bordered bg-dark">
                    <th colspan="49" height="20pt">ASESMEN LANJUT RESIKO JATUH PASIEN DEWASA</th>
                </tr>
                <tr class="bordered bg-dark-small">
                    <th colspan="49" height="20pt">(diisi oleh Dietisien)</th>
                </tr>
                <tr class="text-center">
                    <td colspan="12" rowspan="3">Faktor Risiko</td>
                    <td colspan="12" rowspan="3">Parameter</td>
                    <td colspan="25">Tanggal /Jam</td>
                </tr>
                <tr class="text-center">
                    <td colspan="5" rowspan="2" valign="top" class="p2">Skor</td>
                    <td colspan="3">1</td>
                    <td colspan="3">2</td>
                    <td colspan="3">3</td>
                    <td colspan="3">4</td>
                    <td colspan="3">5</td>
                    <td colspan="5">6</td>
                </tr>
                <tr class="text-center">
                    <td colspan="3">@{{item.obji2[428100] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                    <td colspan="3">@{{item.obji2[428101] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                    <td colspan="3">@{{item.obji2[428102] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                    <td colspan="3">@{{item.obji2[428103] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                    <td colspan="3">@{{item.obji2[428104] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                    <td colspan="5">@{{item.obji2[428105] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                </tr>
                <tr>
                    <td colspan="12" class="text-center noborder">Riwayat Jatuh
                    </td>
                    <td colspan="12" class="p3">Ya</td>
                    <td colspan="5" class="text-center">25</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428106] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428107] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428108] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428109] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428110] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji2[428111] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="12" class="text-center noborder">( 1 tahun terakhir)
                    </td>
                    <td colspan="12" class="p3">Tidak</td>
                    <td colspan="5" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428112] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428113] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428114] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428115] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428116] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji2[428117] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" class="text-center noborder">
                        Diagnosa sekunder
                    </td>
                    <td colspan="12" class="p3">Ya</td>
                    <td colspan="5" class="text-center">15</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428118] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428119] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428120] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428121] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428122] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji2[428123] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="12" class="text-center noborder">
                        (≥2 Diagnosis Medis )
                    </td>
                    <td colspan="12" class="p3">Tidak</td>
                    <td colspan="5" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428124] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428125] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428126] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428127] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428128] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji2[428129] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" rowspan="3" valign="top" class="p2 text-center noborder">
                        Alat Bantu
                    </td>
                    <td colspan="12" class="p3">Berpegangan pada perabot</td>
                    <td colspan="5" class="text-center">30</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428130] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428131] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428132] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428133] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428134] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji2[428135] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" class="p3">Tongkat/ alat penopang</td>
                    <td colspan="5" class="text-center">15</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428136] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428137] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428138] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428139] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428140] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji2[428141] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="12" class="p3">Tidak ada / kursi roda / perawat /tirah baring</td>
                    <td colspan="5" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428142] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428143] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428144] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428145] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428146] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji2[428147] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" rowspan="2" valign="top" class="p2 text-center noborder">
                        Terpasang Infus
                    </td>
                    <td colspan="12" class="p3">Ya</td>
                    <td colspan="5" class="text-center">20</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428148] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428149] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428150] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428151] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428152] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji2[428153] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="12" class="p3">Tidak</td>
                    <td colspan="5" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428154] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428155] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428156] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428157] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428158] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji2[428159] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" rowspan="3" valign="top" class="p2 text-center noborder">
                        Gaya Berjalan
                    </td>
                    <td colspan="12" class="p3">Terganggu</td>
                    <td colspan="5" class="text-center">20</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428160] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428161] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428162] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428163] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428164] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji2[428165] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" class="p3">Lemah</td>
                    <td colspan="5" class="text-center">10</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428166] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428167] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428168] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428169] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428170] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji2[428171] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="12" class="p3">Normal /tirah baring/immobilisasi</td>
                    <td colspan="5" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428172] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428173] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428174] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428175] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428176] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji2[428177] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" rowspan="2" valign="top" class="p2 text-center noborder">
                        Status Mental
                    </td>
                    <td colspan="12" class="p3">Sering lupa akan keterbatasan yang dimiliki</td>
                    <td colspan="5" class="text-center">15</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428178] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428179] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428180] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428181] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428182] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji2[428183] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="12" class="p3">Sadar akan kemampuan diri sendiri</td>
                    <td colspan="5" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428184] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428185] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428186] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428187] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428188] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji2[428189] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="29" class="bg-dark text-center">TOTAL</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428190] ? item.obji2[428190] : '' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428191] ? item.obji2[428191] : '' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428192] ? item.obji2[428192] : '' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428193] ? item.obji2[428193] : '' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[428194] ? item.obji2[428194] : '' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji2[428195] ? item.obji2[428195] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="49" class="p3" style="height:70pt" valign="top">Hasil Skrining : @{{ item.obji2[428196] ? item.obji2[428196] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="49" class="p3" style="height:70pt" valign="top">Saran : @{{ item.obji2[428198] ? item.obji2[428198] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="30" class="noborder"></td>
                    <td colspan="19" class="text-center noborder">Perawat</td>
                </tr>
                <tr>
                    <td colspan="30" class="noborder"></td>
                    <td colspan="19" class="text-center noborder"><div id="qrcodep1" style="text-align: center"></td>
                </tr>
                <tr valign="bottom" class="noborder btm">
                    <td colspan="30" class="noborder"></td>
                    <td colspan="19" class="text-center noborder p3">(@{{ item.obji2[428199] ? item.obji2[428199] : '' }})</td>
                </tr>
                <tr>
                    <td colspan="49" class="p3 noborder">Kategori :</td>
                </tr>
                <tr>
                    <td colspan="49" class="p3 noborder">Risiko Tinggi = ≥ 45 (Pasang gelang dan penandaan warna kuning)</td>
                </tr>
                <tr>
                    <td colspan="49" class="p3 noborder">Risiko Sedang = 25 – 44</td>
                </tr>
                <tr>
                    <td class="p3 noborder" colspan="49">Risiko Rendah = 0 – 25</td>
                </tr>
                <tr class="bg-dark text-center">
                    <td colspan="49">INTERVENSI RISIKO JATUH DEWASA</td>
                </tr>
                <tr class="bg-dark-small text-center">
                    <td colspan="49">(Skala MORSE)</td>
                </tr>
                <tr>
                    <td colspan="3" rowspan="2" class="text-center">No</td>
                    <td colspan="16" rowspan="2" class="text-center">Risiko Rendah dan Sedang</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji2[428200] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji2[428201] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji2[428202] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji2[428203] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji2[428204] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji2[428205] | toDate | date:'dd-MM-yyyy'}}</td>
                </tr>
                <tr>
                    <td colspan="5" class="p3">Jam: @{{item.obji2[428200] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji2[428201] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji2[428202] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji2[428203] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji2[428204] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji2[428205] | toDate | date:'HH:mm'}}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3">1</td>
                    <td colspan="16" class="p3">Melakukan orientasi ruangan pada pasien</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428207] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428208] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428209] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428210] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428211] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428212] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">2</td>
                    <td colspan="16" class="p3">Keselamatan lingkungan : hindari ruangan yang kacau balau, dekatkan bel dan telepon, biarkan pintu terbuka, gunakan lampu malam hari serta pagar tempat tidur</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428214] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428215] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428216] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428217] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428218] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428219] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">3</td>
                    <td colspan="16" class="p3">Pastikan roda tempat tidur terkunci</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428221] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428222] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428223] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428224] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428225] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428226] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">4</td>
                    <td colspan="16" class="p3">Posisikan tempat tidur pada posisi terendah</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428228] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428229] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428230] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428231] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428232] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428233] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">5</td>
                    <td colspan="16" class="p3">Pagar Pengaman tempat tidur dinaikkan</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428235] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428236] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428237] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428238] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428239] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428240] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">6</td>
                    <td colspan="16" class="p3">Monitor kebutuhan pasien secara berkala (minimal tiap 4 jam) tawarkan kebelakang (kamar kecil secara teratur)</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428242] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428243] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428244] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428245] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428246] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428247] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">7</td>
                    <td colspan="16" class="p3">Memberikan bantuan saat pasien ambulasi</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428249] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428250] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428251] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428252] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428253] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428254] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">8</td>
                    <td colspan="16" class="p3">Anjurkan pasien menggunakan kaos kaki atau sepatu yang tidak licin</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428256] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428257] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428258] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428259] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428260] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428261] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">9</td>
                    <td colspan="16" class="p3">Meletakkan alat bantu pasien dalam jangkauan ( kacamata, HP, tongkat dan penyangga)</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428263] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428264] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428265] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428266] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428267] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428268] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">10</td>
                    <td colspan="16" class="p3">Gunakan alat bantu jalan (walker, handrail)</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428270] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428271] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428272] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428273] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428274] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428275] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;height:70pt" valign="top">
                    <td colspan="19" class="p3 text-center">Nama & tanda tangan perawat</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428276] ? item.obji2[428276] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428277] ? item.obji2[428277] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428278] ? item.obji2[428278] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428279] ? item.obji2[428279] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428280] ? item.obji2[428280] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428281] ? item.obji2[428281] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="3" rowspan="2" class="text-center">No</td>
                    <td colspan="16" rowspan="2" class="text-center">Risiko Tinggi</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji2[428282] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji2[428283] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji2[428284] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji2[428285] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji2[428286] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji2[428287] | toDate | date:'dd-MM-yyyy'}}</td>
                </tr>
                <tr>
                    <td colspan="5" class="p3">Jam: @{{item.obji2[428282] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji2[428283] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji2[428284] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji2[428285] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji2[428286] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji2[428287] | toDate | date:'HH:mm'}}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">1</td>
                    <td colspan="16" class="p3">Pakaikan stiker risiko jatuh berwarna kuning pada gelang pasien</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428289] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428290] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428291] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428292] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428293] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428294] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">2</td>
                    <td colspan="16" class="p3">Pasangkan tanda peringatan pasien jatuh diatas tempat tidur pasien / di dinding dekat pasien / di gantung dekat pasien</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428296] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428297] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428298] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428299] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428300] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428301] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">3</td>
                    <td colspan="16" class="p3">Pasien ditempelkan didekat nurse station</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428303] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428304] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428305] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428306] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428307] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428308] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">4</td>
                    <td colspan="16" class="p3">Memasangkan handrail tempat tidur bila meninggalkan pasien seorang diri</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428310] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428311] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428312] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428313] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428314] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428315] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">5</td>
                    <td colspan="16" class="p3">Mendampingi pasien saat ke kamar mandi, jangan tinggalkan sendiri dikamar mandi</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428317] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428318] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428319] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428320] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428321] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428322] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">6</td>
                    <td colspan="16" class="p3">Monitor kebutuhan pasien secara berkala (minimal tiap 2 jam )</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428324] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428325] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428326] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428327] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428328] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428329] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">7</td>
                    <td colspan="16" class="p3">Membantu kebutuhan eliminasi pasien saban 2 jam </td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428331] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428332] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428333] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428334] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428335] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428336] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">8</td>
                    <td colspan="16" class="p3">Lantai kamar mandi dengan karpetanti slip/tidak licin, serta anjuran menggunakan tempat duduk dikamar mandi saat pasien mandi </td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428338] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428339] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428340] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428341] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428342] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428343] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;height:70pt" valign="top">
                    <td colspan="19" class="p3 text-center">Nama & tanda tangan perawat</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428344] ? item.obji2[428344] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428345] ? item.obji2[428345] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428346] ? item.obji2[428346] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428347] ? item.obji2[428347] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428348] ? item.obji2[428348] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji2[428349] ? item.obji2[428349] : '' }}</td>
                </tr>
            </table>
        </div>
    @endif

    @if (!empty($res['d3']))
        <div class="format">
            <table width='100%'>
                <tr height=20 class="noborder">
                    <td colspan="8" rowspan="4" class="p3 noborder-tb text-center">
                        @if(stripos(\Request::url(), 'localhost') !== FALSE)
                            <img src="{{ asset('img/logo_only.png') }}" alt="" style="width: 60px;display:block; margin:auto;">
                            @else
                            <img src="{{ asset('service/img/logo_only.png') }}" alt="" style="width: 60px;display:block; margin:auto;">
                            @endif
                    </td>
                    <td colspan="17" rowspan="4" class="noborder-tb text-center" >
                        <strong>{!! $res['profile']->namalengkap !!}</strong> <br>{!! $res['profile']->alamatlengkap !!}<br>TELP : (0413) 81292
                    </td>
                    <td colspan="6" class="noborder">No. RM </td>
                    <td colspan="13" class="noborder">
                        : {!! $res['d1'][0]->nocm  !!}
                    </td>
                    <td colspan="5" rowspan="2" class="border-lr bg-dark" style="font-size: xxx-large;text-align:center">RM</td>
                </tr>
                <tr class="noborder">
                    <td colspan="6" class="noborder">Nama Lengkap</td>
                    <td colspan="11" class="noborder">
                        : {!!  $res['d1'][0]->namapasien  !!}
                    </td>
                    <td colspan="2" class="noborder">{!!  $res['d1'][0]->jeniskelamin == 'PEREMPUAN' ? '(P)' : '(L)'  !!}</td>
                </tr>
                <tr class="noborder">
                    <td colspan="6" class="noborder">Tanggal Lahir</td>
                    <td colspan="13" class="noborder">
                        : {!! date('d-m-Y',strtotime( $res['d1'][0]->tgllahir  )) !!}
                    </td>
                    <td colspan="5" class="border-lr" rowspan="2" style="font-size: xx-large;text-align:center">38.2</td>
                </tr>
                <tr class="noborder">
                    <td colspan="6" class="noborder">NIK</td>
                    <td colspan="11" class="noborder">
                        : {!! $res['d1'][0]->noidentitas  !!}
                    </td>
                </tr>
                <tr class="bordered bg-dark">
                    <th colspan="49" height="20pt">ASESMEN LANJUT RESIKO JATUH PASIEN DEWASA</th>
                </tr>
                <tr class="bordered bg-dark-small">
                    <th colspan="49" height="20pt">(diisi oleh Dietisien)</th>
                </tr>
                <tr class="text-center">
                    <td colspan="12" rowspan="3">Faktor Risiko</td>
                    <td colspan="12" rowspan="3">Parameter</td>
                    <td colspan="25">Tanggal /Jam</td>
                </tr>
                <tr class="text-center">
                    <td colspan="5" rowspan="2" valign="top" class="p2">Skor</td>
                    <td colspan="3">1</td>
                    <td colspan="3">2</td>
                    <td colspan="3">3</td>
                    <td colspan="3">4</td>
                    <td colspan="3">5</td>
                    <td colspan="5">6</td>
                </tr>
                <tr class="text-center">
                    <td colspan="3">@{{item.obji3[428100] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                    <td colspan="3">@{{item.obji3[428101] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                    <td colspan="3">@{{item.obji3[428102] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                    <td colspan="3">@{{item.obji3[428103] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                    <td colspan="3">@{{item.obji3[428104] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                    <td colspan="5">@{{item.obji3[428105] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                </tr>
                <tr>
                    <td colspan="12" class="text-center noborder">Riwayat Jatuh
                    </td>
                    <td colspan="12" class="p3">Ya</td>
                    <td colspan="5" class="text-center">25</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428106] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428107] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428108] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428109] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428110] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji3[428111] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="12" class="text-center noborder">( 1 tahun terakhir)
                    </td>
                    <td colspan="12" class="p3">Tidak</td>
                    <td colspan="5" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428112] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428113] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428114] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428115] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428116] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji3[428117] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" class="text-center noborder">
                        Diagnosa sekunder
                    </td>
                    <td colspan="12" class="p3">Ya</td>
                    <td colspan="5" class="text-center">15</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428118] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428119] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428120] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428121] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428122] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji3[428123] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="12" class="text-center noborder">
                        (≥2 Diagnosis Medis )
                    </td>
                    <td colspan="12" class="p3">Tidak</td>
                    <td colspan="5" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428124] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428125] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428126] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428127] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428128] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji3[428129] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" rowspan="3" valign="top" class="p2 text-center noborder">
                        Alat Bantu
                    </td>
                    <td colspan="12" class="p3">Berpegangan pada perabot</td>
                    <td colspan="5" class="text-center">30</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428130] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428131] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428132] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428133] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428134] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji3[428135] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" class="p3">Tongkat/ alat penopang</td>
                    <td colspan="5" class="text-center">15</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428136] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428137] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428138] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428139] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428140] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji3[428141] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="12" class="p3">Tidak ada / kursi roda / perawat /tirah baring</td>
                    <td colspan="5" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428142] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428143] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428144] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428145] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428146] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji3[428147] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" rowspan="2" valign="top" class="p2 text-center noborder">
                        Terpasang Infus
                    </td>
                    <td colspan="12" class="p3">Ya</td>
                    <td colspan="5" class="text-center">20</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428148] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428149] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428150] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428151] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428152] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji3[428153] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="12" class="p3">Tidak</td>
                    <td colspan="5" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428154] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428155] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428156] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428157] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428158] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji3[428159] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" rowspan="3" valign="top" class="p2 text-center noborder">
                        Gaya Berjalan
                    </td>
                    <td colspan="12" class="p3">Terganggu</td>
                    <td colspan="5" class="text-center">20</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428160] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428161] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428162] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428163] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428164] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji3[428165] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" class="p3">Lemah</td>
                    <td colspan="5" class="text-center">10</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428166] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428167] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428168] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428169] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428170] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji3[428171] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="12" class="p3">Normal /tirah baring/immobilisasi</td>
                    <td colspan="5" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428172] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428173] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428174] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428175] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428176] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji3[428177] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" rowspan="2" valign="top" class="p2 text-center noborder">
                        Status Mental
                    </td>
                    <td colspan="12" class="p3">Sering lupa akan keterbatasan yang dimiliki</td>
                    <td colspan="5" class="text-center">15</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428178] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428179] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428180] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428181] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428182] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji3[428183] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="12" class="p3">Sadar akan kemampuan diri sendiri</td>
                    <td colspan="5" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428184] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428185] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428186] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428187] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428188] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji3[428189] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="29" class="bg-dark text-center">TOTAL</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428190] ? item.obji3[428190] : '' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428191] ? item.obji3[428191] : '' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428192] ? item.obji3[428192] : '' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428193] ? item.obji3[428193] : '' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[428194] ? item.obji3[428194] : '' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji3[428195] ? item.obji3[428195] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="49" class="p3" style="height:70pt" valign="top">Hasil Skrining : @{{ item.obji3[428196] ? item.obji3[428196] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="49" class="p3" style="height:70pt" valign="top">Saran : @{{ item.obji3[428198] ? item.obji3[428198] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="30" class="noborder"></td>
                    <td colspan="19" class="text-center noborder">Perawat</td>
                </tr>
                <tr>
                    <td colspan="30" class="noborder"></td>
                    <td colspan="19" class="text-center noborder"><div id="qrcodep1" style="text-align: center"></td>
                </tr>
                <tr valign="bottom" class="noborder btm">
                    <td colspan="30" class="noborder"></td>
                    <td colspan="19" class="text-center noborder p3">(@{{ item.obji3[428199] ? item.obji3[428199] : '' }})</td>
                </tr>
                <tr>
                    <td colspan="49" class="p3 noborder">Kategori :</td>
                </tr>
                <tr>
                    <td colspan="49" class="p3 noborder">Risiko Tinggi = ≥ 45 (Pasang gelang dan penandaan warna kuning)</td>
                </tr>
                <tr>
                    <td colspan="49" class="p3 noborder">Risiko Sedang = 25 – 44</td>
                </tr>
                <tr>
                    <td class="p3 noborder" colspan="49">Risiko Rendah = 0 – 25</td>
                </tr>
                <tr class="bg-dark text-center">
                    <td colspan="49">INTERVENSI RISIKO JATUH DEWASA</td>
                </tr>
                <tr class="bg-dark-small text-center">
                    <td colspan="49">(Skala MORSE)</td>
                </tr>
                <tr>
                    <td colspan="3" rowspan="2" class="text-center">No</td>
                    <td colspan="16" rowspan="2" class="text-center">Risiko Rendah dan Sedang</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji3[428200] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji3[428201] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji3[428202] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji3[428203] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji3[428204] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji3[428205] | toDate | date:'dd-MM-yyyy'}}</td>
                </tr>
                <tr>
                    <td colspan="5" class="p3">Jam: @{{item.obji3[428200] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji3[428201] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji3[428202] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji3[428203] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji3[428204] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji3[428205] | toDate | date:'HH:mm'}}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3">1</td>
                    <td colspan="16" class="p3">Melakukan orientasi ruangan pada pasien</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428207] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428208] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428209] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428210] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428211] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428212] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">2</td>
                    <td colspan="16" class="p3">Keselamatan lingkungan : hindari ruangan yang kacau balau, dekatkan bel dan telepon, biarkan pintu terbuka, gunakan lampu malam hari serta pagar tempat tidur</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428214] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428215] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428216] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428217] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428218] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428219] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">3</td>
                    <td colspan="16" class="p3">Pastikan roda tempat tidur terkunci</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428221] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428222] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428223] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428224] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428225] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428226] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">4</td>
                    <td colspan="16" class="p3">Posisikan tempat tidur pada posisi terendah</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428228] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428229] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428230] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428231] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428232] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428233] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">5</td>
                    <td colspan="16" class="p3">Pagar Pengaman tempat tidur dinaikkan</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428235] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428236] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428237] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428238] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428239] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428240] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">6</td>
                    <td colspan="16" class="p3">Monitor kebutuhan pasien secara berkala (minimal tiap 4 jam) tawarkan kebelakang (kamar kecil secara teratur)</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428242] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428243] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428244] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428245] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428246] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428247] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">7</td>
                    <td colspan="16" class="p3">Memberikan bantuan saat pasien ambulasi</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428249] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428250] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428251] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428252] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428253] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428254] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">8</td>
                    <td colspan="16" class="p3">Anjurkan pasien menggunakan kaos kaki atau sepatu yang tidak licin</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428256] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428257] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428258] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428259] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428260] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428261] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">9</td>
                    <td colspan="16" class="p3">Meletakkan alat bantu pasien dalam jangkauan ( kacamata, HP, tongkat dan penyangga)</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428263] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428264] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428265] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428266] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428267] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428268] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">10</td>
                    <td colspan="16" class="p3">Gunakan alat bantu jalan (walker, handrail)</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428270] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428271] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428272] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428273] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428274] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428275] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;height:70pt" valign="top">
                    <td colspan="19" class="p3 text-center">Nama & tanda tangan perawat</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428276] ? item.obji3[428276] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428277] ? item.obji3[428277] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428278] ? item.obji3[428278] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428279] ? item.obji3[428279] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428280] ? item.obji3[428280] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428281] ? item.obji3[428281] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="3" rowspan="2" class="text-center">No</td>
                    <td colspan="16" rowspan="2" class="text-center">Risiko Tinggi</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji3[428282] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji3[428283] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji3[428284] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji3[428285] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji3[428286] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji3[428287] | toDate | date:'dd-MM-yyyy'}}</td>
                </tr>
                <tr>
                    <td colspan="5" class="p3">Jam: @{{item.obji3[428282] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji3[428283] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji3[428284] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji3[428285] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji3[428286] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji3[428287] | toDate | date:'HH:mm'}}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">1</td>
                    <td colspan="16" class="p3">Pakaikan stiker risiko jatuh berwarna kuning pada gelang pasien</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428289] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428290] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428291] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428292] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428293] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428294] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">2</td>
                    <td colspan="16" class="p3">Pasangkan tanda peringatan pasien jatuh diatas tempat tidur pasien / di dinding dekat pasien / di gantung dekat pasien</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428296] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428297] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428298] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428299] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428300] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428301] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">3</td>
                    <td colspan="16" class="p3">Pasien ditempelkan didekat nurse station</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428303] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428304] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428305] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428306] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428307] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428308] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">4</td>
                    <td colspan="16" class="p3">Memasangkan handrail tempat tidur bila meninggalkan pasien seorang diri</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428310] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428311] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428312] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428313] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428314] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428315] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">5</td>
                    <td colspan="16" class="p3">Mendampingi pasien saat ke kamar mandi, jangan tinggalkan sendiri dikamar mandi</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428317] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428318] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428319] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428320] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428321] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428322] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">6</td>
                    <td colspan="16" class="p3">Monitor kebutuhan pasien secara berkala (minimal tiap 2 jam )</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428324] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428325] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428326] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428327] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428328] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428329] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">7</td>
                    <td colspan="16" class="p3">Membantu kebutuhan eliminasi pasien saban 2 jam </td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428331] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428332] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428333] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428334] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428335] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428336] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">8</td>
                    <td colspan="16" class="p3">Lantai kamar mandi dengan karpetanti slip/tidak licin, serta anjuran menggunakan tempat duduk dikamar mandi saat pasien mandi </td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428338] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428339] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428340] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428341] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428342] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428343] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;height:70pt" valign="top">
                    <td colspan="19" class="p3 text-center">Nama & tanda tangan perawat</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428344] ? item.obji3[428344] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428345] ? item.obji3[428345] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428346] ? item.obji3[428346] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428347] ? item.obji3[428347] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428348] ? item.obji3[428348] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji3[428349] ? item.obji3[428349] : '' }}</td>
                </tr>
            </table>
        </div>
    @endif

    @if (!empty($res['d4']))
        <div class="format">
            <table width='100%'>
                <tr height=20 class="noborder">
                    <td colspan="8" rowspan="4" class="p3 noborder-tb text-center">
                        @if(stripos(\Request::url(), 'localhost') !== FALSE)
                            <img src="{{ asset('img/logo_only.png') }}" alt="" style="width: 60px;display:block; margin:auto;">
                            @else
                            <img src="{{ asset('service/img/logo_only.png') }}" alt="" style="width: 60px;display:block; margin:auto;">
                            @endif
                    </td>
                    <td colspan="17" rowspan="4" class="noborder-tb text-center" >
                        <strong>{!! $res['profile']->namalengkap !!}</strong> <br>{!! $res['profile']->alamatlengkap !!}<br>TELP : (0413) 81292
                    </td>
                    <td colspan="6" class="noborder">No. RM </td>
                    <td colspan="13" class="noborder">
                        : {!! $res['d1'][0]->nocm  !!}
                    </td>
                    <td colspan="5" rowspan="2" class="border-lr bg-dark" style="font-size: xxx-large;text-align:center">RM</td>
                </tr>
                <tr class="noborder">
                    <td colspan="6" class="noborder">Nama Lengkap</td>
                    <td colspan="11" class="noborder">
                        : {!!  $res['d1'][0]->namapasien  !!}
                    </td>
                    <td colspan="2" class="noborder">{!!  $res['d1'][0]->jeniskelamin == 'PEREMPUAN' ? '(P)' : '(L)'  !!}</td>
                </tr>
                <tr class="noborder">
                    <td colspan="6" class="noborder">Tanggal Lahir</td>
                    <td colspan="13" class="noborder">
                        : {!! date('d-m-Y',strtotime( $res['d1'][0]->tgllahir  )) !!}
                    </td>
                    <td colspan="5" class="border-lr" rowspan="2" style="font-size: xx-large;text-align:center">38.2</td>
                </tr>
                <tr class="noborder">
                    <td colspan="6" class="noborder">NIK</td>
                    <td colspan="11" class="noborder">
                        : {!! $res['d1'][0]->noidentitas  !!}
                    </td>
                </tr>
                <tr class="bordered bg-dark">
                    <th colspan="49" height="20pt">ASESMEN LANJUT RESIKO JATUH PASIEN DEWASA</th>
                </tr>
                <tr class="bordered bg-dark-small">
                    <th colspan="49" height="20pt">(diisi oleh Dietisien)</th>
                </tr>
                <tr class="text-center">
                    <td colspan="12" rowspan="3">Faktor Risiko</td>
                    <td colspan="12" rowspan="3">Parameter</td>
                    <td colspan="25">Tanggal /Jam</td>
                </tr>
                <tr class="text-center">
                    <td colspan="5" rowspan="2" valign="top" class="p2">Skor</td>
                    <td colspan="3">1</td>
                    <td colspan="3">2</td>
                    <td colspan="3">3</td>
                    <td colspan="3">4</td>
                    <td colspan="3">5</td>
                    <td colspan="5">6</td>
                </tr>
                <tr class="text-center">
                    <td colspan="3">@{{item.obji4[428100] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                    <td colspan="3">@{{item.obji4[428101] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                    <td colspan="3">@{{item.obji4[428102] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                    <td colspan="3">@{{item.obji4[428103] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                    <td colspan="3">@{{item.obji4[428104] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                    <td colspan="5">@{{item.obji4[428105] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                </tr>
                <tr>
                    <td colspan="12" class="text-center noborder">Riwayat Jatuh
                    </td>
                    <td colspan="12" class="p3">Ya</td>
                    <td colspan="5" class="text-center">25</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428106] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428107] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428108] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428109] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428110] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji4[428111] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="12" class="text-center noborder">( 1 tahun terakhir)
                    </td>
                    <td colspan="12" class="p3">Tidak</td>
                    <td colspan="5" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428112] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428113] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428114] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428115] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428116] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji4[428117] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" class="text-center noborder">
                        Diagnosa sekunder
                    </td>
                    <td colspan="12" class="p3">Ya</td>
                    <td colspan="5" class="text-center">15</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428118] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428119] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428120] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428121] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428122] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji4[428123] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="12" class="text-center noborder">
                        (≥2 Diagnosis Medis )
                    </td>
                    <td colspan="12" class="p3">Tidak</td>
                    <td colspan="5" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428124] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428125] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428126] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428127] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428128] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji4[428129] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" rowspan="3" valign="top" class="p2 text-center noborder">
                        Alat Bantu
                    </td>
                    <td colspan="12" class="p3">Berpegangan pada perabot</td>
                    <td colspan="5" class="text-center">30</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428130] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428131] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428132] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428133] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428134] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji4[428135] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" class="p3">Tongkat/ alat penopang</td>
                    <td colspan="5" class="text-center">15</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428136] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428137] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428138] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428139] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428140] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji4[428141] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="12" class="p3">Tidak ada / kursi roda / perawat /tirah baring</td>
                    <td colspan="5" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428142] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428143] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428144] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428145] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428146] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji4[428147] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" rowspan="2" valign="top" class="p2 text-center noborder">
                        Terpasang Infus
                    </td>
                    <td colspan="12" class="p3">Ya</td>
                    <td colspan="5" class="text-center">20</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428148] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428149] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428150] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428151] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428152] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji4[428153] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="12" class="p3">Tidak</td>
                    <td colspan="5" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428154] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428155] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428156] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428157] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428158] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji4[428159] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" rowspan="3" valign="top" class="p2 text-center noborder">
                        Gaya Berjalan
                    </td>
                    <td colspan="12" class="p3">Terganggu</td>
                    <td colspan="5" class="text-center">20</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428160] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428161] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428162] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428163] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428164] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji4[428165] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" class="p3">Lemah</td>
                    <td colspan="5" class="text-center">10</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428166] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428167] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428168] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428169] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428170] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji4[428171] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="12" class="p3">Normal /tirah baring/immobilisasi</td>
                    <td colspan="5" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428172] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428173] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428174] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428175] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428176] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji4[428177] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" rowspan="2" valign="top" class="p2 text-center noborder">
                        Status Mental
                    </td>
                    <td colspan="12" class="p3">Sering lupa akan keterbatasan yang dimiliki</td>
                    <td colspan="5" class="text-center">15</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428178] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428179] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428180] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428181] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428182] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji4[428183] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="12" class="p3">Sadar akan kemampuan diri sendiri</td>
                    <td colspan="5" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428184] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428185] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428186] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428187] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428188] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji4[428189] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="29" class="bg-dark text-center">TOTAL</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428190] ? item.obji4[428190] : '' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428191] ? item.obji4[428191] : '' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428192] ? item.obji4[428192] : '' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428193] ? item.obji4[428193] : '' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[428194] ? item.obji4[428194] : '' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji4[428195] ? item.obji4[428195] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="49" class="p3" style="height:70pt" valign="top">Hasil Skrining : @{{ item.obji4[428196] ? item.obji4[428196] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="49" class="p3" style="height:70pt" valign="top">Saran : @{{ item.obji4[428198] ? item.obji4[428198] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="30" class="noborder"></td>
                    <td colspan="19" class="text-center noborder">Perawat</td>
                </tr>
                <tr>
                    <td colspan="30" class="noborder"></td>
                    <td colspan="19" class="text-center noborder"><div id="qrcodep1" style="text-align: center"></td>
                </tr>
                <tr valign="bottom" class="noborder btm">
                    <td colspan="30" class="noborder"></td>
                    <td colspan="19" class="text-center noborder p3">(@{{ item.obji4[428199] ? item.obji4[428199] : '' }})</td>
                </tr>
                <tr>
                    <td colspan="49" class="p3 noborder">Kategori :</td>
                </tr>
                <tr>
                    <td colspan="49" class="p3 noborder">Risiko Tinggi = ≥ 45 (Pasang gelang dan penandaan warna kuning)</td>
                </tr>
                <tr>
                    <td colspan="49" class="p3 noborder">Risiko Sedang = 25 – 44</td>
                </tr>
                <tr>
                    <td class="p3 noborder" colspan="49">Risiko Rendah = 0 – 25</td>
                </tr>
                <tr class="bg-dark text-center">
                    <td colspan="49">INTERVENSI RISIKO JATUH DEWASA</td>
                </tr>
                <tr class="bg-dark-small text-center">
                    <td colspan="49">(Skala MORSE)</td>
                </tr>
                <tr>
                    <td colspan="3" rowspan="2" class="text-center">No</td>
                    <td colspan="16" rowspan="2" class="text-center">Risiko Rendah dan Sedang</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji4[428200] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji4[428201] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji4[428202] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji4[428203] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji4[428204] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji4[428205] | toDate | date:'dd-MM-yyyy'}}</td>
                </tr>
                <tr>
                    <td colspan="5" class="p3">Jam: @{{item.obji4[428200] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji4[428201] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji4[428202] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji4[428203] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji4[428204] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji4[428205] | toDate | date:'HH:mm'}}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3">1</td>
                    <td colspan="16" class="p3">Melakukan orientasi ruangan pada pasien</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428207] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428208] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428209] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428210] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428211] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428212] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">2</td>
                    <td colspan="16" class="p3">Keselamatan lingkungan : hindari ruangan yang kacau balau, dekatkan bel dan telepon, biarkan pintu terbuka, gunakan lampu malam hari serta pagar tempat tidur</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428214] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428215] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428216] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428217] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428218] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428219] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">3</td>
                    <td colspan="16" class="p3">Pastikan roda tempat tidur terkunci</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428221] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428222] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428223] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428224] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428225] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428226] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">4</td>
                    <td colspan="16" class="p3">Posisikan tempat tidur pada posisi terendah</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428228] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428229] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428230] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428231] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428232] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428233] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">5</td>
                    <td colspan="16" class="p3">Pagar Pengaman tempat tidur dinaikkan</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428235] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428236] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428237] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428238] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428239] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428240] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">6</td>
                    <td colspan="16" class="p3">Monitor kebutuhan pasien secara berkala (minimal tiap 4 jam) tawarkan kebelakang (kamar kecil secara teratur)</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428242] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428243] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428244] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428245] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428246] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428247] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">7</td>
                    <td colspan="16" class="p3">Memberikan bantuan saat pasien ambulasi</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428249] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428250] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428251] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428252] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428253] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428254] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">8</td>
                    <td colspan="16" class="p3">Anjurkan pasien menggunakan kaos kaki atau sepatu yang tidak licin</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428256] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428257] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428258] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428259] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428260] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428261] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">9</td>
                    <td colspan="16" class="p3">Meletakkan alat bantu pasien dalam jangkauan ( kacamata, HP, tongkat dan penyangga)</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428263] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428264] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428265] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428266] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428267] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428268] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">10</td>
                    <td colspan="16" class="p3">Gunakan alat bantu jalan (walker, handrail)</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428270] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428271] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428272] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428273] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428274] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428275] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;height:70pt" valign="top">
                    <td colspan="19" class="p3 text-center">Nama & tanda tangan perawat</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428276] ? item.obji4[428276] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428277] ? item.obji4[428277] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428278] ? item.obji4[428278] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428279] ? item.obji4[428279] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428280] ? item.obji4[428280] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428281] ? item.obji4[428281] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="3" rowspan="2" class="text-center">No</td>
                    <td colspan="16" rowspan="2" class="text-center">Risiko Tinggi</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji4[428282] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji4[428283] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji4[428284] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji4[428285] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji4[428286] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji4[428287] | toDate | date:'dd-MM-yyyy'}}</td>
                </tr>
                <tr>
                    <td colspan="5" class="p3">Jam: @{{item.obji4[428282] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji4[428283] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji4[428284] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji4[428285] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji4[428286] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji4[428287] | toDate | date:'HH:mm'}}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">1</td>
                    <td colspan="16" class="p3">Pakaikan stiker risiko jatuh berwarna kuning pada gelang pasien</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428289] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428290] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428291] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428292] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428293] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428294] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">2</td>
                    <td colspan="16" class="p3">Pasangkan tanda peringatan pasien jatuh diatas tempat tidur pasien / di dinding dekat pasien / di gantung dekat pasien</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428296] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428297] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428298] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428299] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428300] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428301] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">3</td>
                    <td colspan="16" class="p3">Pasien ditempelkan didekat nurse station</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428303] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428304] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428305] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428306] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428307] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428308] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">4</td>
                    <td colspan="16" class="p3">Memasangkan handrail tempat tidur bila meninggalkan pasien seorang diri</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428310] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428311] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428312] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428313] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428314] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428315] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">5</td>
                    <td colspan="16" class="p3">Mendampingi pasien saat ke kamar mandi, jangan tinggalkan sendiri dikamar mandi</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428317] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428318] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428319] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428320] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428321] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428322] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">6</td>
                    <td colspan="16" class="p3">Monitor kebutuhan pasien secara berkala (minimal tiap 2 jam )</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428324] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428325] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428326] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428327] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428328] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428329] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">7</td>
                    <td colspan="16" class="p3">Membantu kebutuhan eliminasi pasien saban 2 jam </td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428331] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428332] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428333] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428334] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428335] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428336] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">8</td>
                    <td colspan="16" class="p3">Lantai kamar mandi dengan karpetanti slip/tidak licin, serta anjuran menggunakan tempat duduk dikamar mandi saat pasien mandi </td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428338] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428339] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428340] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428341] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428342] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428343] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;height:70pt" valign="top">
                    <td colspan="19" class="p3 text-center">Nama & tanda tangan perawat</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428344] ? item.obji4[428344] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428345] ? item.obji4[428345] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428346] ? item.obji4[428346] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428347] ? item.obji4[428347] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428348] ? item.obji4[428348] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji4[428349] ? item.obji4[428349] : '' }}</td>
                </tr>
            </table>
        </div>
    @endif

    @if (!empty($res['d5']))
        <div class="format">
            <table width='100%'>
                <tr height=20 class="noborder">
                    <td colspan="8" rowspan="4" class="p3 noborder-tb text-center">
                        @if(stripos(\Request::url(), 'localhost') !== FALSE)
                            <img src="{{ asset('img/logo_only.png') }}" alt="" style="width: 60px;display:block; margin:auto;">
                            @else
                            <img src="{{ asset('service/img/logo_only.png') }}" alt="" style="width: 60px;display:block; margin:auto;">
                            @endif
                    </td>
                    <td colspan="17" rowspan="4" class="noborder-tb text-center" >
                        <strong>{!! $res['profile']->namalengkap !!}</strong> <br>{!! $res['profile']->alamatlengkap !!}<br>TELP : (0413) 81292
                    </td>
                    <td colspan="6" class="noborder">No. RM </td>
                    <td colspan="13" class="noborder">
                        : {!! $res['d1'][0]->nocm  !!}
                    </td>
                    <td colspan="5" rowspan="2" class="border-lr bg-dark" style="font-size: xxx-large;text-align:center">RM</td>
                </tr>
                <tr class="noborder">
                    <td colspan="6" class="noborder">Nama Lengkap</td>
                    <td colspan="11" class="noborder">
                        : {!!  $res['d1'][0]->namapasien  !!}
                    </td>
                    <td colspan="2" class="noborder">{!!  $res['d1'][0]->jeniskelamin == 'PEREMPUAN' ? '(P)' : '(L)'  !!}</td>
                </tr>
                <tr class="noborder">
                    <td colspan="6" class="noborder">Tanggal Lahir</td>
                    <td colspan="13" class="noborder">
                        : {!! date('d-m-Y',strtotime( $res['d1'][0]->tgllahir  )) !!}
                    </td>
                    <td colspan="5" class="border-lr" rowspan="2" style="font-size: xx-large;text-align:center">38.2</td>
                </tr>
                <tr class="noborder">
                    <td colspan="6" class="noborder">NIK</td>
                    <td colspan="11" class="noborder">
                        : {!! $res['d1'][0]->noidentitas  !!}
                    </td>
                </tr>
                <tr class="bordered bg-dark">
                    <th colspan="49" height="20pt">ASESMEN LANJUT RESIKO JATUH PASIEN DEWASA</th>
                </tr>
                <tr class="bordered bg-dark-small">
                    <th colspan="49" height="20pt">(diisi oleh Dietisien)</th>
                </tr>
                <tr class="text-center">
                    <td colspan="12" rowspan="3">Faktor Risiko</td>
                    <td colspan="12" rowspan="3">Parameter</td>
                    <td colspan="25">Tanggal /Jam</td>
                </tr>
                <tr class="text-center">
                    <td colspan="5" rowspan="2" valign="top" class="p2">Skor</td>
                    <td colspan="3">1</td>
                    <td colspan="3">2</td>
                    <td colspan="3">3</td>
                    <td colspan="3">4</td>
                    <td colspan="3">5</td>
                    <td colspan="5">6</td>
                </tr>
                <tr class="text-center">
                    <td colspan="3">@{{item.obji5[428100] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                    <td colspan="3">@{{item.obji5[428101] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                    <td colspan="3">@{{item.obji5[428102] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                    <td colspan="3">@{{item.obji5[428103] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                    <td colspan="3">@{{item.obji5[428104] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                    <td colspan="5">@{{item.obji5[428105] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                </tr>
                <tr>
                    <td colspan="12" class="text-center noborder">Riwayat Jatuh
                    </td>
                    <td colspan="12" class="p3">Ya</td>
                    <td colspan="5" class="text-center">25</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428106] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428107] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428108] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428109] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428110] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji5[428111] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="12" class="text-center noborder">( 1 tahun terakhir)
                    </td>
                    <td colspan="12" class="p3">Tidak</td>
                    <td colspan="5" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428112] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428113] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428114] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428115] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428116] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji5[428117] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" class="text-center noborder">
                        Diagnosa sekunder
                    </td>
                    <td colspan="12" class="p3">Ya</td>
                    <td colspan="5" class="text-center">15</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428118] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428119] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428120] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428121] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428122] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji5[428123] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="12" class="text-center noborder">
                        (≥2 Diagnosis Medis )
                    </td>
                    <td colspan="12" class="p3">Tidak</td>
                    <td colspan="5" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428124] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428125] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428126] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428127] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428128] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji5[428129] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" rowspan="3" valign="top" class="p2 text-center noborder">
                        Alat Bantu
                    </td>
                    <td colspan="12" class="p3">Berpegangan pada perabot</td>
                    <td colspan="5" class="text-center">30</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428130] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428131] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428132] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428133] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428134] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji5[428135] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" class="p3">Tongkat/ alat penopang</td>
                    <td colspan="5" class="text-center">15</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428136] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428137] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428138] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428139] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428140] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji5[428141] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="12" class="p3">Tidak ada / kursi roda / perawat /tirah baring</td>
                    <td colspan="5" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428142] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428143] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428144] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428145] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428146] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji5[428147] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" rowspan="2" valign="top" class="p2 text-center noborder">
                        Terpasang Infus
                    </td>
                    <td colspan="12" class="p3">Ya</td>
                    <td colspan="5" class="text-center">20</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428148] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428149] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428150] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428151] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428152] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji5[428153] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="12" class="p3">Tidak</td>
                    <td colspan="5" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428154] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428155] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428156] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428157] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428158] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji5[428159] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" rowspan="3" valign="top" class="p2 text-center noborder">
                        Gaya Berjalan
                    </td>
                    <td colspan="12" class="p3">Terganggu</td>
                    <td colspan="5" class="text-center">20</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428160] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428161] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428162] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428163] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428164] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji5[428165] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" class="p3">Lemah</td>
                    <td colspan="5" class="text-center">10</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428166] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428167] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428168] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428169] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428170] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji5[428171] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="12" class="p3">Normal /tirah baring/immobilisasi</td>
                    <td colspan="5" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428172] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428173] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428174] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428175] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428176] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji5[428177] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" rowspan="2" valign="top" class="p2 text-center noborder">
                        Status Mental
                    </td>
                    <td colspan="12" class="p3">Sering lupa akan keterbatasan yang dimiliki</td>
                    <td colspan="5" class="text-center">15</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428178] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428179] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428180] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428181] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428182] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji5[428183] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="12" class="p3">Sadar akan kemampuan diri sendiri</td>
                    <td colspan="5" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428184] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428185] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428186] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428187] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428188] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji5[428189] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="29" class="bg-dark text-center">TOTAL</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428190] ? item.obji5[428190] : '' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428191] ? item.obji5[428191] : '' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428192] ? item.obji5[428192] : '' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428193] ? item.obji5[428193] : '' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[428194] ? item.obji5[428194] : '' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji5[428195] ? item.obji5[428195] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="49" class="p3" style="height:70pt" valign="top">Hasil Skrining : @{{ item.obji5[428196] ? item.obji5[428196] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="49" class="p3" style="height:70pt" valign="top">Saran : @{{ item.obji5[428198] ? item.obji5[428198] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="30" class="noborder"></td>
                    <td colspan="19" class="text-center noborder">Perawat</td>
                </tr>
                <tr>
                    <td colspan="30" class="noborder"></td>
                    <td colspan="19" class="text-center noborder"><div id="qrcodep1" style="text-align: center"></td>
                </tr>
                <tr valign="bottom" class="noborder btm">
                    <td colspan="30" class="noborder"></td>
                    <td colspan="19" class="text-center noborder p3">(@{{ item.obji5[428199] ? item.obji5[428199] : '' }})</td>
                </tr>
                <tr>
                    <td colspan="49" class="p3 noborder">Kategori :</td>
                </tr>
                <tr>
                    <td colspan="49" class="p3 noborder">Risiko Tinggi = ≥ 45 (Pasang gelang dan penandaan warna kuning)</td>
                </tr>
                <tr>
                    <td colspan="49" class="p3 noborder">Risiko Sedang = 25 – 44</td>
                </tr>
                <tr>
                    <td class="p3 noborder" colspan="49">Risiko Rendah = 0 – 25</td>
                </tr>
                <tr class="bg-dark text-center">
                    <td colspan="49">INTERVENSI RISIKO JATUH DEWASA</td>
                </tr>
                <tr class="bg-dark-small text-center">
                    <td colspan="49">(Skala MORSE)</td>
                </tr>
                <tr>
                    <td colspan="3" rowspan="2" class="text-center">No</td>
                    <td colspan="16" rowspan="2" class="text-center">Risiko Rendah dan Sedang</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji5[428200] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji5[428201] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji5[428202] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji5[428203] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji5[428204] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji5[428205] | toDate | date:'dd-MM-yyyy'}}</td>
                </tr>
                <tr>
                    <td colspan="5" class="p3">Jam: @{{item.obji5[428200] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji5[428201] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji5[428202] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji5[428203] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji5[428204] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji5[428205] | toDate | date:'HH:mm'}}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3">1</td>
                    <td colspan="16" class="p3">Melakukan orientasi ruangan pada pasien</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428207] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428208] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428209] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428210] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428211] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428212] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">2</td>
                    <td colspan="16" class="p3">Keselamatan lingkungan : hindari ruangan yang kacau balau, dekatkan bel dan telepon, biarkan pintu terbuka, gunakan lampu malam hari serta pagar tempat tidur</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428214] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428215] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428216] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428217] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428218] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428219] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">3</td>
                    <td colspan="16" class="p3">Pastikan roda tempat tidur terkunci</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428221] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428222] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428223] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428224] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428225] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428226] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">4</td>
                    <td colspan="16" class="p3">Posisikan tempat tidur pada posisi terendah</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428228] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428229] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428230] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428231] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428232] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428233] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">5</td>
                    <td colspan="16" class="p3">Pagar Pengaman tempat tidur dinaikkan</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428235] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428236] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428237] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428238] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428239] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428240] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">6</td>
                    <td colspan="16" class="p3">Monitor kebutuhan pasien secara berkala (minimal tiap 4 jam) tawarkan kebelakang (kamar kecil secara teratur)</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428242] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428243] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428244] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428245] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428246] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428247] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">7</td>
                    <td colspan="16" class="p3">Memberikan bantuan saat pasien ambulasi</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428249] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428250] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428251] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428252] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428253] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428254] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">8</td>
                    <td colspan="16" class="p3">Anjurkan pasien menggunakan kaos kaki atau sepatu yang tidak licin</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428256] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428257] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428258] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428259] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428260] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428261] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">9</td>
                    <td colspan="16" class="p3">Meletakkan alat bantu pasien dalam jangkauan ( kacamata, HP, tongkat dan penyangga)</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428263] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428264] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428265] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428266] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428267] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428268] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">10</td>
                    <td colspan="16" class="p3">Gunakan alat bantu jalan (walker, handrail)</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428270] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428271] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428272] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428273] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428274] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428275] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;height:70pt" valign="top">
                    <td colspan="19" class="p3 text-center">Nama & tanda tangan perawat</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428276] ? item.obji5[428276] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428277] ? item.obji5[428277] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428278] ? item.obji5[428278] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428279] ? item.obji5[428279] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428280] ? item.obji5[428280] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428281] ? item.obji5[428281] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="3" rowspan="2" class="text-center">No</td>
                    <td colspan="16" rowspan="2" class="text-center">Risiko Tinggi</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji5[428282] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji5[428283] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji5[428284] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji5[428285] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji5[428286] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji5[428287] | toDate | date:'dd-MM-yyyy'}}</td>
                </tr>
                <tr>
                    <td colspan="5" class="p3">Jam: @{{item.obji5[428282] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji5[428283] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji5[428284] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji5[428285] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji5[428286] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji5[428287] | toDate | date:'HH:mm'}}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">1</td>
                    <td colspan="16" class="p3">Pakaikan stiker risiko jatuh berwarna kuning pada gelang pasien</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428289] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428290] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428291] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428292] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428293] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428294] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">2</td>
                    <td colspan="16" class="p3">Pasangkan tanda peringatan pasien jatuh diatas tempat tidur pasien / di dinding dekat pasien / di gantung dekat pasien</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428296] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428297] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428298] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428299] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428300] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428301] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">3</td>
                    <td colspan="16" class="p3">Pasien ditempelkan didekat nurse station</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428303] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428304] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428305] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428306] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428307] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428308] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">4</td>
                    <td colspan="16" class="p3">Memasangkan handrail tempat tidur bila meninggalkan pasien seorang diri</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428310] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428311] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428312] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428313] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428314] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428315] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">5</td>
                    <td colspan="16" class="p3">Mendampingi pasien saat ke kamar mandi, jangan tinggalkan sendiri dikamar mandi</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428317] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428318] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428319] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428320] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428321] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428322] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">6</td>
                    <td colspan="16" class="p3">Monitor kebutuhan pasien secara berkala (minimal tiap 2 jam )</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428324] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428325] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428326] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428327] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428328] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428329] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">7</td>
                    <td colspan="16" class="p3">Membantu kebutuhan eliminasi pasien saban 2 jam </td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428331] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428332] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428333] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428334] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428335] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428336] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">8</td>
                    <td colspan="16" class="p3">Lantai kamar mandi dengan karpetanti slip/tidak licin, serta anjuran menggunakan tempat duduk dikamar mandi saat pasien mandi </td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428338] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428339] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428340] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428341] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428342] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428343] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;height:70pt" valign="top">
                    <td colspan="19" class="p3 text-center">Nama & tanda tangan perawat</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428344] ? item.obji5[428344] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428345] ? item.obji5[428345] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428346] ? item.obji5[428346] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428347] ? item.obji5[428347] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428348] ? item.obji5[428348] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji5[428349] ? item.obji5[428349] : '' }}</td>
                </tr>
            </table>
        </div>
    @endif

    @if (!empty($res['d6']))
        <div class="format">
            <table width='100%'>
                <tr height=20 class="noborder">
                    <td colspan="8" rowspan="4" class="p3 noborder-tb text-center">
                        @if(stripos(\Request::url(), 'localhost') !== FALSE)
                            <img src="{{ asset('img/logo_only.png') }}" alt="" style="width: 60px;display:block; margin:auto;">
                            @else
                            <img src="{{ asset('service/img/logo_only.png') }}" alt="" style="width: 60px;display:block; margin:auto;">
                            @endif
                    </td>
                    <td colspan="17" rowspan="4" class="noborder-tb text-center" >
                        <strong>{!! $res['profile']->namalengkap !!}</strong> <br>{!! $res['profile']->alamatlengkap !!}<br>TELP : (0413) 81292
                    </td>
                    <td colspan="6" class="noborder">No. RM </td>
                    <td colspan="13" class="noborder">
                        : {!! $res['d1'][0]->nocm  !!}
                    </td>
                    <td colspan="5" rowspan="2" class="border-lr bg-dark" style="font-size: xxx-large;text-align:center">RM</td>
                </tr>
                <tr class="noborder">
                    <td colspan="6" class="noborder">Nama Lengkap</td>
                    <td colspan="11" class="noborder">
                        : {!!  $res['d1'][0]->namapasien  !!}
                    </td>
                    <td colspan="2" class="noborder">{!!  $res['d1'][0]->jeniskelamin == 'PEREMPUAN' ? '(P)' : '(L)'  !!}</td>
                </tr>
                <tr class="noborder">
                    <td colspan="6" class="noborder">Tanggal Lahir</td>
                    <td colspan="13" class="noborder">
                        : {!! date('d-m-Y',strtotime( $res['d1'][0]->tgllahir  )) !!}
                    </td>
                    <td colspan="5" class="border-lr" rowspan="2" style="font-size: xx-large;text-align:center">38.2</td>
                </tr>
                <tr class="noborder">
                    <td colspan="6" class="noborder">NIK</td>
                    <td colspan="11" class="noborder">
                        : {!! $res['d1'][0]->noidentitas  !!}
                    </td>
                </tr>
                <tr class="bordered bg-dark">
                    <th colspan="49" height="20pt">ASESMEN LANJUT RESIKO JATUH PASIEN DEWASA</th>
                </tr>
                <tr class="bordered bg-dark-small">
                    <th colspan="49" height="20pt">(diisi oleh Dietisien)</th>
                </tr>
                <tr class="text-center">
                    <td colspan="12" rowspan="3">Faktor Risiko</td>
                    <td colspan="12" rowspan="3">Parameter</td>
                    <td colspan="25">Tanggal /Jam</td>
                </tr>
                <tr class="text-center">
                    <td colspan="5" rowspan="2" valign="top" class="p2">Skor</td>
                    <td colspan="3">1</td>
                    <td colspan="3">2</td>
                    <td colspan="3">3</td>
                    <td colspan="3">4</td>
                    <td colspan="3">5</td>
                    <td colspan="5">6</td>
                </tr>
                <tr class="text-center">
                    <td colspan="3">@{{item.obji6[428100] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                    <td colspan="3">@{{item.obji6[428101] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                    <td colspan="3">@{{item.obji6[428102] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                    <td colspan="3">@{{item.obji6[428103] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                    <td colspan="3">@{{item.obji6[428104] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                    <td colspan="5">@{{item.obji6[428105] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                </tr>
                <tr>
                    <td colspan="12" class="text-center noborder">Riwayat Jatuh
                    </td>
                    <td colspan="12" class="p3">Ya</td>
                    <td colspan="5" class="text-center">25</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428106] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428107] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428108] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428109] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428110] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji6[428111] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="12" class="text-center noborder">( 1 tahun terakhir)
                    </td>
                    <td colspan="12" class="p3">Tidak</td>
                    <td colspan="5" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428112] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428113] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428114] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428115] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428116] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji6[428117] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" class="text-center noborder">
                        Diagnosa sekunder
                    </td>
                    <td colspan="12" class="p3">Ya</td>
                    <td colspan="5" class="text-center">15</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428118] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428119] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428120] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428121] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428122] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji6[428123] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="12" class="text-center noborder">
                        (≥2 Diagnosis Medis )
                    </td>
                    <td colspan="12" class="p3">Tidak</td>
                    <td colspan="5" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428124] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428125] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428126] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428127] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428128] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji6[428129] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" rowspan="3" valign="top" class="p2 text-center noborder">
                        Alat Bantu
                    </td>
                    <td colspan="12" class="p3">Berpegangan pada perabot</td>
                    <td colspan="5" class="text-center">30</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428130] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428131] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428132] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428133] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428134] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji6[428135] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" class="p3">Tongkat/ alat penopang</td>
                    <td colspan="5" class="text-center">15</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428136] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428137] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428138] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428139] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428140] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji6[428141] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="12" class="p3">Tidak ada / kursi roda / perawat /tirah baring</td>
                    <td colspan="5" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428142] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428143] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428144] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428145] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428146] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji6[428147] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" rowspan="2" valign="top" class="p2 text-center noborder">
                        Terpasang Infus
                    </td>
                    <td colspan="12" class="p3">Ya</td>
                    <td colspan="5" class="text-center">20</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428148] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428149] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428150] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428151] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428152] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji6[428153] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="12" class="p3">Tidak</td>
                    <td colspan="5" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428154] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428155] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428156] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428157] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428158] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji6[428159] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" rowspan="3" valign="top" class="p2 text-center noborder">
                        Gaya Berjalan
                    </td>
                    <td colspan="12" class="p3">Terganggu</td>
                    <td colspan="5" class="text-center">20</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428160] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428161] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428162] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428163] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428164] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji6[428165] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" class="p3">Lemah</td>
                    <td colspan="5" class="text-center">10</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428166] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428167] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428168] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428169] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428170] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji6[428171] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="12" class="p3">Normal /tirah baring/immobilisasi</td>
                    <td colspan="5" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428172] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428173] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428174] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428175] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428176] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji6[428177] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" rowspan="2" valign="top" class="p2 text-center noborder">
                        Status Mental
                    </td>
                    <td colspan="12" class="p3">Sering lupa akan keterbatasan yang dimiliki</td>
                    <td colspan="5" class="text-center">15</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428178] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428179] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428180] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428181] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428182] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji6[428183] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="12" class="p3">Sadar akan kemampuan diri sendiri</td>
                    <td colspan="5" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428184] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428185] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428186] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428187] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428188] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji6[428189] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="29" class="bg-dark text-center">TOTAL</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428190] ? item.obji6[428190] : '' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428191] ? item.obji6[428191] : '' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428192] ? item.obji6[428192] : '' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428193] ? item.obji6[428193] : '' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[428194] ? item.obji6[428194] : '' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji6[428195] ? item.obji6[428195] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="49" class="p3" style="height:70pt" valign="top">Hasil Skrining : @{{ item.obji6[428196] ? item.obji6[428196] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="49" class="p3" style="height:70pt" valign="top">Saran : @{{ item.obji6[428198] ? item.obji6[428198] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="30" class="noborder"></td>
                    <td colspan="19" class="text-center noborder">Perawat</td>
                </tr>
                <tr>
                    <td colspan="30" class="noborder"></td>
                    <td colspan="19" class="text-center noborder"><div id="qrcodep1" style="text-align: center"></td>
                </tr>
                <tr valign="bottom" class="noborder btm">
                    <td colspan="30" class="noborder"></td>
                    <td colspan="19" class="text-center noborder p3">(@{{ item.obji6[428199] ? item.obji6[428199] : '' }})</td>
                </tr>
                <tr>
                    <td colspan="49" class="p3 noborder">Kategori :</td>
                </tr>
                <tr>
                    <td colspan="49" class="p3 noborder">Risiko Tinggi = ≥ 45 (Pasang gelang dan penandaan warna kuning)</td>
                </tr>
                <tr>
                    <td colspan="49" class="p3 noborder">Risiko Sedang = 25 – 44</td>
                </tr>
                <tr>
                    <td class="p3 noborder" colspan="49">Risiko Rendah = 0 – 25</td>
                </tr>
                <tr class="bg-dark text-center">
                    <td colspan="49">INTERVENSI RISIKO JATUH DEWASA</td>
                </tr>
                <tr class="bg-dark-small text-center">
                    <td colspan="49">(Skala MORSE)</td>
                </tr>
                <tr>
                    <td colspan="3" rowspan="2" class="text-center">No</td>
                    <td colspan="16" rowspan="2" class="text-center">Risiko Rendah dan Sedang</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji6[428200] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji6[428201] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji6[428202] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji6[428203] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji6[428204] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji6[428205] | toDate | date:'dd-MM-yyyy'}}</td>
                </tr>
                <tr>
                    <td colspan="5" class="p3">Jam: @{{item.obji6[428200] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji6[428201] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji6[428202] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji6[428203] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji6[428204] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji6[428205] | toDate | date:'HH:mm'}}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3">1</td>
                    <td colspan="16" class="p3">Melakukan orientasi ruangan pada pasien</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428207] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428208] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428209] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428210] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428211] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428212] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">2</td>
                    <td colspan="16" class="p3">Keselamatan lingkungan : hindari ruangan yang kacau balau, dekatkan bel dan telepon, biarkan pintu terbuka, gunakan lampu malam hari serta pagar tempat tidur</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428214] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428215] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428216] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428217] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428218] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428219] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">3</td>
                    <td colspan="16" class="p3">Pastikan roda tempat tidur terkunci</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428221] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428222] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428223] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428224] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428225] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428226] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">4</td>
                    <td colspan="16" class="p3">Posisikan tempat tidur pada posisi terendah</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428228] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428229] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428230] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428231] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428232] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428233] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">5</td>
                    <td colspan="16" class="p3">Pagar Pengaman tempat tidur dinaikkan</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428235] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428236] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428237] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428238] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428239] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428240] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">6</td>
                    <td colspan="16" class="p3">Monitor kebutuhan pasien secara berkala (minimal tiap 4 jam) tawarkan kebelakang (kamar kecil secara teratur)</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428242] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428243] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428244] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428245] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428246] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428247] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">7</td>
                    <td colspan="16" class="p3">Memberikan bantuan saat pasien ambulasi</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428249] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428250] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428251] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428252] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428253] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428254] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">8</td>
                    <td colspan="16" class="p3">Anjurkan pasien menggunakan kaos kaki atau sepatu yang tidak licin</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428256] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428257] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428258] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428259] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428260] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428261] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">9</td>
                    <td colspan="16" class="p3">Meletakkan alat bantu pasien dalam jangkauan ( kacamata, HP, tongkat dan penyangga)</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428263] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428264] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428265] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428266] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428267] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428268] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">10</td>
                    <td colspan="16" class="p3">Gunakan alat bantu jalan (walker, handrail)</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428270] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428271] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428272] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428273] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428274] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428275] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;height:70pt" valign="top">
                    <td colspan="19" class="p3 text-center">Nama & tanda tangan perawat</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428276] ? item.obji6[428276] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428277] ? item.obji6[428277] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428278] ? item.obji6[428278] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428279] ? item.obji6[428279] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428280] ? item.obji6[428280] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428281] ? item.obji6[428281] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="3" rowspan="2" class="text-center">No</td>
                    <td colspan="16" rowspan="2" class="text-center">Risiko Tinggi</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji6[428282] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji6[428283] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji6[428284] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji6[428285] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji6[428286] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji6[428287] | toDate | date:'dd-MM-yyyy'}}</td>
                </tr>
                <tr>
                    <td colspan="5" class="p3">Jam: @{{item.obji6[428282] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji6[428283] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji6[428284] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji6[428285] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji6[428286] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji6[428287] | toDate | date:'HH:mm'}}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">1</td>
                    <td colspan="16" class="p3">Pakaikan stiker risiko jatuh berwarna kuning pada gelang pasien</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428289] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428290] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428291] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428292] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428293] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428294] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">2</td>
                    <td colspan="16" class="p3">Pasangkan tanda peringatan pasien jatuh diatas tempat tidur pasien / di dinding dekat pasien / di gantung dekat pasien</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428296] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428297] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428298] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428299] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428300] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428301] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">3</td>
                    <td colspan="16" class="p3">Pasien ditempelkan didekat nurse station</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428303] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428304] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428305] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428306] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428307] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428308] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">4</td>
                    <td colspan="16" class="p3">Memasangkan handrail tempat tidur bila meninggalkan pasien seorang diri</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428310] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428311] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428312] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428313] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428314] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428315] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">5</td>
                    <td colspan="16" class="p3">Mendampingi pasien saat ke kamar mandi, jangan tinggalkan sendiri dikamar mandi</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428317] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428318] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428319] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428320] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428321] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428322] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">6</td>
                    <td colspan="16" class="p3">Monitor kebutuhan pasien secara berkala (minimal tiap 2 jam )</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428324] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428325] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428326] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428327] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428328] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428329] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">7</td>
                    <td colspan="16" class="p3">Membantu kebutuhan eliminasi pasien saban 2 jam </td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428331] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428332] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428333] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428334] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428335] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428336] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">8</td>
                    <td colspan="16" class="p3">Lantai kamar mandi dengan karpetanti slip/tidak licin, serta anjuran menggunakan tempat duduk dikamar mandi saat pasien mandi </td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428338] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428339] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428340] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428341] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428342] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428343] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;height:70pt" valign="top">
                    <td colspan="19" class="p3 text-center">Nama & tanda tangan perawat</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428344] ? item.obji6[428344] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428345] ? item.obji6[428345] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428346] ? item.obji6[428346] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428347] ? item.obji6[428347] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428348] ? item.obji6[428348] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji6[428349] ? item.obji6[428349] : '' }}</td>
                </tr>
            </table>
        </div>
    @endif

    @if (!empty($res['d7']))
        <div class="format">
            <table width='100%'>
                <tr height=20 class="noborder">
                    <td colspan="8" rowspan="4" class="p3 noborder-tb text-center">
                        @if(stripos(\Request::url(), 'localhost') !== FALSE)
                            <img src="{{ asset('img/logo_only.png') }}" alt="" style="width: 60px;display:block; margin:auto;">
                            @else
                            <img src="{{ asset('service/img/logo_only.png') }}" alt="" style="width: 60px;display:block; margin:auto;">
                            @endif
                    </td>
                    <td colspan="17" rowspan="4" class="noborder-tb text-center" >
                        <strong>{!! $res['profile']->namalengkap !!}</strong> <br>{!! $res['profile']->alamatlengkap !!}<br>TELP : (0413) 81292
                    </td>
                    <td colspan="6" class="noborder">No. RM </td>
                    <td colspan="13" class="noborder">
                        : {!! $res['d1'][0]->nocm  !!}
                    </td>
                    <td colspan="5" rowspan="2" class="border-lr bg-dark" style="font-size: xxx-large;text-align:center">RM</td>
                </tr>
                <tr class="noborder">
                    <td colspan="6" class="noborder">Nama Lengkap</td>
                    <td colspan="11" class="noborder">
                        : {!!  $res['d1'][0]->namapasien  !!}
                    </td>
                    <td colspan="2" class="noborder">{!!  $res['d1'][0]->jeniskelamin == 'PEREMPUAN' ? '(P)' : '(L)'  !!}</td>
                </tr>
                <tr class="noborder">
                    <td colspan="6" class="noborder">Tanggal Lahir</td>
                    <td colspan="13" class="noborder">
                        : {!! date('d-m-Y',strtotime( $res['d1'][0]->tgllahir  )) !!}
                    </td>
                    <td colspan="5" class="border-lr" rowspan="2" style="font-size: xx-large;text-align:center">38.2</td>
                </tr>
                <tr class="noborder">
                    <td colspan="6" class="noborder">NIK</td>
                    <td colspan="11" class="noborder">
                        : {!! $res['d1'][0]->noidentitas  !!}
                    </td>
                </tr>
                <tr class="bordered bg-dark">
                    <th colspan="49" height="20pt">ASESMEN LANJUT RESIKO JATUH PASIEN DEWASA</th>
                </tr>
                <tr class="bordered bg-dark-small">
                    <th colspan="49" height="20pt">(diisi oleh Dietisien)</th>
                </tr>
                <tr class="text-center">
                    <td colspan="12" rowspan="3">Faktor Risiko</td>
                    <td colspan="12" rowspan="3">Parameter</td>
                    <td colspan="25">Tanggal /Jam</td>
                </tr>
                <tr class="text-center">
                    <td colspan="5" rowspan="2" valign="top" class="p2">Skor</td>
                    <td colspan="3">1</td>
                    <td colspan="3">2</td>
                    <td colspan="3">3</td>
                    <td colspan="3">4</td>
                    <td colspan="3">5</td>
                    <td colspan="5">6</td>
                </tr>
                <tr class="text-center">
                    <td colspan="3">@{{item.obji7[428100] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                    <td colspan="3">@{{item.obji7[428101] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                    <td colspan="3">@{{item.obji7[428102] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                    <td colspan="3">@{{item.obji7[428103] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                    <td colspan="3">@{{item.obji7[428104] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                    <td colspan="5">@{{item.obji7[428105] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                </tr>
                <tr>
                    <td colspan="12" class="text-center noborder">Riwayat Jatuh
                    </td>
                    <td colspan="12" class="p3">Ya</td>
                    <td colspan="5" class="text-center">25</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428106] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428107] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428108] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428109] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428110] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji7[428111] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="12" class="text-center noborder">( 1 tahun terakhir)
                    </td>
                    <td colspan="12" class="p3">Tidak</td>
                    <td colspan="5" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428112] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428113] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428114] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428115] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428116] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji7[428117] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" class="text-center noborder">
                        Diagnosa sekunder
                    </td>
                    <td colspan="12" class="p3">Ya</td>
                    <td colspan="5" class="text-center">15</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428118] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428119] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428120] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428121] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428122] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji7[428123] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="12" class="text-center noborder">
                        (≥2 Diagnosis Medis )
                    </td>
                    <td colspan="12" class="p3">Tidak</td>
                    <td colspan="5" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428124] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428125] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428126] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428127] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428128] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji7[428129] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" rowspan="3" valign="top" class="p2 text-center noborder">
                        Alat Bantu
                    </td>
                    <td colspan="12" class="p3">Berpegangan pada perabot</td>
                    <td colspan="5" class="text-center">30</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428130] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428131] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428132] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428133] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428134] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji7[428135] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" class="p3">Tongkat/ alat penopang</td>
                    <td colspan="5" class="text-center">15</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428136] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428137] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428138] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428139] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428140] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji7[428141] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="12" class="p3">Tidak ada / kursi roda / perawat /tirah baring</td>
                    <td colspan="5" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428142] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428143] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428144] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428145] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428146] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji7[428147] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" rowspan="2" valign="top" class="p2 text-center noborder">
                        Terpasang Infus
                    </td>
                    <td colspan="12" class="p3">Ya</td>
                    <td colspan="5" class="text-center">20</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428148] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428149] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428150] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428151] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428152] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji7[428153] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="12" class="p3">Tidak</td>
                    <td colspan="5" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428154] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428155] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428156] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428157] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428158] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji7[428159] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" rowspan="3" valign="top" class="p2 text-center noborder">
                        Gaya Berjalan
                    </td>
                    <td colspan="12" class="p3">Terganggu</td>
                    <td colspan="5" class="text-center">20</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428160] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428161] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428162] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428163] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428164] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji7[428165] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" class="p3">Lemah</td>
                    <td colspan="5" class="text-center">10</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428166] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428167] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428168] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428169] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428170] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji7[428171] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="12" class="p3">Normal /tirah baring/immobilisasi</td>
                    <td colspan="5" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428172] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428173] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428174] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428175] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428176] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji7[428177] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="12" rowspan="2" valign="top" class="p2 text-center noborder">
                        Status Mental
                    </td>
                    <td colspan="12" class="p3">Sering lupa akan keterbatasan yang dimiliki</td>
                    <td colspan="5" class="text-center">15</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428178] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428179] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428180] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428181] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428182] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji7[428183] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="12" class="p3">Sadar akan kemampuan diri sendiri</td>
                    <td colspan="5" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428184] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428185] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428186] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428187] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428188] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji7[428189] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr>
                    <td colspan="29" class="bg-dark text-center">TOTAL</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428190] ? item.obji7[428190] : '' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428191] ? item.obji7[428191] : '' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428192] ? item.obji7[428192] : '' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428193] ? item.obji7[428193] : '' }}</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[428194] ? item.obji7[428194] : '' }}</td>
                    <td colspan="5" class="text-center">@{{ item.obji7[428195] ? item.obji7[428195] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="49" class="p3" style="height:70pt" valign="top">Hasil Skrining : @{{ item.obji7[428196] ? item.obji7[428196] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="49" class="p3" style="height:70pt" valign="top">Saran : @{{ item.obji7[428198] ? item.obji7[428198] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="30" class="noborder"></td>
                    <td colspan="19" class="text-center noborder">Perawat</td>
                </tr>
                <tr>
                    <td colspan="30" class="noborder"></td>
                    <td colspan="19" class="text-center noborder"><div id="qrcodep1" style="text-align: center"></td>
                </tr>
                <tr valign="bottom" class="noborder btm">
                    <td colspan="30" class="noborder"></td>
                    <td colspan="19" class="text-center noborder p3">(@{{ item.obji7[428199] ? item.obji7[428199] : '' }})</td>
                </tr>
                <tr>
                    <td colspan="49" class="p3 noborder">Kategori :</td>
                </tr>
                <tr>
                    <td colspan="49" class="p3 noborder">Risiko Tinggi = ≥ 45 (Pasang gelang dan penandaan warna kuning)</td>
                </tr>
                <tr>
                    <td colspan="49" class="p3 noborder">Risiko Sedang = 25 – 44</td>
                </tr>
                <tr>
                    <td class="p3 noborder" colspan="49">Risiko Rendah = 0 – 25</td>
                </tr>
                <tr class="bg-dark text-center">
                    <td colspan="49">INTERVENSI RISIKO JATUH DEWASA</td>
                </tr>
                <tr class="bg-dark-small text-center">
                    <td colspan="49">(Skala MORSE)</td>
                </tr>
                <tr>
                    <td colspan="3" rowspan="2" class="text-center">No</td>
                    <td colspan="16" rowspan="2" class="text-center">Risiko Rendah dan Sedang</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji7[428200] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji7[428201] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji7[428202] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji7[428203] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji7[428204] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji7[428205] | toDate | date:'dd-MM-yyyy'}}</td>
                </tr>
                <tr>
                    <td colspan="5" class="p3">Jam: @{{item.obji7[428200] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji7[428201] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji7[428202] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji7[428203] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji7[428204] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji7[428205] | toDate | date:'HH:mm'}}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3">1</td>
                    <td colspan="16" class="p3">Melakukan orientasi ruangan pada pasien</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428207] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428208] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428209] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428210] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428211] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428212] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">2</td>
                    <td colspan="16" class="p3">Keselamatan lingkungan : hindari ruangan yang kacau balau, dekatkan bel dan telepon, biarkan pintu terbuka, gunakan lampu malam hari serta pagar tempat tidur</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428214] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428215] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428216] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428217] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428218] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428219] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">3</td>
                    <td colspan="16" class="p3">Pastikan roda tempat tidur terkunci</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428221] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428222] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428223] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428224] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428225] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428226] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">4</td>
                    <td colspan="16" class="p3">Posisikan tempat tidur pada posisi terendah</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428228] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428229] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428230] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428231] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428232] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428233] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">5</td>
                    <td colspan="16" class="p3">Pagar Pengaman tempat tidur dinaikkan</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428235] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428236] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428237] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428238] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428239] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428240] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">6</td>
                    <td colspan="16" class="p3">Monitor kebutuhan pasien secara berkala (minimal tiap 4 jam) tawarkan kebelakang (kamar kecil secara teratur)</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428242] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428243] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428244] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428245] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428246] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428247] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">7</td>
                    <td colspan="16" class="p3">Memberikan bantuan saat pasien ambulasi</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428249] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428250] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428251] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428252] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428253] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428254] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">8</td>
                    <td colspan="16" class="p3">Anjurkan pasien menggunakan kaos kaki atau sepatu yang tidak licin</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428256] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428257] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428258] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428259] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428260] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428261] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">9</td>
                    <td colspan="16" class="p3">Meletakkan alat bantu pasien dalam jangkauan ( kacamata, HP, tongkat dan penyangga)</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428263] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428264] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428265] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428266] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428267] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428268] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">10</td>
                    <td colspan="16" class="p3">Gunakan alat bantu jalan (walker, handrail)</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428270] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428271] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428272] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428273] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428274] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428275] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;height:70pt" valign="top">
                    <td colspan="19" class="p3 text-center">Nama & tanda tangan perawat</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428276] ? item.obji7[428276] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428277] ? item.obji7[428277] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428278] ? item.obji7[428278] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428279] ? item.obji7[428279] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428280] ? item.obji7[428280] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428281] ? item.obji7[428281] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="3" rowspan="2" class="text-center">No</td>
                    <td colspan="16" rowspan="2" class="text-center">Risiko Tinggi</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji7[428282] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji7[428283] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji7[428284] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji7[428285] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji7[428286] | toDate | date:'dd-MM-yyyy'}}</td>
                    <td colspan="5" class="p3">Tgl: @{{item.obji7[428287] | toDate | date:'dd-MM-yyyy'}}</td>
                </tr>
                <tr>
                    <td colspan="5" class="p3">Jam: @{{item.obji7[428282] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji7[428283] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji7[428284] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji7[428285] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji7[428286] | toDate | date:'HH:mm'}}</td>
                    <td colspan="5" class="p3">Jam: @{{item.obji7[428287] | toDate | date:'HH:mm'}}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">1</td>
                    <td colspan="16" class="p3">Pakaikan stiker risiko jatuh berwarna kuning pada gelang pasien</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428289] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428290] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428291] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428292] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428293] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428294] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">2</td>
                    <td colspan="16" class="p3">Pasangkan tanda peringatan pasien jatuh diatas tempat tidur pasien / di dinding dekat pasien / di gantung dekat pasien</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428296] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428297] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428298] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428299] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428300] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428301] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">3</td>
                    <td colspan="16" class="p3">Pasien ditempelkan didekat nurse station</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428303] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428304] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428305] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428306] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428307] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428308] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">4</td>
                    <td colspan="16" class="p3">Memasangkan handrail tempat tidur bila meninggalkan pasien seorang diri</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428310] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428311] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428312] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428313] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428314] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428315] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">5</td>
                    <td colspan="16" class="p3">Mendampingi pasien saat ke kamar mandi, jangan tinggalkan sendiri dikamar mandi</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428317] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428318] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428319] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428320] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428321] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428322] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">6</td>
                    <td colspan="16" class="p3">Monitor kebutuhan pasien secara berkala (minimal tiap 2 jam )</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428324] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428325] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428326] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428327] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428328] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428329] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">7</td>
                    <td colspan="16" class="p3">Membantu kebutuhan eliminasi pasien saban 2 jam </td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428331] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428332] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428333] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428334] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428335] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428336] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;">
                    <td colspan="3" class="p3" valign="top">8</td>
                    <td colspan="16" class="p3">Lantai kamar mandi dengan karpetanti slip/tidak licin, serta anjuran menggunakan tempat duduk dikamar mandi saat pasien mandi </td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428338] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428339] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428340] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428341] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428342] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428343] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                </tr>
                <tr style="font-size: small;height:70pt" valign="top">
                    <td colspan="19" class="p3 text-center">Nama & tanda tangan perawat</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428344] ? item.obji7[428344] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428345] ? item.obji7[428345] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428346] ? item.obji7[428346] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428347] ? item.obji7[428347] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428348] ? item.obji7[428348] : '' }}</td>
                    <td colspan="5" class="p3 text-center">@{{ item.obji7[428349] ? item.obji7[428349] : '' }}</td>
                </tr>
            </table>
        </div>
    @endif
</body>
<script type="text/javascript">
    var baseUrl =
            {!! json_encode(url('/')) !!}
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

    angular.controller('cetakSkriningDewasa', function ($scope, $http, httpService) {
        $scope.item = {
            obj: [],
            obj2: [],
			obji2: [],
			obji3: [],
			obji4: [],
			obji5: [],
			obji6: [],
			obji7: [],
        }

        var dataLoad = {!! json_encode($res['d1'] )!!};
		var dataLoad2 = {!! json_encode($res['d2'] )!!};
		var dataLoad3 = {!! json_encode($res['d3'] )!!};
		var dataLoad4 = {!! json_encode($res['d4'] )!!};
		var dataLoad5 = {!! json_encode($res['d5'] )!!};
		var dataLoad6 = {!! json_encode($res['d6'] )!!};
		var dataLoad7 = {!! json_encode($res['d7'] )!!};

        if(dataLoad.length > 0){
            for (var i = 0; i <= dataLoad.length - 1; i++) {
                if(dataLoad[i].emrdfk == 3110029){
                    continue;
                }
                if (dataLoad[i].type == "textbox") {
                    $('#id_'+dataLoad[i].emrdfk).html( dataLoad[i].value)
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
                    $('#id_'+dataLoad[i].emrdfk).html( dataLoad[i].value)
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
                    $('#id_'+dataLoad[i].emrdfk).html( dataLoad[i].value)
                    $scope.item.obj[dataLoad[i].emrdfk] = dataLoad[i].value
                }
                if (dataLoad[i].type == "combobox") {
        
                    var str = dataLoad[i].value
                    if(str != null)
                    {
                        var res = str.split("~");
                        
                        $scope.item.obj[dataLoad[i].emrdfk] = res[1]
                        $('#id_'+dataLoad[i].emrdfk).html ( res[1])
                    }
                }
                if (dataLoad[i].type == "combobox2") {
                    var str = dataLoad[i].value
                    var res = str.split("~");
                    
                    $scope.item.obj[dataLoad[i].emrdfk+""+1] = res[0]
                    $scope.item.obj[dataLoad[i].emrdfk] = res[1]
                    $('#id_'+dataLoad[i].emrdfk).html ( res[1])

                }

                if (dataLoad[i].emrdfk == '423816' ) {
                    $scope.hariTgl = dataLoad[i].value
                }

                if (dataLoad[i].emrdfk == '2000001974' ) {
                    $scope.jamPeriksa = dataLoad[i].value
                }

                if (dataLoad[i].emrdfk == '2000002354' ) {
                    $scope.tgl1 = dataLoad[i].value
                }
                if (dataLoad[i].emrdfk == '2000002357' ) {
                    $scope.tgl2 = dataLoad[i].value
                }
                if (dataLoad[i].emrdfk == '2000002360' ) {
                    $scope.tgl3 = dataLoad[i].value
                }
                if (dataLoad[i].emrdfk == '2000002363' ) {
                    $scope.tgl4 = dataLoad[i].value
                }
                if (dataLoad[i].emrdfk == '2000002366' ) {
                    $scope.tgl5 = dataLoad[i].value
                }
                if (dataLoad[i].emrdfk == '2000002369' ) {
                    $scope.tgl6 = dataLoad[i].value
                }
                if (dataLoad[i].emrdfk == '2000002372' ) {
                    $scope.tgl7 = dataLoad[i].value
                }
                if (dataLoad[i].emrdfk == '2000002375' ) {
                    $scope.tgl8 = dataLoad[i].value
                }
                if (dataLoad[i].emrdfk == '2000002378' ) {
                    $scope.tgl9 = dataLoad[i].value
                }
                if (dataLoad[i].emrdfk == '2000002381' ) {
                    $scope.tgl10 = dataLoad[i].value
                }
                if (dataLoad[i].emrdfk == '2000002384' ) {
                    $scope.tgl11 = dataLoad[i].value
                }
                if (dataLoad[i].emrdfk == '2000002387' ) {
                    $scope.tgl12 = dataLoad[i].value
                }
                if (dataLoad[i].emrdfk == '2000002390' ) {
                    $scope.tgl13 = dataLoad[i].value
                }
                if (dataLoad[i].emrdfk == '2000002393' ) {
                    $scope.tgl14 = dataLoad[i].value
                }
                if (dataLoad[i].emrdfk == '2000002396' ) {
                    $scope.tgl15 = dataLoad[i].value
                }
                
                if (dataLoad[i].emrdfk == '2000002408' ) {
                    $scope.pukul2 = dataLoad[i].value
                }

                $scope.tglemr = dataLoad[i].tgl
            
            }
            var p1 = $scope.item.obj[428199];
            if (p1 != undefined) {
                jQuery('#qrcodep1').qrcode({
                width	: 70,
                height	: 70,
                text	: "Tanda Tangan Digital Oleh " + p1
                });	
            }
        }

        if(dataLoad2.length > 0){
            for (var i = 0; i <= dataLoad2.length - 1; i++) {
                if(dataLoad2[i].emrdfk == 3110029){
                    continue;
                }
                if (dataLoad2[i].type == "textbox") {
                    $('#id_'+dataLoad2[i].emrdfk).html( dataLoad2[i].value)
                    $scope.item.obji2[dataLoad2[i].emrdfk] = dataLoad2[i].value
                }
                if (dataLoad2[i].type == "checkbox") {
                    var chekedd = false
                    if (dataLoad2[i].value == '1') {
                        var chekedd = true
                    }
                    $scope.item.obji2[dataLoad2[i].emrdfk] = chekedd
                }
                if (dataLoad2[i].type == "radio") {
                    $scope.item.obji2[dataLoad2[i].emrdfk] = dataLoad2[i].value

                }

                if (dataLoad2[i].type == "datetime") {
                    $('#id_'+dataLoad2[i].emrdfk).html( dataLoad2[i].value)
                    $scope.item.obji2[dataLoad2[i].emrdfk] = dataLoad2[i].value
                }
                if (dataLoad2[i].type == "time") {
                    $scope.item.obji2[dataLoad2[i].emrdfk] = dataLoad2[i].value
                }
                if (dataLoad2[i].type == "date") {
                    $scope.item.obji2[dataLoad2[i].emrdfk] = dataLoad2[i].value
                }

                if (dataLoad2[i].type == "checkboxtextbox") {
                    $scope.item.obji2[dataLoad2[i].emrdfk] = dataLoad2[i].value
                    $scope.item.obji2[dataLoad2[i].emrdfk] = true
                }
                if (dataLoad2[i].type == "textarea") {
                    $('#id_'+dataLoad2[i].emrdfk).html( dataLoad2[i].value)
                    $scope.item.obji2[dataLoad2[i].emrdfk] = dataLoad2[i].value
                }
                if (dataLoad2[i].type == "combobox") {
        
                    var str = dataLoad2[i].value
                    if(str != null)
                    {
                        var res = str.split("~");
                        
                        $scope.item.obji2[dataLoad2[i].emrdfk] = res[1]
                        $('#id_'+dataLoad2[i].emrdfk).html ( res[1])
                    }
                }
                if (dataLoad2[i].type == "combobox2") {
                    var str = dataLoad2[i].value
                    var res = str.split("~");
                    
                    $scope.item.obji2[dataLoad2[i].emrdfk+""+1] = res[0]
                    $scope.item.obji2[dataLoad2[i].emrdfk] = res[1]
                    $('#id_'+dataLoad2[i].emrdfk).html ( res[1])

                }

                if (dataLoad2[i].emrdfk == '423816' ) {
                    $scope.hariTgl = dataLoad2[i].value
                }

                if (dataLoad2[i].emrdfk == '2000001974' ) {
                    $scope.jamPeriksa = dataLoad2[i].value
                }

                if (dataLoad2[i].emrdfk == '2000002354' ) {
                    $scope.tgl1 = dataLoad2[i].value
                }
                if (dataLoad2[i].emrdfk == '2000002357' ) {
                    $scope.tgl2 = dataLoad2[i].value
                }
                if (dataLoad2[i].emrdfk == '2000002360' ) {
                    $scope.tgl3 = dataLoad2[i].value
                }
                if (dataLoad2[i].emrdfk == '2000002363' ) {
                    $scope.tgl4 = dataLoad2[i].value
                }
                if (dataLoad2[i].emrdfk == '2000002366' ) {
                    $scope.tgl5 = dataLoad2[i].value
                }
                if (dataLoad2[i].emrdfk == '2000002369' ) {
                    $scope.tgl6 = dataLoad2[i].value
                }
                if (dataLoad2[i].emrdfk == '2000002372' ) {
                    $scope.tgl7 = dataLoad2[i].value
                }
                if (dataLoad2[i].emrdfk == '2000002375' ) {
                    $scope.tgl8 = dataLoad2[i].value
                }
                if (dataLoad2[i].emrdfk == '2000002378' ) {
                    $scope.tgl9 = dataLoad2[i].value
                }
                if (dataLoad2[i].emrdfk == '2000002381' ) {
                    $scope.tgl10 = dataLoad2[i].value
                }
                if (dataLoad2[i].emrdfk == '2000002384' ) {
                    $scope.tgl11 = dataLoad2[i].value
                }
                if (dataLoad2[i].emrdfk == '2000002387' ) {
                    $scope.tgl12 = dataLoad2[i].value
                }
                if (dataLoad2[i].emrdfk == '2000002390' ) {
                    $scope.tgl13 = dataLoad2[i].value
                }
                if (dataLoad2[i].emrdfk == '2000002393' ) {
                    $scope.tgl14 = dataLoad2[i].value
                }
                if (dataLoad2[i].emrdfk == '2000002396' ) {
                    $scope.tgl15 = dataLoad2[i].value
                }
                
                if (dataLoad2[i].emrdfk == '2000002408' ) {
                    $scope.pukul2 = dataLoad2[i].value
                }

                $scope.tglemr = dataLoad2[i].tgl
                
            }
            var p2 = $scope.item.obji2[428199];
            if (p2 != undefined) {
                jQuery('#qrcodep2').qrcode({
                width	: 70,
                height	: 70,
                text	: "Tanda Tangan Digital Oleh " + p2
                });	
            }
        }

        if(dataLoad3.length > 0){
            for (var i = 0; i <= dataLoad3.length - 1; i++) {
                if(dataLoad3[i].emrdfk == 3110029){
                    continue;
                }
                if (dataLoad3[i].type == "textbox") {
                    $('#id_'+dataLoad3[i].emrdfk).html( dataLoad3[i].value)
                    $scope.item.obji3[dataLoad3[i].emrdfk] = dataLoad3[i].value
                }
                if (dataLoad3[i].type == "checkbox") {
                    var chekedd = false
                    if (dataLoad3[i].value == '1') {
                        var chekedd = true
                    }
                    $scope.item.obji3[dataLoad3[i].emrdfk] = chekedd
                }
                if (dataLoad3[i].type == "radio") {
                    $scope.item.obji3[dataLoad3[i].emrdfk] = dataLoad3[i].value

                }

                if (dataLoad3[i].type == "datetime") {
                    $('#id_'+dataLoad3[i].emrdfk).html( dataLoad3[i].value)
                    $scope.item.obji3[dataLoad3[i].emrdfk] = dataLoad3[i].value
                }
                if (dataLoad3[i].type == "time") {
                    $scope.item.obji3[dataLoad3[i].emrdfk] = dataLoad3[i].value
                }
                if (dataLoad3[i].type == "date") {
                    $scope.item.obji3[dataLoad3[i].emrdfk] = dataLoad3[i].value
                }

                if (dataLoad3[i].type == "checkboxtextbox") {
                    $scope.item.obji3[dataLoad3[i].emrdfk] = dataLoad3[i].value
                    $scope.item.obji3[dataLoad3[i].emrdfk] = true
                }
                if (dataLoad3[i].type == "textarea") {
                    $('#id_'+dataLoad3[i].emrdfk).html( dataLoad3[i].value)
                    $scope.item.obji3[dataLoad3[i].emrdfk] = dataLoad3[i].value
                }
                if (dataLoad3[i].type == "combobox") {
        
                    var str = dataLoad3[i].value
                    if(str != null)
                    {
                        var res = str.split("~");
                        
                        $scope.item.obji3[dataLoad3[i].emrdfk] = res[1]
                        $('#id_'+dataLoad3[i].emrdfk).html ( res[1])
                    }
                }
                if (dataLoad3[i].type == "combobox2") {
                    var str = dataLoad3[i].value
                    var res = str.split("~");
                    
                    $scope.item.obji3[dataLoad3[i].emrdfk+""+1] = res[0]
                    $scope.item.obji3[dataLoad3[i].emrdfk] = res[1]
                    $('#id_'+dataLoad3[i].emrdfk).html ( res[1])

                }

                if (dataLoad3[i].emrdfk == '423816' ) {
                    $scope.hariTgl = dataLoad3[i].value
                }

                if (dataLoad3[i].emrdfk == '2000001974' ) {
                    $scope.jamPeriksa = dataLoad3[i].value
                }

                if (dataLoad3[i].emrdfk == '2000002354' ) {
                    $scope.tgl1 = dataLoad3[i].value
                }
                if (dataLoad3[i].emrdfk == '2000002357' ) {
                    $scope.tgl2 = dataLoad3[i].value
                }
                if (dataLoad3[i].emrdfk == '2000002360' ) {
                    $scope.tgl3 = dataLoad3[i].value
                }
                if (dataLoad3[i].emrdfk == '2000002363' ) {
                    $scope.tgl4 = dataLoad3[i].value
                }
                if (dataLoad3[i].emrdfk == '2000002366' ) {
                    $scope.tgl5 = dataLoad3[i].value
                }
                if (dataLoad3[i].emrdfk == '2000002369' ) {
                    $scope.tgl6 = dataLoad3[i].value
                }
                if (dataLoad3[i].emrdfk == '2000002372' ) {
                    $scope.tgl7 = dataLoad3[i].value
                }
                if (dataLoad3[i].emrdfk == '2000002375' ) {
                    $scope.tgl8 = dataLoad3[i].value
                }
                if (dataLoad3[i].emrdfk == '2000002378' ) {
                    $scope.tgl9 = dataLoad3[i].value
                }
                if (dataLoad3[i].emrdfk == '2000002381' ) {
                    $scope.tgl10 = dataLoad3[i].value
                }
                if (dataLoad3[i].emrdfk == '2000002384' ) {
                    $scope.tgl11 = dataLoad3[i].value
                }
                if (dataLoad3[i].emrdfk == '2000002387' ) {
                    $scope.tgl12 = dataLoad3[i].value
                }
                if (dataLoad3[i].emrdfk == '2000002390' ) {
                    $scope.tgl13 = dataLoad3[i].value
                }
                if (dataLoad3[i].emrdfk == '2000002393' ) {
                    $scope.tgl14 = dataLoad3[i].value
                }
                if (dataLoad3[i].emrdfk == '2000002396' ) {
                    $scope.tgl15 = dataLoad3[i].value
                }
                
                if (dataLoad3[i].emrdfk == '2000002408' ) {
                    $scope.pukul2 = dataLoad3[i].value
                }

                $scope.tglemr = dataLoad3[i].tgl
                
            }
            var p3 = $scope.item.obji3[428199];
            if (p3 != undefined) {
                jQuery('#qrcodep3').qrcode({
                width	: 70,
                height	: 70,
                text	: "Tanda Tangan Digital Oleh " + p3
                });	
            }
        }

        if(dataLoad4.length > 0){
            for (var i = 0; i <= dataLoad4.length - 1; i++) {
                if(dataLoad4[i].emrdfk == 3110029){
                    continue;
                }
                if (dataLoad4[i].type == "textbox") {
                    $('#id_'+dataLoad4[i].emrdfk).html( dataLoad4[i].value)
                    $scope.item.obji4[dataLoad4[i].emrdfk] = dataLoad4[i].value
                }
                if (dataLoad4[i].type == "checkbox") {
                    var chekedd = false
                    if (dataLoad4[i].value == '1') {
                        var chekedd = true
                    }
                    $scope.item.obji4[dataLoad4[i].emrdfk] = chekedd
                }
                if (dataLoad4[i].type == "radio") {
                    $scope.item.obji4[dataLoad4[i].emrdfk] = dataLoad4[i].value

                }

                if (dataLoad4[i].type == "datetime") {
                    $('#id_'+dataLoad4[i].emrdfk).html( dataLoad4[i].value)
                    $scope.item.obji4[dataLoad4[i].emrdfk] = dataLoad4[i].value
                }
                if (dataLoad4[i].type == "time") {
                    $scope.item.obji4[dataLoad4[i].emrdfk] = dataLoad4[i].value
                }
                if (dataLoad4[i].type == "date") {
                    $scope.item.obji4[dataLoad4[i].emrdfk] = dataLoad4[i].value
                }

                if (dataLoad4[i].type == "checkboxtextbox") {
                    $scope.item.obji4[dataLoad4[i].emrdfk] = dataLoad4[i].value
                    $scope.item.obji4[dataLoad4[i].emrdfk] = true
                }
                if (dataLoad4[i].type == "textarea") {
                    $('#id_'+dataLoad4[i].emrdfk).html( dataLoad4[i].value)
                    $scope.item.obji4[dataLoad4[i].emrdfk] = dataLoad4[i].value
                }
                if (dataLoad4[i].type == "combobox") {
        
                    var str = dataLoad4[i].value
                    if(str != null)
                    {
                        var res = str.split("~");
                        
                        $scope.item.obji4[dataLoad4[i].emrdfk] = res[1]
                        $('#id_'+dataLoad4[i].emrdfk).html ( res[1])
                    }
                }
                if (dataLoad4[i].type == "combobox2") {
                    var str = dataLoad4[i].value
                    var res = str.split("~");
                    
                    $scope.item.obji4[dataLoad4[i].emrdfk+""+1] = res[0]
                    $scope.item.obji4[dataLoad4[i].emrdfk] = res[1]
                    $('#id_'+dataLoad4[i].emrdfk).html ( res[1])

                }

                if (dataLoad4[i].emrdfk == '423816' ) {
                    $scope.hariTgl = dataLoad4[i].value
                }

                if (dataLoad4[i].emrdfk == '2000001974' ) {
                    $scope.jamPeriksa = dataLoad4[i].value
                }

                if (dataLoad4[i].emrdfk == '2000002354' ) {
                    $scope.tgl1 = dataLoad4[i].value
                }
                if (dataLoad4[i].emrdfk == '2000002357' ) {
                    $scope.tgl2 = dataLoad4[i].value
                }
                if (dataLoad4[i].emrdfk == '2000002360' ) {
                    $scope.tgl3 = dataLoad4[i].value
                }
                if (dataLoad4[i].emrdfk == '2000002363' ) {
                    $scope.tgl4 = dataLoad4[i].value
                }
                if (dataLoad4[i].emrdfk == '2000002366' ) {
                    $scope.tgl5 = dataLoad4[i].value
                }
                if (dataLoad4[i].emrdfk == '2000002369' ) {
                    $scope.tgl6 = dataLoad4[i].value
                }
                if (dataLoad4[i].emrdfk == '2000002372' ) {
                    $scope.tgl7 = dataLoad4[i].value
                }
                if (dataLoad4[i].emrdfk == '2000002375' ) {
                    $scope.tgl8 = dataLoad4[i].value
                }
                if (dataLoad4[i].emrdfk == '2000002378' ) {
                    $scope.tgl9 = dataLoad4[i].value
                }
                if (dataLoad4[i].emrdfk == '2000002381' ) {
                    $scope.tgl10 = dataLoad4[i].value
                }
                if (dataLoad4[i].emrdfk == '2000002384' ) {
                    $scope.tgl11 = dataLoad4[i].value
                }
                if (dataLoad4[i].emrdfk == '2000002387' ) {
                    $scope.tgl12 = dataLoad4[i].value
                }
                if (dataLoad4[i].emrdfk == '2000002390' ) {
                    $scope.tgl13 = dataLoad4[i].value
                }
                if (dataLoad4[i].emrdfk == '2000002393' ) {
                    $scope.tgl14 = dataLoad4[i].value
                }
                if (dataLoad4[i].emrdfk == '2000002396' ) {
                    $scope.tgl15 = dataLoad4[i].value
                }
                
                if (dataLoad4[i].emrdfk == '2000002408' ) {
                    $scope.pukul2 = dataLoad4[i].value
                }

                $scope.tglemr = dataLoad4[i].tgl
                
            }
            var p4 = $scope.item.obji4[428199];
            if (p4 != undefined) {
                jQuery('#qrcodep4').qrcode({
                width	: 70,
                height	: 70,
                text	: "Tanda Tangan Digital Oleh " + p4
                });	
            }
        }

        if(dataLoad5.length > 0){
            for (var i = 0; i <= dataLoad5.length - 1; i++) {
                if(dataLoad5[i].emrdfk == 3110029){
                    continue;
                }
                if (dataLoad5[i].type == "textbox") {
                    $('#id_'+dataLoad5[i].emrdfk).html( dataLoad5[i].value)
                    $scope.item.obji5[dataLoad5[i].emrdfk] = dataLoad5[i].value
                }
                if (dataLoad5[i].type == "checkbox") {
                    var chekedd = false
                    if (dataLoad5[i].value == '1') {
                        var chekedd = true
                    }
                    $scope.item.obji5[dataLoad5[i].emrdfk] = chekedd
                }
                if (dataLoad5[i].type == "radio") {
                    $scope.item.obji5[dataLoad5[i].emrdfk] = dataLoad5[i].value

                }

                if (dataLoad5[i].type == "datetime") {
                    $('#id_'+dataLoad5[i].emrdfk).html( dataLoad5[i].value)
                    $scope.item.obji5[dataLoad5[i].emrdfk] = dataLoad5[i].value
                }
                if (dataLoad5[i].type == "time") {
                    $scope.item.obji5[dataLoad5[i].emrdfk] = dataLoad5[i].value
                }
                if (dataLoad5[i].type == "date") {
                    $scope.item.obji5[dataLoad5[i].emrdfk] = dataLoad5[i].value
                }

                if (dataLoad5[i].type == "checkboxtextbox") {
                    $scope.item.obji5[dataLoad5[i].emrdfk] = dataLoad5[i].value
                    $scope.item.obji5[dataLoad5[i].emrdfk] = true
                }
                if (dataLoad5[i].type == "textarea") {
                    $('#id_'+dataLoad5[i].emrdfk).html( dataLoad5[i].value)
                    $scope.item.obji5[dataLoad5[i].emrdfk] = dataLoad5[i].value
                }
                if (dataLoad5[i].type == "combobox") {
        
                    var str = dataLoad5[i].value
                    if(str != null)
                    {
                        var res = str.split("~");
                        
                        $scope.item.obji5[dataLoad5[i].emrdfk] = res[1]
                        $('#id_'+dataLoad5[i].emrdfk).html ( res[1])
                    }
                }
                if (dataLoad5[i].type == "combobox2") {
                    var str = dataLoad5[i].value
                    var res = str.split("~");
                    
                    $scope.item.obji5[dataLoad5[i].emrdfk+""+1] = res[0]
                    $scope.item.obji5[dataLoad5[i].emrdfk] = res[1]
                    $('#id_'+dataLoad5[i].emrdfk).html ( res[1])

                }

                if (dataLoad5[i].emrdfk == '423816' ) {
                    $scope.hariTgl = dataLoad5[i].value
                }

                if (dataLoad5[i].emrdfk == '2000001974' ) {
                    $scope.jamPeriksa = dataLoad5[i].value
                }

                if (dataLoad5[i].emrdfk == '2000002354' ) {
                    $scope.tgl1 = dataLoad5[i].value
                }
                if (dataLoad5[i].emrdfk == '2000002357' ) {
                    $scope.tgl2 = dataLoad5[i].value
                }
                if (dataLoad5[i].emrdfk == '2000002360' ) {
                    $scope.tgl3 = dataLoad5[i].value
                }
                if (dataLoad5[i].emrdfk == '2000002363' ) {
                    $scope.tgl4 = dataLoad5[i].value
                }
                if (dataLoad5[i].emrdfk == '2000002366' ) {
                    $scope.tgl5 = dataLoad5[i].value
                }
                if (dataLoad5[i].emrdfk == '2000002369' ) {
                    $scope.tgl6 = dataLoad5[i].value
                }
                if (dataLoad5[i].emrdfk == '2000002372' ) {
                    $scope.tgl7 = dataLoad5[i].value
                }
                if (dataLoad5[i].emrdfk == '2000002375' ) {
                    $scope.tgl8 = dataLoad5[i].value
                }
                if (dataLoad5[i].emrdfk == '2000002378' ) {
                    $scope.tgl9 = dataLoad5[i].value
                }
                if (dataLoad5[i].emrdfk == '2000002381' ) {
                    $scope.tgl10 = dataLoad5[i].value
                }
                if (dataLoad5[i].emrdfk == '2000002384' ) {
                    $scope.tgl11 = dataLoad5[i].value
                }
                if (dataLoad5[i].emrdfk == '2000002387' ) {
                    $scope.tgl12 = dataLoad5[i].value
                }
                if (dataLoad5[i].emrdfk == '2000002390' ) {
                    $scope.tgl13 = dataLoad5[i].value
                }
                if (dataLoad5[i].emrdfk == '2000002393' ) {
                    $scope.tgl14 = dataLoad5[i].value
                }
                if (dataLoad5[i].emrdfk == '2000002396' ) {
                    $scope.tgl15 = dataLoad5[i].value
                }
                
                if (dataLoad5[i].emrdfk == '2000002408' ) {
                    $scope.pukul2 = dataLoad5[i].value
                }

                $scope.tglemr = dataLoad5[i].tgl
                
            }

            var p5 = $scope.item.obji5[428199];
            if (p5 != undefined) {
                jQuery('#qrcodep5').qrcode({
                width	: 70,
                height	: 70,
                text	: "Tanda Tangan Digital Oleh " + p5
                });	
            }
        }

        if(dataLoad6.length > 0){
            for (var i = 0; i <= dataLoad6.length - 1; i++) {
                if(dataLoad6[i].emrdfk == 3110029){
                    continue;
                }
                if (dataLoad6[i].type == "textbox") {
                    $('#id_'+dataLoad6[i].emrdfk).html( dataLoad6[i].value)
                    $scope.item.obji6[dataLoad6[i].emrdfk] = dataLoad6[i].value
                }
                if (dataLoad6[i].type == "checkbox") {
                    var chekedd = false
                    if (dataLoad6[i].value == '1') {
                        var chekedd = true
                    }
                    $scope.item.obji6[dataLoad6[i].emrdfk] = chekedd
                }
                if (dataLoad6[i].type == "radio") {
                    $scope.item.obji6[dataLoad6[i].emrdfk] = dataLoad6[i].value

                }

                if (dataLoad6[i].type == "datetime") {
                    $('#id_'+dataLoad6[i].emrdfk).html( dataLoad6[i].value)
                    $scope.item.obji6[dataLoad6[i].emrdfk] = dataLoad6[i].value
                }
                if (dataLoad6[i].type == "time") {
                    $scope.item.obji6[dataLoad6[i].emrdfk] = dataLoad6[i].value
                }
                if (dataLoad6[i].type == "date") {
                    $scope.item.obji6[dataLoad6[i].emrdfk] = dataLoad6[i].value
                }

                if (dataLoad6[i].type == "checkboxtextbox") {
                    $scope.item.obji6[dataLoad6[i].emrdfk] = dataLoad6[i].value
                    $scope.item.obji6[dataLoad6[i].emrdfk] = true
                }
                if (dataLoad6[i].type == "textarea") {
                    $('#id_'+dataLoad6[i].emrdfk).html( dataLoad6[i].value)
                    $scope.item.obji6[dataLoad6[i].emrdfk] = dataLoad6[i].value
                }
                if (dataLoad6[i].type == "combobox") {
        
                    var str = dataLoad6[i].value
                    if(str != null)
                    {
                        var res = str.split("~");
                        
                        $scope.item.obji6[dataLoad6[i].emrdfk] = res[1]
                        $('#id_'+dataLoad6[i].emrdfk).html ( res[1])
                    }
                }
                if (dataLoad6[i].type == "combobox2") {
                    var str = dataLoad6[i].value
                    var res = str.split("~");
                    
                    $scope.item.obji6[dataLoad6[i].emrdfk+""+1] = res[0]
                    $scope.item.obji6[dataLoad6[i].emrdfk] = res[1]
                    $('#id_'+dataLoad6[i].emrdfk).html ( res[1])

                }

                if (dataLoad6[i].emrdfk == '423816' ) {
                    $scope.hariTgl = dataLoad6[i].value
                }

                if (dataLoad6[i].emrdfk == '2000001974' ) {
                    $scope.jamPeriksa = dataLoad6[i].value
                }

                if (dataLoad6[i].emrdfk == '2000002354' ) {
                    $scope.tgl1 = dataLoad6[i].value
                }
                if (dataLoad6[i].emrdfk == '2000002357' ) {
                    $scope.tgl2 = dataLoad6[i].value
                }
                if (dataLoad6[i].emrdfk == '2000002360' ) {
                    $scope.tgl3 = dataLoad6[i].value
                }
                if (dataLoad6[i].emrdfk == '2000002363' ) {
                    $scope.tgl4 = dataLoad6[i].value
                }
                if (dataLoad6[i].emrdfk == '2000002366' ) {
                    $scope.tgl5 = dataLoad6[i].value
                }
                if (dataLoad6[i].emrdfk == '2000002369' ) {
                    $scope.tgl6 = dataLoad6[i].value
                }
                if (dataLoad6[i].emrdfk == '2000002372' ) {
                    $scope.tgl7 = dataLoad6[i].value
                }
                if (dataLoad6[i].emrdfk == '2000002375' ) {
                    $scope.tgl8 = dataLoad6[i].value
                }
                if (dataLoad6[i].emrdfk == '2000002378' ) {
                    $scope.tgl9 = dataLoad6[i].value
                }
                if (dataLoad6[i].emrdfk == '2000002381' ) {
                    $scope.tgl10 = dataLoad6[i].value
                }
                if (dataLoad6[i].emrdfk == '2000002384' ) {
                    $scope.tgl11 = dataLoad6[i].value
                }
                if (dataLoad6[i].emrdfk == '2000002387' ) {
                    $scope.tgl12 = dataLoad6[i].value
                }
                if (dataLoad6[i].emrdfk == '2000002390' ) {
                    $scope.tgl13 = dataLoad6[i].value
                }
                if (dataLoad6[i].emrdfk == '2000002393' ) {
                    $scope.tgl14 = dataLoad6[i].value
                }
                if (dataLoad6[i].emrdfk == '2000002396' ) {
                    $scope.tgl15 = dataLoad6[i].value
                }
                
                if (dataLoad6[i].emrdfk == '2000002408' ) {
                    $scope.pukul2 = dataLoad6[i].value
                }

                $scope.tglemr = dataLoad6[i].tgl
                
            }
            var p6 = $scope.item.obji6[428199];
            if (p6 != undefined) {
                jQuery('#qrcodep6').qrcode({
                width	: 70,
                height	: 70,
                text	: "Tanda Tangan Digital Oleh " + p6
                });	
            }
        }

        if(dataLoad7.length > 0){
            for (var i = 0; i <= dataLoad7.length - 1; i++) {
                if(dataLoad7[i].emrdfk == 3110029){
                    continue;
                }
                if (dataLoad7[i].type == "textbox") {
                    $('#id_'+dataLoad7[i].emrdfk).html( dataLoad7[i].value)
                    $scope.item.obji7[dataLoad7[i].emrdfk] = dataLoad7[i].value
                }
                if (dataLoad7[i].type == "checkbox") {
                    var chekedd = false
                    if (dataLoad7[i].value == '1') {
                        var chekedd = true
                    }
                    $scope.item.obji7[dataLoad7[i].emrdfk] = chekedd
                }
                if (dataLoad7[i].type == "radio") {
                    $scope.item.obji7[dataLoad7[i].emrdfk] = dataLoad7[i].value

                }

                if (dataLoad7[i].type == "datetime") {
                    $('#id_'+dataLoad7[i].emrdfk).html( dataLoad7[i].value)
                    $scope.item.obji7[dataLoad7[i].emrdfk] = dataLoad7[i].value
                }
                if (dataLoad7[i].type == "time") {
                    $scope.item.obji7[dataLoad7[i].emrdfk] = dataLoad7[i].value
                }
                if (dataLoad7[i].type == "date") {
                    $scope.item.obji7[dataLoad7[i].emrdfk] = dataLoad7[i].value
                }

                if (dataLoad7[i].type == "checkboxtextbox") {
                    $scope.item.obji7[dataLoad7[i].emrdfk] = dataLoad7[i].value
                    $scope.item.obji7[dataLoad7[i].emrdfk] = true
                }
                if (dataLoad7[i].type == "textarea") {
                    $('#id_'+dataLoad7[i].emrdfk).html( dataLoad7[i].value)
                    $scope.item.obji7[dataLoad7[i].emrdfk] = dataLoad7[i].value
                }
                if (dataLoad7[i].type == "combobox") {
        
                    var str = dataLoad7[i].value
                    if(str != null)
                    {
                        var res = str.split("~");
                        
                        $scope.item.obji7[dataLoad7[i].emrdfk] = res[1]
                        $('#id_'+dataLoad7[i].emrdfk).html ( res[1])
                    }
                }
                if (dataLoad7[i].type == "combobox2") {
                    var str = dataLoad7[i].value
                    var res = str.split("~");
                    
                    $scope.item.obji7[dataLoad7[i].emrdfk+""+1] = res[0]
                    $scope.item.obji7[dataLoad7[i].emrdfk] = res[1]
                    $('#id_'+dataLoad7[i].emrdfk).html ( res[1])

                }

                if (dataLoad7[i].emrdfk == '423816' ) {
                    $scope.hariTgl = dataLoad7[i].value
                }

                if (dataLoad7[i].emrdfk == '2000001974' ) {
                    $scope.jamPeriksa = dataLoad7[i].value
                }

                if (dataLoad7[i].emrdfk == '2000002354' ) {
                    $scope.tgl1 = dataLoad7[i].value
                }
                if (dataLoad7[i].emrdfk == '2000002357' ) {
                    $scope.tgl2 = dataLoad7[i].value
                }
                if (dataLoad7[i].emrdfk == '2000002360' ) {
                    $scope.tgl3 = dataLoad7[i].value
                }
                if (dataLoad7[i].emrdfk == '2000002363' ) {
                    $scope.tgl4 = dataLoad7[i].value
                }
                if (dataLoad7[i].emrdfk == '2000002366' ) {
                    $scope.tgl5 = dataLoad7[i].value
                }
                if (dataLoad7[i].emrdfk == '2000002369' ) {
                    $scope.tgl6 = dataLoad7[i].value
                }
                if (dataLoad7[i].emrdfk == '2000002372' ) {
                    $scope.tgl7 = dataLoad7[i].value
                }
                if (dataLoad7[i].emrdfk == '2000002375' ) {
                    $scope.tgl8 = dataLoad7[i].value
                }
                if (dataLoad7[i].emrdfk == '2000002378' ) {
                    $scope.tgl9 = dataLoad7[i].value
                }
                if (dataLoad7[i].emrdfk == '2000002381' ) {
                    $scope.tgl10 = dataLoad7[i].value
                }
                if (dataLoad7[i].emrdfk == '2000002384' ) {
                    $scope.tgl11 = dataLoad7[i].value
                }
                if (dataLoad7[i].emrdfk == '2000002387' ) {
                    $scope.tgl12 = dataLoad7[i].value
                }
                if (dataLoad7[i].emrdfk == '2000002390' ) {
                    $scope.tgl13 = dataLoad7[i].value
                }
                if (dataLoad7[i].emrdfk == '2000002393' ) {
                    $scope.tgl14 = dataLoad7[i].value
                }
                if (dataLoad7[i].emrdfk == '2000002396' ) {
                    $scope.tgl15 = dataLoad7[i].value
                }
                
                if (dataLoad7[i].emrdfk == '2000002408' ) {
                    $scope.pukul2 = dataLoad7[i].value
                }

                $scope.tglemr = dataLoad7[i].tgl
                
            }
            var p7 = $scope.item.obji7[428199];
            if (p7 != undefined) {
                jQuery('#qrcodep7').qrcode({
                width	: 70,
                height	: 70,
                text	: "Tanda Tangan Digital Oleh " + p7
                });	
            }
        }
    })
    angular.filter('toDate', function() {
        return function(items) {
            if(items != null){
                 return new Date(items);
            }
        };
    });
    $(document).ready(function () {
        window.print();
    });
</script>
</html>