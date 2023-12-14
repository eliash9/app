<!DOCTYPE html>
<html lang="en" ng-app="angularApp">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lembar Kerja Kelainan Pernafasan Neonatus</title>

	<style>
		@page {
			size: auto;
			size: A4 portrait;
		}

		html,
		body {
			font-family: DejaVu Sans, Arial, Helvetica, sans-serif;
			font-size: 9pt;

		}

		table {
			page-break-inside: auto;
			table-layout: fixed;
			border-collapse: collapse;

			width: 100%;
		}

		tr,
		td {
			padding: .3rem;
			page-break-inside: avoid;
			page-break-after: auto;
			border: 1px solid #000;
		}

		.noborder {
			padding: .3rem;
			page-break-inside: avoid;
			page-break-after: auto;
			border: none;
		}

		.bg-dark {
			background: #000;
			color: #fff;
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
			font-size: x-large;
			padding: .5rem;
			height: 20pt !important;
		}
	</style>
</head>

<body ng-controller="cetakLembarKerjaNeonatus">
	<table width="100%" style="table-layout:fixed;text-align:center;">
		<tr>
			<td style="width:15%;margin:0 auto;" rowspan="2">
				<figure style="width:60px;margin:0 auto;">



					<img src="{{public_path('service/img/logo_only.png')}}" alt="" style="width: 60px;">

				</figure>
			</td>
			<td style="width:35%;margin:0 auto;" rowspan="2">
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

			<td style="width:25%;margin:0;" rowspan="2">
				<table width="100%" style="border:none;table-layout:fixed;text-align:left;">
					<tr class="noborder">
						<td colspan="4" style="border:none;font-size:7pt;">No. RM</td>
						<td style="border:none;font-size:7pt;" colspan="9">: {!! $res['d'][0]->nocm !!} </td>

					</tr>
					<tr class="noborder">
						<td colspan="4" style="border:none;font-size:7pt;">Nama</td>
						<td style="border:none;font-size:7pt;" colspan="9">: {!! $res['d'][0]->namapasien !!} ({!!
							$res['d'][0]->jeniskelamin == 'PEREMPUAN' ? 'P' : 'L' !!})</td>

					</tr>
					<tr class="noborder">
						<td colspan="4" style="border:none;font-size:7pt;">Tanggal Lahir</td>
						<td style="border:none;font-size:7pt;" colspan="9">: {!! date('d-m-Y',strtotime(
							$res['d'][0]->tgllahir
							)) !!}</td>
					</tr>
					<tr class="noborder">
						<td colspan="4" style="border:none;font-size:7pt;">NIK</td>
						<td style="border:none;font-size:7pt;" colspan="9">: {!! $res['d'][0]->noidentitas !!}</td>

					</tr>
				</table>

			</td>
			<td style="width:10%;margin:0 auto;background:#000;color:#fff;text-align:center;font-size:36px">
				RM</td>

		</tr>
		<tr>
			<td style="text-align:center;font-size:36px">64</td>
		</tr>
	</table>

	<table>
		<tr class="bordered bg-dark">
			<th colspan="20" height="20pt">LEMBAR KERJA KELAINAN PERNAFASAN NEONATUS</th>
		</tr>


		<tr>
			<td colspan="20" class="noborder">Memeriksa semua neonatus untuk kesulitan pernapasan. Perhatikan
				apabila frekuensi napas > 60x/menit atau Saturasi 0<sub>2</sub> &lt; 80 %
			</td>
		</tr>
		<tr>
			<td colspan="5" class="noborder" style="border-top:none">
				Frekuensi
				Napas @{{ item.obj[1000751] ? item.obj[1000751] : '' }} / menit
			</td>
			<td colspan="15" class="noborder">
				Saturasi 0<sub>2</sub> @{{ item.obj[1000752] ? item.obj[1000752] : '' }} %
			</td>
		</tr>


		<tr>
			<td colspan="20">Penilaian Downe Score. Lingkari yang sesuai.</td>
		</tr>
		<tr>
			<td colspan="5">PEMERIKSAAN</td>
			<td colspan="5" class="text-center">NILAI 0</td>
			<td colspan="5" class="text-center">NILAI 1</td>
			<td colspan="5" class="text-center">NILAI 2</td>
		</tr>
		<tr>
			<td colspan="5">Frekuensinapas</td>
			<td colspan="5">@{{ item.obj[1000833] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} < 60/menit</td>
			<td colspan="5">@{{ item.obj[1000834] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 60 - 80/menit</td>
			<td colspan="5">@{{ item.obj[1000835] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} > 80/menit</td>
		</tr>
		<tr>
			<td colspan="5">Retraksi</td>
			<td colspan="5">@{{ item.obj[1000837] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak ada Retraksi</td>
			<td colspan="5">@{{ item.obj[1000838] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} RetraksiRingan</td>
			<td colspan="5">@{{ item.obj[1000839] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} RetraksiBerat</td>
		</tr>
		<tr>
			<td colspan="5">Sianosis</td>
			<td colspan="5">@{{ item.obj[1000841] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak ada Sianosis</td>
			<td colspan="5">@{{ item.obj[1000842] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Sianosishilang dengan
				pemberian 0 <sub>2</sub></td>
			<td colspan="5">@{{ item.obj[1000843] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Sianosismenetap
				walaupun diberi 0<sub>2</sub></td>
		</tr>
		<tr>
			<td colspan="5">Suara Napas</td>
			<td colspan="5">@{{ item.obj[1000845] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Suara Napas di Kedua
				Paru Baik</td>
			<td colspan="5">@{{ item.obj[1000846] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} SuaraNapas di Kedua
				Paru Menurun</td>
			<td colspan="5">@{{ item.obj[1000847] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidakada Suara Napas di
				Kedua Paru</td>
		</tr>
		<tr>
			<td colspan="5">Merintih</td>
			<td colspan="5">@{{ item.obj[1000849] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak Merintih</td>
			<td colspan="5">@{{ item.obj[1000850] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dapatdidengar dengan
				Stetoskop</td>
			<td colspan="5">@{{ item.obj[1000851] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dapatdidengar tanpa
				Alat Bantu</td>
		</tr>
		<tr>
			<td colspan="5"><strong>NILAI TOTAL</strong></td>
			<td colspan="5" style="text-align: center">@{{ item.obj[1000852] ? item.obj[1000852] : '' }}</td>
			<td colspan="5" style="text-align: center">@{{ item.obj[1000853] ? item.obj[1000853] : '' }}</td>
			<td colspan="5" style="text-align: center">@{{ item.obj[1000854] ? item.obj[1000854] : '' }}</td>
		</tr>
		<tr>
			<td colspan="20">Beri tanda silang : @{{ item.obj[1000756] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
				&lt; 3 Gawat Napas Ringan @{{ item.obj[1000757] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4-5 Gawat
				Napas Sedang @{{ item.obj[1000758] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} > 6 Gawat Napas Berat
			</td>
		</tr>
		<tr>
			<td colspan="20">
				Dibawah ini adalah penyebab paling umum dari kesulitan bernafas. Beri tanda &#10004; pada semua yang
				sesuai *
			</td>
		</tr>
		<tr>
			<td colspan="2"></td>
			<td colspan="4" class="text-center"><strong>RDS</strong></td>
			<td colspan="4" class="text-center"><strong>Transient Tachypnea</strong></td>
			<td colspan="4" class="text-center"><strong>Radang Paru-Paru</strong></td>
			<td colspan="6" class="text-center"><strong>Sindrom Kebocoran Napas</strong></td>
		</tr>
		<tr>
			<td colspan="2">Riwayat</td>
			<td colspan="4">@{{ item.obj[1000855] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Prematur &lt; 35 mgg
				@{{ item.obj[1000856] ? item.obj[1000856] : '' }} mgg</td>
			<td colspan="4">@{{ item.obj[1000857] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Kehamilan &gt;37 mgg
				@{{ item.obj[1000858] ? item.obj[1000858] : '' }} mgg</td>
			<td colspan="4">@{{ item.obj[1000859] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} &gt; Hari</td>
			<td colspan="6">@{{ item.obj[1000860] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Aspirasi Meconium</td>
		</tr>
		<tr>
			<td colspan="2"></td>
			<td colspan="4">@{{ item.obj[1000861] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak dapat steroid
				antenatal</td>
			<td colspan="4">@{{ item.obj[1000862] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Sectio Caesaria</td>
			<td colspan="4">@{{ item.obj[1000863] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Demam</td>
			<td colspan="6">@{{ item.obj[1000864] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Resusitasi lama</td>
		</tr>
		<tr>
			<td colspan="2"></td>
			<td colspan="4">@{{ item.obj[1000865] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Distress lebih dari
				hari</td>
			<td colspan="4">@{{ item.obj[1000866] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Distress ringan dan
				membaik</td>
			<td colspan="4">@{{ item.obj[1000867] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Batuk</td>
			<td colspan="6">@{{ item.obj[1000868] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Antibiotik dan
				O<sub>2</sub> tidak menolong</td>
		</tr>
		<tr>
			<td colspan="2"></td>
			<td colspan="4"></td>
			<td colspan="4"></td>
			<td colspan="4"></td>
			<td colspan="6"></td>
		</tr>
		<tr>
			<td colspan="2">Fisik</td>
			<td colspan="4">@{{ item.obj[1000869] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} BB &lt; g: @{{
				item.obj[1000870] ? item.obj[1000870] : '' }}</td>
			<td colspan="4">@{{ item.obj[1000871] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} BB &gt; g: @{{
				item.obj[1000872] ? item.obj[1000872] : '' }}</td>
			<td colspan="4">@{{ item.obj[1000873] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} >Demam : @{{
				item.obj[1000874] ? item.obj[1000874] : '' }} <sup>0</sup>C</td>
			<td colspan="6">@{{ item.obj[1000875] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Retraksi berat</td>
		</tr>
		<tr>
			<td colspan="2"></td>
			<td colspan="4">@{{ item.obj[1000876] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Pernafasan memburuk
			</td>
			<td colspan="4">@{{ item.obj[1000877] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Napas bising dan basah
			</td>
			<td colspan="4">@{{ item.obj[1000878] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} >Ronchi saat inspirasi
			</td>
			<td colspan="6">@{{ item.obj[1000879] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Suara napas di satu
				paru menurun</td>
		</tr>
		<tr>
			<td colspan="2"></td>
			<td colspan="4">@{{ item.obj[1000880] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Rontgen Pola
				reticulogranular</td>
			<td colspan="4">@{{ item.obj[1000881] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Retraksi minimal</td>
			<td colspan="4">@{{ item.obj[1000882] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Buruk</td>
			<td colspan="6">@{{ item.obj[1000883] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Rontgen : Udara keluar
				paru-paru</td>
		</tr>
		<tr>
			<td colspan="2"></td>
			<td colspan="4"></td>
			<td colspan="4"></td>
			<td colspan="4"></td>
			<td colspan="6"></td>
		</tr>
		<tr valign="top">
			<td colspan="2">Terapi</td>
			<td colspan="4">@{{ item.obj[1000884] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} CPAP</td>
			<td colspan="4">@{{ item.obj[1000885] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Pertimbangkan
				O<sub>2</sub> dengan nasal Cannula aliran rendah</td>
			<td colspan="4">@{{ item.obj[1000886] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 0<sub>2</sub> Nasal
				cannula </td>
			<td colspan="6">@{{ item.obj[1000887] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Penunjang oksigen </td>
		</tr>
		<tr>
			<td colspan="2"></td>
			<td colspan="4">@{{ item.obj[1000888] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Pertimbangkan
				surfaktant</td>
			<td colspan="4">@{{ item.obj[1000889] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Observasi</td>
			<td colspan="4">@{{ item.obj[1000890] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Antibiotik</td>
			<td colspan="6">@{{ item.obj[1000891] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dekompresi kebocoran
			</td>
		</tr>
		<tr>
			<td colspan="20"><small>
					Diagnosalain termasuk penyakit jantung kongenital, asidosis, tekanan paru-paru tinggi</small>
			</td>
		</tr>
		<tr>
			<td colspan="20">Catatan/Diagnosa Lain : @{{ item.obj[1000763] ? item.obj[1000763] : '' }}</td>
		</tr>
		<tr>
			<td colspan="20"><strong>Metode Penunjang 0<sub>2</sub></strong></td>
		</tr>
		<tr class="text-center">
			<td colspan="3" style="text-align: left;border:none">@{{ item.obj[1000765] ? '[&#10004;]' :
				'[&nbsp;&nbsp;&nbsp;]' }} Nasal Canula</td>
			<td colspan="2" class="noborder">(lingkari)</td>
			<td colspan="3" class="noborder">@{{ item.obj[1000765] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} &#xbd;
			</td>
			<td colspan="2" class="noborder">@{{ item.obj[1000766] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
			<td colspan="" class="noborder">@{{ item.obj[1000767] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
			<td colspan="" class="noborder">@{{ item.obj[1000768] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
			<td colspan="" class="noborder">@{{ item.obj[1000769] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
			<td colspan="7" style="text-align: left;" class="noborder">@{{ item.obj[1000770] ? '[&#10004;]' :
				'[&nbsp;&nbsp;&nbsp;]' }} Liter &nbsp;&nbsp;@{{ item.obj[1000771] ? item.obj[1000771] : '' }} %
				O<sub>2</sub>
		<tr class="text-center">
			<td colspan="3" style="text-align: left;" class="noborder">@{{ item.obj[1000772] ? '[&#10004;]' :
				'[&nbsp;&nbsp;&nbsp;]' }} CPAP</td>
			<td colspan="" class="noborder">@{{ item.obj[1000773] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
			<td colspan="" class="noborder">@{{ item.obj[1000774] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
			<td colspan="3" class="noborder">@{{ item.obj[1000775] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
			<td colspan="2" class="noborder">@{{ item.obj[1000776] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} PEEP
			</td>
			<td colspan="3" class="noborder" style="text-align: left;"> @{{ item.obj[1000777] ? item.obj[1000777] :
				'' }} % O<sub>2</sub></td>
			<td colspan="" class="noborder">@{{ item.obj[1000778] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
			<td colspan="" class="noborder">@{{ item.obj[1000779] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
			<td colspan="" class="noborder">@{{ item.obj[1000780] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 6</td>
			<td colspan="" class="noborder">@{{ item.obj[1000781] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 7</td>
			<td colspan="" class="noborder">@{{ item.obj[1000782] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 8</td>
			<td colspan="2" class="noborder">@{{ item.obj[1000783] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Liter
			</td>
		</tr>
		<tr class="text-center">
			<td colspan="3" class="noborder" style="text-align: left;">
				@{{ item.obj[1000784] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Intubasi.
			</td>
			<td class="noborder">@{{ item.obj[1000784] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tipe</td>
			<td colspan="6" class="noborder">@{{ item.obj[1000785] ? item.obj[1000785] : '' }} Rate</td>
			<td class="noborder"></td>
			<td class="noborder">@{{ item.obj[1000786] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 30</td>
			<td class="noborder">@{{ item.obj[1000787] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} PEEP</td>
			<td class="noborder">@{{ item.obj[1000788] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 5</td>
			<td class="noborder">@{{ item.obj[1000789] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} PIP</td>
			<td class="noborder">@{{ item.obj[1000790] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 25</td>
			<td class="noborder" colspan="4">@{{ item.obj[1000791] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
				Waktu Inspirasi 0.
			</td>
		</tr>
		<tr>
			<td colspan="20" class="noborder">Catatan termasuk perubahan di atas @{{ item.obj[1000792] ?
				item.obj[1000792] : '' }}</td>
		</tr>
		<tr>
			<td colspan="20"><b><u></u>Antibiotik</b></td>
		</tr>
		<tr>
			<td colspan="10" class="noborder">
				@{{ item.obj[1000793] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Infan usia &#x2264; 7 hari.
				Gentamicin<sup>1</sup> 5 mg/kg = @{{ item.obj[1000794] ? item.obj[1000794] : '' }} mg IV/IM tiap @{{
				item.obj[1000795] ? item.obj[1000795] : '' }} jam +
			</td>
			<td class="text-center" colspan="10" rowspan="2">
				SELANG WAKTU PEMBERIAN GENTAMICIN 15 mg/kg
			</td>
		</tr>
		<tr>
			<td colspan="10" class="noborder">&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&#x2264; 2kg :
				Ampicillin<sup>2</sup> mg/kg tiap 12 jam &gt;= @{{ item.obj[1000796] ? item.obj[1000796] : '' }} mg
				IV tiap jam 12</td>
		</tr>
		<tr>
			<td colspan="10" class="noborder">
				&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&#x2264; 2kg : Ampicillin<sup></sup> mg/kg tiap jam = @{{
				item.obj[1000797] ? item.obj[1000797] : '' }} mg IV tiap jam
			</td>
			<td colspan="4"><strong><u>Berat Badan</u></strong></td>
			<td colspan="3"><strong><u>&#x2264; 7 hari</u></strong></td>
			<td colspan="3"><strong><u>8-30 hari</u></strong></td>
		</tr>
		<tr style="border-top:1px solid #000">
			<td colspan="10" class="noborder">
				@{{ item.obj[1000799] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Infan usia &gt; 7 hari.
				Gentamicin<sup>1</sup> 5 mg/kg = @{{ item.obj[1000800] ? item.obj[1000800] : '....' }} mg IV/IM tiap
				@{{ item.obj[1000801] ? item.obj[1000801] : '....' }} jam +
			</td>
			<td colspan="4"><strong>&#x2264; 1200 grams</strong></td>
			<td colspan="3"><strong>Tiap 48 Jam</strong></td>
			<td colspan="3"><strong>Tiap 36 Jam</strong></td>
		</tr>
		<tr>
			<td colspan="10" class="noborder">
				&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&lt; 1.2kg : Ampicillin<sup>2</sup> 50 mg/kg tiap 12 jam =
				@{{ item.obj[1000802] ? item.obj[1000802] : '....' }} mg IV tiap 12 jam
			</td>
			<td colspan="4"><strong>&#x2264; 1200 grams</strong></td>
			<td colspan="3"><strong>Tiap 36 Jam</strong></td>
			<td colspan="3"><strong>Tiap 24 Jam</strong></td>
		</tr>
		<tr>
			<td colspan="10" class="noborder">
				&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &gt; 1.2kg-2.0kg : Ampicillin<sup></sup> mg/kg tiap jam = @{{
				item.obj[1000803] ? item.obj[1000803] : '....' }} mg IVtiap jam >
			</td>
			<td colspan="10" rowspan="2"><sup>1</sup>
				Neonatal Pharmacopela, Royal Women's Hospital, Melbourne, 2013<br><sup>2</sup> Gomella,etal,
				Neonatology, McGraw Hill : 2009, page 733
			</td>
		</tr>
		<tr>
			<td colspan="10" class="noborder"> &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&lt; 2kg :
				Ampicillin<sup>2</sup> 50 mg/kg tiap 8 jam = @{{ item.obj[1000804] ? item.obj[1000804] : '....' }}
				mg IV tiap 6 jam</td>
		</tr>
		<tr>
			<td colspan="20">
				<strong><u>Dekompresi Kebocoran</u></strong>
			</td>
		</tr>
		<tr>
			<td colspan="20" class="noborder">
				@{{ item.obj[1000807] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tempat membersihkan dengan iodine.
				Tanda Sarang Sterile dipakai.
			</td>
		</tr>
		<tr>
			<td colspan="4" class="noborder">
				@{{ item.obj[1000808] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Needle Decompression
			</td>
			<td class="noborder">@{{ item.obj[1000809] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Kiri</td>
			<td class="noborder">@{{ item.obj[1000810] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Kanan</td>
			<td colspan="3" class="noborder">@{{ item.obj[1000811] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Atas
				Tulang Rusuk</td>
			<td colspan="3" class="noborder">@{{ item.obj[1000812] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
				2<sup>nd</sup>Garis Midclavicular</td>
			<td colspan="8" class="noborder">@{{ item.obj[1000813] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
				4<sup>th</sup> Garis Ketiak
			</td>
		</tr>
		<tr>
			<td colspan="6" class="noborder">@{{ item.obj[1000814] ? item.obj[1000814] : '....' }} mL O<sub>2</sub>
				@{{ item.obj[1000815] ? item.obj[1000815] : '....' }} mL darah didapat</td>
			<td class="noborder">@{{ item.obj[1000817] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 1</td>
			<td class="noborder">@{{ item.obj[1000818] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 2</td>
			<td class="noborder">@{{ item.obj[1000819] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 3</td>
			<td colspan="2" class="noborder">@{{ item.obj[1000820] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} 4</td>
			<td colspan="9" class="noborder">@{{ item.obj[1000821] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
				Percobaan</td>
		</tr>
		<tr>
			<td colspan="20" class="noborder">Lain-lain : @{{ item.obj[1000822] ? item.obj[1000822] : '....' }}
			</td>
		</tr>
		<tr>
			<td colspan="9" class="noborder">Tenaga Medis : @{{ item.obj[1000823] ? item.obj[1000823] : '....' }}
			</td>
			<td colspan="5" class="noborder">
				Tgl: @{{item.obj[1000824] | toDate | date:'dd MMMM yyyy'}}
			</td>
			<td colspan="3" class="noborder">
				Jam: @{{item.obj[1000824] | toDate | date:'HH:mm'}} @{{ item.obj[1000825] ? '[&#10004;]' :
				'[&nbsp;&nbsp;&nbsp;]' }} Pagi
			</td>
			<td class="noborder"></td>
			<td colspan="2" class="noborder">
				@{{ item.obj[1000826] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Sore
			</td>
		</tr>
		<tr style="border-top:1px solid #000">
			<td colspan="20" class="noborder">
				Nama Pasien : {!! $res['d'][0]->namapasien !!}
			</td>
		<tr>
			<td colspan="5" class="noborder">
				Tanggal Lahir : {!! date('d-m-Y',strtotime( $res['d'][0]->tgllahir )) !!}
			</td>
			<td colspan="15" class="noborder">
				BB : @{{ item.obj[1000830] ? item.obj[1000830] : '....' }} kg
			</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: center"><b>Tanggal dan Waktu</b></td>
			<td colspan="17" style="text-align: center"><b>Keterangan</b></td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: center">@{{item.obj[1000892] | toDate | date:'dd MMMM yyyy HH:mm'}}
			</td>
			<td colspan="17" style="text-align: center">@{{ item.obj[1000893] ? item.obj[1000893] : '' }}</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: center">@{{item.obj[1000894] | toDate | date:'dd MMMM yyyy HH:mm'}}
			</td>
			<td colspan="17" style="text-align: center">@{{ item.obj[1000895] ? item.obj[1000895] : '' }}</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: center">@{{item.obj[1000896] | toDate | date:'dd MMMM yyyy HH:mm'}}
			</td>
			<td colspan="17" style="text-align: center">@{{ item.obj[1000897] ? item.obj[1000897] : '' }}</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: center">@{{item.obj[1000898] | toDate | date:'dd MMMM yyyy HH:mm'}}
			</td>
			<td colspan="17" style="text-align: center">@{{ item.obj[1000899] ? item.obj[1000899] : '' }}</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: center">@{{item.obj[1000900] | toDate | date:'dd MMMM yyyy HH:mm'}}
			</td>
			<td colspan="17" style="text-align: center">@{{ item.obj[1000901] ? item.obj[1000901] : '' }}</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: center">@{{item.obj[1000902] | toDate | date:'dd MMMM yyyy HH:mm'}}
			</td>
			<td colspan="17" style="text-align: center">@{{ item.obj[1000903] ? item.obj[1000903] : '' }}</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: center">@{{item.obj[1000904] | toDate | date:'dd MMMM yyyy HH:mm'}}
			</td>
			<td colspan="17" style="text-align: center">@{{ item.obj[1000905] ? item.obj[1000905] : '' }}</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: center">@{{item.obj[1000906] | toDate | date:'dd MMMM yyyy HH:mm'}}
			</td>
			<td colspan="17" style="text-align: center">@{{ item.obj[1000907] ? item.obj[1000907] : '' }}</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: center">@{{item.obj[1000908] | toDate | date:'dd MMMM yyyy HH:mm'}}
			</td>
			<td colspan="17" style="text-align: center">@{{ item.obj[1000909] ? item.obj[1000909] : '' }}</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: center">@{{item.obj[1000910] | toDate | date:'dd MMMM yyyy HH:mm'}}
			</td>
			<td colspan="17" style="text-align: center">@{{ item.obj[1000911] ? item.obj[1000911] : '' }}</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: center">@{{item.obj[1000912] | toDate | date:'dd MMMM yyyy HH:mm'}}
			</td>
			<td colspan="17" style="text-align: center">@{{ item.obj[1000913] ? item.obj[1000913] : '' }}</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: center">@{{item.obj[1000914] | toDate | date:'dd MMMM yyyy HH:mm'}}
			</td>
			<td colspan="17" style="text-align: center">@{{ item.obj[1000915] ? item.obj[1000915] : '' }}</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: center">@{{item.obj[1000916] | toDate | date:'dd MMMM yyyy HH:mm'}}
			</td>
			<td colspan="17" style="text-align: center">@{{ item.obj[1000917] ? item.obj[1000917] : '' }}</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: center">@{{item.obj[1000918] | toDate | date:'dd MMMM yyyy HH:mm'}}
			</td>
			<td colspan="17" style="text-align: center">@{{ item.obj[1000919] ? item.obj[1000919] : '' }}</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: center">@{{item.obj[1000920] | toDate | date:'dd MMMM yyyy HH:mm'}}
			</td>
			<td colspan="17" style="text-align: center">@{{ item.obj[1000921] ? item.obj[1000921] : '' }}</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: center">@{{item.obj[1000922] | toDate | date:'dd MMMM yyyy HH:mm'}}
			</td>
			<td colspan="17" style="text-align: center">@{{ item.obj[1000923] ? item.obj[1000923] : '' }}</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: center">@{{item.obj[1000924] | toDate | date:'dd MMMM yyyy HH:mm'}}
			</td>
			<td colspan="17" style="text-align: center">@{{ item.obj[1000925] ? item.obj[1000925] : '' }}</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: center">@{{item.obj[1000926] | toDate | date:'dd MMMM yyyy HH:mm'}}
			</td>
			<td colspan="17" style="text-align: center">@{{ item.obj[1000927] ? item.obj[1000927] : '' }}</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: center">@{{item.obj[1000928] | toDate | date:'dd MMMM yyyy HH:mm'}}
			</td>
			<td colspan="17" style="text-align: center">@{{ item.obj[1000929] ? item.obj[1000929] : '' }}</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: center">@{{item.obj[1000930] | toDate | date:'dd MMMM yyyy HH:mm'}}
			</td>
			<td colspan="17" style="text-align: center">@{{ item.obj[1000931] ? item.obj[1000931] : '' }}</td>
		</tr>
	</table>
	</div>

</body>
<script type="text/javascript">
	var baseUrl =
		{!! json_encode(url('/'))!!}
	var angular = angular.module('angularApr	er) {
		$inter		er.startSymbol('@{{');
		inte	ateProvider.endSymbol('}}');
	}).factory('httpService', function ($http, $q) {
		get: function (url) {
			// $("#showLoad		
			var deffer = $q.defer();
				$htt	seUrl + '/' + url, {
				headers: {
					'Conte		pplicatio							}).then(function s				nse) {
					deffer.resolve(r				"#showLoading").hide()
						allback(response) {
						deffer.r					 $("#showLo						eturn deffer.promise;
			},
				}
			})
					ta				', function ($scope, $http, httpService) {
	[],
		obj2: []
		}
	var de($res['d'])!!
	};
	for (va				ad.length - 1; i++) {
		if (dataLoad[i							continue;
	}
	if (dat					x") {
	$('#id_' + dataLoad				aLoa				e.item.obj[dataLoad[i].ad[
		aLoa.type == "checkbox") {
		var chekedd = false
		if (dataLoad[i].value == '1') {
				va		d = true
		}
					.obj[data			fk] = che
		aLoad[i].type == "radio") {
			$scope.itm.o
			bj[[i].emrdfk] = dataLoad[i].value

		}

		if (dataL == "datetime") {
			$('#id_' + da ta			html(dataL)
		em.obj[dataLoad[i].emrdfk] = dataLoad			if (data L oad[i].type == "time") {
				$scope.item.obj[d			k] = dataLoad[i].value
			}
			if (dataLoad[i].type == "da		co		dataLoad[i].emrdfk] = dataLoad[i].valu			aLoad[i].type == "ch			{
				$scope.item.obj[dataLoad[i]				i].value
				$scope.ad			ue
			}
			if (dataLoad[i].type == "textarea") {
				+		.emrdfk).html(dataLoad[i].value)
				[dataLoad[i].emrdfk] = dataLoad[i].value
			}
			if (dataLo = "		

			var str = dataLoad[i].value
			if			
				var res = str.split("~");

			$scope.item.obj[da] = res[1]
			$('#id_' + dataLoad[i].emrdfk).html(res[1[i].type == "combobox2") {
				var 			].value
				var res = str.split("~");

				$scope.item.obj.e		 1] = res[0]
				$scope.item.obj[da] = res[1]
				$('#id_' + dataLoad[i].emrdfk).html(res[1](d		mrdfk == '423816') {
					$scope.hariTgl = data
				}

		if (dataLoad[i].emrdfk == '2000001974') {
			$scope			taLoad[i].value
				}

				if (dataLoad[i].emrdf		23		cope.tgl1 = dataLoad[i].value
			}
			if			rdfk == ' 2000002357') {
				$scope.gl2 = dataLoad[i].v			ataLoad[i].emrdfk == '2000002360') {
					$scope.tgl3 = da		lu		dataLoad[i].emrdfk == '2000002363') {
c			oad[i].value
					}
					if (dataL			 ' 2000002366')  =
				}
				if (dataLoad[i].emrdfk					Load[i].value
			}
			if (dataLoad[i].emrdfk == $scope.t g l7 = dataLoad[i].value
		} if (da = 5'		e.tgl8 = dataLoad[i].value
	}
	if (da == '2000002378') {
			$scop			d[i].value
	}
	if (dataL 						$scope.tgl10 = dataLoad[i].valu e 
	 	 }
	if (data = '2000002384') {
		$scope.tgl11 = dataLoad[f(dataL o ad[i].emrdfk == '20000028') {
			$ = d		alue
		}
		if (dataLoad[i].emrdfk = '2				$scope.tgl13 = dataLoad[i].value
			aLo == '2000002393') {
			$scope.tgl14 = ataL
			if (dataLoad[i].emrdfk == '20000023		cop		taLoad[i].value
		}

		if (dataLoad[i]emrd			8') {
		$scope.pukul2 = dataLoa
	} glemr = dataLoad[i].tgl

	}

	// var dagno			f = $scope.item.obj[31100543].re		\n		, ');

	// $scope.item.obj['diagnose_psca_			gnose_pasca_operatif;

	var dokt		it		446];
	if (dokter != undefined) {
		jQery(			.qrcode({
			width: 100,
			heig		te		angan Digital Oleh " + dokter
		});
	} er('toDate', function () {
		ret(		if (items != null) {
			return new Dae(it				});
	$(document).ready(function ow		);
</script>

</html>

</table>
</body>

</html>