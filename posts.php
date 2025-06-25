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

                $conn = mysqli_connect($host, $user, $pwd, $sql_db); // Establish a connection to the database

                if (!$conn) { // Check if the connection was successful
                    // If the connection failed, display an error message and include the underconstruction animation
                    die("Connection failed: " . mysqli_connect_error());
                    include('underconstruction_animation.inc');
                   echo  "<p> Error: Failed to connect to database server. Please try again later and contact support </p>";
                }
                // If the connection was successful, proceed to check the database for entries
                $table_name = "posts"; // Specify the table name to check for entries
                $query = "SELECT COUNT(*) AS total FROM $table_name"; // Create a query to count the total number of entries in the specified table

                $result = mysqli_query($conn, $query); // Execute the query
                if ($result) {
                    $row = mysqli_fetch_assoc($result); // Fetch the result as an associative array
                    if ($row['total'] > 0) { // Check if there are any entries in the table
                        echo "<p>✅ Database contains {$row['total']} entries.</p>";
                    } else { // If there are no entries, display a message indicating that the database is empty
                        include('underconstruction_animation.inc');
                        echo  "<h3 class=\"construction-warning\"> There are no posts available at the moment.</h3>";
                    }
                    mysqli_free_result($result); // Free the result set to free up resources
                } else { // If the query failed, display an error message and include the underconstruction animation
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