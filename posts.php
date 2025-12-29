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
    <title>Oliver's Portfolio - Posts</title>
    <script type="text/javascript" src="darkmode.js" defer></script>
</head>
<?php session_start(); ?>
<body>
    <div class="page-wrapper">
        <header>
        <?php include('header.inc')?>
        </header>
        <main id="posts_main">
            <?php
                require_once("database.php");

                if (!$conn) {
                    include('underconstruction_animation.inc');
                    echo "<h3 class=\"posts_unavailable\"> Error: Failed to connect to database server. Please try again later and contact support. </h3>";
                    die(); // Now it safely stops after output
                }

                try { 

                    $sql = "SELECT * FROM posts"; // Establish a connection to the database
                    $result = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="post_main">';

                        echo '<span class="post_title">Title: ' . $row['title'] . '</span><br>' .
                            '<span class="post_description">Description: ' . $row['description'] . '</span><br>' .
                            '<span class="post_author">Author: ' . $row['author'] . '</span><br>' .
                            '<span class="post_content">Content: ' . $row['content'] . '</span><br>';
                            '<span class="post_postDate">Created At: ' . $row['created_at'] . '</span><br>';
                            $sqlCheckUpdate = "SELECT updated_at FROM posts WHERE id = " . $row['id'];
                            $updateResult = mysqli_query($conn, $sqlCheckUpdate);
                            $date = mysqli_fetch_assoc($updateResult);
                            if ($date['updated_at'] != null) {
                                echo " - Updated At: " . $date['updated_at'];
                                echo '<span class="post-updateDate">Updated At: ' . $date['updated_at'] . '</span><br>';
                            } else {
                                echo '<span class="post-updateDate">Updated At: Not Updated </span><br>';
                            }
                            echo "<br>";
                            $sqlCheckImages = "SELECT image_path FROM post_images WHERE post_id = " . $row['id'];
                            $imageResult = mysqli_query($conn, $sqlCheckImages);
                            while ($images = mysqli_fetch_assoc($imageResult))
                            {
                                $base64Image = $images['image_path'];

                                // Remove any accidental whitespace/newlines from the stored base64 string
                                $base64Image = trim($base64Image);

                                echo '<img class="post_imagesDISP" src="data:image/jpeg;base64,' . $base64Image . '" alt="">';
                            }
                            echo '<button class="prev" onclick="prevslide()">&#10094;</button>';
                            echo '<button class="next" onclick="nextslide()">&#10095;</button>';

                            echo "<br>";
                            $sqlCheckTags = "SELECT Category FROM post_categories WHERE post_id = " . $row['id'];
                            $tagResult = mysqli_query($conn, $sqlCheckTags);
                            echo "Tags: ";
                            while ($tags = mysqli_fetch_assoc($tagResult)) {
                                // echo $tags['Category'] . " ";
                                echo "<span class='post_tags'> " . $tags['Category'] . " </span>";
                            }
                            echo '</div>';

                            echo "<br><br>";
                            echo "<hr id='post-separator'>";
                    }


                } catch (Exception) { // If the query failed, display an error message and include the underconstruction animation
                    include('underconstruction_animation.inc');
                    echo  "<p> Error: Failed to connect to database server. Please try again later and contact support </p>";
                }

                mysqli_close($conn);
            ?>

        </main>
        <footer>
            <?php include('footer.inc')?>
        </footer>
    </div>
</body>
</html>