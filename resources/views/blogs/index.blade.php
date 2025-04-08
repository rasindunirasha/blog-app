    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Platform</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
    /* Base Styles */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color:rgb(248, 226, 221);
            color: #333;
            overflow-x: hidden;
        }

        /* Hero Section with Animation */
        .hero {
            background: linear-gradient(135deg, #ff9a9e 0%, #fad0c4 100%);
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path fill="rgba(255,255,255,0.1)" d="M0,0 L100,0 L100,100 L0,100 Z" /></svg>');
            background-size: 50px 50px;
            opacity: 0.3;
            animation: movePattern 20s linear infinite;
        }

        @keyframes movePattern {
            0% { background-position: 0 0; }
            100% { background-position: 50px 50px; }
        }

        .hero-content {
            max-width: 800px;
            padding: 0 20px;
            z-index: 1;
            animation: fadeInUp 1s ease-out;
        }

        h1 {
            font-family: 'Playfair Display', serif;
            font-size: 3.5rem;
            margin-bottom: 1rem;
            color: #333;
        }

        .subtitle {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            color: #555;
        }

        .cta-button {
            display: inline-block;
            padding: 15px 30px;
            background-color: #333;
            color: white;
            text-decoration: none;
            border-radius: 30px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            animation: pulse 2s infinite;
        }

        .cta-button:hover {
            background-color: #555;
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0,0,0,0.15);
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Enhanced Blog List Styles */
        .blog-list-section {
        background: linear-gradient(135deg, #3498db, #8e44ad); /* Blue to Purple gradient */
        padding: 40px 20px;
        border-radius: 12px;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        color: white;
        margin-bottom: 50px;
        animation: fadeIn 1.5s ease-out;
    }
    .container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 80px 20px;
    }

    .container h1 {
        font-family: 'Playfair Display', serif;
        font-size: 3.5rem;
        text-align: center;
        margin-bottom: 70px;
        color: #222;
        position: relative;
    }

    .container h1:after {
        content: '';
        position: absolute;
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, #ff6ec4 0%, #7873f5 100%);
        bottom: -15px;
        left: 50%;
        transform: translateX(-50%);
        border-radius: 2px;
    }

    .blog-list {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(360px, 1fr));
        gap: 40px;
        padding: 0;
        list-style: none;
        animation: fadeInUp 1s ease;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(40px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .blog-item {
        background: linear-gradient(145deg,rgb(255, 255, 255),rgb(255, 255, 255));
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
        transition: transform 0.4s ease, box-shadow 0.4s ease;
        position: relative;
        animation: floatUp 0.7s ease-in-out;
    }

    @keyframes floatUp {
        0% {
            transform: translateY(20px);
            opacity: 0;
        }
        100% {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .blog-item:hover {
        transform: scale(1.03);
        box-shadow: 0 30px 60px rgba(0, 0, 0, 0.15);
    }

    .blog-thumbnail {
        height: 220px;
        overflow: hidden;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    }

    .blog-thumbnail img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .blog-item:hover .blog-thumbnail img {
        transform: scale(1.1);
    }

    .blog-content-wrapper {
        padding: 30px;
        background: beige;
        border-radius: 0 0 20px 20px;
    }

    .blog-item h2 {
        font-family: 'Poppins', sans-serif;
        font-size: 1.5rem;
        margin-bottom: 20px;
        color: #333;
        position: relative;
        padding-bottom: 10px;
    }

    .blog-item h2:after {
        content: '';
        position: absolute;
        width: 60px;
        height: 3px;
        background: linear-gradient(90deg, #f7971e, #ffd200);
        bottom: 0;
        left: 0;
        border-radius: 2px;
    }

    .blog-content {
        font-size: 1rem;
        color: #555;
        line-height: 1.7;
        margin-bottom: 20px;
        display: -webkit-box;
        -webkit-line-clamp: 4;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .blog-author {
        display: flex;
        align-items: center;
        font-size: 0.9rem;
        color: #777;
        margin-bottom: 20px;
    }

    .blog-author::before {
        content: '';
        width: 26px;
        height: 26px;
        margin-right: 10px;
        border-radius: 50%;
        background: linear-gradient(to right, #f7971e, #ffd200);
        mask-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" fill="%23000" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>');
        mask-size: 60%;
        mask-position: center;
        mask-repeat: no-repeat;
    }

    .blog-actions {
        display: flex;
        justify-content: space-between;
        padding-top: 15px;
        gap: 10px;
    }

    .btn {
        padding: 10px 18px;
        border-radius: 25px;
        font-size: 0.9rem;
        font-weight: 600;
        color: #fff;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.2);
    }

    .btn-view {
        background: linear-gradient(90deg,rgb(195, 220, 220) 0%,rgb(141, 90, 142) 100%);
    }

    .btn-edit {
        background: linear-gradient(90deg, #43e97b 0%, #38f9d7 100%);
    }

    .btn-delete {
        background: linear-gradient(90deg, #ff6a00 0%, #ee0979 100%);
    }

        /* Category/Tag Badges */
        .blog-tags {
            position: absolute;
            top: 15px;
            right: 15px;
            display: flex;
            gap: 8px;
        }

        .tag {
            background: rgba(255,255,255,0.9);
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.7rem;
            font-weight: 600;
            color: #2d3436;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        /* Date Badge */
        .blog-date {
            position: absolute;
            top: 15px;
            left: 15px;
            background: rgba(0,0,0,0.7);
            color: white;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        /* Pagination Styles */
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 60px;
            gap: 10px;
        }

        .pagination a, 
        .pagination span {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: white;
            color: #2d3436;
            text-decoration: none;
            font-weight: 600;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }

        .pagination a:hover {
            background: #0984e3;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.1);
        }

        .pagination .active {
            background: linear-gradient(135deg, #ff9a9e 0%, #fad0c4 100%);
            color: white;
        }

        /* Alert Styles */
        .alert-success {
            color: black;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
            text-align: center;
            animation: fadeInOut 3s ease-in-out forwards;
        
        
        }

        @keyframes fadeInOut {
            0% { opacity: 0; transform: translateY(-20px); }
            10% { opacity: 1; transform: translateY(0); }
            90% { opacity: 1; transform: translateY(0); }
            100% { opacity: 0; transform: translateY(-20px); }
        }

        /* Sign In Link */
        .sign-in {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 10;
        }

        .sign-in a {
            color: #333;
            text-decoration: none;
            font-weight: 600;
            padding: 8px 15px;
            border-radius: 20px;
            background-color: rgba(255,255,255,0.7);
            transition: all 0.3s ease;
        }

        .sign-in a:hover {
            background-color: rgba(255,255,255,0.9);
        }

        /* Join Section */
        .join-section {
            background-color:rgb(247, 231, 215);
            padding: 80px 20px;
            text-align: center;
            margin: 60px 0;
            font-family: 'Poppins', sans-serif;
        }

        .join-container {
            max-width: 650px;
            margin: 0 auto;
        }

        .join-section h2 {
            font-size: 2.5rem;
            color: #202124;
            margin-bottom: 20px;
            font-weight: 600;
            line-height: 1.3;
        }

        .join-section p {
            font-size: 1.1rem;
            color: #5f6368;
            line-height: 1.7;
            margin-bottom: 30px;
        }

        .join-cta {
            display: inline-block;
            padding: 14px 32px;
            background-color: #1a73e8;
            color: white;
            font-weight: 500;
            font-size: 1.05rem;
            text-decoration: none;
            border-radius: 4px;
            transition: all 0.3s ease;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            border: none;
            cursor: pointer;
        }

        .join-cta:hover {
            background-color: #1765cc;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.15);
        }

        /* Footer Styles */
        .footer {
        background-color: #111827; /* dark background */
        color: #d1d5db; /* light text */
        padding: 60px 20px;
        font-family: 'Poppins', sans-serif;
        font-size: 0.95rem;
        border-top: 4px solid #1f2937; /* thicker separator */
        }

        .footer-container {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 40px;
        }

        .footer-column h3 {
        color: #f9fafb;
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 20px;
        position: relative;
        }

        .footer-column h3::after {
        content: "";
        display: block;
        width: 40px;
        height: 3px;
        background-color: #3b82f6;
        margin-top: 10px;
        border-radius: 2px;
        }

        .footer-links {
        list-style: none;
        padding: 0;
        margin: 0;
        }

        .footer-links li {
        margin-bottom: 12px;
        }

        .footer-links a {
        color: #9ca3af;
        text-decoration: none;
        transition: all 0.3s ease;
        display: inline-block;
        position: relative;
        }

        .footer-links a:hover {
        color: #3b82f6;
        transform: translateX(5px);
        }

        .footer-bottom {
        margin-top: 50px;
        padding-top: 30px;
        border-top: 1px solid #374151;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
        font-size: 0.85rem;
        color: #9ca3af;
        }

        .footer-legal {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        }

        .footer-legal a {
        color: #9ca3af;
        text-decoration: none;
        transition: color 0.3s ease;
        }

        .footer-legal a:hover {
        color: #3b82f6;
        }

        .footer-language {
        font-weight: 400;
        color: #9ca3af;
        }


        /* Responsive Design */
        @media (max-width: 768px) {
            .container h1 {
                font-size: 2.2rem;
            }
            
            .blog-list {
                grid-template-columns: 1fr;
            }
            
            .blog-thumbnail {
                height: 180px;
            }
            
            .hero-content h1 {
                font-size: 2.5rem;
            }
            
            .subtitle {
                font-size: 1.2rem;
            }
            
            .join-section {
                padding: 60px 20px;
                margin: 40px 0;
            }
            
            .join-section h2 {
                font-size: 2rem;
            }
            
            .join-section p {
                font-size: 1rem;
            }
            
            .join-cta {
                padding: 12px 28px;
                font-size: 1rem;
            }
            
            .footer-container {
                grid-template-columns: 1fr;
            }
            
            .footer-bottom {
                flex-direction: column;
                gap: 15px;
                align-items: flex-start;
            }
        }
        </style>
    </head>
    <body>
    <!-- Sign In Link -->
    <div class="sign-in">
    <a href="#">Home</a>
    </div>

    <!-- Hero Section -->
    <section class="hero">
    <div class="hero-content">
        <h1>Publish your passions, your way</h1>
        <p class="subtitle">Create a unique and beautiful blog easily.</p>
        <a href="{{ route('blogs.create') }}" class="cta-button">CREATE YOUR BLOG</a>
    </div>
    </section>

    <!-- Blog List Section -->
    <div class="container">
    <h1>Blogs</h1>

    <!-- Display success message -->
    @if(session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
    @endif

    <ul class="blog-list">
        @foreach($blogs as $blog)
            <li class="blog-item">
                <!-- Date Badge -->
                <div class="blog-date">
                    {{ $blog->created_at->format('M d') }}
                </div>
                
                <!-- Tags -->
                <div class="blog-tags">
                    <span class="tag">Travel</span>
                    <span class="tag">Lifestyle</span>
                </div>
                
                {{-- Display the first image if available --}}
                @if ($blog->images->first())
                    <div class="blog-thumbnail">
                        <img src="{{ asset('storage/' . $blog->images->first()->path) }}" alt="Blog Image">
                    </div>
                @endif

                <div class="blog-content-wrapper">
                    <h2>{{ $blog->title }}</h2>
                    <p class="blog-content">{{ $blog->content }}</p>
                    <p class="blog-author"><strong>Written by:</strong> {{ $blog->writer_name }}</p>

                    <div class="blog-actions">
                        <a href="{{ route('blogs.show', $blog->id) }}" class="btn btn-view" title="View">
                            <i class="fas fa-eye"></i> 
                        </a>
                        <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-edit" title="Edit">
                            <i class="fas fa-edit"></i> 
                        </a>

                        <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" class="delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-delete" title="Delete" onclick="return confirm('Are you sure you want to delete this blog?')">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>

    <!-- Pagination -->
    <div class="pagination">
        <a href="#">&laquo;</a>
        <a href="#" class="active">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
        <a href="#">&raquo;</a>
    </div>
    </div>

    <!-- Join Section -->
    <section class="join-section">
    <div class="join-container">
        <h2>Join millions of others</h2>
        <p>
        Whether sharing your expertise, breaking news, or whatever's on your mind, 
        you're in good company on Blogger. Sign up to discover why millions of 
        people have published their passions here.
        </p>
        <a href="{{ route('blogs.create') }}" class="join-cta">CREATE YOUR BLOG</a>
    </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
    <div class="footer-container">
        <div class="footer-column">
            <h3>Help</h3>
            <ul class="footer-links">
                <li><a href="#">Help Center</a></li>
                <li><a href="#">Help Forum</a></li>
                <li><a href="#">Video Tutorials</a></li>
            </ul>
        </div>
        
        <div class="footer-column">
            <h3>Community</h3>
            <ul class="footer-links">
                <li><a href="#">Blogger Buzz</a></li>
                <li><a href="#">Developer Forum</a></li>
            </ul>
        </div>
        
        <div class="footer-column">
            <h3>Developers</h3>
            <ul class="footer-links">
                <li><a href="#">Blogger API</a></li>
            </ul>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="footer-legal">
            <a href="#">Terms of Service</a>
            <a href="#">Privacy</a>
            <a href="#">Content Policy</a>
        </div>
        <div class="footer-language">
            English
        </div>
    </div>
    </footer>

    <script>
    // Animation for blog items when they come into view
    document.addEventListener('DOMContentLoaded', function() {
        const blogItems = document.querySelectorAll('.blog-item');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = 'running';
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });
        
        blogItems.forEach(item => {
            observer.observe(item);
            item.style.animation = 'slideUp 0.8s forwards';
            item.style.animationPlayState = 'paused';
        });
    });

   
    
    </script>
    </body>
    </html>