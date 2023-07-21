<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\JobRequest;
use App\Models\Skill;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class JobRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $jobRequests = JobRequest::all();
        return view('job_requests.index', compact('jobRequests'));
    }

    public function create(): View
    {
        $categories = Category::all();
        $skills = Skill::all();
        return view('job_requests.create', compact('categories', 'skills'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'category_id' => 'required',
            'skill_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
        ]);

        JobRequest::create($request->all());

        return redirect()->route('job_requests.index')->with('success', 'Solicitud de trabajo creada exitosamente.');
    }

    public function show(JobRequest $jobRequest): View
    {
        return view('job_requests.show', compact('jobRequest'));
    }

    public function edit(JobRequest $jobRequest): View
    {
        $categories = Category::all();
        $skills = Skill::all();
        return view('job_requests.edit', compact('jobRequest', 'categories', 'skills'));
    }

    public function update(Request $request, JobRequest $jobRequest): RedirectResponse
    {
        $request->validate([
            'category_id' => 'required',
            'skill_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
        ]);

        $jobRequest->update($request->all());

        return redirect()->route('job_requests.index')->with('success', 'Solicitud de trabajo actualizada exitosamente.');
    }

    public function destroy(JobRequest $jobRequest): RedirectResponse
    {
        $jobRequest->delete();
        return redirect()->route('job_requests.index')->with('success', 'Solicitud de trabajo eliminada exitosamente.');
    }
}
