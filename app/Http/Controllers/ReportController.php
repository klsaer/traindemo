<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use App\Models\Report;
use App\Models\Status;

class ReportController extends Controller
{
    public function index(){
        $reports= Report::all();
        $statuses= Status::all();
        return view('report.index',compact('reports', 'statuses'));
    }

    public function destroy(Report $report){
        $report -> delete();
        return redirect()->back();
    }

    public function store(Request $request, Report $report, Status $statuses){
        $data=$request->validate([
            'number' => 'string',
            'description' => 'string',
            'status_id' =>''
        ]);

        $report->create($data);
        return redirect()->back();
    }

    public function show(Report $report, Status $statuses){
        return view ('report.show',compact('report'));
    }

    public function update(Request $request, Report $report, Status $statuses){
        $report= Report::all();
        $data=$request->validate([
            'number' => 'string',
            'description' => 'string',
            'status_id' =>''
        ]);

        $report->update($data);
        return redirect()->back();

    }
}
