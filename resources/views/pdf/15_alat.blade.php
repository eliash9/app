<!DOCTYPE html>
<html lang="en" ng-app="angularApp">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alat Monitoring CPAP</title>

    <style>
        * {
            padding: 0;
            margin: 10;
            box-sizing: border-box;
        }

        html,body {
            font-family: DejaVu Sans, Arial, Helvetica, sans-serif;
			
        }

        @page {
          
            size: A4 Landscape;
          
           
             
        }

        table {
            page-break-inside: auto;
       
            -fs-table-paginate: paginate;
            border: 1px solid #000;
            border-collapse: collapse;
            table-layout: fixed;
            width:"100%";
        }

        tr {
            page-break-inside: avoid;
            page-break-after: auto;
        }

       

        tr td {
            border: 1px solid #000;
            border-collapse: collapse;
            /* padding:.1rem; */
        }

    

        .text-center {
            text-align: center;
        }

        .text-right {
            text-align: right;
        }

        .bordered {
            border: 1px solid #000;
        }

        .noborder {
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

        table tr td {
            font-size: 10pt;
            text-align: center;
        }

        table tr {
            height: 20pt;
        }

        .bg-dark {
            background: #000;
            color: #fff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: x-large;
            padding: .5rem;
            height: 20pt !important;
        }

        .bg-dark-small {
            background: #000;
            color: #fff;
        }

        .rotate {
            vertical-align: bottom;
            text-align: center;
        }

        #rotate {
            -ms-writing-mode: tb-rl;
            -webkit-writing-mode: vertical-rl;
            writing-mode: vertical-rl;
            transform: rotate(180deg);
            white-space: nowrap;
        }

        .p3 {
            padding: 0.3rem;
        }

        .p2 {
            padding: 0.2rem;
        }
    </style>
</head>

<body >
    @if (!empty($res['d1']))
    <div class="format">
        <table width='100%'>
            <tr height=20 class="noborder">
                <td colspan="8" rowspan="4" class="p3 noborder-tb text-center">
                    @if(stripos(\Request::url(), 'localhost') !== FALSE)
                    <img src="{{ public_path('img/logo_only.png') }}" alt=""
                        style="width: 60px;display:block; margin:auto;">
                    @else
                    <img src="{{ public_path('service/img/logo_only.png') }}" alt=""
                        style="width: 60px;display:block; margin:auto;">
                    @endif
                </td>
                <td colspan="17" rowspan="4" class="noborder-tb text-center" style="font-size:large">
                    <strong>{!! $res['profile']->namalengkap !!}</strong> <br>{!! $res['profile']->alamatlengkap
                    !!}<br>TELP : (0413) 81292
                </td>
                <td colspan="6" class="noborder" style="text-align: left">&nbsp;No. RM </td>
                <td colspan="13" class="noborder" style="text-align: left">&nbsp;
                    : {!!$res['d1'][0]->nocm !!}
                </td>
                <td colspan="5" rowspan="2" class="border-lr bg-dark" style="font-size: xxx-large;text-align:center">RM
                </td>
            </tr>
            <tr class="noborder">
                <td colspan="6" class="noborder" style="text-align: left">&nbsp;Nama Lengkap</td>
                <td colspan="11" class="noborder" style="text-align: left">&nbsp;
                    : {!! $res['d1'][0]->namapasien !!}
                </td>
                <td colspan="2" class="noborder">{!! $res['d1'][0]->jeniskelamin == 'PEREMPUAN' ? '(P)' : '(L)' !!}</td>
            </tr>
            <tr class="noborder">
                <td colspan="6" class="noborder" style="text-align: left">&nbsp;Tanggal Lahir</td>
                <td colspan="13" class="noborder" style="text-align: left">&nbsp;
                    : {!! date('d-m-Y',strtotime($res['d1'][0]->tgllahir )) !!}
                </td>
                <td colspan="5" class="border-lr" rowspan="2" style="font-size: xxx-large;text-align:center">67</td>
            </tr>
            <tr class="noborder">
                <td colspan="6" class="noborder" style="text-align: left">&nbsp;NIK</td>
                <td colspan="11" class="noborder" style="text-align: left">&nbsp;
                    : {!!$res['d1'][0]->noidentitas !!}
                </td>
            </tr>
            <tr class="bordered bg-dark">
                <th colspan="49" height="20pt">ALAT MONITORING CPAP</th>
            </tr>
            <tr>
                <td colspan="9" class="noborder">Tanggal : @{{item.obj[32103929] | toDate | date:'dd MMMM yyyy HH:mm'}}
                </td>
                <td colspan="40" class="noborder text-center">Lengkapi table dibawah setiap 4 jam. Isi dengan angka atau
                    memberi tanda “X” bila sudah dilakukan</td>
            </tr>
            <tr>
                <td colspan="13" class="text-right">Waktu&nbsp;</td>
                <td colspan="3" style="text-align: center">@{{item.obj[32103930] | toDate | date:'HH:mm'}}</td>
                <td colspan="3" style="text-align: center">@{{item.obj[32103931] | toDate | date:'HH:mm'}}</td>
                <td colspan="3" style="text-align: center">@{{item.obj[32103932] | toDate | date:'HH:mm'}}</td>
                <td colspan="3" style="text-align: center">@{{item.obj[32103933] | toDate | date:'HH:mm'}}</td>
                <td colspan="3" style="text-align: center">@{{item.obj[32103934] | toDate | date:'HH:mm'}}</td>
                <td colspan="3" style="text-align: center">@{{item.obj[32103935] | toDate | date:'HH:mm'}}</td>
                <td colspan="3" style="text-align: center">@{{item.obj[32103936] | toDate | date:'HH:mm'}}</td>
                <td colspan="3" style="text-align: center">@{{item.obj[32103937] | toDate | date:'HH:mm'}}</td>
                <td colspan="12" style="text-align: center">Catatan</td>
            </tr>
            <tr>
                <td colspan="13" style="text-align: left">&nbsp;Laju pernapasan</td>
                <td colspan="3">@{{ item.obj[32103938] ? item.obj[32103938] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103939] ? item.obj[32103939] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103940] ? item.obj[32103940] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103941] ? item.obj[32103941] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103942] ? item.obj[32103942] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103943] ? item.obj[32103943] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103944] ? item.obj[32103944] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103945] ? item.obj[32103945] : '' }}</td>
                <td colspan="12">@{{ item.obj[32103946] ? item.obj[32103946] : '' }}</td>
            </tr>
            <tr>
                <td colspan="13" style="text-align: left">&nbsp;Saturasi O2. Bila dibawah target, naikan aliran 1L</td>
                <td colspan="3">@{{ item.obj[32103947] ? item.obj[32103947] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103948] ? item.obj[32103948] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103949] ? item.obj[32103949] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103950] ? item.obj[32103950] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103951] ? item.obj[32103951] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103952] ? item.obj[32103952] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103953] ? item.obj[32103953] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103954] ? item.obj[32103954] : '' }}</td>
                <td colspan="12">@{{ item.obj[32103955] ? item.obj[32103955] : '' }}</td>
            </tr>
            <tr>
                <td colspan="13" style="text-align: left">&nbsp;Nasopharynx suctioned dengan ukuran 8 or 6 Fr</td>
                <td colspan="3">@{{ item.obj[32103956] ? item.obj[32103956] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103957] ? item.obj[32103957] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103958] ? item.obj[32103958] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103959] ? item.obj[32103959] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103960] ? item.obj[32103960] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103961] ? item.obj[32103961] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103962] ? item.obj[32103962] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103963] ? item.obj[32103963] : '' }}</td>
                <td colspan="12">@{{ item.obj[32103964] ? item.obj[32103964] : '' }}</td>
            </tr>
            <tr>
                <td colspan="13" style="text-align: left">&nbsp;Prongs tidak menekan septum hidung</td>
                <td colspan="3">@{{ item.obj[32103965] ? item.obj[32103965] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103966] ? item.obj[32103966] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103967] ? item.obj[32103967] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103968] ? item.obj[32103968] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103969] ? item.obj[32103969] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103970] ? item.obj[32103970] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103971] ? item.obj[32103971] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103972] ? item.obj[32103972] : '' }}</td>
                <td colspan="12">@{{ item.obj[32103973] ? item.obj[32103973] : '' }}</td>
            </tr>
            <tr>
                <td colspan="13" style="text-align: left">&nbsp;Jarak 2 mm antara pangkal prong dan hidung</td>
                <td colspan="3">@{{ item.obj[32103974] ? item.obj[32103974] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103975] ? item.obj[32103975] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103976] ? item.obj[32103976] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103977] ? item.obj[32103977] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103978] ? item.obj[32103978] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103979] ? item.obj[32103979] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103980] ? item.obj[32103980] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103981] ? item.obj[32103981] : '' }}</td>
                <td colspan="12">@{{ item.obj[32103982] ? item.obj[32103982] : '' }}</td>
            </tr>
            <tr>
                <td colspan="13" style="text-align: left">&nbsp;Tidak ada kerusakan kulit sekitar lubang hidung</td>
                <td colspan="3">@{{ item.obj[32103983] ? item.obj[32103983] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103984] ? item.obj[32103984] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103985] ? item.obj[32103985] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103986] ? item.obj[32103986] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103987] ? item.obj[32103987] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103988] ? item.obj[32103988] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103989] ? item.obj[32103989] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103990] ? item.obj[32103990] : '' }}</td>
                <td colspan="12">@{{ item.obj[32103991] ? item.obj[32103991] : '' }}</td>
            </tr>
            <tr>
                <td colspan="13" style="text-align: left">&nbsp;Ubah-ubah posisi bayi supaya bayi terstimulasi</td>
                <td colspan="3">@{{ item.obj[32103992] ? item.obj[32103992] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103993] ? item.obj[32103993] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103994] ? item.obj[32103994] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103995] ? item.obj[32103995] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103996] ? item.obj[32103996] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103997] ? item.obj[32103997] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103998] ? item.obj[32103998] : '' }}</td>
                <td colspan="3">@{{ item.obj[32103999] ? item.obj[32103999] : '' }}</td>
                <td colspan="12">@{{ item.obj[32104000] ? item.obj[32104000] : '' }}</td>
            </tr>
            <tr>
                <td colspan="13" style="text-align: left">&nbsp;Level air dipertahankan pada @{{ item.obj[32104001] ?
                    item.obj[32104001] : '_______' }} cm</td>
                <td colspan="3">@{{ item.obj[32104002] ? item.obj[32104002] : '' }}</td>
                <td colspan="3">@{{ item.obj[32104003] ? item.obj[32104003] : '' }}</td>
                <td colspan="3">@{{ item.obj[32104004] ? item.obj[32104004] : '' }}</td>
                <td colspan="3">@{{ item.obj[32104005] ? item.obj[32104005] : '' }}</td>
                <td colspan="3">@{{ item.obj[32104006] ? item.obj[32104006] : '' }}</td>
                <td colspan="3">@{{ item.obj[32104007] ? item.obj[32104007] : '' }}</td>
                <td colspan="3">@{{ item.obj[32104008] ? item.obj[32104008] : '' }}</td>
                <td colspan="3">@{{ item.obj[32104009] ? item.obj[32104009] : '' }}</td>
                <td colspan="12">@{{ item.obj[32104010] ? item.obj[32104010] : '' }}</td>
            </tr>
            <tr>
                <td colspan="13" style="text-align: left">&nbsp;Selang dibersihkan dari pengembunan</td>
                <td colspan="3">@{{ item.obj[32104011] ? item.obj[32104011] : '' }}</td>
                <td colspan="3">@{{ item.obj[32104012] ? item.obj[32104012] : '' }}</td>
                <td colspan="3">@{{ item.obj[32104013] ? item.obj[32104013] : '' }}</td>
                <td colspan="3">@{{ item.obj[32104014] ? item.obj[32104014] : '' }}</td>
                <td colspan="3">@{{ item.obj[32104015] ? item.obj[32104015] : '' }}</td>
                <td colspan="3">@{{ item.obj[32104016] ? item.obj[32104016] : '' }}</td>
                <td colspan="3">@{{ item.obj[32104017] ? item.obj[32104017] : '' }}</td>
                <td colspan="3">@{{ item.obj[32104018] ? item.obj[32104018] : '' }}</td>
                <td colspan="12">@{{ item.obj[32104019] ? item.obj[32104019] : '' }}</td>
            </tr>
            <tr>
                <td colspan="13" style="text-align: left">&nbsp;Gelembung air</td>
                <td colspan="3">@{{ item.obj[32104020] ? item.obj[32104020] : '' }}</td>
                <td colspan="3">@{{ item.obj[32104021] ? item.obj[32104021] : '' }}</td>
                <td colspan="3">@{{ item.obj[32104022] ? item.obj[32104022] : '' }}</td>
                <td colspan="3">@{{ item.obj[32104023] ? item.obj[32104023] : '' }}</td>
                <td colspan="3">@{{ item.obj[32104024] ? item.obj[32104024] : '' }}</td>
                <td colspan="3">@{{ item.obj[32104025] ? item.obj[32104025] : '' }}</td>
                <td colspan="3">@{{ item.obj[32104026] ? item.obj[32104026] : '' }}</td>
                <td colspan="3">@{{ item.obj[32104027] ? item.obj[32104027] : '' }}</td>
                <td colspan="12">@{{ item.obj[32104028] ? item.obj[32104028] : '' }}</td>
            </tr>
            <tr>
                <td colspan="13" style="text-align: left">&nbsp;Tidak ada kebocoran</td>
                <td colspan="3">@{{ item.obj[32104029] ? item.obj[32104029] : '' }}</td>
                <td colspan="3">@{{ item.obj[32104030] ? item.obj[32104030] : '' }}</td>
                <td colspan="3">@{{ item.obj[32104031] ? item.obj[32104031] : '' }}</td>
                <td colspan="3">@{{ item.obj[32104032] ? item.obj[32104032] : '' }}</td>
                <td colspan="3">@{{ item.obj[32104033] ? item.obj[32104033] : '' }}</td>
                <td colspan="3">@{{ item.obj[32104034] ? item.obj[32104034] : '' }}</td>
                <td colspan="3">@{{ item.obj[32104035] ? item.obj[32104035] : '' }}</td>
                <td colspan="3">@{{ item.obj[32104036] ? item.obj[32104036] : '' }}</td>
                <td colspan="12">@{{ item.obj[32104037] ? item.obj[32104037] : '' }}</td>
            </tr>
            <tr>
                <td colspan="49" style="text-align: left">&nbsp;&nbsp;@{{ item.obj[32104038] ? '[&#10004;]' :
                    '[&nbsp;&nbsp;&nbsp;]' }} Nasal prongs diberikan setiap hari dengan 2% asam asetat atau chlorin</td>
            </tr>
        </table>
    </div>
    @endif

</body>

</html>