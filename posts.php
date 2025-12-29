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
        <main>
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
                        echo "User ID: " . $row['id'] .
                            " - Title: " . $row['title'] .
                            " - Description: " . $row['description'] . 
                            " - Author: " . $row['author'] .
                            " - Content: " . $row['content'] .
                            " - Created At: " . $row['created_at'];
                            $sqlCheckUpdate = "SELECT updated_at FROM posts WHERE id = " . $row['id'];
                            $updateResult = mysqli_query($conn, $sqlCheckUpdate);
                            $date = mysqli_fetch_assoc($updateResult);
                            if ($date['updated_at'] != null) {
                                echo " - Updated At: " . $date['updated_at'];
                            } else {
                                echo " - Not Updated";
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

                            echo "<br>";
                            $sqlCheckTags = "SELECT Category FROM post_categories WHERE post_id = " . $row['id'];
                            $tagResult = mysqli_query($conn, $sqlCheckTags);
                            echo "Tags: ";
                            while ($tags = mysqli_fetch_assoc($tagResult)) {
                                echo $tags['Category'] . " ";
                            }
                            echo "<br><br>";
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