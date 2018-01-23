@extends('layouts.master')

@section('content')
    <div class="col-md-8">
        <h1>Create a post</h1>
        <form method="POST" action="/posts/">
            {{ csrf_field() }}
            <hr>

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <textarea name="body" class="form-control" id="body"rows="10"></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>

            @include('layouts.errors')

        </form>

    </div>
@endsection