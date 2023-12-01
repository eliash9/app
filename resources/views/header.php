<table width="100%" style="table-layout:fixed;text-align:center;">
            <tr>
                <td style="width:15%;margin:0 auto;" rowspan="2">
                    <figure style="width:60px;margin:0 auto;">
                        <!--
                        @if(stripos(\Request::url(), 'localhost') !== FALSE)
                                <img src="{{ asset('img/logo_only.png') }}" alt="" style="width: 60px;">
                            @else
    -->
                        <img src="service/img/logo_only.png" alt="" style="width: 60px;">
                        <!--      @endif -->
                    </figure>
                </td>
                <td style="width:35%;margin:0 auto;" rowspan="2">
                    <table width="100%" style="border:none;table-layout:fixed;text-align:center;">
                        <tr style="border:none;text-align:center;">
                            <td style="text-align:center;border:none;">
                                <strong style="font-size: 11pt">{!! $res['profile']->namalengkap !!}</strong> <br>
                                JL. SERIKAYA NO. 17 BULUKUMBA 92512 <br>
                                TELP : {!! $res['profile']->fixedphone !!}
                            </td>
                        </tr>
                    </table>

                </td>
                
                <td style="width:25%;margin:0;" rowspan="2">
                    <table width="100%" style="border:none;table-layout:fixed;text-align:left;">
                        <tr>
                            <td colspan="4" style="border:none;font-size:7pt;">Nama Lengkap</td>
                            <td style="border:none;font-size:7pt;" colspan="9">: {!! $res['d'][0]->namapasien !!} ({!!
                                $res['d'][0]->jeniskelamin == 'PEREMPUAN' ? 'P' : 'L' !!})</td>
                            <!-- <td style="border:none;text-align: right;">{!! $res['d'][0]->jeniskelamin == 'PEREMPUAN' ? 'P' :
                    'L' !!}</td> -->
                        </tr>
                        <tr>
                            <td colspan="4" style="border:none;font-size:7pt;">Tanggal Lahir</td>
                            <td style="border:none;font-size:7pt;" colspan="9">: {!! date('d-m-Y',strtotime(
                                $res['d'][0]->tgllahir
                                )) !!}</td>
                        </tr>
                        <tr>
                            <td colspan="4" style="border:none;font-size:7pt;">NIK</td>
                            <td style="border:none;font-size:7pt;" colspan="9">: {!! $res['d'][0]->noidentitas !!}</td>

                        </tr>
                    </table>

                </td>
                <td style="width:10%;margin:0 auto;background:#000;color:#fff;text-align:center;font-size:36px">
                    RM</td>

            </tr>
            <tr>
                <td style="text-align:center;font-size:36px">01</td>
            </tr>
        </table>