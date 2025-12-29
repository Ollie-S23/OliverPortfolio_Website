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
    <script type="text/javascript" src="script.js" defer></script>
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

                    while ($row = mysqli_fetch_assoc($result))
                    {
                        echo '<div class="post_main">';

                        echo '<div class="post_title">TITLE: ' . $row['title'] . '</div>';
                        echo '<div class="post_author">Author: ' . $row['author'] . '</div>';
                        echo '<div class="post_description">Description: ' . $row['description'] . '</div>';
                        echo '<div class="post_postDate">Posted: ' . $row['created_at'] . '</div>';

                        $sqlCheckUpdate = "SELECT updated_at FROM posts WHERE id = " . $row['id'];
                        $updateResult = mysqli_query($conn, $sqlCheckUpdate);
                        $date = mysqli_fetch_assoc($updateResult);

                        if ($date['updated_at'] != null)
                        {
                            echo '<div class="post_updateDate">Updated: ' . $date['updated_at'] . '</div>';
                        }
                        else
                        {
                            echo '<div class="post_updateDate">Updated: Not Updated</div>';
                        }

                        $sqlCheckImages = "SELECT image_path FROM post_images WHERE post_id = " . $row['id'];
                        $imageResult = mysqli_query($conn, $sqlCheckImages);

                        echo '<div class="slider post_images">';
                        echo '<div class="slides">';

                        while ($images = mysqli_fetch_assoc($imageResult))
                        {
                            $base64Image = trim($images['image_path']);
                            echo '<img src="data:image/jpeg;base64,' . $base64Image . '" alt="">';
                        }

                        echo '</div>';
                        echo '<button type="button" class="prev">&#10094;</button>';
                        echo '<button type="button" class="next">&#10095;</button>';
                        echo '</div>';

                        $sqlCheckTags = "SELECT Category FROM post_categories WHERE post_id = " . $row['id'];
                        $tagResult = mysqli_query($conn, $sqlCheckTags);

                        echo '<div class="post_tags">';
                        echo '<span class="tags_label">TAGS:</span> ';

                        while ($tags = mysqli_fetch_assoc($tagResult))
                        {
                            echo '<span class="tag">' . $tags['Category'] . '</span>';
                        }

                        echo '</div>';

                        echo '<div class="post_content">' . $row['content'] . '</div>';

                        echo '</div>'; // post_main
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