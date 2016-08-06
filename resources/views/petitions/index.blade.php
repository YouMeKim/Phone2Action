@extends('layout')

@section('content')
    <h1 class="text-center">Active Petitions</h1>

    <div class="row">
        @foreach ($petitions as $petition)
            <div class="petition col-md-6"><a href="/petitions/{{ $petition->id }}"><div class="title">{{ $petition->title }}</div><div class="pull-right text-muted"><small>{{ $petition->signatures()->count() }} signatures</small></div></a></div>
        @endforeach
    </div>

@stop
