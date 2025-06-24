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
            <table class="social_banner"> 
                <caption>Reach Out Across My Platforms</caption>
                <tbody>
                    <tr>
                    <td><a class="social-links" href="https://instagram.com" target="_blank">Instagram</a></td>
                    <td><img class="social-icon" src="styles/images/Instagram-Icon.png" alt="Instagram logo" title="Instagram" loading="lazy"></td>
                    </tr>
                    <tr>
                     <td><a class="social-links" href="https://x.com" target="_blank">X (Twitter)</a></td>
                    <td><img class="social-icon" src="styles/images/twitter-x.png" alt="X logo" title="X" loading="lazy"></td>
                    </tr>
                    <tr>
                     <td><a class="social-links" href="https://youtube.com" target="_blank">YouTube</a></td>
                    <td><img class="social-icon" src="styles/images/youtube-logo-png-46016-1.png" alt="YouTube logo" title="YouTube" loading="lazy"></td>
                    </tr>
                    <tr>
                     <td><a class="social-links" href="https://au.linkedin.com/" target="_blank">Linked In</a></td>
                    <td><img class="social-icon" src="styles/images/linkedin.png" alt="Linked In logo" title="Linked In" loading="lazy"></td>
                    </tr>
                </tbody>
            </table>
        </main>
        <footer>
            <?php include('footer.inc')?>
        </footer>
    </div>
</body>
</html>