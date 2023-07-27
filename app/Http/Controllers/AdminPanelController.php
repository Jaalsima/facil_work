<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobRequest;
use App\Models\Quotation;
use Illuminate\Support\Facades\Auth;

class AdminPanelController extends Controller
{
    public function index()
    {
        // Get the authenticated user
        $user = Auth::user();

        // Fetch job requests associated with the user
        $jobRequests = JobRequest::where('user_id', $user->id)->get();

        // Fetch quotations associated with the user
        $quotations = Quotation::where('user_id', $user->id)->get();

        // Load the dashboard view and pass the data
        return view('admin.dashboard', compact('jobRequests', 'quotations'));
    }
}
