<!DOCTYPE html>
<html lang="en" ng-app="angularApp">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bayi Sepsis</title>

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
            page-break-inside: auto;
            table-layout: fixed;
            border-collapse: collapse;

            width: 100%;
        }

        tr,
        td {
            padding: .3rem;
            page-break-inside: avoid;
            page-break-after: auto;
            border: 1px solid #000;
        }


        .noborder {
            padding: .3rem;
            page-break-inside: avoid;
            page-break-after: auto;
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

<body ng-controller="cetakBayiSepsis">
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
            <td style="text-align:center;font-size:36px">65</td>
        </tr>
    </table>
    <table>

        <tr class="bordered bg-dark">
            <th colspan="49" height="20pt">BAYI SEPSIS</th>
        </tr>

        <tr>
            <td colspan="4" class="noborder">Berat Badan</td>
            <td colspan="21" class="noborder">: @{{ item.obj[31100366] ? item.obj[31100366] : '_______________' }} kg
            </td>
            <td colspan="5" class="noborder">Usia Kehamilan</td>
            <td colspan="19" class="noborder">: @{{ item.obj[31100367] ? item.obj[31100367] : '_______________' }}
                minggu</td>
        </tr>
        <tr>
            <td colspan="49">
                - Diagnosis tepat hanya dapat dilakukan dengan kultur darah. <br>
                - Kalau tak akses kultur darah, beri antibiotik selama 48 jam, lalu mengevaluasi kembali<br>
                - Diagnosis banding termasuk infeksi virus, hipoksia, meningitis, bacterial pneumonia, transient
                tachypnea pada bayi baru lahir, dll

            </td>
        </tr>
    </table>
    <table>


        <tr class="border-bt">
            <td style="padding:.5rem" class="noborder" colspan="49">

                (Cek yang sesuai)

                <table width="100%" class="noborder">
                    <tr class="border-lr">
                        <td colspan="22">Faktor Resiko Ibu</td>
                        <td colspan="5" class="border-lr"></td>
                        <td colspan="22">
                            faktor resiko Neonatal
                        </td>
                    </tr>
                    <tr class="border-lr">
                        <td colspan="22">@{{ item.obj[32104039] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Demam
                            pada ibu > 38.0 <sup>0</sup>C</td>
                        <td colspan="5" class="border-lr"></td>
                        <td colspan="22">@{{ item.obj[32104043] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                            Ketuban pecah > 18 jam
                        </td>
                    </tr>
                    <tr class="border-lr">
                        <td colspan="22">@{{ item.obj[32104040] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Air
                            ketuban berbau</td>
                        <td colspan="5" class="border-lr"></td>
                        <td colspan="22">@{{ item.obj[32104044] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                            Kelahiran &lt; 37 minggu
                        </td>
                    </tr>
                    <tr class="border-lr">
                        <td colspan="22">@{{ item.obj[32104041] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Nyeri
                            tekan uterus</td>
                        <td class="border-lr" colspan="5"></td>
                        <td colspan="22">@{{ item.obj[32104045] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                            Denyut jantung janin &gt; 180
                        </td>
                    </tr>
                    <tr class="noborder">
                        <td colspan="22">@{{ item.obj[32104042] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                            Leukosit &gt; 15.000</td>
                        <td colspan="5" class="noborder"></td>
                        <td colspan="22" class="noborder">
                        </td>
                    </tr>
                    <tr class="noborder">
                        <td class="noborder" colspan="49"></td>
                    </tr>
                </table>
                <table class="noborder">
                    <tr class="noborder">
                        <td colspan="49" class="noborder">
                            Tanda Sepsis (tidak bergantung kepada usia bayi) :
                        </td>
                    </tr>
                    <tr class="noborder">
                        <td colspan="5" class="noborder">(lingkari)</td>
                        <td colspan="10" class="noborder">@{{ item.obj[31100820] ? '[&#10004;]' :
                            '[&nbsp;&nbsp;&nbsp;]' }} 36.6>S>37.5</td>
                        <td colspan="12" class="noborder">@{{ item.obj[31100821] ? '[&#10004;]' :
                            '[&nbsp;&nbsp;&nbsp;]' }} Tampak lesu dan sakit</td>
                        <td colspan="22" class="noborder">@{{ item.obj[31100822] ? '[&#10004;]' :
                            '[&nbsp;&nbsp;&nbsp;]' }} Tidak menghisap dengan baik</td>
                    </tr>
                    <tr class="noborder">
                        <td colspan="49" class="noborder">@{{ item.obj[31100823] ? '[&#10004;]' :
                            '[&nbsp;&nbsp;&nbsp;]' }} Jika ada apa pun factor risiko ibu atau setelah dilahirkan
                            apa pun factor risiko neonatal dengan tanda sepsis, terus</td>
                    </tr>
                    <tr class="noborder">
                        <td class="noborder" colspan="49">Indikasi Lain: @{{ item.obj[31100824] ?
                            item.obj[31100824] : '_______________' }}</td>
                    </tr>
                    <tr class="noborder">
                        <td class="noborder" colspan="8">Tanda Vital: @{{ item.obj[31100825] ?
                            item.obj[31100825] : '____' }} <sup>0</sup>C</td>
                        <td class="noborder" colspan="8">DJ: @{{ item.obj[31100826] ? item.obj[31100826] :
                            '____' }} </td>
                        <td class="noborder" colspan="8">RR: @{{ item.obj[31100827] ? item.obj[31100827] :
                            '____' }} </td>
                        <td class="noborder" colspan="12">Saturasi O<sub>2</sub> : @{{ item.obj[31100828] ?
                            item.obj[31100828] : '____' }}</td>
                        <td class="noborder" colspan="13">Komentar</td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>
    <table >

        <tr class="border-lr">
            <td colspan="27" class="br noborder">@{{ item.obj[31100829] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                Keadaan riwayat atau tanda dehidrasi</td>
            <td class="noborder br" colspan="22">Riwayat atau tanda dehidrasi</td>
        </tr>

        <tr class="border-lr">
            <td class="noborder btm" colspan="27">@{{ item.obj[31100830] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Beri
                bayi susu menyusui 15 menit NGT 10cc/kg = @{{ item.obj[31100831] ? item.obj[31100831] : '____' }} cc
                ATAU</td>
            <td class="noborder blf btm" colspan="11">@{{ item.obj[31100835] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} &lt; 2
                kali air seni/hari</td>
            <td class="noborder btm" colspan="11">@{{ item.obj[31100838] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Kurang
                minum</td>
        </tr>
        <tr class="border-lr">
            <td colspan="27" class="br noborder">Bolus NS @{{ item.obj[31100832] ? item.obj[31100832] : '____' }} RL @{{
                item.obj[31100833] ? item.obj[31100833] : '____' }} 10cc/kg = @{{ item.obj[31100834] ?
                item.obj[31100834] : '____' }} cc selama 30 m 1j*</td>
            <td class="noborder blf"colspan="11" >@{{ item.obj[31100836] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]'
                }} Kurang Bergerak</td>
            <td class="noborder btm"colspan="11" class="noborder border-lt">@{{ item.obj[31100839] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]'
                }} Denyut jantung &gt;160</td>
        </tr>
    
        <tr class="btm">
            <td colspan="27" class="br noborder"><small>(*beri bolusperlahan pada bayi &lt; 4 bln untuk menghindari
                    kelebihan cairan)</small></td>
            <td colspan="11" class="noborder border-lt">@{{ item.obj[31100837] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]'
                }} Laju pernapasan &gt; 65</td>
            <td colspan="11" class="noborder border-lt">@{{ item.obj[31100840] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]'
                }} Suhu &gt;36.5</td>
        </tr>
        <tr class="btp">
            <td colspan="27" class="br noborder">
                @{{ item.obj[31100841] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Dapatkan kultur darah sebelum memberi
                antibiotik. Waktu : @{{ item.obj[31100842] ? item.obj[31100842] : '____' }}
            </td>
            <td colspan="22" class="noborder"></td>
        </tr>
        <tr>
            <td colspan="27" class="br noborder">
                @{{ item.obj[31100843] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Bayi ≤ 7 hari. Gentamicin1 5 mg/kg =
                @{{ item.obj[31100844] ? item.obj[31100844] : '.......' }} mg IV/IM tiap @{{ item.obj[31100845] ?
                item.obj[31100845] : '.......' }} jam +
            </td>
        </tr>
        <tr>
            <td colspan="27" class="br noborder">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;≤ 2.0kg: Ampicillin2 50 mg/kg q 12 jam = @{{ item.obj[31100846] ?
                item.obj[31100846] : '.......' }} mg IV/IM q 12 jam
            </td>
            <td colspan="22" class="text-center noborder"><strong>SELANG WAKTU PEMBERIAN GENTAMICIN 5mg/kg1</strong>
            </td>
        </tr>
        <tr>
            <td colspan="49" class="br noborder">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;> 2.0kg: Ampicillin2 50 mg/kg q 8 jam = @{{ item.obj[31100847] ?
                item.obj[31100847] : '.......' }} mg IV/IM q 8 jam
            </td>
        </tr>
        <tr>
            <td colspan="27" class="br noborder">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bayi > 7 hari. Gentamicin1 5 mg/kg = @{{ item.obj[31100848] ?
                item.obj[31100848] : '.......' }} mg IV/IM tiap @{{ item.obj[31100849] ? item.obj[31100849] : '____' }}
                jam +
            </td>
            <td colspan="7" class="noborder text-center"><strong><u>Berat Badan</u></strong></td>
            <td colspan="7" class="noborder text-center"><strong><u>≤ 7 Hari</u></strong></td>
            <td colspan="8" class="noborder text-center"><strong><u>8-30 Hari</u></strong></td>
        </tr>
        <tr>
            <td colspan="27" class="br noborder">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt; 1.2kg: Ampicillin2 50 mg/kg tiap 12 jam = @{{ item.obj[31100848] ?
                item.obj[31100850] : '.......' }}mg IV/IM tiap 12 jam
            </td>
            <td colspan="7" class="noborder text-center">≤ 1200 g</td>
            <td colspan="7" class="noborder text-center">Tiap 48</td>
            <td colspan="8" class="noborder text-center">Tiap 36</td>
        </tr>
        <tr>
            <td colspan="27" class="br noborder">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.2kg-2.0kg: Ampicillin2 50 mg/kg tiap 8 jam = @{{ item.obj[31100851] ?
                item.obj[31100851] : '.......' }} mg IV/IM tiap 8 jam
            </td>
            <td colspan="7" class="noborder text-center">> 1200 g</td>
            <td colspan="7" class="noborder text-center">Tiap 36</td>
            <td colspan="8" class="noborder text-center">Tiap 24</td>
        </tr>
        <tr>
            <td colspan="49" class="br noborder">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;> 2kg: Ampicillin2 50 mg/kg tiap 6 jam = @{{ item.obj[31100852] ?
                item.obj[31100852] : '.......' }} mg IV/IM tiap 6 jam
            </td>
        </tr>
        <tr>
            <td colspan="27" class="br noborder"></td>
            <td colspan="22" class="br noborder">
                <small>
                    <sup>1</sup> RSCM pedoman praktik klinis, Indonesi, 8/13 <br>
                    <sup>2</sup> Gomella, et al, Neonatology, McGraw Hill : 2009, page 733
                </small>
            </td>
        </tr>
        <tr>
            <td colspan="27" class="br noborder">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Waktu dosis pertama diberikan : @{{ item.obj[32110721] ?
                item.obj[32110721] : '.......' }}
            </td>
            <td colspan="22" class="br noborder">

            </td>
        </tr>
        <tr>
            <td colspan="27" class="br noborder">
                @{{ item.obj[31100853] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Lain-lain : @{{ item.obj[31100854] ?
                item.obj[31100854] : '.......' }}
            </td>
            <td colspan="22" class="br noborder"></td>
        </tr>
        <tr class="btp">
            <td colspan="27" class="br noborder">
                @{{ item.obj[31100855] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Pertimbangkan LP bila < 2 bln dan 36.5
                    ≥ S ≥ 38.0 C dan demam tidak spesifik </td>
            <td colspan="22" class="br noborder"></td>
        </tr>
        <tr class="">
            <td colspan="27" class="br noborder">
                @{{ item.obj[31100856] ? item.obj[31100856] : '.......' }} WBC @{{ item.obj[31100857] ?
                item.obj[31100857] : '.......' }} RBC @{{ item.obj[31100858] ? item.obj[31100858] : '.......' }} Protein
            </td>
            <td colspan="22" class="br noborder">
                Nilai normal : WBC < 5 per mikroliter, RBC=0, <br>
                    Glukosa 45-80 mg/dL, Protein 15-45 mg/dL
            </td>
        </tr>
        <tr class="">
            <td colspan="27" class="br noborder">
                @{{ item.obj[31100859] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Kalau WBC > 5 per microliter di CSF,
                obatkan bayi untuk meningitis
            </td>
            <td colspan="22" class="br noborder"></td>
        </tr>
        <tr class="">
            <td colspan="27" class="br noborder">
                Bayi ≤ 7 hari. Gentamicin1 5 mg/kg = @{{ item.obj[31100860] ? item.obj[31100860] : '.......' }} mg IV/IM
                tiap @{{ item.obj[31100861] ? item.obj[31100861] : '.......' }} jam +
            </td>
            <td colspan="22" class="br noborder"></td>
        </tr>
        <tr class="">
            <td colspan="27" class="br noborder">
                ≤ 2.0kg: Ampicillin2 100 mg/kg q 12 jam = @{{ item.obj[31100862] ? item.obj[31100862] : '.......' }} mg
                IV/IM q 12 jam
            </td>
            <td colspan="22" class="br noborder"></td>
        </tr>
        <tr class="">
            <td colspan="27" class="br noborder">
                < 1.2kg: Ampicillin2 100 mg/kg q 8 jam=@{{ item.obj[31100863] ? item.obj[31100863] : '.......' }} mg
                    IV/IM q 8 jam </td>
            <td colspan="22" class="br noborder"></td>
        </tr>
        <tr class="">
            <td colspan="27" class="br noborder">
                Bayi > 7 hari. Gentamicin1 5 mg/kg = @{{ item.obj[31100864] ? item.obj[31100864] : '.......' }} mg IV/IM
                tiap @{{ item.obj[31100865] ? item.obj[31100865] : '.......' }} jam +
            </td>
            <td colspan="22" class="br noborder"></td>
        </tr>
        <tr class="">
            <td colspan="27" class="br noborder">
                < 1.2kg: Ampicillin2 100 mg/kg tiap 12 jam=@{{ item.obj[31100866] ? item.obj[31100866] : '.......' }} mg
                    IV/IM tiap 12 jam </td>
            <td colspan="22" class="br noborder"></td>
        </tr>
        <tr class="">
            <td colspan="27" class="br noborder">
                1.2kg-2.0kg: Ampicillin2 100 mg/kg tiap 8 jam = @{{ item.obj[31100867] ? item.obj[31100867] : '.......'
                }} mg IV/IM tiap 8 jam
            </td>
            <td colspan="22" class="br noborder"></td>
        </tr>
        <tr class="">
            <td colspan="27" class="br noborder">
                > 2kg: Ampicillin2 100 mg/kg tiap 6 jam = @{{ item.obj[31100868] ? item.obj[31100868] : '.......' }} mg
                IV/IM tiap 6 jam
            </td>
            <td colspan="22" class="br noborder"></td>
        </tr>
        <tr class="">
            <td colspan="27" class="br noborder"></td>
            <td colspan="22" class="br noborder"></td>
        </tr>
        <tr class="">
            <td colspan="27" class="br noborder">
                Waktu dosis pertama diberikan : @{{ item.obj[31100869] ? item.obj[31100869] : '.......' }}
            </td>
            <td colspan="22" class="br noborder"></td>
        </tr>
        <tr class="btp">
            <td colspan="49" class="">
                @{{ item.obj[31100870] ? item.obj[31100870] : '.......' }}
            </td>
        </tr>

        <tr class="text-center">
            <td colspan="27" rowspan="2" class="br noborder">
                Tenaga Medis : @{{ item.obj[31100871] ? item.obj[31100871] : '.......' }}
            </td>
            <td colspan="22" rowspan="2" class="noborder">
                Tanggal : @{{item.obj[31100872] | toDate | date:'dd MMMM yyyy'}} Jam: @{{item.obj[31100872] | toDate |
                date:'HH:mm'}}
            </td>
        </tr>

        <tr>
            {{-- <td colspan="49" class="">
                @{{ item.obj[31100870] ? item.obj[31100870] : '.......' }}
            </td> --}}
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
                BB : @{{ item.obj[31100875] ? item.obj[31100875] : '.......' }} kg
            </td>
        </tr>
        <tr>
            <td colspan="12" class="noborder">

            </td>
            <td colspan="37" class="noborder">

            </td>
        </tr>
        <tr>
            <td colspan="10" style="text-align:center"><b>Tanggal dan Waktu</b></td>
            <td colspan="39" style="text-align:center"><b>Keterangan</b></td>
        </tr>
        <tr>
            <td colspan="10" style="text-align:center">@{{item.obj[31100876] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
            <td colspan="39" style="text-align:center">@{{ item.obj[31100877] ? item.obj[31100877] : '' }}</td>
        </tr>
        <tr>
            <td colspan="10" style="text-align:center">@{{item.obj[31100878] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
            <td colspan="39" style="text-align:center">@{{ item.obj[31100879] ? item.obj[31100879] : '' }}</td>
        </tr>
        <tr>
            <td colspan="10" style="text-align:center">@{{item.obj[31100880] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
            <td colspan="39" style="text-align:center">@{{ item.obj[31100881] ? item.obj[31100881] : '' }}</td>
        </tr>
        <tr>
            <td colspan="10" style="text-align:center">@{{item.obj[31100882] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
            <td colspan="39" style="text-align:center">@{{ item.obj[31100883] ? item.obj[31100883] : '' }}</td>
        </tr>
        <tr>
            <td colspan="10" style="text-align:center">@{{item.obj[31100884] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
            <td colspan="39" style="text-align:center">@{{ item.obj[31100885] ? item.obj[31100885] : '' }}</td>
        </tr>
        <tr>
            <td colspan="10" style="text-align:center">@{{item.obj[31100886] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
            <td colspan="39" style="text-align:center">@{{ item.obj[31100887] ? item.obj[31100887] : '' }}</td>
        </tr>
        <tr>
            <td colspan="10" style="text-align:center">@{{item.obj[31100888] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
            <td colspan="39" style="text-align:center">@{{ item.obj[31100889] ? item.obj[31100889] : '' }}</td>
        </tr>
        <tr>
            <td colspan="10" style="text-align:center">@{{item.obj[31100890] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
            <td colspan="39" style="text-align:center">@{{ item.obj[31100891] ? item.obj[31100891] : '' }}</td>
        </tr>
        <tr>
            <td colspan="10" style="text-align:center">@{{item.obj[31100892] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
            <td colspan="39" style="text-align:center">@{{ item.obj[31100893] ? item.obj[31100893] : '' }}</td>
        </tr>
        <tr>
            <td colspan="10" style="text-align:center">@{{item.obj[31100894] | toDate | date:'dd MMMM yyyy HH:mm'}}</td>
            <td colspan="39" style="text-align:center">@{{ item.obj[31100895] ? item.obj[31100895] : '' }}</td>
        </tr>
    </table>
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

    angular.controller('cetakBayiSepsis', function ($scope, $http, httpService) {
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

    // var diagnose_pasca_operatif = $scope.item.obj[31100543].replace(/(?:\r\n|\r|\n)/g, ', ');

    // $scope.item.obj['diagnose_pasca_operatif'] = diagnose_pasca_operatif;

    var dokter = $scope.item.obj[31100446];
    if (dokter != undefined) {
        jQuery('#qrcodeDokter').qrcode({
            width: 100,
            height: 100,
            text: "Tanda Tangan Digital Oleh " + dokter
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