<!DOCTYPE html>
<html lang="en" ng-app="angularApp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemberian Makan Awal 1000 - 1500 gram</title>

    <style>
       
        html,body{
            font-family: DejaVu Sans, Arial, Helvetica, sans-serif;
        }
        @page{
			size: auto;
            size: A4 Landscape;
        }
        table{ 
            page-break-inside:auto 
      
            -fs-table-paginate: paginate;
			border:1px solid #000;
            border-collapse:collapse;
            table-layout:fixed;
        }
        tr{ 
            page-break-inside:avoid; 
            page-break-after:auto 
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
		
    </style>
</head>
<body ng-controller="cetakPemberianMakanAwal1000">
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
                : {!! $res['d'][0]->nocm  !!}
            </td>
            <td colspan="5" rowspan="2" class="border-lr bg-dark" style="font-size: 36px;text-align:center">RM</td>
        </tr>
        <tr class="noborder">
            <td colspan="6" class="noborder" style="font-size: 10pt">Nama Lengkap</td>
            <td colspan="11" class="noborder" style="font-size: 10pt">
                : {!!  $res['d'][0]->namapasien  !!}
            </td>
            <td colspan="2" class="noborder" style="font-size: 10pt">{!!  $res['d'][0]->jeniskelamin == 'PEREMPUAN' ? '(P)' : '(L)'  !!}</td>
        </tr>
        <tr class="noborder">
            <td colspan="6" class="noborder" style="font-size: 10pt">Tanggal Lahir</td>
            <td colspan="13" class="noborder" style="font-size: 10pt">
                : {!! date('d-m-Y',strtotime( $res['d'][0]->tgllahir  )) !!}
            </td>
            <td colspan="5" class="border-lr" rowspan="2" style="font-size: 36px;text-align:center">69</td>
        </tr>
        <tr class="noborder">
            <td colspan="6" class="noborder" style="font-size: 10pt">NIK</td>
            <td colspan="11" class="noborder" style="font-size: 10pt">
                : {!! $res['d'][0]->noidentitas  !!}
            </td>
        </tr>
        <tr class="bordered bg-dark-small">
            <th colspan="49" height="20pt">PEMBERIAN MAKAN AWAL DAN PENURUNAN CAIRAN IV PADA NEONATUS 1000-1500 GRAM  DARI HARI PERAWATAN 1-12</th>
        </tr>
		<tr>
			<td colspan="15">&nbsp; BB : @{{ item.obj[1000951] ? item.obj[1000951] : '' }}</td>
			<td colspan="8">&nbsp; BB MASUK : @{{ item.obj[1000950] ? item.obj[1000950] : '' }}</td>
			<td colspan="26">&nbsp; % PERUBAHAN DARI BB LAHIR : @{{ item.obj[1001012] ? item.obj[1001012] : '' }}</td>
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
			<td colspan="5">100 cc/kg/hr</td>
			<td colspan="5">D10 1/5 NS</td>
			<td colspan="5">120 cc/kg/hr</td>
		</tr>
		<tr class="text-center">
			<td colspan="3">HARI 4 :</td>
			<td colspan="5">30 cc/kg/hr</td>
			<td colspan="5">110 cc/kg/hr</td>
			<td colspan="5">D10 1/5 NS</td>
			<td colspan="5">140 cc/kg/hr</td>
		</tr>
		<tr class="text-center">
			<td colspan="3">HARI 5 :</td>
			<td colspan="5">40 cc/kg/hr</td>
			<td colspan="5">100 cc/kg/hr</td>
			<td colspan="5">D10 1/5 NS</td>
			<td colspan="5">140 cc/kg/hr</td>
		</tr>
		<tr class="text-center">
			<td colspan="3">HARI 6 :</td>
			<td colspan="5">50 cc/kg/hr</td>
			<td colspan="5">90 cc/kg/hr</td>
			<td colspan="5">D10 1/5 NS</td>
			<td colspan="5">140 cc/kg/hr</td>
		</tr>
		<tr class="text-center">
			<td colspan="3">HARI 7 :</td>
			<td colspan="5">70 cc/kg/hr</td>
			<td colspan="5">80 cc/kg/hr</td>
			<td colspan="5">D10 1/5 NS</td>
			<td colspan="5">150 cc/kg/hr</td>
		</tr>
		<tr class="text-center">
			<td colspan="3">HARI 8 :</td>
			<td colspan="5">90 cc/kg/hr</td>
			<td colspan="5">60 cc/kg/hr</td>
			<td colspan="5">D10 1/5 NS</td>
			<td colspan="5">150 cc/kg/hr</td>
		</tr>
		<tr class="text-center">
			<td colspan="3">HARI 9 :</td>
			<td colspan="5">110 cc/kg/hr</td>
			<td colspan="5">40 cc/kg/hr</td>
			<td colspan="5">D10 1/5 NS</td>
			<td colspan="5">150 cc/kg/hr</td>
		</tr>
		<tr class="text-center">
			<td colspan="3">HARI 10 :</td>
			<td colspan="5">130 cc/kg/hr</td>
			<td colspan="5">20 cc/kg/hr</td>
			<td colspan="5">D10 1/5 NS</td>
			<td colspan="5">150 cc/kg/hr</td>
		</tr>
		<tr class="text-center">
			<td colspan="3">HARI 11 :</td>
			<td colspan="5">150 cc/kg/hr</td>
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
			<td colspan="12"></td>
			<td colspan="5"></td>
			<td colspan="7"></td>
		</tr>
		<tr class="text-center">
			<td colspan="3">Tgl hari ini (d/m/y)</td>
			<td colspan="2">Berat Badan (kg)</td>
			<td colspan="3">Volume minum per hari (co/kg/hr)</td>
			<td colspan="4">Volume minum setiap 2 jam (A*B)/12</td>
			<td colspan="3">Volum cairan IV perhari (co/kg/hr)</td>
			<td colspan="3">Volume Cairan per jam (A*B)/12</td>
			<td colspan="4">Jenis Minuman (ASI atau Formula)</td>
			<td colspan="12">MINUMAN DIBERIKAN PERHARI <br> (lingkari setiap minum diberikan)</td>
			<td colspan="5">Tanda Intoleransi (Dsitensi: <br />Muntahan empedu atau susu: feces berdarah)</td>
			<td colspan="7">Komentar</td>
		</tr>
		<tr>
			<td colspan="3" class="text-center">Hari 1</td>
			<td colspan="3">&nbsp;@{{item.obj[1001013] | toDate | date:'dd MMMM yyyy'}}</td>
			<td colspan="2">&nbsp;@{{ item.obj[1001014] ? item.obj[1001014] : '' }}</td>
			<td colspan="3">&nbsp;@{{ item.obj[1001015] ? item.obj[1001015] : '' }}</td>
			<td colspan="2" class="noborder btm btp">&nbsp;@{{ item.obj[1001016] ? item.obj[1001016] : '' }}</td>
			<td colspan="2" class="noborder btm btp" style="text-align: right;">cc&nbsp;</td>
			<td colspan="3">&nbsp;@{{ item.obj[1001017] ? item.obj[1001017] : '' }}</td>
			<td colspan="2" class="noborder btm btp"></td>
			<td class="noborder br btm btp" style="text-align: right;">@{{ item.obj[1001018] ? item.obj[1001018] : '' }} cc&nbsp;</td>
			<td colspan="2" class="text-center noborder btm btp">@{{ item.obj[1001019] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
			<td colspan="2" class="noborder text-center btm btp">@{{ item.obj[1001020] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
			<td colspan="" class="text-center blf noborder btm btp">@{{ item.obj[1001021] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
			<td colspan="" class="text-center noborder btm btp">@{{ item.obj[1001022] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
			<td colspan="" class="text-center noborder btm btp">@{{ item.obj[1001023] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
			<td colspan="" class="text-center noborder btm btp">@{{ item.obj[1001024] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
			<td colspan="" class="text-center noborder btm btp">@{{ item.obj[1001025] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
			<td colspan="" class="text-center noborder btm btp">@{{ item.obj[1001026] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
			<td colspan="" class="text-center noborder btm btp">@{{ item.obj[1001027] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
			<td colspan="" class="text-center noborder btm btp">@{{ item.obj[1001028] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
			<td colspan="" class="text-center noborder btm btp">@{{ item.obj[1001029] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 9</td>
			<td colspan="" class="text-center noborder btm btp">@{{ item.obj[1001030] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}10</td>
			<td colspan="" class="text-center noborder btm btp">@{{ item.obj[1001031] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}11</td>
			<td colspan="" class="text-center noborder btm btp">@{{ item.obj[1001032] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}12</td>
			<td colspan="" class="text-center noborder blf btm btp">@{{ item.obj[1001032] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}Dis</td>
			<td colspan="3" class="text-center noborder btm btp">@{{ item.obj[1001033] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}M - emp su</td>
			<td colspan="" class="text-center noborder btm btp">@{{ item.obj[1001035] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}D</td>
			<td colspan="7" class="text-center">@{{ item.obj[1001036] ? item.obj[1001036] : '' }}</td>
		</tr>
		<tr>
			<td colspan="3" class="text-center">2</td>
			<td colspan="3">&nbsp;@{{item.obj[1001037] | toDate | date:'dd MMMM yyyy'}}</td>
			<td colspan="2">&nbsp;@{{ item.obj[1001038] ? item.obj[1001038] : '' }}</td>
			<td colspan="3">&nbsp;@{{ item.obj[1001039] ? item.obj[1001039] : '' }}</td>
			<td colspan="2" class="noborder btm">&nbsp;@{{ item.obj[1001040] ? item.obj[1001040] : '' }}</td>
			<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
			<td colspan="3">&nbsp;@{{ item.obj[1001041] ? item.obj[1001041] : '' }}</td>
			<td colspan="2" class="noborder btm"></td>
			<td class="noborder br btm" style="text-align: right;">@{{ item.obj[1001042] ? item.obj[1001042] : '' }} cc&nbsp;</td>
			<td colspan="2" class="text-center noborder btm btp">@{{ item.obj[1001043] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
			<td colspan="2" class="noborder text-center btm btp">@{{ item.obj[1001044] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
			<td colspan="" class="text-center blf noborder btm">@{{ item.obj[1001045] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001046] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001047] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001048] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001049] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001050] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001051] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001052] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001053] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 9</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001054] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}10</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001055] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}11</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001056] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}12</td>
			<td colspan="" class="text-center noborder blf btm">@{{ item.obj[1001057] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}Dis</td>
			<td colspan="3" class="text-center noborder btm">@{{ item.obj[1001058] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}M - emp su</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001059] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}D</td>
			<td colspan="7" class="text-center">@{{ item.obj[1001060] ? item.obj[1001060] : '' }}</td>
		</tr>
		<tr>
			<td colspan="3" class="text-center">3</td>
			<td colspan="3">&nbsp;@{{item.obj[1001061] | toDate | date:'dd MMMM yyyy'}}</td>
			<td colspan="2">&nbsp;@{{ item.obj[1001062] ? item.obj[1001062] : '' }}</td>
			<td colspan="3">&nbsp;@{{ item.obj[1001063] ? item.obj[1001063] : '' }}</td>
			<td colspan="2" class="noborder btm">&nbsp;@{{ item.obj[1001064] ? item.obj[1001064] : '' }}</td>
			<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
			<td colspan="3">&nbsp;@{{ item.obj[1001065] ? item.obj[1001065] : '' }}</td>
			<td colspan="2" class="noborder btm"></td>
			<td class="noborder br btm" style="text-align: right;">@{{ item.obj[1001066] ? item.obj[1001066] : '' }} cc&nbsp;</td>
			<td colspan="2" class="text-center noborder btm">@{{ item.obj[1001067] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
			<td colspan="2" class="noborder text-center btm">@{{ item.obj[1001068] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
			<td colspan="" class="text-center blf noborder btm">@{{ item.obj[1001069] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001070] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001071] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001072] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001073] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001074] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001075] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001076] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001077] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 9</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001078] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}10</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001079] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}11</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001080] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}12</td>
			<td colspan="" class="text-center noborder blf btm">@{{ item.obj[1001081] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}Dis</td>
			<td colspan="3" class="text-center noborder btm">@{{ item.obj[1001082] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}M - emp su</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001083] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}D</td>
			<td colspan="7" class="text-center">@{{ item.obj[1001084] ? item.obj[1001084] : '' }}</td>
		</tr>
		<tr>
			<td colspan="3" class="text-center">4</td>
			<td colspan="3">&nbsp;@{{item.obj[1001085] | toDate | date:'dd MMMM yyyy'}}</td>
			<td colspan="2">&nbsp;@{{ item.obj[1001086] ? item.obj[1001086] : '' }}</td>
			<td colspan="3">&nbsp;@{{ item.obj[1001087] ? item.obj[1001087] : '' }}</td>
			<td colspan="2" class="noborder btm">&nbsp;@{{ item.obj[1001088] ? item.obj[1001088] : '' }}</td>
			<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
			<td colspan="3">&nbsp;@{{ item.obj[1001089] ? item.obj[1001089] : '' }}</td>
			<td colspan="2" class="noborder btm"></td>
			<td class="noborder br btm" style="text-align: right;">@{{ item.obj[1001090] ? item.obj[1001090] : '' }} cc&nbsp;</td>
			<td colspan="2" class="text-center noborder btm">@{{ item.obj[1001091] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
			<td colspan="2" class="noborder text-center btm">@{{ item.obj[1001092] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
			<td colspan="" class="text-center blf noborder btm">@{{ item.obj[1001093] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001094] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001095] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001096] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001097] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001098] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001099] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001100] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001101] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 9</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001102] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}10</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001103] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}11</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001104] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}12</td>
			<td colspan="" class="text-center noborder blf btm">@{{ item.obj[1001105] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}Dis</td>
			<td colspan="3" class="text-center noborder btm">@{{ item.obj[1001106] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}M - emp su</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001107] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}D</td>
			<td colspan="7" class="text-center">@{{ item.obj[1001108] ? item.obj[1001108] : '' }}</td>
		</tr>
		<tr>
			<td colspan="3" class="text-center">5</td>
			<td colspan="3">&nbsp;@{{item.obj[1001109] | toDate | date:'dd MMMM yyyy'}}</td>
			<td colspan="2">&nbsp;@{{ item.obj[1001110] ? item.obj[1001110] : '' }}</td>
			<td colspan="3">&nbsp;@{{ item.obj[1001111] ? item.obj[1001111] : '' }}</td>
			<td colspan="2" class="noborder btm">&nbsp;@{{ item.obj[1001112] ? item.obj[1001112] : '' }}</td>
			<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
			<td colspan="3">&nbsp;@{{ item.obj[1001113] ? item.obj[1001113] : '' }}</td>
			<td colspan="2" class="noborder btm"></td>
			<td class="noborder br btm" style="text-align: right;">@{{ item.obj[1001114] ? item.obj[1001114] : '' }} cc&nbsp;</td>
			<td colspan="2" class="text-center noborder btm">@{{ item.obj[1001115] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
			<td colspan="2" class="noborder text-center btm">@{{ item.obj[1001116] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
			<td colspan="" class="text-center blf noborder btm">@{{ item.obj[1001117] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001118] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001119] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001120] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001121] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001122] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001123] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001124] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001125] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 9</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001126] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}10</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001127] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}11</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001128] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}12</td>
			<td colspan="" class="text-center noborder blf btm">@{{ item.obj[1001129] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}Dis</td>
			<td colspan="3" class="text-center noborder btm">@{{ item.obj[1001130] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}M - emp su</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001131] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}D</td>
			<td colspan="7" class="text-center">@{{ item.obj[1001132] ? item.obj[1001132] : '' }}</td>
		</tr>
		<tr>
			<td colspan="3" class="text-center">6</td>
			<td colspan="3">&nbsp;@{{item.obj[1001133] | toDate | date:'dd MMMM yyyy'}}</td>
			<td colspan="2">&nbsp;@{{ item.obj[1001134] ? item.obj[1001134] : '' }}</td>
			<td colspan="3">&nbsp;@{{ item.obj[1001135] ? item.obj[1001135] : '' }}</td>
			<td colspan="2" class="noborder btm btp">&nbsp;@{{ item.obj[1001136] ? item.obj[1001136] : '' }}</td>
			<td colspan="2" class="noborder btm btp" style="text-align: right;">cc&nbsp;</td>
			<td colspan="3">&nbsp;@{{ item.obj[1001137] ? item.obj[1001137] : '' }}</td>
			<td colspan="2" class="noborder btm btp"></td>
			<td class="noborder br btm btp" style="text-align: right;">@{{ item.obj[1001138] ? item.obj[1001138] : '' }} cc&nbsp;</td>
			<td colspan="2" class="text-center noborder btm btp">@{{ item.obj[1001139] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
			<td colspan="2" class="noborder text-center btm btp">@{{ item.obj[1001140] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
			<td colspan="" class="text-center blf noborder btm btp">@{{ item.obj[1001141] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
			<td colspan="" class="text-center noborder btm btp">@{{ item.obj[1001142] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
			<td colspan="" class="text-center noborder btm btp">@{{ item.obj[1001143] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
			<td colspan="" class="text-center noborder btm btp">@{{ item.obj[1001144] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
			<td colspan="" class="text-center noborder btm btp">@{{ item.obj[1001145] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
			<td colspan="" class="text-center noborder btm btp">@{{ item.obj[1001146] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
			<td colspan="" class="text-center noborder btm btp">@{{ item.obj[1001147] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
			<td colspan="" class="text-center noborder btm btp">@{{ item.obj[1001148] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
			<td colspan="" class="text-center noborder btm btp">@{{ item.obj[1001149] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 9</td>
			<td colspan="" class="text-center noborder btm btp">@{{ item.obj[1001150] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}10</td>
			<td colspan="" class="text-center noborder btm btp">@{{ item.obj[1001151] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}11</td>
			<td colspan="" class="text-center noborder btm btp">@{{ item.obj[1001152] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}12</td>
			<td colspan="" class="text-center noborder blf btm btp">@{{ item.obj[1001153] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}Dis</td>
			<td colspan="3" class="text-center noborder btm btp">@{{ item.obj[1001154] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}M - emp su</td>
			<td colspan="" class="text-center noborder btm btp">@{{ item.obj[1001155] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}D</td>
			<td colspan="7" class="text-center">@{{ item.obj[1001156] ? item.obj[1001156] : '' }}</td>
		</tr>
		<tr>
			<td colspan="3" class="text-center">7</td>
			<td colspan="3">&nbsp;@{{item.obj[1001157] | toDate | date:'dd MMMM yyyy'}}</td>
			<td colspan="2">&nbsp;@{{ item.obj[1001158] ? item.obj[1001158] : '' }}</td>
			<td colspan="3">&nbsp;@{{ item.obj[1001159] ? item.obj[1001159] : '' }}</td>
			<td colspan="2" class="noborder btm">&nbsp;@{{ item.obj[1001160] ? item.obj[1001160] : '' }}</td>
			<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
			<td colspan="3">&nbsp;@{{ item.obj[1001161] ? item.obj[1001161] : '' }}</td>
			<td colspan="2" class="noborder btm"></td>
			<td class="noborder br btm" style="text-align: right;">@{{ item.obj[1001162] ? item.obj[1001162] : '' }} cc&nbsp;</td>
			<td colspan="2" class="text-center noborder btm">@{{ item.obj[1001163] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
			<td colspan="2" class="noborder text-center btm">@{{ item.obj[1001164] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
			<td colspan="" class="text-center blf noborder btm">@{{ item.obj[1001165] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001166] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001167] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001168] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001169] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001170] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001171] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001172] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001173] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 9</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001174] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}10</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001175] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}11</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001176] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}12</td>
			<td colspan="" class="text-center noborder blf btm">@{{ item.obj[1001177] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}Dis</td>
			<td colspan="3" class="text-center noborder btm">@{{ item.obj[1001178] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}M - emp su</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001179] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}D</td>
			<td colspan="7" class="text-center">@{{ item.obj[1001180] ? item.obj[1001180] : '' }}</td>
		</tr>
		<tr>
			<td colspan="3" class="text-center">8</td>
			<td colspan="3">&nbsp;@{{item.obj[1001181] | toDate | date:'dd MMMM yyyy'}}</td>
			<td colspan="2">&nbsp;@{{ item.obj[1001182] ? item.obj[1001182] : '' }}</td>
			<td colspan="3">&nbsp;@{{ item.obj[1001183] ? item.obj[1001183] : '' }}</td>
			<td colspan="2" class="noborder btm">&nbsp;@{{ item.obj[1001184] ? item.obj[1001184] : '' }}</td>
			<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
			<td colspan="3">&nbsp;@{{ item.obj[1001185] ? item.obj[1001185] : '' }}</td>
			<td colspan="2" class="noborder btm"></td>
			<td class="noborder br btm" style="text-align: right;">@{{ item.obj[1001186] ? item.obj[1001186] : '' }} cc&nbsp;</td>
			<td colspan="2" class="text-center noborder btm">@{{ item.obj[1001187] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
			<td colspan="2" class="noborder text-center btm">@{{ item.obj[1001188] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
			<td colspan="" class="text-center blf noborder btm">@{{ item.obj[1001189] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001190] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001191] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001192] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001193] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001194] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001195] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001196] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001197] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 9</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001198] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}10</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001199] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}11</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001200] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}12</td>
			<td colspan="" class="text-center noborder blf btm">@{{ item.obj[1001201] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}Dis</td>
			<td colspan="3" class="text-center noborder btm">@{{ item.obj[1001202] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}M - emp su</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001203] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}D</td>
			<td colspan="7" class="text-center">@{{ item.obj[1001204] ? item.obj[1001204] : '' }}</td>
		</tr>
		<tr>
			<td colspan="3" class="text-center">9</td>
			<td colspan="3">&nbsp;@{{item.obj[1001205] | toDate | date:'dd MMMM yyyy'}}</td>
			<td colspan="2">&nbsp;@{{ item.obj[1001206] ? item.obj[1001206] : '' }}</td>
			<td colspan="3">&nbsp;@{{ item.obj[1001207] ? item.obj[1001207] : '' }}</td>
			<td colspan="2" class="noborder btm">&nbsp;@{{ item.obj[1001208] ? item.obj[1001208] : '' }}</td>
			<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
			<td colspan="3">&nbsp;@{{ item.obj[1001209] ? item.obj[1001209] : '' }}</td>
			<td colspan="2" class="noborder btm"></td>
			<td class="noborder br btm" style="text-align: right;">@{{ item.obj[1001210] ? item.obj[1001210] : '' }} cc&nbsp;</td>
			<td colspan="2" class="text-center noborder btm">@{{ item.obj[1001211] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
			<td colspan="2" class="noborder text-center btm">@{{ item.obj[1001212] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
			<td colspan="" class="text-center blf noborder btm">@{{ item.obj[1001213] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001214] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001215] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001216] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001217] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001218] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001219] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001220] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001221] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 9</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001222] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}10</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001223] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}11</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001224] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}12</td>
			<td colspan="" class="text-center noborder blf btm">@{{ item.obj[1001225] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}Dis</td>
			<td colspan="3" class="text-center noborder btm">@{{ item.obj[1001226] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}M - emp su</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001227] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}D</td>
			<td colspan="7" class="text-center">@{{ item.obj[1001228] ? item.obj[1001228] : '' }}</td>
		</tr>
		<tr>
			<td colspan="3" class="text-center">10</td>
			<td colspan="3">&nbsp;@{{item.obj[1001229] | toDate | date:'dd MMMM yyyy'}}</td>
			<td colspan="2">&nbsp;@{{ item.obj[1001230] ? item.obj[1001230] : '' }}</td>
			<td colspan="3">&nbsp;@{{ item.obj[1001231] ? item.obj[1001231] : '' }}</td>
			<td colspan="2" class="noborder btm">&nbsp;@{{ item.obj[1001232] ? item.obj[1001232] : '' }}</td>
			<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
			<td colspan="3">&nbsp;@{{ item.obj[1001233] ? item.obj[1001233] : '' }}</td>
			<td colspan="2" class="noborder btm"></td>
			<td class="noborder br btm" style="text-align: right;">@{{ item.obj[1001234] ? item.obj[1001234] : '' }} cc&nbsp;</td>
			<td colspan="2" class="text-center noborder btm">@{{ item.obj[1001235] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
			<td colspan="2" class="noborder text-center btm">@{{ item.obj[1001236] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
			<td colspan="" class="text-center blf noborder btm">@{{ item.obj[1001237] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001238] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001239] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001240] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001241] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001242] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001243] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001244] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001245] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 9</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001246] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}10</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001247] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}11</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001248] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}12</td>
			<td colspan="" class="text-center noborder blf btm">@{{ item.obj[1001249] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}Dis</td>
			<td colspan="3" class="text-center noborder btm">@{{ item.obj[1001250] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}M - emp su</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001251] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}D</td>
			<td colspan="7" class="text-center">@{{ item.obj[1001252] ? item.obj[1001252] : '' }}</td>
		</tr>
		<tr>
			<td colspan="3" class="text-center">11</td>
			<td colspan="3">&nbsp;@{{item.obj[1001253] | toDate | date:'dd MMMM yyyy'}}</td>
			<td colspan="2">&nbsp;@{{ item.obj[1001254] ? item.obj[1001254] : '' }}</td>
			<td colspan="3">&nbsp;@{{ item.obj[1001255] ? item.obj[1001255] : '' }}</td>
			<td colspan="2" class="noborder btm btp">&nbsp;@{{ item.obj[1001256] ? item.obj[1001256] : '' }}</td>
			<td colspan="2" class="noborder btm btp" style="text-align: right;">cc&nbsp;</td>
			<td colspan="3">&nbsp;@{{ item.obj[1001257] ? item.obj[1001257] : '' }}</td>
			<td colspan="2" class="noborder btm btp"></td>
			<td class="noborder br btm btp" style="text-align: right;">@{{ item.obj[1001258] ? item.obj[1001258] : '' }} cc&nbsp;</td>
			<td colspan="2" class="text-center noborder btm btp">@{{ item.obj[1001259] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
			<td colspan="2" class="noborder text-center btm btp">@{{ item.obj[1001260] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
			<td colspan="" class="text-center blf noborder btm btp">@{{ item.obj[1001261] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
			<td colspan="" class="text-center noborder btm btp">@{{ item.obj[1001262] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
			<td colspan="" class="text-center noborder btm btp">@{{ item.obj[1001263] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
			<td colspan="" class="text-center noborder btm btp">@{{ item.obj[1001264] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
			<td colspan="" class="text-center noborder btm btp">@{{ item.obj[1001265] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
			<td colspan="" class="text-center noborder btm btp">@{{ item.obj[1001266] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
			<td colspan="" class="text-center noborder btm btp">@{{ item.obj[1001267] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
			<td colspan="" class="text-center noborder btm btp">@{{ item.obj[1001268] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
			<td colspan="" class="text-center noborder btm btp">@{{ item.obj[1001269] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 9</td>
			<td colspan="" class="text-center noborder btm btp">@{{ item.obj[1001270] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}10</td>
			<td colspan="" class="text-center noborder btm btp">@{{ item.obj[1001271] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}11</td>
			<td colspan="" class="text-center noborder btm btp">@{{ item.obj[1001272] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}12</td>
			<td colspan="" class="text-center noborder blf btm btp">@{{ item.obj[1001273] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}Dis</td>
			<td colspan="3" class="text-center noborder btm btp">@{{ item.obj[1001274] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}M - emp su</td>
			<td colspan="" class="text-center noborder btm btp">@{{ item.obj[1001275] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}D</td>
			<td colspan="7" class="text-center">@{{ item.obj[1001276] ? item.obj[1001276] : '' }}</td>
		</tr>
		<tr>
			<td colspan="3" class="text-center">12</td>
			<td colspan="3">&nbsp;@{{item.obj[1001277] | toDate | date:'dd MMMM yyyy'}}</td>
			<td colspan="2">&nbsp;@{{ item.obj[1001278] ? item.obj[1001278] : '' }}</td>
			<td colspan="3">&nbsp;@{{ item.obj[1001279] ? item.obj[1001279] : '' }}</td>
			<td colspan="2" class="noborder btm">&nbsp;@{{ item.obj[1001280] ? item.obj[1001280] : '' }}</td>
			<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
			<td colspan="3">&nbsp;@{{ item.obj[1001281] ? item.obj[1001281] : '' }}</td>
			<td colspan="2" class="noborder btm"></td>
			<td class="noborder br btm" style="text-align: right;">@{{ item.obj[1001282] ? item.obj[1001282] : '' }} cc&nbsp;</td>
			<td colspan="2" class="text-center noborder btm">@{{ item.obj[1001283] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} ASI</td>
			<td colspan="2" class="noborder text-center btm">@{{ item.obj[1001284] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} F</td>
			<td colspan="" class="text-center blf noborder btm">@{{ item.obj[1001285] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001286] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001287] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001288] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001289] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001290] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001291] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001292] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001293] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 9</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001294] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}10</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001295] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}11</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001296] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}12</td>
			<td colspan="" class="text-center noborder blf btm">@{{ item.obj[1001297] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}Dis</td>
			<td colspan="3" class="text-center noborder btm">@{{ item.obj[1001298] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}M - emp su</td>
			<td colspan="" class="text-center noborder btm">@{{ item.obj[1001299] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}D</td>
			<td colspan="7" class="text-center">@{{ item.obj[1001300] ? item.obj[1001300] : '' }}</td>
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

    angular.controller('cetakPemberianMakanAwal1000', function ($scope, $http, httpService) {
        $scope.item = {
            obj: [],
            obj2: []
        }
        var dataLoad = {!! json_encode($res['d'] )!!};
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

        var p1 = $scope.item.obj[420614];
        var p2 = $scope.item.obj[420615];

        if (p1 != undefined) {
            jQuery('#qrcodep1').qrcode({
            width	: 70,
			height	: 70,
            text	: "Tanda Tangan Digital Oleh " + p1
            });	
        }

        if (p2 != undefined) {
            jQuery('#qrcodep2').qrcode({
            width	: 70,
			height	: 70,
            text	: "Tanda Tangan Digital Oleh " + p2
            });	
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