<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Billing</title>

    <style type="text/css">
        * {
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        table {
            font-size: x-small;
            border-collapse: collapse;

        }

        tfoot tr td {
           
            font-size: x-small;
            border: 1px solid #000;
            border-collapse: collapse;
        }

        .tabledetail tr td {
            border: 1px solid black;
            border-collapse: collapse;

        }


        .gray {
            background-color: lightgray
        }
    </style>
</head>

<body>
    <?php
        function rupiah($angka)
        {
            $hasil_rupiah = 'Rp' . number_format($angka, 2, ',', '.');
            return $hasil_rupiah;
        }

        function penyebut($nilai)
        {
            $nilai = abs($nilai);
            $huruf = array('', 'SATU', 'DUA', 'TIGA', 'EMPAT', 'LIMA', 'ENAM', 'TUJUH', 'DELAPAN', 'SEMBILAN', 'SEPULUH', 'SEBELAS');
            $temp = '';
            if ($nilai < 12) {
                $temp = ' ' . $huruf[$nilai];
            } else if ($nilai < 20) {
                $temp = penyebut($nilai - 10) . ' BELAS';
            } else if ($nilai < 100) {
                $temp = penyebut($nilai / 10) . ' PULUH' . penyebut($nilai % 10);
            } else if ($nilai < 200) {
                $temp = ' SERATUS' . penyebut($nilai - 100);
            } else if ($nilai < 1000) {
                $temp = penyebut($nilai / 100) . ' RATUS' . penyebut($nilai % 100);
            } else if ($nilai < 2000) {
                $temp = ' SERIBU' . penyebut($nilai - 1000);
            } else if ($nilai < 1000000) {
                $temp = penyebut($nilai / 1000) . ' RIBU' . penyebut($nilai % 1000);
            } else if ($nilai < 1000000000) {
                $temp = penyebut($nilai / 1000000) . ' JUTA' . penyebut($nilai % 1000000);
            } else if ($nilai < 1000000000000) {
                $temp = penyebut($nilai / 1000000000) . ' MILYAR' . penyebut(fmod($nilai, 1000000000));
            } else if ($nilai < 1000000000000000) {
                $temp = penyebut($nilai / 1000000000000) . ' TRILYUN' . penyebut(fmod($nilai, 1000000000000));
            }
            return $temp;
        }

        function terbilang($nilai)
        {
            if ($nilai < 0) {
                $hasil = 'minus ' . trim(penyebut($nilai));
            } else {
                $hasil = trim(penyebut($nilai));
            }
            return $hasil;
        }
    ?>

    <table width="100%">
        <tr>
            <td rowspan="4">
                <img src="resources/150x150.png" alt="" style="width: 60px;display:block; margin:auto;">

            </td>
            <td rowspan="4" colspan="4"><strong>{!!
                    $res['profile']->namalengkap !!}</strong> <br>{!! $res['profile']->alamatlengkap !!}<br> 92517,
                Tlpn. 0413 81004, Fax. <br>Email. diskominfo@bulukumbakab.go.id, Website -
            </td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td valign="bottom">Print By</td>
            <th valign="bottom">{{ $res['user'] }}</th>
        </tr>
        <tr>
            <td valign="top">{{date('d/m/Y')}}</td>
            <td valign="top">{{date('H:i:s')}}</td>
        </tr>
    </table>
    <table width="100%">
        <tr>
            <td colspan="9" style="text-align:center;font-size:large;border: 1px solid black;
            border-collapse: collapse; border-left:none;border-right:none;font-weight: bolder;">

                RINCIAN BIAYA PELAYANAN

            </td>
        </tr>
        <tr>
            <th>No. Registrasi</th>
            <td colspan="2">: {{ $res['identitas']->noregistrasi }}</td>
            <th>Unit</th>
            <td colspan="2">: {{ $res['identitas']->namaruangan }}</td>
            <th>Tgl. Masuk</th>
            <td>: {!! date('d/m/Y',strtotime( $res['identitas']->tglregistrasi )) !!}</td>
            <td>{!! date('H:i',strtotime( $res['identitas']->tglregistrasi )) !!}</td>
        </tr>
        <tr>
            <th>No. RM</th>
            <td colspan="2">: {{ $res['identitas']->nocm }}</td>
            <th>Kamar</th>
            <td colspan="2">: -</td>
            <th>Tgl. Pulang</th>
            <td>: {!! date('d/m/Y',strtotime( $res['identitas']->tglpulang )) !!}</td>
            <td>{!! date('H:i',strtotime( $res['identitas']->tglpulang )) !!}</td>
        </tr>
        <tr>
            <th>Nama Pasien</th>
            <td colspan="2">: {{ $res['identitas']->namapasien }} {!!
                $res['identitas']->jeniskelamin == 'PEREMPUAN' ? '(P)' : '(L)' !!}</td>
            <th>Kelas</th>
            <td colspan="2">: {{ $res['identitas']->namakelas }}</td>
            <th>Penjamin</th>
            <td colspan="2">: {{ $res['identitas']->namarekanan }}</td>
        </tr>
        <tr>
            <td colspan="9"></td>
        </tr>
        <tr>
            <th>Tipe</th>
            <td colspan="2">: {{ $res['identitas']->kelompokpasien }}</td>
            <th>Dokter P. Jawab</th>
            <td colspan="3">: {{ $res['identitas']->namalengkap }}</td>
        </tr>
        <tr>
            <th>No. SEP</th>
            <td colspan="2">: <strong>{{ $res['identitas']->nosep }}</strong></td>
        </tr>
    </table>
    <table width="100%" class="tabledetail">
        <thead>
            <tr>
                <th>
                    No
                </th>
                <th>
                    Tanggal
                </th>
                <th>
                    Deskripsi
                </th>
                <th>
                    Kelas
                </th>
                <th>
                    Dokter
                </th>
                <th>
                    Qty
                </th>
                <th>
                    Tarif
                </th>
                <th>
                    Diskon
                </th>
                <th align="right">
                    Sub Total
                </th>
            </tr>
        </thead>
        @php
        $nomor = 1;
        $totaltagihan = 0;
        $totaldiskon = 0;
        $jumlahbill = 0;
        $totaldiklaim = 0;
        @endphp
        @foreach ($res['billing'] as $ruangan)
        <thead style="background-color: lightgray;">
            <tr>
                <td colspan="9">
                   
                        <b><i> {{ strtoupper($ruangan[0]->namaruangan) }}</i></b>

                </td>

            </tr>
            @foreach ($ruangan->groupBy('jenisproduk') as $item)
            <tr>
                <td colspan="9">

                    <b><i>  JENIS: {{ strtoupper($item[0]->jenisproduk) }}</i> </b>

                </td>
            </tr>
        </thead>
        <tbody>
            @php
            $total = 0;
            $diskon = 0;
            @endphp
            @foreach ($item as $data)
            <tr>
                <td align="center"">
                 {{ $nomor }}
                </td>
                <td align=" center"" style=" padding-left: 2px; padding-right:2px">

                    {{ date_format(date_create($data->tglpelayanan), 'd/m/Y') }}
                </td>
                <td>
                    &nbsp;{{ $data->namaproduk }}
                </td>
                <td align="center"">
                 {{ $data->namakelas }}
                </td>
                @if ($data->penulisresep === null)
                <td>
                     &nbsp;{{ $data->dokter }}
                </td>
                @else
                <td>
                     {{ $data->penulisresep }}
                </td>
                @endif
                <td align=" center"">
                    {{ $data->jumlah }}
                </td>
                <td align="right">
                    {{ number_format($data->hargasatuan, 2, '.', ',') }}
                </td>
                <td align="center"">
                 {{ number_format($data->diskon, 2, '.', ',') }}
                </td>
                <td align=" right">
                    {{ number_format($data->total, 2, '.', ',') }}
                </td>
            </tr>
            @php
            $nomor = $nomor + 1;
            $total = $total + $data->total;
            $diskon = $diskon + $data->diskon;
            @endphp
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td align="right" colspan="9">

                    <b>Rp{{ number_format($total, 2, '.', ',') }}</b>

                </td>
            </tr>
            @php
            $totaltagihan = $totaltagihan + $total;
            $totaldiskon = $totaldiskon + $diskon;
            $jumlahbill = $totaltagihan - $totaldiskon;
            @endphp
            @endforeach
            @endforeach

        </tfoot>


    </table>
    <table width="100%">
        <tr>
            <th colspan="3"></th>
            <td colspan="2">ADMINISTRASI</td>
            <td>:</td>
            <td colspan="3" style="text-align:right;border:none;">0.00</td>
        </tr>
        <tr>
            <th colspan="3"></th>
            <td colspan="2">MATERAI</td>
            <td>:</td>
            <td colspan="3" style="text-align:right;border:none;">0.00</td>
        </tr>
        <tr>
            <th colspan="3"></th>
            <td colspan="2">JUMLAH BIAYA</td>
            <td>:</td>
            <td colspan="3" style="text-align:right;border:none;">
                <?php echo rupiah($res['total']) ?>
            </td>
        </tr>
        <tr>
            <th colspan="3"></th>
            <td colspan="2"></td>
            <td></td>
            <td colspan="3" style="text-align:right;border:none;"></td>
        </tr>
        <tr>
            <th colspan="3"></th>
            <td colspan="2">DEPOSIT - UANG MUKA</td>
            <td>:</td>
            <td colspan="3" style="text-align:right;border:none;">0.00</td>
        </tr>
        <tr>
            <th colspan="3"></th>
            <td colspan="2">DISKON JASA MEDIS</td>
            <td>:</td>
            <td colspan="3" style="text-align:right;border:none;">0.00</td>
        </tr>
        <tr>
            <th colspan="3"></th>
            <td colspan="2">DISKON UMUM</td>
            <td>:</td>
            <td colspan="3" style="text-align:right;border:none;">
                <?php echo rupiah($res['diskon']) ?>
            </td>
        </tr>
        <tr>
            <th colspan="3"></th>
            <td colspan="2">SISA DEPOSIT</td>
            <td>:</td>
            <td colspan="3" style="text-align:right;border:none;">
                <?php echo rupiah($res['deposit']) ?>
            </td>
        </tr>
        <tr>
            <th colspan="3"></th>
            <td colspan="2">JUMLAH TELAH DIBAYAR</td>
            <td>:</td>
            <td colspan="3" style="text-align:right;border:none;">
                <?php echo rupiah($res['dibayar']) ?>
            </td>
        </tr>
        <tr>
            <th colspan="2"></th>
            <td>PERINCIAN</td>
            <td colspan="2">DITANGGUNG PERUSAHAAN</td>
            <td>:</td>
            <td colspan="3" style="text-align:right;border:none;">Rp0.00</td>
        </tr>
        <tr>
            <th colspan="3"></th>
            <td colspan="2">DITANGGUNG RUMAH SAKIT</td>
            <td>:</td>
            <td colspan="3" style="text-align:right;border:none;">Rp0.00</td>
        </tr>
        <tr>
            <th colspan="3"></th>
            <td colspan="2">DITANGGUNG SENDIRI / OBAT</td>
            <td>:</td>
            <td colspan="3" style="text-align:right;border:none;">Rp0.00</td>
        </tr>
        <tr>
            <th colspan="3"></th>
            <td colspan="2">SURPLUS / MINUS KE RS</td>
            <td>:</td>
            <td colspan="3" style="text-align:right;border:none;">Rp0.00</td>
        </tr>
        <tr>
            <th colspan="3"></th>
            <td colspan="2"><b>JUMLAH BIAYA TOTAL</b></td>
            <td>:</td>
            <td colspan="3" style="text-align:right;border:none;"><b>
                    <?php echo rupiah($res['sisa']) ?>
                </b></td>
        </tr>
        <tr height="50px">
            <th colspan="9" style="text-align:left;">TERBILANG:</th>
        </tr>
        <tr>
            <td colspan="9"><em>#
                    <?php echo terbilang($res['sisa']) ?> RUPIAH #
                </em></td>
        </tr>
        <tr height="120px" valign="top" ; style="text-align:center;">
            <td colspan="3" style="border:none;border-right:1px solid #000">Bulukumba, {{date('d/m/Y')}}
                {{date('H:i:s')}} <br> Kasir</td>
            <td style="border:none;border-right:1px solid #000" colspan="3">Bendahara</td>
            <td colspan="3">Catatan</td>
        </tr>
    </table>


</body>
<script>
    $(document).ready(function () {
        window.print();
    });
</script>

</html>