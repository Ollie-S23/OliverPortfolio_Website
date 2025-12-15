<!DOCTYPE html>
<html lang="en">

<head> <!-- Adds web browser support meta tags for format and search algorithm-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="The Optional Group">
    <meta name="author" content="">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="shortcut icon" href="styles/images/OS_icon.png">
    <title>The Optional Group</title>
    <script type="text/javascript" src="darkmode.js" defer></script>
</head>
<?php session_start(); ?>

<body>
    <div class="page-wrapper">
        <header>
            <?php include('header.inc') ?>
        </header>
        <main>
            <p class="manage_posts-p"> Welcome to the Manage Posts page. Here you can view and manage your posts.</p>
            <div class="manage_container">
                <?php // TODO: Add functionality to manage posts, such as editing or deleting them. 
                ?>
                <p> This page is currently under construction. Please check back later for updates.</p>
                <input type="submit" name="Create" value="Create Post">
            </div>
            <div class="manage_container">Hello Hello
                <label for="post-title">Post Title:</label>
                <input type="text" id="post-title" name="post-title">

                <label for="post-description">Post Description:</label>
                <textarea id="post-description" name="post-description" rows="4" cols="50" maxlength="150"></textarea>

                <label for="post-content">content:</label>
                <textarea id="post-content" name="post-content" rows="4" cols="50" minlength="500"></textarea>

                <label for="post-links">content:</label>
                <textarea id="post-links" name="post-links" rows="4" cols="50" minlength="500"></textarea>

                <label for="file-upload">Choose a file to upload:</label>
                <input type="file" id="file-upload" name="file-upload" multiple>
            </div>
            <!-- Title 
            Date of Creation 
            Date of Edit
            Image(s) - file upload 
            Description 
            Any external links
            Author - Const “Oliver Scott”
            Tags 
            Categories 
            Summary Text-->
        </main>
        <footer>
            <?php include('footer.inc') ?>
        </footer>
    </div>
</body>

</html>