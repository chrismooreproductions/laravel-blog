@extends('layouts.master')

@section('content')
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <h1>Register</h1>
            </div>
            <div class="card-body">
                <form method="POST" action="/register">
                    {{ csrf_field() }}
                    
                    <div class="form-group">
                        <label for="name">name:</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">email:</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">password:</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">confirm password:</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">register</button>
                    </div>
                    @include('layouts.errors')
                </form>
            </div>
        </div>
    </div>
@endsection