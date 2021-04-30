<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use App\User;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use App\Imports\UsersImport;

class PdfController extends Controller
{
    public function pdf(){
        $users = User::all();
        $pdf = PDF::loadView('users.pdf', compact('users'));
        return $pdf->download('users.pdf');
    }
    public function excel(){
        return Excel::Download(new UsersExport, 'users.xlsx');
    }
    public function excelImport(Request  $request){
        $file = $request->file('file');
        Excel::import(new UsersImport, $file);
        return back()->with('message','Importacion de Usuarios exitosa');
    }
}
