<?php

namespace App\Http\Controllers;

use DB;
use Excel;
use Illuminate\Http\Request;

class ImportExcelController extends Controller
{
    public function index()
    {
        $data = DB::table('tbl_customer')->orderBy('CustomerID', 'DESC')->get();
        return view('import_excel', compact('data'));
    }

    public function import(Request $request)
    {
        $this->validate($request, [
            'select_file' => 'required|mimes:xls,xlsx',
        ]);

        $path = $request->file('select_file')->getRealPath();

        $data = Excel::load($path)->get();

        if ($data->count() > 0) {
            foreach ($data as $key => $value) {
                $insert_data[] = array(
                    'CustomerName' => $value['customername'],
                    'Gender' => $value['gender'],
                    'Address' => $value['address'],
                    'City' => $value['city'],
                    'PostalCode' => $value['postalcode'],
                    'Country' => $value['country'],
                );
            }

            if (!empty($insert_data)) {
                DB::table('tbl_customer')->insert($insert_data);
            }
        }

        return back()->with('success', 'Excel Data Imported successfully.');
    }
}
