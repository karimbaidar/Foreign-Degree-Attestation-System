<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\search;
class searchController extends Controller
{
    public function index()
    {
        return view("admin.setup.search_by_id.create");
    }
    public function search_by_id($doctor_id)
    {
        $doc_record=search::find($doctor_id);

        return view("admin.setup.search_by_id.list",compact('doc_record'));
    }
}
