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
            size: 16cm 20cm landscape;
        }

        table {
            width: 100%;
        }

        tfoot tr td {
            font-weight: bold;
        }

        .gray {
            background-color: lightgray
        }

        .container {
            display: flex;
            flex-wrap: wrap;
        }

        .item {
            width: 33%;
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

    @for ($i = 0; $i < 12; $i++)
        <div class="container">
            @foreach ($undangan as $item)
                <div class="item">
                    <table>
                        <tr>
                            <td width="30%">MR</td>
                            <td width="2%">:</td>
                            <td>{{ $item->MR }}</td>
                        </tr>
                        <tr>
                            <td width="30%">NAMA</td>
                            <td width="2%">:</td>
                            <td>{{ $item->NAMA }}</td>
                        </tr>
                        <tr>
                            <td width="30%">TTL</td>
                            <td width="2%">:</td>
                            <td>{{ $item->TTL }}</td>
                        </tr>
                        <tr>
                            <td width="30%">NIK</td>
                            <td width="2%">:</td>
                            <td>{{ $item->NIK }}</td>
                        </tr>
                    </table>
                </div>

                @php
                $count++;
                if ($count % 3 == 0) {
                    @endphp
                   <div style="clear:both;padding:10px"></div>
                    @php
                }
                @endphp
            @endforeach
        </div>
    @endfor

</body>

</html>
