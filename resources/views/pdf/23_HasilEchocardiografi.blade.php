<!DOCTYPE html>
<html lang="en" ng-app="angularApp">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Echocardiografi</title>
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
    <link rel="stylesheet" href="{{ public_path('service/css/report/paper.css') }}">
    <link rel="stylesheet" href="{{ public_path('service/css/report/table.css') }}">
    <link rel="stylesheet" href="{{ public_path('service/css/report/tabel.css') }}">
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
        html,
        body {
            margin-top: 20px;
            margin-left: 40px;
            font-family: DejaVu Sans, Arial, Helvetica, sans-serif;
            box-sizing: border-box;
        }

        @page {
            size: A4;

        }

        table {
            page-break-inside: auto
        }

        tr {
            page-break-inside: avoid;
            page-break-after: auto
        }

        header {
            border: 1px solid #000;
        }

       

        .rotate {
            transform: rotate(-90deg);
        }

        .text-center {
            text-align: center;
        }

        .p05 {
            padding: .2rem;
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
            padding: .3rem;
        }

        .kop {
            padding: .3rem;
            align-self: center;
        }

        .kop-text {
            justify-content: center;
            align-items: center;
            align-content: center;
            text-align: center;
            font-size: xx-large;
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

        table {
            border: 1px solid #000;
            border-collapse: collapse;
            font-size: x-small;
        }

        tr td {
            border: 1px solid #000;
            border-collapse: collapse;
        }

        #content>tr td {
            width: 20px;
        }

        .info table>tr td {
            width: 20px;
        }

        td {
            padding: .3rem
        }
    </style>
</head>

<body ng-controller="cetakCardiografi">
    <section>
        <table width="100%" id="content" style="table-layout:fixed">
            <tr style="border:none;border-top:1px solid #000">
                <td rowspan="4" style="border:none;border-right:1px solid #000">
                    @if(stripos(\Request::url(), 'localhost') !== FALSE)
                    <img src="{{ public_path('img/logo_only.png') }}" alt=""
                        style="width: 60px;display:block; margin:auto;">
                    @else
                    <img src="{{ public_path('service/img/logo_only.png') }}" alt=""
                        style="width: 60px;display:block; margin:auto;">
                    @endif
                </td>
                <td rowspan="4" colspan="3" style="text-align:center;font-size:larger;border:none"><strong>{!!
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
                <td rowspan="2" style="font-size:xx-large;text-align: center;">163</td>
            </tr>
            <tr>
                <td style="border:none;border-left:1px solid #000">NIK</td>
                <td colspan="3" style="border:none">: {!! $res['d'][0]->noidentitas !!}</td>
            </tr>
            <tr>
                <td colspan="9" class="bg-dark" style="font-size:x-large">
                    HASIL ECHOCARDIOGRAFI
                </td>
            </tr>
            <tr style="border:none">
                <td style="border-top:1px;" colspan="9"><b>Tanggal diperiksa : @{{item.obj[32110651] | toDate | date:'dd
                        MMMM yyyy HH:mm'}}</b></td>
            </tr>
            <tr style="border:none">
                <td style="border:none;" colspan="9">Discription - Dimentional & Real Time Echocardiogram</td>
            </tr>
            <tr style="border:none">
                <td style="border:none;" colspan="9">Discription of Wall Motion, Masses, Valves, Pericardioum</td>
            </tr>
            <tr style="border:none">
                <td style="border:none;" colspan="9"></td>
            </tr>
            <tr style="border:none">
                <td style="border:none;" colspan="9">All Chambers</td>
            </tr>
            <tr style="border:none">
                <td style="border:none;" colspan="2">@{{ item.obj[32116513] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    LA/ @{{ item.obj[32116514] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} LV</td>
                <td style="border:none;" colspan="7">: @{{ item.obj[32110652] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    N / @{{ item.obj[32110653] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dilatasi / @{{
                    item.obj[32110654] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Mengecil</td>
            </tr>
            <tr style="border:none">
                <td style="border:none;" colspan="2">@{{ item.obj[32116515] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    RA/ @{{ item.obj[32116516] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} RV</td>
                <td style="border:none;" colspan="7">: @{{ item.obj[32110655] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    N / @{{ item.obj[32110656] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dilatasi / @{{
                    item.obj[32110657] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Mengecil</td>
            </tr>
            <tr style="border:none">
                <td style="border:none;" colspan="2">Others</td>
                <td style="border:none;" colspan="7">: @{{ item.obj[32110658] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Trombus / @{{ item.obj[32110659] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Pusaran / @{{
                    item.obj[32110660] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Pusaran Darah / @{{ item.obj[32110661]
                    ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tumor / @{{ item.obj[32110662] ? '[&#10004;]' :
                    '[&nbsp;&nbsp;&nbsp;]' }} @{{ item.obj[32110663] ? item.obj[32110663] : '...............' }}</td>
            </tr>
            <tr style="border:none">
                <td style="border:none;" colspan="2">LVH</td>
                <td style="border:none;" colspan="7">: @{{ item.obj[32110664] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Konsentrik / @{{ item.obj[32110665] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Eksentrik / @{{
                    item.obj[32110666] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak Ada</td>
            </tr>
            <tr style="border:none">
                <td style="border:none;" colspan="2">RWMA</td>
                <td style="border:none;" colspan="7">: @{{ item.obj[32110667] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Hipo / @{{ item.obj[32110668] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} A / @{{ item.obj[32110669]
                    ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Normo Kinetik di Ant. Basal / @{{ item.obj[32110670] ?
                    '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Lateral / @{{ item.obj[32110671] ? '[&#10004;]' :
                    '[&nbsp;&nbsp;&nbsp;]' }} Eksentrik / @{{ item.obj[32110672] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]'
                    }} Inferior / @{{ item.obj[32110673] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Middle / @{{
                    item.obj[32110674] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} @{{ item.obj[32110675] ?
                    item.obj[32110675] : '...............' }}</td>
            </tr>

            <tr style="border:none">
                <td style="border:none;" colspan="9"></td>
            </tr>

            <tr style="border:none">
                <td style="border:none;" colspan="9">Valves</td>
            </tr>
            <tr style="border:none">
                <td style="border:none;" colspan="2">AO</td>
                <td style="border:none;" colspan="7">:
                    @{{ item.obj[32110676] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} N /
                    @{{ item.obj[32110677] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} AS /
                    @{{ item.obj[32110678] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Al - Mild /
                    @{{ item.obj[32110679] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Moderate /
                    @{{ item.obj[32110680] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Severe</td>
            </tr>
            <tr style="border:none">
                <td style="border:none;" colspan="2">P</td>
                <td style="border:none;" colspan="7">:
                    @{{ item.obj[32110681] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} N /
                    @{{ item.obj[32110682] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} PS /
                    @{{ item.obj[32110683] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} PI - Mild /
                    @{{ item.obj[32110684] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Moderate /
                    @{{ item.obj[32110685] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Severe</td>
            </tr>
            <tr style="border:none">
                <td style="border:none;" colspan="2">T</td>
                <td style="border:none;" colspan="7">:
                    @{{ item.obj[32110686] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} N /
                    @{{ item.obj[32110687] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} TS /
                    @{{ item.obj[32110688] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} TI - Mild /
                    @{{ item.obj[32110689] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Moderate /
                    @{{ item.obj[32110690] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Severe</td>
            </tr>
            <tr style="border:none">
                <td style="border:none;" colspan="2">M</td>
                <td style="border:none;" colspan="7">:
                    @{{ item.obj[32110691] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} N /
                    @{{ item.obj[32110692] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} MS /
                    Wilkin Score : @{{ item.obj[32116517] ? item.obj[32116517] : '............' }} /
                    @{{ item.obj[32110693] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ml - Mild /
                    @{{ item.obj[32110694] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Moderate /
                    @{{ item.obj[32110695] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Severe - Distance - WS</td>
            </tr>
            <tr style="border:none">
                <td style="border:none;" colspan="2">EF (Estimated)</td>
                <td style="border:none;" colspan="7">: @{{ item.obj[32110696] ? item.obj[32110696] : '.....' }}%,
                    @{{ item.obj[32110697] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} E/
                    @{{ item.obj[32110698] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} A < 1 / @{{ item.obj[32110699]
                        ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}> , TAPSE :
                        @{{ item.obj[32110700] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} < 16 / @{{ item.obj[32110701]
                            ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}> 16</td>
            </tr>
            <tr style="border:none">
                <td style="border:none;" colspan="2">eRAP</td>
                <td style="border:none;" colspan="7">: @{{ item.obj[32116518] ? item.obj[32116518] : '.....' }}</td>
            </tr>
            <tr style="border:none">
                <td style="border:none;" colspan="2">Others</td>
                <td style="border:none;" colspan="7">:
                    @{{ item.obj[32110702] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Venticle Gap /
                    @{{ item.obj[32110703] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Atrial’
                    GAP : @{{ item.obj[32110704] ? item.obj[32110704] : '' }}</td>
            </tr>
            <tr style="border:none">
                <td style="border:none;" colspan="2">Results</td>
                <td style="border:none;" colspan="7">:
                    @{{ item.obj[32110705] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} HFpEF ec,
                    @{{ item.obj[32110706] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} HHD ,
                    @{{ item.obj[32110707] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} CAD,
                    @{{ item.obj[32110708] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Others ( Mention )
                    : @{{ item.obj[32110709] ? item.obj[32110709] : '' }}</td>
            </tr>
            <tr style="border:none">
                <td style="border:none;" colspan="2"></td>
                <td style="border:none;" colspan="7">:
                    @{{ item.obj[32110710] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} HFpEF ec,
                    @{{ item.obj[32110711] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} HHD ,
                    @{{ item.obj[32110712] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} CAD,
                    @{{ item.obj[32110713] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Others ( Mention )
                    : @{{ item.obj[32110714] ? item.obj[32110714] : '' }}</td>
            </tr>

            <tr style="border:none">
                <td style="border:none;" colspan="9"></td>
            </tr>

            <tr style="border:none">
                <td style="border:none;" colspan="9"> Tanggal dilakukan Echoyang sebelumnya ( bila ada ) :
                    @{{item.obj[32110715] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
            </tr>

            <tr style="border:none">
                <td style="border:none;" colspan="9"> Impression ( Compare To Previous ) :
                    @{{ item.obj[32110716] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Stabil /
                    @{{ item.obj[32110717] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Better /
                    @{{ item.obj[32110718] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Not Good : </td>
            </tr>

            <tr style="border:none">
                <td style="border:none;" colspan="9"></td>
            </tr>

            <tr style="border:none">
                <td style="border:none;" colspan="9"></td>
            </tr>

            <tr style="border:none">
                <td style="border:none;" colspan="6"></td>
                <td style="border:none;" colspan="3">Bulukumba, @{{item.obj[32110719] | toDate | date:'dd MMMM yyyy
                    HH:mm'}}</td>
            </tr>

            <tr style="border:none">
                <td style="border:none;" colspan="6"></td>
                <td style="border:none;" colspan="3">Dokter Yang Memeriksa</td>
            </tr>

            <tr style="border:none">
                <td style="border:none;" colspan="6"></td>
                <td style="border:none;" colspan="3">
                    <div id="qrcodeDokter" style="text-align: left"></div>
                </td>
            </tr>

            <tr style="border:none">
                <td style="border:none;" colspan="6"></td>
                <td style="border:none;" colspan="3">(@{{ item.obj[32110720] ? item.obj[32110720] :
                    '.....................................' }})</td>
            </tr>

        </table>
    </section>
    <!-- 
	
	: 
	: 

	



-->

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

    angular.controller('cetakCardiografi', function ($scope, $http, httpService) {
        $scope.item = {
            obj: [],
            obj2: [],
            objImg: [],
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

        var dokter = $scope.item.obj[32110720];

        if (dokter != undefined) {
            jQuery('#qrcodeDokter').qrcode({
                width: 100,
                height: 100,
                text: "Tanda Tangan Digital Oleh " + dokter
            });
        }

    }
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