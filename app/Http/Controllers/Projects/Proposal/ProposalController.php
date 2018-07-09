<?php

namespace App\Http\Controllers\Projects\Proposal;

use App\Http\Controllers\Controller;
use App\Mail\ProjectProposalCreated;
use Illuminate\Http\Request;

class ProposalController extends Controller
{

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
    	$proposalData = $request->only([
            'title',
            'email',
            'description',
            'goal',
            'written_proposal_url',
            'links',
        ]);
        $proposalData['status'] = 'pending';
        $proposal = \App\ProjectProposal::create($proposalData);
        \Mail::send(new ProjectProposalCreated($proposal));
        return redirect('/projects/proposal')->withSuccess('Your Proposal Has Been Submitted!');
    }

}
