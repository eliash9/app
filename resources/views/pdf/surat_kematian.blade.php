
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan Kematian</title>
 <style>
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
        body{
            font-family:Arial, Helvetica, sans-serif;
        }
        table{ 
            page-break-inside:auto 
        }
        tr{ 
            page-break-inside:avoid; 
            page-break-after:auto 
        }
        header{
            border:1px solid #000; 
        }
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
            object-fit:cover;
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
            /* font-size: x-small; */
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
    </style>
</head>
<body >
    <table width="100%" style="table-layout:fixed;border:none">
        <tr style="text-align:center;border:none">
            <td colspan="9" style="border:none">
                @if(stripos(\Request::url(), 'localhost') !== FALSE)
                <img src="{{ asset('img/logo_only.png') }}" alt="" style="width: 60px;">
            @else
                <img src="{{ asset('service/img/logo_only.png') }}" alt="" style="width: 60px;">
            @endif
            </td>
        </tr>
        <tr style="text-align:center;border:none">
            <td colspan="9" style="border:none"><h2>PEMERINTAH KABUPATEN BULUKUMBA</h2></td>
        </tr>
        <tr style="text-align:center;border:none">
            <td colspan="9" style="border:none"><h1>DINAS KESEHATAN</h1></td>
        </tr>
        <tr style="text-align:center;border:none">
            <td colspan="9" style="border:none"><h2>UPT RSUD H. ANDI SULTHAN DAENG RADJA</h2></td>
        </tr>
        <tr style="text-align:center;border:none">
            <td colspan="9" style="border:none">Jalan Serikaya No. 17 Bulukumba 92512 Telpon (0413) 81290, 81292 FAX. 85030 <br> Website: https://rsud.bulukumbakab.go.id, Email: sultanhandgradja@yahoo.com <hr style="border:2px solid #000"></td>
        </tr>
        <tr style="text-align:center">
            <td colspan="9" style="border:none;"><h2 style="font-size: 20pt">SURAT KETERANGAN KEMATIAN</h2> <br> NOMOR: 440 / @{{ item.obj[32104095] ? item.obj[32104095] : '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' }} / RSUD-BLK / 2023</td>
        </tr>
        <tr style="height:20px"></tr>
        <tr>
            <td style="border:none" colspan="9">Yang bertanda tangan di bawah ini menerangkan bawah:</td>
        </tr>
        <tr>
            <td style="border:none"></td>
            <td style="border:none">Nama</td>
            <td colspan="7" style="border:none">: @{{ item.obj[32104091] ? item.obj[32104091] : '..................................................' }}</td>
        </tr>
        <tr>
            <td style="border:none"></td>
            <td style="border:none">Umur</td>
            <td colspan="7" style="border:none">: @{{ item.obj[32104092] ? item.obj[32104092] : '..................................................' }} Tahun</td>
        </tr>
        <tr>
            <td style="border:none"></td>
            <td style="border:none">Pekerjaan</td>
            <td colspan="7" style="border:none">: @{{ item.obj[32104093] ? item.obj[32104093] : '..................................................' }}</td>
        </tr>
        <tr>
            <td style="border:none"></td>
            <td style="border:none">Alamat</td>
            <td colspan="7" style="border:none">: @{{ item.obj[32104094] ? item.obj[32104094] : '..................................................' }}</td>
        </tr>
        <tr>
            <td colspan="9" style="border:none;text-align: justify;line-height: 20pt;">Yang tersebut namanya di atas benar telah meninggal dunia di Rumah Sakit Umum Daerah H. Andi Sulthan Daeng Radja pada hari @{{item.obj[32104096] | toDate | date:'EEEE'}} Tanggal @{{item.obj[32104096] | toDate | date:'dd-MM-yyyy'}} Jam @{{item.obj[32104096] | toDate | date:'HH:mm'}} yang dirawat dari tanggal @{{item.obj[32104097] | toDate | date:'dd-MM-yyyy HH:mm'}} dengan Diagnosa @{{ item.obj[32104098] ? item.obj[32104098] : '..................................................' }} </td>
        </tr>
        <tr>
            <td colspan="9" style="border:none">Demikian surat keterangan ini dibuat untuk dipergunakan seperlunya</td>
        </tr>
        <tr>
            <td colspan="4" style="border:none;text-align: center;">Mengetahui</td>
        </tr>
        <tr style="text-align: center;">
            <td colspan="4" style="border:none">Dokter yang merawat</td>
            <td style="border:none"></td>
            <td colspan="4" style="border:none">Kepala Ruangan/Perawatan</td>
        </tr>
        <tr style="text-align: center;">
            <td colspan="4" valign="bottom" style="border:none"><div id="qrcodePetugas1" style="text-align: center"></td>
            <td style="border:none"></td>
            <td colspan="4" valign="bottom" style="border:none"><div id="qrcodePetugas2" style="text-align: center"></td>
        </tr>
        <tr style="text-align: center;">
            <td colspan="4" valign="bottom" style="border:none">@{{ item.obj[32104099] ? item.obj[32104099] : '__________________________________________' }}</td>
            <td style="border:none"></td>
            <td colspan="4" valign="bottom" style="border:none">@{{ item.obj[32104100] ? item.obj[32104100] : '__________________________________________' }}</td>
        </tr>

    </table>
</body>
<!--script type="text/javascript">
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
  
    angular.controller('cetakSuketKematian', function ($scope, $http, httpService) {
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
        // var keluhan_saat_ini = $scope.item.obj[422203].replace(/(?:\r\n|\r|\n)/g, ', ');
  
        // $scope.item.obj['keluhan_saat_ini'] = keluhan_saat_ini;
  
        var petugas1 = $scope.item.obj[32104099];
        var petugas2 = $scope.item.obj[32104100];
        
        if(petugas1 != undefined){
            jQuery('#qrcodePetugas1').qrcode({
                width	: 100,
                height	: 100,
                text	: "Tanda Tangan Digital Oleh " + petugas1
            });	
        }
        if(petugas2 != undefined){
            jQuery('#qrcodePetugas2').qrcode({
                width	: 100,
                height	: 100,
                text	: "Tanda Tangan Digital Oleh " + petugas2
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
  </script-->
</html>