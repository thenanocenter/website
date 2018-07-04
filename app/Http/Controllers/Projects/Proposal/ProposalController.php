<?php

namespace App\Http\Controllers\Projects\Proposal;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProposalController extends Controller
{
	protected $modelClass = \App\ProjectProposal::class;
	protected $baseRoute = 'projects/proposal';

    public function show()
    {
        return view('projects.proposal.show');
    }

    public function store(Request $request)
    {
    	$modelClass = $this->modelClass;
        $model = $modelClass::create($request->all());
        return redirect($this->baseRoute)->withSuccess('Your Proposal Has Been Submitted!');
    }

}
