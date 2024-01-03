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
            size: A4 portrait;
        }

        table {
            font-size: x-small;
        }

        tfoot tr td {
            font-weight: bold;
            font-size: x-small;
        }

        .gray {
            background-color: lightgray
        }
    </style>
</head>

<body>

    @php
    $no = 1;
    $count = 0;
    @endphp

    <div>
        @foreach ($undangan as $item)
        <div style="float: left; width: 33%;">
            <table width="100%">

                <tr>
                    <td width="30%">MR</td>
                    <td width="2%">:</td>
                    <td> {{ $item->mr }} {{ $no++ }}</td>
                </tr>
                <tr>
                    <td>NAMA</td>
                    <td>:</td>
                    <td> {{ $item->nama }}</td>
                </tr>
                <tr>
                    <td>TTL</td>
                    <td>:</td>
                    <td> {{ $item->ttl }}</td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td>:</td>
                    <td> {{ $item->nik }}</td>
                </tr>

            </table>
        </div>

        @php
        $count++;
        if ($count % 3 == 0) {
            echo '<div style="clear:both; margin-top:40px;"></div>'; 
        }
        @endphp

        @endforeach
    </div>

</body>

</html>
