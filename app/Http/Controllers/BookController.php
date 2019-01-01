<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use DB;
use Illuminate\Support\Facades\Input;

class BookController extends Controller
{
    public function lista()
    {
        $id=$_REQUEST['type_id'];
        $list = DB::table('books')
        ->where('type_id',$id)
        ->get();
        return $list;
    }
    public function detail()
    {
        $id=$_REQUEST['book_id'];
        $detail = DB::table('books')
        ->where('book_id',$id)
        ->get();
        return $detail;
    }
}