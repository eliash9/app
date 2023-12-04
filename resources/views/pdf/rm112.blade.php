<!DOCTYPE html>
<html lang="en" ng-app="angularApp">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ringkasan Pulang</title>

  <style>
    @media print {
      td.merah {
        background-color: #d54242 !important;
        -webkit-print-color-adjust: exact;
      }

      td.kuning {
        background-color: #c5d542 !important;
        -webkit-print-color-adjust: exact;
      }

      td.hijau {
        background-color: #42d55b !important;
        -webkit-print-color-adjust: exact;
      }

      td.hitam {
        background-color: #000000 !important;
        -webkit-print-color-adjust: exact;
      }
    }

    @page {
      size: A4;
    }

    /*@media print {*/
    /*    body {margin:0}*/
    /*}*/
    .double-border {

      border: 4px solid #000;

    }

    .double-border:before {

      border: 4px solid #fff;

    }

    .box {
      border: 2px solid black;
      /*border-radius: 6px;*/
    }

    .garis6 td {
      padding: 3px;
    }

    .bold {
      font-weight: bold;
    }

    .f-s-15 {
      font-size: 12px;
    }

    .top-height {
      height: 50px;
      vertical-align: text-top;
      width: 15%;
    }

    .text-top {
      vertical-align: text-top;
    }

    table {
      width: 100%;
      height: 100%;
    }

    .kotak {
      width: 50px;
      height: 20px;
    }

    .merah {
      background-color: #d54242 !important;
    }

    .kuning {
      background-color: #c5d542 !important;
    }

    .hijau {
      background-color: #42d55b !important;
    }

    .hitam {
      background-color: #000000 !important;
    }

    .bmerah {
      border: thin solid #d54242;
    }

    .bkuning {
      border: thin solid #c5d542;
    }

    .bhijau {
      border: thin solid #42d55b;
    }

    .bhitam {
      border: thin solid #000000;
    }

    .border-lr {
      border-collapse: collapse;
    }

    .border-lr td {
      border: thin solid #000;
    }

    // adi nambahin 
    .border-lr th {
      border: thin solid #000;
    }

    .border-doang {
      border-collapse: collapse;
      border: thin solid #000;
      border-top: none;
    }

    .border-doang td {
      padding: 5px;
    }

    .judulLabel {
      font-weight: bold;
    }

    .background-gray {
      background-color: #aaa7a7;
    }
  </style>
</head>

<body>
  
    <table width="100%" cellspacing="0" cellpadding="0" border="1">
      <tr>
        <td rowspan="4" colspan="3">
          @if(stripos(\Request::url(), 'localhost') !== FALSE)
          <img src="{{ asset('img/logo_only.png') }}" alt="" style="width: 60px;display:block; margin:auto;">
          @else

          <img src="service/img/logo_only.png" alt="" style="width: 60px;display:block;">
          @endif
        </td>
        <td rowspan="4" colspan="7" style="text-align:center;font-size:10px;">
          <strong>{!! $res['profile']->namalengkap !!}</strong> <br>{!! $res['profile']->alamatlengkap
          !!}<br>TELP :
          (0413) 81292
        </td>
        <td colspan="2" class="border-left">No. RM </td>
        <td colspan="8">: {!! $res['d'][0]->nocm !!}</td>
        <td rowspan="2" colspan="2" style="font-size:xx-large;text-align: center;" class="bg-dark">RM</td>
      </tr>
      <tr height="20px">
        <td colspan="2" class="border-left">Nama Lengkap</td>
        <td colspan="8">: {!! $res['d'][0]->namapasien !!} {!! $res['d'][0]->jeniskelamin
          ==
          'PEREMPUAN' ? '(P)' : '(L)' !!}</td>
      </tr>
      <tr height="20px">
        <td colspan="2" class="border-left">Tanggal Lahir</td>
        <td colspan="8">: {!! date('d-m-Y',strtotime( $res['d'][0]->tgllahir )) !!}</td>
        <td rowspan="2" colspan="2" style="font-size:xx-large;text-align: center;" class="border-left">07</td>
      </tr>
      <tr height="20px">
        <td colspan='2' class="border-left">NIK</td>
        <td colspan="8">: {!! $res['d'][0]->noidentitas !!}</td>
      </tr>
    </table>
    <section>
    <table width="100%" class="table-border">
      <tr>
        <td colspan="4" style="text-align: center;font-size: 16px;padding: 5px" class="background-gray">
          <b>RINGKASAN PULANG</b>
        </td>
      </tr>
      <tr>
        <td colspan="4">
          <div>
            <table>
              <tr>
                <td style="border-right: 1px solid #000;padding-left: 5px">
                  <span class="f-s-15">Ruang/bagian </span><span> : </span><span> @{{ item.obj[423800] }}</span>
                </td>
                <td style="border-right: 1px solid #000;padding-left: 5px">
                  <span class="f-s-15">Tanggal Masuk </span><span> : </span><span> @{{ item.obj[423801] }}</span>
                </td>
                <td style="padding-left: 5px">
                  <span class="f-s-15">Tanggal Keluar </span><span> : </span><span> @{{ item.obj[423802] }}</span>
                </td>
              </tr>
            </table>
          </div>
        </td>
      </tr>
    </table>
    <div class="border-doang" style="min-height: 50px">
      <span class="f-s-15 background-gray"><b>Riwayat Kesehatan</b> </span><span class="background-gray"> <b>:</b>
      </span><span> @{{ item.obj[423803] }}</span>
    </div>
    <div class="border-doang" style="min-height: 50px">
      <span class="f-s-15 background-gray"><b>Indikasi Dirawat</b> </span><span class="background-gray"> <b>:</b>
      </span><span> @{{ item.obj[423804] }}</span>
    </div>
    <div class="border-doang" style="min-height: 50px">
      <div style="width: 70%;float: left;">
        <span class="f-s-15 background-gray"><b>Diagnosis</b> </span><span class="background-gray"> <b>:</b>
        </span><span> @{{ item.obj[423805] }}</span>
      </div>
      <div style="width: 30%; float: right;border-left: 1px solid #000;box-sizing: border-box;min-height: 50px;">
        <div style="text-align: center;" class="background-gray">
          <b>ICD 10</b>
        </div>
        <span style="padding: 3px;box-sizing: border-box;">
          @{{ item.obj[423806] ? '- ' + item.obj[423806] : '' }}
        </span>
      </div>
    </div>
    <div class="border-doang" style="min-height: 90px">
      <div style="width: 70%;float: left;">
        <span class="f-s-15 background-gray"><b>Komorbiditas Lain</b> </span><span class="background-gray"> <b>:</b>
        </span><span> @{{ item.obj[423807] }}</span>
      </div>
      <div style="width: 30%; float: right;border-left: 1px solid #000;box-sizing: border-box;min-height: 90px;">
        <div style="text-align: center;" class="background-gray">
          <b>ICD 10</b>
        </div>
        <span style="padding: 3px;box-sizing: border-box;">
          @{{ item.obj[31101417] ? '- ' + item.obj[31101417] : '' }} <br>
          &nbsp;@{{ item.obj[31101418] ? '- ' + item.obj[31101418] : '' }} <br>
          &nbsp;@{{ item.obj[31101419] ? '- ' + item.obj[31101419] : '' }} <br>
          &nbsp;@{{ item.obj[31101420] ? '- ' + item.obj[31101420] : '' }} <br>
          &nbsp;@{{ item.obj[31101421] ? '- ' + item.obj[31101421] : '' }}
        </span>
      </div>
    </div>
    <div class="border-doang" style="min-height: 50px">
      <span class="f-s-15 background-gray"><b>Pemeriksaan Fisik</b> </span><span class="background-gray"> <b>:</b>
      </span><span> @{{ item.obj[423809] }}</span>
    </div>
    <div class="border-doang" style="min-height: 50px">
      <span class="f-s-15 background-gray"><b>Pemeriksaan Diagnostik</b> </span><span class="background-gray"> <b>:</b>
      </span><span> @{{ item.obj[423810] }}</span>
    </div>
    <div class="border-doang" style="min-height: 90px">
      <div style="width: 70%;float: left;">
        <span class="f-s-15 background-gray"><b>Tindakan yang Telah Dikerjakan</b> </span><span class="background-gray">
          <b>:</b> </span><span> @{{ item.obj[423811] }}</span>
      </div>
      <div style="width: 30%; float: right;border-left: 1px solid #000;box-sizing: border-box;min-height: 90px;">
        <div style="text-align: center;" class="background-gray">
          <b>ICD 9-CM</b>
        </div>
        <span style="padding: 3px;box-sizing: border-box;">
          @{{ item.obj[423812] }} <br>
          &nbsp;@{{ item.obj[32116614] ? '- ' + item.obj[32116614] : '' }} <br>
          &nbsp;@{{ item.obj[32116615] ? '- ' + item.obj[32116615] : '' }} <br>
          &nbsp;@{{ item.obj[32116616] ? '- ' + item.obj[32116616] : '' }} <br>
          &nbsp;@{{ item.obj[32116617] ? '- ' + item.obj[32116617] : '' }}
        </span>
      </div>
    </div>
    <div class="border-doang" style="min-height: 50px">
      <span class="f-s-15 background-gray"><b>Obat yang Diberikan</b> </span><span class="background-gray"> <b>:</b>
      </span><span> @{{ item.obj[423813] }}</span>
    </div>
    <div class="border-doang" style="min-height: 50px">
      <span class="f-s-15 background-gray"><b>Kondisi Pasien</b> </span><span class="background-gray"> <b>:</b>
      </span><span> @{{ item.obj[423814] }}</span>
    </div>
    <div class="border-doang" style="min-height: 50px">
      <span class="f-s-15 background-gray"><b>Tindak Lanjut</b> </span><span class="background-gray"> <b>:</b>
      </span><span> @{{ item.obj[423815] }}</span>
    </div>
    <div class="border-doang" style="overflow: auto">
      <br>
      <br>
      <div style="float: right;width: 40%;text-align: end;padding-right: 5px">
        <span>Bulukumba, </span> <span> @{{ hariTgl.split(' ')[0] }}, </span> <span>Jam : </span> <span> @{{
          hariTgl.split(' ')[1] }} </span> <span> WITA</span>
      </div>
      <br>
      <br>
      <div style="width: 33%;float: left;padding: 15px;box-sizing: border-box;">
        <div style="text-align: center">
          <span>Pasien</span>
        </div>
        <br>
        <div id="qrcodePasien" style="text-align: center"></div>
        <br>
        <div style="text-align: center">
          <span>( @{{ item.obj[423817] }} )</span>
        </div>
      </div>
      <div style="width: 33%;float: left;padding: 15px;box-sizing: border-box;">
        <div style="text-align: center">
          <span>Keluarga Pasien</span>
        </div>
        <br>
        <div id="qrcodeKeluargaPasien" style="text-align: center"></div>
        <br>
        <div style="text-align: center">
          <span>( @{{ item.obj[423818] }} )</span>
        </div>
      </div>
      <div style="width: 33%;float: left;padding: 15px;box-sizing: border-box;">
        <div style="text-align: center">
          <span>DPJP</span>
        </div>
        <br>
        <div id="qrcodeDPJP" style="text-align: center"></div>
        <br>
        <div style="text-align: center">
          <span>( @{{ item.obj[423819] }} )</span>
        </div>
      </div>
    </div>
    <div class="border-doang" style="padding: 10px;box-sizing: border-box;overflow: auto;">
      <div style="float: left;width: 50%">
        <div class="f-s-15"><i>Lembar 1 : Berkas Rekam Medis</i></div>
        <div class="f-s-15"><i>Lembar 3 : Pasien</i></div>
      </div>
      <div style="float: right;width: 50%">
        <div class="f-s-15"><i>Lembar 2 : FASKES yang Memberikan Tindak Lanjut Asuhan</i></div>
        <div class="f-s-15"><i>Lembar 4 : Penjamin/Asuransi</i></div>
      </div>
    </div>
  </section>
</body>

</html>