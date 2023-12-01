<?php
// app/Http/Controllers/FormController.php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
class FormController extends Controller
{
    public function showForm()
    {

        $viewsPath = base_path('resources/views/pdf');
        $files = File::files($viewsPath);

        $viewFiles = [];
        foreach ($files as $file) {
            $viewFiles[] = pathinfo($file, PATHINFO_FILENAME);
        }
        return view('select_template', ['files' => $viewFiles]);

    }
}
