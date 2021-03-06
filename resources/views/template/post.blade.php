@extends('layouts.master')

@section('content')

    <!-- Blog Post -->
    <div class="card mb-4">
        <div class="card-body">
        <h2 class="card-title">{{$blog->title}}</h2>
        <p class="card-text">{{$blog->body}}</p>
        <a href="#" class="btn btn-primary">Read More &rarr;</a>
        </div>
        <div class="card-footer text-muted">
        {{ $blog->created_at->diffForHumans()}}
        <a href="#">{{ $blog->author}}</a>
        </div>
    </div>
@endsection

