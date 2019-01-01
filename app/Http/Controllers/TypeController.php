<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;
use DB;
use Illuminate\Support\Facades\Input;

class TypeController extends Controller
{
    //
    public function show()
    {
        return Type::all();
    }
}