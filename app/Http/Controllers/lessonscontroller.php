<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lesson;
use DB;
use Illuminate\Support\Facades\Input;

 class lessonscontroller extends Controller
 {
    public function index()
    {
        $id=$_REQUEST['user_id'];
        $List = DB::table('lessons')
        ->where('id',$id)
        ->get();
        return $List;
    }
    public function mc()
    {
        return lesson::all();
    }
 }
