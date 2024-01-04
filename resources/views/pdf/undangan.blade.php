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
            size: auto;
        }

        table {
           
        }

        tfoot tr td {
            font-weight: bold;
           
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
            @foreach ($item as $key => $value)
                <tr>
                    <td width="30%" >{{ strtoupper($key) }}</td>
                    <td width="2%" >:</td>
                    <td >{{ strtoupper($value) }}</td>
                </tr>
                @endforeach

              
            </table>
        </div>

        @php
        $count++;
        if ($count % 3 == 0) {
            echo '<div style="clear:both; padding:25;"></div>'; 
        }
        @endphp

        @endforeach
    </div>



</body>

</html>
