<!DOCTYPE html>
<html lang="en" ng-app="angularApp">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ringkasan Pasien Masuk dan Keluar</title>
    
   
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

            .divider {
                clear: both;
                padding: 2rem;
            }
        }
    </style>
</head>

<body ng-controller="cetakRingkasanPasienMasukKeluar">
    <div class="format">
        <table width="100%" style="table-layout:fixed;text-align:center;">
            <tr>
                <td style="width:15%;margin:0 auto;" rowspan="2">
                    <figure style="width:60px;margin:0 auto;">
                        
                        @if(stripos(\Request::url(), 'localhost') !== FALSE)
                                <img src="{{ asset('img/logo_only.png') }}" alt="" style="width: 60px;">
                            @else
    
                        <img src="service/img/logo_only.png" alt="" style="width: 60px;">
                             @endif 
                    </figure>
                </td>
                <td style="width:35%;margin:0 auto;" rowspan="2">
                    <table width="100%" style="border:none;table-layout:fixed;text-align:center;">
                        <tr style="border:none;text-align:center;">
                            <td style="text-align:center;border:none;">
                                <strong style="font-size: 11pt">@{!! $res['profile']->namalengkap !!}</strong> <br>
                                JL. SERIKAYA NO. 17 BULUKUMBA 92512 <br>
                                TELP : @{!! $res['profile']->fixedphone !!}
                            </td>
                        </tr>
                    </table>

                </td>
                
                <td style="width:25%;margin:0;" rowspan="2">
                    <table width="100%" style="border:none;table-layout:fixed;text-align:left;">
                        <tr>
                            <td colspan="4" style="border:none;font-size:7pt;">Nama Lengkap</td>
                            <td style="border:none;font-size:7pt;" colspan="9">: @{!! $res['d'][0]->namapasien !!} (@{!!
                                $res['d'][0]->jeniskelamin == 'PEREMPUAN' ? 'P' : 'L' !!})</td>
                          
                        </tr>
                        <tr>
                            <td colspan="4" style="border:none;font-size:7pt;">Tanggal Lahir</td>
                            <td style="border:none;font-size:7pt;" colspan="9">: @{!! date('d-m-Y',strtotime(
                                $res['d'][0]->tgllahir
                                )) !!}</td>
                        </tr>
                        <tr>
                            <td colspan="4" style="border:none;font-size:7pt;">NIK</td>
                            <td style="border:none;font-size:7pt;" colspan="9">: @{!! $res['d'][0]->noidentitas !!}</td>

                        </tr>
                    </table>

                </td>
                <td style="width:10%;margin:0 auto;background:#000;color:#fff;text-align:center;font-size:36px">
                    RM</td>

            </tr>
            <tr>
                <td style="text-align:center;font-size:36px">01</td>
            </tr>
        </table>

        <table width="100%">
            <tr>
                <td style="text-align:center;background: #000;color: #fff;">
                    <h1>RINGKASAN PASIEN MASUK DAN KELUAR</h1>
                </td>
            </tr>
        </table>
        <table width="100%" style="table-layout:fixed;border-top:none;">
            <tr>
                <td width="60%" rowspan="2">
                    <table style="border:none;">
                        <tr style="border:none;">
                            <td style="border:none; width: 20%;">Nama Lengkap</td>
                            <td style="border:none; ">: @{{ item.obj[420303] ? item.obj[420303] :
                                '_________________________________________________' }}</td>
                            <td style="border:none; ">@{!!
                                $res['d'][0]->jeniskelamin == 'PEREMPUAN' ? 'P' : 'L' !!}</td>

                        </tr>
                        <tr>
                            <td style="border:none;" >Tgl Lahir</td>
                            <td style="border:none;" colspan="2">: @{{ item.obj[420307] ? item.obj[420307] :
                                '_________________________________________________' }}</td>

                        </tr>
                        <tr>
                            <td style="border:none;" >Agama</td>
                            <td style="text-align:left;border:none;" colspan="2">: @{{ item.obj[420308] ? item.obj[420308] :
                                '_________________________________________________' }}</td>

                        </tr>
                        <tr>
                            <td style="border:none;">Kebangsaan</td>
                            <td style="text-align:left;border:none;" colspan="2">: @{{ item.obj[420309] ?
                                item.obj[420309] :
                                '_________________________________________________' }}</td>
                        </tr>
                        <tr>
                            <td style="border:none;">Alamat</td>
                            <td style="text-align:left;border:none;" colspan="2">: @{{ item.obj[420310] ?
                                item.obj[420310] :
                                '_________________________________________________' }}</td>
                        </tr>
                        <tr>
                            <td style="border:none;">Nomor Tlpn/HP</td>
                            <td style="text-align:left;border:none;" colspan="2">: @{{ item.obj[420311] ? item.obj[420311] :
                                '_________________________________________________' }}</td>
                        </tr>
                    </table>


                </td>
                <td valign="top" height="5px" >No. RM : @{{ item.obj[420304] ? item.obj[420304] : '' }}</td>

            </tr>
            <tr>
                <td valign="top" >
                    <table style="border:none;">
                        <tr>
                            <td style="border:none;"  >Status Perkawinan</td>
                        </tr>
                        <tr>
                            <td style="border:none;">@{{ item.obj[420312] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                                Kawin</td>
                        </tr>
                        <tr>
                            <td style="border:none;">@{{ item.obj[420313] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                                Belum Kawin</td>
                        </tr>
                        <tr>
                            <td style="border:none;">@{{ item.obj[420314] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                                Janda / Duda</td>
                        </tr>

                    </table>

                </td>
            </tr>

            <tr>
                <td width="60%">
                    <table style="border:none;">
                        <tr style="border:none;">
                            <td style="border:none; width: 20%;">Nama Penanggung</td>
                            <td style="border:none;">: @{{
                                item.obj[420315] ?
                                item.obj[420315] : '_________________________________________________' }}</td>

                        </tr>
                        <tr>
                            <td style="border:none;">Hubungan Keluarga</td>
                            <td style="border:none;">: @{{ item.obj[420316] ? item.obj[420316] :
                                '_______________________' }}</td>

                        </tr>
                        <tr>
                            <td style="border:none;">Pekerjaan</td>
                            <td style="border:none;">: @{{ item.obj[420317] ?
                                item.obj[420317] :
                                '_________________________________________________' }}</td>

                        </tr>
                        <tr>
                            <td style="border:none;">Alamat</td>
                            <td style="border:none;">: @{{ item.obj[420318] ?
                                item.obj[420318] :
                                '_________________________________________________' }}</td>

                        </tr>
                        <tr>
                            <td style="border:none;">Nomor Tlpn/HP</td>
                            <td style="border:none;">: @{{ item.obj[420319] ?
                                item.obj[420319] :
                                '_________________________________________________' }}</td>

                        </tr>
                    </table>
                </td>
                <td>
                    <table style="border:none;">
                        <tr>
                            <td style="border:none;">Dirawat yang ke :</td>
                        </tr>
                        <tr>
                            <td style="border:none;">Dirawat yang keDikirim Oleh :</td>
                        </tr>
                        <tr>
                            <td colspan="14" style="border:none;">Dr. Poliklinik : @{{ item.obj[420322] ?
                                item.obj[420322] :
                                '_______________________' }}</td>
                        </tr>
                        <tr>
                            <td style="border:none;">Dr. Jaga : @{{ item.obj[420325] ? item.obj[420323] :
                                '_______________________' }}</td>
                        </tr>
                        <tr>
                            <td style="border:none;">Rujukan dari : @{{ item.obj[420324] ? item.obj[420324] :
                                '_______________________' }}</td>
                        </tr>
                    </table>
                </td>
            </tr>

        </table>
        <table width="100%" style="table-layout:fixed;border-top:none;">
            <tr style="text-align: center;">
                <td style="width:20%;border:none;">Sebab Dirawat : @{{ item.obj[420325] ? item.obj[420325] : '' }}
                </td>
                <td style="width:40%;border:none;">Masuk Tanggal : @{{item.obj[420327] | toDate | date:'dd MMMM
                    yyyy'}}</td>
                <td style="border:none;">Jam : @{{item.obj[420329] | toDate | date:'HH:mm'}}</td>
            </tr>
            <tr style="text-align: center;">
                <td style="border:none; ">Dirawat di ruang : @{{ item.obj[420326] ?
                    item.obj[420326] : '' }}</td>
                <td style="border:none;">Bagian : @{{ item.obj[420328] ? item.obj[420328] : '' }}</td>
                <td style="border:none;"></td>
            </tr>
        </table>
        <table width="100%" style="table-layout:fixed;border-top:none;">

            <tr>
                <td rowspan="2" style="border:none;" valign="top">Kasus Polisi :</td>
                <td style="border:none;">@{{ item.obj[420330] ? '[&#10004;]' :
                    '[&nbsp;&nbsp;&nbsp;]' }} Ya</td>
                <td rowspan="2" style="border:none;" valign="top">Prosedur Masuk RS Melalui :</td>
                <td style="border:none;">@{{ item.obj[420332] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} IRD
                </td>
                <td rowspan="2" style="border:none;" valign="top">Peserta BPJS :</td>

                <td style="border:none;">@{{ item.obj[420334] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} PBI
                </td>
                <td style="border:none;">@{{ item.obj[420336] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Umum
                </td>
            </tr>
            <tr>
                <td style="border:none;">@{{ item.obj[420331] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Tidak</td>
                <td style="border:none;">@{{ item.obj[420333] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Poliklinik</td>
                <td style="border:none;">@{{ item.obj[420335] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Non
                    PBI</td>
                <td style="border:none;">@{{ item.obj[420337] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Gratis</td>

            </tr>
            <tr>
                <td colspan="5" style="border:none;"></td>
                <td colspan="2" style="border:none;">No. BPJS: @{{ item.obj[420338] ?
                    item.obj[420338] : '_______________________' }}</td>
            </tr>
            <tr>
                <td colspan="5" style="border:none;"></td>
                <td colspan="2" style="border:none;">Kelas Perawatan / Jaminan: @{{ item.obj[420339]
                    ? item.obj[420339] : '_______________________' }}</td>
            </tr>

        </table>
        <table width="100%" style="table-layout:fixed;border-top:none;">
            <tr style="text-align:center;">
                <td style="border:none;width:50%">Dipindahkan ke ruang : @{{ item.obj[420340] ? item.obj[420340] : ''
                    }}</td>
                <td style="border:none">Pindahan dari ruang : @{{ item.obj[420343] ? item.obj[420343] : ''
                    }}</td>
            </tr>

            <tr style="text-align:center;">
                <td style="border:none">Kelas: @{{ item.obj[420341] ? item.obj[420341] : '______________'
                    }}, Tgl: @{{item.obj[420342] | toDate | date:'dd MMMM yyyy'}}, Jam: @{{item.obj[420342] | toDate |
                    date:'HH:mm'}}</td>
                <td style="border:none">Kelas: @{{ item.obj[420344] ? item.obj[420344] : '______________'
                    }}, Tgl: @{{item.obj[420345] | toDate | date:'dd MMMM yyyy'}}, Jam: @{{item.obj[420345] | toDate |
                    date:'HH:mm'}}</td>
            </tr>

            <tr>
                <td height="25px" valign="top" style="width:50%">Meninggal Tgl : @{{item.obj[420346] | toDate | date:'dd
                    MMMM
                    yyyy HH:mm'}}</td>
                <td height="25px" valign="top">Sebab Kematian : @{{ item.obj[420347] ? item.obj[420347] :
                    '' }}</td>
            </tr>
            <tr>
                <td height="25px" valign="top">Alergi Terhadap : @{{ item.obj[420348] ? item.obj[420348] :
                    '' }}</td>
                <td height="25px" valign="top">Cacat Bawaan : @{{ item.obj[420349] ? item.obj[420349] : ''
                    }}</td>
            </tr>

            <tr>
                <td height="25px" valign="top">Diagnosa Awal : @{{ item.obj[420351] ? item.obj[420351] : ''
                    }} @{{ item.obj[420352] ? item.obj[420352] : '' }}</td>
                <td height="25px" valign="top">Diagnosa Akhir : @{{ item.obj[420354] ? item.obj[420354] :
                    '' }} @{{ item.obj[420355] ? item.obj[420355] : '' }}</td>
            </tr>


            <tr>
                <td colspan="2" height="25px" valign="top">Diagnosa sekunder (termasuk komplikasi/ manifestasi) : @{{
                    item.obj[420357] ? item.obj[420357] : '' }} @{{ item.obj[420358] ? item.obj[420358] : '' }}</td>
            </tr>
            <tr>
                <td colspan="2" height="25px" valign="top">Diagnosa sekunder (termasuk komplikasi/ manifestasi) : @{{
                    item.obj[32115624] ? item.obj[32115624] : '' }} @{{ item.obj[32115625] ? item.obj[32115625] : '' }}
                </td>
            </tr>
            <tr>
                <td colspan="2" height="25px" valign="top">Tindakan Operasi yang dilakukan (bila ada, sebutkan) : @{{
                    item.obj[420359] ? item.obj[420359] : '' }}</td>
            </tr>
            <tr>
                <td height="25px" valign="top">Infeksi Nosokomial : @{{ item.obj[420360] ? item.obj[420360]
                    : '' }}</td>
                <td height="25px" valign="top">Penyebab Infeksi : @{{ item.obj[420361] ? item.obj[420361] :
                    '' }}</td>
            </tr>
        </table>
        <table width="100%" style="table-layout:fixed;border-bottom:none;">
            <tr>
                <td colspan="6">Status KB (khusus pasien wanita)</td>
            </tr>

            <tr style="border:none;height:25px">
                <td style="border:none">@{{ item.obj[420362] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Sudah KB</td>
                <td style="border:none">@{{ item.obj[420363] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} MOV
                    / MOW</td>
                <td style="border:none">@{{ item.obj[420364] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} IUD
                </td>
                <td style="border:none">@{{ item.obj[420365] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Suntikan</td>
                <td style="border:none">@{{ item.obj[420366] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Kondom</td>
                <td style="border:none; ">@{{ item.obj[420367] ? '[&#10004;]' :
                    '[&nbsp;&nbsp;&nbsp;]' }} Pil KB</td>
            </tr>
            <tr style="border:none;height:25px">
                <td style="border:none">@{{ item.obj[420368] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Belum KB</td>
                <td colspan="5" style="border:none;">
                    @{{ item.obj[420369] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak Perlu KB. Alasan : @{{
                    item.obj[420370] ? item.obj[420370] : '__________' }}
                </td>
            </tr>
        </table>
        <table width="100%" style="table-layout:fixed;border-bottom:none;">
            <tr style="height:25px">
                <td style="border:none">Imunisasi yang pernah di dapat: </td>
                <td style="border:none">@{{ item.obj[420371] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} BCG</td>
                <td style="border:none">@{{ item.obj[420372] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} DPT</td>
                <td style="border:none">@{{ item.obj[420373] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Polio</td>
                <td style="border:none">@{{ item.obj[420374] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} TFT
                </td>
                <td style="border:none">@{{ item.obj[420375] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Campak</td>
            </tr>
        </table>
        <table width="100%" style="table-layout:fixed;border-bottom:none;">
            <tr>
                <td>Imunisasi yang diperoleh selama di rawat : @{{ item.obj[420376] ? item.obj[420376] : ''
                    }}</td>
            </tr>
            <tr>
                <td>Pengobatan Radioterapi / Ked. Nuklir : @{{ item.obj[420377] ? item.obj[420377] : '' }}
                </td>
            </tr>
        </table>
        
        <table width="100%" style="table-layout:fixed;border-top:none;border-bottom:none;">
            <tr>
                <td style="border:none;border-right:1px solid #000" width="50%">Transfusi Darah : @{{ item.obj[420378] ? item.obj[420378] : '' }}</td>
                <td style="border:none;">Golongan Darah : @{{ item.obj[420379] ? item.obj[420379] : '' }}</td>
            </tr>
        </table>
        <table width="100%" style="table-layout:fixed;border-bottom:none;">

            <tr>
                <td style="border:none; border-right:1px solid #000" colspan="3">Keadaan Keluar</td>
                <td style="border:none;" colspan="3">Cara Keluar</td>
            </tr>

            <tr>
                <td style="border:none;">@{{ item.obj[420380] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Sembuh</td>
                <td style="border:none;">@{{ item.obj[420381] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Membaik</td>
                <td style="border:none;border-right:1px solid #000">@{{ item.obj[420382] ? '[&#10004;]' :
                    '[&nbsp;&nbsp;&nbsp;]' }} Belum Sembuh</td>
                <td style="border:none;">@{{ item.obj[420385] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Diijinkan Pulang</td>
                <td style="border:none;">@{{ item.obj[420386] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Pulang paksa</td>
                <td style="border:none;">@{{ item.obj[420387] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Lari</td>
            </tr>
            <tr style="height:25px">
                <td style="border:none">@{{ item.obj[420383] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Meninggal < 48 Jam</td>
                <td style="border:none;border-right:1px solid #000" colspan="2">@{{ item.obj[420384] ? '[&#10004;]'
                    :
                    '[&nbsp;&nbsp;&nbsp;]' }} Meninggal > 48 Jam</td>
                <td style="border:none">@{{ item.obj[420388] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Pindah RS Lain</td>
                <td style="border:none" colspan="2">@{{ item.obj[420389] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Dirujuk Ke: @{{ item.obj[420390] ? item.obj[420390] : '__________' }}</td>
            </tr>

        </table>

       
        
        <table width="100%" style="table-layout:fixed;">
            <tr style="border:none;border-top:1px solid #000;height:25px">
                <td style="border:none;border-right:1px solid #000;widt:50%;" >Keluar Tanggal : @{{item.obj[420391] |
                    toDate | date:'dd MMMM yyyy'}}</td>
                <td style="border:none" colspan="">Dokter Penanggung Jawab Pelayanan : @{{ item.obj[420393] ?
                    item.obj[420393] : '' }}</td>
            </tr>
            <tr style="border:none;height:25px">
                <td style="border:none;border-right:1px solid #000" >Jam : @{{item.obj[420391] | toDate |
                    date:'HH:mm'}}</td>
                <td style="border:none" colspan="" rowspan="2">
                    <div id="qrcodeDPJP" style="text-align: center"></div>
                </td>
            </tr>
            <tr style="border:none;height:25px">
                <td style="border:none;border-right:1px solid #000" >Lama Dirawat : @{{ item.obj[420392] ?
                    item.obj[420392] : '' }}</td>
            </tr>

        </table>

        <br>

        </br>



     
    </div>
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

    angular.controller('cetakRingkasanPasienMasukKeluar', function ($scope, $http, httpService) {
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

    var dpjp = $scope.item.obj[420393];
    if (dpjp != undefined) {
        jQuery('#qrcodeDPJP').qrcode({
            width: 70,
            height: 70,
            text: "Tanda Tangan Digital Oleh " + dpjp
        });
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