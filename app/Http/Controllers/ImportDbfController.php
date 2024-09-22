<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Majkel\Dbf; // 

class ImportDbfController extends Controller
{
     public function import_dbf_page(){
        return view('ticketSystem.import_dbf');

    }


    public function importDbase(Request $request)
{
    // Validate the uploaded file
    $request->validate([
        'dbf_file' => 'required|file',
    ]);

    // Open the uploaded DBF file
    $file = $request->file('dbf_file');

    // Use the DBF class to read the file
    $dbf = new Dbf($file->getPathname());

    // Iterate over the records
    foreach ($dbf as $record) {
        // Process each record as needed
        // For example, insert into the database
        DB::table('your_table_name')->insert([
            'column_name' => $record->column_name, // Replace with actual columns
        ]);
    }

    return redirect()->back()->with('success', 'DBF Imported Successfully');
}
}
