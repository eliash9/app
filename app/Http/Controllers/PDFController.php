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

        // You may need to adjust the path based on your folder structure
        $filePath = public_path("files/{$selectedFile}");

        // Read the content of the file
        $fileContent = file_get_contents($filePath);
        $data = [
            // Your data goes here
            'title' => 'judul',
        ];

        // Generate PDF using the file content
        $pdf = PDF::loadView('pdf_view', ['content' => $fileContent,'data'=>$data]);

        return $pdf->stream();
    }
    


}