<!DOCTYPE html>
<html lang="en" ng-app="angularApp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemberian Makan Awal 1500 - 2000 gram</title>
   
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
<body ng-controller="cetakPemberianMakanAwal1500">
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
					<th colspan="49" height="20pt">PEMBERIAN MAKAN AWAL DAN PENURUNAN CAIRAN IV PADA NEONATUS 1500-2000 GRAM DARI HARI PERAWATAN 1-12</th>
				</tr>
				<tr>
					<td colspan="15">&nbsp; BB : @{{ item.obj[1001350] ? item.obj[1001350] : '' }}</td>
					<td colspan="8">&nbsp; BB MASUK : @{{ item.obj[1001351] ? item.obj[1001351] : '' }}</td>
					<td colspan="26">&nbsp; % PERUBAHAN DARI BB LAHIR : @{{ item.obj[1001412] ? item.obj[1001412] : '' }}</td>
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
					<td colspan="5">20 cc/kg/hr</td>
					<td colspan="5">80 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">100 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 4 :</td>
					<td colspan="5">40 cc/kg/hr</td>
					<td colspan="5">80 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 5 :</td>
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 6 :</td>
					<td colspan="5">80 cc/kg/hr</td>
					<td colspan="5">40 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 7 :</td>
					<td colspan="5">100 cc/kg/hr</td>
					<td colspan="5">20 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 8 :</td>
					<td colspan="5">120 cc/kg/hr</td>
					<td colspan="5">10 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">130 cc/kg/hr</td>
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
					<td colspan="2"></td>
					<td colspan="3">A</td>
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
					<td colspan="3">&nbsp;@{{item.obj[1001413] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obj[1001414] ? item.obj[1001414] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obj[1001415] ? item.obj[1001415] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obj[1001416] ? item.obj[1001416] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obj[1001417] ? item.obj[1001417] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obj[1001418] ? item.obj[1001418] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1001419] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obj[1001420] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obj[1001421] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001422] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001423] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001424] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001425] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001426] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001427] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001428] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obj[1001433] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obj[1001434] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1001435] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obj[1001436] ? item.obj[1001436] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">2</td>
					<td colspan="3">&nbsp;@{{item.obj[1001437] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obj[1001438] ? item.obj[1001438] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obj[1001439] ? item.obj[1001439] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obj[1001440] ? item.obj[1001440] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obj[1001441] ? item.obj[1001441] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obj[1001442] ? item.obj[1001442] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1001443] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obj[1001444] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obj[1001445] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001446] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001447] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001448] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001449] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001450] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001451] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001452] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obj[1001457] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obj[1001458] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1001459] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obj[1001460] ? item.obj[1001460] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">3</td>
					<td colspan="3">&nbsp;@{{item.obj[1001461] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obj[1001462] ? item.obj[1001462] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obj[1001463] ? item.obj[1001463] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obj[1001464] ? item.obj[1001464] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obj[1001465] ? item.obj[1001465] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obj[1001466] ? item.obj[1001466] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1001467] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obj[1001468] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obj[1001469] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001470] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001471] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001472] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001473] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001474] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001475] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001476] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obj[1001481] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obj[1001482] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1001483] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obj[1001484] ? item.obj[1001484] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">4</td>
					<td colspan="3">&nbsp;@{{item.obj[1001485] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obj[1001486] ? item.obj[1001486] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obj[1001487] ? item.obj[1001487] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obj[1001488] ? item.obj[1001488] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obj[1001489] ? item.obj[1001489] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obj[1001490] ? item.obj[1001490] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1001491] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obj[1001492] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obj[1001493] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001494] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001495] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001496] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001497] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001498] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001499] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001500] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obj[1001505] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obj[1001506] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1001507] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obj[1001508] ? item.obj[1001508] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">5</td>
					<td colspan="3">&nbsp;@{{item.obj[1001509] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obj[1001510] ? item.obj[1001510] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obj[1001511] ? item.obj[1001511] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obj[1001512] ? item.obj[1001512] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obj[1001513] ? item.obj[1001513] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obj[1001514] ? item.obj[1001514] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1001515] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obj[1001516] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obj[1001517] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001518] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001519] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001520] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001521] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001522] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001523] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001524] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obj[1001529] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obj[1001530] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1001531] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obj[1001532] ? item.obj[1001532] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">6</td>
					<td colspan="3">&nbsp;@{{item.obj[1001533] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obj[1001534] ? item.obj[1001534] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obj[1001535] ? item.obj[1001535] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obj[1001536] ? item.obj[1001536] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obj[1001537] ? item.obj[1001537] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obj[1001538] ? item.obj[1001538] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1001539] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obj[1001540] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obj[1001541] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001542] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001543] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001544] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001545] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001546] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001547] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001548] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obj[1001553] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obj[1001554] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1001555] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obj[1001556] ? item.obj[1001556] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">7</td>
					<td colspan="3">&nbsp;@{{item.obj[1001557] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obj[1001558] ? item.obj[1001558] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obj[1001559] ? item.obj[1001559] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obj[1001560] ? item.obj[1001560] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obj[1001561] ? item.obj[1001561] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obj[1001562] ? item.obj[1001562] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1001563] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obj[1001564] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obj[1001565] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001566] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001567] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001568] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001569] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001570] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001571] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001572] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obj[1001577] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obj[1001578] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1001579] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obj[1001580] ? item.obj[1001580] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">8</td>
					<td colspan="3">&nbsp;@{{item.obj[1001581] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obj[1001582] ? item.obj[1001582] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obj[1001583] ? item.obj[1001583] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obj[1001584] ? item.obj[1001584] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obj[1001585] ? item.obj[1001585] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obj[1001586] ? item.obj[1001586] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1001587] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obj[1001588] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obj[1001589] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001590] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001591] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001592] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001593] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001594] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001595] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001596] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obj[1001601] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obj[1001602] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1001603] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obj[1001604] ? item.obj[1001604] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">9</td>
					<td colspan="3">&nbsp;@{{item.obj[1001605] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obj[1001606] ? item.obj[1001606] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obj[1001607] ? item.obj[1001607] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obj[1001608] ? item.obj[1001608] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obj[1001609] ? item.obj[1001609] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obj[1001610] ? item.obj[1001610] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1001611] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obj[1001612] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obj[1001613] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001614] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001615] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001616] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001617] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001618] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001619] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001620] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obj[1001625] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obj[1001626] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1001627] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obj[1001628] ? item.obj[1001628] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">10</td>
					<td colspan="3">&nbsp;@{{item.obj[1001629] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obj[1001630] ? item.obj[1001630] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obj[1001631] ? item.obj[1001631] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obj[1001632] ? item.obj[1001632] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obj[1001633] ? item.obj[1001633] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obj[1001634] ? item.obj[1001634] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1001635] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obj[1001636] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obj[1001637] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001638] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001639] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001640] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001641] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001642] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001643] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001644] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obj[1001649] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obj[1001650] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1001651] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obj[1001652] ? item.obj[1001652] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">11</td>
					<td colspan="3">&nbsp;@{{item.obj[1001653] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obj[1001654] ? item.obj[1001654] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obj[1001655] ? item.obj[1001655] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obj[1001656] ? item.obj[1001656] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obj[1001657] ? item.obj[1001657] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obj[1001658] ? item.obj[1001658] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1001659] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obj[1001660] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obj[1001661] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001662] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001663] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001664] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001665] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001666] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001667] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001668] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obj[1001673] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obj[1001674] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1001675] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obj[1001676] ? item.obj[1001676] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">12</td>
					<td colspan="3">&nbsp;@{{item.obj[1001677] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obj[1001678] ? item.obj[1001678] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obj[1001679] ? item.obj[1001679] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obj[1001680] ? item.obj[1001680] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obj[1001681] ? item.obj[1001681] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obj[1001682] ? item.obj[1001682] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1001683] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obj[1001684] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obj[1001685] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001686] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001687] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001688] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001689] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001690] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001691] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obj[1001692] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obj[1001697] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obj[1001698] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obj[1001699] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obj[1001700] ? item.obj[1001700] : '' }}</td>
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
					<th colspan="49" height="20pt">PEMBERIAN MAKAN AWAL DAN PENURUNAN CAIRAN IV PADA NEONATUS 1500-2000 GRAM DARI HARI PERAWATAN 1-12</th>
				</tr>
				<tr>
					<td colspan="15">&nbsp; BB : @{{ item.obji2[1001350] ? item.obji2[1001350] : '' }}</td>
					<td colspan="8">&nbsp; BB MASUK : @{{ item.obji2[1001351] ? item.obji2[1001351] : '' }}</td>
					<td colspan="26">&nbsp; % PERUBAHAN DARI BB LAHIR : @{{ item.obji2[1001412] ? item.obji2[1001412] : '' }}</td>
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
					<td colspan="5">20 cc/kg/hr</td>
					<td colspan="5">80 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">100 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 4 :</td>
					<td colspan="5">40 cc/kg/hr</td>
					<td colspan="5">80 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 5 :</td>
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 6 :</td>
					<td colspan="5">80 cc/kg/hr</td>
					<td colspan="5">40 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 7 :</td>
					<td colspan="5">100 cc/kg/hr</td>
					<td colspan="5">20 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 8 :</td>
					<td colspan="5">120 cc/kg/hr</td>
					<td colspan="5">10 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">130 cc/kg/hr</td>
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
					<td colspan="2"></td>
					<td colspan="3">A</td>
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
					<td colspan="3">&nbsp;@{{item.obji2[1001413] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji2[1001414] ? item.obji2[1001414] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1001415] ? item.obji2[1001415] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji2[1001416] ? item.obji2[1001416] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1001417] ? item.obji2[1001417] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji2[1001418] ? item.obji2[1001418] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1001419] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji2[1001420] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji2[1001421] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001422] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001423] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001424] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001425] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001426] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001427] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001428] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji2[1001433] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji2[1001434] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1001435] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji2[1001436] ? item.obji2[1001436] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">2</td>
					<td colspan="3">&nbsp;@{{item.obji2[1001437] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji2[1001438] ? item.obji2[1001438] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1001439] ? item.obji2[1001439] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji2[1001440] ? item.obji2[1001440] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1001441] ? item.obji2[1001441] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji2[1001442] ? item.obji2[1001442] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1001443] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji2[1001444] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji2[1001445] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001446] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001447] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001448] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001449] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001450] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001451] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001452] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji2[1001457] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji2[1001458] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1001459] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji2[1001460] ? item.obji2[1001460] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">3</td>
					<td colspan="3">&nbsp;@{{item.obji2[1001461] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji2[1001462] ? item.obji2[1001462] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1001463] ? item.obji2[1001463] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji2[1001464] ? item.obji2[1001464] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1001465] ? item.obji2[1001465] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji2[1001466] ? item.obji2[1001466] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1001467] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji2[1001468] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji2[1001469] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001470] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001471] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001472] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001473] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001474] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001475] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001476] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji2[1001481] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji2[1001482] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1001483] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji2[1001484] ? item.obji2[1001484] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">4</td>
					<td colspan="3">&nbsp;@{{item.obji2[1001485] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji2[1001486] ? item.obji2[1001486] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1001487] ? item.obji2[1001487] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji2[1001488] ? item.obji2[1001488] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1001489] ? item.obji2[1001489] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji2[1001490] ? item.obji2[1001490] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1001491] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji2[1001492] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji2[1001493] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001494] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001495] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001496] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001497] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001498] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001499] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001500] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji2[1001505] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji2[1001506] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1001507] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji2[1001508] ? item.obji2[1001508] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">5</td>
					<td colspan="3">&nbsp;@{{item.obji2[1001509] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji2[1001510] ? item.obji2[1001510] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1001511] ? item.obji2[1001511] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji2[1001512] ? item.obji2[1001512] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1001513] ? item.obji2[1001513] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji2[1001514] ? item.obji2[1001514] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1001515] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji2[1001516] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji2[1001517] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001518] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001519] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001520] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001521] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001522] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001523] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001524] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji2[1001529] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji2[1001530] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1001531] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji2[1001532] ? item.obji2[1001532] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">6</td>
					<td colspan="3">&nbsp;@{{item.obji2[1001533] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji2[1001534] ? item.obji2[1001534] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1001535] ? item.obji2[1001535] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji2[1001536] ? item.obji2[1001536] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1001537] ? item.obji2[1001537] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji2[1001538] ? item.obji2[1001538] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1001539] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji2[1001540] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji2[1001541] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001542] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001543] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001544] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001545] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001546] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001547] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001548] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji2[1001553] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji2[1001554] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1001555] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji2[1001556] ? item.obji2[1001556] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">7</td>
					<td colspan="3">&nbsp;@{{item.obji2[1001557] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji2[1001558] ? item.obji2[1001558] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1001559] ? item.obji2[1001559] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji2[1001560] ? item.obji2[1001560] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1001561] ? item.obji2[1001561] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji2[1001562] ? item.obji2[1001562] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1001563] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji2[1001564] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji2[1001565] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001566] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001567] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001568] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001569] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001570] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001571] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001572] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji2[1001577] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji2[1001578] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1001579] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji2[1001580] ? item.obji2[1001580] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">8</td>
					<td colspan="3">&nbsp;@{{item.obji2[1001581] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji2[1001582] ? item.obji2[1001582] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1001583] ? item.obji2[1001583] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji2[1001584] ? item.obji2[1001584] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1001585] ? item.obji2[1001585] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji2[1001586] ? item.obji2[1001586] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1001587] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji2[1001588] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji2[1001589] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001590] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001591] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001592] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001593] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001594] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001595] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001596] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji2[1001601] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji2[1001602] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1001603] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji2[1001604] ? item.obji2[1001604] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">9</td>
					<td colspan="3">&nbsp;@{{item.obji2[1001605] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji2[1001606] ? item.obji2[1001606] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1001607] ? item.obji2[1001607] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji2[1001608] ? item.obji2[1001608] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1001609] ? item.obji2[1001609] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji2[1001610] ? item.obji2[1001610] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1001611] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji2[1001612] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji2[1001613] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001614] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001615] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001616] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001617] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001618] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001619] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001620] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji2[1001625] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji2[1001626] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1001627] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji2[1001628] ? item.obji2[1001628] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">10</td>
					<td colspan="3">&nbsp;@{{item.obji2[1001629] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji2[1001630] ? item.obji2[1001630] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1001631] ? item.obji2[1001631] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji2[1001632] ? item.obji2[1001632] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1001633] ? item.obji2[1001633] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji2[1001634] ? item.obji2[1001634] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1001635] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji2[1001636] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji2[1001637] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001638] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001639] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001640] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001641] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001642] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001643] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001644] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji2[1001649] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji2[1001650] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1001651] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji2[1001652] ? item.obji2[1001652] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">11</td>
					<td colspan="3">&nbsp;@{{item.obji2[1001653] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji2[1001654] ? item.obji2[1001654] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1001655] ? item.obji2[1001655] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji2[1001656] ? item.obji2[1001656] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1001657] ? item.obji2[1001657] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji2[1001658] ? item.obji2[1001658] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1001659] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji2[1001660] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji2[1001661] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001662] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001663] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001664] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001665] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001666] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001667] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001668] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji2[1001673] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji2[1001674] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1001675] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji2[1001676] ? item.obji2[1001676] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">12</td>
					<td colspan="3">&nbsp;@{{item.obji2[1001677] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji2[1001678] ? item.obji2[1001678] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1001679] ? item.obji2[1001679] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji2[1001680] ? item.obji2[1001680] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji2[1001681] ? item.obji2[1001681] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji2[1001682] ? item.obji2[1001682] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1001683] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji2[1001684] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji2[1001685] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001686] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001687] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001688] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001689] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001690] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001691] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji2[1001692] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji2[1001697] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji2[1001698] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji2[1001699] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji2[1001700] ? item.obji2[1001700] : '' }}</td>
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
					<th colspan="49" height="20pt">PEMBERIAN MAKAN AWAL DAN PENURUNAN CAIRAN IV PADA NEONATUS 1500-2000 GRAM DARI HARI PERAWATAN 1-12</th>
				</tr>
				<tr>
					<td colspan="15">&nbsp; BB : @{{ item.obji3[1001350] ? item.obji3[1001350] : '' }}</td>
					<td colspan="8">&nbsp; BB MASUK : @{{ item.obji3[1001351] ? item.obji3[1001351] : '' }}</td>
					<td colspan="26">&nbsp; % PERUBAHAN DARI BB LAHIR : @{{ item.obji3[1001412] ? item.obji3[1001412] : '' }}</td>
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
					<td colspan="5">20 cc/kg/hr</td>
					<td colspan="5">80 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">100 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 4 :</td>
					<td colspan="5">40 cc/kg/hr</td>
					<td colspan="5">80 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 5 :</td>
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 6 :</td>
					<td colspan="5">80 cc/kg/hr</td>
					<td colspan="5">40 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 7 :</td>
					<td colspan="5">100 cc/kg/hr</td>
					<td colspan="5">20 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 8 :</td>
					<td colspan="5">120 cc/kg/hr</td>
					<td colspan="5">10 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">130 cc/kg/hr</td>
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
					<td colspan="2"></td>
					<td colspan="3">A</td>
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
					<td colspan="3">&nbsp;@{{item.obji3[1001413] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji3[1001414] ? item.obji3[1001414] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1001415] ? item.obji3[1001415] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji3[1001416] ? item.obji3[1001416] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1001417] ? item.obji3[1001417] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji3[1001418] ? item.obji3[1001418] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1001419] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji3[1001420] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji3[1001421] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001422] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001423] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001424] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001425] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001426] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001427] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001428] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji3[1001433] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji3[1001434] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1001435] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji3[1001436] ? item.obji3[1001436] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">2</td>
					<td colspan="3">&nbsp;@{{item.obji3[1001437] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji3[1001438] ? item.obji3[1001438] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1001439] ? item.obji3[1001439] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji3[1001440] ? item.obji3[1001440] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1001441] ? item.obji3[1001441] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji3[1001442] ? item.obji3[1001442] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1001443] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji3[1001444] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji3[1001445] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001446] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001447] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001448] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001449] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001450] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001451] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001452] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji3[1001457] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji3[1001458] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1001459] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji3[1001460] ? item.obji3[1001460] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">3</td>
					<td colspan="3">&nbsp;@{{item.obji3[1001461] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji3[1001462] ? item.obji3[1001462] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1001463] ? item.obji3[1001463] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji3[1001464] ? item.obji3[1001464] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1001465] ? item.obji3[1001465] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji3[1001466] ? item.obji3[1001466] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1001467] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji3[1001468] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji3[1001469] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001470] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001471] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001472] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001473] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001474] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001475] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001476] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji3[1001481] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji3[1001482] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1001483] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji3[1001484] ? item.obji3[1001484] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">4</td>
					<td colspan="3">&nbsp;@{{item.obji3[1001485] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji3[1001486] ? item.obji3[1001486] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1001487] ? item.obji3[1001487] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji3[1001488] ? item.obji3[1001488] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1001489] ? item.obji3[1001489] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji3[1001490] ? item.obji3[1001490] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1001491] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji3[1001492] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji3[1001493] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001494] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001495] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001496] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001497] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001498] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001499] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001500] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji3[1001505] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji3[1001506] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1001507] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji3[1001508] ? item.obji3[1001508] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">5</td>
					<td colspan="3">&nbsp;@{{item.obji3[1001509] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji3[1001510] ? item.obji3[1001510] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1001511] ? item.obji3[1001511] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji3[1001512] ? item.obji3[1001512] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1001513] ? item.obji3[1001513] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji3[1001514] ? item.obji3[1001514] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1001515] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji3[1001516] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji3[1001517] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001518] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001519] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001520] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001521] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001522] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001523] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001524] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji3[1001529] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji3[1001530] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1001531] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji3[1001532] ? item.obji3[1001532] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">6</td>
					<td colspan="3">&nbsp;@{{item.obji3[1001533] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji3[1001534] ? item.obji3[1001534] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1001535] ? item.obji3[1001535] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji3[1001536] ? item.obji3[1001536] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1001537] ? item.obji3[1001537] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji3[1001538] ? item.obji3[1001538] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1001539] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji3[1001540] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji3[1001541] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001542] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001543] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001544] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001545] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001546] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001547] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001548] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji3[1001553] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji3[1001554] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1001555] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji3[1001556] ? item.obji3[1001556] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">7</td>
					<td colspan="3">&nbsp;@{{item.obji3[1001557] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji3[1001558] ? item.obji3[1001558] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1001559] ? item.obji3[1001559] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji3[1001560] ? item.obji3[1001560] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1001561] ? item.obji3[1001561] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji3[1001562] ? item.obji3[1001562] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1001563] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji3[1001564] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji3[1001565] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001566] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001567] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001568] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001569] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001570] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001571] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001572] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji3[1001577] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji3[1001578] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1001579] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji3[1001580] ? item.obji3[1001580] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">8</td>
					<td colspan="3">&nbsp;@{{item.obji3[1001581] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji3[1001582] ? item.obji3[1001582] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1001583] ? item.obji3[1001583] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji3[1001584] ? item.obji3[1001584] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1001585] ? item.obji3[1001585] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji3[1001586] ? item.obji3[1001586] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1001587] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji3[1001588] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji3[1001589] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001590] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001591] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001592] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001593] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001594] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001595] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001596] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji3[1001601] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji3[1001602] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1001603] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji3[1001604] ? item.obji3[1001604] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">9</td>
					<td colspan="3">&nbsp;@{{item.obji3[1001605] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji3[1001606] ? item.obji3[1001606] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1001607] ? item.obji3[1001607] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji3[1001608] ? item.obji3[1001608] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1001609] ? item.obji3[1001609] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji3[1001610] ? item.obji3[1001610] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1001611] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji3[1001612] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji3[1001613] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001614] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001615] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001616] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001617] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001618] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001619] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001620] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji3[1001625] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji3[1001626] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1001627] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji3[1001628] ? item.obji3[1001628] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">10</td>
					<td colspan="3">&nbsp;@{{item.obji3[1001629] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji3[1001630] ? item.obji3[1001630] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1001631] ? item.obji3[1001631] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji3[1001632] ? item.obji3[1001632] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1001633] ? item.obji3[1001633] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji3[1001634] ? item.obji3[1001634] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1001635] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji3[1001636] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji3[1001637] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001638] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001639] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001640] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001641] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001642] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001643] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001644] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji3[1001649] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji3[1001650] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1001651] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji3[1001652] ? item.obji3[1001652] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">11</td>
					<td colspan="3">&nbsp;@{{item.obji3[1001653] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji3[1001654] ? item.obji3[1001654] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1001655] ? item.obji3[1001655] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji3[1001656] ? item.obji3[1001656] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1001657] ? item.obji3[1001657] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji3[1001658] ? item.obji3[1001658] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1001659] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji3[1001660] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji3[1001661] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001662] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001663] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001664] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001665] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001666] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001667] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001668] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji3[1001673] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji3[1001674] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1001675] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji3[1001676] ? item.obji3[1001676] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">12</td>
					<td colspan="3">&nbsp;@{{item.obji3[1001677] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji3[1001678] ? item.obji3[1001678] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1001679] ? item.obji3[1001679] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji3[1001680] ? item.obji3[1001680] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji3[1001681] ? item.obji3[1001681] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji3[1001682] ? item.obji3[1001682] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1001683] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji3[1001684] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji3[1001685] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001686] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001687] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001688] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001689] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001690] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001691] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji3[1001692] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji3[1001697] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji3[1001698] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji3[1001699] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji3[1001700] ? item.obji3[1001700] : '' }}</td>
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
					<th colspan="49" height="20pt">PEMBERIAN MAKAN AWAL DAN PENURUNAN CAIRAN IV PADA NEONATUS 1500-2000 GRAM DARI HARI PERAWATAN 1-12</th>
				</tr>
				<tr>
					<td colspan="15">&nbsp; BB : @{{ item.obji4[1001350] ? item.obji4[1001350] : '' }}</td>
					<td colspan="8">&nbsp; BB MASUK : @{{ item.obji4[1001351] ? item.obji4[1001351] : '' }}</td>
					<td colspan="26">&nbsp; % PERUBAHAN DARI BB LAHIR : @{{ item.obji4[1001412] ? item.obji4[1001412] : '' }}</td>
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
					<td colspan="5">20 cc/kg/hr</td>
					<td colspan="5">80 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">100 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 4 :</td>
					<td colspan="5">40 cc/kg/hr</td>
					<td colspan="5">80 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 5 :</td>
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 6 :</td>
					<td colspan="5">80 cc/kg/hr</td>
					<td colspan="5">40 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 7 :</td>
					<td colspan="5">100 cc/kg/hr</td>
					<td colspan="5">20 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 8 :</td>
					<td colspan="5">120 cc/kg/hr</td>
					<td colspan="5">10 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">130 cc/kg/hr</td>
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
					<td colspan="2"></td>
					<td colspan="3">A</td>
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
					<td colspan="3">&nbsp;@{{item.obji4[1001413] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji4[1001414] ? item.obji4[1001414] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1001415] ? item.obji4[1001415] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji4[1001416] ? item.obji4[1001416] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1001417] ? item.obji4[1001417] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji4[1001418] ? item.obji4[1001418] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1001419] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji4[1001420] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji4[1001421] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001422] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001423] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001424] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001425] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001426] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001427] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001428] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji4[1001433] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji4[1001434] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1001435] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji4[1001436] ? item.obji4[1001436] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">2</td>
					<td colspan="3">&nbsp;@{{item.obji4[1001437] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji4[1001438] ? item.obji4[1001438] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1001439] ? item.obji4[1001439] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji4[1001440] ? item.obji4[1001440] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1001441] ? item.obji4[1001441] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji4[1001442] ? item.obji4[1001442] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1001443] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji4[1001444] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji4[1001445] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001446] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001447] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001448] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001449] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001450] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001451] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001452] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji4[1001457] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji4[1001458] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1001459] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji4[1001460] ? item.obji4[1001460] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">3</td>
					<td colspan="3">&nbsp;@{{item.obji4[1001461] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji4[1001462] ? item.obji4[1001462] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1001463] ? item.obji4[1001463] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji4[1001464] ? item.obji4[1001464] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1001465] ? item.obji4[1001465] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji4[1001466] ? item.obji4[1001466] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1001467] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji4[1001468] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji4[1001469] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001470] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001471] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001472] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001473] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001474] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001475] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001476] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji4[1001481] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji4[1001482] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1001483] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji4[1001484] ? item.obji4[1001484] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">4</td>
					<td colspan="3">&nbsp;@{{item.obji4[1001485] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji4[1001486] ? item.obji4[1001486] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1001487] ? item.obji4[1001487] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji4[1001488] ? item.obji4[1001488] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1001489] ? item.obji4[1001489] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji4[1001490] ? item.obji4[1001490] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1001491] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji4[1001492] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji4[1001493] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001494] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001495] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001496] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001497] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001498] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001499] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001500] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji4[1001505] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji4[1001506] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1001507] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji4[1001508] ? item.obji4[1001508] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">5</td>
					<td colspan="3">&nbsp;@{{item.obji4[1001509] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji4[1001510] ? item.obji4[1001510] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1001511] ? item.obji4[1001511] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji4[1001512] ? item.obji4[1001512] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1001513] ? item.obji4[1001513] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji4[1001514] ? item.obji4[1001514] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1001515] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji4[1001516] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji4[1001517] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001518] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001519] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001520] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001521] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001522] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001523] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001524] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji4[1001529] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji4[1001530] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1001531] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji4[1001532] ? item.obji4[1001532] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">6</td>
					<td colspan="3">&nbsp;@{{item.obji4[1001533] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji4[1001534] ? item.obji4[1001534] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1001535] ? item.obji4[1001535] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji4[1001536] ? item.obji4[1001536] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1001537] ? item.obji4[1001537] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji4[1001538] ? item.obji4[1001538] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1001539] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji4[1001540] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji4[1001541] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001542] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001543] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001544] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001545] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001546] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001547] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001548] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji4[1001553] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji4[1001554] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1001555] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji4[1001556] ? item.obji4[1001556] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">7</td>
					<td colspan="3">&nbsp;@{{item.obji4[1001557] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji4[1001558] ? item.obji4[1001558] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1001559] ? item.obji4[1001559] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji4[1001560] ? item.obji4[1001560] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1001561] ? item.obji4[1001561] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji4[1001562] ? item.obji4[1001562] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1001563] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji4[1001564] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji4[1001565] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001566] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001567] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001568] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001569] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001570] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001571] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001572] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji4[1001577] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji4[1001578] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1001579] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji4[1001580] ? item.obji4[1001580] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">8</td>
					<td colspan="3">&nbsp;@{{item.obji4[1001581] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji4[1001582] ? item.obji4[1001582] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1001583] ? item.obji4[1001583] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji4[1001584] ? item.obji4[1001584] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1001585] ? item.obji4[1001585] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji4[1001586] ? item.obji4[1001586] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1001587] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji4[1001588] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji4[1001589] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001590] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001591] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001592] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001593] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001594] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001595] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001596] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji4[1001601] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji4[1001602] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1001603] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji4[1001604] ? item.obji4[1001604] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">9</td>
					<td colspan="3">&nbsp;@{{item.obji4[1001605] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji4[1001606] ? item.obji4[1001606] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1001607] ? item.obji4[1001607] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji4[1001608] ? item.obji4[1001608] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1001609] ? item.obji4[1001609] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji4[1001610] ? item.obji4[1001610] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1001611] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji4[1001612] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji4[1001613] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001614] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001615] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001616] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001617] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001618] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001619] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001620] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji4[1001625] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji4[1001626] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1001627] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji4[1001628] ? item.obji4[1001628] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">10</td>
					<td colspan="3">&nbsp;@{{item.obji4[1001629] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji4[1001630] ? item.obji4[1001630] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1001631] ? item.obji4[1001631] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji4[1001632] ? item.obji4[1001632] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1001633] ? item.obji4[1001633] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji4[1001634] ? item.obji4[1001634] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1001635] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji4[1001636] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji4[1001637] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001638] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001639] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001640] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001641] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001642] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001643] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001644] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji4[1001649] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji4[1001650] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1001651] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji4[1001652] ? item.obji4[1001652] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">11</td>
					<td colspan="3">&nbsp;@{{item.obji4[1001653] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji4[1001654] ? item.obji4[1001654] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1001655] ? item.obji4[1001655] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji4[1001656] ? item.obji4[1001656] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1001657] ? item.obji4[1001657] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji4[1001658] ? item.obji4[1001658] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1001659] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji4[1001660] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji4[1001661] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001662] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001663] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001664] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001665] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001666] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001667] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001668] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji4[1001673] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji4[1001674] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1001675] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji4[1001676] ? item.obji4[1001676] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">12</td>
					<td colspan="3">&nbsp;@{{item.obji4[1001677] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji4[1001678] ? item.obji4[1001678] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1001679] ? item.obji4[1001679] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji4[1001680] ? item.obji4[1001680] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji4[1001681] ? item.obji4[1001681] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji4[1001682] ? item.obji4[1001682] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1001683] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji4[1001684] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji4[1001685] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001686] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001687] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001688] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001689] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001690] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001691] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji4[1001692] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji4[1001697] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji4[1001698] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji4[1001699] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji4[1001700] ? item.obji4[1001700] : '' }}</td>
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
					<th colspan="49" height="20pt">PEMBERIAN MAKAN AWAL DAN PENURUNAN CAIRAN IV PADA NEONATUS 1500-2000 GRAM DARI HARI PERAWATAN 1-12</th>
				</tr>
				<tr>
					<td colspan="15">&nbsp; BB : @{{ item.obji5[1001350] ? item.obji5[1001350] : '' }}</td>
					<td colspan="8">&nbsp; BB MASUK : @{{ item.obji5[1001351] ? item.obji5[1001351] : '' }}</td>
					<td colspan="26">&nbsp; % PERUBAHAN DARI BB LAHIR : @{{ item.obji5[1001412] ? item.obji5[1001412] : '' }}</td>
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
					<td colspan="5">20 cc/kg/hr</td>
					<td colspan="5">80 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">100 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 4 :</td>
					<td colspan="5">40 cc/kg/hr</td>
					<td colspan="5">80 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 5 :</td>
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 6 :</td>
					<td colspan="5">80 cc/kg/hr</td>
					<td colspan="5">40 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 7 :</td>
					<td colspan="5">100 cc/kg/hr</td>
					<td colspan="5">20 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 8 :</td>
					<td colspan="5">120 cc/kg/hr</td>
					<td colspan="5">10 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">130 cc/kg/hr</td>
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
					<td colspan="2"></td>
					<td colspan="3">A</td>
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
					<td colspan="3">&nbsp;@{{item.obji5[1001413] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji5[1001414] ? item.obji5[1001414] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1001415] ? item.obji5[1001415] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji5[1001416] ? item.obji5[1001416] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1001417] ? item.obji5[1001417] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji5[1001418] ? item.obji5[1001418] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1001419] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji5[1001420] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji5[1001421] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001422] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001423] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001424] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001425] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001426] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001427] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001428] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji5[1001433] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji5[1001434] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1001435] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji5[1001436] ? item.obji5[1001436] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">2</td>
					<td colspan="3">&nbsp;@{{item.obji5[1001437] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji5[1001438] ? item.obji5[1001438] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1001439] ? item.obji5[1001439] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji5[1001440] ? item.obji5[1001440] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1001441] ? item.obji5[1001441] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji5[1001442] ? item.obji5[1001442] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1001443] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji5[1001444] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji5[1001445] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001446] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001447] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001448] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001449] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001450] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001451] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001452] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji5[1001457] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji5[1001458] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1001459] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji5[1001460] ? item.obji5[1001460] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">3</td>
					<td colspan="3">&nbsp;@{{item.obji5[1001461] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji5[1001462] ? item.obji5[1001462] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1001463] ? item.obji5[1001463] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji5[1001464] ? item.obji5[1001464] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1001465] ? item.obji5[1001465] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji5[1001466] ? item.obji5[1001466] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1001467] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji5[1001468] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji5[1001469] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001470] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001471] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001472] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001473] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001474] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001475] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001476] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji5[1001481] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji5[1001482] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1001483] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji5[1001484] ? item.obji5[1001484] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">4</td>
					<td colspan="3">&nbsp;@{{item.obji5[1001485] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji5[1001486] ? item.obji5[1001486] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1001487] ? item.obji5[1001487] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji5[1001488] ? item.obji5[1001488] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1001489] ? item.obji5[1001489] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji5[1001490] ? item.obji5[1001490] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1001491] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji5[1001492] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji5[1001493] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001494] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001495] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001496] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001497] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001498] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001499] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001500] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji5[1001505] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji5[1001506] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1001507] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji5[1001508] ? item.obji5[1001508] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">5</td>
					<td colspan="3">&nbsp;@{{item.obji5[1001509] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji5[1001510] ? item.obji5[1001510] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1001511] ? item.obji5[1001511] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji5[1001512] ? item.obji5[1001512] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1001513] ? item.obji5[1001513] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji5[1001514] ? item.obji5[1001514] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1001515] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji5[1001516] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji5[1001517] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001518] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001519] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001520] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001521] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001522] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001523] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001524] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji5[1001529] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji5[1001530] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1001531] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji5[1001532] ? item.obji5[1001532] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">6</td>
					<td colspan="3">&nbsp;@{{item.obji5[1001533] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji5[1001534] ? item.obji5[1001534] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1001535] ? item.obji5[1001535] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji5[1001536] ? item.obji5[1001536] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1001537] ? item.obji5[1001537] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji5[1001538] ? item.obji5[1001538] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1001539] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji5[1001540] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji5[1001541] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001542] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001543] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001544] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001545] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001546] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001547] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001548] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji5[1001553] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji5[1001554] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1001555] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji5[1001556] ? item.obji5[1001556] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">7</td>
					<td colspan="3">&nbsp;@{{item.obji5[1001557] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji5[1001558] ? item.obji5[1001558] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1001559] ? item.obji5[1001559] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji5[1001560] ? item.obji5[1001560] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1001561] ? item.obji5[1001561] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji5[1001562] ? item.obji5[1001562] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1001563] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji5[1001564] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji5[1001565] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001566] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001567] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001568] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001569] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001570] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001571] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001572] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji5[1001577] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji5[1001578] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1001579] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji5[1001580] ? item.obji5[1001580] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">8</td>
					<td colspan="3">&nbsp;@{{item.obji5[1001581] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji5[1001582] ? item.obji5[1001582] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1001583] ? item.obji5[1001583] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji5[1001584] ? item.obji5[1001584] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1001585] ? item.obji5[1001585] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji5[1001586] ? item.obji5[1001586] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1001587] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji5[1001588] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji5[1001589] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001590] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001591] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001592] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001593] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001594] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001595] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001596] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji5[1001601] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji5[1001602] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1001603] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji5[1001604] ? item.obji5[1001604] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">9</td>
					<td colspan="3">&nbsp;@{{item.obji5[1001605] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji5[1001606] ? item.obji5[1001606] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1001607] ? item.obji5[1001607] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji5[1001608] ? item.obji5[1001608] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1001609] ? item.obji5[1001609] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji5[1001610] ? item.obji5[1001610] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1001611] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji5[1001612] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji5[1001613] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001614] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001615] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001616] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001617] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001618] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001619] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001620] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji5[1001625] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji5[1001626] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1001627] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji5[1001628] ? item.obji5[1001628] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">10</td>
					<td colspan="3">&nbsp;@{{item.obji5[1001629] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji5[1001630] ? item.obji5[1001630] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1001631] ? item.obji5[1001631] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji5[1001632] ? item.obji5[1001632] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1001633] ? item.obji5[1001633] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji5[1001634] ? item.obji5[1001634] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1001635] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji5[1001636] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji5[1001637] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001638] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001639] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001640] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001641] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001642] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001643] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001644] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji5[1001649] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji5[1001650] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1001651] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji5[1001652] ? item.obji5[1001652] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">11</td>
					<td colspan="3">&nbsp;@{{item.obji5[1001653] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji5[1001654] ? item.obji5[1001654] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1001655] ? item.obji5[1001655] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji5[1001656] ? item.obji5[1001656] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1001657] ? item.obji5[1001657] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji5[1001658] ? item.obji5[1001658] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1001659] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji5[1001660] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji5[1001661] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001662] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001663] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001664] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001665] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001666] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001667] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001668] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji5[1001673] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji5[1001674] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1001675] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji5[1001676] ? item.obji5[1001676] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">12</td>
					<td colspan="3">&nbsp;@{{item.obji5[1001677] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji5[1001678] ? item.obji5[1001678] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1001679] ? item.obji5[1001679] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji5[1001680] ? item.obji5[1001680] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji5[1001681] ? item.obji5[1001681] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji5[1001682] ? item.obji5[1001682] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1001683] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji5[1001684] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji5[1001685] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001686] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001687] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001688] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001689] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001690] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001691] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji5[1001692] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji5[1001697] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji5[1001698] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji5[1001699] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji5[1001700] ? item.obji5[1001700] : '' }}</td>
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
					<th colspan="49" height="20pt">PEMBERIAN MAKAN AWAL DAN PENURUNAN CAIRAN IV PADA NEONATUS 1500-2000 GRAM DARI HARI PERAWATAN 1-12</th>
				</tr>
				<tr>
					<td colspan="15">&nbsp; BB : @{{ item.obji6[1001350] ? item.obji6[1001350] : '' }}</td>
					<td colspan="8">&nbsp; BB MASUK : @{{ item.obji6[1001351] ? item.obji6[1001351] : '' }}</td>
					<td colspan="26">&nbsp; % PERUBAHAN DARI BB LAHIR : @{{ item.obji6[1001412] ? item.obji6[1001412] : '' }}</td>
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
					<td colspan="5">20 cc/kg/hr</td>
					<td colspan="5">80 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">100 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 4 :</td>
					<td colspan="5">40 cc/kg/hr</td>
					<td colspan="5">80 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 5 :</td>
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 6 :</td>
					<td colspan="5">80 cc/kg/hr</td>
					<td colspan="5">40 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 7 :</td>
					<td colspan="5">100 cc/kg/hr</td>
					<td colspan="5">20 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 8 :</td>
					<td colspan="5">120 cc/kg/hr</td>
					<td colspan="5">10 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">130 cc/kg/hr</td>
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
					<td colspan="2"></td>
					<td colspan="3">A</td>
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
					<td colspan="3">&nbsp;@{{item.obji6[1001413] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji6[1001414] ? item.obji6[1001414] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1001415] ? item.obji6[1001415] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji6[1001416] ? item.obji6[1001416] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1001417] ? item.obji6[1001417] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji6[1001418] ? item.obji6[1001418] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1001419] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji6[1001420] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji6[1001421] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001422] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001423] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001424] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001425] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001426] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001427] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001428] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji6[1001433] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji6[1001434] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1001435] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji6[1001436] ? item.obji6[1001436] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">2</td>
					<td colspan="3">&nbsp;@{{item.obji6[1001437] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji6[1001438] ? item.obji6[1001438] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1001439] ? item.obji6[1001439] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji6[1001440] ? item.obji6[1001440] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1001441] ? item.obji6[1001441] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji6[1001442] ? item.obji6[1001442] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1001443] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji6[1001444] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji6[1001445] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001446] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001447] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001448] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001449] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001450] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001451] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001452] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji6[1001457] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji6[1001458] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1001459] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji6[1001460] ? item.obji6[1001460] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">3</td>
					<td colspan="3">&nbsp;@{{item.obji6[1001461] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji6[1001462] ? item.obji6[1001462] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1001463] ? item.obji6[1001463] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji6[1001464] ? item.obji6[1001464] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1001465] ? item.obji6[1001465] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji6[1001466] ? item.obji6[1001466] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1001467] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji6[1001468] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji6[1001469] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001470] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001471] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001472] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001473] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001474] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001475] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001476] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji6[1001481] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji6[1001482] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1001483] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji6[1001484] ? item.obji6[1001484] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">4</td>
					<td colspan="3">&nbsp;@{{item.obji6[1001485] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji6[1001486] ? item.obji6[1001486] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1001487] ? item.obji6[1001487] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji6[1001488] ? item.obji6[1001488] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1001489] ? item.obji6[1001489] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji6[1001490] ? item.obji6[1001490] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1001491] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji6[1001492] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji6[1001493] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001494] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001495] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001496] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001497] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001498] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001499] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001500] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji6[1001505] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji6[1001506] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1001507] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji6[1001508] ? item.obji6[1001508] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">5</td>
					<td colspan="3">&nbsp;@{{item.obji6[1001509] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji6[1001510] ? item.obji6[1001510] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1001511] ? item.obji6[1001511] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji6[1001512] ? item.obji6[1001512] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1001513] ? item.obji6[1001513] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji6[1001514] ? item.obji6[1001514] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1001515] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji6[1001516] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji6[1001517] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001518] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001519] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001520] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001521] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001522] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001523] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001524] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji6[1001529] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji6[1001530] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1001531] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji6[1001532] ? item.obji6[1001532] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">6</td>
					<td colspan="3">&nbsp;@{{item.obji6[1001533] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji6[1001534] ? item.obji6[1001534] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1001535] ? item.obji6[1001535] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji6[1001536] ? item.obji6[1001536] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1001537] ? item.obji6[1001537] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji6[1001538] ? item.obji6[1001538] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1001539] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji6[1001540] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji6[1001541] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001542] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001543] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001544] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001545] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001546] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001547] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001548] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji6[1001553] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji6[1001554] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1001555] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji6[1001556] ? item.obji6[1001556] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">7</td>
					<td colspan="3">&nbsp;@{{item.obji6[1001557] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji6[1001558] ? item.obji6[1001558] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1001559] ? item.obji6[1001559] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji6[1001560] ? item.obji6[1001560] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1001561] ? item.obji6[1001561] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji6[1001562] ? item.obji6[1001562] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1001563] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji6[1001564] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji6[1001565] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001566] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001567] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001568] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001569] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001570] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001571] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001572] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji6[1001577] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji6[1001578] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1001579] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji6[1001580] ? item.obji6[1001580] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">8</td>
					<td colspan="3">&nbsp;@{{item.obji6[1001581] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji6[1001582] ? item.obji6[1001582] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1001583] ? item.obji6[1001583] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji6[1001584] ? item.obji6[1001584] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1001585] ? item.obji6[1001585] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji6[1001586] ? item.obji6[1001586] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1001587] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji6[1001588] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji6[1001589] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001590] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001591] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001592] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001593] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001594] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001595] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001596] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji6[1001601] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji6[1001602] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1001603] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji6[1001604] ? item.obji6[1001604] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">9</td>
					<td colspan="3">&nbsp;@{{item.obji6[1001605] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji6[1001606] ? item.obji6[1001606] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1001607] ? item.obji6[1001607] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji6[1001608] ? item.obji6[1001608] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1001609] ? item.obji6[1001609] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji6[1001610] ? item.obji6[1001610] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1001611] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji6[1001612] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji6[1001613] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001614] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001615] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001616] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001617] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001618] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001619] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001620] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji6[1001625] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji6[1001626] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1001627] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji6[1001628] ? item.obji6[1001628] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">10</td>
					<td colspan="3">&nbsp;@{{item.obji6[1001629] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji6[1001630] ? item.obji6[1001630] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1001631] ? item.obji6[1001631] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji6[1001632] ? item.obji6[1001632] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1001633] ? item.obji6[1001633] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji6[1001634] ? item.obji6[1001634] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1001635] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji6[1001636] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji6[1001637] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001638] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001639] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001640] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001641] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001642] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001643] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001644] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji6[1001649] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji6[1001650] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1001651] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji6[1001652] ? item.obji6[1001652] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">11</td>
					<td colspan="3">&nbsp;@{{item.obji6[1001653] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji6[1001654] ? item.obji6[1001654] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1001655] ? item.obji6[1001655] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji6[1001656] ? item.obji6[1001656] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1001657] ? item.obji6[1001657] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji6[1001658] ? item.obji6[1001658] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1001659] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji6[1001660] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji6[1001661] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001662] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001663] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001664] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001665] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001666] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001667] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001668] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji6[1001673] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji6[1001674] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1001675] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji6[1001676] ? item.obji6[1001676] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">12</td>
					<td colspan="3">&nbsp;@{{item.obji6[1001677] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji6[1001678] ? item.obji6[1001678] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1001679] ? item.obji6[1001679] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji6[1001680] ? item.obji6[1001680] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji6[1001681] ? item.obji6[1001681] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji6[1001682] ? item.obji6[1001682] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1001683] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji6[1001684] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji6[1001685] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001686] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001687] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001688] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001689] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001690] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001691] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji6[1001692] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji6[1001697] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji6[1001698] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji6[1001699] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji6[1001700] ? item.obji6[1001700] : '' }}</td>
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
					<th colspan="49" height="20pt">PEMBERIAN MAKAN AWAL DAN PENURUNAN CAIRAN IV PADA NEONATUS 1500-2000 GRAM DARI HARI PERAWATAN 1-12</th>
				</tr>
				<tr>
					<td colspan="15">&nbsp; BB : @{{ item.obji7[1001350] ? item.obji7[1001350] : '' }}</td>
					<td colspan="8">&nbsp; BB MASUK : @{{ item.obji7[1001351] ? item.obji7[1001351] : '' }}</td>
					<td colspan="26">&nbsp; % PERUBAHAN DARI BB LAHIR : @{{ item.obji7[1001412] ? item.obji7[1001412] : '' }}</td>
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
					<td colspan="5">20 cc/kg/hr</td>
					<td colspan="5">80 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">100 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 4 :</td>
					<td colspan="5">40 cc/kg/hr</td>
					<td colspan="5">80 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 5 :</td>
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">60 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 6 :</td>
					<td colspan="5">80 cc/kg/hr</td>
					<td colspan="5">40 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 7 :</td>
					<td colspan="5">100 cc/kg/hr</td>
					<td colspan="5">20 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">120 cc/kg/hr</td>
				</tr>
				<tr class="text-center">
					<td colspan="3">HARI 8 :</td>
					<td colspan="5">120 cc/kg/hr</td>
					<td colspan="5">10 cc/kg/hr</td>
					<td colspan="5">D10 1/5 NS</td>
					<td colspan="5">130 cc/kg/hr</td>
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
					<td colspan="2"></td>
					<td colspan="3">A</td>
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
					<td colspan="3">&nbsp;@{{item.obji7[1001413] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji7[1001414] ? item.obji7[1001414] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1001415] ? item.obji7[1001415] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji7[1001416] ? item.obji7[1001416] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1001417] ? item.obji7[1001417] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji7[1001418] ? item.obji7[1001418] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1001419] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji7[1001420] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji7[1001421] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001422] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001423] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001424] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001425] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001426] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001427] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001428] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji7[1001433] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji7[1001434] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1001435] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji7[1001436] ? item.obji7[1001436] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">2</td>
					<td colspan="3">&nbsp;@{{item.obji7[1001437] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji7[1001438] ? item.obji7[1001438] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1001439] ? item.obji7[1001439] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji7[1001440] ? item.obji7[1001440] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1001441] ? item.obji7[1001441] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji7[1001442] ? item.obji7[1001442] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1001443] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji7[1001444] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji7[1001445] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001446] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001447] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001448] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001449] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001450] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001451] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001452] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji7[1001457] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji7[1001458] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1001459] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji7[1001460] ? item.obji7[1001460] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">3</td>
					<td colspan="3">&nbsp;@{{item.obji7[1001461] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji7[1001462] ? item.obji7[1001462] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1001463] ? item.obji7[1001463] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji7[1001464] ? item.obji7[1001464] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1001465] ? item.obji7[1001465] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji7[1001466] ? item.obji7[1001466] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1001467] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji7[1001468] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji7[1001469] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001470] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001471] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001472] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001473] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001474] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001475] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001476] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji7[1001481] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji7[1001482] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1001483] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji7[1001484] ? item.obji7[1001484] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">4</td>
					<td colspan="3">&nbsp;@{{item.obji7[1001485] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji7[1001486] ? item.obji7[1001486] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1001487] ? item.obji7[1001487] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji7[1001488] ? item.obji7[1001488] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1001489] ? item.obji7[1001489] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji7[1001490] ? item.obji7[1001490] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1001491] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji7[1001492] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji7[1001493] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001494] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001495] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001496] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001497] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001498] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001499] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001500] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji7[1001505] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji7[1001506] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1001507] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji7[1001508] ? item.obji7[1001508] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">5</td>
					<td colspan="3">&nbsp;@{{item.obji7[1001509] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji7[1001510] ? item.obji7[1001510] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1001511] ? item.obji7[1001511] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji7[1001512] ? item.obji7[1001512] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1001513] ? item.obji7[1001513] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji7[1001514] ? item.obji7[1001514] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1001515] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji7[1001516] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji7[1001517] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001518] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001519] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001520] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001521] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001522] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001523] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001524] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji7[1001529] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji7[1001530] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1001531] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji7[1001532] ? item.obji7[1001532] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">6</td>
					<td colspan="3">&nbsp;@{{item.obji7[1001533] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji7[1001534] ? item.obji7[1001534] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1001535] ? item.obji7[1001535] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji7[1001536] ? item.obji7[1001536] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1001537] ? item.obji7[1001537] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji7[1001538] ? item.obji7[1001538] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1001539] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji7[1001540] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji7[1001541] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001542] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001543] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001544] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001545] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001546] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001547] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001548] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji7[1001553] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji7[1001554] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1001555] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji7[1001556] ? item.obji7[1001556] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">7</td>
					<td colspan="3">&nbsp;@{{item.obji7[1001557] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji7[1001558] ? item.obji7[1001558] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1001559] ? item.obji7[1001559] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji7[1001560] ? item.obji7[1001560] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1001561] ? item.obji7[1001561] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji7[1001562] ? item.obji7[1001562] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1001563] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji7[1001564] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji7[1001565] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001566] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001567] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001568] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001569] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001570] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001571] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001572] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji7[1001577] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji7[1001578] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1001579] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji7[1001580] ? item.obji7[1001580] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">8</td>
					<td colspan="3">&nbsp;@{{item.obji7[1001581] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji7[1001582] ? item.obji7[1001582] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1001583] ? item.obji7[1001583] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji7[1001584] ? item.obji7[1001584] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1001585] ? item.obji7[1001585] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji7[1001586] ? item.obji7[1001586] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1001587] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji7[1001588] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji7[1001589] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001590] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001591] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001592] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001593] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001594] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001595] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001596] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji7[1001601] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji7[1001602] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1001603] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji7[1001604] ? item.obji7[1001604] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">9</td>
					<td colspan="3">&nbsp;@{{item.obji7[1001605] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji7[1001606] ? item.obji7[1001606] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1001607] ? item.obji7[1001607] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji7[1001608] ? item.obji7[1001608] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1001609] ? item.obji7[1001609] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji7[1001610] ? item.obji7[1001610] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1001611] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji7[1001612] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji7[1001613] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001614] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001615] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001616] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001617] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001618] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001619] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001620] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji7[1001625] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji7[1001626] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1001627] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji7[1001628] ? item.obji7[1001628] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">10</td>
					<td colspan="3">&nbsp;@{{item.obji7[1001629] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji7[1001630] ? item.obji7[1001630] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1001631] ? item.obji7[1001631] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji7[1001632] ? item.obji7[1001632] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1001633] ? item.obji7[1001633] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji7[1001634] ? item.obji7[1001634] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1001635] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji7[1001636] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji7[1001637] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001638] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001639] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001640] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001641] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001642] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001643] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001644] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji7[1001649] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji7[1001650] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1001651] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji7[1001652] ? item.obji7[1001652] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">11</td>
					<td colspan="3">&nbsp;@{{item.obji7[1001653] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji7[1001654] ? item.obji7[1001654] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1001655] ? item.obji7[1001655] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji7[1001656] ? item.obji7[1001656] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1001657] ? item.obji7[1001657] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji7[1001658] ? item.obji7[1001658] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1001659] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji7[1001660] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji7[1001661] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001662] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001663] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001664] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001665] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001666] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001667] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001668] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji7[1001673] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji7[1001674] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1001675] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji7[1001676] ? item.obji7[1001676] : '' }}</td>
				</tr>
				<tr>
					<td colspan="3" class="text-center">12</td>
					<td colspan="3">&nbsp;@{{item.obji7[1001677] | toDate | date:'dd MMMM yyyy'}}</td>
					<td colspan="2">&nbsp;@{{ item.obji7[1001678] ? item.obji7[1001678] : '' }}</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1001679] ? item.obji7[1001679] : '' }}</td>
					<td colspan="2" class="noborder btm">&nbsp;@{{ item.obji7[1001680] ? item.obji7[1001680] : '' }}</td>
					<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
					<td colspan="3">&nbsp;@{{ item.obji7[1001681] ? item.obji7[1001681] : '' }}</td>
					<td colspan="2" class="noborder btm"></td>
					<td class="noborder br btm" style="text-align: right;">@{{ item.obji7[1001682] ? item.obji7[1001682] : '' }} cc&nbsp;</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1001683] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
					<td colspan="2" class="noborder text-center btm">@{{ item.obji7[1001684] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
					<td colspan="" class="text-center blf noborder btm">@{{ item.obji7[1001685] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001686] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001687] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001688] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001689] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001690] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001691] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
					<td colspan="" class="text-center noborder btm">@{{ item.obji7[1001692] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
					<td colspan="2" class="text-center noborder blf btm">@{{ item.obji7[1001697] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dis</td>
					<td colspan="3" class="text-center noborder btm">@{{ item.obji7[1001698] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} M - emp su</td>
					<td colspan="2" class="text-center noborder btm">@{{ item.obji7[1001699] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} D</td>
					<td colspan="9" class="text-center">@{{ item.obji7[1001700] ? item.obji7[1001700] : '' }}</td>
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

    angular.controller('cetakPemberianMakanAwal1500', function ($scope, $http, httpService) {
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