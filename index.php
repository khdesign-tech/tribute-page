<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Simple Blog</title>
</head>
<body>
    <div id="app">

        <h1>Memorial Site for </h1>
        <!-- Add this image tag within the #app div in index.php -->
        <img id="memorial-image" src="Flower.webp" alt="Memorial Image">
     
        <form id="post-form">
            <input type="text" id="user-name" name="user_name" placeholder="Your Name">
            <textarea id="post-content" name="post_content" placeholder="Write your post..."></textarea>
            <button type="submit">Post</button>
        </form>
        <div id="post-feed">
            <?php include('get_posts.php'); ?>
        </div>
    </div>
    <script src="app.js"></script>
</body>
</html>

