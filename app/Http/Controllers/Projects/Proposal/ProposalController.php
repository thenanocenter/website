<?php

namespace App\Http\Controllers\Projects\Proposal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProposalController extends Controller
{

    public function show()
    {
        return view('projects.proposal.show');
    }

}
