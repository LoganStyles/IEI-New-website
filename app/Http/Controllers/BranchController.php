<?php

namespace App\Http\Controllers;

// use App\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BranchController extends Controller
{
    public function index() {
        //        
        $moduleitems = DB::table('branches')
                ->select('id','title as name','address','personnel as contact_person','mobile as telephone')
                ->get();
        return $moduleitems;
    }
}
