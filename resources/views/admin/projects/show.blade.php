@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="py-4">
            <h1>{{ $project->name }}</h1>
            <p class="mt-4">{{ $project->description }}</p>
        </div>
    </div>
@endsection
