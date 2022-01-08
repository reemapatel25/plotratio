<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Report;
use Illuminate\Support\Facades\Redirect;

class ReportController extends Controller {

  public function getReport(Request $request,$id){
    //get report-data from database
    $reportObject = new Report();
    $data = $reportObject->getLatestReportData($id);
    if(count(json_decode($data))!=0){
      return view('reports-detail')->with('data',json_decode($data))->with('buttonId',$id);
    }
  }
}

?>
