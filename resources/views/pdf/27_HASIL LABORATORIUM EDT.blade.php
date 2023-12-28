<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HASIL LABORATORIUM EDT</title>
    @if (stripos(\Request::url(), 'localhost') !== false)
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/jquery.qr-code.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/qrcode/src/jquery.qrcode.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/qrcode/src/qrcode.js') }}"></script>
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
            font-size: normal;
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
<body>
@foreach ($raw as $item)
    <div class="format">
        <table width='100%'>
            <tr height=20 class="noborder">
                <td colspan="29" rowspan="2" class="noborder-tb text-center p3" >
                    RSUD H. ANDI SULTHAN DAENG RADJA</strong> <br>JL. SERIKAYA NO. 17 BULUKUMBA 92512 <br>TELP : (0413) 81292
                </td>
                <td colspan="12" class="noborder p3">Nomor RM</td>
                <td colspan="2" class="noborder">:</td>
                <td colspan="7" class="noborder"></td>
                <td colspan="3" class="text-center">{{ substr($item->nocm,0,1) }}</td>
                <td colspan="3" class="text-center">{{ substr($item->nocm,1,1) }}</td>
                <td colspan="3" class="text-center">{{ substr($item->nocm,2,1) }}</td>
                <td colspan="3" class="text-center">{{ substr($item->nocm,3,1) }}</td>
                <td colspan="3" class="text-center">{{ substr($item->nocm,4,1) }}</td>
                <td colspan="3" class="text-center">{{ substr($item->nocm,5,1) }}</td>
                <!-- 49 columns  -->
                <!-- 29 columns  -->
                <!-- 68 columns  -->
            </tr>
            <tr class="noborder">
                <td colspan="12" class="noborder p3">Nama Lengkap</td>
                <td class="noborder" colspan="20">: {{ $item->namapasien }}</td>
                <td colspan="2" class="noborder"></td>
                <td colspan="2" class="noborder">{!!  $item->jeniskelamin == 'PEREMPUAN' ? '(P)' : '(L)'  !!}</td>
            </tr>
            <tr class="noborder">
                <td colspan="29" rowspan="2" class="text-center p3"><strong>HASIL PEMERIKSAAN LABORATORIUM KLINIK (Yang diminta harap diberi tanda)</strong></td>
                <td colspan="12" class="noborder p3">Tanggal Lahir</td>
                <td colspan="20" class="noborder p3">: {!! date('d-m-Y',strtotime( $item->tgllahir  )) !!}</td>
                <td colspan="w" class="noborder p3"></td>
            </tr>
            <tr class="noborder btm">
                <td colspan="39" class="noborder p3">(Mohon diisi atau ditempelkan stiker jika ada)</td>
            </tr>
            <tr>
                <td colspan="15" class="p3 noborder btm">Dokter pengirim</td>
                <td colspan="14" class="p3 noborder btm" style="font-size:9pt">: {{ $item->namadokterpengirim }}</td>
                <td colspan="9" class="p3 noborder blf btm">Alamat</td>
                <td colspan="30" class="p3 noborder btm">: {{ $item->alamatlengkap }}</td>
            </tr>
            <tr>
                <td colspan="15" class="p3 noborder btm">Tgl/Jam Pemeriksaan</td>
                <td colspan="14" class="p3 noborder btm">: {!! date('d-m-Y H:m',strtotime( $item->tgljawab  )) !!}</td>
                <td colspan="9" class="p3 noborder blf btm" rowspan="2">Status</td>
                <td colspan="10" class="p3 noborder" rowspan="2">: {{ $item->kelompokpasien }}</td>
            </tr>
            <tr>
                <td colspan="15" class="p3 noborder">Penanggung Jawab</td>
                <td colspan="14" class="p3 noborder" style="font-size:9pt">: {{ $item->namapenanggungjawab }}</td>
            </tr>
            <tr style="height:70pt">
                <td colspan="68" class="text-center p3"><u><b>EVALUASI DARAH TEPI</b></u></td>
            </tr>
            <tr style="height: 40pt;">
                <td colspan="5" class="noborder"></td>
                <td colspan="20" class="noborder"><strong><u>DATA LABORATORIUM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></strong></td>
                <td colspan="43" class="noborder"><strong><u>:</u></strong></td>
            </tr>
            <tr class="-P3">
                <td colspan="5" class="noborder"></td>
                <td colspan="12" class="noborder">HAEMOGLOBIN</td>
                <td colspan="41" class="noborder">: {{ $item->haemoglobin }} gr%</td>\
            </tr>
            <tr class="p3">
                <td colspan="5" class="noborder"></td>
                <td colspan="12" class="noborder">LEUKOSIT</td>
                <td colspan="41" class="noborder">: {{ $item->leukosit }} x 10<sup>3</sup>/mm <sup>3</sup></td>
            </tr>
            <tr class="p3">
                <td colspan="5" class="noborder"></td>
                <td colspan="12" class="noborder">ERITROSIT</td>
                <td colspan="41" class="noborder">: {{ $item->eritrosit }} x 10<sup>4</sup>/mm <sup>3</sup></td>
            </tr>
            <tr class="p3">
                <td colspan="5" class="noborder"></td>
                <td colspan="12" class="noborder">TROMBOSIT</td>
                <td colspan="41" class="noborder">: {{ $item->trombosit }} x 10<sup>3</sup>/mm <sup>3</sup></td>
            </tr>
            <tr class="p3" style="height: 20pt;">
                <td colspan="5" class="noborder"></td>
                <td colspan="58" class="noborder p3" style="border-top:3px solid #000"></td>
                <td colspan="5" class="noborder"></td>
            </tr>
            
            <tr>
                <td colspan="5" class="noborder"></td>
                <td colspan="15" class="noborder"><strong>ERITROSIT</strong></td>
                <td class="noborder" colspan="8">: </td>
                <td colspan="35" class="noborder"></td>
                <td colspan="5" class="noborder"></td>
            </tr>
            <tr>
                <td colspan="5" class="noborder"></td>
                <td colspan="63" class="noborder">{{ $item->keteritrosit }}</td>
            </tr>
            <tr class="p3" style="height: 10pt;"></tr>
            <tr  valign="top">
                <td colspan="5" class="noborder"></td>
                <td colspan="15" class="noborder"><strong>LEUKOSIT</strong></td>
                <td class="noborder" colspan="8">:</td>
                <td colspan="35" class="noborder"></td>
                <td colspan="5" class="noborder"></td>
            </tr>
            <tr>
                <td colspan="5" class="noborder"></td>
                <td colspan="63" class="noborder">{{ $item->ketleukosit }}</td>
            </tr>
            <tr class="p3" style="height: 10pt;"></tr>
            <tr  valign="top">
                <td colspan="5" class="noborder"></td>
                <td colspan="15" class="noborder"><strong>TROMBOSIT</strong></td>
                <td class="noborder" colspan="8">:</td>
                <td colspan="35" class="noborder"></td>
                <td colspan="5" class="noborder"></td>
            </tr>
            <tr>
                <td colspan="5" class="noborder"></td>
                <td colspan="63" class="noborder">{{ $item->kettrombosit }}</td>
            </tr>
            <tr class="p3" style="height: 10pt;"></tr>
            <tr  valign="top">
                <td colspan="5" class="noborder"></td>
                <td colspan="15" class="noborder"><strong>KESIMPULAN/KESAN</strong></td>
                <td class="noborder" colspan="8">:</td>
                <td colspan="35" class="noborder"></td>
                <td colspan="5" class="noborder"></td>
            </tr>
            <tr>
                <td colspan="5" class="noborder"></td>
                <td colspan="63" class="noborder">{{ $item->kesimpulan }}</td>
            </tr>
            <tr class="p3" style="height: 10pt;"></tr>
            <tr>
                <td colspan="34" style="text-align: right;" class="noborder p3">I/T Rasio :</td>
                <td colspan="34" style="text-align: left;" class="noborder p3">{{ $item->rasio }}</td>
            </tr>
            <tr class="text-center" style="height: 50pt;">
                <td colspan="44" class="noborder"></td>
                <td colspan="24" class="noborder">PEMERIKSA</td>
            </tr>
            <tr class="text-center">
                <td colspan="44" class="noborder"></td>
                <td colspan="24" class="noborder"><div id="qrcoded1{{ $item->dokterpemeriksa }}" style="text-align: center"></td>
            </tr>
            <tr class="text-center">
                <td colspan="44" class="noborder"></td>
                <td colspan="24" class="noborder">({{ $item->namadokterpemeriksa }})</td>
            </tr>
            <tr style="height:80pt">
                <td colspan="68" class="noborder"></td>
            </tr>
        </table>
    </div>

    
</body>
<script>
    var d1 = {!! json_encode($item->namadokterpemeriksa )!!}
        
        if(d1 != undefined){
            jQuery('#qrcoded1{{ $item->dokterpemeriksa }}').qrcode({
                width	: 100,
                height	: 100,
                text	: "Tanda Tangan Digital Oleh " + d1
            });	
        }
    
</script>
@endforeach
<script>
        $(document).ready(function () {
        window.print();
    });
</script>
</html>