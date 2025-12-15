<!DOCTYPE html>
<html lang="en">

<head> <!-- Adds web browser support meta tags for format and search algorithm-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="Oliver Scott Portfolio">
    <meta name="author" content="">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="shortcut icon" href="styles/images/OS_icon.png">
    <title>Oliver's Portfolio - Manage Page</title>
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
            <div class="manage_container">
                <div id="create_post_container">
                    <div id="post_create_topFormatting">                    <!--Post title -->
                        <label for="post-title">Post Title:</label>
                        <input type="text" id="post-title" name="post-title">
                        <!--Author-->
                        <label for="post-author">Author:</label>
                        <input type="text" id="post-author" name="post-author" value="Oliver Scott">
                        <!--Post Desc -->
                        <label for="post-description">Post Description:</label>
                        <textarea id="post-description" name="post-description" rows="4" cols="50" maxlength="150"></textarea>
                        <!--Post Content -->
                        <label for="post-content">content:</label>
                        <textarea id="post-content" name="post-content" rows="4" cols="50" minlength="500"></textarea>
                        <!--File Upload -->
                        <label for="file-upload">Choose a file to upload:</label>
                        <input type="file" id="file-upload" name="file-upload" multiple>
                    </div>
                    <!--tags checkbox -->
                    <input type="checkbox" id="Software" name="Software" value="Software">
                    <label for="Software"> Software</label><br>
                    <input type="checkbox" id="Engineering" name="Engineering" value="Engineering">
                    <label for="Engineering"> Engineering</label><br>
                    <input type="checkbox" id="Uni Project" name="Uni Project" value="Uni Project">
                    <label for="Uni Project"> Uni Project</label><br>
                    <input type="checkbox" id="Personal Project" name="Personal Project" value="Personal Project">
                    <label for="Personal Project"> Personal Project</label><br>
                    <input type="checkbox" id="Work Project" name="Work Project" value="Work Project">
                    <label for="Work Project"> Work Project</label><br>
                    <input type="checkbox" id="Group Project" name="Group Project" value="Group Project">
                    <label for="Group Project"> Group Project</label><br>
                    <input type="checkbox" id="Open Source" name="Open Source" value="Open Source">
                    <label for="Open Source"> Open Source</label><br>
                    <input type="checkbox" id="Robotics" name="Robotics" value="Robotics">
                    <label for="Robotics"> Robotics</label><br>
                    <input type="checkbox" id="Game Development" name="Game Development" value="Game Development">
                    <label for="Game Development"> Game Development</label><br>
                    <input type="checkbox" id="Code" name="Code" value="Code">
                    <label for="Code"> Code</label><br>
                    <!--Submit Button -->
                    <input type="submit" name="Publish" value="Publish Post">
                    <input type="reset" name="Reset" value="Reset Form">
                </div> <!--TODO: Format, validate, and allow for submission of post -->
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