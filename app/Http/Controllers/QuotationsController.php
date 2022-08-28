<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\GetQuotation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class QuotationsController extends Controller
{
    //
    public function index(Request $request)
    {
        // Send Test Email
        $details = $request->except('_token');

        Mail::send(new GetQuotation($details));

        return redirect()->back()->with('success', "Your Email has been Recieved");
    }
}
