<!DOCTYPE html>
<html lang="en" ng-app="angularApp">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	@if (stripos(\Request::url(), 'localhost') !== false)
	{{--
	<link rel="stylesheet" href="{{ public_path('css/report/paper.css') }}">
	<link rel="stylesheet" href="{{ public_path('css/report/table.css') }}">
	<link rel="stylesheet" href="{{ public_path('css/report/tabel.css') }}"> --}}
	<script src="{{ public_path('js/jquery.min.js') }}"></script>
	<script src="{{ public_path('js/jquery.qr-code.js') }}"></script>
	<script type="text/javascript" src="{{ public_path('js/qrcode/src/jquery.qrcode.js') }}"></script>
	<script type="text/javascript" src="{{ public_path('js/qrcode/src/qrcode.js') }}"></script>
	{{--
	<link href="{{ public_path('css/style.css') }}" rel="stylesheet"> --}}
	<!-- angular -->
	<script src="{{ public_path('js/angular/angular.min.js') }}" type="text/javascript"></script>
	<script src="{{ public_path('js/angular/angular-route.min.js') }}" type="text/javascript"></script>
	<script type="text/javascript" src="{{ public_path('js/angular/angular-animate.min.js') }}"></script>
	<script type="text/javascript" src="{{ public_path('js/angular/angular-aria.min.js') }}"></script>
	<script src="{{ public_path('js/angular/angular-material.js') }}" type="text/javascript"></script>
	@else
	{{--
	<link rel="stylesheet" href="{{ public_path('service/css/report/paper.css') }}">
	<link rel="stylesheet" href="{{ public_path('service/css/report/table.css') }}">
	<link rel="stylesheet" href="{{ public_path('service/css/report/tabel.css') }}"> --}}
	<script src="{{ public_path('service/js/jquery.min.js') }}"></script>
	<script src="{{ public_path('service/js/jquery.qr-code.js') }}"></script>
	<script type="text/javascript" src="{{ public_path('js/qrcode/src/jquery.qrcode.js') }}"></script>
	<script type="text/javascript" src="{{ public_path('js/qrcode/src/qrcode.js') }}"></script>
	{{--
	<link href="{{ public_path('service/css/style.css') }}" rel="stylesheet"> --}}
	<!-- angular -->
	<script src="{{ public_path('service/js/angular/angular.min.js') }}" type="text/javascript"></script>
	<script src="{{ public_path('service/js/angular/angular-route.min.js') }}" type="text/javascript"></script>
	<script type="text/javascript" src="{{ public_path('service/js/angular/angular-animate.min.js') }}"></script>
	<script type="text/javascript" src="{{ public_path('service/js/angular/angular-aria.min.js') }}"></script>
	<script src="{{ public_path('service/js/angular/angular-material.js') }}" type="text/javascript"></script>
	@endif
	<style>
		body,
		html {
			font-family: DejaVu Sans, Verdana, Arial, sans-serif;
			font-size: 6pt;
			margin: 10px 20px;
			box-sizing: border-box;
		}

		@page {
			size: A4;

		}

		

		.text-center {
			text-align: center;
		}

		.p05 {
			padding: .2rem;
			font-size: 6pt;
		}

		table {
			font-size: 6pt;
		}

		header {
			width: 100%;
			display: flex;
			justify-content: flex-start;
			/* border:1px solid #000; */
		}

		.logo {
			width: 100px;
			height: auto;
			border-right: 1px solid #000;
			padding: .7rem;
		}

		/* img{
            width:100%;
            height:100%;
            object-fit:cover;
        } */
		.kop {
			padding: .3rem;
			align-self: center;
		}

		.kop-text {
			justify-content: center;
			align-items: center;
			align-content: center;
			text-align: center;
			font-size: smaller;
		}

		.info {
			border-left: 1px solid #000;
			border-right: 1px solid #000;
			border-collapse: collapse;
			flex-grow: 1;
			padding: .3rem;
		}

		.code {
			display: flex;
			flex-direction: column;
			font-size: 34px;
			flex-basis: 15%;
			padding: 0;
		}

		.code div:first-child {
			width: 100%;
			background: #000;
			color: #fff;
			text-align: center;
			padding: .5rem;
		}

		.code div:last-child {
			text-align: center;
			width: 100%;
			padding: .5rem;
		}

		.title {
			font-size: 16pt;
			font-weight: bold;
		}

		.bg-dark {
			background: #000;
			color: #fff;
			padding: .5rem;
			text-align: center;
		}

		.bordered {
			border: 1px solid black;
			border-collapse: collapse;
			padding: .2rem;
			box-sizing: border-box;
			font-size: 6pt;
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

		.flex {
			display: flex;
		}

		.flex .basis50 {
			flex-basis: 50%;
		}

		.col-2 {
			display: flex;
			flex-basis: 50%;
		}

		ul li:not(nth-child(1)) {
			padding: .3rem;
		}

		ul li {
			list-style: none;
		}

		.basis50 ul li:first-child {
			border-bottom: 1px solid #000;
			padding: .3rem;
		}

		.no-border-table {
			border-collapse: collapse;
		}

		.no-border-table,
		.no-border-table th,
		.no-border-table td {
			border: none;
			table-layout: fixed;
			width: 100%;
			font-size: 6pt;
		}
	</style>
</head>

<body>

	@if (!empty($res['d1']))

	<table class="bordered" width="100%" style="table-layout:fixed;text-align:center;">
		<tr>
			<td style="width:15%;margin:0 auto;" rowspan="2" class="bordered">
				<figure style="width:60px;margin:0 auto;">


					<img src="service/img/logo_only.png" alt="" style="width: 60px;">

				</figure>
			</td>
			<td style="width:35%;margin:0 auto;" rowspan="2" class="bordered">
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

			<td style="width:25%;margin:0;" rowspan="2" class="bordered">
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
			<td style="text-align:center;font-size:36px">126</td>
		</tr>
	</table>
	<table class="bordered" width="100%" style="table-layout:fixed;text-align:center;">
		<tr>
			<td colspan="2" class="title bg-dark ">FORMULIR PERMINTAAN DARAH</td>
		</tr>
		<tr>
			<td class="bordered">
				<div class="item">
					<h5>PERMINTAAN DARAH UNTUK TRANSFUSI</h5>
					<div class="border-bottom">
						<table>
							<tr>
								<td>Rumah Sakit</td>
								<td>:</td>
								<td>@{{ item.obj[31101248] ? item.obj[31101248] : '....................................'
									}}</td>
								<td>No. Reg :</td>
								<td>@{{ item.obj[31101249] ? item.obj[31101249] : '................' }}</td>
							</tr>
							<tr>
								<td>Bagian</td>
								<td>:</td>
								<td>@{{ item.obj[31101250] ? item.obj[31101250] : '....................................'
									}}</td>
								<td>Kelas :</td>
								<td>@{{ item.obj[31101251] ? item.obj[31101251] : '................' }}</td>
							</tr>
							<tr>
								<td>Dokter yang meminta</td>
								<td>:</td>
								<td colspan="3">@{{ item.obj[31101252] ? item.obj[31101252] :
									'..................................................................' }}</td>
							</tr>
							<tr>
								<td>Nama O.S </td>
								<td>:</td>
								<td>@{{ item.obj[31101253] ? item.obj[31101253] :
									'......................................' }} </td>
								<td>LK</td>
								<td>PR</td>
							</tr>
							<tr>
								<td>Nama Suami</td>
								<td>:</td>
								<td colspan="3">@{{ item.obj[31101254] ? item.obj[31101254] :
									'..................................................................' }}</td>
							</tr>
							<tr>
								<td>Tgl. Lahir/Umur</td>
								<td>:</td>
								<td colspan="3">@{{item.obj[31101255] | toDate | date:'dd MMMM yyyy'}}</td>
							</tr>
							<tr>
								<td>Alamat Rumah</td>
								<td>:</td>
								<td colspan="3">@{{ item.obj[31101256] ? item.obj[31101256] :
									'..................................................................' }}</td>
							</tr>
							<tr>
								<td>Tgl. Permintaan</td>
								<td>:</td>
								<td colspan="3">@{{item.obj[31101257] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
							</tr>
							<tr>
								<td>Tgl. Diperlukan</td>
								<td>:</td>
								<td colspan="3">@{{item.obj[31101258] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
							</tr>
						</table>
					</div>
					<section class="border-bottom p05">
						<table>
							<tr>
								<td>Diagnosa Klinis</td>
								<td>:</td>
								<td colspan="2">@{{ item.obj[31101259] ? item.obj[31101259] :
									'.........................................................' }}</td>
							</tr>
							<tr>
								<td>Alasan Transfusi</td>
								<td>:</td>
								<td colspan="2">@{{ item.obj[31101260] ? item.obj[31101260] :
									'.........................................................' }}</td>
							</tr>
							<tr>
								<td colspan="4">Hb: @{{ item.obj[31101261] ? item.obj[31101261] :
									'.......................................' }} gr</td>
							</tr>
							<tr>
								<td>Transfusi sebelumnya</td>
								<td>*)</td>
								<td>@{{ item.obj[31101262] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ya</td>
								<td>@{{ item.obj[31101263] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak</td>
							</tr>
							<tr>
								<td colspan="4">Kapan: @{{ item.obj[31101264] ? item.obj[31101264] :
									'...................................................................................'
									}}</td>
							</tr>
							<tr>
								<td>Reaksi Transfusi</td>
								<td>*)</td>
								<td>@{{ item.obj[31101265] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ya</td>
								<td>@{{ item.obj[31101266] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak</td>
							</tr>
							<tr>
								<td colspan="4">Gejala-gejala: @{{ item.obj[31101267] ? item.obj[31101267] :
									'.....................................................................' }}</td>
							</tr>
						</table>
					</section>
					<section class="border-bottom p05">
						<table>
							<tr>
								<td colspan="3">Apakah pernah diperksa serologi golongan darah</td>
							</tr>
							<tr>
								<td>(Coombs test) ?</td>
								<td>*) @{{ item.obj[31101268] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ya</td>
								<td>@{{ item.obj[31101269] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak</td>
							</tr>
							<tr>
								<td colspan="3">Dimana: @{{ item.obj[31101270] ? item.obj[31101270] :
									'.................................................................................'
									}}</td>
							</tr>
							<tr>
								<td colspan="3">Hasil: @{{ item.obj[31101271] ? item.obj[31101271] :
									'.....................................................................................'
									}}</td>
							</tr>
						</table>
					</section>
					<section class="border-bottom p05">
						<table class="p05">
							<tr>
								<td colspan="2"><strong>Khusus untuk pasien wanita :</strong></td>
							</tr>
							<tr>
								<td>1. Jumlah kehamilan sebelumnya :</td>
								<td colspan="2">@{{ item.obj[31101272] ? item.obj[31101272] :
									'........................................' }}</td>
							</tr>
							<tr>
								<td>2. Pernah abortus :</td>
								<td colspan="2">@{{ item.obj[31101273] ? item.obj[31101273] :
									'........................................' }}</td>
							</tr>
							<tr>
								<td>3. Adakah sebelumnya penyakit hemolitik pada bayi (HDN)?</td>
								<td>*) @{{ item.obj[31101274] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ya</td>
								<td>@{{ item.obj[31101275] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak</td>
							</tr>
							<tr height="20">
							</tr>
						</table>

					</section>
				</div>
			</td>
			<td class="bordered ">
				<div>
					<p>
						<u><strong>Perhatian :</strong></u>
						<br>
						*) Beri tanda pada kotak-kotak &#9634; &#9634; &#9634; yang dimaksud
						Setiap permintaan darah harap disertai contoh darah beku 5 cc minimal 2 cc
						Nama dan identitas O.S. pada formulir dan contoh darahnya harus sama
						Sebelum transfusi, cocokkan etiket pada kantong darah dengan labelnya dan disertakan dengan
						identitas O.S. yang ditransfusi. Bila ada ketidakcocokan segera kembalikan ke UTDC/ Bank Darah
						RS setempat.
					</p>
					<div>
						<strong><u>HARAP DIBERIKAN</u></strong>
						<table class="p05" style=" padding:.5rem;">
							<tr>
								<td colspan="3">DARAH LENGKAP *)</td>
								<td width="20px"></td>
								<td colspan="3">RED CELL CONCENTRATE *)</td>
							</tr>
							<tr>
								<td>@{{ item.obj[31101275] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Segar (< 18
										jam)</td>
								<td>:</td>
								<td>@{{ item.obj[31101276] ? item.obj[31101276] : '................................' }}
									cc</td>
								<td></td>
								<td colspan="3">(PACKED CELLS)</td>
							</tr>
							<tr>
								<td>@{{ item.obj[31101277] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Baru (< 6
										hari)</td>
								<td>:</td>
								<td>@{{ item.obj[31101278] ? item.obj[31101278] : '................................' }}
									cc</td>
								<td></td>
								<td>@{{ item.obj[31101279] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Biasa</td>
								<td>:</td>
								<td>@{{ item.obj[31101280] ? item.obj[31101280] : '................................' }}
									cc</td>
							</tr>
							<tr>
								<td>@{{ item.obj[31101281] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Biasa</td>
								<td>:</td>
								<td>@{{ item.obj[31101282] ? item.obj[31101282] : '................................' }}
									cc</td>
								<td></td>
								<td>@{{ item.obj[31101283] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} cuci</td>
								<td>:</td>
								<td>@{{ item.obj[31101284] ? item.obj[31101284] : '................................' }}
									cc</td>
							</tr>
						</table>
						<br>
						<br>
						<table class="p05" style="padding:.5rem;">
							<tr>
								<td width="75px">PLASMA *)</td>
								<td>@{{ item.obj[31101285] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Plasma biasa</td>
								<td>: @{{ item.obj[31101286] ? item.obj[31101286] : '................................'
									}} cc</td>
							</tr>
							<tr>
								<td></td>
								<td>@{{ item.obj[31101287] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Fresh frozen
									plasma (FFP)</td>
								<td>: @{{ item.obj[31101288] ? item.obj[31101288] : '................................'
									}} cc</td>
							</tr>
						</table>
						<br>
						<br>
						<table class="p05" style="padding:.5rem;">
							<tr>
								<td colspan="4"><u>FAKTOR PEMBEKUAN *)</u></td>
							</tr>
							<tr>
								<td colspan="4"></td>
							</tr>
							<tr>
								<td>@{{ item.obj[31101289] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Thrombocyt
									concentrate (TC)</td>
								<td>:</td>
								<td>@{{ item.obj[31101290] ? item.obj[31101290] : '................................' }}
								</td>
								<td>kantong</td>
							</tr>
							<tr>
								<td>@{{ item.obj[31101291] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Cryoprecipitate
									AHF</td>
								<td>:</td>
								<td>@{{ item.obj[31101292] ? item.obj[31101292] : '................................' }}
								</td>
								<td>kantong</td>
							</tr>
							<tr>
								<td>@{{ item.obj[31101293] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
									Buffycoat-granulocyt concentrate</td>
								<td>:</td>
								<td>@{{ item.obj[31101294] ? item.obj[31101294] : '................................' }}
								</td>
								<td>kantong</td>
							</tr>
							<tr>
								<td>@{{ item.obj[31101295] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Lain-lain</td>
								<td>:</td>
								<td colspan="2">@{{ item.obj[31101296] ? item.obj[31101296] :
									'................................' }}</td>
							</tr>
						</table>
						<table class="p05" style="padding:.5rem;">
							<tr class="text-center">
								<td>Nama dan tanda tangan petugas</td>
								<td width="40px"></td>
								<td>Nama dan tanda tangan Dokter</td>
							</tr>
							<tr class="text-center" style="border-bottom:1px solid #000">
								<td>Yang mengambil contoh darah O.S</td>
								<td></td>
								<td>Yang meminta darah dan cap rumah sakit</td>
							</tr>
							<tr class="text-center" style="border-bottom:1px solid #000">
								<td>
									<div id="qrcodep1" style="text-align: center"></div>
								</td>
								<td></td>
								<td>
									<div id="qrcodepp1" style="text-align: center"></div>
								</td>
							</tr>
							<tr class="text-center" style="border-bottom:1px solid #000">
								<td>@{{ item.obj[31101297] ? item.obj[31101297] : '................................' }}
								</td>
								<td></td>
								<td>@{{ item.obj[31101298] ? item.obj[31101298] : '................................' }}
								</td>
							</tr>
						</table>
					</div>
				</div>
			</td>
		</tr>
	</table>

	<table class="bordered" width="100%" style="table-layout:fixed;text-align:center;">
		
		<tr>
			
			<td>
			<p class="border-bottom">DIISI OLEH PETUGAS UTD ...........................................</p>
		
				<table class="p05">
					<tr>
						<td>Contoh darah O.S</td>
						<td>:</td>
						<td>@{{ item.obj[31101299] ? item.obj[31101299] : '................................' }}
						</td>
					</tr>
					<tr>
						<td>Diterima tanggal</td>
						<td>:</td>
						<td>@{{item.obj[31101300] | toDate | date:'dd MMMM yyyy'}}</td>
					</tr>
					<tr>
						<td>Jam</td>
						<td>:</td>
						<td>@{{item.obj[31101300] | toDate | date:'HH:mm'}} WITA</td>
					</tr>
					<tr>
						<td>ATD/PTTD Penerima</td>
						<td>:</td>
						<td>@{{ item.obj[31101301] ? item.obj[31101301] : '................................' }}
						</td>
					</tr>
				</table>
			</td>
			<td>
				<table class="bordered" width="100%" style="table-layout:fixed;">
					<tr class="bordered">
						<td class="bordered">ABO</td>
						<td class="bordered">RHESUS</td>
						<td class="bordered">LAIN</td>
					</tr>
					<tr class="bordered">
						<td height="45" class="bordered">@{{ item.obj[31101302] ? item.obj[31101302] : '' }}
						</td>
						<td class="bordered">@{{ item.obj[31101303] ? item.obj[31101303] : '' }}</td>
						<td class="bordered">@{{ item.obj[31101304] ? item.obj[31101304] : '' }}</td>
					</tr>
				</table>

			</td>
		
			<td >

				<table class="p05 bordered" width="100%" style="table-layout:fixed;">
					<tr class="bordered">
						<td rowspan="2" height="46px" class="bordered text-center p05">Hasil Cross *)</td>
						<td colspan="3" class="bordered p05" width="115px">ATD/PTTD Pemeriksa</td>
					</tr>
					<tr class="bordered text-center" style="height:16px">
						<td class="bordered p05">Nama</td>
						<td class="bordered p05">Tanggal</td>
						<td class="bordered p05">Jam</td>
					</tr>
					<tr class="bordered" style="height:16px">
						<td class="bordered" width="230px">@{{ item.obj[31101305] ? item.obj[31101305] : '' }}</td>
						<td class="bordered">@{{ item.obj[31101306] ? item.obj[31101306] : '' }}</td>
						<td class="bordered">@{{item.obj[31101307] | toDate | date:'dd MMMM yyyy'}}</td>
						<td class="bordered">@{{item.obj[31101307] | toDate | date:'HH:mm'}}</td>
					</tr>
					<tr class="bordered" style="height:16px">
						<td class="bordered">@{{ item.obj[31101308] ? item.obj[31101308] : '' }}</td>
						<td class="bordered">@{{ item.obj[31101309] ? item.obj[31101309] : '' }}</td>
						<td class="bordered">@{{item.obj[31101310] | toDate | date:'dd MMMM yyyy'}}</td>
						<td class="bordered">@{{item.obj[31101310] | toDate | date:'HH:mm'}}</td>
					</tr>
					<tr class="bordered">
						<td class="bordered">@{{ item.obj[31101311] ? item.obj[31101311] : '' }}</td>
						<td class="bordered">@{{ item.obj[31101312] ? item.obj[31101312] : '' }}</td>
						<td class="bordered">@{{item.obj[31101313] | toDate | date:'dd MMMM yyyy'}}</td>
						<td class="bordered">@{{item.obj[31101313] | toDate | date:'HH:mm'}}</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>

	<table class="bordered" width="100%" style="table-layout:fixed;">
		<tr>
			<td rowspan="3" class="bordered rotate" width="3%">No</td>
			<td rowspan="2" class="bordered" colspan="2">Telah diberikan darah dengan perincian :</td>
			<td class="bordered">ABO</td>
			<td class="bordered">RHESUS</td>
			<td class="bordered">LAIN2</td>
			<td class="bordered" rowspan="2" colspan="3">ATD/PTTD yang mengeluarkan darah</td>
			<td class="bordered" rowspan="2" colspan="3">Keluarga / Petugas yang mengambil darah</td>
		</tr>
		<tr>
			<td class="bordered">@{{ item.obj[31101314] ? item.obj[31101314] : '' }}</td>
			<td class="bordered">@{{ item.obj[31101315] ? item.obj[31101315] : '' }}</td>
			<td class="bordered">@{{ item.obj[31101316] ? item.obj[31101316] : '' }}</td>
		</tr>
		<tr>
			<td class="bordered">Jumlah yang dikeluarkan cc / kantong</td>
			<td class="bordered">Jenis darah</td>
			<td class="bordered">Tanggal Pengambilan</td>
			<td colspan="2" class="bordered">No. Kantong</td>
			<td class="bordered">Nama</td>
			<td class="bordered">Tanggal</td>
			<td class="bordered">Jam</td>
			<td class="bordered" colspan="3">Nama / Alamat / Tanda tangan penerima darah</td>
		</tr>
		<tr>
			<td class="bordered">1</td>
			<td class="bordered">@{{ item.obj[31101317] ? item.obj[31101317] : '' }}</td>
			<td class="bordered">@{{ item.obj[31101318] ? item.obj[31101318] : '' }}</td>
			<td class="bordered">@{{item.obj[31101319] | toDate | date:'dd MMMM yyyy'}}</td>
			<td colspan="2" class="bordered">@{{ item.obj[31101320] ? item.obj[31101320] : '' }}</td>
			<td rowspan="5" class="bordered" colspan="3">@{{ item.obj[31101321] ? item.obj[31101321] : '' }}</td>
			<td rowspan="5" class="bordered" colspan="3">@{{ item.obj[31101322] ? item.obj[31101322] : '' }}</td>
		</tr>
		<tr>
			<td class="bordered">2</td>
			<td class="bordered">@{{ item.obj[31101323] ? item.obj[31101323] : '' }}</td>
			<td class="bordered">@{{ item.obj[31101324] ? item.obj[31101324] : '' }}</td>
			<td class="bordered">@{{item.obj[31101325] | toDate | date:'dd MMMM yyyy'}}</td>
			<td colspan="2" class="bordered">@{{ item.obj[31101326] ? item.obj[31101326] : '' }}</td>
		</tr>
		<tr>
			<td class="bordered">3</td>
			<td class="bordered">@{{ item.obj[31101327] ? item.obj[31101327] : '' }}</td>
			<td class="bordered">@{{ item.obj[31101328] ? item.obj[31101328] : '' }}</td>
			<td class="bordered">@{{item.obj[32111270] | toDate | date:'dd MMMM yyyy'}}</td>
			<td colspan="2" class="bordered">@{{ item.obj[31101329] ? item.obj[31101329] : '' }}</td>
		</tr>
		<tr>
			<td class="bordered">4</td>
			<td class="bordered">@{{ item.obj[31101330] ? item.obj[31101330] : '' }}</td>
			<td class="bordered">@{{ item.obj[31101331] ? item.obj[31101331] : '' }}</td>
			<td class="bordered">@{{item.obj[32111271] | toDate | date:'dd MMMM yyyy'}}</td>
			<td colspan="2" class="bordered">@{{ item.obj[31101332] ? item.obj[31101332] : '' }}</td>
		</tr>
		<tr>
			<td class="bordered">5</td>
			<td class="bordered">@{{ item.obj[31101333] ? item.obj[31101333] : '' }}</td>
			<td class="bordered">@{{ item.obj[31101334] ? item.obj[31101334] : '' }}</td>
			<td class="bordered">@{{item.obj[32111272] | toDate | date:'dd MMMM yyyy'}}</td>
			<td colspan="2" class="bordered">@{{ item.obj[31101335] ? item.obj[31101335] : '' }}</td>
		</tr>
		<tr>
			<td class="bordered">6</td>
			<td class="bordered">@{{ item.obj[31101336] ? item.obj[31101336] : '' }}</td>
			<td class="bordered">@{{ item.obj[31101337] ? item.obj[31101337] : '' }}</td>
			<td class="bordered">@{{item.obj[32111273] | toDate | date:'dd MMMM yyyy'}}</td>
			<td colspan="2" class="bordered">@{{ item.obj[31101339] ? item.obj[31101339] : '' }}</td>
			<td rowspan="5" class="bordered" colspan="3">@{{ item.obj[31101340] ? item.obj[31101340] : '' }}</td>
			<td rowspan="5" class="bordered" colspan="3">@{{ item.obj[31101341] ? item.obj[31101341] : '' }}</td>
		</tr>
		<tr>
			<td class="bordered">7</td>
			<td class="bordered">@{{ item.obj[31101342] ? item.obj[31101342] : '' }}</td>
			<td class="bordered">@{{ item.obj[31101343] ? item.obj[31101343] : '' }}</td>
			<td class="bordered">@{{item.obj[32111274] | toDate | date:'dd MMMM yyyy'}}</td>
			<td colspan="2" class="bordered">@{{ item.obj[31101344] ? item.obj[31101344] : '' }}</td>
		</tr>
		<tr>
			<td class="bordered">8</td>
			<td class="bordered">@{{ item.obj[31101345] ? item.obj[31101345] : '' }}</td>
			<td class="bordered">@{{ item.obj[31101346] ? item.obj[31101346] : '' }}</td>
			<td class="bordered">@{{item.obj[32111275] | toDate | date:'dd MMMM yyyy'}}</td>
			<td colspan="2" class="bordered">@{{ item.obj[31101347] ? item.obj[31101347] : '' }}</td>
		</tr>
		<tr>
			<td class="bordered">9</td>
			<td class="bordered">@{{ item.obj[31101348] ? item.obj[31101348] : '' }}</td>
			<td class="bordered">@{{ item.obj[31101349] ? item.obj[31101349] : '' }}</td>
			<td class="bordered">@{{item.obj[32111276] | toDate | date:'dd MMMM yyyy'}}</td>
			<td colspan="2" class="bordered">@{{ item.obj[31101350] ? item.obj[31101350] : '' }}</td>
		</tr>
		<tr>
			<td class="bordered">10</td>
			<td class="bordered">@{{ item.obj[31101351] ? item.obj[31101351] : '' }}</td>
			<td class="bordered">@{{ item.obj[31101352] ? item.obj[31101352] : '' }}</td>
			<td class="bordered">@{{item.obj[32111277] | toDate | date:'dd MMMM yyyy'}}</td>
			<td colspan="2" class="bordered">@{{ item.obj[31101353] ? item.obj[31101353] : '' }}</td>
		</tr>
		<tr>
			<td class="bordered">11</td>
			<td class="bordered">@{{ item.obj[31101354] ? item.obj[31101354] : '' }}</td>
			<td class="bordered">@{{ item.obj[31101355] ? item.obj[31101355] : '' }}</td>
			<td class="bordered">@{{item.obj[31101356] | toDate | date:'dd MMMM yyyy'}}</td>
			<td colspan="2" class="bordered">@{{ item.obj[31101357] ? item.obj[31101357] : '' }}</td>
			<td rowspan="5" class="bordered" colspan="3">@{{ item.obj[31101358] ? item.obj[31101358] : '' }}</td>
			<td rowspan="5" class="bordered" colspan="3">@{{ item.obj[31101359] ? item.obj[31101359] : '' }}</td>
		</tr>
		<tr>
			<td class="bordered">12</td>
			<td class="bordered">@{{ item.obj[31101360] ? item.obj[31101360] : '' }}</td>
			<td class="bordered">@{{ item.obj[31101361] ? item.obj[31101361] : '' }}</td>
			<td class="bordered">@{{item.obj[31101362] | toDate | date:'dd MMMM yyyy'}}</td>
			<td colspan="2" class="bordered">@{{ item.obj[31101363] ? item.obj[31101363] : '' }}</td>
		</tr>
		<tr>
			<td class="bordered">13</td>
			<td class="bordered">@{{ item.obj[31101364] ? item.obj[31101364] : '' }}</td>
			<td class="bordered">@{{ item.obj[31101365] ? item.obj[31101365] : '' }}</td>
			<td class="bordered">@{{item.obj[31101366] | toDate | date:'dd MMMM yyyy'}}</td>
			<td colspan="2" class="bordered">@{{ item.obj[31101367] ? item.obj[31101367] : '' }}</td>
		</tr>
		<tr>
			<td class="bordered">14</td>
			<td class="bordered">@{{ item.obj[31101368] ? item.obj[31101368] : '' }}</td>
			<td class="bordered">@{{ item.obj[31101369] ? item.obj[31101369] : '' }}</td>
			<td class="bordered">@{{item.obj[31101370] | toDate | date:'dd MMMM yyyy'}}</td>
			<td colspan="2" class="bordered">@{{ item.obj[31101371] ? item.obj[31101371] : '' }}</td>
		</tr>
		<tr>
			<td class="bordered">15</td>
			<td class="bordered">@{{ item.obj[31101372] ? item.obj[31101372] : '' }}</td>
			<td class="bordered">@{{ item.obj[31101373] ? item.obj[31101373] : '' }}</td>
			<td class="bordered">@{{item.obj[31101374] | toDate | date:'dd MMMM yyyy'}}</td>
			<td colspan="2" class="bordered">@{{ item.obj[31101375] ? item.obj[31101375] : '' }}</td>
		</tr>
		<tr>
			<td class="bordered" colspan="12" style="text-align: left;">
				<ul>
					<li>Lembar 1 (putih) : untuk Unit Transfusi darah (UTD)</li>
					<li>Lembar 2 (merah) disertakan bersamaan dengan kantong-kantong darah yang akan ditransfusikan
						ke ruangan</li>
				</ul>
			</td>
		</tr>
	</table>

	@endif
</body>


</html>