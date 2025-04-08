    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Blog</title>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <style>
            /* Edit Blog Form Styles */
          /* Body with animated gradient background */
      /* Body with vibrant animated gradient */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(-45deg, #ff9a9e, #fad0c4, #a18cd1, #fbc2eb);
            background-size: 400% 400%;
            animation: backgroundMove 12s ease infinite;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #333;
        }

        /* Animated background keyframes */
        @keyframes backgroundMove {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Container with premium look and animation */
        .container {
            width: 40%;
            max-width: 1100px;
            padding: 50px;
            margin: 60px auto;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-radius: 25px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            border: 2px solid rgba(255, 255, 255, 0.3);
            animation: fadeInUp 1.2s ease forwards;
            transform: translateY(50px);
            opacity: 0;
            transition: all 0.4s ease-in-out;
            color: #fff;
        }

        /* Fade-in animation */
        @keyframes fadeInUp {
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }



            h1 {
                font-family: 'Playfair Display', serif;
                color: #333;
                text-align: center;
                margin-bottom: 30px;
                font-size: 45px;
                position: relative;
            }

            h1::after {
                content: '';
                display: block;
                width: 60px;
                height: 3px;
                background: #4CAF50;
                margin: 15px auto 0;
            }

            .form-group {
                margin-bottom: 25px;
            }

            .form-group label {
                display: block;
                margin-bottom: 8px;
                font-weight: 500;
                color: #555;
            }

            .form-control {
                width: 100%;
                padding: 12px;
                border: 1px solid #ddd;
                border-radius: 6px;
                font-family: 'Poppins', sans-serif;
                font-size: 16px;
                transition: all 0.3s;
            }

            .form-control:focus {
                border-color: #4CAF50;
                outline: none;
                box-shadow: 0 0 5px rgba(76, 175, 80, 0.3);
            }

            textarea.form-control {
                min-height: 200px;
                resize: vertical;
                line-height: 1.6;
            }

            /* Image Display Styles */
            .current-images {
                display: flex;
                flex-wrap: wrap;
                gap: 15px;
                margin-top: 10px;
            }

            .image-item {
                position: relative;
                border: 1px solid #eee;
                border-radius: 4px;
                padding: 5px;
                background: #f9f9f9;
            }

            .image-item img {
                width: 100px;
                height: 100px;
                object-fit: cover;
                display: block;
            }

            /* Button Styles */
            /* Button base */
            .btn {
                padding: 12px 28px;
                border-radius: 8px;
                font-weight: 600;
                font-size: 16px;
                border: none;
                cursor: pointer;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                transition: all 0.3s ease;
                text-decoration: none;
                position: relative;
                overflow: hidden;
            }

            /* Primary button - glowing gradient */
            .btn-primary {
                background: linear-gradient(135deg, #00c9ff, #92fe9d);
                color: black;
                box-shadow: 0 4px 15px rgba(0, 201, 255, 0.4);
            }

            .btn-primary:hover {
                transform: translateY(-2px);
                box-shadow: 0 8px 20px rgba(0, 201, 255, 0.5);
            }

            /* Subtle back button */
            .btn-back {
                background-color: #f1f1f1;
                color: #333;
                border: 1px solid #ccc;
            }

            .btn-back:hover {
                background-color: #e0e0e0;
                transform: translateY(-2px);
                box-shadow: 0 6px 10px rgba(0, 0, 0, 0.08);
            }

            /* Click effect */
            .btn:active {
                transform: translateY(1px);
                box-shadow: none;
            }

            /* Optional glowing effect (add to .btn-primary for extra drama) */
            .btn-primary::after {
                content: "";
                position: absolute;
                top: -50%;
                left: -50%;
                width: 200%;
                height: 200%;
                background: radial-gradient(circle at center, rgba(255, 255, 255, 0.2), transparent);
                transform: rotate(45deg);
                animation: shine 2s infinite linear;
                pointer-events: none;
            }

            @keyframes shine {
                0% { transform: translateX(-100%) rotate(45deg); }
                100% { transform: translateX(100%) rotate(45deg); }
            }


            /* Alert Styles */
            .alert-danger {
                background-color: #ffebee;
                color: #c62828;
                padding: 15px;
                border-radius: 6px;
                margin-bottom: 25px;
                border-left: 4px solid #c62828;
            }

            .alert-danger ul {
                margin: 0;
                padding-left: 20px;
                list-style-type: none;
            }

            /* Responsive Design */
            @media (max-width: 768px) {
                .container {
                    margin: 20px;
                    padding: 20px;
                }
                
                .form-footer {
                    flex-direction: column-reverse;
                    gap: 15px;
                }
                
                .btn {
                    width: 100%;
                    justify-content: center;
                }
                
                .current-images {
                    justify-content: center;
                }
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Edit Blog</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" value="{{ old('title', $blog->title) }}" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" rows="5" class="form-control" required>{{ old('content', $blog->content) }}</textarea>
                </div>

                <div class="form-group">
                    <label for="writer_name">Writer Name</label>
                    <input type="text" name="writer_name" id="writer_name" value="{{ old('writer_name', $blog->writer_name) }}" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="images">Upload New Images</label>
                    <input type="file" name="images[]" id="images" class="form-control" multiple>
                    <small class="text-muted">Select multiple images by holding Ctrl (Windows) or Command (Mac)</small>
                </div>

                @if($blog->images->count() > 0)
                    <div class="form-group">
                        <label>Current Images:</label>
                        <div class="current-images">
                            @foreach($blog->images as $image)
                                <div class="image-item">
                                    <img src="{{ asset('storage/' . $image->path) }}" alt="Blog Image">
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                <div class="form-footer">
                    <a href="{{ route('blogs.index') }}" class="btn btn-back">
                        <i class="fas fa-arrow-left"></i> Back to List
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Update Blog
                    </button>
                </div>
            </form>
        </div>
    </body>
    </html>