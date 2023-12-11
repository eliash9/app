<!DOCTYPE html>
<html lang="en" ng-app="angularApp">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemantauan CPAP Dst</title>

    <style>
        @page {
            size: auto;
            size: A4 portrait;
        }

        html,
        body {
            font-family: DejaVu Sans, Arial, Helvetica, sans-serif;
            font-size: 9pt;

        }

        table {

            table-layout: fixed;
            border-collapse: collapse;

            width: 100%;
        }

        tr,
        td {
            padding: .3rem;
            border: 1px solid #000;
        }
        .noborder {
            padding: .3rem;
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

        .bg-dark {
            background: #000;
            color: #fff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: x-large;
            padding: .5rem;
            height: 20pt !important;
        }
    </style>
</head>

<body ng-controller="cetakPemantauanCPAP">
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
            <td style="text-align:center;font-size:36px">66</td>
        </tr>
    </table>
    <table>

        <tr class="bordered bg-dark">
            <th colspan="49" height="20pt">PEMANTAUAN CPAP DST</th>
        </tr>
        <tr >
            <td class="noborder" colspan="3">Tanggal</td>
            <td class="noborder" colspan="16">: @{{item.obj[32103842] | toDate | date:'dd MMMM yyyy'}}</td>
            <td class="noborder" colspan="4">Pukul</td>
            <td class="noborder" colspan="26">: @{{item.obj[32103842] | toDate | date:'HH:mm'}}</td>
        </tr>

      



        <tr class="noborder">
            <td colspan="49" class="noborder"><strong><u>Indikasi</u></strong></td>
        </tr>
        <tr class="noborder">
            <td colspan="28" class="noborder">Gangguan Pernapasan (semua usia) </td>
            <td colspan="21" rowspan="15" class="noborder">

                <img src="@{{ asset('service/img/CPAP.jpg') }}" alt="" style="width: 300px;display:block; margin:auto;">

            </td>
        </tr>
        <tr class="noborder">
            <td class="noborder" colspan="28">@{{ item.obj[32103843] ? '[&#10004;]' :
                '[&nbsp;&nbsp;&nbsp;]' }} Merintih</td>
        </tr>
        <tr class="noborder">
            <td class="noborder" colspan="28">@{{ item.obj[32103844] ? '[&#10004;]' :
                '[&nbsp;&nbsp;&nbsp;]' }} Retraksi parah</td>
        </tr>
        <tr class="noborder">
            <td class="noborder" colspan="28">@{{ item.obj[32103845] ? '[&#10004;]' :
                '[&nbsp;&nbsp;&nbsp;]' }} RR > 80, RR @{{ item.obj[32103846] ? item.obj[32103846] :
                '____' }} /menit</td>
        </tr>
        <tr class="noborder">
            <td class="noborder" colspan="28">@{{ item.obj[32103847] ? '[&#10004;]' :
                '[&nbsp;&nbsp;&nbsp;]' }} O<sub>2</sub>
                < 85% (kalau < 1500g) ATAU < 90% (kalau> 1500g)
            </td>
        </tr>
        <tr class="noborder">
            <td class="noborder" colspan="28">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Saturasi @{{
                item.obj[32103848] ? item.obj[32103848] : '____' }} %</td>
        </tr>
        <tr class="noborder">
            <td colspan="28" class="noborder"></td>
        </tr>
        <tr class="noborder">
            <td class="noborder" colspan="28">Bayi < usia kehamilan 30 minggu atau 1500 grams</td>
        </tr>
        <tr class="noborder">
            <td class="noborder" colspan="28">@{{ item.obj[32103849] ? '[&#10004;]' :
                '[&nbsp;&nbsp;&nbsp;]' }} Usia kehamilan @{{ item.obj[32103850] ? item.obj[32103850] :
                '____' }} minggu</td>
        </tr>
        <tr class="noborder">
            <td class="noborder" colspan="28">@{{ item.obj[32103851] ? '[&#10004;]' :
                '[&nbsp;&nbsp;&nbsp;]' }} Berat badan @{{ item.obj[32103852] ? item.obj[32103852] :
                '____' }} gram</td>
        </tr>
        <tr class="noborder">
            <td class="noborder" colspan="28">@{{ item.obj[32103853] ? '[&#10004;]' :
                '[&nbsp;&nbsp;&nbsp;]' }} Laju napas @{{ item.obj[32103854] ? item.obj[32103854] :
                '____' }} /menit</td>
        </tr>
        <tr class="noborder">
            <td class="noborder" colspan="28">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Saturasi O2 @{{
                item.obj[32103855] ? item.obj[32103855] : '____' }} %</td>
        </tr>
        <tr class="noborder">
            <td colspan="28" class="noborder"></td>
        </tr>
        <tr class="noborder">
            <td colspan="28" class="noborder"><strong><u>Perlengkapan CPAP</u></strong></td>
        </tr>
        <tr class="noborder">
            <td class="noborder" colspan="28">@{{ item.obj[32103856] ? '[&#10004;]' :
                '[&nbsp;&nbsp;&nbsp;]' }} "Hudson prongs" yang tepat untuk lubang hidung</td>
        </tr>
        <tr class="noborder">
            <td class="noborder" colspan="28">@{{ item.obj[32103857] ? '[&#10004;]' :
                '[&nbsp;&nbsp;&nbsp;]' }} Ukuran 1 : 750-1250g @{{ item.obj[32103858] ? '[&#10004;]' :
                '[&nbsp;&nbsp;&nbsp;]' }} Ukuran 2 : 1250-2000g @{{ item.obj[32103859] ? '[&#10004;]' :
                '[&nbsp;&nbsp;&nbsp;]' }} Ukuran 3 : 2000-3000g</td>
        </tr>
        <tr class="noborder">
            <td class="noborder" colspan="28">@{{ item.obj[32103860] ? '[&#10004;]' :
                '[&nbsp;&nbsp;&nbsp;]' }} Topi yang tepat</td>
        </tr>
        <tr class="noborder">
            <td class="noborder" colspan="28">@{{ item.obj[32103861] ? '[&#10004;]' :
                '[&nbsp;&nbsp;&nbsp;]' }} Peniti, karet, atau selotip untuk memasang selang ke topi</td>
        </tr>
        <tr class="noborder">
            <td colspan="28" class="noborder"></td>
        </tr>
        <tr class="noborder">
            <td colspan="28" class="noborder"><strong><u>Pengaturan CPAP</u></strong></td>
        </tr>
        <tr class="noborder">
            <td class="noborder" colspan="28">@{{ item.obj[32103862] ? '[&#10004;]' :
                '[&nbsp;&nbsp;&nbsp;]' }} Air dipenuhi sampai tingkat 6-8 cm. @{{ item.obj[32103863] ?
                item.obj[32103863] : '____' }} cm</td>
        </tr>
        <tr class="noborder">
            <td class="noborder" colspan="28">@{{ item.obj[32103864] ? '[&#10004;]' :
                '[&nbsp;&nbsp;&nbsp;]' }} Oksigen dipasang kalau saturasi O2 tidak tercapai dengan udara
                ruangan</td>
        </tr>
        <tr class="noborder">
            <td class="noborder" colspan="28">@{{ item.obj[32103865] ? '[&#10004;]' :
                '[&nbsp;&nbsp;&nbsp;]' }} Mesin dinyalakan</td>
        </tr>
        <tr class="noborder">
            <td class="noborder" colspan="28">@{{ item.obj[32103866] ? '[&#10004;]' :
                '[&nbsp;&nbsp;&nbsp;]' }} Meteran “blended” diatur antara 5-10 liter (biasanya mulai
                dari 6 liter) @{{ item.obj[32103867] ? item.obj[32103867] : '____' }} liter</td>
        </tr>
        <tr class="noborder">
            <td class="noborder" colspan="28">@{{ item.obj[32103868] ? '[&#10004;]' :
                '[&nbsp;&nbsp;&nbsp;]' }} Meteran “oxygen” diatur ke @{{ item.obj[32103869] ?
                item.obj[32103869] : '____' }} % O2 = @{{ item.obj[32103871] ? item.obj[32103871] :
                '____' }} L/menit. Lihat tabel di bawah</td>
        </tr>
        <tr class="text-center">
            <td colspan="7">Aliran Total</td>
            <td colspan="7">5 L/mnt</td>
            <td colspan="7">6 L/mnt</td>
            <td colspan="7">7 L/mnt</td>
            <td colspan="7">8 L/mnt</td>
            <td colspan="7">9 L/mnt</td>
            <td colspan="7">10 L/mnt</td>
        </tr>
        <tr class="text-center">
            <td colspan="7">0.4 O2</td>
            <td colspan="7">1.5 L O2</td>
            <td colspan="7">1.5 L O2</td>
            <td colspan="7">2 L O2</td>
            <td colspan="7">2.5 L O2</td>
            <td colspan="7">2.5 L O2</td>
            <td colspan="7">3 L O2</td>
        </tr>
        <tr class="text-center">
            <td colspan="7">0.4 O2</td>
            <td colspan="7">1.5 L O2</td>
            <td colspan="7">1.5 L O2</td>
            <td colspan="7">2 L O2</td>
            <td colspan="7">2.5 L O2</td>
            <td colspan="7">2.5 L O2</td>
            <td colspan="7">3 L O2</td>
        </tr>
        <tr class="text-center">
            <td colspan="7">0.5 O2</td>
            <td colspan="7">2 L O2</td>
            <td colspan="7">2.5 L O2</td>
            <td colspan="7">3 L O2</td>
            <td colspan="7">3.5 L O2</td>
            <td colspan="7">3.5 L O2</td>
            <td colspan="7">4.5 L O2</td>
        </tr>
        <tr class="text-center">
            <td colspan="7">0.6 O2</td>
            <td colspan="7">2.5 L O2</td>
            <td colspan="7">3 L O2</td>
            <td colspan="7">4 L O2</td>
            <td colspan="7">4.5 L O2</td>
            <td colspan="7">5 L O2</td>
            <td colspan="7">5.5 L O2</td>
        </tr>
        <tr class="text-center">
            <td colspan="7">0.7 O2</td>
            <td colspan="7">3 L O2</td>
            <td colspan="7">3.5 L O2</td>
            <td colspan="7">5 L O2</td>
            <td colspan="7">5.5 L O2</td>
            <td colspan="7">6 L O2</td>
            <td colspan="7">6.5 L O2</td>
        </tr>
        <tr class="text-center">
            <td colspan="7">0.8 O2</td>
            <td colspan="7">3.5 L O2</td>
            <td colspan="7">4 L O2</td>
            <td colspan="7">6 L O2</td>
            <td colspan="7">6.5 L O2</td>
            <td colspan="7">7 L O2</td>
            <td colspan="7">7.5 L O2</td>
        </tr>
        <tr class="text-center">
            <td colspan="7">0.9 O2</td>
            <td colspan="7">4 L O2</td>
            <td colspan="7">4.5 L O2</td>
            <td colspan="7">7 L O2</td>
            <td colspan="7">7.5 L O2</td>
            <td colspan="7">7.5 L O2</td>
            <td colspan="7">8.5 L O2</td>
        </tr>


    </table>
    <table>
        <tr class="noborder">
            <td class="noborder" colspan="28"><strong><u>Pemasangan CPAP</u></strong> (Lihat gambar I)
            </td>
        </tr>
        <tr class="noborder">
            <td class="noborder" colspan="28">@{{ item.obj[32103872] ? '[&#10004;]' :
                '[&nbsp;&nbsp;&nbsp;]' }} Posisikan bayi dengan kepala diangkat 30 derajat</td>
        </tr>
        <tr class="noborder">
            <td class="noborder" colspan="28">@{{ item.obj[32103873] ? '[&#10004;]' :
                '[&nbsp;&nbsp;&nbsp;]' }} Taruh gulungan kain di bawah bahu untuk mempertahankan bayi ke
                “sniffing position”</td>
        </tr>
        <tr class="noborder">
            <td class="noborder" colspan="28">@{{ item.obj[32103874] ? '[&#10004;]' :
                '[&nbsp;&nbsp;&nbsp;]' }} Bersihkan lubang hidung dan mulut dari lendir</td>
        </tr>
        <tr class="noborder">
            <td class="noborder" colspan="28">@{{ item.obj[32103875] ? '[&#10004;]' :
                '[&nbsp;&nbsp;&nbsp;]' }} Basahi prongs dengan air bersih atau sterile normal saline
            </td>
        </tr>
        <tr class="noborder">
            <td class="noborder" colspan="28">@{{ item.obj[32103876] ? '[&#10004;]' :
                '[&nbsp;&nbsp;&nbsp;]' }} Taruh prongs melengkung ke bawah. Pastikan ada 2 mm antara
                selang dan wajah</td>
        </tr>
        <tr class="noborder">
            <td class="noborder" colspan="28">@{{ item.obj[32103877] ? '[&#10004;]' :
                '[&nbsp;&nbsp;&nbsp;]' }} Pastikan prongs mengikuti lengkung lubang hidung dan tidak
                menyentuh dinding hidung</td>
        </tr>
        <tr class="noborder">
            <td class="noborder" colspan="28">@{{ item.obj[32103878] ? '[&#10004;]' :
                '[&nbsp;&nbsp;&nbsp;]' }} Kencangkan selang kalau posisi prongs dan selang sudah baik
                (ada gelembung di dalam air)</td>
        </tr>
        <tr class="noborder">
            <td class="noborder" colspan="28">@{{ item.obj[32103879] ? '[&#10004;]' :
                '[&nbsp;&nbsp;&nbsp;]' }} Berikan “pacifier” supaya mulut tetap tertutup</td>
        </tr>
        <tr class="noborder">
            <td colspan="28" class="noborder"></td>
        </tr>



       
        <tr class="noborder">
            <td colspan="28" class="noborder"><strong><u>Hasil</u></strong></td>
        </tr>
        <tr class="noborder">
            <td class="noborder" colspan="7">@{{ item.obj[32103880] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} RR @{{
                item.obj[32103881] ? item.obj[32103881] : '____' }} /menit</td>
            <td class="noborder" colspan="10">@{{ item.obj[32103882] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Saturasi
                O2 @{{ item.obj[32103883] ? item.obj[32103883] : '____' }} %</td>
            <td class="noborder" colspan="7">@{{ item.obj[32103884] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Pasien
                tenang</td>
            <td class="noborder" colspan="8">@{{ item.obj[32103885] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Gangguan
                napas turun</td>
        </tr>
        <!-- lembar ke dua  -->
        <tr style="border-top:1px solid #000">
            <td colspan="49" class="noborder">
                Nama Pasien : {!! $res['d'][0]->namapasien !!}
            </td>
        </tr>
        <tr>
            <td colspan="12" class="noborder">
                Tanggal Lahir : {!! date('d-m-Y',strtotime( $res['d'][0]->tgllahir )) !!}
            </td>
            <td colspan="37" class="noborder">
                BB @{{ item.obj[32103888] ? item.obj[32103888] : '____' }} kg
            </td>
        </tr>
        <tr>
            <td colspan="10" style="text-align: center"><b>Tanggal dan Waktu</b></td>
            <td colspan="39" style="text-align: center"><b>Keterangan</b></td>
        </tr>
        <tr>
            <td colspan="10">@{{item.obj[32103889] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
            <td colspan="39" @{{ item.obj[32103890] ? item.obj[32103890] : '' }}></td>
        </tr>
        <tr>
            <td colspan="10">@{{item.obj[32103891] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
            <td colspan="39" @{{ item.obj[32103892] ? item.obj[32103892] : '' }}></td>
        </tr>
        <tr>
            <td colspan="10">@{{item.obj[32103893] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
            <td colspan="39" @{{ item.obj[32103894] ? item.obj[32103894] : '' }}></td>
        </tr>
        <tr>
            <td colspan="10">@{{item.obj[32103895] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
            <td colspan="39" @{{ item.obj[32103896] ? item.obj[32103896] : '' }}></td>
        </tr>
        <tr>
            <td colspan="10">@{{item.obj[32103897] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
            <td colspan="39" @{{ item.obj[32103898] ? item.obj[32103898] : '' }}></td>
        </tr>
        <tr>
            <td colspan="10">@{{item.obj[32103899] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
            <td colspan="39" @{{ item.obj[32103900] ? item.obj[32103900] : '' }}></td>
        </tr>
        <tr>
            <td colspan="10">@{{item.obj[32103901] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
            <td colspan="39" @{{ item.obj[32103902] ? item.obj[32103902] : '' }}></td>
        </tr>
        <tr>
            <td colspan="10">@{{item.obj[32103903] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
            <td colspan="39" @{{ item.obj[32103904] ? item.obj[32103904] : '' }}></td>
        </tr>
        <tr>
            <td colspan="10">@{{item.obj[32103905] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
            <td colspan="39" @{{ item.obj[32103906] ? item.obj[32103906] : '' }}></td>
        </tr>
        <tr>
            <td colspan="10">@{{item.obj[32103907] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
            <td colspan="39" @{{ item.obj[32103908] ? item.obj[32103908] : '' }}></td>
        </tr>
        <tr>
            <td colspan="10">@{{item.obj[32103909] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
            <td colspan="39" @{{ item.obj[32103910] ? item.obj[32103910] : '' }}></td>
        </tr>
        <tr>
            <td colspan="10">@{{item.obj[32103911] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
            <td colspan="39" @{{ item.obj[32103912] ? item.obj[32103912] : '' }}></td>
        </tr>
        <tr>
            <td colspan="10">@{{item.obj[32103913] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
            <td colspan="39" @{{ item.obj[32103914] ? item.obj[32103914] : '' }}></td>
        </tr>
        <tr>
            <td colspan="10">@{{item.obj[32103915] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
            <td colspan="39" @{{ item.obj[32103916] ? item.obj[32103916] : '' }}></td>
        </tr>
        <tr>
            <td colspan="10">@{{item.obj[32103917] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
            <td colspan="39" @{{ item.obj[32103918] ? item.obj[32103918] : '' }}></td>
        </tr>
        <tr>
            <td colspan="10">@{{item.obj[32103919] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
            <td colspan="39" @{{ item.obj[32103920] ? item.obj[32103920] : '' }}></td>
        </tr>
        <tr>
            <td colspan="10">@{{item.obj[32103921] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
            <td colspan="39" @{{ item.obj[32103922] ? item.obj[32103922] : '' }}></td>
        </tr>
        <tr>
            <td colspan="10">@{{item.obj[32103923] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
            <td colspan="39" @{{ item.obj[32103924] ? item.obj[32103924] : '' }}></td>
        </tr>
        <tr>
            <td colspan="10">@{{item.obj[32103925] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
            <td colspan="39" @{{ item.obj[32103926] ? item.obj[32103926] : '' }}></td>
        </tr>
        <tr>
            <td colspan="10">@{{item.obj[32103927] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
            <td colspan="39" @{{ item.obj[32103928] ? item.obj[32103928] : '' }}></td>
        </tr>
    </table>
</body>
<script type="text/javascript">
    var baseUrl =
         encode(url('/'))!!}
   va angular = angular.module('angularApp', [], function ($interpolateProvider) {
                   r.startSymbol('@{{');
        $i        o        bol('}}');
    }).factory    rvice', f    ($http, $q) {
        return {
         et: funct                                                                                         $http.                                       he                                t-Type': 'a                              }
                                        (r                                           ns                            oading").hide()
                                     ponse) {
                                                         /                                   });
                                           },
                  an                     auanCPAP', fun            ht                scop                   obj: [],
                                  []      }
        var dataLoad = {!! json_encode($res['d'])!!
    };
    for (var i = 0; i <= dataLoad.length - 1; i++) {
        if (dataLoad[i].emrdfk== 
    311                continue;
        }
        if (dataL        ==  "textbox") {
       
           _            emrdfk).ht        i]                        ob j[dataLoad[i].e            d[i] .v            
        i        ].                          var chekedd = false            (dataLoa d [i]        ')              var chekedd = tru                      cope.item.obj[dataLo            chekedd
              if                adio") {
                                 k] = dataLoad[i].val                   if        ].        etime                #id_' + da                     ad                   $scope.item.obj[dat        dfk        [                   if (dataLo            ime") {
                .item.ob[dataLoad[i].emrdfk            value
        }
          taL        == "date")                   obj[dataL             dataLoa d               }

        f (dataLoad[i].type            tbox")                   obj[dataLoad[i].emrdfk] = dataL                  e.item.obj2[dataLoad[i].emrdfk] =                if         .type == "textarea") {
            $('#id_                  ataLoad[i].value)
            $sco                   dfk] = dataLoad[i].value
        }
        i              mb                  var str = data                                 ll) {
               var res =            

                        obj[dataLoad[i].emrdfk] =                           Lo        ).html(res[1                }
                                 ox 2") {
        ta                     va            t(s                ad[i].emrdfk + "" + 1] = res[0]
                       d[i].e m rdfk] = res[1]
          $('#                 s[         }

        if            rd fk == '       pe                             }

        if                 mPeriksa = da t aL o ad[i].value
                            mrdfk ==   '2000002354') {
          pe.tgl1            .v        
           d[i        '2000002357') {
                              alue
        }
                        = '         {
     l            a                  if (dataLoad[i] . em r dfk == '2000                e.tgl4 = dataLoad[i].value
        }
                mrdfk ==   '2000002366') {
          pe              lue               if (daaLoa            200002369             $scop        aL        
        }
        dat        fk =            {
            $scope.tl7 =                         if (dataLoad[i].emrdfk ==                   ope.tgl8 = dataLoad[i].value                          fk == '2000002378') {
                  at        ue
        }
          ta        fk =='200                    $scoe.tg            ].va        }
        da        rd        02384') {
           $            aLo                }
        if         .e                         $scope.tgl12 = dataLod[i]                if (dataLoad[i].emrdfk == '2                  gl13 = dataLoad[i].value
       }
                    k == '2000002393') {
        $s         Lo                }
        i (da             =='200                    $        =         value                  taLoad[].em            408') {
                            i]           }


        $s        =                    onsole.log($scope.item.objIg[31               r.filter('toDate', function (        e         ems) {
            if (items !=                       Date(items);
            }
              $        eady(function () {
         w.        });
</script>

</html>