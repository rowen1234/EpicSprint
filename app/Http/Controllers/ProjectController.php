<?php

namespace App\Http\Controllers;

use App\Models\project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();

        return view('project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('project/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate(
            [
                'name' => 'required',
                'description' => 'required',
                'deadline' => 'required'
            ]);

            Project::create($validated);

        return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $project = [
            'title' => 'Your Project Title',
            'description' => 'A detailed project description goes here...',
            'features' => [
                'Feature 1: Innovative technology',
                'Feature 2: Unique selling point',
                'Feature 3: Award received',
            ],
            'timeline' => [
                ['phase' => 'Start', 'date' => '2024-01-01'],
                ['phase' => 'Milestone 1', 'date' => '2024-03-01'],
                ['phase' => 'Completion', 'date' => '2024-12-01'],
            ],
            'team' => [
                ['name' => 'John Doe', 'role' => 'Project Manager', 'bio' => 'Expert in...', 'linkedin' => 'https://linkedin.com/in/johndoe'],
                ['name' => 'Jane Smith', 'role' => 'Lead Developer', 'bio' => 'Specializes in...', 'linkedin' => 'https://linkedin.com/in/janesmith'],
            ],
            'media' => [
                'images' => ['image1.jpg', 'image2.jpg'],
                'videos' => ['video1.mp4'],
            ],
            'technical_details' => [
                'Languages: PHP, JavaScript',
                'Frameworks: Laravel, Vue.js',
                'APIs: Payment Gateway, Google Maps',
            ],
            'testimonials' => [
                ['client' => 'Company A', 'feedback' => 'Amazing work!'],
                ['client' => 'Company B', 'feedback' => 'Exceeded our expectations!'],
            ],
            'related_projects' => ['Project A', 'Project B'],
            'downloads' => [
                ['title' => 'Project Brief', 'link' => '/downloads/brief.pdf'],
                ['title' => 'Case Study', 'link' => '/downloads/case-study.pdf'],
            ]
        ];

        return view('project.show', compact('project'));
    }

    public function storeComment(Request $request)
    {
        // Handle comment saving logic here
        return back()->with('message', 'Thank you for your feedback!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(project $project)
    {
        //
    }
}
