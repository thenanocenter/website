<?php

namespace App\Http\Controllers\Manage\Projects\Payments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

    public function index($projectId){
        $project = \App\Project::findOrFail($projectId);
        return view('manage.project.payment.index',[
            'project'=>$project,
            'payments'=>$project->successfulPayments,
        ]);
    }

}
