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


        $profile = [
            'namalengkap' => 'RSUD H.A SULTHAN DAENG RADJA BULUKUMBA',
            'alamatlengkap' => 'JL. SERIKAYA NO. 17 BULUKUMBA 92512',
            'fixedphone'=>'(0413) 81292'

        ];
        $d1=[
            'nocm' => 'ABC123',
            'namapasien' => 'Nanma',
            'jeniskelamin'=>'PEREMPUAN',
            'tgllahir'=>'07-01-1988',
            'noidentitas'=>'6464646464646'

        ];
        $d = [
            'd' => [(object)$d1],
            'profile' => (object) $profile,

        ];

        $data = [

            'title' => 'judul',
            'namars' => 'RSUD H.A. Sulthan Daeng Radja Bulukumba',
            'res' => $d
        ];


        // Generate PDF using the file content
        $pdf = PDF::loadView('pdf.' . $fileName, $data);

        return $pdf->stream();
    }



}