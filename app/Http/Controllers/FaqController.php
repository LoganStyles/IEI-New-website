<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FaqController extends Controller
{
    public function index()
    {
        $moduleitems = DB::table('faqs')
                ->select('id','question','answer','category')
                ->get();
        return $moduleitems;
    }
}
