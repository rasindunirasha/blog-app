<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog List</title>
    <link rel="stylesheet" href="{{ asset('css/indexStyle.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <div class="container">
        <!-- Create New Blog Button at the top right corner -->
        <a href="{{ route('blogs.create') }}" class="create-blog-btn">Create New Blog</a>

        <h1>Blogs</h1>

        <!-- Display success message -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <ul>
            @foreach($blogs as $blog)
                <li>
                    <h2>{{ $blog->title }}</h2>
                    <p>{{ $blog->content }}</p>
                    <p><strong>Written by:</strong> {{ $blog->writer_name }}</p>

                    <a href="{{ route('blogs.show', $blog->id) }}" class="btn btn-view">
                    <i class="fas fa-eye"></i> 
                    </a>

                    <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-edit">
                    <i class="fas fa-edit"></i> 
                    </a>

                    <!-- Delete Form -->
                    <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" class="delete-form">
                      @csrf
                      @method('DELETE')
                    <button type="submit" class="btn-delete">
                     <i class="fas fa-trash"></i>
                    </button>
                    </form>

                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
