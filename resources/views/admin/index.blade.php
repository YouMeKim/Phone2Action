@extends('admin.layout')

@section('content')
    <div class="text-center"><p class="notice">Please log in to access the admin panel</p></div>
    <form id="form-login">
        <table>
            <tr><td><label for="username">Username</label></td><td><input type="text" id="username" name="username"></td></tr>
            <tr><td><label for="password">Password</label></td><td><input type="password" id="password" name="password"></td></tr>
            <tr><td colspan="2"><button id="login" value="login">Login</button></td></tr>
        </table>
    </form>
@stop
