<!DOCTYPE html>
<html lang="en" ng-app="angularApp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skrining Gizi Pada Pasien Anak</title>
    @if (stripos(\Request::url(), 'localhost') !== false)
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/jquery.qr-code.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/qrcode/src/jquery.qrcode.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/qrcode/src/qrcode.js') }}"></script>
        {{-- <link href="{{ asset('css/style.css') }}" rel="stylesheet"> --}}
        <!-- angular -->
        <script src="{{ asset('js/angular/angular.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/angular/angular-route.min.js') }}" type="text/javascript"></script>
        <script type="text/javascript" src="{{ asset('js/angular/angular-animate.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/angular/angular-aria.min.js') }}"></script>
        <script src="{{ asset('js/angular/angular-material.js') }}" type="text/javascript"></script>
    @else
        <script src="{{ asset('service/js/jquery.min.js') }}"></script>
        <script src="{{ asset('service/js/jquery.qr-code.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/qrcode/src/jquery.qrcode.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/qrcode/src/qrcode.js') }}"></script>
        {{-- <link href="{{ asset('service/css/style.css') }}" rel="stylesheet"> --}}
        <!-- angular -->
        <script src="{{ asset('service/js/angular/angular.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('service/js/angular/angular-route.min.js') }}" type="text/javascript"></script>
        <script type="text/javascript" src="{{ asset('service/js/angular/angular-animate.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('service/js/angular/angular-aria.min.js') }}"></script>
        <script src="{{ asset('service/js/angular/angular-material.js') }}" type="text/javascript"></script>
    @endif
    <style>
        *{
            padding:0;
            margin:0;
            box-sizing:border-box;
        }
        body{
            width:210mm;
            height:297mm;
            margin-top:250mm;
            margin-bottom:250mm;
            margin-left:250mm;
            margin-right:250mm;
            margin:0 auto; 
        }
        @page{
            size: A4;
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
        img{
            width:70%;
            height:70%;
            object-fit: cover;
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
        .format{
            page-break-after: always;
        }
    </style>
</head>
<body ng-controller="cetakSkriningGiziAnak">
    @if (!empty($res['d1']))
        <div class="format">
            <table width='100%'>
                <tr height=20 class="noborder">
                    <td colspan="8" rowspan="4" class="p3 noborder-tb text-center">
                        @if(stripos(\Request::url(), 'localhost') !== FALSE)
                            <img src="{{ asset('img/logo_only.png') }}" alt="" style="width: 60px;display:block; margin:auto;">
                        @else
                            <img src="{{ asset('service/img/logo_only.png') }}" alt="" style="width: 60px;display:block; margin:auto;">
                        @endif
                    </td>
                    <td colspan="17" rowspan="4" class="noborder-tb text-center" >
                        <strong>{!! $res['profile']->namalengkap !!}</strong> <br>{!! $res['profile']->alamatlengkap !!}<br>TELP : (0413) 81292
                    </td>
                    <td colspan="6" class="noborder">No. RM </td>
                    <td colspan="13" class="noborder">
                        : {!! $res['d1'][0]->nocm  !!}
                    </td>
                    <td colspan="5" rowspan="2" class="border-lr bg-dark" style="font-size: xxx-large;text-align:center">RM</td>
                </tr>
                <tr class="noborder">
                    <td colspan="6" class="noborder">Nama Lengkap</td>
                    <td colspan="11" class="noborder">
                        : {!!  $res['d1'][0]->namapasien  !!}
                    </td>
                    <td colspan="2" class="noborder">{!!  $res['d1'][0]->jeniskelamin == 'PEREMPUAN' ? '(P)' : '(L)'  !!}</td>
                </tr>
                <tr class="noborder">
                    <td colspan="6" class="noborder">Tanggal Lahir</td>
                    <td colspan="13" class="noborder">
                        : {!! date('d-m-Y',strtotime( $res['d1'][0]->tgllahir  )) !!}
                    </td>
                    <td colspan="5" class="border-lr" rowspan="2" style="font-size: xx-large;text-align:center">34.1</td>
                </tr>
                <tr class="noborder">
                    <td colspan="6" class="noborder">NIK</td>
                    <td colspan="11" class="noborder">
                        : {!! $res['d1'][0]->noidentitas  !!}
                    </td>
                </tr>
                <tr class="bordered bg-dark">
                    <th colspan="49" height="20pt">SKRINING GIZI PADA PASIEN ANAK</th>
                </tr>
                <tr class="bordered bg-dark-small">
                    <th colspan="49" height="20pt">(diisi oleh Dietisien)</th>
                </tr>
                <tr>
                    <td colspan="6" class="noborder p3">Alamat</td>
                    <td colspan="18" class="noborder p3">: @{{ item.obj[32116647] ? item.obj[32116647] : '' }}</td>
                    <td colspan="6" class="noborder blf p3">Pekerjaan</td>
                    <td colspan="19" class="noborder p3">: @{{ item.obj[32116649] ? item.obj[32116649] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="6" class="noborder p3">Tanggal MRS</td>
                    <td colspan="18" class="noborder p3">: @{{item.obj[32116648] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                    <td colspan="6" class="noborder blf p3">Diagnosis DPJP</td>
                    <td colspan="19" class="noborder p3">: @{{ item.obj[32116650] ? item.obj[32116650] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="6" class="noborder"></td>
                    <td colspan="18" class="noborder"></td>
                    <td colspan="6" class="noborder blf"></td>
                    <td colspan="19" class="noborder"></td>
                </tr>
                
                
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center">No</td>
                    <td colspan="41" class="p2">Tanggal Skrining</td>
                    <td colspan="3" class="text-center">Skor I</td>
                    <td colspan="3" class="text-center">Skor II</td>
                </tr>
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center">1</td>
                    <td colspan="41" class="p2">Apakah anak memiliki diagnosis yang dapat mempengaruhi status gizi</td>
                    <td colspan="6" class="text-center"></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Tidak Ada</td>
                    <td colspan="3" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obj[32116651] ? item.obj[32116651] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Memungkinkan (gangguan kebiasaan makan, anoreksia, demam tinggi, diare, dyspepsia, nyeri menelan)</td>
                    <td colspan="3" class="text-center">2</td>
                    <td colspan="3" class="text-center">@{{ item.obj[32116652] ? item.obj[32116652] : '' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Pasti (disfagia, penyakit kronis, kesadaran menurun, pembedahan saluran cerna, penyakit kritis)</td>
                    <td colspan="3" class="text-center">3</td>
                    <td colspan="3" class="text-center">@{{ item.obj[32116653] ? item.obj[32116653] : '' }}</td>
                </tr>
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center noborder">2</td>
                    <td colspan="41" class="p2">Asuhan nutrisi dalam 48 jam</td>
                    <td colspan="6" class="text-center"></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Adekuat dan tidak ada perubahan pola makan</td>
                    <td colspan="3" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obj[32116654] ? item.obj[32116654] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Asupan makanan tidak adekuat : ≤ 50 % dari kebiasaan makan</td>
                    <td colspan="3" class="text-center">2</td>
                    <td colspan="3" class="text-center">@{{ item.obj[32116655] ? item.obj[32116655] : '' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Tidak ada asupan makanan dalam 48 jam</td>
                    <td colspan="3" class="text-center">3</td>
                    <td colspan="3" class="text-center">@{{ item.obj[32116656] ? item.obj[32116656] : '' }}</td>
                </tr>
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center noborder">3</td>
                    <td colspan="41" class="p2">Penyakit/tindakna/pembedahan dan asupan makanan</td>
                    <td colspan="6" class="text-center"></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Anak &lt; 5 tahun : -2 SD sampai 2 SD berdasarkan BB/PB (TB) <br>
                        Anak > 5 tahun : >90% BB/TB
                        </td>
                    <td colspan="3" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obj[32116657] ? item.obj[32116657] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Anak &lt; 5 tahun : -3 SD sampai &lt; -2 SD berdasarkan BB/PB (TB) <br>
                        Anak > 5 tahun : 71-90% BB/TB
                        
                        </td>
                    <td colspan="3" class="text-center">2</td>
                    <td colspan="3" class="text-center">@{{ item.obj[32116658] ? item.obj[32116658] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Anak &lt; 5 tahun : &lt; -3 SD berdasarkan BB/PB (TB) <br>
                        Anak > 5 tahun : ≤70% BB/TB
                        </td>
                    <td colspan="3" class="text-center">3</td>
                    <td colspan="3" class="text-center">@{{ item.obj[32116659] ? item.obj[32116659] : '' }}</td>
                </tr>
                <tr style="font-weight: bolder;text-align: center;">
                    <td colspan="43" class="p2">TOTAL SKOR</td>
                    <td colspan="3" class="text-center"></td>
                    <td colspan="3" class="text-center">@{{ item.obj[32116661] ? item.obj[32116661] : '' }}</td>
                </tr>
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="15" class="p2">Risiko Bermasalah Gizi</td>
                    <td colspan="26" class="p2">Risiko Bermasalah Gizi</td>
                    <td colspan="6" rowspan="4" class="text-center noborder">
                        <br>
                        <table style="display:fixed-layout;width:50%;" valign="bottom">
                            <tr>
                                <td colspan="3">@{{ item.obj[32116662] ? item.obj[32116662] : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="3">@{{ item.obj[32116663] ? item.obj[32116663] : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="3">@{{ item.obj[32116664] ? item.obj[32116664] : '' }}</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="15" class="p2">* Skor 0-1 = Risiko Rendah</td>
                    <td colspan="26" class="p2">* Skrining ulang 5 hari (Terapi gizi oleh DPJP + Dietisien)</td>
                </tr>
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="15" class="p2">* Skor 2-3 = Risiko Sedang</td>
                    <td colspan="26" class="p2">* Skrining ulang 3 hari (Terapi gizi oleh DPJP + Dietisien)</td>
                </tr>
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="15" class="p2">* Skor ≥ 4 = Risiko Tinggi</td>
                    <td colspan="26" class="p2">* Tim Terapi Gizi</td>
                </tr>
                <tr>
                    <td colspan="14" class="text-center p2" style="font-weight: bolder;">SKRINING I</td>
                    <td colspan="29" class="p2">Dietisien : @{{ item.obj[32116665] ? item.obj[32116665] : '.........................................................' }}</td>
                    <td colspan="3"></td>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="14" class="text-center p2" style="font-weight: bolder;">SKRINING II</td>
                    <td colspan="29" class="p2">Dietisien : @{{ item.obj[32116666] ? item.obj[32116666] : '.........................................................' }}</td>
                    <td colspan="3"></td>
                    <td colspan="3"></td>
                </tr>
                <tr >
                    <td colspan="14" class="text-center p2" style="font-weight: bolder;">SKRINING III</td>
                    <td colspan="29" class="p2">Dietisien : @{{ item.obj[32116667] ? item.obj[32116667] : '.........................................................' }}</td>
                    <td colspan="3"></td>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="3" class="p3 noborder" rowspan="2" valign="top">NB : </td>
                    <td colspan="46" class="p3 noborder">Untuk Pasien Risiko Tinggi dan malnutrisi format skrining</td>
                </tr>
                <tr>
                    <td colspan="46" class="p3 noborder">ditandatangani oleh Dokter Spesialis Gizi Klinis</td>
                </tr>
                <tr>
                    <td colspan="49" class="noborder"></td>
                </tr>
                <tr>
                    <td colspan="49" class="noborder"></td>
                </tr>
                <tr class="text-center">
                    <td colspan="24" class="noborder">DPJP Utama/drSpGK**</td>
                    <td colspan="25" class="noborder">Dietisien Ruangan</td>
                </tr>
                <tr class="text-center">
                    <td colspan="24" class="noborder"><div id="qrcodep1" style="text-align: center"></td>
                    <td colspan="25" class="noborder"><div id="qrcodepp1" style="text-align: center"></td>
                </tr>
                <tr class="text-center">
                    <td colspan="24" class="noborder">(@{{ item.obj[32116668] ? item.obj[32116668] : '……………………………………….' }})</td>
                    <td colspan="25" class="noborder">(@{{ item.obj[32116669] ? item.obj[32116669] : '……………………………………….' }})</td>
                </tr>
                <tr>
                    <td colspan="49">**Form skrining gizi ditandatangani oleh dr. SpGK jika hasil skrining ≥3 dan pasien dirujuk/konsul ke TTG rumah sakit</td>
                </tr>
            </table>
        </div>
    @endif

    @if (!empty($res['d2']))
        <div class="format">
            <table width='100%'>
                <tr height=20 class="noborder">
                    <td colspan="8" rowspan="4" class="p3 noborder-tb text-center">
                        @if(stripos(\Request::url(), 'localhost') !== FALSE)
                            <img src="{{ asset('img/logo_only.png') }}" alt="" style="width: 60px;display:block; margin:auto;">
                        @else
                            <img src="{{ asset('service/img/logo_only.png') }}" alt="" style="width: 60px;display:block; margin:auto;">
                        @endif
                    </td>
                    <td colspan="17" rowspan="4" class="noborder-tb text-center" >
                        <strong>{!! $res['profile']->namalengkap !!}</strong> <br>{!! $res['profile']->alamatlengkap !!}<br>TELP : (0413) 81292
                    </td>
                    <td colspan="6" class="noborder">No. RM </td>
                    <td colspan="13" class="noborder">
                        : {!! $res['d1'][0]->nocm  !!}
                    </td>
                    <td colspan="5" rowspan="2" class="border-lr bg-dark" style="font-size: xxx-large;text-align:center">RM</td>
                </tr>
                <tr class="noborder">
                    <td colspan="6" class="noborder">Nama Lengkap</td>
                    <td colspan="11" class="noborder">
                        : {!!  $res['d1'][0]->namapasien  !!}
                    </td>
                    <td colspan="2" class="noborder">{!!  $res['d1'][0]->jeniskelamin == 'PEREMPUAN' ? '(P)' : '(L)'  !!}</td>
                </tr>
                <tr class="noborder">
                    <td colspan="6" class="noborder">Tanggal Lahir</td>
                    <td colspan="13" class="noborder">
                        : {!! date('d-m-Y',strtotime( $res['d1'][0]->tgllahir  )) !!}
                    </td>
                    <td colspan="5" class="border-lr" rowspan="2" style="font-size: xx-large;text-align:center">34.1</td>
                </tr>
                <tr class="noborder">
                    <td colspan="6" class="noborder">NIK</td>
                    <td colspan="11" class="noborder">
                        : {!! $res['d1'][0]->noidentitas  !!}
                    </td>
                </tr>
                <tr class="bordered bg-dark">
                    <th colspan="49" height="20pt">SKRINING GIZI PADA PASIEN ANAK</th>
                </tr>
                <tr class="bordered bg-dark-small">
                    <th colspan="49" height="20pt">(diisi oleh Dietisien)</th>
                </tr>
                <tr>
                    <td colspan="6" class="noborder p3">Alamat</td>
                    <td colspan="18" class="noborder p3">: @{{ item.obji2[32116647] ? item.obji2[32116647] : '' }}</td>
                    <td colspan="6" class="noborder blf p3">Pekerjaan</td>
                    <td colspan="19" class="noborder p3">: @{{ item.obji2[32116649] ? item.obji2[32116649] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="6" class="noborder p3">Tanggal MRS</td>
                    <td colspan="18" class="noborder p3">: @{{item.obji2[32116648] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                    <td colspan="6" class="noborder blf p3">Diagnosis DPJP</td>
                    <td colspan="19" class="noborder p3">: @{{ item.obji2[32116650] ? item.obji2[32116650] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="6" class="noborder"></td>
                    <td colspan="18" class="noborder"></td>
                    <td colspan="6" class="noborder blf"></td>
                    <td colspan="19" class="noborder"></td>
                </tr>
                
                
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center">No</td>
                    <td colspan="41" class="p2">Tanggal Skrining</td>
                    <td colspan="3" class="text-center">Skor I</td>
                    <td colspan="3" class="text-center">Skor II</td>
                </tr>
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center">1</td>
                    <td colspan="41" class="p2">Apakah anak memiliki diagnosis yang dapat mempengaruhi status gizi</td>
                    <td colspan="6" class="text-center"></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Tidak Ada</td>
                    <td colspan="3" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[32116651] ? item.obji2[32116651] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Memungkinkan (gangguan kebiasaan makan, anoreksia, demam tinggi, diare, dyspepsia, nyeri menelan)</td>
                    <td colspan="3" class="text-center">2</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[32116652] ? item.obji2[32116652] : '' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Pasti (disfagia, penyakit kronis, kesadaran menurun, pembedahan saluran cerna, penyakit kritis)</td>
                    <td colspan="3" class="text-center">3</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[32116653] ? item.obji2[32116653] : '' }}</td>
                </tr>
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center noborder">2</td>
                    <td colspan="41" class="p2">Asuhan nutrisi dalam 48 jam</td>
                    <td colspan="6" class="text-center"></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Adekuat dan tidak ada perubahan pola makan</td>
                    <td colspan="3" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[32116654] ? item.obji2[32116654] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Asupan makanan tidak adekuat : ≤ 50 % dari kebiasaan makan</td>
                    <td colspan="3" class="text-center">2</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[32116655] ? item.obji2[32116655] : '' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Tidak ada asupan makanan dalam 48 jam</td>
                    <td colspan="3" class="text-center">3</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[32116656] ? item.obji2[32116656] : '' }}</td>
                </tr>
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center noborder">3</td>
                    <td colspan="41" class="p2">Penyakit/tindakna/pembedahan dan asupan makanan</td>
                    <td colspan="6" class="text-center"></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Anak &lt; 5 tahun : -2 SD sampai 2 SD berdasarkan BB/PB (TB) <br>
                        Anak > 5 tahun : >90% BB/TB
                        </td>
                    <td colspan="3" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[32116657] ? item.obji2[32116657] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Anak &lt; 5 tahun : -3 SD sampai &lt; -2 SD berdasarkan BB/PB (TB) <br>
                        Anak > 5 tahun : 71-90% BB/TB
                        
                        </td>
                    <td colspan="3" class="text-center">2</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[32116658] ? item.obji2[32116658] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Anak &lt; 5 tahun : &lt; -3 SD berdasarkan BB/PB (TB) <br>
                        Anak > 5 tahun : ≤70% BB/TB
                        </td>
                    <td colspan="3" class="text-center">3</td>
                    <td colspan="3" class="text-center">@{{ item.obji2[32116659] ? item.obji2[32116659] : '' }}</td>
                </tr>
                <tr style="font-weight: bolder;text-align: center;">
                    <td colspan="43" class="p2">TOTAL SKOR</td>
                    <td colspan="3" class="text-center"></td>
                    <td colspan="3" class="text-center">@{{ item.obji2[32116661] ? item.obji2[32116661] : '' }}</td>
                </tr>
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="15" class="p2">Risiko Bermasalah Gizi</td>
                    <td colspan="26" class="p2">Risiko Bermasalah Gizi</td>
                    <td colspan="6" rowspan="4" class="text-center noborder">
                        <br>
                        <table style="display:fixed-layout;width:50%;" valign="bottom">
                            <tr>
                                <td colspan="3">@{{ item.obji2[32116662] ? item.obji2[32116662] : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="3">@{{ item.obji2[32116663] ? item.obji2[32116663] : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="3">@{{ item.obji2[32116664] ? item.obji2[32116664] : '' }}</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="15" class="p2">* Skor 0-1 = Risiko Rendah</td>
                    <td colspan="26" class="p2">* Skrining ulang 5 hari (Terapi gizi oleh DPJP + Dietisien)</td>
                </tr>
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="15" class="p2">* Skor 2-3 = Risiko Sedang</td>
                    <td colspan="26" class="p2">* Skrining ulang 3 hari (Terapi gizi oleh DPJP + Dietisien)</td>
                </tr>
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="15" class="p2">* Skor ≥ 4 = Risiko Tinggi</td>
                    <td colspan="26" class="p2">* Tim Terapi Gizi</td>
                </tr>
                <tr>
                    <td colspan="14" class="text-center p2" style="font-weight: bolder;">SKRINING I</td>
                    <td colspan="29" class="p2">Dietisien : @{{ item.obji2[32116665] ? item.obji2[32116665] : '.........................................................' }}</td>
                    <td colspan="3"></td>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="14" class="text-center p2" style="font-weight: bolder;">SKRINING II</td>
                    <td colspan="29" class="p2">Dietisien : @{{ item.obji2[32116666] ? item.obji2[32116666] : '.........................................................' }}</td>
                    <td colspan="3"></td>
                    <td colspan="3"></td>
                </tr>
                <tr >
                    <td colspan="14" class="text-center p2" style="font-weight: bolder;">SKRINING III</td>
                    <td colspan="29" class="p2">Dietisien : @{{ item.obji2[32116667] ? item.obji2[32116667] : '.........................................................' }}</td>
                    <td colspan="3"></td>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="3" class="p3 noborder" rowspan="2" valign="top">NB : </td>
                    <td colspan="46" class="p3 noborder">Untuk Pasien Risiko Tinggi dan malnutrisi format skrining</td>
                </tr>
                <tr>
                    <td colspan="46" class="p3 noborder">ditandatangani oleh Dokter Spesialis Gizi Klinis</td>
                </tr>
                <tr>
                    <td colspan="49" class="noborder"></td>
                </tr>
                <tr>
                    <td colspan="49" class="noborder"></td>
                </tr>
                <tr class="text-center">
                    <td colspan="24" class="noborder">DPJP Utama/drSpGK**</td>
                    <td colspan="25" class="noborder">Dietisien Ruangan</td>
                </tr>
                <tr class="text-center">
                    <td colspan="24" class="noborder"><div id="qrcodep2" style="text-align: center"></td>
                    <td colspan="25" class="noborder"><div id="qrcodepp2" style="text-align: center"></td>
                </tr>
                <tr class="text-center">
                    <td colspan="24" class="noborder">(@{{ item.obji2[32116668] ? item.obji2[32116668] : '……………………………………….' }})</td>
                    <td colspan="25" class="noborder">(@{{ item.obji2[32116669] ? item.obji2[32116669] : '……………………………………….' }})</td>
                </tr>
                <tr>
                    <td colspan="49">**Form skrining gizi ditandatangani oleh dr. SpGK jika hasil skrining ≥3 dan pasien dirujuk/konsul ke TTG rumah sakit</td>
                </tr>
            </table>
        </div>
    @endif

    @if (!empty($res['d3']))
        <div class="format">
            <table width='100%'>
                <tr height=20 class="noborder">
                    <td colspan="8" rowspan="4" class="p3 noborder-tb text-center">
                        @if(stripos(\Request::url(), 'localhost') !== FALSE)
                            <img src="{{ asset('img/logo_only.png') }}" alt="" style="width: 60px;display:block; margin:auto;">
                        @else
                            <img src="{{ asset('service/img/logo_only.png') }}" alt="" style="width: 60px;display:block; margin:auto;">
                        @endif
                    </td>
                    <td colspan="17" rowspan="4" class="noborder-tb text-center" >
                        <strong>{!! $res['profile']->namalengkap !!}</strong> <br>{!! $res['profile']->alamatlengkap !!}<br>TELP : (0413) 81292
                    </td>
                    <td colspan="6" class="noborder">No. RM </td>
                    <td colspan="13" class="noborder">
                        : {!! $res['d1'][0]->nocm  !!}
                    </td>
                    <td colspan="5" rowspan="2" class="border-lr bg-dark" style="font-size: xxx-large;text-align:center">RM</td>
                </tr>
                <tr class="noborder">
                    <td colspan="6" class="noborder">Nama Lengkap</td>
                    <td colspan="11" class="noborder">
                        : {!!  $res['d1'][0]->namapasien  !!}
                    </td>
                    <td colspan="2" class="noborder">{!!  $res['d1'][0]->jeniskelamin == 'PEREMPUAN' ? '(P)' : '(L)'  !!}</td>
                </tr>
                <tr class="noborder">
                    <td colspan="6" class="noborder">Tanggal Lahir</td>
                    <td colspan="13" class="noborder">
                        : {!! date('d-m-Y',strtotime( $res['d1'][0]->tgllahir  )) !!}
                    </td>
                    <td colspan="5" class="border-lr" rowspan="2" style="font-size: xx-large;text-align:center">34.1</td>
                </tr>
                <tr class="noborder">
                    <td colspan="6" class="noborder">NIK</td>
                    <td colspan="11" class="noborder">
                        : {!! $res['d1'][0]->noidentitas  !!}
                    </td>
                </tr>
                <tr class="bordered bg-dark">
                    <th colspan="49" height="20pt">SKRINING GIZI PADA PASIEN ANAK</th>
                </tr>
                <tr class="bordered bg-dark-small">
                    <th colspan="49" height="20pt">(diisi oleh Dietisien)</th>
                </tr>
                <tr>
                    <td colspan="6" class="noborder p3">Alamat</td>
                    <td colspan="18" class="noborder p3">: @{{ item.obji3[32116647] ? item.obji3[32116647] : '' }}</td>
                    <td colspan="6" class="noborder blf p3">Pekerjaan</td>
                    <td colspan="19" class="noborder p3">: @{{ item.obji3[32116649] ? item.obji3[32116649] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="6" class="noborder p3">Tanggal MRS</td>
                    <td colspan="18" class="noborder p3">: @{{item.obji3[32116648] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                    <td colspan="6" class="noborder blf p3">Diagnosis DPJP</td>
                    <td colspan="19" class="noborder p3">: @{{ item.obji3[32116650] ? item.obji3[32116650] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="6" class="noborder"></td>
                    <td colspan="18" class="noborder"></td>
                    <td colspan="6" class="noborder blf"></td>
                    <td colspan="19" class="noborder"></td>
                </tr>
                
                
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center">No</td>
                    <td colspan="41" class="p2">Tanggal Skrining</td>
                    <td colspan="3" class="text-center">Skor I</td>
                    <td colspan="3" class="text-center">Skor II</td>
                </tr>
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center">1</td>
                    <td colspan="41" class="p2">Apakah anak memiliki diagnosis yang dapat mempengaruhi status gizi</td>
                    <td colspan="6" class="text-center"></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Tidak Ada</td>
                    <td colspan="3" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[32116651] ? item.obji3[32116651] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Memungkinkan (gangguan kebiasaan makan, anoreksia, demam tinggi, diare, dyspepsia, nyeri menelan)</td>
                    <td colspan="3" class="text-center">2</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[32116652] ? item.obji3[32116652] : '' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Pasti (disfagia, penyakit kronis, kesadaran menurun, pembedahan saluran cerna, penyakit kritis)</td>
                    <td colspan="3" class="text-center">3</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[32116653] ? item.obji3[32116653] : '' }}</td>
                </tr>
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center noborder">2</td>
                    <td colspan="41" class="p2">Asuhan nutrisi dalam 48 jam</td>
                    <td colspan="6" class="text-center"></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Adekuat dan tidak ada perubahan pola makan</td>
                    <td colspan="3" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[32116654] ? item.obji3[32116654] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Asupan makanan tidak adekuat : ≤ 50 % dari kebiasaan makan</td>
                    <td colspan="3" class="text-center">2</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[32116655] ? item.obji3[32116655] : '' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Tidak ada asupan makanan dalam 48 jam</td>
                    <td colspan="3" class="text-center">3</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[32116656] ? item.obji3[32116656] : '' }}</td>
                </tr>
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center noborder">3</td>
                    <td colspan="41" class="p2">Penyakit/tindakna/pembedahan dan asupan makanan</td>
                    <td colspan="6" class="text-center"></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Anak &lt; 5 tahun : -2 SD sampai 2 SD berdasarkan BB/PB (TB) <br>
                        Anak > 5 tahun : >90% BB/TB
                        </td>
                    <td colspan="3" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[32116657] ? item.obji3[32116657] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Anak &lt; 5 tahun : -3 SD sampai &lt; -2 SD berdasarkan BB/PB (TB) <br>
                        Anak > 5 tahun : 71-90% BB/TB
                        
                        </td>
                    <td colspan="3" class="text-center">2</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[32116658] ? item.obji3[32116658] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Anak &lt; 5 tahun : &lt; -3 SD berdasarkan BB/PB (TB) <br>
                        Anak > 5 tahun : ≤70% BB/TB
                        </td>
                    <td colspan="3" class="text-center">3</td>
                    <td colspan="3" class="text-center">@{{ item.obji3[32116659] ? item.obji3[32116659] : '' }}</td>
                </tr>
                <tr style="font-weight: bolder;text-align: center;">
                    <td colspan="43" class="p2">TOTAL SKOR</td>
                    <td colspan="3" class="text-center"></td>
                    <td colspan="3" class="text-center">@{{ item.obji3[32116661] ? item.obji3[32116661] : '' }}</td>
                </tr>
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="15" class="p2">Risiko Bermasalah Gizi</td>
                    <td colspan="26" class="p2">Risiko Bermasalah Gizi</td>
                    <td colspan="6" rowspan="4" class="text-center noborder">
                        <br>
                        <table style="display:fixed-layout;width:50%;" valign="bottom">
                            <tr>
                                <td colspan="3">@{{ item.obji3[32116662] ? item.obji3[32116662] : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="3">@{{ item.obji3[32116663] ? item.obji3[32116663] : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="3">@{{ item.obji3[32116664] ? item.obji3[32116664] : '' }}</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="15" class="p2">* Skor 0-1 = Risiko Rendah</td>
                    <td colspan="26" class="p2">* Skrining ulang 5 hari (Terapi gizi oleh DPJP + Dietisien)</td>
                </tr>
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="15" class="p2">* Skor 2-3 = Risiko Sedang</td>
                    <td colspan="26" class="p2">* Skrining ulang 3 hari (Terapi gizi oleh DPJP + Dietisien)</td>
                </tr>
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="15" class="p2">* Skor ≥ 4 = Risiko Tinggi</td>
                    <td colspan="26" class="p2">* Tim Terapi Gizi</td>
                </tr>
                <tr>
                    <td colspan="14" class="text-center p2" style="font-weight: bolder;">SKRINING I</td>
                    <td colspan="29" class="p2">Dietisien : @{{ item.obji3[32116665] ? item.obji3[32116665] : '.........................................................' }}</td>
                    <td colspan="3"></td>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="14" class="text-center p2" style="font-weight: bolder;">SKRINING II</td>
                    <td colspan="29" class="p2">Dietisien : @{{ item.obji3[32116666] ? item.obji3[32116666] : '.........................................................' }}</td>
                    <td colspan="3"></td>
                    <td colspan="3"></td>
                </tr>
                <tr >
                    <td colspan="14" class="text-center p2" style="font-weight: bolder;">SKRINING III</td>
                    <td colspan="29" class="p2">Dietisien : @{{ item.obji3[32116667] ? item.obji3[32116667] : '.........................................................' }}</td>
                    <td colspan="3"></td>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="3" class="p3 noborder" rowspan="2" valign="top">NB : </td>
                    <td colspan="46" class="p3 noborder">Untuk Pasien Risiko Tinggi dan malnutrisi format skrining</td>
                </tr>
                <tr>
                    <td colspan="46" class="p3 noborder">ditandatangani oleh Dokter Spesialis Gizi Klinis</td>
                </tr>
                <tr>
                    <td colspan="49" class="noborder"></td>
                </tr>
                <tr>
                    <td colspan="49" class="noborder"></td>
                </tr>
                <tr class="text-center">
                    <td colspan="24" class="noborder">DPJP Utama/drSpGK**</td>
                    <td colspan="25" class="noborder">Dietisien Ruangan</td>
                </tr>
                <tr class="text-center">
                    <td colspan="24" class="noborder"><div id="qrcodep3" style="text-align: center"></td>
                    <td colspan="25" class="noborder"><div id="qrcodepp3" style="text-align: center"></td>
                </tr>
                <tr class="text-center">
                    <td colspan="24" class="noborder">(@{{ item.obji3[32116668] ? item.obji3[32116668] : '……………………………………….' }})</td>
                    <td colspan="25" class="noborder">(@{{ item.obji3[32116669] ? item.obji3[32116669] : '……………………………………….' }})</td>
                </tr>
                <tr>
                    <td colspan="49">**Form skrining gizi ditandatangani oleh dr. SpGK jika hasil skrining ≥3 dan pasien dirujuk/konsul ke TTG rumah sakit</td>
                </tr>
            </table>
        </div>
    @endif

    @if (!empty($res['d4']))
        <div class="format">
            <table width='100%'>
                <tr height=20 class="noborder">
                    <td colspan="8" rowspan="4" class="p3 noborder-tb text-center">
                        @if(stripos(\Request::url(), 'localhost') !== FALSE)
                            <img src="{{ asset('img/logo_only.png') }}" alt="" style="width: 60px;display:block; margin:auto;">
                        @else
                            <img src="{{ asset('service/img/logo_only.png') }}" alt="" style="width: 60px;display:block; margin:auto;">
                        @endif
                    </td>
                    <td colspan="17" rowspan="4" class="noborder-tb text-center" >
                        <strong>{!! $res['profile']->namalengkap !!}</strong> <br>{!! $res['profile']->alamatlengkap !!}<br>TELP : (0413) 81292
                    </td>
                    <td colspan="6" class="noborder">No. RM </td>
                    <td colspan="13" class="noborder">
                        : {!! $res['d1'][0]->nocm  !!}
                    </td>
                    <td colspan="5" rowspan="2" class="border-lr bg-dark" style="font-size: xxx-large;text-align:center">RM</td>
                </tr>
                <tr class="noborder">
                    <td colspan="6" class="noborder">Nama Lengkap</td>
                    <td colspan="11" class="noborder">
                        : {!!  $res['d1'][0]->namapasien  !!}
                    </td>
                    <td colspan="2" class="noborder">{!!  $res['d1'][0]->jeniskelamin == 'PEREMPUAN' ? '(P)' : '(L)'  !!}</td>
                </tr>
                <tr class="noborder">
                    <td colspan="6" class="noborder">Tanggal Lahir</td>
                    <td colspan="13" class="noborder">
                        : {!! date('d-m-Y',strtotime( $res['d1'][0]->tgllahir  )) !!}
                    </td>
                    <td colspan="5" class="border-lr" rowspan="2" style="font-size: xx-large;text-align:center">34.1</td>
                </tr>
                <tr class="noborder">
                    <td colspan="6" class="noborder">NIK</td>
                    <td colspan="11" class="noborder">
                        : {!! $res['d1'][0]->noidentitas  !!}
                    </td>
                </tr>
                <tr class="bordered bg-dark">
                    <th colspan="49" height="20pt">SKRINING GIZI PADA PASIEN ANAK</th>
                </tr>
                <tr class="bordered bg-dark-small">
                    <th colspan="49" height="20pt">(diisi oleh Dietisien)</th>
                </tr>
                <tr>
                    <td colspan="6" class="noborder p3">Alamat</td>
                    <td colspan="18" class="noborder p3">: @{{ item.obji4[32116647] ? item.obji4[32116647] : '' }}</td>
                    <td colspan="6" class="noborder blf p3">Pekerjaan</td>
                    <td colspan="19" class="noborder p3">: @{{ item.obji4[32116649] ? item.obji4[32116649] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="6" class="noborder p3">Tanggal MRS</td>
                    <td colspan="18" class="noborder p3">: @{{item.obji4[32116648] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                    <td colspan="6" class="noborder blf p3">Diagnosis DPJP</td>
                    <td colspan="19" class="noborder p3">: @{{ item.obji4[32116650] ? item.obji4[32116650] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="6" class="noborder"></td>
                    <td colspan="18" class="noborder"></td>
                    <td colspan="6" class="noborder blf"></td>
                    <td colspan="19" class="noborder"></td>
                </tr>
                
                
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center">No</td>
                    <td colspan="41" class="p2">Tanggal Skrining</td>
                    <td colspan="3" class="text-center">Skor I</td>
                    <td colspan="3" class="text-center">Skor II</td>
                </tr>
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center">1</td>
                    <td colspan="41" class="p2">Apakah anak memiliki diagnosis yang dapat mempengaruhi status gizi</td>
                    <td colspan="6" class="text-center"></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Tidak Ada</td>
                    <td colspan="3" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[32116651] ? item.obji4[32116651] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Memungkinkan (gangguan kebiasaan makan, anoreksia, demam tinggi, diare, dyspepsia, nyeri menelan)</td>
                    <td colspan="3" class="text-center">2</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[32116652] ? item.obji4[32116652] : '' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Pasti (disfagia, penyakit kronis, kesadaran menurun, pembedahan saluran cerna, penyakit kritis)</td>
                    <td colspan="3" class="text-center">3</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[32116653] ? item.obji4[32116653] : '' }}</td>
                </tr>
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center noborder">2</td>
                    <td colspan="41" class="p2">Asuhan nutrisi dalam 48 jam</td>
                    <td colspan="6" class="text-center"></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Adekuat dan tidak ada perubahan pola makan</td>
                    <td colspan="3" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[32116654] ? item.obji4[32116654] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Asupan makanan tidak adekuat : ≤ 50 % dari kebiasaan makan</td>
                    <td colspan="3" class="text-center">2</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[32116655] ? item.obji4[32116655] : '' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Tidak ada asupan makanan dalam 48 jam</td>
                    <td colspan="3" class="text-center">3</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[32116656] ? item.obji4[32116656] : '' }}</td>
                </tr>
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center noborder">3</td>
                    <td colspan="41" class="p2">Penyakit/tindakna/pembedahan dan asupan makanan</td>
                    <td colspan="6" class="text-center"></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Anak &lt; 5 tahun : -2 SD sampai 2 SD berdasarkan BB/PB (TB) <br>
                        Anak > 5 tahun : >90% BB/TB
                        </td>
                    <td colspan="3" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[32116657] ? item.obji4[32116657] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Anak &lt; 5 tahun : -3 SD sampai &lt; -2 SD berdasarkan BB/PB (TB) <br>
                        Anak > 5 tahun : 71-90% BB/TB
                        
                        </td>
                    <td colspan="3" class="text-center">2</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[32116658] ? item.obji4[32116658] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Anak &lt; 5 tahun : &lt; -3 SD berdasarkan BB/PB (TB) <br>
                        Anak > 5 tahun : ≤70% BB/TB
                        </td>
                    <td colspan="3" class="text-center">3</td>
                    <td colspan="3" class="text-center">@{{ item.obji4[32116659] ? item.obji4[32116659] : '' }}</td>
                </tr>
                <tr style="font-weight: bolder;text-align: center;">
                    <td colspan="43" class="p2">TOTAL SKOR</td>
                    <td colspan="3" class="text-center"></td>
                    <td colspan="3" class="text-center">@{{ item.obji4[32116661] ? item.obji4[32116661] : '' }}</td>
                </tr>
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="15" class="p2">Risiko Bermasalah Gizi</td>
                    <td colspan="26" class="p2">Risiko Bermasalah Gizi</td>
                    <td colspan="6" rowspan="4" class="text-center noborder">
                        <br>
                        <table style="display:fixed-layout;width:50%;" valign="bottom">
                            <tr>
                                <td colspan="3">@{{ item.obji4[32116662] ? item.obji4[32116662] : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="3">@{{ item.obji4[32116663] ? item.obji4[32116663] : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="3">@{{ item.obji4[32116664] ? item.obji4[32116664] : '' }}</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="15" class="p2">* Skor 0-1 = Risiko Rendah</td>
                    <td colspan="26" class="p2">* Skrining ulang 5 hari (Terapi gizi oleh DPJP + Dietisien)</td>
                </tr>
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="15" class="p2">* Skor 2-3 = Risiko Sedang</td>
                    <td colspan="26" class="p2">* Skrining ulang 3 hari (Terapi gizi oleh DPJP + Dietisien)</td>
                </tr>
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="15" class="p2">* Skor ≥ 4 = Risiko Tinggi</td>
                    <td colspan="26" class="p2">* Tim Terapi Gizi</td>
                </tr>
                <tr>
                    <td colspan="14" class="text-center p2" style="font-weight: bolder;">SKRINING I</td>
                    <td colspan="29" class="p2">Dietisien : @{{ item.obji4[32116665] ? item.obji4[32116665] : '.........................................................' }}</td>
                    <td colspan="3"></td>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="14" class="text-center p2" style="font-weight: bolder;">SKRINING II</td>
                    <td colspan="29" class="p2">Dietisien : @{{ item.obji4[32116666] ? item.obji4[32116666] : '.........................................................' }}</td>
                    <td colspan="3"></td>
                    <td colspan="3"></td>
                </tr>
                <tr >
                    <td colspan="14" class="text-center p2" style="font-weight: bolder;">SKRINING III</td>
                    <td colspan="29" class="p2">Dietisien : @{{ item.obji4[32116667] ? item.obji4[32116667] : '.........................................................' }}</td>
                    <td colspan="3"></td>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="3" class="p3 noborder" rowspan="2" valign="top">NB : </td>
                    <td colspan="46" class="p3 noborder">Untuk Pasien Risiko Tinggi dan malnutrisi format skrining</td>
                </tr>
                <tr>
                    <td colspan="46" class="p3 noborder">ditandatangani oleh Dokter Spesialis Gizi Klinis</td>
                </tr>
                <tr>
                    <td colspan="49" class="noborder"></td>
                </tr>
                <tr>
                    <td colspan="49" class="noborder"></td>
                </tr>
                <tr class="text-center">
                    <td colspan="24" class="noborder">DPJP Utama/drSpGK**</td>
                    <td colspan="25" class="noborder">Dietisien Ruangan</td>
                </tr>
                <tr class="text-center">
                    <td colspan="24" class="noborder"><div id="qrcodep4" style="text-align: center"></td>
                    <td colspan="25" class="noborder"><div id="qrcodepp4" style="text-align: center"></td>
                </tr>
                <tr class="text-center">
                    <td colspan="24" class="noborder">(@{{ item.obji4[32116668] ? item.obji4[32116668] : '……………………………………….' }})</td>
                    <td colspan="25" class="noborder">(@{{ item.obji4[32116669] ? item.obji4[32116669] : '……………………………………….' }})</td>
                </tr>
                <tr>
                    <td colspan="49">**Form skrining gizi ditandatangani oleh dr. SpGK jika hasil skrining ≥3 dan pasien dirujuk/konsul ke TTG rumah sakit</td>
                </tr>
            </table>
        </div>
    @endif

    @if (!empty($res['d5']))
        <div class="format">
            <table width='100%'>
                <tr height=20 class="noborder">
                    <td colspan="8" rowspan="4" class="p3 noborder-tb text-center">
                        @if(stripos(\Request::url(), 'localhost') !== FALSE)
                            <img src="{{ asset('img/logo_only.png') }}" alt="" style="width: 60px;display:block; margin:auto;">
                        @else
                            <img src="{{ asset('service/img/logo_only.png') }}" alt="" style="width: 60px;display:block; margin:auto;">
                        @endif
                    </td>
                    <td colspan="17" rowspan="4" class="noborder-tb text-center" >
                        <strong>{!! $res['profile']->namalengkap !!}</strong> <br>{!! $res['profile']->alamatlengkap !!}<br>TELP : (0413) 81292
                    </td>
                    <td colspan="6" class="noborder">No. RM </td>
                    <td colspan="13" class="noborder">
                        : {!! $res['d1'][0]->nocm  !!}
                    </td>
                    <td colspan="5" rowspan="2" class="border-lr bg-dark" style="font-size: xxx-large;text-align:center">RM</td>
                </tr>
                <tr class="noborder">
                    <td colspan="6" class="noborder">Nama Lengkap</td>
                    <td colspan="11" class="noborder">
                        : {!!  $res['d1'][0]->namapasien  !!}
                    </td>
                    <td colspan="2" class="noborder">{!!  $res['d1'][0]->jeniskelamin == 'PEREMPUAN' ? '(P)' : '(L)'  !!}</td>
                </tr>
                <tr class="noborder">
                    <td colspan="6" class="noborder">Tanggal Lahir</td>
                    <td colspan="13" class="noborder">
                        : {!! date('d-m-Y',strtotime( $res['d1'][0]->tgllahir  )) !!}
                    </td>
                    <td colspan="5" class="border-lr" rowspan="2" style="font-size: xx-large;text-align:center">34.1</td>
                </tr>
                <tr class="noborder">
                    <td colspan="6" class="noborder">NIK</td>
                    <td colspan="11" class="noborder">
                        : {!! $res['d1'][0]->noidentitas  !!}
                    </td>
                </tr>
                <tr class="bordered bg-dark">
                    <th colspan="49" height="20pt">SKRINING GIZI PADA PASIEN ANAK</th>
                </tr>
                <tr class="bordered bg-dark-small">
                    <th colspan="49" height="20pt">(diisi oleh Dietisien)</th>
                </tr>
                <tr>
                    <td colspan="6" class="noborder p3">Alamat</td>
                    <td colspan="18" class="noborder p3">: @{{ item.obji5[32116647] ? item.obji5[32116647] : '' }}</td>
                    <td colspan="6" class="noborder blf p3">Pekerjaan</td>
                    <td colspan="19" class="noborder p3">: @{{ item.obji5[32116649] ? item.obji5[32116649] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="6" class="noborder p3">Tanggal MRS</td>
                    <td colspan="18" class="noborder p3">: @{{item.obji5[32116648] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                    <td colspan="6" class="noborder blf p3">Diagnosis DPJP</td>
                    <td colspan="19" class="noborder p3">: @{{ item.obji5[32116650] ? item.obji5[32116650] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="6" class="noborder"></td>
                    <td colspan="18" class="noborder"></td>
                    <td colspan="6" class="noborder blf"></td>
                    <td colspan="19" class="noborder"></td>
                </tr>
                
                
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center">No</td>
                    <td colspan="41" class="p2">Tanggal Skrining</td>
                    <td colspan="3" class="text-center">Skor I</td>
                    <td colspan="3" class="text-center">Skor II</td>
                </tr>
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center">1</td>
                    <td colspan="41" class="p2">Apakah anak memiliki diagnosis yang dapat mempengaruhi status gizi</td>
                    <td colspan="6" class="text-center"></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Tidak Ada</td>
                    <td colspan="3" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[32116651] ? item.obji5[32116651] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Memungkinkan (gangguan kebiasaan makan, anoreksia, demam tinggi, diare, dyspepsia, nyeri menelan)</td>
                    <td colspan="3" class="text-center">2</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[32116652] ? item.obji5[32116652] : '' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Pasti (disfagia, penyakit kronis, kesadaran menurun, pembedahan saluran cerna, penyakit kritis)</td>
                    <td colspan="3" class="text-center">3</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[32116653] ? item.obji5[32116653] : '' }}</td>
                </tr>
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center noborder">2</td>
                    <td colspan="41" class="p2">Asuhan nutrisi dalam 48 jam</td>
                    <td colspan="6" class="text-center"></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Adekuat dan tidak ada perubahan pola makan</td>
                    <td colspan="3" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[32116654] ? item.obji5[32116654] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Asupan makanan tidak adekuat : ≤ 50 % dari kebiasaan makan</td>
                    <td colspan="3" class="text-center">2</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[32116655] ? item.obji5[32116655] : '' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Tidak ada asupan makanan dalam 48 jam</td>
                    <td colspan="3" class="text-center">3</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[32116656] ? item.obji5[32116656] : '' }}</td>
                </tr>
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center noborder">3</td>
                    <td colspan="41" class="p2">Penyakit/tindakna/pembedahan dan asupan makanan</td>
                    <td colspan="6" class="text-center"></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Anak &lt; 5 tahun : -2 SD sampai 2 SD berdasarkan BB/PB (TB) <br>
                        Anak > 5 tahun : >90% BB/TB
                        </td>
                    <td colspan="3" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[32116657] ? item.obji5[32116657] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Anak &lt; 5 tahun : -3 SD sampai &lt; -2 SD berdasarkan BB/PB (TB) <br>
                        Anak > 5 tahun : 71-90% BB/TB
                        
                        </td>
                    <td colspan="3" class="text-center">2</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[32116658] ? item.obji5[32116658] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Anak &lt; 5 tahun : &lt; -3 SD berdasarkan BB/PB (TB) <br>
                        Anak > 5 tahun : ≤70% BB/TB
                        </td>
                    <td colspan="3" class="text-center">3</td>
                    <td colspan="3" class="text-center">@{{ item.obji5[32116659] ? item.obji5[32116659] : '' }}</td>
                </tr>
                <tr style="font-weight: bolder;text-align: center;">
                    <td colspan="43" class="p2">TOTAL SKOR</td>
                    <td colspan="3" class="text-center"></td>
                    <td colspan="3" class="text-center">@{{ item.obji5[32116661] ? item.obji5[32116661] : '' }}</td>
                </tr>
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="15" class="p2">Risiko Bermasalah Gizi</td>
                    <td colspan="26" class="p2">Risiko Bermasalah Gizi</td>
                    <td colspan="6" rowspan="4" class="text-center noborder">
                        <br>
                        <table style="display:fixed-layout;width:50%;" valign="bottom">
                            <tr>
                                <td colspan="3">@{{ item.obji5[32116662] ? item.obji5[32116662] : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="3">@{{ item.obji5[32116663] ? item.obji5[32116663] : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="3">@{{ item.obji5[32116664] ? item.obji5[32116664] : '' }}</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="15" class="p2">* Skor 0-1 = Risiko Rendah</td>
                    <td colspan="26" class="p2">* Skrining ulang 5 hari (Terapi gizi oleh DPJP + Dietisien)</td>
                </tr>
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="15" class="p2">* Skor 2-3 = Risiko Sedang</td>
                    <td colspan="26" class="p2">* Skrining ulang 3 hari (Terapi gizi oleh DPJP + Dietisien)</td>
                </tr>
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="15" class="p2">* Skor ≥ 4 = Risiko Tinggi</td>
                    <td colspan="26" class="p2">* Tim Terapi Gizi</td>
                </tr>
                <tr>
                    <td colspan="14" class="text-center p2" style="font-weight: bolder;">SKRINING I</td>
                    <td colspan="29" class="p2">Dietisien : @{{ item.obji5[32116665] ? item.obji5[32116665] : '.........................................................' }}</td>
                    <td colspan="3"></td>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="14" class="text-center p2" style="font-weight: bolder;">SKRINING II</td>
                    <td colspan="29" class="p2">Dietisien : @{{ item.obji5[32116666] ? item.obji5[32116666] : '.........................................................' }}</td>
                    <td colspan="3"></td>
                    <td colspan="3"></td>
                </tr>
                <tr >
                    <td colspan="14" class="text-center p2" style="font-weight: bolder;">SKRINING III</td>
                    <td colspan="29" class="p2">Dietisien : @{{ item.obji5[32116667] ? item.obji5[32116667] : '.........................................................' }}</td>
                    <td colspan="3"></td>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="3" class="p3 noborder" rowspan="2" valign="top">NB : </td>
                    <td colspan="46" class="p3 noborder">Untuk Pasien Risiko Tinggi dan malnutrisi format skrining</td>
                </tr>
                <tr>
                    <td colspan="46" class="p3 noborder">ditandatangani oleh Dokter Spesialis Gizi Klinis</td>
                </tr>
                <tr>
                    <td colspan="49" class="noborder"></td>
                </tr>
                <tr>
                    <td colspan="49" class="noborder"></td>
                </tr>
                <tr class="text-center">
                    <td colspan="24" class="noborder">DPJP Utama/drSpGK**</td>
                    <td colspan="25" class="noborder">Dietisien Ruangan</td>
                </tr>
                <tr class="text-center">
                    <td colspan="24" class="noborder"><div id="qrcodep5" style="text-align: center"></td>
                    <td colspan="25" class="noborder"><div id="qrcodepp5" style="text-align: center"></td>
                </tr>
                <tr class="text-center">
                    <td colspan="24" class="noborder">(@{{ item.obji5[32116668] ? item.obji5[32116668] : '……………………………………….' }})</td>
                    <td colspan="25" class="noborder">(@{{ item.obji5[32116669] ? item.obji5[32116669] : '……………………………………….' }})</td>
                </tr>
                <tr>
                    <td colspan="49">**Form skrining gizi ditandatangani oleh dr. SpGK jika hasil skrining ≥3 dan pasien dirujuk/konsul ke TTG rumah sakit</td>
                </tr>
            </table>
        </div>
    @endif

    @if (!empty($res['d6']))
        <div class="format">
            <table width='100%'>
                <tr height=20 class="noborder">
                    <td colspan="8" rowspan="4" class="p3 noborder-tb text-center">
                        @if(stripos(\Request::url(), 'localhost') !== FALSE)
                            <img src="{{ asset('img/logo_only.png') }}" alt="" style="width: 60px;display:block; margin:auto;">
                        @else
                            <img src="{{ asset('service/img/logo_only.png') }}" alt="" style="width: 60px;display:block; margin:auto;">
                        @endif
                    </td>
                    <td colspan="17" rowspan="4" class="noborder-tb text-center" >
                        <strong>{!! $res['profile']->namalengkap !!}</strong> <br>{!! $res['profile']->alamatlengkap !!}<br>TELP : (0413) 81292
                    </td>
                    <td colspan="6" class="noborder">No. RM </td>
                    <td colspan="13" class="noborder">
                        : {!! $res['d1'][0]->nocm  !!}
                    </td>
                    <td colspan="5" rowspan="2" class="border-lr bg-dark" style="font-size: xxx-large;text-align:center">RM</td>
                </tr>
                <tr class="noborder">
                    <td colspan="6" class="noborder">Nama Lengkap</td>
                    <td colspan="11" class="noborder">
                        : {!!  $res['d1'][0]->namapasien  !!}
                    </td>
                    <td colspan="2" class="noborder">{!!  $res['d1'][0]->jeniskelamin == 'PEREMPUAN' ? '(P)' : '(L)'  !!}</td>
                </tr>
                <tr class="noborder">
                    <td colspan="6" class="noborder">Tanggal Lahir</td>
                    <td colspan="13" class="noborder">
                        : {!! date('d-m-Y',strtotime( $res['d1'][0]->tgllahir  )) !!}
                    </td>
                    <td colspan="5" class="border-lr" rowspan="2" style="font-size: xx-large;text-align:center">34.1</td>
                </tr>
                <tr class="noborder">
                    <td colspan="6" class="noborder">NIK</td>
                    <td colspan="11" class="noborder">
                        : {!! $res['d1'][0]->noidentitas  !!}
                    </td>
                </tr>
                <tr class="bordered bg-dark">
                    <th colspan="49" height="20pt">SKRINING GIZI PADA PASIEN ANAK</th>
                </tr>
                <tr class="bordered bg-dark-small">
                    <th colspan="49" height="20pt">(diisi oleh Dietisien)</th>
                </tr>
                <tr>
                    <td colspan="6" class="noborder p3">Alamat</td>
                    <td colspan="18" class="noborder p3">: @{{ item.obji6[32116647] ? item.obji6[32116647] : '' }}</td>
                    <td colspan="6" class="noborder blf p3">Pekerjaan</td>
                    <td colspan="19" class="noborder p3">: @{{ item.obji6[32116649] ? item.obji6[32116649] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="6" class="noborder p3">Tanggal MRS</td>
                    <td colspan="18" class="noborder p3">: @{{item.obji6[32116648] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                    <td colspan="6" class="noborder blf p3">Diagnosis DPJP</td>
                    <td colspan="19" class="noborder p3">: @{{ item.obji6[32116650] ? item.obji6[32116650] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="6" class="noborder"></td>
                    <td colspan="18" class="noborder"></td>
                    <td colspan="6" class="noborder blf"></td>
                    <td colspan="19" class="noborder"></td>
                </tr>
                
                
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center">No</td>
                    <td colspan="41" class="p2">Tanggal Skrining</td>
                    <td colspan="3" class="text-center">Skor I</td>
                    <td colspan="3" class="text-center">Skor II</td>
                </tr>
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center">1</td>
                    <td colspan="41" class="p2">Apakah anak memiliki diagnosis yang dapat mempengaruhi status gizi</td>
                    <td colspan="6" class="text-center"></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Tidak Ada</td>
                    <td colspan="3" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[32116651] ? item.obji6[32116651] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Memungkinkan (gangguan kebiasaan makan, anoreksia, demam tinggi, diare, dyspepsia, nyeri menelan)</td>
                    <td colspan="3" class="text-center">2</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[32116652] ? item.obji6[32116652] : '' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Pasti (disfagia, penyakit kronis, kesadaran menurun, pembedahan saluran cerna, penyakit kritis)</td>
                    <td colspan="3" class="text-center">3</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[32116653] ? item.obji6[32116653] : '' }}</td>
                </tr>
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center noborder">2</td>
                    <td colspan="41" class="p2">Asuhan nutrisi dalam 48 jam</td>
                    <td colspan="6" class="text-center"></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Adekuat dan tidak ada perubahan pola makan</td>
                    <td colspan="3" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[32116654] ? item.obji6[32116654] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Asupan makanan tidak adekuat : ≤ 50 % dari kebiasaan makan</td>
                    <td colspan="3" class="text-center">2</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[32116655] ? item.obji6[32116655] : '' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Tidak ada asupan makanan dalam 48 jam</td>
                    <td colspan="3" class="text-center">3</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[32116656] ? item.obji6[32116656] : '' }}</td>
                </tr>
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center noborder">3</td>
                    <td colspan="41" class="p2">Penyakit/tindakna/pembedahan dan asupan makanan</td>
                    <td colspan="6" class="text-center"></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Anak &lt; 5 tahun : -2 SD sampai 2 SD berdasarkan BB/PB (TB) <br>
                        Anak > 5 tahun : >90% BB/TB
                        </td>
                    <td colspan="3" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[32116657] ? item.obji6[32116657] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Anak &lt; 5 tahun : -3 SD sampai &lt; -2 SD berdasarkan BB/PB (TB) <br>
                        Anak > 5 tahun : 71-90% BB/TB
                        
                        </td>
                    <td colspan="3" class="text-center">2</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[32116658] ? item.obji6[32116658] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Anak &lt; 5 tahun : &lt; -3 SD berdasarkan BB/PB (TB) <br>
                        Anak > 5 tahun : ≤70% BB/TB
                        </td>
                    <td colspan="3" class="text-center">3</td>
                    <td colspan="3" class="text-center">@{{ item.obji6[32116659] ? item.obji6[32116659] : '' }}</td>
                </tr>
                <tr style="font-weight: bolder;text-align: center;">
                    <td colspan="43" class="p2">TOTAL SKOR</td>
                    <td colspan="3" class="text-center"></td>
                    <td colspan="3" class="text-center">@{{ item.obji6[32116661] ? item.obji6[32116661] : '' }}</td>
                </tr>
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="15" class="p2">Risiko Bermasalah Gizi</td>
                    <td colspan="26" class="p2">Risiko Bermasalah Gizi</td>
                    <td colspan="6" rowspan="4" class="text-center noborder">
                        <br>
                        <table style="display:fixed-layout;width:50%;" valign="bottom">
                            <tr>
                                <td colspan="3">@{{ item.obji6[32116662] ? item.obji6[32116662] : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="3">@{{ item.obji6[32116663] ? item.obji6[32116663] : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="3">@{{ item.obji6[32116664] ? item.obji6[32116664] : '' }}</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="15" class="p2">* Skor 0-1 = Risiko Rendah</td>
                    <td colspan="26" class="p2">* Skrining ulang 5 hari (Terapi gizi oleh DPJP + Dietisien)</td>
                </tr>
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="15" class="p2">* Skor 2-3 = Risiko Sedang</td>
                    <td colspan="26" class="p2">* Skrining ulang 3 hari (Terapi gizi oleh DPJP + Dietisien)</td>
                </tr>
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="15" class="p2">* Skor ≥ 4 = Risiko Tinggi</td>
                    <td colspan="26" class="p2">* Tim Terapi Gizi</td>
                </tr>
                <tr>
                    <td colspan="14" class="text-center p2" style="font-weight: bolder;">SKRINING I</td>
                    <td colspan="29" class="p2">Dietisien : @{{ item.obji6[32116665] ? item.obji6[32116665] : '.........................................................' }}</td>
                    <td colspan="3"></td>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="14" class="text-center p2" style="font-weight: bolder;">SKRINING II</td>
                    <td colspan="29" class="p2">Dietisien : @{{ item.obji6[32116666] ? item.obji6[32116666] : '.........................................................' }}</td>
                    <td colspan="3"></td>
                    <td colspan="3"></td>
                </tr>
                <tr >
                    <td colspan="14" class="text-center p2" style="font-weight: bolder;">SKRINING III</td>
                    <td colspan="29" class="p2">Dietisien : @{{ item.obji6[32116667] ? item.obji6[32116667] : '.........................................................' }}</td>
                    <td colspan="3"></td>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="3" class="p3 noborder" rowspan="2" valign="top">NB : </td>
                    <td colspan="46" class="p3 noborder">Untuk Pasien Risiko Tinggi dan malnutrisi format skrining</td>
                </tr>
                <tr>
                    <td colspan="46" class="p3 noborder">ditandatangani oleh Dokter Spesialis Gizi Klinis</td>
                </tr>
                <tr>
                    <td colspan="49" class="noborder"></td>
                </tr>
                <tr>
                    <td colspan="49" class="noborder"></td>
                </tr>
                <tr class="text-center">
                    <td colspan="24" class="noborder">DPJP Utama/drSpGK**</td>
                    <td colspan="25" class="noborder">Dietisien Ruangan</td>
                </tr>
                <tr class="text-center">
                    <td colspan="24" class="noborder"><div id="qrcodep6" style="text-align: center"></td>
                    <td colspan="25" class="noborder"><div id="qrcodepp6" style="text-align: center"></td>
                </tr>
                <tr class="text-center">
                    <td colspan="24" class="noborder">(@{{ item.obji6[32116668] ? item.obji6[32116668] : '……………………………………….' }})</td>
                    <td colspan="25" class="noborder">(@{{ item.obji6[32116669] ? item.obji6[32116669] : '……………………………………….' }})</td>
                </tr>
                <tr>
                    <td colspan="49">**Form skrining gizi ditandatangani oleh dr. SpGK jika hasil skrining ≥3 dan pasien dirujuk/konsul ke TTG rumah sakit</td>
                </tr>
            </table>
        </div>
    @endif

    @if (!empty($res['d7']))
        <div class="format">
            <table width='100%'>
                <tr height=20 class="noborder">
                    <td colspan="8" rowspan="4" class="p3 noborder-tb text-center">
                        @if(stripos(\Request::url(), 'localhost') !== FALSE)
                            <img src="{{ asset('img/logo_only.png') }}" alt="" style="width: 60px;display:block; margin:auto;">
                        @else
                            <img src="{{ asset('service/img/logo_only.png') }}" alt="" style="width: 60px;display:block; margin:auto;">
                        @endif
                    </td>
                    <td colspan="17" rowspan="4" class="noborder-tb text-center" >
                        <strong>{!! $res['profile']->namalengkap !!}</strong> <br>{!! $res['profile']->alamatlengkap !!}<br>TELP : (0413) 81292
                    </td>
                    <td colspan="6" class="noborder">No. RM </td>
                    <td colspan="13" class="noborder">
                        : {!! $res['d1'][0]->nocm  !!}
                    </td>
                    <td colspan="5" rowspan="2" class="border-lr bg-dark" style="font-size: xxx-large;text-align:center">RM</td>
                </tr>
                <tr class="noborder">
                    <td colspan="6" class="noborder">Nama Lengkap</td>
                    <td colspan="11" class="noborder">
                        : {!!  $res['d1'][0]->namapasien  !!}
                    </td>
                    <td colspan="2" class="noborder">{!!  $res['d1'][0]->jeniskelamin == 'PEREMPUAN' ? '(P)' : '(L)'  !!}</td>
                </tr>
                <tr class="noborder">
                    <td colspan="6" class="noborder">Tanggal Lahir</td>
                    <td colspan="13" class="noborder">
                        : {!! date('d-m-Y',strtotime( $res['d1'][0]->tgllahir  )) !!}
                    </td>
                    <td colspan="5" class="border-lr" rowspan="2" style="font-size: xx-large;text-align:center">34.1</td>
                </tr>
                <tr class="noborder">
                    <td colspan="6" class="noborder">NIK</td>
                    <td colspan="11" class="noborder">
                        : {!! $res['d1'][0]->noidentitas  !!}
                    </td>
                </tr>
                <tr class="bordered bg-dark">
                    <th colspan="49" height="20pt">SKRINING GIZI PADA PASIEN ANAK</th>
                </tr>
                <tr class="bordered bg-dark-small">
                    <th colspan="49" height="20pt">(diisi oleh Dietisien)</th>
                </tr>
                <tr>
                    <td colspan="6" class="noborder p3">Alamat</td>
                    <td colspan="18" class="noborder p3">: @{{ item.obji7[32116647] ? item.obji7[32116647] : '' }}</td>
                    <td colspan="6" class="noborder blf p3">Pekerjaan</td>
                    <td colspan="19" class="noborder p3">: @{{ item.obji7[32116649] ? item.obji7[32116649] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="6" class="noborder p3">Tanggal MRS</td>
                    <td colspan="18" class="noborder p3">: @{{item.obji7[32116648] | toDate | date:'dd-MM-yyyy HH:mm'}}</td>
                    <td colspan="6" class="noborder blf p3">Diagnosis DPJP</td>
                    <td colspan="19" class="noborder p3">: @{{ item.obji7[32116650] ? item.obji7[32116650] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="6" class="noborder"></td>
                    <td colspan="18" class="noborder"></td>
                    <td colspan="6" class="noborder blf"></td>
                    <td colspan="19" class="noborder"></td>
                </tr>
                
                
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center">No</td>
                    <td colspan="41" class="p2">Tanggal Skrining</td>
                    <td colspan="3" class="text-center">Skor I</td>
                    <td colspan="3" class="text-center">Skor II</td>
                </tr>
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center">1</td>
                    <td colspan="41" class="p2">Apakah anak memiliki diagnosis yang dapat mempengaruhi status gizi</td>
                    <td colspan="6" class="text-center"></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Tidak Ada</td>
                    <td colspan="3" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[32116651] ? item.obji7[32116651] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Memungkinkan (gangguan kebiasaan makan, anoreksia, demam tinggi, diare, dyspepsia, nyeri menelan)</td>
                    <td colspan="3" class="text-center">2</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[32116652] ? item.obji7[32116652] : '' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Pasti (disfagia, penyakit kronis, kesadaran menurun, pembedahan saluran cerna, penyakit kritis)</td>
                    <td colspan="3" class="text-center">3</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[32116653] ? item.obji7[32116653] : '' }}</td>
                </tr>
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center noborder">2</td>
                    <td colspan="41" class="p2">Asuhan nutrisi dalam 48 jam</td>
                    <td colspan="6" class="text-center"></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Adekuat dan tidak ada perubahan pola makan</td>
                    <td colspan="3" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[32116654] ? item.obji7[32116654] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Asupan makanan tidak adekuat : ≤ 50 % dari kebiasaan makan</td>
                    <td colspan="3" class="text-center">2</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[32116655] ? item.obji7[32116655] : '' }}</td>
                </tr>
                <tr class="btm">
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Tidak ada asupan makanan dalam 48 jam</td>
                    <td colspan="3" class="text-center">3</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[32116656] ? item.obji7[32116656] : '' }}</td>
                </tr>
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center noborder">3</td>
                    <td colspan="41" class="p2">Penyakit/tindakna/pembedahan dan asupan makanan</td>
                    <td colspan="6" class="text-center"></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Anak &lt; 5 tahun : -2 SD sampai 2 SD berdasarkan BB/PB (TB) <br>
                        Anak > 5 tahun : >90% BB/TB
                        </td>
                    <td colspan="3" class="text-center">0</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[32116657] ? item.obji7[32116657] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Anak &lt; 5 tahun : -3 SD sampai &lt; -2 SD berdasarkan BB/PB (TB) <br>
                        Anak > 5 tahun : 71-90% BB/TB
                        
                        </td>
                    <td colspan="3" class="text-center">2</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[32116658] ? item.obji7[32116658] : '' }}</td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="41" class="p2">Anak &lt; 5 tahun : &lt; -3 SD berdasarkan BB/PB (TB) <br>
                        Anak > 5 tahun : ≤70% BB/TB
                        </td>
                    <td colspan="3" class="text-center">3</td>
                    <td colspan="3" class="text-center">@{{ item.obji7[32116659] ? item.obji7[32116659] : '' }}</td>
                </tr>
                <tr style="font-weight: bolder;text-align: center;">
                    <td colspan="43" class="p2">TOTAL SKOR</td>
                    <td colspan="3" class="text-center"></td>
                    <td colspan="3" class="text-center">@{{ item.obji7[32116661] ? item.obji7[32116661] : '' }}</td>
                </tr>
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="15" class="p2">Risiko Bermasalah Gizi</td>
                    <td colspan="26" class="p2">Risiko Bermasalah Gizi</td>
                    <td colspan="6" rowspan="4" class="text-center noborder">
                        <br>
                        <table style="display:fixed-layout;width:50%;" valign="bottom">
                            <tr>
                                <td colspan="3">@{{ item.obji7[32116662] ? item.obji7[32116662] : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="3">@{{ item.obji7[32116663] ? item.obji7[32116663] : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="3">@{{ item.obji7[32116664] ? item.obji7[32116664] : '' }}</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="15" class="p2">* Skor 0-1 = Risiko Rendah</td>
                    <td colspan="26" class="p2">* Skrining ulang 5 hari (Terapi gizi oleh DPJP + Dietisien)</td>
                </tr>
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="15" class="p2">* Skor 2-3 = Risiko Sedang</td>
                    <td colspan="26" class="p2">* Skrining ulang 3 hari (Terapi gizi oleh DPJP + Dietisien)</td>
                </tr>
                <tr style="font-weight: bolder;">
                    <td colspan="2" class="text-center noborder"></td>
                    <td colspan="15" class="p2">* Skor ≥ 4 = Risiko Tinggi</td>
                    <td colspan="26" class="p2">* Tim Terapi Gizi</td>
                </tr>
                <tr>
                    <td colspan="14" class="text-center p2" style="font-weight: bolder;">SKRINING I</td>
                    <td colspan="29" class="p2">Dietisien : @{{ item.obji7[32116665] ? item.obji7[32116665] : '.........................................................' }}</td>
                    <td colspan="3"></td>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="14" class="text-center p2" style="font-weight: bolder;">SKRINING II</td>
                    <td colspan="29" class="p2">Dietisien : @{{ item.obji7[32116666] ? item.obji7[32116666] : '.........................................................' }}</td>
                    <td colspan="3"></td>
                    <td colspan="3"></td>
                </tr>
                <tr >
                    <td colspan="14" class="text-center p2" style="font-weight: bolder;">SKRINING III</td>
                    <td colspan="29" class="p2">Dietisien : @{{ item.obji7[32116667] ? item.obji7[32116667] : '.........................................................' }}</td>
                    <td colspan="3"></td>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="3" class="p3 noborder" rowspan="2" valign="top">NB : </td>
                    <td colspan="46" class="p3 noborder">Untuk Pasien Risiko Tinggi dan malnutrisi format skrining</td>
                </tr>
                <tr>
                    <td colspan="46" class="p3 noborder">ditandatangani oleh Dokter Spesialis Gizi Klinis</td>
                </tr>
                <tr>
                    <td colspan="49" class="noborder"></td>
                </tr>
                <tr>
                    <td colspan="49" class="noborder"></td>
                </tr>
                <tr class="text-center">
                    <td colspan="24" class="noborder">DPJP Utama/drSpGK**</td>
                    <td colspan="25" class="noborder">Dietisien Ruangan</td>
                </tr>
                <tr class="text-center">
                    <td colspan="24" class="noborder"><div id="qrcodep7" style="text-align: center"></td>
                    <td colspan="25" class="noborder"><div id="qrcodepp7" style="text-align: center"></td>
                </tr>
                <tr class="text-center">
                    <td colspan="24" class="noborder">(@{{ item.obji7[32116668] ? item.obji7[32116668] : '……………………………………….' }})</td>
                    <td colspan="25" class="noborder">(@{{ item.obji7[32116669] ? item.obji7[32116669] : '……………………………………….' }})</td>
                </tr>
                <tr>
                    <td colspan="49">**Form skrining gizi ditandatangani oleh dr. SpGK jika hasil skrining ≥3 dan pasien dirujuk/konsul ke TTG rumah sakit</td>
                </tr>
            </table>
        </div>
    @endif
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

    angular.controller('cetakSkriningGiziAnak', function ($scope, $http, httpService) {
        $scope.item = {
            obj: [],
            obj2: [],
			obji2: [],
			obji3: [],
			obji4: [],
			obji5: [],
			obji6: [],
			obji7: [],
        }

        var dataLoad = {!! json_encode($res['d1'] )!!};
		var dataLoad2 = {!! json_encode($res['d2'] )!!};
		var dataLoad3 = {!! json_encode($res['d3'] )!!};
		var dataLoad4 = {!! json_encode($res['d4'] )!!};
		var dataLoad5 = {!! json_encode($res['d5'] )!!};
		var dataLoad6 = {!! json_encode($res['d6'] )!!};
		var dataLoad7 = {!! json_encode($res['d7'] )!!};

        if(dataLoad.length > 0){
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
            var p1 = $scope.item.obj[32116668];
            var pp1 = $scope.item.obj[32116669];
            if (p1 != undefined) {
                jQuery('#qrcodep1').qrcode({
                width	: 70,
                height	: 70,
                text	: "Tanda Tangan Digital Oleh " + p1
                });	
            }
            if (pp1 != undefined) {
                jQuery('#qrcodepp1').qrcode({
                width	: 70,
                height	: 70,
                text	: "Tanda Tangan Digital Oleh " + pp1
                });	
            }
        }

        if(dataLoad2.length > 0){
            for (var i = 0; i <= dataLoad2.length - 1; i++) {
                if(dataLoad2[i].emrdfk == 3110029){
                    continue;
                }
                if (dataLoad2[i].type == "textbox") {
                    $('#id_'+dataLoad2[i].emrdfk).html( dataLoad2[i].value)
                    $scope.item.obji2[dataLoad2[i].emrdfk] = dataLoad2[i].value
                }
                if (dataLoad2[i].type == "checkbox") {
                    var chekedd = false
                    if (dataLoad2[i].value == '1') {
                        var chekedd = true
                    }
                    $scope.item.obji2[dataLoad2[i].emrdfk] = chekedd
                }
                if (dataLoad2[i].type == "radio") {
                    $scope.item.obji2[dataLoad2[i].emrdfk] = dataLoad2[i].value

                }

                if (dataLoad2[i].type == "datetime") {
                    $('#id_'+dataLoad2[i].emrdfk).html( dataLoad2[i].value)
                    $scope.item.obji2[dataLoad2[i].emrdfk] = dataLoad2[i].value
                }
                if (dataLoad2[i].type == "time") {
                    $scope.item.obji2[dataLoad2[i].emrdfk] = dataLoad2[i].value
                }
                if (dataLoad2[i].type == "date") {
                    $scope.item.obji2[dataLoad2[i].emrdfk] = dataLoad2[i].value
                }

                if (dataLoad2[i].type == "checkboxtextbox") {
                    $scope.item.obji2[dataLoad2[i].emrdfk] = dataLoad2[i].value
                    $scope.item.obji2[dataLoad2[i].emrdfk] = true
                }
                if (dataLoad2[i].type == "textarea") {
                    $('#id_'+dataLoad2[i].emrdfk).html( dataLoad2[i].value)
                    $scope.item.obji2[dataLoad2[i].emrdfk] = dataLoad2[i].value
                }
                if (dataLoad2[i].type == "combobox") {
        
                    var str = dataLoad2[i].value
                    if(str != null)
                    {
                        var res = str.split("~");
                        
                        $scope.item.obji2[dataLoad2[i].emrdfk] = res[1]
                        $('#id_'+dataLoad2[i].emrdfk).html ( res[1])
                    }
                }
                if (dataLoad2[i].type == "combobox2") {
                    var str = dataLoad2[i].value
                    var res = str.split("~");
                    
                    $scope.item.obji2[dataLoad2[i].emrdfk+""+1] = res[0]
                    $scope.item.obji2[dataLoad2[i].emrdfk] = res[1]
                    $('#id_'+dataLoad2[i].emrdfk).html ( res[1])

                }

                if (dataLoad2[i].emrdfk == '423816' ) {
                    $scope.hariTgl = dataLoad2[i].value
                }

                if (dataLoad2[i].emrdfk == '2000001974' ) {
                    $scope.jamPeriksa = dataLoad2[i].value
                }

                if (dataLoad2[i].emrdfk == '2000002354' ) {
                    $scope.tgl1 = dataLoad2[i].value
                }
                if (dataLoad2[i].emrdfk == '2000002357' ) {
                    $scope.tgl2 = dataLoad2[i].value
                }
                if (dataLoad2[i].emrdfk == '2000002360' ) {
                    $scope.tgl3 = dataLoad2[i].value
                }
                if (dataLoad2[i].emrdfk == '2000002363' ) {
                    $scope.tgl4 = dataLoad2[i].value
                }
                if (dataLoad2[i].emrdfk == '2000002366' ) {
                    $scope.tgl5 = dataLoad2[i].value
                }
                if (dataLoad2[i].emrdfk == '2000002369' ) {
                    $scope.tgl6 = dataLoad2[i].value
                }
                if (dataLoad2[i].emrdfk == '2000002372' ) {
                    $scope.tgl7 = dataLoad2[i].value
                }
                if (dataLoad2[i].emrdfk == '2000002375' ) {
                    $scope.tgl8 = dataLoad2[i].value
                }
                if (dataLoad2[i].emrdfk == '2000002378' ) {
                    $scope.tgl9 = dataLoad2[i].value
                }
                if (dataLoad2[i].emrdfk == '2000002381' ) {
                    $scope.tgl10 = dataLoad2[i].value
                }
                if (dataLoad2[i].emrdfk == '2000002384' ) {
                    $scope.tgl11 = dataLoad2[i].value
                }
                if (dataLoad2[i].emrdfk == '2000002387' ) {
                    $scope.tgl12 = dataLoad2[i].value
                }
                if (dataLoad2[i].emrdfk == '2000002390' ) {
                    $scope.tgl13 = dataLoad2[i].value
                }
                if (dataLoad2[i].emrdfk == '2000002393' ) {
                    $scope.tgl14 = dataLoad2[i].value
                }
                if (dataLoad2[i].emrdfk == '2000002396' ) {
                    $scope.tgl15 = dataLoad2[i].value
                }
                
                if (dataLoad2[i].emrdfk == '2000002408' ) {
                    $scope.pukul2 = dataLoad2[i].value
                }

                $scope.tglemr = dataLoad2[i].tgl
                
            }
            var p2 = $scope.item.obji2[32116668];
            var pp2 = $scope.item.obji2[32116669];
            if (p2 != undefined) {
                jQuery('#qrcodep2').qrcode({
                width	: 70,
                height	: 70,
                text	: "Tanda Tangan Digital Oleh " + p2
                });	
            }
            if (pp2 != undefined) {
                jQuery('#qrcodepp2').qrcode({
                width	: 70,
                height	: 70,
                text	: "Tanda Tangan Digital Oleh " + pp2
                });	
            }
        }

        if(dataLoad3.length > 0){
            for (var i = 0; i <= dataLoad3.length - 1; i++) {
                if(dataLoad3[i].emrdfk == 3110029){
                    continue;
                }
                if (dataLoad3[i].type == "textbox") {
                    $('#id_'+dataLoad3[i].emrdfk).html( dataLoad3[i].value)
                    $scope.item.obji3[dataLoad3[i].emrdfk] = dataLoad3[i].value
                }
                if (dataLoad3[i].type == "checkbox") {
                    var chekedd = false
                    if (dataLoad3[i].value == '1') {
                        var chekedd = true
                    }
                    $scope.item.obji3[dataLoad3[i].emrdfk] = chekedd
                }
                if (dataLoad3[i].type == "radio") {
                    $scope.item.obji3[dataLoad3[i].emrdfk] = dataLoad3[i].value

                }

                if (dataLoad3[i].type == "datetime") {
                    $('#id_'+dataLoad3[i].emrdfk).html( dataLoad3[i].value)
                    $scope.item.obji3[dataLoad3[i].emrdfk] = dataLoad3[i].value
                }
                if (dataLoad3[i].type == "time") {
                    $scope.item.obji3[dataLoad3[i].emrdfk] = dataLoad3[i].value
                }
                if (dataLoad3[i].type == "date") {
                    $scope.item.obji3[dataLoad3[i].emrdfk] = dataLoad3[i].value
                }

                if (dataLoad3[i].type == "checkboxtextbox") {
                    $scope.item.obji3[dataLoad3[i].emrdfk] = dataLoad3[i].value
                    $scope.item.obji3[dataLoad3[i].emrdfk] = true
                }
                if (dataLoad3[i].type == "textarea") {
                    $('#id_'+dataLoad3[i].emrdfk).html( dataLoad3[i].value)
                    $scope.item.obji3[dataLoad3[i].emrdfk] = dataLoad3[i].value
                }
                if (dataLoad3[i].type == "combobox") {
        
                    var str = dataLoad3[i].value
                    if(str != null)
                    {
                        var res = str.split("~");
                        
                        $scope.item.obji3[dataLoad3[i].emrdfk] = res[1]
                        $('#id_'+dataLoad3[i].emrdfk).html ( res[1])
                    }
                }
                if (dataLoad3[i].type == "combobox2") {
                    var str = dataLoad3[i].value
                    var res = str.split("~");
                    
                    $scope.item.obji3[dataLoad3[i].emrdfk+""+1] = res[0]
                    $scope.item.obji3[dataLoad3[i].emrdfk] = res[1]
                    $('#id_'+dataLoad3[i].emrdfk).html ( res[1])

                }

                if (dataLoad3[i].emrdfk == '423816' ) {
                    $scope.hariTgl = dataLoad3[i].value
                }

                if (dataLoad3[i].emrdfk == '2000001974' ) {
                    $scope.jamPeriksa = dataLoad3[i].value
                }

                if (dataLoad3[i].emrdfk == '2000002354' ) {
                    $scope.tgl1 = dataLoad3[i].value
                }
                if (dataLoad3[i].emrdfk == '2000002357' ) {
                    $scope.tgl2 = dataLoad3[i].value
                }
                if (dataLoad3[i].emrdfk == '2000002360' ) {
                    $scope.tgl3 = dataLoad3[i].value
                }
                if (dataLoad3[i].emrdfk == '2000002363' ) {
                    $scope.tgl4 = dataLoad3[i].value
                }
                if (dataLoad3[i].emrdfk == '2000002366' ) {
                    $scope.tgl5 = dataLoad3[i].value
                }
                if (dataLoad3[i].emrdfk == '2000002369' ) {
                    $scope.tgl6 = dataLoad3[i].value
                }
                if (dataLoad3[i].emrdfk == '2000002372' ) {
                    $scope.tgl7 = dataLoad3[i].value
                }
                if (dataLoad3[i].emrdfk == '2000002375' ) {
                    $scope.tgl8 = dataLoad3[i].value
                }
                if (dataLoad3[i].emrdfk == '2000002378' ) {
                    $scope.tgl9 = dataLoad3[i].value
                }
                if (dataLoad3[i].emrdfk == '2000002381' ) {
                    $scope.tgl10 = dataLoad3[i].value
                }
                if (dataLoad3[i].emrdfk == '2000002384' ) {
                    $scope.tgl11 = dataLoad3[i].value
                }
                if (dataLoad3[i].emrdfk == '2000002387' ) {
                    $scope.tgl12 = dataLoad3[i].value
                }
                if (dataLoad3[i].emrdfk == '2000002390' ) {
                    $scope.tgl13 = dataLoad3[i].value
                }
                if (dataLoad3[i].emrdfk == '2000002393' ) {
                    $scope.tgl14 = dataLoad3[i].value
                }
                if (dataLoad3[i].emrdfk == '2000002396' ) {
                    $scope.tgl15 = dataLoad3[i].value
                }
                
                if (dataLoad3[i].emrdfk == '2000002408' ) {
                    $scope.pukul2 = dataLoad3[i].value
                }

                $scope.tglemr = dataLoad3[i].tgl
                
            }
            var p3 = $scope.item.obji3[32116668];
            var pp3 = $scope.item.obji3[32116669];
            if (p3 != undefined) {
                jQuery('#qrcodep3').qrcode({
                width	: 70,
                height	: 70,
                text	: "Tanda Tangan Digital Oleh " + p3
                });	
            }
            if (pp3 != undefined) {
                jQuery('#qrcodepp3').qrcode({
                width	: 70,
                height	: 70,
                text	: "Tanda Tangan Digital Oleh " + pp3
                });	
            }
        }

        if(dataLoad4.length > 0){
            for (var i = 0; i <= dataLoad4.length - 1; i++) {
                if(dataLoad4[i].emrdfk == 3110029){
                    continue;
                }
                if (dataLoad4[i].type == "textbox") {
                    $('#id_'+dataLoad4[i].emrdfk).html( dataLoad4[i].value)
                    $scope.item.obji4[dataLoad4[i].emrdfk] = dataLoad4[i].value
                }
                if (dataLoad4[i].type == "checkbox") {
                    var chekedd = false
                    if (dataLoad4[i].value == '1') {
                        var chekedd = true
                    }
                    $scope.item.obji4[dataLoad4[i].emrdfk] = chekedd
                }
                if (dataLoad4[i].type == "radio") {
                    $scope.item.obji4[dataLoad4[i].emrdfk] = dataLoad4[i].value

                }

                if (dataLoad4[i].type == "datetime") {
                    $('#id_'+dataLoad4[i].emrdfk).html( dataLoad4[i].value)
                    $scope.item.obji4[dataLoad4[i].emrdfk] = dataLoad4[i].value
                }
                if (dataLoad4[i].type == "time") {
                    $scope.item.obji4[dataLoad4[i].emrdfk] = dataLoad4[i].value
                }
                if (dataLoad4[i].type == "date") {
                    $scope.item.obji4[dataLoad4[i].emrdfk] = dataLoad4[i].value
                }

                if (dataLoad4[i].type == "checkboxtextbox") {
                    $scope.item.obji4[dataLoad4[i].emrdfk] = dataLoad4[i].value
                    $scope.item.obji4[dataLoad4[i].emrdfk] = true
                }
                if (dataLoad4[i].type == "textarea") {
                    $('#id_'+dataLoad4[i].emrdfk).html( dataLoad4[i].value)
                    $scope.item.obji4[dataLoad4[i].emrdfk] = dataLoad4[i].value
                }
                if (dataLoad4[i].type == "combobox") {
        
                    var str = dataLoad4[i].value
                    if(str != null)
                    {
                        var res = str.split("~");
                        
                        $scope.item.obji4[dataLoad4[i].emrdfk] = res[1]
                        $('#id_'+dataLoad4[i].emrdfk).html ( res[1])
                    }
                }
                if (dataLoad4[i].type == "combobox2") {
                    var str = dataLoad4[i].value
                    var res = str.split("~");
                    
                    $scope.item.obji4[dataLoad4[i].emrdfk+""+1] = res[0]
                    $scope.item.obji4[dataLoad4[i].emrdfk] = res[1]
                    $('#id_'+dataLoad4[i].emrdfk).html ( res[1])

                }

                if (dataLoad4[i].emrdfk == '423816' ) {
                    $scope.hariTgl = dataLoad4[i].value
                }

                if (dataLoad4[i].emrdfk == '2000001974' ) {
                    $scope.jamPeriksa = dataLoad4[i].value
                }

                if (dataLoad4[i].emrdfk == '2000002354' ) {
                    $scope.tgl1 = dataLoad4[i].value
                }
                if (dataLoad4[i].emrdfk == '2000002357' ) {
                    $scope.tgl2 = dataLoad4[i].value
                }
                if (dataLoad4[i].emrdfk == '2000002360' ) {
                    $scope.tgl3 = dataLoad4[i].value
                }
                if (dataLoad4[i].emrdfk == '2000002363' ) {
                    $scope.tgl4 = dataLoad4[i].value
                }
                if (dataLoad4[i].emrdfk == '2000002366' ) {
                    $scope.tgl5 = dataLoad4[i].value
                }
                if (dataLoad4[i].emrdfk == '2000002369' ) {
                    $scope.tgl6 = dataLoad4[i].value
                }
                if (dataLoad4[i].emrdfk == '2000002372' ) {
                    $scope.tgl7 = dataLoad4[i].value
                }
                if (dataLoad4[i].emrdfk == '2000002375' ) {
                    $scope.tgl8 = dataLoad4[i].value
                }
                if (dataLoad4[i].emrdfk == '2000002378' ) {
                    $scope.tgl9 = dataLoad4[i].value
                }
                if (dataLoad4[i].emrdfk == '2000002381' ) {
                    $scope.tgl10 = dataLoad4[i].value
                }
                if (dataLoad4[i].emrdfk == '2000002384' ) {
                    $scope.tgl11 = dataLoad4[i].value
                }
                if (dataLoad4[i].emrdfk == '2000002387' ) {
                    $scope.tgl12 = dataLoad4[i].value
                }
                if (dataLoad4[i].emrdfk == '2000002390' ) {
                    $scope.tgl13 = dataLoad4[i].value
                }
                if (dataLoad4[i].emrdfk == '2000002393' ) {
                    $scope.tgl14 = dataLoad4[i].value
                }
                if (dataLoad4[i].emrdfk == '2000002396' ) {
                    $scope.tgl15 = dataLoad4[i].value
                }
                
                if (dataLoad4[i].emrdfk == '2000002408' ) {
                    $scope.pukul2 = dataLoad4[i].value
                }

                $scope.tglemr = dataLoad4[i].tgl
                
            }
            var p4 = $scope.item.obji4[32116668];
            var pp4 = $scope.item.obji4[32116669];
            if (p4 != undefined) {
                jQuery('#qrcodep4').qrcode({
                width	: 70,
                height	: 70,
                text	: "Tanda Tangan Digital Oleh " + p4
                });	
            }
            if (pp4 != undefined) {
                jQuery('#qrcodepp4').qrcode({
                width	: 70,
                height	: 70,
                text	: "Tanda Tangan Digital Oleh " + pp4
                });	
            }
        }

        if(dataLoad5.length > 0){
            for (var i = 0; i <= dataLoad5.length - 1; i++) {
                if(dataLoad5[i].emrdfk == 3110029){
                    continue;
                }
                if (dataLoad5[i].type == "textbox") {
                    $('#id_'+dataLoad5[i].emrdfk).html( dataLoad5[i].value)
                    $scope.item.obji5[dataLoad5[i].emrdfk] = dataLoad5[i].value
                }
                if (dataLoad5[i].type == "checkbox") {
                    var chekedd = false
                    if (dataLoad5[i].value == '1') {
                        var chekedd = true
                    }
                    $scope.item.obji5[dataLoad5[i].emrdfk] = chekedd
                }
                if (dataLoad5[i].type == "radio") {
                    $scope.item.obji5[dataLoad5[i].emrdfk] = dataLoad5[i].value

                }

                if (dataLoad5[i].type == "datetime") {
                    $('#id_'+dataLoad5[i].emrdfk).html( dataLoad5[i].value)
                    $scope.item.obji5[dataLoad5[i].emrdfk] = dataLoad5[i].value
                }
                if (dataLoad5[i].type == "time") {
                    $scope.item.obji5[dataLoad5[i].emrdfk] = dataLoad5[i].value
                }
                if (dataLoad5[i].type == "date") {
                    $scope.item.obji5[dataLoad5[i].emrdfk] = dataLoad5[i].value
                }

                if (dataLoad5[i].type == "checkboxtextbox") {
                    $scope.item.obji5[dataLoad5[i].emrdfk] = dataLoad5[i].value
                    $scope.item.obji5[dataLoad5[i].emrdfk] = true
                }
                if (dataLoad5[i].type == "textarea") {
                    $('#id_'+dataLoad5[i].emrdfk).html( dataLoad5[i].value)
                    $scope.item.obji5[dataLoad5[i].emrdfk] = dataLoad5[i].value
                }
                if (dataLoad5[i].type == "combobox") {
        
                    var str = dataLoad5[i].value
                    if(str != null)
                    {
                        var res = str.split("~");
                        
                        $scope.item.obji5[dataLoad5[i].emrdfk] = res[1]
                        $('#id_'+dataLoad5[i].emrdfk).html ( res[1])
                    }
                }
                if (dataLoad5[i].type == "combobox2") {
                    var str = dataLoad5[i].value
                    var res = str.split("~");
                    
                    $scope.item.obji5[dataLoad5[i].emrdfk+""+1] = res[0]
                    $scope.item.obji5[dataLoad5[i].emrdfk] = res[1]
                    $('#id_'+dataLoad5[i].emrdfk).html ( res[1])

                }

                if (dataLoad5[i].emrdfk == '423816' ) {
                    $scope.hariTgl = dataLoad5[i].value
                }

                if (dataLoad5[i].emrdfk == '2000001974' ) {
                    $scope.jamPeriksa = dataLoad5[i].value
                }

                if (dataLoad5[i].emrdfk == '2000002354' ) {
                    $scope.tgl1 = dataLoad5[i].value
                }
                if (dataLoad5[i].emrdfk == '2000002357' ) {
                    $scope.tgl2 = dataLoad5[i].value
                }
                if (dataLoad5[i].emrdfk == '2000002360' ) {
                    $scope.tgl3 = dataLoad5[i].value
                }
                if (dataLoad5[i].emrdfk == '2000002363' ) {
                    $scope.tgl4 = dataLoad5[i].value
                }
                if (dataLoad5[i].emrdfk == '2000002366' ) {
                    $scope.tgl5 = dataLoad5[i].value
                }
                if (dataLoad5[i].emrdfk == '2000002369' ) {
                    $scope.tgl6 = dataLoad5[i].value
                }
                if (dataLoad5[i].emrdfk == '2000002372' ) {
                    $scope.tgl7 = dataLoad5[i].value
                }
                if (dataLoad5[i].emrdfk == '2000002375' ) {
                    $scope.tgl8 = dataLoad5[i].value
                }
                if (dataLoad5[i].emrdfk == '2000002378' ) {
                    $scope.tgl9 = dataLoad5[i].value
                }
                if (dataLoad5[i].emrdfk == '2000002381' ) {
                    $scope.tgl10 = dataLoad5[i].value
                }
                if (dataLoad5[i].emrdfk == '2000002384' ) {
                    $scope.tgl11 = dataLoad5[i].value
                }
                if (dataLoad5[i].emrdfk == '2000002387' ) {
                    $scope.tgl12 = dataLoad5[i].value
                }
                if (dataLoad5[i].emrdfk == '2000002390' ) {
                    $scope.tgl13 = dataLoad5[i].value
                }
                if (dataLoad5[i].emrdfk == '2000002393' ) {
                    $scope.tgl14 = dataLoad5[i].value
                }
                if (dataLoad5[i].emrdfk == '2000002396' ) {
                    $scope.tgl15 = dataLoad5[i].value
                }
                
                if (dataLoad5[i].emrdfk == '2000002408' ) {
                    $scope.pukul2 = dataLoad5[i].value
                }

                $scope.tglemr = dataLoad5[i].tgl
                
            }

            var p5 = $scope.item.obji5[32116668];
            var pp5 = $scope.item.obji5[32116669];
            if (p5 != undefined) {
                jQuery('#qrcodep5').qrcode({
                width	: 70,
                height	: 70,
                text	: "Tanda Tangan Digital Oleh " + p5
                });	
            }
            if (pp5 != undefined) {
                jQuery('#qrcodepp5').qrcode({
                width	: 70,
                height	: 70,
                text	: "Tanda Tangan Digital Oleh " + pp5
                });	
            }
        }

        if(dataLoad6.length > 0){
            for (var i = 0; i <= dataLoad6.length - 1; i++) {
                if(dataLoad6[i].emrdfk == 3110029){
                    continue;
                }
                if (dataLoad6[i].type == "textbox") {
                    $('#id_'+dataLoad6[i].emrdfk).html( dataLoad6[i].value)
                    $scope.item.obji6[dataLoad6[i].emrdfk] = dataLoad6[i].value
                }
                if (dataLoad6[i].type == "checkbox") {
                    var chekedd = false
                    if (dataLoad6[i].value == '1') {
                        var chekedd = true
                    }
                    $scope.item.obji6[dataLoad6[i].emrdfk] = chekedd
                }
                if (dataLoad6[i].type == "radio") {
                    $scope.item.obji6[dataLoad6[i].emrdfk] = dataLoad6[i].value

                }

                if (dataLoad6[i].type == "datetime") {
                    $('#id_'+dataLoad6[i].emrdfk).html( dataLoad6[i].value)
                    $scope.item.obji6[dataLoad6[i].emrdfk] = dataLoad6[i].value
                }
                if (dataLoad6[i].type == "time") {
                    $scope.item.obji6[dataLoad6[i].emrdfk] = dataLoad6[i].value
                }
                if (dataLoad6[i].type == "date") {
                    $scope.item.obji6[dataLoad6[i].emrdfk] = dataLoad6[i].value
                }

                if (dataLoad6[i].type == "checkboxtextbox") {
                    $scope.item.obji6[dataLoad6[i].emrdfk] = dataLoad6[i].value
                    $scope.item.obji6[dataLoad6[i].emrdfk] = true
                }
                if (dataLoad6[i].type == "textarea") {
                    $('#id_'+dataLoad6[i].emrdfk).html( dataLoad6[i].value)
                    $scope.item.obji6[dataLoad6[i].emrdfk] = dataLoad6[i].value
                }
                if (dataLoad6[i].type == "combobox") {
        
                    var str = dataLoad6[i].value
                    if(str != null)
                    {
                        var res = str.split("~");
                        
                        $scope.item.obji6[dataLoad6[i].emrdfk] = res[1]
                        $('#id_'+dataLoad6[i].emrdfk).html ( res[1])
                    }
                }
                if (dataLoad6[i].type == "combobox2") {
                    var str = dataLoad6[i].value
                    var res = str.split("~");
                    
                    $scope.item.obji6[dataLoad6[i].emrdfk+""+1] = res[0]
                    $scope.item.obji6[dataLoad6[i].emrdfk] = res[1]
                    $('#id_'+dataLoad6[i].emrdfk).html ( res[1])

                }

                if (dataLoad6[i].emrdfk == '423816' ) {
                    $scope.hariTgl = dataLoad6[i].value
                }

                if (dataLoad6[i].emrdfk == '2000001974' ) {
                    $scope.jamPeriksa = dataLoad6[i].value
                }

                if (dataLoad6[i].emrdfk == '2000002354' ) {
                    $scope.tgl1 = dataLoad6[i].value
                }
                if (dataLoad6[i].emrdfk == '2000002357' ) {
                    $scope.tgl2 = dataLoad6[i].value
                }
                if (dataLoad6[i].emrdfk == '2000002360' ) {
                    $scope.tgl3 = dataLoad6[i].value
                }
                if (dataLoad6[i].emrdfk == '2000002363' ) {
                    $scope.tgl4 = dataLoad6[i].value
                }
                if (dataLoad6[i].emrdfk == '2000002366' ) {
                    $scope.tgl5 = dataLoad6[i].value
                }
                if (dataLoad6[i].emrdfk == '2000002369' ) {
                    $scope.tgl6 = dataLoad6[i].value
                }
                if (dataLoad6[i].emrdfk == '2000002372' ) {
                    $scope.tgl7 = dataLoad6[i].value
                }
                if (dataLoad6[i].emrdfk == '2000002375' ) {
                    $scope.tgl8 = dataLoad6[i].value
                }
                if (dataLoad6[i].emrdfk == '2000002378' ) {
                    $scope.tgl9 = dataLoad6[i].value
                }
                if (dataLoad6[i].emrdfk == '2000002381' ) {
                    $scope.tgl10 = dataLoad6[i].value
                }
                if (dataLoad6[i].emrdfk == '2000002384' ) {
                    $scope.tgl11 = dataLoad6[i].value
                }
                if (dataLoad6[i].emrdfk == '2000002387' ) {
                    $scope.tgl12 = dataLoad6[i].value
                }
                if (dataLoad6[i].emrdfk == '2000002390' ) {
                    $scope.tgl13 = dataLoad6[i].value
                }
                if (dataLoad6[i].emrdfk == '2000002393' ) {
                    $scope.tgl14 = dataLoad6[i].value
                }
                if (dataLoad6[i].emrdfk == '2000002396' ) {
                    $scope.tgl15 = dataLoad6[i].value
                }
                
                if (dataLoad6[i].emrdfk == '2000002408' ) {
                    $scope.pukul2 = dataLoad6[i].value
                }

                $scope.tglemr = dataLoad6[i].tgl
                
            }
            var p6 = $scope.item.obji6[32116668];
            var pp6 = $scope.item.obji6[32116669];
            if (p6 != undefined) {
                jQuery('#qrcodep6').qrcode({
                width	: 70,
                height	: 70,
                text	: "Tanda Tangan Digital Oleh " + p6
                });	
            }
            if (pp6 != undefined) {
                jQuery('#qrcodepp6').qrcode({
                width	: 70,
                height	: 70,
                text	: "Tanda Tangan Digital Oleh " + pp6
                });	
            }
        }

        if(dataLoad7.length > 0){
            for (var i = 0; i <= dataLoad7.length - 1; i++) {
                if(dataLoad7[i].emrdfk == 3110029){
                    continue;
                }
                if (dataLoad7[i].type == "textbox") {
                    $('#id_'+dataLoad7[i].emrdfk).html( dataLoad7[i].value)
                    $scope.item.obji7[dataLoad7[i].emrdfk] = dataLoad7[i].value
                }
                if (dataLoad7[i].type == "checkbox") {
                    var chekedd = false
                    if (dataLoad7[i].value == '1') {
                        var chekedd = true
                    }
                    $scope.item.obji7[dataLoad7[i].emrdfk] = chekedd
                }
                if (dataLoad7[i].type == "radio") {
                    $scope.item.obji7[dataLoad7[i].emrdfk] = dataLoad7[i].value

                }

                if (dataLoad7[i].type == "datetime") {
                    $('#id_'+dataLoad7[i].emrdfk).html( dataLoad7[i].value)
                    $scope.item.obji7[dataLoad7[i].emrdfk] = dataLoad7[i].value
                }
                if (dataLoad7[i].type == "time") {
                    $scope.item.obji7[dataLoad7[i].emrdfk] = dataLoad7[i].value
                }
                if (dataLoad7[i].type == "date") {
                    $scope.item.obji7[dataLoad7[i].emrdfk] = dataLoad7[i].value
                }

                if (dataLoad7[i].type == "checkboxtextbox") {
                    $scope.item.obji7[dataLoad7[i].emrdfk] = dataLoad7[i].value
                    $scope.item.obji7[dataLoad7[i].emrdfk] = true
                }
                if (dataLoad7[i].type == "textarea") {
                    $('#id_'+dataLoad7[i].emrdfk).html( dataLoad7[i].value)
                    $scope.item.obji7[dataLoad7[i].emrdfk] = dataLoad7[i].value
                }
                if (dataLoad7[i].type == "combobox") {
        
                    var str = dataLoad7[i].value
                    if(str != null)
                    {
                        var res = str.split("~");
                        
                        $scope.item.obji7[dataLoad7[i].emrdfk] = res[1]
                        $('#id_'+dataLoad7[i].emrdfk).html ( res[1])
                    }
                }
                if (dataLoad7[i].type == "combobox2") {
                    var str = dataLoad7[i].value
                    var res = str.split("~");
                    
                    $scope.item.obji7[dataLoad7[i].emrdfk+""+1] = res[0]
                    $scope.item.obji7[dataLoad7[i].emrdfk] = res[1]
                    $('#id_'+dataLoad7[i].emrdfk).html ( res[1])

                }

                if (dataLoad7[i].emrdfk == '423816' ) {
                    $scope.hariTgl = dataLoad7[i].value
                }

                if (dataLoad7[i].emrdfk == '2000001974' ) {
                    $scope.jamPeriksa = dataLoad7[i].value
                }

                if (dataLoad7[i].emrdfk == '2000002354' ) {
                    $scope.tgl1 = dataLoad7[i].value
                }
                if (dataLoad7[i].emrdfk == '2000002357' ) {
                    $scope.tgl2 = dataLoad7[i].value
                }
                if (dataLoad7[i].emrdfk == '2000002360' ) {
                    $scope.tgl3 = dataLoad7[i].value
                }
                if (dataLoad7[i].emrdfk == '2000002363' ) {
                    $scope.tgl4 = dataLoad7[i].value
                }
                if (dataLoad7[i].emrdfk == '2000002366' ) {
                    $scope.tgl5 = dataLoad7[i].value
                }
                if (dataLoad7[i].emrdfk == '2000002369' ) {
                    $scope.tgl6 = dataLoad7[i].value
                }
                if (dataLoad7[i].emrdfk == '2000002372' ) {
                    $scope.tgl7 = dataLoad7[i].value
                }
                if (dataLoad7[i].emrdfk == '2000002375' ) {
                    $scope.tgl8 = dataLoad7[i].value
                }
                if (dataLoad7[i].emrdfk == '2000002378' ) {
                    $scope.tgl9 = dataLoad7[i].value
                }
                if (dataLoad7[i].emrdfk == '2000002381' ) {
                    $scope.tgl10 = dataLoad7[i].value
                }
                if (dataLoad7[i].emrdfk == '2000002384' ) {
                    $scope.tgl11 = dataLoad7[i].value
                }
                if (dataLoad7[i].emrdfk == '2000002387' ) {
                    $scope.tgl12 = dataLoad7[i].value
                }
                if (dataLoad7[i].emrdfk == '2000002390' ) {
                    $scope.tgl13 = dataLoad7[i].value
                }
                if (dataLoad7[i].emrdfk == '2000002393' ) {
                    $scope.tgl14 = dataLoad7[i].value
                }
                if (dataLoad7[i].emrdfk == '2000002396' ) {
                    $scope.tgl15 = dataLoad7[i].value
                }
                
                if (dataLoad7[i].emrdfk == '2000002408' ) {
                    $scope.pukul2 = dataLoad7[i].value
                }

                $scope.tglemr = dataLoad7[i].tgl
                
            }
            var p7 = $scope.item.obji7[32116668];
            var pp7 = $scope.item.obji7[32116669];
            if (p7 != undefined) {
                jQuery('#qrcodep7').qrcode({
                width	: 70,
                height	: 70,
                text	: "Tanda Tangan Digital Oleh " + p7
                });	
            }
            if (pp7 != undefined) {
                jQuery('#qrcodepp7').qrcode({
                width	: 70,
                height	: 70,
                text	: "Tanda Tangan Digital Oleh " + pp7
                });	
            }
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