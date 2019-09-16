<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UnitPriceController extends Controller
{
    public function showPrices(Request $request) {
        //fetch range of unit prices for API
        $result = [];
        $from_date = ($request['startDate']) ? ($request['startDate']) : (date('m/d/Y'));
        $to_date = ($request['endDate']) ? ($request['endDate']) : (date('m/d/Y'));
        
        if(!($request['startDate']) ||  !($request['endDate'])){
            $range_of_prices = DB::table('histories')
            ->selectRaw("id,report_date as ReportDate,DATE_FORMAT(report_date, '%d %b %Y') AS ReportDateFormatted,rsa as RSA,retiree as Retiree")
            ->orderBy('report_date', 'desc')
            ->take(7)
            ->get();
        }else{
            $from_date = ($request['startDate']) ? ($request['startDate']) : (date('m/d/Y'));
            $to_date = ($request['endDate']) ? ($request['endDate']) : (date('m/d/Y'));
            
            $from = date('Y-m-d' . ' 00:00:00', strtotime($from_date));
            $to = date('Y-m-d' . ' 00:00:00', strtotime($to_date));
        
            $range_of_prices = DB::table('histories')
            ->selectRaw("id,report_date as ReportDate,DATE_FORMAT(report_date, '%d %b %Y') AS ReportDateFormatted,rsa as RSA,retiree as Retiree")
            ->whereBetween('report_date', [$from, $to])
            ->orderBy('report_date', 'desc')
            ->get();
        }
        
        if ($range_of_prices) {
            $result = $range_of_prices;
        }
        return json_encode($result);
    }
}
