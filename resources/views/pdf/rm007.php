<!DOCTYPE html>
<html lang="en" ng-app="angularApp">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asesmen Awal Keperawatan IGD</title>
    <!--
    @if (stripos(\Request::url(), 'localhost') !== false)
        {{-- <link rel="stylesheet" href="{{ asset('css/report/paper.css') }}">
        <link rel="stylesheet" href="{{ asset('css/report/table.css') }}">
        <link rel="stylesheet" href="{{ asset('css/report/tabel.css') }}"> --}}
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/jquery.qr-code.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/qrcode/src/jquery.qrcode.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/qrcode/src/qrcode.js') }}"></script>
        {{-- <link href="{{ asset('css/style.css') }}" rel="stylesheet"> --}}
       
        <script src="{{ asset('js/angular/angular.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/angular/angular-route.min.js') }}" type="text/javascript"></script>
        <script type="text/javascript" src="{{ asset('js/angular/angular-animate.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/angular/angular-aria.min.js') }}"></script>
        <script src="{{ asset('js/angular/angular-material.js') }}" type="text/javascript"></script>
    @else
        <link rel="stylesheet" href="{{ asset('service/css/report/paper.css') }}">
        <link rel="stylesheet" href="{{ asset('service/css/report/table.css') }}">
        <link rel="stylesheet" href="{{ asset('service/css/report/tabel.css') }}">
        <script src="{{ asset('service/js/jquery.min.js') }}"></script>
        <script src="{{ asset('service/js/jquery.qr-code.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/qrcode/src/jquery.qrcode.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/qrcode/src/qrcode.js') }}"></script>
        {{-- <link href="{{ asset('service/css/style.css') }}" rel="stylesheet"> --}}
      
        <script src="{{ asset('service/js/angular/angular.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('service/js/angular/angular-route.min.js') }}" type="text/javascript"></script>
        <script type="text/javascript" src="{{ asset('service/js/angular/angular-animate.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('service/js/angular/angular-aria.min.js') }}"></script>
        <script src="{{ asset('service/js/angular/angular-material.js') }}" type="text/javascript"></script>
    @endif
-->
    <!--style>
        *{
            padding:0;
            margin:0;
            box-sizing:border-box;
        }
        @page{
            size:A4;
            width:210mm;
            height:279mm;
            margin-left:3rem;
            margin-top:1rem;
            margin-bottom:1rem;
            margin-right:1rem;
            transform:scale(72%);
        }
        table { page-break-inside:auto }
        tr    { page-break-inside:avoid; page-break-after:auto }
        section{
            width:210mm
        }
        .rotate{
            transform: rotate(-90deg);
        }
        .text-center{
            text-align: center;
        }
        .p05{
            padding:.2rem;
        }
        body{
            width:210mm;
            height:279mm;
            margin:0 auto;
            /* border:.1rem solid rgba(0,0,0,0.35); */
            border-bottom:none;
        }
        header{
            width:100%;
            display:flex;
            justify-content:flex-start;
            /* border:1px solid #000; */
        }
        .logo{
            width:100px;
            height:auto;
            border-right:1px solid #000;
            padding:.3rem;
        }
        img{
            width:100%;
            height:100%;
          
        }
        .kop{
            padding:.3rem;
            align-self:center;
        }
        .kop-text{
            justify-content:center;
            align-items:center;
            align-content:center;
            text-align:center;
            font-size:smaller;
        }
        .info{
            border-left:1px solid #000;
            border-right:1px solid #000;
            border-collapse:collapse;
            flex-grow:1;
            padding:.3rem;
        }
        .code{
            display:flex;
            flex-direction:column;
            font-size:34px;
            flex-basis:15%;
            padding:0;
        }
        .code div:first-child{
            width:100%;
            background:#000;
            color:#fff;
            text-align:center;
            padding:.5rem;
        }
        .code div:last-child{
            text-align:center;
            width:100%;
            padding:.5rem;
        }
        .title{
            font-size:16pt;
            font-weight:bold;
        }
        .bg-dark{
            background:#000;
            color:#fff;
            padding:.5rem;
            text-align:center;
        }
        .bordered{
            border:1px solid black;
            border-collapse:collapse;
            padding:.2rem;
            box-sizing: border-box;
        }
        .border-top{
            border-top:.1rem solid rgba(0,0,0,0.45);
            border-collapse:collapse;
            box-sizing: border-box;
        }
        .border-bottom{
            border-bottom:.1rem solid rgba(0,0,0,0.45);
            border-collapse:collapse;
            box-sizing: border-box;
        }
        .border-left{
            border-left:.1rem solid rgba(0,0,0,0.45);
            border-collapse:collapse;
            box-sizing: border-box;
        }
        .border-right{
            border-right:.1rem solid rgba(0,0,0,0.45);
            border-collapse:collapse;
            box-sizing: border-box;
        }
        .flex{
            display:flex;
        }
        .flex .basis50{
            flex-basis:50%;
        }
        .col-2{
            display:flex;
            flex-basis:50%;
        }
        ul li:not(nth-child(1)){
            padding:.3rem;
            }
            ul li{
            list-style:none;
        }
        .basis50 ul li:first-child{
            border-bottom:1px solid #000;
            padding:.3rem;
        }
        table {
            border:1px solid #000;
            border-collapse: collapse;
            font-size: x-small;
            page-break-before: always;
            page-break-after: always;
        }
        tr td{
            border:1px solid #000;
            border-collapse: collapse;
        }
        #content > tr td{
            width:20px;
        }
        .info table > tr td{
            width:20px;
        }
        td{
            padding:.3rem
        }
        @media print
        {
            table {page-break-after:always}
            section {page-break-after: always;}
        }
        @media print
        {
            table {page-break-before:always}
            section {page-break-after: always;}
        }
    </style-->
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

        }

        table tr td {
            border: 1px solid #000;
            border-collapse: collapse;
            padding: .3rem;
        }

        tr,
        td {
            page-break-inside: avoid;
        }

        .avoid-break {
            page-break-before: avoid;
            page-break-after: avoid;
        }



        td input {
            vertical-align: middle;
        }

        .format {
            padding: 1rem;
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
    </style>

</head>

<body ng-controller="cetakAsesmenAwalKeperawatanIGD">
    <section>
    @isset($res)
        <table width="100%" style="table-layout:fixed">
            <tr style="border:none;border-top:1px solid #000">
                <td rowspan="4" colspan="3" style="border:none; width:80px;">
                    <!--     @if(stripos(\Request::url(), 'localhost') !== FALSE)
                                <img src="{{ asset('img/logo_only.png') }}" alt="" style="width: 60px;display:block; margin:auto;">
                            @else
                     -->
                    <img src="service/img/logo_only.png" alt="" style="width: 60px;display:block;">
                    <!--     @endif -->
                </td>
                <td rowspan="4" colspan="7" style="text-align:center;font-size:10px;border:none">
                <strong>{!! $title !!}</strong> <br>{!! $res['profile']->alamatlengkap !!}<br>TELP :
                    (0413) 81292</td>
                <td colspan="2" style="border:none;border-left:1px solid #000">No. RM </td>
                <td colspan="8" style="border:none">: {!! $res['d'][0]->nocm !!}</td>
                <td rowspan="2" colspan="2" style="font-size:xx-large;text-align: center;" class="bg-dark">RM</td>
            </tr>
            <tr height="20px">
                <td colspan="2" style="border:none;border-left:1px solid #000">Nama Lengkap</td>
                <td colspan="8" style="border:none">: {!! $res['d'][0]->namapasien !!} {!! $res['d'][0]->jeniskelamin ==
                    'PEREMPUAN' ? '(P)' : '(L)' !!}</td>
            </tr>
            <tr height="20px">
                <td colspan="2" style="border:none;border-left:1px solid #000">Tanggal Lahir</td>
                <td colspan="8" style="border:none">: {!! date('d-m-Y',strtotime( $res['d'][0]->tgllahir )) !!}</td>
                <td rowspan="2" colspan="2" style="font-size:xx-large;text-align: center;">07</td>
            </tr>

            <tr height="20px">
                <td colspan='2' style="border:none;border-left:1px solid #000">NIK</td>
                <td colspan="8" style="border:none">: {!! $res['d'][0]->noidentitas !!}</td>
            </tr>

            <tr height="20px" class="bg-dark">
                <td colspan="22" style="font-size: x-large;">ASESMEN AWAL KEPERAWATAN IGD</td>
            </tr>
            <tr height="18px">
                <td colspan="7">Respon Time : @{{ item.obj[420616] ? item.obj[420616] : '' }}</td>
                <td colspan="9">Tanggal : @{{item.obj[420617] | toDate | date:'dd MMMM yyyy'}}</td>
                <td colspan="3" style="border:none">Masuk Pukul</td>
                <td colspan="3" style="border:none">: @{{item.obj[420617] | toDate | date:'HH:mm'}} WITA</td>
            </tr>
            <tr height="18px">
                <td colspan="4" style="border:none">Cara Pembayaran :</td>
                <td colspan="3" style="border:none;vertical-align:middle">@{{ item.obj[420620] ? '[&#10004;]' :
                    '[&nbsp;&nbsp;&nbsp;]' }} Umum</td>
                <td colspan="3" style="border:none;vertical-align:middle">@{{ item.obj[420621] ? '[&#10004;]' :
                    '[&nbsp;&nbsp;&nbsp;]' }} Asuransi</td>
                <td colspan="6" style="border:none;border-right:1px solid #000;vertical-align:middle">@{{
                    item.obj[420622] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} BPJS No. : @{{ item.obj[420623] ?
                    item.obj[420623] : '' }}</td>
                <td colspan="3" style="border:none">Diperiksa Pukul</td>
                <td colspan="3" style="border:none">: @{{item.obj[420618] | toDate | date:'HH:mm'}} WITA</td>
            </tr>
            <tr height="18px" style="border:1px solid #000">
                <td colspan="4">Jenis Kasus</td>
                <td colspan="3" style="border:none">@{{ item.obj[420624] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Bedah</td>
                <td colspan="3" style="border:none">@{{ item.obj[420625] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Non
                    Bedah</td>
                <td colspan="3" style="border:none">@{{ item.obj[420626] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Anak
                </td>
                <td colspan="9" style="border:none">@{{ item.obj[420627] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Kebidanan/Penyakit Kandungan</td>
            </tr>
            <tr height="18px" valign="middle">
                <td rowspan="3" colspan="4">Pengantar</td>
                <td colspan="2" style="border:none">Nama</td>
                <td colspan="7" style="border:none">: @{{ item.obj[420628] ? item.obj[420628] : '' }}</td>
                <td style="border:none;border-right:1px solid #000">(@{{ item.obj[420630] ? 'L' : 'P' }})</td>
                <td style="border:none">Alamat</td>
                <td colspan="7" style="border:none">: @{{ item.obj[420634] ? item.obj[420634] : '' }}</td>
            </tr>
            <tr height="18px" valign="middle">
                <td colspan="2" style="border:none">No.Tlpn/HP </td>
                <td style="border:none" colspan="8" style="border:none;">: @{{ item.obj[420632] ? item.obj[420632] : ''
                    }}</td>
                <td colspan="8" style="border:none;border-left:1px solid #000"></td>
            </tr>
            <tr height="18px" valign="middle">
                <td colspan="3" style="border:none">Hubungan dengan pasien</td>
                <td colspan="7" style="border:none;border-right:1px solid #000">: @{{ item.obj[420633] ?
                    item.obj[420633] : '' }}</td>
                <td colspan="8" style="border:none"></td>

            </tr>
            <tr height="35px">
                <td valign="middle" colspan="4">Keluhan Saat ini</td>
                <td colspan="18">@{{ item.obj[420864] ? item.obj[420864] : '' }}</td>
            </tr>
        </table>
        @endisset
        <br>
        <table width="100%" style="table-layout:fixed">


            <tr height="18px">
                <td rowspan="25" colspan="4" valign="top">Status Fisik</td>
                <td colspan="2" style="border:none;">Airway</td>
                <td style="border:none;">:</td>
                <td colspan="2" valign="middle" style="border:none;">@{{ item.obj[420635] ? '[&#10004;]' :
                    '[&nbsp;&nbsp;&nbsp;]' }} Normal</td>
                <td colspan="2" style="border:none;">@{{ item.obj[420636] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Masalah</td>
                <td colspan="11" style="border:none;">: @{{ item.obj[420637] ? item.obj[420637] : '' }}</td>
            </tr>
            <tr height="18px">
                <td colspan="2" style="border:none;">Breathing</td>
                <td colspan="2" style="border:none;">: Nafas</td>
                <td colspan="2" style="border:none;">: @{{ item.obj[420638] ? item.obj[420638] : '' }} x/m</td>
                <td style="border:none;"></td>
                <td colspan="4" style="border:none;">Pola pernafasan </td>
                <td colspan="2" style="border:none;">@{{ item.obj[420639] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Normal</td>
                <td colspan="2" style="border:none;">@{{ item.obj[420640] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Tidak, </td>
                <td colspan="3" style="border:none;">Jelaskan: @{{ item.obj[420641] ? item.obj[420641] : '' }}</td>
            </tr>
            <tr height="18px">
                <td colspan="2" style="border:none;">Circulation</td>
                <td colspan="2" style="border:none;">TD</td>
                <td colspan="2" style="border:none;">: @{{ item.obj[420642] ? item.obj[420642] : '' }} mmHg</td>
                <td style="border:none;"></td>
                <td style="border:none;" colspan="">Nadi</td>
                <td style="border:none;" colspan="3"> @{{ item.obj[420643] ? item.obj[420643] : '' }} x/m</td>
                <td style="border:none;" colspan="2">@{{ item.obj[420644] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Teratur</td>
                <td style="border:none;" colspan="5">@{{ item.obj[420645] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Tidak Teratur </td>
            </tr>
            <tr height="18px">
                <td style="border:none;" colspan="2">Suhu</td>
                <td style="border:none;" colspan="4">: @{{ item.obj[420646] ? item.obj[420646] : '' }} °C</td>
                <td style="border:none;"></td>
                <td style="border:none;" colspan="">Akral</td>
                <td style="border:none;" colspan="3">@{{ item.obj[420647] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Hangat</td>
                <td style="border:none;" colspan="7">@{{ item.obj[420648] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Dingin</td>
            </tr>
            <tr height="18px">
                <td style="border:none;" colspan="6">Pendarahan/Kehilangan Cairan :</td>
                <td style="border:none;"></td>
                <td style="border:none;" colspan=""></td>
                <td style="border:none;" colspan="4">@{{ item.obj[420649] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Tidak</td>
                <td style="border:none;" colspan="6">@{{ item.obj[420650] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Ada, Jelaskan : @{{ item.obj[420641] ? item.obj[420651] : '' }}</td>
            </tr>
            <tr height="18px">
                <td style="border:none;" colspan="2">Capilary Refill :</td>
                <td style="border:none;" colspan="5">@{{ item.obj[420652] ? item.obj[420652] : '___' }} Detik</td>
                <td style="border:none;" colspan="5"></td>
                <td style="border:none;" colspan="5">SPO2, Jelaskan : @{{ item.obj[420653] ? item.obj[420653] : '___' }}
                    %</td>
                <td style="border:none;"></td>
            </tr>
            <tr height="18px" style="border-top:1px solid #000">
                <td style="border:none;border-right:1px solid #000" colspan="6">
                <b>Dissability/Neurologi</b>

                <table width="100%" style="table-layout:fixed">
                    <tr>
                    <td colspan="6" style="border:none;border-right:1px solid #000">Kesadaran : @{{ item.obj[420654] ?
                    item.obj[420654] : '' }}</td>
                    </tr>

                </table>

                <br>
            
            
            
            </td>
                <td style="border:none;border-right:1px solid #000" colspan="6"></td>
                <td style="border:none;" colspan="6"></td>
            </tr>
            <tr height="18px">
                <td colspan="6" style="border:none;border-right:1px solid #000">Kesadaran : @{{ item.obj[420654] ?
                    item.obj[420654] : '' }}</td>
                <td colspan="6" style="border:none;border-right:1px solid #000"></td>
                <td colspan="6" style="border:none;"></td>
            </tr>
            <tr height="18px">
                <td colspan="6" style="border:none;border-right:1px solid #000">GCS : E : @{{ item.obj[420655] ?
                    item.obj[420655] : '' }}, V : @{{ item.obj[420656] ? item.obj[420656] : '' }}, M : @{{
                    item.obj[420657] ? item.obj[420657] : '' }}</td>
                <td colspan="6" style="border:none;border-right:1px solid #000">Exposure</td>
                <td style="border:none;border-right:1px solid #000" colspan="6">Tanda Kehidupan</td>
            </tr>
            <tr height="18px">
                <td style="border:none;" colspan="3">@{{ item.obj[420658] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Mandiri</td>
                <td style="border:none;border-right:1px solid #000" colspan="3">@{{ item.obj[420659] ? '[&#10004;]' :
                    '[&nbsp;&nbsp;&nbsp;]' }} Dibantu</td>
                <td style="border:none;" colspan="3">@{{ item.obj[420669] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Jelas</td>
                <td colspan="3" style="border:none;border-right:1px solid #000">@{{ item.obj[420670] ? '[&#10004;]' :
                    '[&nbsp;&nbsp;&nbsp;]' }} Pendarahan</td>
                <td colspan="6" style="border:none;">@{{ item.obj[420676] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Denyut Nadi (-)</td>
            </tr>
            <tr height="18px">
                <td style="border:none;" colspan="3">@{{ item.obj[420660] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Alert</td>
                <td style="border:none;border-right:1px solid #000" colspan="3">@{{ item.obj[420661] ? '[&#10004;]' :
                    '[&nbsp;&nbsp;&nbsp;]' }} Pain</td>
                <td style="border:none;" colspan="3">@{{ item.obj[420671] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Fraktur</td>
                <td style="border:none;border-right:1px solid #000" colspan="3">@{{ item.obj[420672] ? '[&#10004;]' :
                    '[&nbsp;&nbsp;&nbsp;]' }} Normal</td>
                <td style="border:none;" colspan="6">@{{ item.obj[420677] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Reflek Cahaya (-)</td>
            </tr>
            <tr height="18px">
                <td style="border:none;" colspan="3">@{{ item.obj[420662] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Verbal</td>
                <td style="border:none;border-right:1px solid #000" colspan="3">@{{ item.obj[420663] ? '[&#10004;]' :
                    '[&nbsp;&nbsp;&nbsp;]' }} Non Verbal</td>
                <td style="border:none;" colspan="3">@{{ item.obj[420673] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Hematom</td>
                <td style="border:none;border-right:1px solid #000" colspan="3">@{{ item.obj[420674] ? '[&#10004;]' :
                    '[&nbsp;&nbsp;&nbsp;]' }} Deformitas</td>
                <td style="border:none;" colspan="6">@{{ item.obj[420678] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} EKG
                    Asystole</td>
            </tr>

         
            <tr height="18px">
                <td colspan="6" style="border:none;border-right:1px solid #000"><strong>Pupil</strong></td>
                <td colspan="6" style="border:none;border-right:1px solid #000">@{{ item.obj[420675] ? '[&#10004;]' :
                    '[&nbsp;&nbsp;&nbsp;]' }} Luka</td>
                <td colspan="6" style="border:none;">Penentuan Kematian Pukul: @{{item.obj[420679] | toDate |
                    date:'HH:mm'}} WITA</td>
            </tr>

            <tr height="18px">
                <td colspan="2" style="border:none">@{{ item.obj[420664] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Isokor</td>
                <td colspan="2" style="border:none">@{{ item.obj[420665] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Anisokor</td>
                <td colspan="2" style="border:none;border-right:1px solid #000">@{{ item.obj[420666] ? '[&#10004;]' :
                    '[&nbsp;&nbsp;&nbsp;]' }} Midriasis</td>
                <td colspan="6" style="border:none;border-right:1px solid #000"></td>
                <td colspan="6" style="border:none"></td>
            </tr>
            <tr>
                <td colspan="6" style="border:none;border-right:1px solid #000">Refleks: @{{ item.obj[420667] ?
                    item.obj[420667] : '' }} / @{{ item.obj[420668] ? item.obj[420668] : '' }}</td>
                <td colspan="6" style="border:none;border-right:1px solid #000"></td>
                <td colspan="6" style="border:none;border-right:1px solid #000"></td>
            </tr>
        </table>
        <br>
        <table width="100%" style="table-layout:fixed">

            <tr height="18px" style="border-top: 1px solid #000;">
                <td colspan="4" rowspan="7" style="border:none;border-right:1px solid #000">Bio-Psiko-Sosio-Spiritual
                </td>
                <td colspan="3" style="border:none">@{{ item.obj[420680] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Rumah Sendiri</td>
                <td colspan="3" style="border:none">@{{ item.obj[420681] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Rumah Orang Tua</td>
                <td colspan="3" style="border:none">@{{ item.obj[420682] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Kontrak</td>
                <td colspan="2" style="border:none">@{{ item.obj[420683] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Kos
                </td>
                <td colspan="6" style="border:none">@{{ item.obj[420684] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Lainnya : @{{ item.obj[420685] ? item.obj[420685] : '' }}</td>
            </tr>
            <tr height="18px">
                <td colspan="3" style="border:none">@{{ item.obj[420687] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Tenang</td>
                <td colspan="3" style="border:none">@{{ item.obj[420688] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Cemas</td>
                <td colspan="3" style="border:none">@{{ item.obj[420689] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Marah</td>
                <td colspan="6" style="border:none">@{{ item.obj[420690] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Lainnya : @{{ item.obj[420691] ? item.obj[420691] : '' }}</td>
            </tr>
            <tr height="18px">
                <td colspan="3" style="border:none">Status Perkawinan</td>
                <td colspan="4" style="border:none">@{{ item.obj[420693] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Kawin</td>
                <td colspan="4" style="border:none">@{{ item.obj[420694] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Belum Kawin</td>
            </tr>
            <tr height="18px">
                <td colspan="7" style="border:none">Nilai dan keyakinan yang mempengaruhi Kesehatan :</td>
                <td colspan="4" style="border:none">@{{ item.obj[420696] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Tidak Ada</td>
                <td colspan="4" style="border:none">@{{ item.obj[420697] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ada
                    : @{{ item.obj[420698] ? item.obj[420698] : '' }}</td>
            </tr>
            <tr height="18px">
                <td colspan="2" style="border:none">Agama</td>
                <td colspan="2" style="border:none">@{{ item.obj[420700] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Islam</td>
                <td colspan="3" style="border:none">@{{ item.obj[420701] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Kristen Katolik</td>
                <td colspan="3" style="border:none">@{{ item.obj[420702] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Kristen Protestan</td>
                <td colspan="2" style="border:none">@{{ item.obj[420703] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Hindu</td>
                <td colspan="2" style="border:none">@{{ item.obj[420704] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Budha</td>
            </tr>
            <tr height="18px">
                <td colspan="2" style="border:none"></td>
                <td colspan="2" style="border:none">@{{ item.obj[420705] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Konghucu</td>
                <td colspan="6" style="border:none">@{{ item.obj[420706] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Kepercayaan terhadap Tuhan Yang Maha Esa</td>
            </tr>
            <tr height="18px">
                <td colspan="4" style="border:none">Menjalankan Ibadah</td>
                <td colspan="2" style="border:none">@{{ item.obj[420708] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Selalu</td>
                <td colspan="7" style="border:none">@{{ item.obj[420709] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ada
                    Hambatan : @{{ item.obj[420710] ? item.obj[420710] : '' }}</td>
            </tr>
            <tr height="18px" style="border:1px solid #000;">
                <td colspan="4" style="border:none;border-right:1px solid #000">Ekonomi</td>
                <td colspan="2" style="border:none">@{{ item.obj[420711] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} PNS
                </td>
                <td colspan="2" style="border:none">@{{ item.obj[420712] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    TNI/POLRI</td>
                <td colspan="3" style="border:none">@{{ item.obj[420713] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Pegawai Swasta</td>
                <td colspan="2" style="border:none">@{{ item.obj[420714] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Wiraswasta</td>
                <td colspan="3" style="border:none">@{{ item.obj[420715] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Petani/Nelayan</td>
                <td colspan="6" style="border:none">@{{ item.obj[420716] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Lain
                    : @{{ item.obj[420717] ? item.obj[420717] : '' }}</td>
            </tr>
            <tr height="18px">
                <td rowspan="6" colspan="4" valign="top">Riwayat Kesehatan Pasien</td>
                <td colspan="18" height="35px" valign="top">Riwayat Penyakit Sebelumnya : @{{ item.obj[420718] ?
                    item.obj[420718] : '' }}</td>
            </tr>
            <tr height="18px">
                <td colspan="18" height="35px" valign="top">Riwayat Penyakit Sekarang : @{{ item.obj[420719] ?
                    item.obj[420719] : '' }}</td>
            </tr>
            <tr height="18px">
                <td colspan="4" style="border:none">Anak ke : @{{ item.obj[420720] ? item.obj[420720] : '' }}</td>
                <td colspan="4" style="border:none">Dari : @{{ item.obj[420721] ? item.obj[420721] : '' }}</td>
                <td colspan="4" style="border:none">Meninggal : @{{ item.obj[420722] ? item.obj[420722] : '' }}</td>
                <td colspan="6" style="border:none">Abortus : @{{ item.obj[420723] ? item.obj[420723] : '' }}</td>
            </tr>
            <tr height="18px">
                <td colspan="6" style="border:none">Lahir : Ateim/Premature/Spontan/Tindakan </td>
                <td colspan="10" style="border:none"> : @{{ item.obj[420725] ? item.obj[420725] : '' }}</td>
                <td colspan="2" style="border:none">Oleh : @{{ item.obj[420726] ? item.obj[420726] : '' }}</td>
            </tr>
            <tr height="18px">
                <td colspan="6" style="border:none;">BB Lahir : @{{ item.obj[420727] ? item.obj[420727] : '' }} Kg</td>
                <td colspan="6" style="border:none;">Panjang Badan Lahir : @{{ item.obj[420728] ? item.obj[420728] : ''
                    }} cm</td>
                <td colspan="6" style="border:none;">Lingkar Kepala : @{{ item.obj[420729] ? item.obj[420729] : '' }} cm
                </td>
            </tr>
            <tr height="18px">
                <td colspan="4" style="border:none">Imunisasi: </td>
                <td colspan="2" style="border:none">@{{ item.obj[420731] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} BCG
                </td>
                <td colspan="2" style="border:none">@{{ item.obj[420732] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} DPT
                </td>
                <td colspan="2" style="border:none">@{{ item.obj[420733] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    POLIO</td>
                <td colspan="2" style="border:none">@{{ item.obj[420734] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Campak</td>
                <td colspan="2" style="border:none">@{{ item.obj[420735] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Hepatitis</td>
                <td colspan="4" style="border:none">@{{ item.obj[420736] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} @{{
                    item.obj[420737] ? item.obj[420737] : '' }}</td>
            </tr>
            <tr height="18px" style="border:1px solid #000">
                <td colspan="4">Riwayat Alergi</td>
                <td colspan="2" style="border:none">@{{ item.obj[420738] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Tidak </td>
                <td colspan="16" style="border:none">@{{ item.obj[420739] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ya,
                    Sebutkan : @{{ item.obj[420740] ? item.obj[420740] : '' }}</td>
            </tr>
            <tr height="18px" style="border:1px solid #000">
                <td colspan="4">Riwayat Penggunaan Obat</td>
                <td colspan="2" style="border:none">@{{ item.obj[420741] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Tidak Ada</td>
                <td colspan="16" style="border:none">@{{ item.obj[420742] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ada
                    : @{{ item.obj[420743] ? item.obj[420743] : '' }}</td>
            </tr>
            <tr height="18px" style="border:1px solid #000">
                <td colspan="4">Asesmen Nyeri</td>
                <td colspan="4" style="border:none">@{{ item.obj[420744] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Tidak Nyeri</td>
                <td colspan="14" style="border:none">@{{ item.obj[420745] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Nyeri Lanjut ke RM 36</td>
            </tr>
            <tr>
                <td colspan="4" rowspan="3">Resiko Jatuh</td>
                <td colspan="14" rowspan="3">
                    <h4>Penilaian / Pengkajian: </h4>
                    <p>
                    <pre>
    1. Cara Berjalan pasien (salah satu atau lebih)
       a. Tidak seimbang/sempoyongan/limbung
       b. Jalan dengan menggunakan alat bantu (kruk/tripot/kursi roda/orang lain)
    2. Menopang saat akan duduk : Tampak memegang pinggiran kursi atau meja/ 
       benda lain sebagai penopang saat akan duduk.

                        </pre>
                    </p>

                </td>
                <td colspan="2" style="border:none">@{{ item.obj[420749] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ya
                </td>
                <td colspan="2" style="border:none">@{{ item.obj[420750] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Tidak</td>
            </tr>
            <tr>
                <td colspan="2" style="border:none">@{{ item.obj[420752] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ya
                </td>
                <td colspan="2" style="border:none">@{{ item.obj[420753] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Tidak</td>
            </tr>
            <tr>
                <td colspan="2" style="border:none">@{{ item.obj[420755] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ya
                </td>
                <td colspan="2" style="border:none">@{{ item.obj[420756] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Tidak</td>
            </tr>
            <!-- lembar ke dua  -->
            <tr height="18px" style="border-top:1px solid #000">
                <td colspan="4" rowspan="2">Asesmen Fungsional</td>
                <td colspan="6" style="border:none">Alat Bantu : @{{ item.obj[420759] ? item.obj[420759] : '' }}</td>
                <td colspan="6" style="border:none">Prothesa : @{{ item.obj[420760] ? item.obj[420760] : '' }}</td>
                <td colspan="6" style="border:none">Cacat Tubuh : @{{ item.obj[420761] ? item.obj[420761] : '' }}</td>
            </tr>
            <tr height="18px">
                <td colspan="2" style="border:none">ADL :</td>
                <td colspan="4" style="border:none">@{{ item.obj[420763] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Mandiri</td>
                <td colspan="4" style="border:none">@{{ item.obj[420764] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Dibantu</td>
                <td colspan="4" style="border:none">@{{ item.obj[420765] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Tergabung Penuh</td>
            </tr>
            <tr style="text-align:center;height:18px">
                <td colspan="4" rowspan="8" style="text-align:left;vertical-align:top">Risiko Nutrisional</td>
                <td colspan="4">BB : @{{ item.obj[420766] ? item.obj[420766] : '' }}</td>
                <td colspan="6">TB : @{{ item.obj[420767] ? item.obj[420767] : '' }}</td>
                <td colspan="8">Lingkar Kepala : @{{ item.obj[420768] ? item.obj[420768] : '' }}</td>

            </tr>
            <tr style="text-align:center;height:18px">
                <td>No</td>
                <td colspan="13">Deskripsi</td>
                <td colspan="4">Jawaban</td>
            </tr>
            <tr height="18px">
                <td style="text-align:center">1</td>
                <td colspan="13">IMT < 20,5 kg/m2 atau LILA <23,5 cm</td>
                <td colspan="2">@{{ item.obj[420770] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ya</td>
                <td colspan="2">@{{ item.obj[420771] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak</td>
            </tr>
            <tr height="18px">
                <td style="text-align:center">2</td>
                <td colspan="13">Berat badan berkurang dalam 3 bulan</td>
                <td colspan="2">@{{ item.obj[420773] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ya</td>
                <td colspan="2">@{{ item.obj[420774] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak</td>
            </tr>
            <tr height="18px">
                <td style="text-align:center">3</td>
                <td colspan="13">Asupan makan menurun dalam 1 minggu terakhir</td>
                <td colspan="2">@{{ item.obj[420776] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ya</td>
                <td colspan="2">@{{ item.obj[420777] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak</td>
            </tr>
            <tr height="18px">
                <td style="text-align:center">4</td>
                <td colspan="13">Menderita sakit berat, misalnya: kesadaran menurun dan terapi intensif</td>
                <td colspan="2">@{{ item.obj[420779] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ya</td>
                <td colspan="2">@{{ item.obj[420780] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak</td>
            </tr>
            <tr height="18px">
                <td style="text-align:center">5</td>
                <td colspan="13">Ada gangguan metabolisme (DM, Penyakit Jantung, HT, CKD, TBC Keganasan)
                    Lain – lain : @{{ item.obj[420781] ? item.obj[420781] : '' }}.
                </td>
                <td colspan="2">@{{ item.obj[420782] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ya</td>
                <td colspan="2">@{{ item.obj[420783] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak</td>
            </tr>
            <tr height="18px">
                <td colspan="18"><strong>Jika terdapat jawaban Ya, maka dilaporkan ke dietisien untuk dilakukan skrining
                        lanjut.</strong></td>
            </tr>
            <tr>
                <td colspan="4" rowspan="3" valign="top">Kebutuhan Edukasi</td>
                <td colspan="18" style="border:none;padding:3px">Edukasi awal disampaikan tentang penggunaan
                    obat-obatan, penggunaan peralatan medis, potensi interaksi antara obat, diet dan nutrisi, manajemen
                    nyeri, teknik rehabilitasi, dan cuci tangan yang benar kepada :</td>
            </tr>
            <tr height="18px" style="border:none;">
                <td colspan="5" style="border:none;">@{{ item.obj[420785] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Pasien</td>
                <td colspan="13" style="border:none;">@{{ item.obj[420786] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Keluarga</td>
            </tr>
            <tr height="18px" style="border-bottom:1px solid #000;">
                <td colspan="18" style="border:none;">@{{ item.obj[420787] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Tidak dapat memberikan edukasi kepada pasien atau keluarga,karena : @{{ item.obj[420789] ?
                    item.obj[420789] : '' }}</td>
            </tr>
            <tr height="18px">
                <td colspan="4" rowspan="3">Perencanaan Pulang</td>
                <td colspan="4" style="border:none">Pasien disarankan pulang: </td>
                <td colspan="5" style="border:none">@{{ item.obj[420791] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Berobat Lanjut di FKTP</td>
                <td colspan="4" style="border:none">@{{ item.obj[420792] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Poli
                    : @{{ item.obj[420793] ? item.obj[420793] : '' }}</td>
            </tr>
            <tr height="18px" style="border:1px solid #000">
                <td colspan="4" style="border:none">Pasien Dirujuk</td>
                <td colspan="5" style="border:none">@{{ item.obj[420795] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Rujuk balik ke FKTP</td>
                <td colspan="9" style="border:none">@{{ item.obj[420796] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} RS
                </td>
            </tr>
            <tr height="18px" style="border:1px solid #000">
                <td colspan="15" style="border:none">Rawat inap, Bagian / Ruang : @{{ item.obj[420799] ?
                    item.obj[420799] : '' }}</td>
                <td colspan="" style="border:none"></td>
            </tr>
            <tr height="90px">
                <td colspan="4" valign="top">Masalah Keperawatan</td>
                <td colspan="18">@{{ item.obj[420800] ? item.obj[420800] : '' }}</td>
            </tr>
            <tr height="18px">
                <td colspan="4" rowspan="4" valign="top">Kriteria Evaluasi <br>Skala Likert (1-5)</td>
                <td colspan="3" style="text-align:center;">1</td>
                <td colspan="4" style="text-align:center;">2</td>
                <td colspan="3" style="text-align:center;">3</td>
                <td colspan="4" style="text-align:center;">4</td>
                <td colspan="4" style="text-align:center;">5</td>
            </tr>
            <tr height="18px" style="text-align:center;">
                <td colspan="3">@{{ item.obj[420801] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Menurun</td>
                <td colspan="4">@{{ item.obj[420802] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Cukup Menurun</td>
                <td colspan="3">@{{ item.obj[420803] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Sedang</td>
                <td colspan="4">@{{ item.obj[420804] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Cukup Meningkat</td>
                <td colspan="4">@{{ item.obj[420805] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Meningkat</td>
            </tr>
            <tr height="18px" style="text-align:center;">
                <td colspan="3">@{{ item.obj[420806] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Meningkat</td>
                <td colspan="4">@{{ item.obj[420807] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Cukup Meningkat</td>
                <td colspan="3">@{{ item.obj[420808] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Sedang</td>
                <td colspan="4">@{{ item.obj[420809] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Cukup Menurun</td>
                <td colspan="4">@{{ item.obj[420810] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Menurun</td>
            </tr>
            <tr height="18px" style="text-align:center;">
                <td colspan="3">@{{ item.obj[420811] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Memburuk</td>
                <td colspan="4">@{{ item.obj[420812] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Cukup Memburuk</td>
                <td colspan="3">@{{ item.obj[420813] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Sedang</td>
                <td colspan="4">@{{ item.obj[420814] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Cukup Membaik</td>
                <td colspan="4">@{{ item.obj[420815] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Membaik</td>
            </tr>
            <tr height="18px">
                <td colspan="4" valign="top" rowspan="16">Implementasi/<br>Tindakan Kolaborasi</td>
                <td colspan="2" style="text-align: center;">Tgl/Pukul</td>
                <td colspan="11" style="text-align: center;">Implementas Keperewatan/Tindakan Kolaborasi</td>
                <td colspan="5" style="text-align: center;">Nama dan Tanda Tangan</td>
            </tr>
            <tr height="18px">
                <td colspan="2">@{{item.obj[420816] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="11">@{{ item.obj[420817] ? item.obj[420817] : '' }}</td>
                <td colspan="5">@{{ item.obj[420818] ? item.obj[420818] : '' }}</td>
            </tr>
            <tr height="18px">
                <td colspan="2">@{{item.obj[420819] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="11">@{{ item.obj[420820] ? item.obj[420820] : '' }}</td>
                <td colspan="5">@{{ item.obj[420821] ? item.obj[420821] : '' }}</td>
            </tr>
            <tr height="18px">
                <td colspan="2">@{{item.obj[420822] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="11">@{{ item.obj[420823] ? item.obj[420823] : '' }}</td>
                <td colspan="5">@{{ item.obj[420824] ? item.obj[420824] : '' }}</td>
            </tr>
            <tr height="18px">
                <td colspan="2">@{{item.obj[420825] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="11">@{{ item.obj[420826] ? item.obj[420826] : '' }}</td>
                <td colspan="5">@{{ item.obj[420827] ? item.obj[420827] : '' }}</td>
            </tr>
            <tr height="18px">
                <td colspan="2">@{{item.obj[420828] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="11">@{{ item.obj[420829] ? item.obj[420829] : '' }}</td>
                <td colspan="5">@{{ item.obj[420830] ? item.obj[420830] : '' }}</td>
            </tr>
            <tr height="18px">
                <td colspan="2">@{{item.obj[420831] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="11">@{{ item.obj[420832] ? item.obj[420832] : '' }}</td>
                <td colspan="5">@{{ item.obj[420833] ? item.obj[420833] : '' }}</td>
            </tr>
            <tr height="18px">
                <td colspan="2">@{{item.obj[420834] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="11">@{{ item.obj[420835] ? item.obj[420835] : '' }}</td>
                <td colspan="5">@{{ item.obj[420836] ? item.obj[420836] : '' }}</td>
            </tr>
            <tr height="18px">
                <td colspan="2">@{{item.obj[420837] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="11">@{{ item.obj[420838] ? item.obj[420838] : '' }}</td>
                <td colspan="5">@{{ item.obj[420839] ? item.obj[420839] : '' }}</td>
            </tr>
            <tr height="18px">
                <td colspan="2">@{{item.obj[420840] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="11">@{{ item.obj[420841] ? item.obj[420841] : '' }}</td>
                <td colspan="5">@{{ item.obj[420842] ? item.obj[420842] : '' }}</td>
            </tr>
            <tr height="18px">
                <td colspan="2">@{{item.obj[420843] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="11">@{{ item.obj[420844] ? item.obj[420844] : '' }}</td>
                <td colspan="5">@{{ item.obj[420845] ? item.obj[420845] : '' }}</td>
            </tr>
            <tr height="18px">
                <td colspan="2">@{{item.obj[420846] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="11">@{{ item.obj[420847] ? item.obj[420847] : '' }}</td>
                <td colspan="5">@{{ item.obj[420848] ? item.obj[420848] : '' }}</td>
            </tr>
            <tr height="18px">
                <td colspan="2">@{{item.obj[420849] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="11">@{{ item.obj[420850] ? item.obj[420850] : '' }}</td>
                <td colspan="5">@{{ item.obj[420851] ? item.obj[420851] : '' }}</td>
            </tr>
            <tr height="18px">
                <td colspan="2">@{{item.obj[420852] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="11">@{{ item.obj[420853] ? item.obj[420853] : '' }}</td>
                <td colspan="5">@{{ item.obj[420854] ? item.obj[420854] : '' }}</td>
            </tr>
            <tr height="18px">
                <td colspan="2">@{{item.obj[420855] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="11">@{{ item.obj[420856] ? item.obj[420856] : '' }}</td>
                <td colspan="5">@{{ item.obj[420857] ? item.obj[420857] : '' }}</td>
            </tr>
            <tr height="18px">
                <td colspan="2">@{{item.obj[420858] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="11">@{{ item.obj[420859] ? item.obj[420859] : '' }}</td>
                <td colspan="5">@{{ item.obj[420860] ? item.obj[420860] : '' }}</td>
            </tr>
            <tr>
                <td style="border:none;border-right:1px solid #000" colspan="11">Bulukumba: @{{item.obj[420861] | toDate
                    | date:'dd MMMM yyyy'}} Pukul : @{{item.obj[420861] | toDate | date:'HH:mm'}} WITA</td>
                <td style="border:none;" colspan="11">Tanda Tangan</td>
            </tr>
            <tr>
                <td style="border:none;border-right:1px solid #000" colspan="11" valign="top">Perawat Penanggung Jawab
                    Asuhan : @{{ item.obj[420862] ? item.obj[420862] : '' }}</td>
                <td style="border:none;" colspan="11">
                    <div id="qrcodePerawat" style="text-align: center"></div>
                </td>
            </tr>
        </table>
    </section>

</body>
<script type="text/javascript">
    var baseUrl =
        {!! json_encode(url('/'))!!}
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

    angular.controller('cetakAsesmenAwalKeperawatanIGD', function ($scope, $http, httpService) {
        $scope.item = {
            obj: [],
            obj2: []
        }
        var dataLoad = {!! json_encode($res['d'])!!
    };
    for (var i = 0; i <= dataLoad.length - 1; i++) {
        if (dataLoad[i].emrdfk == 3110029) {
            continue;
        }
        if (dataLoad[i].type == "textbox") {
            $('#id_' + dataLoad[i].emrdfk).html(dataLoad[i].value)
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
            $('#id_' + dataLoad[i].emrdfk).html(dataLoad[i].value)
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
            $('#id_' + dataLoad[i].emrdfk).html(dataLoad[i].value)
            $scope.item.obj[dataLoad[i].emrdfk] = dataLoad[i].value
        }
        if (dataLoad[i].type == "combobox") {

            var str = dataLoad[i].value
            if (str != null) {
                var res = str.split("~");

                $scope.item.obj[dataLoad[i].emrdfk] = res[1]
                $('#id_' + dataLoad[i].emrdfk).html(res[1])
            }
        }
        if (dataLoad[i].type == "combobox2") {
            var str = dataLoad[i].value
            var res = str.split("~");

            $scope.item.obj[dataLoad[i].emrdfk + "" + 1] = res[0]
            $scope.item.obj[dataLoad[i].emrdfk] = res[1]
            $('#id_' + dataLoad[i].emrdfk).html(res[1])

        }

        if (dataLoad[i].emrdfk == '423816') {
            $scope.hariTgl = dataLoad[i].value
        }

        if (dataLoad[i].emrdfk == '2000001974') {
            $scope.jamPeriksa = dataLoad[i].value
        }

        if (dataLoad[i].emrdfk == '2000002354') {
            $scope.tgl1 = dataLoad[i].value
        }
        if (dataLoad[i].emrdfk == '2000002357') {
            $scope.tgl2 = dataLoad[i].value
        }
        if (dataLoad[i].emrdfk == '2000002360') {
            $scope.tgl3 = dataLoad[i].value
        }
        if (dataLoad[i].emrdfk == '2000002363') {
            $scope.tgl4 = dataLoad[i].value
        }
        if (dataLoad[i].emrdfk == '2000002366') {
            $scope.tgl5 = dataLoad[i].value
        }
        if (dataLoad[i].emrdfk == '2000002369') {
            $scope.tgl6 = dataLoad[i].value
        }
        if (dataLoad[i].emrdfk == '2000002372') {
            $scope.tgl7 = dataLoad[i].value
        }
        if (dataLoad[i].emrdfk == '2000002375') {
            $scope.tgl8 = dataLoad[i].value
        }
        if (dataLoad[i].emrdfk == '2000002378') {
            $scope.tgl9 = dataLoad[i].value
        }
        if (dataLoad[i].emrdfk == '2000002381') {
            $scope.tgl10 = dataLoad[i].value
        }
        if (dataLoad[i].emrdfk == '2000002384') {
            $scope.tgl11 = dataLoad[i].value
        }
        if (dataLoad[i].emrdfk == '2000002387') {
            $scope.tgl12 = dataLoad[i].value
        }
        if (dataLoad[i].emrdfk == '2000002390') {
            $scope.tgl13 = dataLoad[i].value
        }
        if (dataLoad[i].emrdfk == '2000002393') {
            $scope.tgl14 = dataLoad[i].value
        }
        if (dataLoad[i].emrdfk == '2000002396') {
            $scope.tgl15 = dataLoad[i].value
        }

        if (dataLoad[i].emrdfk == '2000002408') {
            $scope.pukul2 = dataLoad[i].value
        }

        $scope.tglemr = dataLoad[i].tgl

    }

    // var keluhan_saat_ini = $scope.item.obj[420864].replace(/(?:\r\n|\r|\n)/g, ', ');
    // var riwayat_penyakit_sebelumnya = $scope.item.obj[420718].replace(/(?:\r\n|\r|\n)/g, ', ');
    // var riwayat_penyakit_sekarang = $scope.item.obj[420719].replace(/(?:\r\n|\r|\n)/g, ', ');
    // var masalah_keperawatan = $scope.item.obj[420800].replace(/(?:\r\n|\r|\n)/g, ', ');

    // $scope.item.obj['keluhan_saat_ini'] = keluhan_saat_ini;
    // $scope.item.obj['riwayat_penyakit_sebelumnya'] = riwayat_penyakit_sebelumnya;
    // $scope.item.obj['riwayat_penyakit_sekarang'] = riwayat_penyakit_sekarang;
    // $scope.item.obj['masalah_keperawatan'] = masalah_keperawatan;

    var dpjp = $scope.item.obj[420862];
    jQuery('#qrcodePerawat').qrcode({
        width: 100,
        height: 100,
        text: "Tanda Tangan Digital Oleh " + dpjp
    });	
    })

    angular.filter('toDate', function () {
        return function (items) {
            if (items != null) {
                return new Date(items);
            }
        };
    });
    $(document).ready(function () {
        window.print();
    });
</script>

</html>