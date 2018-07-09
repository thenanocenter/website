<?php

namespace App\Http\Controllers\Projects\Proposal;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProposalController extends Controller
{
	protected $modelClass = \App\ProjectProposal::class;
	protected $baseRoute = 'projects/proposal';

    public function index()
    {
        return view('projects.proposal.index');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'email'=>'required|email',
            'description'=>'required',
            'goal'=>'required',
            'written_proposal_url'=>'required',
            'g-recaptcha-response' => 'required|recaptcha',
        ]);
    	$modelClass = $this->modelClass;
        $model = $modelClass::create($request->all());
        //TODO - Send email to admin
        return redirect($this->baseRoute)->withSuccess('Your Proposal Has Been Submitted!');
    }

}
