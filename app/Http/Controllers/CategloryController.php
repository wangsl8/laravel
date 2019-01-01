<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategloryController extends Controller
{
    //
    public function index()
    {
        $id=$_REQUEST['book_id'];
        $List = DB::table('categlories')
        ->where('book_id',$id)
        ->get();
        return $List;
    }
}
