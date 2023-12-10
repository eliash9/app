<!DOCTYPE html>
<html lang="en" ng-app="angularApp">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Persalinan</title>

    <style>
        * {
            font-family: DejaVu Sans, Verdana, Arial, sans-serif;

        }

        @page {
            size: auto;
            size: A4 portrait;
        }

        html,
        body {
            font-size: 9pt;
            margin-top: 10px;
            margin-left: 40px;
        }

        table {
            page-break-inside: auto;
        }

        tr {
            page-break-inside: avoid;
            page-break-after: auto;
        }

        header {
            border: 1px solid #000;
            width: 100%;
            display: flex;
            justify-content: flex-start;
        }

        .logo {
            width: 100px;
            height: auto;
            border-right: 1px solid #000;
            padding: .3rem;
        }

        .kop {
            padding: .3rem;
            align-self: center;
        }

        .kop-text {
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
        }

        .border-top,
        .border-bottom,
        .border-left,
        .border-right {
            border-collapse: collapse;
            box-sizing: border-box;
        }

        .border-top {
            border-top: .1rem solid rgba(0, 0, 0, 0.45);
        }

        .border-bottom {
            border-bottom: .1rem solid rgba(0, 0, 0, 0.45);
        }

        .border-left {
            border-left: .1rem solid rgba(0, 0, 0, 0.45);
        }

        .border-right {
            border-right: .1rem solid rgba(0, 0, 0, 0.45);
        }

        .flex {
            display: flex;
        }

        .flex .basis50,
        .col-2 {
            flex-basis: 50%;
        }

        ul li:not(:first-child) {
            padding: .3rem;
        }

        ul li {
            list-style: none;
        }

        .basis50 ul li:first-child {
            border-bottom: 1px solid #000;
            padding: .3rem;
        }

        table {
            border: 1px solid #000;
            border-collapse: collapse;
            font-size: x-small;
        }

        tr td {
            border: 1px solid #000;
            border-collapse: collapse;
        }

        #content>tr td,
        .info table>tr td {
            width: 20px;
        }

        td {
            padding: .3rem;
        }
    </style>

</head>

<body ng-controller="cetakLaporanPersalinan">
    <section>
        <table width="100%" id="content" style="table-layout:fixed">
            <tr style="border:none;border-top:1px solid #000">
                <td rowspan="4" style="border:none;border-right:1px solid #000">

                    <img src="{{ public_path('service/img/logo_only.png') }}" alt=""
                        style="width: 60px;display:block; margin:auto;">

                </td>
                <td rowspan="4" colspan="3" style="text-align:center;border:none"><strong>{!!
                        $res['profile']->namalengkap !!}</strong> <br>{!! $res['profile']->alamatlengkap !!}<br>TELP :
                    (0413) 81292</td>
                <td style="border:none;border-left:1px solid #000">No. RM </td>
                <td colspan="3" style="border:none">: {!! $res['d'][0]->nocm !!}</td>
                <td rowspan="2" style="font-size:xx-large;text-align: center;" class="bg-dark">RM</td>
            </tr>
            <tr>
                <td style="border:none;border-left:1px solid #000">Nama Lengkap</td>
                <td colspan="3" style="border:none">: {!! $res['d'][0]->namapasien !!} {!! $res['d'][0]->jeniskelamin ==
                    'PEREMPUAN' ? '(P)' : '(L)' !!}</td>
            </tr>
            <tr>
                <td style="border:none;border-left:1px solid #000">Tanggal Lahir</td>
                <td colspan="3" style="border:none">: {!! date('d-m-Y',strtotime( $res['d'][0]->tgllahir )) !!}</td>
                <td rowspan="2" style="font-size:xx-large;text-align: center;">59</td>
            </tr>
            <tr>
                <td style="border:none;border-left:1px solid #000">NIK</td>
                <td colspan="3" style="border:none">: {!! $res['d'][0]->noidentitas !!}</td>
            </tr>
            <tr>
                <td colspan="9" class="bg-dark" style="font-size:x-large">
                    LAPORAN PERSALINAN
                </td>
            </tr>
            <tr>
                <td style="border:none;">G : @{{ item.obj[31100366] ? item.obj[31100366] : '' }}</td>
                <td style="border:none;">P : @{{ item.obj[31100367] ? item.obj[31100367] : '' }}</td>
                <td style="border:none;">A : @{{ item.obj[31100368] ? item.obj[31100368] : '' }}</td>
                <td colspan="6" style="border:none;">M : @{{ item.obj[31100369] ? item.obj[31100369] : '' }}</td>
            </tr>
            <tr style="border:1px solid #000">
                <th style="border:1px solid #000">TANGGAL/ PUKUL</th>
                <th colspan="8" style="border:1px solid #000">RIWAYAT PERSALINAN</th>
            </tr>
            <tr style="border:1px solid #000">
                <td>@{{item.obj[31100370] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="8" style="border:none;">Pasien masuk kamar bersalin</td>
            </tr>
            <tr>
                <td rowspan="4">@{{item.obj[31100371] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="8" style="border:none;">PEMERIKSAAN LUAR</td>
            </tr>
            <tr>
                <td style="border:none;" colspan="8"> TFU : @{{ item.obj[31100372] ? item.obj[31100372] : '' }}</td>
            </tr>
            <tr>
                <td style="border:none;" colspan="8"> Letak :
                    @{{ item.obj[31100373] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Kepala
                    @{{ item.obj[31100374] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Sungsang
                    @{{ item.obj[31100375] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Lintang
                    @{{ item.obj[31100376] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Oblique
                    @{{ item.obj[31100377] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Punggung Kiri
                    @{{ item.obj[31100378] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Punggung Kanan</td>
            </tr>
            <tr>
                <td style="border:none;"> DJJ :</td>
                <td colspan="" style="border:none;"> @{{ item.obj[31100378] ? item.obj[31100378] : '____' }} x / menit
                </td>
                <td colspan="6" style="border:none;"></td>
            </tr>
            <tr style="border:1px solid #000;border-bottom:none">
                <td rowspan="4">@{{item.obj[31100413] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="4" style="border:1px solid #000;border-bottom:none;border-top:none">PEMERIKSAAN DALAM</td>
                <td colspan="1" style="border:none">Air Ketuban</td>
                <td colspan="3" style="border:none">:
                    @{{ item.obj[31100387] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} +
                    @{{ item.obj[31100388] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} -
                </td>
            </tr>
            <tr style="border:none;">
                <td colspan="1" style="border:none">Vulva</td>
                <td colspan="3" style="border:1px solid #000;border-bottom:none;border-top:none;border-left:none">:
                    @{{ item.obj[31100379] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} NORMAL
                    @{{ item.obj[31100380] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} TIDAK NORMAL
                </td>
                <td colspan="1" style="border:none">Air Ketuban</td>
                <td colspan="3" style="border:none">:
                    @{{ item.obj[31100389] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Jernih
                    @{{ item.obj[31100390] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Hijau
                    @{{ item.obj[31100391] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Pekat
                </td>
            </tr>
            <tr style="border:none">
                <td colspan="1" style="border:none">Vagina</td>
                <td colspan="3" style="border:1px solid #000;border-bottom:none;border-top:none;border-left:none">:
                    @{{ item.obj[31100381] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} NORMAL
                    @{{ item.obj[31100382] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} TIDAK NORMAL
                </td>
                <td colspan="1" style="border:none">Kepala</td>
                <td colspan="3" style="border:none">:
                    @{{ item.obj[31100381] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Hodge I - II
                    @{{ item.obj[31100382] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Hodge II - III
                    @{{ item.obj[31100381] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Hodge III - IV
                    @{{ item.obj[31100382] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} U2K
                    @{{ item.obj[31100382] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Sacrum
                </td>
            </tr>
            <tr style="border:1px solid #000;border-top:none">
                <td colspan="1" style="border:none">Portio</td>
                <td colspan="3" style="border:1px solid #000;border-bottom:none;border-top:none;border-left:none">:
                    @{{ item.obj[31100383] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} TEBAL
                    @{{ item.obj[31100384] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} TIPIS
                    @{{ item.obj[31100385] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} KAKU
                    @{{ item.obj[31100386] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} LUNAK
                </td>
                <td colspan="1" style="border:none">Dagu</td>
                <td colspan="3" style="border:none">:
                    @{{ item.obj[31100397] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} KIRI
                    @{{ item.obj[31100398] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} KANAN
                    @{{ item.obj[31100399] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} DEPAN
                    @{{ item.obj[31100400] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} BELAKANG
                </td>
            </tr>
            <tr style="border:none">
                <td rowspan="3">@{{item.obj[31100414] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="1" style="border:none">Lahir bayi</td>
                <td colspan="3" style="border:1px solid #000;border-bottom:none;border-top:none;border-left:none">:
                    @{{ item.obj[31100401] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Laki-laki
                    @{{ item.obj[31100402] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Perempuan
                </td>
                <td colspan="1" style="border:none">Panjang Badan</td>
                <td colspan="3" style="border:none">: @{{ item.obj[31100408] ? item.obj[31100408] : '____' }} cm</td>
            </tr>
            <tr style="border:none">
                <td colspan="1" style="border:none">Spontan</td>
                <td colspan="3" style="border:1px solid #000;border-bottom:none;border-top:none;border-left:none">:
                    @{{ item.obj[31100403] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} LBK
                    @{{ item.obj[31100404] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} PK
                    @{{ item.obj[31100405] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} MK
                    @{{ item.obj[31100406] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Sungsang
                </td>
                <td colspan="1" style="border:none">Lilitan Tali Pusat</td>
                <td colspan="3" style="border:none">:
                    @{{ item.obj[31100409] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} +
                    @{{ item.obj[31100410] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} -
                </td>
            </tr>
            <tr style="border:none;border-bottom:1px solid #000">
                <td colspan="1" style="border:none">Berat Badan</td>
                <td colspan="3" style="border:1px solid #000;border-bottom:none;border-top:none;border-left:none">: @{{
                    item.obj[31100407] ? item.obj[31100407] : '____' }} gram</td>
                <td colspan="1" style="border:none">Episiotomi</td>
                <td colspan="3" style="border:none">:
                    @{{ item.obj[31100411] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} +
                    @{{ item.obj[31100412] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} -
                </td>
            </tr>
            <tr style="border:none">
                <td rowspan="3">@{{item.obj[31100415] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="1" style="border:none">Plasenta lahir</td>
                <td colspan="3" style="border:1px solid #000;border-bottom:none;border-top:none;border-left:none">:
                    @{{ item.obj[31100416] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Spontan
                    @{{ item.obj[31100417] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Manual
                </td>
                <td colspan="1" style="border:none">Ukuran</td>
                <td colspan="3" style="border:none">: @{{ item.obj[31100421] ? item.obj[31100421] : '____' }} x @{{
                    item.obj[31100422] ? item.obj[31100422] : '____' }} cm</td>
            </tr>
            <tr style="border:none">
                <td colspan="2" style="border:none">
                    @{{ item.obj[31100418] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Lengkap
                    @{{ item.obj[31100419] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak Lengkap
                </td>
                <td colspan="2" style="border:1px solid #000;border-bottom:none;border-top:none;border-left:none">

                </td>
                <td colspan="1" style="border:none">Perdarahan</td>
                <td colspan="3" style="border:none">: @{{ item.obj[31100423] ? item.obj[31100423] : '____' }} cc</td>
            </tr>
            <tr style="border:none">
                <td colspan="1" style="border:none">Berat</td>
                <td colspan="3" style="border:1px solid #000;border-bottom:none;border-top:none;border-left:none">: @{{
                    item.obj[31100423] ? item.obj[31100423] : '____' }} gram</td>
                <td colspan="1" style="border:none">Jahitan Perineum</td>
                <td style="border:none"> : Luar : @{{ item.obj[31100424] ? item.obj[31100424] : '____' }}</td>
                <td colspan="2" style="border:none"> dalam : @{{ item.obj[31100425] ? item.obj[31100425] : '____' }}
                </td>
            </tr>
            <tr style="border:1px solid #000;border-bottom:none">
                <th style="border:1px solid #000" rowspan="6">POST PARTUM</th>
                <td style="border:none" colspan="2">Keadaan ibu </td>
                <td style="border:none" colspan="6">:
                    @{{ item.obj[31100426] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Baik
                    @{{ item.obj[31100427] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak Baik
                </td>
            </tr>
            <tr>
                <td style="border:none" colspan="2">Tinggi Fundus Uteri</td>
                <td style="border:none" colspan="6">: @{{ item.obj[31100428] ? item.obj[31100428] : '' }}</td>
            </tr>
            <tr>
                <td style="border:none" colspan="2">Kontraksi Rahim</td>
                <td style="border:none" colspan="6">: @{{ item.obj[31100429] ? item.obj[31100429] : '' }}</td>
            </tr>
            <tr>
                <td style="border:none" colspan="2">Perdarahan</td>
                <td style="border:none" colspan="6">:
                    @{{ item.obj[31100430] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ada
                    @{{ item.obj[31100431] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak Ada @{{ item.obj[31100432] ?
                    item.obj[31100432] : '___' }} cc</td>
            </tr>
            <tr>
                <td style="border:none" colspan="2">Terapi</td>
                <td style="border:none" colspan="6">: @{{ item.obj[31100433] ? item.obj[31100433] : '' }}</td>
            </tr>
            <tr>
                <td style="border:none" colspan="2">Transfusi darah/ cairan</td>
                <td style="border:none" colspan="6">: @{{ item.obj[311004334] ? item.obj[311004334] : '' }}</td>
            </tr>
            <tr style="border:1px solid #000;border-bottom:none;">
                <th rowspan="4" style="border:1px solid #000;border-bottom:none;">2 JAM POST PARTUM</th>
                <td colspan="2" style="border:none">Keadaan ibu</td>
                <td colspan="2" style="border:none">:
                    @{{ item.obj[31100435] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Baik
                    @{{ item.obj[31100436] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak Baik
                </td>
                <td colspan="2" style="border:none">Tinggi FU</td>
                <td colspan="2" style="border:none">: @{{ item.obj[31100440] ? item.obj[31100440] : '' }}</td>
            </tr>
            <tr>
                <td colspan="2" style="border:none">Tensi</td>
                <td colspan="1" style="border:none">: @{{ item.obj[31100437] ? item.obj[31100437] : '' }}</td>
                <td colspan="1" style="border:none">mmHg</td>
                <td colspan="2" style="border:none">Kontraksi Rahim</td>
                <td colspan="2" style="border:none">:
                    @{{ item.obj[31100441] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Baik
                    @{{ item.obj[31100442] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak Baik
                </td>
            </tr>
            <tr>
                <td colspan="2" style="border:none">Nadi</td>
                <td colspan="1" style="border:none">: @{{ item.obj[31100438] ? item.obj[31100438] : '' }}</td>
                <td colspan="1" style="border:none">x / menit</td>
                <td colspan="2" style="border:none">Perdarahan</td>
                <td style="border:none">: @{{ item.obj[31100443] ? item.obj[31100443] : '' }}</td>
                <td style="border:none">cc</td>
            </tr>
            <tr>
                <td colspan="2" style="border:none">Respirasi</td>
                <td colspan="1" style="border:none">: @{{ item.obj[31100439] ? item.obj[31100439] : '' }}</td>
                <td colspan="1" style="border:none">x / menit</td>
                <td colspan="4" style="border:none"></td>
            </tr>
            <tr style="border:1px solid #000;border-bottom:none;">
                <td colspan="6" style="border:none">Diagnosa Kebidanan : @{{ item.obj[31100444] ? item.obj[31100444] :
                    '' }}</td>
                <td colspan="3" style="border:none">
                    Bulukumba : @{{item.obj[31100445] | toDate | date:'dd MMMM yyyy'}} Pukul : @{{item.obj[31100445] |
                    toDate | date:'HH:mm'}}
                </td>
            </tr>
            <tr>
                <td colspan="6" style="border:none"></td>
                <td colspan="3" style="text-align:left;border:none;">
                    Dokter / Bidan
                </td>
            </tr>
            <tr>
                <td colspan="6" style="border:none"></td>
                <td colspan="3" style="text-align:left;border:none;">
                    <div id="qrcodeDokter" style="text-align: left"></div>
                </td>
            </tr>
            </tr>
            <tr>
                <td colspan="6" style="border:none"></td>
                <td colspan="3" style="border:none">
                    (@{{ item.obj[31100446] ? item.obj[31100446] : '___________________________' }})
                </td>
            </tr>
            <tr>
                <td colspan="6" style="border:none"></td>
                <td colspan="3" style="border:none">
                    Tanda Tangan & Nama Jelas
                </td>
            </tr>
        </table>
    </section>

</body>

</html>