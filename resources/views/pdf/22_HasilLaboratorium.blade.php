<html>

<head>
    <title>
        Hasil Laboratorium
    </title>

    <script src="{{  public_path('js/jquery.min.js') }}"></script>
    <script src="{{  public_path('js/jquery.qr-code.js') }}"></script>
    @if(stripos(\Request::url(), 'localhost') !== FALSE)
    <link href="{{  public_path('css/style.css') }}" rel="stylesheet">
    {{--
    <link rel="stylesheet" href="{{  public_path('css/report/paper.css') }}">
    <link rel="stylesheet" href="{{  public_path('css/report/table.css') }}">
    <link rel="stylesheet" href="{{  public_path('css/report/tabel.css') }}"> --}}

    <script src="{{  public_path('js/jquery.min.js') }}"></script>
    <script src="{{  public_path('js/jquery.qr-code.js') }}"></script>
    <script type="text/javascript" src="{{  public_path('js/qrcode/src/jquery.qrcode.js') }}"></script>
    <script type="text/javascript" src="{{  public_path('js/qrcode/src/qrcode.js') }}"></script>
    <!-- angular -->
    <script src="{{  public_path('js/angular/angular.min.js') }}" type="text/javascript"></script>
    <script src="{{  public_path('js/angular/angular-route.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{  public_path('js/angular/angular-animate.min.js') }}"></script>
    <script type="text/javascript" src="{{  public_path('js/angular/angular-aria.min.js') }}"></script>
    <script src="{{  public_path('js/angular/angular-material.js') }}" type="text/javascript"></script>
    @else

    {{--
    <link rel="stylesheet" href="{{  public_path('service/css/report/paper.css') }}">
    <link rel="stylesheet" href="{{  public_path('service/css/report/table.css') }}">
    <link rel="stylesheet" href="{{  public_path('service/css/report/tabel.css') }}"> --}}
    <script src="{{  public_path('service/js/jquery.min.js') }}"></script>
    <script src="{{  public_path('service/js/jquery.qr-code.js') }}"></script>
    <script type="text/javascript" src="{{  public_path('js/qrcode/src/jquery.qrcode.js') }}"></script>
    <script type="text/javascript" src=".{{  public_path('js/qrcode/src/qrcode.js') }}"></script>
    <link href="{{  public_path('service/css/style.css') }}" rel="stylesheet">
    <!-- angular -->
    <script src="{{  public_path('service/js/angular/angular.min.js') }}" type="text/javascript"></script>
    <script src="{{  public_path('service/js/angular/angular-route.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{  public_path('service/js/angular/angular-animate.min.js') }}"></script>
    <script type="text/javascript" src="{{  public_path('service/js/angular/angular-aria.min.js') }}"></script>
    <script src="{{  public_path('service/js/angular/angular-material.js') }}" type="text/javascript"></script>
    @endif

</head>
<style type="text/css" media="print">
    @media print {
        @page {
            size: A4;
            margin: 0;
            /* size: portrait; */
        }

        footer {
            display: none
        }

        header {
            display: none
        }

        body {
            -webkit-print-color-adjust: exact !important;
        }
    }
</style>
<style>
    .break {
        page-break-after: always;
    }

    tr td {
        padding: 1px 5px 1px 2px;
    }

    .borderss {
        border-bottom: 1px solid black;
    }

    html,
    body {

        box-sizing: border-box;
        font-family: DejaVu Sans, Arial, Helvetica, sans-serif;
       
    }

    .baris1 {
        border: 2px solid #000000;
    }

    .baris2 {
        border: 1px solid #000000;
    }

    .garishalus {
        border: 0.01em solid #9a9a9a;
    }

    .garishalus tr td {
        border: 0.01em solid #9a9a9a;
        /* border: thin solid #9a9a9a; */
    }

    @page {
        size: A4
    }

    .garis6 td {
        padding: 3px !important;
    }
</style>



<body>
    @php
    $noo = 1;
    @endphp
  

    <div align="center" class="break">
        <table cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="0" width="100%"
          >
            <tbody>
                <tr>
                    <td>
                        <table width="100%" cellspacing="0" cellpadding="0" border="0">
                            <tr>
                                <td rowspan="5">
                                    <p align="center">
                                        @if(stripos(\Request::url(), 'localhost') !== FALSE)
                                        <img src="{{  public_path('img/logo_rs.png') }}" width="80px" border="0">
                                        @else
                                        <img src="{{  public_path('service/img/logo_rs.png') }}" width="80px" border="0">
                                        @endif
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                    <font style="font-size: 12pt;font-weight: 600;letter-spacing: 2px;" color="#000000">
                                        <b>&nbsp;&nbsp;&nbsp;&nbsp;{{ $profile->namalengkap }}</b>
                                    </font>
                                </td>
                            <tr>
                                <td align="left">
                                    <font style="font-size: 12pt;font-weight: 600;letter-spacing: 2px;" color="#000000">
                                        <b>&nbsp;&nbsp;&nbsp;&nbsp;INSTALASI LABORATORIUM KLINIK</b>
                                    </font>
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                    <font style="font-size: 10pt;font-weight: 600;letter-spacing: 2px;" color="#000000">
                                        <b>&nbsp;&nbsp;&nbsp;&nbsp;{{ $profile->alamatlengkap }}</b>
                                    </font>
                                </td>
                            </tr>
                        </table>
                        <hr class="baris2">
                        <table width="100%" cellspacing="0" cellpadding="0" border="0">
                            <tr>
                                <td align="center">
                                    <font style="font-size: 14pt;font-weight: 600;letter-spacing: 2px;" color="#000000">
                                        <b>Hasil Laboratorium</b>
                                    </font>
                                </td>
                            </tr>
                        </table>
                        <hr class="baris2">
                        <hr class="baris2">
                    </td>
                </tr>
                <tr>
                    <td style="padding-top:15px"></td>
                </tr>
                <tr>
                    <td>
                        <table width="100%" cellspacing="0" cellpadding="0" border="0">
                            <tr>
                                <td>
                                    <font style="font-size: 11pt" color="#000000">No. Rekam Medis</font>
                                </td>
                                <td>
                                    <font style="font-size: 11pt" color="#000000">: {{ $cek->nocm }}</font>
                                </td>
                                <td>
                                    <font style="font-size: 11pt" color="#000000">Tanggal/Jam Terima</font>
                                </td>
                                <td>
                                    <font style="font-size: 11pt" color="#000000">: {!! date_format(date_create(
                                        $cek->tglorder),"d-m-Y H:i:s") !!}</font>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <font style="font-size: 11pt" color="#000000">No. Pendaftaran</font>
                                </td>
                                <td>
                                    <font style="font-size: 11pt" color="#000000">: {{ $cek->noregistrasi }}
                                    </font>
                                </td>
                                <td>
                                    <font style="font-size: 11pt" color="#000000">Dokter Perujuk</font>
                                </td>
                                <td>
                                    <font style="font-size: 11pt" color="#000000">: {{ $cek->pengorder }}
                                    </font>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <font style="font-size: 11pt" color="#000000">Nama Pasien</font>
                                </td>
                                <td>
                                    <font style="font-size: 11pt" color="#000000">: {{ $cek->namapasien }}
                                    </font>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <font style="font-size: 11pt" color="#000000">Jenis Kelamin</font>
                                </td>
                                <td>
                                    <font style="font-size: 11pt" color="#000000">: {!! $cek->jeniskelamin !!}
                                    </font>
                                </td>
                                <td>
                                    <font style="font-size: 11pt" color="#000000">Dokter Penanggung Jawab</font>
                                </td>
                                <td>
                                    <font style="font-size: 11pt" color="#000000">: {!! $cek->dokterpenanggungjawab !!}
                                    </font>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <font style="font-size: 11pt" color="#000000">Umur </font>
                                </td>
                                <td>
                                    <font style="font-size: 11pt" color="#000000">: {!! $cek->umur !!}</font>
                                </td>
                                <td>
                                    <font style="font-size: 11pt" color="#000000">Ruangan Perujuk </font>
                                </td>
                                <td>
                                    <font style="font-size: 11pt" color="#000000">: {{ $cek->ruanganperejuk }}
                                    </font>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <font style="font-size: 11pt" color="#000000">Tanggal Lahir</font>
                                </td>
                                <td>
                                    <font style="font-size: 11pt" color="#000000">: {!! $cek->tgllahirs !!}
                                    </font>
                                </td>
                                <td>
                                    <font style="font-size: 11pt" color="#000000">Tanggal/Jam Keluar Hasil</font>
                                </td>
                                <td>
                                    <font style="font-size: 11pt" color="#000000">: {!! date_format(date_create(
                                        $cek->tglakhir),"d-m-Y H:i:s") !!}</font>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <font style="font-size: 11pt" color="#000000">Alamat </font>
                                </td>
                                <td>
                                    <font style="font-size: 11pt" color="#000000">: {!! $cek->alamatlengkap !!}
                                    </font>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <font style="font-size: 11pt" color="#000000">Tipe/Penjamin Pasien</font>
                                </td>
                                <td>
                                    <font style="font-size: 11pt" color="#000000">: {{ $cek->kelompokpasien }}
                                        &nbsp; / &nbsp; {{ $cek->namarekanan }}</font>
                                </td>
                            </tr>
                            <tr>
                            </tr>
                        </table>
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table width="100%" cellspacing="0" cellpadding="0" class="garishalus" style="">
                            <tr>
                                <td style="text-align:center;">
                                    <font style="font-size: 11pt" color="#000000">No</font>
                                </td>
                                <td style="text-align:center;">
                                    <font style="font-size: 11pt" color="#000000">Pemeriksaan</font>
                                </td>
                                <td style="text-align:center;">
                                    <font style="font-size: 11pt" color="#000000">Hasil</font>
                                </td>
                                <td style="text-align:center;">
                                    <font style="font-size: 11pt" color="#000000">Nilai Rujukan</font>
                                </td>
                                <td style="text-align:center;">
                                    <font style="font-size: 11pt" color="#000000">Satuan</font>
                                </td>
                                <td style="text-align:center;">
                                    <font style="font-size: 11pt" color="#000000">Keterangan</font>
                                </td>
                            </tr>
                            @foreach($aa as $item)
                            <tr>
                                <td colspan="7" style="text-align:left;">
                                    <font style="font-size: 12pt;font-weight:bold;" color="#000000">
                                        {{ strtoupper($item[0]->detailjenisproduk) }}</font>
                                </td>
                            </tr>
                            @php
                            $no = 1;
                            @endphp
                            @foreach($item as $data)
                            <tr>
                                <td style="text-align:center;">
                                    <font style="font-size: 10pt" color="#000000">{{ $no }}</font>
                                </td>
                                <td style="text-align:left;">
                                    <font style="font-size: 10pt" color="#000000">{{ $data->detailpemeriksaan }}</font>
                                </td>
                                @if($data->hasil == "Negatif")
                                <td style="text-align:center;">
                                    <font style="font-size: 10pt;" color="#000000">{{ $data->hasil }}</font>
                                </td>
                                @elseif($data->hasil == "Lembek")
                                <td style="text-align:center;">
                                    <font style="font-size: 10pt;" color="#000000">{{ $data->hasil }}</font>
                                </td>
                                @elseif($data->hasil == "Jernih")
                                <td style="text-align:center;">
                                    <font style="font-size: 10pt;" color="#000000">{{ $data->hasil }}</font>
                                </td>
                                @elseif($data->hasil == "Non Reaktif")
                                <td style="text-align:center;">
                                    <font style="font-size: 10pt;" color="#000000">{{ $data->hasil }}</font>
                                </td>
                                @elseif($data->hasil == "Positif")
                                <td style="text-align:center;">
                                    <font style="font-size: 10pt;" color="#FF0000">{{ $data->hasil }}</font>
                                </td>
                                @elseif($data->stathasil === "*")
                                <td style="text-align:center;">
                                    <font style="font-size: 10pt;" color="#FF0000">{{ $data->hasil }}</font>
                                </td>
                                @else
                                <td style="text-align:center;">
                                    <font style="font-size: 10pt;" color="#000000">{{ $data->hasil }}</font>
                                </td>
                                @endif
                                <td style="text-align:center;">
                                    <font style="font-size: 10pt" color="#000000">{{ $data->nilaitext }}</font>
                                </td>
                                <td style="text-align:center;">
                                    <font style="font-size: 10pt" color="#000000">{{ $data->satuanstandar }}</font>
                                </td>
                                <td style="text-align:center;">
                                    <font style="font-size: 10pt" color="#000000">{{ $data->keterangan_lab }}</font>
                                </td>
                            </tr>
                            @php
                            $no = $no + 1;
                            @endphp
                            @endforeach
                            @endforeach
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding-top:20px;">
                        <table width="100%" cellspacing="0" cellpadding="0" class="garishalus" style="">
                            <tr>
                                <td style="text-align:center;">
                                    <font style="font-size: 11pt" color="#000000"><b>Catatan</b></font>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align:left;">
                                    <font style="font-size: 11pt; padding-left:20px" color="#000000">{{ $cek->catatan }}
                                    </font>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding-top:20px;">
                        <table width="100%" cellspacing="0" cellpadding="0" border="0" style="text-align:center">
                            <tr>
                                <td style="align-items: center">
                                    <font style="font-size: 8pt;" color="#000000">Nama Pemeriksa</font>
                                </td>
                                <td style="align-items: center">
                                    <font style="font-size: 8pt;" color="#000000">Penanggung Jawab</font>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-bottom:10px;"></td>
                                <td style="padding-bottom:10px;"></td>
                            </tr>
                            <tr>
                                <td style="align-items: center">
                                    <div id="qrcodeNamaPemeriksa{{ $cek->produkfk }}{{ $noo }}"></div>
                                </td>
                                <td style="align-items: center">
                                    <div id="qrcodePenanggungJawab{{ $cek->produkfk }}{{ $noo }}"></div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="align-items: center">
                                    <font style="font-size: 8pt;font-weight:bold;" color="#000000">{!!
                                        $cek->dokterperiksa !!}
                                    </font>
                                </td>
                                <td style="align-items: center">
                                    <font style="font-size: 8pt;font-weight:bold;" color="#000000">{!!
                                        $cek->dokterpenanggungjawab !!}
                                    </font>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table>
                            {{-- <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr> --}}
                            <tr>
                                <td>{{ $cek->tat }}</td>
                            </tr>
                            <tr>
                                <td>
                                    <font style="font-size: 8pt;font-style:italic;" color="#000000">Printed by:
                                        {{ $r['strIdPegawai'] . " " . date('d/m/Y H:i:s') }}</font>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <script>

        $('#qrcodeNamaPemeriksa{{ $cek->produkfk }}{{ $noo }}').qrcode({
            text: 'Tanda Tangan Digital Oleh {{ $cek->dokterperiksa }}',
            height: 70,
            width: 70
        });

        $('#qrcodePenanggungJawab{{ $cek->produkfk }}{{ $noo }}').qrcode({
            text: 'Tanda Tangan Digital Oleh {{ $cek->dokterpenanggungjawab }}',
            height: 70,
            width: 70
        });


    </script>
    @php
    $noo++;
    @endphp
   
</body>

</html>