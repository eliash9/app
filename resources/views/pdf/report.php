<html>

<head>
    <title>
        Report
    </title>
</head>


<style type="text/css">
    * {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        
    }

    table {
        font-size: x-small;
        border-collapse: collapse;
        margin-top: 5px;

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

    h2 {
        margin: 0px;
    }


    .gray {
        background-color: lightgray
    }
</style>

<body onLoad="window.print()">
    <div align="left">
        <table cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="0" width="100%">
            <tbody>
                <tr>
                    <td width="2%"></td>
                    <td width="16%">
                        <p align="left">
                            <img src="{{ $image }}" height="20px" />
                        </p>
                    </td>
                    <td width="82%">
                        <center>
                            <b>
                                <h2>SURAT ELIGIBILITAS PESERTA</h2>
                            </b>
                            <b>
                                <h2>{{$dataReport['namaprofile']}}</h2>
                            </b>
                            {{$dataReport['alamat']}}
                        </center>
                    </td>
                </tr>
            </tbody>
        </table>
        <table width="100%">
            <tbody>
                <tr>
                    <td>
                        <table width="100%">
                            <tr>
                                <td>
                                    No SEP
                                </td>
                                <td>:</td>
                                <td>{{$dataReport['nosep']}}</td>
                                <td>
                                    No RM
                                </td>
                                <td>:</td>
                                <td>{{$dataReport['norm']}}</td>
                            </tr>
                            <tr>
                                <td>
                                    Tgl SEP
                                </td>
                                <td>:</td>
                                <td>{{$dataReport['tanggalsep']}}</td>
                                <td>
                                    No Pendaftaran
                                </td>
                                <td>:</td>
                                <td>{{$dataReport['noregistrasi']}}</td>
                            </tr>
                            <tr>
                                <td>
                                    No Kartu
                                </td>
                                <td>:</td>
                                <td>{{$dataReport['nokepesertaan']}}</td>


                                <td>
                                    Jenis Peserta
                                </td>
                                <td>:</td>
                                <td>{{$dataReport['jenispeserta']}}</td>
                            </tr>
                            <tr>
                                <td>
                                    Nama Peserta
                                </td>
                                <td>:</td>
                                <td>{{$dataReport['namapeserta']}}</td>
                                <td>
                                    COB
                                </td>
                                <td>:</td>
                                <td>{{$dataReport['cob']}}</td>
                            </tr>
                            <tr>
                                <td>
                                    Tgl Lahir
                                </td>
                                <td>:</td>
                                <td>{{$dataReport['tgllahir']}}</td>
                                <td>
                                    Jenis Rawat
                                </td>
                                <td>:</td>
                                <td>{{$dataReport['jenisrawat']}}</td>
                            </tr>
                            <tr>
                                <td>
                                    Jenis Kelamin
                                </td>
                                <td>:</td>
                                <td>{{$dataReport['jeniskelamin']}}</td>
                                <td>
                                    Kelas Rawat
                                </td>
                                <td>:</td>
                                <td>{{$dataReport['namakelas']}}</td>
                            </tr>
                            <tr>
                                <td>
                                    Poli/ Ruangan Tujuan
                                </td>
                                <td>:</td>
                                <td>{{$dataReport['namaruangan']}}</td>
                                <td>
                                    Pasien/ Keluarga Pasien
                                </td>
                                <td>

                                </td>
                                <td>Petugas Bpjs Kesehatan</td>
                            </tr>
                            <tr>
                                <td>
                                    Asal Faskes TK I
                                </td>
                                <td>:</td>
                                <td>{{$dataReport['namapoli']}}</td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Diagnosa Awal
                                </td>
                                <td>:</td>
                                <td>{{$dataReport['namadiagnosa']}}</td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Catatan
                                </td>
                                <td>:</td>
                                <td>{{$dataReport['catatan']}}</td>
                                <td>
                                    _________________
                                </td>
                                <td>

                                </td>
                                <td>
                                    _________________
                                </td>
                            </tr>
                            <tr>

                                <td colspan="4">
                                    *Saya Menyetujui BPJS Kesehatan menggunakan informasi Medis Pasien jika
                                    diperlukan.<br />
                                    *SEP bukan sebagai bukti penjaminan peserta<br />
                                    Cetakan Ke 1 {{$dataReport['tanggal']}}<br />
                                </td>

                            </tr>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>