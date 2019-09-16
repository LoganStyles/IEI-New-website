<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DownloadController extends Controller
{
    public function index()
    {
        $moduleitems = DB::table('downloads')
                ->select('id','title',DB::raw("'0' as download_count"),'file as file_name','category')
                ->get();
        return $moduleitems;
    }
}
