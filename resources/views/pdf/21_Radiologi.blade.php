<html>

<head>
    <meta charset="utf-8">
    <title>Expertise</title>


</head>

<style>
    html,
    body {

        box-sizing: border-box;
        font-family: DejaVu Sans, Arial, Helvetica, sans-serif;
        margin-top: 20px;
        margin-left: 40px;
       
    }

table{
    width: 100%;
    font-size: x-small;
}
    tr td {
       
       
            font-size: x-small;
    }

  
  
    .section {
        page-break-after: always;
    }

    @page {
        size: A4
    }

</style>

<body >
    @php
    $no = 1;

    @endphp
    @foreach ($raw as $item)
    <div align="center" class="section">
        <table >
            <tbody>
                <tr>
                    <td>
                        <table width="100%" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="40%" align="center"
                                    style="border-top: 3px solid black;border-left: 3px solid black;border-right: 3px solid black;padding-bottom: 20px;">
                                    <b>RSUD H.A SULTHAN DG. RADJA</b>
                                     <br>
                                     JL. SERIKAYA NO. 17 BULUKUMBA 92512
                                     <br>
                                     TELP : (0413) 81292 
                                </td>
                                <td  align="left"
                                    style="padding-left:5px;border-top: 3px solid black;border-bottom: 1px solid black;padding-bottom: 20px;border-right: 3px solid black;">
                                    NO
                                        RM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                        {{ $item->nocm }} <br>
                                    NAMA LENGKAP&nbsp;&nbsp;: {{
                                        $item->namapasien }} <br>
                                    TANGGAL LAHIR&nbsp; : {{
                                        date('d-m-Y', strtotime($item->tgllahir)) }} <br>
                                    
                                        NIK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                        {{ $item->noidentitas }} 
                                </td>
                                <td width="10%" align="center"
                                    style="border:1px solid black;padding-bottom: 20px;border-top: 3px solid black;border-right: 3px solid black;background-color:black">
                                    <font style="font-size: 22pt; " color="white">RM</font><br>
                                    <font style="font-size: 22pt;" color="white">19</font>
                                </td>
                            </tr>
                        </table>

                        <table width="100%" cellspacing="15" cellpadding="0"
                            style="border: 3px solid black;padding-bottom: 20px; padding-left:0px;">
                            <tr>
                                <td width="25%">
                                    Tanggal / No Foto - USG 
                                </td>
                                <td >
                                    : {{ date('d-m-Y H:i',
                                        strtotime($item->tanggal)) }} / {{ $item->nofoto }} 
                                </td>
                            </tr>
                            <tr>
                                <td >
                                    Klinis
                                </td>
                                <td >
                                    : {{ $item->klinis }}
                                </td>
                            </tr>
                            <tr>
                                <td >
                                   Status
                                </td>
                                <td >
                                    : {{ $item->statusrad }}
                                </td>
                            </tr>
                            <tr>
                                <td >
                                    Dokter Pengirim
                                </td>
                                <td >
                                    :
                                        @if($item->dokterpengirim != null) {{ $item->dokterpengirim }}
                                        @elseif($item->dokterpengirim == null) {{ $item->dokterluar }}
                                        @elseif($item->dokterluar == null or $item->dokterluar == "") {{
                                        $item->dokterrad }}
                                        @else {{ $item->dokterrad }}
                                        @endif
                                  
                                </td>
                            </tr>
                        </table>
                        <table width="100%" cellspacing="0" cellpadding="0"
                            style="border-left: 3px solid black;border-right: 3px solid black;">
                            <tr>
                                <td style="padding-left: 20px;padding-top:20px">
                                    {!! $item->keterangan !!}
                                    <br><br>
                                </td>
                            </tr>

                        </table>
                        <table width="100%" cellspacing="0" cellpadding="0"
                            style="border-left: 3px solid black;border-right: 3px solid black;border-bottom: 3px solid black;">
                            <tr>
                                <td style="background-color:#FFF" width="35%">

                                </td>
                                <td style="background-color:#FFF" width="65%" align="center">
                                    BTK,SS<br>
                                    <img src="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=ditandatangi{{ $item->pgid }}{{ $no }} oleh=UTF-8"
                            alt="">
                                    <div style="padding-right: 50px; font-size:20pt"
                                        id="qrDokter{{ $item->pgid }}{{ $no }}">
                                        
                                    </div>
                                  <u>( {{ $item->dokterrad }} )</u>
                                  <br>
                                   Spesialis Radiologi<br><br>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <script>
        $('#qrDokter{{ $item->pgid }}{{ $no }}').qrcode({
            text: 'Tanda Tangan Digital Oleh ' + {{ $item-> pgid }}{{ $no }} ,
            height: 75,
            width: 75
        });
    </script>
    @php
    $no ++;
    @endphp
    @endforeach

    <script>
        $(document).ready(function () {
            window.print();
        });
    </script>
</body>

</html>