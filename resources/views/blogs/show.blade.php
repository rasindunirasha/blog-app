@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ $blog->title }}</h2>

    {{-- Image gallery --}}
    @if ($blog->images && count($blog->images))
        <div class="image-gallery">
            @foreach ($blog->images as $image)
                <div class="image-item">
                    <img src="{{ asset('storage/' . $image->path) }}" alt="Blog Image">
                </div>
            @endforeach
        </div>
    @endif

    <p>{{ $blog->content }}</p>
    <p><strong>Writer:</strong> {{ $blog->writer_name }}</p>
    <p><strong>Last Updated:</strong> {{ $blog->updated_at->timezone('Asia/Colombo')->format('F j, Y, g:i a') }}</p>

    <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection
