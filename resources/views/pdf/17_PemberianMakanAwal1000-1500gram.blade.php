<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pemberian Makan Awal 1000 - 1500 gram</title>
	<style>
		html,
		body {
			/* font-family: DejaVu Sans, Arial, Helvetica, sans-serif; */
			font-family: Arial, Helvetica, sans-serif;
			margin-bottom: 0px;
		}

		@page {
			size: auto;
			size: A4 Landscape;
		}

		table {
			border: 1px solid #000;
			/* table-layout: fixed; */
			border-collapse: collapse;

			width: 100%;
			
		}

		tr {
			page-break-inside: avoid;
			page-break-after: auto
		}

		tr td {
			border: 1px solid #000;
			border-collapse: collapse;
			/* padding:.1rem; */
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

		.text-right {
			text-align: right;
		}

		.bordered {
			border: 1px solid #000;
		}

		.noborder {
			border: none;
		}

		.blf {
			border-left: 1px solid #000;
		}

		.btp {
			border-top: 1px solid #000;
		}

		.btm {
			border-bottom: 1px solid #000;
		}

		.br {
			border-right: 1px solid #000;
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
			font-size: 6pt;
		}

		table tr {
			height: 7pt
		}

		.bg-dark {
			background: #000;
			color: #fff;
			font-family: Arial, Helvetica, sans-serif;
			font-size: x-large;
			padding: .5rem;
			height: 16pt !important;
		}

		.bg-dark-small {
			background: #000;
			color: #fff;
		}

		/* .rotate{
            vertical-align: bottom;
            text-align: center;
        } */
		/* #rotate{
            -ms-writing-mode: tb-rl;
            -webkit-writing-mode: vertical-rl;
            writing-mode: vertical-rl;
            transform: rotate(180deg);
            white-space: nowrap;
        } */
		.p3 {
			padding: 0.3rem;
		}

		.p2 {
			padding: 0.2rem;
		}

		.pdua {
			padding: 1rem;
		}
	</style>
</head>

<body>
	<table width='100%'>
		<tr  class="noborder">
			<td colspan="8" rowspan="4" class="p3 noborder-tb text-center">
				<center><img src="{{ $image }}" alt="" style="height: 70px; width:60px;"></center>
			</td>
			<td colspan="17" rowspan="4" class="noborder-tb text-center" style="font-size:large">
				<strong>{!! $res['profile']->namalengkap !!}</strong> <br>{!! $res['profile']->alamatlengkap !!}<br>TELP
				: (0413) 81292
			</td>
			<td colspan="6" class="noborder" style="font-size: 8pt">No. RM </td>
			<td colspan="13" class="noborder" style="font-size: 8pt">
				: {!! $res['d1'][0]->nocm !!}
			</td>
			<td colspan="5" rowspan="2" class="border-lr bg-dark" style="font-size: 24px;text-align:center">RM</td>
		</tr>
		<tr class="noborder">
			<td colspan="6" class="noborder" style="font-size: 8pt">Nama Lengkap</td>
			<td colspan="11" class="noborder" style="font-size: 8pt">
				: {!! $res['d1'][0]->namapasien !!}
			</td>
			<td colspan="2" class="noborder" style="font-size: 8pt">{!! $res['d1'][0]->jeniskelamin == 'PEREMPUAN' ?
				'(P)' : '(L)' !!}</td>
		</tr>
		<tr class="noborder">
			<td colspan="6" class="noborder" style="font-size: 8pt">Tanggal Lahir</td>
			<td colspan="13" class="noborder" style="font-size: 8pt">
				: {!! date('d-m-Y',strtotime( $res['d1'][0]->tgllahir )) !!}
			</td>
			<td colspan="5" class="border-lr" rowspan="2" style="font-size: 24px;text-align:center">69</td>
		</tr>
		<tr class="noborder">
			<td colspan="6" class="noborder" style="font-size: 8pt">NIK</td>
			<td colspan="11" class="noborder" style="font-size: 8pt">
				: {!! $res['d1'][0]->noidentitas !!}
			</td>
		</tr>
		<tr class="bordered bg-dark-small">
			<th colspan="49" height="18pt">PEMBERIAN MAKAN AWAL DAN PENURUNAN CAIRAN IV PADA NEONATUS 1000-1500 GRAM
				DARI HARI PERAWATAN 1-12</th>
		</tr>
		<tr>
			<td colspan="15">&nbsp; BB : @foreach($res['d1'] as $item) @if($item->emrdfk == 1000951) {!! $item->value
				!!} @endif @endforeach</td>
			<td colspan="8">&nbsp; BB MASUK : @foreach($res['d1'] as $item) @if($item->emrdfk == 1000950) {!!
				$item->value !!} @endif @endforeach</td>
			<td colspan="26">&nbsp; % PERUBAHAN DARI BB LAHIR : @foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001012) {!! $item->value !!} @endif @endforeach</td>
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
						<td valign="top" class="noborder" colspan="24" align="left">'Volume minum' merupakan jumlah
							volume minimal yang diberikan. Selalu bisa naik volume susu ke total volume cairan</td>
					</tr>
					<tr class="noborder">
						<td valign="top" class="noborder text-center" colspan="2">-</td>
						<td valign="top" class="noborder" colspan="24">Gunakan BB lahir atau BB saat masuk yang sampai
							BB lebih besar</td>
					</tr>
					<tr class="noborder">
						<td valign="top" class="noborder text-center" colspan="2">-</td>
						<td valign="top" class="noborder" colspan="24">Kalau bayi turun berat badan (BB), gunakan BB
							tertinggi untuk penghitungan</td>
					</tr>
					<tr class="noborder">
						<td valign="top" class="noborder text-center" colspan="2">-</td>
						<td valign="top" class="noborder" colspan="24">Pemberian minum harus dimulai pada hari kedua,
							jika RR ≤ 80</td>
					</tr>
					<tr class="noborder">
						<td valign="top" class="noborder text-center" colspan="2">-</td>
						<td valign="top" class="noborder" colspan="24">ASI adalah yang terbaik. Gunakan ASI Perah atau
							Formula 20 Kkal/ 30 cc sampai pemberian minum 150 cc/kg/hr</td>
					</tr>
					<tr class="noborder">
						<td valign="top" class="noborder text-center" colspan="2">-</td>
						<td valign="top" class="noborder" colspan="24">Untuk membuat Formula 20 Kkal/ 30 cc, campur satu
							sendok peres SGM BBLR di dalam 40 cc air.</td>
					</tr>
					<tr class="noborder">
						<td valign="top" class="noborder text-center" colspan="2">-</td>
						<td valign="top" class="noborder" colspan="24">Pindah ke lembar pemeliharaan pemberian minum
							saat minum bayi mencapai 150 cc/kg/hr.</td>
					</tr>
					<tr class="noborder">
						<td valign="top" class="noborder text-center" colspan="2"></td>
						<td valign="top" class="noborder" colspan="24"><em>(Jk neonatus mengalami intoleransi atau tanda
								NEC (lihat dibawah) dan pemberian minum lanjutan tertunda, jelaskan masalah pada kolom
								“komentar” dan gunakan lembar “pemberian minum awal” kedua sesuai kebutuhan perbaiki
								hari rawat pada kolom pertama)</em></td>
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
				Kunci - DOB : Hari lahir; HD : Hari rawat; * %Perubahan dari BB lahir = (BW-AW/BW)* 100 dimana BW adalah
				berat lahir dan AW <br> adalah berat saat masuk; D10 : Dextrose 10%; NS : Normal Saline atau 154 mEq/L
				solution

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
		<tr class="text-center">
			<td colspan="3" rowspan="2">HARI RAWAT INFANT</td>
			<td colspan="3"></td>
			<td colspan="2">A</td>
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
			<td colspan="3">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001013) {!! $item->value !!}
				@endif @endforeach </td>
			<td colspan="2">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001014) {!! $item->value !!}
				@endif @endforeach </td>
			<td colspan="3">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001015) {!! $item->value !!}
				@endif @endforeach </td>
			<td colspan="2" class="noborder btm btp">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001016)
				{!! $item->value !!} @endif @endforeach</td>
			<td colspan="2" class="noborder btm btp" style="text-align: right;">cc&nbsp;</td>
			<td colspan="3">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001017) {!! $item->value !!}
				@endif @endforeach </td>
			<td colspan="2" class="noborder btm btp"></td>
			<td class="noborder br btm btp" style="text-align: right;">@foreach($res['d1'] as $item) @if($item->emrdfk
				== 1001018) {!! $item->value !!} @endif @endforeach cc&nbsp;</td>
			<td colspan="2" class="text-center noborder btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001019) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach ASI</td>
			<td colspan="2" class="noborder text-center btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001020) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach F</td>
			<td colspan="" class="text-center blf noborder btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001021) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 1</td>
			<td colspan="" class="text-center noborder btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001022) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 2</td>
			<td colspan="" class="text-center noborder btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001023) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 3</td>
			<td colspan="" class="text-center noborder btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001024) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 4</td>
			<td colspan="" class="text-center noborder btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001025) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 5</td>
			<td colspan="" class="text-center noborder btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001026) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 6</td>
			<td colspan="" class="text-center noborder btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001027) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 7</td>
			<td colspan="" class="text-center noborder btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001028) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 8</td>
			<td colspan="" class="text-center noborder btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001029) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 9</td>
			<td colspan="" class="text-center noborder btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001030) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 10</td>
			<td colspan="" class="text-center noborder btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001031) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 11</td>
			<td colspan="" class="text-center noborder btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001032) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 12</td>
			<td colspan="" class="text-center noborder blf btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001033) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach Dis</td>
			<td colspan="3" class="text-center noborder btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001034) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach M - emp su</td>
			<td colspan="" class="text-center noborder btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001035) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach D</td>
			<td colspan="7" class="text-center">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001036) {!!
				$item->value !!} @endif @endforeach </td>
		</tr>
		<tr>
			<td colspan="3" class="text-center">2</td>
			<td colspan="3">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001037) {!! $item->value !!}
				@endif @endforeach </td>
			<td colspan="2">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001038) {!! $item->value !!}
				@endif @endforeach </td>
			<td colspan="3">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001039) {!! $item->value !!}
				@endif @endforeach </td>
			<td colspan="2" class="noborder btm">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001040) {!!
				$item->value !!} @endif @endforeach </td>
			<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
			<td colspan="3">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001041) {!! $item->value !!}
				@endif @endforeach </td>
			<td colspan="2" class="noborder btm"></td>
			<td class="noborder br btm" style="text-align: right;">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001042) {!! $item->value !!} @endif @endforeach cc&nbsp;</td>
			<td colspan="2" class="text-center noborder btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001043) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach ASI</td>
			<td colspan="2" class="noborder text-center btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001044) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach F</td>
			<td colspan="" class="text-center blf noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001045) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 1</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001046)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 2</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001047)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 3</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001048)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 4</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001049)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 5</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001050)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 6</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001051)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 7</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001052)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 8</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001053)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 9</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001054)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 10</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001055)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 11</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001056)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 12</td>
			<td colspan="" class="text-center noborder blf btm">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001057) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach Dis</td>
			<td colspan="3" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001058)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach M - emp su</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001059)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach D</td>
			<td colspan="7" class="text-center">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001060) {!!
				$item->value !!} @endif @endforeach </td>
		</tr>
		<tr>
			<td colspan="3" class="text-center">3</td>
			<td colspan="3">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001061) {!! $item->value !!}
				@endif @endforeach </td>
			<td colspan="2">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001062) {!! $item->value !!}
				@endif @endforeach </td>
			<td colspan="3">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001063) {!! $item->value !!}
				@endif @endforeach </td>
			<td colspan="2" class="noborder btm">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001064) {!!
				$item->value !!} @endif @endforeach </td>
			<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
			<td colspan="3">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001065) {!! $item->value !!}
				@endif @endforeach </td>
			<td colspan="2" class="noborder btm"></td>
			<td class="noborder br btm" style="text-align: right;">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001066) {!! $item->value !!} @endif @endforeach cc&nbsp;</td>
			<td colspan="2" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001067)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach ASI</td>
			<td colspan="2" class="noborder text-center btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001068)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach F</td>
			<td colspan="" class="text-center blf noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001069) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 1</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001070)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 2</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001071)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 3</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001072)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 4</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001073)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 5</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001074)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 6</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001075)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 7</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001076)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 8</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001077)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 9</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001078)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 10</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001079)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 11</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001080)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 12</td>
			<td colspan="" class="text-center noborder blf btm">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001081) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach Dis</td>
			<td colspan="3" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001082)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach M - emp su</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001083)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach D</td>
			<td colspan="7" class="text-center">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001084) {!!
				$item->value !!} @endif @endforeach </td>
		</tr>
		<tr>
			<td colspan="3" class="text-center">4</td>
			<td colspan="3">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001085) {!! $item->value !!}
				@endif @endforeach </td>
			<td colspan="2">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001086) {!! $item->value !!}
				@endif @endforeach </td>
			<td colspan="3">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001087) {!! $item->value !!}
				@endif @endforeach </td>
			<td colspan="2" class="noborder btm">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001088) {!!
				$item->value !!} @endif @endforeach </td>
			<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
			<td colspan="3">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001089) {!! $item->value !!}
				@endif @endforeach </td>
			<td colspan="2" class="noborder btm"></td>
			<td class="noborder br btm" style="text-align: right;">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001090) {!! $item->value !!} @endif @endforeach cc&nbsp;</td>
			<td colspan="2" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001091)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach ASI</td>
			<td colspan="2" class="noborder text-center btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001092)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach F</td>
			<td colspan="" class="text-center blf noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001093) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 1</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001094)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 2</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001095)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 3</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001096)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 4</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001097)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 5</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001098)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 6</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001099)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 7</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001100)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 8</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001101)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 9</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001102)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 10</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001103)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 11</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001104)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 12</td>
			<td colspan="" class="text-center noborder blf btm">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001105) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach Dis</td>
			<td colspan="3" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001106)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach M - emp su</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001107)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach D</td>
			<td colspan="7" class="text-center">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001108) {!!
				$item->value !!} @endif @endforeach </td>
		</tr>
		<tr>
			<td colspan="3" class="text-center">5</td>
			<td colspan="3">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001109) {!! $item->value !!}
				@endif @endforeach </td>
			<td colspan="2">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001110) {!! $item->value !!}
				@endif @endforeach </td>
			<td colspan="3">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001111) {!! $item->value !!}
				@endif @endforeach </td>
			<td colspan="2" class="noborder btm">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001112) {!!
				$item->value !!} @endif @endforeach </td>
			<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
			<td colspan="3">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001113) {!! $item->value !!}
				@endif @endforeach </td>
			<td colspan="2" class="noborder btm"></td>
			<td class="noborder br btm" style="text-align: right;">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001114) {!! $item->value !!} @endif @endforeach cc&nbsp;</td>
			<td colspan="2" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001115)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach ASI</td>
			<td colspan="2" class="noborder text-center btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001116)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach F</td>
			<td colspan="" class="text-center blf noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001117) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 1</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001118)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 2</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001119)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 3</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001120)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 4</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001121)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 5</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001122)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 6</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001123)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 7</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001124)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 8</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001125)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 9</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001126)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 10</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001127)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 11</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001128)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 12</td>
			<td colspan="" class="text-center noborder blf btm">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001129) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach Dis</td>
			<td colspan="3" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001130)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach M - emp su</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001131)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach D</td>
			<td colspan="7" class="text-center">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001132) {!!
				$item->value !!} @endif @endforeach </td>
		</tr>
		<tr>
			<td colspan="3" class="text-center">6</td>
			<td colspan="3">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001133) {!! $item->value !!}
				@endif @endforeach </td>
			<td colspan="2">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001134) {!! $item->value !!}
				@endif @endforeach </td>
			<td colspan="3">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001135) {!! $item->value !!}
				@endif @endforeach </td>
			<td colspan="2" class="noborder btm btp">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001136)
				{!! $item->value !!} @endif @endforeach </td>
			<td colspan="2" class="noborder btm btp" style="text-align: right;">cc&nbsp;</td>
			<td colspan="3">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001137) {!! $item->value !!}
				@endif @endforeach </td>
			<td colspan="2" class="noborder btm btp"></td>
			<td class="noborder br btm btp" style="text-align: right;">@foreach($res['d1'] as $item) @if($item->emrdfk
				== 1001135) {!! $item->value !!} @endif @endforeach cc&nbsp;</td>
			<td colspan="2" class="text-center noborder btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001139) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach ASI</td>
			<td colspan="2" class="noborder text-center btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001140) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach F</td>
			<td colspan="" class="text-center blf noborder btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001141) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 1</td>
			<td colspan="" class="text-center noborder btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001142) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 2</td>
			<td colspan="" class="text-center noborder btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001143) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 3</td>
			<td colspan="" class="text-center noborder btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001144) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 4</td>
			<td colspan="" class="text-center noborder btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001145) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 5</td>
			<td colspan="" class="text-center noborder btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001146) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 6</td>
			<td colspan="" class="text-center noborder btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001147) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 7</td>
			<td colspan="" class="text-center noborder btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001148) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 8</td>
			<td colspan="" class="text-center noborder btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001149) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 9</td>
			<td colspan="" class="text-center noborder btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001150) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 10</td>
			<td colspan="" class="text-center noborder btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001151) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 11</td>
			<td colspan="" class="text-center noborder btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001152) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 12</td>
			<td colspan="" class="text-center noborder blf btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001153) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach Dis</td>
			<td colspan="3" class="text-center noborder btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001154) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach M - emp su</td>
			<td colspan="" class="text-center noborder btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001155) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach D</td>
			<td colspan="7" class="text-center">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001156) {!!
				$item->value !!} @endif @endforeach </td>
		</tr>
		<tr>
			<td colspan="3" class="text-center">7</td>
			<td colspan="3">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001157) {!! $item->value !!}
				@endif @endforeach </td>
			<td colspan="2">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001158) {!! $item->value !!}
				@endif @endforeach </td>
			<td colspan="3">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001159) {!! $item->value !!}
				@endif @endforeach </td>
			<td colspan="2" class="noborder btm">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001160) {!!
				$item->value !!} @endif @endforeach </td>
			<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
			<td colspan="3">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001161) {!! $item->value !!}
				@endif @endforeach </td>
			<td colspan="2" class="noborder btm"></td>
			<td class="noborder br btm" style="text-align: right;">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001162) {!! $item->value !!} @endif @endforeach cc&nbsp;</td>
			<td colspan="2" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001163)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach ASI</td>
			<td colspan="2" class="noborder text-center btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001164)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach F</td>
			<td colspan="" class="text-center blf noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001165) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 1</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001166)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 2</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001167)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 3</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001168)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 4</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001169)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 5</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001170)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 6</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001171)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 7</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001172)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 8</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001173)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 9</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001174)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 10</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001175)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 11</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001176)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 12</td>
			<td colspan="" class="text-center noborder blf btm">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001177) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach Dis</td>
			<td colspan="3" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001178)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach M - emp su</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001179)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach D</td>
			<td colspan="7" class="text-center">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001180) {!!
				$item->value !!} @endif @endforeach </td>
		</tr>
		<tr>
			<td colspan="3" class="text-center">8</td>
			<td colspan="3">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001181) {!! $item->value !!}
				@endif @endforeach </td>
			<td colspan="2">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001182) {!! $item->value !!}
				@endif @endforeach </td>
			<td colspan="3">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001183) {!! $item->value !!}
				@endif @endforeach </td>
			<td colspan="2" class="noborder btm">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001184) {!!
				$item->value !!} @endif @endforeach </td>
			<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
			<td colspan="3">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001185) {!! $item->value !!}
				@endif @endforeach </td>
			<td colspan="2" class="noborder btm"></td>
			<td class="noborder br btm" style="text-align: right;">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001186) {!! $item->value !!} @endif @endforeach cc&nbsp;</td>
			<td colspan="2" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001187)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach ASI</td>
			<td colspan="2" class="noborder text-center btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001188)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach F</td>
			<td colspan="" class="text-center blf noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001189) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 1</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001190)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 2</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001191)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 3</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001192)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 4</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001193)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 5</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001194)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 6</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001195)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 7</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001196)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 8</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001197)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 9</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001198)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 10</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001199)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 11</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001200)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 12</td>
			<td colspan="" class="text-center noborder blf btm">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001201) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach Dis</td>
			<td colspan="3" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001202)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach M - emp su</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001203)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach D</td>
			<td colspan="7" class="text-center">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001204) {!!
				$item->value !!} @endif @endforeach </td>
		</tr>
		<tr>
			<td colspan="3" class="text-center">9</td>
			<td colspan="3">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001205) {!! $item->value !!}
				@endif @endforeach </td>
			<td colspan="2">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001206) {!! $item->value !!}
				@endif @endforeach </td>
			<td colspan="3">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001207) {!! $item->value !!}
				@endif @endforeach </td>
			<td colspan="2" class="noborder btm">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001208) {!!
				$item->value !!} @endif @endforeach </td>
			<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
			<td colspan="3">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001209) {!! $item->value !!}
				@endif @endforeach </td>
			<td colspan="2" class="noborder btm"></td>
			<td class="noborder br btm" style="text-align: right;">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001210) {!! $item->value !!} @endif @endforeach cc&nbsp;</td>
			<td colspan="2" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001211)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach ASI</td>
			<td colspan="2" class="noborder text-center btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001212)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach F</td>
			<td colspan="" class="text-center blf noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001213) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 1</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001214)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 2</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001215)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 3</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001216)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 4</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001217)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 5</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001218)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 6</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001219)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 7</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001220)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 8</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001221)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 9</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001222)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 10</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001223)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 11</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001224)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 12</td>
			<td colspan="" class="text-center noborder blf btm">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001225) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach Dis</td>
			<td colspan="3" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001226)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach M - emp su</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001227)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach D</td>
			<td colspan="7" class="text-center">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001228) {!!
				$item->value !!} @endif @endforeach </td>
		</tr>
		<tr>
			<td colspan="3" class="text-center">10</td>
			<td colspan="3">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001229) {!! $item->value !!}
				@endif @endforeach </td>
			<td colspan="2">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001230) {!! $item->value !!}
				@endif @endforeach </td>
			<td colspan="3">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001231) {!! $item->value !!}
				@endif @endforeach </td>
			<td colspan="2" class="noborder btm">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001232) {!!
				$item->value !!} @endif @endforeach </td>
			<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
			<td colspan="3">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001233) {!! $item->value !!}
				@endif @endforeach </td>
			<td colspan="2" class="noborder btm"></td>
			<td class="noborder br btm" style="text-align: right;">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001234) {!! $item->value !!} @endif @endforeach cc&nbsp;</td>
			<td colspan="2" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001235)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach ASI</td>
			<td colspan="2" class="noborder text-center btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001236)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach F</td>
			<td colspan="" class="text-center blf noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001237) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 1</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001238)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 2</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001239)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 3</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001240)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 4</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001241)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 5</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001242)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 6</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001243)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 7</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001244)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 8</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001245)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 9</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001246)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 10</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001247)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 11</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001248)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 12</td>
			<td colspan="" class="text-center noborder blf btm">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001249) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach Dis</td>
			<td colspan="3" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001250)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach M - emp su</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001251)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach D</td>
			<td colspan="7" class="text-center">@foreach($res['d1'] as $item) @if($item->emrdfk == 1000952) {!!
				$item->value !!} @endif @endforeach </td>
		</tr>
		<tr>
			<td colspan="3" class="text-center">11</td>
			<td colspan="3">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1000953) {!! $item->value !!}
				@endif @endforeach </td>
			<td colspan="2">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1000954) {!! $item->value !!}
				@endif @endforeach </td>
			<td colspan="3">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1000955) {!! $item->value !!}
				@endif @endforeach </td>
			<td colspan="2" class="noborder btm btp">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1000956)
				{!! $item->value !!} @endif @endforeach </td>
			<td colspan="2" class="noborder btm btp" style="text-align: right;">cc&nbsp;</td>
			<td colspan="3">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1000957) {!! $item->value !!}
				@endif @endforeach </td>
			<td colspan="2" class="noborder btm btp"></td>
			<td class="noborder br btm btp" style="text-align: right;">@foreach($res['d1'] as $item) @if($item->emrdfk
				== 1001258) {!! $item->value !!} @endif @endforeach cc&nbsp;</td>
			<td colspan="2" class="text-center noborder btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001259) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach ASI</td>
			<td colspan="2" class="noborder text-center btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001260) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach F</td>
			<td colspan="" class="text-center blf noborder btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001261) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 1</td>
			<td colspan="" class="text-center noborder btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001262) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 2</td>
			<td colspan="" class="text-center noborder btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001263) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 3</td>
			<td colspan="" class="text-center noborder btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001264) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 4</td>
			<td colspan="" class="text-center noborder btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001265) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 5</td>
			<td colspan="" class="text-center noborder btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001266) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 6</td>
			<td colspan="" class="text-center noborder btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001267) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 7</td>
			<td colspan="" class="text-center noborder btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001268) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 8</td>
			<td colspan="" class="text-center noborder btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001269) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 9</td>
			<td colspan="" class="text-center noborder btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001270) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 10</td>
			<td colspan="" class="text-center noborder btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001271) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 11</td>
			<td colspan="" class="text-center noborder btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001272) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 12</td>
			<td colspan="" class="text-center noborder blf btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001273) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach Dis</td>
			<td colspan="3" class="text-center noborder btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001274) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach M - emp su</td>
			<td colspan="" class="text-center noborder btm btp">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001275) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach D</td>
			<td colspan="7" class="text-center">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001275) {!!
				$item->value !!} @endif @endforeach </td>
		</tr>
		<tr>
			<td colspan="3" class="text-center">12</td>
			<td colspan="3">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001277) {!! $item->value !!}
				@endif @endforeach </td>
			<td colspan="2">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001278) {!! $item->value !!}
				@endif @endforeach </td>
			<td colspan="3">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001279) {!! $item->value !!}
				@endif @endforeach </td>
			<td colspan="2" class="noborder btm">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001280) {!!
				$item->value !!} @endif @endforeach </td>
			<td colspan="2" class="noborder btm" style="text-align: right;">cc&nbsp;</td>
			<td colspan="3">&nbsp;@foreach($res['d1'] as $item) @if($item->emrdfk == 1001281) {!! $item->value !!}
				@endif @endforeach</td>
			<td colspan="2" class="noborder btm"></td>
			<td class="noborder br btm" style="text-align: right;">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001282) {!! $item->value !!} @endif @endforeach cc&nbsp;</td>
			<td colspan="2" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001283)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach ASI</td>
			<td colspan="2" class="noborder text-center btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001284)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach F</td>
			<td colspan="" class="text-center blf noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001285) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 1</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001286)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 2</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001287)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 3</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001288)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 4</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001289)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 5</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001290)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 6</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001291)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 7</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001292)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 8</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001293)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 9</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001294)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 10</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001295)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 11</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001296)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach 12</td>
			<td colspan="" class="text-center noborder blf btm">@foreach($res['d1'] as $item) @if($item->emrdfk ==
				1001297) [<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach Dis</td>
			<td colspan="3" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001298)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach M - emp su</td>
			<td colspan="" class="text-center noborder btm">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001299)
				[<img src="{{ $centang}}" width="7px" height="7px" />] @endif @endforeach D</td>
			<td colspan="7" class="text-center">@foreach($res['d1'] as $item) @if($item->emrdfk == 1001300) {!!
				$item->value !!} @endif @endforeach </td>
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
				<td colspan="7" rowspan="3">Pertimbangkan NEC. Hentikan minuman 24-48 jam. Mulai cairan IV sampai
					150cc/kg/d Mulai Amp/Sulbactam</td>
				<td class="noborder" colspan="7"></td>
				<td class="noborder btm">+</td>
				<td colspan="7" rowspan="2">Jk pneumotoses, lanjut status puasa, Antibiotik dan cairan IV untuk 14 hari
				</td>
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
				<td colspan="6" class="text-center" rowspan="2">Residu/muntahan dgn cairan empedu atau feses berdarah
				</td>
				<td class="noborder"></td>
				<td class="noborder" colspan=""></td>

				<td colspan="4" rowspan="2">Abdominal X-Ray dalam 24 jam</td>
				<td class="noborder"></td>
				<td class="noborder br"></td>
				<td class="noborder "></td>
				<td class="noborder btm"></td>
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
				<td rowspan="2" colspan="6" class="text-center">Distensi; muntahan/residu dgn empedu; Darah pada feses
				</td>
				<td class="noborder blf btm"></td>
				<td class="noborder blf"></td>
				<td class="noborder"></td>
				<td colspan="19" class="noborder"></td>
				<td class="noborder"></td>
				<td class="noborder br"></td>
				<td class="btm bl noborder"></td>
				<td class="" colspan="7" rowspan="2">Jk negatif, mulai pemberian minum pada volume terakhir sebelum
					terjadi</td>
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
				<td colspan="7" rowspan="2" class="text-center">Jk Aspirasi < 25% minuman. Lanjutkan pemberian
						minuman</td>
				<td colspan="7" class="noborder "></td>
				<td class="noborder">-</td>
				<td class="noborder br btm"></td>
			</tr>
			<tr>
				<td colspan="14" class="noborder"></td>
				<td class="noborder"></td>
				<td class="noborder"></td>
				<td colspan="7" class="noborder"></td>
				<td colspan="7" class="noborder"></td>
			</tr>
			<tr></tr>
			<tr>
				<td colspan="14" class="noborder"></td>
				<td colspan="6" class="noborder btp"></td>
				<td class="noborder"></td>
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

</html>