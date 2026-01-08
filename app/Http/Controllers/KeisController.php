<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keis;

class KeisController extends Controller
{
    public function index(){
        $cases = Keis::all();

        return view('cases.index', ['cases' => $cases]);
    }

    public function show($id){
        $case = Keis::with(['declarant', 'consignee', 'vehicles', 'documents', 'inspections'])->findOrFail($id);
        return view('cases.show', compact('case'));
    }
}
