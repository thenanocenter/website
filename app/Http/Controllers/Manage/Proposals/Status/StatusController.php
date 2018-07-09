<?php

namespace App\Http\Controllers\Manage\Proposals\Status;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StatusController extends Controller
{

    public function update($proposalKey,$statusKey)
    {
        $proposal = \App\ProjectProposal::findByKey($proposalKey);
        $proposal->status = $statusKey;
        $proposal->save();
        return redirect()->back()->withSuccess('Status updated!');
    }

}
