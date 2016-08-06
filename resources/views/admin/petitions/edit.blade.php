@extends('admin.layout')

@section('content')

    <h1 class="text-center">Edit Petition</h1>

    <div class="row">
        @if ($petition->id)
            <form method="POST" action="/admin/petitions/{{ $petition->id }}">
        @else
            <form method="POST" action="/admin/petitions/">
        @endif
            @if ($petition->id)
                {{ method_field('PATCH') }}
            @else
                <input type="hidden" name="active" value="1">
            @endif
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $petition->title }}" required>
            </div>
            <div class="form-group">
                <label for="summary">Summary</label>
                <textarea class="form-control" id="summary" name="summary" required>{{ $petition->summary }}</textarea>
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" id="body" name="body" required>{{ $petition->body }}</textarea>
            </div>
            <div class="form-group">
                <label for="thankyoumessage">Thank You Message</label>
                <textarea class="form-control" id="thankyoumessage" name="thankyoumessage" required>{{ $petition->thankyoumessage }}</textarea>
            </div>
            <div class="form-group">
                <label for="public">Public</label>
                <div class="radio">
                    <label>
                        <input type="radio" name="public" id="public1" value="1" @if ($petition->id && $petition->public) checked @endif required> Public
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="public" id="public0" value="0" @if ($petition->id && !$petition->public) checked @endunless required> Private
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg">
                @if ($petition->id)
                    Update Petition
                @else
                    Create Petition
                @endif
            </button>
        </form>
    </div>
    @if ($petition->id)
        <div class="row">
            <div class="col-md-6">
                <h3>Assets</h3>
                @if ($petition->assets->count())
                    <p>We have assets!</p>
                @else
                    <p class="text-muted">none</p>
                @endif
            </div>
            <div class="col-md-6">
                <h3>Custom Fields</h3>
                @if ($petition->fields->count())
                    <p>We have custom fields!</p>
                @else
                    <p class="text-muted">none</p>
                @endif
            </div>
        </div>
        <div class="row">
            <h2>Current Signatures</h2>
            <table class="table table-striped">
                <thead>
                    <tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Phone</th><th>Signed Date</th><th>Notified</th></tr>
                </thead>
                <tbody>
                    @if ($petition->signatures->count())
                        @foreach ($petition->signatures as $signature)
                            <tr>
                                <td>{{ $signature->firstname }}</td>
                                <td>{{ $signature->lastname }}</td>
                                <td>{{ $signature->email }}</td>
                                <td>{{ $signature->phone }}</td>
                                <td>{{ $signature->created_at }}</td>
                                <td>
                                    @if ($signature->notified)
                                        Yes
                                    @else
                                        No
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr><td colspan="6" class="text-muted">none</td></tr>
                    @endif
                </tbody>
            </table>
        </div>
        <div class="row">
            <a class="btn btn-danger btn-lg btn-block" href="/admin/petitions/{{ $petition->id }}/delete">Delete Petition</a>
            <p class="text-muted text-center"><small>This cannot be undone</small></p>
        </div>
    @endif

@stop
