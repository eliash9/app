<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asesmen Awal Medis Rawat Jalan</title>


    <style>
        html,
        body {
           
            box-sizing: border-box;
            font-size: 9pt;
        }

        @page {
            size: A4;

        }

        table {

            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
        }

        tr,
        td {
            border: 1px solid #000;

            padding: .3rem;
        }

        td input {
            vertical-align: middle;
        }

        .format {
            padding: 1rem;
        }
    </style>
</head>

<body ng-controller="cetakAsesmenMedisAwalRajal">
    <div class="format">

        <table>
            <tr style="border-bottom:none;">
                <td colspan="2" rowspan="4" >     
                <center><img src="{{ $image }}" alt="" style="height: 70px; width:60px;"></center>
                    </td>
                <td colspan="4" rowspan="4" style="text-align:center;"> <strong style="font-size: 7pt;text-align:center;">{!! $res['profile']->namalengkap !!}</strong> <br>
                            JL. SERIKAYA NO. 17 BULUKUMBA 92512 <br>
                            TELP : (0413) 81292</td>
                            <td style="border:none;">NO. RM</td>
                <td style="border:none;" colspan="2">: {!! $res['d'][0]->nocm !!}</td>
                <td rowspan="2" style="background:#000;color:#fff;width:none20px;text-align:center;font-size:36px">RM
                </td>
            </tr>
            <tr style="border:none;">
            <td style="border:none;">NAMA LENGKAP</td>
                <td style="border:none;" colspan="2">: {!! $res['d'][0]->namapasien !!}</td>
            </tr>
            <tr style="border:none;">
            <td style="border:none;">TANGGAL LAHIR</td>
                <td style="border:none;" colspan="2">: {!! date('d-m-Y',strtotime( $res['d'][0]->tgllahir )) !!}</td>
        
                <td rowspan="2" style="text-align:center;font-size:36px">04</td>
                
            </tr>
            <tr style="border:none;">
            <td  style="border:none;">NIK</td>
                <td style="border:none;" colspan="2">: {!! $res['d'][0]->noidentitas !!}</td>
               
            </tr>

            

            <tr>
                <td colspan="10" style="text-align:center">
                <strong style="font-size: 18pt;text-align:center;">ASESMEN AWAL MEDIS RAWAT JALAN</strong>
                </td>
            </tr>
            <tr>
                <td style="border:none" colspan='3'>Poli : @{{ item.obj[421299] ? item.obj[421299] : '.....' }}</td>
                <td style="border:none" colspan='4'>Tanggal Kunjungan : @{{ item.obj[421300] | toDate |
                    date:'dd-MM-yyyy' }}</td>
                <td style="border:none" colspan='3'>Pukul : @{{ item.obj[421300] | toDate | date:'HH:mm' }}</td>
            </tr>

            <tr>
                <td width='25px' colspan='2' valign="top" style="height:40px">Keluhan Saat ini</td>
                <td colspan="8">@{{ item.obj[421301] ? item.obj[421301] : '' }}</td>
            </tr>
            <tr style="border-bottom:1px solid #000">
                <td rowspan="2" colspan='2' valign="top">Status Fisik</td>
                <td colspan='2' style="border:none;">TD : @{{ item.obj[421302] ? item.obj[421302] : '.....' }} mmHg</td>
                <td colspan='2' style="border:none">Nadi : @{{ item.obj[421303] ? item.obj[421303] : '.....' }} x/mnt
                </td>
                <td colspan='2' style="border:none">Suhu : @{{ item.obj[421304] ? item.obj[421304] : '.....' }} &#176;C
                </td>
                <td colspan='2' style="border:none">Nafas : @{{ item.obj[421305] ? item.obj[421305] : '.....' }} x/mnt
                </td>
            </tr>
            <tr>
                <td colspan="8" style="border-bottom:1px solid #000">Keadaan Umum : @{{ item.obj[421307] ?
                    item.obj[421307] : '' }}</td>
            </tr>



            <tr>
                <td rowspan='4' valign="top" colspan='2'>Bio-Psiko-Sosio-Spiritual</td>
                <td style='border:none' colspan="2">Masalah Psikologi</td>
                <td style='border:none'>: @{{ item.obj[421309] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak</td>
                <td style='border:none' colspan="5">: @{{ item.obj[421310] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Ya, Sebutkan @{{ item.obj[421311] ? item.obj[421311] : '.......................' }}
                </td>
            </tr>
            <tr>
                <td style='border:none' colspan="2">Masalah Sosial</td>
                <td style='border:none'>: @{{ item.obj[421313] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak</td>
                <td style='border:none' colspan="5">: @{{ item.obj[421314] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Ya, Sebutkan @{{ item.obj[421315] ? item.obj[421315] : '.......................' }}
                </td>
            </tr>
            <tr>
                <td style='border:none' colspan="2">Masalah Cultural/bahasa</td>
                <td style='border:none'>: @{{ item.obj[421317] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak</td>
                <td style='border:none' colspan="5">: @{{ item.obj[421318] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Ya, Sebutkan @{{ item.obj[421319] ? item.obj[421319] : '.......................' }}
                </td>
            </tr>
            <tr>
                <td style='border:none' colspan="2">Masalah Spiritual</td>
                <td style='border:none'>: @{{ item.obj[421321] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak</td>
                <td style='border:none' colspan="5">: @{{ item.obj[421322] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Ya, Sebutkan @{{ item.obj[421323] ? item.obj[421323] : '.......................' }}
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
                        @{{ item.obj[421329] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Lain-lain @{{ item.obj[421330] ?
                        item.obj[421330] : '...............' }}
                    </div>
                </td>
            </tr>

            <tr>
                <td rowspan="2" colspan='2'>Riwayat Kesehatan Pasien</td>
                <td colspan='8' style="height:40px">Riwayat Penyakit Sebelumnya:@{{ item.obj[421331] ? item.obj[421331]
                    : '' }}</td>
            </tr>
            <tr>
                <td colspan=8 style="height:40px">Riwayat Penyakit Sekarang: @{{ item.obj[421333] ? item.obj[421333] :
                    '' }}</td>
            </tr>
            <tr style='border:1px solid #000'>
                <td colspan=2>Riwayat Alergi</td>
                <td style="border:none;">@{{ item.obj[421334] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak</td>
                <td style="border:none;" colspan="7">@{{ item.obj[421335] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Ada,
                    Sebutkan : @{{ item.obj[421336] ? item.obj[421336] : '.......' }}</td>
            </tr>
            <tr style='border:1px solid #000'>
                <td colspan=2>Riwayat Penggunaan Obat</td>
                <td style="border:none;">@{{ item.obj[421337] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak</td>
                <td style="border:none;" colspan="7">@{{ item.obj[421338] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Ada, : @{{ item.obj[421339] ? item.obj[421339] : '.......' }}</td>
            </tr>
            <tr style='border:1px solid #000'>
                <td colspan=2>Asesmen Nyeri</td>
                <td style="border:none;">@{{ item.obj[421340] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak Nyeri
                </td>
                <td style="border:none;" colspan="7">@{{ item.obj[421341] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Nyeri, Menggunakan metode : @{{ item.obj[421342] ? item.obj[421342] : '.......' }}</td>
            </tr>
            <tr style='border:1px solid #000'>
                <td colspan=2>Resiko Jatuh</td>
                <td style="border:none;">@{{ item.obj[421343] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Tidak</td>
                <td style="border:none;" colspan="7">@{{ item.obj[421344] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ya,
                    : @{{ item.obj[421345] ? item.obj[421345] : '.......' }}</td>
            </tr>
            <tr style='border:1px solid #000;height:0px'>
                <td rowspan="2" colspan='2' valign="top">Asesmen Fungsional</td>
                <td colspan='2' style="border:none;">Alat bantu : @{{ item.obj[421346] ? item.obj[421346] : '.....' }}
                </td>
                <td colspan='3' style="border:none">Protehesa : @{{ item.obj[421347] ? item.obj[421347] : '.....' }}
                </td>
                <td colspan='3' style="border:none">Cacat tubuh : @{{ item.obj[421348] ? item.obj[421348] : '.....' }}
                </td>
            </tr>
            <tr style='border:1px solid #000;height:0px'>
                <td colspan='2' style="border:none;">ADL : </td>
                <td style="border:none;" colspan='2'>@{{ item.obj[421350] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Mandiri</td>
                <td style="border:none;" colspan='2'>@{{ item.obj[421351] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Dibantu</td>
                <td style="border:none;" colspan='2'>@{{ item.obj[421352] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Tergantung
                    Penuh</td>
            </tr>

            <tr style='border:1px solid #000'>
                <td colspan='2'>Risiko Nutrisional</td>
                <td style="border:none;" colspan='2'>@{{ item.obj[421353] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Tidak</td>
                <td style="border:none;" colspan='6'>@{{ item.obj[421354] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ya,
                    : @{{
                    item.obj[421355] ? item.obj[421355] : '.......' }}
                </td>
            </tr>
            <tr style='border:1px solid #000'>
                <td colspan=2>Kebutuhan Edukasi</td>
                <td style="border:none;" colspan='2'>@{{ item.obj[421356] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Tidak</td>
                <td style="border:none;" colspan='6'>@{{ item.obj[421357] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }} Ya,
                    : @{{
                    item.obj[421358] ? item.obj[421358] : '.......' }}
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
                <td colspan='8' valign="top" style="height:40px">Diagnostik : @{{ item.obj[421361] ? item.obj[421361] :
                    '' }}</td>
            </tr>
            <tr>
                <td colspan=8 valign="top" style="height:40px">Terapi : @{{ item.obj[421363] ? item.obj[421363] : '' }}
                </td>
            </tr>
            <tr>
                <td colspan=8 valign="top" style="height:40px">Konsul : @{{ item.obj[421365] ? item.obj[421365] : '' }}
                </td>
            </tr>
            <tr style='border:1px solid #000;'>
                <td colspan='2' valign="top">Perencanaan Pulang</td>
                <td style="border:none;" colspan='2'>@{{ item.obj[421366] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Rujuk Balik
                </td>
                <td style="border:none;" colspan='2'>@{{ item.obj[421367] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Rawat Inap</td>
                <td style="border:none;" colspan='2'>@{{ item.obj[421368] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Pulang</td>
                <td style="border:none;" colspan='2'>@{{ item.obj[421369] ? '[&#10004;]' : '[&nbsp;&nbsp;&nbsp;]' }}
                    Rujuk Ke RS :
                    @{{ item.obj[421370] ? item.obj[421370] : '....' }}</td>
            </tr>
            <tr style="height:100px">
                <td colspan=5 valign="top">
                    Dokter Penanggung Jawab Pelayanan : @{{ item.obj[421371] }}
                </td>
                <td colspan=5 valign="top">Tanda Tangan<div id="qrcodeDPJP" style="text-align: center"></div>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>