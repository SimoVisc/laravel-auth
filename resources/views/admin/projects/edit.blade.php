@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="py-4">
            <h1>Edit {{ $project->name }}</h1>
            @include('partials.errors')
            <div class="mt-4">
                <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ old('name', $project->name) }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="10">{{ old('description', $project->description) }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="menager" class="form-label">Menager</label>
                        <input type="text" class="form-control" id="menager" name="menager"
                            value="{{ old('description', $project->menager) }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
