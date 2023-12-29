<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASESMEN LANJUT RESIKO JATUH PASIEN DEWASA</title>

    <style>
        html,
        body {
            font-family: DejaVu Sans, Arial, Helvetica, sans-serif;

            margin-bottom: 0px;
        }

        @page {
            size: auto;
        }

        table {
            page-break-inside: auto
        }

        table {
            -fs-table-paginate: paginate;
        }

        tr {
            page-break-inside: avoid;
            page-break-after: auto
        }

        table {
            border: 1px solid #000;
            border-collapse: collapse;
            table-layout: fixed;
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
            font-size: 10pt;
        }

        table tr {
            height: 16pt
        }

        .bg-dark {
            background: #000;
            color: #fff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: x-large;
            padding: .5rem;
            height: 20pt !important;
        }

        .bg-dark-small {
            background: #000;
            color: #fff;
        }

        .rotate {
            vertical-align: bottom;
            text-align: center;
        }

        #rotate {
            -ms-writing-mode: tb-rl;
            -webkit-writing-mode: vertical-rl;
            writing-mode: vertical-rl;
            transform: rotate(180deg);
            white-space: nowrap;
        }

        .p3 {
            padding: 0.3rem;
        }

        .p2 {
            padding: 0.2rem;
        }

        p {
            padding: .5rem;
        }

        ul li {
            list-style: none;
        }

        ul li:before {
            content: '-'
        }

        .gambar {
            position: absolute;
            top: 25%;
            left: 45%;
        }

        img.img-diagram {
            width: 97%;
            height: 97%;
            object-fit: cover;
        }

        .format {
            page-break-after: always;
        }
    </style>
</head>

<body ng-controller="cetakSkriningDewasa">
    @if (!empty($res['d1']))
    <div class="format">
        <table width='100%'>
            <tr height=20 class="noborder">
                <td colspan="8" rowspan="4" class="p3 noborder-tb text-center">
                    <center><img src="{{ $image }}" alt="" style="height: 70px; width:60px;"></center>
                </td>
                <td colspan="17" rowspan="4" class="noborder-tb text-center">
                    <strong>{!! $res['profile']->namalengkap !!}</strong> <br>{!! $res['profile']->alamatlengkap
                    !!}<br>TELP : (0413) 81292
                </td>
                <td colspan="6" class="noborder">No. RM </td>
                <td colspan="13" class="noborder">
                    : {!! $res['d1'][0]->nocm !!}
                </td>
                <td colspan="5" rowspan="2" class="border-lr bg-dark" style="font-size: xxx-large;text-align:center">RM
                </td>
            </tr>
            <tr class="noborder">
                <td colspan="6" class="noborder">Nama Lengkap</td>
                <td colspan="11" class="noborder">
                    : {!! $res['d1'][0]->namapasien !!}
                </td>
                <td colspan="2" class="noborder">{!! $res['d1'][0]->jeniskelamin == 'PEREMPUAN' ? '(P)' : '(L)' !!}</td>
            </tr>
            <tr class="noborder">
                <td colspan="6" class="noborder">Tanggal Lahir</td>
                <td colspan="13" class="noborder">
                    : {!! date('d-m-Y',strtotime( $res['d1'][0]->tgllahir )) !!}
                </td>
                <td colspan="5" class="border-lr" rowspan="2" style="font-size: xx-large;text-align:center">38.2</td>
            </tr>
            <tr class="noborder">
                <td colspan="6" class="noborder">NIK</td>
                <td colspan="11" class="noborder">
                    : {!! $res['d1'][0]->noidentitas !!}
                </td>
            </tr>
            <tr class="bordered bg-dark">
                <th colspan="49" height="20pt">ASESMEN LANJUT RESIKO JATUH PASIEN DEWASA</th>
            </tr>
            <tr class="bordered bg-dark-small">
                <th colspan="49" height="20pt">(diisi oleh Dietisien)</th>
            </tr>
            <tr class="text-center">
                <td colspan="12" rowspan="3">Faktor Risiko</td>
                <td colspan="12" rowspan="3">Parameter</td>
                <td colspan="25">Tanggal /Jam</td>
            </tr>
            <tr class="text-center">
                <td colspan="5" rowspan="2" valign="top" class="p2">Skor</td>
                <td colspan="3">1</td>
                <td colspan="3">2</td>
                <td colspan="3">3</td>
                <td colspan="3">4</td>
                <td colspan="3">5</td>
                <td colspan="5">6</td>
            </tr>
            <tr class="text-center">
                <td colspan="3">@{{item.obj[428100] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                <td colspan="3">@{{item.obj[428101] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                <td colspan="3">@{{item.obj[428102] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                <td colspan="3">@{{item.obj[428103] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                <td colspan="3">@{{item.obj[428104] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                <td colspan="5">@{{item.obj[428105] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
            </tr>
            <tr>
                <td colspan="12" class="text-center noborder">Riwayat Jatuh
                </td>
                <td colspan="12" class="p3">Ya</td>
                <td colspan="5" class="text-center">25</td>
                <td colspan="3" class="text-center">@{{ item.obj[428106] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428107] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428108] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428109] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428110] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="5" class="text-center">@{{ item.obj[428111] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
            </tr>
            <tr class="btm">
                <td colspan="12" class="text-center noborder">( 1 tahun terakhir)
                </td>
                <td colspan="12" class="p3">Tidak</td>
                <td colspan="5" class="text-center">0</td>
                <td colspan="3" class="text-center">@{{ item.obj[428112] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428113] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428114] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428115] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428116] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="5" class="text-center">@{{ item.obj[428117] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
            </tr>
            <tr>
                <td colspan="12" class="text-center noborder">
                    Diagnosa sekunder
                </td>
                <td colspan="12" class="p3">Ya</td>
                <td colspan="5" class="text-center">15</td>
                <td colspan="3" class="text-center">@{{ item.obj[428118] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428119] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428120] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428121] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428122] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="5" class="text-center">@{{ item.obj[428123] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
            </tr>
            <tr class="btm">
                <td colspan="12" class="text-center noborder">
                    (≥2 Diagnosis Medis )
                </td>
                <td colspan="12" class="p3">Tidak</td>
                <td colspan="5" class="text-center">0</td>
                <td colspan="3" class="text-center">@{{ item.obj[428124] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428125] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428126] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428127] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428128] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="5" class="text-center">@{{ item.obj[428129] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
            </tr>
            <tr>
                <td colspan="12" rowspan="3" valign="top" class="p2 text-center noborder">
                    Alat Bantu
                </td>
                <td colspan="12" class="p3">Berpegangan pada perabot</td>
                <td colspan="5" class="text-center">30</td>
                <td colspan="3" class="text-center">@{{ item.obj[428130] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428131] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428132] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428133] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428134] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="5" class="text-center">@{{ item.obj[428135] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
            </tr>
            <tr>
                <td colspan="12" class="p3">Tongkat/ alat penopang</td>
                <td colspan="5" class="text-center">15</td>
                <td colspan="3" class="text-center">@{{ item.obj[428136] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428137] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428138] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428139] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428140] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="5" class="text-center">@{{ item.obj[428141] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
            </tr>
            <tr class="btm">
                <td colspan="12" class="p3">Tidak ada / kursi roda / perawat /tirah baring</td>
                <td colspan="5" class="text-center">0</td>
                <td colspan="3" class="text-center">@{{ item.obj[428142] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428143] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428144] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428145] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428146] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="5" class="text-center">@{{ item.obj[428147] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
            </tr>
            <tr>
                <td colspan="12" rowspan="2" valign="top" class="p2 text-center noborder">
                    Terpasang Infus
                </td>
                <td colspan="12" class="p3">Ya</td>
                <td colspan="5" class="text-center">20</td>
                <td colspan="3" class="text-center">@{{ item.obj[428148] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428149] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428150] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428151] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428152] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="5" class="text-center">@{{ item.obj[428153] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
            </tr>
            <tr class="btm">
                <td colspan="12" class="p3">Tidak</td>
                <td colspan="5" class="text-center">0</td>
                <td colspan="3" class="text-center">@{{ item.obj[428154] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428155] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428156] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428157] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428158] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="5" class="text-center">@{{ item.obj[428159] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
            </tr>
            <tr>
                <td colspan="12" rowspan="3" valign="top" class="p2 text-center noborder">
                    Gaya Berjalan
                </td>
                <td colspan="12" class="p3">Terganggu</td>
                <td colspan="5" class="text-center">20</td>
                <td colspan="3" class="text-center">@{{ item.obj[428160] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428161] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428162] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428163] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428164] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="5" class="text-center">@{{ item.obj[428165] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
            </tr>
            <tr>
                <td colspan="12" class="p3">Lemah</td>
                <td colspan="5" class="text-center">10</td>
                <td colspan="3" class="text-center">@{{ item.obj[428166] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428167] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428168] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428169] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428170] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="5" class="text-center">@{{ item.obj[428171] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
            </tr>
            <tr class="btm">
                <td colspan="12" class="p3">Normal /tirah baring/immobilisasi</td>
                <td colspan="5" class="text-center">0</td>
                <td colspan="3" class="text-center">@{{ item.obj[428172] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428173] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428174] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428175] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428176] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="5" class="text-center">@{{ item.obj[428177] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
            </tr>
            <tr>
                <td colspan="12" rowspan="2" valign="top" class="p2 text-center noborder">
                    Status Mental
                </td>
                <td colspan="12" class="p3">Sering lupa akan keterbatasan yang dimiliki</td>
                <td colspan="5" class="text-center">15</td>
                <td colspan="3" class="text-center">@{{ item.obj[428178] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428179] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428180] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428181] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428182] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="5" class="text-center">@{{ item.obj[428183] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
            </tr>
            <tr class="btm">
                <td colspan="12" class="p3">Sadar akan kemampuan diri sendiri</td>
                <td colspan="5" class="text-center">0</td>
                <td colspan="3" class="text-center">@{{ item.obj[428184] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428185] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428186] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428187] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428188] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
                <td colspan="5" class="text-center">@{{ item.obj[428189] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}</td>
            </tr>
            <tr>
                <td colspan="29" class="bg-dark text-center">TOTAL</td>
                <td colspan="3" class="text-center">@{{ item.obj[428190] ? item.obj[428190] : '' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428191] ? item.obj[428191] : '' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428192] ? item.obj[428192] : '' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428193] ? item.obj[428193] : '' }}</td>
                <td colspan="3" class="text-center">@{{ item.obj[428194] ? item.obj[428194] : '' }}</td>
                <td colspan="5" class="text-center">@{{ item.obj[428195] ? item.obj[428195] : '' }}</td>
            </tr>
            <tr>
                <td colspan="49" class="p3" style="height:70pt" valign="top">Hasil Skrining : @{{ item.obj[428196] ?
                    item.obj[428196] : '' }}</td>
            </tr>
            <tr>
                <td colspan="49" class="p3" style="height:70pt" valign="top">Saran : @{{ item.obj[428198] ?
                    item.obj[428198] : '' }}</td>
            </tr>
            <tr>
                <td colspan="30" class="noborder"></td>
                <td colspan="19" class="text-center noborder">Perawat</td>
            </tr>
            <tr>
                <td colspan="30" class="noborder"></td>
                <td colspan="19" class="text-center noborder">
                    <div id="qrcodep1" style="text-align: center">
                </td>
            </tr>
            <tr valign="bottom" class="noborder btm">
                <td colspan="30" class="noborder"></td>
                <td colspan="19" class="text-center noborder p3">(@{{ item.obj[428199] ? item.obj[428199] : '' }})</td>
            </tr>
            <tr>
                <td colspan="49" class="p3 noborder">Kategori :</td>
            </tr>
            <tr>
                <td colspan="49" class="p3 noborder">Risiko Tinggi = ≥ 45 (Pasang gelang dan penandaan warna kuning)
                </td>
            </tr>
            <tr>
                <td colspan="49" class="p3 noborder">Risiko Sedang = 25 – 44</td>
            </tr>
            <tr>
                <td class="p3 noborder" colspan="49">Risiko Rendah = 0 – 25</td>
            </tr>
            <tr class="bg-dark text-center">
                <td colspan="49">INTERVENSI RISIKO JATUH DEWASA</td>
            </tr>
            <tr class="bg-dark-small text-center">
                <td colspan="49">(Skala MORSE)</td>
            </tr>
            <tr>
                <td colspan="3" rowspan="2" class="text-center">No</td>
                <td colspan="16" rowspan="2" class="text-center">Risiko Rendah dan Sedang</td>
                <td colspan="5" class="p3">Tgl: @{{item.obj[428200] | toDate | date:'dd-MM-yyyy'}}</td>
                <td colspan="5" class="p3">Tgl: @{{item.obj[428201] | toDate | date:'dd-MM-yyyy'}}</td>
                <td colspan="5" class="p3">Tgl: @{{item.obj[428202] | toDate | date:'dd-MM-yyyy'}}</td>
                <td colspan="5" class="p3">Tgl: @{{item.obj[428203] | toDate | date:'dd-MM-yyyy'}}</td>
                <td colspan="5" class="p3">Tgl: @{{item.obj[428204] | toDate | date:'dd-MM-yyyy'}}</td>
                <td colspan="5" class="p3">Tgl: @{{item.obj[428205] | toDate | date:'dd-MM-yyyy'}}</td>
            </tr>
            <tr>
                <td colspan="5" class="p3">Jam: @{{item.obj[428200] | toDate | date:'HH:mm'}}</td>
                <td colspan="5" class="p3">Jam: @{{item.obj[428201] | toDate | date:'HH:mm'}}</td>
                <td colspan="5" class="p3">Jam: @{{item.obj[428202] | toDate | date:'HH:mm'}}</td>
                <td colspan="5" class="p3">Jam: @{{item.obj[428203] | toDate | date:'HH:mm'}}</td>
                <td colspan="5" class="p3">Jam: @{{item.obj[428204] | toDate | date:'HH:mm'}}</td>
                <td colspan="5" class="p3">Jam: @{{item.obj[428205] | toDate | date:'HH:mm'}}</td>
            </tr>
            <tr style="font-size: small;">
                <td colspan="3" class="p3">1</td>
                <td colspan="16" class="p3">Melakukan orientasi ruangan pada pasien</td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428207] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428208] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428209] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428210] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428211] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428212] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
            </tr>
            <tr style="font-size: small;">
                <td colspan="3" class="p3" valign="top">2</td>
                <td colspan="16" class="p3">Keselamatan lingkungan : hindari ruangan yang kacau balau, dekatkan bel dan
                    telepon, biarkan pintu terbuka, gunakan lampu malam hari serta pagar tempat tidur</td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428214] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428215] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428216] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428217] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428218] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428219] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
            </tr>
            <tr style="font-size: small;">
                <td colspan="3" class="p3" valign="top">3</td>
                <td colspan="16" class="p3">Pastikan roda tempat tidur terkunci</td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428221] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428222] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428223] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428224] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428225] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428226] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
            </tr>
            <tr style="font-size: small;">
                <td colspan="3" class="p3" valign="top">4</td>
                <td colspan="16" class="p3">Posisikan tempat tidur pada posisi terendah</td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428228] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428229] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428230] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428231] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428232] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428233] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
            </tr>
            <tr style="font-size: small;">
                <td colspan="3" class="p3" valign="top">5</td>
                <td colspan="16" class="p3">Pagar Pengaman tempat tidur dinaikkan</td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428235] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428236] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428237] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428238] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428239] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428240] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
            </tr>
            <tr style="font-size: small;">
                <td colspan="3" class="p3" valign="top">6</td>
                <td colspan="16" class="p3">Monitor kebutuhan pasien secara berkala (minimal tiap 4 jam) tawarkan
                    kebelakang (kamar kecil secara teratur)</td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428242] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428243] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428244] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428245] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428246] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428247] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
            </tr>
            <tr style="font-size: small;">
                <td colspan="3" class="p3" valign="top">7</td>
                <td colspan="16" class="p3">Memberikan bantuan saat pasien ambulasi</td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428249] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428250] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428251] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428252] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428253] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428254] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
            </tr>
            <tr style="font-size: small;">
                <td colspan="3" class="p3" valign="top">8</td>
                <td colspan="16" class="p3">Anjurkan pasien menggunakan kaos kaki atau sepatu yang tidak licin</td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428256] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428257] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428258] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428259] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428260] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428261] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
            </tr>
            <tr style="font-size: small;">
                <td colspan="3" class="p3" valign="top">9</td>
                <td colspan="16" class="p3">Meletakkan alat bantu pasien dalam jangkauan ( kacamata, HP, tongkat dan
                    penyangga)</td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428263] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428264] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428265] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428266] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428267] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428268] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
            </tr>
            <tr style="font-size: small;">
                <td colspan="3" class="p3" valign="top">10</td>
                <td colspan="16" class="p3">Gunakan alat bantu jalan (walker, handrail)</td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428270] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428271] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428272] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428273] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428274] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428275] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
            </tr>
            <tr style="font-size: small;height:70pt" valign="top">
                <td colspan="19" class="p3 text-center">Nama & tanda tangan perawat</td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428276] ? item.obj[428276] : '' }}</td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428277] ? item.obj[428277] : '' }}</td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428278] ? item.obj[428278] : '' }}</td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428279] ? item.obj[428279] : '' }}</td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428280] ? item.obj[428280] : '' }}</td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428281] ? item.obj[428281] : '' }}</td>
            </tr>
            <tr>
                <td colspan="3" rowspan="2" class="text-center">No</td>
                <td colspan="16" rowspan="2" class="text-center">Risiko Tinggi</td>
                <td colspan="5" class="p3">Tgl: @{{item.obj[428282] | toDate | date:'dd-MM-yyyy'}}</td>
                <td colspan="5" class="p3">Tgl: @{{item.obj[428283] | toDate | date:'dd-MM-yyyy'}}</td>
                <td colspan="5" class="p3">Tgl: @{{item.obj[428284] | toDate | date:'dd-MM-yyyy'}}</td>
                <td colspan="5" class="p3">Tgl: @{{item.obj[428285] | toDate | date:'dd-MM-yyyy'}}</td>
                <td colspan="5" class="p3">Tgl: @{{item.obj[428286] | toDate | date:'dd-MM-yyyy'}}</td>
                <td colspan="5" class="p3">Tgl: @{{item.obj[428287] | toDate | date:'dd-MM-yyyy'}}</td>
            </tr>
            <tr>
                <td colspan="5" class="p3">Jam: @{{item.obj[428282] | toDate | date:'HH:mm'}}</td>
                <td colspan="5" class="p3">Jam: @{{item.obj[428283] | toDate | date:'HH:mm'}}</td>
                <td colspan="5" class="p3">Jam: @{{item.obj[428284] | toDate | date:'HH:mm'}}</td>
                <td colspan="5" class="p3">Jam: @{{item.obj[428285] | toDate | date:'HH:mm'}}</td>
                <td colspan="5" class="p3">Jam: @{{item.obj[428286] | toDate | date:'HH:mm'}}</td>
                <td colspan="5" class="p3">Jam: @{{item.obj[428287] | toDate | date:'HH:mm'}}</td>
            </tr>
            <tr style="font-size: small;">
                <td colspan="3" class="p3" valign="top">1</td>
                <td colspan="16" class="p3">Pakaikan stiker risiko jatuh berwarna kuning pada gelang pasien</td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428289] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428290] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428291] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428292] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428293] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428294] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
            </tr>
            <tr style="font-size: small;">
                <td colspan="3" class="p3" valign="top">2</td>
                <td colspan="16" class="p3">Pasangkan tanda peringatan pasien jatuh diatas tempat tidur pasien / di
                    dinding dekat pasien / di gantung dekat pasien</td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428296] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428297] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428298] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428299] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428300] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428301] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
            </tr>
            <tr style="font-size: small;">
                <td colspan="3" class="p3" valign="top">3</td>
                <td colspan="16" class="p3">Pasien ditempelkan didekat nurse station</td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428303] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428304] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428305] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428306] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428307] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428308] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
            </tr>
            <tr style="font-size: small;">
                <td colspan="3" class="p3" valign="top">4</td>
                <td colspan="16" class="p3">Memasangkan handrail tempat tidur bila meninggalkan pasien seorang diri</td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428310] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428311] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428312] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428313] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428314] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428315] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
            </tr>
            <tr style="font-size: small;">
                <td colspan="3" class="p3" valign="top">5</td>
                <td colspan="16" class="p3">Mendampingi pasien saat ke kamar mandi, jangan tinggalkan sendiri dikamar
                    mandi</td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428317] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428318] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428319] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428320] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428321] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428322] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
            </tr>
            <tr style="font-size: small;">
                <td colspan="3" class="p3" valign="top">6</td>
                <td colspan="16" class="p3">Monitor kebutuhan pasien secara berkala (minimal tiap 2 jam )</td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428324] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428325] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428326] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428327] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428328] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428329] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
            </tr>
            <tr style="font-size: small;">
                <td colspan="3" class="p3" valign="top">7</td>
                <td colspan="16" class="p3">Membantu kebutuhan eliminasi pasien saban 2 jam </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428331] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428332] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428333] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428334] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428335] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428336] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
            </tr>
            <tr style="font-size: small;">
                <td colspan="3" class="p3" valign="top">8</td>
                <td colspan="16" class="p3">Lantai kamar mandi dengan karpetanti slip/tidak licin, serta anjuran
                    menggunakan tempat duduk dikamar mandi saat pasien mandi </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428338] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428339] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428340] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428341] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428342] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428343] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                </td>
            </tr>
            <tr style="font-size: small;height:70pt" valign="top">
                <td colspan="19" class="p3 text-center">Nama & tanda tangan perawat</td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428344] ? item.obj[428344] : '' }}</td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428345] ? item.obj[428345] : '' }}</td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428346] ? item.obj[428346] : '' }}</td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428347] ? item.obj[428347] : '' }}</td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428348] ? item.obj[428348] : '' }}</td>
                <td colspan="5" class="p3 text-center">@{{ item.obj[428349] ? item.obj[428349] : '' }}</td>
            </tr>
        </table>
    </div>
    @endif


</body>

</html>