    <!-- resources/views/blogs/create.blade.php

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create Blog</title>
        <link rel="stylesheet" href="{{ asset('css/createStyle.css') }}">
    </head>
    <body>
        <div class="container">
            <h1>Create New Blog</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('blogs.store') }}" method="POST">
                @csrf  

                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" placeholder="Enter blog title" value="{{ old('title') }}">
                </div>

                <div class="form-group">
                    <label for="content">Content:</label>
                    <textarea name="content" id="content" placeholder="Write your blog content here">{{ old('content') }}</textarea>
                </div>

                <div class="form-group">
                    <label for="writer_name">Writer Name:</label>
                    <input type="text" name="writer_name" id="writer_name" placeholder="Enter your name" value="{{ old('writer_name') }}">
                </div>

                <button type="submit" class="btn btn-submit">Create Blog</button>
            </form>

            <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Back to Blog List</a>
        </div>
    </body>
    </html> -->

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create Blog</title>
        <link rel="stylesheet" href="{{ asset('css/createStyle.css') }}">
        <style>
            .image-preview {
                display: flex;
                flex-wrap: wrap;
                gap: 10px;
                margin-top: 10px;
            }
            .image-preview img {
                max-width: 150px;
                max-height: 150px;
                border: 1px solid #ddd;
                border-radius: 4px;
                padding: 5px;
            }
            .remove-image {
                cursor: pointer;
                color: red;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Create New Blog</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf  

                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" placeholder="Enter blog title" value="{{ old('title') }}">
                </div>

                <div class="form-group">
                    <label for="content">Content:</label>
                    <textarea name="content" id="content" placeholder="Write your blog content here">{{ old('content') }}</textarea>
                </div>

                <div class="form-group">
                    <label for="writer_name">Writer Name:</label>
                    <input type="text" name="writer_name" id="writer_name" placeholder="Enter your name" value="{{ old('writer_name') }}">
                </div>

                <div class="form-group">
                    <label for="images">Upload Images:</label>
                    <input type="file" name="images[]" id="images" multiple accept="image/*">
                    <div class="image-preview" id="imagePreview"></div>
                </div>

             <div class="form-actions">
              <a href="#" class="btn btn-back"><i class="fas fa-arrow-left"></i>Back to List</a>
            <button type="submit" class="btn btn-submit"><i class="fas fa-paper-plane"></i>Create</button>
             </div>

        <script>
            document.getElementById('images').addEventListener('change', function(event) {
                const preview = document.getElementById('imagePreview');
                preview.innerHTML = '';
                
                const files = event.target.files;
                
                for (let i = 0; i < files.length; i++) {
                    const file = files[i];
                    if (!file.type.match('image.*')) continue;
                    
                    const reader = new FileReader();
                    
                    reader.onload = function(e) {
                        const imgContainer = document.createElement('div');
                        imgContainer.style.position = 'relative';
                        imgContainer.style.display = 'inline-block';
                        
                        const img = document.createElement('img');
                        img.src = e.target.result;
                        
                        const removeBtn = document.createElement('span');
                        removeBtn.className = 'remove-image';
                        removeBtn.innerHTML = '&times;';
                        removeBtn.style.position = 'absolute';
                        removeBtn.style.top = '0';
                        removeBtn.style.right = '0';
                        removeBtn.style.background = 'white';
                        removeBtn.style.padding = '2px 5px';
                        removeBtn.style.borderRadius = '50%';
                        removeBtn.style.cursor = 'pointer';
                        
                        removeBtn.addEventListener('click', function() {
                            imgContainer.remove();
                            // You might want to handle the actual file removal from the form data here
                        });
                        
                        imgContainer.appendChild(img);
                        imgContainer.appendChild(removeBtn);
                        preview.appendChild(imgContainer);
                    }
                    
                    reader.readAsDataURL(file);
                }
            });
        </script>
    </body>
    </html>
