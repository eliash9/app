<!DOCTYPE html>
<html lang="en" ng-app="angularApp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemberian Makan Awal Lebih dari 2500 gram</title>
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
<body ng-controller="cetakPemberianMakanAwal2500">
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
					<td colspan="5" class="border-lr" rowspan="2" style="font-size: 36px;text-align:center">72</td>
				</tr>
				<tr class="noborder">
					<td colspan="6" class="noborder" style="font-size: 10pt">NIK</td>
					<td colspan="11" class="noborder" style="font-size: 10pt">
						: {!! $res['d1'][0]->noidentitas  !!}
					</td>
				</tr>
				<tr class="bordered bg-dark-small">
					<th colspan="49" height="20pt">PEMBERIAN MAKAN AWAL DAN PENURUNAN CAIRAN IV PADA NEONATUS LEBIH DARI 2500 GRAM DARI HARI PERAWATAN 1-12</th>
				</tr>
				<tr>
					<td colspan="15">&nbsp; BB : @{{ item.obj[32104178] ? item.obj[32104178] : '' }}</td>
					<td colspan="8">&nbsp; BB MASUK : @{{ item.obj[32104179] ? item.obj[32104179] : '' }}</td>
					<td colspan="26">&nbsp; % PERUBAHAN DARI BB LAHIR : @{{ item.obj[32104240] ? item.obj[32104240] : '' }}</td>
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
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">D10</td>
					<td colspan="5">60 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 2 :</td>
					<td colspan="5">20 cc/kg/hr</td>
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">D10</td>
					<td colspan="5">80 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 3 :</td>
					<td colspan="5">40 cc/kg/hr</td>
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">100 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 4 :</td>
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 5 :</td>
					<td colspan="5">80 cc/kg/hr</td>
					<td colspan="5">40 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 6 :</td>
					<td colspan="5">100 cc/kg/hr</td>
					<td colspan="5">20 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 7 :</td>
					<td colspan="5">120 cc/kg/hr</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 8 :</td>
					<td colspan="5">140 cc/kg/hr</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">140 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 9 :</td>
					<td colspan="5">150 cc/kg/hr</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">150 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 10 :</td>
					<td colspan="5">LEMBAR PEMELIHARAAN</td>
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
					<td colspan="3">&nbsp;@{{item.obj[32104241] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obj[32104242] ? item.obj[32104242] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obj[32104243] ? item.obj[32104243] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obj[32104244] ? item.obj[32104244] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obj[32104245] ? item.obj[32104245] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obj[32104246] ? item.obj[32104246] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[32104247] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obj[32104248] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obj[32104249] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104250] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104251] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104252] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104253] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104254] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104255] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104256] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obj[32104261] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obj[32104262] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[32104263] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obj[32104264] ? item.obj[32104264] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">2</td>
					<td colspan="3">&nbsp;@{{item.obj[32104265] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obj[32104266] ? item.obj[32104266] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obj[32104267] ? item.obj[32104267] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obj[32104268] ? item.obj[32104268] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obj[32104269] ? item.obj[32104269] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obj[32104270] ? item.obj[32104270] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[32104271] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obj[32104272] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obj[32104273] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104274] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104275] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104276] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104277] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104278] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104279] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104280] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obj[32104285] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obj[32104286] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[32104287] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obj[32104288] ? item.obj[32104288] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">3</td>
					<td colspan="3">&nbsp;@{{item.obj[32104289] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obj[32104290] ? item.obj[32104290] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obj[32104291] ? item.obj[32104291] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obj[32104292] ? item.obj[32104292] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obj[32104293] ? item.obj[32104293] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obj[32104294] ? item.obj[32104294] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[32104295] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obj[32104296] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obj[32104297] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104298] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104299] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104300] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104301] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104302] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104303] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104304] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obj[32104309] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obj[32104310] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[32104311] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obj[32104312] ? item.obj[32104312] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">4</td>
					<td colspan="3">&nbsp;@{{item.obj[32104313] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obj[32104314] ? item.obj[32104314] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obj[32104315] ? item.obj[32104315] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obj[32104316] ? item.obj[32104316] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obj[32104317] ? item.obj[32104317] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obj[32104318] ? item.obj[32104318] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[32104319] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obj[32104320] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obj[32104321] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104322] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104323] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104324] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104325] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104326] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104327] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104328] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obj[32104333] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obj[32104334] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[32104335] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obj[32104336] ? item.obj[32104336] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">5</td>
					<td colspan="3">&nbsp;@{{item.obj[32104337] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obj[32104338] ? item.obj[32104338] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obj[32104339] ? item.obj[32104339] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obj[32104340] ? item.obj[32104340] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obj[32104341] ? item.obj[32104341] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obj[32104342] ? item.obj[32104342] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[32104343] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obj[32104344] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obj[32104345] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104346] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104347] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104348] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104349] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104350] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104351] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104352] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obj[32104357] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obj[32104358] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[32104359] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obj[32104360] ? item.obj[32104360] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">6</td>
					<td colspan="3">&nbsp;@{{item.obj[32104361] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obj[32104362] ? item.obj[32104362] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obj[32104363] ? item.obj[32104363] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obj[32104364] ? item.obj[32104364] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obj[32104365] ? item.obj[32104365] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obj[32104366] ? item.obj[32104366] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[32104367] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obj[32104368] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obj[32104369] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104370] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104371] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104372] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104373] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104374] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104375] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104376] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obj[32104381] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obj[32104382] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[32104383] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obj[32104384] ? item.obj[32104384] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">7</td>
					<td colspan="3">&nbsp;@{{item.obj[32104385] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obj[32104386] ? item.obj[32104386] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obj[32104387] ? item.obj[32104387] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obj[32104388] ? item.obj[32104388] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obj[32104389] ? item.obj[32104389] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obj[32104390] ? item.obj[32104390] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[32104391] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obj[32104392] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obj[32104393] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104394] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104395] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104396] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104397] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104398] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104399] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104400] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obj[32104405] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obj[32104406] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[32104407] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obj[32104408] ? item.obj[32104408] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">8</td>
					<td colspan="3">&nbsp;@{{item.obj[32104409] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obj[32104410] ? item.obj[32104410] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obj[32104411] ? item.obj[32104411] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obj[32104412] ? item.obj[32104412] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obj[32104413] ? item.obj[32104413] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obj[32104414] ? item.obj[32104414] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[32104415] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obj[32104416] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obj[32104417] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104418] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104419] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104420] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104421] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104422] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104423] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104424] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obj[32104429] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obj[32104430] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[32104431] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obj[32104432] ? item.obj[32104432] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">9</td>
					<td colspan="3">&nbsp;@{{item.obj[32104433] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obj[32104434] ? item.obj[32104434] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obj[32104435] ? item.obj[32104435] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obj[32104436] ? item.obj[32104436] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obj[32104437] ? item.obj[32104437] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obj[32104438] ? item.obj[32104438] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[32104439] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obj[32104440] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obj[32104441] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104442] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104443] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104444] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104445] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104446] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104447] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104448] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obj[32104453] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obj[32104454] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[32104455] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obj[32104456] ? item.obj[32104456] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">10</td>
					<td colspan="3">&nbsp;@{{item.obj[32104457] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obj[32104458] ? item.obj[32104458] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obj[32104459] ? item.obj[32104459] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obj[32104460] ? item.obj[32104460] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obj[32104461] ? item.obj[32104461] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obj[32104462] ? item.obj[32104462] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[32104463] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obj[32104464] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obj[32104465] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104466] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104467] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104468] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104469] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104470] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104471] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104472] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obj[32104477] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obj[32104478] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[32104479] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obj[32104480] ? item.obj[32104480] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">11</td>
					<td colspan="3">&nbsp;@{{item.obj[32104481] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obj[32104482] ? item.obj[32104482] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obj[32104483] ? item.obj[32104483] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obj[32104484] ? item.obj[32104484] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obj[32104485] ? item.obj[32104485] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obj[32104486] ? item.obj[32104486] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[32104487] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obj[32104488] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obj[32104489] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104490] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104491] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104492] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104493] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104494] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104495] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104496] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obj[32104501] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obj[32104502] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[32104503] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obj[32104504] ? item.obj[32104504] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">12</td>
					<td colspan="3">&nbsp;@{{item.obj[32104505] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obj[32104506] ? item.obj[32104506] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obj[32104507] ? item.obj[32104507] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obj[32104508] ? item.obj[32104508] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obj[32104509] ? item.obj[32104509] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obj[32104510] ? item.obj[32104510] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[32104511] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obj[32104512] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obj[32104513] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104514] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104515] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104516] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104517] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104518] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104519] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[32104520] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obj[32104525] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obj[32104526] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[32104527] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obj[32104528] ? item.obj[32104528] : '' }}</td>
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
					<td colspan="5" class="border-lr" rowspan="2" style="font-size: 36px;text-align:center">72</td>
				</tr>
				<tr class="noborder">
					<td colspan="6" class="noborder" style="font-size: 10pt">NIK</td>
					<td colspan="11" class="noborder" style="font-size: 10pt">
						: {!! $res['d1'][0]->noidentitas  !!}
					</td>
				</tr>
				<tr class="bordered bg-dark-small">
					<th colspan="49" height="20pt">PEMBERIAN MAKAN AWAL DAN PENURUNAN CAIRAN IV PADA NEONATUS LEBIH DARI 2500 GRAM DARI HARI PERAWATAN 1-12</th>
				</tr>
				<tr>
					<td colspan="15">&nbsp; BB : @{{ item.obji2[32104178] ? item.obji2[32104178] : '' }}</td>
					<td colspan="8">&nbsp; BB MASUK : @{{ item.obji2[32104179] ? item.obji2[32104179] : '' }}</td>
					<td colspan="26">&nbsp; % PERUBAHAN DARI BB LAHIR : @{{ item.obji2[32104240] ? item.obji2[32104240] : '' }}</td>
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
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">D10</td>
					<td colspan="5">60 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 2 :</td>
					<td colspan="5">20 cc/kg/hr</td>
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">D10</td>
					<td colspan="5">80 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 3 :</td>
					<td colspan="5">40 cc/kg/hr</td>
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">100 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 4 :</td>
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 5 :</td>
					<td colspan="5">80 cc/kg/hr</td>
					<td colspan="5">40 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 6 :</td>
					<td colspan="5">100 cc/kg/hr</td>
					<td colspan="5">20 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 7 :</td>
					<td colspan="5">120 cc/kg/hr</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 8 :</td>
					<td colspan="5">140 cc/kg/hr</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">140 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 9 :</td>
					<td colspan="5">150 cc/kg/hr</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">150 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 10 :</td>
					<td colspan="5">LEMBAR PEMELIHARAAN</td>
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
					<td colspan="3">&nbsp;@{{item.obji2[32104241] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji2[32104242] ? item.obji2[32104242] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji2[32104243] ? item.obji2[32104243] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji2[32104244] ? item.obji2[32104244] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji2[32104245] ? item.obji2[32104245] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji2[32104246] ? item.obji2[32104246] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[32104247] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji2[32104248] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji2[32104249] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104250] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104251] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104252] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104253] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104254] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104255] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104256] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji2[32104261] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji2[32104262] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[32104263] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji2[32104264] ? item.obji2[32104264] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">2</td>
					<td colspan="3">&nbsp;@{{item.obji2[32104265] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji2[32104266] ? item.obji2[32104266] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji2[32104267] ? item.obji2[32104267] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji2[32104268] ? item.obji2[32104268] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji2[32104269] ? item.obji2[32104269] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji2[32104270] ? item.obji2[32104270] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[32104271] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji2[32104272] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji2[32104273] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104274] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104275] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104276] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104277] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104278] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104279] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104280] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji2[32104285] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji2[32104286] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[32104287] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji2[32104288] ? item.obji2[32104288] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">3</td>
					<td colspan="3">&nbsp;@{{item.obji2[32104289] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji2[32104290] ? item.obji2[32104290] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji2[32104291] ? item.obji2[32104291] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji2[32104292] ? item.obji2[32104292] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji2[32104293] ? item.obji2[32104293] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji2[32104294] ? item.obji2[32104294] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[32104295] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji2[32104296] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji2[32104297] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104298] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104299] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104300] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104301] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104302] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104303] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104304] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji2[32104309] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji2[32104310] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[32104311] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji2[32104312] ? item.obji2[32104312] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">4</td>
					<td colspan="3">&nbsp;@{{item.obji2[32104313] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji2[32104314] ? item.obji2[32104314] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji2[32104315] ? item.obji2[32104315] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji2[32104316] ? item.obji2[32104316] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji2[32104317] ? item.obji2[32104317] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji2[32104318] ? item.obji2[32104318] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[32104319] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji2[32104320] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji2[32104321] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104322] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104323] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104324] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104325] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104326] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104327] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104328] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji2[32104333] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji2[32104334] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[32104335] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji2[32104336] ? item.obji2[32104336] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">5</td>
					<td colspan="3">&nbsp;@{{item.obji2[32104337] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji2[32104338] ? item.obji2[32104338] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji2[32104339] ? item.obji2[32104339] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji2[32104340] ? item.obji2[32104340] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji2[32104341] ? item.obji2[32104341] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji2[32104342] ? item.obji2[32104342] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[32104343] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji2[32104344] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji2[32104345] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104346] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104347] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104348] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104349] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104350] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104351] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104352] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji2[32104357] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji2[32104358] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[32104359] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji2[32104360] ? item.obji2[32104360] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">6</td>
					<td colspan="3">&nbsp;@{{item.obji2[32104361] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji2[32104362] ? item.obji2[32104362] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji2[32104363] ? item.obji2[32104363] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji2[32104364] ? item.obji2[32104364] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji2[32104365] ? item.obji2[32104365] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji2[32104366] ? item.obji2[32104366] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[32104367] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji2[32104368] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji2[32104369] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104370] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104371] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104372] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104373] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104374] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104375] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104376] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji2[32104381] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji2[32104382] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[32104383] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji2[32104384] ? item.obji2[32104384] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">7</td>
					<td colspan="3">&nbsp;@{{item.obji2[32104385] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji2[32104386] ? item.obji2[32104386] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji2[32104387] ? item.obji2[32104387] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji2[32104388] ? item.obji2[32104388] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji2[32104389] ? item.obji2[32104389] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji2[32104390] ? item.obji2[32104390] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[32104391] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji2[32104392] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji2[32104393] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104394] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104395] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104396] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104397] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104398] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104399] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104400] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji2[32104405] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji2[32104406] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[32104407] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji2[32104408] ? item.obji2[32104408] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">8</td>
					<td colspan="3">&nbsp;@{{item.obji2[32104409] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji2[32104410] ? item.obji2[32104410] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji2[32104411] ? item.obji2[32104411] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji2[32104412] ? item.obji2[32104412] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji2[32104413] ? item.obji2[32104413] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji2[32104414] ? item.obji2[32104414] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[32104415] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji2[32104416] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji2[32104417] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104418] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104419] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104420] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104421] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104422] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104423] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104424] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji2[32104429] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji2[32104430] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[32104431] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji2[32104432] ? item.obji2[32104432] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">9</td>
					<td colspan="3">&nbsp;@{{item.obji2[32104433] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji2[32104434] ? item.obji2[32104434] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji2[32104435] ? item.obji2[32104435] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji2[32104436] ? item.obji2[32104436] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji2[32104437] ? item.obji2[32104437] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji2[32104438] ? item.obji2[32104438] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[32104439] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji2[32104440] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji2[32104441] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104442] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104443] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104444] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104445] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104446] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104447] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104448] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji2[32104453] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji2[32104454] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[32104455] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji2[32104456] ? item.obji2[32104456] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">10</td>
					<td colspan="3">&nbsp;@{{item.obji2[32104457] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji2[32104458] ? item.obji2[32104458] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji2[32104459] ? item.obji2[32104459] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji2[32104460] ? item.obji2[32104460] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji2[32104461] ? item.obji2[32104461] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji2[32104462] ? item.obji2[32104462] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[32104463] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji2[32104464] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji2[32104465] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104466] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104467] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104468] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104469] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104470] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104471] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104472] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji2[32104477] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji2[32104478] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[32104479] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji2[32104480] ? item.obji2[32104480] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">11</td>
					<td colspan="3">&nbsp;@{{item.obji2[32104481] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji2[32104482] ? item.obji2[32104482] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji2[32104483] ? item.obji2[32104483] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji2[32104484] ? item.obji2[32104484] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji2[32104485] ? item.obji2[32104485] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji2[32104486] ? item.obji2[32104486] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[32104487] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji2[32104488] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji2[32104489] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104490] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104491] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104492] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104493] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104494] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104495] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104496] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji2[32104501] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji2[32104502] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[32104503] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji2[32104504] ? item.obji2[32104504] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">12</td>
					<td colspan="3">&nbsp;@{{item.obji2[32104505] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji2[32104506] ? item.obji2[32104506] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji2[32104507] ? item.obji2[32104507] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji2[32104508] ? item.obji2[32104508] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji2[32104509] ? item.obji2[32104509] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji2[32104510] ? item.obji2[32104510] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[32104511] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji2[32104512] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji2[32104513] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104514] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104515] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104516] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104517] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104518] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104519] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[32104520] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji2[32104525] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji2[32104526] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[32104527] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji2[32104528] ? item.obji2[32104528] : '' }}</td>
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
					<td colspan="5" class="border-lr" rowspan="2" style="font-size: 36px;text-align:center">72</td>
				</tr>
				<tr class="noborder">
					<td colspan="6" class="noborder" style="font-size: 10pt">NIK</td>
					<td colspan="11" class="noborder" style="font-size: 10pt">
						: {!! $res['d1'][0]->noidentitas  !!}
					</td>
				</tr>
				<tr class="bordered bg-dark-small">
					<th colspan="49" height="20pt">PEMBERIAN MAKAN AWAL DAN PENURUNAN CAIRAN IV PADA NEONATUS LEBIH DARI 2500 GRAM DARI HARI PERAWATAN 1-12</th>
				</tr>
				<tr>
					<td colspan="15">&nbsp; BB : @{{ item.obji3[32104178] ? item.obji3[32104178] : '' }}</td>
					<td colspan="8">&nbsp; BB MASUK : @{{ item.obji3[32104179] ? item.obji3[32104179] : '' }}</td>
					<td colspan="26">&nbsp; % PERUBAHAN DARI BB LAHIR : @{{ item.obji3[32104240] ? item.obji3[32104240] : '' }}</td>
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
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">D10</td>
					<td colspan="5">60 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 2 :</td>
					<td colspan="5">20 cc/kg/hr</td>
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">D10</td>
					<td colspan="5">80 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 3 :</td>
					<td colspan="5">40 cc/kg/hr</td>
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">100 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 4 :</td>
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 5 :</td>
					<td colspan="5">80 cc/kg/hr</td>
					<td colspan="5">40 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 6 :</td>
					<td colspan="5">100 cc/kg/hr</td>
					<td colspan="5">20 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 7 :</td>
					<td colspan="5">120 cc/kg/hr</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 8 :</td>
					<td colspan="5">140 cc/kg/hr</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">140 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 9 :</td>
					<td colspan="5">150 cc/kg/hr</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">150 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 10 :</td>
					<td colspan="5">LEMBAR PEMELIHARAAN</td>
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
					<td colspan="3">&nbsp;@{{item.obji3[32104241] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji3[32104242] ? item.obji3[32104242] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji3[32104243] ? item.obji3[32104243] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji3[32104244] ? item.obji3[32104244] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji3[32104245] ? item.obji3[32104245] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji3[32104246] ? item.obji3[32104246] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[32104247] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji3[32104248] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji3[32104249] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104250] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104251] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104252] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104253] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104254] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104255] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104256] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji3[32104261] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji3[32104262] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[32104263] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji3[32104264] ? item.obji3[32104264] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">2</td>
					<td colspan="3">&nbsp;@{{item.obji3[32104265] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji3[32104266] ? item.obji3[32104266] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji3[32104267] ? item.obji3[32104267] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji3[32104268] ? item.obji3[32104268] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji3[32104269] ? item.obji3[32104269] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji3[32104270] ? item.obji3[32104270] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[32104271] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji3[32104272] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji3[32104273] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104274] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104275] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104276] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104277] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104278] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104279] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104280] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji3[32104285] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji3[32104286] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[32104287] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji3[32104288] ? item.obji3[32104288] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">3</td>
					<td colspan="3">&nbsp;@{{item.obji3[32104289] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji3[32104290] ? item.obji3[32104290] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji3[32104291] ? item.obji3[32104291] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji3[32104292] ? item.obji3[32104292] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji3[32104293] ? item.obji3[32104293] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji3[32104294] ? item.obji3[32104294] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[32104295] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji3[32104296] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji3[32104297] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104298] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104299] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104300] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104301] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104302] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104303] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104304] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji3[32104309] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji3[32104310] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[32104311] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji3[32104312] ? item.obji3[32104312] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">4</td>
					<td colspan="3">&nbsp;@{{item.obji3[32104313] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji3[32104314] ? item.obji3[32104314] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji3[32104315] ? item.obji3[32104315] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji3[32104316] ? item.obji3[32104316] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji3[32104317] ? item.obji3[32104317] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji3[32104318] ? item.obji3[32104318] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[32104319] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji3[32104320] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji3[32104321] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104322] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104323] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104324] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104325] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104326] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104327] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104328] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji3[32104333] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji3[32104334] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[32104335] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji3[32104336] ? item.obji3[32104336] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">5</td>
					<td colspan="3">&nbsp;@{{item.obji3[32104337] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji3[32104338] ? item.obji3[32104338] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji3[32104339] ? item.obji3[32104339] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji3[32104340] ? item.obji3[32104340] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji3[32104341] ? item.obji3[32104341] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji3[32104342] ? item.obji3[32104342] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[32104343] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji3[32104344] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji3[32104345] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104346] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104347] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104348] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104349] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104350] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104351] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104352] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji3[32104357] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji3[32104358] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[32104359] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji3[32104360] ? item.obji3[32104360] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">6</td>
					<td colspan="3">&nbsp;@{{item.obji3[32104361] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji3[32104362] ? item.obji3[32104362] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji3[32104363] ? item.obji3[32104363] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji3[32104364] ? item.obji3[32104364] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji3[32104365] ? item.obji3[32104365] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji3[32104366] ? item.obji3[32104366] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[32104367] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji3[32104368] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji3[32104369] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104370] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104371] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104372] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104373] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104374] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104375] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104376] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji3[32104381] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji3[32104382] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[32104383] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji3[32104384] ? item.obji3[32104384] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">7</td>
					<td colspan="3">&nbsp;@{{item.obji3[32104385] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji3[32104386] ? item.obji3[32104386] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji3[32104387] ? item.obji3[32104387] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji3[32104388] ? item.obji3[32104388] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji3[32104389] ? item.obji3[32104389] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji3[32104390] ? item.obji3[32104390] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[32104391] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji3[32104392] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji3[32104393] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104394] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104395] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104396] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104397] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104398] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104399] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104400] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji3[32104405] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji3[32104406] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[32104407] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji3[32104408] ? item.obji3[32104408] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">8</td>
					<td colspan="3">&nbsp;@{{item.obji3[32104409] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji3[32104410] ? item.obji3[32104410] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji3[32104411] ? item.obji3[32104411] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji3[32104412] ? item.obji3[32104412] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji3[32104413] ? item.obji3[32104413] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji3[32104414] ? item.obji3[32104414] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[32104415] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji3[32104416] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji3[32104417] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104418] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104419] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104420] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104421] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104422] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104423] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104424] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji3[32104429] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji3[32104430] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[32104431] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji3[32104432] ? item.obji3[32104432] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">9</td>
					<td colspan="3">&nbsp;@{{item.obji3[32104433] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji3[32104434] ? item.obji3[32104434] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji3[32104435] ? item.obji3[32104435] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji3[32104436] ? item.obji3[32104436] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji3[32104437] ? item.obji3[32104437] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji3[32104438] ? item.obji3[32104438] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[32104439] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji3[32104440] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji3[32104441] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104442] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104443] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104444] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104445] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104446] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104447] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104448] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji3[32104453] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji3[32104454] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[32104455] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji3[32104456] ? item.obji3[32104456] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">10</td>
					<td colspan="3">&nbsp;@{{item.obji3[32104457] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji3[32104458] ? item.obji3[32104458] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji3[32104459] ? item.obji3[32104459] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji3[32104460] ? item.obji3[32104460] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji3[32104461] ? item.obji3[32104461] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji3[32104462] ? item.obji3[32104462] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[32104463] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji3[32104464] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji3[32104465] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104466] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104467] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104468] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104469] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104470] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104471] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104472] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji3[32104477] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji3[32104478] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[32104479] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji3[32104480] ? item.obji3[32104480] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">11</td>
					<td colspan="3">&nbsp;@{{item.obji3[32104481] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji3[32104482] ? item.obji3[32104482] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji3[32104483] ? item.obji3[32104483] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji3[32104484] ? item.obji3[32104484] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji3[32104485] ? item.obji3[32104485] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji3[32104486] ? item.obji3[32104486] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[32104487] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji3[32104488] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji3[32104489] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104490] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104491] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104492] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104493] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104494] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104495] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104496] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji3[32104501] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji3[32104502] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[32104503] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji3[32104504] ? item.obji3[32104504] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">12</td>
					<td colspan="3">&nbsp;@{{item.obji3[32104505] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji3[32104506] ? item.obji3[32104506] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji3[32104507] ? item.obji3[32104507] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji3[32104508] ? item.obji3[32104508] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji3[32104509] ? item.obji3[32104509] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji3[32104510] ? item.obji3[32104510] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[32104511] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji3[32104512] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji3[32104513] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104514] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104515] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104516] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104517] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104518] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104519] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[32104520] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji3[32104525] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji3[32104526] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[32104527] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji3[32104528] ? item.obji3[32104528] : '' }}</td>
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
					<td colspan="5" class="border-lr" rowspan="2" style="font-size: 36px;text-align:center">72</td>
				</tr>
				<tr class="noborder">
					<td colspan="6" class="noborder" style="font-size: 10pt">NIK</td>
					<td colspan="11" class="noborder" style="font-size: 10pt">
						: {!! $res['d1'][0]->noidentitas  !!}
					</td>
				</tr>
				<tr class="bordered bg-dark-small">
					<th colspan="49" height="20pt">PEMBERIAN MAKAN AWAL DAN PENURUNAN CAIRAN IV PADA NEONATUS LEBIH DARI 2500 GRAM DARI HARI PERAWATAN 1-12</th>
				</tr>
				<tr>
					<td colspan="15">&nbsp; BB : @{{ item.obji4[32104178] ? item.obji4[32104178] : '' }}</td>
					<td colspan="8">&nbsp; BB MASUK : @{{ item.obji4[32104179] ? item.obji4[32104179] : '' }}</td>
					<td colspan="26">&nbsp; % PERUBAHAN DARI BB LAHIR : @{{ item.obji4[32104240] ? item.obji4[32104240] : '' }}</td>
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
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">D10</td>
					<td colspan="5">60 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 2 :</td>
					<td colspan="5">20 cc/kg/hr</td>
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">D10</td>
					<td colspan="5">80 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 3 :</td>
					<td colspan="5">40 cc/kg/hr</td>
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">100 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 4 :</td>
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 5 :</td>
					<td colspan="5">80 cc/kg/hr</td>
					<td colspan="5">40 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 6 :</td>
					<td colspan="5">100 cc/kg/hr</td>
					<td colspan="5">20 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 7 :</td>
					<td colspan="5">120 cc/kg/hr</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 8 :</td>
					<td colspan="5">140 cc/kg/hr</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">140 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 9 :</td>
					<td colspan="5">150 cc/kg/hr</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">150 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 10 :</td>
					<td colspan="5">LEMBAR PEMELIHARAAN</td>
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
					<td colspan="3">&nbsp;@{{item.obji4[32104241] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji4[32104242] ? item.obji4[32104242] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji4[32104243] ? item.obji4[32104243] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji4[32104244] ? item.obji4[32104244] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji4[32104245] ? item.obji4[32104245] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji4[32104246] ? item.obji4[32104246] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[32104247] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji4[32104248] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji4[32104249] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104250] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104251] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104252] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104253] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104254] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104255] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104256] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji4[32104261] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji4[32104262] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[32104263] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji4[32104264] ? item.obji4[32104264] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">2</td>
					<td colspan="3">&nbsp;@{{item.obji4[32104265] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji4[32104266] ? item.obji4[32104266] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji4[32104267] ? item.obji4[32104267] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji4[32104268] ? item.obji4[32104268] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji4[32104269] ? item.obji4[32104269] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji4[32104270] ? item.obji4[32104270] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[32104271] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji4[32104272] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji4[32104273] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104274] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104275] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104276] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104277] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104278] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104279] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104280] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji4[32104285] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji4[32104286] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[32104287] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji4[32104288] ? item.obji4[32104288] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">3</td>
					<td colspan="3">&nbsp;@{{item.obji4[32104289] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji4[32104290] ? item.obji4[32104290] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji4[32104291] ? item.obji4[32104291] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji4[32104292] ? item.obji4[32104292] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji4[32104293] ? item.obji4[32104293] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji4[32104294] ? item.obji4[32104294] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[32104295] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji4[32104296] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji4[32104297] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104298] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104299] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104300] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104301] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104302] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104303] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104304] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji4[32104309] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji4[32104310] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[32104311] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji4[32104312] ? item.obji4[32104312] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">4</td>
					<td colspan="3">&nbsp;@{{item.obji4[32104313] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji4[32104314] ? item.obji4[32104314] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji4[32104315] ? item.obji4[32104315] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji4[32104316] ? item.obji4[32104316] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji4[32104317] ? item.obji4[32104317] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji4[32104318] ? item.obji4[32104318] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[32104319] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji4[32104320] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji4[32104321] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104322] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104323] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104324] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104325] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104326] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104327] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104328] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji4[32104333] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji4[32104334] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[32104335] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji4[32104336] ? item.obji4[32104336] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">5</td>
					<td colspan="3">&nbsp;@{{item.obji4[32104337] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji4[32104338] ? item.obji4[32104338] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji4[32104339] ? item.obji4[32104339] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji4[32104340] ? item.obji4[32104340] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji4[32104341] ? item.obji4[32104341] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji4[32104342] ? item.obji4[32104342] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[32104343] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji4[32104344] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji4[32104345] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104346] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104347] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104348] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104349] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104350] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104351] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104352] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji4[32104357] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji4[32104358] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[32104359] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji4[32104360] ? item.obji4[32104360] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">6</td>
					<td colspan="3">&nbsp;@{{item.obji4[32104361] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji4[32104362] ? item.obji4[32104362] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji4[32104363] ? item.obji4[32104363] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji4[32104364] ? item.obji4[32104364] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji4[32104365] ? item.obji4[32104365] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji4[32104366] ? item.obji4[32104366] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[32104367] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji4[32104368] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji4[32104369] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104370] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104371] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104372] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104373] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104374] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104375] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104376] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji4[32104381] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji4[32104382] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[32104383] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji4[32104384] ? item.obji4[32104384] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">7</td>
					<td colspan="3">&nbsp;@{{item.obji4[32104385] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji4[32104386] ? item.obji4[32104386] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji4[32104387] ? item.obji4[32104387] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji4[32104388] ? item.obji4[32104388] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji4[32104389] ? item.obji4[32104389] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji4[32104390] ? item.obji4[32104390] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[32104391] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji4[32104392] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji4[32104393] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104394] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104395] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104396] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104397] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104398] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104399] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104400] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji4[32104405] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji4[32104406] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[32104407] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji4[32104408] ? item.obji4[32104408] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">8</td>
					<td colspan="3">&nbsp;@{{item.obji4[32104409] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji4[32104410] ? item.obji4[32104410] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji4[32104411] ? item.obji4[32104411] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji4[32104412] ? item.obji4[32104412] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji4[32104413] ? item.obji4[32104413] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji4[32104414] ? item.obji4[32104414] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[32104415] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji4[32104416] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji4[32104417] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104418] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104419] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104420] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104421] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104422] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104423] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104424] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji4[32104429] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji4[32104430] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[32104431] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji4[32104432] ? item.obji4[32104432] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">9</td>
					<td colspan="3">&nbsp;@{{item.obji4[32104433] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji4[32104434] ? item.obji4[32104434] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji4[32104435] ? item.obji4[32104435] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji4[32104436] ? item.obji4[32104436] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji4[32104437] ? item.obji4[32104437] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji4[32104438] ? item.obji4[32104438] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[32104439] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji4[32104440] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji4[32104441] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104442] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104443] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104444] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104445] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104446] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104447] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104448] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji4[32104453] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji4[32104454] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[32104455] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji4[32104456] ? item.obji4[32104456] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">10</td>
					<td colspan="3">&nbsp;@{{item.obji4[32104457] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji4[32104458] ? item.obji4[32104458] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji4[32104459] ? item.obji4[32104459] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji4[32104460] ? item.obji4[32104460] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji4[32104461] ? item.obji4[32104461] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji4[32104462] ? item.obji4[32104462] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[32104463] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji4[32104464] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji4[32104465] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104466] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104467] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104468] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104469] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104470] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104471] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104472] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji4[32104477] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji4[32104478] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[32104479] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji4[32104480] ? item.obji4[32104480] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">11</td>
					<td colspan="3">&nbsp;@{{item.obji4[32104481] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji4[32104482] ? item.obji4[32104482] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji4[32104483] ? item.obji4[32104483] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji4[32104484] ? item.obji4[32104484] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji4[32104485] ? item.obji4[32104485] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji4[32104486] ? item.obji4[32104486] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[32104487] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji4[32104488] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji4[32104489] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104490] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104491] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104492] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104493] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104494] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104495] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104496] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji4[32104501] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji4[32104502] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[32104503] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji4[32104504] ? item.obji4[32104504] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">12</td>
					<td colspan="3">&nbsp;@{{item.obji4[32104505] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji4[32104506] ? item.obji4[32104506] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji4[32104507] ? item.obji4[32104507] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji4[32104508] ? item.obji4[32104508] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji4[32104509] ? item.obji4[32104509] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji4[32104510] ? item.obji4[32104510] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[32104511] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji4[32104512] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji4[32104513] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104514] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104515] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104516] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104517] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104518] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104519] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[32104520] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji4[32104525] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji4[32104526] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[32104527] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji4[32104528] ? item.obji4[32104528] : '' }}</td>
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
					<td colspan="5" class="border-lr" rowspan="2" style="font-size: 36px;text-align:center">72</td>
				</tr>
				<tr class="noborder">
					<td colspan="6" class="noborder" style="font-size: 10pt">NIK</td>
					<td colspan="11" class="noborder" style="font-size: 10pt">
						: {!! $res['d1'][0]->noidentitas  !!}
					</td>
				</tr>
				<tr class="bordered bg-dark-small">
					<th colspan="49" height="20pt">PEMBERIAN MAKAN AWAL DAN PENURUNAN CAIRAN IV PADA NEONATUS LEBIH DARI 2500 GRAM DARI HARI PERAWATAN 1-12</th>
				</tr>
				<tr>
					<td colspan="15">&nbsp; BB : @{{ item.obji5[32104178] ? item.obji5[32104178] : '' }}</td>
					<td colspan="8">&nbsp; BB MASUK : @{{ item.obji5[32104179] ? item.obji5[32104179] : '' }}</td>
					<td colspan="26">&nbsp; % PERUBAHAN DARI BB LAHIR : @{{ item.obji5[32104240] ? item.obji5[32104240] : '' }}</td>
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
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">D10</td>
					<td colspan="5">60 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 2 :</td>
					<td colspan="5">20 cc/kg/hr</td>
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">D10</td>
					<td colspan="5">80 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 3 :</td>
					<td colspan="5">40 cc/kg/hr</td>
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">100 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 4 :</td>
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 5 :</td>
					<td colspan="5">80 cc/kg/hr</td>
					<td colspan="5">40 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 6 :</td>
					<td colspan="5">100 cc/kg/hr</td>
					<td colspan="5">20 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 7 :</td>
					<td colspan="5">120 cc/kg/hr</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 8 :</td>
					<td colspan="5">140 cc/kg/hr</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">140 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 9 :</td>
					<td colspan="5">150 cc/kg/hr</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">150 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 10 :</td>
					<td colspan="5">LEMBAR PEMELIHARAAN</td>
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
					<td colspan="3">&nbsp;@{{item.obji5[32104241] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji5[32104242] ? item.obji5[32104242] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji5[32104243] ? item.obji5[32104243] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji5[32104244] ? item.obji5[32104244] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji5[32104245] ? item.obji5[32104245] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji5[32104246] ? item.obji5[32104246] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[32104247] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji5[32104248] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji5[32104249] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104250] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104251] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104252] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104253] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104254] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104255] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104256] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji5[32104261] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji5[32104262] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[32104263] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji5[32104264] ? item.obji5[32104264] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">2</td>
					<td colspan="3">&nbsp;@{{item.obji5[32104265] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji5[32104266] ? item.obji5[32104266] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji5[32104267] ? item.obji5[32104267] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji5[32104268] ? item.obji5[32104268] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji5[32104269] ? item.obji5[32104269] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji5[32104270] ? item.obji5[32104270] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[32104271] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji5[32104272] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji5[32104273] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104274] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104275] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104276] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104277] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104278] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104279] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104280] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji5[32104285] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji5[32104286] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[32104287] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji5[32104288] ? item.obji5[32104288] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">3</td>
					<td colspan="3">&nbsp;@{{item.obji5[32104289] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji5[32104290] ? item.obji5[32104290] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji5[32104291] ? item.obji5[32104291] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji5[32104292] ? item.obji5[32104292] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji5[32104293] ? item.obji5[32104293] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji5[32104294] ? item.obji5[32104294] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[32104295] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji5[32104296] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji5[32104297] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104298] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104299] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104300] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104301] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104302] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104303] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104304] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji5[32104309] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji5[32104310] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[32104311] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji5[32104312] ? item.obji5[32104312] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">4</td>
					<td colspan="3">&nbsp;@{{item.obji5[32104313] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji5[32104314] ? item.obji5[32104314] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji5[32104315] ? item.obji5[32104315] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji5[32104316] ? item.obji5[32104316] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji5[32104317] ? item.obji5[32104317] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji5[32104318] ? item.obji5[32104318] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[32104319] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji5[32104320] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji5[32104321] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104322] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104323] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104324] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104325] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104326] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104327] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104328] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji5[32104333] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji5[32104334] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[32104335] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji5[32104336] ? item.obji5[32104336] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">5</td>
					<td colspan="3">&nbsp;@{{item.obji5[32104337] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji5[32104338] ? item.obji5[32104338] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji5[32104339] ? item.obji5[32104339] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji5[32104340] ? item.obji5[32104340] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji5[32104341] ? item.obji5[32104341] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji5[32104342] ? item.obji5[32104342] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[32104343] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji5[32104344] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji5[32104345] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104346] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104347] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104348] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104349] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104350] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104351] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104352] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji5[32104357] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji5[32104358] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[32104359] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji5[32104360] ? item.obji5[32104360] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">6</td>
					<td colspan="3">&nbsp;@{{item.obji5[32104361] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji5[32104362] ? item.obji5[32104362] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji5[32104363] ? item.obji5[32104363] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji5[32104364] ? item.obji5[32104364] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji5[32104365] ? item.obji5[32104365] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji5[32104366] ? item.obji5[32104366] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[32104367] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji5[32104368] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji5[32104369] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104370] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104371] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104372] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104373] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104374] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104375] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104376] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji5[32104381] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji5[32104382] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[32104383] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji5[32104384] ? item.obji5[32104384] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">7</td>
					<td colspan="3">&nbsp;@{{item.obji5[32104385] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji5[32104386] ? item.obji5[32104386] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji5[32104387] ? item.obji5[32104387] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji5[32104388] ? item.obji5[32104388] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji5[32104389] ? item.obji5[32104389] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji5[32104390] ? item.obji5[32104390] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[32104391] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji5[32104392] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji5[32104393] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104394] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104395] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104396] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104397] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104398] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104399] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104400] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji5[32104405] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji5[32104406] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[32104407] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji5[32104408] ? item.obji5[32104408] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">8</td>
					<td colspan="3">&nbsp;@{{item.obji5[32104409] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji5[32104410] ? item.obji5[32104410] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji5[32104411] ? item.obji5[32104411] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji5[32104412] ? item.obji5[32104412] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji5[32104413] ? item.obji5[32104413] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji5[32104414] ? item.obji5[32104414] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[32104415] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji5[32104416] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji5[32104417] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104418] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104419] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104420] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104421] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104422] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104423] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104424] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji5[32104429] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji5[32104430] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[32104431] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji5[32104432] ? item.obji5[32104432] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">9</td>
					<td colspan="3">&nbsp;@{{item.obji5[32104433] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji5[32104434] ? item.obji5[32104434] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji5[32104435] ? item.obji5[32104435] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji5[32104436] ? item.obji5[32104436] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji5[32104437] ? item.obji5[32104437] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji5[32104438] ? item.obji5[32104438] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[32104439] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji5[32104440] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji5[32104441] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104442] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104443] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104444] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104445] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104446] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104447] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104448] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji5[32104453] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji5[32104454] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[32104455] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji5[32104456] ? item.obji5[32104456] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">10</td>
					<td colspan="3">&nbsp;@{{item.obji5[32104457] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji5[32104458] ? item.obji5[32104458] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji5[32104459] ? item.obji5[32104459] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji5[32104460] ? item.obji5[32104460] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji5[32104461] ? item.obji5[32104461] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji5[32104462] ? item.obji5[32104462] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[32104463] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji5[32104464] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji5[32104465] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104466] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104467] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104468] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104469] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104470] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104471] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104472] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji5[32104477] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji5[32104478] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[32104479] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji5[32104480] ? item.obji5[32104480] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">11</td>
					<td colspan="3">&nbsp;@{{item.obji5[32104481] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji5[32104482] ? item.obji5[32104482] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji5[32104483] ? item.obji5[32104483] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji5[32104484] ? item.obji5[32104484] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji5[32104485] ? item.obji5[32104485] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji5[32104486] ? item.obji5[32104486] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[32104487] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji5[32104488] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji5[32104489] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104490] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104491] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104492] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104493] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104494] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104495] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104496] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji5[32104501] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji5[32104502] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[32104503] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji5[32104504] ? item.obji5[32104504] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">12</td>
					<td colspan="3">&nbsp;@{{item.obji5[32104505] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji5[32104506] ? item.obji5[32104506] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji5[32104507] ? item.obji5[32104507] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji5[32104508] ? item.obji5[32104508] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji5[32104509] ? item.obji5[32104509] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji5[32104510] ? item.obji5[32104510] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[32104511] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji5[32104512] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji5[32104513] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104514] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104515] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104516] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104517] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104518] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104519] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[32104520] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji5[32104525] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji5[32104526] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[32104527] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji5[32104528] ? item.obji5[32104528] : '' }}</td>
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
					<td colspan="5" class="border-lr" rowspan="2" style="font-size: 36px;text-align:center">72</td>
				</tr>
				<tr class="noborder">
					<td colspan="6" class="noborder" style="font-size: 10pt">NIK</td>
					<td colspan="11" class="noborder" style="font-size: 10pt">
						: {!! $res['d1'][0]->noidentitas  !!}
					</td>
				</tr>
				<tr class="bordered bg-dark-small">
					<th colspan="49" height="20pt">PEMBERIAN MAKAN AWAL DAN PENURUNAN CAIRAN IV PADA NEONATUS LEBIH DARI 2500 GRAM DARI HARI PERAWATAN 1-12</th>
				</tr>
				<tr>
					<td colspan="15">&nbsp; BB : @{{ item.obji6[32104178] ? item.obji6[32104178] : '' }}</td>
					<td colspan="8">&nbsp; BB MASUK : @{{ item.obji6[32104179] ? item.obji6[32104179] : '' }}</td>
					<td colspan="26">&nbsp; % PERUBAHAN DARI BB LAHIR : @{{ item.obji6[32104240] ? item.obji6[32104240] : '' }}</td>
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
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">D10</td>
					<td colspan="5">60 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 2 :</td>
					<td colspan="5">20 cc/kg/hr</td>
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">D10</td>
					<td colspan="5">80 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 3 :</td>
					<td colspan="5">40 cc/kg/hr</td>
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">100 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 4 :</td>
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 5 :</td>
					<td colspan="5">80 cc/kg/hr</td>
					<td colspan="5">40 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 6 :</td>
					<td colspan="5">100 cc/kg/hr</td>
					<td colspan="5">20 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 7 :</td>
					<td colspan="5">120 cc/kg/hr</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 8 :</td>
					<td colspan="5">140 cc/kg/hr</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">140 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 9 :</td>
					<td colspan="5">150 cc/kg/hr</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">150 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 10 :</td>
					<td colspan="5">LEMBAR PEMELIHARAAN</td>
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
					<td colspan="3">&nbsp;@{{item.obji6[32104241] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji6[32104242] ? item.obji6[32104242] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji6[32104243] ? item.obji6[32104243] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji6[32104244] ? item.obji6[32104244] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji6[32104245] ? item.obji6[32104245] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji6[32104246] ? item.obji6[32104246] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[32104247] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji6[32104248] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji6[32104249] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104250] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104251] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104252] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104253] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104254] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104255] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104256] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji6[32104261] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji6[32104262] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[32104263] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji6[32104264] ? item.obji6[32104264] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">2</td>
					<td colspan="3">&nbsp;@{{item.obji6[32104265] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji6[32104266] ? item.obji6[32104266] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji6[32104267] ? item.obji6[32104267] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji6[32104268] ? item.obji6[32104268] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji6[32104269] ? item.obji6[32104269] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji6[32104270] ? item.obji6[32104270] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[32104271] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji6[32104272] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji6[32104273] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104274] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104275] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104276] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104277] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104278] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104279] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104280] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji6[32104285] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji6[32104286] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[32104287] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji6[32104288] ? item.obji6[32104288] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">3</td>
					<td colspan="3">&nbsp;@{{item.obji6[32104289] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji6[32104290] ? item.obji6[32104290] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji6[32104291] ? item.obji6[32104291] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji6[32104292] ? item.obji6[32104292] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji6[32104293] ? item.obji6[32104293] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji6[32104294] ? item.obji6[32104294] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[32104295] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji6[32104296] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji6[32104297] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104298] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104299] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104300] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104301] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104302] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104303] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104304] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji6[32104309] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji6[32104310] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[32104311] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji6[32104312] ? item.obji6[32104312] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">4</td>
					<td colspan="3">&nbsp;@{{item.obji6[32104313] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji6[32104314] ? item.obji6[32104314] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji6[32104315] ? item.obji6[32104315] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji6[32104316] ? item.obji6[32104316] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji6[32104317] ? item.obji6[32104317] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji6[32104318] ? item.obji6[32104318] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[32104319] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji6[32104320] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji6[32104321] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104322] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104323] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104324] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104325] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104326] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104327] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104328] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji6[32104333] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji6[32104334] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[32104335] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji6[32104336] ? item.obji6[32104336] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">5</td>
					<td colspan="3">&nbsp;@{{item.obji6[32104337] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji6[32104338] ? item.obji6[32104338] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji6[32104339] ? item.obji6[32104339] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji6[32104340] ? item.obji6[32104340] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji6[32104341] ? item.obji6[32104341] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji6[32104342] ? item.obji6[32104342] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[32104343] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji6[32104344] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji6[32104345] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104346] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104347] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104348] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104349] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104350] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104351] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104352] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji6[32104357] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji6[32104358] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[32104359] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji6[32104360] ? item.obji6[32104360] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">6</td>
					<td colspan="3">&nbsp;@{{item.obji6[32104361] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji6[32104362] ? item.obji6[32104362] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji6[32104363] ? item.obji6[32104363] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji6[32104364] ? item.obji6[32104364] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji6[32104365] ? item.obji6[32104365] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji6[32104366] ? item.obji6[32104366] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[32104367] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji6[32104368] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji6[32104369] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104370] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104371] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104372] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104373] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104374] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104375] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104376] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji6[32104381] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji6[32104382] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[32104383] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji6[32104384] ? item.obji6[32104384] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">7</td>
					<td colspan="3">&nbsp;@{{item.obji6[32104385] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji6[32104386] ? item.obji6[32104386] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji6[32104387] ? item.obji6[32104387] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji6[32104388] ? item.obji6[32104388] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji6[32104389] ? item.obji6[32104389] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji6[32104390] ? item.obji6[32104390] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[32104391] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji6[32104392] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji6[32104393] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104394] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104395] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104396] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104397] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104398] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104399] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104400] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji6[32104405] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji6[32104406] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[32104407] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji6[32104408] ? item.obji6[32104408] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">8</td>
					<td colspan="3">&nbsp;@{{item.obji6[32104409] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji6[32104410] ? item.obji6[32104410] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji6[32104411] ? item.obji6[32104411] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji6[32104412] ? item.obji6[32104412] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji6[32104413] ? item.obji6[32104413] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji6[32104414] ? item.obji6[32104414] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[32104415] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji6[32104416] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji6[32104417] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104418] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104419] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104420] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104421] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104422] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104423] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104424] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji6[32104429] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji6[32104430] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[32104431] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji6[32104432] ? item.obji6[32104432] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">9</td>
					<td colspan="3">&nbsp;@{{item.obji6[32104433] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji6[32104434] ? item.obji6[32104434] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji6[32104435] ? item.obji6[32104435] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji6[32104436] ? item.obji6[32104436] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji6[32104437] ? item.obji6[32104437] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji6[32104438] ? item.obji6[32104438] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[32104439] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji6[32104440] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji6[32104441] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104442] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104443] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104444] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104445] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104446] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104447] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104448] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji6[32104453] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji6[32104454] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[32104455] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji6[32104456] ? item.obji6[32104456] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">10</td>
					<td colspan="3">&nbsp;@{{item.obji6[32104457] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji6[32104458] ? item.obji6[32104458] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji6[32104459] ? item.obji6[32104459] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji6[32104460] ? item.obji6[32104460] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji6[32104461] ? item.obji6[32104461] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji6[32104462] ? item.obji6[32104462] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[32104463] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji6[32104464] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji6[32104465] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104466] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104467] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104468] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104469] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104470] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104471] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104472] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji6[32104477] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji6[32104478] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[32104479] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji6[32104480] ? item.obji6[32104480] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">11</td>
					<td colspan="3">&nbsp;@{{item.obji6[32104481] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji6[32104482] ? item.obji6[32104482] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji6[32104483] ? item.obji6[32104483] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji6[32104484] ? item.obji6[32104484] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji6[32104485] ? item.obji6[32104485] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji6[32104486] ? item.obji6[32104486] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[32104487] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji6[32104488] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji6[32104489] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104490] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104491] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104492] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104493] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104494] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104495] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104496] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji6[32104501] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji6[32104502] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[32104503] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji6[32104504] ? item.obji6[32104504] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">12</td>
					<td colspan="3">&nbsp;@{{item.obji6[32104505] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji6[32104506] ? item.obji6[32104506] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji6[32104507] ? item.obji6[32104507] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji6[32104508] ? item.obji6[32104508] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji6[32104509] ? item.obji6[32104509] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji6[32104510] ? item.obji6[32104510] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[32104511] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji6[32104512] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji6[32104513] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104514] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104515] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104516] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104517] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104518] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104519] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[32104520] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji6[32104525] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji6[32104526] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[32104527] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji6[32104528] ? item.obji6[32104528] : '' }}</td>
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
					<td colspan="5" class="border-lr" rowspan="2" style="font-size: 36px;text-align:center">72</td>
				</tr>
				<tr class="noborder">
					<td colspan="6" class="noborder" style="font-size: 10pt">NIK</td>
					<td colspan="11" class="noborder" style="font-size: 10pt">
						: {!! $res['d1'][0]->noidentitas  !!}
					</td>
				</tr>
				<tr class="bordered bg-dark-small">
					<th colspan="49" height="20pt">PEMBERIAN MAKAN AWAL DAN PENURUNAN CAIRAN IV PADA NEONATUS LEBIH DARI 2500 GRAM DARI HARI PERAWATAN 1-12</th>
				</tr>
				<tr>
					<td colspan="15">&nbsp; BB : @{{ item.obji7[32104178] ? item.obji7[32104178] : '' }}</td>
					<td colspan="8">&nbsp; BB MASUK : @{{ item.obji7[32104179] ? item.obji7[32104179] : '' }}</td>
					<td colspan="26">&nbsp; % PERUBAHAN DARI BB LAHIR : @{{ item.obji7[32104240] ? item.obji7[32104240] : '' }}</td>
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
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">D10</td>
					<td colspan="5">60 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 2 :</td>
					<td colspan="5">20 cc/kg/hr</td>
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">D10</td>
					<td colspan="5">80 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 3 :</td>
					<td colspan="5">40 cc/kg/hr</td>
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">100 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 4 :</td>
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 5 :</td>
					<td colspan="5">80 cc/kg/hr</td>
					<td colspan="5">40 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 6 :</td>
					<td colspan="5">100 cc/kg/hr</td>
					<td colspan="5">20 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 7 :</td>
					<td colspan="5">120 cc/kg/hr</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 8 :</td>
					<td colspan="5">140 cc/kg/hr</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">140 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 9 :</td>
					<td colspan="5">150 cc/kg/hr</td>
					<td colspan="5">OFF</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">150 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 10 :</td>
					<td colspan="5">LEMBAR PEMELIHARAAN</td>
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
					<td colspan="3">&nbsp;@{{item.obji7[32104241] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji7[32104242] ? item.obji7[32104242] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji7[32104243] ? item.obji7[32104243] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji7[32104244] ? item.obji7[32104244] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji7[32104245] ? item.obji7[32104245] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji7[32104246] ? item.obji7[32104246] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[32104247] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji7[32104248] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji7[32104249] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104250] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104251] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104252] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104253] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104254] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104255] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104256] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji7[32104261] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji7[32104262] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[32104263] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji7[32104264] ? item.obji7[32104264] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">2</td>
					<td colspan="3">&nbsp;@{{item.obji7[32104265] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji7[32104266] ? item.obji7[32104266] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji7[32104267] ? item.obji7[32104267] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji7[32104268] ? item.obji7[32104268] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji7[32104269] ? item.obji7[32104269] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji7[32104270] ? item.obji7[32104270] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[32104271] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji7[32104272] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji7[32104273] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104274] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104275] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104276] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104277] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104278] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104279] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104280] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji7[32104285] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji7[32104286] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[32104287] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji7[32104288] ? item.obji7[32104288] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">3</td>
					<td colspan="3">&nbsp;@{{item.obji7[32104289] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji7[32104290] ? item.obji7[32104290] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji7[32104291] ? item.obji7[32104291] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji7[32104292] ? item.obji7[32104292] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji7[32104293] ? item.obji7[32104293] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji7[32104294] ? item.obji7[32104294] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[32104295] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji7[32104296] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji7[32104297] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104298] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104299] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104300] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104301] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104302] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104303] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104304] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji7[32104309] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji7[32104310] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[32104311] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji7[32104312] ? item.obji7[32104312] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">4</td>
					<td colspan="3">&nbsp;@{{item.obji7[32104313] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji7[32104314] ? item.obji7[32104314] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji7[32104315] ? item.obji7[32104315] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji7[32104316] ? item.obji7[32104316] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji7[32104317] ? item.obji7[32104317] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji7[32104318] ? item.obji7[32104318] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[32104319] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji7[32104320] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji7[32104321] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104322] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104323] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104324] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104325] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104326] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104327] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104328] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji7[32104333] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji7[32104334] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[32104335] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji7[32104336] ? item.obji7[32104336] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">5</td>
					<td colspan="3">&nbsp;@{{item.obji7[32104337] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji7[32104338] ? item.obji7[32104338] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji7[32104339] ? item.obji7[32104339] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji7[32104340] ? item.obji7[32104340] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji7[32104341] ? item.obji7[32104341] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji7[32104342] ? item.obji7[32104342] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[32104343] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji7[32104344] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji7[32104345] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104346] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104347] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104348] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104349] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104350] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104351] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104352] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji7[32104357] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji7[32104358] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[32104359] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji7[32104360] ? item.obji7[32104360] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">6</td>
					<td colspan="3">&nbsp;@{{item.obji7[32104361] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji7[32104362] ? item.obji7[32104362] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji7[32104363] ? item.obji7[32104363] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji7[32104364] ? item.obji7[32104364] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji7[32104365] ? item.obji7[32104365] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji7[32104366] ? item.obji7[32104366] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[32104367] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji7[32104368] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji7[32104369] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104370] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104371] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104372] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104373] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104374] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104375] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104376] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji7[32104381] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji7[32104382] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[32104383] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji7[32104384] ? item.obji7[32104384] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">7</td>
					<td colspan="3">&nbsp;@{{item.obji7[32104385] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji7[32104386] ? item.obji7[32104386] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji7[32104387] ? item.obji7[32104387] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji7[32104388] ? item.obji7[32104388] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji7[32104389] ? item.obji7[32104389] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji7[32104390] ? item.obji7[32104390] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[32104391] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji7[32104392] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji7[32104393] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104394] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104395] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104396] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104397] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104398] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104399] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104400] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji7[32104405] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji7[32104406] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[32104407] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji7[32104408] ? item.obji7[32104408] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">8</td>
					<td colspan="3">&nbsp;@{{item.obji7[32104409] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji7[32104410] ? item.obji7[32104410] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji7[32104411] ? item.obji7[32104411] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji7[32104412] ? item.obji7[32104412] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji7[32104413] ? item.obji7[32104413] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji7[32104414] ? item.obji7[32104414] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[32104415] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji7[32104416] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji7[32104417] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104418] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104419] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104420] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104421] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104422] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104423] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104424] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji7[32104429] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji7[32104430] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[32104431] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji7[32104432] ? item.obji7[32104432] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">9</td>
					<td colspan="3">&nbsp;@{{item.obji7[32104433] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji7[32104434] ? item.obji7[32104434] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji7[32104435] ? item.obji7[32104435] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji7[32104436] ? item.obji7[32104436] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji7[32104437] ? item.obji7[32104437] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji7[32104438] ? item.obji7[32104438] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[32104439] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji7[32104440] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji7[32104441] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104442] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104443] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104444] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104445] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104446] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104447] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104448] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji7[32104453] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji7[32104454] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[32104455] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji7[32104456] ? item.obji7[32104456] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">10</td>
					<td colspan="3">&nbsp;@{{item.obji7[32104457] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji7[32104458] ? item.obji7[32104458] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji7[32104459] ? item.obji7[32104459] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji7[32104460] ? item.obji7[32104460] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji7[32104461] ? item.obji7[32104461] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji7[32104462] ? item.obji7[32104462] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[32104463] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji7[32104464] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji7[32104465] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104466] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104467] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104468] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104469] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104470] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104471] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104472] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji7[32104477] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji7[32104478] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[32104479] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji7[32104480] ? item.obji7[32104480] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">11</td>
					<td colspan="3">&nbsp;@{{item.obji7[32104481] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji7[32104482] ? item.obji7[32104482] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji7[32104483] ? item.obji7[32104483] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji7[32104484] ? item.obji7[32104484] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji7[32104485] ? item.obji7[32104485] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji7[32104486] ? item.obji7[32104486] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[32104487] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji7[32104488] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji7[32104489] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104490] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104491] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104492] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104493] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104494] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104495] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104496] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji7[32104501] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji7[32104502] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[32104503] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji7[32104504] ? item.obji7[32104504] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">12</td>
					<td colspan="3">&nbsp;@{{item.obji7[32104505] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji7[32104506] ? item.obji7[32104506] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji7[32104507] ? item.obji7[32104507] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji7[32104508] ? item.obji7[32104508] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji7[32104509] ? item.obji7[32104509] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji7[32104510] ? item.obji7[32104510] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[32104511] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji7[32104512] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji7[32104513] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104514] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104515] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104516] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104517] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104518] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104519] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[32104520] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji7[32104525] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji7[32104526] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[32104527] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji7[32104528] ? item.obji7[32104528] : '' }}</td>
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

    angular.controller('cetakPemberianMakanAwal2500', function ($scope, $http, httpService) {
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