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

       
    </style>
</head>

<body>

    @php
    $no = 1;
    $count = 0;
    $jumlah = 12;
    @endphp

    <div>
        @for ($i = 0; $i < $jumlah; $i++) @foreach ($undangan as $item) <div style="float: left; width: 33%;">
            <table width="100%">

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
                    <td width="30%">TTL</td>
                    <td width="2%">:</td>
                    <td>{{ $item->NIK }}</td>
                </tr>



            </table>
    </div>


    @php
    $count++;
    if ($count % 3 == 0) {
    echo '<div style="clear:both; padding:10;"></div>';
    }
    @endphp

    @endforeach
    @endfor
    </div>



</body>

</html>