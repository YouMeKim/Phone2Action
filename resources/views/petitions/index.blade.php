@extends('layout')

@section('content')
    <h1>Active Petitions</h1>

    <table>
    @foreach ($petitions as $petition)
        <tr><td>{{ $petition->title }}</td></tr>
    @endforeach
    </table>

@stop
