<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Blog</title>
    <link rel="stylesheet" href="{{ asset('css/editStyle.css') }}">
</head>
<body>
    <div class="container">
        <h1>Edit Blog</h1>

        <!-- Display validation errors -->
        @if ($errors->any())
            <div class="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Edit Blog Form -->
        <form action="{{ route('blogs.update', $blog->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" value="{{ old('title', $blog->title) }}" required>
            </div>

            <div class="form-group">
                <label for="content">Content:</label>
                <textarea name="content" required>{{ old('content', $blog->content) }}</textarea>
            </div>

            <div class="form-group">
                <label for="writer_name">Writer Name:</label>
                <input type="text" name="writer_name" value="{{ old('writer_name', $blog->writer_name) }}" required>
            </div>

            <!-- Update Button -->
            <button type="submit" class="btn-submit">Update Blog</button>
        </form>

        <!-- Back to Blog List Button -->
        <a href="{{ route('blogs.index') }}" class="btn-secondary">Back to Blog List</a>
    </div>
</body>
</html>
