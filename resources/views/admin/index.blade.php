@extends('admin.layout')

@section('content')
    <div class="text-center"><p class="notice">Please log in to access the admin panel</p></div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <form id="form-login">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
@stop
