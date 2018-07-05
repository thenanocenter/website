<?php

namespace App\Http\Controllers\Manage\Proposals;

use BinaryCabin\LaravelReporting\Http\Controllers\BaseManageController;
use Illuminate\Http\Request;

class ProposalController extends BaseManageController
{

    protected $modelClass = \App\ProjectProposal::class;
    protected $viewIndex = 'manage.proposal.index';
    protected $variableNamePlural = 'proposals';
    protected $variableNameSingular = 'proposal';
}