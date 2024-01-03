<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\Models\User;

use PDF;



class PDFController extends Controller
{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */
    /*
        public function generatePDF()

        {

            $users = User::get();

      

            $data = [

                'title' => 'Welcome to ItSolutionStuff.com',

                'date' => date('m/d/Y'),

                'users' => $users

            ]; 

                

            $pdf = PDF::loadView('myPDF', $data);

         

            return $pdf->download('itsolutionstuff.pdf');

        }

        public function generatePDF(Request $request)
        {
            $template = $request->input('file'); // Assuming 'template' is the name of your select input

            // Your logic to get data for the template (if needed)

            $data = [
                // Your data goes here
            ];

            $pdf = PDF::loadView('pdf.'.$template, $data);

            // You can save the PDF file if needed
            // $pdf->save(storage_path('app/public/'.$template.'.pdf'));

            return $pdf->stream($template.'.pdf');
        }
    */
    public function generatePdf(Request $request)
    {
        $selectedFile = $request->input('file');
        $fileName = pathinfo($selectedFile, PATHINFO_FILENAME);

        $profile = [
            'namalengkap' => 'RS',
            'alamatlengkap' => 'alamat'
        ];

        $undangan = [
            'mr'=>'MR',
            'nama'=>'NAdamsaf',
            'ttl'=>'23-33-1234',
            'nik'=>'32352352352'

        ];
        $undangan2 = [
            'mr'=>'325235',
            'nama'=>'Indah Dewi',
            'ttl'=>'23-33-1234',
            'nik'=>'32352352352'

        ];

        $undangan3 = [
            [
                'MR' => 'MR 1',
                'NAMA' => 'NAdamsaf',
                'TTL' => '23-33-1234',
                'NIK' => '32352352352',
            ],
            [
                'MR' => 'MR 2',
                'NAMA' => 'John Doe',
                'TTL' => '12-21-1980',
                'NIK' => '987654321',
            ],
            [
                'MR' => 'MR 3',
                'NAMA' => 'Jane Smith',
                'TTL' => '05-15-1995',
                'NIK' => '123456789',
            ],
            [
                'MR' => 'MR 1',
                'NAMA' => 'NAdamsaf',
                'TTL' => '23-33-1234',
                'NIK' => '32352352352',
            ],
            [
                'MR' => 'MR 2',
                'NAMA' => 'John Doe',
                'TTL' => '12-21-1980',
                'NIK' => '987654321',
            ],
            [
                'MR' => 'MR 3',
                'NAMA' => 'Jane Smith',
                'TTL' => '05-15-1995',
                'NIK' => '123456789',
            ],
            [
                'MR' => 'MR 1',
                'NAMA' => 'NAdamsaf',
                'TTL' => '23-33-1234',
                'NIK' => '32352352352',
            ],
            [
                'MR' => 'MR 2',
                'NAMA' => 'John Doe',
                'TTL' => '12-21-1980',
                'NIK' => '987654321',
            ],
            [
                'MR' => 'MR 3',
                'NAMA' => 'Jane Smith',
                'TTL' => '05-15-1995',
                'NIK' => '123456789',
            ],
            // Add more items as needed
        ];


        $profile = [
            'namalengkap' => 'RSUD H.A SULTHAN DAENG RADJA BULUKUMBA',
            'alamatlengkap' => 'JL. SERIKAYA NO. 17 BULUKUMBA 92512',
            'fixedphone'=>'(0413) 81292'

        ];
        $d1=[
            'nocm' => '043099',
            'tglorder'=>'07-01-1988',
            'noregistrasi'=>23523,
            'pengorder'=>'',
            'dokterpenanggungjawab'=>'',
            'umur'=>55,
            'ruanganperejuk'=>'ee',
            'tgllahirs'=>'',
            'tglakhir'=>'',
            'alamatlengkap'=>'',
            'kelompokpasien'=>'',
            'namarekanan'=>'',
            'catatan'=>'',
            'produkfk'=>'',
            'dokterperiksa'=>'',
            'tat'=>'',
            'namapasien' => 'Aulia Suprapto',
            'jeniskelamin'=>'PEREMPUAN',
            'tgllahir'=>'07-01-1988',
            'noidentitas'=>'6464646464646',
            'tanggal'=>'06-06-2023 13:24',
            'nofoto'=>'5235',
            'klinis'=>'post orif',
            'statusrad'=>'Biasa',
            'dokterpengirim'=>'dr. Sufandi Fahmi, Sp.OT',
            'dokterluar'=>'SDGSD',
            'dokterrad'=>'dr. Hj. Rakhmawati Tahir Lopa, M.Kes, Sp.Rad.,Subsp, Abd(K)',
            'keterangan'=>'Foto Antebrachii Dextra AP/Lat<br><br>
            - Plate and screws terpasang disertai discontinuitas 1/3 tengah os radiusulna<br>
            - Tampak os radius bowing<br>
            - Mineralisasi tulang berkurang, kasar dan porotik<br>
            - Celah sendi baik<br>
            - Soft tissue baik<br>
            Kesan :<br>
            - Plating disertai discontinuitas 1/3 tengah os radiusulna dextra (Dibanding foto tanggal 26-04-2023, stqa)<br>
            - Osteoporosis',
            'pgid'=>1012282,
            'emrdfk'=>'',



        ];

        
        
        $d = [
            'd' => [(object)$d1],
            'd1' => [(object)$d1],
            'profile' => (object) $profile,

        ];
        $image=[
            'image'=>'img/hiperbilirubin.png'
        ];

        $item=[];

        

        $data = [
            
            'image'=>public_path('img/logo_only.png'),
            'raw'=>[(object)$d1,(object)$d1],
            'profile' => (object) $profile,
            'cek'=>(object)$d1,
            'aa'=>[],
            'undangan'=>$undangan3,
            'r'=>['strIdPegawai'=>445646],
            'title' => 'judul',
            'namars' => 'RSUD H.A. Sulthan Daeng Radja Bulukumba',
            'res' => [
                'd' => [(object)$d1],
                'd1' => [(object)$d1],
                'd2'=> [(object)$d1],
                'd3' => [(object)$d1],
                'd4' => [(object)$d1],
                'd5' => [(object)$d1],
                'd6' => [(object)$d1],
                'd7' => [(object)$d1],
                'd8' => [(object)$d1],
                'd9' => [(object)$d1],
                'd10' => [(object)$d1],
                'd11' => [(object)$d1],
                'd12'=> [(object)$d1],
                'd13' => [(object)$d1],
                'd14' => [(object)$d1],
                'd15' => [(object)$d1],
                'd16' => [(object)$d1],
                'd17' => [(object)$d1],
                'd18' => [(object)$d1],
                'd19' => [(object)$d1],
                'd20' => [(object)$d1],
                'profile' => (object) $profile,
                'img'=>(object)$image,
                
               
    
            ]
        ];


        // Generate PDF using the file content
        $pdf = PDF::loadView('pdf.' . $fileName, $data);

        return $pdf->stream();
    }



}