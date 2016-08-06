@extends('admin.layout')

@section('content')

    <h1 class="text-center">Active Petitions</h1>

    <div class="row">
        <table class="table table-hover">
            <thead>
                <tr><th>Public</th><th>Petition Title</th><th>Number of Signatures</th><th></th><th></th></tr>
            </thead>
            <tbody>
            @foreach ($petitions as $petition)
                <tr>
                    <td>{{ $petition->public }}</td><td>{{ $petition->title }}</td><td>{{ $petition->signatures()->count() }} signatures</td><td><a href="/admin/petitions/{{ $petition->id }}/edit">edit</a></td><td><a href="/admin/petitions/{{ $petition->id }}/delete">delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <p class="text-muted text-right"><small>Deleting petitions cannot be undone</small></p>
    </div>
    <div class="row">
        <a class="btn btn-success btn-lg" href="/admin/petitions/create">Create New Petition</a>
    </div>

@stop
