<!-- resources/views/project/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Project Title -->
    <header class="my-4">
        <h1>{{ $project['title'] }}</h1>
    </header>

    <!-- Project Description -->
    <section class="project-description">
        <h2>Description</h2>
        <p>{{ $project['description'] }}</p>
    </section>

    <!-- Key Features -->
    <section class="project-features my-4">
        <h2>Key Features</h2>
        <ul>
            @foreach($project['features'] as $feature)
                <li>{{ $feature }}</li>
            @endforeach
        </ul>
    </section>

    <!-- Project Timeline -->
    <section class="project-timeline my-4">
        <h2>Timeline</h2>
        <ul>
            @foreach($project['timeline'] as $milestone)
                <li>{{ $milestone['phase'] }} - {{ $milestone['date'] }}</li>
            @endforeach
        </ul>
    </section>

    <!-- Team Members -->
    <section class="team-members my-4">
        <h2>Team Members</h2>
        @foreach($project['team'] as $member)
            <div class="member">
                <h4>{{ $member['name'] }} - {{ $member['role'] }}</h4>
                <p>{{ $member['bio'] }}</p>
                <a href="{{ $member['linkedin'] }}">LinkedIn</a>
            </div>
        @endforeach
    </section>

    <!-- Images and Media -->
    <section class="media-gallery my-4">
        <h2>Images and Media</h2>
        <div class="gallery">
            @foreach($project['media']['images'] as $image)
                <img src="{{ asset('images/' . $image) }}" alt="Project Image">
            @endforeach

            @foreach($project['media']['videos'] as $video)
                <video controls>
                    <source src="{{ asset('videos/' . $video) }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            @endforeach
        </div>
    </section>

    <!-- Technical Details -->
    <section class="technical-details my-4">
        <h2>Technical Details</h2>
        <ul>
            @foreach($project['technical_details'] as $detail)
                <li>{{ $detail }}</li>
            @endforeach
        </ul>
    </section>

    <!-- Client Testimonials -->
    <section class="testimonials my-4">
        <h2>Client Testimonials</h2>
        @foreach($project['testimonials'] as $testimonial)
            <blockquote>
                <p>{{ $testimonial['feedback'] }}</p>
                <cite>- {{ $testimonial['client'] }}</cite>
            </blockquote>
        @endforeach
    </section>

    <!-- Call to Action -->
    <section class="call-to-action my-4">
        <h2>Get in Touch</h2>
        <a href="{{ route('contact') }}" class="btn btn-primary">Contact Us</a>
    </section>

    <!-- Related Projects -->
    <section class="related-projects my-4">
        <h2>Related Projects</h2>
        <ul>
            @foreach($project['related_projects'] as $related)
                <li>{{ $related }}</li>
            @endforeach
        </ul>
    </section>

    <!-- Downloadable Resources -->
    <section class="downloads my-4">
        <h2>Downloads</h2>
        <ul>
            @foreach($project['downloads'] as $download)
                <li><a href="{{ $download['link'] }}">{{ $download['title'] }}</a></li>
            @endforeach
        </ul>
    </section>

    <!-- Comment Section -->
    <section class="comments my-4">
        <h2>Leave a Comment</h2>
        <form method="POST" action="{{ route('project.comment') }}">
            @csrf
            <textarea name="comment" class="form-control" placeholder="Your comment"></textarea>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </section>
</div>
@endsection
