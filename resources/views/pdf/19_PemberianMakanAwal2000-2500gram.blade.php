<!DOCTYPE html>
<html lang="en" ng-app="angularApp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemberian Makan Awal 2000 - 2500 gram</title>
    @if (stripos(\Request::url(), 'localhost') !== false)
        <script src="{{ public_path('js/jquery.min.js') }}"></script>
        <script src="{{ public_path('js/jquery.qr-code.js') }}"></script>
        <script type="text/javascript" src="{{ public_path('js/qrcode/src/jquery.qrcode.js') }}"></script>
        <script type="text/javascript" src="{{ public_path('js/qrcode/src/qrcode.js') }}"></script>
        {{-- <link href="{{ public_path('css/style.css') }}" rel="stylesheet"> --}}
        <!-- angular -->
        <script src="{{ public_path('js/angular/angular.min.js') }}" type="text/javascript"></script>
        <script src="{{ public_path('js/angular/angular-route.min.js') }}" type="text/javascript"></script>
        <script type="text/javascript" src="{{ public_path('js/angular/angular-animate.min.js') }}"></script>
        <script type="text/javascript" src="{{ public_path('js/angular/angular-aria.min.js') }}"></script>
        <script src="{{ public_path('js/angular/angular-material.js') }}" type="text/javascript"></script>
    @else
        <script src="{{ public_path('service/js/jquery.min.js') }}"></script>
        <script src="{{ public_path('service/js/jquery.qr-code.js') }}"></script>
        <script type="text/javascript" src="{{ public_path('js/qrcode/src/jquery.qrcode.js') }}"></script>
        <script type="text/javascript" src="{{ public_path('js/qrcode/src/qrcode.js') }}"></script>
        {{-- <link href="{{ public_path('service/css/style.css') }}" rel="stylesheet"> --}}
        <!-- angular -->
        <script src="{{ public_path('service/js/angular/angular.min.js') }}" type="text/javascript"></script>
        <script src="{{ public_path('service/js/angular/angular-route.min.js') }}" type="text/javascript"></script>
        <script type="text/javascript" src="{{ public_path('service/js/angular/angular-animate.min.js') }}"></script>
        <script type="text/javascript" src="{{ public_path('service/js/angular/angular-aria.min.js') }}"></script>
        <script src="{{ public_path('service/js/angular/angular-material.js') }}" type="text/javascript"></script>
    @endif
    <style>
      html,body{
           
		   box-sizing:border-box;
		   font-family: DejaVu Sans, Arial, Helvetica, sans-serif;
	   }
	   @page{
		   size: A4 Landscape;
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
            font-size: xx-small;
        }
        table tr{
            height:9pt
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
		.pdua{
			padding:1rem;
		}
		.format{
            page-break-after: always;
        }
		
    </style>
</head>
<body ng-controller="cetakPemberianMakanAwal2000">
	@if (!empty($res['d1']))
		<div class="format">
			<table width='100%'>
				<tr height=20 class="noborder">
					<td colspan="8" rowspan="4" class="p3 noborder-tb text-center">
						@if(stripos(\Request::url(), 'localhost') !== FALSE)
							<img src="{{ public_path('img/logo_only.png') }}" alt="" style="width: 60px;display:block; margin:auto;">
							@else
							<img src="{{ public_path('service/img/logo_only.png') }}" alt="" style="width: 60px;display:block; margin:auto;">
							@endif
					</td>
					<td colspan="17" rowspan="4" class="noborder-tb text-center" style="font-size:large">
						<strong>{!! $res['profile']->namalengkap !!}</strong> <br>{!! $res['profile']->alamatlengkap !!}<br>TELP : (0413) 81292
					</td>
					<td colspan="6" class="noborder" style="font-size: 10pt">No. RM </td>
					<td colspan="13" class="noborder" style="font-size: 10pt">
						: {!! $res['d1'][0]->nocm  !!}
					</td>
					<td colspan="5" rowspan="2" class="border-lr bg-dark" style="font-size: 36px;text-align:center">RM</td>
				</tr>
				<tr class="noborder">
					<td colspan="6" class="noborder" style="font-size: 10pt">Nama Lengkap</td>
					<td colspan="11" class="noborder" style="font-size: 10pt">
						: {!!  $res['d1'][0]->namapasien  !!}
					</td>
					<td colspan="2" class="noborder" style="font-size: 10pt">{!!  $res['d1'][0]->jeniskelamin == 'PEREMPUAN' ? '(P)' : '(L)'  !!}</td>
				</tr>
				<tr class="noborder">
					<td colspan="6" class="noborder" style="font-size: 10pt">Tanggal Lahir</td>
					<td colspan="13" class="noborder" style="font-size: 10pt">
						: {!! date('d-m-Y',strtotime( $res['d1'][0]->tgllahir  )) !!}
					</td>
					<td colspan="5" class="border-lr" rowspan="2" style="font-size: 36px;text-align:center">70</td>
				</tr>
				<tr class="noborder">
					<td colspan="6" class="noborder" style="font-size: 10pt">NIK</td>
					<td colspan="11" class="noborder" style="font-size: 10pt">
						: {!! $res['d1'][0]->noidentitas  !!}
					</td>
				</tr>
				<tr class="bordered bg-dark-small">
					<th colspan="49" height="20pt">PEMBERIAN MAKAN AWAL DAN PENURUNAN CAIRAN IV PADA NEONATUS 2000-2500 GRAM DARI HARI PERAWATAN 1-12</th>
				</tr>
				<tr>
					<td colspan="15">&nbsp; BB : @{{ item.obj[1001750] ? item.obj[1001750] : '' }}</td>
					<td colspan="8">&nbsp; BB MASUK : @{{ item.obj[1001751] ? item.obj[1001751] : '' }}</td>
					<td colspan="26">&nbsp; % PERUBAHAN DARI BB LAHIR : @{{ item.obj[1001812] ? item.obj[1001812] : '' }}</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI LAHIR/HARI RAWAT</td>
					<td colspan="5">VOLUME MINUM</td>
					<td colspan="5">VOLUME CAIRAN IV</td>
					<td colspan="5">JENIS CAIRAN</td>
					<td colspan="5">TOTAL VOLUME CAIRAN</td>
					<td colspan="26" rowspan="11">
						<table class="noborder" style="table-layout:fixed;text-align:left;width:100%">
							<tr class="noborder text-center">
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24" align="left">'Volume minum' merupakan jumlah volume minimal yang diberikan. Selalu bisa naik volume susu ke total volume cairan</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24">Gunakan BB lahir atau BB saat masuk yang sampai BB lebih besar</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24">Kalau bayi turun berat badan (BB), gunakan BB tertinggi untuk penghitungan</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24">Pemberian minum harus dimulai pada hari kedua, jika RR ≤ 80</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24">ASI adalah yang terbaik. Gunakan ASI Perah atau Formula 20 Kkal/ 30 cc sampai pemberian minum 150 cc/kg/hr</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24">Untuk membuat Formula 20 Kkal/ 30 cc, campur satu sendok peres SGM BBLR di dalam 40 cc air.</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24">Pindah ke lembar pemeliharaan pemberian minum saat minum bayi mencapai 150 cc/kg/hr.</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2"></td>
									<td valign="top" class="noborder" colspan="24"><em>(Jk neonatus mengalami intoleransi atau tanda NEC (lihat dibawah) dan pemberian minum lanjutan tertunda, jelaskan masalah pada kolom “komentar” dan gunakan lembar “pemberian minum awal” kedua sesuai kebutuhan perbaiki hari rawat pada kolom pertama)</em></td>
								</tr>
						</table>
					</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 1 :</td>
					<td colspan="5">0 cc/kg/hr</td>
					<td colspan="5">80 cc/kg/hr</td>
					<td colspan="5">D10</td>
					<td colspan="5">80 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 2 :</td>
					<td colspan="5">10 cc/kg/hr</td>
					<td colspan="5">90 cc/kg/hr</td>
					<td colspan="5">D10</td>
					<td colspan="5">100 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 3 :</td>
					<td colspan="5">30 cc/kg/hr</td>
					<td colspan="5">70 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">100 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 4 :</td>
					<td colspan="5">50 cc/kg/hr</td>
					<td colspan="5">70 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 5 :</td>
					<td colspan="5">70 cc/kg/hr</td>
					<td colspan="5">50 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 6 :</td>
					<td colspan="5">90 cc/kg/hr</td>
					<td colspan="5">40 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">130 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 7 :</td>
					<td colspan="5">120 cc/kg/hr</td>
					<td colspan="5">20 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">140 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 8 :</td>
					<td colspan="5">150 cc/kg/hr</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">150 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 9 :</td>
					<td colspan="5">140 cc/kg/hr</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">140 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 10 :</td>
					<td colspan="5">150 cc/kg/hr</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">150 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 11 :</td>
					<td colspan="5">LEMBAR PEMELIHARAAN</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">150 cc/kg/hr</td>
					<td colspan="26" rowspan="2">
						Kunci - DOB : Hari lahir; HD : Hari rawat; * %Perubahan dari BB lahir = (BW-AW/BW)* 100 dimana BW adalah berat lahir dan AW <br> adalah berat saat masuk; D10 : Dextrose 10%; NS : Normal Saline atau 154 mEq/L solution
		
					</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 12 :</td>
					<td colspan="5">LEMBAR PEMELIHARAAN</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">150 cc/kg/hr</td>
				</tr>
				<tr></tr>
				<tr  class="text-center">
					<td colspan="3" rowspan="2">HARI RAWAT INFANT</td>
					<td colspan="3"></td>
					<td colspan="2">A</td>
					<td colspan="3">B</td>
					<td colspan="4"></td>
					<td colspan="3">C</td>
					<td colspan="3"></td>
					<td colspan="4"></td>
					<td colspan="8"></td>
					<td colspan="7"></td>
					<td colspan="9"></td>
				</tr>
				<tr class="text-center">
					<td colspan="3">Tgl hari ini (d/m/y)</td>
					<td colspan="2">Berat Badan (kg)</td>
					<td colspan="3">Volume minum per hari (co/kg/hr)</td>
					<td colspan="4">Volume minum setiap 3 jam (A*B)/8</td>
					<td colspan="3">Volum cairan IV perhari (co/kg/hr)</td>
					<td colspan="3">Volume Cairan per jam (A*B)/12</td>
					<td colspan="4">Jenis Minuman (ASI atau Formula)</td>
					<td colspan="8">MINUMAN DIBERIKAN PERHARI <br> (lingkari setiap minum diberikan)</td>
					<td colspan="7">Tanda Intoleransi (Dsitensi: <br />Muntahan empedu atau susu: feces berdarah)</td>
					<td colspan="9">Komentar</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">DOB atau HD 1</td>
					<td colspan="3">&nbsp;@{{item.obj[1001813] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obj[1001814] ? item.obj[1001814] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obj[1001815] ? item.obj[1001815] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obj[1001816] ? item.obj[1001816] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obj[1001817] ? item.obj[1001817] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obj[1001818] ? item.obj[1001818] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1001819] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obj[1001820] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obj[1001821] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001822] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001823] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001824] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001825] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001826] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001827] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001828] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obj[1001833] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obj[1001834] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1001835] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obj[1001836] ? item.obj[1001836] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">2</td>
					<td colspan="3">&nbsp;@{{item.obj[1001837] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obj[1001838] ? item.obj[1001838] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obj[1001839] ? item.obj[1001839] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obj[1001840] ? item.obj[1001840] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obj[1001841] ? item.obj[1001841] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obj[1001842] ? item.obj[1001842] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1001843] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obj[1001844] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obj[1001845] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001846] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001847] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001848] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001849] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001850] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001851] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001852] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obj[1001857] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obj[1001858] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1001859] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obj[1001860] ? item.obj[1001860] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">3</td>
					<td colspan="3">&nbsp;@{{item.obj[1001861] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obj[1001862] ? item.obj[1001862] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obj[1001863] ? item.obj[1001863] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obj[1001864] ? item.obj[1001864] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obj[1001865] ? item.obj[1001865] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obj[1001866] ? item.obj[1001866] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1001867] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obj[1001868] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obj[1001869] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001870] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001871] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001872] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001873] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001874] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001875] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001876] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obj[1001881] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obj[1001882] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1001883] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obj[1001884] ? item.obj[1001884] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">4</td>
					<td colspan="3">&nbsp;@{{item.obj[1001885] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obj[1001886] ? item.obj[1001886] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obj[1001887] ? item.obj[1001887] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obj[1001888] ? item.obj[1001888] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obj[1001889] ? item.obj[1001889] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obj[1001890] ? item.obj[1001890] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1001891] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obj[1001892] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obj[1001893] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001894] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001895] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001896] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001897] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001898] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001899] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001900] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obj[1001905] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obj[1001906] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1001907] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obj[1001908] ? item.obj[1001908] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">5</td>
					<td colspan="3">&nbsp;@{{item.obj[1001909] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obj[1001910] ? item.obj[1001910] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obj[1001911] ? item.obj[1001911] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obj[1001912] ? item.obj[1001912] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obj[1001913] ? item.obj[1001913] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obj[1001914] ? item.obj[1001914] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1001915] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obj[1001916] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obj[1001917] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001918] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001919] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001920] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001921] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001922] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001923] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001924] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obj[1001929] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obj[1001930] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1001931] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obj[1001932] ? item.obj[1001932] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">6</td>
					<td colspan="3">&nbsp;@{{item.obj[1001933] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obj[1001934] ? item.obj[1001934] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obj[1001935] ? item.obj[1001935] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obj[1001936] ? item.obj[1001936] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obj[1001937] ? item.obj[1001937] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obj[1001938] ? item.obj[1001938] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1001939] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obj[1001940] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obj[1001941] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001942] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001943] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001944] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001945] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001946] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001947] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001948] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obj[1001953] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obj[1001954] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1001955] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obj[1001956] ? item.obj[1001956] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">7</td>
					<td colspan="3">&nbsp;@{{item.obj[1001957] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obj[1001958] ? item.obj[1001958] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obj[1001959] ? item.obj[1001959] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obj[1001960] ? item.obj[1001960] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obj[1001961] ? item.obj[1001961] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obj[1001962] ? item.obj[1001962] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1001963] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obj[1001964] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obj[1001965] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001966] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001967] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001968] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001969] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001970] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001971] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001972] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obj[1001977] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obj[1001978] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1001979] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obj[1001980] ? item.obj[1001980] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">8</td>
					<td colspan="3">&nbsp;@{{item.obj[1001981] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obj[1001982] ? item.obj[1001982] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obj[1001983] ? item.obj[1001983] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obj[1001984] ? item.obj[1001984] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obj[1001985] ? item.obj[1001985] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obj[1001986] ? item.obj[1001986] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1001987] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obj[1001988] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obj[1001989] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001990] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001991] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001992] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001993] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001994] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001995] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001996] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obj[1002001] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obj[1002002] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1002003] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obj[1002004] ? item.obj[1002004] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">9</td>
					<td colspan="3">&nbsp;@{{item.obj[1002005] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obj[1002006] ? item.obj[1002006] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obj[1002007] ? item.obj[1002007] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obj[1002008] ? item.obj[1002008] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obj[1002009] ? item.obj[1002009] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obj[1002010] ? item.obj[1002010] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1002011] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obj[1002012] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obj[1002013] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1002014] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1002015] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1002016] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1002017] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1002018] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1002019] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1002020] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obj[1002025] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obj[1002026] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1002027] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obj[1002028] ? item.obj[1002028] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">10</td>
					<td colspan="3">&nbsp;@{{item.obj[1002029] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obj[1002030] ? item.obj[1002030] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obj[1002031] ? item.obj[1002031] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obj[1002032] ? item.obj[1002032] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obj[1002033] ? item.obj[1002033] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obj[1002034] ? item.obj[1002034] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1002035] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obj[1002036] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obj[1002037] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1002038] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1002039] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1002040] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1002041] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1002042] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1002043] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1002044] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obj[1002049] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obj[1002050] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1002051] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obj[1002052] ? item.obj[1002052] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">11</td>
					<td colspan="2">&nbsp;@{{item.obj[1002053] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="3">&nbsp;@{{ item.obj[1002054] ? item.obj[1002054] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obj[1002055] ? item.obj[1002055] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obj[1002056] ? item.obj[1002056] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obj[1002057] ? item.obj[1002057] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obj[1002058] ? item.obj[1002058] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1002059] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obj[1002060] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obj[1002061] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1002062] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1002063] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1002064] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1002065] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1002066] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1002067] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1002068] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obj[1002073] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obj[1002074] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1002075] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obj[1002076] ? item.obj[1002076] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">12</td>
					<td colspan="2">&nbsp;@{{item.obj[1002077] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="3">&nbsp;@{{ item.obj[1002078] ? item.obj[1002078] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obj[1002079] ? item.obj[1002079] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obj[1002080] ? item.obj[1002080] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obj[1002081] ? item.obj[1002081] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obj[1002082] ? item.obj[1002082] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1002083] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obj[1002084] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obj[1002085] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1002086] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1002087] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1002088] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1002089] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1002090] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1002091] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1002092] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obj[1002097] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obj[1002098] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1002099] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obj[1002100] ? item.obj[1002100] : '' }}</td>
				</tr>
			</table>
			<div class="pdua">
		<table style="table-layout:fixed;border:none;width:100%;">
			<tr class="p03">
				<td colspan="49" class="noborder"></td>
			</tr>
			<tr>
				<td colspan="20" class="noborder"></td>
				<td class="noborder"></td>
				<td colspan="7" rowspan="3">Pertimbangkan NEC. Hentikan minuman 24-48 jam. Mulai cairan IV sampai 150cc/kg/d Mulai Amp/Sulbactam</td>
				<td class="noborder" colspan="7"></td>
				<td class="noborder btm">+</td>
				<td colspan="7" rowspan="2">Jk pneumotoses, lanjut status puasa, Antibiotik dan cairan IV untuk 14 hari</td>
				<td class="noborder blf"></td>
			</tr>
			<tr>
				<td class="noborder" colspan="10" rowspan="2">
					PENDEKATAN UNTUK TOLERANSI MAKANAN <br>
					PADA BAYI BERAT BADAN LAHIR RENDAH
				</td>
				<td class="noborder"></td>
				<td class="noborder"></td>
				<td class="noborder btm"></td>
				<td class="noborder btm"></td>
				<td colspan="6" class="text-center" rowspan="2">Residu/muntahan dgn cairan empedu atau feses berdarah</td>
				<td class="noborder"></td>
				<td class="noborder" colspan=""></td>
				
				<td colspan="4" rowspan="2">Abdominal X-Ray dalam 24 jam</td>
				<td class="noborder"></td>
				<td class="noborder br"></td>
				<td class="noborder "></td>
				<td  class="noborder btm"></td>
			</tr>
			<tr>
				<td class="noborder"></td>
				<td class="noborder"></td>
				<td class="noborder blf"></td>
				<td class="noborder"></td>
				<td class="noborder"></td>
				<td class="noborder"></td>
				<td colspan="" class="noborder btp"></td>
				<td class="noborder btp br"></td>
				<td class="noborder"></td>
				<td colspan="7" class="noborder btp"></td>
			</tr>
			<tr>
				<td colspan="3" rowspan="2" class="text-center">Intoleransi Makanan</td>
				<td class="noborder"></td>
				<td class="noborder"></td>
				<td rowspan="2" colspan="6" class="text-center">Distensi; muntahan/residu dgn empedu; Darah pada feses</td>
				<td class="noborder blf btm"></td>
				<td class="noborder blf"></td>
				<td class="noborder"></td>
				<td colspan="19" class="noborder"></td>
				<td class="noborder"></td>
				<td class="noborder br"></td>
				<td class="btm bl noborder"></td>
				<td class="" colspan="7" rowspan="2">Jk negatif, mulai pemberian minum pada volume terakhir sebelum terjadi</td>
				<td colspan="7" class="noborder blf"></td>
			</tr>
			<tr>
				<td class="noborder btp"></td>
				<td class="noborder btp"></td>
				<td class="noborder br"></td>
				<td class="noborder btm"></td>
				<td class="noborder br btm"></td>
				<td colspan="6" rowspan="2" class="text-center">Residu/muntahan tdk <br> mengandung cairan empedu</td>
				<td class="noborder"></td>
				<td colspan="7" rowspan="2" class="text-center">Jk Aspirasi < 25% minuman. Lanjutkan pemberian minuman</td>
				<td colspan="7" class="noborder "></td>
				<td class="noborder">-</td>
				<td class="noborder br btm"></td>
			</tr>
			<tr>
				<td colspan="14" class="noborder"></td>
				<td class="noborder"></td>
				<td class="noborder"></td>
				<td  colspan="7" class="noborder"></td>
				<td colspan="7" class="noborder"></td>
			</tr>
			<tr></tr>
			<tr>
			<td colspan="14" class="noborder"></td>
			<td colspan="6" class="noborder btp"></td>
				<td  class="noborder"></td>
				<td colspan="7" rowspan="2">Jk, 25-50 %. Turunkan pemberian minuman hingga 50%</td>
				<td colspan="7" class="noborder blf"></td>
			</tr>
			<tr>
			<td colspan="21" class="noborder"></td>
			<td colspan="7" class="noborder blf"></td>
			</tr>
			<tr></tr>
			<tr>
				<td colspan="21" class="noborder"></td>
				<td colspan="7" rowspan="2">Jk, 25-50 %. Turunkan pemberian minuman hingga 50%</td>
				<td colspan="7" class="noborder blf"></td>
			</tr>
			<tr>
			<td colspan="21" class="noborder"></td>
			<td colspan="7" class="noborder blf"></td>
			</tr>
		</table>
	</div>
		</div>
	@endif

	@if (!empty($res['d2']))
		<div class="format">
			<table width='100%'>
				<tr height=20 class="noborder">
					<td colspan="8" rowspan="4" class="p3 noborder-tb text-center">
						@if(stripos(\Request::url(), 'localhost') !== FALSE)
							<img src="{{ public_path('img/logo_only.png') }}" alt="" style="width: 60px;display:block; margin:auto;">
							@else
							<img src="{{ public_path('service/img/logo_only.png') }}" alt="" style="width: 60px;display:block; margin:auto;">
							@endif
					</td>
					<td colspan="17" rowspan="4" class="noborder-tb text-center" style="font-size:large">
						<strong>{!! $res['profile']->namalengkap !!}</strong> <br>{!! $res['profile']->alamatlengkap !!}<br>TELP : (0413) 81292
					</td>
					<td colspan="6" class="noborder" style="font-size: 10pt">No. RM </td>
					<td colspan="13" class="noborder" style="font-size: 10pt">
						: {!! $res['d1'][0]->nocm  !!}
					</td>
					<td colspan="5" rowspan="2" class="border-lr bg-dark" style="font-size: 36px;text-align:center">RM</td>
				</tr>
				<tr class="noborder">
					<td colspan="6" class="noborder" style="font-size: 10pt">Nama Lengkap</td>
					<td colspan="11" class="noborder" style="font-size: 10pt">
						: {!!  $res['d1'][0]->namapasien  !!}
					</td>
					<td colspan="2" class="noborder" style="font-size: 10pt">{!!  $res['d1'][0]->jeniskelamin == 'PEREMPUAN' ? '(P)' : '(L)'  !!}</td>
				</tr>
				<tr class="noborder">
					<td colspan="6" class="noborder" style="font-size: 10pt">Tanggal Lahir</td>
					<td colspan="13" class="noborder" style="font-size: 10pt">
						: {!! date('d-m-Y',strtotime( $res['d1'][0]->tgllahir  )) !!}
					</td>
					<td colspan="5" class="border-lr" rowspan="2" style="font-size: 36px;text-align:center">70</td>
				</tr>
				<tr class="noborder">
					<td colspan="6" class="noborder" style="font-size: 10pt">NIK</td>
					<td colspan="11" class="noborder" style="font-size: 10pt">
						: {!! $res['d1'][0]->noidentitas  !!}
					</td>
				</tr>
				<tr class="bordered bg-dark-small">
					<th colspan="49" height="20pt">PEMBERIAN MAKAN AWAL DAN PENURUNAN CAIRAN IV PADA NEONATUS 2000-2500 GRAM DARI HARI PERAWATAN 1-12</th>
				</tr>
				<tr>
					<td colspan="15">&nbsp; BB : @{{ item.obji2[1001750] ? item.obji2[1001750] : '' }}</td>
					<td colspan="8">&nbsp; BB MASUK : @{{ item.obji2[1001751] ? item.obji2[1001751] : '' }}</td>
					<td colspan="26">&nbsp; % PERUBAHAN DARI BB LAHIR : @{{ item.obji2[1001812] ? item.obji2[1001812] : '' }}</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI LAHIR/HARI RAWAT</td>
					<td colspan="5">VOLUME MINUM</td>
					<td colspan="5">VOLUME CAIRAN IV</td>
					<td colspan="5">JENIS CAIRAN</td>
					<td colspan="5">TOTAL VOLUME CAIRAN</td>
					<td colspan="26" rowspan="11">
						<table class="noborder" style="table-layout:fixed;text-align:left;width:100%">
							<tr class="noborder text-center">
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24" align="left">'Volume minum' merupakan jumlah volume minimal yang diberikan. Selalu bisa naik volume susu ke total volume cairan</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24">Gunakan BB lahir atau BB saat masuk yang sampai BB lebih besar</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24">Kalau bayi turun berat badan (BB), gunakan BB tertinggi untuk penghitungan</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24">Pemberian minum harus dimulai pada hari kedua, jika RR ≤ 80</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24">ASI adalah yang terbaik. Gunakan ASI Perah atau Formula 20 Kkal/ 30 cc sampai pemberian minum 150 cc/kg/hr</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24">Untuk membuat Formula 20 Kkal/ 30 cc, campur satu sendok peres SGM BBLR di dalam 40 cc air.</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24">Pindah ke lembar pemeliharaan pemberian minum saat minum bayi mencapai 150 cc/kg/hr.</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2"></td>
									<td valign="top" class="noborder" colspan="24"><em>(Jk neonatus mengalami intoleransi atau tanda NEC (lihat dibawah) dan pemberian minum lanjutan tertunda, jelaskan masalah pada kolom “komentar” dan gunakan lembar “pemberian minum awal” kedua sesuai kebutuhan perbaiki hari rawat pada kolom pertama)</em></td>
								</tr>
						</table>
					</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 1 :</td>
					<td colspan="5">0 cc/kg/hr</td>
					<td colspan="5">80 cc/kg/hr</td>
					<td colspan="5">D10</td>
					<td colspan="5">80 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 2 :</td>
					<td colspan="5">10 cc/kg/hr</td>
					<td colspan="5">90 cc/kg/hr</td>
					<td colspan="5">D10</td>
					<td colspan="5">100 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 3 :</td>
					<td colspan="5">30 cc/kg/hr</td>
					<td colspan="5">70 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">100 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 4 :</td>
					<td colspan="5">50 cc/kg/hr</td>
					<td colspan="5">70 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 5 :</td>
					<td colspan="5">70 cc/kg/hr</td>
					<td colspan="5">50 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 6 :</td>
					<td colspan="5">90 cc/kg/hr</td>
					<td colspan="5">40 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">130 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 7 :</td>
					<td colspan="5">120 cc/kg/hr</td>
					<td colspan="5">20 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">140 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 8 :</td>
					<td colspan="5">150 cc/kg/hr</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">150 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 9 :</td>
					<td colspan="5">140 cc/kg/hr</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">140 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 10 :</td>
					<td colspan="5">150 cc/kg/hr</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">150 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 11 :</td>
					<td colspan="5">LEMBAR PEMELIHARAAN</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">150 cc/kg/hr</td>
					<td colspan="26" rowspan="2">
						Kunci - DOB : Hari lahir; HD : Hari rawat; * %Perubahan dari BB lahir = (BW-AW/BW)* 100 dimana BW adalah berat lahir dan AW <br> adalah berat saat masuk; D10 : Dextrose 10%; NS : Normal Saline atau 154 mEq/L solution
		
					</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 12 :</td>
					<td colspan="5">LEMBAR PEMELIHARAAN</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">150 cc/kg/hr</td>
				</tr>
				<tr></tr>
				<tr  class="text-center">
					<td colspan="3" rowspan="2">HARI RAWAT INFANT</td>
					<td colspan="3"></td>
					<td colspan="2">A</td>
					<td colspan="3">B</td>
					<td colspan="4"></td>
					<td colspan="3">C</td>
					<td colspan="3"></td>
					<td colspan="4"></td>
					<td colspan="8"></td>
					<td colspan="7"></td>
					<td colspan="9"></td>
				</tr>
				<tr class="text-center">
					<td colspan="3">Tgl hari ini (d/m/y)</td>
					<td colspan="2">Berat Badan (kg)</td>
					<td colspan="3">Volume minum per hari (co/kg/hr)</td>
					<td colspan="4">Volume minum setiap 3 jam (A*B)/8</td>
					<td colspan="3">Volum cairan IV perhari (co/kg/hr)</td>
					<td colspan="3">Volume Cairan per jam (A*B)/12</td>
					<td colspan="4">Jenis Minuman (ASI atau Formula)</td>
					<td colspan="8">MINUMAN DIBERIKAN PERHARI <br> (lingkari setiap minum diberikan)</td>
					<td colspan="7">Tanda Intoleransi (Dsitensi: <br />Muntahan empedu atau susu: feces berdarah)</td>
					<td colspan="9">Komentar</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">DOB atau HD 1</td>
					<td colspan="3">&nbsp;@{{item.obji2[1001813] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji2[1001814] ? item.obji2[1001814] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1001815] ? item.obji2[1001815] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji2[1001816] ? item.obji2[1001816] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1001817] ? item.obji2[1001817] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji2[1001818] ? item.obji2[1001818] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1001819] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji2[1001820] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji2[1001821] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001822] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001823] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001824] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001825] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001826] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001827] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001828] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji2[1001833] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji2[1001834] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1001835] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji2[1001836] ? item.obji2[1001836] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">2</td>
					<td colspan="3">&nbsp;@{{item.obji2[1001837] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji2[1001838] ? item.obji2[1001838] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1001839] ? item.obji2[1001839] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji2[1001840] ? item.obji2[1001840] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1001841] ? item.obji2[1001841] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji2[1001842] ? item.obji2[1001842] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1001843] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji2[1001844] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji2[1001845] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001846] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001847] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001848] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001849] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001850] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001851] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001852] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji2[1001857] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji2[1001858] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1001859] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji2[1001860] ? item.obji2[1001860] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">3</td>
					<td colspan="3">&nbsp;@{{item.obji2[1001861] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji2[1001862] ? item.obji2[1001862] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1001863] ? item.obji2[1001863] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji2[1001864] ? item.obji2[1001864] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1001865] ? item.obji2[1001865] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji2[1001866] ? item.obji2[1001866] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1001867] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji2[1001868] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji2[1001869] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001870] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001871] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001872] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001873] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001874] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001875] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001876] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji2[1001881] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji2[1001882] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1001883] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji2[1001884] ? item.obji2[1001884] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">4</td>
					<td colspan="3">&nbsp;@{{item.obji2[1001885] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji2[1001886] ? item.obji2[1001886] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1001887] ? item.obji2[1001887] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji2[1001888] ? item.obji2[1001888] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1001889] ? item.obji2[1001889] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji2[1001890] ? item.obji2[1001890] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1001891] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji2[1001892] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji2[1001893] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001894] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001895] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001896] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001897] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001898] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001899] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001900] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji2[1001905] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji2[1001906] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1001907] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji2[1001908] ? item.obji2[1001908] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">5</td>
					<td colspan="3">&nbsp;@{{item.obji2[1001909] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji2[1001910] ? item.obji2[1001910] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1001911] ? item.obji2[1001911] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji2[1001912] ? item.obji2[1001912] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1001913] ? item.obji2[1001913] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji2[1001914] ? item.obji2[1001914] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1001915] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji2[1001916] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji2[1001917] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001918] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001919] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001920] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001921] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001922] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001923] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001924] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji2[1001929] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji2[1001930] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1001931] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji2[1001932] ? item.obji2[1001932] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">6</td>
					<td colspan="3">&nbsp;@{{item.obji2[1001933] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji2[1001934] ? item.obji2[1001934] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1001935] ? item.obji2[1001935] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji2[1001936] ? item.obji2[1001936] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1001937] ? item.obji2[1001937] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji2[1001938] ? item.obji2[1001938] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1001939] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji2[1001940] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji2[1001941] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001942] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001943] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001944] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001945] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001946] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001947] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001948] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji2[1001953] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji2[1001954] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1001955] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji2[1001956] ? item.obji2[1001956] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">7</td>
					<td colspan="3">&nbsp;@{{item.obji2[1001957] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji2[1001958] ? item.obji2[1001958] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1001959] ? item.obji2[1001959] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji2[1001960] ? item.obji2[1001960] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1001961] ? item.obji2[1001961] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji2[1001962] ? item.obji2[1001962] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1001963] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji2[1001964] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji2[1001965] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001966] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001967] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001968] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001969] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001970] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001971] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001972] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji2[1001977] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji2[1001978] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1001979] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji2[1001980] ? item.obji2[1001980] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">8</td>
					<td colspan="3">&nbsp;@{{item.obji2[1001981] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji2[1001982] ? item.obji2[1001982] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1001983] ? item.obji2[1001983] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji2[1001984] ? item.obji2[1001984] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1001985] ? item.obji2[1001985] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji2[1001986] ? item.obji2[1001986] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1001987] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji2[1001988] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji2[1001989] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001990] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001991] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001992] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001993] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001994] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001995] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001996] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji2[1002001] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji2[1002002] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1002003] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji2[1002004] ? item.obji2[1002004] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">9</td>
					<td colspan="3">&nbsp;@{{item.obji2[1002005] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji2[1002006] ? item.obji2[1002006] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1002007] ? item.obji2[1002007] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji2[1002008] ? item.obji2[1002008] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1002009] ? item.obji2[1002009] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji2[1002010] ? item.obji2[1002010] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1002011] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji2[1002012] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji2[1002013] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1002014] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1002015] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1002016] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1002017] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1002018] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1002019] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1002020] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji2[1002025] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji2[1002026] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1002027] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji2[1002028] ? item.obji2[1002028] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">10</td>
					<td colspan="3">&nbsp;@{{item.obji2[1002029] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji2[1002030] ? item.obji2[1002030] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1002031] ? item.obji2[1002031] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji2[1002032] ? item.obji2[1002032] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1002033] ? item.obji2[1002033] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji2[1002034] ? item.obji2[1002034] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1002035] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji2[1002036] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji2[1002037] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1002038] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1002039] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1002040] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1002041] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1002042] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1002043] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1002044] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji2[1002049] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji2[1002050] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1002051] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji2[1002052] ? item.obji2[1002052] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">11</td>
					<td colspan="2">&nbsp;@{{item.obji2[1002053] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1002054] ? item.obji2[1002054] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1002055] ? item.obji2[1002055] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji2[1002056] ? item.obji2[1002056] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1002057] ? item.obji2[1002057] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji2[1002058] ? item.obji2[1002058] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1002059] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji2[1002060] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji2[1002061] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1002062] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1002063] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1002064] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1002065] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1002066] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1002067] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1002068] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji2[1002073] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji2[1002074] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1002075] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji2[1002076] ? item.obji2[1002076] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">12</td>
					<td colspan="2">&nbsp;@{{item.obji2[1002077] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1002078] ? item.obji2[1002078] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1002079] ? item.obji2[1002079] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji2[1002080] ? item.obji2[1002080] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1002081] ? item.obji2[1002081] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji2[1002082] ? item.obji2[1002082] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1002083] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji2[1002084] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji2[1002085] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1002086] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1002087] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1002088] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1002089] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1002090] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1002091] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1002092] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji2[1002097] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji2[1002098] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1002099] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji2[1002100] ? item.obji2[1002100] : '' }}</td>
				</tr>
			</table>
			<div class="pdua">
		<table style="table-layout:fixed;border:none;width:100%;">
			<tr class="p03">
				<td colspan="49" class="noborder"></td>
			</tr>
			<tr>
				<td colspan="20" class="noborder"></td>
				<td class="noborder"></td>
				<td colspan="7" rowspan="3">Pertimbangkan NEC. Hentikan minuman 24-48 jam. Mulai cairan IV sampai 150cc/kg/d Mulai Amp/Sulbactam</td>
				<td class="noborder" colspan="7"></td>
				<td class="noborder btm">+</td>
				<td colspan="7" rowspan="2">Jk pneumotoses, lanjut status puasa, Antibiotik dan cairan IV untuk 14 hari</td>
				<td class="noborder blf"></td>
			</tr>
			<tr>
				<td class="noborder" colspan="10" rowspan="2">
					PENDEKATAN UNTUK TOLERANSI MAKANAN <br>
					PADA BAYI BERAT BADAN LAHIR RENDAH
				</td>
				<td class="noborder"></td>
				<td class="noborder"></td>
				<td class="noborder btm"></td>
				<td class="noborder btm"></td>
				<td colspan="6" class="text-center" rowspan="2">Residu/muntahan dgn cairan empedu atau feses berdarah</td>
				<td class="noborder"></td>
				<td class="noborder" colspan=""></td>
				
				<td colspan="4" rowspan="2">Abdominal X-Ray dalam 24 jam</td>
				<td class="noborder"></td>
				<td class="noborder br"></td>
				<td class="noborder "></td>
				<td  class="noborder btm"></td>
			</tr>
			<tr>
				<td class="noborder"></td>
				<td class="noborder"></td>
				<td class="noborder blf"></td>
				<td class="noborder"></td>
				<td class="noborder"></td>
				<td class="noborder"></td>
				<td colspan="" class="noborder btp"></td>
				<td class="noborder btp br"></td>
				<td class="noborder"></td>
				<td colspan="7" class="noborder btp"></td>
			</tr>
			<tr>
				<td colspan="3" rowspan="2" class="text-center">Intoleransi Makanan</td>
				<td class="noborder"></td>
				<td class="noborder"></td>
				<td rowspan="2" colspan="6" class="text-center">Distensi; muntahan/residu dgn empedu; Darah pada feses</td>
				<td class="noborder blf btm"></td>
				<td class="noborder blf"></td>
				<td class="noborder"></td>
				<td colspan="19" class="noborder"></td>
				<td class="noborder"></td>
				<td class="noborder br"></td>
				<td class="btm bl noborder"></td>
				<td class="" colspan="7" rowspan="2">Jk negatif, mulai pemberian minum pada volume terakhir sebelum terjadi</td>
				<td colspan="7" class="noborder blf"></td>
			</tr>
			<tr>
				<td class="noborder btp"></td>
				<td class="noborder btp"></td>
				<td class="noborder br"></td>
				<td class="noborder btm"></td>
				<td class="noborder br btm"></td>
				<td colspan="6" rowspan="2" class="text-center">Residu/muntahan tdk <br> mengandung cairan empedu</td>
				<td class="noborder"></td>
				<td colspan="7" rowspan="2" class="text-center">Jk Aspirasi < 25% minuman. Lanjutkan pemberian minuman</td>
				<td colspan="7" class="noborder "></td>
				<td class="noborder">-</td>
				<td class="noborder br btm"></td>
			</tr>
			<tr>
				<td colspan="14" class="noborder"></td>
				<td class="noborder"></td>
				<td class="noborder"></td>
				<td  colspan="7" class="noborder"></td>
				<td colspan="7" class="noborder"></td>
			</tr>
			<tr></tr>
			<tr>
			<td colspan="14" class="noborder"></td>
			<td colspan="6" class="noborder btp"></td>
				<td  class="noborder"></td>
				<td colspan="7" rowspan="2">Jk, 25-50 %. Turunkan pemberian minuman hingga 50%</td>
				<td colspan="7" class="noborder blf"></td>
			</tr>
			<tr>
			<td colspan="21" class="noborder"></td>
			<td colspan="7" class="noborder blf"></td>
			</tr>
			<tr></tr>
			<tr>
				<td colspan="21" class="noborder"></td>
				<td colspan="7" rowspan="2">Jk, 25-50 %. Turunkan pemberian minuman hingga 50%</td>
				<td colspan="7" class="noborder blf"></td>
			</tr>
			<tr>
			<td colspan="21" class="noborder"></td>
			<td colspan="7" class="noborder blf"></td>
			</tr>
		</table>
	</div>
		</div>
	@endif

	@if (!empty($res['d3']))
		<div class="format">
			<table width='100%'>
				<tr height=20 class="noborder">
					<td colspan="8" rowspan="4" class="p3 noborder-tb text-center">
						@if(stripos(\Request::url(), 'localhost') !== FALSE)
							<img src="{{ public_path('img/logo_only.png') }}" alt="" style="width: 60px;display:block; margin:auto;">
							@else
							<img src="{{ public_path('service/img/logo_only.png') }}" alt="" style="width: 60px;display:block; margin:auto;">
							@endif
					</td>
					<td colspan="17" rowspan="4" class="noborder-tb text-center" style="font-size:large">
						<strong>{!! $res['profile']->namalengkap !!}</strong> <br>{!! $res['profile']->alamatlengkap !!}<br>TELP : (0413) 81292
					</td>
					<td colspan="6" class="noborder" style="font-size: 10pt">No. RM </td>
					<td colspan="13" class="noborder" style="font-size: 10pt">
						: {!! $res['d1'][0]->nocm  !!}
					</td>
					<td colspan="5" rowspan="2" class="border-lr bg-dark" style="font-size: 36px;text-align:center">RM</td>
				</tr>
				<tr class="noborder">
					<td colspan="6" class="noborder" style="font-size: 10pt">Nama Lengkap</td>
					<td colspan="11" class="noborder" style="font-size: 10pt">
						: {!!  $res['d1'][0]->namapasien  !!}
					</td>
					<td colspan="2" class="noborder" style="font-size: 10pt">{!!  $res['d1'][0]->jeniskelamin == 'PEREMPUAN' ? '(P)' : '(L)'  !!}</td>
				</tr>
				<tr class="noborder">
					<td colspan="6" class="noborder" style="font-size: 10pt">Tanggal Lahir</td>
					<td colspan="13" class="noborder" style="font-size: 10pt">
						: {!! date('d-m-Y',strtotime( $res['d1'][0]->tgllahir  )) !!}
					</td>
					<td colspan="5" class="border-lr" rowspan="2" style="font-size: 36px;text-align:center">70</td>
				</tr>
				<tr class="noborder">
					<td colspan="6" class="noborder" style="font-size: 10pt">NIK</td>
					<td colspan="11" class="noborder" style="font-size: 10pt">
						: {!! $res['d1'][0]->noidentitas  !!}
					</td>
				</tr>
				<tr class="bordered bg-dark-small">
					<th colspan="49" height="20pt">PEMBERIAN MAKAN AWAL DAN PENURUNAN CAIRAN IV PADA NEONATUS 2000-2500 GRAM DARI HARI PERAWATAN 1-12</th>
				</tr>
				<tr>
					<td colspan="15">&nbsp; BB : @{{ item.obji3[1001750] ? item.obji3[1001750] : '' }}</td>
					<td colspan="8">&nbsp; BB MASUK : @{{ item.obji3[1001751] ? item.obji3[1001751] : '' }}</td>
					<td colspan="26">&nbsp; % PERUBAHAN DARI BB LAHIR : @{{ item.obji3[1001812] ? item.obji3[1001812] : '' }}</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI LAHIR/HARI RAWAT</td>
					<td colspan="5">VOLUME MINUM</td>
					<td colspan="5">VOLUME CAIRAN IV</td>
					<td colspan="5">JENIS CAIRAN</td>
					<td colspan="5">TOTAL VOLUME CAIRAN</td>
					<td colspan="26" rowspan="11">
						<table class="noborder" style="table-layout:fixed;text-align:left;width:100%">
							<tr class="noborder text-center">
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24" align="left">'Volume minum' merupakan jumlah volume minimal yang diberikan. Selalu bisa naik volume susu ke total volume cairan</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24">Gunakan BB lahir atau BB saat masuk yang sampai BB lebih besar</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24">Kalau bayi turun berat badan (BB), gunakan BB tertinggi untuk penghitungan</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24">Pemberian minum harus dimulai pada hari kedua, jika RR ≤ 80</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24">ASI adalah yang terbaik. Gunakan ASI Perah atau Formula 20 Kkal/ 30 cc sampai pemberian minum 150 cc/kg/hr</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24">Untuk membuat Formula 20 Kkal/ 30 cc, campur satu sendok peres SGM BBLR di dalam 40 cc air.</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24">Pindah ke lembar pemeliharaan pemberian minum saat minum bayi mencapai 150 cc/kg/hr.</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2"></td>
									<td valign="top" class="noborder" colspan="24"><em>(Jk neonatus mengalami intoleransi atau tanda NEC (lihat dibawah) dan pemberian minum lanjutan tertunda, jelaskan masalah pada kolom “komentar” dan gunakan lembar “pemberian minum awal” kedua sesuai kebutuhan perbaiki hari rawat pada kolom pertama)</em></td>
								</tr>
						</table>
					</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 1 :</td>
					<td colspan="5">0 cc/kg/hr</td>
					<td colspan="5">80 cc/kg/hr</td>
					<td colspan="5">D10</td>
					<td colspan="5">80 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 2 :</td>
					<td colspan="5">10 cc/kg/hr</td>
					<td colspan="5">90 cc/kg/hr</td>
					<td colspan="5">D10</td>
					<td colspan="5">100 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 3 :</td>
					<td colspan="5">30 cc/kg/hr</td>
					<td colspan="5">70 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">100 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 4 :</td>
					<td colspan="5">50 cc/kg/hr</td>
					<td colspan="5">70 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 5 :</td>
					<td colspan="5">70 cc/kg/hr</td>
					<td colspan="5">50 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 6 :</td>
					<td colspan="5">90 cc/kg/hr</td>
					<td colspan="5">40 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">130 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 7 :</td>
					<td colspan="5">120 cc/kg/hr</td>
					<td colspan="5">20 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">140 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 8 :</td>
					<td colspan="5">150 cc/kg/hr</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">150 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 9 :</td>
					<td colspan="5">140 cc/kg/hr</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">140 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 10 :</td>
					<td colspan="5">150 cc/kg/hr</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">150 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 11 :</td>
					<td colspan="5">LEMBAR PEMELIHARAAN</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">150 cc/kg/hr</td>
					<td colspan="26" rowspan="2">
						Kunci - DOB : Hari lahir; HD : Hari rawat; * %Perubahan dari BB lahir = (BW-AW/BW)* 100 dimana BW adalah berat lahir dan AW <br> adalah berat saat masuk; D10 : Dextrose 10%; NS : Normal Saline atau 154 mEq/L solution
		
					</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 12 :</td>
					<td colspan="5">LEMBAR PEMELIHARAAN</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">150 cc/kg/hr</td>
				</tr>
				<tr></tr>
				<tr  class="text-center">
					<td colspan="3" rowspan="2">HARI RAWAT INFANT</td>
					<td colspan="3"></td>
					<td colspan="2">A</td>
					<td colspan="3">B</td>
					<td colspan="4"></td>
					<td colspan="3">C</td>
					<td colspan="3"></td>
					<td colspan="4"></td>
					<td colspan="8"></td>
					<td colspan="7"></td>
					<td colspan="9"></td>
				</tr>
				<tr class="text-center">
					<td colspan="3">Tgl hari ini (d/m/y)</td>
					<td colspan="2">Berat Badan (kg)</td>
					<td colspan="3">Volume minum per hari (co/kg/hr)</td>
					<td colspan="4">Volume minum setiap 3 jam (A*B)/8</td>
					<td colspan="3">Volum cairan IV perhari (co/kg/hr)</td>
					<td colspan="3">Volume Cairan per jam (A*B)/12</td>
					<td colspan="4">Jenis Minuman (ASI atau Formula)</td>
					<td colspan="8">MINUMAN DIBERIKAN PERHARI <br> (lingkari setiap minum diberikan)</td>
					<td colspan="7">Tanda Intoleransi (Dsitensi: <br />Muntahan empedu atau susu: feces berdarah)</td>
					<td colspan="9">Komentar</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">DOB atau HD 1</td>
					<td colspan="3">&nbsp;@{{item.obji3[1001813] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji3[1001814] ? item.obji3[1001814] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1001815] ? item.obji3[1001815] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji3[1001816] ? item.obji3[1001816] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1001817] ? item.obji3[1001817] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji3[1001818] ? item.obji3[1001818] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1001819] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji3[1001820] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji3[1001821] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001822] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001823] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001824] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001825] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001826] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001827] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001828] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji3[1001833] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji3[1001834] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1001835] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji3[1001836] ? item.obji3[1001836] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">2</td>
					<td colspan="3">&nbsp;@{{item.obji3[1001837] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji3[1001838] ? item.obji3[1001838] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1001839] ? item.obji3[1001839] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji3[1001840] ? item.obji3[1001840] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1001841] ? item.obji3[1001841] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji3[1001842] ? item.obji3[1001842] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1001843] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji3[1001844] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji3[1001845] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001846] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001847] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001848] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001849] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001850] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001851] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001852] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji3[1001857] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji3[1001858] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1001859] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji3[1001860] ? item.obji3[1001860] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">3</td>
					<td colspan="3">&nbsp;@{{item.obji3[1001861] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji3[1001862] ? item.obji3[1001862] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1001863] ? item.obji3[1001863] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji3[1001864] ? item.obji3[1001864] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1001865] ? item.obji3[1001865] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji3[1001866] ? item.obji3[1001866] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1001867] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji3[1001868] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji3[1001869] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001870] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001871] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001872] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001873] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001874] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001875] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001876] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji3[1001881] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji3[1001882] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1001883] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji3[1001884] ? item.obji3[1001884] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">4</td>
					<td colspan="3">&nbsp;@{{item.obji3[1001885] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji3[1001886] ? item.obji3[1001886] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1001887] ? item.obji3[1001887] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji3[1001888] ? item.obji3[1001888] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1001889] ? item.obji3[1001889] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji3[1001890] ? item.obji3[1001890] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1001891] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji3[1001892] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji3[1001893] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001894] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001895] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001896] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001897] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001898] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001899] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001900] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji3[1001905] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji3[1001906] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1001907] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji3[1001908] ? item.obji3[1001908] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">5</td>
					<td colspan="3">&nbsp;@{{item.obji3[1001909] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji3[1001910] ? item.obji3[1001910] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1001911] ? item.obji3[1001911] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji3[1001912] ? item.obji3[1001912] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1001913] ? item.obji3[1001913] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji3[1001914] ? item.obji3[1001914] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1001915] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji3[1001916] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji3[1001917] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001918] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001919] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001920] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001921] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001922] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001923] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001924] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji3[1001929] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji3[1001930] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1001931] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji3[1001932] ? item.obji3[1001932] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">6</td>
					<td colspan="3">&nbsp;@{{item.obji3[1001933] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji3[1001934] ? item.obji3[1001934] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1001935] ? item.obji3[1001935] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji3[1001936] ? item.obji3[1001936] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1001937] ? item.obji3[1001937] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji3[1001938] ? item.obji3[1001938] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1001939] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji3[1001940] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji3[1001941] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001942] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001943] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001944] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001945] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001946] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001947] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001948] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji3[1001953] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji3[1001954] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1001955] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji3[1001956] ? item.obji3[1001956] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">7</td>
					<td colspan="3">&nbsp;@{{item.obji3[1001957] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji3[1001958] ? item.obji3[1001958] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1001959] ? item.obji3[1001959] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji3[1001960] ? item.obji3[1001960] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1001961] ? item.obji3[1001961] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji3[1001962] ? item.obji3[1001962] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1001963] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji3[1001964] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji3[1001965] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001966] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001967] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001968] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001969] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001970] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001971] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001972] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji3[1001977] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji3[1001978] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1001979] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji3[1001980] ? item.obji3[1001980] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">8</td>
					<td colspan="3">&nbsp;@{{item.obji3[1001981] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji3[1001982] ? item.obji3[1001982] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1001983] ? item.obji3[1001983] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji3[1001984] ? item.obji3[1001984] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1001985] ? item.obji3[1001985] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji3[1001986] ? item.obji3[1001986] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1001987] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji3[1001988] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji3[1001989] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001990] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001991] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001992] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001993] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001994] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001995] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001996] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji3[1002001] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji3[1002002] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1002003] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji3[1002004] ? item.obji3[1002004] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">9</td>
					<td colspan="3">&nbsp;@{{item.obji3[1002005] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji3[1002006] ? item.obji3[1002006] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1002007] ? item.obji3[1002007] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji3[1002008] ? item.obji3[1002008] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1002009] ? item.obji3[1002009] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji3[1002010] ? item.obji3[1002010] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1002011] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji3[1002012] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji3[1002013] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1002014] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1002015] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1002016] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1002017] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1002018] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1002019] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1002020] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji3[1002025] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji3[1002026] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1002027] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji3[1002028] ? item.obji3[1002028] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">10</td>
					<td colspan="3">&nbsp;@{{item.obji3[1002029] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji3[1002030] ? item.obji3[1002030] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1002031] ? item.obji3[1002031] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji3[1002032] ? item.obji3[1002032] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1002033] ? item.obji3[1002033] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji3[1002034] ? item.obji3[1002034] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1002035] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji3[1002036] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji3[1002037] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1002038] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1002039] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1002040] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1002041] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1002042] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1002043] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1002044] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji3[1002049] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji3[1002050] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1002051] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji3[1002052] ? item.obji3[1002052] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">11</td>
					<td colspan="2">&nbsp;@{{item.obji3[1002053] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1002054] ? item.obji3[1002054] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1002055] ? item.obji3[1002055] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji3[1002056] ? item.obji3[1002056] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1002057] ? item.obji3[1002057] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji3[1002058] ? item.obji3[1002058] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1002059] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji3[1002060] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji3[1002061] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1002062] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1002063] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1002064] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1002065] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1002066] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1002067] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1002068] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji3[1002073] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji3[1002074] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1002075] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji3[1002076] ? item.obji3[1002076] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">12</td>
					<td colspan="2">&nbsp;@{{item.obji3[1002077] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1002078] ? item.obji3[1002078] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1002079] ? item.obji3[1002079] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji3[1002080] ? item.obji3[1002080] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1002081] ? item.obji3[1002081] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji3[1002082] ? item.obji3[1002082] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1002083] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji3[1002084] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji3[1002085] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1002086] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1002087] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1002088] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1002089] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1002090] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1002091] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1002092] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji3[1002097] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji3[1002098] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1002099] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji3[1002100] ? item.obji3[1002100] : '' }}</td>
				</tr>
			</table>
			<div class="pdua">
		<table style="table-layout:fixed;border:none;width:100%;">
			<tr class="p03">
				<td colspan="49" class="noborder"></td>
			</tr>
			<tr>
				<td colspan="20" class="noborder"></td>
				<td class="noborder"></td>
				<td colspan="7" rowspan="3">Pertimbangkan NEC. Hentikan minuman 24-48 jam. Mulai cairan IV sampai 150cc/kg/d Mulai Amp/Sulbactam</td>
				<td class="noborder" colspan="7"></td>
				<td class="noborder btm">+</td>
				<td colspan="7" rowspan="2">Jk pneumotoses, lanjut status puasa, Antibiotik dan cairan IV untuk 14 hari</td>
				<td class="noborder blf"></td>
			</tr>
			<tr>
				<td class="noborder" colspan="10" rowspan="2">
					PENDEKATAN UNTUK TOLERANSI MAKANAN <br>
					PADA BAYI BERAT BADAN LAHIR RENDAH
				</td>
				<td class="noborder"></td>
				<td class="noborder"></td>
				<td class="noborder btm"></td>
				<td class="noborder btm"></td>
				<td colspan="6" class="text-center" rowspan="2">Residu/muntahan dgn cairan empedu atau feses berdarah</td>
				<td class="noborder"></td>
				<td class="noborder" colspan=""></td>
				
				<td colspan="4" rowspan="2">Abdominal X-Ray dalam 24 jam</td>
				<td class="noborder"></td>
				<td class="noborder br"></td>
				<td class="noborder "></td>
				<td  class="noborder btm"></td>
			</tr>
			<tr>
				<td class="noborder"></td>
				<td class="noborder"></td>
				<td class="noborder blf"></td>
				<td class="noborder"></td>
				<td class="noborder"></td>
				<td class="noborder"></td>
				<td colspan="" class="noborder btp"></td>
				<td class="noborder btp br"></td>
				<td class="noborder"></td>
				<td colspan="7" class="noborder btp"></td>
			</tr>
			<tr>
				<td colspan="3" rowspan="2" class="text-center">Intoleransi Makanan</td>
				<td class="noborder"></td>
				<td class="noborder"></td>
				<td rowspan="2" colspan="6" class="text-center">Distensi; muntahan/residu dgn empedu; Darah pada feses</td>
				<td class="noborder blf btm"></td>
				<td class="noborder blf"></td>
				<td class="noborder"></td>
				<td colspan="19" class="noborder"></td>
				<td class="noborder"></td>
				<td class="noborder br"></td>
				<td class="btm bl noborder"></td>
				<td class="" colspan="7" rowspan="2">Jk negatif, mulai pemberian minum pada volume terakhir sebelum terjadi</td>
				<td colspan="7" class="noborder blf"></td>
			</tr>
			<tr>
				<td class="noborder btp"></td>
				<td class="noborder btp"></td>
				<td class="noborder br"></td>
				<td class="noborder btm"></td>
				<td class="noborder br btm"></td>
				<td colspan="6" rowspan="2" class="text-center">Residu/muntahan tdk <br> mengandung cairan empedu</td>
				<td class="noborder"></td>
				<td colspan="7" rowspan="2" class="text-center">Jk Aspirasi < 25% minuman. Lanjutkan pemberian minuman</td>
				<td colspan="7" class="noborder "></td>
				<td class="noborder">-</td>
				<td class="noborder br btm"></td>
			</tr>
			<tr>
				<td colspan="14" class="noborder"></td>
				<td class="noborder"></td>
				<td class="noborder"></td>
				<td  colspan="7" class="noborder"></td>
				<td colspan="7" class="noborder"></td>
			</tr>
			<tr></tr>
			<tr>
			<td colspan="14" class="noborder"></td>
			<td colspan="6" class="noborder btp"></td>
				<td  class="noborder"></td>
				<td colspan="7" rowspan="2">Jk, 25-50 %. Turunkan pemberian minuman hingga 50%</td>
				<td colspan="7" class="noborder blf"></td>
			</tr>
			<tr>
			<td colspan="21" class="noborder"></td>
			<td colspan="7" class="noborder blf"></td>
			</tr>
			<tr></tr>
			<tr>
				<td colspan="21" class="noborder"></td>
				<td colspan="7" rowspan="2">Jk, 25-50 %. Turunkan pemberian minuman hingga 50%</td>
				<td colspan="7" class="noborder blf"></td>
			</tr>
			<tr>
			<td colspan="21" class="noborder"></td>
			<td colspan="7" class="noborder blf"></td>
			</tr>
		</table>
	</div>
		</div>
	@endif

	@if (!empty($res['d4']))
		<div class="format">
			<table width='100%'>
				<tr height=20 class="noborder">
					<td colspan="8" rowspan="4" class="p3 noborder-tb text-center">
						@if(stripos(\Request::url(), 'localhost') !== FALSE)
							<img src="{{ public_path('img/logo_only.png') }}" alt="" style="width: 60px;display:block; margin:auto;">
							@else
							<img src="{{ public_path('service/img/logo_only.png') }}" alt="" style="width: 60px;display:block; margin:auto;">
							@endif
					</td>
					<td colspan="17" rowspan="4" class="noborder-tb text-center" style="font-size:large">
						<strong>{!! $res['profile']->namalengkap !!}</strong> <br>{!! $res['profile']->alamatlengkap !!}<br>TELP : (0413) 81292
					</td>
					<td colspan="6" class="noborder" style="font-size: 10pt">No. RM </td>
					<td colspan="13" class="noborder" style="font-size: 10pt">
						: {!! $res['d1'][0]->nocm  !!}
					</td>
					<td colspan="5" rowspan="2" class="border-lr bg-dark" style="font-size: 36px;text-align:center">RM</td>
				</tr>
				<tr class="noborder">
					<td colspan="6" class="noborder" style="font-size: 10pt">Nama Lengkap</td>
					<td colspan="11" class="noborder" style="font-size: 10pt">
						: {!!  $res['d1'][0]->namapasien  !!}
					</td>
					<td colspan="2" class="noborder" style="font-size: 10pt">{!!  $res['d1'][0]->jeniskelamin == 'PEREMPUAN' ? '(P)' : '(L)'  !!}</td>
				</tr>
				<tr class="noborder">
					<td colspan="6" class="noborder" style="font-size: 10pt">Tanggal Lahir</td>
					<td colspan="13" class="noborder" style="font-size: 10pt">
						: {!! date('d-m-Y',strtotime( $res['d1'][0]->tgllahir  )) !!}
					</td>
					<td colspan="5" class="border-lr" rowspan="2" style="font-size: 36px;text-align:center">70</td>
				</tr>
				<tr class="noborder">
					<td colspan="6" class="noborder" style="font-size: 10pt">NIK</td>
					<td colspan="11" class="noborder" style="font-size: 10pt">
						: {!! $res['d1'][0]->noidentitas  !!}
					</td>
				</tr>
				<tr class="bordered bg-dark-small">
					<th colspan="49" height="20pt">PEMBERIAN MAKAN AWAL DAN PENURUNAN CAIRAN IV PADA NEONATUS 2000-2500 GRAM DARI HARI PERAWATAN 1-12</th>
				</tr>
				<tr>
					<td colspan="15">&nbsp; BB : @{{ item.obji4[1001750] ? item.obji4[1001750] : '' }}</td>
					<td colspan="8">&nbsp; BB MASUK : @{{ item.obji4[1001751] ? item.obji4[1001751] : '' }}</td>
					<td colspan="26">&nbsp; % PERUBAHAN DARI BB LAHIR : @{{ item.obji4[1001812] ? item.obji4[1001812] : '' }}</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI LAHIR/HARI RAWAT</td>
					<td colspan="5">VOLUME MINUM</td>
					<td colspan="5">VOLUME CAIRAN IV</td>
					<td colspan="5">JENIS CAIRAN</td>
					<td colspan="5">TOTAL VOLUME CAIRAN</td>
					<td colspan="26" rowspan="11">
						<table class="noborder" style="table-layout:fixed;text-align:left;width:100%">
							<tr class="noborder text-center">
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24" align="left">'Volume minum' merupakan jumlah volume minimal yang diberikan. Selalu bisa naik volume susu ke total volume cairan</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24">Gunakan BB lahir atau BB saat masuk yang sampai BB lebih besar</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24">Kalau bayi turun berat badan (BB), gunakan BB tertinggi untuk penghitungan</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24">Pemberian minum harus dimulai pada hari kedua, jika RR ≤ 80</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24">ASI adalah yang terbaik. Gunakan ASI Perah atau Formula 20 Kkal/ 30 cc sampai pemberian minum 150 cc/kg/hr</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24">Untuk membuat Formula 20 Kkal/ 30 cc, campur satu sendok peres SGM BBLR di dalam 40 cc air.</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24">Pindah ke lembar pemeliharaan pemberian minum saat minum bayi mencapai 150 cc/kg/hr.</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2"></td>
									<td valign="top" class="noborder" colspan="24"><em>(Jk neonatus mengalami intoleransi atau tanda NEC (lihat dibawah) dan pemberian minum lanjutan tertunda, jelaskan masalah pada kolom “komentar” dan gunakan lembar “pemberian minum awal” kedua sesuai kebutuhan perbaiki hari rawat pada kolom pertama)</em></td>
								</tr>
						</table>
					</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 1 :</td>
					<td colspan="5">0 cc/kg/hr</td>
					<td colspan="5">80 cc/kg/hr</td>
					<td colspan="5">D10</td>
					<td colspan="5">80 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 2 :</td>
					<td colspan="5">10 cc/kg/hr</td>
					<td colspan="5">90 cc/kg/hr</td>
					<td colspan="5">D10</td>
					<td colspan="5">100 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 3 :</td>
					<td colspan="5">30 cc/kg/hr</td>
					<td colspan="5">70 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">100 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 4 :</td>
					<td colspan="5">50 cc/kg/hr</td>
					<td colspan="5">70 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 5 :</td>
					<td colspan="5">70 cc/kg/hr</td>
					<td colspan="5">50 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 6 :</td>
					<td colspan="5">90 cc/kg/hr</td>
					<td colspan="5">40 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">130 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 7 :</td>
					<td colspan="5">120 cc/kg/hr</td>
					<td colspan="5">20 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">140 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 8 :</td>
					<td colspan="5">150 cc/kg/hr</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">150 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 9 :</td>
					<td colspan="5">140 cc/kg/hr</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">140 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 10 :</td>
					<td colspan="5">150 cc/kg/hr</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">150 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 11 :</td>
					<td colspan="5">LEMBAR PEMELIHARAAN</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">150 cc/kg/hr</td>
					<td colspan="26" rowspan="2">
						Kunci - DOB : Hari lahir; HD : Hari rawat; * %Perubahan dari BB lahir = (BW-AW/BW)* 100 dimana BW adalah berat lahir dan AW <br> adalah berat saat masuk; D10 : Dextrose 10%; NS : Normal Saline atau 154 mEq/L solution
		
					</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 12 :</td>
					<td colspan="5">LEMBAR PEMELIHARAAN</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">150 cc/kg/hr</td>
				</tr>
				<tr></tr>
				<tr  class="text-center">
					<td colspan="3" rowspan="2">HARI RAWAT INFANT</td>
					<td colspan="3"></td>
					<td colspan="2">A</td>
					<td colspan="3">B</td>
					<td colspan="4"></td>
					<td colspan="3">C</td>
					<td colspan="3"></td>
					<td colspan="4"></td>
					<td colspan="8"></td>
					<td colspan="7"></td>
					<td colspan="9"></td>
				</tr>
				<tr class="text-center">
					<td colspan="3">Tgl hari ini (d/m/y)</td>
					<td colspan="2">Berat Badan (kg)</td>
					<td colspan="3">Volume minum per hari (co/kg/hr)</td>
					<td colspan="4">Volume minum setiap 3 jam (A*B)/8</td>
					<td colspan="3">Volum cairan IV perhari (co/kg/hr)</td>
					<td colspan="3">Volume Cairan per jam (A*B)/12</td>
					<td colspan="4">Jenis Minuman (ASI atau Formula)</td>
					<td colspan="8">MINUMAN DIBERIKAN PERHARI <br> (lingkari setiap minum diberikan)</td>
					<td colspan="7">Tanda Intoleransi (Dsitensi: <br />Muntahan empedu atau susu: feces berdarah)</td>
					<td colspan="9">Komentar</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">DOB atau HD 1</td>
					<td colspan="3">&nbsp;@{{item.obji4[1001813] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji4[1001814] ? item.obji4[1001814] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1001815] ? item.obji4[1001815] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji4[1001816] ? item.obji4[1001816] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1001817] ? item.obji4[1001817] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji4[1001818] ? item.obji4[1001818] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1001819] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji4[1001820] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji4[1001821] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001822] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001823] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001824] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001825] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001826] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001827] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001828] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji4[1001833] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji4[1001834] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1001835] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji4[1001836] ? item.obji4[1001836] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">2</td>
					<td colspan="3">&nbsp;@{{item.obji4[1001837] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji4[1001838] ? item.obji4[1001838] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1001839] ? item.obji4[1001839] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji4[1001840] ? item.obji4[1001840] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1001841] ? item.obji4[1001841] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji4[1001842] ? item.obji4[1001842] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1001843] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji4[1001844] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji4[1001845] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001846] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001847] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001848] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001849] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001850] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001851] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001852] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji4[1001857] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji4[1001858] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1001859] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji4[1001860] ? item.obji4[1001860] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">3</td>
					<td colspan="3">&nbsp;@{{item.obji4[1001861] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji4[1001862] ? item.obji4[1001862] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1001863] ? item.obji4[1001863] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji4[1001864] ? item.obji4[1001864] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1001865] ? item.obji4[1001865] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji4[1001866] ? item.obji4[1001866] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1001867] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji4[1001868] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji4[1001869] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001870] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001871] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001872] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001873] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001874] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001875] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001876] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji4[1001881] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji4[1001882] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1001883] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji4[1001884] ? item.obji4[1001884] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">4</td>
					<td colspan="3">&nbsp;@{{item.obji4[1001885] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji4[1001886] ? item.obji4[1001886] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1001887] ? item.obji4[1001887] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji4[1001888] ? item.obji4[1001888] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1001889] ? item.obji4[1001889] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji4[1001890] ? item.obji4[1001890] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1001891] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji4[1001892] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji4[1001893] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001894] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001895] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001896] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001897] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001898] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001899] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001900] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji4[1001905] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji4[1001906] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1001907] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji4[1001908] ? item.obji4[1001908] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">5</td>
					<td colspan="3">&nbsp;@{{item.obji4[1001909] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji4[1001910] ? item.obji4[1001910] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1001911] ? item.obji4[1001911] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji4[1001912] ? item.obji4[1001912] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1001913] ? item.obji4[1001913] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji4[1001914] ? item.obji4[1001914] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1001915] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji4[1001916] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji4[1001917] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001918] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001919] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001920] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001921] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001922] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001923] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001924] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji4[1001929] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji4[1001930] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1001931] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji4[1001932] ? item.obji4[1001932] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">6</td>
					<td colspan="3">&nbsp;@{{item.obji4[1001933] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji4[1001934] ? item.obji4[1001934] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1001935] ? item.obji4[1001935] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji4[1001936] ? item.obji4[1001936] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1001937] ? item.obji4[1001937] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji4[1001938] ? item.obji4[1001938] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1001939] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji4[1001940] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji4[1001941] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001942] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001943] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001944] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001945] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001946] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001947] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001948] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji4[1001953] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji4[1001954] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1001955] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji4[1001956] ? item.obji4[1001956] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">7</td>
					<td colspan="3">&nbsp;@{{item.obji4[1001957] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji4[1001958] ? item.obji4[1001958] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1001959] ? item.obji4[1001959] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji4[1001960] ? item.obji4[1001960] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1001961] ? item.obji4[1001961] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji4[1001962] ? item.obji4[1001962] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1001963] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji4[1001964] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji4[1001965] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001966] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001967] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001968] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001969] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001970] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001971] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001972] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji4[1001977] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji4[1001978] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1001979] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji4[1001980] ? item.obji4[1001980] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">8</td>
					<td colspan="3">&nbsp;@{{item.obji4[1001981] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji4[1001982] ? item.obji4[1001982] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1001983] ? item.obji4[1001983] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji4[1001984] ? item.obji4[1001984] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1001985] ? item.obji4[1001985] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji4[1001986] ? item.obji4[1001986] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1001987] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji4[1001988] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji4[1001989] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001990] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001991] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001992] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001993] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001994] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001995] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001996] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji4[1002001] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji4[1002002] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1002003] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji4[1002004] ? item.obji4[1002004] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">9</td>
					<td colspan="3">&nbsp;@{{item.obji4[1002005] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji4[1002006] ? item.obji4[1002006] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1002007] ? item.obji4[1002007] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji4[1002008] ? item.obji4[1002008] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1002009] ? item.obji4[1002009] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji4[1002010] ? item.obji4[1002010] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1002011] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji4[1002012] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji4[1002013] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1002014] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1002015] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1002016] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1002017] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1002018] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1002019] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1002020] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji4[1002025] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji4[1002026] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1002027] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji4[1002028] ? item.obji4[1002028] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">10</td>
					<td colspan="3">&nbsp;@{{item.obji4[1002029] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji4[1002030] ? item.obji4[1002030] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1002031] ? item.obji4[1002031] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji4[1002032] ? item.obji4[1002032] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1002033] ? item.obji4[1002033] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji4[1002034] ? item.obji4[1002034] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1002035] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji4[1002036] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji4[1002037] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1002038] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1002039] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1002040] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1002041] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1002042] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1002043] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1002044] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji4[1002049] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji4[1002050] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1002051] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji4[1002052] ? item.obji4[1002052] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">11</td>
					<td colspan="2">&nbsp;@{{item.obji4[1002053] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1002054] ? item.obji4[1002054] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1002055] ? item.obji4[1002055] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji4[1002056] ? item.obji4[1002056] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1002057] ? item.obji4[1002057] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji4[1002058] ? item.obji4[1002058] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1002059] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji4[1002060] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji4[1002061] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1002062] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1002063] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1002064] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1002065] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1002066] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1002067] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1002068] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji4[1002073] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji4[1002074] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1002075] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji4[1002076] ? item.obji4[1002076] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">12</td>
					<td colspan="2">&nbsp;@{{item.obji4[1002077] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1002078] ? item.obji4[1002078] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1002079] ? item.obji4[1002079] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji4[1002080] ? item.obji4[1002080] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1002081] ? item.obji4[1002081] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji4[1002082] ? item.obji4[1002082] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1002083] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji4[1002084] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji4[1002085] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1002086] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1002087] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1002088] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1002089] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1002090] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1002091] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1002092] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji4[1002097] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji4[1002098] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1002099] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji4[1002100] ? item.obji4[1002100] : '' }}</td>
				</tr>
			</table>
			<div class="pdua">
		<table style="table-layout:fixed;border:none;width:100%;">
			<tr class="p03">
				<td colspan="49" class="noborder"></td>
			</tr>
			<tr>
				<td colspan="20" class="noborder"></td>
				<td class="noborder"></td>
				<td colspan="7" rowspan="3">Pertimbangkan NEC. Hentikan minuman 24-48 jam. Mulai cairan IV sampai 150cc/kg/d Mulai Amp/Sulbactam</td>
				<td class="noborder" colspan="7"></td>
				<td class="noborder btm">+</td>
				<td colspan="7" rowspan="2">Jk pneumotoses, lanjut status puasa, Antibiotik dan cairan IV untuk 14 hari</td>
				<td class="noborder blf"></td>
			</tr>
			<tr>
				<td class="noborder" colspan="10" rowspan="2">
					PENDEKATAN UNTUK TOLERANSI MAKANAN <br>
					PADA BAYI BERAT BADAN LAHIR RENDAH
				</td>
				<td class="noborder"></td>
				<td class="noborder"></td>
				<td class="noborder btm"></td>
				<td class="noborder btm"></td>
				<td colspan="6" class="text-center" rowspan="2">Residu/muntahan dgn cairan empedu atau feses berdarah</td>
				<td class="noborder"></td>
				<td class="noborder" colspan=""></td>
				
				<td colspan="4" rowspan="2">Abdominal X-Ray dalam 24 jam</td>
				<td class="noborder"></td>
				<td class="noborder br"></td>
				<td class="noborder "></td>
				<td  class="noborder btm"></td>
			</tr>
			<tr>
				<td class="noborder"></td>
				<td class="noborder"></td>
				<td class="noborder blf"></td>
				<td class="noborder"></td>
				<td class="noborder"></td>
				<td class="noborder"></td>
				<td colspan="" class="noborder btp"></td>
				<td class="noborder btp br"></td>
				<td class="noborder"></td>
				<td colspan="7" class="noborder btp"></td>
			</tr>
			<tr>
				<td colspan="3" rowspan="2" class="text-center">Intoleransi Makanan</td>
				<td class="noborder"></td>
				<td class="noborder"></td>
				<td rowspan="2" colspan="6" class="text-center">Distensi; muntahan/residu dgn empedu; Darah pada feses</td>
				<td class="noborder blf btm"></td>
				<td class="noborder blf"></td>
				<td class="noborder"></td>
				<td colspan="19" class="noborder"></td>
				<td class="noborder"></td>
				<td class="noborder br"></td>
				<td class="btm bl noborder"></td>
				<td class="" colspan="7" rowspan="2">Jk negatif, mulai pemberian minum pada volume terakhir sebelum terjadi</td>
				<td colspan="7" class="noborder blf"></td>
			</tr>
			<tr>
				<td class="noborder btp"></td>
				<td class="noborder btp"></td>
				<td class="noborder br"></td>
				<td class="noborder btm"></td>
				<td class="noborder br btm"></td>
				<td colspan="6" rowspan="2" class="text-center">Residu/muntahan tdk <br> mengandung cairan empedu</td>
				<td class="noborder"></td>
				<td colspan="7" rowspan="2" class="text-center">Jk Aspirasi < 25% minuman. Lanjutkan pemberian minuman</td>
				<td colspan="7" class="noborder "></td>
				<td class="noborder">-</td>
				<td class="noborder br btm"></td>
			</tr>
			<tr>
				<td colspan="14" class="noborder"></td>
				<td class="noborder"></td>
				<td class="noborder"></td>
				<td  colspan="7" class="noborder"></td>
				<td colspan="7" class="noborder"></td>
			</tr>
			<tr></tr>
			<tr>
			<td colspan="14" class="noborder"></td>
			<td colspan="6" class="noborder btp"></td>
				<td  class="noborder"></td>
				<td colspan="7" rowspan="2">Jk, 25-50 %. Turunkan pemberian minuman hingga 50%</td>
				<td colspan="7" class="noborder blf"></td>
			</tr>
			<tr>
			<td colspan="21" class="noborder"></td>
			<td colspan="7" class="noborder blf"></td>
			</tr>
			<tr></tr>
			<tr>
				<td colspan="21" class="noborder"></td>
				<td colspan="7" rowspan="2">Jk, 25-50 %. Turunkan pemberian minuman hingga 50%</td>
				<td colspan="7" class="noborder blf"></td>
			</tr>
			<tr>
			<td colspan="21" class="noborder"></td>
			<td colspan="7" class="noborder blf"></td>
			</tr>
		</table>
	</div>
		</div>
	@endif

	@if (!empty($res['d5']))
		<div class="format">
			<table width='100%'>
				<tr height=20 class="noborder">
					<td colspan="8" rowspan="4" class="p3 noborder-tb text-center">
						@if(stripos(\Request::url(), 'localhost') !== FALSE)
							<img src="{{ public_path('img/logo_only.png') }}" alt="" style="width: 60px;display:block; margin:auto;">
							@else
							<img src="{{ public_path('service/img/logo_only.png') }}" alt="" style="width: 60px;display:block; margin:auto;">
							@endif
					</td>
					<td colspan="17" rowspan="4" class="noborder-tb text-center" style="font-size:large">
						<strong>{!! $res['profile']->namalengkap !!}</strong> <br>{!! $res['profile']->alamatlengkap !!}<br>TELP : (0413) 81292
					</td>
					<td colspan="6" class="noborder" style="font-size: 10pt">No. RM </td>
					<td colspan="13" class="noborder" style="font-size: 10pt">
						: {!! $res['d1'][0]->nocm  !!}
					</td>
					<td colspan="5" rowspan="2" class="border-lr bg-dark" style="font-size: 36px;text-align:center">RM</td>
				</tr>
				<tr class="noborder">
					<td colspan="6" class="noborder" style="font-size: 10pt">Nama Lengkap</td>
					<td colspan="11" class="noborder" style="font-size: 10pt">
						: {!!  $res['d1'][0]->namapasien  !!}
					</td>
					<td colspan="2" class="noborder" style="font-size: 10pt">{!!  $res['d1'][0]->jeniskelamin == 'PEREMPUAN' ? '(P)' : '(L)'  !!}</td>
				</tr>
				<tr class="noborder">
					<td colspan="6" class="noborder" style="font-size: 10pt">Tanggal Lahir</td>
					<td colspan="13" class="noborder" style="font-size: 10pt">
						: {!! date('d-m-Y',strtotime( $res['d1'][0]->tgllahir  )) !!}
					</td>
					<td colspan="5" class="border-lr" rowspan="2" style="font-size: 36px;text-align:center">70</td>
				</tr>
				<tr class="noborder">
					<td colspan="6" class="noborder" style="font-size: 10pt">NIK</td>
					<td colspan="11" class="noborder" style="font-size: 10pt">
						: {!! $res['d1'][0]->noidentitas  !!}
					</td>
				</tr>
				<tr class="bordered bg-dark-small">
					<th colspan="49" height="20pt">PEMBERIAN MAKAN AWAL DAN PENURUNAN CAIRAN IV PADA NEONATUS 2000-2500 GRAM DARI HARI PERAWATAN 1-12</th>
				</tr>
				<tr>
					<td colspan="15">&nbsp; BB : @{{ item.obji5[1001750] ? item.obji5[1001750] : '' }}</td>
					<td colspan="8">&nbsp; BB MASUK : @{{ item.obji5[1001751] ? item.obji5[1001751] : '' }}</td>
					<td colspan="26">&nbsp; % PERUBAHAN DARI BB LAHIR : @{{ item.obji5[1001812] ? item.obji5[1001812] : '' }}</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI LAHIR/HARI RAWAT</td>
					<td colspan="5">VOLUME MINUM</td>
					<td colspan="5">VOLUME CAIRAN IV</td>
					<td colspan="5">JENIS CAIRAN</td>
					<td colspan="5">TOTAL VOLUME CAIRAN</td>
					<td colspan="26" rowspan="11">
						<table class="noborder" style="table-layout:fixed;text-align:left;width:100%">
							<tr class="noborder text-center">
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24" align="left">'Volume minum' merupakan jumlah volume minimal yang diberikan. Selalu bisa naik volume susu ke total volume cairan</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24">Gunakan BB lahir atau BB saat masuk yang sampai BB lebih besar</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24">Kalau bayi turun berat badan (BB), gunakan BB tertinggi untuk penghitungan</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24">Pemberian minum harus dimulai pada hari kedua, jika RR ≤ 80</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24">ASI adalah yang terbaik. Gunakan ASI Perah atau Formula 20 Kkal/ 30 cc sampai pemberian minum 150 cc/kg/hr</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24">Untuk membuat Formula 20 Kkal/ 30 cc, campur satu sendok peres SGM BBLR di dalam 40 cc air.</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24">Pindah ke lembar pemeliharaan pemberian minum saat minum bayi mencapai 150 cc/kg/hr.</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2"></td>
									<td valign="top" class="noborder" colspan="24"><em>(Jk neonatus mengalami intoleransi atau tanda NEC (lihat dibawah) dan pemberian minum lanjutan tertunda, jelaskan masalah pada kolom “komentar” dan gunakan lembar “pemberian minum awal” kedua sesuai kebutuhan perbaiki hari rawat pada kolom pertama)</em></td>
								</tr>
						</table>
					</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 1 :</td>
					<td colspan="5">0 cc/kg/hr</td>
					<td colspan="5">80 cc/kg/hr</td>
					<td colspan="5">D10</td>
					<td colspan="5">80 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 2 :</td>
					<td colspan="5">10 cc/kg/hr</td>
					<td colspan="5">90 cc/kg/hr</td>
					<td colspan="5">D10</td>
					<td colspan="5">100 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 3 :</td>
					<td colspan="5">30 cc/kg/hr</td>
					<td colspan="5">70 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">100 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 4 :</td>
					<td colspan="5">50 cc/kg/hr</td>
					<td colspan="5">70 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 5 :</td>
					<td colspan="5">70 cc/kg/hr</td>
					<td colspan="5">50 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 6 :</td>
					<td colspan="5">90 cc/kg/hr</td>
					<td colspan="5">40 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">130 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 7 :</td>
					<td colspan="5">120 cc/kg/hr</td>
					<td colspan="5">20 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">140 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 8 :</td>
					<td colspan="5">150 cc/kg/hr</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">150 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 9 :</td>
					<td colspan="5">140 cc/kg/hr</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">140 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 10 :</td>
					<td colspan="5">150 cc/kg/hr</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">150 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 11 :</td>
					<td colspan="5">LEMBAR PEMELIHARAAN</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">150 cc/kg/hr</td>
					<td colspan="26" rowspan="2">
						Kunci - DOB : Hari lahir; HD : Hari rawat; * %Perubahan dari BB lahir = (BW-AW/BW)* 100 dimana BW adalah berat lahir dan AW <br> adalah berat saat masuk; D10 : Dextrose 10%; NS : Normal Saline atau 154 mEq/L solution
		
					</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 12 :</td>
					<td colspan="5">LEMBAR PEMELIHARAAN</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">150 cc/kg/hr</td>
				</tr>
				<tr></tr>
				<tr  class="text-center">
					<td colspan="3" rowspan="2">HARI RAWAT INFANT</td>
					<td colspan="3"></td>
					<td colspan="2">A</td>
					<td colspan="3">B</td>
					<td colspan="4"></td>
					<td colspan="3">C</td>
					<td colspan="3"></td>
					<td colspan="4"></td>
					<td colspan="8"></td>
					<td colspan="7"></td>
					<td colspan="9"></td>
				</tr>
				<tr class="text-center">
					<td colspan="3">Tgl hari ini (d/m/y)</td>
					<td colspan="2">Berat Badan (kg)</td>
					<td colspan="3">Volume minum per hari (co/kg/hr)</td>
					<td colspan="4">Volume minum setiap 3 jam (A*B)/8</td>
					<td colspan="3">Volum cairan IV perhari (co/kg/hr)</td>
					<td colspan="3">Volume Cairan per jam (A*B)/12</td>
					<td colspan="4">Jenis Minuman (ASI atau Formula)</td>
					<td colspan="8">MINUMAN DIBERIKAN PERHARI <br> (lingkari setiap minum diberikan)</td>
					<td colspan="7">Tanda Intoleransi (Dsitensi: <br />Muntahan empedu atau susu: feces berdarah)</td>
					<td colspan="9">Komentar</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">DOB atau HD 1</td>
					<td colspan="3">&nbsp;@{{item.obji5[1001813] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji5[1001814] ? item.obji5[1001814] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1001815] ? item.obji5[1001815] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji5[1001816] ? item.obji5[1001816] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1001817] ? item.obji5[1001817] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji5[1001818] ? item.obji5[1001818] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1001819] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji5[1001820] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji5[1001821] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001822] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001823] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001824] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001825] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001826] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001827] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001828] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji5[1001833] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji5[1001834] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1001835] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji5[1001836] ? item.obji5[1001836] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">2</td>
					<td colspan="3">&nbsp;@{{item.obji5[1001837] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji5[1001838] ? item.obji5[1001838] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1001839] ? item.obji5[1001839] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji5[1001840] ? item.obji5[1001840] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1001841] ? item.obji5[1001841] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji5[1001842] ? item.obji5[1001842] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1001843] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji5[1001844] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji5[1001845] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001846] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001847] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001848] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001849] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001850] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001851] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001852] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji5[1001857] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji5[1001858] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1001859] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji5[1001860] ? item.obji5[1001860] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">3</td>
					<td colspan="3">&nbsp;@{{item.obji5[1001861] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji5[1001862] ? item.obji5[1001862] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1001863] ? item.obji5[1001863] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji5[1001864] ? item.obji5[1001864] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1001865] ? item.obji5[1001865] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji5[1001866] ? item.obji5[1001866] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1001867] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji5[1001868] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji5[1001869] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001870] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001871] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001872] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001873] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001874] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001875] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001876] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji5[1001881] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji5[1001882] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1001883] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji5[1001884] ? item.obji5[1001884] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">4</td>
					<td colspan="3">&nbsp;@{{item.obji5[1001885] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji5[1001886] ? item.obji5[1001886] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1001887] ? item.obji5[1001887] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji5[1001888] ? item.obji5[1001888] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1001889] ? item.obji5[1001889] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji5[1001890] ? item.obji5[1001890] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1001891] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji5[1001892] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji5[1001893] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001894] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001895] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001896] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001897] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001898] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001899] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001900] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji5[1001905] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji5[1001906] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1001907] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji5[1001908] ? item.obji5[1001908] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">5</td>
					<td colspan="3">&nbsp;@{{item.obji5[1001909] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji5[1001910] ? item.obji5[1001910] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1001911] ? item.obji5[1001911] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji5[1001912] ? item.obji5[1001912] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1001913] ? item.obji5[1001913] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji5[1001914] ? item.obji5[1001914] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1001915] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji5[1001916] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji5[1001917] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001918] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001919] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001920] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001921] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001922] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001923] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001924] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji5[1001929] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji5[1001930] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1001931] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji5[1001932] ? item.obji5[1001932] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">6</td>
					<td colspan="3">&nbsp;@{{item.obji5[1001933] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji5[1001934] ? item.obji5[1001934] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1001935] ? item.obji5[1001935] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji5[1001936] ? item.obji5[1001936] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1001937] ? item.obji5[1001937] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji5[1001938] ? item.obji5[1001938] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1001939] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji5[1001940] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji5[1001941] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001942] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001943] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001944] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001945] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001946] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001947] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001948] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji5[1001953] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji5[1001954] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1001955] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji5[1001956] ? item.obji5[1001956] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">7</td>
					<td colspan="3">&nbsp;@{{item.obji5[1001957] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji5[1001958] ? item.obji5[1001958] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1001959] ? item.obji5[1001959] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji5[1001960] ? item.obji5[1001960] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1001961] ? item.obji5[1001961] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji5[1001962] ? item.obji5[1001962] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1001963] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji5[1001964] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji5[1001965] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001966] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001967] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001968] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001969] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001970] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001971] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001972] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji5[1001977] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji5[1001978] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1001979] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji5[1001980] ? item.obji5[1001980] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">8</td>
					<td colspan="3">&nbsp;@{{item.obji5[1001981] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji5[1001982] ? item.obji5[1001982] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1001983] ? item.obji5[1001983] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji5[1001984] ? item.obji5[1001984] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1001985] ? item.obji5[1001985] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji5[1001986] ? item.obji5[1001986] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1001987] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji5[1001988] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji5[1001989] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001990] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001991] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001992] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001993] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001994] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001995] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001996] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji5[1002001] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji5[1002002] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1002003] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji5[1002004] ? item.obji5[1002004] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">9</td>
					<td colspan="3">&nbsp;@{{item.obji5[1002005] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji5[1002006] ? item.obji5[1002006] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1002007] ? item.obji5[1002007] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji5[1002008] ? item.obji5[1002008] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1002009] ? item.obji5[1002009] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji5[1002010] ? item.obji5[1002010] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1002011] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji5[1002012] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji5[1002013] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1002014] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1002015] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1002016] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1002017] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1002018] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1002019] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1002020] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji5[1002025] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji5[1002026] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1002027] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji5[1002028] ? item.obji5[1002028] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">10</td>
					<td colspan="3">&nbsp;@{{item.obji5[1002029] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji5[1002030] ? item.obji5[1002030] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1002031] ? item.obji5[1002031] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji5[1002032] ? item.obji5[1002032] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1002033] ? item.obji5[1002033] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji5[1002034] ? item.obji5[1002034] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1002035] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji5[1002036] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji5[1002037] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1002038] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1002039] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1002040] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1002041] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1002042] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1002043] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1002044] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji5[1002049] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji5[1002050] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1002051] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji5[1002052] ? item.obji5[1002052] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">11</td>
					<td colspan="2">&nbsp;@{{item.obji5[1002053] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1002054] ? item.obji5[1002054] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1002055] ? item.obji5[1002055] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji5[1002056] ? item.obji5[1002056] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1002057] ? item.obji5[1002057] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji5[1002058] ? item.obji5[1002058] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1002059] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji5[1002060] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji5[1002061] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1002062] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1002063] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1002064] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1002065] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1002066] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1002067] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1002068] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji5[1002073] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji5[1002074] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1002075] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji5[1002076] ? item.obji5[1002076] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">12</td>
					<td colspan="2">&nbsp;@{{item.obji5[1002077] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1002078] ? item.obji5[1002078] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1002079] ? item.obji5[1002079] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji5[1002080] ? item.obji5[1002080] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1002081] ? item.obji5[1002081] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji5[1002082] ? item.obji5[1002082] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1002083] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji5[1002084] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji5[1002085] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1002086] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1002087] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1002088] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1002089] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1002090] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1002091] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1002092] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji5[1002097] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji5[1002098] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1002099] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji5[1002100] ? item.obji5[1002100] : '' }}</td>
				</tr>
			</table>
			<div class="pdua">
		<table style="table-layout:fixed;border:none;width:100%;">
			<tr class="p03">
				<td colspan="49" class="noborder"></td>
			</tr>
			<tr>
				<td colspan="20" class="noborder"></td>
				<td class="noborder"></td>
				<td colspan="7" rowspan="3">Pertimbangkan NEC. Hentikan minuman 24-48 jam. Mulai cairan IV sampai 150cc/kg/d Mulai Amp/Sulbactam</td>
				<td class="noborder" colspan="7"></td>
				<td class="noborder btm">+</td>
				<td colspan="7" rowspan="2">Jk pneumotoses, lanjut status puasa, Antibiotik dan cairan IV untuk 14 hari</td>
				<td class="noborder blf"></td>
			</tr>
			<tr>
				<td class="noborder" colspan="10" rowspan="2">
					PENDEKATAN UNTUK TOLERANSI MAKANAN <br>
					PADA BAYI BERAT BADAN LAHIR RENDAH
				</td>
				<td class="noborder"></td>
				<td class="noborder"></td>
				<td class="noborder btm"></td>
				<td class="noborder btm"></td>
				<td colspan="6" class="text-center" rowspan="2">Residu/muntahan dgn cairan empedu atau feses berdarah</td>
				<td class="noborder"></td>
				<td class="noborder" colspan=""></td>
				
				<td colspan="4" rowspan="2">Abdominal X-Ray dalam 24 jam</td>
				<td class="noborder"></td>
				<td class="noborder br"></td>
				<td class="noborder "></td>
				<td  class="noborder btm"></td>
			</tr>
			<tr>
				<td class="noborder"></td>
				<td class="noborder"></td>
				<td class="noborder blf"></td>
				<td class="noborder"></td>
				<td class="noborder"></td>
				<td class="noborder"></td>
				<td colspan="" class="noborder btp"></td>
				<td class="noborder btp br"></td>
				<td class="noborder"></td>
				<td colspan="7" class="noborder btp"></td>
			</tr>
			<tr>
				<td colspan="3" rowspan="2" class="text-center">Intoleransi Makanan</td>
				<td class="noborder"></td>
				<td class="noborder"></td>
				<td rowspan="2" colspan="6" class="text-center">Distensi; muntahan/residu dgn empedu; Darah pada feses</td>
				<td class="noborder blf btm"></td>
				<td class="noborder blf"></td>
				<td class="noborder"></td>
				<td colspan="19" class="noborder"></td>
				<td class="noborder"></td>
				<td class="noborder br"></td>
				<td class="btm bl noborder"></td>
				<td class="" colspan="7" rowspan="2">Jk negatif, mulai pemberian minum pada volume terakhir sebelum terjadi</td>
				<td colspan="7" class="noborder blf"></td>
			</tr>
			<tr>
				<td class="noborder btp"></td>
				<td class="noborder btp"></td>
				<td class="noborder br"></td>
				<td class="noborder btm"></td>
				<td class="noborder br btm"></td>
				<td colspan="6" rowspan="2" class="text-center">Residu/muntahan tdk <br> mengandung cairan empedu</td>
				<td class="noborder"></td>
				<td colspan="7" rowspan="2" class="text-center">Jk Aspirasi < 25% minuman. Lanjutkan pemberian minuman</td>
				<td colspan="7" class="noborder "></td>
				<td class="noborder">-</td>
				<td class="noborder br btm"></td>
			</tr>
			<tr>
				<td colspan="14" class="noborder"></td>
				<td class="noborder"></td>
				<td class="noborder"></td>
				<td  colspan="7" class="noborder"></td>
				<td colspan="7" class="noborder"></td>
			</tr>
			<tr></tr>
			<tr>
			<td colspan="14" class="noborder"></td>
			<td colspan="6" class="noborder btp"></td>
				<td  class="noborder"></td>
				<td colspan="7" rowspan="2">Jk, 25-50 %. Turunkan pemberian minuman hingga 50%</td>
				<td colspan="7" class="noborder blf"></td>
			</tr>
			<tr>
			<td colspan="21" class="noborder"></td>
			<td colspan="7" class="noborder blf"></td>
			</tr>
			<tr></tr>
			<tr>
				<td colspan="21" class="noborder"></td>
				<td colspan="7" rowspan="2">Jk, 25-50 %. Turunkan pemberian minuman hingga 50%</td>
				<td colspan="7" class="noborder blf"></td>
			</tr>
			<tr>
			<td colspan="21" class="noborder"></td>
			<td colspan="7" class="noborder blf"></td>
			</tr>
		</table>
	</div>
		</div>
	@endif

	@if (!empty($res['d6']))
		<div class="format">
			<table width='100%'>
				<tr height=20 class="noborder">
					<td colspan="8" rowspan="4" class="p3 noborder-tb text-center">
						@if(stripos(\Request::url(), 'localhost') !== FALSE)
							<img src="{{ public_path('img/logo_only.png') }}" alt="" style="width: 60px;display:block; margin:auto;">
							@else
							<img src="{{ public_path('service/img/logo_only.png') }}" alt="" style="width: 60px;display:block; margin:auto;">
							@endif
					</td>
					<td colspan="17" rowspan="4" class="noborder-tb text-center" style="font-size:large">
						<strong>{!! $res['profile']->namalengkap !!}</strong> <br>{!! $res['profile']->alamatlengkap !!}<br>TELP : (0413) 81292
					</td>
					<td colspan="6" class="noborder" style="font-size: 10pt">No. RM </td>
					<td colspan="13" class="noborder" style="font-size: 10pt">
						: {!! $res['d1'][0]->nocm  !!}
					</td>
					<td colspan="5" rowspan="2" class="border-lr bg-dark" style="font-size: 36px;text-align:center">RM</td>
				</tr>
				<tr class="noborder">
					<td colspan="6" class="noborder" style="font-size: 10pt">Nama Lengkap</td>
					<td colspan="11" class="noborder" style="font-size: 10pt">
						: {!!  $res['d1'][0]->namapasien  !!}
					</td>
					<td colspan="2" class="noborder" style="font-size: 10pt">{!!  $res['d1'][0]->jeniskelamin == 'PEREMPUAN' ? '(P)' : '(L)'  !!}</td>
				</tr>
				<tr class="noborder">
					<td colspan="6" class="noborder" style="font-size: 10pt">Tanggal Lahir</td>
					<td colspan="13" class="noborder" style="font-size: 10pt">
						: {!! date('d-m-Y',strtotime( $res['d1'][0]->tgllahir  )) !!}
					</td>
					<td colspan="5" class="border-lr" rowspan="2" style="font-size: 36px;text-align:center">70</td>
				</tr>
				<tr class="noborder">
					<td colspan="6" class="noborder" style="font-size: 10pt">NIK</td>
					<td colspan="11" class="noborder" style="font-size: 10pt">
						: {!! $res['d1'][0]->noidentitas  !!}
					</td>
				</tr>
				<tr class="bordered bg-dark-small">
					<th colspan="49" height="20pt">PEMBERIAN MAKAN AWAL DAN PENURUNAN CAIRAN IV PADA NEONATUS 2000-2500 GRAM DARI HARI PERAWATAN 1-12</th>
				</tr>
				<tr>
					<td colspan="15">&nbsp; BB : @{{ item.obji6[1001750] ? item.obji6[1001750] : '' }}</td>
					<td colspan="8">&nbsp; BB MASUK : @{{ item.obji6[1001751] ? item.obji6[1001751] : '' }}</td>
					<td colspan="26">&nbsp; % PERUBAHAN DARI BB LAHIR : @{{ item.obji6[1001812] ? item.obji6[1001812] : '' }}</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI LAHIR/HARI RAWAT</td>
					<td colspan="5">VOLUME MINUM</td>
					<td colspan="5">VOLUME CAIRAN IV</td>
					<td colspan="5">JENIS CAIRAN</td>
					<td colspan="5">TOTAL VOLUME CAIRAN</td>
					<td colspan="26" rowspan="11">
						<table class="noborder" style="table-layout:fixed;text-align:left;width:100%">
							<tr class="noborder text-center">
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24" align="left">'Volume minum' merupakan jumlah volume minimal yang diberikan. Selalu bisa naik volume susu ke total volume cairan</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24">Gunakan BB lahir atau BB saat masuk yang sampai BB lebih besar</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24">Kalau bayi turun berat badan (BB), gunakan BB tertinggi untuk penghitungan</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24">Pemberian minum harus dimulai pada hari kedua, jika RR ≤ 80</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24">ASI adalah yang terbaik. Gunakan ASI Perah atau Formula 20 Kkal/ 30 cc sampai pemberian minum 150 cc/kg/hr</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24">Untuk membuat Formula 20 Kkal/ 30 cc, campur satu sendok peres SGM BBLR di dalam 40 cc air.</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24">Pindah ke lembar pemeliharaan pemberian minum saat minum bayi mencapai 150 cc/kg/hr.</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2"></td>
									<td valign="top" class="noborder" colspan="24"><em>(Jk neonatus mengalami intoleransi atau tanda NEC (lihat dibawah) dan pemberian minum lanjutan tertunda, jelaskan masalah pada kolom “komentar” dan gunakan lembar “pemberian minum awal” kedua sesuai kebutuhan perbaiki hari rawat pada kolom pertama)</em></td>
								</tr>
						</table>
					</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 1 :</td>
					<td colspan="5">0 cc/kg/hr</td>
					<td colspan="5">80 cc/kg/hr</td>
					<td colspan="5">D10</td>
					<td colspan="5">80 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 2 :</td>
					<td colspan="5">10 cc/kg/hr</td>
					<td colspan="5">90 cc/kg/hr</td>
					<td colspan="5">D10</td>
					<td colspan="5">100 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 3 :</td>
					<td colspan="5">30 cc/kg/hr</td>
					<td colspan="5">70 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">100 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 4 :</td>
					<td colspan="5">50 cc/kg/hr</td>
					<td colspan="5">70 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 5 :</td>
					<td colspan="5">70 cc/kg/hr</td>
					<td colspan="5">50 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 6 :</td>
					<td colspan="5">90 cc/kg/hr</td>
					<td colspan="5">40 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">130 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 7 :</td>
					<td colspan="5">120 cc/kg/hr</td>
					<td colspan="5">20 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">140 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 8 :</td>
					<td colspan="5">150 cc/kg/hr</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">150 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 9 :</td>
					<td colspan="5">140 cc/kg/hr</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">140 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 10 :</td>
					<td colspan="5">150 cc/kg/hr</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">150 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 11 :</td>
					<td colspan="5">LEMBAR PEMELIHARAAN</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">150 cc/kg/hr</td>
					<td colspan="26" rowspan="2">
						Kunci - DOB : Hari lahir; HD : Hari rawat; * %Perubahan dari BB lahir = (BW-AW/BW)* 100 dimana BW adalah berat lahir dan AW <br> adalah berat saat masuk; D10 : Dextrose 10%; NS : Normal Saline atau 154 mEq/L solution
		
					</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 12 :</td>
					<td colspan="5">LEMBAR PEMELIHARAAN</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">150 cc/kg/hr</td>
				</tr>
				<tr></tr>
				<tr  class="text-center">
					<td colspan="3" rowspan="2">HARI RAWAT INFANT</td>
					<td colspan="3"></td>
					<td colspan="2">A</td>
					<td colspan="3">B</td>
					<td colspan="4"></td>
					<td colspan="3">C</td>
					<td colspan="3"></td>
					<td colspan="4"></td>
					<td colspan="8"></td>
					<td colspan="7"></td>
					<td colspan="9"></td>
				</tr>
				<tr class="text-center">
					<td colspan="3">Tgl hari ini (d/m/y)</td>
					<td colspan="2">Berat Badan (kg)</td>
					<td colspan="3">Volume minum per hari (co/kg/hr)</td>
					<td colspan="4">Volume minum setiap 3 jam (A*B)/8</td>
					<td colspan="3">Volum cairan IV perhari (co/kg/hr)</td>
					<td colspan="3">Volume Cairan per jam (A*B)/12</td>
					<td colspan="4">Jenis Minuman (ASI atau Formula)</td>
					<td colspan="8">MINUMAN DIBERIKAN PERHARI <br> (lingkari setiap minum diberikan)</td>
					<td colspan="7">Tanda Intoleransi (Dsitensi: <br />Muntahan empedu atau susu: feces berdarah)</td>
					<td colspan="9">Komentar</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">DOB atau HD 1</td>
					<td colspan="3">&nbsp;@{{item.obji6[1001813] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji6[1001814] ? item.obji6[1001814] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1001815] ? item.obji6[1001815] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji6[1001816] ? item.obji6[1001816] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1001817] ? item.obji6[1001817] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji6[1001818] ? item.obji6[1001818] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1001819] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji6[1001820] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji6[1001821] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001822] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001823] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001824] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001825] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001826] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001827] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001828] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji6[1001833] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji6[1001834] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1001835] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji6[1001836] ? item.obji6[1001836] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">2</td>
					<td colspan="3">&nbsp;@{{item.obji6[1001837] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji6[1001838] ? item.obji6[1001838] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1001839] ? item.obji6[1001839] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji6[1001840] ? item.obji6[1001840] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1001841] ? item.obji6[1001841] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji6[1001842] ? item.obji6[1001842] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1001843] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji6[1001844] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji6[1001845] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001846] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001847] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001848] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001849] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001850] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001851] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001852] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji6[1001857] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji6[1001858] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1001859] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji6[1001860] ? item.obji6[1001860] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">3</td>
					<td colspan="3">&nbsp;@{{item.obji6[1001861] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji6[1001862] ? item.obji6[1001862] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1001863] ? item.obji6[1001863] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji6[1001864] ? item.obji6[1001864] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1001865] ? item.obji6[1001865] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji6[1001866] ? item.obji6[1001866] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1001867] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji6[1001868] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji6[1001869] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001870] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001871] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001872] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001873] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001874] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001875] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001876] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji6[1001881] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji6[1001882] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1001883] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji6[1001884] ? item.obji6[1001884] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">4</td>
					<td colspan="3">&nbsp;@{{item.obji6[1001885] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji6[1001886] ? item.obji6[1001886] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1001887] ? item.obji6[1001887] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji6[1001888] ? item.obji6[1001888] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1001889] ? item.obji6[1001889] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji6[1001890] ? item.obji6[1001890] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1001891] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji6[1001892] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji6[1001893] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001894] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001895] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001896] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001897] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001898] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001899] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001900] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji6[1001905] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji6[1001906] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1001907] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji6[1001908] ? item.obji6[1001908] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">5</td>
					<td colspan="3">&nbsp;@{{item.obji6[1001909] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji6[1001910] ? item.obji6[1001910] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1001911] ? item.obji6[1001911] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji6[1001912] ? item.obji6[1001912] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1001913] ? item.obji6[1001913] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji6[1001914] ? item.obji6[1001914] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1001915] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji6[1001916] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji6[1001917] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001918] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001919] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001920] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001921] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001922] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001923] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001924] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji6[1001929] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji6[1001930] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1001931] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji6[1001932] ? item.obji6[1001932] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">6</td>
					<td colspan="3">&nbsp;@{{item.obji6[1001933] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji6[1001934] ? item.obji6[1001934] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1001935] ? item.obji6[1001935] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji6[1001936] ? item.obji6[1001936] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1001937] ? item.obji6[1001937] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji6[1001938] ? item.obji6[1001938] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1001939] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji6[1001940] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji6[1001941] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001942] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001943] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001944] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001945] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001946] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001947] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001948] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji6[1001953] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji6[1001954] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1001955] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji6[1001956] ? item.obji6[1001956] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">7</td>
					<td colspan="3">&nbsp;@{{item.obji6[1001957] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji6[1001958] ? item.obji6[1001958] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1001959] ? item.obji6[1001959] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji6[1001960] ? item.obji6[1001960] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1001961] ? item.obji6[1001961] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji6[1001962] ? item.obji6[1001962] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1001963] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji6[1001964] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji6[1001965] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001966] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001967] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001968] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001969] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001970] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001971] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001972] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji6[1001977] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji6[1001978] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1001979] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji6[1001980] ? item.obji6[1001980] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">8</td>
					<td colspan="3">&nbsp;@{{item.obji6[1001981] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji6[1001982] ? item.obji6[1001982] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1001983] ? item.obji6[1001983] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji6[1001984] ? item.obji6[1001984] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1001985] ? item.obji6[1001985] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji6[1001986] ? item.obji6[1001986] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1001987] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji6[1001988] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji6[1001989] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001990] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001991] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001992] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001993] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001994] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001995] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001996] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji6[1002001] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji6[1002002] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1002003] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji6[1002004] ? item.obji6[1002004] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">9</td>
					<td colspan="3">&nbsp;@{{item.obji6[1002005] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji6[1002006] ? item.obji6[1002006] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1002007] ? item.obji6[1002007] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji6[1002008] ? item.obji6[1002008] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1002009] ? item.obji6[1002009] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji6[1002010] ? item.obji6[1002010] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1002011] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji6[1002012] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji6[1002013] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1002014] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1002015] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1002016] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1002017] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1002018] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1002019] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1002020] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji6[1002025] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji6[1002026] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1002027] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji6[1002028] ? item.obji6[1002028] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">10</td>
					<td colspan="3">&nbsp;@{{item.obji6[1002029] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji6[1002030] ? item.obji6[1002030] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1002031] ? item.obji6[1002031] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji6[1002032] ? item.obji6[1002032] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1002033] ? item.obji6[1002033] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji6[1002034] ? item.obji6[1002034] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1002035] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji6[1002036] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji6[1002037] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1002038] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1002039] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1002040] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1002041] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1002042] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1002043] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1002044] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji6[1002049] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji6[1002050] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1002051] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji6[1002052] ? item.obji6[1002052] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">11</td>
					<td colspan="2">&nbsp;@{{item.obji6[1002053] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1002054] ? item.obji6[1002054] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1002055] ? item.obji6[1002055] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji6[1002056] ? item.obji6[1002056] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1002057] ? item.obji6[1002057] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji6[1002058] ? item.obji6[1002058] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1002059] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji6[1002060] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji6[1002061] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1002062] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1002063] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1002064] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1002065] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1002066] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1002067] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1002068] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji6[1002073] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji6[1002074] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1002075] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji6[1002076] ? item.obji6[1002076] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">12</td>
					<td colspan="2">&nbsp;@{{item.obji6[1002077] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1002078] ? item.obji6[1002078] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1002079] ? item.obji6[1002079] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji6[1002080] ? item.obji6[1002080] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1002081] ? item.obji6[1002081] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji6[1002082] ? item.obji6[1002082] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1002083] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji6[1002084] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji6[1002085] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1002086] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1002087] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1002088] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1002089] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1002090] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1002091] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1002092] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji6[1002097] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji6[1002098] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1002099] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji6[1002100] ? item.obji6[1002100] : '' }}</td>
				</tr>
			</table>
			<div class="pdua">
		<table style="table-layout:fixed;border:none;width:100%;">
			<tr class="p03">
				<td colspan="49" class="noborder"></td>
			</tr>
			<tr>
				<td colspan="20" class="noborder"></td>
				<td class="noborder"></td>
				<td colspan="7" rowspan="3">Pertimbangkan NEC. Hentikan minuman 24-48 jam. Mulai cairan IV sampai 150cc/kg/d Mulai Amp/Sulbactam</td>
				<td class="noborder" colspan="7"></td>
				<td class="noborder btm">+</td>
				<td colspan="7" rowspan="2">Jk pneumotoses, lanjut status puasa, Antibiotik dan cairan IV untuk 14 hari</td>
				<td class="noborder blf"></td>
			</tr>
			<tr>
				<td class="noborder" colspan="10" rowspan="2">
					PENDEKATAN UNTUK TOLERANSI MAKANAN <br>
					PADA BAYI BERAT BADAN LAHIR RENDAH
				</td>
				<td class="noborder"></td>
				<td class="noborder"></td>
				<td class="noborder btm"></td>
				<td class="noborder btm"></td>
				<td colspan="6" class="text-center" rowspan="2">Residu/muntahan dgn cairan empedu atau feses berdarah</td>
				<td class="noborder"></td>
				<td class="noborder" colspan=""></td>
				
				<td colspan="4" rowspan="2">Abdominal X-Ray dalam 24 jam</td>
				<td class="noborder"></td>
				<td class="noborder br"></td>
				<td class="noborder "></td>
				<td  class="noborder btm"></td>
			</tr>
			<tr>
				<td class="noborder"></td>
				<td class="noborder"></td>
				<td class="noborder blf"></td>
				<td class="noborder"></td>
				<td class="noborder"></td>
				<td class="noborder"></td>
				<td colspan="" class="noborder btp"></td>
				<td class="noborder btp br"></td>
				<td class="noborder"></td>
				<td colspan="7" class="noborder btp"></td>
			</tr>
			<tr>
				<td colspan="3" rowspan="2" class="text-center">Intoleransi Makanan</td>
				<td class="noborder"></td>
				<td class="noborder"></td>
				<td rowspan="2" colspan="6" class="text-center">Distensi; muntahan/residu dgn empedu; Darah pada feses</td>
				<td class="noborder blf btm"></td>
				<td class="noborder blf"></td>
				<td class="noborder"></td>
				<td colspan="19" class="noborder"></td>
				<td class="noborder"></td>
				<td class="noborder br"></td>
				<td class="btm bl noborder"></td>
				<td class="" colspan="7" rowspan="2">Jk negatif, mulai pemberian minum pada volume terakhir sebelum terjadi</td>
				<td colspan="7" class="noborder blf"></td>
			</tr>
			<tr>
				<td class="noborder btp"></td>
				<td class="noborder btp"></td>
				<td class="noborder br"></td>
				<td class="noborder btm"></td>
				<td class="noborder br btm"></td>
				<td colspan="6" rowspan="2" class="text-center">Residu/muntahan tdk <br> mengandung cairan empedu</td>
				<td class="noborder"></td>
				<td colspan="7" rowspan="2" class="text-center">Jk Aspirasi < 25% minuman. Lanjutkan pemberian minuman</td>
				<td colspan="7" class="noborder "></td>
				<td class="noborder">-</td>
				<td class="noborder br btm"></td>
			</tr>
			<tr>
				<td colspan="14" class="noborder"></td>
				<td class="noborder"></td>
				<td class="noborder"></td>
				<td  colspan="7" class="noborder"></td>
				<td colspan="7" class="noborder"></td>
			</tr>
			<tr></tr>
			<tr>
			<td colspan="14" class="noborder"></td>
			<td colspan="6" class="noborder btp"></td>
				<td  class="noborder"></td>
				<td colspan="7" rowspan="2">Jk, 25-50 %. Turunkan pemberian minuman hingga 50%</td>
				<td colspan="7" class="noborder blf"></td>
			</tr>
			<tr>
			<td colspan="21" class="noborder"></td>
			<td colspan="7" class="noborder blf"></td>
			</tr>
			<tr></tr>
			<tr>
				<td colspan="21" class="noborder"></td>
				<td colspan="7" rowspan="2">Jk, 25-50 %. Turunkan pemberian minuman hingga 50%</td>
				<td colspan="7" class="noborder blf"></td>
			</tr>
			<tr>
			<td colspan="21" class="noborder"></td>
			<td colspan="7" class="noborder blf"></td>
			</tr>
		</table>
	</div>
		</div>
	@endif

	@if (!empty($res['d7']))
		<div class="format">
			<table width='100%'>
				<tr height=20 class="noborder">
					<td colspan="8" rowspan="4" class="p3 noborder-tb text-center">
						@if(stripos(\Request::url(), 'localhost') !== FALSE)
							<img src="{{ public_path('img/logo_only.png') }}" alt="" style="width: 60px;display:block; margin:auto;">
							@else
							<img src="{{ public_path('service/img/logo_only.png') }}" alt="" style="width: 60px;display:block; margin:auto;">
							@endif
					</td>
					<td colspan="17" rowspan="4" class="noborder-tb text-center" style="font-size:large">
						<strong>{!! $res['profile']->namalengkap !!}</strong> <br>{!! $res['profile']->alamatlengkap !!}<br>TELP : (0413) 81292
					</td>
					<td colspan="6" class="noborder" style="font-size: 10pt">No. RM </td>
					<td colspan="13" class="noborder" style="font-size: 10pt">
						: {!! $res['d1'][0]->nocm  !!}
					</td>
					<td colspan="5" rowspan="2" class="border-lr bg-dark" style="font-size: 36px;text-align:center">RM</td>
				</tr>
				<tr class="noborder">
					<td colspan="6" class="noborder" style="font-size: 10pt">Nama Lengkap</td>
					<td colspan="11" class="noborder" style="font-size: 10pt">
						: {!!  $res['d1'][0]->namapasien  !!}
					</td>
					<td colspan="2" class="noborder" style="font-size: 10pt">{!!  $res['d1'][0]->jeniskelamin == 'PEREMPUAN' ? '(P)' : '(L)'  !!}</td>
				</tr>
				<tr class="noborder">
					<td colspan="6" class="noborder" style="font-size: 10pt">Tanggal Lahir</td>
					<td colspan="13" class="noborder" style="font-size: 10pt">
						: {!! date('d-m-Y',strtotime( $res['d1'][0]->tgllahir  )) !!}
					</td>
					<td colspan="5" class="border-lr" rowspan="2" style="font-size: 36px;text-align:center">70</td>
				</tr>
				<tr class="noborder">
					<td colspan="6" class="noborder" style="font-size: 10pt">NIK</td>
					<td colspan="11" class="noborder" style="font-size: 10pt">
						: {!! $res['d1'][0]->noidentitas  !!}
					</td>
				</tr>
				<tr class="bordered bg-dark-small">
					<th colspan="49" height="20pt">PEMBERIAN MAKAN AWAL DAN PENURUNAN CAIRAN IV PADA NEONATUS 2000-2500 GRAM DARI HARI PERAWATAN 1-12</th>
				</tr>
				<tr>
					<td colspan="15">&nbsp; BB : @{{ item.obji7[1001750] ? item.obji7[1001750] : '' }}</td>
					<td colspan="8">&nbsp; BB MASUK : @{{ item.obji7[1001751] ? item.obji7[1001751] : '' }}</td>
					<td colspan="26">&nbsp; % PERUBAHAN DARI BB LAHIR : @{{ item.obji7[1001812] ? item.obji7[1001812] : '' }}</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI LAHIR/HARI RAWAT</td>
					<td colspan="5">VOLUME MINUM</td>
					<td colspan="5">VOLUME CAIRAN IV</td>
					<td colspan="5">JENIS CAIRAN</td>
					<td colspan="5">TOTAL VOLUME CAIRAN</td>
					<td colspan="26" rowspan="11">
						<table class="noborder" style="table-layout:fixed;text-align:left;width:100%">
							<tr class="noborder text-center">
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24" align="left">'Volume minum' merupakan jumlah volume minimal yang diberikan. Selalu bisa naik volume susu ke total volume cairan</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24">Gunakan BB lahir atau BB saat masuk yang sampai BB lebih besar</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24">Kalau bayi turun berat badan (BB), gunakan BB tertinggi untuk penghitungan</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24">Pemberian minum harus dimulai pada hari kedua, jika RR ≤ 80</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24">ASI adalah yang terbaik. Gunakan ASI Perah atau Formula 20 Kkal/ 30 cc sampai pemberian minum 150 cc/kg/hr</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24">Untuk membuat Formula 20 Kkal/ 30 cc, campur satu sendok peres SGM BBLR di dalam 40 cc air.</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2">-</td>
									<td valign="top" class="noborder" colspan="24">Pindah ke lembar pemeliharaan pemberian minum saat minum bayi mencapai 150 cc/kg/hr.</td>
								</tr>
								<tr class="noborder">
									<td valign="top" class="noborder text-center" colspan="2"></td>
									<td valign="top" class="noborder" colspan="24"><em>(Jk neonatus mengalami intoleransi atau tanda NEC (lihat dibawah) dan pemberian minum lanjutan tertunda, jelaskan masalah pada kolom “komentar” dan gunakan lembar “pemberian minum awal” kedua sesuai kebutuhan perbaiki hari rawat pada kolom pertama)</em></td>
								</tr>
						</table>
					</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 1 :</td>
					<td colspan="5">0 cc/kg/hr</td>
					<td colspan="5">80 cc/kg/hr</td>
					<td colspan="5">D10</td>
					<td colspan="5">80 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 2 :</td>
					<td colspan="5">10 cc/kg/hr</td>
					<td colspan="5">90 cc/kg/hr</td>
					<td colspan="5">D10</td>
					<td colspan="5">100 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 3 :</td>
					<td colspan="5">30 cc/kg/hr</td>
					<td colspan="5">70 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">100 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 4 :</td>
					<td colspan="5">50 cc/kg/hr</td>
					<td colspan="5">70 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 5 :</td>
					<td colspan="5">70 cc/kg/hr</td>
					<td colspan="5">50 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 6 :</td>
					<td colspan="5">90 cc/kg/hr</td>
					<td colspan="5">40 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">130 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 7 :</td>
					<td colspan="5">120 cc/kg/hr</td>
					<td colspan="5">20 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">140 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 8 :</td>
					<td colspan="5">150 cc/kg/hr</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">150 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 9 :</td>
					<td colspan="5">140 cc/kg/hr</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">140 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 10 :</td>
					<td colspan="5">150 cc/kg/hr</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">150 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 11 :</td>
					<td colspan="5">LEMBAR PEMELIHARAAN</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">150 cc/kg/hr</td>
					<td colspan="26" rowspan="2">
						Kunci - DOB : Hari lahir; HD : Hari rawat; * %Perubahan dari BB lahir = (BW-AW/BW)* 100 dimana BW adalah berat lahir dan AW <br> adalah berat saat masuk; D10 : Dextrose 10%; NS : Normal Saline atau 154 mEq/L solution
		
					</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 12 :</td>
					<td colspan="5">LEMBAR PEMELIHARAAN</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">150 cc/kg/hr</td>
				</tr>
				<tr></tr>
				<tr  class="text-center">
					<td colspan="3" rowspan="2">HARI RAWAT INFANT</td>
					<td colspan="3"></td>
					<td colspan="2">A</td>
					<td colspan="3">B</td>
					<td colspan="4"></td>
					<td colspan="3">C</td>
					<td colspan="3"></td>
					<td colspan="4"></td>
					<td colspan="8"></td>
					<td colspan="7"></td>
					<td colspan="9"></td>
				</tr>
				<tr class="text-center">
					<td colspan="3">Tgl hari ini (d/m/y)</td>
					<td colspan="2">Berat Badan (kg)</td>
					<td colspan="3">Volume minum per hari (co/kg/hr)</td>
					<td colspan="4">Volume minum setiap 3 jam (A*B)/8</td>
					<td colspan="3">Volum cairan IV perhari (co/kg/hr)</td>
					<td colspan="3">Volume Cairan per jam (A*B)/12</td>
					<td colspan="4">Jenis Minuman (ASI atau Formula)</td>
					<td colspan="8">MINUMAN DIBERIKAN PERHARI <br> (lingkari setiap minum diberikan)</td>
					<td colspan="7">Tanda Intoleransi (Dsitensi: <br />Muntahan empedu atau susu: feces berdarah)</td>
					<td colspan="9">Komentar</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">DOB atau HD 1</td>
					<td colspan="3">&nbsp;@{{item.obji7[1001813] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji7[1001814] ? item.obji7[1001814] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1001815] ? item.obji7[1001815] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji7[1001816] ? item.obji7[1001816] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1001817] ? item.obji7[1001817] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji7[1001818] ? item.obji7[1001818] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1001819] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji7[1001820] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji7[1001821] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001822] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001823] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001824] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001825] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001826] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001827] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001828] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji7[1001833] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji7[1001834] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1001835] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji7[1001836] ? item.obji7[1001836] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">2</td>
					<td colspan="3">&nbsp;@{{item.obji7[1001837] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji7[1001838] ? item.obji7[1001838] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1001839] ? item.obji7[1001839] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji7[1001840] ? item.obji7[1001840] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1001841] ? item.obji7[1001841] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji7[1001842] ? item.obji7[1001842] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1001843] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji7[1001844] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji7[1001845] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001846] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001847] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001848] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001849] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001850] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001851] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001852] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji7[1001857] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji7[1001858] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1001859] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji7[1001860] ? item.obji7[1001860] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">3</td>
					<td colspan="3">&nbsp;@{{item.obji7[1001861] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji7[1001862] ? item.obji7[1001862] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1001863] ? item.obji7[1001863] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji7[1001864] ? item.obji7[1001864] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1001865] ? item.obji7[1001865] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji7[1001866] ? item.obji7[1001866] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1001867] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji7[1001868] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji7[1001869] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001870] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001871] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001872] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001873] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001874] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001875] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001876] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji7[1001881] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji7[1001882] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1001883] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji7[1001884] ? item.obji7[1001884] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">4</td>
					<td colspan="3">&nbsp;@{{item.obji7[1001885] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji7[1001886] ? item.obji7[1001886] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1001887] ? item.obji7[1001887] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji7[1001888] ? item.obji7[1001888] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1001889] ? item.obji7[1001889] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji7[1001890] ? item.obji7[1001890] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1001891] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji7[1001892] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji7[1001893] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001894] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001895] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001896] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001897] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001898] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001899] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001900] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji7[1001905] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji7[1001906] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1001907] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji7[1001908] ? item.obji7[1001908] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">5</td>
					<td colspan="3">&nbsp;@{{item.obji7[1001909] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji7[1001910] ? item.obji7[1001910] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1001911] ? item.obji7[1001911] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji7[1001912] ? item.obji7[1001912] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1001913] ? item.obji7[1001913] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji7[1001914] ? item.obji7[1001914] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1001915] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji7[1001916] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji7[1001917] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001918] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001919] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001920] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001921] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001922] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001923] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001924] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji7[1001929] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji7[1001930] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1001931] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji7[1001932] ? item.obji7[1001932] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">6</td>
					<td colspan="3">&nbsp;@{{item.obji7[1001933] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji7[1001934] ? item.obji7[1001934] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1001935] ? item.obji7[1001935] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji7[1001936] ? item.obji7[1001936] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1001937] ? item.obji7[1001937] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji7[1001938] ? item.obji7[1001938] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1001939] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji7[1001940] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji7[1001941] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001942] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001943] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001944] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001945] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001946] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001947] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001948] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji7[1001953] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji7[1001954] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1001955] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji7[1001956] ? item.obji7[1001956] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">7</td>
					<td colspan="3">&nbsp;@{{item.obji7[1001957] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji7[1001958] ? item.obji7[1001958] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1001959] ? item.obji7[1001959] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji7[1001960] ? item.obji7[1001960] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1001961] ? item.obji7[1001961] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji7[1001962] ? item.obji7[1001962] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1001963] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji7[1001964] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji7[1001965] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001966] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001967] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001968] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001969] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001970] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001971] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001972] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji7[1001977] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji7[1001978] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1001979] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji7[1001980] ? item.obji7[1001980] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">8</td>
					<td colspan="3">&nbsp;@{{item.obji7[1001981] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji7[1001982] ? item.obji7[1001982] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1001983] ? item.obji7[1001983] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji7[1001984] ? item.obji7[1001984] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1001985] ? item.obji7[1001985] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji7[1001986] ? item.obji7[1001986] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1001987] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji7[1001988] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji7[1001989] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001990] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001991] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001992] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001993] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001994] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001995] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001996] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji7[1002001] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji7[1002002] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1002003] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji7[1002004] ? item.obji7[1002004] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">9</td>
					<td colspan="3">&nbsp;@{{item.obji7[1002005] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji7[1002006] ? item.obji7[1002006] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1002007] ? item.obji7[1002007] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji7[1002008] ? item.obji7[1002008] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1002009] ? item.obji7[1002009] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji7[1002010] ? item.obji7[1002010] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1002011] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji7[1002012] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji7[1002013] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1002014] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1002015] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1002016] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1002017] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1002018] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1002019] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1002020] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji7[1002025] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji7[1002026] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1002027] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji7[1002028] ? item.obji7[1002028] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">10</td>
					<td colspan="3">&nbsp;@{{item.obji7[1002029] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji7[1002030] ? item.obji7[1002030] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1002031] ? item.obji7[1002031] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji7[1002032] ? item.obji7[1002032] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1002033] ? item.obji7[1002033] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji7[1002034] ? item.obji7[1002034] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1002035] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji7[1002036] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji7[1002037] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1002038] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1002039] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1002040] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1002041] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1002042] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1002043] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1002044] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji7[1002049] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji7[1002050] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1002051] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji7[1002052] ? item.obji7[1002052] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">11</td>
					<td colspan="2">&nbsp;@{{item.obji7[1002053] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1002054] ? item.obji7[1002054] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1002055] ? item.obji7[1002055] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji7[1002056] ? item.obji7[1002056] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1002057] ? item.obji7[1002057] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji7[1002058] ? item.obji7[1002058] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1002059] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji7[1002060] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji7[1002061] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1002062] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1002063] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1002064] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1002065] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1002066] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1002067] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1002068] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji7[1002073] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji7[1002074] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1002075] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji7[1002076] ? item.obji7[1002076] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">12</td>
					<td colspan="2">&nbsp;@{{item.obji7[1002077] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1002078] ? item.obji7[1002078] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1002079] ? item.obji7[1002079] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji7[1002080] ? item.obji7[1002080] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1002081] ? item.obji7[1002081] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji7[1002082] ? item.obji7[1002082] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1002083] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji7[1002084] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji7[1002085] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1002086] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1002087] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1002088] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1002089] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1002090] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1002091] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1002092] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji7[1002097] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji7[1002098] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1002099] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji7[1002100] ? item.obji7[1002100] : '' }}</td>
				</tr>
			</table>
			<div class="pdua">
		<table style="table-layout:fixed;border:none;width:100%;">
			<tr class="p03">
				<td colspan="49" class="noborder"></td>
			</tr>
			<tr>
				<td colspan="20" class="noborder"></td>
				<td class="noborder"></td>
				<td colspan="7" rowspan="3">Pertimbangkan NEC. Hentikan minuman 24-48 jam. Mulai cairan IV sampai 150cc/kg/d Mulai Amp/Sulbactam</td>
				<td class="noborder" colspan="7"></td>
				<td class="noborder btm">+</td>
				<td colspan="7" rowspan="2">Jk pneumotoses, lanjut status puasa, Antibiotik dan cairan IV untuk 14 hari</td>
				<td class="noborder blf"></td>
			</tr>
			<tr>
				<td class="noborder" colspan="10" rowspan="2">
					PENDEKATAN UNTUK TOLERANSI MAKANAN <br>
					PADA BAYI BERAT BADAN LAHIR RENDAH
				</td>
				<td class="noborder"></td>
				<td class="noborder"></td>
				<td class="noborder btm"></td>
				<td class="noborder btm"></td>
				<td colspan="6" class="text-center" rowspan="2">Residu/muntahan dgn cairan empedu atau feses berdarah</td>
				<td class="noborder"></td>
				<td class="noborder" colspan=""></td>
				
				<td colspan="4" rowspan="2">Abdominal X-Ray dalam 24 jam</td>
				<td class="noborder"></td>
				<td class="noborder br"></td>
				<td class="noborder "></td>
				<td  class="noborder btm"></td>
			</tr>
			<tr>
				<td class="noborder"></td>
				<td class="noborder"></td>
				<td class="noborder blf"></td>
				<td class="noborder"></td>
				<td class="noborder"></td>
				<td class="noborder"></td>
				<td colspan="" class="noborder btp"></td>
				<td class="noborder btp br"></td>
				<td class="noborder"></td>
				<td colspan="7" class="noborder btp"></td>
			</tr>
			<tr>
				<td colspan="3" rowspan="2" class="text-center">Intoleransi Makanan</td>
				<td class="noborder"></td>
				<td class="noborder"></td>
				<td rowspan="2" colspan="6" class="text-center">Distensi; muntahan/residu dgn empedu; Darah pada feses</td>
				<td class="noborder blf btm"></td>
				<td class="noborder blf"></td>
				<td class="noborder"></td>
				<td colspan="19" class="noborder"></td>
				<td class="noborder"></td>
				<td class="noborder br"></td>
				<td class="btm bl noborder"></td>
				<td class="" colspan="7" rowspan="2">Jk negatif, mulai pemberian minum pada volume terakhir sebelum terjadi</td>
				<td colspan="7" class="noborder blf"></td>
			</tr>
			<tr>
				<td class="noborder btp"></td>
				<td class="noborder btp"></td>
				<td class="noborder br"></td>
				<td class="noborder btm"></td>
				<td class="noborder br btm"></td>
				<td colspan="6" rowspan="2" class="text-center">Residu/muntahan tdk <br> mengandung cairan empedu</td>
				<td class="noborder"></td>
				<td colspan="7" rowspan="2" class="text-center">Jk Aspirasi < 25% minuman. Lanjutkan pemberian minuman</td>
				<td colspan="7" class="noborder "></td>
				<td class="noborder">-</td>
				<td class="noborder br btm"></td>
			</tr>
			<tr>
				<td colspan="14" class="noborder"></td>
				<td class="noborder"></td>
				<td class="noborder"></td>
				<td  colspan="7" class="noborder"></td>
				<td colspan="7" class="noborder"></td>
			</tr>
			<tr></tr>
			<tr>
			<td colspan="14" class="noborder"></td>
			<td colspan="6" class="noborder btp"></td>
				<td  class="noborder"></td>
				<td colspan="7" rowspan="2">Jk, 25-50 %. Turunkan pemberian minuman hingga 50%</td>
				<td colspan="7" class="noborder blf"></td>
			</tr>
			<tr>
			<td colspan="21" class="noborder"></td>
			<td colspan="7" class="noborder blf"></td>
			</tr>
			<tr></tr>
			<tr>
				<td colspan="21" class="noborder"></td>
				<td colspan="7" rowspan="2">Jk, 25-50 %. Turunkan pemberian minuman hingga 50%</td>
				<td colspan="7" class="noborder blf"></td>
			</tr>
			<tr>
			<td colspan="21" class="noborder"></td>
			<td colspan="7" class="noborder blf"></td>
			</tr>
		</table>
	</div>
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
	});

    angular.controller('cetakPemberianMakanAwal2000', function ($scope, $http, httpService) {
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