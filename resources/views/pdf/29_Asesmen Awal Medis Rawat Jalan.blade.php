<!DOCTYPE html>
<html lang="en" ng-app="angularApp">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asesmen Awal Medis Rawat Jalan</title>

    @if (stripos(\Request::url(), 'localhost') !== false)
        {{-- <link rel="stylesheet" href="{{ asset('css/report/paper.css') }}">
        <link rel="stylesheet" href="{{ asset('css/report/table.css') }}">
        <link rel="stylesheet" href="{{ asset('css/report/tabel.css') }}"> --}}
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/jquery.qr-code.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/qrcode/src/jquery.qrcode.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/qrcode/src/qrcode.js') }}"></script>
        {{-- <link href="{{ asset('css/style.css') }}" rel="stylesheet"> --}}
        <!-- angular -->
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
        <!-- angular -->
        <script src="{{ asset('service/js/angular/angular.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('service/js/angular/angular-route.min.js') }}" type="text/javascript"></script>
        <script type="text/javascript" src="{{ asset('service/js/angular/angular-animate.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('service/js/angular/angular-aria.min.js') }}"></script>
        <script src="{{ asset('service/js/angular/angular-material.js') }}" type="text/javascript"></script>
    @endif
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body,
        html {
            font-size: 6pt;
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

        td input {
            vertical-align: middle;
        }

        .format {
            padding: 1rem;
        }

        @media only screen and (max-width:220mm) and (max-height:270mm) {
            @page {
                size: A4;
                margin: 0;
                transform: scale(71%);
            }

            .format {
                width: 210mm;
                height: 297mm;
            }

            table {
                transform: scale(50%);
            }
        }
    </style>
</head>

<body ng-controller="cetakAsesmenMedisAwalRajal">
    <div class="format">

        <table>
            <tr>
                <td rowspan="4" colspan="4" style="text-align:center;width:45%">
                    <div
                        style="display:flex;justify-content:space-between;align-content:center;align-items:center;padding:.5rem;">
                        <figure style="width:60px;margin:0 auto;">
                            @if(stripos(\Request::url(), 'localhost') !== FALSE)
                                <img src="{{ asset('img/logo_only.png') }}" alt="" style="width: 60px;">
                            @else
                                <img src="{{ asset('service/img/logo_only.png') }}" alt="" style="width: 60px;">
                            @endif
                                
                        </figure>
                        <div class="detail">
                            <strong style="font-size: 7pt">{!! $res['profile']->namalengkap !!}</strong> <br>
                            JL. SERIKAYA NO. 17 BULUKUMBA 92512 <br>
                            TELP : (0413) 81292
                        </div>
                    </div>
                </td>
                <td width="80" style="border:none;">NO. RM</td>
                <td style="border:none;" colspan="4">: {!! $res['d'][0]->nocm  !!}</td>
                <td rowspan="3" style="background:#000;color:#fff;width:none20px;text-align:center;font-size:36px">RM
                </td>
            </tr>

            <tr>
                <td width="80" style="border:none;">NAMA LENGKAP</td>
                <td style="border:none;" colspan="4">: {!!  $res['d'][0]->namapasien  !!}</td>
            </tr>
            <tr>
                <td width="80" style="border:none;">TANGGAL LAHIR</td>
                <td style="border:none;" colspan="4">: {!! date('d-m-Y',strtotime( $res['d'][0]->tgllahir  )) !!}</td>
            </tr>
            <tr>
                <td width="80" style="border:none;">NIK</td>
                <td style="border:none;" colspan="4">: {!! $res['d'][0]->noidentitas  !!}</td>
                <td style="text-align:center;font-size:36px">04</td>
            </tr>
            <tr>
                <td colspan="10" style="text-align:center">
                    <h1>ASESMEN AWAL MEDIS RAWAT JALAN</h1>
                </td>
            </tr>
            <tr>
                <td style="border:none" colspan='3'>Poli : @{{ item.obj[421299] ? item.obj[421299] : '.....' }}</td>
                <td style="border:none" colspan='3'>Tanggal Kunjungan : @{{ item.obj[421300] | toDate | date:'dd-MM-yyyy' }}</td>
                <td style="border:none" colspan='3'>Pukul : @{{ item.obj[421300] | toDate | date:'HH:mm' }}</td>
            </tr>
            <tr>
                <td width='25px' colspan='2' valign="top" style="height:40px">Keluhan Saat ini</td>
                <td colspan="8">@{{ item.obj[421301] ? item.obj[421301] : '' }}</td>
            </tr>
            <tr style="border-bottom:1px solid #000">
                <td rowspan="3" colspan='2' valign="top">Status Fisik</td>
                <td colspan='2' style="border:none;">TD : @{{ item.obj[421302] ? item.obj[421302] : '.....' }} mmHg</td>
                <td colspan='2' style="border:none">Nadi : @{{ item.obj[421303] ? item.obj[421303] : '.....' }} x/mnt</td>
                <td colspan='2' style="border:none">Suhu : @{{ item.obj[421304] ? item.obj[421304] : '.....' }} &#176;C</td>
                <td colspan='2' style="border:none">Nafas : @{{ item.obj[421305] ? item.obj[421305] : '.....' }} x/mnt</td>
            </tr>
            <tr>
                <td rowspan='2' colspan="8" style="border-bottom:1px solid #000">Keadaan Umum : @{{ item.obj[421307] ? item.obj[421307] : '' }}</td>
            </tr>
            <tr></tr>
            <tr>
                <td rowspan='4' valign="top" colspan='2'>Bio-Psiko-Sosio-Spiritual</td>
                <td style='border:none' colspan="2">Masalah Psikologi</td>
                <td style='border:none'>: @{{ item.obj[421309] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak</td>
                <td style='border:none' colspan="3">: @{{ item.obj[421310] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ya, Sebutkan @{{ item.obj[421311] ? item.obj[421311] : '.......................' }}
                </td>
            </tr>
            <tr>
                <td style='border:none' colspan="2">Masalah Sosial</td>
                <td style='border:none'>: @{{ item.obj[421313] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak</td>
                <td style='border:none' colspan="3">: @{{ item.obj[421314] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ya, Sebutkan @{{ item.obj[421315] ? item.obj[421315] : '.......................' }}
                </td>
            </tr>
            <tr>
                <td style='border:none' colspan="2">Masalah Cultural/bahasa</td>
                <td style='border:none'>: @{{ item.obj[421317] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak</td>
                <td style='border:none' colspan="3">: @{{ item.obj[421318] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ya, Sebutkan @{{ item.obj[421319] ? item.obj[421319] : '.......................' }}
                </td>
            </tr>
            <tr>
                <td style='border:none' colspan="2">Masalah Spiritual</td>
                <td style='border:none'>: @{{ item.obj[421321] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak</td>
                <td style='border:none' colspan="3">: @{{ item.obj[421322] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ya, Sebutkan @{{ item.obj[421323] ? item.obj[421323] : '.......................' }}
                </td>
            </tr>
            <tr>
                <td colspan='2'>Ekonomi</td>
                <td colspan='8'>
                    <div style="display:flex;gap:0.3rem">
                        @{{ item.obj[421324] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} PNS
                        @{{ item.obj[421325] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} TNI/Polri
                        @{{ item.obj[421326] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Pegawai Swasta
                        @{{ item.obj[421327] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Wiraswasta
                        @{{ item.obj[421328] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Petani/Nelayan
                        @{{ item.obj[421329] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Lain-lain @{{ item.obj[421330] ? item.obj[421330] : '...............' }}
                    </div>
                </td>
            </tr>
            <tr>
                <td rowspan="2" colspan='2'>Riwayat Kesehatan Pasien</td>
                <td colspan='8' style="height:40px">Riwayat Penyakit Sebelumnya:@{{ item.obj[421331] ? item.obj[421331] : '' }}</td>
            </tr>
            <tr>
                <td colspan=8 style="height:40px">Riwayat Penyakit Sekarang: @{{ item.obj[421333] ? item.obj[421333] : '' }}</td>
            </tr>
            <tr style='border:1px solid #000'>
                <td colspan=2>Riwayat Alergi</td>
                <td style="border:none;">@{{ item.obj[421334] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak</td>
                <td style="border:none;" colspan="3">@{{ item.obj[421335] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ada,
                    Sebutkan : @{{ item.obj[421336] ? item.obj[421336] : '.......' }}</td>
            </tr>
            <tr style='border:1px solid #000'>
                <td colspan=2>Riwayat Penggunaan Obat</td>
                <td style="border:none;">@{{ item.obj[421337] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak</td>
                <td style="border:none;" colspan="3">@{{ item.obj[421338] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ada, : @{{ item.obj[421339] ? item.obj[421339] : '.......' }}</td>
            </tr>
            <tr style='border:1px solid #000'>
                <td colspan=2>Asesmen Nyeri</td>
                <td style="border:none;">@{{ item.obj[421340] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak Nyeri</td>
                <td style="border:none;" colspan="3">@{{ item.obj[421341] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Nyeri, Menggunakan metode : @{{ item.obj[421342] ? item.obj[421342] : '.......' }}</td>
            </tr>
            <tr style='border:1px solid #000'>
                <td colspan=2>Resiko Jatuh</td>
                <td style="border:none;">@{{ item.obj[421343] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak</td>
                <td style="border:none;" colspan="3">@{{ item.obj[421344] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ya, : @{{ item.obj[421345] ? item.obj[421345] : '.......' }}</td>
            </tr>
            <tr style='border:1px solid #000;height:0px'>
                <td rowspan="2" colspan='2'  valign="top">Asesmen Fungsional</td>
                <td colspan='2' style="border:none;">Alat bantu : @{{ item.obj[421346] ? item.obj[421346] : '.....' }}</td>
                <td colspan='2' style="border:none">Protehesa : @{{ item.obj[421347] ? item.obj[421347] : '.....' }} </td>
                <td colspan='2' style="border:none">Cacat tubuh : @{{ item.obj[421348] ? item.obj[421348] : '.....' }}</td>
            </tr>
            <tr style='border:1px solid #000;height:0px'>
                <td colspan='2' style="border:none;">ADL : </td>
                <td style="border:none;">@{{ item.obj[421350] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Mandiri</td>
                <td style="border:none;">@{{ item.obj[421351] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dibantu</td>
                <td style="border:none;">@{{ item.obj[421352] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tergantung Penuh</td>
            </tr>
            
            <tr style='border:1px solid #000'>
                <td colspan=2>Risiko Nutrisional</td>
                <td style="border:none;">@{{ item.obj[421353] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak</td>
                <td style="border:none;">@{{ item.obj[421354] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ya, : @{{ item.obj[421355] ? item.obj[421355] : '.......' }}
                </td>
            </tr>
            <tr style='border:1px solid #000'>
                <td colspan=2>Kebutuhan Edukasi</td>
                <td style="border:none;">@{{ item.obj[421356] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak</td>
                <td style="border:none;">@{{ item.obj[421357] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ya, : @{{ item.obj[421358] ? item.obj[421358] : '.......' }}
                </td>
            </tr>
            <tr style='border:1px solid #000;height:40px'>
                <td colspan='2' valign="top">Diagnosis</td>
                <td colspan='8'>@{{ item.obj[421359] ? item.obj[421359] : '' }}</td>
            </tr>
            <tr style='border:1px solid #000;height:40px'>
                <td colspan='2' valign="top">Tata Laksana</td>
                <td colspan='8'>@{{ item.obj[421360] ? item.obj[421360] : '' }}</td>
            </tr>
            <tr>
                <td rowspan="3" colspan='2' valign="top">Rencana Asuhan</td>
                <td colspan='8' valign="top" style="height:40px">Diagnostik : @{{ item.obj[421361] ? item.obj[421361] : '' }}</td>
            </tr>
            <tr>
                <td colspan=8 valign="top" style="height:40px">Terapi : @{{ item.obj[421363] ? item.obj[421363] : '' }}</td>
            </tr>
            <tr>
                <td colspan=8 valign="top" style="height:40px">Konsul : @{{ item.obj[421365] ? item.obj[421365] : '' }}</td>
            </tr>
            <tr style='border:1px solid #000;'>
                <td colspan='2' valign="top">Perencanaan Pulang</td>
                <td style="border:none;">@{{ item.obj[421366] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Rujuk Balik</td>
                <td style="border:none;">@{{ item.obj[421367] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Rawat Inap</td>
                <td style="border:none;">@{{ item.obj[421368] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Pulang</td>      
                <td style="border:none;">@{{ item.obj[421369] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Rujuk Ke RS : @{{ item.obj[421370] ? item.obj[421370] : '....' }}</td>       
            </tr>
            <tr style="height:100px">
                <td colspan=5 valign="top">
                    Dokter Penanggung Jawab Pelayanan : @{{ item.obj[421371] }}
                </td>
                <td colspan=5 valign="top">Tanda Tangan<div id="qrcodeDPJP" style="text-align: center"></div></td>
            </tr>
        </table>
    </div>
</body>
<script type="text/javascript">
    var baseUrl =
            {!! json_encode(url('/')) !!}
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

    angular.controller('cetakAsesmenMedisAwalRajal', function ($scope, $http, httpService) {
        $scope.item = {
            obj: [],
            obj2: []
        }
        var dataLoad = {!! json_encode($res['d'] )!!};
        for (var i = 0; i <= dataLoad.length - 1; i++) {
            if(dataLoad[i].emrdfk == 3110029){
                continue;
            }
            if (dataLoad[i].type == "textbox") {
                $('#id_'+dataLoad[i].emrdfk).html( dataLoad[i].value)
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
                $('#id_'+dataLoad[i].emrdfk).html( dataLoad[i].value)
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
                $('#id_'+dataLoad[i].emrdfk).html( dataLoad[i].value)
                $scope.item.obj[dataLoad[i].emrdfk] = dataLoad[i].value
            }
            if (dataLoad[i].type == "combobox") {
     
                var str = dataLoad[i].value
                if(str != null)
                {
                    var res = str.split("~");
                    
                    $scope.item.obj[dataLoad[i].emrdfk] = res[1]
                    $('#id_'+dataLoad[i].emrdfk).html ( res[1])
                }
            }
            if (dataLoad[i].type == "combobox2") {
                var str = dataLoad[i].value
                var res = str.split("~");
                
                $scope.item.obj[dataLoad[i].emrdfk+""+1] = res[0]
                $scope.item.obj[dataLoad[i].emrdfk] = res[1]
                $('#id_'+dataLoad[i].emrdfk).html ( res[1])

            }

            if (dataLoad[i].emrdfk == '423816' ) {
                $scope.hariTgl = dataLoad[i].value
            }

            if (dataLoad[i].emrdfk == '2000001974' ) {
                $scope.jamPeriksa = dataLoad[i].value
            }

            if (dataLoad[i].emrdfk == '2000002354' ) {
                $scope.tgl1 = dataLoad[i].value
            }
            if (dataLoad[i].emrdfk == '2000002357' ) {
                $scope.tgl2 = dataLoad[i].value
            }
            if (dataLoad[i].emrdfk == '2000002360' ) {
                $scope.tgl3 = dataLoad[i].value
            }
            if (dataLoad[i].emrdfk == '2000002363' ) {
                $scope.tgl4 = dataLoad[i].value
            }
            if (dataLoad[i].emrdfk == '2000002366' ) {
                $scope.tgl5 = dataLoad[i].value
            }
            if (dataLoad[i].emrdfk == '2000002369' ) {
                $scope.tgl6 = dataLoad[i].value
            }
            if (dataLoad[i].emrdfk == '2000002372' ) {
                $scope.tgl7 = dataLoad[i].value
            }
            if (dataLoad[i].emrdfk == '2000002375' ) {
                $scope.tgl8 = dataLoad[i].value
            }
            if (dataLoad[i].emrdfk == '2000002378' ) {
                $scope.tgl9 = dataLoad[i].value
            }
            if (dataLoad[i].emrdfk == '2000002381' ) {
                $scope.tgl10 = dataLoad[i].value
            }
            if (dataLoad[i].emrdfk == '2000002384' ) {
                $scope.tgl11 = dataLoad[i].value
            }
            if (dataLoad[i].emrdfk == '2000002387' ) {
                $scope.tgl12 = dataLoad[i].value
            }
            if (dataLoad[i].emrdfk == '2000002390' ) {
                $scope.tgl13 = dataLoad[i].value
            }
            if (dataLoad[i].emrdfk == '2000002393' ) {
                $scope.tgl14 = dataLoad[i].value
            }
            if (dataLoad[i].emrdfk == '2000002396' ) {
                $scope.tgl15 = dataLoad[i].value
            }
            
            if (dataLoad[i].emrdfk == '2000002408' ) {
                $scope.pukul2 = dataLoad[i].value
            }

            $scope.tglemr = dataLoad[i].tgl
        }

        var dpjp = $scope.item.obj[421371];
        if(dpjp != undefined){
            jQuery('#qrcodeDPJP').qrcode({
            width	: 100,
			height	: 100,
            text	: "Tanda Tangan Digital Oleh " + dpjp
        });	
        }
    })

    angular.filter('toDate', function() {
        return function(items) {
            if(items != null){
                 return new Date(items);
            }
        };
    });
    $(document).ready(function () {
        window.print();
    });
</script>
</html>
