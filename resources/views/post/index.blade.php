@extends('layouts.master')

@section('title', 'All Post')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">

        @if(session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
            
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h1>All Posts</h1>
        </div>
        <div class="col-md-6 text-right">
            <a href="/post/create" class="btn btn-primary">
                Create
            </a>
        </div>
    </div>
    <div class="row">

        @foreach($posts as $post)
        <div class="col-md-12 mb-3">
            <div class="card">
                <div class="card-header">
                    <h3> {{ $post->title }} </h3>
                </div>
                <div class="card-body">
                    <p> {{ $post->content }} </p>
                </div>
                <div class="card-footer">
                    <div class="float-left">
                        <p>Posted <i>{{ $post->created_at->diffForHumans() }}</i> by <b>Mg Mg</b></p>
                    </div>
                    <div class="float-right">
                        <a href="{{ url("/post/edit/$post->id") }}" class="btn btn-success">Edit</a>
                        <a href="{{ url("/post/destroy/$post->id") }}" class="btn btn-danger">Del</a>
                    </div>
                </div>
            </div>

        </div>
        @endforeach

    </div>
    <div class="row">
        {{ $posts->links() }}
    </div>
</div>

@endsection
