@extends('layout')

@section('content')
    <div class="text-left">
        <a class="notice" href="/petitions">back to petitions</a>
    </div>
    <h1 class="text-center">{{ $petition->title }}</h1>
    <div class="row"><div class="col-md-12 text-center lead">
        {{ $petition->summary }}
    </div></div>
    <div class="row">
        <div class="col-md-8">
            {{ $petition->body }}
        </div>
        <div class="col-md-4">
            <div class="row">
                <h4>Sign Today</h4>
                <form>
                    <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input type="text" class="form-control" id="firstname">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Last Name</label>
                        <input type="text" class="form-control" id="lastname">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone">
                    </div>
                    <button type="submit" class="btn btn-primary">Sign Petition</button>
                </form>
            </div>
            <div class="row">
                <h4>Current Signatures</h4>
                <ul class="list-unstyled">
                    @if ($signatures->count() > 0)
                        @foreach ($signatures as $signature)
                            <li>{{ $signature->firstname }} <small>{{ $signature->datecreated }}</small></li>
                        @endforeach
                    @else
                        <li><small class="text-muted">no signatures</small></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>

@stop
