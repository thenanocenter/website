<?php

namespace App\Http\Controllers\Projects\Payments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

    public function store(Request $request, $projectKey)
    {
        $project = \App\Project::findByKey($projectKey);
        if(!$project){
            abort(404);
        }
        $this->validate($request,[
            'selected_amount'=>'required',
            'selected_currency'=>'required',
         //   'g-recaptcha-response' => 'required|recaptcha',
        ]);
        $paymentData = $request->only([
            'name',
            'email',
            'selected_amount',
            'selected_currency',
        ]);
        $paymentData['paymentable_id'] = $project->id;
        $paymentData['paymentable_type'] = get_class($project);
        $payment = \App\Payment::create($paymentData);
        return redirect($payment->getPath());
    }

    public function show(Request $request, $projectKey, $paymentKey)
    {
        $project = \App\Project::findByKey($projectKey);
        if(!$project){
            abort(404);
        }
        $payment = \App\Payment::findByUuid($paymentKey);
        if(!$payment){
            abort(404);
        }
        return view('projects.payment.show',[
            'project'=>$project,
            'payment'=>$payment,
        ]);
    }

    public function update(Request $request, $projectKey, $paymentKey)
    {
        $project = \App\Project::findByKey($projectKey);
        if(!$project){
            abort(404);
        }
        $payment = \App\Payment::findByUuid($paymentKey);
        if(!$payment){
            abort(404);
        }
        if($payment->success){
            return redirect($payment->getPath());
        }
        $brainBlocksResponse = \BrainBlocks::getTokenResponse($request->brainblocks_token);
        $responseIsValid = \BrainBlocks::validateResponse($brainBlocksResponse,[
            'destination' => $project->nano_address,
        ]);
        if($responseIsValid){
            $payment->update([
                'amount_rai'=>$brainBlocksResponse->amount_rai,
                'brainblocks_token'=>$brainBlocksResponse->token,
                'send_block'=>$brainBlocksResponse->send_block,
                'sender'=>$brainBlocksResponse->sender,
                'success'=>true,
            ]);
        }
        return redirect($payment->getPath());
    }

}
