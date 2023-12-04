<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<style>
		* {
			padding: 0;
			margin: 0;
			box-sizing: border-box;
			font-family: DejaVu Sans, Verdana, Arial, sans-serif;
		}

		body,
		html {
			font-family: Arial, Helvetica, sans-serif;
			font-size: 6pt;
			margin: 10px 20px;
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
			table-layout: fixed;
			width: 100%;
		}

		tr td {
			border: 1px solid #000;
			border-collapse: collapse;
			padding: .3rem;
		}



		td input {
			vertical-align: middle;
		}

		.format {
			padding: 1rem;
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
		}
	</style>
</head>

<body>

	<table style="text-align:center;">
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
				<table style="border:none;table-layout:fixed;text-align:center;">
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
				<table style="border:none;table-layout:fixed;text-align:left;">
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
			<td style="text-align:center;font-size:36px">126</td>
		</tr>
	</table>
	<table>
		<tr>
			<td style="text-align:center;background: #000;color: #fff;">
				<h1>FORMULIR PERMINTAAN DARAH</h1>
			</td>
		</tr>
	</table>
	<table>
		<tr>
			<td widt="50%">
				<h2>PERMINTAAN DARAH UNTUK TRANSFUSI</h2>
				<table class="no-border-table">
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
			</td>

			<td rowspan="4">

				
					<h2><u><strong>Perhatian :</strong></u></h2>
					<br>
					<p class="border-bottom p05">
					*) Beri tanda pada kotak-kotak &#9634; &#9634; &#9634; yang dimaksud
					Setiap permintaan darah harap disertai contoh darah beku 5 cc minimal 2 cc
					Nama dan identitas O.S. pada formulir dan contoh darahnya harus sama
					Sebelum transfusi, cocokkan etiket pada kantong darah dengan labelnya dan disertakan dengan
					identitas O.S. yang ditransfusi. Bila ada ketidakcocokan segera kembalikan ke UTDC/ Bank Darah
					RS setempat.
				</p>
				<h2><strong><u>HARAP DIBERIKAN</u></strong></h2>
				<table class="no-border-table">
					<tr>
						<td colspan="3">DARAH LENGKAP *)</td>
						<td width="20px"></td>
						<td colspan="3">RED CELL CONCENTRATE *)</td>
					</tr>
					<tr>
						<td>@{{ item.obj[31101275] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Segar (< 18 jam)</td>
						<td>:</td>
						<td>@{{ item.obj[31101276] ? item.obj[31101276] : '................................' }}
							cc</td>
						<td></td>
						<td colspan="3">(PACKED CELLS)</td>
					</tr>
					<tr>
						<td>@{{ item.obj[31101277] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Baru (< 6 hari)</td>
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
				<table class="no-border-table">
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
				<table class="no-border-table">
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
				<table class="no-border-table">
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

			</td>

		</tr>
		<tr>
			<td widt="50%">
				<table class="no-border-table">
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


			</td>
		</tr>
		<tr>
			<td>
				<table class="no-border-table">
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
			</td>
		</tr>
		<tr>
			<td>
				<table class="no-border-table">
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
			</td>
		</tr>

	</table>
	<table>
		<tr>
			<td>
			<p class="p05 border-bottom">DIISI OLEH PETUGAS UTD ...........................................</p>
				<div class="flex col-2 ">
					<div class="border-right" style="width:90%">
						<table style="font-size: smaller;">
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
					</div>
					<div class="p05">
						<table class="bordered">
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
					</div>
				</div>
			</td>
		</tr>
	</table>

</body>

</html>