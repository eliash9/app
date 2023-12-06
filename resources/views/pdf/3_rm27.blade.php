<!DOCTYPE html>
<html lang="en" ng-app="angularApp">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catatan Pemberian dan Pemantauan Obat Pasien</title>

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body,
        html {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 6pt;
            margin: 10px 10px  5px 5px;
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
            table-layout: fixed;
            width: 100%;
        }

        table tr td {
            border: 1px solid #000;
            border-collapse: collapse;
            padding: .3rem;
            page-break-after: always;
        }

        td input {
            vertical-align: middle;
        }

        .format {
            padding: 2rem;
            page-break-after: always;
        }

        
    </style>
</head>

<body>

    <div class="format">
        <table>
            <tr>
                <td rowspan="4" colspan="2">
                    <figure style="width:80px;margin:0 auto;">
                        @if(stripos(\Request::url(), 'localhost') !== FALSE)
                        <img src="{{ asset('img/logo_only.png') }}" alt="" style="width: 60px;">
                        @else
                        <img src="service/img/logo_only.png" alt="" style="width: 60px;">
                        @endif
                    </figure>
                </td>
                <td rowspan="4" colspan="4" style="text-align:center;width:38%">
                    <strong style="font-size: 7pt">{!! $res['profile']->namalengkap !!}</strong> <br>
                    JL. SERIKAYA NO. 17 BULUKUMBA 92512 <br>
                    TELP : (0413) 81292
                </td>
                <td colspan="9" style="border:none;">No RM</td>
                <td style="border:none;" colspan="4">: {!! $res['d1'][0]->nocm !!}</td>
                <td rowspan="3" style="background:#000;color:#fff;width:100px;text-align:center;font-size:36px">RM</td>
            </tr>
            <tr>
                <td width="30" colspan="9" style="border:none;">Nama Lengkap</td>
                <td style="border:none;" colspan="3">: {!! $res['d1'][0]->namapasien !!}</td>
                <td style="border:none;text-align: right;">{{ $res['d1'][0]->jeniskelamin == 'PEREMPUAN' ? 'P' : 'L' }}
                </td>
            </tr>
            <tr>
                <td width="30" colspan="9" style="border:none;">Tanggal Lahir</td>
                <td style="border:none;" colspan="4">: {!! date('d-m-Y',strtotime( $res['d1'][0]->tgllahir )) !!}</td>
            </tr>
            <tr>
                <td width="30" colspan="9" style="border:none;">NIK</td>
                <td style="border:none;" colspan="4">: {!! $res['d1'][0]->noidentitas !!}</td>
                <td style="text-align:center;font-size:36px">27</td>
            </tr>
            <tr>
                <td colspan="20" style="text-align:center;background: #000;color: #fff;">
                    <h1>CATATAN PEMBERIAN DAN PEMANTAUAN OBAT PASIEN</h1>
                </td>
            </tr>
            <tr>
                <td colspan="20" style="text-align:left">
                    <h2>RUANG RAWAT AWAL : @{{ item.obj[424100] ? item.obj[424100] : '' }}</h2>
                </td>
            </tr>
            <tr style="text-align:center;">
                <td rowspan="3" width="25">No</td>
                <td rowspan="3" width="90">Nama Obat</td>
                <td rowspan="3" width="25">Dosis</td>
                <td rowspan="3" width="25">Rute</td>
                <td rowspan="3" width="5">Tgl Mulai</td>
                <td rowspan="3" width="5">Nama / TTD Dokter</td>
                <td colspan="12">Waktu dan Frekuensi</td>
                <td rowspan="3">Informasi Benar</td>
                <td rowspan="3">Review Farmasi</td>
            </tr>
            <tr style="text-align:center;">
                <td colspan="4">Hari ke</td>
                <td colspan="4">Hari ke</td>
                <td colspan="4">Hari ke</td>
            </tr>
            <tr style="text-align:center;">
                <td>p</td>
                <td>s</td>
                <td>s</td>
                <td>m</td>
                <td>p</td>
                <td>s</td>
                <td>s</td>
                <td>m</td>
                <td>p</td>
                <td>s</td>
                <td>s</td>
                <td>m</td>
            </tr>
            <!-- bagian a -->
            <tr style="background:#000;color:#fff">
                <td colspan="20">
                    <h3>A. RESEP NON PARENTERAL</h3>
                </td>
            </tr>

            @for ($i = 1; $i < 17; $i++) <tr style="height:18px">
                <td rowspan="2" style="text-align:center">{{$i}}</td>
                <td rowspan="2">@{{ item.obj[424101] }}</td>
                <td rowspan="2">@{{ item.obj[424102] }}</td>
                <td rowspan="2">@{{ item.obj[424103] }}</td>
                <td rowspan="2">@{{ item.obj[424104] }}</td>
                <td rowspan="2">@{{ item.obj[424105] }}</td>
                <td colspan="4" style="text-align:center">@{{item.obj[424106] | toDate | date:'dd-MM-yyyy'}}</td>
                <td colspan="4" style="text-align:center">@{{item.obj[424111] | toDate | date:'dd-MM-yyyy'}}</td>
                <td colspan="4" style="text-align:center">@{{item.obj[424116] | toDate | date:'dd-MM-yyyy'}}</td>
                <td rowspan="2">@{{ item.obj[424121] }}</td>
                <td rowspan="2">@{{ item.obj[424122] }}</td>
                </tr>
                <tr>
                    <td>@{{ item.obj[424107] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424108] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424109] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424110] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424112] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424113] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424114] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424115] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424117] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424118] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424119] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424120] ? '&#10004;' : '' }}</td>
                </tr>



                @endfor

                <tr style="background:#000;color:#fff">
                    <td colspan="20"><h3>B. RESEP PARENTERAL</h3></td>
                </tr>
                @for ($i = 1; $i < 12; $i++) <tr style="height:18px">
                <td rowspan="2" style="text-align:center">{{$i}}</td>
                <td rowspan="2">@{{ item.obj[424101] }}</td>
                <td rowspan="2">@{{ item.obj[424102] }}</td>
                <td rowspan="2">@{{ item.obj[424103] }}</td>
                <td rowspan="2">@{{ item.obj[424104] }}</td>
                <td rowspan="2">@{{ item.obj[424105] }}</td>
                <td colspan="4" style="text-align:center">@{{item.obj[424106] | toDate | date:'dd-MM-yyyy'}}</td>
                <td colspan="4" style="text-align:center">@{{item.obj[424111] | toDate | date:'dd-MM-yyyy'}}</td>
                <td colspan="4" style="text-align:center">@{{item.obj[424116] | toDate | date:'dd-MM-yyyy'}}</td>
                <td rowspan="2">@{{ item.obj[424121] }}</td>
                <td rowspan="2">@{{ item.obj[424122] }}</td>
                </tr>
                <tr>
                    <td>@{{ item.obj[424107] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424108] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424109] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424110] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424112] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424113] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424114] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424115] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424117] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424118] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424119] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424120] ? '&#10004;' : '' }}</td>
                </tr>



                @endfor

                <tr style="background:#000;color:#fff">
                    <td colspan="20"><h3>C. CAIRAN INTRAVENA</h3></td>
                </tr>

                @for ($i = 1; $i < 12; $i++) <tr style="height:18px">
                <td rowspan="2" style="text-align:center">{{$i}}</td>
                <td rowspan="2">@{{ item.obj[424101] }}</td>
                <td rowspan="2">@{{ item.obj[424102] }}</td>
                <td rowspan="2">@{{ item.obj[424103] }}</td>
                <td rowspan="2">@{{ item.obj[424104] }}</td>
                <td rowspan="2">@{{ item.obj[424105] }}</td>
                <td colspan="4" style="text-align:center">@{{item.obj[424106] | toDate | date:'dd-MM-yyyy'}}</td>
                <td colspan="4" style="text-align:center">@{{item.obj[424111] | toDate | date:'dd-MM-yyyy'}}</td>
                <td colspan="4" style="text-align:center">@{{item.obj[424116] | toDate | date:'dd-MM-yyyy'}}</td>
                <td rowspan="2">@{{ item.obj[424121] }}</td>
                <td rowspan="2">@{{ item.obj[424122] }}</td>
                </tr>
                <tr>
                    <td>@{{ item.obj[424107] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424108] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424109] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424110] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424112] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424113] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424114] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424115] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424117] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424118] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424119] ? '&#10004;' : '' }}</td>
                    <td>@{{ item.obj[424120] ? '&#10004;' : '' }}</td>
                </tr>



                @endfor
                


        </table>



</body>

</html>