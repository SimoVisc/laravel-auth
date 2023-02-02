@extends('layouts.admin')
@section('content')
    <h1>List of Projects</h1>
    <div class="my-4">
        <a class="btn btn-warning text-light" href="{{ route('admin.projects.create') }}">
            Create project
        </a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Menager</th>
                <th scope="col">Slug</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->menager }}</td>
                    <td>{{ $project->slug }}</td>
                    <td class="d-flex">
                        <a href="{{ route('admin.projects.show', $project->slug) }}" class="btn btn-success mx-2">
                            <i class="fa-solid fa-circle-info "></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
