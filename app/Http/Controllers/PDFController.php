<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;

class PDFController extends Controller
{
    public function index(){

        return Response::make(file_get_contents('dokumen/Catalog Juni 2023.pdf'), 200, [
                       'content-type'=>'application/pdf',
                   ]);
   }
}
