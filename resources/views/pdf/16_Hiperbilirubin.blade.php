<!DOCTYPE html>
<html lang="en" ng-app="angularApp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiperbilirubin</title>

    <style>
        @page {
            size: auto;
            size: A4 portrait;
        }

        html,
        body {
            font-family: DejaVu Sans, Arial, Helvetica, sans-serif;
            font-size: 7pt;

        }
        table{ 
            page-break-inside:auto 
        }
		table {
            -fs-table-paginate: paginate;
        }
        tr{ 
            page-break-inside:avoid; 
            page-break-after:auto 
        }
        table{
            border:1px solid #000;
            border-collapse:collapse;
            table-layout:fixed;
        }
        tr td{
            border:1px solid #000;
            border-collapse:collapse;
			/* padding:.1rem; */
        }
        .mintd{
            width:48pt;
        }
       
        .logo{
            width:50px !important;
        }
        .text-center{
            text-align: center;
        }
		.text-right{
            text-align: right;
        }
        .bordered{
            border:1px solid #000;
        }
        .noborder{
            border:none;
        }
		.blf{
			border-left:1px solid #000;
		}
		.btp{
			border-top:1px solid #000;
		}
		.btm{
			border-bottom:1px solid #000;
		}
		.br{
			border-right:1px solid #000;
		}
        .border-lr{
            border:1px solid #000;
            border-top:none;
            border-bottom:none;
        }
        .border-tb{
            border:1px solid #000;
            border-left:none;
            border-right:none;
        }
        table tr td{
            font-size: small;
        }
        table tr{
            height:16pt
        }
        .bg-dark{
            background:#000;
            color:#fff;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: x-large;
            padding:.5rem;
            height:20pt !important;
        }
        .bg-dark-small{
            background:#000;
            color:#fff;
        }
        .rotate{
            vertical-align: bottom;
            text-align: center;
        }
        #rotate{
            -ms-writing-mode: tb-rl;
            -webkit-writing-mode: vertical-rl;
            writing-mode: vertical-rl;
            transform: rotate(180deg);
            white-space: nowrap;
        }
		.p3{
			padding:0.3rem;
		}
		.p2{
			padding:0.2rem;
		}
		p{
			padding:.5rem;
		}
		ul li{
			list-style:none;
		}
		ul li:before{
			content:'-'
		}

		.gambar{
			position:absolute;
			top:25%;
			left:45%;
		}
		img.img-diagram{
			width:97%;
			height:97%;
			object-fit: cover;
		}
    </style>
</head>
<body ng-controller="cetakHiperbilirubin">
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
            <td style="text-align:center;font-size:36px">68</td>
        </tr>
    </table>
    <table width='100%'>
            <tr class="bordered bg-dark">
            <th colspan="49" height="20pt">HIPERBILIRUBIN</th>
        </tr>
		<tr class="bordered" height="20">
			<td colspan="5" class="border-rl noborder">&nbsp; Berat Badan</td>
			<td colspan="30" class="noborder">@{{ item.obj[1000650] ? item.obj[1000650] : '__' }} gram</td>
			<td colspan="4" class="blf noborder">&nbsp; Usia</td>
			<td colspan="10" class="noborder">@{{ item.obj[1000651] ? item.obj[1000651] : '__' }} hari</td>
		</tr>
		<tr>
			<td colspan="1" class="noborder"></td>
			<td colspan="48" class="noborder">TAHUKAH ANDA?</td>
		</tr>
		<tr>
			<td colspan="1" class="text-right noborder" style="padding:.2rem">-</td>
			<td colspan="48" class="noborder">Untuk bayi berusia 1-2 hari dapat menggunakan SOP RSUD H. Andi Sulthan Daeng Radja</td>
		</tr>
		<tr>
			<td colspan="1" class="text-right noborder" style="padding:.2rem">-</td>
			<td colspan="48" class="noborder">Ikterus klinis muncul ketika bilirubin serum > 7 mg/dL. 3% dari bayi mengalami kadar bilirubin > 15 mg/dL. Gejala sisa yang paling berat adalah gejalah kernikterus (pengendapan bilirubin di otak) biasanya pada tingkat > 30 mg/dL.</td>
		</tr>
		<tr>
			<td colspan="1" class="text-right noborder" style="padding:.2rem">-</td>
			<td colspan="48" class="noborder">Ikterus fisiologis dinyatakan sebagai hiperbilirubinemia indirek (unconjugated). DDX-gangguan hemolitik seperti ABO Inkompatibilitas, jaundice karena ASI, sepsis dan gangguan konjugasi : Crigler-Najjar dan sindrom Gilbert.</td>
		</tr>
		<tr>
			<td colspan="1" class="noborder"></td>
			<td colspan="23" class="noborder"  class="noborder"><u><strong>Riwayat</strong></u></td>
			<td colspan="25" rowspan="15" class="noborder text-center">
                <div class="grid_12">
                    <div class="grid_12">
                        <div class="grid_12" style="width: 400px;height:220px; margin: auto; float: none;position: relative;z-index: 1;border: solid;">
                            <img style="width: 400px;height:220px;" src="{!!  $res['img']->image  !!}">
                            <input class="k-textbox" ng-model="item.ttd1" type="hidden" >
                        </div>
                        <div class="grid_12" style="margin-top: -220px;">
                            @if(stripos(\Request::url(), 'localhost') !== FALSE)
                                <img class="gambarAset" style="width: 400px;height:220px;display:block; margin:auto;"src="{{ public_path('img/hiperbilirubin.png') }}" />
                            @else
                                <img class="gambarAset" style="width: 400px;height:220px;display:block; margin:auto;" src="{{ public_path('service/img/hiperbilirubin.png') }}" />
                            @endif
                        </div>
                    </div>
                </div>
			</td>
		</tr>
		<tr>
			<td colspan="1" class="noborder"></td>
			<td colspan="23" class="noborder"  class="noborder">Berat Badan Lahir : @{{ item.obj[1000652] ? item.obj[1000652] : '__' }} gram</td>
		</tr>
		<tr>
			<td colspan="1" class="noborder"></td>
			<td colspan="23" class="noborder"  class="noborder">Kehamilan : @{{ item.obj[1000653] ? item.obj[1000653] : '__' }} minggu</td>
		</tr>
		<tr>
			<td colspan="1" class="noborder"></td>
			<td colspan="23" class="noborder"  class="noborder">Golongan darah ibu : @{{ item.obj[1000654] ? item.obj[1000654] : '__' }} </td>
		</tr>
		<tr>
			<td colspan="24" class="noborder"></td>
		</tr>
		<tr>
			<td colspan="1" class="noborder"></td>
			<td colspan="23" class="noborder"  class="noborder">Diet : @{{ item.obj[1000655] ? item.obj[1000655] : '__' }}, ASI : @{{ item.obj[1000656] ? item.obj[1000656] : '__' }} formula </td>
		</tr>
		<tr>
			<td colspan="1" class="noborder"></td>
			<td colspan="23" class="noborder"  class="noborder">Pemberian setiap @{{ item.obj[1000657] ? item.obj[1000657] : '__' }} jam </td>
		</tr>
		<tr>
			<td colspan="23" class="noborder"></td>
		</tr>
		<tr>
			<td colspan="1" class="noborder"></td>
			<td colspan="23" class="noborder"  class="noborder">@{{ item.obj[1000658] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Urin ≤ 2 kali per hari </td>
		</tr>
		<tr>
			<td colspan="1" class="noborder"></td>
			<td colspan="23" class="noborder"  class="noborder">Feses @{{ item.obj[1000659] ? item.obj[1000659] : '__' }} kali perhari</td>
		</tr>
		<tr>
			<td colspan="24" class="noborder"></td>
		</tr>
		<tr>
			<td colspan="1" class="noborder"></td>
			<td colspan="23" class="noborder"  class="noborder"><u><strong>Pemeriksaan Fisik</strong></u></td>
		</tr>
		<tr>
			<td colspan="1" class="noborder"></td>
			<td colspan="23" class="noborder"  class="noborder">Suhu : @{{ item.obj[1000660] ? item.obj[1000660] : '__' }} <sup>0</sup> C DJ : @{{ item.obj[1000661] ? item.obj[1000661] : '__' }} BB : &darr; @{{ item.obj[1000662] ? item.obj[1000662] : '__' }} gram</td>
		</tr>
		<tr>
			<td class="noborder"></td>
			<td colspan="7" class="noborder">@{{ item.obj[1000663] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Alert</td>
			<td colspan="7" class="noborder">@{{ item.obj[1000664] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Postur normal</td>
		</tr>
		<tr>
			<td class="noborder"></td>
			<td colspan="7" class="noborder">@{{ item.obj[1000665] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tonus Normal</td>
			<td colspan="7" class="noborder">@{{ item.obj[1000666] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Menghisap Kuat</td>
		</tr>
		<tr>
			<td class="noborder"></td>
			<td colspan="6" class="noborder">@{{ item.obj[1000667] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Jaundice ke</td>
		</tr>
		<tr>
			<td class="noborder"></td>
			<td colspan="5" class="noborder">Treatment</td>
		</tr>
		<tr>
			<td class="noborder"></td>
			<td colspan="48" class="noborder">Faktor Risiko : Penyakit isoimmune, kekurangan G6P, asfixia, kelelusan, hipothermi, sepsis, asidosis, albumin < 3.0 </td>
		</tr>
		<tr>
			<td class="noborder"></td>
			<td class="noborder" colspan="10">Kategori Resiko Bayi</td>
			<td colspan="38" class="noborder">&rarr; > 38 weeks, prilaku biasa</td>
		</tr>
		<tr>
			<td colspan="11" class="noborder"></td>
			<td colspan="38" class="noborder">&rarr; > 38 weeks dengan faktor resiko atau 35-37 6/7 minggu tanpa factor resiko</td>
		</tr>
		<tr>
			<td colspan="11" class="noborder"></td>
			<td colspan="38" class="noborder">&rarr; 35-37 6/7 minggu dengan factor resiko</td>
		</tr>
		<tr>
			<td colspan="" class="noborder"></td>
			<td colspan="48" class="noborder">Total Serum Bilirubin @{{ item.obj[1000673] ? item.obj[1000673] : '__' }} mg/dL. Indirect @{{ item.obj[1000674] ? item.obj[1000674] : '__' }} mg/dL</td>
		</tr>
		<tr>
			<td colspan="" class="noborder"></td>
			<td colspan="13" class="noborder">Menurut Grafik harus mulai terapi foto?	@{{ item.obj[1000676] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ya</td>
			<td colspan="35" class="noborder">@{{ item.obj[1000677] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak</td>
		</tr>
		<tr>
			<td class="noborder"></td>
			<td colspan="48" class="noborder">@{{ item.obj[1000678] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Cahaya 450 nm</td>
		</tr>
		<tr>
			<td class="noborder"></td>
			<td colspan="48" class="noborder">@{{ item.obj[1000679] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Pelindung Mata</td>
		</tr>
		<tr>
			<td class="noborder" colspan="49"></td>
		</tr>
		<tr>
			<td class="noborder"></td>
			<td colspan="48" class="noborder">@{{ item.obj[1000680] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak perlu IV bila bayi menghisap kuat. IV tidak dapat membantu penurunan kadar bilirubin</td>
		</tr>
		<tr>
			<td class="noborder"></td>
			<td colspan="48" class="noborder">@{{ item.obj[1000681] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ad lib menyusui</td>
		</tr>
		<tr>
			<td class="noborder"></td>
			<td colspan="6" class="noborder">@{{ item.obj[1000682] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} </td>
			<td class="noborder" colspan="42">@{{ item.obj[1000683] ? item.obj[1000683] : '__' }} cc setiap 3 jam</td>
		</tr>
		<tr>
			<td class="noborder"></td>
			<td colspan="48" class="noborder">@{{ item.obj[1000681] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} IV untuk dehidrasi. Bolus NS 0.9% 10 cc/kg = @{{ item.obj[1000685] ? item.obj[1000685] : '__' }} cc selama satu jam</td>
		</tr>
		<tr>
			<td class="noborder" colspan="49"></td>
		</tr>
		<tr>
			<td class="noborder"></td>
			<td colspan="48" class="noborder">@{{ item.obj[1000686] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Periksa ulang Bilirubin pada 48  jam. Serum Bilirubin @{{ item.obj[1000687] ? item.obj[1000687] : '__' }} mg/dL. Indirect @{{ item.obj[1000688] ? item.obj[1000688] : '__' }} mg/dL</td>
		</tr>
		<tr>
			<td class="noborder"></td>
			<td colspan="48" class="noborder">@{{ item.obj[1000689] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Lain-lain/Komentar</td>
		</tr>
		<tr>
			<td class="noborder"></td>
			<td colspan="48" class="noborder">@{{ item.obj[1000690] ? item.obj[1000690] : '' }}</td>
		</tr>
		<tr class="btm">
			<td class="noborder"></td>
			<td colspan="48" class="noborder"></td>
		</tr>

		<tr class="noborder"></tr>
		<tr>
			<td class="noborder" colspan="49">&nbsp; Tenaga Medis : @{{ item.obj[1000691] ? item.obj[1000691] : '____' }}, Tgl @{{item.obj[1000692] | toDate | date:'dd MMMM yyyy'}}, Pukul : @{{item.obj[1000692] | toDate | date:'HH:mm'}}</td>
		</tr>
		<tr class="noborder"></tr>
		<!-- netxt page  -->
		<tr style="border-top:1px solid #000">
			<td colspan="10" class="noborder">
				&nbsp; Nama Pasien  
			</td>
			<td colspan="39" class="noborder">: {!!  $res['d'][0]->namapasien  !!}</td>
		</tr>
		<tr>
			<td colspan="10" class="noborder">
				Tanggal Lahir 
			</td>
			<td colspan="39" class="noborder">: {!! date('d-m-Y',strtotime( $res['d'][0]->tgllahir  )) !!}, BB : @{{ item.obj[1000696] ? item.obj[1000696] : '____' }}kg</td>
		</tr>
		<br>
		<tr>
			<td colspan="10" style="text-align: center"><b>Tanggal dan Waktu</b></td>
			<td colspan="39" style="text-align: center"><b>Keterangan</b></td>
		</tr>
		<tr>
			<td colspan="10">&nbsp; @{{item.obj[1000698] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
			<td colspan="39">&nbsp; @{{ item.obj[1000699] ? item.obj[1000699] : '' }}</td>
		</tr>
		<tr>
			<td colspan="10">&nbsp; @{{item.obj[1000700] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
			<td colspan="39">&nbsp; @{{ item.obj[1000701] ? item.obj[1000701] : '' }}</td>
		</tr>
		<tr>
			<td colspan="10">&nbsp; @{{item.obj[1000702] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
			<td colspan="39">&nbsp; @{{ item.obj[1000703] ? item.obj[1000703] : '' }}</td>
		</tr>
		<tr>
			<td colspan="10">&nbsp; @{{item.obj[1000704] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
			<td colspan="39">&nbsp; @{{ item.obj[1000705] ? item.obj[1000705] : '' }}</td>
		</tr>
		<tr>
			<td colspan="10">&nbsp; @{{item.obj[1000706] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
			<td colspan="39">&nbsp; @{{ item.obj[1000707] ? item.obj[1000707] : '' }}</td>
		</tr>
		<tr>
			<td colspan="10">&nbsp; @{{item.obj[1000708] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
			<td colspan="39">&nbsp; @{{ item.obj[1000709] ? item.obj[1000709] : '' }}</td>
		</tr>
		<tr>
			<td colspan="10">&nbsp; @{{item.obj[1000710] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
			<td colspan="39">&nbsp; @{{ item.obj[1000711] ? item.obj[1000711] : '' }}</td>
		</tr>
		<tr>
			<td colspan="10">&nbsp; @{{item.obj[1000712] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
			<td colspan="39">&nbsp; @{{ item.obj[1000713] ? item.obj[1000713] : '' }}</td>
		</tr>
		<tr>
			<td colspan="10">&nbsp; @{{item.obj[1000714] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
			<td colspan="39">&nbsp; @{{ item.obj[1000715] ? item.obj[1000715] : '' }}</td>
		</tr>
		<tr>
			<td colspan="10">&nbsp; @{{item.obj[1000716] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
			<td colspan="39">&nbsp; @{{ item.obj[1000717] ? item.obj[1000717] : '' }}</td>
		</tr>
		<tr>
			<td colspan="10">&nbsp; @{{item.obj[1000718] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
			<td colspan="39">&nbsp; @{{ item.obj[1000719] ? item.obj[1000719] : '' }}</td>
		</tr>
		<tr>
			<td colspan="10">&nbsp; @{{item.obj[1000720] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
			<td colspan="39">&nbsp; @{{ item.obj[1000721] ? item.obj[1000721] : '' }}</td>
		</tr>
		<tr>
			<td colspan="10">&nbsp; @{{item.obj[1000722] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
			<td colspan="39">&nbsp; @{{ item.obj[1000723] ? item.obj[1000723] : '' }}</td>
		</tr>
		<tr>
			<td colspan="10">&nbsp; @{{item.obj[1000724] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
			<td colspan="39">&nbsp; @{{ item.obj[1000725] ? item.obj[1000725] : '' }}</td>
		</tr>
		<tr>
			<td colspan="10">&nbsp; @{{item.obj[1000726] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
			<td colspan="39">&nbsp; @{{ item.obj[1000727] ? item.obj[1000727] : '' }}</td>
		</tr>
		<tr>
			<td colspan="10">&nbsp; @{{item.obj[1000728] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
			<td colspan="39">&nbsp; @{{ item.obj[1000729] ? item.obj[1000729] : '' }}</td>
		</tr>
		<tr>
			<td colspan="10">&nbsp; @{{item.obj[1000730] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
			<td colspan="39">&nbsp; @{{ item.obj[1000731] ? item.obj[1000731] : '' }}</td>
		</tr>
		<tr>
			<td colspan="10">&nbsp; @{{item.obj[1000732] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
			<td colspan="39">&nbsp; @{{ item.obj[1000733] ? item.obj[1000733] : '' }}</td>
		</tr>
		<tr>
			<td colspan="10">&nbsp; @{{item.obj[1000734] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
			<td colspan="39">@{{ item.obj[1000735] ? item.obj[1000735] : '' }}</td>
		</tr>
		<tr>
			<td colspan="10">&nbsp; @{{item.obj[1000736] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
			<td colspan="39">&nbsp; @{{ item.obj[1000737] ? item.obj[1000737] : '' }}</td>
		</tr>
    </table>
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

    angular.controller('cetakHiperbilirubin', function ($scope, $http, httpService) {
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