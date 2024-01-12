<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Invoice</title>

    <style type="text/css">
        * {
            font-family: Verdana, Arial, sans-serif;
        }

        @page {
            size: A4;
            margin: 4px;
        }

        table {
            width: 100%;
            
        }

         tr td {
        font-size: x-small;
            padding: 10px;
            
        }

        .gray {
            background-color: lightgray
        }

        .container {
            display: flex;
            flex-wrap: wrap;
        }

        .item {
            border: 1px solid black;
            margin: 8px;
            width: 48%;
            height: 525px;
            box-sizing: border-box;
            float: left;
        }
    </style>
</head>

<body>

    @php
    $no = 1;
    $count = 0;
    @endphp

    @for ($i = 0; $i < 4; $i++) <div class="container">
        @foreach ($undangan as $item)
        <div class="item">
            <table>
                <tr >
                    <td width="70px" align="left" valign="middle"><img src="{{ $image }}" width="35px" /></td>
                    <td align="center" valign="middle" colspan="2">
                        <h6> <b>RSUD H.A SULTHAN DG. RADJA</b>
                            <br>
                            <small> JL. SERIKAYA NO. 17 BULUKUMBA 92512
                                <br>
                                TELP : (0413) 81292</small>
                        </h6>
                    </td>
                    <td width="70px" align="right" valign="middle"><img src="{{ $image }}" width="35px" /></td>
                </tr>
                <tr>
                    <td colspan="4">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>No MR </td>
                    <td>: {{ $item->MR }}</td>
                    <td>Tgal:</td>
                    <td></td>

                </tr>
                <tr>
                    <td>Nam</td>
                    <td>:</td>
                    <td colspan="2">{{ $item->NAMA }}</td>
                </tr>
                <tr>
                    <td>Nama Obat</td>
                    <td>:</td>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>X Sehari</td>
                    <td>1</td>
                    <td>Tablet</td>
                </tr>
                <tr>
                    <td>Pagi jam </td>
                    <td>: 07.00</td>
                    <td>Sore Jam </td>
                    <td>: 12.00</td>
                </tr>
                <tr>
                    <td>Siang jam </td>
                    <td>: 07.00</td>
                    <td>Malam Jam </td>
                    <td>: 12.00</td>
                </tr>
                <tr>
                    <td colspan="4" align="center">
                        Sebelum Makan/Menjelang/Sesudah Makan
                    </td>
                </tr>
                <tr>
                    <td colspan="4" >
                        ED :
                    </td>
                </tr>
                <tr>
                    <td colspan="4"><hr></td>
                </tr>
                <tr>
                    <td>
                        Saran Farmasi
                    </td>
                    <td colspan="3"></td>
                </tr>
            </table>
        </div>

        @php
        $count++;
        if ($count % 2 == 0) {
        @endphp
        <div style="clear:both;"></div>
        @php
        }
        @endphp
        @endforeach
        </div>
        @endfor

</body>

</html>