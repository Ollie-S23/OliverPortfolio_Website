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
        <?php include('header.inc')?>
        </header>
        <main>
            <?php
                require_once("settings.php");

                $conn = mysqli_connect($host, $user, $pwd, $sql_db);

                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                    include('underconstruction_animation.inc');
                   echo  "<p> Error: Failed to connect to database server. Please try again later and contact support </p>";
                }
                $table_name = "posts";
                $query = "SELECT COUNT(*) AS total FROM $table_name";

                $result = mysqli_query($conn, $query);
                if ($result) {
                    $row = mysqli_fetch_assoc($result);
                    if ($row['total'] > 0) {
                        echo "<p>✅ Database contains {$row['total']} entries.</p>";
                    } else {
                        include('underconstruction_animation.inc');
                        echo  "<h3 class=\"construction-warning\"> There are no posts available at the moment.</h3>";
                    }
                    mysqli_free_result($result);
                } else {
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