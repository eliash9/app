<!DOCTYPE html>
<html lang="en" ng-app="angularApp">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lembar Penggunaan Ventilator</title>

    <style>
        @page {
            size: auto;
            size: A4 portrait;
        }

        html,
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 9pt;

        }

        table {
            page-break-inside: auto;
            table-layout: fixed;
            border-collapse: collapse;
            padding: .3rem;
        }

        tr,td {
            padding: .3rem;
            page-break-inside: avoid;
            page-break-after: auto;
        }
    </style>
</head>

<body ng-controller="cetakLembarPenggunaanVentilator">
    <table width="100%" border="1">
        <thead>
            <tr>
                <td colspan="2">
                    <strong>{!! $res['profile']->namalengkap !!}</strong><br>
                    {!! $res['profile']->alamatlengkap !!}<br>TELP : (0413) 81292

                </td>
                <td rowspan="2">
                    Nomor RM : {!! $res['d'][0]->nocm !!} <br>
                    Nama Lengkap : {!! $res['d'][0]->namapasien !!} {!! $res['d'][0]->jeniskelamin == 'PEREMPUAN' ?
                    '(P)' : '(L)' !!}<br>
                    Tanggal Lahior : {!! date('d-m-Y',strtotime( $res['d'][0]->tgllahir )) !!}

                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;font-size:16pt;"><strong>LEMBAR PENGGUNAAN VENTILATOR</strong>
                </td>
            </tr>
        </thead>
    </table>
    <br>


    <table width="100%" border="1">
        <tr style="text-align: center">
            <td width="5%"><b>NO</b></td>
            <td><b>TGL/JAM PEMASANGAN</b></td>
            <td><b>TGL/JAM SETELAH PEMASANGAN</b></td>
            <td><b>JUMLAH JAM PEMASANGAN</b></td>
            <td><b>NAMA TINDAKAN</b></td>
        </tr>
        <tr>
            <td style="text-align: center">1</td>
            <td>@{{item.obj[32110722] | toDate | date:'dd MMMM yyyy'}}</td>
            <td>@{{item.obj[32110723] | toDate | date:'dd MMMM yyyy'}}</td>
            <td>@{{ item.obj[32110724] ? item.obj[32110724] : '' }}</td>
            <td>@{{ item.obj[32110725] ? item.obj[32110725] : '' }}</td>
        </tr>
        <tr>
            <td style="text-align: center">2</td>
            <td>@{{item.obj[32110726] | toDate | date:'dd MMMM yyyy'}}</td>
            <td>@{{item.obj[32110727] | toDate | date:'dd MMMM yyyy'}}</td>
            <td>@{{ item.obj[32110728] ? item.obj[32110728] : '' }}</td>
            <td>@{{ item.obj[32110729] ? item.obj[32110729] : '' }}</td>
        </tr>
        <tr>
            <td style="text-align: center">3</td>
            <td>@{{item.obj[32110730] | toDate | date:'dd MMMM yyyy'}}</td>
            <td>@{{item.obj[32110731] | toDate | date:'dd MMMM yyyy'}}</td>
            <td>@{{ item.obj[32110732] ? item.obj[32110732] : '' }}</td>
            <td>@{{ item.obj[32110733] ? item.obj[32110733] : '' }}</td>
        </tr>
        <tr>
            <td style="text-align: center">4</td>
            <td>@{{item.obj[32110734] | toDate | date:'dd MMMM yyyy'}}</td>
            <td>@{{item.obj[32110735] | toDate | date:'dd MMMM yyyy'}}</td>
            <td>@{{ item.obj[32110736] ? item.obj[32110736] : '' }}</td>
            <td>@{{ item.obj[32110737] ? item.obj[32110737] : '' }}</td>
        </tr>
        <tr>
            <td style="text-align: center">5</td>
            <td>@{{item.obj[32110738] | toDate | date:'dd MMMM yyyy'}}</td>
            <td>@{{item.obj[32110739] | toDate | date:'dd MMMM yyyy'}}</td>
            <td>@{{ item.obj[32110740] ? item.obj[32110740] : '' }}</td>
            <td>@{{ item.obj[32110741] ? item.obj[32110741] : '' }}</td>
        </tr>
        <tr>
            <td style="text-align: center">6</td>
            <td>@{{item.obj[32110742] | toDate | date:'dd MMMM yyyy'}}</td>
            <td>@{{item.obj[32110743] | toDate | date:'dd MMMM yyyy'}}</td>
            <td>@{{ item.obj[32110744] ? item.obj[32110744] : '' }}</td>
            <td>@{{ item.obj[32110745] ? item.obj[32110745] : '' }}</td>
        </tr>
        <tr>
            <td style="text-align: center">7</td>
            <td>@{{item.obj[32110746] | toDate | date:'dd MMMM yyyy'}}</td>
            <td>@{{item.obj[32110747] | toDate | date:'dd MMMM yyyy'}}</td>
            <td>@{{ item.obj[32110748] ? item.obj[32110748] : '' }}</td>
            <td>@{{ item.obj[32110749] ? item.obj[32110749] : '' }}</td>
        </tr>
        <tr>
            <td style="text-align: center">8</td>
            <td>@{{item.obj[32110750] | toDate | date:'dd MMMM yyyy'}}</td>
            <td>@{{item.obj[32110751] | toDate | date:'dd MMMM yyyy'}}</td>
            <td>@{{ item.obj[32110752] ? item.obj[32110752] : '' }}</td>
            <td>@{{ item.obj[32110753] ? item.obj[32110753] : '' }}</td>
        </tr>
        <tr>
            <td style="text-align: center">9</td>
            <td>@{{item.obj[32110754] | toDate | date:'dd MMMM yyyy'}}</td>
            <td>@{{item.obj[32110755] | toDate | date:'dd MMMM yyyy'}}</td>
            <td>@{{ item.obj[32110756] ? item.obj[32110756] : '' }}</td>
            <td>@{{ item.obj[32110757] ? item.obj[32110757] : '' }}</td>
        </tr>
        <tr>
            <td style="text-align: center">10</td>
            <td>@{{item.obj[32110758] | toDate | date:'dd MMMM yyyy'}}</td>
            <td>@{{item.obj[32110759] | toDate | date:'dd MMMM yyyy'}}</td>
            <td>@{{ item.obj[32110760] ? item.obj[32110760] : '' }}</td>
            <td>@{{ item.obj[32110761] ? item.obj[32110761] : '' }}</td>
        </tr>
        <tr>
            <td style="text-align: center">11</td>
            <td>@{{item.obj[32110762] | toDate | date:'dd MMMM yyyy'}}</td>
            <td>@{{item.obj[32110763] | toDate | date:'dd MMMM yyyy'}}</td>
            <td>@{{ item.obj[32110764] ? item.obj[32110764] : '' }}</td>
            <td>@{{ item.obj[32110765] ? item.obj[32110765] : '' }}</td>
        </tr>
        <tr>
            <td style="text-align: center">12</td>
            <td>@{{item.obj[32110766] | toDate | date:'dd MMMM yyyy'}}</td>
            <td>@{{item.obj[32110767] | toDate | date:'dd MMMM yyyy'}}</td>
            <td>@{{ item.obj[32110768] ? item.obj[32110768] : '' }}</td>
            <td>@{{ item.obj[32110769] ? item.obj[32110769] : '' }}</td>
        </tr>
        <tr>
            <td style="text-align: center">13</td>
            <td>@{{item.obj[32110770] | toDate | date:'dd MMMM yyyy'}}</td>
            <td>@{{item.obj[32110771] | toDate | date:'dd MMMM yyyy'}}</td>
            <td>@{{ item.obj[32110772] ? item.obj[32110772] : '' }}</td>
            <td>@{{ item.obj[32110773] ? item.obj[32110773] : '' }}</td>
        </tr>
        <tr>
            <td style="text-align: center">14</td>
            <td>@{{item.obj[32110774] | toDate | date:'dd MMMM yyyy'}}</td>
            <td>@{{item.obj[32110775] | toDate | date:'dd MMMM yyyy'}}</td>
            <td>@{{ item.obj[32110776] ? item.obj[32110776] : '' }}</td>
            <td>@{{ item.obj[32110777] ? item.obj[32110777] : '' }}</td>
        </tr>
        <tr>
            <td style="text-align: center">15</td>
            <td>@{{item.obj[32110778] | toDate | date:'dd MMMM yyyy'}}</td>
            <td>@{{item.obj[32110779] | toDate | date:'dd MMMM yyyy'}}</td>
            <td>@{{ item.obj[32110780] ? item.obj[32110780] : '' }}</td>
            <td>@{{ item.obj[32110781] ? item.obj[32110781] : '' }}</td>
        </tr>
    </table>
    <br>
    <table width="100%" style="table-layout:fixed;border:none">
       
        <tr style="text-align: center;">
            <td colspan="4" style="border:none">DPJP</td>
            <td style="border:none"></td>
            <td colspan="4" style="border:none">RM 36 LT</td>
        </tr>
        <tr style="text-align: center;">
            <td colspan="4" valign="bottom" style="border:none">
                <div id="qrcodePetugas1" style="text-align: center">
            </td>
            <td style="border:none"></td>
            <td colspan="4" valign="bottom" style="border:none">
                <div id="qrcodePetugas2" style="text-align: center">
            </td>
        </tr>
        <tr style="text-align: center;">
            <td colspan="4" valign="bottom" style="border:none">@{{ item.obj[32110782] ? item.obj[32110782] :
                '___________________' }}</td>
        </tr>

    </table>
</body>
<script type="text/javascript">
    var baseUrl =
          on_encode(url('/'))!!}
   var angular = angular.module('angularApp', [], function ($interpolateProvider) {
               eProvider.startSymbol('@{{');
        $in        vider.endSymbol('}}');
    }).factory(    vice', function ($http, $q) {
        return {
          t: functi                       // $("#show                             var deffer = $q                      $http.get(baseUrl +                              headers: {
                            -Type': 'ap                                 }
                }).then(f                    re                          deffer.resolve(response);
                             ading").hide()
                               llback(response) {
                         ject(response);
                    //                    )
                });
                       er.promise;
            },
                  ang                akLembarPenggunaanVenti             ($        ,     ice{
        $scope.item = {
            obj: [],
            obj2: []
        }
        var dataLoad = {!! json_encode($res['d'])!!
    };
    for (var i = 0; i <= dataLoad.length - 1; i++) {
        if (dataLoad[i].emrdfk ==311
    002             continue;
        }
        if (dataLoad        "t extbox") {
            $('#id_'  +            dfk).html(        va             $scope.item.obj[dataLoad[i].emrd            ].value
          }
        if (dataoad[i].type == "che                  var chekedd = false
            if (dataLoad[i].va        {
            var chekedd = true
            }
             e.item.obj[dataLoad[            kedd
        }
        if (dataL                o") {
            $            at             = dataLoad[i].value

        }

        if (d        yp        me") {
            $('#id_' + dataL            tml(dataLoad[i].value)
            $scope.item.obj[dataLd        = t        ue
        }
        if (dataLoad[i].t            
              $scope.item.obj[dataLad[i].emrdfk] = dat                   }
        if (dataLoad[i].type == "date") {
             e.        aLoad[i].emrdfk] = dataLoad[i].val                  if (dataLoad[i].type == "checkboxtextbox") {
             e.        aLoad[i].emrdfk] = dataLoad[i].val            scope.item.obj2[dataLoad[i].emrdfk] = true
        }
           aLd        "textarea") {
            $('#id_' + dataLoad            (dataLoad[i].value)
            $scope.item.obj[dataLoad            taLoad[i].value
        }
        if (dataLo        =         {

            var str = dataLoad[i].v             if (str   != null) {
               var res = str.spli                     $scope.item.obj[dataLoad[i].emrdfk] = res[1]
                    ataLoad[i].emrdfk).html(res[1])
                       if (dataLoad[i].type ==                         var  .v                 res = str.split("~");

  m                dfk + "" + 1] = res[0]
            $scope.ite                rdfk] =  r es[1]
            $('#id'+ dataLo            ml                     if (dataLoad[i].emrdfk == '423816')             cope.hariTgl = dataLoad[i].v                    if (dataLoad[i].em9               $scope.jamPeriksa = dataLoad[i] . va l ue
        }            taLoad[i].emrdfk == '2000002354') {
                      dataLoa d [i].value
        }
      if (dato         ='         {
            $scope.tgl2 = dataLad[i            }
        if (dataLoad[i].emrdfk ==        ')
        $scope.tgl3 = dataLoad[i].value
       }
             oad[i].emrdfk == '2000002363') {
             e.l        [i].value
        }
        if (dataLod[i]            002366') {
            $scope.tg        d[             }
        if (dataLoad[i].emrdfk = '2                      $scope.tgl6 = dataLoad                    if (dataLoad[i].emrdfk == '200000237') {            ope.tgl7 = dataLoad[i].value
                     d[i].emrdfk == '2000002375') {
                       taLoad[i].value
        }
              ad        = '2000002378') {
            $scope.tl9 =            ue
        }
        if (dataLoa        ==        ') {
            $scope.tgl10 = dataLod[i]            
        if (dataLoad[i].emrdfk         84             $scope.tgl11 = dataLoad[i].value
                (dataLoad[i].emrdfk == '20000023                  tgl12 = dataLoad[i].value
        }
                  .emrdfk == '2000002390') {
             e.        Load[i].value
        }
        if (daaLoa            2000002393') {
            $scop        ta        e
        }
        if (dataLoad[i].emdfk              {
            $scope.tgl15 = dat        ue                if (dataLoad[i].emrdfk == '2000024               $scope.pukul2 = dataLoad[i].va        }
        ope.tglemr = dataLoad[i].tgl
    }
   // v            ini = $scope.item.obj[422203].rep        n|         ');

    // $scope.item.obj['keluhan_aat_            saat_ini;

    var petugas1 = $sc        [3           if (petugas1 != undefined) {
       jQu            gas1').qrcode({
            width                   100,
            text: "Tanda Tangan igit            gas1
        });
    }
        
         gut        tion () {
        return function (ites) {            (items != null) {
                        ati               }
        };
    });
        nt).ready(function () {
        window.print();
    });
</script>

</html>