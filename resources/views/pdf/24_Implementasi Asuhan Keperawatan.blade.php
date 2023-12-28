<!DOCTYPE html>
<html lang="en" ng-app="angularApp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Implementasi Asuhan Keperawatan</title>
 
    <style>
       html,
        body {
            margin-top: 20px;
            margin-left: 40px;
            font-family: DejaVu Sans, Arial, Helvetica, sans-serif;
            box-sizing: border-box;
            font-size: 6pt;
        }
        @page{

            size:A4;
          
        }
       
        header{
            border:1px solid #000; 
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
            page-break-inside:auto;
            width: 100%;
        }
        tr td{
            border:1px solid #000;
            border-collapse: collapse;
        }
        #content > tr td{
            width:20px;
            font-size: 6pt;
        }
        .info table > tr td{
            width:20px;
        }
        td{
            padding:.3rem
        }
    </style>
</head>
<body ng-controller="cetakImplementasiAsuhanKeperawatan">
      <section>
        <table width="100%" id="content" style="table-layout:fixed;margin:10px">
            <tr style="border:none;border-top:1px solid #000;">
                <td rowspan="4" style="border:none;border-right:1px solid #000">
                <img src="{{ $image }}" alt="" style="height: 70px; width:60px;">
                </td>
                <td rowspan="4" colspan="4" style="text-align:center;border:none"><strong>{!! $res['profile']->namalengkap !!}</strong> <br>{!! $res['profile']->alamatlengkap !!}<br>TELP : (0413) 81292</td>
                <td style="border:none;border-left:1px solid #000">No. RM </td>
                <td colspan="2" style="border:none">: {!! $res['d'][0]->nocm  !!}</td>
                <td rowspan="2" style="font-size:xx-large;text-align: center;" class="bg-dark">RM</td>
            </tr>
            <tr>
                <td style="border:none;border-left:1px solid #000">Nama Lengkap</td>
                <td colspan="2" style="border:none">: {!!  $res['d'][0]->namapasien  !!} {!!  $res['d'][0]->jeniskelamin == 'PEREMPUAN' ? '(P)' : '(L)'  !!}</td>
            </tr>
            <tr>
                <td style="border:none;border-left:1px solid #000">Tanggal Lahir</td>
                <td colspan="2" style="border:none">: {!! date('d-m-Y',strtotime( $res['d'][0]->tgllahir  )) !!}</td>
                <td rowspan="2" style="font-size:xx-large;text-align: center;">14</td>
            </tr>
            <tr>
                <td style="border:none;border-left:1px solid #000">NIK</td>
                <td colspan="2" style="border:none">: {!! $res['d'][0]->noidentitas  !!}</td>
            </tr>
            <tr>
                <td colspan="9" class="bg-dark" style="font-size:x-large">
                    IMPLEMENTASI ASUHAN KEPERAWATAN
                </td>
            </tr>
            <tr style="text-align:center; font-size:12px;">
                <td colspan="3"><b>Tgl/Jam</b></td>
                <td colspan="3"><b>Implementasi</b></td>
                <td colspan="3"><b>Paraf dan Nama</b></td>
            </tr>
            {{-- 1 --}}
            <tr style="height:100px">
                <td colspan="3">@{{item.obj[428000] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="3">@{{ item.obj[428001] ? item.obj[428001] : '' }}</td>
                <td colspan="3">
                    Paraf : @{{ item.obj[428002] ? item.obj[428002] : '' }} 
                    <br>
                    <div id="qrcodep1" style="text-align: right"></div>
                </td>
                
            </tr>
            {{-- 2 --}} 
            <tr style="height:100px" ng-show="item.obj[428003]!=undefined">
                <td colspan="3">@{{item.obj[428003] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="3">@{{ item.obj[428004] ? item.obj[428004] : '' }}</td>
                <td colspan="3">
                    Paraf : @{{ item.obj[428005] ? item.obj[428005] : '' }}
                    <br>
                    <div id="qrcodep2" style="text-align: right"></div>
                </td>
            </tr>
            {{-- 3 --}}
            <tr style="height:100px" ng-show="item.obj[428006]!=undefined">
                <td colspan="3">@{{item.obj[428006] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="3">@{{ item.obj[428007] ? item.obj[428007] : '' }}</td>
                <td colspan="3">
                    Paraf : @{{ item.obj[428008] ? item.obj[428008] : '' }}
                    <br>
                    <div id="qrcodep3" style="text-align: right"></div>
                </td>
            </tr>
            {{-- 4 --}}
            <tr style="height:100px" ng-show="item.obj[428009]!=undefined">
                <td colspan="3">@{{item.obj[428009] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="3">@{{ item.obj[428010] ? item.obj[428010] : '' }}</td>
                <td colspan="3">
                    Paraf : @{{ item.obj[428011] ? item.obj[428011] : '' }}
                    <br>
                    <div id="qrcodep4" style="text-align: right"></div>
                </td>
            </tr>
            {{-- 5 --}}
            <tr style="height:100px" ng-show="item.obj[428012]!=undefined">
                <td colspan="3">@{{item.obj[428012] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="3">@{{ item.obj[428013] ? item.obj[428013] : '' }}</td>
                <td colspan="3">
                    Paraf : @{{ item.obj[428014] ? item.obj[428014] : '' }}
                    <br>
                    <div id="qrcodep5" style="text-align: right"></div>
                </td>
                
            </tr>
            {{-- 6 --}}
            <tr style="height:100px" ng-show="item.obj[428015]!=undefined">
                <td colspan="3">@{{item.obj[428015] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="3">@{{ item.obj[428016] ? item.obj[428016] : '' }}</td>
                <td colspan="3">
                    Paraf : @{{ item.obj[428017] ? item.obj[428017] : '' }}
                    <br>
                    <div id="qrcodep6" style="text-align: right"></div>
                </td>
                
            </tr>
            {{-- 7 --}}
            <tr style="height:100px" ng-show="item.obj[428018]!=undefined">
                <td colspan="3">@{{item.obj[428018] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="3">@{{ item.obj[428019] ? item.obj[428019] : '' }}</td>
                <td colspan="3">
                    Paraf : @{{ item.obj[428020] ? item.obj[428020] : '' }}
                    <br>
                    <div id="qrcodep7" style="text-align: right"></div>
                </td>
                
            </tr>
            {{-- 8 --}}
            <tr style="height:100px" ng-show="item.obj[428021]!=undefined">
                <td colspan="3">@{{item.obj[428021] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="3">@{{ item.obj[428022] ? item.obj[428022] : '' }}</td>
                <td colspan="3">
                    Paraf : @{{ item.obj[428023] ? item.obj[428023] : '' }}
                    <br>
                    <div id="qrcodep8" style="text-align: right"></div>
                </td>
                
            </tr>
            {{-- 9 --}}
            <tr style="height:100px" ng-show="item.obj[428024]!=undefined">
                <td colspan="3">@{{item.obj[428024] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="3">@{{ item.obj[428025] ? item.obj[428025] : '' }}</td>
                <td colspan="3">
                    Paraf : @{{ item.obj[428026] ? item.obj[428026] : '' }}
                    <br>
                    <div id="qrcodep9" style="text-align: right"></div>
                </td>
               
            </tr>
            {{-- 10 --}}
            <tr style="height:100px" ng-show="item.obj[428027]!=undefined">
                <td colspan="3">@{{item.obj[428027] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="3">@{{ item.obj[428028] ? item.obj[428028] : '' }}</td>
                <td colspan="3">
                    Paraf : @{{ item.obj[428029] ? item.obj[428029] : '' }}
                    <br>
                    <div id="qrcodep10" style="text-align: right"></div>
                </td>
                
            </tr>
            {{-- 11 --}}
            <tr style="height:100px" ng-show="item.obj[428030]!=undefined">
                <td colspan="3">@{{item.obj[428030] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="3">@{{ item.obj[428031] ? item.obj[428031] : '' }}</td>
                <td colspan="3">
                    Paraf : @{{ item.obj[428032] ? item.obj[428032] : '' }}
                    <br>
                    <div id="qrcodep11" style="text-align: right"></div>
                </td>
                
            </tr>
            {{-- 12 --}}
            <tr style="height:100px" ng-show="item.obj[428033]!=undefined">
                <td colspan="3">@{{item.obj[428033] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="3">@{{ item.obj[428034] ? item.obj[428034] : '' }}</td>
                <td colspan="3">
                    Paraf : @{{ item.obj[428035] ? item.obj[428035] : '' }}
                    <br>
                    <div id="qrcodep12" style="text-align: right"></div>
                </td>
                
            </tr>
            {{-- 13 --}}
            <tr style="height:100px" ng-show="item.obj[428036]!=undefined">
                <td colspan="3">@{{item.obj[428036] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="3">@{{ item.obj[428037] ? item.obj[428037] : '' }}</td>
                <td colspan="3">
                    Paraf : @{{ item.obj[428038] ? item.obj[428038] : '' }}
                    <br>
                    <div id="qrcodep13" style="text-align: right"></div>
                </td>
                
            </tr>
            {{-- 14 --}}
            <tr style="height:100px" ng-show="item.obj[428039]!=undefined">
                <td colspan="3">@{{item.obj[428039] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="3">@{{ item.obj[428040] ? item.obj[428040] : '' }}</td>
                <td colspan="3">
                    Paraf : @{{ item.obj[428041] ? item.obj[428041] : '' }}
                    <br>
                    <div id="qrcodep14" style="text-align: right"></div>
                </td>
                
            </tr>
            {{-- 15 --}}
            <tr style="height:100px" ng-show="item.obj[428042]!=undefined">
                <td colspan="3">@{{item.obj[428042] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="3">@{{ item.obj[428043] ? item.obj[428043] : '' }}</td>
                <td colspan="3">
                    Paraf : @{{ item.obj[428044] ? item.obj[428044] : '' }}
                    <br>
                    <div id="qrcodep15" style="text-align: right"></div>
                </td>
                
            </tr>
            {{-- 16 --}}
            <tr style="height:100px" ng-show="item.obj[428045]!=undefined">
                <td colspan="3">@{{item.obj[428045] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="3">@{{ item.obj[428046] ? item.obj[428046] : '' }}</td>
                <td colspan="3">
                    Paraf : @{{ item.obj[428047] ? item.obj[428047] : '' }}
                    <br>
                    <div id="qrcodep16" style="text-align: right"></div>
                </td>
                
            </tr>
            {{-- 17 --}}
            <tr style="height:100px" ng-show="item.obj[428048]!=undefined">
                <td colspan="3">@{{item.obj[428048] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="3">@{{ item.obj[428049] ? item.obj[428049] : '' }}</td>
                <td colspan="3">
                    Paraf : @{{ item.obj[428050] ? item.obj[428050] : '' }}
                    <br>
                    <div id="qrcodep17" style="text-align: right"></div>
                </td>
               
            </tr>
            {{-- 18 --}}
            <tr style="height:100px" ng-show="item.obj[428051]!=undefined">
                <td colspan="3">@{{item.obj[428051] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="3">@{{ item.obj[428052] ? item.obj[428052] : '' }}</td>
                <td colspan="3">
                    Paraf : @{{ item.obj[428053] ? item.obj[428053] : '' }}
                    <br>
                    <div id="qrcodep18" style="text-align: right"></div>
                </td>
                
            </tr>
            {{-- 19 --}}
            <tr style="height:100px" ng-show="item.obj[428054]!=undefined">
                <td colspan="3">@{{item.obj[428054] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="3">@{{ item.obj[428055] ? item.obj[428055] : '' }}</td>
                <td colspan="3">
                    Paraf : @{{ item.obj[428056] ? item.obj[428056] : '' }}
                    <br>
                    <div id="qrcodep19" style="text-align: right"></div>
                </td>
                
            </tr>
            {{-- 20 --}}
            <tr style="height:100px" ng-show="item.obj[428057]!=undefined">
                <td colspan="3">@{{item.obj[428057] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="3">@{{ item.obj[428058] ? item.obj[428058] : '' }}</td>
                <td colspan="3">
                    Paraf : @{{ item.obj[428059] ? item.obj[428059] : '' }}
                    <br>
                    <div id="qrcodep20" style="text-align: right"></div>
                </td>
                
            </tr>
            {{-- 21 --}}
            <tr style="height:100px" ng-show="item.obj[428060]!=undefined">
                <td colspan="3">@{{item.obj[428060] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="3">@{{ item.obj[428061] ? item.obj[428061] : '' }}</td>
                <td colspan="3">
                    Paraf : @{{ item.obj[428062] ? item.obj[428062] : '' }}
                    <br>
                    <div id="qrcodep21" style="text-align: right"></div>
                </td>
                
            </tr>
            {{-- 22 --}}
            <tr style="height:100px" ng-show="item.obj[428063]!=undefined">
                <td colspan="3">@{{item.obj[428063] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="3">@{{ item.obj[428064] ? item.obj[428064] : '' }}</td>
                <td colspan="3">
                    Paraf : @{{ item.obj[428065] ? item.obj[428065] : '' }}
                    <br>
                    <div id="qrcodep21" style="text-align: right"></div>
                </td>
                
            </tr>
            {{-- 23 --}}
            <tr style="height:100px" ng-show="item.obj[428066]!=undefined">
                <td colspan="3">@{{item.obj[428066] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="3">@{{ item.obj[428067] ? item.obj[428067] : '' }}</td>
                <td colspan="3">
                    Paraf : @{{ item.obj[428068] ? item.obj[428068] : '' }}
                    <br>
                    <div id="qrcodep21" style="text-align: right"></div>
                </td>
                
            </tr>
        </table>
    </section>
			
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

    angular.controller('cetakImplementasiAsuhanKeperawatan', function ($scope, $http, httpService) {
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

        // var diagnose_pasca_operatif = $scope.item.obj[31100543].replace(/(?:\r\n|\r|\n)/g, ', ');

        // $scope.item.obj['diagnose_pasca_operatif'] = diagnose_pasca_operatif;

        var p1 = $scope.item.obj[428002];

        var p2 = $scope.item.obj[428005];

        var p3 = $scope.item.obj[428008];

        var p4 = $scope.item.obj[428011];

        var p5 = $scope.item.obj[428014];

        var p6 = $scope.item.obj[428017];

        var p7 = $scope.item.obj[428020];

        var p8 = $scope.item.obj[428023];

        var p9 = $scope.item.obj[428026];

        var p10 = $scope.item.obj[428029];

        var p11 = $scope.item.obj[428032];

        var p12 = $scope.item.obj[428035];

        var p13 = $scope.item.obj[428038];

        var p14 = $scope.item.obj[428041];

        var p15 = $scope.item.obj[428044];

        var p16 = $scope.item.obj[428047];

        var p17 = $scope.item.obj[428050];

        var p18 = $scope.item.obj[428053];

        var p19 = $scope.item.obj[428056];

        var p20 = $scope.item.obj[428059];

        var p21 = $scope.item.obj[428062];

        var p22 = $scope.item.obj[428065];

        var p23 = $scope.item.obj[428068];

        if (p1 != undefined) {
            jQuery('#qrcodep1').qrcode({
            width	: 70,
			height	: 70,
            text	: "Tanda Tangan Digital Oleh " + p1
            });	
        }

        if (p2 != undefined) {
            jQuery('#qrcodep2').qrcode({
            width	: 70,
			height	: 70,
            text	: "Tanda Tangan Digital Oleh " + p2
            });	
        }

        if (p3 != undefined) {
            jQuery('#qrcodep3').qrcode({
            width	: 70,
			height	: 70,
            text	: "Tanda Tangan Digital Oleh " + p3
            });	
        }

        if (p4 != undefined) {
            jQuery('#qrcodep4').qrcode({
            width	: 70,
			height	: 70,
            text	: "Tanda Tangan Digital Oleh " + p4
            });	
        }

        if (p5 != undefined) {
            jQuery('#qrcodep5').qrcode({
            width	: 70,
			height	: 70,
            text	: "Tanda Tangan Digital Oleh " + p5
            });	
        }

        if (p6 != undefined) {
            jQuery('#qrcodep6').qrcode({
            width	: 70,
			height	: 70,
            text	: "Tanda Tangan Digital Oleh " + p6
            });	
        }

        if (p7 != undefined) {
            jQuery('#qrcodep7').qrcode({
            width	: 70,
			height	: 70,
            text	: "Tanda Tangan Digital Oleh " + p7
            });	
        }

        if (p8 != undefined) {
            jQuery('#qrcodep8').qrcode({
            width	: 70,
			height	: 70,
            text	: "Tanda Tangan Digital Oleh " + p8
            });	
        }

        if (p9 != undefined) {
            jQuery('#qrcodep9').qrcode({
            width	: 70,
			height	: 70,
            text	: "Tanda Tangan Digital Oleh " + p9
            });	
        }

        if (p10 != undefined) {
            jQuery('#qrcodep10').qrcode({
            width	: 70,
			height	: 70,
            text	: "Tanda Tangan Digital Oleh " + p10
            });	
        }
 
        if (p11 != undefined) {
            jQuery('#qrcodep11').qrcode({
            width	: 70,
			height	: 70,
            text	: "Tanda Tangan Digital Oleh " + p11
            });	
        }

        if (p12 != undefined) {
            jQuery('#qrcodep12').qrcode({
            width	: 70,
			height	: 70,
            text	: "Tanda Tangan Digital Oleh " + p12
            });	
        }
 
        if (p13 != undefined) {
            jQuery('#qrcodep13').qrcode({
            width	: 70,
			height	: 70,
            text	: "Tanda Tangan Digital Oleh " + p13
            });	
        }

        if (p14 != undefined) {
            jQuery('#qrcodep14').qrcode({
            width	: 70,
			height	: 70,
            text	: "Tanda Tangan Digital Oleh " + p14
            });	
        }

        if (p15 != undefined) {
            jQuery('#qrcodep15').qrcode({
            width	: 70,
			height	: 70,
            text	: "Tanda Tangan Digital Oleh " + p15
            });	
        }

        if (p16 != undefined) {
            jQuery('#qrcodep16').qrcode({
            width	: 70,
			height	: 70,
            text	: "Tanda Tangan Digital Oleh " + p16
            });	
        }

        if (p17 != undefined) {
            jQuery('#qrcodep17').qrcode({
            width	: 70,
			height	: 70,
            text	: "Tanda Tangan Digital Oleh " + p17
            });	
        }

        if (p18 != undefined) {
            jQuery('#qrcodep18').qrcode({
            width	: 70,
			height	: 70,
            text	: "Tanda Tangan Digital Oleh " + p18
            });	
        }

        if (p19 != undefined) {
            jQuery('#qrcodep19').qrcode({
            width	: 70,
			height	: 70,
            text	: "Tanda Tangan Digital Oleh " + p19
            });	
        }

        if (p20 != undefined) {
            jQuery('#qrcodep20').qrcode({
            width	: 70,
			height	: 70,
            text	: "Tanda Tangan Digital Oleh " + p20
            });	
        }

        if (p21 != undefined) {
            jQuery('#qrcodep21').qrcode({
            width	: 70,
			height	: 70,
            text	: "Tanda Tangan Digital Oleh " + p21
            });	
        }

        if (p22 != undefined) {
            jQuery('#qrcodep22').qrcode({
            width	: 70,
			height	: 70,
            text	: "Tanda Tangan Digital Oleh " + p22
            });	
        }

        if (p23 != undefined) {
            jQuery('#qrcodep23').qrcode({
            width	: 70,
			height	: 70,
            text	: "Tanda Tangan Digital Oleh " + p23
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