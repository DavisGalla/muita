<?php

namespace App\Http\Controllers;

use App\Models\Documents;
use Illuminate\Http\Request;

class DocumentsController extends Controller
{
    public function index(){
        $documents = Documents::all();

        return view('documents.index', ['documents' => $documents]);
    }

        public function show($id){

        $document = Documents::findOrFail($id);
        return view('documents.show', compact('document'));
    }
}
