<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class ImportController extends Controller
{
    public function import_page(){
        return view('ticketSystem.import_csv');

    }
    public function importCsv(Request $request)
    {
        // Validate that the file is a CSV
        $request->validate([
            'csv_file' => 'required|mimes:csv,txt',
        ]);
    
        // Open the uploaded CSV file
        $file = $request->file('csv_file');
        $csvData = file_get_contents($file);
        $lines = explode(PHP_EOL, $csvData);
        $data = [];
    
        // Skip the header row (assuming the first row contains column names)
        $header = str_getcsv(array_shift($lines));
    
        foreach ($lines as $line) {
            if (!empty(trim($line))) {
                $row = str_getcsv($line);
                $data[] = array_combine($header, $row);
            }
        }
        $loggedInUser = Auth::user()->name;
        // Insert data into your database
        foreach ($data as $row) {
            // Convert the date from MM/DD/YYYY to YYYY-MM-DD
            $birthDate = \DateTime::createFromFormat('m/d/Y', $row['BIRTH']); // Adjust as necessary
            $formattedDate = $birthDate ? $birthDate->format('Y-m-d') : null;
    
            $insertData = [
                'CSV_ID' => $row['CSV_ID'],
                'NAME' => $row['NAME'],
                'BANK' => $row['BANK'],
                'ADD1' => $row['ADD1'],
                'ADD2' => $row['ADD2'],
                'BIRTH' => $formattedDate,  // Use the formatted date here
                'PTYPE' => $row['PTYPE'],
                'STATUS' => $row['STATUS'],
                'GROUPING' => $row['GROUPING'],
                'CONMONTH' => $row['CONMONTH'],
                'READYX' => $row['READYX'],
                'branch_name'=>$loggedInUser,
                // Do not include 'AGE' here since it's not in the database
            ];
    
            DB::table('ssp')->insert($insertData);  // Replace 'ssp' with your actual table name
        }
    
        return redirect()->back()->with('success', 'CSV Imported Successfully');
    }
    
}
