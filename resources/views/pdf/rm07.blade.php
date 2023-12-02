<!DOCTYPE html>
<html lang="en" ng-app="angularApp">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asesmen Awal Keperawatan IGD</title>

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


        .table-border {
            table-layout: fixed;
            border: .1rem solid rgba(0, 0, 0, 0.45);
            border-collapse: collapse;
            padding: .3rem;
            page-break-after: avoid;


        }

        .table-noborder,
        tr,
        td {
            border: 0;
            border-collapse: collapse;
            padding: .3rem;


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
            border: .1rem solid rgba(0, 0, 0, 0.45);
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

        <table width="100%" class="table-border">
            <tr>
                <td rowspan="4" colspan="3">
                    @if(stripos(\Request::url(), 'localhost') !== FALSE)
                    <img src="{{ asset('img/logo_only.png') }}" alt="" style="width: 60px;display:block; margin:auto;">
                    @else

                    <img src="service/img/logo_only.png" alt="" style="width: 60px;display:block;">
                    @endif
                </td>
                <td rowspan="4" colspan="7" style="text-align:center;font-size:10px;">
                    <strong>@{!! $title !!}</strong> <br>@{!! $res['profile']->alamatlengkap !!}<br>TELP :
                    (0413) 81292
                </td>
                <td colspan="2" class="border-left">No. RM </td>
                <td colspan="8">: @{!! $res['d'][0]->nocm !!}</td>
                <td rowspan="2" colspan="2" style="font-size:xx-large;text-align: center;" class="bg-dark">RM</td>
            </tr>
            <tr height="20px">
                <td colspan="2" class="border-left">Nama Lengkap</td>
                <td colspan="8">: @{!! $res['d'][0]->namapasien !!} @{!! $res['d'][0]->jeniskelamin
                    ==
                    'PEREMPUAN' ? '(P)' : '(L)' !!}</td>
            </tr>
            <tr height="20px">
                <td colspan="2" class="border-left">Tanggal Lahir</td>
                <td colspan="8">: @{!! date('d-m-Y',strtotime( $res['d'][0]->tgllahir )) !!}</td>
                <td rowspan="2" colspan="2" style="font-size:xx-large;text-align: center;" class="border-left">07</td>
            </tr>

            <tr height="20px">
                <td colspan='2' class="border-left">NIK</td>
                <td colspan="8">: @{!! $res['d'][0]->noidentitas !!}</td>
            </tr>

            <tr height="20px" class="bg-dark">
                <td colspan="22" style="font-size: x-large;">ASESMEN AWAL KEPERAWATAN IGD</td>
            </tr>
            <tr>
                <td colspan="7" class="bordered">Respon Time : @{{ item.obj[420616] ? item.obj[420616] : '' }}</td>
                <td colspan="9" class="bordered">Tanggal : @{{item.obj[420617] | toDate | date:'dd MMMM yyyy'}}</td>
                <td colspan="3">Masuk Pukul</td>
                <td colspan="3">: @{{item.obj[420617] | toDate | date:'HH:mm'}} WITA</td>
            </tr>
            <tr class="border-bottom">
                <td colspan="4">Cara Pembayaran :</td>
                <td colspan="3">@{{ item.obj[420620] ? '[&#10004;]' :
                    '[&nbsp;&nbsp;&nbsp;]' }} Umum</td>
                <td colspan="3">@{{ item.obj[420621] ? '[&#10004;]' :
                    '[&nbsp;&nbsp;&nbsp;]' }} Asuransi</td>
                <td colspan="6">@{{
                    item.obj[420622] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} BPJS No. : @{{ item.obj[420623] ?
                    item.obj[420623] : '' }}</td>
                <td colspan="3" class="border-left">Diperiksa Pukul</td>
                <td colspan="3">: @{{item.obj[420618] | toDate | date:'HH:mm'}} WITA</td>
            </tr>
            <tr class="border-bottom">
                <td colspan="4">Jenis Kasus</td>
                <td colspan="3" class="border-left">@{{ item.obj[420624] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Bedah</td>
                <td colspan="3">@{{ item.obj[420625] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Non
                    Bedah</td>
                <td colspan="3">@{{ item.obj[420626] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Anak
                </td>
                <td colspan="9">@{{ item.obj[420627] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Kebidanan/Penyakit Kandungan</td>
            </tr>
            <tr valign="middle">
                <td rowspan="3" colspan="4">Pengantar</td>
                <td colspan="2" class="border-left">Nama</td>
                <td colspan="7">: @{{ item.obj[420628] ? item.obj[420628] : '' }}</td>
                <td>(@{{ item.obj[420630] ? 'L' : 'P' }})</td>
                <td class="border-left">Alamat</td>
                <td colspan="7">: @{{ item.obj[420634] ? item.obj[420634] : '' }}</td>
            </tr>
            <tr valign="middle">
                <td colspan="2" class="border-left">No.Tlpn/HP </td>
                <td colspan="8">: @{{ item.obj[420632] ? item.obj[420632] : ''
                    }}</td>
                <td colspan="8" class="border-left"></td>
            </tr>
            <tr valign="middle">
                <td colspan="3" class="border-left">Hubungan dengan pasien</td>
                <td colspan="7">: @{{ item.obj[420633] ?
                    item.obj[420633] : '' }}</td>
                <td colspan="8" class="border-left"></td>

            </tr>
            <tr height="35px" class="border-top">
                <td valign="middle" colspan="4">Keluhan Saat ini</td>
                <td colspan="18" class="border-left">@{{ item.obj[420864] ? item.obj[420864] : '' }}</td>
            </tr>
        </table>
        <table class="bordered" style="margin-top:-5px">
            <tr>
                <td rowspan="2" valign="top" width="18%">Status Fisik</td>
                <td colspan="3" width="27%" class="border-left border-bottom">

                    <table class="table-noborder">
                        <tr>

                            <td colspan="2">Airway</td>
                            <td>:</td>
                            <td colspan="2" valign="middle">@{{ item.obj[420635] ? '[&#10004;]' :
                                '[&nbsp;&nbsp;&nbsp;]' }} Normal</td>
                            <td colspan="2">@{{ item.obj[420636] ? '[&#10004;]' :
                                '[&nbsp;&nbsp;&nbsp;]' }}
                                Masalah</td>
                            <td colspan="11">: @{{ item.obj[420637] ? item.obj[420637] : '' }}</td>
                        </tr>
                        <tr>
                            <td colspan="2">Breathing</td>
                            <td colspan="2">: Nafas</td>
                            <td colspan="2">: @{{ item.obj[420638] ? item.obj[420638] : '' }} x/m
                            </td>
                            <td></td>
                            <td colspan="4">Pola pernafasan </td>
                            <td colspan="2">@{{ item.obj[420639] ? '[&#10004;]' :
                                '[&nbsp;&nbsp;&nbsp;]' }}
                                Normal</td>
                            <td colspan="2">@{{ item.obj[420640] ? '[&#10004;]' :
                                '[&nbsp;&nbsp;&nbsp;]' }}
                                Tidak, </td>
                            <td colspan="3">Jelaskan: @{{ item.obj[420641] ? item.obj[420641] : ''
                                }}</td>
                        </tr>
                        <tr>
                            <td colspan="2">Circulation</td>
                            <td colspan="2">TD</td>
                            <td colspan="2">: @{{ item.obj[420642] ? item.obj[420642] : '' }} mmHg
                            </td>
                            <td></td>
                            <td colspan="">Nadi</td>
                            <td colspan="3"> @{{ item.obj[420643] ? item.obj[420643] : '' }} x/m
                            </td>
                            <td colspan="2">@{{ item.obj[420644] ? '[&#10004;]' :
                                '[&nbsp;&nbsp;&nbsp;]' }}
                                Teratur</td>
                            <td colspan="5">@{{ item.obj[420645] ? '[&#10004;]' :
                                '[&nbsp;&nbsp;&nbsp;]' }}
                                Tidak Teratur </td>
                        </tr>
                        <tr>
                            <td colspan="2">Suhu</td>
                            <td colspan="4">: @{{ item.obj[420646] ? item.obj[420646] : '' }} °C
                            </td>
                            <td></td>
                            <td colspan="">Akral</td>
                            <td colspan="3">@{{ item.obj[420647] ? '[&#10004;]' :
                                '[&nbsp;&nbsp;&nbsp;]' }}
                                Hangat</td>
                            <td colspan="7">@{{ item.obj[420648] ? '[&#10004;]' :
                                '[&nbsp;&nbsp;&nbsp;]' }}
                                Dingin</td>
                        </tr>
                        <tr>
                            <td colspan="6">Pendarahan/Kehilangan Cairan :</td>
                            <td></td>
                            <td colspan=""></td>
                            <td colspan="4">@{{ item.obj[420649] ? '[&#10004;]' :
                                '[&nbsp;&nbsp;&nbsp;]' }}
                                Tidak</td>
                            <td colspan="6">@{{ item.obj[420650] ? '[&#10004;]' :
                                '[&nbsp;&nbsp;&nbsp;]' }}
                                Ada, Jelaskan : @{{ item.obj[420641] ? item.obj[420651] : '' }}</td>
                        </tr>
                        <tr>
                            <td colspan="2">Capilary Refill :</td>
                            <td colspan="5">@{{ item.obj[420652] ? item.obj[420652] : '___' }}
                                Detik</td>
                            <td colspan="5"></td>
                            <td colspan="5">SPO2, Jelaskan : @{{ item.obj[420653] ?
                                item.obj[420653] : '___' }}
                                %</td>
                            <td></td>
                        </tr>
                    </table>

                </td>
            </tr>
            <tr>
                <td class="bordered">

                    <table>
                        <tr>
                            <td colspan="2">
                                <b>Dissability/Neurologi</b>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">Kesadaran : @{{ item.obj[420654] ?
                                item.obj[420654] : '' }}
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">GCS : E : @{{ item.obj[420655] ?
                                item.obj[420655] : '' }}, V : @{{ item.obj[420656] ? item.obj[420656] : '' }}, M : @{{
                                item.obj[420657] ? item.obj[420657] : '' }}</td>
                        </tr>
                        <tr>
                            <td>@{{ item.obj[420658] ? '[&#10004;]' :
                                '[&nbsp;&nbsp;&nbsp;]' }}
                                Mandiri</td>
                            <td>@{{ item.obj[420659] ?
                                '[&#10004;]' :
                                '[&nbsp;&nbsp;&nbsp;]' }} Dibantu</td>
                        </tr>
                        <tr>
                            <td>@{{ item.obj[420660] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                                Alert</td>
                            <td>@{{ item.obj[420661] ? '[&#10004;]' :
                                '[&nbsp;&nbsp;&nbsp;]' }} Pain</td>
                        </tr>
                        <tr>
                            <td>@{{ item.obj[420662] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                                Verbal</td>
                            <td>@{{ item.obj[420663] ? '[&#10004;]' :
                                '[&nbsp;&nbsp;&nbsp;]' }} Non Verbal</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <b>Pupil</b>
                            </td>
                        </tr>
                        <tr>
                            <td>@{{ item.obj[420664] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                                Isokor</td>
                            <td>@{{ item.obj[420665] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                                Anisokor</td>

                        </tr>
                        <tr>
                            <td>@{{ item.obj[420666] ? '[&#10004;]' :
                                '[&nbsp;&nbsp;&nbsp;]' }} Midriasis</td>
                        </tr>
                        <tr>
                            <td>Refleks: @{{ item.obj[420667] ?
                                item.obj[420667] : '' }} / @{{ item.obj[420668] ? item.obj[420668] : '' }}</td>
                        </tr>


                    </table>


                </td>
                <td class="bordered">
                    <table>
                        <tr>
                            <td colspan="2">
                                Eksposure

                            </td>
                        </tr>
                        <tr>
                            <td>@{{ item.obj[420669] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                                Jelas</td>
                            <td>@{{ item.obj[420670] ? '[&#10004;]' :
                                '[&nbsp;&nbsp;&nbsp;]' }} Pendarahan</td>
                        </tr>
                        <tr>
                            <td>@{{ item.obj[420671] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                                Fraktur</td>
                            <td>@{{ item.obj[420672] ? '[&#10004;]' :
                                '[&nbsp;&nbsp;&nbsp;]' }} Normal</td>
                        </tr>
                        <tr>
                            <td>@{{ item.obj[420673] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                                Hematom</td>
                            <td>@{{ item.obj[420674] ? '[&#10004;]' :
                                '[&nbsp;&nbsp;&nbsp;]' }} Deformitas</td>
                        </tr>
                        <tr>
                            <td>@{{ item.obj[420675] ? '[&#10004;]' :
                                '[&nbsp;&nbsp;&nbsp;]' }} Luka</td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table>
                        <tr>
                            <td>
                                Tanda kehidupan

                            </td>
                        </tr>
                        <tr>
                            <td>@{{ item.obj[420676] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                                Denyut Nadi (-)</td>
                        </tr>
                        <tr>
                            <td>@{{ item.obj[420677] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                                Reflek Cahaya (-)</td>
                        </tr>
                        <tr>
                            <td colspan="6">@{{ item.obj[420678] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} EKG
                                Asystole</td>
                        </tr>
                        <tr>
                            <td c>Penentuan Kematian Pukul: @{{item.obj[420679] | toDate |
                                date:'HH:mm'}} WITA</td>
                        </tr>
                    </table>

                </td>
            </tr>
        </table>
       
        <table width="100%" class="table-border" style="margin-top:-5px">


           

            <tr>
                <td rowspan="7" width="18%">Bio-Psiko-Sosio-Spiritual
                </td>
                <td class="border-left">@{{ item.obj[420680] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Rumah Sendiri</td>
                <td>@{{ item.obj[420681] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Rumah Orang Tua</td>
                <td>@{{ item.obj[420682] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Kontrak</td>
                <td>@{{ item.obj[420683] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Kos
                </td>
                <td >@{{ item.obj[420684] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Lainnya : @{{ item.obj[420685] ? item.obj[420685] : '' }}</td>
                    <td></td>
                    <td></td>
            </tr>
            <tr>
                <td class="border-left">@{{ item.obj[420687] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Tenang</td>
                <td>@{{ item.obj[420688] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Cemas</td>
                <td>@{{ item.obj[420689] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Marah</td>
                <td>@{{ item.obj[420690] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Lainnya : @{{ item.obj[420691] ? item.obj[420691] : '' }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
            </tr>
            <tr>
                <td class="border-left">Status Perkawinan</td>
                <td>@{{ item.obj[420693] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Kawin</td>
                <td>@{{ item.obj[420694] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Belum Kawin</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
            </tr>
            <tr>
                <td colspan="3" class="border-left">Nilai dan keyakinan yang mempengaruhi Kesehatan :</td>
                <td>@{{ item.obj[420696] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Tidak Ada</td>
                <td>@{{ item.obj[420697] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ada
                    : @{{ item.obj[420698] ? item.obj[420698] : '' }}</td>
                    <td></td>
                    <td></td>
            </tr>
            <tr>
                <td class="border-left">Agama</td>
                <td>@{{ item.obj[420700] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Islam</td>
                <td>@{{ item.obj[420701] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Kristen Katolik</td>
                <td>@{{ item.obj[420702] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Kristen Protestan</td>
                <td>@{{ item.obj[420703] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Hindu</td>
                <td>@{{ item.obj[420704] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Budha</td>
                    <td></td>
            </tr>
            <tr>
                <td class="border-left"></td>
                <td>@{{ item.obj[420705] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Konghucu</td>
                <td>@{{ item.obj[420706] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Kepercayaan terhadap Tuhan Yang Maha Esa</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
            </tr>
            <tr>
                <td class="border-left">Menjalankan Ibadah</td>
                <td>@{{ item.obj[420708] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Selalu</td>
                <td>@{{ item.obj[420709] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ada
                    Hambatan : @{{ item.obj[420710] ? item.obj[420710] : '' }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
            </tr>

        </table>
        <table width="100%" class="table-border" style="margin-top:-5px">
            <tr class="bordered">
                <td colspan="4">Ekonomi</td>
                <td colspan="2" class="border-left">@{{ item.obj[420711] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} PNS
                </td>
                <td colspan="2">@{{ item.obj[420712] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    TNI/POLRI</td>
                <td colspan="3">@{{ item.obj[420713] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Pegawai Swasta</td>
                <td colspan="2">@{{ item.obj[420714] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Wiraswasta</td>
                <td colspan="3">@{{ item.obj[420715] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Petani/Nelayan</td>
                <td colspan="6">@{{ item.obj[420716] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Lain
                    : @{{ item.obj[420717] ? item.obj[420717] : '' }}</td>
            </tr>
            <tr >
                <td rowspan="6" colspan="4" valign="top" class="border-bottom">Riwayat Kesehatan Pasien</td>
                <td colspan="18" height="35px" valign="top" class="border-left border-bottom">Riwayat Penyakit Sebelumnya : @{{ item.obj[420718] ?
                    item.obj[420718] : '' }}</td>
            </tr>
            <tr>
                <td colspan="18" height="35px" valign="top" class="border-left border-bottom">Riwayat Penyakit Sekarang : @{{ item.obj[420719] ?
                    item.obj[420719] : '' }}</td>
            </tr>
            <tr>
                <td colspan="4" class="border-left">Anak ke : @{{ item.obj[420720] ? item.obj[420720] : '' }}</td>
                <td colspan="4">Dari : @{{ item.obj[420721] ? item.obj[420721] : '' }}</td>
                <td colspan="4">Meninggal : @{{ item.obj[420722] ? item.obj[420722] : '' }}</td>
                <td colspan="6">Abortus : @{{ item.obj[420723] ? item.obj[420723] : '' }}</td>
            </tr>
            <tr>
                <td colspan="6" class="border-left">Lahir : Ateim/Premature/Spontan/Tindakan </td>
                <td colspan="10"> : @{{ item.obj[420725] ? item.obj[420725] : '' }}</td>
                <td colspan="2">Oleh : @{{ item.obj[420726] ? item.obj[420726] : '' }}</td>
            </tr>
            <tr>
                <td colspan="6" class="border-left">BB Lahir : @{{ item.obj[420727] ? item.obj[420727] : '' }} Kg</td>
                <td colspan="6">Panjang Badan Lahir : @{{ item.obj[420728] ? item.obj[420728] : ''
                    }} cm</td>
                <td colspan="6">Lingkar Kepala : @{{ item.obj[420729] ? item.obj[420729] : '' }} cm
                </td>
            </tr>
            <tr class="border-bottom">
                <td colspan="4" class="border-left">Imunisasi: </td>
                <td colspan="2">@{{ item.obj[420731] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} BCG
                </td>
                <td colspan="2">@{{ item.obj[420732] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} DPT
                </td>
                <td colspan="2">@{{ item.obj[420733] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    POLIO</td>
                <td colspan="2">@{{ item.obj[420734] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Campak</td>
                <td colspan="2">@{{ item.obj[420735] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Hepatitis</td>
                <td colspan="4">@{{ item.obj[420736] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} @{{
                    item.obj[420737] ? item.obj[420737] : '' }}</td>
            </tr>
            <tr class="border-bottom">
                <td colspan="4" class="border-bottom">Riwayat Alergi</td>
                <td colspan="2" class="border-left border-bottom">@{{ item.obj[420738] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Tidak </td>
                <td colspan="16">@{{ item.obj[420739] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ya,
                    Sebutkan : @{{ item.obj[420740] ? item.obj[420740] : '' }}</td>
            </tr>
            <tr>
                <td colspan="4" class="border-bottom">Riwayat Penggunaan Obat</td>
                <td colspan="2" class="border-left border-bottom">@{{ item.obj[420741] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Tidak Ada</td>
                <td colspan="16"  class="border-bottom">@{{ item.obj[420742] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ada
                    : @{{ item.obj[420743] ? item.obj[420743] : '' }}</td>
            </tr>
            <tr class="border-bottom">
                <td colspan="4" >Asesmen Nyeri</td>
                <td colspan="4" class="border-left">@{{ item.obj[420744] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Tidak Nyeri</td>
                <td colspan="14">@{{ item.obj[420745] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Nyeri Lanjut ke RM 36</td>
            </tr>
            <tr >
                <td colspan="4" rowspan="3" class="border-bottom">Resiko Jatuh</td>
                <td colspan="14" rowspan="3" class="border-bottom border-left">
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
                <td colspan="2" class="border-left">@{{ item.obj[420749] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ya
                </td>
                <td colspan="2" >@{{ item.obj[420750] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Tidak</td>
            </tr>
            <tr>
                <td colspan="2" class="border-left">@{{ item.obj[420752] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ya
                </td>
                <td colspan="2">@{{ item.obj[420753] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Tidak</td>
            </tr>
            <tr>
                <td colspan="2" class="border-left border-bottom">@{{ item.obj[420755] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ya
                </td>
                <td colspan="2" class="border-bottom">@{{ item.obj[420756] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Tidak</td>
            </tr>
            <!-- lembar ke dua  -->
            <tr>
                <td colspan="4" rowspan="2" class="border-bottom">Asesmen Fungsional</td>
                <td colspan="6" class="border-left">Alat Bantu : @{{ item.obj[420759] ? item.obj[420759] : '' }}</td>
                <td colspan="6" >Prothesa : @{{ item.obj[420760] ? item.obj[420760] : '' }}</td>
                <td colspan="6" >Cacat Tubuh : @{{ item.obj[420761] ? item.obj[420761] : '' }}</td>
            </tr>
            <tr>
                <td colspan="2" class="border-left border-bottom">ADL :</td>
                <td colspan="4" class="border-bottom">@{{ item.obj[420763] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Mandiri</td>
                <td colspan="4" class="border-bottom">@{{ item.obj[420764] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Dibantu</td>
                <td colspan="8" class="border-bottom">@{{ item.obj[420765] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Tergabung Penuh</td>
                   
                    
            </tr>
            <tr class="bordered">
                <td colspan="4" rowspan="8" class="bordered">Risiko Nutrisional</td>
                <td colspan="4" class="border-left">BB : @{{ item.obj[420766] ? item.obj[420766] : '' }}</td>
                <td colspan="6" class="border-left">TB : @{{ item.obj[420767] ? item.obj[420767] : '' }}</td>
                <td colspan="8" class="border-left">Lingkar Kepala : @{{ item.obj[420768] ? item.obj[420768] : '' }}</td>

            </tr>
            <tr style="text-align:center;height:18px" class="bordered">
                <td class="border-left">No</td>
                <td colspan="13" class="border-left">Deskripsi</td>
                <td colspan="4" class="border-left">Jawaban</td>
            </tr>
            <tr class="bordered">
                <td style="text-align:center">1</td>
                <td colspan="13" class="border-left">IMT < 20,5 kg/m2 atau LILA <23,5 cm</td>
                <td colspan="2" class="border-left">@{{ item.obj[420770] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ya</td>
                <td colspan="2" class="border-left">@{{ item.obj[420771] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak</td>
            </tr>
            <tr class="bordered">
                <td style="text-align:center">2</td>
                <td colspan="13" class="border-left">Berat badan berkurang dalam 3 bulan</td>
                <td colspan="2" class="border-left">@{{ item.obj[420773] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ya</td>
                <td colspan="2" class="border-left">@{{ item.obj[420774] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak</td>
            </tr>
            <tr class="bordered">
                <td style="text-align:center">3</td>
                <td colspan="13" class="border-left">Asupan makan menurun dalam 1 minggu terakhir</td>
                <td colspan="2" class="border-left">@{{ item.obj[420776] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ya</td>
                <td colspan="2" class="border-left">@{{ item.obj[420777] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak</td>
            </tr>
            <tr class="bordered">
                <td style="text-align:center">4</td>
                <td colspan="13" class="border-left">Menderita sakit berat, misalnya: kesadaran menurun dan terapi intensif</td>
                <td colspan="2" class="border-left">@{{ item.obj[420779] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ya</td>
                <td colspan="2" class="border-left">@{{ item.obj[420780] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak</td>
            </tr>
            <tr class="bordered">
                <td style="text-align:center">5</td>
                <td colspan="13" class="border-left">Ada gangguan metabolisme (DM, Penyakit Jantung, HT, CKD, TBC Keganasan)
                    Lain – lain : @{{ item.obj[420781] ? item.obj[420781] : '' }}.
                </td>
                <td colspan="2" class="border-left">@{{ item.obj[420782] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ya</td>
                <td colspan="2" class="border-left">@{{ item.obj[420783] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak</td>
            </tr>
            <tr class="bordered">
                <td colspan="18"><strong>Jika terdapat jawaban Ya, maka dilaporkan ke dietisien untuk dilakukan skrining
                        lanjut.</strong></td>
            </tr>
            <tr>
                <td colspan="4" rowspan="3" valign="top" class="border-bottom">Kebutuhan Edukasi</td>
                <td colspan="24" class="border-left">Edukasi awal disampaikan tentang penggunaan
                    obat-obatan, penggunaan peralatan medis, potensi interaksi antara obat, diet dan nutrisi, manajemen
                    nyeri, teknik rehabilitasi, dan cuci tangan yang benar kepada :</td>
            </tr>
            <tr >
                <td colspan="5" class=" border-left">@{{ item.obj[420785] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Pasien</td>
                <td colspan="19" >@{{ item.obj[420786] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Keluarga</td>
            </tr>
            <tr>
                <td colspan="24" class="border-bottom border-left">@{{ item.obj[420787] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Tidak dapat memberikan edukasi kepada pasien atau keluarga,karena : @{{ item.obj[420789] ?
                    item.obj[420789] : '' }}</td>
            </tr>
            <tr>
                <td colspan="4" rowspan="3" class="border-bottom">Perencanaan Pulang</td>
                <td  colspan="4" class="border-bottom border-left">Pasien disarankan pulang: </td>
                <td  colspan="5" class="border-bottom">@{{ item.obj[420791] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Berobat Lanjut di FKTP</td>
                <td  colspan="15" class="border-bottom ">@{{ item.obj[420792] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Poli
                    : @{{ item.obj[420793] ? item.obj[420793] : '' }}</td>
            </tr>
            <tr>
                <td colspan="4" class="border-bottom border-left">Pasien Dirujuk</td>
                <td colspan="5" class="border-bottom">@{{ item.obj[420795] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Rujuk balik ke FKTP</td>
                <td colspan="15" class="border-bottom">@{{ item.obj[420796] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} RS
                </td>
            </tr>
            <tr>
                <td colspan="24" class="border-bottom border-left">Rawat inap, Bagian / Ruang : @{{ item.obj[420799] ?
                    item.obj[420799] : '' }}</td>
               
            </tr>
            
        </table>
        <table width="100%" class="table-border" style="margin-top:-5px">
            <tr class="bordered">
            <tr height="90px">
                <td colspan="4" valign="top">Masalah Keperawatan</td>
                <td colspan="18">@{{ item.obj[420800] ? item.obj[420800] : '' }}</td>
            </tr>
            <tr>
                <td colspan="4" rowspan="4" valign="top">Kriteria Evaluasi <br>Skala Likert (1-5)</td>
                <td colspan="3" style="text-align:center;">1</td>
                <td colspan="4" style="text-align:center;">2</td>
                <td colspan="3" style="text-align:center;">3</td>
                <td colspan="4" style="text-align:center;">4</td>
                <td colspan="4" style="text-align:center;">5</td>
            </tr>
            <tr style="text-align:center;">
                <td colspan="3">@{{ item.obj[420801] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Menurun</td>
                <td colspan="4">@{{ item.obj[420802] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Cukup Menurun</td>
                <td colspan="3">@{{ item.obj[420803] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Sedang</td>
                <td colspan="4">@{{ item.obj[420804] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Cukup Meningkat</td>
                <td colspan="4">@{{ item.obj[420805] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Meningkat</td>
            </tr>
            <tr style="text-align:center;">
                <td colspan="3">@{{ item.obj[420806] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Meningkat</td>
                <td colspan="4">@{{ item.obj[420807] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Cukup Meningkat</td>
                <td colspan="3">@{{ item.obj[420808] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Sedang</td>
                <td colspan="4">@{{ item.obj[420809] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Cukup Menurun</td>
                <td colspan="4">@{{ item.obj[420810] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Menurun</td>
            </tr>
            <tr style="text-align:center;">
                <td colspan="3">@{{ item.obj[420811] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Memburuk</td>
                <td colspan="4">@{{ item.obj[420812] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Cukup Memburuk</td>
                <td colspan="3">@{{ item.obj[420813] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Sedang</td>
                <td colspan="4">@{{ item.obj[420814] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Cukup Membaik</td>
                <td colspan="4">@{{ item.obj[420815] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Membaik</td>
            </tr>
            <tr>
                <td colspan="4" valign="top" rowspan="16">Implementasi/<br>Tindakan Kolaborasi</td>
                <td colspan="2" style="text-align: center;">Tgl/Pukul</td>
                <td colspan="11" style="text-align: center;">Implementas Keperewatan/Tindakan Kolaborasi</td>
                <td colspan="5" style="text-align: center;">Nama dan Tanda Tangan</td>
            </tr>
            <tr>
                <td colspan="2">@{{item.obj[420816] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="11">@{{ item.obj[420817] ? item.obj[420817] : '' }}</td>
                <td colspan="5">@{{ item.obj[420818] ? item.obj[420818] : '' }}</td>
            </tr>
            <tr>
                <td colspan="2">@{{item.obj[420819] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="11">@{{ item.obj[420820] ? item.obj[420820] : '' }}</td>
                <td colspan="5">@{{ item.obj[420821] ? item.obj[420821] : '' }}</td>
            </tr>
            <tr>
                <td colspan="2">@{{item.obj[420822] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="11">@{{ item.obj[420823] ? item.obj[420823] : '' }}</td>
                <td colspan="5">@{{ item.obj[420824] ? item.obj[420824] : '' }}</td>
            </tr>
            <tr>
                <td colspan="2">@{{item.obj[420825] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="11">@{{ item.obj[420826] ? item.obj[420826] : '' }}</td>
                <td colspan="5">@{{ item.obj[420827] ? item.obj[420827] : '' }}</td>
            </tr>
            <tr>
                <td colspan="2">@{{item.obj[420828] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="11">@{{ item.obj[420829] ? item.obj[420829] : '' }}</td>
                <td colspan="5">@{{ item.obj[420830] ? item.obj[420830] : '' }}</td>
            </tr>
            <tr>
                <td colspan="2">@{{item.obj[420831] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="11">@{{ item.obj[420832] ? item.obj[420832] : '' }}</td>
                <td colspan="5">@{{ item.obj[420833] ? item.obj[420833] : '' }}</td>
            </tr>
            <tr>
                <td colspan="2">@{{item.obj[420834] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="11">@{{ item.obj[420835] ? item.obj[420835] : '' }}</td>
                <td colspan="5">@{{ item.obj[420836] ? item.obj[420836] : '' }}</td>
            </tr>
            <tr>
                <td colspan="2">@{{item.obj[420837] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="11">@{{ item.obj[420838] ? item.obj[420838] : '' }}</td>
                <td colspan="5">@{{ item.obj[420839] ? item.obj[420839] : '' }}</td>
            </tr>
            <tr>
                <td colspan="2">@{{item.obj[420840] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="11">@{{ item.obj[420841] ? item.obj[420841] : '' }}</td>
                <td colspan="5">@{{ item.obj[420842] ? item.obj[420842] : '' }}</td>
            </tr>
            <tr>
                <td colspan="2">@{{item.obj[420843] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="11">@{{ item.obj[420844] ? item.obj[420844] : '' }}</td>
                <td colspan="5">@{{ item.obj[420845] ? item.obj[420845] : '' }}</td>
            </tr>
            <tr>
                <td colspan="2">@{{item.obj[420846] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="11">@{{ item.obj[420847] ? item.obj[420847] : '' }}</td>
                <td colspan="5">@{{ item.obj[420848] ? item.obj[420848] : '' }}</td>
            </tr>
            <tr>
                <td colspan="2">@{{item.obj[420849] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="11">@{{ item.obj[420850] ? item.obj[420850] : '' }}</td>
                <td colspan="5">@{{ item.obj[420851] ? item.obj[420851] : '' }}</td>
            </tr>
            <tr>
                <td colspan="2">@{{item.obj[420852] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="11">@{{ item.obj[420853] ? item.obj[420853] : '' }}</td>
                <td colspan="5">@{{ item.obj[420854] ? item.obj[420854] : '' }}</td>
            </tr>
            <tr>
                <td colspan="2">@{{item.obj[420855] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="11">@{{ item.obj[420856] ? item.obj[420856] : '' }}</td>
                <td colspan="5">@{{ item.obj[420857] ? item.obj[420857] : '' }}</td>
            </tr>
            <tr>
                <td colspan="2">@{{item.obj[420858] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
                <td colspan="11">@{{ item.obj[420859] ? item.obj[420859] : '' }}</td>
                <td colspan="5">@{{ item.obj[420860] ? item.obj[420860] : '' }}</td>
            </tr>
            <tr>
                <td style="border:none;border-right:1px solid #000" colspan="11">Bulukumba: @{{item.obj[420861] | toDate
                    | date:'dd MMMM yyyy'}} Pukul : @{{item.obj[420861] | toDate | date:'HH:mm'}} WITA</td>
                <td colspan="11">Tanda Tangan</td>
            </tr>
            <tr>
                <td style="border:none;border-right:1px solid #000" colspan="11" valign="top">Perawat Penanggung Jawab
                    Asuhan : @{{ item.obj[420862] ? item.obj[420862] : '' }}</td>
                <td colspan="11">
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
        };;
        $(document).ready(function () {
           .pri</script>

</html>