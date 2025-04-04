@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ $blog->title }}</h2>
    <p>{{ $blog->content }}</p>
    <p><strong>Writer:</strong> {{ $blog->writer_name }}</p>
    <p><strong>Last Updated:</strong> {{ $blog->updated_at }}</p>
    <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection
