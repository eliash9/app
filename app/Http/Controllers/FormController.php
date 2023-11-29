<?php
// app/Http/Controllers/FormController.php

namespace App\Http\Controllers;

class FormController extends Controller
{
    public function showForm()
    {
       // return view('select_template');
       $folderPath = public_path('files'); // Change the path to your folder
       $files = scandir($folderPath);
       $files = array_diff($files, array('.', '..'));

       return view('select_template', ['files' => $files]);

    }
}
