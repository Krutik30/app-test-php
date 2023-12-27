<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Blog</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            padding-top: 60px;
            background-color: #f9f9f9;
            color: #333;
            line-height: 1.6;
            height: 100vh;
        }

        .navbar {
            position: sticky;
            top: 0;
            width: 100%;
            background-color: #333;
            color: white;
            padding: 15px 20px;
            text-align: center;
        }

        .footer {
            position: sticky;
            bottom: 0;
            width: 100%;
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
        }

        .content {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            overflow-y: auto;
            /* Enable vertical scroll if content exceeds container height */
            max-height: calc(100vh - 120px);
            /* Set maximum height for scrollable content */
        }

        /* Style for blog post boxes */
        .blog-post {
            border: 1px solid #ccc;
            margin-bottom: 20px;
            padding: 15px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            background-color: #fff;
        }

        .blog-post:hover {
            background-color: #f0f0f0;
        }

        .blog-post h2 {
            margin-top: 0;
            margin-bottom: 10px;
            color: #333;
        }

        .blog-post p {
            margin-top: 0;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <h1>Krutik</h1>
    </div>

    <!-- Content of your blog post -->
    <div class="content">
        <div class="blog-post" onclick="window.location.href='/post/my-first-post'">
            <h2>Blog Post 1 Title</h2>
            <p>This is a summary of Blog Post 1 content...</p>
        </div>

        <div class="blog-post" onclick="window.location.href='/post/my-second-post'">
            <h2>Blog Post 2 Title</h2>
            <p>This is a summary of Blog Post 2 content...</p>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2023 Your Name. All Rights Reserved.</p>
    </div>
</body>

</html>