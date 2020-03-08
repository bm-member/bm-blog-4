@extends('layouts.master')

@section('title', 'Create Post')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h3>Create A Post</h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('post') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea name="content" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Create</button>
                        <a href="{{ url('post') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
